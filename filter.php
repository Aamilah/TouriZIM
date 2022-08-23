<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>TouriZIM</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.8.0/css/bootstrap-slider.min.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.8.0/bootstrap-slider.min.js"></script>
    <script src="js/search.js"></script>
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="bg-white">

    <!-- Navbar Start -->
    <div class="container-fluid p-0 nav-bar">
        <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-0">
            <a href="" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-5 text-capitalize font-italic text-white"><span class="text-primary">TouriZIM</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav m-auto py-4">
                    <a href="index.html" class="nav-item nav-link">Home</a>
                    <a href="about.html" class="nav-item nav-link">About Us</a>
                    <a href="filter.php" class="nav-item nav-link active">Filter</a>
                    <a href="blog.html" class="nav-item nav-link">Newsletter</a>
                    <a href="contact.html" class="nav-item nav-link">Contact Us</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->
    <div class="cont p-0">
        <img class="w-100" src="img/recomend-1.jpg" alt="Image">
        <div class="cent">
         <h1 class="display-4 m-0 mt-2 mt-md-3 text-primary">Find Your Perfect Paradise</h1>
         <p> Scroll down below and enter the following details below and we will recommend the destination that best suits you and the moments you want to experience</p>
         </div>
      </div>
      <!-- intro End -->
      <div class="container-fluid my-5">  
      <?php
        include 'class/Product.php';
        $product = new Product();	
        ?>	
        </div>
    
 <div class="container">		
    <div class="row">
        <div class="col-md-3">                    
            <div class="list-group my-3 py-4">
                <h3>Price</h3>	
                <div class="list-group-item">
                    <input id="priceSlider" data-slider-id='ex1Slider' type="range" data-slider-min="50" data-slider-max="1500" data-slider-step="1" data-slider-value="20"/>
                    <div class="priceRange">50 - 1500</div>
                    <input type="hidden" id="minPrice" value="50" />
                    <input type="hidden" id="maxPrice" value="1500" />                  
                </div>			
            </div>    
                       
            <div class="list-group ">
                <h3>Location</h3>
                <div>
                    <?php
                    $location = $product->getLocation();
                    foreach($location as $locationDetails){	
                    ?>
                    <div class="list-group-item checkbox">
                    <label><input type="checkbox" class="destinationDetails location" value="<?php echo $locationDetails["location"]; ?>"  > <?php echo $locationDetails["location"]; ?></label>
                    </div>
                    <?php }	?>
                </div>
            </div>
            <div class="list-group  my-3 py-3">
                <h3>Property Type</h3>
                <?php			
                $property_type = $product->getProperty_type();
                foreach($property_type as $property_typeDetails){	
                ?>
                <div class="list-group-item checkbox">
                <label><input type="checkbox" class="destinationDetails property_type" value="<?php echo $property_typeDetails['property_type']; ?>" > <?php echo $property_typeDetails['property_type']; ?> </label>
                </div>
                <?php    
                }
                ?>
            </div>  
            <div class="list-group  my-3 py-3">
                <h3>Activities</h3>
                <div class="brandSection">
                <?php			
                $act_1 = $product->getAct_1();
                foreach($act_1 as $act_1Details){	
                ?>
                <div class="list-group-item checkbox">
                <label><input type="checkbox" class="destinationDetails act_1" value="<?php echo $act_1Details['act_1']; ?>" > <?php echo $act_1Details['act_1']; ?> </label>
                </div>
                <?php    
                }
                ?>
                <?php			
                $act_2 = $product->getAct_2();
                foreach($act_2 as $act_2Details){	
                ?>    
                <div class="list-group-item checkbox">
                <label><input type="checkbox" class="destinationDetails act_2" value="<?php echo $act_2Details['act_2']; ?>" > <?php echo $act_2Details['act_2']; ?> </label>
                </div>
                <?php    
                }
                ?>
                <?php			
                $act_3 = $product->getAct_3();
                foreach($act_3 as $act_3Details){	
                ?>
                <div class="list-group-item checkbox">
                <label><input type="checkbox" class="destinationDetails act_3" value="<?php echo $act_3Details['act_3']; ?>" > <?php echo $act_3Details['act_3']; ?> </label>
                </div>
                <?php    
                }
                ?>
                <?php			
                $act_4 = $product->getAct_4();
                foreach($act_4 as $act_4Details){	
                ?>
                <div class="list-group-item checkbox">
                <label><input type="checkbox" class="destinationDetails act_4" value="<?php echo $act_4Details['act_4']; ?>" > <?php echo $act_4Details['act_4']; ?> </label>
                </div>
                <?php    
                }
                ?>
                <?php			
                $act_5 = $product->getAct_5();
                foreach($act_5 as $act_5Details){	
                ?>
                <div class="list-group-item checkbox">
                <label><input type="checkbox" class="destinationDetails act_5" value="<?php echo $act_5Details['act_5']; ?>" > <?php echo $act_5Details['act_5']; ?> </label>
                </div>
                <?php    
                }
                ?>
             </div>
        </div>
            <div class="list-group  my-3 py-3">
                <h3>Amenities</h3>
            <div class="brandSection">
                <?php			
                $amenity_1 = $product->getAmenity_1();
                foreach($amenity_1 as $amenity_1Details){	
                ?>
            <div class="list-group-item checkbox">
               <label><input type="checkbox" class="destinationDetails amenity_1" value="<?php echo $amenity_1Details['amenity_1']; ?>" > <?php echo $amenity_1Details['amenity_1']; ?> </label>
            </div>
                <?php    
                }
                ?>
                <?php			
                $amenity_2 = $product->getAmenity_2();
                foreach($amenity_2 as $amenity_2Details){	
                ?>
                <div class="list-group-item checkbox">
                <label><input type="checkbox" class="destinationDetails amenity_2" value="<?php echo $amenity_2Details['amenity_2']; ?>" > <?php echo $amenity_2Details['amenity_2']; ?> </label>
                </div>
                <?php    
                }
                ?>
                <?php			
                $amenity_3 = $product->getAmenity_3();
                foreach($amenity_3 as $amenity_3Details){	
                ?>
                <div class="list-group-item checkbox">
                <label><input type="checkbox" class="destinationDetails amenity_3" value="<?php echo $amenity_3Details['amenity_3']; ?>" > <?php echo $amenity_3Details['amenity_3']; ?> </label>
                </div>
                <?php    
                }
                ?>
                <?php			
                $amenity_4 = $product->getAmenity_4();
                foreach($amenity_4 as $amenity_4Details){	
                ?>
                <div class="list-group-item checkbox">
                <label><input type="checkbox" class="destinationDetails amenity_4" value="<?php echo $amenity_4Details['amenity_4']; ?>" > <?php echo $amenity_4Details['amenity_4']; ?> </label>
                </div>
                <?php    
                }
                ?>
                <?php			
                $amenity_5 = $product->getAmenity_5();
                foreach($amenity_5 as $amenity_5Details){	
                ?>
                <div class="list-group-item checkbox">
                <label><input type="checkbox" class="destinationDetails amenity_5" value="<?php echo $amenity_5Details['amenity_5']; ?>" > <?php echo $amenity_5Details['amenity_5']; ?> </label>
                </div>
                <?php    
                }
                ?>
            </div> 
            </div>
           
    </div>
 
    <div class="col-md-9">
         <br/>
     <div class="row searchResult">
         </div>
        </div>
     </div>	
    </div>


    <!-- Footer Start -->
     <div class="container-fluid bg-secondary text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-4 col-md-12 mb-7">
                <h1 class="mb-3 display-5 text-capitalize font-italic text-white"><span class="text-primary">TouriZIM</h1>
                <p class="m-0">Registered as a private limited company by the year 2025 and will be under the tourism and travel industry with the name TouriZIM Ltd, with its main goal being promoting travel and tourism in Zimbabwe.</p>
            </div>
            <div class="col-lg-8 col-md-10">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="text-primary mb-5">Quick Links</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-white mb-2" href="about.html"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                            <a class="text-white mb-2" href="filter.php"><i class="fa fa-angle-right mr-2"></i>Filter</a>
                            <a class="text-white mb-2" href="blog.html"><i class="fa fa-angle-right mr-2"></i>Newsletter</a>
                            <a class="text-white" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
            
                    <div class="col-md-4 mb-5">
                        <h5 class="text-primary mb-5">Get In Touch</h5>
                        <p><i class="fa fa-map-marker-alt mr-2"></i>123 Harare Street, Harare, Zimbabwe</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>+263 77 555 5555</p>
                        <p><i class="fa fa-envelope mr-2"></i>tourizimnow@gmail.com</p>
                        <div class="d-flex justify-content-start mt-4">
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="https://www.linkedincom/"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-3">
            <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">
                    &copy; <a class="text-white font-weight-bold" href="#">TouriZIM</a>. All Rights Reserved.Designed by Aamilah Dawood   <a style="width: 40px; height: 40px;" href="https://github.com/Aamilah/"><i class="fab fa-github"></i></a>
                </p>
            </div>
            <div class="col-md-6 text-center text-md-right">
                <ul class="nav d-inline-flex">
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="privacy.html">Privacy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="terms.html">Terms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="help.html">Help</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Footer End -->
    
    
        <!-- Back to Top -->
        <a href="#" class="btn btn-secondary border back-to-top"><i class="fa fa-angle-double-up"></i></a>
 <script>
    $(document).ready(function(){
    filterSearch();	
    $('.destinationDetails').click(function(){
        filterSearch();
    });	
	$('#priceSlider').slider({		
	}).on('change', priceRange); 	
});
function priceRange(e){
	$('.priceRange').html($(this).val() + " - 1500");
	$('#minPrice').val($(this).val());
	filterSearch();	
}
function filterSearch() {
	$('.searchResult').html('<div id="loading">    <img class="card-img-top" src="img/noproduct.png" alt="" ></div>');
	var action = 'fetch_data';
	var minPrice = $('#minPrice').val();
	var maxPrice = $('#maxPrice').val();
	var location = getFilterData('location');
	var property_type = getFilterData('property_type');
	var amenity_1 = getFilterData('amenity_1');
	var amenity_2 = getFilterData('amenity_2');
	var amenity_3 = getFilterData('amenity_3');
	var amenity_4 = getFilterData('amenity_4');
	var amenity_5 = getFilterData('amenity_5');
	var act_1 = getFilterData('act_1');
	var act_2 = getFilterData('act_2');
	var act_3 = getFilterData('act_3');
	var act_4 = getFilterData('act_4');
	var act_5 = getFilterData('act_5');
    var name = getFilterData('name');
	$.ajax({
		url:"action.php",
		method:"POST",
		dataType: "json",		
		data:{action:action, minPrice:	minPrice, maxPrice:maxPrice, location:location, property_type:property_type,
			amenity_1:amenity_1,amenity_2:amenity_2,amenity_3:amenity_3,amenity_4:amenity_4,amenity_5:amenity_5,
		    act_1:act_1,act_2:act_2, act_3:act_3, act_4:act_4, act_5:act_5, name:name},
		success:function(data){
			$('.searchResult').html(data.html);
		}
	});
}
function getFilterData(className) {
	var filter = [];
	$('.'+className+':checked').each(function(){
		filter.push($(this).val());
	});
	return filter;
}
    </script>
    <script>
        $( function() {
    $( "#name" ).autocomplete({
    source: 'backend-script.php'  
    });
});
    </script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </body>   
</html>