<div class="flight-wrapper">

	<!-- ###### -->
	<div class="flight-booking-info row">

		<div class="col-lg-7 animated fadeInLeft">
			<div class="customer-data">
				<div class="booking-title">
					<h4>
						<span class="glyphicon glyphicon-user"></span>
						Seat
					</h4>
					<div class="booking-line"></div>
				</div>
				<div class="customer-name">
					<form action="<?php echo base_url() ?>booking/proccess" method="POST">
						<input type="hidden" name='key' value='<?php echo $_GET['key'] ?>'>
						<table class="customer-table">

							<?php $i = 0; ?>
							<?php foreach ($data_form as $value) : ?>
							<?php $i++; ?>

							<tr>
								<td>
									<div onclick="pget(this.id)" id="p<?php echo $i ?>" class="customer-color id-p<?php echo $i ?>"></div>
								</td>
								<td>
									<span>
										<?php echo $value ?>
									</span>
								</td>
								<td>
									<input name="seat[]" class="form-control" id="i<?php echo $i ?>" type="text">
								</td>
							</tr>

							<?php endforeach; ?>
						</table>
				</div>

				<div class="seat">
					<?php for ($i = 1; $i <= $seat['seat_total']; $i++) : ?>

					<?php if (count($seat['seat_bookeds']) !== 0) : ?>
						<?php if (in_array($i, $seat['seat_bookeds'])) : ?>
					<div id="<?php echo $i ?>" class="seat-id seat-notavailabe">
						<p><?php echo $i ?></p>
					</div>

						<?php else : ?>
					<div onclick="sget(this.id)" id="<?php echo $i ?>" class="seat-id">
						<p><?php echo $i ?></p>
					</div>
						<?php endif; ?>
					<?php else : ?>
					<div onclick="sget(this.id)" id="<?php echo $i ?>" class="seat-id">
						<p><?php echo $i ?></p>
					</div>
					<?php endif; ?>

					

					<?php endfor; ?>

				</div>

			</div>
		</div>

		<script>
			function pget(id) {
				seat.p = id;
				$('.customer-color').removeClass("customer-selected");
				$('#' + id).addClass("customer-selected");
			}

			function sget(id) {
				seat.selectSeat(id);
			}

			var seat = {
				p: '',
				pn: function (id) {
					pn = id.replace('p', '');
					return pn;
				},
				selectSeat: function (id) {
					if ($('#' + id).attr('class') == 'seat-id') {

						if ($('#i' + this.pn(this.p)).val() == '') {
							$('#' + id).addClass("seat-selected");
							// console.log(this.pn(this.p));
							$('#i' + this.pn(this.p)).val(id);
							$('#' + id).addClass('seat-for-' + this.p);
						}


					} else {
						cSeat = $('#' + id).attr('class');
						cSeatoc = cSeat.replace('seat-id seat-selected seat-for-p', '');
						$('#' + id).removeClass("seat-selected");
						$('#' + id).removeClass(cSeat.replace('seat-id ', ''));
						$('#i' + cSeatoc).val('');


					}
					//    console.log($('#'+id).attr('class'));
				}
			}

		</script>

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
						echo "Rp." . strrev(implode('.', str_split(strrev(strval($data['passengers'] * $data_rute['price'])), 3)));
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
