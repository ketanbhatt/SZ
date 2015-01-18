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
							<p> We supply a vast variety of 
								material and deliver services,
								meeting the demands of our ever
								increasing clientele	
							</p>
						
					</li>
					<li class = "icon-col-2"> 
						<!--second Icon-->
						<img class = "icons-icon" src = "img/airplane.png" /> 
						<h3> Scope Of Delivery </h3>
						<p> SupplyZone specializes in 
							quick delivery of your material,
							right to your company's doorstep, 
							wherever it might be  
							 
						</p>
					</li>
					<li class = "icon-col-3"> 
						<!--third Icon-->
						<img class = "icons-icon" src = "img/time.png" /> 
						<h3> Dependable Business</h3>
						<p> We take pride in keeping
							our promises, always. Stay
							assured of the quality and 
							standards, because we deliver
							value 
							
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
					</div>
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

		