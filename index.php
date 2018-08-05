<!doctype html>
<html class="no-js" lang="en">
<head>
  <!-- META DATA -->
  <base href="GAS">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <!-- font-awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt"
    crossorigin="anonymous">

  <!--font-family-->
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
  <!-- TITLE OF SITE -->
  <title>Global Agility Solutions</title>


  <!-- for title img -->
  <link rel="shortcut icon" type="image/icon" href="assets/images/logo/favicon.ico" />

  <!--font-awesome.min.css-->
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">

  <!--linear icon css-->
  <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">

  <!--animate.css-->
  <link rel="stylesheet" href="assets/css/animate.css">

  <!--hover.css-->
  <link rel="stylesheet" href="assets/css/hover-min.css">

  <!--vedio player css-->
  <link rel="stylesheet" href="assets/css/magnific-popup.css">

  <!--owl.carousel.css-->
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <link href="assets/css/owl.theme.default.min.css" rel="stylesheet" />


  <!--bootstrap.min.css-->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">

  <!-- bootsnav -->
  <link href="assets/css/bootsnav.css" rel="stylesheet" />

  <!--style.css-->
  <link rel="stylesheet" href="assets/css/style.css">

  <!--responsive.css-->
  <link rel="stylesheet" href="assets/css/responsive.css">

  <!-- overrides.css -->
  <link rel="stylesheet" href="assets/css/overrides.css">

  <!-- Ekko Lightbox Plugin -->
  <link rel="stylesheet" href="assets/third-party-plugins/css/ekko-lightbox.css">
</head>

