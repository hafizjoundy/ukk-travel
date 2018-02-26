<div class="row container">
	<section class="content-header">
		<h1>Dashboard</h1>
		<ol class="breadcrumb">
			<li>
				<a href="<?php echo base_url()?>admin">
					<i class="fa fa-dashboard"></i> Dashboard</a>
			</li>
		</ol>
	</section>
	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-aqua">
			<div class="inner">
				<h3><?php echo $reservation ?></h3>

				<p>Reservation</p>
			</div>
			<div class="icon">
				<i class="ion ion-bag"></i>
			</div>
			<a href="<?php echo base_url() ?>admin/reservation" class="small-box-footer">More info
				<i class="fa fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
	<!-- ./col -->
	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-green">
			<div class="inner">
				<h3><?php echo $customer ?>
				</h3>

				<p>Customer</p>
			</div>
			<div class="icon">
				<i class="ion ion-stats-bars"></i>
			</div>
			<a href="<?php echo base_url() ?>admin/customer" class="small-box-footer">More info
				<i class="fa fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
	<!-- ./col -->
	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-yellow">
			<div class="inner">
				<h3><?php echo $rute ?></h3>

				<p>Rute</p>
			</div>
			<div class="icon">
				<i class="ion ion-person-add"></i>
			</div>
			<a href="<?php echo base_url() ?>admin/rute" class="small-box-footer">More info
				<i class="fa fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
	<!-- ./col -->
	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-red">
			<div class="inner">
				<h3><?php echo $transportation ?></h3>

				<p>Transportation</p>
			</div>
			<div class="icon">
				<i class="ion ion-pie-graph"></i>
			</div>
			<a href="<?php echo base_url() ?>admin/transportation" class="small-box-footer">More info
				<i class="fa fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
	<!-- ./col -->
</div>
<div class="row container">
	
	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-aqua">
			<div class="inner">
				<h3><?php echo $user ?></h3>

				<p>User</p>
			</div>
			<div class="icon">
				<i class="ion ion-bag"></i>
			</div>
			<a href="<?php echo base_url() ?>admin/user" class="small-box-footer">More info
				<i class="fa fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
	<!-- ./col -->
</div>
