
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
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

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
                    <a href="filter.php" class="nav-item nav-link">Filter</a>
                    <a href="blog.html" class="nav-item nav-link">Newsletter</a>
                    <a href="contact.html" class="nav-item nav-link">Contact Us</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Detail Start -->
    <div class="container py-5 p-0">
        <div class="row">
            <div class="col-lg-8">
                <div class="d-flex flex-column text-left mb-4">
                    <h5 class="text-primary mb-5">Newsletter</h5>
                    <h1 class="mb-3">Elephants Galore</h1>
                    <div class="d-index-flex mb-2">
                        <span class="mr-3"><i class="fa fa-user text-primary"></i> Writer</span>
                        <span class="mr-3"><i class="fa fa-comments text-primary"></i> 15</span>
                    </div>
                </div>
                
                <div class="mb-5">
                    <img class="img-thumbnail mb-4 p-3" src="img/blog-3.jpg" alt="Image">
                    <p>While Africa’s elephant population has experienced a dangerous decline over the last 30 years, stringent conservation efforts in Zimbabwe have resulted in a remarkable overpopulation of elephants in the country. Zimbabwe authorities estimate their elephant population stands above 100,000, out of the 415,000 elephants that remain in Africa today. Zimbabwe’s elephant population has grown—up from 84,000—nearly 20 percent since 2014. Conservationists in Zimbabwe also estimate the country’s carrying capacity for the elephants—the population size of a species that a specific habitat can support—is around 45,000. The surplus of elephants has led the government to consider population-control measures, such as culling the herd, administering elephant contraceptives, and selling hunting rights, in a bid to protect other wildlife and the country’s vegetation. As the African forest elephant is listed as critically endangered and the African savannah elephant as endangered, Zimbabwe authorities are also considering relocating elephants. However, a lack of funding has hampered relocation efforts.</p>
                </div>
                
                
                <div class="media bg-primary text-white mb-5 p-4 p-md-5">
                    <img src="img/Team/ad.jpg" alt="Image" class="img-thumbnail p-3 mr-4 mt-1 bg-primary" style="width:100px;">
                    <div class="media-body">
                        <h5 class="mb-3">Aamilah Dawood</h5>
                        <p class="m-0">Content based writer for TouriZIM. Loves to travel and try new foods, always up for a challenge and consistenetly excited about life <br>
                        <h7>Reference:https://www.aljazeera.com/features/2021/6/5/zimbabwe-elephant-culling-plan-stirs-debate</h7></p>
                    </div>
                </div>

                <?php 

                include 'config.php';
                
                error_reporting(0); // For not showing any error
                
                if (isset($_POST['submit'])) { // Check press or not Post Comment Button
                    $name = $_POST['name']; // Get Name from form
                    $email = $_POST['email']; // Get Email from form
                    $comment = $_POST['comment']; // Get Comment from form
                
                    $sql = "INSERT INTO comment_3 (name, email, comment)
                            VALUES ('$name', '$email', '$comment')";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                        echo "<script>alert('Comment added successfully.')</script>";
                    } else {
                        echo "<script>alert('Comment does not add.')</script>";
                    }
                } 
                ?>
                <div class="wrapper">
                <form action="" method="POST" class="form">
			 <div class="row">
				<div class="input-group">
					<label for="name">Name</label>
					<input type="text" name="name" id="name" placeholder="Enter your Name" required>
				</div>
				<div class="input-group">
					<label for="email">Email</label>
					<input type="email" name="email" id="email" placeholder="Enter your Email" required>
				</div>
			 </div>
			 <div class="input-group textarea">
				<label for="comment">Comment</label>
				<textarea id="comment" name="comment" placeholder="Enter your Comment" required></textarea>
			 </div>
			 <div class="input-group">
				<button name="submit" class="btn">Post Comment</button>
			 </div>
		     </form>
		     <div class="prev-comments">
			<?php 
			
			$sql = "SELECT * FROM comment_3";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {

			?>
			<div class="single-item">
				<h4><?php echo $row['name']; ?></h4>
				<a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a>
				<p><?php echo $row['comment']; ?></p>
			</div>
			<?php

				}
			}
			?>
		</div>
     </div>
</div>
            <div class="col-lg-4 mt-5 mt-lg-0">
                <div class="mb-5">
                    <h4 class="mb-4">Categories</h4>
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Tourism
                            <span class="badge badge-primary badge-pill">1</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Editor's Pick
                            <span class="badge badge-primary badge-pill">1</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            New Destinations
                            <span class="badge badge-primary badge-pill">1</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            History
                            <span class="badge badge-primary badge-pill">1</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Wildlife
                            <span class="badge badge-primary badge-pill">1</span>
                        </li>
                    </ul>
                </div>
                <div class="mb-5">
                    <h4 class="mb-4">Recent Post</h4>
                    <div class="d-flex align-items-center border-bottom mb-3 pb-3">
                        <img class="img-thumbnail p-2" src="img/blog-1.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="d-flex flex-column pl-3">
                            <a class="font-weight-bold text-secondary mb-2" href="article_1.php">Great Zimbabwe, Then</a>
                            <div class="d-flex">
                                <small class="mr-3"><i class="fa fa-user text-muted"></i>Writer</small>
                                <small class="mr-3"><i class="fa fa-comments text-muted"></i> 15</small>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border-bottom mb-3 pb-3">
                        <img class="img-thumbnail p-2" src="img/blog-2.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="d-flex flex-column pl-3">
                            <a class="font-weight-bold text-secondary mb-2" href="article_2.php">Zimbabwe A Beautiful Place</a>
                            <div class="d-flex">
                                <small class="mr-3"><i class="fa fa-user text-muted"></i>Writer</small>
                                <small class="mr-3"><i class="fa fa-comments text-muted"></i> 15</small>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border-bottom mb-3 pb-3">
                        <img class="img-thumbnail p-2" src="img/blog-3.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="d-flex flex-column pl-3">
                            <a class="font-weight-bold text-secondary mb-2" href="article_3.php">Elephants Galore</a>
                            <div class="d-flex">
                                <small class="mr-3"><i class="fa fa-user text-muted"></i>Writer</small>
                                <small class="mr-3"><i class="fa fa-comments text-muted"></i> 15</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Detail End -->


 
    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-4 col-md-12 mb-7">
                <h1 class="mb-3 display-5 text-capitalize font-italic text-white"><span class="text-primary">TouriZIM</h1>
                <p class="m-0">Registered as a private limited company by the year 2025 and will be under the tourism and travel industry with the name TouriZIM Ltd, with its main goal being promoting travel and tourism in Zimbabwe</p>
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


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>