<body>
  <?php include 'assets/views/includes/main/navbar.php'; ?>
  <?php include 'assets/views/includes/main/sidenav.php'; ?>
  <!-- Header -->
  <section class="header-slider-area">
    <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <div class="single-slide-item slide-1">
            <div class="container">
              <div class="row">
                <div class="col-lg-6" id="header-text">
                  <h2>Why Partner with Global Agility?</h2>
                  <p class="text-justify">
                    Global Agility allows you to access a professionally trained staff, coupled with a solid infrastructure, secure data systems,
                    and a suite of easily integrated software and Customer management tools. Whether you are looking to outsource
                    your entire operations, or specific aspects of your programs, or even short term support. Global provides
                    a flexible workforce, with unique pricing models to ensure you only pay for what you need, when you need,
                    and at the level of performance you and your Customers require.
                  </p>
                </div>
                <div class="col-lg-6">
                  <div class="row event-header text-center">
                    <ul>
                      <li class="active">
                        <button class="event-up-link selected">Upcoming Events</button>
                      </li>
                      <li>
                        <button class="event-past-link">Past Events</button>
                      </li>
                    </ul>
                  </div>
                  <div class="owl-carousel owl-theme" id="up-events">
                    <?php 
                      $dir = "assets/images/events/Upcoming/*.{jpg,png,gif,JPG,jpeg}";
                      $images = glob($dir, GLOB_BRACE);
                      foreach($images as $image):
                          echo "<a href='" . $image ."' data-toggle='lightbox' data-gallery='upcoming-gallery'>";
                          echo "<img src='" . $image . "' />";
                          echo "</a>";
                      endforeach;
                  ?>
                  </div>
                  <div class="owl-carousel owl-theme hide" id="past-events">
                    <?php 
                      $dir = "assets/images/events/Past/*.{jpg,png,gif,JPG,jpeg}";
                      $images = glob($dir, GLOB_BRACE);
                      foreach($images as $image):
                          echo "<a href='" . $image ."' data-toggle='lightbox' data-gallery='past-gallery'>";
                          echo "<img src='" . $image . "' />";
                          echo "</a>";
                      endforeach;
                  ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Header end -->

  <!-- About Us -->
  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 text-center p-5">
          <h1 class="mb-5">About</h1>
          <p class="text-justify">Global Agility allows you to access a professionally trained staff, coupled with a solid infrastructure, secure
            data systems, and a suite of easily integrated software and Customer management tools. Whether you are looking
            to outsource your entire operations, or specific aspects of your programs, or even short term support. Global
            provides a flexible workforce, with unique pricing models to ensure you only pay for what you need, when you
            need, and at the level of performance you and your Customers require.</p>
        </div>
        <div class="col-lg-6 p-5">
          <div class="embed-responsive embed-responsive-16by9 rounded">
            <video width="400" controls>
              <source src="assets/vids/GAS_VID.MP4" type="video/mp4"> Your browser does not support HTML5 video.
            </video>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- About Us end -->

  <!--Service start-->
  <section id="service">
    <!-- Tolling start -->
    <div class="container-fluid" id="tolling">
      <div class="row">
        <div class="col-lg-6 col-fluid">
          <img id="toll-img" class="img-fluid" src="http://www.neurallabs.net/images/neurallabs228.jpg" alt="">
        </div>
        <div class="col-lg-6">
          <h1 class="text-center pt-5 mt-5">Tolling and Image Review</h1>
          <p class="text-center p-5">We offer a suite of Tolling products including OCR and image review services. Our experienced and professionally
            trained team is fast, accurate, reliable, and can save you between 30% and 70% on Image Review costs.</p>
        </div>
      </div>
    </div>
    <div class="container-fluid" id="img-review-content">
      <div class="card-group pt-5 mx-5">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title text-center">Validation Processing</h3>
            <p class="card-text text-center">Supporting millions of transactions for image review and validation a day. A flexible workforce operating 24/7/365
              at 99.9% accuracy. Unique pricing models based on individual transaction, review process or field entries allowing
              you a cost effective support Team.</p>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <h3 class="card-title text-center">Outsourcing Projects</h3>
            <p class="card-text text-center">Transcription support, system immigration programs, data validation and entry projects of any size and duration.
              Professional Teams are ready and available to support you and your Customers year round. Competitive pricing
              models and dedicated account management.</p>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <h3 class="card-title text-center">Our Tech or Yours</h3>
            <p class="card-text text-center">Ready-To-Go image review software, inhouse CRM tools, Customer reporting portals and technical support Teams
              allow Global to integrate quickly into your Organization and provide powerful information management tools.</p>
          </div>
        </div>
      </div>
      <!-- Tolling End -->

      <!-- Call Center Start -->
      <div class="container-fluid" id="call-center">
        <div class="row">
          <div class="col-lg-6">
            <h1 class="text-center pt-5 mt-5 text-center">CALL CENTER SERVICES</h1>
            <p class="text-center p-5">We offer inbound and outbound customer service solutions. We can utilize our proprietary technology; your current
              system, or our software experts can help create a custom CRM solution to fit your specific needs.</p>
          </div>
          <div class="col-lg-6 col-fluid">
            <img class="img-fluid feat-img" src="https://www.grassrootsbpo.com/wp-content/uploads/2017/07/Voice.jpg" alt="">
          </div>
        </div>
      </div>
      <div class="container-fluid" id="call-center-content">
        <div class="card-columns pt-5 mx-5">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title text-center">VOICE . CHAT . EMAIL</h3>
              <p class="card-text text-center">Professional person to person support of your Customers through phone, chat or email sessions, using your brand.</p>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h3 class="card-title text-center">24 / 7 / 365 COVERAGE</h3>
              <p class="card-text text-center">Year round coverage to ensure you and your Customers have the support they need, when they need it.</p>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h3 class="card-title text-center">MULTI LANGUAGE SUPPORT</h3>
              <p class="card-text text-center">English language support for voice, chat and email services. Regional language support available at reasonable
                rates.
              </p>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h3 class="card-title text-center">CRM TOOLSETS</h3>
              <p class="card-text text-center">Use our CRM and connectivity with your company branding, or we can integrate with your systems.</p>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h3 class="card-title text-center">LOW COST REGIONS</h3>
              <p class="card-text text-center">Utilizing low cost regions ensures you a great price on professional teams without sacrificing professional
                service.
              </p>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h3 class="card-title text-center">DATA ANALYTICS</h3>
              <p class="card-text text-center">Focus on continual improvement through advanced data analytics to drive issue resolution and customer satisfaction
                rates.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Service end-->

  <!--Team start -->
  <!-- <section id="team" class="team">
    <div class="container">
      <div class="team-details">
        <div class="project-header team-header text-center">
          <h2 class="text-center">Meet your solution team</h2>
          <h3 class="text-center">
            Ensuring Your Success
          </h3>
        </div>
        <div class="team-card">
          <div class="container">
            <div class="card-columns text-center">
              <div class="card">
                <img class="card-img-top" src="./assets/images/team/team4.png" alt="Card image cap">
                <div class="card-body">
                  <h3 class="card-title">Paul Hartley</h3>
                  <p class="card-text">Consulting Director of Site Operations</p>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" src="./assets/images/team/team3.png" alt="Card image cap">
                <div class="card-body">
                  <h3 class="card-title">Raymund Nilo</h3>
                  <p class="card-text">Consulting Director of Technology</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!--Team end-->

  <!-- Team Members of the Month Start -->
  <section id="team-month">
    <div class="container-fluid">
      <div class="row">
        <h1 class="text-center pt-5 pb-3">Team Members of the Month</h1>
        <div class="card-deck text-center">
          <div class="card" id="last-month">
            <img class="card-img-top" id="best-mem" src="./assets/images/logo/template.png" alt="Card image cap">
            <div class="card-body">
              <h3 class="card-title">Employee Name</h3>
              <p class="card-text">Employee Position</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="card-columns text-center">
          <div class="card" id="last-two-months">
            <img class="card-img-top" src="./assets/images/logo/template.png" alt="Card image cap">
            <div class="card-body">
              <h3 class="card-title">Employee Name</h3>
              <p class="card-text">Employee Position</p>
            </div>
          </div>
          <div class="card" id="last-three-months">
            <img class="card-img-top" src="./assets/images/logo/template.png" alt="Card image cap">
            <div class="card-body">
              <h3 class="card-title">Employee Name</h3>
              <p class="card-text">Employee Position</p>
            </div>
          </div>
          <div class="card" id="last-four-months">
            <img class="card-img-top" src="./assets/images/logo/template.png" alt="Card image cap">
            <div class="card-body">
              <h3 class="card-title">Employee Name</h3>
              <p class="card-text">Employee Position</p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
  <!-- Team Members of the Month End -->
  <?php include 'assets/views/includes/main/footer.php'; ?>
  <?php include 'assets/views/includes/main/scripts.php'; ?>
</body>

</html>