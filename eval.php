<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Evaluation</title>
</head>
<body>
  <form method="POST">
      <div>
      <h1>Step 1</h1>
          <div>
              <label for="nom">Nom</label>
              <input type="text" name="nom" id="" placeholder="Votre nom" class="input" >
          </div>
          <div >
              <label for="prenom">Prénom</label>
              <input type="text" name="prenom" id="prenom" placeholder="Votre prénom"  class="input">
          </div>
          <div>
              <label for="email">Votre email</label>
              <input type="email" name="email" id="email"  placeholder="Votre email "  class="input">
          </div>
          <div>
              <label for="numero">Numero de telephone</label>
              <input type="number" name="numero" id="numero" placeholder="Votre numero"  class="input">
          </div>
          </div>
              <button type="submit" id="form-submit" class="btn btn-primacy">Next</button>
          </div>
  </form>
</body>
</html>
<?php
session_start();

if(empty($_SESSION['teste'])){
    $_SESSION['teste']=[];
}

if(!empty($_POST['nom']) && (!empty($_POST['prenom'])) && (!empty($_POST['email'])) && (!empty($_POST['numero']))){
    $m =[
        'teste' => $_POST['nom'],
        // "date" => strftime ('%Y-%m-%d %X')
    ];
    array_push($_SESSION['teste'], $m) ;
}


?>
<?php
if(!empty($_SESSION['teste']) && count($_SESSION['teste'])) :?>
    <ul id='teste'>
            <?php foreach ($_SESSION['teste'] as $key => $texts) :?>
                <li class='card'>
                <div class='card-body'><?php echo $texts['teste']; ?></div>
                <!-- <div class="card-footer"><?php //echo $texts['date']; ?></div> -->
            </li>
        <?php endforeach ; ?>
    </ul>
<?php
endif
?>
