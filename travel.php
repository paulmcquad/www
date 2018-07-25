<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta name="author" content="Paul McQuade">
<meta name="description" content="My Website">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Travel</title>

  <?php include('content/header.php'); ?>

<body>
  <nav class="navbar navbar-inverse sidebar" role="navigation">
    <a class="navbar-brand" href="index.php">Paul McQuade</a>
    <div class="icon-bar">
      <a href="index.php"><i class="fa fa-home"></i></a>
      <a class="active" href="travel.php"><i class="fas fa-images"></i></a>
      <a href="code.php"><i class="fa fa-code"></i></a>
      <a href="study.php"><i class="fa fa-book"></i></a>
      <a href="interests.php"><i class="fa fa-check"></i></a>
    </div>
  </nav>


<!-- Content goes here -->
    <div class="container">
    <div class="row">
    <div class="row">
    <header class="col-md-12 text-center">
    <h1>Paul McQuade -Travel</h1>
    <h2>What have I been doing with my life?</h2>
    </header>
    <div class="col-md-12 col-sm-24 col-xs-48">
    <h3>Travelling</h3>
    I have been to Málaga - Spain, Rock of Gibraltar, London - UK and New York USA.
    I would love to travel more and maybe see Paris, France and Berlin, Germany.
            </div>
        </div>
    </div>
  </div>

  <div class="slideshow-container">

  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="img/paul1.jpg" style="width:100%">
    <div class="text">Photo: London Bridge</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="img/paul2.jpg" style="width:100%">
    <div class="text">Photo: Piccadilly Circus, London</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="img/paul3.jpg" style="width:100%">
    <div class="text">Photo: United Nations, NYC</div>
  </div>

  </div>
  <br>

  <div style="text-align:center">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
  </div>

  <?php include('content/footer.php'); ?>
</body>
</html>
