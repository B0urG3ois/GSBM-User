<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar">
	<!-- Sidebar scroll-->
	<div class="scroll-sidebar">
		<!-- Sidebar navigation-->
		<nav class="sidebar-nav">
			<ul id="sidebarnav">
				<!-- User Profile-->
				<li>
					<!-- User Profile-->
					<div class="user-profile dropdown m-t-20">
						<div class="user-pic">
							<img src="<?php echo base_url() ?>assets_admin/assets/images/users/septa.jpg" alt="users"
								class="rounded-circle img-fluid" />
						</div>
						<div class="user-content hide-menu m-t-10">
							<h5 class="m-b-10 user-name font-medium">Septaria DN</h5>
							<a href="javascript:void(0)" class="btn btn-circle btn-sm m-r-5" id="Userdd" role="button"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="ti-power-off"></i>
							</a>
							<div class="dropdown-menu animated flipInY" aria-labelledby="Userdd">
								<a class="dropdown-item" href="<?=base_url('admin/logout')?>">
									<i class="fa fa-power-off m-r-5 m-l-5"></i> Keluar</a>
								<div class="dropdown-divider"></div>
							</div>
						</div>
					</div>
					<!-- End User Profile-->
				</li>
				<!-- User Profile-->
				<li class="sidebar-item">
					<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
						aria-expanded="false">
						<i class="icon-Car-Wheel"></i>
						<span class="hide-menu">Info Bengkel </span>
					</a>
					<ul aria-expanded="false" class="collapse  first-level">
						<li class="sidebar-item">
							<a href="<?php echo base_url('index.php/bengkel/index') ?>" class="sidebar-link">
								<i class="icon-Record"></i>
								<span class="hide-menu"> Bengkel </span>
							</a>
						</li>
						<li class="sidebar-item">
							<a href="<?php echo base_url('index.php/bengkel/LO') ?>" class="sidebar-link">
								<i class="icon-Record"></i>
								<span class="hide-menu"> Layanan & Onderdil </span>
							</a>
						</li>
						<li class="sidebar-item">
							<a href="<?php echo base_url('index.php/bengkel/saring') ?>" class="sidebar-link">
								<i class="icon-Record"></i>
								<span class="hide-menu"> Filter </span>
							</a>
						</li>

					</ul>
				</li>
				<li class="sidebar-item">
					<a href="<?php echo base_url('index.php/bengkel/pengajuan_user') ?>" class="sidebar-link">
						<i class="far fa-file-alt"></i>
						<span class="hide-menu"> Pengajuan User </span>
					</a>
				</li>
			</ul>
		</nav>
		<!-- End Sidebar navigation -->
	</div>
	<!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
