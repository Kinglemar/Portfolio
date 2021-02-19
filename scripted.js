const BUTTON = document.querySelector(".vague");
const CONTACT = document.querySelector(".contact");
const HOOK = document.querySelector(".none");

HOOK.classList.remove("hide");
CONTACT.classList.add("hide");

function showContact(){
    HOOK.classList.toggle("hide")
    CONTACT.classList.toggle("hide")
    CONTACT.style.transition = ".5s ease-in-out"
};

BUTTON.addEventListener("click", showContact, false);

let hun = 6.7865;
console.log(Math.floor(hun));