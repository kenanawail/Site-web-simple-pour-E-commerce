const navbar = document.querySelector(".navbar");
const bars = document.querySelector(".fa-bars");
const xmark = document.querySelector(".fa-circle-xmark");
const humberger = document.querySelector(".bar");


bars.addEventListener("click", () => {
    bars.classList.toggle("active");
    xmark.classList.toggle("active");
    navbar.classList.toggle("active");
});


window.addEventListener("scroll", function(){
    var header = this.document.querySelector("header"); 
    header.classList.toggle("sticky", this.window.scrollY > 0);
})


function myfirstjsfunction() {
    var Element = document.getElementById("js");
    if(Element.innerHTML === "you are welcom!"){
        Element.innerHTML = "thank you four visiting our site!";
    }else{
        Element.innerHTML = "you are welcom!";  
    }
}

function redir() {
     setTimeout(function() {
      window.location.href = 'http://192.168.1.37:5500/index.html'; }, 5000 )
    }

