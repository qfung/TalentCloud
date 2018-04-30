var EvidenceAPI = {};

EvidenceAPI.evidenceTriggerName = function (criteriaId, criteriaType) {
    return criteriaType + "-" + criteriaId;
};

EvidenceAPI.menuItemId = function (criteriaId, criteriaType) {
    var triggerName = EvidenceAPI.evidenceTriggerName(criteriaId, criteriaType);
    return "applicationEvidenceMenuItem_" + triggerName;
};

EvidenceAPI.instantiateApplicationEvidenceMenuItem = function (criteriaId, criteriaType, criteriaName) {
    var menuItem = document.getElementById("applicantEvidenceMenuItemTemplate").firstElementChild.cloneNode(true);
    
    menuItem.classList.remove("template");

    var triggerName = EvidenceAPI.evidenceTriggerName(criteriaId, criteriaType);
    var menuItemId = EvidenceAPI.menuItemId(criteriaId, criteriaType);
    menuItem.id = menuItemId;
    menuItem.setAttribute("data-evidence-trigger", triggerName);

    //Set data attributes
    menuItem.setAttribute("data-criteria-type", criteriaType);
    menuItem.setAttribute("data-criteria-id", criteriaId);

    var title = menuItem.querySelector(".applicant-evidence__desktop-item-title");
    title.innerHTML = criteriaName;

    return menuItem;
};

EvidenceAPI.instantiateApplicationEvidencePanel = function (criteriaId, criteriaType, criteriaName, criteriaDescription) {
    var evidencePanel = document.getElementById("applicantEvidencePanelTemplate").firstElementChild.cloneNode(true);

    evidencePanel.classList.remove("template");

    var triggerName = EvidenceAPI.evidenceTriggerName(criteriaId, criteriaType);
    var menuItemId = EvidenceAPI.menuItemId(criteriaId, criteriaType);
    evidencePanel.setAttribute("data-evidence-target", triggerName);
    evidencePanel.setAttribute("aria-labelledby", menuItemId);

    //Set data attributes
    evidencePanel.setAttribute("data-criteria-type", criteriaType);
    evidencePanel.setAttribute("data-criteria-id", criteriaId);

    //Set title and description
    evidencePanel.querySelector(".applicant-evidence__accordion-trigger-title-text").innerHTML = criteriaName;
    if (criteriaDescription) {
        evidencePanel.querySelector(".applicant-evidence__skill-description").innerHTML = criteriaDescription;
    }

    //Populate "sliders"
    //DEV-NOTE: Beware copy-paste errors, and confusing EXPERTISE with EXPERIENCE

    var expertiseSelector = evidencePanel.querySelector(".applicant-evidence__expertise-wrapper");
    expertiseSelector.innerHTML = ""; //clear template items
    LookupAPI.getLookupResponse("skill_level", function (items) {
        var numberOfItems = items.length;
        var fragment = document.createDocumentFragment();
        for (var i = 0; i < numberOfItems; i++) {
            var item = items[i];
            var outputValue = item.id; //TODO: change to value
            var itemElement = EvidenceAPI.instantiateApplicationEvidenceExpertiseItem(criteriaId, criteriaType, item.id, item.value, outputValue, numberOfItems);
            fragment.appendChild(itemElement);
        }
        expertiseSelector.appendChild(fragment);
    });

    var experienceSelector = evidencePanel.querySelector(".applicant-evidence__experience-wrapper");
    experienceSelector.innerHTML = ""; //clear template items
    LookupAPI.getLookupResponse("experience_level", function (items) {
        var numberOfItems = items.length;
        var fragment = document.createDocumentFragment();
        for (var i = 0; i < numberOfItems; i++) {
            var item = items[i];
            var outputValue = item.id; //TODO: change to value
            var itemElement = EvidenceAPI.instantiateApplicationEvidenceExperienceItem(criteriaId, criteriaType, item.id, item.value, outputValue, numberOfItems);
            fragment.appendChild(itemElement);
        }
        experienceSelector.appendChild(fragment);
    });

    //ADD EVENT HANDLERS
    
    //define a function to check skill declaration status
    function declarationOnChange() {
        SkillDeclarationAPI.onStatusChange(criteriaId);
    }
    //Add handler to experienence inputs
    var experienceInputs = evidencePanel.querySelectorAll("input[name=experience]");
    experienceInputs.forEach(item => {
        item.onclick = declarationOnChange;
    });
    //Add handler to expertise inputs
    var expertiseInputs = evidencePanel.querySelectorAll("input[name=expertise]");
    expertiseInputs.forEach(item => {
        item.onclick = declarationOnChange;
    });
    //Add handler to Skill Declaration story text
    var declarationText = evidencePanel.querySelector(".applicant-evidence__skill-declaration-text");
    declarationText.onchange = declarationOnChange;    
    
    

    return evidencePanel;
};

