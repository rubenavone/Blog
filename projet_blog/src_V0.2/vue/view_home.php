<?php
ob_start();
?>

<header class=" lg:h-header-home bg-blue-800 text-center presentation min-h-[200px]">
    <article class="text-white  ">
        <p class="text-6xl pt-10 "> Développeur Fullstack</p>
        <p class="text-6xl "><span class="text-change-js text-6xl "> </span> <span class="clignote hidden absolute">|</span> </p>
    </article>
</header>

<div class="relative hidden lg:block">
<iconify-icon icon="material-symbols:arrow-back-ios-new" class="left-arrow arrow stroke-white z-0"></iconify-icon>
  <iconify-icon icon="material-symbols:arrow-forward-ios" class="right-arrow arrow text-white z-0 stroke-black"></iconify-icon>
  <section class="slider d-flex smooth">
  </section>
</div>

<section class="flex flex-col w-full lg:flex-row lg:h-section-home">
    <img src="./dist/img/campaign-creators-gMsnXqILjp4-unsplash.jpg" alt="" class="lg:w-2/4 w-4/4 object-cover">

    <article class="lg:w-2/4 w-4/4 pt-5 flex flex-col justify-center items-center">
        <h2 class="text-center text-3xl">Obtenir un expertises ?</h2>
        <p class="w-2/4 self-center text-center pt-5">Obtenir une expertise technique solide est essentiel pour les entreprises de la tech qui cherchent à réussir dans un environnement numérique en constante évolution. Je suis là pour vous fournir l'expertise dont vous avez besoin pour réussir sur ce marché en constante évolution. Avec mes compétences en développement web et en développement d'applications, je suis capable de créer des solutions numériques personnalisées qui répondent aux besoins uniques de votre entreprise.</p>
    </article>
</section>

<section class="flex flex-col w-full lg:flex-row bg-black text-white lg:h-[50vh] object-contain">
    <article class="lg:w-2/4 w-4/4 pt-5 flex flex-col justify-center items-center">
        <h2 class="text-center text-3xl">Améliorer, entretenir vos services</h2>
        <p class="w-2/4 self-center text-center pt-5">Les services numériques sont essentiels pour les entreprises de la tech, mais leur maintenance peut être complexe et chronophage. Je suis là pour vous aider à améliorer et entretenir vos services numériques pour vous permettre de vous concentrer sur votre cœur de métier. Avec mes compétences en développement et en maintenance de sites web et d'applications, je suis capable de fournir des services de haute qualité pour votre entreprise.</p>
    </article>
    <img src="./dist/img/Frame 2.jpg" alt="" class="lg:w-2/4 w-4/4 object-cover"> 
</section>

<section class="lg:h-[96vh] overflow-hidden">

    <div>
        <article class="pt-5 flex flex-col text-center mt-12">
            <h2 class="text-center text-3xl">Un développeur engagé et passioné</h2>
            <p class="mx-auto w-1/3 text-center pt-5">
            A la recherche d'un développeur qui est passionné par son métier et engagé dans la réussite de votre entreprise ? Avec un engagement total pour la satisfaction de ses clients, j'apporterais une expertise de qualité à tous ses projets, pour vous offrir des solutions numériques innovantes et sur mesure. Quels que soient vos besoins en matière de développement web ou d'applications, je saurais apporter la touche de créativité et d'innovation dont votre entreprise a besoin.
           </p>
        </article>
    </div>

    <div class="flex flex-col lg:flex-row mt-12 mb-5 lg:mb-[0px] lg:h-70vh  ">
        <img src="./dist/img/diego-ph-fIq0tET6llw-unsplash.jpg" alt="" class="h-[50rem] lg:w-9/12 w-4/4 object-cover object-center">
        <form action="" class="ml-20 lg:w-3/12 w-4/4 flex flex-col ">
            <h3 class="text-3xl text-center">Contactez-moi</h3>
            <label for="cusomer-name" class="block">
                <span class="text-gray-700">Nom</span>
                <input type="text" class=" mb-5 rounded-md mt-2 block  px-0.5  shadow-xl border border-black border-b-2  focus:ring-0 focus:border-blue-800" placeholder="Votre prénom" name="cusomer-name" />
            </label>
            <label for="mail-customer" class="block">
                <span class="text-gray-700">Mail</span>
                <input type="text" class=" mb-5 rounded-md  mt-2 block  px-0.5 shadow-xl border border-black border-b-2  focus:ring-0 focus:border-blue-800" placeholder="Votre e-mail" name="mail-customer" />
            </label>
            <label for="customer-message" class="block">
                <span class="text-gray-700">Votre message</span>
                <textarea class="w-5/6 mt-2 mb-5 block  px-0.5 shadow-xl border border-black border-b-2 focus:ring-0 focus:border-blue-800 rounded-md" rows="9" col="15" name="customer-message">
                </textarea>
            </label>
            <input type="submit" value="Envoyer" class=" w-1/3 mx-auto rounded-md bg-blue-800 text-white h-10 text-center" name="submit" />

        </form>
    </div>
    
</section>
<?php

$content = ob_get_clean();
require_once './vue/template.php';

?>