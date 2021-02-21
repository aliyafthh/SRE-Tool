<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>SRE Tool</title>
	<!-- Custom fonts for this template-->
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<!-- Custom styles for this template-->
	<link href="css/sb-admin-2.min.css" rel="stylesheet">
	<link href="checklist.css" rel="stylesheet">
	<link href="c1.css" rel="stylesheet">

	<style>

.hi{
    background:#70AE98;
    font-family: myFirstFont;
}
.topbarz {
      float: right;
      width: 100%;
      background-color: #F0A35E;
      /* background-image: url("../images/wood.png"); */
      height: 50px;
	}
	
	.hoverTable{
		width:100%; 
    border-collapse:collapse; 
      }
  
 
	.hoverTable td{ 
    padding:24px;
  
  }
  
	/* Define the default color for all the table rows */
	.hoverTable tr{
		background: rgba(190, 192, 192, 0.151);
	}
	/* Define the hover highlight color for the table row */
    .hoverTable tr:hover {
          background-color: rgba(0, 168, 252, 0.356);
    }
    .img1 {
      width: 10%;
      float: left;
    }

    .clearBoth {
      clear: both;
    }

    .hed {
      float: left;
      padding: 30px;
      margin-left: 10px;
      margin-top: 10px;
    }

    .heder {
      float: left;
      width: 100%;
      /* background-color: #F29D4B; */
      background-image: url("images/black.jpg");
      background-size: 1550px 135px;
      height: 120px;
    }

    .hed3 {
      margin-left: 24%;
      color: lightgoldenrodyellow;
      font-family: myFirstFont;
    }

    .topbarz {
      float: right;
      width: 100%;
      background-color: #F0A35E;
      /* background-image: url("../images/wood.png"); */
      height: 50px;
    }

    @font-face {
      font-family: myFirstFont;
      src: url("images/EraserDust.ttf");
    }

    .bodyody {
      /* background-image: url("../images/black.jpg");
      background-size: 1500px 1000px; */
      background-color: #FCF0CF !important;
    }

    .sidenavi {
      background-color: #70AE98;
      /* background-image: linear-gradient(180deg, #4e73df 10%, #224abe 100%); */
      background-size: cover;
      font-family: myFirstFont;
    }

    input[type="radio"] {
      display: none;
    }

    input[type="radio"]:checked+label {
      border: 2px solid lightgray;
      border-radius: 4px;
    }

    div.inline {
      float: left;
      margin-left: 16%;
      margin-right: 16%;
      padding: 10px;
    }

    .btn-pastel {
      color: #fff;
      background-color: #F6A7C1;
      border-color: #F6A7C1
    }

    .button {
      border-style: solid;
      border-width: 5px;
      border-radius: 12px;
      padding: 10px 10px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 30px 100px 30px;
      cursor: pointer;
      color: #fff;
      background-color: #F6A7C1;
      border-color: #F6A7C1
    }
	</style>
</head>
</head>

<body id="page-top">
	<!-- Page Wrapper -->
	<div id="wrapper">
		<!-- Sidebar -->
		<ul class="navbar-nav hi sidebar sidebar-dark accordion" id="accordionSidebar">
			<!-- Sidebar - Brand -->
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
				<div class="sidebar-brand-icon rotate-n-15">
					<i class="fas fa-laptop-code"></i>
				</div>
				<div class="sidebar-brand-text mx-3">SRE Tool </div>
			</a>
			<!-- Divider -->
			
			<!-- Nav Item - Pages Collapse Menu -->
			<hr class="sidebar-divider my-0">

<li class='nav-item'>
  <a class='nav-link' href="../RV/createProject.php">
    <i class="fas fa-book-open"></i>
    <span>Create Project</span></a>
