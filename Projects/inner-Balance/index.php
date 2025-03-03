<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inner Balance Care | Homepage</title>

    <!-- Custom CSS -->
     <link rel="stylesheet" href="Assets/CSS/style.css">
    <!-- Boostrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- FONT AWESOME -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

     <!-- custom css -->
      <link rel="stylesheet" href="Assets/CSS/main.css">
      <!-- custom css -->
      <link rel="stylesheet" href="Assets/CSS/about.css">
      

</head>
<body class="bg-light _container">

    <!-- Header -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
          <a class="navbar-brand d-flex align-items-center justify-content-center" href="#"> <img src="./Assets/images/logo.png" alt="" class="img-fluid" style="width: 50px; height: auto;"> Inner Balance</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto ms-auto my-2 my-lg-0 gap-4 navbar-nav-fixed-top " >
              
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#Home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#Services" role="button" datao-bs-toggle="dropdown" aria-expanded="false">
                  Services
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#Team" >Team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#Blog">Blog</a>
                  </li>

            </ul>
              <button onclick="window.location='auth/signin.php'" class="btn text-white" style="background-color: #1D9DB4;" >Get started</button>
          </div>
        </div>
      </nav>

      <div class="container-fluid" id="Home">

      <div class="container px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-2 py-5">
          <div class="col-10 col-sm-8 col-lg-6">
            <img src="assets/images/congitive1.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
          </div>
          <div class="col-lg-6">
          <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Inner Balance Care: <br> Nurturing Mental Wellness</h1>
                <p class="lead">Supporting your journey to mental well-being with compassionate care, therapy, and holistic solutions. Find balance, resilience, and peace of mind with our expert guidance.</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
              <button type="button" onclick="window.location='hms/book-appointment.php' " class="btn text-white btn-lg px-4 me-md-2"  style="background-color: #1D9DB4; " type="button" data-bs-toggle="collapse" data-bs-target="#book-appointment.php"  >Book Appointment</button>
              <button type="button" class="btn btn-outline-secondary btn-lg px-4" type="button" data-bs-toggle="collapse" data-bs-target="#moreContent">Learn More</button>
            </div>
            <!-- Collapsible Content -->
<div class="collapse mt-4" id="moreContent">
    <div class="card card-body">
        <h2 class="h4">Our Mission</h2>
        <p>At Inner Balance Care, our mission is to provide compassionate, accessible, and effective mental health support. 
           We strive to empower individuals with the tools and guidance needed to achieve emotional well-being, 
           resilience, and a balanced life.</p>

        <h2 class="h4">Comprehensive Mental Health Support</h2>
        <p>Our services include therapy, mindfulness training, stress management, and personalized care plans tailored to your needs.</p>
        <ul>
            <li>One-on-One Counseling</li>
            <li>Group Therapy Sessions</li>
            <li>Mindfulness & Meditation Programs</li>
            <li>Stress & Anxiety Management.....</li>
        </ul>
        <a href="#" onclick="window.location='auth/signin.php' " class="btn btn-success">Get Started</a>
    </div>
</div>

          </div>
        </div>
      </div>
    </div>


<!-- About section -->
<section class="about-section container" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="about-content">
                        <h2 class="fw-semi-bold text-black">Who we are</h2>
                        <h3 class="fw-bold text-black">About <span class="text-light">Us</span></h3>
                        <p>
                            At Inner Balance care, we are dedicated to helping individuals rediscover their inner strength and achieve mental harmony.
                            Through compassionate care and personalized programs, we create a safe space where healing and growth flourish.
                            Our goal is to empower every individual to embrace wellness and lead a balanced, fulfilling life.
                        </p>
                        <button class="btn btn-outline-light">Learn more</button>
                    </div>
                </div>
                <div class="col-lg-7 ">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="car p-4 text-center">
                                <div class="card-icon"><i class="fas fa-people-carry"></i></div>
                                <h5 class="mt-3">Compassion</h5>
                                <p>We understand, respect, and continually promote sincere care for our clients and their families.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="car p-4 text-center">
                                <div class="card-icon"><i class="fas fa-handshake"></i></div>
                                <h5 class="mt-3">Commitment</h5>
                                <p>We have and maintain a relentless optimism to guide those we care for through their wellness journey.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="car p-4 text-center">
                                <div class="card-icon"><i class="fas fa-lightbulb"></i></div>
                                <h5 class="mt-3">Knowledge</h5>
                                <p>We rely on hard-backed data in our care delivery and management. Our practice requires a combination of science and art.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="car p-4 text-center">
                                <div class="card-icon"><i class="fas fa-book-open"></i> </div>
                                <h5 class="mt-3">Research</h5>
                                <p>We pursue continuous improvement to care, professional development, and creating an impact.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WhatsApp Floating Button -->
