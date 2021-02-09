$(document).ready(function() {
    window.onscroll = function() { scrollFunction() };

    // Get the header
    var header = document.querySelector(".navbar");

    // Get the offset position of the navbar
    var sticky = header.offsetTop;

    // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function scrollFunction() {

        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("movetop").style.display = "block";
        } else {
            document.getElementById("movetop").style.display = "none";
        }

        if (window.pageYOffset > sticky) {
            header.classList.add("fixed-top");
            // header.classList.add("shadow-sm");
            header.classList.remove("navbar-light");
            header.classList.remove("bg-white");
            header.classList.add("navbar-dark");
            header.classList.add("bg-success");

        } else {
            header.classList.remove("fixed-top");
            // header.classList.remove("shadow-sm");
            header.classList.add("navbar-light");
            header.classList.add("bg-white");
            header.classList.remove("navbar-dark");
            header.classList.remove("bg-success");

        }
    }

    $(function() {
        $('.navbar-toggler').click(function() {
            $('body').toggleClass('noscroll');
        })
    });


    // Date 
    const newDate = new Date();
    $('.main-date').text(newDate.getFullYear());
    console.log(newDate.getFullYear())




});

var menuItem = document.querySelector("#menu-item-160");
var menuItems = document.querySelector(".menu-item");

function  getPostType(type){

    if(type == 'properties'){
        // menuItems.classList.remove("active"); 
        menuItem.classList.add("active");
        
    console.log('yes', type);
    }else{
        menuItem.classList.remove("active"); 
        console.log('No', type); 
    }
   
    // header.classList.add("shadow-sm");
    // header.classList.remove("navbar-light");

   
    console.log('Prop', type);
}