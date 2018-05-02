<?php /* BEGIN - Applicant Profile Section */?>
<section class="pageContent hidden" id="profileSection">
    <div class="pageBanner">
        <div class="profileBannerFiller"></div>
    </div>
    <div class="pageBody">
        <div class="container">
            <div id="profileBasicInfo" class="profileBasicInfo centered">
                <div id="profileBasicInfoTopBar" class="profileBasicInfoTopBar flexContainerVerticallyCentered">
                    <div class="flexLeftOfCenter">
                        <ul id="profileSocialMediaLinks" class="profileSocialMediaLinks">
                            <li id="profileTwitterLinkWrapper" class="hidden">
                                <a href="#" id="profileTwitterLink" target="_blank"><img src="/images/Twitter_icon_white.svg" class="socialMediaLink" alt="Twitter logo"/></a>
                            </li>
                            <li id="profileLinkedinLinkWrapper" class="hidden">
                                <a href="#" id="profileLinkedinLink" target="_blank"><img src="/images/Linkedin_icon_white.svg" class="socialMediaLink" alt="LinkedIn logo"/></a>
                            </li>
                        </ul>
                    </div>
                    <img id="myProfilePic" class="profilePicLarge" src="images/user.png" alt="Profile Pic"/>
                    <div class="flexRightOfCenter">
                        <a href="javascript:void(0)" class="profileBasicInfoEdit" onclick="JobSeekerAPI.showJobSeekerProfileBasicInfoEdit()">
                            <img src="/images/edit_profile_pic.svg" alt="Edit Basic Info" class="editImage"/>
                        </a>
                    </div>
                </div>
                <div id="profileNameWrapper">
                    <div class="profileName">
                        <span id="profileFirstName"></span> <span id="profileLastName"></span>
                    </div>
                </div>
                <div class="profileTagLineContainer">
                    <p id="profileTagLine">Default tag line!</p>
                    <p>
                    <?php /*<p>*/?>
                    <?php /*<strong>Available: </strong><span id="profileStartDate"></span>*/?>
                    <?php /*<br>*/?>
                    <?php /*<strong>Status: </strong><span id="profileStatus"></span>*/?>
                    <?php /*</p-->*/?>
                    </p>
                </div>
                <input type="hidden" id="profileId"/>
                <input type="hidden" id="profileLastUpdated"/>
            </div>
            <div id="profileAboutMeWrapper" class="profileSubSection">
                <div class="profileSubSectionTitleBar">
                    <h2 id="aboutMe">About Me</h2>
                    <a href="javascript:void(0)" id="profileAboutMeEdit" class="sectionEditBtn" onclick="JobSeekerAPI.showJobSeekerProfileAboutMeEdit()"><img src="/images/btn_edit_dark.png" alt="Edit About Me" class="editImage"/></a>
                </div>
                <p id="profileAboutMe">This is the about me section.</p>
            </div>
            <?php/*
            <div id="profileSkillsWrapper" class="profileSubSection">
                <div class="profileSubSectionTitleBar">
                    <h2>My Skills and Knowledge</h2>
                    <a href="javascript:void(0)" id="profileSkillsEdit" class="sectionEditBtn"><img src="/images/btn_edit_dark.png" alt="Edit Skills" class="editImage"/></a>
                </div>
                <ul id="profileSkillsList">
                </ul>
            </div>*/
            ?>
        </div>
    </div>
</section>
<!-- END - Applicant Profile Section -->
