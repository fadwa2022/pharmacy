<?php require APPROOT . '/views/ini/header.php'; ?>
<style>
  #form {
    width: 48em;
    margin-left: -5rem;
  }

  .invalid-feedback {
    color: #ff0019;
    font-size: 0.75em;
  }

  @media only screen and (max-width: 1000px) {
    #form {
      width: 100%;
      margin-left: 0;
    }
  }
</style>
<div class="min-h-screen flex items-center justify-center bg-gray-50  px-1">
  <div class="max-w-md w-full space-y-8">
    <div>
      <img class="mx-auto h-36 w-auto" src="<?php echo URLROOT; ?>/img/logo2.png" alt="Workflow">
      <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
        add medication
      </h2>
      <p class="mt-2 text-center text-sm text-gray-600">
        Or
        <a href="#" class="font-medium text-lime-500 hover:text-lime-600">
          back to home page
        </a>
      </p>
    </div>
    <div>
      <div>

        <div class="mt-5  md:col-span-2" id="form">
          <form id="form" action="<?php echo URLROOT; ?>/Admin/Addproduit" method="POST">
            <div id="ajoutproduit" class="shadow sm:rounded-md sm:overflow-hidden">
              <div class="px-4 py-5 bg-white space-y-6 sm:p-6" >
                <div>
                  <label for="about" class="block text-sm font-medium text-lime-500">
                    name of medication
                  </label>
                  <div class="mt-1">
                    <input type="text" name="name[]" id="name" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" placeholder=""></input>
                    <div id="erreurname" class="invalid-feedback"></div>

                  </div>

                </div>
                <div>
                  <label for="about" class="block text-sm font-medium text-lime-500">
                    quantity
                  </label>
                  <div class="mt-1">
                    <input id="quantite" type="number" name="quantite[]" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="" min=0></input>
                    <div id="erreurquantite" class="invalid-feedback"></div>

                  </div>
                </div>
                <div>
                  <label for="about" class="block text-sm font-medium text-lime-500">
                    Price
                  </label>
                  <div class="mt-1">
                    <input id="price" type="number" name="price[]" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="" min=1></input>
                    <div id="erreurprice" class="invalid-feedback"></div>

                  </div>

                </div>

                <div>
                  <label for="about" class="block text-sm font-medium text-lime-500">
                    Discription
                  </label>
                  <div class="mt-1">

                    <textarea id="discription" rows="4" name="discription[]" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" placeholder=""></textarea>
                    <div id="erreurdiscription" class="invalid-feedback"></div>

                  </div>
                  <p class="mt-2 text-sm text-gray-500">
                    Brief description for your medication.
                  </p>
                </div>

                <div>
                  <label class="block mb-2 text-sm font-medium text-lime-400 " for="file_input">Upload file</label>
                  <input id="image" name="image[]" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer focus:outline-none" id="file_input" type="file">
                  <div id="erreurimage" class="invalid-feedback"></div>

                </div>
                <hr style="  border: 1.5px solid #4d7c0f;">
              </div>
              <div class="px-4 py-5 bg-white space-y-6 sm:p-6" id="new">
              </div>
              
              
              <div id="button" class=" flex justify-between px-4 py-3 bg-gray-50 text-right sm:px-6">
                <a onclick="addprod()" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-lime-700 hover:bg-lime-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                  +
                </a>
                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-lime-700 hover:bg-lime-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                  Save
                </button>
              </div>
              
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  var loader = document.getElementById("preloader");
  window.addEventListener("load", function() {
    loader.style.display = "none";
  })
</script>
<script defer src="<?php echo URLROOT; ?>/js/validationadd.js"></script>
<script defer src="<?php echo URLROOT; ?>/js/Addform.js"></script>

</body>

</html>