<?php require APPROOT . '/views/ini/nav.php'; ?>
<style>
.wrapper{
  width: 100%;
  height: 100%;
}
.main-text{

  font-family: 'Lobster', cursive;
  font-size: 5em;
  color: #fff;
}
.bubble{
    position: absolute;
  top: 53%;
  margin-top: 145rem;
 margin-left: -26rem;
  border-radius: 50%;
  border: 1px solid rgba(255, 255, 255, 0.8);
}
.small{
  width: 10px;
  height: 10px;
  left: 50%;
  animation: flow-s 2s linear infinite;
}
.small-l{
  width: 10px;
  height: 10px;
  left: 43%;
  animation: flow-s-l 0.9s linear infinite;
}
.s-medium{
  width: 20px;
  height: 20px;
  left: 43%;
  animation: flow-s 1.3s linear infinite;
}
.medium{
  width: 25px;
  height: 25px;
  left: 45%;
  animation: flow-m 0.8s linear infinite;
}
.large{
  width:5px;
  height: 5px;
  left: 57%;
  animation: flow-l 0.7s linear infinite;
}
#bubb{
 margin-left: 26rem;
}

@keyframes flow-l {
  0% {
    top: 53%;
    left: 57%;
    opacity:0;
  }
  25%{
    top: 49%;
    left: 57.5%;
    opacity: 1;
  }
  50%{
    left: 58%;
    opacity: 1;
  }
  75%{
    left: 57.5%;
    opacity: 1;
  }
  100% {
    top: 32%;
    left: 57%;
    opacity: 0;
  }
}

@keyframes flow-s {
  0% {
    top: 53%;
    left: 50%;
    opacity:0;
  }
  25%{
    top: 49%;
    left: 51%;
    opacity: 1;
  }
  50%{
    top: 45%;
    left: 52%;
    opacity: 1;
  }
  75%{
    top: 41%;
    left: 51%;
    opacity: 1;
  }
  100% {
    top: 37%;
    left: 50%;
    opacity: 0;
  }
}

@keyframes flow-s-m {
  0% {
    top: 53%;
    left: 43%;;
    opacity:0;
  }
  25%{
    top: 49%;
    left: 42.5%;
    opacity: 1;
  }
  50%{
    top: 45%;
    left: 42%;
    opacity: 1;
  }
  75%{
    top: 41%;
    left: 42.5%;
    opacity: 1;
  }
  100% {
    top: 37%;
    left: 43%;
    opacity: 0;
  }
}

@keyframes flow-m {
  0% {
    top: 53%;
    left: 45%;;
    opacity:0;
  }
  25%{
    top: 48%;
    left: 44.5%;
    opacity: 1;
  }
  50%{
    top: 43%;
    left: 44%;
    opacity: 1;
  }
  75%{
    top: 38%;
    left: 44.5%;
    opacity: 1;
  }
  100% {
    top: 33%;
    left: 45%;
    opacity: 0;
  }
}

@keyframes flow-s-l {
  0% {
    top: 53%;
    left: 43%;;
    opacity:0;
  }
  25%{
    top: 48%;
    left: 43.5%;
    opacity: 1;
  }
  50%{
    top: 43%;
    left: 44%;
    opacity: 1;
  }
  75%{
    top: 38%;
    left: 43.5%;
    opacity: 1;
  }
  100% {
    top: 33%;
    left: 43%;
    opacity: 0;
  }
}

</style>
<div class="  bg-[url('<?php echo URLROOT; ?>/img/Larocheposay-RangePage-Anti-Aging-Pure-Vitamin-C10-Header.jpg')] bg-cover">
    <div class="h-96 text-6xl font-normal leading-normal mt-0 mb-2 text-white text-center ">DÉCOUVREZ LES MEILLEURS PRODUITS EN LIGNE</div>
    <div></div>
</div>
<div class="decoration-solid text-4xl font-bold mt-20 text-center text-gray-800">What do you need today?</div>
<div class="decoration-solid text-xl font-bold mt-5 text-center text-gray-400">Check our featured products and deals</div>
<div class=" flex flex-col lg:flex-row  ">
    <div class=" m-4 w-full max-w-sm bg-white border-solid border-2 hover:border-dashed hover:border-2 hover:divide-emerald-600  rounded-lg shadow-md  "  data-aos="zoom-in" style="height: 40rem;">
        <div class="flex justify-between pt-2">
            <h5 class="text-base  ml-5 font-semibold tracking-tight text-emerald-400">NEW</h5>
            <h5 class="text-base  mr-5 font-semibold tracking-tight text-emerald-400 rounded-xl bg-slate-200">-20%</h5>

        </div>
        <a href="#">
            <img class="p-4  rounded-t-lg" src="<?php echo URLROOT; ?>/img/mineral-89-prebiotic-comcentrate-vichy-30ml-800x800.webp" alt="product image" />
        </a>
        <div class="px-5 pb-5">
            <a href="#">
                <h5 class="text-xl font-semibold tracking-tight text-black">Apple Watch Series 7 GPS, Aluminium Case, Starlight Sport</h5>
            </a>
            <div class="flex items-center mt-2.5 mb-5">
                <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>First star</title>
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                </svg>
                <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Second star</title>
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                </svg>
                <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Third star</title>
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                </svg>
                <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Fourth star</title>
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                </svg>
                <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Fifth star</title>
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                </svg>
                <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">5.0</span>
            </div>
            <div class="flex items-center justify-between">
                <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span>
                <a href="#" class="text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:bg-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Add to cart</a>
            </div>
        </div>
    </div>
    <section class="py-10" id="Shop">
        <div class="mx-auto grid max-w-7xl  grid-cols-1 gap-6 p-6 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3">
        <?php foreach ($data['produit'] as  $produit) :   ?>

            <article class="rounded-xl bg-white p-3 shadow-lg hover:shadow-xl" data-aos="zoom-in-up" >
                <a href="#">
                    <div class="relative flex items-end overflow-hidden rounded-xl">
                        <img src="<?php echo URLROOT; ?>/img/<?php echo  $produit->Image; ?>" />
                        <div class="flex items-center space-x-1.5 rounded-lg bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                            </svg>

                            <button class="text-sm">Add to cart</button>
                        </div>
                    </div>

                    <div class="mt-1 p-2">
                        <h2 class="text-slate-700"><?php echo  $produit->Nom; ?></h2>
                        <p class="mt-1 text-sm text-slate-400"><?php echo  $produit->quantite; ?></p>

                        <div class="mt-3 flex items-end justify-between">
                            <p>
                                <span class="text-lg font-bold text-emerald-600  ">$<?php echo  $produit->Prix; ?></span>
                            </p>

                            <div class="bg-green-500 hover:bg-green-600 flex items-center space-x-1.5 rounded-lg  px-4 py-1.5 text-white duration-100 ">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                </svg>

                                <button class="text-sm ">Add to cart</button>
                            </div>
                        </div>
                    </div>
                </a>
            </article>
            <?php endforeach; ?>

      

    </section>


