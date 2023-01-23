<?php require APPROOT . '/views/ini/nav.php'; ?>

<div class="flex justify-center items-center w-screen p-20 bg-white">
  <div class="container mx-auto my-4 px-4 lg:px-20">

    <div class="w-full p-8 my-4 md:px-12 lg:w-9/12 lg:pl-20 lg:pr-40 mr-auto rounded-2xl shadow-2xl">
      <div class="flex">
        <h1 class="font-bold uppercase text-5xl">Send us a <br /> message</h1>
      </div>
      <div class="grid grid-cols-1 gap-5 md:grid-cols-2 mt-5">
        <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
            type="text" placeholder="First Name*" />
        <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
            type="text" placeholder="Last Name*" />
        <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
            type="email" placeholder="Email*" />
        <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
            type="number" placeholder="Phone*" />
        </div>
        <div class="my-4">
          <textarea placeholder="Message*" class="w-full h-32 bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"></textarea>
        </div>
        <div class="my-2 w-1/2 lg:w-1/4">
          <button class="uppercase text-sm font-bold tracking-wide bg-green-400 text-gray-100 p-3 rounded-lg w-full 
                      focus:outline-none focus:shadow-outline">
            Send Message
          </button>
        </div>
      </div>

      <div
        class="w-full lg:-mt-96 lg:w-2/6 px-8 py-12 ml-auto bg-green-400 rounded-2xl">
        <div class="flex flex-col text-white">
          <h1 class="font-bold uppercase text-4xl my-4">Drop in our office</h1>
          <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
            tincidunt arcu diam,
            eu feugiat felis fermentum id. Curabitur vitae nibh viverra, auctor turpis sed, scelerisque ex.
          </p>

          <div class="flex my-4 w-2/3 lg:w-1/2">
          
            <div class="flex flex-col">
              <h2 class="text-2xl">Main Office</h2>
              <p class="text-gray-700">5555 Tailwind RD, Pleasant Grove, UT 73533</p>
            </div>
          </div>
          
          <div class="flex my-4 w-2/3 lg:w-1/2">
            <div class="flex flex-col">
              <i class="fas fa-phone-alt pt-2 pr-2" >
            </div>
            <div class="flex flex-col">
              <h2 class="text-2xl">Call Us</h2>
              <p class="text-gray-700">Tel: xxx-xxx-xxx</p>
              <p class="text-gray-700">Fax: xxx-xxx-xxx</p>
            </div>
          </div>
       
        </div>
      </div>
    </div>
</div>

<div class="flex items-end justify-end fixed bottom-0 right-0 mb-4 mr-4 z-10">
  <div>
    <a title="" href="<?php echo URLROOT; ?>/Client/contact" class="block w-16 h-10 rounded-full transition-all shadow hover:shadow-lg transform hover:scale-110 hover:rotate-12">
      <img class="object-cover object-center w-full h-full rounded-full" src="<?php echo URLROOT; ?>/img/logo1.png"/>
    </a>
  </div>
</div>
<?php require APPROOT . '/views/ini/footer.php'; ?>
