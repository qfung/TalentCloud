<?php // BEGIN - Profile Basic Info Edit Overlay?>
<div id="profileBasicInfoEditOverlay" class="hidden dialogOverlay" role="dialog" aria-labelledby="profileBasicInfoEditTitle" aria-describedby="profileBasicInfoFormDescription">

    <div id="profileBasicInfoEditWrapperWindow" class="dialogue-modal dialogThreeQuarterWrapperWindow">

        <div id="profileBasicInfoFormWrapper">

            <div id='profileBasicInfoEditTitleWrapper' class="dialogTitle dialogue-modal__title-wrapper">
                <strong id='profileBasicInfoEditTitle' title="Edit your basic info" class="dialogue-modal__title">Edit Your Basic Info</strong>
                <div class="hidden" id="profileBasicInfoFormDescription">Edit Your Basic Info</div>
            </div>

            <div class="dialogWindowInterior">

                <?php // Modal Flex Grid ======================================= ?>

                <div class="dialogue-modal__grid update-profile__grid flex-grid middle">

                    <?php // Profile Upload Section (TAL-36) =================== ?>

                    <div class="box lg-2of5">

                        <?php include 'inc/common/edit-photo.php';?>

                    </div>

                    <?php // Profile Information Form ========================== ?>

                    <div class="box lg-3of5">

                        <form name="profileBasicInfoForm" id="profileBasicInfoForm" method="post" enctype="application/x-www-form-urlencoded" class="update-profile__applicant-profile-form flex-grid top">

                            <div class="box full">
                                <label for="profileEditName">
                                    <span>Name:</span>
                                </label>
                                <input class="form-control full-width" type="text" name="profileEditName" id="profileEditName" readonly=""/>
                                <a href="https://account.gccollab.ca/profile/" target="_blank">Edit My OpenId Profile</a>
                            </div>

                            <div class="box full">
                                <label for="profileEditTagline">
                                    <span>Tagline:</span>
                                </label>
                                <div>
                                    <input class="form__input--text" type="text" name="profileEditTagline" id="profileEditTagline"/>
                                </div>
                            </div>

                            <div class="box full">
                                <label for="profileEditTwitter" class="form__label">
                                    <img src="images/twitter.png" alt="Twitter logo" class="form-icon"/>
                                    <span id="updateProfileApplicantProfileFormTwitterLabelSpan">Twitter Handle:</span>
                                    <strong id="profileEditTwitterError" class="error hidden">
                                        <span id="profileEditTwitterErrorMsg" class="label label-danger"></span>
                                    </strong>
                                </label>
                                <div>
                                    <input class="form__input--text" type="text" name="profileEditTwitter" id="profileEditTwitter" placeholder="@Username"/>
                                </div>
                            </div>

                            <div class="box full">
                                <label for="profileEditLinkedin" class="form__label">
                                    <img src="images/linkedin.png" alt="LinkedIn logo" class="form-icon"/>
                                    <span id="updateProfileApplicantProfileFormLinkedinLabelSpan">LinkedIn Profile Address:</span>
                                    <strong id="profileEditLinkedinError" class="error hidden">
                                        <span id="profileEditLinkedinErrorMsg" class="label label-danger"></span>
                                    </strong>
                                </label>
                                <div class="flex-grid top">
                                    <span class="update-profile__linkedin-label" onclick="document.getElementById('profileEditLinkedin').focus()">https://www.linkedin.com/in/</span>
                                    <input class="form__input--text box update-profile__linkedin-input" type="text" name="profileEditLinkedin" id="profileEditLinkedin" placeholder="example"/>
                                </div>
                            </div>

                            <div class="box med-1of2">

                            </div>

                            <div class="box med-1of2">
                                <input type="button" id="profileBasicInfoEditCancel" value="Cancel" class="button--grey" onclick="JobSeekerAPI.hideJobSeekerProfileEditOverlays()"/>
                                <input type="button" id="profileBasicInfoEditSave" value="Save" class="button--yellow" onclick="JobSeekerAPI.saveJobSeekerProfileChanges()" tabindex="0"/>
                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>
