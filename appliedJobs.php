<?php
session_start(); 
	if(isset($_SESSION['Name'])) {
		$name=$_SESSION['Name'];
		$uType=$_SESSION['userType'];
	}
	
	$action='';
	if(isset($_GET['action']))
{
	if($_GET['action']=='update' or $_GET['page']=='nav')
	{
		$action=$_GET['action'];
	}
	
	if(isset($_REQUEST['PAGENO'])){
		$pageNo=$_REQUEST['PAGENO'];
	}
	
	if(isset($_REQUEST['STARTROW'])){
		$sRow=$_REQUEST['STARTROW'];
	}
	
	if(isset($_REQUEST['ENDROW'])){
		$eRow=$_REQUEST['ENDROW'];
	}
	
	if(isset($_REQUEST['TOTALPAGE'])){
		$noOfPage=$_REQUEST['TOTALPAGE'];
	}
	
	if(isset($_REQUEST['TOTALROWS'])){
		$totalrows=$_REQUEST['TOTALROWS'];
	}
	
	if(isset($_REQUEST['PAGENO']) or isset($_REQUEST['STARTROW']) or isset($_REQUEST['ENDROW']) or isset($_REQUEST['TOTALPAGE']) or isset($_REQUEST['TOTALROWS'])){
		if($_GET['page']=='nav') {
			$pageNavVariable="PAGENO=".$pageNo."&STARTROW=".$sRow."&ENDROW=".$eRow."&TOTALPAGE=".$noOfPage."&TOTALROWS=".$totalrows;
			} else {
				$pageNavVariable="PAGENO=".$pageNo."&STARTROW=".$sRow."&TOTALPAGE=".$noOfPage."&TOTALROWS=".$totalrows;
			}
		}
		}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!-- saved from url=(0048)http://www.pasona.in/jobSeekers/registration.php -->
<html lang="ja-JP"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-69308303-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-69308303-1');
	</script>
	<!-- /Global site tag (gtag.js) - Google Analytics -->
	
	<title>Online registration | Pasona&nbsp;India Pvt. Ltd.</title>
	<meta http-equiv="Content-Script-Type" content="text/javascript">
	<meta http-equiv="Content-Style-Type" content="text/css">
	<meta name="description" content="Register for free to start outplacement assistance to you.">
	<meta name="keywords" content="PASONA,INDIA,Recruiting,HR Consultant,staffing agent,Jobs">
	<link rel="alternate" hreflang="en" href="http://www.pasona.in/jobSeekers/registration.php">
	<link rel="alternate" hreflang="ja" href="http://www.pasona.in/japanese/jobSeekers/registration.php">
	<link rel="shortcut icon" href="http://www.pasona.in/favicon.ico" type="image/vnd.microsoft.icon">
	<link rel="icon" href="http://www.pasona.in/favicon.ico" type="image/vnd.microsoft.icon">
	<link rel="stylesheet" type="text/css" href="/include/common.css">
	<link rel="stylesheet" type="text/css" href="/include/jobSeekers.css">
	<script type="text/javascript" src="/include/jquery.min.js"></script>
	<script type="text/javascript" src="/include/common.js"></script>

</head>

<body id="rgst">
<!-- ?header? -->
<div id="head">
welcome, <?php if(isset($_SESSION['Name'])) {
		$name=$_SESSION['Name'];
		echo $name;
		?>
		<p id="utilityNav">
			<a href="/logout.php"  id="logout">Log Out</a>
		</p>
		<?php
	} else { ?> 
<p id="utilityNav">
	<a href="/signin.php" id="login">Login</a>
	<a href="/jobSeekers/registration.php" id="register">Register</a>
</p>
<?php 
	}
?>
<!-- ?header? -->
</div>
<div id="head">
	<p id="btn_lngChange"><a href="http://www.pasona.in/japanese/jobSeekers/registration.php"><img src="./include/btn_lngJpn.gif" alt="Japanese" class="rolloverImg"></a></p>
	<h1>Your Job Search, Career Advancement and Temping Information Starts with Pasona India</h1>
<p id="utilityNav">
	<a href="/company/contactUs.php" id="contact">contact us</a>
</p>

<div class="clearfix">
	<p id="img_tcg"><a href="http://www.tdh.metro.tokyo.jp/" target="_blank"><img src="./include/img_tcg.png"></a></p>
	<p id="logo"><a href="/home.php">Pasona&nbsp;India Pvt. Ltd.</a></p>
	<?php if($uType=='Admin') {
	?>
	<a href="/jobSeekers/jobPost.php"><center>Job Post</a>&nbsp;/&nbsp;<a href="/newsAndTopics/news&Topics.php">News And Topics Post</a>
	<?php
		}
	?>
	<ul id="gNav">
		<li id="gNav01"><a href="/jobSeekers/step.php">JOB SEEKERS ???????????</a></li>
		<li id="gNav02"><a href="/clients/clients.php">CLIENTS ???????????</a></li>
		<li id="gNav03"><a href="/company/info.php">COMPANY ????</a></li>
	</ul>
</div>
</div>
<!-- ?header? -->

<!-- mainImg  -->
<h2>Applied Jobs</h2>

<!-- separate line -->
<div id="separateWrap">
	<div id="separateLine">
		<p>&nbsp;</p>
	</div>
</div>

<!-- ?main? -->
<div id="main">
	<!-- ?Bread crumb? -->
	<?php 
		if($uType=='Admin') {
	?>
	<ol id="bread">
		<li class="home"><a href="/home.php"><img src="./include/ico_bcHome.gif" alt="HOME"></a></li>
		<li><strong>Applied Jobs</strong></li>
	</ol>
	<!-- ?Bread crumb? -->

	<!-- iframe -->
	<?php
		if($action=='nav' or $action=='update'){
	?>
			<div  style="width: 780px; height: 600px; overflow-y: scroll"><?php if(isset($pageNavVariable)){ $_GET['pageNavVariable']=$pageNavVariable; } include 'appliedJobsSearchResult.php' ; ?></div>
			
	<?php
		}  else {
	?>
			<div  style="width: 780px; height: 600px; overflow-y: scroll"><?php include 'appliedJobsSearchResult.php' ; ?></div>
			
	<?php
		}
	?>
	
	<?php 
		} else {
	?>
		You Don't have access on this page.
	<?php
		}
	?>
		<!-- pageTop -->
	<p class="PageTop"><img src="/include/goTop.gif" alt="Go to Top" class="rolloverImg"></p>
</div>
<!-- ?main? -->

<!-- ?footer? -->
<div id="foot">
	<a href="https://www.facebook.com/pages/Team-PASONA-India-Co-Ltd/152260251464738" target="_blank"><img src="/include/ico_facebook.gif" alt="facebook"></a>
	Copyright © 2019 Pasona&nbsp;India Pvt. Ltd. All Rights Reserved.
</div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-44703698-1', 'teampasona.in');
  ga('send', 'pageview');

  // 20160122 Brainlab Add
  ga('create', 'UA-72764866-1', 'auto', {'name': 'newTracker'});
  ga('newTracker.send', 'pageview');

</script>
<!-- ?footer? -->


</div>
<!-- ?main? -->




</body></html>