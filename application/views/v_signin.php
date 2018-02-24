<div class="fh5co-hero">
	<div class="fh5co-cover" data-stellar-background-ratio="0.5">
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
							<?php if ( isset($_GET['alert']) ): ?>
								<?php if ( $_GET['alert'] == 'success' ): ?>
								<div class="alert alert-success">
									<p>Sign up successful</p>
								</div>
								<?php elseif ( $_GET['alert'] == 'failed' ): ?>
								<div class="alert alert-failed">
									<p>Username and password do not match</p>
								</div>
								<?php endif; ?>
							<?php endif; ?>				

							<!-- Tab panes -->
							<form action="<?php echo base_url() ?>account/signin_process" method="POST">
							<input type="hidden" name="url_before" value='<?php 
								if(isset($_GET['url'])){
									echo $_GET['url'];
								}
								else{
									echo '';
								}
								?>'>
							<div class="tab-content">
									<div role="tabpanel" class="tab-pane active" id="flights">
										<div class="row">
											<div class="col-xxs-12 col-xs-12 mt">
												<div class="input-field">
													<label for="from">Username:</label>
													<input name="username" type="text" class="form-control" id="from-place" />
												</div>
											</div>
											<div class="col-xxs-12 col-xs-12 mt">
												<div class="input-field">
													<label for="from">Password:</label>
													<input name="password" type="text" class="form-control" id="to-place" />
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