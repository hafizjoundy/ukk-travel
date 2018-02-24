<div class="flight-wrapper">

	<div class="search-flight-title animated fadeIn">
		<!-- get data from get -->
		<h4>
			<span class="glyphicon glyphicon-plane"></span>
			Trip from
			<b>
				<?php echo $_GET['rute_from'] ?>
			</b> to
			<b>
				<?php echo $_GET['rute_to'] ?>
			</b>
		</h4>


		<p>
			<b>
				<?php
        // convert date to month day using date function php
			$date = strtotime($_GET['depart_date']);
			echo date("D d M Y", $date);
			?>
			</b>
		</p>

		<p>
			<b>
				<span>
					<?php echo $_GET['passengers'] ?> Passengers, </span>
				<span>
					<?php echo $_GET['flight_class'] ?> Class</span>
			</b>
		</p>

	</div>


	<div class="search-flight animated fadeInUpBig">
		<div class="search-header">
			<div class="col-lg-3">
				<h6>Airline</h6>
			</div>
			<div class="col-lg-2">
				<h6>Depart</h6>
			</div>
			<div class="col-lg-2">
				<h6>Arrive</h6>
			</div>
			<div class="col-lg-2">
				<h6>Duration</h6>
			</div>
			<div class="col-lg-3">
				<h6>Price per Person</h6>
			</div>
		</div>

		<!-- foreach variabel data as value -->
		<?php foreach ($data as $value) : ?>
		<?php 

		$seat_bookeds = 0;
		if (count($value['seat_bookeds']) > 0) {
			$seat_bookeds = count($value['seat_bookeds']);
		}
		$seat_available = $value['seat_total'] - $seat_bookeds;

		?>

		<div class="flight-rute row <?php echo ($seat_available > 0 ? '' : 'rute-full' ) ?>">
			<form class="row form-flight" action="<?php echo base_url() ?>prebooking/" method="GET">
				<input type="hidden" name="passengers" value="<?php echo $_GET['passengers'] ?>">
				<input type="hidden" name="rute_from" value="<?php echo $_GET['rute_from'] ?>">
				<input type="hidden" name="rute_to" value="<?php echo $_GET['rute_to'] ?>">
				<input type="hidden" name="depart_date" value="<?php
        
        // convert date to month day using date function php
																																																		$date = strtotime($_GET['depart_date']);
																																																		echo date(" D d M Y ", $date);
																																																		?>">
				<input type="hidden" name="flight_class" value="<?php echo $_GET['flight_class'] ?>">
				<?php if ( $seat_available > 0): ?>
				<input type="hidden" name="rute_id" value="<?php echo $value['id']; ?>">					
				<?php endif; ?>
				<div class="col-lg-3">
					<p>
						<?php echo $value['code']; ?>
					</p>
						<p>
						<?php echo $value['class']; ?> Class
						</p>
						<p>
						<?php if ( $seat_available > 0): ?>
						Seat Availabel : <?php echo $seat_available ?>
						<?php else: ?>
						Seat Not Available
						<?php endif; ?>	
						</p>
				</div>
				<div class="col-lg-2">
					<p>
						<?php 
					echo date('G:i:s', strtotime($value['depart']));
					?>
					</p>
					<p class="flight-rute-date">
						<?php 
					echo date('D d M Y', strtotime($value['depart']));
					?>
					</p>
					<p>
						<?php echo $value['rute_from']; ?>
					</p>
				</div>
				<div class="col-lg-2">
					<p>
						<?php 
					echo date('G:i:s', strtotime($value['arrive']));
					?>
					</p>
					<p class="flight-rute-date">
						<?php 
					echo date('D d M Y', strtotime($value['arrive']));
					?>
					</p>
					<p>
						<?php echo $value['rute_to']; ?>
					</p>
				</div>
				<div class="col-lg-2">
					<p>

						<!-- duration -->
						<?php
					$datetime1 = new DateTime($value['depart']); //convert to datetime
					$datetime2 = new DateTime($value['arrive']); //convert to datetime
					$interval = $datetime1->diff($datetime2); //get interval from two datetime
					echo $interval->format('%d d %H h %i m'); //convert interval to  day hours and minute
            //materikita.com
					?>

					</p>
				</div>
				<div class="col-lg-3">
					<p class="flight-price">

						<!-- convert number to idr format -->
						<?php 
					echo "Rp." . strrev(implode('.', str_split(strrev(strval($value['price'])), 3)));
					?>

					</p>
					<?php if ( $seat_available > 0): ?>
					<button class="choose-btn">Choose</button>						
					<?php else: ?>		
					<button disabled class="choose-btn btn-full">Full</button>					
					<?php endif; ?>
				</div>
			</form>
		</div>

		<!-- end foreach -->
		<?php endforeach; ?>

	</div>
</div>
