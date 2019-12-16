<?php include 'build/partials/header.php'; ?>

<section class="jumbotron text-center color-gray">
  <div class="container">
    <form class="searchPage">
      <div class="form-row">
        <div class="col">
          <input type="text" id="search-taggle" class="form-control-search form-control-xlg" placeholder="Search For Recipes..." aria-describedby="searchHelp" autocomplete="off">
          <small id="searchHelp" class="form-text text-muted text-left">Seperate your search with a comma for a better result - e.g: cucumber, tomato</small>
        </div>
        <div class="col-2">
          <button type="submit" class="form-control form-control-xlg primary">Search</button>
        </div>
      </div>
    </form>
  </div>
</section>

<div class="search py-5 bg-light">
  <div class="container">

    <div class="row">
      <?php

      $x = 1;

      while ($x <= 9) {
        echo '<div class="col-md-4">
            <div class="card mb-4 box-shadow like">
              <img class="card-img-top" src="build/img/recipe.jpg" alt="Card image cap">
              <span>' . (rand(1, 999)) . ' <i class="fas fa-heart"></i></span>
              <div class="card-body">
                <p class="card-text">
                  <div class="row">
                    <div class="col-sm-8">
                      <h3>Title of the recipe 
                      in two lines, 
                      in three lines 
                      and in four lines</h3>
                    </div>
                    <div class="col-sm-4">
                      <p class="ingredients-header">Includes:</p>
                      <ul>
                        <li>Ingredient 1</li>
                        <li>Ingredient 2</li>
                        <li>Ingredient 3</li>
                        <li>Ingredient 4</li>
                      </ul>
                      <p>and <span>' . (rand(1, 30)) . '</span> more</p>
                    </div>
                  </div>
                </p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                  <small class="text-muted">Created By <a href="#">Remy</a></small>
                  </div>
                  <small class="text-muted">' . (rand(1, 60)) . ' mins ago</small>
                </div>
              </div>
            </div>
          </div>';
        $x++;
      }

      ?>
    </div>
  </div>
</div>
<?php include 'build/partials/footer.php'; ?>