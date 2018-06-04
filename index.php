<?php
ini_set('display_errors','on');
error_reporting(E_ALL);



if(isset($_POST['submit'])){
$options=array(
       'name' => FILTER_SANITIZE_STRING,
       'firstname' => FILTER_SANITIZE_STRING,
       'mail' => FILTER_VALIDATE_EMAIL,
       'message' => FILTER_SANITIZE_STRING);


$data = filter_input_array(INPUT_POST, $options);


function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
}

     /* pas oublier ce if .. sinon le formulaire s'envoie auto dés qu'on charge mla page, sans données */
     if (isset($_POST['submit'])) {
       $nom=($_POST['name']);
       $prenom=($_POST['firstname']);
       $mail=($_POST['mail']);
       $message=($_POST['message']);
       $form_mail ="De : $prenom $nom \n";
       $form_mail .= "Email : $mail\n";
       $form_mail .= "Message : $message\n";

       mail("david.thewissen@gmail.com","Contact Stage","$form_mail","From: $nom");

     }

 ?>


<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="mini-icon.png" />
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Dosis|Open+Sans" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <link rel="stylesheet" href="font-awesome-animation.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="script.js"></script>

  <title>SpaDavid</title>
</head>

<body>


<div id="startscreen">
  <div id="title">Welcome, have a seat !</div>
  <div id="triangle-down"></div>
  <div id="triangle-up"></div>
  <button id="button">⟷</button>
</div>

<div id="menuContent">
  <ul>
    <li class="themenu"><a href=".section1">HELLO !</a></li>
    <li><a href=".section2">VOUS</a></li>
    <li><a href=".section3">MOI</a></li>
    <li><a href=".section4">NOUS ?</a></li>
    <li><a href=".section5">CONTACT</a></li>
  </ul>
  <div id="menuClose">✕</div>
</div>

