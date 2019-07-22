<?php 
include("entete.php");

?>

<body>
<header>

<img class="img-fluid" src="logobernardov2.png" alt="logo" >

</header>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarColor02">

<ul class="navbar-nav mr-auto">

<li class="nav-item active">
<a class="nav-link" href="bootstrap.html">Accueil <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Boutique</a>
</li>
<li class="nav-item">
<a class="nav-link" href="Tableau.html">Tableau</a>
</li>
<li class="nav-item">
<a class="nav-link" href="Contact.html">Contact</a>
</li>
</ul>
<form class="form-inline my-2 my-lg-0">
<input class="form-control mr-sm-2" type="text" placeholder="Search">
<button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
</form>
</div>
</nav>
<div class="container">
<div class="row">
<div class="col-md-9 col-xs-12">

<h2 class="text-center">Accueil</h2>



<div id="carousel" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
<li data-target=".carousel" data-slide-to="0" class="active"></li>
<li data-target=".carousel" data-slide-to="1"></li>
<li data-target=".carousel" data-slide-to="2"></li>
</ol>
<div class="carousel-inner">
<div class="carousel-item active">
<img class="d-block w-100" src="herme3.png">
<div class="carousel-caption">
<h5>Andrée le Bernard sur une branche</h5>
</div>
</div>
<div class="carousel-item">
<img class="d-block w-100" src="herme.png" >
<div class="carousel-caption">
<h5>Andrée à la plage</h5>
</div>
</div>
<div class="carousel-item">
<img class="d-block w-100" src="herme2.png">
<div class="carousel-caption">
<h5>Andrée regardant ses enemis droit dans les yeux, le coeur vaillant</h5>
</div>
</div>
</div>
<a class="carousel-control-prev" href="#carousel" data-slide="prev">
<span class="carousel-control-prev-icon"aria-hidden="true"></span>
<span class="sr-only">Précedent</span>
</a>
<a class="carousel-control-next" href="#carousel" data-slide="next">
<span class="carousel-control-next-icon"aria-hidden="true"></span>
<span class="sr-only">Suivant</span>
</a>
</div>
<div class="para">
<h4>L'entreprise</h4>
<p>Notre entreprise familiale met tout son savoir-faire à votre disposition dans le domaine du jardin et du paysagisme.</p>
<p>Créée il y a 70 ans, notre entreprise vend fleurs, arbustes, matériel à main et motorisés.</p>
<p>Implantés à Amiens, nous intervenons dans tout le département de la Somme : Albert, Doullens, Péronne, Abbeville, Corbie</p>
<h4>Qualité</h4>
<p>Nous mettons à votre disposition un service personnalisé, avec 1 seul interlocuteur durant tout votre projet.</p>
<p>Vous serez séduit par notre expertise, nos compétences et notre sérieux.</p>
<h4>Devis gratuit</h4>
<p>Vous pouvez bien sûr contacter pour de plus amples informations ou pour une demande d’intervention.<br> Vous souhaitez un devis ? Nous vous le réalisons gratuitement.</p>
</div>
</div>
    
    
    
    
    
    
    
     <div id="test" class="col-md-3 col-xs-0">
     <aside>
    
     <nav id="navbar-example2" class="navbar navbar-light bg-dark">
  <h3 class="navbar-brand text-white">Articles de la semaine</h3>
    
</nav>
<div data-spy="scroll" data-target="#navbar-example2" data-offset="0" class="scrollspy-example">
  <h4>Festival des coquilles cintrés</h4><br>
  <h6>Le festival des coquilles cintrés se tiendra comme à son habitude<br>au palais des crustacés ce samedi 5 juin....</h6>
  <a href="Tableau.html" class="article entier text-primary">lire la suite...</a>
  <hr>
  <h4>NEWS FLASH: Hausse de suicide des Charlotte</h4><br>
  <h6>La suicidologie des prénoms est une science rare et exact comme une petite <br> fleur dans les champ, dont le doux parphum nous ennivre pour au final<br> nous briser la nuque....</h6>
   <a href="Tableau.html" class="article entier text-primary">lire la suite...</a>
  </div>
    
    
     </aside>
     </div>
     </div>
</div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
<?php 
include("piedepage.php");
?>
<footer class="bg-dark text-white">
<ul class="Footer">
<li><a href="" title="Mentions légales">Mentions Légales</a></li>
<li><a href="" title="Horaires">Horaires</a></li>
<li><a href="" title="Plan du site">Plan du site</a></li>
</ul>
</footer>
</html>