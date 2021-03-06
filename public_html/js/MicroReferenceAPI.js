var MicroReferenceAPI = {};

MicroReferenceAPI.MicroReference = function (
        criteria_id,
        name,
        email,
        relationship,
        observed_from_date,
        observed_until_date,
        experience_level,
        story
        ) {
    this.criteria_id = criteria_id;
    this.name = name;
    this.email = email;
    this.relationship = relationship;
    this.observed_from_date = observed_from_date;
    this.observed_until_date = observed_until_date;
    this.experience_level = experience_level;
    this.story = story;

    /**
     * Return true if it is safe to save this to the server
     * @return {Boolean}
     */
    this.isValid = function () {
        //All fields except story must be non-empty strings.
        //Story must be defined, but may be empty
        return (this.criteria_id != false &&
                this.name != false &&
                this.email != false &&
                this.relationship != false &&
                this.observed_from_date != false &&
                this.observed_until_date != false &&
                this.experience_level != false &&
                this.story !== undefined);
    };
};

MicroReferenceAPI.parseApplicationMicroReferenceResponse = function (responseJson) {
    var references = [];
    for (var i = 0; i < responseJson.length; i++) {
        var item = responseJson[i];
        var itemRef = item.micro_reference;

        var criteria_id = item.criteria_id;
        var name = itemRef.micro_reference_name;
        var email = itemRef.micro_reference_email;
        var relationship = itemRef.relationship;
        var observed_from_date = itemRef.observed_from_date;
        var observed_until_date = itemRef.observed_until_date;
        var experience_level = itemRef.experience_level;
        var story = itemRef.micro_reference_story;

        var ref = new MicroReferenceAPI.MicroReference(criteria_id, name, email,
                relationship, observed_from_date, observed_until_date,
                experience_level, story);
        references.push(ref);
    }
    return references;
};

MicroReferenceAPI.loadSavedMicroReferencesForJobApplication = function (jobApplicationId) {
    DataAPI.getMicroReferencesForApplication(jobApplicationId, function (request) {
        //Check that request returned a valid response
        if (request.status === 200 && request.response) {
            var references = MicroReferenceAPI.parseApplicationMicroReferenceResponse(JSON.parse(request.response));
            MicroReferenceAPI.populateApplicationUiMicroReferences(references);
        }
    });
};

MicroReferenceAPI.populateApplicationUiMicroReferences = function (references) {
    for (var i = 0; i < references.length; i++) {
        var ref = references[i];
        //find appropriate Evidence Panel
        var panel = document.querySelector('.applicant-evidence__accordion-wrapper[data-criteria-id="' + ref.criteria_id + '"]');
        //if panel exists, set saved values
        if (panel) {
            var name = panel.querySelector('input[name=\"reference_name\"]');
            if (name) {
                name.value = ref.name;
            }
            var email = panel.querySelector('input[name=\"reference_email\"]');
            if (email) {
                email.value = ref.email;
            }
            var relationship = panel.querySelector('select[name=\"reference_relationship\"]');
            if (relationship) {
                relationship.value = ref.relationship;
            }
            var from_date = panel.querySelector('input[name=\"reference_from_date\"]');
            if (from_date) {
                from_date.value = ref.observed_from_date;
            }
            var until_date = panel.querySelector('input[name=\"reference_until_date\"]');
            if (until_date) {
                until_date.value = ref.observed_until_date;
            }
            var exp_level = panel.querySelector('select[name=\"reference_exp_level\"]');
            if (exp_level) {
                exp_level.value = ref.experience_level;
            }
            var story = panel.querySelector('textarea[name=\"reference_story\"]');
            if (story) {
                story.value = ref.story;
            }

            //Run status change handler, because declartion may now be complete
            MicroReferenceAPI.onStatusChange(ref.criteria_id);
        }
    }
};

MicroReferenceAPI.populateApplicationPreviewUiMicroReferences = function (references) {
    for (var i=0; i<references.length; i++) {
        var ref = references[i];
        //find appropriate Evidence Panel
        var panel = document.querySelector('.applicant-evidence-preview__accordion-wrapper[data-criteria-id="' + ref.criteria_id + '"]');
        //if panel exists, set saved values
        if (panel) {
            var name = panel.querySelector('.applicant-evidence-preview__reference-name');
            if (name) {
                name.innerHTML = ref.name;
            }
            /*
             var email = panel.querySelector('input[name=\"reference_email\"]');
             if (email) {
             email.value = ref.email;
             }
             */
            var relationship = panel.querySelector('.applicant-evidence-preview__reference-relationship');
            if (relationship) {
                relationship.innerHTML = ref.relationship;
            }
            var from_date = panel.querySelector('.applicant-evidence-preview__reference-start-date');
            if (from_date) {
                from_date.innerHTML = ref.observed_from_date;
            }
            var until_date = panel.querySelector('.applicant-evidence-preview__reference-end-date');
            if (until_date) {
                until_date.innerHTML = ref.observed_until_date;
            }
            /*
             var exp_level = panel.querySelector('select[name=\"reference_exp_level\"]');
             if (exp_level) {
             exp_level.value = ref.experience_level;
             }
             */
            var story = panel.querySelector('.applicant-evidence-preview__reference-copy');
            if (story) {
                story.innerHTML = ref.story;
            }

            //Hide null-response, and show data
            var refContent = panel.querySelector('.applicant-evidence-preview__reference-content');
            refContent.classList.remove("hidden");
            var nullResponse = panel.querySelector('.applicant-evidence-preview__reference-null');
            nullResponse.classList.add("hidden");
        }
    }
};


