<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta name="author" content="Paul McQuade">
<meta name="description" content="My Website">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Interests</title>

  <?php include('content/header.php'); ?>

<body>
  <nav class="navbar navbar-inverse sidebar" role="navigation">
    <a class="navbar-brand" href="index.php">Paul McQuade</a>
    <div class="icon-bar">
      <a href="index.php"><i class="fa fa-home"></i></a>
      <a href="travel.php"><i class="fa fa-photo"></i></a>
      <a href="code.php"><i class="fa fa-code"></i></a>
      <a class="active" href="study.php"><i class="fa fa-book"></i></a>
      <a href="interests.php"><i class="fa fa-check"></i></a>
    </div>
  </nav>

<!-- Content goes here -->
    <div class="container">
    <div class="row">
    <div class="row">
    <header class="col-md-12 text-center">
    <h1>Paul McQuade - Studying</h1>
    <h2>What have I been doing with my life?</h2>
    </header>
            <div class="col-md-12 col-sm-24 col-xs-48">
               <h3>Studying</h3>
               I'm currently studying "Retail Practice" QQI Level 5 Course at EVE Plantmarket, Lusk Co.Dublin.
               I studied "Computer Architecture" and "Computer Programming" at Roslyn Park Sandymount, Dublin 4.
               I studied "Electronics Engineer" in IT Tallaght - Dublin (ITD) in Ireland.
               I did my Leaving Certificate in Fingal Community College.

              </div>
        </div>
    </div>
  </div>


    <div class="slideshow-container">

    <div class="mySlides fade">
      <div class="numbertext">1 / 2</div>
      <img src="img/study1.jpg" style="width:100%">
      <div class="text">Photo: IT Tallaght - Dublin</div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">2 / 2</div>
      <img src="img/study2.jpg" style="width:100%">
      <div class="text">Photo: Roslyn Park Sandymount, Dublin 4</div>
    </div>

    </div>
    <br>

    <div style="text-align:center">
      <span class="dot"></span>
      <span class="dot"></span>
    </div>

    <?php include('content/footer.php'); ?>
</body>
</html>
