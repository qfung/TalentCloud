<section class="pageContent hidden" id="dashboardSection">

	<?php /* Issue #161 ================================================== */ ?>

		<div class="block-container">

			<?php /* Application Filters */ ?>
			<div class="application-index__filters">

				<div class="flex-grid">

					<?php /* "Sort By" Filter */ ?>
					<div class="box lg-1of2">

						<label class="form__label">Sort By</label>

						<div class="form__select-wrapper">

							<select class="form__select">
								<option>Option 01</option>
								<option>Option 02</option>
								<option>Option 03</option>
								<option>Option 04</option>
								<option>Option 05</option>
							</select>

						</div>

					</div>

					<?php /* "Filter by Department" Filter */ ?>
					<div class="box lg-1of2">

						<label class="form__label">Filter by Department</label>

						<div class="form__select-wrapper">

							<select class="form__select">
								<option>Option 01</option>
								<option>Option 02</option>
								<option>Option 03</option>
								<option>Option 04</option>
								<option>Option 05</option>
							</select>

						</div>

					</div>

				</div>

			</div>

			<?php /* Application Index */ ?>
			<div class="application-index">

				<?php /* Application Template */ ?>
				<div class="application-index__item active repeater__item">

					<div class="application-index__item-header">

						<div class="flex-grid">

							<div class="box med-1of2">
								<h4 class="application-index__item-title">Job Title</h4>
								<span class="application-index__item-department">Job Department</span>
							</div>

							<div class="box med-1of2">
								<span class="application-index__item-close-date-wrapper">
									<span class="application-index__item-close-date-label">Closes in:</span>
									<span>
										<span class="application-index__item-close-date-number">8</span>
										<span class="application-index__item-close-date-days"> Days</span>
									</span>
								</span>
								<span class="application-index__item-closed">Closed</span>
							</div>

						</div>

					</div>

					<div class="application-index__item-body">

						<div class="flex-grid">

							<div class="box lg-3of10 flex-grid top">

								<div class="box small-1of2">
									<label class="application-index__item-label--edit">Last Edited</label>
									<span class="application-index__item-edit-date">2018/02/01</span>
								</div>

								<div class="box small-1of2">
									<label class="application-index__item-label--post">Job Post</label>
									<button class="application-index__link--job-poster">View Post</button>
								</div>

							</div>

							<div class="box lg-7of10 flex-grid middle">

								<div class="box med-1of2">

									<div class="application-index__item-manager-photo"></div>

									<div class="application-index__item-manager">
										<span class="application-index__item-manager-name">Manager Name</span>
										<button class="application-index__link--profile">View Profile</button>
									</div>

								</div>

								<div class="application-index__action-wrapper box med-1of2">
									<button class="application-index__button--edit button--blue">Edit Draft</button>
									<button class="application-index__button--view button--blue">View Application</button>
									<button class="application-index__button--trash">
										<i class="fa fa-trash" title="Delete this draft."></i>
									</button>
									<i class="application-index__icon--submitted fa fa-check" title="This application has been received."></i>
								</div>

							</div>

						</div>

					</div>

				</div>

				<div class="application-index__item expired repeater__item">

					<div class="application-index__item-header">

						<div class="flex-grid">

							<div class="box med-1of2">
								<h4 class="application-index__item-title">Job Title</h4>
								<span class="application-index__item-department">Job Department</span>
							</div>

							<div class="box med-1of2">
								<span class="application-index__item-close-date-wrapper">
									<span class="application-index__item-close-date-label">Closes in:</span>
									<span>
										<span class="application-index__item-close-date-number">8</span>
										<span class="application-index__item-close-date-days"> Days</span>
									</span>
								</span>
								<span class="application-index__item-closed">Closed</span>
							</div>

						</div>

					</div>

					<div class="application-index__item-body">

						<div class="flex-grid">

							<div class="box lg-3of10 flex-grid top">

								<div class="box small-1of2">
									<label class="application-index__item-label--edit">Last Edited</label>
									<span class="application-index__item-edit-date">2018/02/01</span>
								</div>

								<div class="box small-1of2">
									<label class="application-index__item-label--post">Job Post</label>
									<button class="application-index__link--job-poster">View Post</button>
								</div>

							</div>

							<div class="box lg-7of10 flex-grid middle">

								<div class="box med-1of2">

									<div class="application-index__item-manager-photo"></div>

									<div class="application-index__item-manager">
										<span class="application-index__item-manager-name">Manager Name</span>
										<button class="application-index__link--profile">View Profile</button>
									</div>

								</div>

								<div class="application-index__action-wrapper box med-1of2">
									<button class="application-index__button--edit button--blue">Edit Draft</button>
									<button class="application-index__button--view button--blue">View Application</button>
									<button class="application-index__button--trash">
										<i class="fa fa-trash" title="Delete this draft."></i>
									</button>
									<i class="application-index__icon--submitted fa fa-check" title="This application has been received."></i>
								</div>

							</div>

						</div>

					</div>

				</div>

				<div class="application-index__item submitted repeater__item">

					<div class="application-index__item-header">

						<div class="flex-grid">

							<div class="box med-1of2">
								<h4 class="application-index__item-title">Job Title</h4>
								<span class="application-index__item-department">Job Department</span>
							</div>

							<div class="box med-1of2">
								<span class="application-index__item-close-date-wrapper">
									<span class="application-index__item-close-date-label">Closes in:</span>
									<span>
										<span class="application-index__item-close-date-number">8</span>
										<span class="application-index__item-close-date-days"> Days</span>
									</span>
								</span>
								<span class="application-index__item-closed">Closed</span>
							</div>

						</div>

					</div>

					<div class="application-index__item-body">

						<div class="flex-grid">

							<div class="box lg-3of10 flex-grid top">

								<div class="box small-1of2">
									<label class="application-index__item-label--edit">Last Edited</label>
									<span class="application-index__item-edit-date">2018/02/01</span>
								</div>

								<div class="box small-1of2">
									<label class="application-index__item-label--post">Job Post</label>
									<button class="application-index__link--job-poster">View Post</button>
								</div>

							</div>

							<div class="box lg-7of10 flex-grid middle">

								<div class="box med-1of2">

									<div class="application-index__item-manager-photo"></div>

									<div class="application-index__item-manager">
										<span class="application-index__item-manager-name">Manager Name</span>
										<button class="application-index__link--profile">View Profile</button>
									</div>

								</div>

								<div class="application-index__action-wrapper box med-1of2">
									<button class="application-index__button--edit button--blue">Edit Draft</button>
									<button class="application-index__button--view button--blue">View Application</button>
									<button class="application-index__button--trash">
										<i class="fa fa-trash" title="Delete this draft."></i>
									</button>
									<i class="application-index__icon--submitted fa fa-check" title="This application has been received."></i>
								</div>

							</div>

						</div>

					</div>

				</div>

				<h3 class="application-index__section-title">Applications in Progress</h3>

				<div class="application-index__wrapper--progress"></div>

				<div class="application-index__section-null-state--progress">
					<h4 class="application-index__section-null-state-title">You don't have any applications in progress!</h4>
					<p class="application-index__section-null-state-copy">You can browse available jobs to get started using the button below.</p>
					<button class="button--blue">Browse Jobs</button>
				</div>

				<h3 class="application-index__section-title">Expired Applications</h3>

				<div class="application-index__wrapper--expired"></div>

				<div class="application-index__section-null-state--expired">
					<h4 class="application-index__section-null-state-title">None of your applications have expired!</h4>
					<p class="application-index__section-null-state-copy">Be sure to complete your applications before the job post closes.</p>
				</div>

				<h3 class="application-index__section-title">Submitted Applications</h3>

				<div class="application-index__wrapper--submitted"></div>

				<div class="application-index__section-null-state--submitted">
					<h4 class="application-index__section-null-state-title">You haven't completed any applications yet!</h4>
					<p class="application-index__section-null-state-copy">You can browse available jobs to get started using the button below or continue an application you've started in the list above.</p>
					<button class="button--blue">Browse Jobs</button>
				</div>

			</div>

		</div>

	<?php /* ============================================================= */ ?>

    <div class="pageBody">
        <div class="container" id="dashboardContainer">
            <h3 id="yourApplicationsTitle">Your Applications</h3>
            <div id="yourApplications">

            </div>
        </div>
    </div>
</section>
