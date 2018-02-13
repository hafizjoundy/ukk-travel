<div class="fh5co-hero">
	<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url(<?php echo base_url() ?>_assets/images/cover_bg_1.jpg);">
		<div class="desc">
			<div class="container">
				<div class="row">
					<div class="col-sm-5 col-md-5">
						<div class="tabulation animate-box">

							<!-- Nav tabs -->
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active">
									<a href="#flights" aria-controls="flights" role="tab" data-toggle="tab">Flights</a>
								</li>
							</ul>

							<!-- Tab panes -->
							<form action="<?php echo base_url() ?>searchfull" method="GET">
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane active" id="flights">
										<div class="row">
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="from">From:</label>
													<input name="rute_from" type="text" class="form-control" id="from-place" />
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="from">To:</label>
													<input name="rute_to" type="text" class="form-control" id="to-place" />
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt alternate">
												<div class="input-field">
													<label for="date-start">Check In:</label>
													<input name="depart_date" type="text" class="form-control" id="date-start" placeholder="mm/dd/yyyy" />
												</div>
											</div>
											<div class="col-sm-12 mt">
												<section>
													<label for="class">Class:</label>
													<select name="flight_class" class="cs-select cs-skin-border">
														<option value="Economy">Economy</option>
														<option value="First">First</option>
													</select>
												</section>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<section>
													<label for="class">Passengers:</label>
													<select name="passengers" class="cs-select cs-skin-border">
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
													</select>
												</section>
											</div>
											<div class="col-xs-12">
												<input name="submit" type="submit" class="btn btn-primary btn-block" value="Search Flight">
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="desc2 animate-box">
						<div class="col-sm-7 col-sm-push-1 col-md-7 col-md-push-1">
							<!-- <p>Jondes<a href="" target="_blank" class="fh5co-site-name">FreeHTML5.co</a></p> -->
							<h2>Jondes Flight Book</h2>
							<h3>Book Your Travel</h3>
							<span class="price">$ 59,999</span>
							<!-- <p><a class="btn btn-primary btn-lg" href="#">Get Started</a></p> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
