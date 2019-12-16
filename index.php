<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
  <script src="https://kit.fontawesome.com/6bf9fe3291.js" crossorigin="anonymous"></script>

  <title>Fridgo - Delicious Recipes</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">

  <!-- Bootstrap core CSS -->
  <link href="build/css/bootstrap.css" rel="stylesheet">
  <link href="build/css/style.css" rel="stylesheet">
</head>

<body>

  <header>
    <div class="d-flex flex-column flex-md-row align-items-center shadow-sm p-header mb-0 bg-white rounded">
      <div class="logo"></div>
      <nav class="navigation">
        <a class="p-2 text-dark" href="index.php">Home</a>
        <a class="p-2 text-dark" href="search.php">Search</a>
        <a class="p-2 text-dark" href="#">Recipes</a>
        <a class="btn btn-outline-primary" href="#">Login</a>
      </nav>
    </div>
  </header>

  <main role="main">
    <div class="search-wrapper">
      <div class="container">
        <form class="searchForm">
          <div class="form-row">
            <div class="col-sm-12 col-lg-10 mb-2">
              <input type="text" id="search-taggle" class="form-control-search form-control-xlg" placeholder="Search For Recipes..." aria-describedby="searchHelp" autocomplete="off">
              <small id="searchHelp" class="form-text text-muted-white text-left d-none d-xl-block">Seperate your search with a comma for a better result.</small>
            </div>
            <div class="col-sm-12 col-lg-2 mb-2">
              <button type="submit" class="form-control-search form-control-xlg primary">Search</button>
            </div>
          </div>
        </form>
      </div>
    </div>

  </main>

  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="build/js/jquery.min.js"></script>
  <script src="build/js/popper.min.js"></script>
  <script src="build/js/bootstrap.min.js"></script>
  <script src="build/js/scripts.js"></script>
</body>

</html>