/**
 * Saves all completed references for criteria of given type,
 * while Deleteing all incomplete references of the given type.
 *
 * If criteriaType is undefined, it saves/deletes ALL completed skill declarations.
 *
 * Call onSuccess if all microreferences are saved/deleted successfully
 * Call onFailure if some/all requests returned with unexpected status
 *
 * @param {string} criteriaType
 * @param {function} onSuccess
 * @return {undefined}
 */
MicroReferenceAPI.saveMicroReferences = function (criteriaType, onSuccess, onFailure) {
    if (criteriaType) {
        var evidencePanels = document.querySelectorAll(".applicant-evidence__accordion-wrapper[data-criteria-type=\"" + criteriaType + "\"]:not(.template)");
    } else if (criteriaType === undefined) {
        var evidencePanels = document.querySelectorAll(".applicant-evidence__accordion-wrapper:not(.template)");
    } else {
        Utilities.debug ? console.log("Cannot save Micro References with given type.") : null;
        return;
    }

    var submittedRequests = 0; //to keep track of number of HTTP calls in progress
    var requestsSuccessful = true;

    var applicationId = document.getElementById("jobApplicationJobApplicationId").value;

    if (!applicationId) {
        Utilities.debug ? console.log("Cannot save Micro References without an Application Id") : null;
        return;
    }
    for (var i=0; i<evidencePanels.length; i++) {
        var panel = evidencePanels[i];
        var reference = MicroReferenceAPI.getMicroReferenceFromEvidencePanel(panel);

        //Only save if this reference is complete
        if (reference.isValid()) {
            submittedRequests = submittedRequests + 1;
            DataAPI.saveMicroReference(reference, reference.criteria_id, applicationId, function (response) {
                if (response.status !== 200) {
                    requestsSuccessful = false;
                }
                submittedRequests = submittedRequests - 1;
                if (submittedRequests === 0) {
                    if (onSuccess && requestsSuccessful) {
                        //Only call onSuccess if all requests have been successful
                        onSuccess();
                    } else if (onFailure && !requestsSuccessful) {
                        onFailure();
                    }
                }
            });
        } else {
            //If reference is not valid (ie not complete) do nothing
        }
    }
    if (onSuccess && submittedRequests === 0) {
        //If no requests were made, call onSuccess
        onSuccess();
    }
};

MicroReferenceAPI.getMicroReferenceFromEvidencePanel = function (panel) {
    var reference = new MicroReferenceAPI.MicroReference();

    reference.criteria_id = panel.getAttribute("data-criteria-id");

    var name = panel.querySelector('input[name=\"reference_name\"]');
    if (name) {
        reference.name = name.value;
    }
    var email = panel.querySelector('input[name=\"reference_email\"]');
    if (email) {
        reference.email = email.value;
    }
    var relationship = panel.querySelector('select[name=\"reference_relationship\"]');
    if (relationship) {
        reference.relationship = relationship.value;
    }
    var relationship = panel.querySelector('input[name=\"reference_relationship\"]');
    if (relationship) {
        reference.relationship = relationship.value;
    }
    var from_date = panel.querySelector('input[name=\"reference_from_date\"]');
    if (from_date) {
        reference.observed_from_date = from_date.value;
    }
    var until_date = panel.querySelector('input[name=\"reference_until_date\"]');
    if (until_date) {
        reference.observed_until_date = until_date.value;
    }
    var exp_level = panel.querySelector('select[name=\"reference_exp_level\"]');
    if (exp_level) {
        reference.experience_level = exp_level.value;
    }
    var story = panel.querySelector('textarea[name=\"reference_story\"]');
    if (story) {
        reference.story = story.value;
    }

    return reference;
};

MicroReferenceAPI.onStatusChange = function (criteriaId) {
    var panel = document.querySelector(".applicant-evidence__accordion-wrapper[data-criteria-id=\"" + criteriaId + "\"]:not(.template)");

    var reference = MicroReferenceAPI.getMicroReferenceFromEvidencePanel(panel);

    if (reference.isValid()) {
        //Activate "user" icons
        EvidenceAPI.setEvidenceIconStatus(criteriaId, "fa-user", true);
    } else {
        //Deactivate "user" icons
        EvidenceAPI.setEvidenceIconStatus(criteriaId, "fa-user", false);
    }
};