<div>
  <section class="section1">
    <section class="hello">
    <h1><div class="hidden" id="small">Hello </div> SPADA</h1>
    <h1 class="hidden">SPADAVID</h1>
    <h1><div class="hidden" id="small2">I'm </div> DAVID</h1>
    <div class="middle">
      <a href=".section2" class="button"><i class="fas fa-angle-double-down"></i></a>
    </div>
    </section>
  </section>
  <section class="section2">
    <h2  class="vibrate-3">VOUS</h2>
    <div class="middletext">
        <p>... cherchez des stagiaires qui connaissent notamment :</p>
        <ul class="fa-ul">
          <li class="faa-parent animated-hover"><span class="fa-li faa-horizontal"><i class="fas fa-check-square "></i></span>HTML/CSS</li>
          <li class="faa-parent animated-hover"><span class="fa-li faa-horizontal"><i class="fas fa-check-square "></i></span>PHP</li>
          <li class="faa-parent animated-hover"><span class="fa-li faa-horizontal"><i class="fas fa-check-square "></i></span>JavaScript</li>
          <li class="faa-parent animated-hover"><span class="fa-li faa-horizontal"><i class="fas fa-check-square "></i></span>JQuery</li>
          <li class="faa-parent animated-hover"><span class="fa-li faa-horizontal"><i class="fas fa-check-square "></i></span>WordPress</li>
        </ul>
        <p>Ca tombe bien : graçe à BeCode, j'ai appris ces technologies, et plus encore !</p>
        <p>Si je suis amené à faire un stage chez vous, je me pencherai sur Bootstrap, MODX et Prestashop</p>
      <div class="middle">
        <a href=".section3" class="button"><i class="fas fa-angle-double-down"></i></a>

      </div>
    </div>
  </section>
  <section class="section3">
    <h2 class="vibrate-3">MOI</h2>
    <div class="middletext">
      <p>Lors <a title="Communication digitale au CEPEGRA de Gosselies" class="link" target="_blank" href="https://formation-cepegra.be/formation/responsable-de-communication-web/">
        d’une précédente formation</a> j’ai eu des cours de référencement, marketing et écriture web, gestion de projet web ...</p>
      <p>De plus à BeCode, j’ai ete formé à MySQL, React, Git et j’ai participé à la refonte du site du Musée de la Photographie de Mont/Sur/Marchienne (à paraître bientôt)</p>
      <h3>Soft skills : </h3>
      <ul class="fa-ul">
        <li class="faa-parent animated-hover"><span class="fa-li faa-spin"><i class="fas fa-thumbs-up "></i></span>Sociable et dynamique</li>
        <li class="faa-parent animated-hover"><span class="fa-li faa-spin"><i class="fas fa-thumbs-up "></i></span>Résistant au stress</li>
        <li class="faa-parent animated-hover"><span class="fa-li faa-spin"><i class="fas fa-thumbs-up "></i></span>Assertif</li>
        <li class="faa-parent animated-hover"><span class="fa-li faa-spin"><i class="fas fa-thumbs-up "></i></span>Curieux</li>

      </ul>
      <div class="middle">
      <a href=".section4" class="button"><i class="fas fa-angle-double-down"></i></a>
      </div>
    </div>
  </section>
  <section class="section4">
    <h2 class="heartbeat">NOUS ?</h2>
    <section class="middletext">
      <p>Je cherche un chouette stage en web development de 1 à 3 mois, pouvant commencer de mi-aôut à début septembre</p>
      <h3>Pourquoi je pense qu’on ferait une bonne équipe :
      </h3>
      <ul class="fa-ul">
        <li class="big faa-parent animated-hover"><span class="fa-li faa-spin">
          <i class="fas fa-check"></i></span>Je suis sociable mais plus à l’aise dans de petites structures</li>
        <li class="big faa-parent animated-hover"><span class="fa-li faa-spin">
          <i class="fas fa-check"></i></span>J'ai envie de participer au developpement digital de Charleroi</li>
        <li class="big faa-parent animated-hover"><span class="fa-li faa-spin">
          <i class="fas fa-check"></i></span>J’aime bien vos créations et le type de clients (SwitchCoWorking, ImproCarolo, Centre Culturel de Farciennes, Pouic Pouic, ...)</li>
      </ul>
      <div class="middle">
        <a href=".section5" class="button"><i class="fas fa-angle-double-down"></i></a>
      </div>

    </section>

  </section>
  <section class="section5">
    <h2 class="wobble-hor-bottom">CONTACT</h2>
    <div class="contact">
      <form class="form" action="index.php" method="post" >
        <p><label for="name" class="testname">Nom :</label>
          <input type="text" placeholder="Doe" name="name" id="name"required>
        </p>
        <p><label for="firstname" class="testname">Prénom :</label>
          <input type="text" placeholder="Jane" name="firstname" id="firstname"required>
        </p>
        <p><label class="testname" for="email">Mail :</label>
  			  <input type="email" id="mail" name="mail"  placeholder="jane.doe@mail.com" required>
        </p>
        <p><label class="testname" for="message">Message :</label>
    			<textarea name="message" id="message" required>Bonjour David, je vous contacte concernant ...</textarea>
        </p>
  	  	<input type="submit" class="envoi"  name="submit"  value="Envoyer">
    	</form>
      <div class="social">
        <a href="https://www.linkedin.com/in/david-thewissen/"><i class="fab fa-linkedin fa-6x"></i></a>
        <a href="https://github.com/david-thewissen"><i class="fab fa-github-square fa-6x"></i></a>
        <a href="mailto:david.thewissen@gmail.com"><i class="fas fa-envelope-square fa-6x"></i></a>
      </div>
      <h3>PS : j'apporterai du ...<div class="hidden2"> CHOCOLAT ! ! !</div> <div class="visible2">CLICK ME </div> </h3>
      <div class="middlend">
        <a href=".section1" class="button"><i class="fas fa-angle-double-up"></i></a>
      </div>
    </div>
  </section>
</div>
</body>
