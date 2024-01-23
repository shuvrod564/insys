<?php include_once('includes/url.inc.php'); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon"> 
    <title>Contact Us</title>
 
    <!-- All Stylesheets -->
    <?php $folder='root'; include_once('includes/stylesheets.inc.php'); ?> 
</head>
<body> 

    <!-- Preloader, Main Navigation Menu --> 
    <?php $folder='root'; include_once('includes/header.inc.php'); ?> 

    <main>
        <!-- Header Wrapper Start -->
        <div class="py-5 header__wrapper text-center">
            <div class="container">
                <h1 class="text-primary"><span class="text-dark">Contact</span> Us</h1>
            </div><!--.//container-->
        </div>
        <!-- Header Wrapper End -->
    
        <!-- Contact Wrapper Start -->  
    <section class="py-5 contact__wrapper">
        <div class="container">
            <h2 class="h2">Send Us A Message</h2>
            <div class="form__wrapp row gy-2 gx-4 gx-md-5 mt-3">
                <div class="col-lg-4 col-md-6">
                    <div class="form-group">
                        <label class="fw-medium small d-block mb-2" for="fName">First Name <span class="text-danger">*</span></label>
                        <input type="text" name="fName" id="fName" class="form-control"> 
                    </div> 
                </div><!--.//col-->
                <div class="col-lg-4 col-md-6">
                    <div class="form-group">
                        <label class="fw-medium small d-block mb-2" for="lName">Last Name <span class="text-danger">*</span></label>
                        <input type="text" name="lName" id="lName" class="form-control"> 
                    </div> 
                </div><!--.//col-->
                <div class="col-lg-4 col-md-6">
                    <div class="form-group">
                        <label class="fw-medium small d-block mb-2" for="currentlyBased">Where are you currently based? <span class="text-danger">*</span></label>
                        <input type="text" name="currentlyBased" id="currentlyBased" class="form-control"> 
                    </div>
                </div><!--.//col-->
                <div class="col-lg-4 col-md-6">
                    <div class="form-group">
                        <label class="fw-medium small d-block mb-2" for="userEmail">Email <span class="text-danger">*</span></label>
                        <input type="text" name="userEmail" id="userEmail" class="form-control"> 
                    </div>
                </div><!--.//col-->
                <div class="col-lg-4 col-md-6">
                    <div class="form-group">
                        <label class="fw-medium small d-block mb-2" for="contactNumber">Phone Number <span class="text-danger">*</span></label>
                        <input type="text" name="contactNumber" id="contactNumber" class="form-control"> 
                    </div>
                </div><!--.//col-->
                <div class="col-lg-4 col-md-6">
                    <div class="form-group">
                        <label class="fw-medium small d-block mb-2" for="address">Address <span class="text-danger">*</span></label>
                        <input type="text" name="address" id="address" class="form-control"> 
                    </div>
                </div><!--.//col-->
                <div class="col-12"> 
                    <div class="form-group">
                        <label class="fw-medium small d-block mb-2" for="userMessage">Message <span class="text-danger">*</span></label>
                        <textarea type="text" name="userMessage" id="userMessage" class="form-control"></textarea> 
                    </div>
                </div> 
                <div class="col-12"> 
                    <div class="form-group">
                        <button class="btn btn-primary height btn-lg px-4 px-md-5 mt-4">Submit</button> 
                    </div>
                </div>
            </div> 
        </div><!--.//container-->
    </section>
    <!-- Contact Wrapper End -->

       
    </main>


    <!-- Footer and Script List --> 
    <?php $folder='root'; include_once('includes/footer.inc.php'); ?> 
 
</body>
</html>
 