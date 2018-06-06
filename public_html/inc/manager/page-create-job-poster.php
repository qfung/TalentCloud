<?php // BEGIN - Create Job Poster Section ?>
<section class="hidden" id="createJobPosterSection">
    <div class="block-container">

        <div class="wb-frmvld wb-init section" id="jobPosterFormWrapper">
            <form name="createJobPosterForm" id="createJobPosterForm" method="post" enctype="application/x-www-form-urlencoded">

                <div id="createJobPosterCreateTab" class="stepGroup flex-grid">
                    <div class="tabsSteps box full">
                        <div class="three-step-tab tab-current">
                            <button type="button" class="steppedFormLinkActive" onclick="CreateJobPosterAPI.goToTab('createJobPosterCreateTab'); return false;" id="createJobPosterTab1Label_1">Create</button>
                        </div>
                        <div class="three-step-tab">
                            <button type="button" class="steppedFormLink" onclick="CreateJobPosterAPI.goToTab('createJobPosterOutdatedTab'); return false;" id="createJobPosterTab2Label_1">Outdated</button>
                        </div>
                        <div class="three-step-tab">
                            <button type="button" class="steppedFormLink" onclick="CreateJobPosterAPI.goToTab('createJobPosterReviewTab'); return false;" id="createJobPosterTab3Label_1">Review</button>
                        </div>
                    </div>


                    <h3 class="manager-poster__title heading--03 box full">Job Poster Details</h3>
                    <div class="manager-edit-profile__required-copy-wrapper box lg-1of4">

                        <i class="fas fa-asterisk"></i>
                        <span>Indicates a required field</span>
                    </div>
                    <div class="manager-edit-profile__required-copy-wrapper box lg-3of4">

                        <i class="fas fa-level-down-alt fa-rotate-90 fa-fw"></i>
                        <span>Indicates each new line is a separate item</span>
                    </div>


                    <?php // Example: Grouping form inputs with fieldset/legend ?>
                    <fieldset id="createJobPosterJobTitleSection" class="box med-1of2">
                        <?php // All inputs associated with the legend element  ?>
                        <legend>Job Title</legend>

                        <?php // Title (English) ?>
                        <label class="form__label" for="createJobPoster_jobTitle">
                            <?php // OK to reuse English/French for labels if there is a unique legend as well ?>
                            <i class="fas fa-asterisk"></i> English
                            <?php // Error handling ?>
                            <div id="createJobPoster_jobTitle_error" class="error hidden">
                                <span id="createJobPoster_jobTitle_error_msg" class="label label-danger"></span>
                            </div>
                            <?php // Add aria-required="true" and required attributes ?>
                            <input class="form__input--text" type="text" name="createJobPoster_jobTitle" id="createJobPoster_jobTitle" required aria-required="true"/>
                        </label>

                        <?php // Repeat for each item in the fieldset ?>

                        <?php // Title (Français) ?>
                        <label class="form__label" for="createJobPoster_jobTitle_fr" >
                            <i class="fas fa-asterisk"></i> Français
                            <div id="createJobPoster_jobTitle_fr_error" class="error hidden">
                                <span id="createJobPoster_jobTitle_fr_error_msg" class="label label-danger"></span>
                            </div>
                            <input class="form__input--text" type="text" name="createJobPoster_jobTitle_fr" id="createJobPoster_jobTitle_fr" required aria-required="true"/>
                        </label>

                    </fieldset>

                    <fieldset class="box lg-1of2">
                        <legend>Salary</legend>

                        <label class="form__label" for="createJobPoster_remunerationLowRange">
                            <span id="createJobPoster_remunerationLowRange_labelName">
                                <i class="fas fa-asterisk"></i> Minimum
                            </span>
                            <div id="createJobPoster_remunerationLowRange_error" class="error hidden">
                                <span id="createJobPoster_remunerationLowRange_error_msg" class="label label-danger"></span>
                            </div>
                            <input class="form__input--text" type="text" name="createJobPoster_remunerationLowRange" id="createJobPoster_remunerationLowRange"/>
                        </label>

                        <label class="form__label" for="createJobPoster_remunerationHighRange">
                            <span id="createJobPoster_remunerationHighRange_labelName">
                                <i class="fas fa-asterisk"></i> Maximum
                            </span>
                            <div id="createJobPoster_remunerationHighRange_error" class="error hidden">
                                <span id="createJobPoster_remunerationHighRange_error_msg" class="label label-danger"></span>
                            </div>
                            <input class="form__input--text" type="text" name="createJobPoster_remunerationHighRange" id="createJobPoster_remunerationHighRange"/>
                        </label>

                    </fieldset>

                    <?php /*

                    <div class="box full">
                    <label class="form__label" for="createJobPoster_noc">
                    <span id="createJobPoster_noc_labelName"><span>NOC</span>: *</span>
                    <div id="createJobPoster_noc_error" class="error hidden">
                    <span id="createJobPoster_noc_error_msg" class="label label-danger"></span>
                    </div>
                    </label>
                    <input class="form__input--text" type="text" name="createJobPoster_noc" id="createJobPoster_noc"/>
                    </div>
                    */ ?>

                    <fieldset id="createJobPosterDetailsSection" class="box lg-1of2">
                        <legend>Classifications</legend>

                        <?php // Occupational group ?>
                        <label class="form__label" for="createJobPoster_classification">
                            <span id="createJobPoster_classification_labelName">
                                <i class="fas fa-asterisk"></i> Occupational group
                            </span>
                            <div id="createJobPoster_classification_error" class="error hidden">
                                <span id="createJobPoster_classification_error_msg" class="label label-danger"></span>
                            </div>
                            <?php // Testing HTML5 form validation ?>
                            <input
                            id="createJobPoster_classification"
                            name="createJobPoster_classification"
                            class="form__input--text"
                            type="text"
                            maxlength="5"
                            required
                            aria-required="true"
                            placeholder="Example: AS-01"
                            pattern="[A-Z]{2}[-][0-9]{2}"
                            title="Occupational group must contain two characters followed by a hyphen, then two numbers"
                            oninput="this.value = this.value.toUpperCase()" />
                        </label>

                        <?php // Security clearance ?>
                        <label class="form__label" for="createJobPoster_clearance">
                            <span id="createJobPoster_clearance_labelName">
                                <i class="fas fa-asterisk"></i> Security clearance level
                            </span>
                            <div id="createJobPoster_clearance_error" class="error hidden">
                                <span id="createJobPoster_clearance_error_msg" class="label label-danger"></span>
                            </div>
                            <div class="form__select-wrapper">
                                <select class="form__select" name="createJobPoster_clearance" id="createJobPoster_clearance" required aria-required="true">
                                    <option value="">--</option>
                                </select>
                            </div>
                        </label>

                        <?php // Language ?>
                        <label class="form__label" for="createJobPoster_language">
                            <span id="createJobPoster_language_labelName">
                                <i class="fas fa-asterisk"></i> Language requirements
                            </span>
                            <div id="createJobPoster_language_error" class="error hidden">
                                <span id="createJobPoster_language_error_msg" class="label label-danger"></span>
                            </div>
                            <div class="form__select-wrapper">
                                <select class="form__select" name="createJobPoster_language" id="createJobPoster_language" required aria-required="true">
                                    <option value="">--</option>
                                </select>
                            </div>
                        </label>
                    </fieldset>

                    <fieldset class="box lg-1of2">
                        <legend>Location</legend>

                        <?php // Department ?>
                        <label class="form__label" for="createJobPoster_department">
                            <span id="createJobPoster_department_labelName">
                                <i class="fas fa-asterisk"></i> Department
                            </span>
                            <div id="createJobPoster_department_error" class="error hidden">
                                <span id="createJobPoster_department_error_msg" class="label label-danger"></span>
                            </div>
                            <div class="form__select-wrapper">
                                <select class="form__select" name="createJobPoster_department" id="createJobPoster_department" required aria-required="true">
                                    <option value="">--</option>
                                </select>
                            </div>
                        </label>

                        <?php // Province ?>
                        <label class="form__label" for="createJobPoster_province">
                            <span id="createJobPoster_province_labelName">
                                <i class="fas fa-asterisk"></i> Province
                            </span>
                            <div id="createJobPoster_province_error" class="error hidden">
                                <span id="createJobPoster_province_error_msg" class="label label-danger"></span>
                            </div>
                            <div class="form__select-wrapper">
                                <select class="form__select" name="createJobPoster_province" id="createJobPoster_province" required aria-required="true">
                                    <option value="">--</option>
                                </select>
                            </div>
                        </label>

                        <?php // City ?>
                        <label class="form__label" for="createJobPoster_city">
                            <span id="createJobPoster_city_labelName">
                                <i class="fas fa-asterisk"></i> City
                            </span>
                            <div id="createJobPoster_city_error" class="error hidden">
                                <span id="createJobPoster_city_error_msg" class="label label-danger"></span>
                            </div>
                            <input class="form__input--text" type="text" name="createJobPoster_city" id="createJobPoster_city" required aria-required="true"/>
                        </label>

                    </fieldset>

                    <fieldset class="box lg-1of2">
                        <legend id="createJobPoster_branch_labelName">Branch</legend>

                        <?php // Branch (English) ?>
                        <label class="form__label" for="createJobPoster_branch">
                            <span id="createJobPoster_branch_labelName" class="hidden"></span>
                            <span>
                                <i class="fas fa-asterisk"></i> English
                            </span>
                            <div id="createJobPoster_branch_error" class="error hidden">
                                <span id="createJobPoster_branch_error_msg" class="label label-danger"></span>
                            </div>
                            <input type="text" class="form__input--text" name="createJobPoster_branch" id="createJobPoster_branch" required aria-required="true"/>
                        </label>

                        <?php // Branch (Français) ?>
                        <label class="form__label" for="createJobPoster_branch_fr">
                            <span id="createJobPoster_branch_fr_labelName" class="hidden"></span>
                            <span>
                                <i class="fas fa-asterisk"></i> Français
                            </span>
                            <div id="createJobPoster_branch_fr_error" class="error hidden">
                                <span id="createJobPoster_branch_fr_error_msg" class="label label-danger"></span>
                            </div>
                            <input type="text" class="form__input--text" name="createJobPoster_branch_fr" id="createJobPoster_branch_fr" required aria-required="true"/>
                        </label>

                    </fieldset>

                    <fieldset class="box lg-1of2">
                        <legend>Division</legend>

                        <?php // Division (English) ?>
                        <label class="form__label" for="createJobPoster_division">
                            <span id="createJobPoster_division_labelName" class="hidden"></span>
                            <span>
                                <i class="fas fa-asterisk"></i> English
                            </span>
                            <div id="createJobPoster_division_error" class="error hidden">
                                <span id="createJobPoster_division_error_msg" class="label label-danger"></span>
                            </div>
                            <input type="text" class="form__input--text" name="createJobPoster_division" id="createJobPoster_division" required aria-required="true"/>
                        </label>

                        <?php // Division (Français) ?>
                        <label class="form__label" for="createJobPoster_division_fr">
                            <span id="createJobPoster_division_fr_labelName" class="hidden"></span>
                            <span>
                                <i class="fas fa-asterisk"></i> Français
                            </span>
                            <div id="createJobPoster_division_fr_error" class="error hidden">
                                <span id="createJobPoster_division_fr_error_msg" class="label label-danger"></span>
                            </div>
                            <input type="text" class="form__input--text" name="createJobPoster_division_fr" id="createJobPoster_division_fr" required aria-required="true"/>
                        </label>

                    </fieldset>

                    <fieldset class="box lg-1of2">
                        <legend>Competition</legend>

                        <?php // Open date ?>
                        <label class="form__label" for="createJobPoster_openDate">
                            <span id="createJobPoster_openDate_labelName">
                                <i class="fas fa-asterisk"></i> Open Date
                            </span>
                            <div id="createJobPoster_openDate_error" class="error hidden">
                                <span id="createJobPoster_openDate_error_msg" class="label label-danger"></span>
                            </div>
                            <input class="form__input--date" type="date" name="createJobPoster_openDate" id="createJobPoster_openDate" required aria-required="true"/>
                        </label>

                        <?php // Close date ?>
                        <label class="form__label" for="createJobPoster_closeDate">
                            <span id="createJobPoster_closeDate_labelName">
                                <i class="fas fa-asterisk"></i> Close Date
                            </span>
                            <div id="createJobPoster_closeDate_error" class="error hidden">
                                <span id="createJobPoster_closeDate_error_msg" class="label label-danger"></span>
                            </div>
                            <input class="form__input--date" type="date" name="createJobPoster_closeDate" id="createJobPoster_closeDate" required aria-required="true"/>
                        </label>

                    </fieldset>

                    <fieldset class="box lg-1of2">
                        <legend>Contract</legend>

                        <?php // Duration ?>
                        <label class="form__label" for="createJobPoster_termQuantity">
                            <span id="createJobPoster_termQuantity_labelName">
                                <i class="fas fa-asterisk"></i> Duration (in months)
                            </span>
                            <div id="createJobPoster_termQuantity_error" class="error hidden">
                                <span id="createJobPoster_termQuantity_error_msg" class="label label-danger"></span>
                            </div>
                            <input
                                id="createJobPoster_termQuantity"
                                name="createJobPoster_termQuantity"
                                class="form__input--text"
                                type="text"
                                required
                                aria-required="true"
                                maxlength="2"
                                pattern="[0-9]{1,2}"
                                title="Duration must contain one or two numbers" />
                        </label>

                        <?php // Start date ?>
                        <label class="form__label" for="createJobPoster_startDate">
                            <span id="createJobPoster_startDate_labelName">
                                <i class="fas fa-asterisk"></i> Start Date
                            </span>
                            <div id="createJobPoster_startDate_error" class="error hidden">
                                <span id="createJobPoster_startDate_error_msg" class="label label-danger"></span>
                            </div>
                            <input class="form__input--date" type="date" name="createJobPoster_startDate" id="createJobPoster_startDate" required aria-required="true"/>
                        </label>

                    </fieldset>

                    <fieldset class="box full">
                        <legend>Impact</legend>

                            <label class="form__label" for="createJobPoster_impact">
                                <span id="createJobPoster_impact_labelName">
                                    English
                                </span>
                                <div id="createJobPoster_impact_error" class="error hidden">
                                    <span id="createJobPoster_impact_error_msg" class="label label-danger"></span>
                                </div>
                            </label>
                            <textarea class="form__textarea" name="createJobPoster_impact" id="createJobPoster_impact" rows="2"></textarea>

                            <label class="form__label" for="createJobPoster_impact_fr">
                                <span id="createJobPoster_impact_fr_labelName">
                                    Français
                                </span>
                                <div id="createJobPoster_impact_fr_error" class="error hidden">
                                    <span id="createJobPoster_impact_fr_error_msg" class="label label-danger"></span>
                                </div>
                            </label>
                            <textarea class="form__textarea" name="createJobPoster_impact_fr" id="createJobPoster_impact_fr" rows="2"></textarea>

                    </fieldset>

                    <fieldset class="box lg-1of2">
                        <legend>Key Tasks</legend>

                            <label class="form__label" for="createJobPoster_keyTasks">
                                <span id="createJobPoster_keyTasks_labelName">
                                    <i class="fas fa-asterisk"></i>
                                    <i class="fas fa-level-down-alt fa-rotate-90 fa-fw"></i> English
                                </span>
                                <div id="createJobPoster_keyTasks_error" class="error hidden">
                                    <span id="createJobPoster_keyTasks_error_msg" class="label label-danger"></span>
                                </div>
                            </label>
                            <textarea class="form__textarea" name="createJobPoster_keyTasks" id="createJobPoster_keyTasks" rows="4"></textarea>

                            <label class="form__label" for="createJobPoster_keyTasks_fr">
                                <span id="createJobPoster_keyTasks_fr_labelName">
                                    <i class="fas fa-asterisk"></i>
                                    <i class="fas fa-level-down-alt fa-rotate-90 fa-fw"></i> Français
                                </span>
                                <div id="createJobPoster_keyTasks_fr_error" class="error hidden">
                                    <span id="createJobPoster_keyTasks_fr_error_msg" class="label label-danger"></span>
                                </div>
                            </label>
                            <textarea class="form__textarea" name="createJobPoster_keyTasks_fr" id="createJobPoster_keyTasks_fr" rows="4"></textarea>

                    </fieldset>

                    <fieldset class="box lg-1of2">
                        <legend>Essential Criteria</legend>

                        <label class="form__label" for="createJobPoster_coreCompetencies">
                            <span id="createJobPoster_coreCompetencies_labelName">
                                <i class="fas fa-asterisk"></i>
                                <i class="fas fa-level-down-alt fa-rotate-90 fa-fw"></i> English
                            </span>
                            <div id="createJobPoster_coreCompetencies_error" class="error hidden">
                                <span id="createJobPoster_coreCompetencies_error_msg" class="label label-danger"></span>
                            </div>
                        </label>
                        <textarea class="form__textarea" name="createJobPoster_coreCompetencies" id="createJobPoster_coreCompetencies" rows="4"></textarea>

                        <label class="form__label" for="createJobPoster_coreCompetencies_fr">
                            <span id="createJobPoster_coreCompetencies_fr_labelName">
                                <i class="fas fa-asterisk"></i>
                                <i class="fas fa-level-down-alt fa-rotate-90 fa-fw"></i> Français
                            </span>
                            <div id="createJobPoster_coreCompetencies_fr_error" class="error hidden">
                                <span id="createJobPoster_coreCompetencies_fr_error_msg" class="label label-danger"></span>
                            </div>
                        </label>
                        <textarea class="form__textarea" name="createJobPoster_coreCompetencies_fr" id="createJobPoster_coreCompetencies_fr" rows="4"></textarea>

                    </fieldset>

                    <fieldset class="box lg-1of2">
                        <legend>Non-essential Criteria</legend>

                        <label class="form__label" for="createJobPoster_developingCompetencies">
                            <span id="createJobPoster_developingCompetencies_labelName">
                                <i class="fas fa-asterisk"></i>
                                <i class="fas fa-level-down-alt fa-rotate-90 fa-fw"></i> English
                            </span>
                            <div id="createJobPoster_developingCompetencies_error" class="error hidden">
                                <span id="createJobPoster_developingCompetencies_error_msg" class="label label-danger"></span>
                            </div>
                        </label>
                        <textarea class="form__textarea" name="createJobPoster_developingCompetencies" id="createJobPoster_developingCompetencies" rows="4"></textarea>

                        <label class="form__label" for="createJobPoster_developingCompetencies_fr">
                            <span id="createJobPoster_developingCompetencies_fr_labelName">
                                <i class="fas fa-asterisk"></i>
                                <i class="fas fa-level-down-alt fa-rotate-90 fa-fw"></i> Français
                            </span>
                            <div id="createJobPoster_developingCompetencies_fr_error" class="error hidden">
                                <span id="createJobPoster_developingCompetencies_fr_error_msg" class="label label-danger"></span>
                            </div>
                        </label>
                        <textarea class="form__textarea" name="createJobPoster_developingCompetencies_fr" id="createJobPoster_developingCompetencies_fr" rows="4"></textarea>

                    </fieldset>

                    <fieldset class="box lg-1of2">
                        <legend>Open-ended Questions</legend>

                        <label class="form__label" for="createJobPoster_questions">
                            <span id="createJobPoster_questions_labelName" class="hidden"></span>
                            <span>
                                <i class="fas fa-asterisk"></i>
                                <i class="fas fa-level-down-alt fa-rotate-90 fa-fw"></i> English
                            </span>
                            <div id="createJobPoster_questions_error" class="error hidden">
                                <span id="createJobPoster_questions_error_msg" class="label label-danger"></span>
                            </div>
                        </label>
                        <textarea class="form__textarea" name="createJobPoster_questions" id="createJobPoster_questions" rows="4"></textarea>


                        <label class="form__label" for="createJobPoster_questions_fr">
                            <span id="createJobPoster_questions_fr_labelName" class="hidden"></span>
                                <i class="fas fa-asterisk"></i>
                                <i class="fas fa-level-down-alt fa-rotate-90 fa-fw"></i> Français
                            </span>
                            <div id="createJobPoster_questions_fr_error" class="error hidden">
                                <span id="createJobPoster_questions_fr_error_msg" class="label label-danger"></span>
                            </div>
                        </label>
                        <textarea class="form__textarea" name="createJobPoster_questions_fr" id="createJobPoster_questions_fr" rows="4"></textarea>



                    <div class="createJobPosterSubmitPane flex-grid top manager-edit-profile__button-form">
                        <div class="box full">
                            <input type="button" id="createJobPosterSubmitButton" class="button--yellow" value="Submit" onclick="CreateJobPosterAPI.validateJobPosterForm()">
                        </div>
                    </div>

                </div>

                <?php // Outdated Tab  ?>
                <div id="createJobPosterOutdatedTab" class="stepGroup hidden">
                    <div class="tabsSteps">
                        <div class="three-step-tab">
                            <button type="button" class="steppedFormLink" onclick="CreateJobPosterAPI.goToTab('createJobPosterCreateTab'); return false;" id="createJobPosterTab1Label_2">Create</button>
                        </div>
                        <div class="three-step-tab tab-current">
                            <button type="button" class="steppedFormLinkActive" onclick="CreateJobPosterAPI.goToTab('createJobPosterOutdatedTab'); return false;" id="createJobPosterTab2Label_2">Outdated</button>
                        </div>
                        <div class="three-step-tab">
                            <button type="button" class="steppedFormLink" onclick="CreateJobPosterAPI.goToTab('createJobPosterReviewTab'); return false;" id="createJobPosterTab3Label_2">Review</button>
                        </div>
                    </div>

                    <h3>This is for outdated fields</h3>
                </div>

                <?php // Review Tab  ?>
                <div id="createJobPosterReviewTab" class="stepGroup hidden">

                    <div class="tabsSteps">
                        <div class="three-step-tab">
                            <button type="button" class="steppedFormLink" onclick="CreateJobPosterAPI.goToTab('createJobPosterCreateTab'); return false;" id="createJobPosterTab1Label_3">Create</button>
                        </div>
                        <div class="three-step-tab">
                            <button type="button" class="steppedFormLink" onclick="CreateJobPosterAPI.goToTab('createJobPosterOutdatedTab'); return false;" id="createJobPosterTab2Label_3">Outdated</button>
                        </div>
                        <div class="three-step-tab tab-current">
                            <button type="button" class="steppedFormLinkActive" onclick="CreateJobPosterAPI.goToTab('createJobPosterReviewTab'); return false;" id="createJobPosterTab3Label_3">Review</button>
                        </div>
                    </div>

                    <div class="stepGroupForm">
                        <div class="createJobPosterDemoAreaEnglish" id="createJobPosterDemoAreaEnglish"></div>
                        <div class="createJobPosterDemoAreaFrench" id="createJobPosterDemoAreaFrench"></div>
                    </div>

                </div>
            </form>
        </div>

    </div>
</section>
<?php // END - Create Job Poster Section ?>
