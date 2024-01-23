     
    <!-- navigation start --> 
    <nav class="py-2 border-bottom">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="d-inline-flex align-items-center gap-3">
                <a href="mailto:mandar.c@insysindia.com" class="d-inline-flex align-items-center gap-2 lh-1 lead-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" style="position:relative;top:1px;" height="18" width="18" viewBox="0 0 512 512"><path fill="#f15034" d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg>
                    <span>mandar.c@insysindia.com</span>
                </a>
                <a href="tel:8108106990" class="d-inline-flex align-items-center gap-2 lh-1 lead-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" style="position:relative;top:1px;" height="18" width="16" viewBox="0 0 448 512"><path fill="#f15034" d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm90.7 96.7c9.7-2.6 19.9 2.3 23.7 11.6l20 48c3.4 8.2 1 17.6-5.8 23.2L168 231.7c16.6 35.2 45.1 63.7 80.3 80.3l20.2-24.7c5.6-6.8 15-9.2 23.2-5.8l48 20c9.3 3.9 14.2 14 11.6 23.7l-12 44C336.9 378 329 384 320 384C196.3 384 96 283.7 96 160c0-9 6-16.9 14.7-19.3l44-12z"/></svg>
                    <span>8108106990</span>
                </a> 
            </div>
            <?php
                $classes="header__links justify-content-end gap-1 d-none d-sm-inline-flex";
                include('_social-links.inc.php');
            ?>
        </div><!--.//container-->
    </nav>
    <nav class="navbar navbar-expand-lg smart-scroll py-3" id="mainNav">
        <div class="container position-relative">   
            <a href="<?php echo $base_url;?>" class="navbar-brand text-primary p-0 m-0 d-inline-block" aria-label="Insys">
                <img src="<?php echo $base_url;?>assets/images/logo.webp?v=1" width="100" height="46" alt="Insys">
            </a>
            <ul class="navbar-nav d-none d-lg-flex align-items-center mx-auto">    
                <li class="nav-item dropdown "> 
                    <a 
                        href="#" class="nav-link dropdown-toggle"
                        id="aboutMenu"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                    >
                        About Us 
                    </a>  
                    <ul class="dropdown-menu border-0 bg-white p-2 about" aria-labelledby="aboutMenu"> 
                        <li><a href="#" class="dropdown-item px-2 py-2 rounded-2 fw-medium">Our Business</a></li>
                        <li><a href="#" class="dropdown-item px-2 py-2 rounded-2 fw-medium">Our Team</a></li>
                        <li><a href="#" class="dropdown-item px-2 py-2 rounded-2 fw-medium">Our Culture</a></li> 
                    </ul> 
                </li>   
                
                <li class="nav-item dropdown ms-lg-3"> 
                    <a 
                        href="#" class="nav-link dropdown-toggle"
                        id="productsMenu"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                    >
                        Products & Solutions 
                    </a> 
                    <ul class="dropdown-menu border-0 bg-white p-2"  aria-labelledby="productsMenu"> 
                        <li class="dropdown">
                            <a href="#" class="dropdown-item px-2 py-2 rounded-2 fw-medium">Gas Metering</a>
                            <ul class="dropdown-menu p-2">
                                <li><a href="<?php echo $base_url;?>residential-gas-metering.php" class="dropdown-item px-2 py-2 rounded-2 fw-medium">Residential Diaphragm Meters</a></li>
                                <li><a href="commercial-gas-metering.php" class="dropdown-item px-2 py-2 rounded-2 fw-medium">Commercial Diaphragm Meters</a></li>
                                <li><a href="rpd-meters.php" class="dropdown-item px-2 py-2 rounded-2 fw-medium">RPD Meters</a></li>
                                <li><a href="#" class="dropdown-item px-2 py-2 rounded-2 fw-medium">Turbine Meters</a></li>
                                <li><a href="electronic-volume-correctors.php" class="dropdown-item px-2 py-2 rounded-2 fw-medium">Electronic Volume Correctors</a></li>
                            </ul>
                        </li> 
                        <li class="dropdown">
                            <a href="#" class="dropdown-item px-2 py-2 rounded-2 fw-medium">Oil Metering</a>
                            <ul class="dropdown-menu p-2">
                                <li><a href="#" class="dropdown-item px-2 py-2 rounded-2 fw-medium">PD Meter for Liquid</a></li>
                                <li><a href="#" class="dropdown-item px-2 py-2 rounded-2 fw-medium">Water Cut Meters</a></li>
                                <li><a href="v-cone-meter.php" class="dropdown-item px-2 py-2 rounded-2 fw-medium">V Cone Meters</a></li>
                                <li><a href="mpfm-merter.php" class="dropdown-item px-2 py-2 rounded-2 fw-medium">MPFM Meters</a></li>  
                            </ul>
                        </li> 
                        <li class="dropdown">
                            <a href="#" class="dropdown-item px-2 py-2 rounded-2 fw-medium">Custody Transfer Solutions</a>
                            <ul class="dropdown-menu p-2">
                                <li><a href="flow-computer.php" class="dropdown-item px-2 py-2 rounded-2 fw-medium">Flow Computers</a></li>
                                <li><a href="gas-chromatograph.php" class="dropdown-item px-2 py-2 rounded-2 fw-medium">Gas Chromatographs</a></li>
                                <li><a href="#" class="dropdown-item px-2 py-2 rounded-2 fw-medium">Metering & Regulating Skid</a></li> 
                            </ul> 
                        </li> 
                        <li class="dropdown">
                            <a href="#" class="dropdown-item px-2 py-2 rounded-2 fw-medium">Analyzers</a>
                            <ul class="dropdown-menu p-2">
                                <li><a href="oxygen-analyzer.php" class="dropdown-item px-2 py-2 rounded-2 fw-medium">H<sub>2</sub>S Analyzer</a></li>
                                <li><a href="process-gas-chromatograph.php" class="dropdown-item px-2 py-2 rounded-2 fw-medium">Process Gas Chromatograph</a></li>  
                                <li><a href="#" class="dropdown-item px-2 py-2 rounded-2 fw-medium">Ammonia Analyzer</a></li>  
                            </ul> 
                        </li> 
                        <li class="dropdown">
                            <a href="#" class="dropdown-item px-2 py-2 rounded-2 fw-medium">Gas & Leak Detection</a>
                            <ul class="dropdown-menu p-2" style="min-width: 20rem;right: -20rem;">
                                <li><a href="#" class="dropdown-item px-2 py-2 rounded-2 fw-medium">Fixed type Gas Detector</a></li>
                                <li><a href="#" class="dropdown-item px-2 py-2 rounded-2 fw-medium">Laser based Methane Leak Detection</a></li> 
                                <li><a href="#" class="dropdown-item px-2 py-2 rounded-2 fw-medium">Ultrasonic based Leak Detection Solutions</a></li>  
                            </ul> 
                        </li> 
                        <li class="dropdown">
                            <a href="#" class="dropdown-item px-2 py-2 rounded-2 fw-medium">Intrinsically Safe Solutions</a>
                            <ul class="dropdown-menu p-2" style="min-width: 20rem;right: -20rem;">
                                <li><a href="#" class="dropdown-item px-2 py-2 rounded-2 fw-medium">Explosion Proof Video Solutions</a></li>
                                <li><a href="#" class="dropdown-item px-2 py-2 rounded-2 fw-medium">Intrinsically Safe Mobile Phones</a></li>  
                            </ul> 
                        </li> 
                        <li class="dropdown">
                            <a href="#" class="dropdown-item px-2 py-2 rounded-2 fw-medium">Building Management Solutions</a>
                            <ul class="dropdown-menu p-2"> 
                                <li><a href="#" class="dropdown-item px-2 py-2 rounded-2 fw-medium">CCTV</a></li>
                                <li><a href="#" class="dropdown-item px-2 py-2 rounded-2 fw-medium">Access Control</a></li>
                                <li><a href="#" class="dropdown-item px-2 py-2 rounded-2 fw-medium">Fire Alarm Solutions</a></li>
                                <li><a href="#" class="dropdown-item px-2 py-2 rounded-2 fw-medium">Public Address Systems</a></li> 
                            </ul> 
                        </li> 
                    </ul> 
                </li>         
                <li class="nav-item dropdown ms-lg-3"> 
                    <a 
                        href="#" class="nav-link dropdown-toggle"
                        id="serviceMenu"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                    > 
                        Services 
                    </a> 
                    <ul class="dropdown-menu border-0 bg-white p-2" aria-labelledby="serviceMenu" style="min-width: 22rem;"> 
                        <li><a href="#" class="dropdown-item px-2 py-2 rounded-2 fw-medium">Annual Maintenance Contracts</a></li>
                        <li><a href="#" class="dropdown-item px-2 py-2 rounded-2 fw-medium">LaaS (Leakage Management as a Service)</a></li>
                        <li><a href="#" class="dropdown-item px-2 py-2 rounded-2 fw-medium">Installation & Commissioning Manpower Services</a></li> 
                    </ul> 
                </li>       
            </ul> 
            <div class="d-inline-flex align-items-center gap-3"> 
                <a href="contact.php" class="btn btn-primary height gap-2 text-uppercase d-none d-sm-inline-flex">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><path d="M498.1 5.6c10.1 7 15.4 19.1 13.5 31.2l-64 416c-1.5 9.7-7.4 18.2-16 23s-18.9 5.4-28 1.6L284 427.7l-68.5 74.1c-8.9 9.7-22.9 12.9-35.2 8.1S160 493.2 160 480V396.4c0-4 1.5-7.8 4.2-10.7L331.8 202.8c5.8-6.3 5.6-16-.4-22s-15.7-6.4-22-.7L106 360.8 17.7 316.6C7.1 311.3 .3 300.7 0 288.9s5.9-22.8 16.1-28.7l448-256c10.7-6.1 23.9-5.5 34 1.4z"/></svg>
                    Contact Us
                </a> 
                
                <button type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample" class="navbar-toggler rounded p-2 ms-1 ms-xl-3" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" height="28" width="24" viewBox="0 0 448 512"><path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg>
                </button>   
            </div> 
        </div>
    </nav> 
    <!-- navigation end --> 

   

    <div class="offcanvas offcanvas-end sideNav" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <p class="offcanvas-title lead-sm fw-semibold text-primary mb-0" id="offcanvasExampleLabel">Insys</p>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body px-0">
        <ul class="links__list">
                <li><a href="<?php echo $base_url;?>">Home</a></li> 
                <li> 
                    <a class="btn__link collapsed" data-bs-toggle="collapse" href="#collapse1" role="button" aria-expanded="false" aria-controls="collapse1">
                        About Us
                    </a>
                    <ul class="collapse" id="collapse1"> 
                        <li><a href="#">Our Business</a></li>
                        <li><a href="#">Our Team</a></li>
                        <li><a href="#">Our Culture</a></li> 
                    </ul>
                </li> 
                <li> 
                    <a class="btn__link collapsed" data-bs-toggle="collapse" href="#collapse2" role="button" aria-expanded="false" aria-controls="collapse2">
                        Products & Solutions
                    </a>
                    <ul class="collapse" id="collapse2"> 
                        <li>
                            <a class="btn__link collapsed" data-bs-toggle="collapse" href="#collapse3" role="button" aria-expanded="false" aria-controls="collapse3">
                                Gas Metering
                            </a>
                            <ul class="collapse" id="collapse3"> 
                                <li><a href="<?php echo $base_url;?>residential-gas-metering.php" class="dropdown-item px-2 py-2 rounded-2 fw-medium">Residential Diaphragm Meters</a></li>
                                <li><a href="commercial-gas-metering.php" class="dropdown-item px-2 py-2 rounded-2 fw-medium">Commercial Diaphragm Meters</a></li>
                                <li><a href="rpd-meters.php" class="dropdown-item px-2 py-2 rounded-2 fw-medium">RPD Meters</a></li>
                                <li><a href="#" class="dropdown-item px-2 py-2 rounded-2 fw-medium">Turbine Meters</a></li>
                                <li><a href="electronic-volume-correctors.php" class="dropdown-item px-2 py-2 rounded-2 fw-medium">Electronic Volume Correctors</a></li>
                            </ul>
                        </li>   
                        <li>
                            <a class="btn__link collapsed" data-bs-toggle="collapse" href="#collapse4" role="button" aria-expanded="false" aria-controls="collapse4">
                                Oil Metering
                            </a>
                            <ul class="collapse" id="collapse4"> 
                                <li><a href="#" class="dropdown-item px-2 py-2 rounded-2 fw-medium">PD Meter for Liquid</a></li>
                                <li><a href="#" class="dropdown-item px-2 py-2 rounded-2 fw-medium">Water Cut Meters</a></li>
                                <li><a href="v-cone-meter.php" class="dropdown-item px-2 py-2 rounded-2 fw-medium">V Cone Meters</a></li>
                                <li><a href="mpfm-merter.php" class="dropdown-item px-2 py-2 rounded-2 fw-medium">MPFM Meters</a></li>
                            </ul>
                        </li>   
                        <li>
                            <a class="btn__link collapsed" data-bs-toggle="collapse" href="#collapse5" role="button" aria-expanded="false" aria-controls="collapse5">
                                Custody Transfer Solutions
                            </a>
                            <ul class="collapse" id="collapse5"> 
                                <li><a href="flow-computer.php" class="dropdown-item px-2 py-2 rounded-2 fw-medium">Flow Computers</a></li>
                                <li><a href="gas-chromatograph.php" class="dropdown-item px-2 py-2 rounded-2 fw-medium">Gas Chromatographs</a></li>
                                <li><a href="#" class="dropdown-item px-2 py-2 rounded-2 fw-medium">Metering & Regulating Skid</a></li> 
                            </ul>
                        </li>   
                        <li>
                            <a class="btn__link collapsed" data-bs-toggle="collapse" href="#collapse6" role="button" aria-expanded="false" aria-controls="collapse6">
                                Analyzers
                            </a>
                            <ul class="collapse" id="collapse6"> 
                                <li><a href="oxygen-analyzer.php" class="dropdown-item px-2 py-2 rounded-2 fw-medium">H<sub>2</sub>S Analyzer</a></li>
                                <li><a href="process-gas-chromatograph.php" class="dropdown-item px-2 py-2 rounded-2 fw-medium">Process Gas Chromatograph</a></li>  
                                <li><a href="#" class="dropdown-item px-2 py-2 rounded-2 fw-medium">Ammonia Analyzer</a></li>
                            </ul>
                        </li>   
                        <li>
                            <a class="btn__link collapsed" data-bs-toggle="collapse" href="#collapse6" role="button" aria-expanded="false" aria-controls="collapse6">
                                Gas & Leak Detection
                            </a>
                            <ul class="collapse" id="collapse6"> 
                                <li><a href="#">Fixed type Gas Detector</a></li>
                                <li><a href="#">Laser based Methane Leak Detection</a></li> 
                                <li><a href="#">Ultrasonic based Leak Detection Solutions</a></li>  
                            </ul>
                        </li>   
                        <li>
                            <a class="btn__link collapsed" data-bs-toggle="collapse" href="#collapse7" role="button" aria-expanded="false" aria-controls="collapse7">
                                Intrinsically Safe Solutions
                            </a>
                            <ul class="collapse" id="collapse7"> 
                                <li><a href="#">Explosion Proof Video Solutions</a></li>
                                <li><a href="#">Intrinsically Safe Mobile Phones</a></li> 
                            </ul>
                        </li>   
                        <li>
                            <a class="btn__link collapsed" data-bs-toggle="collapse" href="#collapse8" role="button" aria-expanded="false" aria-controls="collapse8">
                                Building Management Solutions
                            </a>
                            <ul class="collapse" id="collapse8"> 
                                <li><a href="#">CCTV</a></li>
                                <li><a href="#">Access Control</a></li>
                                <li><a href="#">Fire Alarm Solutions</a></li>
                                <li><a href="#">Public Address Systems</a></li> 
                            </ul>
                        </li>   
                         
                    </ul>
                </li> 
                <li>
                    <a class="btn__link collapsed" data-bs-toggle="collapse" href="#collapse8" role="button" aria-expanded="false" aria-controls="collapse8">
                        Services
                    </a>
                    <ul class="collapse" id="collapse8"> 
                        <li><a href="#">Annual Maintenance Contracts</a></li>
                        <li><a href="#">LaaS (Leakage Management as a Service)</a></li>
                        <li><a href="#">Installation & Commissioning Manpower Services</a></li>
                    </ul>
                </li>   
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>
    </div><!--.//off-canvas-->
   
 