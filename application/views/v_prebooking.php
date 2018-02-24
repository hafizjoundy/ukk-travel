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
	<!-- ###### -->
	<div class="flight-booking-info row">
		<div class="col-lg-7 animated fadeInLeft">
            <div class="flight-booking-1">
                <div class="booking-title">
                    <h4><span class="glyphicon glyphicon-plane"></span> Flight Details</h4>
                    <div class="booking-line"></div>
                </div>
                <table class="flight-table">
				<tr>
					<td>Airline</td>
					<td> : </td>
					<td>
						<?php echo $data['data_rute']['code'] ?>
					</td>
				</tr>
				<tr>
					<td>Depart</td>
					<td> : </td>
					<td>
                        <?php 
                echo date('G:i:s, D d M Y', strtotime($data['data_rute']['depart']));
                ?>
					</td>
				</tr>
				<tr>
					<td>Arrive</td>
					<td> : </td>
					<td>
                        <?php 
                echo date('G:i:s, D d M Y', strtotime($data['data_rute']['arrive']));
                ?>
					</td>
				</tr>
				<tr>
					<td>Duration</td>
					<td> : </td>
					<td>
						<!-- duration -->
						<?php
            $datetime1 = new DateTime($data['data_rute']['depart']); //convert to datetime
            $datetime2 = new DateTime($data['data_rute']['arrive']); //convert to datetime
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
						<?php echo $data['data_rute']['class'] ?>
					</td>
				</tr>
			</table>
            </div>
        </div>
        <div class="col-lg-5 animated fadeInRight">
            <div class="flight-booking-2">
                <div class="booking-title">
                    <h4><span class="glyphicon glyphicon-pencil"></span> Summary</h4>
                    <div class="booking-line"></div>
                </div>
                <table class="summary-table">
				<tr>
					<td>Ticket Price</td>
					<td> : </td>
					<td>
                        <?php 
            echo "Rp." . strrev(implode('.', str_split(strrev(strval($data['data_rute']['price'])), 3)));
            ?>
					</td>
				</tr>
				<tr>
					<td>Total Passengers</td>
					<td> : </td>
					<td>
						<?php echo $_GET['passengers'] ?>
					</td>
				</tr>
				<tr class="price-you-pay">
					<td>Price you pay</td>
					<td> : </td>
					<td>
                        <?php 
            echo "Rp." . strrev(implode('.', str_split(strrev(strval($data['total_payment'])), 3)));
            ?>
					</td>
				</tr>
			</table>
            </div>
        </div>
	</div>
    <!-- ###### -->
    <form action="<?php echo base_url() ?>prebooking/makebooking" method="POST">
				<input name="rute_id" value="<?php echo $_GET['rute_id'] ?>" type="hidden">
				<input name="passengers" value="<?php echo $_GET['passengers'] ?>" type="hidden">
				<input name="current_url" id="current_url" type="hidden" value=''>
				<div class='btn-continue animated fadeInUp'>
                    <button class="choose-btn">Continue to Booking</button>
                </div>
	</form>
</div>
