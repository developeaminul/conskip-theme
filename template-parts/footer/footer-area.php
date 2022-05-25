
<div class="row">
   <div class="col-lg-4 col-md-12">
      <div class="footer-info  footer-widget">
         <div class="footer-logo">
            <a href="index.html"><img src="assets/images/logo-w.png" alt="" class="img-fluid"></a>
         </div>
         <div class="footer-description">
            <p>We remain true to the same principles on which our company was founded over a hundred years ago:
               providing superior service to
               clients, putting safety first, creating </p>
         </div>
         <div class="footer-social-icon">
            <h5>Follow Us</h5>
            <ul>
               <li><a href="#"><i class='flaticon-facebook'></i></a></li>
               <li><a href="#"><i class='flaticon-twitter'></i></a></li>
               <li><a href="#"><i class='flaticon-linkedin'></i></a></li>
               <li><a href="#"><i class='flaticon-instagram'></i></a></li>
            </ul>
         </div>
      </div>
   </div>
   <div class="col-lg-5 col-md-12">
      <div class="row">
         <div class="col-lg-6 col-md-6 col-sm-6">
            <!-- <div class="footer-links footer-widget">
               <h5>Our Service</h5>
               <ul>
                  <li><a href="#"><i class="bi bi-check2"></i> Design and Build</a></li>
                  <li><a href="#"><i class="bi bi-check2"></i> Household Repairs</a></li>
                  <li><a href="#"><i class="bi bi-check2"></i> Tiling and Painting</a></li>
                  <li><a href="#"><i class="bi bi-check2"></i> Design and Build</a></li>
                  <li><a href="#"><i class="bi bi-check2"></i> Design and Build</a></li>
               </ul>
            </div> -->

            <?php

            if (is_active_sidebar('sidebar-2')) : ?>
               <?php dynamic_sidebar('sidebar-2'); ?>
               
            <?php endif; ?>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="footer-links footer-widget">
               <h5>Quick Links</h5>
               <ul>
                  <li><a href="about.html"><i class="bi bi-check2"></i> About Us </a></li>
                  <li><a href="service.html"><i class="bi bi-check2"></i> Our Services</a></li>
                  <li><a href="portfolio.html"><i class="bi bi-check2"></i> Our All Project</a></li>
                  <li><a href="#pricing-area"><i class="bi bi-check2"></i> Our Pricing Plan</a></li>
                  <li><a href="contact.html"><i class="bi bi-check2"></i> Contact Us</a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <div class="col-lg-3 col-md-12">
      <div class="footer-contact footer-widget">
         <h5>Contact Us</h5>
         <ul>
            <li class="contact-box">
               <div class="contact-icon"><i class="bi bi-geo-alt-fill"></i></div>
               <div class="contact-info">
                  <a href="#">Section #32 House #9, Road #5, Pennsylvania Ave NW, Washington, DC 20006, USA.</a>
               </div>
            </li>
            <li class="contact-box">
               <div class="contact-icon"><i class="bi bi-envelope-fill"></i></div>
               <div class="contact-info">
                  <a href="mailto:info@domainname.com">info@domainname.com</a>
                  <a href="mailto:construction@gmail.com">construction@gmail.com</a>
               </div>
            </li>
            <li class="contact-box">
               <div class="contact-icon"><i class="bi bi-telephone-fill"></i></div>
               <div class="contact-info">
                  <a href="tel:+38641223595">+386 41 223 595</a>
                  <a href="tel:+38641223595">+386 41 223 595</a>
               </div>
            </li>
         </ul>
      </div>
   </div>
</div>