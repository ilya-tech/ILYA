<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta name="title" content="Ilya - Notre vision">
    <meta name="description" content="Notre vision et ambitions pour l'avenir.">
    <?php $page='vision' ?>
    <?php include('included_contents/head.html'); ?>
  </head>

  <body>
    <?php include('included_contents/navbar.php'); ?>


    <section id="videopresentation">
      <h1>Notre vision</h1>
      <div class="maincontainer">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/pLNhJOgLoFc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </section>

    <section id="boxpresentation">
      <div class="maincontainer">
        <div class="row">
          <div class="col-md">
            <img src="images/verticalbox_image_test" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-md">
            <div class="image_container">
              <img src="images/verticalbox_image_test" alt="">
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-md">
            <div class="images/verticalbox_image_test">
              <img src="images/verticalbox_image_test" alt="">
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
      </div>
    </section>

    <section id="participer">
      <div class="maincontainer">
        <button type="button" class="btn btn-primary"><h3>Participes dés maintenant</h3></button>
      </div>
    </section>


    <footer>
      <div class="footertext">
        <a href="#">Mention légales </a><small>© ILYA Tous droits réservés</small>
      </div>
    </footer>


    <?php include('included_contents/allscripts.html') ?>
  </body>
</html>
