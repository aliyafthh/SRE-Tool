<!-- insert into db -->

<?php
if(isset($_POST['insert']))
{
  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection, 'sretool');

    $bounded = $_POST['bounded'];
    $complete = $_POST['complete'];
    $consistent = $_POST['consistent'];
    $comprehensible = $_POST['comprehensible'];
    $modifiable = $_POST['modifiable'];
    $traceable = $_POST['traceable'];
    $unambiguous = $_POST['unambiguous'];
    
    
   
    $query = "INSERT INTO checklist2(bounded,complete,consistent,comprehensible,modifiable,traceable,unambiguous) VALUES ('".$_POST["bounded"]."','".$_POST["complete"]."','".$_POST["consistent"]."','".$_POST["comprehensible"]."','".$_POST["modifiable"]."','".$_POST["traceable"]."','".$_POST["unambiguous"]."')";

    $query_run = mysqli_query($connection, $query);

    if(!$query_run)
    {
      echo '<script> alert("Data Not Saved"); </script>';
    }
    if($bounded !='' && $complete !='' && $consistent !='' && $comprehensible !='' && $modifiable !='' && $traceable !='' && $unambiguous !='')
{
//  To redirect form on a particular page
header("Location:previewc2.php");
}
else{
?><span><?php echo "Please fill all fields.....!!!!!!!!!!!!";?></span> <?php
  }
}
?>

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
	<!-- <link href="c1.css" rel="stylesheet"> -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

</head>

<style>
#client-testimonial-carousel {
    min-height: 200px;
    }



    .mt-100 {
    margin-top: 30px
}

.cardd {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border-radius: 0;
    /* float:left;
    padding-left:0.1em;
    padding-right: 3em; */
    left:-4em;
    /* padding-top:5px; */

}

 .cardd .card-bodyy {
    /* padding: 1.5rem 2em 0em 2em; */
    /* padding-left:0.1em;
    padding-right: 3em; */
    width : 1500px;

} 

.card-bodyy {
    flex: 1 1 auto;
    /* padding: .25rem */
}

/* .card .card-title {
    color: #000000;
    margin-bottom: 0.625rem;
    text-transform: capitalize;
    font-size: 0.875rem;
    font-weight: 500
}

.card .card-description {
    margin-bottom: .875rem;
    font-weight: 4000;
    color: #76838f
}

p {
    font-size: 0.875rem;
    margin-bottom: .5rem;
    line-height: 1.5rem
} */

@keyframes click-wave {
    0% {
        height: 20px;
        width: 20px;
        opacity: 0.15;
        position: relative
    }

    100% {
        height: 20px;
        width: 20px;
        margin-left: -80px;
        margin-top: -80px;
        opacity: 0
    }
}

.option-input {
    -webkit-appearance: none;
    -moz-appearance: none;
    -ms-appearance: none;
    -o-appearance: none;
    appearance: none;
    position: relative;
    top: 13.33333px;
    right: 0;
    bottom: 0;
    left: 0;
    height: 40px;
    width: 40px;
    transition: all 0.15s ease-out 0s;
    background: #cbd1d8;
    border: none;
    color: #fff;
    cursor: pointer;
    display: inline-block;
    margin-right: 0.5rem;
    outline: none;
    position: relative;
    z-index: 1000
}

.option-input:hover {
    background: #9faab7
}

.option-input:checked {
    background: #E91E63
}

.option-input:checked::before {
    height: 40px;
    width: 40px;
    position: absolute;
    content: "\f111";
    font-family: "Font Awesome 5 Free";
    display: inline-block;
    font-size: 26.66667px;
    text-align: center;
    line-height: 40px
}

.option-input:checked::after {
    -webkit-animation: click-wave 0.25s;
    -moz-animation: click-wave 0.25s;
    animation: click-wave 0.25s;
    background: #E91E63;
    content: '';
    display: block;
    position: relative;
    z-index: 100
}

.option-input.radio {
    border-radius: 50%
}

