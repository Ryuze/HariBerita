var cariArtikel = document.getElementById("inputArtikel");
var eventFired = 0;

$(window).on('resize', function() {
    if (!eventFired) {
        if ($(window).width() < 700) {
            // cariArtikel.classList.remove("mr-sm-2");
        console.log('tidak lebih dari 70%');
        } else {
            // cariArtikel.classList.add("mr-sm-2");
        console.log('lebih dari 70%');
        }
    }
});
$('#clickSearch').click(function(){
    $('#clickSearch').toggleClass("fa-times fa-search");
    $('.search-area .search-icon').toggleClass('active');
    
    $('input').toggleClass('active');
});