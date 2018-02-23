<div class="flight-wrapper">

	<!-- ###### -->
	<div class="flight-booking-info row">
		<div class="col-lg-12 ">
			<div class="customer-data">
				<div class="booking-title">
					<h4>
						<span class="glyphicon glyphicon-user"></span>
						Booking
					</h4>
					<div class="booking-line"></div>
					<h3 class="booking-code">Your Booking Code <span><?php echo $_GET['reservation_code'] ?></span></h3>
				</div>
			</div>
		</div>
		<div class="col-lg-7">
			<?php $i=1 ?>
			<?php foreach ( $customer as $value ): ?>
			<div class="customer-data">
				<div class="booking-title">
					<h4>
						<span class="glyphicon glyphicon-user"></span>
						Passengers
						<?php echo $i ?>
					</h4>
					<div class="booking-line"></div>
				</div>
				<table class="table-customer">
					<tr>
						<td class="h">Name</td>
						<td>:</td>
						<td class="c">
							<?php echo $value['name'] ?>
						</td>
					</tr>
					<tr>
						<td class="h">Address</td>
						<td>:</td>
						<td class="c">
							<?php echo $value['address'] ?>
						</td>
					</tr>
					<tr>
						<td class="h">Phone</td>
						<td>:</td>
						<td class="c">
							<?php echo $value['phone'] ?>
						</td>
					</tr>
					<tr>
						<td class="h">Email</td>
						<td>:</td>
						<td class="c">
							<?php echo $value['email'] ?>
						</td>
					</tr>
					<tr>
						<td class="h">Gender</td>
						<td>:</td>
						<td class="c">
							<?php echo $value['gender'] ?>
						</td>
					</tr>
					<tr class="s">
						<td class="h">Seat</td>
						<td>:</td>
						<td class="c">
							<?php echo $value['seat'] ?>
						</td>
					</tr>
				</table>
			</div>
			<?php $i++ ?>
			<?php endforeach; ?>

		</div>

		<div class="col-lg-5 ">
			<div class="flight-booking-1">
				<div class="booking-title">
					<h4>
						<span class="glyphicon glyphicon-plane"></span> Flight Details</h4>
					<div class="booking-line"></div>
				</div>
				<table class="flight-table table-customer">
					<tr>
						<td>Airline</td>
						<td> : </td>
						<td class="c">
							<?php echo $rute['code'] ?>
						</td>
					</tr>
					<tr>
						<td>Depart</td>
						<td> : </td>
						<td class="c">
							<?php 
                echo date('G:i:s, D d M Y', strtotime($rute['depart']));
                ?>
						</td>
					</tr>
					<tr>
						<td>Arrive</td>
						<td> : </td>
						<td class="c">
							<?php 
                echo date('G:i:s, D d M Y', strtotime($rute['arrive']));
                ?>
						</td>
					</tr>
					<tr>
						<td>Duration</td>
						<td> : </td>
						<td class="c">
							<?php
            $datetime1 = new DateTime($rute['depart']); //convert to datetime
            $datetime2 = new DateTime($rute['arrive']); //convert to datetime
            $interval = $datetime1->diff($datetime2); //get interval from two datetime
            echo $interval->format('%d d %H h %i m'); //convert interval to  day hours and minute
            //materikita.com
            ?>
						</td>
					</tr>
					<tr>
						<td>Class</td>
						<td> : </td>
						<td class="c">
							<?php echo $rute['class'] ?>
						</td>
					</tr>
				</table>
			</div>

			<div class="flight-booking-2">
				<div class="booking-title">
					<h4>
						<span class="glyphicon glyphicon-pencil"></span> Summary</h4>
					<div class="booking-line"></div>
				</div>

				<?php if ( $rute['status'] == 0 ): ?>
				<h3 class="status-unpaid">UNPAID</h3>
				<?php else: ?>
				<h3 class="status-paid">PAID</h3>
				<?php endif; ?>

				<table class="summary-table table-customer">
					<tr>
						<td>Ticket Price</td>
						<td> : </td>
						<td class="c">
							<?php 
            echo "Rp." . strrev(implode('.', str_split(strrev(strval($rute['price'])), 3)));
            ?>
						</td>
					</tr>
					<tr>
						<td>Total Passengers</td>
						<td> : </td>
						<td class="c">
							<?php echo count($customer) ?>
						</td>
					</tr>
					<tr class="price-you-pay">
						<td>Price you pay</td>
						<td> : </td>
						<td class="c">
							<?php 
            echo "Rp." . strrev(implode('.', str_split(strrev(strval(count($customer)*$rute['price'])), 3)));
            ?>
						</td>
					</tr>
				</table>
				<?php if ( $rute['status'] == 0 ): ?>
				<div class="booking-unpaid">
					<h4>Your Booking successfull, to finishing your payment, please transfer your money to : </h4>
					<table class="table-payment">
						<tr>
							<td>Mandiri</td>
							<td>:</td>
							<td>23232323</td>
						</tr>
						<tr>
							<td>BCA</td>
							<td>:</td>
							<td>32545454</td>
						</tr>
						<tr>
							<td>BRI</td>
							<td>:</td>
							<td>5675676</td>
						</tr>
					</table>
				</div>
				<div class="booking-paid">
					<!-- <div class="booking-line"></div> -->
					<h4>Upload your proof of payment</h4>
					<form action="">
						<input class="form-control" type="file">
						<button class="choose-btn">Upload</button>
					</form>
				</div>

				<?php else: ?>
				<div class="booking-paid">
					<h4>Your payment is successfull</h4>
					
				</div>
				<?php endif; ?>
				
			</div>


		</div>
	</div>
</div>
</div>