<a href="https://wa.me/YOUR_NUMBER" target="_blank" class="whatsapp-btn">
    <i class="fab fa-whatsapp"></i>
</a>

<!-- Fon


<!-- services section -->
<section class="container" id="Services">
  <div class="container">
    
  <div class="head_sec">
<h2 class="fw-semi-bold   d-flex justify-content-center align-items-center py-5" >What we  offer</h2>
<h3 class="fw-bold color-#363636  d-flex justify-content-center align-items-center py-2">Our <span class="text-right" style= "color:#1D9DB4;padding-left:6px;"  >Services</span></h3>
  <p class="d-flex justify-content-center align-items-center py-2" style="font-size:24px;">Outpatient programs tailored to meet client health <br> needs and goals. Explore our programs</p>
</div>

<!-- Services start -->

      

<div class="main_services" id="infiniteScroll--left">
 <!-- 15 Mental Health Services -->
<article>
  <div class="wrapper">
    <div class="img img-1"></div>
    <div class="content">
      <div class="uni-title">
        <h1>Telehealth Services</h1>
      </div>
      <div class="uni-details">
        <p>Remote mental health services, including therapy and consultation. Telehealth offers accessibility and convenience, ensuring individuals receive timely support from licensed professionals.</p>
      </div>
      <div class="uni-details">
        <a href="https://www.mentalhealth.gov/get-help/immediate-help" target="_blank" class="details d-flex py-4">Read more</a>
      </div>
    </div>
  </div>
</article>

<article>
  <div class="wrapper">
    <div class="img img-2"></div>
    <div class="content">
      <div class="uni-title">
        <h1>Cognitive Behavioral Therapy</h1>
      </div>
      <div class="uni-details">
        <p>Evidence-based therapy focused on changing negative thought patterns. CBT helps individuals identify triggers and develop healthy coping strategies.</p>
      </div>
      <div class="uni-details">
        <a href="https://www.apa.org/ptsd-guideline/patients-and-families/cognitive-behavioral" target="_blank" class="details d-flex py-4">Read more</a>
      </div>
    </div>
  </div>
</article>

<article>
  <div class="wrapper">
    <div class="img img-3"></div>
    <div class="content">
      <div class="uni-title">
        <h1>Depression and Anxiety Treatment</h1>
      </div>
      <div class="uni-details">
        <p>Professional support for managing depression and anxiety disorders. Treatment includes therapy, medication, and lifestyle modifications to enhance mental well-being.</p>
      </div>
      <div class="uni-details">
        <a href="https://www.nimh.nih.gov/health/topics/anxiety-disorders" target="_blank" class="details d-flex py-4">Read more</a>
      </div>
    </div>
  </div>
</article>

<article>
  <div class="wrapper">
    <div class="img img-4"></div>
    <div class="content">
      <div class="uni-title">
        <h1>Substance Abuse Counseling</h1>
      </div>
      <div class="uni-details">
        <p>Specialized counseling for addiction recovery and substance abuse issues. Support includes detox guidance, therapy, and long-term recovery planning.</p>
      </div>
      <div class="uni-details">
        <a href="https://www.samhsa.gov/find-help/national-helpline" target="_blank" class="details d-flex py-4">Read more</a>
      </div>
    </div>
  </div>
</article>

