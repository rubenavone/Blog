<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" X-Content-Type-Options=nosniff http-equiv="X-UA-Compatible" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" content="IE=edge" />
    <title>Inscription</title>
    <link href="/dist/output.css" rel="stylesheet" type="text/css" />
    <link href="/dist/slider.css" rel="stylesheet" type="text/css" />

    <!-- <link href="/dist/dark.css" rel="stylesheet" type="text/css" class="dark" /> -->

    <?= $_SESSION["role"] == 1 ? "<link href='/dist/admin.css' rel='stylesheet' type='text/css' />" : "" ?>

</head>
<style>
    @font-face {
        font-family: 'caviar_dreamsregular';
        src: url('./asset/font/CaviarDreams-webfont.woff') format('woff');
        font-weight: 400;
        font-style: normal;
        font-stretch: 100;
    }
</style>

<body class="bg-gray-200 relative ">
    <nav class="bg-blue-800 w-full justify-center lg:h-nav absolute  lg:flex pl-5 pr-10 lg:shadow-2xl h-10 top-0 z-20 overflow-hidden ease-in duration-300 lg:static ">

        <div class="lg:w-1/6 w-6/6 h-auto lg:block mx-auto flex relative">
            <object type="image/svg+xml" data="/dist/img/text.svg" class="logo w-64 items-center ">
            </object>
            <section id="box" class="ml-10 w-[4rem] rounded-full">

            </section>
            <svg xmlns="http://www.w3.org/2000/svg" id="menu-button" class="right-0 h-6 w-6 cursor-pointer lg:hidden block mt-2 burger-nav-js absolute" fill="none" viewBox="0 0 24 24" stroke="white">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </div>

        <ul class="lg:flex justify-center text-white text-2xl lg:h-full items-end w-4/6 pb-5 hidden ">
            <a href="/" class="hover:text-blue-300">
                <li class="pr-10">Accueil</li>
            </a>
            <a href="/articles" class="hover:text-blue-300">
                <li>Article</li>
            </a>
        </ul>

        <ul class="lg:flex lg:flex-col justify-end text-white text-2xl lg:h-full items-center w-1/6 hidden ">
            <?php
            if (isset($_SESSION['connected'])) { ?>
                <a href="/profil" class="hover:text-blue-300">
                    <li>Profil</li>
                </a>
                <a href="/deconnexion" class="hover:text-blue-300 ">
                    <li>Deconnecter</li>
                </a>
            <?php } else { ?>

                <a href="#" class="hover:text-blue-300 modal-button-js">
                    <li>Connexion</li>
                </a>
            <?php }
            if (isset($_SESSION['connected']) && $_SESSION["role"] == 1) : ?>

                <a href="/admin" class="hover:text-blue-300">
                    <li>Administration</li>
                </a>
            <?php else : ?>

            <?php endif; ?>

        </ul>

        <ul class=" justify-center text-center text-white text-2xl items-end w-6/6 pb-5 lg:hidden ">
            <a href="/" class="hover:text-blue-300">
                <li class="">Accueil</li>
            </a>
            <a href="/articles" class="hover:text-blue-300">
                <li>Article</li>
            </a>


            <?php
            if (isset($_SESSION['connected'])) { ?>
                <a href="/profil" class="hover:text-blue-300">
                    <li>Profil</li>
                </a>
                <a href="deconnexion" class="hover:text-blue-300">
                    <li>Deconnecter</li>
                </a>
            <?php } else { ?>

                <a href="connexion" class="hover:text-blue-300 modal-button-js">
                    <li>Connexion</li>
                </a>
            <?php }
            if (isset($_SESSION['connected']) && $_SESSION["role"] == 1) : ?>

                <a href="/admin" class="hover:text-blue-300">
                    <li>Administration</li>
                </a>
            <?php endif; ?>
        </ul>
    </nav>



    <main class="lg:min-h-large ">
        <h1 class="block text-center text-2xl pt-32 pb-5 lg:pt-5 text-gray-700  lg:h-nav "><?= $content_title ?> <span class=" z-10 before:block before:absolute before:-inset-1 before:-skew-y-3 before:bg-blue-800 relative inline-block "><span class="relative text-white"><?= $title ?></span> </span></h1>

        <?= $content ?>
    </main>

    <section class="w-full h-screen absolute top-0 z-30 flex justify-center items-center modal-view-js hidden bg-[rgba(0,0,0,0.9)]">
        <article class="w-2/4 flex justify-center h-[400px] items-center z-20 border-4 border-blue-700 bg-white opacity-100">
            <section class="w-2/4 text-center">
                <p>
                    J'ai déjà un compte, je souhaite me connecter
                </p>
                <form action="/connexion" class="justify-center items-center flex flex-col ml-10  " method="POST" enctype="multipart/form-data">
                    <label class="block w-64">
                        <input type="mail" class="mt-5 block w-full px-0.5 border-1 border-b-2 border-gray-200 focus:ring-0 focus:border-blue-800" placeholder="Your name" name="mail_user" />
                    </label>
                    <label class="block w-64">
                        <input type="password" placeholder="votre mot de passe" class="mt-5 block w-full px-0.5 border-1 border-b-2 border-gray-200 focus:ring-0 focus:border-blue-800" placeholder="" name="mdp_user" />
                    </label>

                    <input type="submit" value="submit" class="rounded-full bg-blue-800 text-white h-10 w-1/3 mx-auto mt-5" name="submit" />
                </form>
            </section>

            <hr class="rotate-90 w-32">

            <section class="w-2/4 text-center place-self-stretch self-center">
                <p>
                    Je n'ai pas de compte, je souhaite en créée un
                </p>
                <a href="/addUser"><button class="rounded-full bg-blue-800 text-white h-10 w-1/3 mx-auto mt-5">Let's Go</button></a>
            </section>
        </article>
    </section>
    <footer class=" h-10 bg-blue-800 items-center lg:flex hidden">
        <ul class="flex justify-center text-white w-5/6 ">
            <li class="mr-10">RGPD</li>
            <li>Mention légales</li>
        </ul>
        <section class="justify-around text-3xl flex w-1/6 text-white mr-32">
            <a href="https://www.linkedin.com/in/ruben-navone/"><iconify-icon icon="teenyicons:linkedin-outline"></iconify-icon></a>
            <a href="https://github.com/rubenavone"><iconify-icon icon="ri:git-merge-line"></iconify-icon></a>
            <a href="http://ruben.fr/asset/Navone_Ruben%20CV.pdf"><iconify-icon icon="mdi:resume"></iconify-icon></a>
        </section>
        <section class="text-white">
            <a href=""><iconify-icon icon="material-symbols:arrow-back-ios" rotate="90deg"></iconify-icon></a>
        </section>

    </footer>
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/TextPlugin.min.js"></script>
    <script src="/asset/js/main.js" type="module"></script>

</body>

</html>
