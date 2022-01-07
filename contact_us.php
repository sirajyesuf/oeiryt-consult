<?php

$errors = [];
if (!empty($_POST)) {
   $name = $_POST['name'];
   $email = $_POST['email'];
   $message = $_POST['message'];
   $subject = $_POST['subject'];
  
   if (empty($name)) {
       $errors[] = 'Name is empty';
   }

   if (empty($email)) {
       $errors[] = 'Email is empty';
   } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $errors[] = 'Email is invalid';
   }

   if (empty($message)) {
       $errors[] = 'Message is empty';
   }
   if (empty($subject)) {
    $errors[] = 'Message is empty';
   }

   if (empty($errors)) {
    $toEmail = 'info@test.oeiryt-consult.com';
    $emailSubject = $subject;
    $headers = ['From' =>$toEmail , 'Reply-To' => $email, 'Content-type' => 'text/html; charset=iso-8859-1'];

    $bodyParagraphs = ["Name: {$name}", "Email: {$email}", "Message:", $message,'subject:',$subject];
    $body = join(PHP_EOL, $bodyParagraphs);
    

    if (mail($toEmail, $emailSubject, $body, $headers)) {
        header('Location: thank_you.html');
    } else {
        $errorMessage = 'Oops, something went wrong. Please try again later';
    }
   } else {
    $allErrors = join('<br/>', $errors);
    $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
   }
} 
 ?> 
 <!DOCTYPE html>
    <html lang="en">
        <head>
        <meta charset="utf-8" />
        <title>Oeiryt Consultancy</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Ethiopian Business and quality management system consultancy company"/>
        <meta name="keywords" content="marketing, ethiopia,iso-standard, plan,study, consultancy, business" />
        
        <!-- favicon -->
        <link rel="shortcut icon" href="images/orit/favicon.ico">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons -->
        <link href="css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="../../../unicons.iconscout.com/release/v3.0.6/css/line.html">
        <!-- Animation -->
        <link href="css/aos.css" rel="stylesheet" type="text/css" />
        <!-- Slider -->
        <link rel="stylesheet" href="css/tiny-slider.css"/>
        <!-- Main Css -->
        <link href="css/style.min.css" rel="stylesheet" type="text/css" id="theme-opt" />
        <link href="css/colors/default.css" rel="stylesheet" id="color-opt">