.option-input.radio::after {
    border-radius: 50%
}
    /* @keyframes check {0% {height: 0;width: 0;}
    25% {height: 0;width: 10px;}
    50% {height: 20px;width: 10px;}
  }
  .checkbox{
      background-color:#fff;
      display:inline-block;
      height:28px;
      margin:0 .25em;
      width:28px;
      border-radius:4px;
      border:1px solid #ccc;
      float:right
      }
.roww{ */

/* width:4000px;
padding-right:3000px; */
/* 
padding-right:320px;
padding-left:1px;


}
  .checkbox span{
      display:block;
      height:28px;
      position:relative;
      width:28px;
      adding:0
      }

  .checkbox span:after{
      -moz-transform:scaleX(-1) rotate(135deg);
      -ms-transform:scaleX(-1) rotate(135deg);
      -webkit-transform:scaleX(-1) rotate(135deg);
      transform:scaleX(-1) rotate(135deg);
      -moz-transform-origin:left top;
      -ms-transform-origin:left top;
      -webkit-transform-origin:left top;
      transform-origin:left top;
      border-right:4px solid #fff;
      border-top:4px solid #fff;
      content:'';display:block;
      height:20px;left:3px;
      position:absolute;
      top:15px;width:10px
      
      }
  .checkbox span:hover:after{border-color:#999}
  .checkbox input{display:none}
  .checkbox input:checked + span:after{-webkit-animation:check .8s;-moz-animation:check .8s;-o-animation:check .8s;animation:check .8s;border-color:#555}
.checkbox input:checked + .default:after{border-color:#444}
.checkbox input:checked + .primary:after{border-color:#2196F3}
.checkbox input:checked + .success:after{border-color:#8bc34a}
.checkbox input:checked + .info:after{border-color:#3de0f5}
.checkbox input:checked + .warning:after{border-color:#FFC107}
.checkbox input:checked + .danger:after{border-color:#f44336} */
</style>



<body id="page-top">
	<!-- Page Wrapper -->
	<div id="wrapper">
		<!-- Sidebar -->
		<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
			<!-- Sidebar - Brand -->
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
				<div class="sidebar-brand-icon rotate-n-15">
					<i class="fas fa-laptop-code"></i>
				</div>
				<div class="sidebar-brand-text mx-3">SRE Tool </div>
			</a>
			<!-- Divider -->
			<hr class="sidebar-divider my-0">
			<!-- Nav Item - Dashboard -->
			<li class="nav-item">
				<a class="nav-link" href="index.html">
					<i class="fas fa-id-badge"></i>
					<span>Profile</span>
				</a>
			</li>
			<hr class="sidebar-divider my-0">
			<li class="nav-item">
				<a class="nav-link" href="charts.html">
					<i class="fas fa-tasks"></i>
					<span>Progress</span>
				</a>
			</li>
			<!-- Divider -->
			<!-- <hr class="sidebar-divider"> -->
			<!-- Heading -->
			<!-- <div class="sidebar-heading">
        interface
      </div> -->
			<!-- Nav Item - Pages Collapse Menu -->
			<hr class="sidebar-divider my-0">
			<li class="nav-item">
				<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
					<i class="fas fa-folder-open"></i>
					<span>Modules</span>
				</a>
				<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
					<div class="bg-white py-2 collapse-inner rounded">
						<h6 class="collapse-header">REQUIREMENT:</h6>
						<a class="collapse-item" href="buttons.html">1- Elicitation</a>
						<a class="collapse-item" href="cards.html">2- Documentation</a>
						<a class="collapse-item" href="cards.html">3- Negotiation</a>
						<a class="collapse-item" href="rvpoption.php">4- Validation</a>
						<a class="collapse-item" href="cards.html">5- Management</a>
					</div>
				</div>
			</li>
			<!-- Setting thing -->
			<hr class="sidebar-divider my-0">
			<li class="nav-item">
				<a class="nav-link" href="index.html">
					<i class="fas fa-fw fa-wrench"></i>
					<span>Setting</span>
				</a>
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
				<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
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

                            <br>
                                    
                            
							<div class="col-lg-10 offset-lg-1 pt-5 pb-5 bg-light text-info">
                                <div id="client-testimonial-carousel" class="carousel slide" data-ride="carousel" style="height:200px;">
                                    <div class="carousel-inner" role="listbox">
                                    

                                    <div class="carousel-item active text-center p-4">
                                        <blockquote class="blockquote text-center">
                                        <p class="mb-0"><i class="fas fa-handshake"></i> Bounded
                                        </p>
                                        <footer class="blockquote-footer"> <b>The set of requirements is within the system scope</b> <br>
