/* =====================================
   ROYAL HAVEN HOTEL
   Premium Website JavaScript
===================================== */


/* ===============================
   HEADER SCROLL EFFECT
================================= */

const header = document.querySelector("header");


window.addEventListener("scroll",()=>{

    if(window.scrollY > 80){

        header.style.background = "rgba(17,17,17,0.98)";
        header.style.padding = "15px 8%";

    }

    else{

        header.style.background = "rgba(17,17,17,0.92)";
        header.style.padding = "25px 8%";

    }

});





/* ===============================
   SMOOTH SCROLL
================================= */


document.querySelectorAll("a[href^='#']").forEach(link=>{


    link.addEventListener("click",function(e){

        e.preventDefault();


        const section = document.querySelector(
            this.getAttribute("href")
        );


        if(section){

            section.scrollIntoView({

                behavior:"smooth"

            });

        }


    });


});





/* ===============================
   SCROLL REVEAL ANIMATION
================================= */


const revealElements = document.querySelectorAll(
    "section, .room-card, .gallery img, .services p"
);



const observer = new IntersectionObserver(

(entries)=>{


entries.forEach(entry=>{


    if(entry.isIntersecting){


        entry.target.style.opacity="1";

        entry.target.style.transform="translateY(0)";


    }


});


},

{

threshold:0.15

}

);




revealElements.forEach(element=>{


    element.style.opacity="0";

    element.style.transform="translateY(40px)";

    element.style.transition="all .8s ease";


    observer.observe(element);


});







/* ===============================
   ROOM CARD BUTTON EFFECT
================================= */


const bookingButtons = document.querySelectorAll(
    ".room-content button, .book-btn"
);



bookingButtons.forEach(button=>{


    button.addEventListener("click",()=>{


        alert(
        "Thank you for choosing Royal Haven Hotel. Our reservation team will contact you shortly."
        );


    });


});







/* ===============================
   IMAGE PARALLAX EFFECT
================================= */


const hero = document.querySelector(".hero");


window.addEventListener("scroll",()=>{


    let offset = window.scrollY;


    if(hero){

        hero.style.backgroundPositionY =
        offset * 0.4 + "px";

    }


});







/* ===============================
   CURRENT YEAR FOOTER
================================= */


const year = document.querySelector("#year");


if(year){

    year.innerHTML = new Date().getFullYear();

}





/* ===============================
   LOADING EFFECT
================================= */


window.addEventListener("load",()=>{


    document.body.classList.add("loaded");


});


/* MOBILE MENU */

const menuBtn = document.querySelector(".menu-toggle");
const navMenu = document.querySelector("nav ul");

if(menuBtn){

    menuBtn.addEventListener("click",()=>{

        navMenu.classList.toggle("active");

    });

}
