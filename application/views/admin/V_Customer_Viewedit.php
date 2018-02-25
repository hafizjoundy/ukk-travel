
<form role="form" action="<?php echo base_url() ?>admin/customer/update" method="POST">
	<input type="hidden" name="id" value="<?php echo $customer['id'] ?>">
	<div class="box-body">
		<div class="form-group">
			<label for="exampleInputEmail1">Name</label>
			<input name="name" value="<?php echo $customer['name'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Name">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Address</label>
			<input name="address" value="<?php echo $customer['address'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Address">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Phone</label>
			<input name="phone" value="<?php echo $customer['phone'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Phone">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Email</label>
			<input name="email" value="<?php echo $customer['email'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Email">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Gender</label>
			<select name="gender" class="form-control" name="" id="">
				<option value="l">Male</option>
				<option value="p">Female</option>
			</select>
		</div>

	</div>
	<!-- /.box-body -->

	<div class="box-footer">
		<button type="submit" class="btn btn-primary">Update User</button>
	</div>
</form>
