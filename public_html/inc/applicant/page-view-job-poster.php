<section class="job-poster hidden" id="viewJobPosterSection">

    <?php /* New Job Poster */ ?>

    <section class="job-poster__heading">

        <div class="block-container">

            <div class="flex-grid bottom">

                <div class="box lg-2of3">
                    <h2 class="job-poster__job-title" id="jobPosterTitle">Job Title</h2>
                    <p class="job-poster__department" id="jobPosterLocation">
                        <span id="jobPosterDepartment"></span>
                        <br>
                        <span id="jobPosterCity"></span>, 
                        <span id="jobPosterProvince"></span>
                        <br>
                        <span id="jobPosterRemoteWorkHeader">Remote work</span>
                    </p>
                </div>

                <div class="box lg-1of3">
                    <p class="job-poster__reference-id" id="jobPosterId"><span id="jobPosterIdLabel">Reference ID</span> #<span id="jobPosterIdValue"></span></p>
                </div>

                <input id="jobPosterJobId" type="hidden"/>

            </div>

        </div>

    </section>

    <div class="job-poster__section-wrapper block-container">

        <div class="flex-grid">

            <div class="job-poster__subnav-wrapper box lg-1of4">
                <div class="job-poster__subnav-sticky-wrapper">
                    <span class="job-poster__subnav-job-title">User Experience Designer</span>
                    <span class="job-poster__subnav-department">Transport Canada</span>
                    <span class="job-poster_subnav-label">About This Job:</span>
                    <a href="#basics" class="job-poster__subnav-item">Basic Information</a>
                    <a href="#impact" class="job-poster__subnav-item">Impact</a>
                    <a href="#work" class="job-poster__subnav-item">Your Work</a>
                    <a href="#criteria" class="job-poster__subnav-item">Criteria</a>
                    <a href="#culture" class="job-poster__subnav-item">Culture</a>
                    <a href="#know" class="job-poster__subnav-item">Need to Know</a>
                    <a href="#apply" class="job-poster__subnav-item">Apply for this Job</a>
                </div>
            </div>

            <div class="job-poster__content-wrapper box lg-3of4">
                
                <a id="basics" aria-hidden="true"></a>
                <section class="job-poster__basics">
                    <div class="flex-grid">
                        <div class="box full">
                            <h3 class="job-poster__basics-title">Basic Information</h3>
                        </div>
                        <div class="box med-1of2">
                            <h4 class="job-poster__basics-label" id="jobPosterJobLevelLabel">Classification</h4>
                            <span class="job-poster__basics-content" id="jobPosterJobLevelValue">CS1</span>
                            <h4 class="job-poster__basics-label" id="jobPosterClearanceLevelLabel">Security Clearance</h4>
                            <span class="job-poster__basics-content" id="jobPosterClearanceLevelValue">CS1</span>
                            <h4 class="job-poster__basics-label" id="jobPosterTermLabel">Duration</h4>
                            <span class="job-poster__basics-content" id="jobPosterTermValue">CS1</span>
                        </div>
                        <div class="box med-1of2">
                            <h4 class="job-poster__basics-label" id="jobPosterSalaryRangeLabel">Salary Range</h4>
                            <span class="job-poster__basics-content" id="jobPosterSalaryRangeValue">CS1</span>
                            <h4 class="job-poster__basics-label" id="jobPosterLanguageLabel">Language</h4>
                            <span class="job-poster__basics-content" id="jobPosterLanguageValue">CS1</span>
                            <h4 class="job-poster__basics-label" id="jobPosterStartDateLabel">Target Start Date</h4>
                            <span class="job-poster__basics-content" id="jobPosterStartDateValue">CS1</span>
                        </div>
                    </div>
                </section>

                <a id="impact" aria-hidden="true"></a>
                <section class="job-poster__impact">
                    <h3 class="job-poster__content-title">Impact</h3>
                    <p class="job-poster__content-copy" id="jobPosterImpact"></p>
                </section>

                <a id="work" aria-hidden="true"></a>
                <section class="job-poster__work">
                    <h3 class="job-poster__content-title">Your Work</h3>
                    <ul class="job-poster__content-list" id="jobPosterKeyTasks"></ul>
                </section>

                <a id="criteria" aria-hidden="true"></a>
                <section class="job-poster__criteria">
                    <div class="flex-grid">
                        <div class="box full">
                            <h3 class="job-poster__content-title">Criteria</h3>
                        </div>
                        <div class="box med-1of2">
                            <h4 class="job-poster__content-subtitle" id="jobPosterCoreCompetenciesLabel">Need to Have</h4>
                            <ul class="job-poster__content-list" id="jobPosterCoreCompetencies"></ul>
                        </div>
                        <div class="box med-1of2">
                            <h4 class="job-poster__content-subtitle" id="jobPosterDevelopingCompetenciesLabel">Nice to Have</h4>
                            <ul class="job-poster__content-list" id="jobPosterDevelopingCompetencies"></ul>
                        </div>
                    </div>
                </section>

                <a id="culture" aria-hidden="true"></a>
                <section class="job-poster__culture">
                    <h3 class="job-poster__content-title">Culture</h3>
                </section>

                <a id="know" aria-hidden="true"></a>
                <section class="job-poster__know">
                    <h3 class="job-poster__content-title">Need to Know</h3>
                    <h4 class="job-poster__content-subtitle">What You Need for Security Clearance</h4>
                    <p class="job-poster__content-copy" id="jobPosterImpact">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent dapibus, purus a congue bibendum, nibh quam convallis leo, a pharetra dui ante nec magna. Proin elementum lacus venenatis nulla luctus, sed porttitor quam ullamcorper. Proin in facilisis sapien, in ullamcorper orci.</p>
                    <h4 class="job-poster__content-subtitle">The Application Process</h4>
                    <p class="job-poster__content-copy" id="jobPosterImpact">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent dapibus, purus a congue bibendum, nibh quam convallis leo, a pharetra dui ante nec magna. Proin elementum lacus venenatis nulla luctus, sed porttitor quam ullamcorper. Proin in facilisis sapien, in ullamcorper orci.</p>
                    <h4 class="job-poster__content-subtitle">Other Paperwork & Preparation</h4>
                    <p class="job-poster__content-copy" id="jobPosterImpact">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent dapibus, purus a congue bibendum, nibh quam convallis leo, a pharetra dui ante nec magna. Proin elementum lacus venenatis nulla luctus, sed porttitor quam ullamcorper. Proin in facilisis sapien, in ullamcorper orci.</p>
                </section>

                <a id="apply" aria-hidden="true"></a>
                <section class="job-poster__apply">
                    <div class="job-poster__apply-accommodation-wrapper">
                        <div class="flex-grid middle">
                            <div class="box full">
                                <h3 class="job-poster__apply-title">Apply for this Job</h3>
                            </div>
                            <div class="box med-1of5">
                                <i class="fas fa-hand-holding-heart"></i>
                            </div>
                            <div class="box med-4of5">
                                <p class="job-poster__apply-content">Please advise Talent Cloud at talent.cloud-nuage.de.talents@tbs-sct.gc.ca of any accomodations you may require during the selection.</p>
                            </div>
                        </div>
                    </div>
                    <button class="job-poster__apply-button" id="jobPosterApplyButton" value="
                    Apply Now" onclick="JobApplicationAPI.showCreateJobApplication(document.getElementById('jobPosterJobId').value)">
                        Apply Now
                    </button>
                </section>

            </div>

        </div>

    </div>




    <?php /* Old Job Poster */ ?>

    <div class="pageBody">

        <?php /*
        <section id="jobPosterDatapointsSection">
            <div class="block-container">
                <ul class="jobPosterDatapoints">
                    <li>
                        <span id="jobPosterJobLevelLabel">Classification</span> <span id="jobPosterJobLevelValue"></span>
                    </li>
                    <li>
                        <span id="jobPosterSalaryRangeLabel">Compensation</span> <span id="jobPosterSalaryRangeValue"></span>
                    </li>
                    <li>
                        <span id="jobPosterClearanceLevelLabel">Security clearance level</span> <span id="jobPosterClearanceLevelValue"></span>
                    </li>
                    <li>
                        <span id="jobPosterLanguageLabel">Language</span> <span id="jobPosterLanguageValue"></span>
                    </li>
                    <li>
                        <span id="jobPosterTermLabel">Duration</span> <span id="jobPosterTermValue"></span>
                    </li>
                    <li>
                        <span id="jobPosterStartDateLabel">Target start date</span> <span id="jobPosterStartDateValue"></span>
                    </li>
                </ul>
            </div>
        </section>
        */ ?>

        <?php /*
        <section class='jobPosterSection'>
            <div class="block-container">
                <h4 id="jobPosterImpactLabel" class="jobPosterSectionTitle">Impact</h4>
                <p id="jobPosterImpact"></p>
            </div>
        </section>
        */ ?>

        <?php /*
        <section class='jobPosterSection'>
            <div class="block-container">
                <h4 id="jobPosterKeyTasksLabel" class="jobPosterSectionTitle">Key Tasks</h4>
                <ul id="jobPosterKeyTasks"></ul>
            </div>
        </section>
        <section class='jobPosterSection'>
            <div class="block-container">
                <h4 id="jobPosterCoreCompetenciesLabel" class="jobPosterSectionTitle">Essential Criteria</h4>
                <ul id="jobPosterCoreCompetencies"></ul>
            </div>
        </section>
        <section class='jobPosterSection'>
            <div class="block-container">
                <h4 id="jobPosterDevelopingCompetenciesLabel" class="jobPosterSectionTitle">Asset Criteria</h4>
                <ul id="jobPosterDevelopingCompetencies"></ul>
            </div>
        </section>
        */ ?>

        <section class='jobPosterSection'>
            <div class='block-container'>
                <h4 id="jobPosterHiringManagerLabel" class="jobPosterSectionTitle">Hiring Manager</h4>
                <input type='hidden' id='jobPosterHiringManagerUserId'/>

                <div class="hiringManagerSummaryWrapper">
                    <div id='hiringManagerSummaryImageWrapper'>
                        <img id='jobPosterHiringManagerProfilePic' alt="Hiring Manager" src="images/user.png">
                        <p id='jobPosterHiringManagerName' class="hiringManagerSummaryName"></p>
                    </div>
                    <div id='hiringManagerSummaryContentWrapper' >
                        <div class="hiringManagerSummary"><span id='jobPosterHiringManagerTitle'></span> <span id="jobPosterHiringManagerPositionAtLabel">at</span> <span id='jobPosterHiringManagerDepartment'></span></div>
                        <p id='jobPosterHiringManagerAboutMe' class="truncate"></p>
                        <div id='hiringManagerSummaryButtonWrapper'>
                            <button id="jobPosterHiringManagerButton" class="btn btn-primary" onclick="ManagerProfileAPI.showManagerProfile(document.getElementById('jobPosterHiringManagerUserId').value);">
                                Read More
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class='jobPosterSection'>
            <div class="block-container">
                <h4 id="jobPosterWorkEnvironmentLabel" class="jobPosterSectionTitle">Work Environment</h4>
                <div class="workEnvironmentAnswerWrapper">
                    <p><span id='jobPosterRemoteWork_label'>Remote location allowed</span>: <span class="workEnvironmentAnswer" id="jobPosterRemoteWork"></span></p>
                    <p><span id='jobPosterTelework_label'>Telework allowed</span>: <span class="workEnvironmentAnswer" id="jobPosterTelework"></span></p>
                    <p><span id='jobPosterFlexHours_label'>Flexible hours allowed</span>: <span class="workEnvironmentAnswer" id="jobPosterFlexHours"></span></p>
                </div>
                <div class="workEnvironmentSummaryWrapper">
                    <div id='workEnvironmentSummaryImagesWrapper'>

                        <?php // New Workplace Photo Layout ?>
                        <div class="flex-grid top job-poster__work-environment-photo-grid">


                            <div class="box med-1of2 lg-1of3 job-poster__work-environment-photo-grid-item">
                                <div class="box med-1of2 lg-1of3 job-poster__work-environment-photo" id="jobPosterWorkEnvironment_1" title="First image of workplace environment" style="background-image: url('images/default_workplace_photo.png');"></div>
                            </div>
                            <div class="box med-1of2 lg-1of3 job-poster__work-environment-photo-grid-item">
                                <div class="box med-1of2 lg-1of3 job-poster__work-environment-photo" id="jobPosterWorkEnvironment_2" title="Second image of workplace environment" style="background-image: url('images/default_workplace_photo.png');"></div>
                            </div>
                            <div class="box med-1of2 lg-1of3 job-poster__work-environment-photo-grid-item">
                                <div class="box med-1of2 lg-1of3 job-poster__work-environment-photo" id="jobPosterWorkEnvironment_3" title="Third image of workplace environment" style="background-image: url('images/default_workplace_photo.png');"></div>
                            </div>

                        </div>
                    </div>
                </div>
        </section>
        
        <section class="jobPosterSection">
            <div class="block-container">
                <h4 id="jobPosterTeamCultureLabel" class="jobPosterSectionTitle">Team Culture</h4>
                <div class="container">
                    <div class="container">
                        <p><span id='jobPosterTeamSize_label'>Team size:</span> <span class="blue-highlight-text" id="jobPosterTeamSize"></span></p>
                        <p><span id='jobPosterGcDirLink_label'>Meet the team in</span> <a id="jobPosterGcDirLink" href="#" target="_blank">GCdirectory</a></p>
                        <p><span id="jobPosterTeamNarrativeText_label">About the team:</span> <span id="jobPosterTeamNarrativeText"></span></p>
                        <p><span id="jobPosterOperatingContext_label">Our operating context:</span> <span id="jobPosterOperatingContext_text"></span></p>
                        <p><span id="jobPosterWhatWeValue_label">What we value:</span> <span id="jobPosterWhatWeValue_text"></span></p>
                        <p><span id="jobPosterHowWeWork_label">How we work:</span> <span id="jobPosterHowWeWork_text"></span></p>
                    </div>
                </div>
            </section>

            <?php /*
            <section class="jobPosterSection">
                <div class="container">
                    <div class="accommodationRequest flex-grid middle">
                        <div class="box small-2of10 lg-1of10">
                            <i class="fas fa-hand-holding-heart fa-4x"></i>
                        </div>
                        <div class="box small-8of10 lg-9of10 accommodationRequestText">
                            <span id="accommodationTextStart">Please advise</span>
                            <span id="jobPosterHiringManagerNameAccommodation"></span>
                            <span id="accommodationRequestAt">at</span>
                            <a id="jobPosterHiringManagerEmail"></a>
                            <span id="accommodationTextEnd">of any accomodations you may require during the selection.</span>
                        </div>
                    </div>
                </div>
            </section>
            */ ?>

            <?php /*
            <div id="jobPosterButtonWrapper">
                <button id="jobPosterApplyButton" class="button--yellow" value="View" onclick="JobApplicationAPI.showCreateJobApplication(document.getElementById('jobPosterJobId').value)">
                    Apply Now
                </button>
            </div>
            */ ?>

        </div>
    </section>
    <?php // END - View Job Poster Section ?>