</li>
    <hr class="sidebar-divider my-0">

    <li class="nav-item">
      
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
        <li class='nav-item'>
      <a class='nav-link' href="../Elicitation/createReq.php">
        <i class="fas fa-book-open"></i>
        <span>Requirement Elicitation</span></a>
    </li>
    <hr class="sidebar-divider my-0">

    <li class='nav-item'>
      <a class='nav-link' href="../Requirement Negotation/homeNego.php">
        <i class="fas fa-book-open"></i>
        <span>Requirement Negotiation</span></a>
    </li>
    <hr class="sidebar-divider my-0">
    <li class='nav-item'>
      <a class='nav-link' href="../RV/rvpoption.php">
        <i class="fas fa-book-open"></i>
        <span>Requirement Validation</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwoo" aria-expanded="true" aria-controls="collapseTwoo">
          <i class="far fa-folder-open"></i>
          <span>Validation</span>
        </a>
        <div id="collapseTwoo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            
            <a class="collapse-item" href="principles.php">Principles</a>
            <a class="collapse-item" href="techniques.php">Techniques</a>
          </div>
        </div>
      </li>
    <hr class="sidebar-divider my-0">
    <li class='nav-item'>
      <a class='nav-link' href="../RM/index.php?id=<?php echo $id; ?>" >
        <i class="fas fa-book-open"></i>
        <span>Requirement Management</span></a>
    </li>

			<!-- Divider -->
			<hr class="sidebar-divider d-none d-md-block">
			<!-- Sidebar Toggler (Sidebar) -->
			<div class="text-center d-none d-md-inline">
				<button class="rounded-circle border-0" id="sidebarToggle"></button>
			</div>
		</ul>
		<!-- End of Sidebar -->
		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">
			<!-- Main Content -->
			<div id="content">
				<!-- Topbar -->
				<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow topbarz">
					<!-- Sidebar Toggle (Topbar) -->
					<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
						<i class="fa fa-bars"></i>
					</button>
					<!-- Topbar Navbar -->
					<ul class="navbar-nav ml-auto">
						<!-- Nav Item - Search Dropdown (Visible Only XS) -->
						<li class="nav-item dropdown no-arrow d-sm-none">
							<a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fas fa-search fa-fw"></i>
							</a>
							<!-- Dropdown - Messages -->
							<div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
								<form class="form-inline mr-auto w-100 navbar-search">
									<div class="input-group">
										<input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
										<div class="input-group-append">
											<button class="btn btn-primary" type="button">
												<i class="fas fa-search fa-sm"></i>
											</button>
										</div>
									</div>
								</form>
							</div>
						</li>
						<!-- Nav Item - Alerts -->
						<li class="nav-item dropdown no-arrow mx-1">
							<a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fas fa-bell fa-fw"></i>
								<!-- Counter - Alerts -->
								<span class="badge badge-danger badge-counter">3+</span>
							</a>
							
						<!-- Nav Item - User Information -->
						<li class="nav-item dropdown no-arrow">
							<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span>
								<img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
							</a>
							<!-- Dropdown - User Information -->
							<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
								<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
									<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout

								</a>
							</div>
						</li>
					</ul>
				</nav>
				<!-- End of Topbar -->
				<!-- Begin Page Content -->
				<div class="container-fluid">
					<!-- <div class="container py-5"> -->
					<!-- For Demo Purpose -->
					<header class="text-center text-white">
						<!-- <h1 class="display-4">Bootstrap breadcrumbs</h1><p class="lead mb-0">Some Bootstrap 4 breadcrumb variants with different dividers.</p> -->
						<!-- <p class="font-italic">Snippet by <a href="https://bootstrapious.com" class="text-white"><u>Bootstrapious</u></a></p> -->
					</header>
					<div class="card shadow mb-4">
						<div class="card-body shadow-sm p-5">
							<!-- Arrow breadcrumb-->
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb breadcrumb-arrow p-0">

									<li class="breadcrumb-item">
										<a href="prevc1.php" class="text-uppercase pl-3">First Quality Aspect</a>
									</li>
									<li aria-current="page" class="breadcrumb-item pl-0 active text-uppercase pl-4">Second Quality Aspect</li>
									<li class="breadcrumb-item pl-0">
										<a href="checklist3.php" class="text-uppercase">Third Quality Aspect</a>
									</li>
								</ol>
							</nav>

							<br>
							<h2 class="card-title text-info">Validating<b> Requirement Documentation</b></h2>

							<div class="col-md-6">
								<form action="checklist2.php">
									<button type="submit" name="update" value="submit" class="btn bg-info text-light btn btn-block" style='width:100px;margin:0 50%;position:relative;left:39.5em;'> Edit </button>
								</form>
							</div>
							<div class="panel-body">
								<br>


								<?php
									$connection = mysqli_connect("localhost","root","");
									$db = mysqli_select_db($connection, 'sretool');

									
																	
									$query = "SELECT * FROM checklist2 ORDER BY id DESC LIMIT 0, 1";
									$query_run = mysqli_query($connection, $query);
								?>

								<table class="table table-striped">
									<thead>
										<tr>
                                          <th>Bounded</th> 
										  <th>Complete</th> 
										  <th>Consistent</th> 
										  <th>Comprehensible</th> 
										  <th>Modifiable</th> 
                                          <th>Traceable</th>
                                          <th>Unambiguous</th>
										</tr>
									</thead>

									<?php
										if($query_run)
										{
										foreach($query_run as $row)
										{
									?>

									<tbody>
										<tr>
										

										<?php
										if($row['bounded'] == "yes"){
										?>
											<td ><i class="fas fa-check"></i></td>	
										<?php
										} else{
										?>
											<td><i class="fas fa-times"></i></td>
										<?php
										}
										?>

										<?php
										if($row['complete'] == "yes"){
										?>
											<td><i class="fas fa-check"></i></td>	
										<?php
										} else{
										?>
											<td><i class="fas fa-times"></i></td>
										<?php
										}
										?>

										<?php
										if($row['consistent'] == "yes"){
										?>
											<td><i class="fas fa-check"></i></td>	
										<?php
										} else{
										?>
											<td><i class="fas fa-times"></i></td>
										<?php
										}
										?>

                                        <?php
										if($row['comprehensible'] == "yes"){
										?>
											<td><i class="fas fa-check"></i></td>	
										<?php
										} else{
										?>
											<td><i class="fas fa-times"></i></td>
										<?php
										}
										?>

                                        <?php
										if($row['modifiable'] == "yes"){
										?>
											<td><i class="fas fa-check"></i></td>	
										<?php
										} else{
										?>
											<td><i class="fas fa-times"></i></td>
										<?php
										}
										?>

                                        <?php
										if($row['traceable'] == "yes"){
										?>
											<td><i class="fas fa-check"></i></td>	
										<?php
										} else{
										?>
											<td><i class="fas fa-times"></i></td>
										<?php
										}
										?>

                                        <?php
										if($row['unambiguous'] == "yes"){
										?>
											<td><i class="fas fa-check"></i></td>	
										<?php
										} else{
										?>
											<td><i class="fas fa-times"></i></td>
										<?php
										}
										?>
											


										</tr>

									</tbody>

									<?php          
											}
										}
							
										else
										{
											echo "No record found..";
										}
									?>
               
								</table>
							</div>
						</div>
					</div>

					<div class="container">
						<br>
						<div class="row">

							<div class="col-md-12">

							</div>
						</div>
					</div>

				</div>
			</div>
			<!-- <div class="container"></div> -->
		</div>
	</div>
	</div>
	</div>
	<!-- </div> -->
	</div>
	<!-- /.container-fluid -->
	</div>
	<!-- End of Main Content -->
	<!-- Footer -->
	<footer class="sticky-footer bg-white">
		<div class="container my-auto">
			<div class="copyright text-center my-auto">
				<span>Copyright &copy; Your Website 2020</span>
			</div>
		</div>
	</footer>
	<!-- End of Footer -->
	</div>
	<!-- End of Content Wrapper -->
	</div>
	<!-- End of Page Wrapper -->
	<!-- Scroll to Top Button-->
	<a class="scroll-to-top rounded" href="#page-top">
		<i class="fas fa-angle-up"></i>
	</a>
	<!-- Logout Modal-->
	<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
					<a class="btn btn-primary" href="login.html">Logout</a>
				</div>
			</div>
		</div>
	</div>
	<!-- Bootstrap core JavaScript-->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- Core plugin JavaScript-->
	<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
	<!-- Custom scripts for all pages-->
	<script src="js/sb-admin-2.min.js"></script>
</body>

</html>