
	<!-- Page content -->
	<div id="page-content">
		<!-- Dashboard Header -->
		<!-- For an image header add the class 'content-header-media' and an image as in the following example -->
		<div class="content-header content-header-media">
			<div class="header-section">
				<div class="row">
					<!-- Main Title (hidden on small devices for the statistics to fit) -->
					<div class="col-md-4 col-lg-6 hidden-xs hidden-sm">
						<h1 style="text-transform: capitalize;">Welcome <strong><?php if(isset($session_user)) echo $session_user['name']; ?></strong><br><small>You Look Awesome!</small></h1>
					</div>
					<!-- END Main Title -->
				</div>
			</div>
			<!-- For best results use an image with a resolution of 2560x248 pixels (You can also use a blurred image with ratio 10:1 - eg: 1000x100 pixels - it will adjust and look great!) -->
			<img src="<?php echo base_url(IMG); ?>/placeholders/headers/dashboard_header.jpg" alt="header image" class="animation-pulseSlow">
		</div>
		<!-- END Dashboard Header -->
		
		<!-- Widgets Row -->			
		<div class="row">
			<?php if(!empty($session_user) && $session_user['admin_type'] === 'super_admin') { ?>
			<div class="col-md-6">
				<div class="block full">
					<div class="block-title">
						<h2><strong>Employees</strong> Table</h2>

						<div class="block-options pull-right">
							<a href="#modal-new-employee" class="btn btn-success" data-toggle="modal" title="Add Employee"><i class="fa fa-user-plus"></i> Add Employee</a>
						</div>
					</div>
					<div class="table-responsive">
						<table id="users-datatable" class="table table-vcenter table-condensed table-bordered">
							<thead>
								<tr>
									<th class="text-center">ID</th>
									<th>Name</th>
									<th>Phone</th>
									<th class="text-center">Actions</th>
								</tr>
							</thead>
							<tbody>
								<?php if(!empty($employees)) {
									$i = 1; 
									foreach($employees as $emp){
								?>
								<tr>
									<td class="text-center"><?php echo $i; ?></td>
									<td><a class="text-info" href="<?php echo base_url('employee_details/'.$emp['id']); ?>"><?php echo $emp['name']; ?></a></td>
									<td><?php echo $emp['phone_number']; ?></td>
									<td class="text-center">
										<div class="btn-group">
											<a href="#modal-emp-update" data-toggle="modal" title="Update" data-placement="top" class="btn btn-default enable-tooltip" data-user_id="<?php echo $emp['id']; ?>" data-name="<?php echo $emp['name']; ?>" data-phone="<?php echo $emp['phone_number']; ?>" onclick="fetchEmpDetails(this)"><i class="fa fa-pencil"></i></a>
											<a href="javascript:void(0)" data-user_id="<?php echo $emp['id']; ?>" onclick="deleteEmpData(this);" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-times"></i></a>
										</div>
									</td>
								</tr>
								<?php
									$i++;
									}
								}?>
							</tbody>
						</table>
					</div>
				</div>
			</div>

			<!-- <div class="col-md-6">
				<div class="block full">
					<div class="block-title">
						<h2><strong>Users</strong> Table</h2>

						<div class="block-options pull-right">
							<a href="#modal-add-user" class="btn btn-success" data-toggle="modal" title="Add User"><i class="fa fa-user-plus"></i> Add User</a>
						</div>
					</div>
					<div class="table-responsive">
						<table id="users-datatable" class="table table-vcenter table-condensed table-bordered">
							<thead>
								<tr>
									<th class="text-center">ID</th>
									<th>Name</th>
									<th>Phone</th>
									<th class="text-center">Actions</th>
								</tr>
							</thead>
							<tbody>
								<?php if(!empty($users)) {
									$i = 1; 
									foreach($users as $user){
								?>
								<tr>
									<td class="text-center"><?php echo $i; ?></td>
									<td><a class="text-info" href="<?php echo base_url('user_details/'.$user['id']); ?>"><?php echo $user['name']; ?></a></td>
									<td><?php echo $user['phone_number']; ?></td>
									<td class="text-center">
										<div class="btn-group">
											<a href="#modal-user-update" data-toggle="modal" title="Update" data-placement="top" class="btn btn-default enable-tooltip" data-user_id="<?php echo $user['id']; ?>" data-name="<?php echo $user['name']; ?>" data-phone="<?php echo $user['phone_number']; ?>" data-second="<?php echo $user['second_number']; ?>" onclick="fetchDetails(this)"><i class="fa fa-pencil"></i></a>
											<a href="javascript:void(0)" data-user_id="<?php echo $user['id']; ?>" onclick="deleteData(this);" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-times"></i></a>
										</div>
									</td>
								</tr>
								<?php
									$i++;
									}
								}?>
							</tbody>
						</table>
					</div>
				</div>
			</div> -->
			<?php }  else { ?>
				<div class="col-md-12 text-center animation-pullDown">
					<img src="<?php echo base_url(IMG); ?>/lee_store.png" alt="logo" style="width:150px; margin-top:5em;">
				</div>
			<?php } ?>

		</div>
		<!-- END Widgets Row -->
	</div>
	<!-- END Page Content -->
	
	
	