<article>
  <div class="wrapper">
    <div class="img img-5"></div>
    <div class="content">
      <div class="uni-title">
        <h1>Psychiatric Medication Management</h1>
      </div>
      <div class="uni-details">
        <p>Professional evaluation and prescription management for mental health conditions. Regular assessments ensure proper medication use and effectiveness.</p>
      </div>
      <div class="uni-details">
        <a href="https://www.nami.org/About-Mental-Illness/Treatment/Mental-Health-Medications" target="_blank" class="details d-flex py-4">Read more</a>
      </div>
    </div>
  </div>
</article>

<article>
  <div class="wrapper">
    <div class="img img-6"></div>
    <div class="content">
      <div class="uni-title">
        <h1>Couples and Family Therapy</h1>
      </div>
      <div class="uni-details">
        <p>Therapy services aimed at strengthening relationships and family dynamics. Communication techniques and conflict resolution strategies are emphasized.</p>
      </div>
      <div class="uni-details">
        <a href="https://www.aamft.org/Consumer_Updates.aspx" target="_blank" class="details d-flex py-4">Read more</a>
      </div>
    </div>
  </div>
</article>

<article>
  <div class="wrapper">
    <div class="img img-7"></div>
    <div class="content">
      <div class="uni-title">
        <h1>Mindfulness and Stress Reduction</h1>
      </div>
      <div class="uni-details">
        <p>Techniques and therapies to reduce stress and improve well-being. Mindfulness practices encourage present-moment awareness and relaxation.</p>
      </div>
      <div class="uni-details">
        <a href="https://www.mindful.org/how-to-practice-mindfulness/" target="_blank" class="details d-flex py-4">Read more</a>
      </div>
    </div>
  </div>
</article>

<article>
  <div class="wrapper">
    <div class="img img-8"></div>
    <div class="content">
      <div class="uni-title">
        <h1>Grief and Loss Counseling</h1>
      </div>
      <div class="uni-details">
        <p>Support for individuals coping with loss and bereavement. Therapy provides guidance on processing emotions and finding healthy coping mechanisms.</p>
      </div>
      <div class="uni-details">
        <a href="https://www.cancer.org/treatment/end-of-life-care/grief-and-loss.html" target="_blank" class="details d-flex py-4">Read more</a>
      </div>
    </div>
  </div>
</article>


<!-- Continue adding articles for the remaining services up to 15 -->


</section>
<!-- services end -->


<hr class="py-4 container  mt-5">


