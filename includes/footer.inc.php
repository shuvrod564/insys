
    <!-- Footer Wrapper Start -->
    <footer class="bgi bg-light" style="background-image: url('assets/images/home/map-pattern.webp');"> 
        <div class="border-bottom pb-4 mb-4 pb-5 mb-lg-5">
            <div class="container"> 
                <div class="row g-3">
                    <div class="col-sm-4 text-center text-sm-start"> 
                        <a href="<?php echo $base_url;?>" class="d-inline-block">
                            <img 
                                src="<?php echo $base_url;?>assets/images/logo.webp" 
                                class="img-fluid logo__main" alt="Site-logo"
                                width="100" height="46"
                            >
                        </a> 
                    </div>
                    <div class="col-sm-8 d-flex justify-content-center justify-content-sm-end">
                        <?php $classes="footer gap-3"; include('_social-links.inc.php'); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row g-4"> 
                <div class="col-lg-4 col-md-6">
                    <p class="lead fw-semibold text-primary">Services</p>
                    <ul class="links"> 
                        <li class="mb-2"><a href="#">Annual Maintenance Contracts</a></li>
                        <li class="mb-2"><a href="#">LaaS (Leakage Management as a Service)</a></li>
                        <li class="mb-2"><a href="#">Installation & Commissioning Manpower Services</a></li> 
                    </ul>
                </div><!--.//col-->
                <div class="col-lg-6 col-md-9">
                    <div class=""> 
                        <p class="lead fw-semibold text-primary">Products</p>
                        <ul class="links row row-cols-1 row-cols-sm-2">
                            <li class="mb-2"><a href="#">Gas Metering </a></li>
                            <li class="mb-2"><a href="#">Oil Metering</a></li>  
                            <li class="mb-2"><a href="#">Custody Transfer Solutions</a></li>  
                            <li class="mb-2"><a href="#">Analyzers</a></li>  
                            <li class="mb-2"><a href="#">Gas & Leak Detection</a></li>  
                            <li class="mb-2"><a href="#">Intrinsically Safe Solutions</a></li>  
                            <li class="mb-2"><a href="#">Building Management Solutions</a></li>  
                        </ul>
                    </div>
                </div><!--.//col-->
                <div class="col-lg-2 col-md-3">
                    <div class="">
                        <p class="lead fw-semibold text-primary">Other Links</p>
                        <ul class="links">
                            <li class="mb-2"><a href="#">Home </a></li>
                            <li class="mb-2"><a href="#">About Us</a></li>
                            <li class="mb-2"><a href="#">Contact Us</a></li>
                            <li class="mb-2"><a href="#">Blogs</a></li> 
                        </ul>
                    </div>
                </div><!--.//col-->
                    
            </div><!--.//row--> 
        </div><!--.//container-->
        
        <div class="copyright__wrapp py-3 mt-4 mt-md-5 position-relative">
            <div class="container-fluid"> 
                <div class="row g-2 align-items-center">
                    
                    <div class="col-md-12"> 
                        <div class="text-center mb-0 small">© Copyright <?php echo date('Y');?>. All rights reserved.</div>
                    </div>
                </div><!--.//row--> 
            </div>
        </div>
    </footer>
    <!-- Footer Wrapper End -->
     
    <!-- Back To Top Button -->
    <button onclick="topFunction()" id="backTop" class="btn backTop p-0 rounded-circle justify-content-center align-items-center" title="Go to top">
        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512"><path d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2V448c0 17.7 14.3 32 32 32s32-14.3 32-32V141.2L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z"/></svg>
    </button>
    <!-- JS: All Vendors --> 
    <script src="<?php echo $base_url;?>assets/js/vendors.min.js"></script>  
    <!-- JS: Designer Script -->
    <script src="<?php echo $base_url;?>assets/js/script.js"></script>  
   
 
  