<i>(Is there any manual operation step that is accidently included in the system requirements specification?) </i><cite title="Source Title"></cite></footer>
                                      
                                        <p class="client-review-stars">
                                            <i class="fas fa-dice-one"></i>
                                        </p>
                                        </blockquote>
                                    </div>

                                    <div class="carousel-item text-center p-4">
                                        <blockquote class="blockquote text-center">
                                        <p class="mb-0"><i class="fas fa-people-arrows"></i> Complete
                                        </p>
                                        <footer class="blockquote-footer"> <b>Contain all relevant information about requirements</b><br>
                                        <i>(Possible input, required reaction, exception cases, quality requirements have been included?)</i><br><br>
                                        <cite title="Source Title"></cite></footer>
                                       
                                        <p class="client-review-stars">
                                            <i class="fas fa-dice-two"></i>
                                            
                                        </p>
                                        </blockquote>
                                    </div>

                                    <div class="carousel-item text-center p-4">
                                        <blockquote class="blockquote text-center">
                                        <p class="mb-0"><i class="fas fa-people-arrows"></i> Consistent
                                        </p>
                                        <footer class="blockquote-footer"> <b>All single requirements are consistently defined</b>
                                        <cite title="Source Title"></cite></footer>
                                       
                                        <p class="client-review-stars">
                                            <i class="fas fa-dice-three"></i>
                                            
                                        </p>
                                        </blockquote>
                                    </div>

                                    <div class="carousel-item text-center p-4">
                                        <blockquote class="blockquote text-center">
                                        <p class="mb-0"><i class="fas fa-people-arrows"></i> Comprehensible
                                        </p>
                                        <footer class="blockquote-footer"> <b>Supports selective reading</b><br><i>(Is the requirements documentation readable by any stakeholder?)</i><cite title="Source Title"></cite></footer>
                                       
                                        <p class="client-review-stars">
                                            <i class="fas fa-dice-four"></i>
                                            
                                        </p>
                                        </blockquote>
                                    </div>

                                    <div class="carousel-item text-center p-4">
                                        <blockquote class="blockquote text-center">
                                        <p class="mb-0"><i class="fas fa-people-arrows"></i> Modifiable
                                        </p>
                                        <footer class="blockquote-footer"><b> Easy to add and modify</b> <cite title="Source Title"></cite></footer>
                                       
                                        <p class="client-review-stars">
                                            <i class="fas fa-dice-five"></i>
                                            
                                        </p>
                                        </blockquote>
                                    </div>

                                    <div class="carousel-item text-center p-4">
                                        <blockquote class="blockquote text-center">
                                        <p class="mb-0"><i class="fas fa-thumbs-up"></i> Traceable
                                        </p>
                                        <footer class="blockquote-footer"> <b>Should enable traceable between different versions of requirements specification</b> <cite title="Source Title"></cite></footer>
                                       
                                        <p class="client-review-stars">
                                            <i class="fas fa-dice-six"></i>
                                        </p>
                                        </blockquote>
                                    </div>

                                    <div class="carousel-item text-center p-4">
                                        <blockquote class="blockquote text-center">
                                        <p class="mb-0"><i class="fas fa-people-arrows"></i> Unambiguous
                                        </p>
                                        <footer class="blockquote-footer"><b>Only allow for one valid interpretation for each and entire document</b><cite title="Source Title"></cite></footer>
                                       
                                        <p class="client-review-stars">
                                            <i class="fas fa-dice"></i>
                                            
                                        </p>
                                        </blockquote>
                                    </div>

                                    </div>
                                    <ol class="carousel-indicators">
                                    <li data-target="#client-testimonial-carousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#client-testimonial-carousel" data-slide-to="1"></li>
                                    <li data-target="#client-testimonial-carousel" data-slide-to="2"></li>''
                                    </ol>
                                </div>
                                </div>