<!--  why choose us-->
  <div class="container mt-5 py-4">
        <div class="row hero-section py-4 mt-5">
            <div class="col-md-6">
                <img src="assets/images/maindoc.png" class="img-fluid rounded" alt="Mental health consultation">
            </div>
            <div class="col-md-6 hero-text">
                <h6 class="text-muted">Why Choose Us</h6>
                <h2><strong>We Help Build <span class="highlight">Mental</span> Peace And Prepare A Better You!</strong></h2>
                <p>We love what we do and we do it with passion. We value the experimentation of the message and smart incentives.</p>
                <ul class="check-list">
                    <li>Experienced professionals (10+ years)</li>
                    <li>Proven strategies for lasting change</li>
                    <li>Compassionate, personalized care</li>
                    <li>Compassionate, personalized care</li>
                    <li>FREE consultation during Registration</li>
                </ul>
                <button style="background-color: #1D9DB4; border: none;  border-radius: 6px; color:rgb(218, 228, 230);"><a href="#" class="btn btn-custom ">VIEW MORE</a></button>
            </div>
        </div>
    </div>
    <!-- our team -->
     <div class="section_team container" id="Team">
          <div class="head_sec">
            <h2 class="fw-semi-bold   d-flex justify-content-center align-items-center py-3" >Our Team</h2>
            <h3 class="fw-bold text-#363636  d-flex justify-content-center align-items-center py-2"> Meet Our <span class="text-right " style="color:#1D9DB4 ; padding-left: 6px; ">Therapists</span></h3>
           </div>

        <div class="cards_team d-flex align-items-center justify-content-center gap-4 ">
            <div class="row align-items-center  g-4">

          <div class="col-md-3 me-auto ms-auto ">
              <div class="card p-4 text-center">
                 <div class="cards_img"><img src="assets/images/maindoc.png" alt="kamau doctor "class="img-fluid" style="width:100%; height: auto; z-index: -550;" ></div>
                <div class="profile_cards col-md-4 bg-primary me-auto ms-auto rounded" style="color: aliceblue; width:100% ;  "> <h5 class="mt-3 d-flex justify-content-center align-items-center "    >DOC.Kamau</h5>
                <h6>Therapists</h6>
              
                  </div>
            
              </div>
          </div>
          

          <div class="col-md-3 me-auto ms-auto ">
              <div class="card p-4 text-center">
                 <div class="cards_img"><img src="assets/images/maindoc.png" alt="kamau doctor "class="img-fluid" style="width:100%; height: auto; z-index: -550;" ></div>
                <div class="profile_cards col-md-4 bg-primary me-auto ms-auto rounded" style="color: aliceblue; width:100% ;  "> <h5 class="mt-3 d-flex justify-content-center align-items-center "    >DOC.Kamau</h5>
                <h6>Therapists</h6>
              
                  </div>
            
              </div>
          </div>
          
          <div class="col-md-3 me-auto ms-auto ">
              <div class="card p-4 text-center">
                 <div class="cards_img"><img src="assets/images/maindoc.png" alt="kamau doctor "class="img-fluid" style="width:100%; height: auto; z-index: -550;" ></div>
                <div class="profile_cards col-md-4 bg-primary me-auto ms-auto rounded" style="color: aliceblue; width:100% ;  "> <h5 class="mt-3 d-flex justify-content-center align-items-center "    >DOC.Kamau</h5>
                <h6>Therapists</h6>
              
                  </div>
            
              </div>
          </div>
          
          <div class="col-md-3 me-auto ms-auto ">
              <div class="card p-4 text-center">
                 <div class="cards_img"><img src="assets/images/maindoc.png" alt="kamau doctor "class="img-fluid" style="width:100%; height: auto; z-index: -550;" ></div>
                <div class="profile_cards col-md-4 bg-primary me-auto ms-auto rounded" style="color: aliceblue; width:100% ;  "> <h5 class="mt-3 d-flex justify-content-center align-items-center "    >DOC.Kamau</h5>
                <h6>Therapists</h6>
              
                  </div>
            
              </div>
          </div>
             
    </div>     
    </div>
    </div>
