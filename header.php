

<html lang="en-US">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Malaysian Association of Clinical Biochemists</title>
<link href="css/singlePageTemplate.css" rel="stylesheet" type="text/css">


<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->

<script src="http://use.edgefonts.net/source-sans-pro:n2:default.js" type="text/javascript"></script>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Main Container -->
<div class="container"> 
  <!-- Navigation -->
  <header> <a href="">
    <img class="logo" src="images/logo-macb-2.png" width="160" height="80" alt=""</img>
    </a>
    <nav>
      <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="#about">ABOUT</a></li>
        <li> <a href="#contact">CONTACT</a></li>
		  
		 <?php if(!isset($_SESSION["KEY"])): ?> 
		  <li> <a href="register.php">REGISTER</a></li>
		  <li> <a href="login.php">LOGIN</a></li>
		  <?php else: ?>
		  <li> <a href="profile.php">MY Profile</a></li>
		  <li> <a href="logout.php">LOGOUT</a></li>
		  <?php endif; ?>
      </ul>
    </nav>
  </header>
	
	
	</html>
	
	
	