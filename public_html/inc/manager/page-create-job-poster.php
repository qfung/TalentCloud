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

                            <section id ="createJobPosterJobTitleSection" class="flex-grid manager-poster__edit-form-grid">

                               <div class="box med-1of2">
                        <label class="form__label" for="createJobPoster_jobTitle">
                                        <span>Job Title: *</span>
                                        <strong id="createJobPoster_jobTitle_error" class="error hidden">
                                <span id="createJobPoster_jobTitle_error_msg" class="label label-danger"></span>
                                        </strong>
                                    </label>
                                    <input class="form__input--text" type="text" name="createJobPoster_jobTitle" id="createJobPoster_jobTitle"/>
                            </div>

                                <div class="box med-1of2">
                        <label class="form__label" for="createJobPoster_jobTitle_fr" >
                                        <span>Job Title (Français): *</span>
                                        <strong id="createJobPoster_jobTitle_fr_error" class="error hidden">
                                <span id="createJobPoster_jobTitle_fr_error_msg" class="label label-danger"></span>
                                        </strong>
                        </label>
                                    <input class="form__input--text" type="text" name="createJobPoster_jobTitle_fr" id="createJobPoster_jobTitle_fr"/>
                            </div>

                            </section>

                            <section id="createJobPosterDetailsSection" class="flex-grid manager-poster__edit-form-grid">

                    <?php /*

                    <div class="box full">
                    <label class="form__label" for="createJobPoster_noc">
                    <span id="createJobPoster_noc_labelName"><span>NOC</span>: *</span>
                                        <strong id="createJobPoster_noc_error" class="error hidden">
                    <span id="createJobPoster_noc_error_msg" class="label label-danger"></span>
                                        </strong>
                    </label>
                    <input class="form__input--text" type="text" name="createJobPoster_noc" id="createJobPoster_noc"/>
                    </div>
                                 * 
                    */ ?>

                                <div class="box full">
                        <label class="form__label" for="createJobPoster_classification">
                                        <span id="createJobPoster_classification_labelName"><span>Classification</span>: *</span>
                                        <strong id="createJobPoster_classification_error" class="error hidden">
                                <span id="createJobPoster_classification_error_msg" class="label label-danger"></span>
                                        </strong>
                                    </label>
                                    <input class="form__input--text" type="text" name="createJobPoster_classification" id="createJobPoster_classification"/>
                            </div>

                                <div class="box full">
                        <label class="form__label" for="createJobPoster_clearance">
                                        <span><span id="createJobPoster_clearance_labelName">Security clearance level</span>: *</span>
                                        <strong id="createJobPoster_clearance_error" class="error hidden">
                                <span id="createJobPoster_clearance_error_msg" class="label label-danger"></span>
                                        </strong>
                                    </label>
                            <div class="form__select-wrapper">
                                        <select class="form__select" name="createJobPoster_clearance" id="createJobPoster_clearance">
                                    <option value="">--</option>
                                </select>
                            </div>
                                </div>

                                <div class="box full">
                        <label class="form__label" for="createJobPoster_language">
                                        <span id="createJobPoster_language_labelName"><span>Language</span>: *</span>
                                        <strong id="createJobPoster_language_error" class="error hidden">
                                <span id="createJobPoster_language_error_msg" class="label label-danger"></span>
                                        </strong>
                                    </label>
                            <div class="form__select-wrapper">
                                        <select class="form__select" name="createJobPoster_language" id="createJobPoster_language">
                                    <option value="">--</option>
                                </select>
                            </div>
                                </div>

                                <div class="box full">
                        <label class="form__label" for="createJobPoster_department">
                                        <span><span id="createJobPoster_department_labelName">Department</span>: *</span>
                                        <strong id="createJobPoster_department_error" class="error hidden">
                                <span id="createJobPoster_department_error_msg" class="label label-danger"></span>
                                        </strong>
                        </label>
                            <div class="form__select-wrapper">
                                        <select class="form__select" name="createJobPoster_department" id="createJobPoster_department">
                                    <option value="">--</option>
                                </select>
                            </div>
                            </div>

                                <div class="box med-1of2">
                        <label class="form__label" for="createJobPoster_branch">
                                        <span><span id="createJobPoster_branch_labelName">Branch</span> (English): *</span>
                                        <strong id="createJobPoster_branch_error" class="error hidden">
                                <span id="createJobPoster_branch_error_msg" class="label label-danger"></span>
                                        </strong>
                                    </label>
                                    <input type="text" class="form__input--text" name="createJobPoster_branch" id="createJobPoster_branch"/>
                            </div>

                                <div class="box med-1of2">
                        <label class="form__label" for="createJobPoster_branch_fr">
                                        <span><span id="createJobPoster_branch_fr_labelName">Branch</span> (Français): *</span>
                                        <strong id="createJobPoster_branch_fr_error" class="error hidden">
                                <span id="createJobPoster_branch_fr_error_msg" class="label label-danger"></span>
                                        </strong>
                                    </label>
                                    <input type="text" class="form__input--text" name="createJobPoster_branch_fr" id="createJobPoster_branch_fr"/>
                            </div>

                                <div class="box med-1of2">
                        <label class="form__label" for="createJobPoster_division">
                                        <span><span id="createJobPoster_division_labelName">Division</span> (English): *</span>
                                        <strong id="createJobPoster_division_error" class="error hidden">
                                <span id="createJobPoster_division_error_msg" class="label label-danger"></span>
                                        </strong>
                                    </label>
                                    <input type="text" class="form__input--text" name="createJobPoster_division" id="createJobPoster_division"/>
                            </div>

                                <div class="box med-1of2">
                        <label class="form__label" for="createJobPoster_division_fr">
                                        <span><span id="createJobPoster_division_fr_labelName">Division</span> (Français): *</span>
                                        <strong id="createJobPoster_division_fr_error" class="error hidden">
                                <span id="createJobPoster_division_fr_error_msg" class="label label-danger"></span>
                                        </strong>
                                    </label>
                                    <input type="text" class="form__input--text" name="createJobPoster_division_fr" id="createJobPoster_division_fr"/>
                            </div>

                                <div class="box full">
                                    <label class="form__label" for="createJobPoster_province">
                                        <span><span id="createJobPoster_province_labelName">Province</span>: *</span>
                                        <strong id="createJobPoster_province_error" class="error hidden">
                                            <span id="createJobPoster_province_error_msg" class="label label-danger"></span>
                                        </strong>
                        </label>
                                    <div class="form__select-wrapper">
                                        <select class="form__select" name="createJobPoster_province" id="createJobPoster_province">
                                            <option value="">--</option>
                                        </select>
                            </div>
                                </div>

                                <div class="box full">
                                    <label class="form__label" for="createJobPoster_city">
                                        <span>City: *</span>
                                        <strong id="createJobPoster_city_error" class="error hidden">
                                            <span id="createJobPoster_city_error_msg" class="label label-danger"></span>
                                        </strong>
                        </label>
                                    <input class="form__input--text" type="text" name="createJobPoster_city" id="createJobPoster_city"/>
                            </div>

                                <div class="box full">
                                    <label class="form__label" for="createJobPoster_remunerationLowRange">
                                        <span><span id="createJobPoster_remunerationLowRange_labelName">Minimum salary</span>: *</span>
                                        <strong id="createJobPoster_remunerationLowRange_error" class="error hidden">
                                            <span id="createJobPoster_remunerationLowRange_error_msg" class="label label-danger"></span>
                                        </strong>
                        </label>
                                    <input class="form__input--text" type="text" name="createJobPoster_remunerationLowRange" id="createJobPoster_remunerationLowRange"/>
                                </div>

                                <div class="box full">
                                    <label class="form__label" for="createJobPoster_remunerationHighRange">
                                        <span><span id="createJobPoster_remunerationHighRange_labelName">Maximum salary</span>: *</span>
                                        <strong id="createJobPoster_remunerationHighRange_error" class="error hidden">
                                            <span id="createJobPoster_remunerationHighRange_error_msg" class="label label-danger"></span>
                                        </strong>
                                    </label>
                                    <input class="form__input--text" type="text" name="createJobPoster_remunerationHighRange" id="createJobPoster_remunerationHighRange"/>
                                </div>

                                <div class="box full">
                                    <label class="form__label" for="createJobPoster_termQuantity">
                                        <span><span id="createJobPoster_termQuantity_labelName">Duration (months)</span>: *</span>
                                        <strong id="createJobPoster_termQuantity_error" class="error hidden">
                                            <span id="createJobPoster_termQuantity_error_msg" class="label label-danger"></span>
                                        </strong>
                                    </label>
                                    <input class="form__input--text" type="text" name="createJobPoster_termQuantity" id="createJobPoster_termQuantity"/>
                                </div>

                                <div class="box full">
                        <label class="form__label" for="createJobPoster_openDate">
                                        <span><span id="createJobPoster_openDate_labelName">Open Date</span>: *</span>
                                        <strong id="createJobPoster_openDate_error" class="error hidden">
                                <span id="createJobPoster_openDate_error_msg" class="label label-danger"></span>
                                        </strong>
                                    </label>
                                    <input class="form__input--date" type="date" name="createJobPoster_openDate" id="createJobPoster_openDate"/>
                            </div>

                                <div class="box full">
                        <label class="form__label" for="createJobPoster_closeDate">
                                        <span><span id="createJobPoster_closeDate_labelName">Close Date</span>: *</span>
                                        <strong id="createJobPoster_closeDate_error" class="error hidden">
                                <span id="createJobPoster_closeDate_error_msg" class="label label-danger"></span>
                                        </strong>
                        </label>
                                    <input class="form__input--date" type="date" name="createJobPoster_closeDate" id="createJobPoster_closeDate"/>
                            </div>

                                <div class="box full">
                        <label class="form__label" for="createJobPoster_startDate">
                                        <span><span id="createJobPoster_startDate_labelName">Start Date</span>: *</span>
                                        <strong id="createJobPoster_startDate_error" class="error hidden">
                                <span id="createJobPoster_startDate_error_msg" class="label label-danger"></span>
                                        </strong>
                                    </label>
                                    <input class="form__input--date" type="date" name="createJobPoster_startDate" id="createJobPoster_startDate"/>
                            </div>

                                <div class="box med-1of2">
                            <label class="form__label" for="createJobPoster_impact">
                                        <span><span id="createJobPoster_impact_labelName">Impact</span>:</span>
                                        <strong id="createJobPoster_impact_error" class="error hidden">
                                    <span id="createJobPoster_impact_error_msg" class="label label-danger"></span>
                                        </strong>
                                    </label>
                                    <textarea class="form__textarea" name="createJobPoster_impact" id="createJobPoster_impact"></textarea>
                                </div>

                                <div class="box med-1of2">
                            <label class="form__label" for="createJobPoster_impact_fr">
                                        <span><span id="createJobPoster_impact_fr_labelName">Impact</span> (Français):</span>
                                        <strong id="createJobPoster_impact_fr_error" class="error hidden">
                                    <span id="createJobPoster_impact_fr_error_msg" class="label label-danger"></span>
                                        </strong>
                                    </label>
                                    <textarea class="form__textarea" name="createJobPoster_impact_fr" id="createJobPoster_impact_fr"></textarea>
                                </div>

                                <div class="box med-1of2">
                            <label class="form__label" for="createJobPoster_keyTasks">
                                        <span><span id="createJobPoster_keyTasks_labelName">Key Tasks</span>: **</span>
                                        <strong id="createJobPoster_keyTasks_error" class="error hidden">
                                    <span id="createJobPoster_keyTasks_error_msg" class="label label-danger"></span>
                                        </strong>
                                    </label>
                                    <textarea class="form__textarea" name="createJobPoster_keyTasks" id="createJobPoster_keyTasks"></textarea>
                                </div>

                                <div class="box med-1of2">
                            <label class="form__label" for="createJobPoster_keyTasks_fr">
                                        <span><span id="createJobPoster_keyTasks_fr_labelName">Key Tasks</span> (Français): **</span>
                                        <strong id="createJobPoster_keyTasks_fr_error" class="error hidden">
                                    <span id="createJobPoster_keyTasks_fr_error_msg" class="label label-danger"></span>
                                        </strong>
                                    </label>
                                    <textarea class="form__textarea" name="createJobPoster_keyTasks_fr" id="createJobPoster_keyTasks_fr"></textarea>
                                </div>

                                <div class="box med-1of2">
                        <label class="form__label" for="createJobPoster_coreCompetencies">
                                        <span><span id="createJobPoster_coreCompetencies_labelName">Core Competencies</span>: **</span>
                                        <strong id="createJobPoster_coreCompetencies_error" class="error hidden">
                                <span id="createJobPoster_coreCompetencies_error_msg" class="label label-danger"></span>
                                        </strong>
                                    </label>
                                    <textarea class="form__textarea" name="createJobPoster_coreCompetencies" id="createJobPoster_coreCompetencies"></textarea>
                            </div>

                                <div class="box med-1of2">
                        <label class="form__label" for="createJobPoster_coreCompetencies_fr">
                                        <span><span id="createJobPoster_coreCompetencies_fr_labelName">Core Competencies</span> (Français): **</span>
                                        <strong id="createJobPoster_coreCompetencies_fr_error" class="error hidden">
                                <span id="createJobPoster_coreCompetencies_fr_error_msg" class="label label-danger"></span>
                                        </strong>
                                    </label>
                                    <textarea class="form__textarea" name="createJobPoster_coreCompetencies_fr" id="createJobPoster_coreCompetencies_fr"></textarea>
                            </div>

                                <div class="box med-1of2">
                        <label class="form__label" for="createJobPoster_developingCompetencies">
                                        <span><span id="createJobPoster_developingCompetencies_labelName">Developing Competencies</span>: **</span>
                                        <strong id="createJobPoster_developingCompetencies_error" class="error hidden">
                                <span id="createJobPoster_developingCompetencies_error_msg" class="label label-danger"></span>
                                        </strong>
                                    </label>
                                    <textarea class="form__textarea" name="createJobPoster_developingCompetencies" id="createJobPoster_developingCompetencies"></textarea>
                            </div>

                                <div class="box med-1of2">
                        <label class="form__label" for="createJobPoster_developingCompetencies_fr">
                                    <span><span id="createJobPoster_developingCompetencies_fr_labelName">Developing Competencies</span> (Français): **</span>
                                        <strong id="createJobPoster_developingCompetencies_fr_error" class="error hidden">
                                <span id="createJobPoster_developingCompetencies_fr_error_msg" class="label label-danger"></span>
                                        </strong>
                                    </label>
                                    <textarea class="form__textarea" name="createJobPoster_developingCompetencies_fr" id="createJobPoster_developingCompetencies_fr"></textarea>
                            </div>

                                <div class="box med-1of2">
                        <label class="form__label" for="createJobPoster_questions">
                                        <span><span id="createJobPoster_questions_labelName">Open Ended Questions</span> (English): **</span>
                                        <strong id="createJobPoster_questions_error" class="error hidden">
                                <span id="createJobPoster_questions_error_msg" class="label label-danger"></span>
                                        </strong>
                                    </label>
                                    <textarea class="form__textarea" name="createJobPoster_questions" id="createJobPoster_questions"></textarea>
                            </div>

                                <div class="box med-1of2">
                        <label class="form__label" for="createJobPoster_questions_fr">
                                        <span><span id="createJobPoster_questions_fr_labelName">Open Ended Questions_fr</span> (Français): **</span>
                                        <strong id="createJobPoster_questions_fr_error" class="error hidden">
                                <span id="createJobPoster_questions_fr_error_msg" class="label label-danger"></span>
                                        </strong>
                                    </label>
                                    <textarea class="form__textarea" name="createJobPoster_questions_fr" id="createJobPoster_questions_fr"></textarea>
                            </div>

                            </section>

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
