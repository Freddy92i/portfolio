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
    <?php include "navbar.php" ?>
    <section id="contact" class="contact sec-pad dynamicBg">
      <div class="main-container">
        <h2 class="heading heading-sec heading-sec__mb-med">
          <span class="heading-sec__main heading-sec__main--lt">Contact</span>
          <span class="heading-sec__sub heading-sec__sub--lt">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic facilis
            tempora explicabo quae quod deserunt eius sapiente
          </span>
        </h2>
        <div class="contact__form-container">
          <form action="#" class="contact__form">
            <div class="contact__form-field">
              <label class="contact__form-label" for="name">Nom</label>
              <input
                required
                placeholder="Entrer votre nom"
                type="text"
                class="contact__form-input"
                name="name"
                id="name"
              />
            </div>
            <div class="contact__form-field">
              <label class="contact__form-label" for="email">Email</label>
              <input
                required
                placeholder="Entrer votre Email"
                type="text"
                class="contact__form-input"
                name="email"
                id="email"
              />
            </div>
            <div class="contact__form-field">
              <label class="contact__form-label" for="message">Message</label>
              <textarea
                required
                cols="30"
                rows="10"
                class="contact__form-input"
                placeholder="Entrer votre message"
                name="message"
                id="message"
              ></textarea>
            </div>
            <button type="submit" class="btn btn--theme contact__btn">
              Envoyer
            </button>
          </form>
        </div>
      </div>
    </section>
</html>
<?php include "footer.php" ?>