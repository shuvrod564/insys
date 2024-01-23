<?php include_once('includes/url.inc.php'); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon"> 
    <title>Flow Computer</title>
 
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
                <h1 class="text-primary"><span class="text-dark">Flow</span> Computer</h1>
            </div><!--.//container-->
        </div>
        <!-- Header Wrapper End -->
    
        <!-- Content Wrapper Start -->
        <div class="py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-xl-4 col-lg-5 col-md-12">
                        <div> 
                            <img 
                                src="assets/images/flow-computer/computer.webp"  
                                width="382" height="506" 
                                class="img-fluid w-100" 
                                alt="Description"
                            >
                        </div>
                        
                    </div>
                    <div class="col-xl-8 col-lg-7"> 
                        <h2 class="lead fw-semibold">Description:</h2>
                        <p>Flow computers provide highly precise measurement and control to a single location with minimal automation requirements, or it can be deployed as a central hub to a multidevice automation system. Each model comes field-ready with easy pre-deployment configurability and capex-saving wired or wireless automation architecture.</p>
                        <h3 class="lead-lg fw-bold mb-3 mt-4">﻿APPLICATIONS</h3>
                        <ul>
                            <li>+ Hydrocarbon liquid or gas</li>
                            <li>+ Water and steam</li>
                        </ul>
                        <h4 class="lead-lg fw-bold mt-4 mb-3">FEATURES</h4>
                        <ul>
                            <li>+ EFM / RTU functionality</li>
                            <li>+ Selectable international measurement standards</li>
                            <li>+ PLC style programmability for specialized operations</li>
                            <li>+ Measurement</li>
                            <li>. Up to 22 flowstreams</li>
                            <li>+ Control</li>
                            <li>. Multiple throttling proportional- integral-and derivative (PID) controllers</li>
                            <li>+ Capex-saving wired or wireless automation architecture</li>
                            <li>+ Remote configurability</li>
                        </ul>
                        <h5 class="lead-lg fw-bold mt-4 mb-3">BENEFITS</h5>
                        <ul>
                            <li>+ Highly scalable</li>
                            <li>+ Cost efficient deployment features</li>
                            <li>and alternatives</li>
                            <li>+ Custody transfer accuracy</li>
                        </ul>    
                    </div>
                </div> 
            </div><!--.//container-->
        </div>
        <!-- Content Wrapper End -->

       
    </main>


    <!-- Footer and Script List --> 
    <?php $folder='root'; include_once('includes/footer.inc.php'); ?> 
 
</body>
</html>
 