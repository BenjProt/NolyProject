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
                  <a href="../index.php"><li>Accueil</li></a>
                  <a href="journal.php"><li>Journal d'aventures</li></a>
                  <a href="#"><li>Contact</li></a>
                  
                </ul>
              </div>
            </nav>
            <ul class="nav justify-content">
              <li class="nav-item">
                <a class="nav-link " href="../index.php">Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="journal.php">Journal d'aventures</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="#">Contact</a>
              </li>
            </ul>
            <div class='title'>
                <h1 class='titre-blog'>Noly l'exploratrice</h1>
            </div>
        </header>