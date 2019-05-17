<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta name="title" content="Ilya - l'équipe">
    <meta name="description" content="présentation de l'équipe composant Ilya">
    <?php $page='equipe' ?>
    <?php include('included_contents/head.html'); ?>
    <?php include('included_contents/model.php'); ?>
  </head>

  <body>
    <?php include('included_contents/navbar.php'); ?>
    <?php
      if (isset($_GET['formsend'])) {?>
        ​<script>
          $(document).ready(function(){
            $('#modal_candidature').modal('show');
          });
        </script>
    <?php  }?>

    <section id="boxequipe">
      <div class="maincontainer">
        <p class="equipe_presentation"><b>L</b>e projet est né suite à différents engagements associatifs au sein de l'INSA de Toulouse. D'abord membres de l'association Toulouse Ingénierie Multidisciplinaire (TIM, conception et fabrication de véhicules ultra-économes en énergie), puis de l'association Green'INSA (sensibilisation au développement durable), nous avons tous les trois participé à la création de l'association Ingénieurs pour Demain de l'INSA de Toulouse. L'association a pour objectif de sensibiliser les étudiants ingénieurs à l'impact social et environnemental qu'ils peuvent avoir avec leur métier d'ingénieur. C'est justement cet impact positif qui nous a poussé à entreprendre. Nous voulons mettre au service de la société et l'environnement nos compétences et participer à l'effort collectif pour sauver le monde !</p>
        <div class="row">
          <div class="col-md">
            <img src="images/equipe/Antoine_Escande.JPG" alt="">
            <h4>Antoine Escande</h4>
            <p>Diplômé en Génie Mécanique de l'INSA de Toulouse et spécialisé dans l'énergie.</p>
          </div>
          <div class="col-md">
            <img src="images/equipe/Nathan_Guiraud.jpg" alt="">
            <h4>Nathan Guiraud</h4>
            <p>Étudiant en Génie Biologique à l'INSA de Toulouse.</p>
          </div>
          <div class="col-md">
            <img src="images/equipe/Simon_Buoro.png" alt="">
            <h4>Simon Buoro</h4>
            <p>Diplômé en Génie Mécanique de l'INSA de Toulouse et diplômé d'un Master en Management de l'Innovation de Toulouse School of Management.</p>
          </div>
        </div>
      </div>
    </section>

    <section id="offres_emploi">
      <div class="maincontainer">
        <h1>Nous recherchons des talents</h1>
        <div class="row">
          <div class="col-md-5">
            <h5 id="titre_poste">Etudiant(e) ou jeune diplômé(e) en électronique, informatique</h5>
            <!-- Button trigger modal -->
            <button type="button" id="postuler_btn" class="btn btn-success" data-toggle="modal" data-target="#modal_candidature">Postuler</button>

            <!-- Modal -->
            <div class="modal fade" id="modal_candidature" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Postuler</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="equipe.php?formsend=1" method="post" enctype="multipart/form-data">
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label id="test">Nom</label>
                          <input type="text" class="form-control" placeholder="Jean" name="name" pattern=".{2,150}" title="2 caractères minimums" required>
                        </div>
                        <div class="form-group col-md-6">
                          <label>Prénom</label>
                          <input type="text" class="form-control" placeholder="Michel" name="firstname" pattern=".{2,150}" title="2 caractères minimums" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Mail</label>
                        <input type="email" class="form-control" aria-describedby="emplacement_mail" placeholder="example@google.com" name="mail" required>
                      </div>
                      <div class="form-group">
                        <label>Lettre de motivation</label>
                        <textarea class="form-control" rows="4" placeholder="(optionelle)" name="motivation" maxlength="50000" title="lettre de motivation dépasse la taille max"></textarea>
                      </div>
                      <div class="form-group">
                        <label>Ajoutez votre CV</label>
                        <input type="file" class="form-control-file" placeholder="test" name="cv" required>
                      </div>
                      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <?php
                    if (!empty($_POST['name']) && !empty($_POST['firstname']) && !empty($_POST['mail']) && !empty($_FILES['cv'])) {
                      if (checkcv($_FILES['cv'])) {
                        sendmail($_POST['name'], $_POST['firstname'], $_POST['mail'], $_POST['motivation'], $_FILES['cv']);
                      }
                    }
                    ?>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="col-md-7">
            <h6>Dans le cadre du développement d’un produit pour un projet entrepreneurial (ILYA), nous sommes à la recherche d’un(e) étudiant(e) ou jeune diplômé(e) motivé(e) pour nous aider à développer notre produit.</h6>
            <p>
              Il s’agit d’un boîtier de calcul de consommation d’eau et d’énergie de la douche. Dans l’idéal le boîtier peut communiquer avec une application mobile et les données mesurées sont stockées dans une base de données.
              <br><br><b> Les compétences recherchées sont les suivantes :</b>
            </p>
            <ul>
              <li>électronique : Arduino, Raspberry Pi…</li>
              <li>programmation : C++, Python…</li>
              <li>IoT : Bluetooth, WiFi…</li>
              <li>mise en place d’un serveur de base de données</li>
              <li>développement d’appli Android+iOS</li>
            </ul>
            <p>
              Si vous vous sentez l’âme d’un entrepreneur ou que vous kiffez développer des produits innovants, n’hésitez pas à nous contacter.
              Vous avez envie de prendre part à l’aventure entrepreneuriale mais vous n’avez pas toutes les compétences décrites ci-dessus ? N’hésitez pas à nous contacter tout de même : on pourra trouver ensemble un projet à développer avec vos compétences !
            </p>
          </div>
        </div>
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
