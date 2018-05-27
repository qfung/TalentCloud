<?php // BEGIN - Edit Admin Profile Form (Page 5 / Other) ?>
<div id="createEditProfile_step3" class="stepGroup_createEditProfile hidden">
    <div class="tabsSteps">
        <div class="five-step-tab">
            <button type="button" onclick="CreateEditProfileAPI.goToStep('createEditProfile_step1'); return false;" class="steppedFormLink">
                <span id="createEditProfileStep1Label_1">About</span>
            </button>
        </div>
        <div class="five-step-tab">
            <button type="button" onclick="CreateEditProfileAPI.goToStep('createEditProfile_step2'); return false;" class="steppedFormLink">
                <span id="createEditProfileStep2Label_1">Leadership</span>
            </button>
        </div>
        <div class="five-step-tab">
            <button type="button" onclick="CreateEditProfileAPI.goToStep('createEditProfile_workEnvironment'); return false;" class="steppedFormLink">
                <span id="createEditProfileWorkEnvironmentLabel_1">Work Environment</span>
            </button>
        </div>
        <div class="five-step-tab">
            <button type="button" onclick="CreateEditProfileAPI.goToStep('createEditProfile_teamCulture'); return false;" class="steppedFormLink">
                <span id="createEditProfileTeamCultureLabel_1">Team Culture</span>
            </button>
        </div>
        <div class="five-step-tab tab-current">
            <button type="button" onclick="CreateEditProfileAPI.goToStep('createEditProfile_step3'); return false;" class="steppedFormLinkActive">
                <span id="createEditProfileStep3Label_1">Other</span>
            </button>
        </div>
    </div>
    <!-- Remove?
    <div class="tabs">
        <div class="steptab inactive"> </div>
        <div class="steptab inactive"> </div>
        <div class="steptab inactive"> </div>
        <div class="steptab inactive"> </div>
        <div class="steptab active"> </div>
    </div>-->

    <div class="stepGroupForm">
        <h3 class="manager-edit-profile__title heading--03">Other Information</h3>
        <div class="manager-edit-profile__required-copy-wrapper">
            <span>* = </span>
            <span id="createEditProfile_requiredStep3">Required</span>
        </div>

        <div class="flex-grid top manager-edit-profile__form">
            <div class="box med-1of2">
                <label class="form__label" for="user_manager_profile_work_experience"><span>Work Experience</span></label>
                <textarea id="user_manager_profile_work_experience" name="user_manager_profile_work_experience" class="form__textarea textAreaInput"></textarea>
            </div>
            <div class="box med-1of2">
                <label class="form__label" for="user_manager_profile_work_experience_fr"><span>Work Experience_fr</span></label>
                <textarea id="user_manager_profile_work_experience_fr" name="user_manager_profile_work_experience_fr" class="form__textarea textAreaInput"></textarea>
            </div>
            <div class="box med-1of2">
                <label class="form__label" for="user_manager_profile_education"><span>Education</span></label>
                <textarea id="user_manager_profile_education" name="user_manager_profile_education" class="form__textarea textAreaInput"></textarea>
            </div>
            <div class="box med-1of2">
                <label class="form__label" for="user_manager_profile_education_fr"><span>Education_fr</span></label>
                <textarea id="user_manager_profile_education_fr" name="user_manager_profile_education_fr" class="form__textarea textAreaInput"></textarea>
            </div>
        </div>
    </div>

    <div class="createEditProfileSubmitPane manager-edit-profile__button-form flex-grid">
        <div class="formGroup box med-1of2">
            <input id="otherCloseButton" type="button" value="Close" onclick="CreateEditProfileAPI.hideViewProfile();" class="button--grey closeProfileButton">
        </div>
        <div class="formGroup box med-1of2">
            <input id="otherBackButton" type="button" value="Back" onclick="CreateEditProfileAPI.goToStep('createEditProfile_teamCulture');" class="button--grey">
            <input id="createEditProfileSubmitButton" type="button" value="Submit" onclick="CreateEditProfileAPI.validateOther();" class="button--yellow">
        </div>
    </div>
</div>
<?php // END - Edit Admin Profile Form (Page 5 / Other) ?>
