const name = document.getElementById('name')
const quantite = document.getElementById('quantite')
const price = document.getElementById('price')
const discription = document.getElementById('discription')
const image = document.getElementById('image')

const erreurname = document.getElementById('erreurname')
const erreurquantite = document.getElementById('erreurquantite')
const erreurprice = document.getElementById('erreurprice')
const erreurdiscription = document.getElementById('erreurdiscription')
const erreurimage = document.getElementById('erreurimage')

const form = document.getElementById('form')

form.addEventListener('submit',(e) => {
    let messageerreurname=''
    let messageerreurquantite =''
    let messageerreurprice =''
    let messageerreurdiscription =''
    let messageerreurimage =''



    if (name.value ==='' || name.value == null){

        messageerreurname='Please enter a name'
    }
    if (quantite.value ==='' || quantite.value == null){

        messageerreurquantite='Please enter a quantity'
    }
    if (price.value ==='' || price.value == null){

        messageerreurprice='Please enter a price'
    }
    if (discription.value ==='' || discription.value == null){

        messageerreurdiscription='Please enter a discription'
    }
    if (image.value ==='' || image.value == null){

        messageerreurimage='Please enter a image'
    }
 
    
    if (messageerreurname!='' || messageerreurquantite!='' || messageerreurprice!='' || messageerreurdiscription !='' || messageerreurimage!='' ) {
    e.preventDefault()
   erreurname.innerHTML = messageerreurname
   erreurquantite.innerHTML = messageerreurquantite
   erreurprice.innerHTML = messageerreurprice
   erreurdiscription.innerHTML = messageerreurdiscription
   erreurimage.innerHTML = messageerreurimage

}
})