EvidenceAPI.instantiateApplicationEvidenceExpertiseItem = function (criteriaId, criteriaType, expertiseId, expertiseValue, outputValue, numberOfItems) {
    var templateId = "applicationEvidenceExpertiseItemTemplate";
    var inputId = "expertise__" + EvidenceAPI.evidenceTriggerName(criteriaId, criteriaType) + "__" + expertiseId;
    return EvidenceAPI.instantiateApplicationEvidenceRadioItem(templateId, inputId, expertiseValue, outputValue, numberOfItems);
};

EvidenceAPI.instantiateApplicationEvidenceExperienceItem = function (criteriaId, criteriaType, experienceId, experienceValue, outputValue, numberOfItems) {
    var templateId = "applicationEvidenceExperienceItemTemplate";
    var inputId = "experience__" + EvidenceAPI.evidenceTriggerName(criteriaId, criteriaType) + "__" + experienceId;
    return EvidenceAPI.instantiateApplicationEvidenceRadioItem(templateId, inputId, experienceValue, outputValue, numberOfItems);
}

EvidenceAPI.instantiateApplicationEvidenceRadioItem = function (templateId, inputId, textValue, outputValue, numberOfItems) {
    var itemLabel = document.getElementById(templateId).firstElementChild.cloneNode(true);
    
    itemLabel.classList.remove("template");
    
    var itemInput = itemLabel.querySelector("input");
    var itemText = itemLabel.querySelector(".form__radio-group-span");

    var sizeClass = "small-1of" + numberOfItems;
    itemLabel.classList.add(sizeClass);

    itemLabel.setAttribute("for", inputId);
    itemInput.id = inputId;
    itemInput.value = outputValue;

    itemText.innerHTML = textValue;
    return itemLabel;
};

/**
 * Sets first evidence specified criteria to active. All other evidence 
 * panels with matching criteriaType will be set to inactive.
 * 
 * @param {string} criteriaType
 * @return {undefined}
 */
EvidenceAPI.activateFirstEvidencePanel = function (criteriaType) {

    //Deactivate all panels of same criteriaType, except one with correct criteria id
    var menuItems = document.querySelectorAll(".applicant-evidence__desktop-menu-item[data-criteria-type=\"" + criteriaType + "\"]");
    var panels = document.querySelectorAll(".applicant-evidence__accordion-wrapper[data-criteria-type=\"" + criteriaType + "\"]");

    for (var i=0; i<menuItems.length; i++) {
        var item = menuItems[i];
        if (i === 0) {
            //Set first one to active
            item.classList.add("active");
            item.setAttribute("aria-selected", true);
        } else {
            //Deactivate others
            item.classList.remove("active");
            item.setAttribute("aria-selected", false);
        }
    }
    
    for (var i=0; i<panels.length; i++) {
        var panel = panels[i];
        var panelTrigger = panel.querySelector(".applicant-evidence__accordion-trigger");
        var panelContent = panel.querySelector(".applicant-evidence__accordion-content");

        if (i === 0) {
            //Set first panel active
            panel.classList.add("active");
            panelTrigger.classList.add("active");
            panelTrigger.setAttribute("aria-expanded", true);
            panelContent.classList.add("active");
        } else {
            //Deactivate others
            panel.classList.remove("active");
            panelTrigger.classList.remove("active");
            panelTrigger.setAttribute("aria-expanded", false);
            panelContent.classList.remove("active");
        }
    }
};
