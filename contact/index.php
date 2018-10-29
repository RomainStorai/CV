<?php
if (isset($_POST['email'])) {

    $email_to = "contact@rstr.fr";
    $email_subject = "[Formulaire] Français";

    function died($error)
    {
        echo "Nous sommes désolé mais votre formulaire a rencontré une ou plusieurs erreur(s).";
        echo "<br /><br />";
        echo $error . "<br /><br />";
        die();
    }

    if (!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['message'])) {
        died('Votre formulaire n\' pas été correctement reçu.');
    }


    $name = $_POST['name'];
    $email_from = $_POST['email'];
    $message = $_POST['message'];

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if (!preg_match($email_exp, $email_from)) {
        $error_message .= 'L\'adresse email ne semble pas valide.<br />';
    }

    if (strlen($error_message) > 0) {
        died($error_message);
    }


    function clean_string($string)
    {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
    }


    $email_message .= "Nom: " . clean_string($name) . "\n";
    $email_message .= "Email: " . clean_string($email_from) . "\n";
    $email_message .= "Message: " . clean_string($message) . "\n";

    $headers = 'From: ' . $email_from . "\r\n" .
        'Reply-To: ' . $email_from . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="twitter:card" content="summary">
        <meta name="twitter:title" content="Romain Storaï: profil, compétences, formations, expériences et bien plus !">
        <meta name="twitter:description"
              content="Bonjour, je suis Romain Storaï. Venez découvrir mon profil, mes compétences, mes expériences et bien plus sur mon site ! C'est en fait un site CV où je mé présente, vous pouvez me contacter ou juste regarder. Bonne visite !">
        <meta name="twitter:image" content="https://rstr.fr/favicon.png">
        <meta name="twitter:image:alt" content="Logo Romain">
        <meta property="og:type" content="profile">
        <meta property="og:title" content="Romain Storaï: profil, compétences, formations, expériences et bien plus !">
        <meta property="og:url" content="https://rstr.fr">
        <meta property="og:image" content="https://rstr.fr/favicon.png">
        <meta property="profile:first_name" content="Romain">
        <meta property="profile:last_name" content="Storaï">
        <meta property="profile:gender" content="male">
        <meta property="profile:username" content="romains62">
        <meta name="og:description"
              content="Bonjour, je suis Romain Storaï. Venez découvrir mon profil, mes compétences, mes expériences et bien plus sur mon site ! C'est en fait un site CV où je mé présente, vous pouvez me contacter ou juste regarder. Bonne visite !">

        <meta name="theme-color" content="#ffdd57">
        <meta name="Author" content="Romain Storaï">
        <meta name="keywords"
              content="romain storaï, romain storai, romain, formations, education, expériences, loisirs, lycéen, cv, resume, bnssa, terminale, wimereux, rstr, storai, anglais, français, canada, programmation, contact"/>
        <meta name="description"
              content="Bonjour, je suis Romain Storaï. Venez découvrir mon profil, mes compétences, mes expériences et bien plus sur mon site ! C'est en fait un site CV où je mé présente, vous pouvez me contacter ou juste regarder. Bonne visite !">
        <meta name="google" content="notranslate">
        <meta name="subject" content="Resume">
        <meta name="rating" content="General">

        <script type="application/ld+json">
        {
            "@context": "http://www.schema.org",
            "@type": "person",
            "name": "Romain Storaï",
            "gender": "Male",
    		"givenName": "Romain",
    		"familyName": "Storaï",
    		"nationality": "French",
            "url": "https://rstr.fr",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "93 Rue Du Baston",
                "addressLocality": "Wimereux",
                "postalCode": "62930",
                "addressCountry": "France"
            },
            "email": "contact@rstr.fr",
            "telephone": "+33652022576",
            "birthDate": "2001-06-03"
            "sameAs": [
                "https://www.facebook.com/romains62",
                "https://github.com/RomainStorai"
            ]
        }
        </script>

        <link rel="apple-touch-icon" sizes="180x180" href="/resources/img/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/resources/img/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="194x194" href="/resources/img/favicon-194x194.png">
        <link rel="icon" type="image/png" sizes="192x192" href="/resources/img/android-chrome-192x192.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/resources/img/favicon-16x16.png">
        <link rel="manifest" href="/resources/img/site.webmanifest">
        <link rel="mask-icon" href="/resources/img/safari-pinned-tab.svg" color="#ffdd57">
        <link rel="shortcut icon" href="/resources/img/favicon.ico">
        <meta name="msapplication-TileColor" content="#ffdd57">
        <meta name="msapplication-TileImage" content="/resources/img/mstile-144x144.png">
        <meta name="msapplication-config" content="/resources/img/browserconfig.xml">
        <meta name="theme-color" content="#ffdd57">

    <title style="font-size: 30px">Romain Storaï :: Contacter</title>
    <link rel="stylesheet" href="../resources/css/bulma.min.css">
    <link rel="stylesheet" type="text/css" href="../resources/css/animate.css">
    <link rel="stylesheet" type="text/css" href="../resources/css/app.css">
    <link rel="icon" type="image/png" href="../favicon.png" />

    <style>
        .light {
            font-weight: 400;
            font-size: 18px;
        }
    </style>

    <script defer src="../resources/js/fa.js"></script>
