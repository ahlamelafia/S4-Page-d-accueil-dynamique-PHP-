<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PORTFOLIO</title>
    <link rel="stylesheet" href="css/style-port.css">
</head>

<body>
    <header>
        <div class="logo-portfolio">

            <div class="logo">
                <img src="images/portfolio-logo.png" alt="logo">
                <h1>AHLAM <span>EL AFIA</span></h1>

            </div>
            <div class="accueil">
                <a href="#">Accueil</a>
                <a href="#">A propos</a>
                <a href="#">Mes Projets</a>
                <a href="#">Contact</a>
            </div>

        </div>
        <div class="presentation">
            <div class="datalisahlam">
                <h3>
                    Bonjour je suis Ahlam EL Afia <br>
                    Apprenante en Développement Web

                </h3>
                <p>
                    Passionnée par la création digitale,
                    je conçois des sites web modernes et créatifs. <br>
                    J'aime transformer mes idées en projets numériques utiles et innovants.

                </p>
            </div>
            <div class="photo-persnal">
                <img src="images/photo-persnal.png" alt="photo">
            </div>
        </div>
    </header>
    <main>
        <div class="À-propos ">
            <h2>
                À propos de moi
            </h2>
            <p>
                Je suis Ahlam El Afia, une jeune passionnée par le digital et la création
                numérique. J’aime apprendre, <br>créer et relever de nouveaux défis.
                Mon objectif est de développer mes compétences en développement web, <br>
                en design graphique et en marketing digital afin de concevoir des projets
                modernes, créatifs et utiles.
            </p>

        </div>
        <div class="projet">
            <h2>
                Mes Projets
            </h2>
        </div>
        <div class="projets">

            <?php foreach ($projets as $projet): ?>
                <div class="mes-projets">
                    <img src="<?= htmlspecialchars($projet['image']) ?>" alt="<?= htmlspecialchars($projet['titre']) ?>">


                    <h2><?= htmlspecialchars($projet['titre']) ?>

                    </h2>

                    <p><?= htmlspecialchars(mb_substr($projet['description'], 0, 100)) ?>...</p>


                </div>
            <?php endforeach; ?>
        </div>
    </main>
    <footer>
        <div class="Contact">
            <h2>
                Contact
            </h2>
        </div>
        <div class="cont">
            <div class="mes-contact">
                <img src="images/GitHub.png" alt="GitHub">
                <img src="images/Gmail.png" alt="Gmail">
                <img src="images/Linkedin.png" alt="Linkedin">
                <img src="images/Instgram.png" alt="Instgram">
                <img src="images/Twitter.png" alt="Twitter">
            </div>
        </div>
        <div>
            <hr>
            <p class="port-ahlam">
                &copy;2026 PORTFOLIO AHLAM EL AFIA
            </p>

        </div>
    </footer>

</body>

</html>