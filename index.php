<!DOCTYPE <!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>eLibrary</title>
  <!--Favicon-->
  <link rel="shortcut icon" href="images/favicon.png" />
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Montserrat Font -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <!--Search Icon-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Custom styles for this template -->
  <link href="css/main.css" rel="stylesheet">
  <link rel="stylesheet" href="css/alertify-css/alertify.min.css">
  <link rel="stylesheet" href="css/alertify-css/themes/default.min.css">
</head>

<body id="page-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
          <span style=color:red>e</span>Library
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#page-top">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Services</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--Carousel-->
    <header>
      <div class="Welcome">
        <h1>Welcome to your Digital Library</h1>
      </div>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('images/background2.jpg')">

          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('images/background1.jpg')"> </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('images/background.jpg')"></div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>
    <!--About Section-->
    <section id="about" class="masthead text-center d-flex flex-column justify-content-center text-align-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>About this page</h2>
            <p class="lead">This is a digital Library developed for a university project. It helps you keep a list of books by simply store
              them and retrieve them.
            </p>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#services">Find out more</a>
          </div>
        </div>
      </div>
    </section>
    <!--Services Section-->
    <section id="services" class="masthead text-center d-flex flex-column justify-content-center text-align-center">
      <div class="container">
        <h2>Services we offer</h2>
        <div class="row">
          <div class="col-lg-6 mx-auto">
            <p class="lead">Store a specific book</p>
            <a class="nav-link js-scroll-trigger" id="servicesButton" href="#store">Store</a>
          </div>
          <div class="col-lg-6 mx-auto">
            <p class="lead">Search for a book</p>
            <a class="nav-link js-scroll-trigger" id="servicesButton" href="#search">Search</a>
          </div>
        </div>
      </div>
    </section>
    <!--Store Section-->
    <section id="store" class="masthead text-center d-flex flex-column justify-content-center text-align-center">
      <div class="container">
        <h3>New book information</h3>
        <form id="storeForm" name="storeBook" action="Javascript:send()">
          <div class="row">
            <div class="col-lg-12 mx-auto">
              <label>Author :</label>
              <input type="text" name="author" id="author" placeholder="Enter author.." required>
            </div>
            <div class="col-lg-12 mx-auto">
              <label>Title :</label>
              <input type="text" name="title" id="title" placeholder="Enter title.." required>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 mx-auto">
              <label>Genre :</label>
              <select id="genre" name="genre">
                <option value="Science fiction">Science fiction</option>
                <option value="Satire">Satire</option>
                <option value="Drama">Drama</option>
                <option value="Action and Adventure">Action and Adventure</option>
                <option value="Romance">Romance</option>
                <option value="Mystery">Mystery</option>
                <option value="Horror">Horror</option>
                <option value="Technology & Programming">Technology & Programming</option>
              </select>
            </div>
            <div class="col-lg-12 mx-auto">
              <label>Price :</label>
              <input type="text" name="price" id="price" placeholder="Enter price..">
            </div>
          </div>
          <input type="submit" value="Submit">
        </form>
      </div>
      <div id="result" class="masthead text-center d-flex flex-column justify-content-center text-align-center">
      </div>
    </section>
    <!--Search Section-->
    <section id="search" class="masthead text-center d-flex">
      <div class="container">
        <h3>Give me a keyword for the book</h3>
        <!--Seach Div-->
        <div class="row">
          <form id="searchForm" name="myform" action="Javascript:select()">
            <div class="col-lg-12 mx-auto">
              <input id="searchParam" type="text" placeholder="Search.." name="search">
              <input type="submit" value="Find">
            </div>
          </form>
        </div>
        <!--Result Div-->
        <div class="container">
          <div id="results" class="row"></div>
        </div>
      </div>
    </section>


  <!-- Footer -->
  <footer>
    Copyright &copy;
    <span style=color:red>e</span>Library 2018
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="js/alertify.js"></script>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- Custom JavaScript for this theme -->
  <script src="js/scrolling-nav.js"></script>
  <script src="js/main.js"></script>
  
</body>

</html>