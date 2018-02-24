<div class="flight-wrapper">

	<!-- ###### -->
	<div class="flight-booking-info row">

		<div class="col-lg-7 animated fadeInLeft">

			<form action="<?php echo base_url() ?>booking/insert_customer" method="POST">
				<input name="key" value="<?php echo $_GET['key'] ?>" type="hidden">
				<?php for ($i = 1; $i <= $data['passengers']; $i++) : ?>

				<div class="customer-data">
					<div class="booking-title">
						<h4>
							<span class="glyphicon glyphicon-user"></span>Passengers Penumpang
							<?php echo $i ?>
						</h4>
						<div class="booking-line"></div>
					</div>
					<label for="">Nama</label>
					<input class="form-control" type="text" name="name[]">
					<br>
					<label for="">Address</label>
					<textarea style="height: 60px;" class="form-control" name="address[]" id="" cols="30" rows="10"></textarea>
					<br>
					<div class="row">
						<div class="col-lg-6">
							<label for="">Phone</label>
							<input class="form-control" type="text" name="phone[]">
						</div>
						<div class="col-lg-6">
							<label for="">Email</label>
							<input class="form-control" type="text" name="email[]">
						</div>
					</div>
					<br>
					<label for="">Gender</label>
					<select class="form-control" name="gender[]" id="">
						<option value="l">Male</option>
						<option value="p">Female</option>
					</select>
				</div>
				<?php endfor; ?>





		</div>




		<div class="col-lg-5 animated fadeInRight">
			<div class="flight-booking-1">
				<div class="booking-title">
					<h4>
						<span class="glyphicon glyphicon-plane"></span> Flight Details</h4>
					<div class="booking-line"></div>
				</div>
				<table class="flight-table">
					<tr>
						<td>Airline</td>
						<td> : </td>
						<td>
							<?php echo $data_rute['code'] ?>
						</td>
					</tr>
					<tr>
						<td>Depart</td>
						<td> : </td>
						<td>
							<?php 
                        echo date('G:i:s, D d M Y', strtotime($data_rute['depart']));
                        ?>
						</td>
					</tr>
					<tr>
						<td>Arrive</td>
						<td> : </td>
						<td>
							<?php 
                        echo date('G:i:s, D d M Y', strtotime($data_rute['arrive']));
                        ?>
						</td>
					</tr>
					<tr>
						<td>Duration</td>
						<td> : </td>
						<td>
							<!-- duration -->
							<?php
                    $datetime1 = new DateTime($data_rute['depart']); //convert to datetime
                    $datetime2 = new DateTime($data_rute['arrive']); //convert to datetime
                    $interval = $datetime1->diff($datetime2); //get interval from two datetime
                    echo $interval->format('%d d %H h %i m'); //convert interval to  day hours and minute
                    //materikita.com
                    ?>

						</td>
					</tr>
					<tr>
						<td>Class</td>
						<td> : </td>
						<td>
							<?php echo $data_rute['class'] ?>
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
				<table class="summary-table">
					<tr>
						<td>Ticket Price</td>
						<td> : </td>
						<td>
							<?php 
            echo "Rp." . strrev(implode('.', str_split(strrev(strval($data_rute['price'])), 3)));
            ?>
						</td>
					</tr>
					<tr>
						<td>Total Passengers</td>
						<td> : </td>
						<td>
							<?php echo $data['passengers'] ?>
						</td>
					</tr>
					<tr class="price-you-pay">
						<td>Price you pay</td>
						<td> : </td>
						<td>
							<?php 
            echo "Rp." . strrev(implode('.', str_split(strrev(strval($data['passengers']*$data_rute['price'])), 3)));
            ?>
						</td>
					</tr>
				</table>
			</div>


		</div>
	</div>

	<div class="booking-continue animated fadeInUp">
		<button type="submit" name="submit" class="choose-btn">Continue</button>
	</div>

	</form>

</div>
<!-- ###### -->
</div>
