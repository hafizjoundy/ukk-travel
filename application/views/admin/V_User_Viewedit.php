<form role="form" action="<?php echo base_url() ?>admin/user/update" method="POST">
	<input type="hidden" name="id" value="<?php echo $user['id'] ?>">
	<div class="box-body">
		<div class="form-group">
			<label for="exampleInputEmail1">Username</label>
			<input name="username" value="<?php echo $user['username'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Username">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">New Password</label>
			<small>*cannot edit previous password</small>
			<input name="password" value="" class="form-control" id="exampleInputEmail1" placeholder="Password">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Level</label>
			<select name="level" class="form-control" name="" id="">
				<option value="2">Admin</option>
				<option value="1">User</option>
			</select>
		</div>

	</div>
	<!-- /.box-body -->

	<div class="box-footer">
		<button type="submit" class="btn btn-primary">Update User</button>
	</div>
</form>
