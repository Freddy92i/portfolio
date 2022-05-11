<html>
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta http-equiv="X-UA-Compatible" content="ie=edge" />
      <title>Portfolio</title>
      <meta name="description" content="Portfolio frontend web Developer" />

      <link rel="stylesheet" href="css/style.css" />

      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700;900&display=swap" rel="stylesheet"/>
    </head>

  </html>
    

  <?php include "navbar.php" ?>



  <html>
    <body>
      <section class="home-hero">
        <div class="home-hero__content">
          <h1 class="heading-primary">Saluut, Je m'apelle Freddy Peltier</h1>
          <div class="home-hero__info">
            <p class="text-primary">
              21 ans. Caen. 

            </p>
            <p class="text-primary">
              swipe pour de découvrir d'avantages.
            </p>
          </div>
          <div class="home-hero__cta">
            <a href="./#Projets" class="btn btn--bg">Projets</a>
          </div>
        </div>
        <div class="home-hero__socials">
          <div class="home-hero__social">
            <a href="https://www.linkedin.com/in/freddypeltier" class="home-hero__social-icon-link">
              <img
                src="./assets/png/linkedin-ico.png"
                alt="icon"
                class="home-hero__social-icon"
              />
            </a>
          </div>
          <div class="home-hero__social">
            <a href="https://github.com/Freddy92i" class="home-hero__social-icon-link">
              <img
                src="./assets/png/github-ico.png"
                alt="icon"
                class="home-hero__social-icon"
              />
            </a>
          </div>
          <div class="home-hero__social">
            <a href="https://twitter.com/freddy92i" class="home-hero__social-icon-link">
              <img
                src="./assets/png/twitter-ico.png"
                alt="icon"
                class="home-hero__social-icon"
              />
            </a>
          </div>
          <div class="home-hero__social">
            <a
              href="https://www.instagram.com/freddy92i"
              class="home-hero__social-icon-link home-hero__social-icon-link--bd-none"
            >
              <img
                src="./assets/png/insta-ico.png"
                alt="icon"
                class="home-hero__social-icon"
              />
            </a>
          </div>
        </div>
        <div class="home-hero__mouse-scroll-cont">
          <div class="mouse"></div>
        </div>
      </section>
      <section id="a-propos" class="a-propos sec-pad">
        <div class="main-container">
          <h2 class="heading heading-sec heading-sec__mb-med">
            <span class="heading-sec__main">a-propos</span>
            <span class="heading-sec__sub">
              J'ai 21 ans, je suis en étude d'informatique, spécialisé dans le developpement Web,
              actuellement en bac+2, je m'oriente vers une license CSI (conception de Systeme D'informations)
              pour la rentrée de septembre 2022.
            </span>
          </h2>
          <div class="a-propos__content">
            <div class="a-propos__content-main">
              <h3 class="a-propos__content-title">Apprenez a me connaitre !</h3>
              <div class="a-propos__content-details">
                <p class="a-propos__content-details-para">
                  Salut ! moi c'est 
                  <strong>Freddy Peltier</strong>
                  et je suis  <strong> Frontend Web Developer </strong> Je suis sur Caen. J'ai fais
                  des projets en cours mais aussi de mon coté, et je vous laisse découvrir ça juste en dessous.
                </p>
                <p class="a-propos__content-details-para">
                  Je suis un peu un nerd mais j'aime ça . A travers les années, j'ai usée toutes sorte d'applications
                  et de site web pour m'inspirer personnelement. N'hesitez pas a me 
                  <strong>contacter</strong> ici.
                </p>
              </div>
              <a href="./#contact" class="btn btn--med btn--theme dynamicBgClr"
                >Contact</a
              >
            </div>
            <div class="a-propos__content-skills">
              <h3 class="a-propos__content-title">Mes Compétences</h3>
              <div class="skills">
                <div class="skills__skill">HTML</div>
                <div class="skills__skill">CSS</div>
                <div class="skills__skill">JavaScript</div>
                <div class="skills__skill">PHP</div>
                <div class="skills__skill">C#</div>
                <div class="skills__skill">SASS</div>
                <div class="skills__skill">GIT</div>
                <div class="skills__skill">Wordpress</div>
                <div class="skills__skill">Google ADS</div>
                <div class="skills__skill">Android</div>
                <div class="skills__skill">IOS</div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="Projets" class="Projets sec-pad">
        <div class="main-container">
          <h2 class="heading heading-sec heading-sec__mb-bg">
            <span class="heading-sec__main">Projets</span>
            <span class="heading-sec__sub">
              Dans ma vie étudiante en informatique, j'ai eu la possibilité de travailler sur pas mal de projets que voici.
            </span>
          </h2>

          <div class="Projets__content">
            <div class="Projets__row">
              <div class="Projets__row-img-cont">
                <img
                  src="./assets/jpeg/Projet-mockup-example.jpeg"
                  alt="Software Screenshot"
                  class="Projets__row-img"
                  loading="lazy"
                />
              </div>
              <div class="Projets__row-content">
                <h3 class="Projets__row-content-title">Mediatheque</h3>
                <p class="Projets__row-content-desc">
                  Une Mediatheque qui nous permet de voir quels films sont disponible a voir, ce site comporte
                  une gestion des rôles utilisateurs, des formulaires sécurisés, ainsi qu'un penchant pour les border radius.
                </p>
                <a
                  href="./Projet-1.html"
                  class="btn btn--med btn--theme dynamicBgClr"
                  target="_blank"
                  >En savoir plus</a
                >
              </div>
            </div>
            <div class="Projets__row">
              <div class="Projets__row-img-cont">
                <img
                  src="./assets/jpeg/Projet-mockup-example.jpeg"
                  alt="Software Screenshot"
                  class="Projets__row-img"
                  loading="lazy"
                />
              </div>
              <div class="Projets__row-content">
                <h3 class="Projets__row-content-title">PPEJDR</h3>
                <p class="Projets__row-content-desc">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic
                  facilis tempora, explicabo quae quod deserunt eius sapiente
                  praesentium.
                </p>
                <a
                  href="./Projet-2.html"
                  class="btn btn--med btn--theme dynamicBgClr"
                  target="_blank"
                  >En savoir plus</a
                >
              </div>
            </div>
            <div class="Projets__row">
              <div class="Projets__row-img-cont">
                <img
                  src="./assets/jpeg/Projet-mockup-example.jpeg"
                  alt="Software Screenshot"
                  class="Projets__row-img"
                  loading="lazy"
                />
              </div>
              <div class="Projets__row-content">
                <h3 class="Projets__row-content-title">projet en swift ?</h3>
                <p class="Projets__row-content-desc">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic
                  facilis tempora, explicabo quae quod deserunt eius sapiente
                  praesentium.
                </p>
                <a
                  href="./Projet-3.html"
                  class="btn btn--med btn--theme dynamicBgClr"
                  target="_blank"
                  >En savoir plus</a
                >
              </div>
            </div>
          </div>
        </div>
      </section>


      <script src="./index.js"></script>
    </body>
  </html>
  
<?php include "footer.php" ?>
