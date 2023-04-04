<!-- <?php
      session_start();
      if(isset($_POST['suggestion-but'])){
        header("Location: index.php");
      }

?> -->
<!DOCTYPE html>
<html>

<head>
  <!-- <meta charset="utf-8"> -->
  <title>FnF</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;900&family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">

  <!-- CSS stylesheets -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="Fresh n Fit/css/styles.css">

  <!-- fot awesome cdn -->
  <script defer src="http://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- BootStraap Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <!-- fevicon for fnf -->
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
  <link rel="manifest" href="site.webmanifest">
</head>

<body>

  <section id="title">
    <div class="container-fluid">

      <!-- Nav Bar -->

    <nav class="navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand" href="">FnF</a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
          <li class="nav-item">
              <a class="nav-link" href="#footer">Contact</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#pricing">Pricing</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#cta">Download</a>
          </li>
      </ul>
   </div>
  </nav>


    <!-- Title -->

    <div class="row">
      <div class="col-lg-6">
        <div>
          <h1>Eat Fresh and Stay Fit.</h1>
          <button type="button" class="btn btn-dark btn-lg download-button"><i class="fab fa-apple"></i> Download</button>
          <button type="button" class="btn btn-outline-light btn-lg download-button"><i class="fab fa-google-play"></i> Download</button>
        </div>
      </div>
      <div class="col-lg-6">
        <!--<div>-->
            <div class="rectangular"></div>
            <img class="title-image-diet2" src="Fresh n Fit/images/title-image-diet2.jpeg" alt="iphone-mockup">
            <img class="title-image-food" src="Fresh n Fit/images/title-image-food.jpg" alt="iphone-mockup">
          
        <!--</div>-->
      </div>
    </div>

    </div>

    
    

  </section>


  <!-- Features -->

  <section id="features">

    <div class="row">

      <div class="feature-box col-lg-4">
        <i class="icon fas fa-check-circle fa-4x"></i>
        <h3>Easy to use.</h3>
        <p>So easy to use.</p>
      </div>

      <div class="feature-box col-lg-4">
        <i class="icon fas fa-fire fa-4x"></i>
        <h3>Track calories</h3>
        <p>#####################</p>
      </div>
      <div class="feature-box col-lg-4">
        <i class="icon fas fa-heart fa-4x"></i>
        <h3>Stay Fit</h3>
        <p>####################</p>
      </div>

    </div>

  </section>


  <!-- Testimonials -->

  <section id="testimonials">
    <div id="testimonial-carousel" class="carousel slide" data-ride="false">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <h2>Never thought that the mix of technology and humans will work in this way in fitness sector. Anyone looking for the same, should opt for Fnf</h2>
          <img class="testimonial-image" src="Fresh n Fit/images/keval.jpg" alt="dog-profile">
          <em>keval, Changa</em>
        </div>
        <div class="carousel-item">
          <h2 class="testimonial-text">Amazing platform for self transformation, I am using this app from 2 years. Coaches are very much helpful in guiding and motivating all the time......</h2>
          <img class="testimonial-image" src="Fresh n Fit/images/lady-img.jpg" alt="lady-profile">
          <em>Shivang, Changa</em>
        </div>
      </div>
      <a class="carousel-control-prev" href="#testimonial-carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#testimonial-carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
  </section>


  <!-- Press -->

  <section id="press">
    <img class="press-image" src="Fresh n Fit/images/techcrunch.png" alt="tc-logo">
    <img class="press-image" src="Fresh n Fit/images/tnw.png" alt="tnw-logo">
    <img class="press-image" src="Fresh n Fit/images/bizinsider.png" alt="biz-insider-logo">
    <img class="press-image" src="Fresh n Fit/images/mashable.png" alt="mashable-logo">

  </section>


  <!-- Pricing -->

  <section id="pricing">

    <h2>A Plan for Every one's Needs</h2>
    <p>Simple and affordable price plans for your and your dog.</p>
<div class="row">
  <div class="col-lg-4 col-md-6">
    <div class="card">
      <div class="card-header">
        <h3>Normal</h3>
      </div>
      <div class="card-body">
        <h2>Free</h2>
        <p>Tracking calories</p>
        <p>some basic exercises</p>
        <p>some good recipes</p>
        <button type="button" onclick="location.href='index.php'" class="btn btn-lg btn-block btn-outline-success">Sign Up</button>
      </div>
    </div>
  </div>

  <div class="col-lg-4 col-md-6">
    <div class="card">
      <div class="card-header">
        <h3>Advance</h3>
      </div>
      <div class="card-body">
        <h2>$49 / mo</h2>
        <!-- <p>Tracking calories</p> -->
        <p>Full weekwise diet plan with basic recipes</p>
        <p>some basic exercises</p>
        <button type="button" class="btn btn-lg btn-block btn-success">Sign Up</button>
      </div>
    </div>
  </div>

  <div class="col-lg-4">
    <div class="card">
      <div class="card-header">
        <h3>Pro</h3>
      </div>
      <div class="card-body">
        <h2>$99 / mo</h2>
        <!-- <p>Tracking calories</p> -->
        <p>Full weekwise diet plan with basic recipes</p>
        <p>Full weekwise exercise plan</p>
        <button type="button" class="btn btn-lg btn-block btn-success">Sign Up</button>
      </div>
    </div>
  </div>

</div>


  </section>


  <!-- Call to Action -->

  <section id="cta">

    <h3 class="cta-heading"><em>Eat <b>Fresh</b>,Track your calories and Stay <b>Fit</b>.</em></h3>
    <button type="button" class="btn btn-dark btn-lg download-button"><i class="fab fa-apple"></i> Download</button>
    <button type="button" class="btn btn-outline-light btn-lg download-button"><i class="fab fa-google-play"></i> Download</button>

  </section>


  <!-- Footer -->

  <footer id="footer">
    <i class="fab fa-facebook-f social-icon"></i>
    <i class="fab fa-twitter social-icon"></i>
    <i class="fab fa-instagram social-icon"></i>
    <i class="fas fa-envelope social-icon"></i>
    <p>© Copyright TinDog</p>

  </footer>


</body>

</html>
