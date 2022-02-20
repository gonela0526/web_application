<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>RealEstate Engineering</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">RealEstate Engineering</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Investor</a></li>
                    </ul>
                </div>
            </div>
        </nav>
       
     
        
         <!-- Partners-->
         <section class="page-section customers_bg "  id="partners">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">What it takes to be An Investor?</h2>
                        <hr class="divider divider-light" />
                        <p class="text-white-75 mb-4">Just to make it clear another time, we are open plot facilitators who can guarantee you on showing a safe place for your investment only if you are a person who expects Return on Investment(5 years) at the least.</p>
                        <p class="text-white-75 mb-4 ">Kindly Visit <a href="www.bbgindia.com">www.bbgindia.com</a>  for ventures and features</p>
                        <a class="btn btn-primary btn-xl" data-bs-toggle="modal" data-bs-target="#exampleModal" >Ventures & Features</a>
                        <!-- <a class="btn btn-light btn-xl" href="#services">Connect wiht us</a> -->
                    </div>
                </div>
            </div>
        </section>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ventures and features in <a href="www.bbgindia.com">www.bbgindia.com</a> </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul class="list-group" >
                    <li class="list-group-item">Geo Tagging</li>
                    <li class="list-group-item">Transparency in Plot Availability</li>
                    <li class="list-group-item">10 Years Free Maintenance and many more</li>
                    
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                
            </div>
            </div>
        </div>
        </div>

         <!-- About-->
         <!-- <section class="page-section bg-light" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-black mt-0">What do we do?</h2>
                        <hr class="divider " />
                        <p class="text-black-75 mb-4">Kindly Visit <a href="www.bbgindia.com">www.bbgindia.com</a>  for ventures and features such as</p><br>
                        <p class="text-black-75 mb-4"> <strong class="text-primary">,</strong> Geo Tagging</p><br>
                        <p class="text-black-75 mb-4"> <strong class="text-primary">Well,</strong> Transperency in Plot avialability </p>
                        <p class="text-black-75 mb-4"> <strong class="text-primary">Well,</strong> 10 Years Free Maintenance and many more. </p>
                        <a class="btn btn-primary btn-xl" href="#services">Know more</a>
                    </div>
                </div>
            </div>
        </section> -->
       
        <!-- Contact-->
        <section class="page-section " id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0 ">Let's Get In Touch!</h2>
                        <hr class="divider" />
                        <p class="text-muted mb-5 text-white">If u find it interesting and wanna contact us then kindly, fill the form below:</p>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                    <div class="col-lg-6">
                        
                        <form id="contactForm" action="connect_invstr.php" method="post" >
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" name="name" type="text" placeholder="Enter your name..." required />
                                <label for="name">Full name</label>
                                
                               
                            </div>
                            <!-- Occupation input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="occupation" name="occupation" type="text" placeholder="Enter your occupation..." required />
                                <label for="name">Occupation</label>
                               
                            </div>

                            <!-- Sex input-->
                            <div class="form-floating mb-3">
                                <select class="form-control" name="sex" id="sex">
                                    <option selected value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="others">Others</option>
                                </select>
                                <label for="name">Sex</label>
                               
                            </div>

                            <!-- Phonenumber input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" name="phone" type="number" placeholder="Enter your mobile number..." required />
                                <label for="phone">Phone Number</label>
                               
                            </div>

                            <!-- Email input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" name="email" type="email" placeholder="Enter your Email ID..."  required/>
                                <label for="email">Email ID</label>
                               
                            </div>

                            <!-- contact input-->
                            <div class="form-floating mb-3">
                                <select class="form-control" name="time_to_contact" id="time_to_contact">
                                    <option selected value="9to12">9AM to 12PM</option>
                                    <option value="14to18">2PM to 6PM</option>
                                    <option value="19to21">7PM to 9PM</option>
                                </select>
                                <label for="time_to_contact">Time to Contact</label>
                               
                            </div>

                            <!-- reference input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="reference" name="reference" type="text" placeholder="Enter your message here..."  style="height: 10rem" ></textarea>
                                <label for="reference">Reference or How you came to know this</label>
                               
                            </div>
                            <!-- Email address input-->
                            <!--<div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" placeholder="name@example.com"  />
                                <label for="email">Email address</label>
                                
                            </div>-->
                            <!-- Phone number input-->
                            <!--<div class="form-floating mb-3">
                                <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890"  />
                                <label for="phone">Phone number</label>
                                
                            </div>-->
                            <!-- Message input-->
                            <!--<div class="form-floating mb-3">
                                <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" ></textarea>
                                <label for="message">Message</label>
                                
                            </div>-->
                           
                            <!-- Submit Button-->
                            <div class="d-grid"><button class="btn btn-primary btn-xl " name="submit" id="submitButton" type="submit">Submit</button></div>
                        </form>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-4 text-center mb-5 mb-lg-0">
                        <i class="bi-phone fs-2 mb-3 text-muted"></i>
                        <div >+1 (555) 123-4567</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2021 - RealEstate Engineering</div></div>
        </footer>
       
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
       
    </body>
</html>
