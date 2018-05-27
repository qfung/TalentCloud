<!-- BEGIN - Edit Admin Profile Section -->
<section id="createEditProfileSection" class="hidden">
    <div class="block-container">

        <div id="createEditProfilePicWrapper" class="profileBasicInfoTopBar flexContainerVerticallyCentered">
            <div class="flexLeftOfCenter"></div>
            <img id="myProfilePic" class="profilePicLarge" src="../images/user.png" alt="Profile Pic"/>
            <div class="flexRightOfCenter">
                <button type="button" id="editMyProfilePic" onclick="CreateEditProfileAPI.showUploadProfilePic()" class="profile__edit-trigger">
                    <span class="hidden">Edit my profile picture</span>
                    <i class="fa fa-pencil-square"></i>
                </button>
            </div>
        </div>

        <div class="wb-frmvld wb-init section">
            <!-- Where the old steps resided -->
            <form method="post" name="CreateEditProfileForm" id="CreateEditProfileForm">
                <input type="hidden" id="UserId"/>
                <input type="hidden" id="ManagerProfileId"/>
                <input type="hidden" id="ManagerProfileDetailsId"/>

                <div id="profileCommon">
                    <span id="createEditProfile_name_preview" class="profileName">name</span>
                    <span id="createEditProfile_position_preview" class="managerProfileTitle">position</span>
                    <!-- Remove?
                    <div style="text-align: center;width:100%;">
                        <div style="width:500px;margin:1em auto;text-align: center;">
                            <span id="createEditProfile_department_preview" class="managerProfileDepartment">department</span>
                        </div>
                    </div>-->
                </div>
                <?php
                    include "page-profile-about-me.php";
                    include "page-profile-leadership-style.php";
                    include "page-profile-work-environment.php";
                    include "page-profile-team-culture.php";
                    include "page-profile-other.php"; ?>
            </form>
        </div>

    </div>
</section>
<!-- END - Edit Admin Profile Section -->
