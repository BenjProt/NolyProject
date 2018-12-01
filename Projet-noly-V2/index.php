<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noly l'exploratrice</title>
 
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great|Homemade+Apple|Nothing+You+Could+Do" rel="stylesheet">
  </head>
    
  <body>
    <div id='wrapper'>
        <header>
           <nav id='burger' role="navigation">
              <div id="menuToggle">
                <!--
                A fake / hidden checkbox is used as click reciever,
                so you can use the :checked selector on it.
                -->
                <input type="checkbox" />

                <!--
                Some spans to act as a hamburger.

                They are acting like a real hamburger,
                not that McDonalds stuff.
                -->
                <span></span>
                <span></span>
                <span></span>

                <!--
                Too bad the menu has to be inside of the button
                but hey, it's pure CSS magic.
                -->
                <ul id="menu">
                  <a href="index.php"><li>Accueil</li></a>
                  <a href="pages/journal.php"><li>Journal d'aventures</li></a>
                  <a href="#"><li>Contact</li></a>
                  
                </ul>
              </div>
            </nav>
            <ul class="nav justify-content">
              <li class="nav-item">
                <a class="nav-link " href="index.php">Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="pages/journal.php">Journal d'aventures</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="#">Contact</a>
              </li>
            </ul>
            <div class='title'>
                <h1 class='titre-blog'>Noly l'exploratrice</h1>
            </div>
        </header>
        <main>
            <div class='presentation'>
                <img id='pp' src="pic/40860505_10215616985793642_154107111662419968_n.jpg"  alt="Noly"><br><br>
                <div class='pres-text'>
                    <h1 id='titre-pres'>Bien le bonjour !</h1>
                    <p id='texte-pres'>     Je suis Gwen. Exploratrice du comportement humain. La remise en question des héritages culturels et de ses acquis me passionne. <br>
                    Cela apporte à ma vie des discussions riches, et m’aide à trouver mon équilibre et ma façon de vivre. <br>
                    Curieuse du monde, je continue mon étude et souhaite voyager tout au long de ma vie, sans oublier de « cultiver mon jardin ».. <br>
                    Si ça vous dit, faites un tour avec moi. <br>
                    On peut tous prendre exemple sur l’amour et le bonheur: partager et savoir plus.</p>
                </div>
            </div>
           
        </main>
    
    </div>
      
 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../Projet-noly-V2/js/bootstrap.min.js"></script>
  </body>
</html>