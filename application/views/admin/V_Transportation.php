<section class="content-header">
	<h1>Transportation</h1>
	<br>
	<button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-add">Add Transportation +</button>
	<ol class="breadcrumb">
		<li>
			<a href="http://[::1]/lte/admin/dashboard">
				<i class="fa fa-dashboard"></i> Transportation</a>
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
								<th>Code</th>
								<th>Description</th>
								<th>Total Seat</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($transportation as $value) : ?>
							<tr>
								<td>
									<?php echo $value['code'] ?>
								</td>
								<td>
									<?php echo $value['description'] ?>
								</td>
								<td>
									<?php echo $value['seat_qty'] ?>
								</td>
								<td>
									<button type="button" onclick="viewedit(<?php echo $value['id'] ?>)" class="btn btn-success" data-toggle="modal" data-target="#modal-viewedit">View/Edit</button>
									<a onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger" href="<?php echo base_url() ?>admin/transportation/delete/<?php echo $value['id']?>">Delete</a>
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
									<h4 class="modal-title">Add Transportation</h4>
								</div>
								<div class="modal-body">

									<!-- ################# -->
									<form role="form" action="<?php echo base_url() ?>admin/transportation/add" method="POST">
										<!-- <input type="hidden" name="id" value="<?php echo $reservation['id'] ?>"> -->
										<div class="box-body">
                                            <div class="form-group">
												<label for="exampleInputEmail1">Code</label>
												<input name="code" value="" class="form-control" id="exampleInputEmail1" placeholder="Code">
                                            </div>
											<div class="form-group">
												<label for="exampleInputEmail1">Description</label>
												<input name="description" value="" class="form-control" id="exampleInputEmail1" placeholder="Description">
                                            </div>
                                            <div class="form-group">
												<label for="exampleInputEmail1">Total Seat</label>
												<input name="totalseat" value="" class="form-control" id="exampleInputEmail1" placeholder="totalseat">
                                            </div>
            

										</div>
										<!-- /.box-body -->
										<div class="box-footer">
											<button type="submit" class="btn btn-primary">Add Transportation</button>
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
