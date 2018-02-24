<div class="flight-wrapper">

	<!-- ###### -->
	<div class="flight-booking-info row">
		<div class="col-lg-12 animated fadeInUp">
			<div class="customer-data">
				<div class="booking-title">
					<h4>
						<span class="glyphicon glyphicon-list-alt"></span>
						My Reservation
					</h4>
					<div class="booking-line"></div>
				</div>
				<table class="table table-bordered table-reservation">
					<thead>
					  <tr>
						<th>No</th>
						<th>Reservation Code</th>
						<th>Reservation Date</th>
						<th>Route</th>
						<th>Status</th>
						<th>Action</th>
					  </tr>
					</thead>
					<tbody>
					<?php $i = 0 ?>
					<?php foreach ( $reservation as $value ): ?>
					<?php $i++ ?>
						<tr>
							<td><?php echo $i ?></td>
							<td><?php echo $value['reservation_code'] ?></td>
							<td><?php echo date('D d M Y, G:i:s', strtotime($value['reservation_date'])) ?></td>
							<td class="reservation-route">From <span><?php echo $value['rute_from'] ?> to <span><?php echo $value['rute_to'] ?></span></span></td>
							<td>

								<?php 
								if($value['status'] == 1){
									echo "<span class='status-paid'>PAID</span>";
								}
								else{
									echo "<span class='status-unpaid'>UNPAID</span>";
								}
								
								?>

							</td>
							<td>
								<a class="status-check" href="<?php echo base_url() ?>reservation/status/?reservation_code=<?php echo $value['reservation_code'] ?>">Check</a>
							</td>
						</tr>	
					<?php endforeach; ?>
					</tbody>
				  </table>
			</div>
		</div>

	</div>
</div>
</div>
