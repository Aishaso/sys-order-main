<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Devfi Company - Contact Page</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="{{ mix ('assets/img/favicon.png')}}" rel="icon">
  <link href="{{ mix ('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

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
<!--page-load-->
<div class="spinner-wrapper">
  <div class="spinner-border" role="status">
    <span class="sr-only"></span>
  </div>
</div>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="index.html"><span>Devfi Company</span></a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active" href="index.html">Home</a></li>

          <li><a href="#services">Services</a></li>
          <li><a href="contact.html">Contact Us</a></li>
          <li><a href="portfolio.html"><a class="btn btn-success p-2 m-r-2" href="#" role="button">login</a></a></li>
        </ul>



      </nav>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Contact</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Contact</li>
          </ol>
        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Contact Section ======= -->
    <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>News York,
                    Amsterdam</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info@devfi.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+985963258</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Map Section ======= -->
    <section class="map mt-2">
      <div class="container-fluid p-0">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d155959.26467832236!2d5.068769135717024!3d52.354760727010344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c63fb5949a7755%3A0x6600fd4cb7c0af8d!2z2KPZhdiz2KrYsdiv2KfZhdiMINmH2YjZhNmG2K_Ypw!5e0!3m2!1sar!2sch!4v1691791214666!5m2!1sar!2sch" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>  </section><!-- End Map Section -->

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
</footer>
 <!-- End Footer -->

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
  </script>
  <!-- Template Main JS File -->
  <script src="{{ mix ('assets/js/main.js')}}"></script>
  <script src="{{ mix ('xxx.js')}}"></script>

</body>

</html>
