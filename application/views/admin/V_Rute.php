<section class="content-header">
	<h1>Rute</h1>
	<br>
	<button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-add">Add Rute +</button>
	<ol class="breadcrumb">
		<li>
			<a href="http://[::1]/lte/admin/dashboard">
				<i class="fa fa-dashboard"></i> Rute</a>
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
								<th>Depart</th>
								<th>Arrive</th>
								<th>Rute From</th>
								<th>Rute To</th>
								<th>Price</th>
								<th>Class</th>
								<th>Transportation</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($rute as $value) : ?>
							<tr>
								<td><?php echo $value['depart'] ?></td>
								<td><?php echo $value['arrive'] ?></td>
								<td><?php echo $value['rute_from'] ?></td>
								<td><?php echo $value['rute_to'] ?></td>
								<td><?php echo $value['price'] ?></td>
								<td><?php echo $value['class'] ?></td>
								<td><?php echo $value['code'] ?></td>
								
								<td>
									<button type="button" onclick="viewedit(<?php echo $value['id'] ?>)" class="btn btn-success" data-toggle="modal" data-target="#modal-viewedit">View/Edit</button>
									<a onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger" href="<?php echo base_url() ?>admin/rute/delete/<?php echo $value['id']?>">Delete</a>
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
									<h4 class="modal-title">Add Rute</h4>
								</div>
								<div class="modal-body">

									<!-- ################# -->
									<form role="form" action="<?php echo base_url() ?>admin/rute/add" method="POST">
										<!-- <input type="hidden" name="id" value="<?php echo $reservation['id'] ?>"> -->
										<div class="box-body">
                                            <div class="form-group">
												<label for="exampleInputEmail1">Depart</label>
												<input name="depart" value="" class="form-control datepicker" id="exampleInputEmail1" placeholder="Name">
                                            </div>
											<div class="form-group">
												<label for="exampleInputEmail1">Arrive</label>
												<input name="arrive" value="" class="form-control datepicker" id="exampleInputEmail1" placeholder="Arrive">
                                            </div>
                                            <div class="form-group">
												<label for="exampleInputEmail1">Rute From</label>
												<input name="rutefrom" value="" class="form-control" id="exampleInputEmail1" placeholder="Rute From">
                                            </div>
                                            <div class="form-group">
												<label for="exampleInputEmail1">Rute To</label>
												<input name="ruteto" value="" class="form-control" id="exampleInputEmail1" placeholder="Rute To">
											</div>
											<div class="form-group">
												<label for="exampleInputEmail1">Price</label>
												<input name="price" value="" class="form-control" id="exampleInputEmail1" placeholder="Price">
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
														<option value="<?php echo $value['id'] ?>"><?php echo $value['code'] ?></option>
													<?php endforeach; ?>
                                                </select>
											</div>

										</div>
										<!-- /.box-body -->

										<div class="box-footer">
											<button type="submit" class="btn btn-primary">Add Rute</button>
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