</div>
<div class="container mx-auto">
    <div class="flex justify-between " style=" height: 40rem; ">
        <!-- Row -->
        <div class="w-full flex">
            <div class="w-full lg:w-7/12  p-5  " style=" background-color:rgb(110, 182, 136);">
                <h1 class="pt-4 text-4xl font-black font-sans leading-normal mt-20 mb-2 text-white text-center" data-aos="fade-up" >What supplements should </h1>
                <h1 class=" text-4xl  font-black font-sans leading-normal  mb-2 text-white text-center" data-aos="fade-up" >I take daily?</h1>
                <h4 class="  text-xl   font-sans leading-normal mt-10  text-white text-center" data-aos="fade-up" >Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sederet diam nonumy eirmod tempor invidunt ut labore ipsum dolor sit amet, consectetuer adipiscing</h4>
                <img class=" w-20 h-20 rounded-full border border-gray-100 shadow-sm" style="margin: auto;   margin-top: 8rem;" src="<?php echo URLROOT; ?>/img/pexels-antoni-shkraba-5215009.jpg" alt="user image" />
                <h4 class="text-center   text-white font-semibold ">Dr. Emma Wells</h4>
                <h4 class="text-center   text-white  ">Dermatologist</h4>

            </div>
            <div class="w-full h-auto bg-gray-400 hidden lg:block lg:w-5/12 bg-cover text-center " style="background-image: url('<?php echo URLROOT; ?>/img/pexels-rfstudio-3825527.jpg')"></div>

        </div>
    </div>
</div>
<section class="flex flex-col lg:flex-row" id="Contact">
   
<div id='wrapper' class="wrapper hidden  lg:inline-block">
  <div class="bubble small" style="    background-color: #6eb688;"></div>
  <div class="bubble s-medium"  style="    background-color: #6eb688;"></div>
  <div class="bubble medium"  style="    background-color: #6eb688;"></div>
  <div class="bubble large"  style="    background-color: #6eb688;"></div>
  <div class="bubble small-l"  style="    background-color: #6eb688;"></div>
</div>
   
    <div data-aos="zoom-in-down">
    <h1 class="pt-4 text-4xl font-black font-sans leading-normal mt-20 mb-2 text-zinc-600 text-center">Ask your pharmacist</h1>
    <h1 class=" text-4xl  font-black font-sans leading-normal  mb-2 text-zinc-600 text-center">not the Internet</h1>
    <h4 class="pt-7 text-xl   font-sans leading-normal mt-10  text-zinc-400 text-center w-4/5" style=" margin: auto;">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sederet diam nonumy eirmod tempor invidunt ut labore ipsum dolor sit amet, consectetuer adipiscing</h4>
    <div class="flex justify-center"><a href="<?php echo URLROOT; ?>/Client/contact"><button type="button" class="text-white  focus:ring-4 focus:ring-blue-300 font-medium  text-sm px-5 py-2.5 mr-2 mb-2  focus:outline-none ml-8" style="background-color:rgb(110, 182, 136); height: 3.5rem;width: 17rem;margin-top: 3rem;">Ask your pharmacist</button></a>
    </div>
    </div>
  
<div id='wrapper' class="wrapper hidden lg:inline-block">
  <div class="bubble small"  id="bubb"  style="    background-color: #6eb688;"></div>
  <div class="bubble s-medium"  id="bubb" style="    background-color: #6eb688;"></div>
  <div class="bubble medium" id="bubb"  style="    background-color: #6eb688;"></div>
  <div class="bubble large" id="bubb"  style="    background-color: #6eb688;"></div>
  <div class="bubble small-l" id="bubb"  style="    background-color: #6eb688;"></div>
</div>
   
</section>
<div class="flex items-end justify-end fixed bottom-0 right-0 mb-4 mr-4 z-10">
  <div>
    <a title="" href="<?php echo URLROOT; ?>/Client/index" class="block w-16 h-10 rounded-full transition-all shadow hover:shadow-lg transform hover:scale-110 hover:rotate-12">
      <img class="object-cover object-center w-full h-full rounded-full" src="<?php echo URLROOT; ?>/img/logo1.png"/>
    </a>
  </div>
</div>
<?php require APPROOT . '/views/ini/footer.php'; ?>