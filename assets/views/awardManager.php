<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" type="image/icon" href="../images/logo/favicon.ico">
  <link rel="stylesheet" href="../event-assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../third-party-plugins/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="../event-assets/css/main.css">
  <title>Team Manager</title>
</head>

<body>
  <?php include 'includes/team/navbar.php'; ?>
  <?php include 'includes/team/award-team-member.php'; ?>
  
  <div class="container-fluid">
    <div class="container border-bottom">
      <div class="row justify-content-center">
        <h1>Current Month</h1>
      </div>
    </div>
  </div>
  <section id="team-month">
    <div class="container-fluid">
      <div class="row">
        <div class="card-deck mx-auto text-center">
          <div class="card" id="current-month">
            <!-- <img class="card-img-top" id="best-mem" src="../../assets/images/logo/template.png" alt="Card image cap">
            <div class="card-body">
              <h3 class="card-title">Employee Name</h3>
              <p class="card-text">Employee Position</p>
            </div> -->
          </div>
        </div>
      </div>
      <div class="row">
        <div class="card-columns text-center">
          <div class="card">
            <img class="card-img-top" src="../../assets/images/logo/template.png" alt="Card image cap">
            <div class="card-body">
              <h3 class="card-title">Employee Name</h3>
              <p class="card-text">Employee Position</p>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="../../assets/images/logo/template.png" alt="Card image cap">
            <div class="card-body">
              <h3 class="card-title">Employee Name</h3>
              <p class="card-text">Employee Position</p>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="../../assets/images/logo/template.png" alt="Card image cap">
            <div class="card-body">
              <h3 class="card-title">Employee Name</h3>
              <p class="card-text">Employee Position</p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
  <?php include 'includes/team/scripts.php'; ?>
</body>

</html>