</head>
<body>
<img class="waves" src="../resources/img/wave.svg" alt="Vagues"/>
<section class="hero" style="margin-top: 50px">
    <div class="hero-body animated fadeInUp">
        <div class="container">
            <h1 class="title is-1">
                <figure class="media-left">
                    <a href="../" class="returnback">
                        <span class="icon"><span class="fas fa-chevron-left"></span></span>
                    </a>
                    <span style="margin-left: 10px;">Contactez Moi !</span>
                </figure>
            </h1>
        </div>
    </div>
</section>
<section class="section" style="margin-bottom: 50px">
    <div class="container">
        <div class="columns">
            <div class="column is-half">
                <div class="card animated fadeInUp" style="animation-delay: 100ms; min-height: 500px;">
                    <div class="card-content">
                        <div class="media">
                            <figure class="media-left">
                            <span class="icon" style="font-size: 2em">
                                <span class="fas fa-phone"></span>
                            </span>
                            </figure>
                            <div class="media-content">
                                <div class="content">
                                    <p class="title is-3">Contacts</p>
                                </div>
                            </div>
                        </div>
                        <div class="content" style="margin-top: 40px">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <th>Téléphone</th>
                                    <th class="light"><a href="tel:+33652022576">+33652022576</a></th>
                                </tr>
                                <tr>
                                    <th>Adresse</th>
                                    <th class="light">93 rue du Baston, 62930 Wimereux FRANCE</th>
                                </tr>
                                <tr>
                                    <th>@mail</th>
                                    <th class="light"><a href="mailto: contact@rstr.fr">contact@rstr.fr</a></th>
                                </tr>
                                <tr>
                                    <th>GitHub</th>
                                    <th class="light"><a href="https://github.com/romainstorai">RomainStorai</a></th>
                                </tr>
                                <tr>
                                    <th>Facebook</th>
                                    <th class="light"><a href="https://www.facebook.com/romains62">romains62</a></th>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column is-half">
                <div class="card animated fadeInUp" style="animation-delay: 200ms; min-height: 500px;">
                    <div class="card-content">
                        <div class="media">
                            <figure class="media-left">
                            <span class="icon" style="font-size: 2em">
                                <span class="fas fa-newspaper"></span>
                            </span>
                            </figure>
                            <div class="media-content">
                                <div class="content">
                                    <p class="title is-3">Formulaire de contact</p>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <form id="contact-form" method="post">
                                <div class="field">
                                    <label class="label" for="name">Nom :</label>
                                    <div class="control">
                                        <input id="name" type="text" name="name" class="input" required <?php if (isset($_POST["email"])) { echo 'disabled'; } ?>>
                                    </div>
                                </div>

                                <div class="field">
                                    <label class="label" for="email">eMail :</label>
                                    <div class="control">
                                        <input id="email" type="email" name="email" class="input" required <?php if (isset($_POST["email"])) { echo 'disabled'; } ?>>
                                    </div>
                                </div>

                                <div class="field">
                                    <label class="label" for="message">Message :</label>
                                    <div class="control">
                                        <textarea id="message" name="message" class="textarea" required <?php if (isset($_POST["email"])) { echo 'disabled'; } ?>></textarea>
                                    </div>
                                </div>
                                <input type="hidden" name="action" value="contact"/>
                                <input type="hidden" name="lang" value="fr"/>
                                <div class="control">
                                    <input type="submit" value="Envoyer" class="button"
                                           style="background-color: #ffdd57 !important; color: white; border-color: transparent;">
                                </div>
                            </form>
                            <p class="has-text-right is-size-5" style="color: #23d160; <?php if (!isset($_POST["email"])) { echo 'display: none'; } ?>">Message envoyé
                                avec succès !</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="hero is-dark" style="min-height: 300px">
    <div class="hero-body animated fadeInDown" style="padding: 0">
        <iframe width="100%" height="300" id="gmap_canvas"
                src="https://maps.google.com/maps?q=Wimereux&t=&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0"
                scrolling="no" marginheight="0" marginwidth="0"></iframe>
    </div>
</section>
<section class="hero is-dark">
    <div class="hero-body">
        <div class="container">
            <div class="has-text-right">
                <h2 class="subtitle has-text-right is-6">
                    <a href="https://rstr.fr">rstr.fr</a>
                    <span class="icon"><i class="fas fa-copyright"></i></span>
                    <span style="font-size: 14px">2018</span>
                </h2>
                <h2 class="subtitle has-text-right is-7" style="margin-top: -25px">
                    by <a href="https://rstr.fr">Romain Storaï</a>
                </h2>
                <h5 id="legals" style="margin-top: -25px; font-size: 12px;color: #cccccc;text-decoration: underline"><a
                        href="../mentions/">Mentions
                    légales</a></h5>
            </div>
            <div class="has-text-left lang">
                <a href="../en/contact/"><span class="icon">
                                <span class="fas fa-language"></span>
                            </span> English</a>
            </div>
        </div>
    </div>
</section>
</body>
</html>
