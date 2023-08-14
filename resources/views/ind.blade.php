<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Devfi Company - Home Page</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ mix ('assets/img/favicon.png')}}" rel="icon">
  <link href="{{ mix ('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{mix ('assets/vendor/animate.css/animate.min.css')'}}" rel="stylesheet">
  <link href="{{ mix ('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{ mix ('assets/vendor/bootstrap/css/bootstrap.min.css'}}" rel="stylesheet">
  <link href="{{  mix ('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ mix ('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ mix ('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{ mix ('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <link href="{{ mix ('assets/css/style.css')}}" rel="stylesheet">


</head>

<body>
  <div class="spinner-wrapper">
    <div class="spinner-border" role="status">
      <span class="sr-only"></span>
    </div>
  </div>

  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="index.html"><span>Devfi Company</span></a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active" href="index.html">Home</a></li>

          <li><a href="#services">Services</a></li>
          <li><a href="contact.html">Contact Us</a></li>
          <li><a href="portfolio.html"><a class="btn btn-success p-2 " href="#" role="button">login</a></a></li>
        </ul>



      </nav>


    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Devfi Company</h2>
          <p class="animate__animated animate__fadeInUp">One Tool For Doing It All, Together
            Devfi  is the Task Management Tool For Creators.</p>

        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Devfi Company</h2>
          <p class="animate__animated animate__fadeInUp">Everyone is Always In The loop
            Easily Searchable And Organized Tasks Mean Everyone Stays Up-To-Date On What Matters.</p>

        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Devfi Company</h2>
          <p class="animate__animated animate__fadeInUp">Analyze Workflows For Inefficiencies
            Documenting Your Workflow And Following Tasks Through Each Stage Means More Insights For Streamlining.</p>
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Services Section ======= -->
    <section class="services" id="services">
      <div class="container">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box icon-box-pink">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">WEB DESIGN</a></h4>
              <p class="description">Designing Wonderful And Attractive Websites To Attract The Attention Of Customers And To Suit Different Screen Sizes.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box icon-box-cyan">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">GRAPHIC DESIGN</a></h4>
              <p class="description">Design A Logo For Your Company In A Coordinated And Streamlined Manner That Attracts The Attention Of Customers.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-green">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">E-MARKETING</a></h4>
              <p class="description">Promote Your Company Through Social Media.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-blue">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">TASK MANAGEMENT</a></h4>
              <p class="description">Manage Your Project Well So That It Implements The Required And Benefits The Stakeholders</p>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->



    <!-- ======= Features Section ======= -->
    <section class="features">
      <div class="container">

        <div class="section-title">
          <h2>Features</h2>
          <p>We Consult, Design, Market, Project Manage And Scale For Digital Success.</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <img src="{{asset('assest/img/portfolio/backlog-track-progress.png')}}" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-4">
            <h3> Track Progress Visually.</h3>
            <p class="fst-italic">

              Plan Tasks, Milestones, And Workflows With Gantt Charts And Boards; Then Use Burndown Charts To Stay On Target. </p>

          </div>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="{{ asset('assets/img/portfolio/backlog-quickly-create-task.png') }}" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1">
            <h3>Quickly Create Tasks With Issue Templates</h3>
            <p class="fst-italic">
              Create Custom Task Templates, So You Can Generate Common Tasks Quickly.</p> </div>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <img src="{{asset('assets/img/portfolio/backlog-watch-feature.png') }}" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5">
            <h3>Exciting Work For International Clients</h3>
            <p>We Know That The Most Important Thing For A Developer Is The Quality Of The Work, And That Is Why We Select Projects That Inovate Or Bring A "Cool Factor" To The Table. We Want You To Love What You Are Doing</p>

          </div>
        </div>



      </div>
    </section><!-- End Features Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">


    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Login</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Contact Us</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">E-Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Task Management</a></li>

            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              New York,<br>
              Amsterdam<br>

              <strong>Phone:</strong> +985963258<br>
              <strong>Email:</strong> info@devfi.com<br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>About Devfi Company  </h3>
            <p>Devfi Company It is one of the leading companies in providing its services with high quality and accuracy by completing the work within the specified time.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span><a href="index.html">Devfi Company</a></span></strong>. All Rights Reserved
      </div>
      <div class="credits">
          Designed by <a href="https://aishaso.github.io/Portfolio/">Aisha Soufan</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ mix ('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{ mix ('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{ mix ('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ mix ('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{ mix ('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{ mix ('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ mix ('assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script>
    const spinnerWrapperEi= document.querySelector(".spinner-wrapper");

    setTimeout(()=>{
    spinnerWrapperEi.style.opacity = '0';
},1500);
  spinnerWrapperEi.style.display ='none';

  // const checkbox =document.getElementById("checkbox");
  // checkbox.addEventListener("change",()=>{
  //   document.body.classList.toggle("dark")
  // })
   </script>


  <!-- Template Main JS File -->
  <script src="{{ mix ('assets/js/main.js')}}"></script>
  <script src="{{ mix ('xxx.js')}}"></script>

</body>

</html>
