const email = document.getElementById('email')
const password = document.getElementById('password')
const erreuremail = document.getElementById('erreuremail')
const erreurpassword = document.getElementById('erreurpassword')
const form = document.getElementById('formregister')

form.addEventListener('submit',(e) => {
    let messageerreurpasswod=''
    let messageerreuremail =''

    if (email.value ==='' || email.value == null){

        messageerreuremail='Please enter a email'
    }
    if (password.value ==='' || password.value == null){

        messageerreurpasswod='Please enter a password'

     }
    
    if (messageerreuremail!='' || messageerreurpasswod!='' ) {
    e.preventDefault()
   erreurpassword.innerHTML = messageerreurpasswod
   erreuremail.innerHTML = messageerreuremail
}
})

