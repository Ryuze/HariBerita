var cariArtikel = document.getElementById("inputArtikel");
var eventFired = 0;
$(window).on('resize', function () {
    if (!eventFired) {
        if ($(window).width() < 700) {
            // cariArtikel.classList.remove("mr-sm-2");
            console.log('tidak lebih dari 70%');
            document.getElementById("jumbotron").add

        } else {
            // cariArtikel.classList.add("mr-sm-2");
            console.log('lebih dari 70%');
        }
    }
});
// click search
$(document).ready(function () {
    $('#clickSearch').click(function () {
        $('#clickSearch').toggleClass("fa-times fa-search");
        
        $('input').toggleClass('active');
        $('input').focus();
    });
});


//navbar
window.onscroll = function () {
    navSticky()
};
var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function navSticky() {
    if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky");
    } else {
        navbar.classList.remove('sticky');
    }
}
