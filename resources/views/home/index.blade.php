<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" href="favicon/favicon.ico">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/vendor/bootstrap/dist/css/bootstrap.min.css">
  <!-- fontawesome -->
  <link rel="stylesheet" href="assets/vendor/fontawesome/css/all.min.css">
  <!-- aos -->
  <link rel="stylesheet" href="assets/vendor/aos/dist/aos.css">
  <!-- custom css -->
  <link rel="stylesheet" href="assets/css/style.css">

  <title>PATRIA | UBPK</title>
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow shadow-sm fixed-top fy-3">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#"> <img src="{{ asset('img/logopatria.png') }}" alt="Logo" height="40"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link fw-bolder active" href="index3">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link fw-bolder dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              About UBPK
            </a> 
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="about">Dept. Production</a></li>
              <li><a class="dropdown-item" href="team">Dept. Quality</a></li>
              <li><a class="dropdown-item" href="team">Dept. Support</a></li>
              <li><a class="dropdown-item" href="team">Dept. SCM</a></li>
              <li><a class="dropdown-item" href="team">Dept. Engineering</a></li>
              </li>
            </ul> 
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bolder" href="services">Our Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bolder" href="portofolio">Our Media Room</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bolder" href="login">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- end navbar -->
  
  <!-- carousel -->
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assets/img/c1.jpg" class="d-block w-100 carousel-img" alt="..." />
        <div class="carousel-caption d-none d-md-block">
          <h3>COMPANY OVERVIEW</h3>
          <p> Our employee is the greatest asset for company. Please submit your resume and develop career with us
          </p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="assets/img/c2.jpg" class="d-block w-100 carousel-img" alt="..." />
        <div class="carousel-caption d-none d-md-block">
          <h3>CAREER</h3>
          <p>
            At PATRIA, Corporate Social Responsibility is at our core. Committed to ethnical business practices and 
            community well-being, Join us in making a positive impact as we redefine digital excellence with a conscience.
          </p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="assets/img/c3.jpg" class="d-block w-100 carousel-img" alt="..." />
        <div class="carousel-caption d-none d-md-block">
          <h3>CORPORATE SOCIAL RESPONSIBILITY</h3>
          <p>
            To provide the best solution, from conceptual design into real product applied on site. Completed with excellent
            after sales service support to maximize the productivity 
          </p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- end carousel -->

  <!-- about us -->
  <div class="about-us mt-5">
    <div class="container">
      <div class="title-container text-center ">
        <h2 class="fw-bold">ABOUT US</h2>
      </div>
      <div class="row mt-5">
        <div class="col-md-6" data-aos="fade-right">
          <h6 class="fw-bold about-us-title">
             UBPK
          </h6>
          <p class="fw-bolder mt-4 about-us-subtitle">
            UBPK merupakan singkatan dari Unit Balikpapan Plant Kariangau. Grand Launching UBPK pada tanggal 15 Maret 2023.
            UBPK saat ini berfokus pada Engineering dan Manufakturing untuk alat berat Mining, non Mining, dan 
            Marine
          </p>
        </div>
        <div class="col-md-6" data-aos="fade-left">
          <p>
            
          </p>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <i class="fa fa-check-double primary"></i>
              Vision : To be the best company that provides engineering & logistic 
              solutions in heavy equipment, maritime, and energy industry
            </li>
            <li class="list-group-item">
              <i class="fa fa-check-double primary"></i>
              Mission : 1. Prosper with the nation
                        2. Excel in engineering, research and development 
                        to provied sustainable value to our stakeholders
                        3. Create a place for Patrian to grow and give the best 
                        perfomance
            </li>
            <li class="list-group-item">
              <i class="fa fa-check-double primary"></i>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis,
              laboriosam?
            </li>
            <li class="list-group-item">
              <i class="fa fa-check-double primary"></i>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis,
              laboriosam?
            </li>
          </ul>
          <p class="mt-2">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni
            quisquam facilis impedit. Commodi nesciunt culpa soluta esse
            temporibus officia veritatis incidunt error porro
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- end about us -->

  <!-- services -->
  <div class="services mt-5 bg-light py-5">
    <div class="container">
      <div class="title-container text-center">
        <h2 class="fw-bold">Our Product</h2>
      </div>
      <div class="row mt-5">
        <div class="col-md-4">
          <div class="card border-0 text-center p-4 mt-3" data-aos="zoom-in">
            <div class="card-body">
              <div class="card-icon">
                  <img src="assets/img/dumptruck.png" alt="Industrial" height="auto" width="20%" class="img-fluid" />
              </div>
              <div class="card-title fw-bolder mt-4">Industrial</div>
              <p class="card-description mt-3">
                Started with forklift, our R & D team developed many other products 
                related to industrial bussines
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card border-0 text-center p-4 mt-3" data-aos="zoom-in">
            <div class="card-body">
              <div class="card-icon">
                <img src="assets/img/z1.png" alt="Mining" height="auto" width="20%" class="img-fluid" />
              </div>
              <div class="card-title fw-bolder mt-4">Mining</div>
              <p class="card-description mt-3">
               You can use this site to look over the building construction product
               line that meets your needs
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card border-0 text-center p-4 mt-3" data-aos="zoom-in">
            <div class="card-body">
              <div class="card-icon">
                <img src="assets/img/z2.png" alt="Forestry And Agro" height="60" width="20%" class="img-fluid" />
              </div>
              <div class="card-title fw-bolder mt-4">Forestry And Agro</div>
              <p class="card-description mt-3">
                PATRIA Semi Side Tipper allow fast, safe and economical handling 
                of all bulk materials
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card border-0 text-center p-4 mt-3" data-aos="zoom-in">
            <div class="card-body">
              <div class="card-icon">
                <img src="assets/img/z3.png" alt="Construction" height="60" width="20%"  class="img-fluid" />
              </div>
              <div class="card-title fw-bolder mt-4">Construction</div>
              <p class="card-description mt-3">
                You can use this site to look over the building construction product 
                line that meets your needs
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card border-0 text-center p-4 mt-3" data-aos="zoom-in">
            <div class="card-body">
              <div class="card-icon">
                <img src="assets/img/z4.png" alt="Oil & Gas" height="60"  width="20%" class="img-fluid" />
              </div>
              <div class="card-title fw-bolder mt-4">Oil & Gas</div>
              <p class="card-description mt-3">
                Optimizing your lifting perfomance just become easier with the PATRIA Hydraulic
                Pumping Unit at your side
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card border-0 text-center p-4 mt-3" data-aos="zoom-in">
            <div class="card-body">
              <div class="card-icon">
                <img src="assets/img/z5.png" alt="Spare Part" height="60" width="20%" class="img-fluid" />
              </div>
              <div class="card-title fw-bolder mt-4">Spare Part</div>
              <p class="card-description mt-3">
                Our main activity are maintenance and support part of PATRIA product
                business by provide high Part Availability for service and replacement
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end services -->

  <!-- portofolio us -->
  <div class="portofolio-us mt-5">
    <div class="container">
      <div class="title-container">
        <h2 class="text-center fw-bold">Our Media Room</h2>
      </div>
      <div class="row mt-4">
        <div class="col-md-12 d-flex justify-content-center">
        <div class="regular slider slick-initialized slick-slider slick-dotted">
        <div class="slick-list draggable">
          <ul class="slick-dots" style="display: block;" role="tablist">
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- end portofolio us -->

  <!-- clients -->
  <div class="clients mt-5">
    <div class="container">
      <div class="title-container">
        <h2 class="text-center fw-bold">AFFILIATE COMPANY</h2>
      </div>
      <div class="row mt-5">
        <div class="col-md-3 pt-5 text-center" data-aos="zoom-in">
          <a href="#" target="_blank">
          <img src="assets/img/Y1.png" class="img-fluid brand-image" alt="" />
        </div>
        <div class="col-md-3 pt-5 text-center" data-aos="zoom-in">
          <a href="https://pml.co.id/" target="_blank">
          <img src="assets/img/Y2.png" class="img-fluid brand-image" alt="" />
        </div>
        <div class="col-md-3 pt-5 text-center" data-aos="zoom-in">
          <a href="https://patriashipyard.com/en" target="_blank">
          <img src="assets/img/Y3.png" class="img-fluid brand-image" alt="" />
        </div>
      </div>
    </div>
  </div>
  <!-- end clients -->

  <!-- footer -->
  <footer class="mt-5">
    <div class="footer-top bg-dark text-white p-5">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-3">
            <h4 class="fw-bold">PT United Tractors Pandu Engineering Plant Kariangau</h2>
              <p>
                Jl. Balikpapan - Samarinda, Karang Joang, Kec. Balikpapan Utara, Kota Balikpapan, Kalimantan Timur 76127
              </p>
          </div>

    <div class="footer-down bg-darker text-white px-5 py-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-5">
            <div class="copyright">
              &copy; 2024 <strong>PT United Tractors Pandu Engineering Plant Kariangau all right reserved.</strong>
            </div>

          <div class="col-md-5">
            <div class="social-links float-end">
              <a href="" class="mx-2">
                <i class="fab fa-facebook fa-2x"></i>
              </a>
              <a href="" class="mx-2">
                <i class="fab fa-twitter fa-2x"></i>
              </a>
              <a href="https://www.instagram.com/patria_ubpk?igsh=MXg4cGg4bHptcDdtdA==" class="mx-2">
                <i class="fab fa-instagram fa-2x"></i>
              </a>
              <a href="https://www.youtube.com/@UnitedTractorsPanduEngineering" class="mx-2">
                <i class="fab fa-youtube fa-2x"></i>
              </a>
              <a href="https://www.linkedin.com/company/patriautpe/?originalSubdomain=id" class="mx-2">
                <i class="fab fa-linkedin fa-2x"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- end footer  -->

  <!-- to top -->
  <a href="#" class="btn-to-top p-3">
    <i class="fa fa-chevron-up"></i>
  </a>
  <!-- end to top -->

  <script src="assets/vendor/jquery/jquery-3.6.0.min.js"></script>
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/fontawesome/js/all.min.js"></script>
  <script src="assets/vendor/masonry/masonry.pkgd.min.js"></script>
  <script src="assets/vendor/aos/dist/aos.js"></script>
  <script src="assets/vendor/isotope/isotope.pkgd.min.js"></script>
  <script src="assets/js/app.js"></script>
</body>

</html>