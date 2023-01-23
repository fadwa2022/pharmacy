function addprod(){
    var ajoutproduit = document.getElementById('new')
    ajoutproduit.innerHTML += ` 
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
   `
}