<form role="form" action="<?php echo base_url() ?>admin/rute/update" method="POST">
	<input type="hidden" name="id" value="<?php echo $rute['id'] ?>">
	<div class="box-body">
		<div class="form-group">
			<label for="exampleInputEmail1">Depart</label>
			<input name="depart" value="<?php echo $rute['depart'] ?>" class="form-control datepicker" id="exampleInputEmail1" placeholder="Name">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Arrive</label>
			<input name="arrive" value="<?php echo $rute['arrive'] ?>" class="form-control datepicker" id="exampleInputEmail1" placeholder="Arrive">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Rute From</label>
			<input name="rutefrom" value="<?php echo $rute['rute_from'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Rute From">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Rute To</label>
			<input name="ruteto" value="<?php echo $rute['rute_to'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Rute To">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Price</label>
			<input name="price" value="<?php echo $rute['price'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Price">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Class</label>
			<select name="class" class="form-control" name="" id="">
				<option value="First">First Class</option>
				<option value="Economy">Economy Class</option>
			</select>
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Transportation</label>
			<select name="transportation" class="form-control" name="" id="">
				<?php foreach ( $transportation as $value ): ?>
				<option value="<?php echo $value['id'] ?>">
					<?php echo $value['code'] ?>
				</option>
				<?php endforeach; ?>
			</select>
		</div>

	</div>
	<!-- /.box-body -->

	<div class="box-footer">
		<button type="submit" class="btn btn-primary">Add Rute</button>
	</div>
</form>
<script>
$( function() {
	$(".datepicker").datetimepicker({format : "YYYY-MM-DD HH:mm:ss"});
  } );
</script>';