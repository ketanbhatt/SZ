<?php 
		$pageName = "SupplyZone | Home Page";
		require 'inc/header.php';
?>


	<div class = "icons">
		<!--Icon Description Begins-->
		<div class = " container">
			<div class = "icon-list">
				<ul>
					<li class = "icon-col-1"> 
						<!--First Icon-->
						
							<img class = "icons-icon" src = "img/onestop.png" /> 
							<h3> One Stop Solution </h3>
							<p> Lorem ipsum dolor sit amet, 
								consectetur adipiscing elit. 
								Proin magna justo, mollis 
								nec sollicitudin non, 
								Suspendisse bibendum 
							 
							</p>
						
					</li>
					<li class = "icon-col-2"> 
						<!--second Icon-->
						<img class = "icons-icon" src = "img/airplane.png" /> 
						<h3> Scope Of Delivery </h3>
						<p> Lorem ipsum dolor sit amet, 
							consectetur adipiscing elit. 
							Proin magna justo, mollis 
							nec sollicitudin non, 
							Suspendisse bibendum  
							 
						</p>
					</li>
					<li class = "icon-col-3"> 
						<!--third Icon-->
						<img class = "icons-icon" src = "img/time.png" /> 
						<h3> Dependable Business</h3>
						<p> Lorem ipsum dolor sit amet, 
							consectetur adipiscing elit. 
							Proin magna justo, mollis 
							nec sollicitudin non, 
							Suspendisse bibendum 
							
						</p>
					</li>
				</ul>
			</div>
		</div>
	</div>
		<!--Icon Description ends-->

		<!--CLientele begins-->
		<div class = "clientele">	
			<div class = "container">
				<div class = "client-wrap">
					<h2> Clientele </h2>
					
						
						<div class="clientele-slider">
						  <div><img src = "img/client1.png"> </div>
						  <div><img src = "img/client2.png"> </div>
						  <div><img src = "img/client3.png"> </div>
						   <div><img src = "img/client4.png"> </div>
						    <div><img src = "img/client5.png"></div>
						     <div><img src = "img/client6.png"></div>
						     <div><img src = "img/client7.png"></div>
						     <div><img src = "img/client8.png"></div>
						     <div><img src = "img/client9.png"></div>
						     <div><img src = "img/client10.png"></div>
						     <div><img src = "img/client12.png"></div>
						     <div><img src = "img/client13.png"></div>
						     <div><img src = "img/client14.png"></div>
						     <div><img src = "img/client15.png"></div>
						     <div><img src = "img/client16.png"></div>
						</div>

							 <script type="text/javascript">
									$(document).ready(function(){
										$('.clientele-slider').slick({
										   infinite: true,
											  slidesToShow: 4,
											  slidesToScroll: 4,
											  autoplay: true,
  												autoplaySpeed: 2000,
  												dots: false,
											  responsive: [
											    {
											      breakpoint: 1024,
											      settings: {
											        slidesToShow: 3,
											        slidesToScroll: 3,
											        infinite: true,
											        dots: false
											      }
											    },
											    {
											      breakpoint: 680,
											      settings: {
											        slidesToShow: 2,
											        slidesToScroll: 2
											      }
											    },
											    {
											      breakpoint: 482,
											      settings: {
											        slidesToShow: 1,
											        slidesToScroll: 1
											      }
											    }
											  ]
																					});
																				});
							</script>


					<!--<ul>
						
							<div class = "client-images">
								<ul>
									<div class = "first-class"> <li  class = "f-left"> <img src = "img/client1.png"> </li>
									<li  class = "f-left"> <img src = "img/client2.png"> </li>
									<li  class = "f-right"> <img src = "img/client3.png"> </li>
									<li  class = "f-right" > <img class = "last-image" src = "img/client4.png"> </li></div>


									<div class = "last-class" ><li  class = "f-left"> <img src = "img/client5.png"> </li>
									<li  class = "f-left" > <img class = "last-image" src = "img/client6.png"> </li>
									<li  class = "f-right"> <img src = "img/client7.png"> </li>
									<li  class = "f-right" > <img class = "last-image" src = "img/client8.png"> </li></div>

									<div class = "last-class" ><li  class = "f-left"> <img src = "img/client9.png"> </li>
									<li  class = "f-left" > <img class = "last-image" src = "img/client10.png"> </li>
									<li  class = "f-right"> <img src = "img/client11.png"> </li>
									<li  class = "f-right" > <img class = "last-image" src = "img/client12.png"> </li></div>

									<div class = "last-class" ><li  class = "f-left"> <img src = "img/client13.png"> </li>
									<li  class = "f-left" > <img class = "last-image" src = "img/client14.png"> </li>
									<li  class = "f-right"> <img src = "img/client15.png"> </li>
									<li  class = "f-right" > <img class = "last-image" src = "img/client16.png"> </li></div>
								</ul>
							</div>
						
					</ul>-->
				</div>

				<!--<div class = "client-images-small">
					<div>
							<li class = "client-1"> </li>
							<li class = "client-2"></li>
							<li class ="client-3"></li>
					</div>

					<div>
							<li class = "client-4"> </li>
							<li class = "client-5"></li>
							<li class ="client-6"></li>
					</div>-->
				</div>
			</div>
		</div>
		<!--Clientele Ends-->
		
		<!--Contact Form Begins-->
<?php
		include 'inc/form.php';
?>
		<!--contact form ends-->

<?php 
	
		require 'inc/footer.php';
?>

		