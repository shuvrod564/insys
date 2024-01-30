<?php include_once('includes/url.inc.php'); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon"> 
    <title>Mercury Analyzer</title>
 
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
                <h1 class="text-primary"><span class="text-dark">Mercury </span>Analyzer</h1>
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
                                src="assets/images/products/mercury.webp"  
                                width="416" height="633" 
                                class="img-fluid" 
                                alt="oxygen analyzer"
                            >
                        </div>  
                    </div>
                    <div class="col-xl-8 col-lg-7"> 
                        
                        <h2 class="lead-lg fw-semibold mb-3">Industrial mercury analyzer</h2>
                        <p>
                            The analyzer is designed for <strong>continuous measurements of the mass concentration of mercury vapor in the streams of hydrocarbon gas media</strong>.
                        </p>
                        <p>
                            The device is used to monitor the state of gas media at enterprises producing, processing and transporting gas and oil.
                        </p>
                        <p>
                            The measurement principle is based on the Atomic Absorption Spectrometry method, <strong>the advantage of which is high selectivity and low detection limit in a wide measurement range</strong>.
                        </p>
                        <p>
                            A distinctive feature of the analyzer is the explosion-proof shell, which allows the device to be used at hazardous production facilities directly in explosive zones, placing the device as close as possible to the sampling site, thereby obtaining the most accurate and operational measurements for process control.
                        </p>
                        
                        <h3 class="lead-lg fw-semibold mt-5 mb-3">Main advantages</h3>
                        <ul class="disc__list"> 
                            <li class="mb-2">Streaming control, receiving results in the &lt;on-line&gt;&gt; mode</li>
                            <li class="mb-2">Full automation of the measurement process</li>
                            <li class="mb-2">Automatic adjustment of measurements to standard conditions </li>
                            <li class="mb-2">Automatic calibration</li>
                            <li class="mb-2">High metrological characteristics</li>
                            <li class="mb-2">Built-in computer and 10&quot; LED display with pre-installed software</li>
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
 