</head>
    <body>
       
        <!-- Navbar STart -->
        <header id="topnav" class="defaultscroll sticky">
            <div class="container">
                <!-- Logo container-->
                <a class="logo" href="index.html">
                    <img src="images/orit/oeiryt.png" height="60" class="logo-light-mode" alt="">
                    <!-- <img src="images/orit/orit.png" height="24" class="logo-dark-mode" alt=""> -->
                </a>
                <!-- End Logo container-->
                <div class="menu-extras">
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </div>
                </div>
        
                <div id="navigation">
                    <!-- Navigation Menu-->   
                    <ul class="navigation-menu">
                        <li><a href="index.html" class="sub-menu-item">Home</a></li>
                        <li><a href="#About" class="sub-menu-item">About</a></li>
                        <li><a href="#Services" class="sub-menu-item">Services</a></li>
                        <li><a href="#Client" class="sub-menu-item">Client</a></li>
                        <li><a href="#Contact" class="sub-menu-item">Contact</a></li>
                    </ul><!--end navigation menu-->
                    
                </div><!--end navigation-->
            </div><!--end container-->
        </header>
        <!-- Navbar End -->
        
        <!-- Hero Start -->
        <section class="bg-half bg-light d-table w-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        <div class="page-next-level">
                            <h4 class="title">Contact Us</h4>
                            <div class="page-next">
                                <nav aria-label="breadcrumb" class="d-inline-block">
                                    <ul class="breadcrumb bg-white rounded shadow mb-0">
                                        <li class="breadcrumb-item"><a href="index.html">home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>  <!--end col-->
                </div><!--end row-->
            </div> <!--end container-->
        </section><!--end section-->
        <!-- Hero End -->

        <!-- Shape Start -->
        <div class="position-relative">
            <div class="shape overflow-hidden text-white">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>
        <!--Shape End-->

        <!-- Start Contact -->
        <section class="section pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card border-0 text-center features feature-clean">
                            <div class="card-body">
                                <img src="images/orit/phone-call.png" class="avatar avatar-small mb-3" alt="phone">
                                <div class="content mt-3">
                                    <h5 class="fw-bold">Phone</h5>
                                    <a href="tel:+152534-468-854" class="text-primary">+251901110086</a>
                                </div>
                            </div>
                            
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-md-4 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="card border-0 text-center features feature-clean">
                            <div class="card-body">
                                <img src="images/orit/email.png" class="avatar avatar-small mb-3" alt="phone">
                                <div class="content mt-3">
                                    <h5 class="fw-bold">Email</h5>
                                    <a href="info@oeiryt-consult.com" class="text-primary">info@oeiryt-consult.com</a>
                                </div>
                            </div>
                            
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-md-4 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="card border-0 text-center features feature-clean">
                            <div class="card-body">
                                <img src="images/orit/pin.png" class="avatar avatar-small mb-3" alt="phone">
                                <div class="content mt-3">
                                    <h5 class="fw-bold">Location</h5>
                                    <p class="text-muted">Bole Road Infront of Dembele city centre,BEDESTA Building 2nd floor,Addis Abab</p>
                                    <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.6302033771894!2d38.7656143141714!3d9.006133091827955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b85b00694130b%3A0x299cddd242635dbd!2sBedesta%20Building!5e0!3m2!1sen!2set!4v1618123801590!5m2!1sen!2set"
                                        data-type="iframe" class="video-play-icon text-primary lightbox">View on Google map</a>
                                </div>
                            </div>
                            
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container mt-100 mt-60">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6 pt-2 pt-sm-0 order-2 order-md-1">
                        <div class="card shadow rounded border-0">
                            <div class="card-body py-5">
                                <h4 class="card-title">Get In Touch !</h4>
                                <?php echo((!empty($errorMessage)) ? $errorMessage : '') ?>
                                <div class="custom-form mt-3">
                                    <form method="post" name="myForm"  id="contact-form">
                                        <p id="error-msg" class="mb-0"></p>
                                        <div id="simple-msg"></div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Your Name <span class="text-danger">*</span></label>
                                                    <div class="form-icon position-relative">
                                                        <i data-feather="user" class="fea icon-sm icons"></i>
                                                        <input name="name" id="name" type="text" class="form-control ps-5" placeholder="Name :" required>
                                                    </div>
                                                </div>
                                            </div>
        
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Your Email <span class="text-danger">*</span></label>
                                                    <div class="form-icon position-relative">
                                                        <i data-feather="mail" class="fea icon-sm icons"></i>
                                                        <input name="email" id="email" type="email" class="form-control ps-5" placeholder="Email :" required>
                                                    </div>
                                                </div> 
                                            </div><!--end col-->
        
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Subject</label>
                                                    <div class="form-icon position-relative">
                                                        <i data-feather="book" class="fea icon-sm icons"></i>
                                                        <input name="subject" id="subject" class="form-control ps-5" placeholder="subject :" required>
                                                    </div>
                                                </div>
                                            </div><!--end col-->
        
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Comments <span class="text-danger">*</span></label>
                                                    <div class="form-icon position-relative">
                                                        <i data-feather="message-circle" class="fea icon-sm icons clearfix"></i>
                                                        <textarea name="message" id="message" rows="4" class="form-control ps-5" placeholder="Message :" required></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" id="submit" name="send" class="btn btn-primary">Send Message</button>
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </form>
                                </div><!--end custom-form-->
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-7 col-md-6 order-1 order-md-2">
                        <div class="card border-0">
                            <div class="card-body p-0">
                                <img src="images/contact.svg" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container-fluid mt-100 mt-60">
                <div class="row">
                    <div class="col-12 p-0">
                        <div class="card map border-0">
                            <div class="card-body p-0">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.6302033771894!2d38.7656143141714!3d9.006133091827955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b85b00694130b%3A0x299cddd242635dbd!2sBedesta%20Building!5e0!3m2!1sen!2set!4v1618123801590!5m2!1sen!2set" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End contact -->

        <!-- Footer Start -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                        <h5 class="text-light footer-head">Oeiryt Consultancy </h5>
                        <!-- <p class="mt-4">Start working with Landrick that can provide everything you need to generate awareness, drive traffic, connect.</p> -->
                        <ul class="list-unstyled social-icon foot-social-icon mb-0 mt-4">
                            <li class="list-inline-item"><a href="https://www.facebook.com/oeiryt.qms" class="rounded" target="_blank"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                            <li class="list-inline-item"><a href="https://twitter.com/OeirytC" class="rounded" target="_blank"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                        </ul><!--end icon-->
                    </div><!--end col-->
                    
                    <div class="col-lg-2 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <h5 class="text-light footer-head">Company</h5>
                        <ul class="list-unstyled footer-list mt-4">
                            <li><a href="page-aboutus.html" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> About us</a></li>
                            <li><a href="page-contact-one.html" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Contact Us</a></li>
                            <li><a href="#Client" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Client</a></li>
                            <li><a href="#FAQ" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> FAQ </a></li>
                
                        </ul>
                    </div><!--end col-->
                    
                    <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <h5 class="text-light footer-head">Services</h5>
                        <ul class="list-unstyled footer-list mt-4">
                            <li><a href="market_study.html" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Market Study</a></li>
                            <li><a href="feasibility_study.html" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Feasibility Study</a></li>
                            <li><a href="company_formation.html" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Company Formation</a></li>
                            <li><a href="business_plan.html" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Business Plan</a></li>
                            <li><a href="business_training.html" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Business Training</a></li>
                        </ul>
                    </div><!--end col-->
    
                    <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <h5 class="text-light footer-head">ISO Standards</h5>
                        <ul class="list-unstyled footer-list mt-4">
                            <li><a href="iso.html#quality" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Quality Managment System</a></li>
                            <li><a href="iso.html#environment" class="text-foot"><i class="uil uil-angle-right-b me-1"></i>Environmental Managment System </a></li>
                            <li><a href="iso.html#food" class="text-foot"><i class="uil uil-angle-right-b me-1"></i>Food Safety Management System </a></li>
                        </ul>
                    </div>
                    <!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </footer><!--end footer-->

        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="btn btn-icon btn-primary back-to-top"><i data-feather="arrow-up" class="icons"></i></a>
        <!-- Back to top -->

        

    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- SLIDER -->
    <script src="js/tiny-slider.js"></script>
    <!-- Icons -->
    <script src="js/feather.min.js"></script>
    <!-- Animation -->
    <script src="js/aos.js"></script>
   
    <!-- Switcher -->
    <script src="js/switcher.js"></script>
    <!-- Main Js -->
    <script src="js/plugins.init.js"></script><!--Note: All init js like tiny slider, counter, countdown, maintenance, lightbox, gallery, swiper slider, aos animation etc.-->
    <script src="js/app.js"></script>
        
        <script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>

        <script>
            const constraints = {
                name: {
                    presence: { allowEmpty: false }
                },
                email: {
                    presence: { allowEmpty: false },
                    email: true
                },
                message: {
                    presence: { allowEmpty: false }
                },
                subject: {
                    presence: { allowEmpty: false }
                }
            };
      
            const form = document.getElementById('contact-form');
      
            form.addEventListener('submit', function (event) {
                const formValues = {
                    name: form.elements.name.value,
                    email: form.elements.email.value,
                    message: form.elements.message.value,
                    subject:form.elements.subject.value
                };
      
                const errors = validate(formValues, constraints);
      
                if (errors) {
                    event.preventDefault();
                    const errorMessage = Object
                        .values(errors)
                        .map(function (fieldValues) {
                            return fieldValues.join(', ')
                        })
                        .join("\n");
      
                    alert(errorMessage);
                }
            }, false);
        </script>
    </body>

</html>
