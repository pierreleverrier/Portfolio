<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
		 <title>Pierre Leverrier - Portfolio</title>

		<link rel="stylesheet" href="css/simplegrid.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/animsition.min.css" />
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/style5.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="js/modernizr.custom.js"></script>
		<script src="js/animsition.min.js"></script>
		<script>
		    $(document).ready(function() {
		    $(".animsition").animsition({
		      inClass: 'fade-in',
		      outClass: 'fade-out',
		      inDuration: 1500,
		      outDuration: 800,
		      linkElement: '.animsition-link',
		      // e.g. linkElement: 'a:not([target="_blank"]):not([href^=#])'
		      loading: true,
		      loadingParentElement: 'body', //animsition wrapper element
		      loadingClass: 'animsition-loading',
		      loadingInner: '', // e.g '<img src="loading.svg" />'
		      timeout: false,
		      timeoutCountdown: 5333,
		      onLoadEvent: true,
		      browser: [ 'animation-duration', '-webkit-animation-duration'],
		      // "browser" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
		      // The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
		      overlay : false,
		      overlayClass : 'animsition-overlay-slide',
		      overlayParentElement : 'body',
		      transition: function(url){ window.location.href = url; }
		    });
		  });
		</script>
		<script type="text/javascript" src="js/typed.js"></script>
	    <script>
	    $(function(){

	        $("#typed").typed({
	            // strings: ["Typed.js is a <strong>jQuery</strong> plugin.", "It <em>types</em> out sentences.", "And then deletes them.", "Try it out!"],
	            stringsElement: $('#typed-strings'),
	            typeSpeed: 25,
	            backDelay: 300,
	            loop: false,
	            contentType: 'html', // or text
	            // defaults to false for infinite loop
	            loopCount: false,
	            callback: function(){ foo(); },
	            resetCallback: function() { newTyped(); }
	        });

	        $(".reset").click(function(){
	            $("#typed").typed('reset');
	        });

	    });

	    function newTyped(){ /* A new typed object */ }

	    function foo(){ console.log("Callback"); }

	    </script>

	</head>


	<body>
	<div class="container-fluid bg-container animsition">

		
		<video autoplay loop muted id="bgvid">
	        <source src="video/sky.mp4" type="video/mp4"/>
	    </video>
		

		<nav id="bt-menu" class="bt-menu">
		<a href="#" class="bt-menu-trigger"><span>Work</span></a>
			<ul>
				<li><a href="#">→ Anecgones</a></li>
				<li><a href="#">→ TV App</a></li>
				<li><a href="#">→ L'Exception</a></li>
				<li><a href="#">→ Creative Breakfast</a></li>
				<li><a href="#">→ Lyon BD</a></li>
				<li><a href="#">→ INSA</a></li>
				<li><a href="#"><i class="fa fa-info-circle"></i> About me</a></li>
			</ul>
			<ul>
				<li><a href="https://dribbble.com/pierreleverrier" target="_blank"><i class="fa fa-dribbble fa-2x"></i></a></li>
				<li><a href="https://www.instagram.com/pierre_leverrier/" target="_blank"><i class="fa fa-instagram fa-2x"></i></a></li>
				<li><a href="https://fr.pinterest.com/pierreleverrier/" target="_blank"><i class="fa fa-pinterest fa-2x"></i></a></li>
				<li><a href="https://twitter.com/leverrierpierre" target="_blank"><i class="fa fa-twitter fa-2x"></i></a></li>
				<li><a href="mailto:leverrier.pierre@gmail.com" target="_blank"><i class="fa fa-envelope fa-2x"></i></a></li>
			</ul>
		</nav>

		<div class="row">
		  <div class="col-1">
		  	<a href="index.php">
		  		<div class="black-block">
		  			<img src="img/logo.png" alt="Logo" />
		  		</div>
		  	</a>
		  </div>

		  <div class="col-9"></div>

		  <div class="col-2">
		  	<a href="mailto:leverrier.pierre@gmail.com" class="button-hire button--nina animsition-link" data-text="Hire me →">
               <span>L</span><span>e</span><span>t</span><span>'</span><span>s</span><span>&nbsp;</span><span>g</span><span>o</span><span>&nbsp;</span><span>!</span>
            </a>
		  </div>
		</div>


		<div class="row">
		  <div class="col-12 middle">
		  	
			<div class="type-wrap">

	            <div id="typed-strings">
	                <p>Hello there <i class="fa fa-hand-peace-o"></i><br/>My name is <strong>Pierre</strong>.<br/>I'm a <strong>graphic designer</strong>.<br />Thanks for stopping by ! <i class="fa fa-smile-o"></i></p>
	            </div>
	            <span id="typed"></span>

	        </div>

		  </div>
		</div>
		
	</div>

	<script src="js/classie.js"></script>
	<script src="js/borderMenu.js"></script>
	</body>
</html>