
<?php include "init.php"; ?>
<?php if(!isset($_SESSION['id'])): ?>
    <?php header("location:login.php"); ?>
    <?php endif; ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <title>Profile</title>
     <link rel="stylesheet" href="assets/css/style.css">
       <!--========== BOX ICONS ==========-->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="assets/css/style.css">
        <!--contact---->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
        <a href="logout.php">logout</a>

 </head>


 <body>
     <div class="contain">
         <?php if(isset($_SESSION['login_success'])): ?>
            <div class="success">
                <?php echo $_SESSION['login_success']; ?>
            </div>
         <?php endif; ?>
         <?php unset($_SESSION['login_success']); ?>
         <h2>Welcome to the KPMG Portal</h2><hr>
         <img src="assets/img/kpmg.gif" alt="Ace Your Dream With KPMG" style="width:600px;height:300px; class="center">
     </div>
     
    <section class="about section bd-container" id="about">
                <div class="about__container  bd-grid">
                    <div class="about__data">
                        <span class="section-subtitle about__initial"><h2>About us</h2></span>
                        <h2 class="section-title about__initial">
Our Values represent what we believe in, and what’s important to us as an organization.</h2>
                      
                        <p class="about__description"> With a worldwide presence, KPMG continues to build on our member firms' successes thanks to our clear vision, maintained values, and our people.  </p>

                            
                        
                    </div>

                </div>
            </section>




<!--========== FOOTER ==========-->
        <footer class="footer section bd-container">
            <div class="footer__container bd-grid">
                <div class="footer__content">
                    <a href="#" class="footer__logo">KPMG</a>
                    <span class="footer__description">Follow Us</span>
                    <div>
                        <a href="#" class="footer__social"><i class='bx bxl-facebook'></i></a>
                        <a href="#" class="footer__social"><i class='bx bxl-instagram'></i></a>
                        <a href="#" class="footer__social"><i class='bx bxl-twitter'></i></a>
                    </div>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Explore</h3>
                    <ul>
                        <li><a href="#" class="footer__link">About us</a></li>
                        <li><a href="#" class="footer__link">Careers</a></li>
                        <li><a href="#" class="footer__link">Projects</a></li>
                        <li><a href="#" class="footer__link">Achievements</a></li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Our Facilities</h3>
                    <ul>
                        <li><a href="#" class="footer__link">Services</a></li>
                        <li><a href="#" class="footer__link">Financial Advisory</a></li>
                        <li><a href="#" class="footer__link">Internal Audit</a></li>
                        <li><a href="#" class="footer__link">Coporate governance</a></li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Information</h3>
                    <ul>
                        <li><a href="#" class="footer__link">About us</a></li>
                        <li><a href="#" class="footer__link">Social Media</a></li>
                        <li><a href="#" class="footer__link">Privacy policy</a></li>
                        <li><a href="#" class="footer__link">Terms of services</a></li>
                    </ul>
                </div>
            </div>

            <p class="footer__copy">&#169; KPMG. All right Services</p>
        </footer>



 </body>
 </html>