<!-- Testimonals -->
<div class="container my-5">
        <h3 class="text-center">What Our <span class="text-primary">Happy Clients</span> Said</h3>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="testimonial-card bg-light p-3">
                    <img src="assets/images/maindoc.png" alt="Devon Lee">
                    <div>
                        <h5 class="text-primary">Devon Lee</h5>
                        <p>"Thanks to B&C for your immense help throughout my journey..."</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial-card blue-bg p-3">
                    <img src="Assets/images/maindoc.png" alt="Adhiambo">
                    <div>
                        <h5>Adhiambo</h5>
                        <p>"Your support in my journey towards better mental health has been incredible..."</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial-card bg-light p-3">
                    <img src="Assets/images/maindoc.png" alt="Denis">
                    <div>
                        <h5 class="text-primary">Denis</h5>
                        <p>"Thank you, B&C Care, for your unwavering support..."</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- blog -->


    <div class="container my-5" id="Blog">
        <h3 class="fw-bold"><span class="badge bg-dark">BLOG</span></h3>
        <p>Explore Our Blog For Empowering Insights And Practical Tips On Mental Health And Self-Care.</p>
        
        <div class="row">
            <div class="col-md-4">
                <div class="blog-card">
                    <img src="Assets/images/maindoc.png" alt="Blog 1">
                    <h5 class="mt-2">Anxiety: Worries Overwhelming You?</h5>
                    <p>Learn To Identify Anxiety's Triggers And Discover Coping Mechanisms.</p>
                    <button class="btn btn-secondary">Read More</button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="blog-card">
                    <img src="Assets/images/maindoc.png" alt="Blog 2">
                    <h5 class="mt-2">Chronic Stress Hurts</h5>
                    <p>Learn Its Signs And Find Healthy Coping Strategies.</p>
                    <button class="btn btn-secondary">Read More</button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="blog-card">
                    <img src="Assets/images/maindoc.png" alt="Blog 3">
                    <h5 class="mt-2">Depression: Feeling Persistently Down?</h5>
                    <p>Understand The Signs Of Depression And Find Paths To Healing.</p>
                    <button class="btn btn-secondary">Read More</button>
                </div>
            </div>
        </div>

        <div class="text-center my-2">
            <button class="btn btn-primary">View More Articles</button>
        </div>
    </div>
    
    <div class="container my-5" id="Contact">
    <div class="row">
        <div class="col-md-6">
            <h4 class="fw-bold">For Inquiry</h4>
            <h5 class="text-primary"><b>Send Us A Message</b></h5>
            <p class="py-3 g-3">We welcome all your concerns, issues, and suggestions.<br> Feel free to reach out with your most convenient time.</p>
        </div>
        <div class="col-md-4">
            <div class="card p-4">
                <h5 class="text-center text-primary">Inquiry Form</h5>
                <form id="emailForm">
                    <div class="mb-3">
                        <input type="text" id="firstname" name="firstname" class="form-control" placeholder="First Name" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" id="secondname" name="secondname" class="form-control" placeholder="Second Name" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                        <textarea id="message" name="message" class="form-control" rows="3" placeholder="Message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
    <!--  ************************* Gallery Starts Here ************************** -->
    <div id="gallery" class="gallery">    
           <div class="container">
              <div class="inner-title">

                <h2>Our Gallery</h2>
                <p>View Our Gallery</p>
            </div>
              <div class="row">
                

        <div class="gallery-filter d-none d-sm-block">
            <button class="btn btn-default filter-button" data-filter="all">All</button>
            <button class="btn btn-default filter-button" data-filter="hdpe">Dental</button>
            <button class="btn btn-default filter-button" data-filter="sprinkle">Cardiology</button>
            <button class="btn btn-default filter-button" data-filter="spray"> Neurology</button>
            <button class="btn btn-default filter-button" data-filter="irrigation">Laboratry</button>
        </div>
        <br/>



            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="assets/images/gallery/gallery_01.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
                <img src="assets/images/gallery/gallery_02.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="assets/images/gallery/gallery_03.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <img src="assets/images/gallery/gallery_04.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                <img src="assets/images/gallery/gallery_05.jpg" class="img-responsive">
            </div>

          

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                <img src="assets/images/gallery/gallery_06.jpg" class="img-responsive">
            </div>

        </div>
    </div>
       
       
       </div>
        <!-- ######## Gallery End ####### -->
    

<footer class="footer_fluid text-center mt-5">
    <div class="container">
        <div class="footer-top d-flex align-items-center justify-content-between">
            <div class="footer-logo">
                <img src="Assets/images/logo.png" class="img-fluid" style="width: 200px;height:auto;" alt="Logo">
            </div>
            <div>
                <h5>Follow Us On:</h5>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom row">
            <div class="col-md-4">
                <h5>Our Address</h5>
                <p>Pangani<br>P.O Box 0100<br>Nairobi</p>
            </div>
            <div class="col-md-4">
                <h5>Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="#Home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#Services">Services</a></li>
                    <li><a href="#Contact">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5>Contacts & Support</h5>
                <p>Telephone: +254706748425</p>
                <p>WhatsApp: +254754200568</p>
                <p>Email: innerbalance@info.com</p>
            </div>
        </div>
        <hr>
        <p>&copy; ALL RIGHTS RESERVED BY INNER BALANCE CARE</p>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

<!-- EmailJS Script -->
<script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
<script src="Assets/js/main.js"></script>
<script src="Assets/js/inquiry.js"></script>
<script src="Assets/js/script.js"></script>
</body>
</html>
