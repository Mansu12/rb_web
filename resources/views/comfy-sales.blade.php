@include('layout.header')
<div class="container" id="fh5co-hero">
<!DOCTYPE html>
<html class="no-js"> 
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Rupeeboss - Apply for Loan, Credit Cards With Best Offers</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />


	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css"> 
    <!-- Chatbox  -->
	<link rel="stylesheet" href="css/chatbox.css">
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
    	<!-- jQuery -->
        
	<script src="js/jquery.min.js"></script>
	<script>
	       $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
    // Avoid following the href location when clicking
    event.preventDefault(); 
    // Avoid having the menu to close when clicking
    event.stopPropagation(); 
    // Re-add .open to parent sub-menu item
    $(this).parent().addClass('open');
    $(this).parent().find("ul").parent().find("li.dropdown").addClass('open');
});
	</script>
	<script>
$(document).ready(function(){
    $(".hide-dv").click(function(){
        $(".sidebar").hide("fast");
		$(".arrow-don").show("fast");
    });
	$(".arrow-don").click(function(){
        $(".sidebar").show("fast");
		$(".arrow-don").hide("fast");
    });
});
</script>
<script>
$(document).ready(function(){
    $(".chat").click(function(){
        $(".chat-win").toggle();
     });
	});
  </script> 
  <head>
	<body>
	
	
	<div id="fh5co-page">

	<div class="fh5co-contact animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-left fh5co-heading animate-box fadeInUp animated">
					<h2>Comfy Leaflet</h2>
					</div>				
				<div class="col-md-12">
					<div class="row pad11 white-bg comp-pg">

                   <img src="{{URL::to('images/Comfy-Sales Leaflet-Front.jpg')}}" class="img-responsive"/>
				   <img src="{{URL::to('images/Comfy-Sales Leaflet-Back.jpg')}}" class="img-responsive"/>
					</div>
				</div>
			</div>
		</div>	
	</div>

	
	
	
	
	
	
	</div>
	
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	
	<script src="js/google_map.js"></script>
	
	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>



</div>
@include('layout.footer')
@include('layout.script')

