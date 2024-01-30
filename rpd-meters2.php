<?php include_once('includes/url.inc.php'); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon"> 
    <title>RPD Meters</title>
 
    <!-- All Stylesheets -->
    <?php $folder='root'; include_once('includes/stylesheets.inc.php'); ?>
    
    <style>
        .under_line{
            border-bottom: 2px solid var(--brand); 
        }
    </style>



    
</head>
<body> 

    <!-- Preloader, Main Navigation Menu --> 
    <?php $folder='root'; include_once('includes/header.inc.php'); ?> 

    <main>
        <!-- Header Wrapper Start -->
        <div class="py-5 header__wrapper text-center">
            <div class="container">
                <h1 class="text-primary"><span class="text-dark">RPD </span> Meters</h1>
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
                                src="assets/images/products/rpd.webp"  
                                width="416" height="633" 
                                class="img-fluid" 
                                alt="oxygen analyzer"
                            >
                        </div> 
                    </div>
                    <div class="col-xl-8 col-lg-7"> 
                        <p>
                            Applications: RPD or Rotary Positive Displacement meter is suitable for measuring of natural gas and various filtered, non-corrosive gases.
                        </p> 
                        
                        <h2 class="lead-lg fw-semibold mb-3">General Information:</h2>
                        <p>
                            Rotary gas meters are characterized by high measuring ranges and compact dimensions. They ensure high accuracy, even if the gas flow is low or irregular. RPD combines tried-and-tested product features and is a convincing product because it offers a large range of future-oriented features.
                        </p>
                        
                        <div class="under_line mb-4">
                            <h2 class="lead-lg fw-semibold mt-4 mb-3">﻿FEATURES &amp; BENEFITS</h2> 
                        </div>
                         
                        <ul class="disc__list">
                            <li class="mb-2">Meter sizes G16 to G400</li>
                            <li class="mb-2">Flow rates from 0.6 to 650 m3/h</li>
                            <li class="mb-2">Nominal sizes DN 32 to DN 150</li>
                            <li class="mb-2">Pressure ratings PN 10/16 and Class 150 in accordance with ASME B16.5</li>
                            <li class="mb-2">Temperature range -25°C to +70°C Measuring ranges up to 1:160</li>
                            <li class="mb-2">Aluminium or spheroidal cast iron housing</li>
                            <li class="mb-2">Compact dimensions</li>
                            <li class="mb-2">5-year maintenance interval</li>
                            <li class="mb-2">Index can be rotated for horizontal and vertical</li>
                            <li class="mb-2">installation</li>
                            <li class="mb-2">Optional index solutions(e.g. Absolute ENCODER S1D)</li>
                            <li class="mb-2">Approvals pursuant to MID/PED/ATEX Directives</li>
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
 