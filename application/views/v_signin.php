<div class="fh5co-hero">
	<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url(<?php echo base_url() ?>_assets/images/cover_bg_1.jpg);">
		<div class="desc">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12 form-signin">
						<div class="tabulation animate-box">

							<!-- Nav tabs -->
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active">
									<a href="#flights" aria-controls="flights" role="tab" data-toggle="tab">Signin</a>
								</li>
							</ul>

							<!-- Tab panes -->
							<form action="<?php echo base_url() ?>searchfull" method="POST">
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane active" id="flights">
										<div class="row">
											<div class="col-xxs-12 col-xs-12 mt">
												<div class="input-field">
													<label for="from">Username:</label>
													<input name="rute_from" type="text" class="form-control" id="from-place" />
												</div>
											</div>
											<div class="col-xxs-12 col-xs-12 mt">
												<div class="input-field">
													<label for="from">Password:</label>
													<input name="rute_to" type="text" class="form-control" id="to-place" />
												</div>
											</div>
										
											<div class="col-xs-12">
												<input name="submit" type="submit" class="btn btn-primary btn-block" value="Signin">
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>