<?php // BEGIN - Edit Admin Profile Form (Page 5 / Other) ?>
<div id="createEditProfile_step3" class="stepGroup_createEditProfile hidden">
    <div class="tabsWrapper">
        <div class="tabsSteps">
            <div class="five-step-tab"><span id="createEditProfileStep1Label_3">About</span></div>
            <div class="five-step-tab"><span id="createEditProfileStep2Label_3">Leadership</span></div>
            <div class="five-step-tab"><span id="createEditProfileWorkEnvironmentLabel_3">Work Environment</span></div>
            <div class="five-step-tab "><span id="createEditProfileTeamCultureLabel_3">Team Culture</span></div>
            <div class="five-step-tab tab-current"><span id="createEditProfileStep3Label_3">Review</span></div>
        </div>
        <div class="tabs">
            <div class="steptab inactive"> </div>
            <div class="steptab inactive"> </div>
            <div class="steptab inactive"> </div>
            <div class="steptab inactive"> </div>
            <div class="steptab active"> </div>
        </div>
    </div>
    <div class="stepGroupForm">

        <fieldset>
            <legend>Other</legend>
            <div>
                <div class="form-group">
                    <div class="multi-btn-group-form-group-label">
                        <label for="user_manager_profile_work_experience"><span>Work Experience</span></label>
                    </div>
                    <div style="display:inline-block;width:49%">
                        <div>
                            <textarea id="user_manager_profile_work_experience" name="user_manager_profile_work_experience" class="textAreaInput"></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="multi-btn-group-form-group-label">
                        <label for="user_manager_profile_education"><span>Education</span></label>
                    </div>
                    <div style="display:inline-block;width:49%">
                        <div>
                            <textarea id="user_manager_profile_education" name="user_manager_profile_education" class="textAreaInput"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
        <div class="createEditProfileSubmitPane">
            <div class="formGroup insert"></div>
            <div class="formGroup">
                <input id="createEditProfile_goToTeamCulture_2" type="button" value="Go to Team Culture" onclick="CreateEditProfileAPI.goToStep('createEditProfile_teamCulture')">
                <input id="createEditProfileSubmitButton" type="button" value="Submit" onclick="CreateEditProfileAPI.validateStep3();">
            </div>
        </div>
    </div>
</div>
<?php // END - Edit Admin Profile Form (Page 5 / Other) ?>
</form>
</div>
</div>
</div>
</div>
</div>
</section>
<?php // END - Edit Admin Profile Section ?>