<br>
                                
										<form action="checklist2.php" method= "post">

                                                <div class="row d-flex justify-content-center mt-100">
                                                    <div class="col-md-4">
                                                        <div class="cardd">
                                                            <div class="card-bodyy">
                                                                <p class="card-description">Does this documentation has <b>Bounded</b> as the quality criteria?
</p>
                                                                <div> 
                                                                <label> <input type="radio" class="option-input radio" value = "yes" name="bounded" checked /> Yes </label> <br>
                                                                <label> <input type="radio" class="option-input radio" value = "no" name="bounded" /> No </label> 
                                                                </div>
                                                                  <br>
                                                                <p class="card-description">Does this documentation has <b>Complete</b> as the quality criteria?</p>
                                                                <div> 
                                                                <label> <input type="radio" class="option-input radio" value = "yes" name="complete" checked /> Yes </label> <br>
                                                                <label> <input type="radio" class="option-input radio" value = "no" name="complete" /> No </label> 
                                                                </div>
                                                                  <br>
                                                                <p class="card-description">Does this documentation has <b>Consistent</b> as the quality criteria?</p>
                                                                <div> 
                                                                <label> <input type="radio" class="option-input radio" value = "yes" name="consistent" checked /> Yes </label> <br>
                                                                <label> <input type="radio" class="option-input radio" value = "no" name="consistent" /> No </label> 
                                                                </div>
                                                                <br>
                                                                <p class="card-description">Does this documentation has <b>Comprehensible</b> as the quality criteria?</p>
                                                                <div> 
                                                                <label> <input type="radio" class="option-input radio" value = "yes" name="comprehensible" checked /> Yes </label> <br>
                                                                <label> <input type="radio" class="option-input radio" value = "no" name="comprehensible" /> No </label> 
                                                                </div>
                                                                <br>
                                                                <p class="card-description">Does this documentation has <b>Modifiable</b> as the quality criteria?</p>
                                                                <div> 
                                                                <label> <input type="radio" class="option-input radio" value = "yes" name="modifiable" checked /> Yes </label> <br>
                                                                <label> <input type="radio" class="option-input radio" value = "no" name="modifiable" /> No </label> 
                                                                </div>
                                                                <br>
                                                                <p class="card-description">Does this documentation has <b>Traceable</b> as the quality criteria?</p>
                                                                <div> 
                                                                <label> <input type="radio" class="option-input radio" value = "yes" name="traceable" checked /> Yes </label> <br>
                                                                <label> <input type="radio" class="option-input radio" value = "no" name="traceable" /> No </label> 
                                                                </div>
                                                                <br>
                                                                <p class="card-description">Does this documentation has <b>Unambiguous</b> as the quality criteria?</p>
                                                                <div> 
                                                                <label> <input type="radio" class="option-input radio" value = "yes" name="unambiguous" checked /> Yes </label> <br>
                                                                <label> <input type="radio" class="option-input radio" value = "no" name="unambiguous" /> No </label> 
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <br>
                                                <button type="submit" name="insert" value="submit" class="btn btn-primary btn btn-block" style='width:490px;margin:0 50%;position:relative;left:-14em;'> Save </button>
                                              
                                            </div> 
                                            </form>
                                            </div>
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

    <!-- Penambahan js -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Bootstrap core JavaScript-->

	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- Core plugin JavaScript-->
	<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
	<!-- Custom scripts for all pages-->
	<script src="js/sb-admin-2.min.js"></script>
</body>

</html>