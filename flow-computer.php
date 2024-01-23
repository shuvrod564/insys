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
                <div class="row g-4 gx-xl-5">
                    <div class="col-xl-4 col-lg-5 col-md-12">
                        <div> 
                            <img 
                                src="assets/images/flow-computer/computer.webp"  
                                width="400" height="530" 
                                class="img-fluid" 
                                alt="Flow Computer"
                            >
                        </div>
                        
                    </div>
                    <div class="col-xl-8 col-lg-7"> 
                        <h2 class="lead-lg text-dark fw-semibold">Description:</h2>
                        <p>Flow computers provide highly precise measurement and control to a single location with minimal automation requirements, or it can be deployed as a central hub to a multidevice automation system. Each model comes field-ready with easy pre-deployment configurability and capex-saving wired or wireless automation architecture.</p>
                        
                        <h3 class="lead-lg text-dark fw-semibold mb-3 mt-4">Applications</h3>
                        <ul class="disc__list">
                            <li>Hydrocarbon liquid or gas</li>
                            <li>Water and steam</li>
                        </ul>
                        <h4 class="lead-lg text-dark fw-semibold mt-4 mb-3">Features</h4>
                        <ul class="disc__list">
                            <li>EFM / RTU functionality</li>
                            <li>Selectable international measurement standards</li>
                            <li>PLC style programmability for specialized operations</li>
                            <li>Measurement - Up to 22 flowstreams</li> 
                            <li>Control - Multiple throttling proportional- integral-and derivative (PID) controllers</li> 
                            <li>Capex-saving wired or wireless automation architecture</li>
                            <li>Remote configurability</li>
                        </ul>
                        <h4 class="lead-lg text-dark fw-semibold mt-4 mb-3">Benefits</h4>
                        <ul class="disc__list">
                            <li>Highly scalable</li>
                            <li>Cost efficient deployment features</li>
                            <li>and alternatives</li>
                            <li>Custody transfer accuracy</li>
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
 