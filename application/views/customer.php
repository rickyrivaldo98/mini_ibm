<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>BCA Credit Card</title>
	<!-- core:css -->
	<link rel="stylesheet" href="<?= base_url('assets'); ?>/vendors/core/core.css">
	<!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
	<!-- end plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="<?= base_url('assets'); ?>/fonts/feather-font/css/iconfont.css">
	<link rel="stylesheet" href="<?= base_url('assets'); ?>/vendors/flag-icon-css/css/flag-icon.min.css">
	<!-- endinject -->
  <!-- Layout styles -->  
	<link rel="stylesheet" href="<?= base_url('assets'); ?>/css/demo_1/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="<?= base_url('assets'); ?>/images/favicon.png" />
</head>
<body>
	<div class="main-wrapper">

		<!-- partial:../../partials/_sidebar.html -->
		<nav class="sidebar">
      <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
          BCA<span> Bank</span>
        </a>
        <div class="sidebar-toggler not-active">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="sidebar-body">
        <ul class="nav">
          <li class="nav-item">
            <a href="../apps/chat.html" class="nav-link">
              <i class="link-icon" data-feather="users"></i>
              <span class="link-title">My Customer</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="../apps/calendar.html" class="nav-link">
              <i class="link-icon" data-feather="clipboard"></i>
              <span class="link-title">Activity & Opportunity</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" data-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
              <i class="link-icon" data-feather="bell"></i>
              <span class="link-title">Remainder</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="emails">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="../email/inbox.html" class="nav-link active">Hot Alert</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a href="../apps/calendar.html" class="nav-link">
              <i class="link-icon" data-feather="airplay"></i>
              <span class="link-title">Simulation</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="../apps/calendar.html" class="nav-link">
              <i class="link-icon" data-feather="file-text"></i>
              <span class="link-title">Request</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="../apps/calendar.html" class="nav-link">
              <i class="link-icon" data-feather="grid"></i>
              <span class="link-title">More</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>
    
		<!-- partial -->
	
		<div class="page-wrapper">
				
			<!-- partial:../../partials/_navbar.html -->
			<nav class="navbar">
				<a href="#" class="sidebar-toggler">
					<i data-feather="menu"></i>
				</a>
				<div class="navbar-content">
					<form class="search-form">
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text">
									<i data-feather="search"></i>
								</div>
							</div>
							<input type="text" class="form-control" id="navbarForm" placeholder="Search here...">
						</div>
					</form>
					<ul class="navbar-nav">
						
						<li class="nav-item dropdown nav-profile">
							<a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<img src="<?= base_url('assets'); ?>/images/faces/face1.jpg" alt="profile">
							</a>
							<div class="dropdown-menu" aria-labelledby="profileDropdown">
								<div class="dropdown-header d-flex flex-column align-items-center">
									<div class="figure mb-3">
										<img src="<?= base_url('assets'); ?>/images/faces/face1.jpg" alt="">
									</div>
									<div class="info text-center">
										<p class="name font-weight-bold mb-0">Amiah Burton</p>
										<p class="email text-muted mb-3">amiahburton@gmail.com</p>
									</div>
								</div>
								<div class="dropdown-body">
									<ul class="profile-nav p-0 pt-3">
										<li class="nav-item">
											<a href="../general/profile.html" class="nav-link">
												<i data-feather="user"></i>
												<span>Profile</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="javascript:;" class="nav-link">
												<i data-feather="edit"></i>
												<span>Edit Profile</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="javascript:;" class="nav-link">
												<i data-feather="repeat"></i>
												<span>Switch User</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="javascript:;" class="nav-link">
												<i data-feather="log-out"></i>
												<span>Log Out</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</nav>
			<!-- partial -->

			<div class="page-content">

				<nav class="page-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Tables</a></li>
						<li class="breadcrumb-item active" aria-current="page">Data Nasabah</li>
					</ol>
				</nav>

				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">Data Nasabah</h6>
                
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>email</th>
                        <th>phone</th>
                        <th>tanggal</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
					
						<?php
                          
                          $nohp3 = hp('089653843102');
                    
                          $message3 = '&text=' . urlencode('Yth, Bapak/Ibu Hendrik, berikut terlampir Surat Pemberitahuan dari BCA KCU Mangga Dua Raya mengenai tunggakan fasilitas kredit Bapak Hendrik di BCA. Mohon bantuannya untuk dapat segera diselesaikan. Terimakasih atas perhatian dan kerjasamanya https://google.com');  

						  
                          if ($this->agent->is_mobile()) $linkWA3 = 'https://api.whatsapp.com/send?phone=' . $nohp3 . $message3 ;
                      
                          else $linkWA3 = 'https://web.whatsapp.com/send?phone=' . $nohp3 . $message3;
                        ?>

                        <?php $no = 0;
                        foreach ($all as $row) : ?>
                        <?php $no++ ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $row->name; ?></td>
                                <td><?php echo $row->telp; ?></td>
                                <td><?php echo $row->email; ?></td>
                                <td><?php echo $row->tanggal_Tagihan; ?></td>
                                <td>
                                    <a class="btn btn-danger" target="_blank" href="<?= base_url("Customer/kirim"); ?>">Kirim Email</a>
                                    <a class="btn btn-success" target="_blank" href="<?php echo $linkWA3 ?>">Chat WA</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
					</div>
				</div>

			</div>

			<!-- partial:../../partials/_footer.html -->
			<footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between">
				<p class="text-muted text-center text-md-left">Copyright © 2021 <a href="https://www.bca.co.id/" target="_blank">BCA</a>. All rights reserved</p>
				<p class="text-muted text-center text-md-left mb-0 d-none d-md-block">Developer BCA <i class="mb-1 text-primary ml-1 icon-small" data-feather="heart"></i></p>
			</footer>
			<!-- partial -->
	
		</div>
	</div>

	<!-- core:js -->
	<script src="<?= base_url('assets'); ?>/vendors/core/core.js"></script>
	<!-- endinject -->
  <!-- plugin js for this page -->
  <script src="<?= base_url('assets'); ?>/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="<?= base_url('assets'); ?>/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
	<!-- end plugin js for this page -->
	<!-- inject:js -->
	<script src="<?= base_url('assets'); ?>/vendors/feather-icons/feather.min.js"></script>
	<script src="<?= base_url('assets'); ?>/js/template.js"></script>
	<!-- endinject -->
  <!-- custom js for this page -->
  <script src="<?= base_url('assets'); ?>/js/data-table.js"></script>
	<!-- end custom js for this page -->
</body>
</html>