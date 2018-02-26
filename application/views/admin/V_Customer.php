<section class="content-header">
	<h1>Customer</h1>
	<br>
	<button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-add">Add Customer +</button>
	<ol class="breadcrumb">
		<li>
			<a href="http://[::1]/lte/admin/dashboard">
				<i class="fa fa-dashboard"></i> Customer</a>
		</li>
		<li class="active">View</li>
	</ol>
</section>

<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<!-- /.box -->

			<div class="box">
				<!-- /.box-header -->
				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Name</th>
								<th>Address</th>
								<th>Phone</th>
								<th>Email</th>
								<th>Gender</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($customer as $value) : ?>
							<tr>
								<td>
									<?php echo $value['name'] ?>
								</td>
								<td>
									<?php echo $value['address'] ?>
								</td>
								<td>
									<?php echo $value['phone'] ?>
								</td>
								<td>
									<?php echo $value['email'] ?>
								</td>
								<td>
									<?php echo $value['gender'] ?>
								</td>
								<td>
									<button type="button" onclick="viewedit(<?php echo $value['id'] ?>)" class="btn btn-success" data-toggle="modal" data-target="#modal-viewedit">View/Edit</button>
									<a onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger" href="<?php echo base_url() ?>admin/customer/delete/<?php echo $value['id']?>">Delete</a>
								</td>
							</tr>
							<?php endforeach; ?>
						</tbody>
						<!-- <tfoot>
              <tr>
              </tr>
              </tfoot> -->
					</table>

					<!-- modal-edit -->
					<div class="modal fade" id="modal-viewedit">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<h4 class="modal-title">View/Edit Reservation</h4>
								</div>
								<div class="modal-body">

									<!-- ################# -->
									<div id="viewedit"></div>
									<!-- ################# -->

								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
									<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
								</div>
							</div>
							<!-- /.modal-content -->
						</div>
						<!-- /.modal-dialog -->
					</div>

					<div class="modal fade" id="modal-add">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<h4 class="modal-title">Add User</h4>
								</div>
								<div class="modal-body">

									<!-- ################# -->
									<form role="form" action="<?php echo base_url() ?>admin/customer/add" method="POST">
										<!-- <input type="hidden" name="id" value="<?php echo $reservation['id'] ?>"> -->
										<div class="box-body">
                                            <div class="form-group">
												<label for="exampleInputEmail1">Name</label>
												<input name="name" value="" class="form-control" id="exampleInputEmail1" placeholder="Name">
                                            </div>
											<div class="form-group">
												<label for="exampleInputEmail1">Address</label>
												<input name="address" value="" class="form-control" id="exampleInputEmail1" placeholder="Address">
                                            </div>
                                            <div class="form-group">
												<label for="exampleInputEmail1">Phone</label>
												<input name="phone" value="" class="form-control" id="exampleInputEmail1" placeholder="Phone">
                                            </div>
                                            <div class="form-group">
												<label for="exampleInputEmail1">Email</label>
												f<input name="email" value="" class="form-control" id="exampleInputEmail1" placeholder="Email">
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
											<button type="submit" class="btn btn-primary">Add User</button>
										</div>
									</form>
									<!-- ################# -->

								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
									<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
								</div>
							</div>
							<!-- /.modal-content -->
						</div>
						<!-- /.modal-dialog -->
					</div>
				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
		</div>
		<!-- /.col -->
	</div>
	<!-- /.row -->
</section>
