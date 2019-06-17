<?php
	$name='';
	$uType='';
	session_start();
	
	if(isset($_SESSION['Name'])) {
		$name=$_SESSION['Name'];
		$uType=$_SESSION['userType'];
	}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Collapsible sidebar using Bootstrap 4</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="include/style4.css">
    <script src="https://kit.fontawesome.com/f93fed0e4d.js"></script>
      <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>  

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3><img class="card-img-top" src="./images/chicago.jpg" alt="Card image cap"></h3>
                <strong>S&B</strong>
            </div>
            
            <ul class="list-unstyled components" style="background-color:#006097 !Important">
                <li class="active">
                    <a href="#" onclick="openHome()">
                       <i class="fas fa-home"></i>Home
                    </a>
                </li>
         <hr class="style1"/>
                <li>
                    <a href="#" onclick="openAbout()">
                        <i class="fas fa-th-list"></i>ABOUT US
                    </a>
                    </li>
                    <hr class="style1"/>
                    <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-laptop"></i>SERVICES
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#"><i class="fas fa-chevron-right"></i>Recruitment</a>
                        </li>
                        <li>
                        
                            <a href="#"><i class="fas fa-chevron-right"></i></i>Labour</a>
                        </li>
                        <li>
                        
                            <a href="#"><i class="fas fa-chevron-right"></i>HR Consulting</a>
                        </li>
                    </ul>
                </li>
                <hr class="style1"/>
                <li>
                    <a href="#">
                        <i class="fas fa-briefcase"></i>JOBS
                    </a>
                </li>
				<?php if($uType=='Admin') {
				?>
                <hr class="style1"/>
                <li>
                    <a href="#">
                       <i class="far fa-newspaper"></i>NEWS and TOPICS
                    </a>
                </li>
				<?php
					}
				?>
                <hr class="style1"/>
                <li>
                    <a href="#" onclick="openContactUs()">
                        <i class="far fa-paper-plane"></i>CONTACT US
                    </a>
                </li>
                <hr class="style1"/>
				<li>
                    <a href="#" onclick="openCareers()">
                       <i class="fas fa-user-graduate"></i>CARIEERS
                    </a>
                </li>
				<?php if($uType=='Admin') {
				?>
                <hr class="style1">
                <li>
                    <a href="#" onclick="openCareers()">
                       <i class="fas fa-user-cog"></i>POSTED JOBS
                    </a>
                </li>
                <hr class="style1"/>                 
                 <li>
                    <a href="#" onclick="openCareers()">
                        <i class="fas fa-user-cog"></i>APPLIED JOBS
                    </a>
                </li>
				<?php
					}
				?>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
					<button type="button" id="sidebarCollapse" class="btn btn-info">
                            <i class="fas fa-bars"></i>
                    </button>
					<?php if(isset($_SESSION['Name'])) {
						echo 'Welcome, '.$name;
					?>
					<a href="logout.php" ><button id="btnLogin" class=" btn btn-light ">
                        <i class="fas fa-sign-in-alt"></i>
                        Log Out</button></a>
					<?php
						} else { 
					 ?> 
                    <div class="pull-right">
                    <button id="btnLogin" class=" btn btn-light " onclick="openLogin()">
                        <i class="fas fa-sign-in-alt"></i>
                        Log In</button>
                    <button id="btnRegister" class="btn btn-light" onclick="openRegister()">
                        <i class="fas fa-user"></i></i>
                        Register</button>
                    </div>
					<?php
						}
					?>
                </div>
            </nav>

			<div id="pageBody" style="min-height:800px; padding-bottom:100px;"> 
			
			</div>
            <footer class="footer mt-auto py-3" style="background-color: #f7f7f7">
                <div class="container">
                    <div class="row text-center text-xs-center text-sm-left text-md-left">
                    <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>STAFF APPLICANT</h5>
                    <ul class="list-unstyled quick-links">
                        <li><a href="javascript:void();"><i class="fas fa-angle-double-right"></i>Home</a></li>
                        <li><a href="javascript:void();"><i class="fas fa-angle-double-right"></i>About</a></li>
                        <li><a href="javascript:void();"><i class="fas fa-angle-double-right"></i>FAQ</a></li>
                        <li><a href="javascript:void();"><i class="fas fa-angle-double-right"></i>Get Started</a></li>
                        <li><a href="javascript:void();"><i class="fas fa-angle-double-right"></i>Videos</a></li>
                    </ul>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>CLIENTS</h5>
                    <ul class="list-unstyled quick-links">
                        <li><a href="javascript:void();"><i class="fas fa-angle-double-right"></i>Home</a></li>
                        <li><a href="javascript:void();"><i class="fas fa-angle-double-right"></i>About</a></li>
                        <li><a href="javascript:void();"><i class="fas fa-angle-double-right"></i>FAQ</a></li>
                        <li><a href="javascript:void();"><i class="fas fa-angle-double-right"></i>Get Started</a></li>
                        <li><a href="javascript:void();"><i class="fas fa-angle-double-right"></i>Videos</a></li>
                    </ul>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>COMPANY</h5>
                    <ul class="list-unstyled quick-links">
                        <li><a href="javascript:void();"><i class="fas fa-angle-double-right"></i>Home</a></li>
                        <li><a href="javascript:void();"><i class="fas fa-angle-double-right"></i>About</a></li>
                        <li><a href="javascript:void();"><i class="fas fa-angle-double-right"></i>FAQ</a></li>
                        <li><a href="javascript:void();"><i class="fas fa-angle-double-right"></i>Get Started</a></li>
                        <li><a href="https://wwwe.sunlimetech.com" title="Design and developed by"><i class="fas fa-angle-double-right"></i>Imprint</a></li>
                    </ul>
                    </div>
                    </div>
                    <div class="row">
                                        <!--social link are there for future use-->
                    <!--<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                    <ul class="list-unstyled list-inline social text-center" style="color:black">
                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook-square" ></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-envelope"></i></a></li>
                    </ul>-->
                    </div>
                    </hr>
                    </div>	
                    <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">                    
                    </div>
                    </hr>
                    </div>	
                </div>
            </footer>
        </div>
    </div>
  
    

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
			 <?php
				if(isset($_GET['loginError'])){
					$errorMsg=$_GET['loginError'];
				}			
				if(isset($errorMsg)) {		
			 ?>
				$('#pageBody').load("login.php?error=InvalidCredential");
			<?php
				} else {
			?>
				$('#pageBody').load("homepage.php");
			<?php
				}
			?>
        });
		
        function openAbout() {
            $('#pageBody').load("AboutUs.html");
        }
        function openHome() {
            $('#pageBody').load("homepage.php");
        }
        function openContactUs() {
            $('#pageBody').load("ContactUs.html");
        }
        function openCareers() {
            $('#pageBody').load("Career.html");
        }
        function openJobs() {
            $('#pageBody').load("Jobs.html");
        }  
		function openRegister() {
            $('#pageBody').load("register.php");
        } 
		function openLogin(){
            $('#pageBody').load("login.php");
		}    
		function openLogout(){
            $('#pageBody').load("logout.php");
		}  
        $('#sidebarCollapse').click(function() {
        $("i", this).toggleClass("fa fa-arrow-left fa fa-arrow-right");
});
    </script>
</body>

</html>