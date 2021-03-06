<?php // BEGIN - Edit Admin Profile Form (Page 5 / Other) ?>
<div id="createEditProfile_step3" class="stepGroup_createEditProfile hidden">

    <div class="tabsWrapper">
        <div class="tabsSteps">
            <div class="five-step-tab"><a href="javascript:void(0)" onclick="CreateEditProfileAPI.goToStep('createEditProfile_step1');"><span id="createEditProfileStep1Label_3">About</span></a></div>
            <div class="five-step-tab"><a href="javascript:void(0)" onclick="CreateEditProfileAPI.goToStep('createEditProfile_step2');"><span id="createEditProfileStep2Label_3">Leadership</span></a></div>
            <div class="five-step-tab"><a href="javascript:void(0)" onclick="CreateEditProfileAPI.goToStep('createEditProfile_workEnvironment');"><span id="createEditProfileWorkEnvironmentLabel_3">Work Environment</span></a></div>
            <div class="five-step-tab "><a href="javascript:void(0)" onclick="CreateEditProfileAPI.goToStep('createEditProfile_teamCulture');"><span id="createEditProfileTeamCultureLabel_3">Team Culture</span></a></div>
            <div class="five-step-tab tab-current"><a href="javascript:void(0)" onclick="CreateEditProfileAPI.goToStep('createEditProfile_step3');"><span id="createEditProfileStep3Label_3">Other</span></a></div>
        </div>
        <div class="tabs">
            <div class="steptab inactive"> </div>
            <div class="steptab inactive"> </div>
            <div class="steptab inactive"> </div>
            <div class="steptab inactive"> </div>
            <div class="steptab active"> </div>
        </div>
    </div>

    <br>

    <div class="stepGroupForm">

        <div class="">

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

</div>
<?php // END - Edit Admin Profile Form (Page 5 / Other) ?>
