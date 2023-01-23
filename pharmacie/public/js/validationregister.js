const name = document.getElementById('name')
const email = document.getElementById('email')
const password = document.getElementById('password')
const confirm_password = document.getElementById('confirm_password')
const erreurname = document.getElementById('erreurname')
const erreuremail = document.getElementById('erreuremail')
const erreurpassword = document.getElementById('erreurpassword')
const erreurconfirm = document.getElementById('erreurconfirm')

const form = document.getElementById('formregister')

form.addEventListener('submit',(e) => {
    let messageerreurname=''
    let messageerreurpasswrod=''
    let messageerreurconfirm =''
    let messageerreuremail =''

    if (name.value === '' || name.value == null){

        messageerreurname='Please enter a name'
    }
    
    if (password.value === '' || password.value == null){

        messageerreurpasswrod='Please enter a password'

    }

    if (confirm_password .value === '' || confirm_password .value == null){

        messageerreurconfirm='Please enter a confirm password'
       
    }

    if (email.value === '' || email.value == null){

        messageerreuremail='Please enter a email'
    }

    if (password.value.length <= 6 && password.value.length >0){
        messageerreurpasswrod ='Password must be longer than 6 characters'

    }
    
    if (password.value == name.value){
        messageerreurpasswrod ='your name can not be a password'
    }

  

    if(confirm_password.value != password.value)
    {
        messageerreurconfirm = 'password is not match'
    }
  
    // verifier si il n existe aucun erreur 
    if (messageerreurname!='' || messageerreuremail!='' ||messageerreurpasswrod!='' || messageerreurconfirm!='') {
    e.preventDefault()
   erreurname.innerHTML = messageerreurname
   erreurpassword.innerHTML = messageerreurpasswrod
   erreuremail.innerHTML = messageerreuremail
   erreurconfirm.innerHTML = messageerreurconfirm
}
})
function addprod(){
    var product = document.getElementsByClassName('prodct')
    var price = document.getElementsByClassName('pricee')
    console.log(product)
    console.log('fadwa');
    product.innerHTML+=`
    <div id="part4" class="heads">
          <span class="prod">
            <h2 id="h2">${name}</h2>
            <h2 id="h2">${prix}$</h2>
          </span>
        </div>`
        Total+=prix;
        price.innerHTML = Total + '$';

}