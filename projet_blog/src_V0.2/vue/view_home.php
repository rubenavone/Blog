<?php
ob_start();
?>
<header class=" lg:h-44 h-72 bg-blue-800 text-center presentation">
    <article class="text-white  ">
        <p class="text-6xl pt-10 "> Développeur Fullstack</p>
        <p class="text-6xl "><span class="text-change-js text-6xl "> </span> <span class="clignote hidden absolute">|</span> </p>
    </article>
</header>
<section class="flex flex-col w-full  lg:flex-row">
    <article class="lg:w-2/4 w-4/4 pt-5 flex flex-col justify-center items-center">
        <h2 class="text-center text-3xl">Comprendre les enjeux du numérique</h2>
        <p class="w-2/4 self-center text-center pt-5">Lorem ipsum dolor sit amet,
            consectetur adipisicing elit.
            Aliquid eaque doloribus, autem distinctio repellendus quae! Praesentium vel officia voluptates perferendis.
            Repellendus earum nobis, minima aliquam inventore numquam veritatis dignissimos praesentium!</p>
    </article>
    <img src="./dist/img/firmbee-com-gcsNOsPEXfs-unsplash.jpg" alt="" class="lg:w-2/4 w-4/4">
</section>

<section class="flex flex-col w-full  lg:flex-row">
    <img src="./dist/img/campaign-creators-gMsnXqILjp4-unsplash.jpg" alt="" class="lg:w-2/4 w-4/4">

    <article class="lg:w-2/4 w-4/4 pt-5 flex flex-col justify-center items-center">
        <h2 class="text-center text-3xl">Obtenir un expertises ?</h2>
        <p class="w-2/4 self-center text-center pt-5">Lorem ipsum dolor sit amet,
            consectetur adipisicing elit.
            Aliquid eaque doloribus, autem distinctio repellendus quae! Praesentium vel officia voluptates perferendis.
            Repellendus earum nobis, minima aliquam inventore numquam veritatis dignissimos praesentium!</p>
    </article>
</section>
<section class="flex flex-col w-full  lg:flex-row">
    <article class="lg:w-2/4 w-4/4 pt-5 flex flex-col justify-center items-center">
        <h2 class="text-center text-3xl">Mettre en place une stratégie</h2>
        <p class="w-2/4 self-center text-center pt-5">Lorem ipsum dolor sit amet,
            consectetur adipisicing elit.
            Aliquid eaque doloribus, autem distinctio repellendus quae! Praesentium vel officia voluptates perferendis.
            Repellendus earum nobis, minima aliquam inventore numquam veritatis dignissimos praesentium!</p>
    </article>
    <img src="./dist/img/arjan-de-jong-Sb8_i3Kz_JE-unsplash.jpg" alt="" class="lg:w-2/4 w-4/4">
</section>
<section class="flex flex-col w-full lg:flex-row bg-black text-white">
    <img src="./dist/img/recha-oktaviani-5tYUk7sZzqc-unsplash.jpg" alt="" class="lg:w-2/4 w-4/4">
    <article class="lg:w-2/4 w-4/4 pt-5 flex flex-col justify-center items-center">
        <h2 class="text-center text-3xl">Améliorer, entretenir vos services</h2>
        <p class="w-2/4 self-center text-center pt-5">Lorem ipsum dolor sit amet,
            consectetur adipisicing elit.
            Aliquid eaque doloribus, autem distinctio repellendus quae! Praesentium vel officia voluptates perferendis.
            Repellendus earum nobis, minima aliquam inventore numquam veritatis dignissimos praesentium!</p>
    </article>
</section>
<section>
<article class="pt-5 flex flex-col text-center mt-12">
        <h2 class="text-center text-3xl">Etre force de proposition</h2>
        <p class="mx-auto w-1/3 text-center pt-5">Lorem ipsum dolor sit amet,
            consectetur adipisicing elit.
            Aliquid eaque doloribus, autem distinctio repellendus quae! Praesentium vel officia voluptates perferendis.
            Repellendus earum nobis, minima aliquam inventore numquam veritatis dignissimos praesentium!</p>
    </article>
</section>

    <section class="flex mt-12 ">
    <img src="./dist/img/diego-ph-fIq0tET6llw-unsplash.jpg" alt="" class="h-[500px] lg:w-2/3 w-4/4 object-cover object-center">
    <form action="" class="ml-12 lg:w-1/3 w-4/4" >
        <h3 class="text-3xl text-center">Contactez-moi</h3>
        <label for="cusomer-name" class="block">
                <span class="text-gray-700">Nom</span>
                <input type="text" class=" mb-5 rounded-md mt-2 block  px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-blue-800" placeholder="Votre prénom" name="cusomer-name" />
            </label>
            <label for="mail-customer" class="block">
                <span class="text-gray-700">Mail</span>
                <input type="text" class=" mb-5 rounded-md  mt-2 block  px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-blue-800" placeholder="Votre e-mail" name="mail-customer" />
            </label>
            <label for="customer-message" class="block">
                <span class="text-gray-700">Votre message</span>
                <textarea class=" w-2/3 mt-2 mb-5 block  px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-blue-800 rounded-md" rows="5"  name="customer-message">
                </textarea>
            </label>
            <input type="submit" value="Envoyer" class=" w-1/3 mx-auto rounded-md bg-blue-800 text-white h-10" name="submit" />

        </form>
    </section>
 



<?php
$content = ob_get_clean();

require_once './vue/template.php';

?>