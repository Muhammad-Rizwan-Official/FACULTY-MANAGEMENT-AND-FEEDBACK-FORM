<!DOCTYPE html>
<html>
<head>
<title>Career Builder  an education category Flat bootstrap Responsive  Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Career Builder Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- css links -->
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
<link href="../css/slider.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" type="text/css" href="../css/facultystyle.css" />
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all">
<!-- /css links -->
 <link href='//fonts.googleapis.com/css?family=Dancing+Script:400,700' rel='stylesheet' type='text/css'>
 <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
 <link href='//fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800' rel='stylesheet' type='text/css'>
<script src="../js/SmoothScroll.min.js"></script>
<script type="text/javascript" src="../js/modernizr.custom.js"></script> 
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

<!-- Scripts For Navbar -->

	<script src="../js/jquery.scrollTo.min.js"></script>

<!--// Scripts For Navbar -->

<!-- Scripts For Gallery Section -->
	<script src="../js/jquery.localScroll.min.js"></script>
	<script src="../js/jquery.magnific-popup.min.js"></script>
	<script src="../js/common.js"></script>
<!--// Scripts For Gallery Section -->

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

  // Store hash
  var hash = this.hash;

  // Using jQuery's animate() method to add smooth page scroll
  // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
  $('html, body').animate({
    scrollTop: $(hash).offset().top,
  }, 900, function(){

    // Add hash (#) to URL when done scrolling (default click behavior)
    window.location.hash = hash;
    });
  });
})
</script>

<!-- /js files -->
<!-- Script For Number Scrolling -->
	<script type="text/javascript" src="../js/numscroller-1.0.js"></script>
		
<!-- //Script For Number Scrolling -->
<script src="../js/responsiveslides.min.js"></script>
			<script>
			// You can also use "$(window).load(function() {"
			$(function () {
				// Slideshow 4
				$("#slider3").responsiveSlides({
						auto: true,
						pager: true,
						nav: false,
						speed: 500,
						namespace: "callbacks",
						before: function () {
							$('.events').append();
						},
						after: function () {
							$('.events').append();
						}
					});				
				});
			</script>

<!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">Career Builder</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="teacherhome.php">HOME</a></li>
				<li><a href="publication.php">PUBLICATION</a></li>
				<li><a href="lesson.php">LESSON PLAN</a></li>
				<!-- <li><a href="feeddisp.php">FEEDBACK</a></li> -->
				<li><a href="duties.php">DUTIES</a></li>
				<li><a href="../index.html">LOGOUT</a></li>
				
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<!-- /Fixed navbar -->	
	
<!-- Banner -->
	<div class="slider" >
		
			<div  id="top" class="callbacks_container-wrap" >
				<ul class="rslides" id="slider3" style="max-height:300px;">
					<li>
						<div class="slider1"></div>
					</li>
					<li>
						<div class="slider1 slider2"></div>
					</li>
					<li>
						<div class="slider1 slider3"></div>
					</li>
			</div>
	</div>
<!-- /Banner -->
<br><br><br><br>