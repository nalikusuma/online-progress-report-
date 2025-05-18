


const drop= document.getElementById("submenu");
console.log(drop);

function togglepopup(){
    drop.classList.toggle("open-menu");
    // drop.style.zIndex="9999";
    // drop.style.display="block";
}

const main=document.getElementById("body")
const pop=document.getElementById("popup");
const login=document.getElementById("log")

function signuppop(){
    
    pop.classList.add("open-popup");
    main.classList.add("open-up");
    login.classList.remove("open-popup1");
    

    // pop.classList.add("open-pop");
}

function loginpop(){
    pop.classList.remove("open-popup")
    login.classList.add("open-popup1");
    main.classList.add("open-up");

}

function closepop()
{
    pop.classList.remove("open-popup");
    main.classList.remove("open-up");
    login.classList.remove("open-popup1");

}






// function verify()
// {
    
// }

