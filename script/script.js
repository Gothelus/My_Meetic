$(document).ready(function(){
    $(".dropbtn").hover(function(){
    $(".dropdown-content").slideToggle(always);
    });
    });

var slideIndex = 2;
    $(document).ready(function() {
        showSlides(slideIndex);
    });
function plusDivs(n) {
        showSlides(slideIndex += n);
    }
function showSlides(n) {
        var i;
        var slides = $(".card-c");
        if (n > slides.length + 1) {
            slideIndex = 2
            n = 2
        } 
        if (n < 2) {
            slideIndex = slides.length+1;
            n = slides.length+1;
        }
        $(slides).css('display', 'none');
        $(".card-c:nth-child("+n+")").css("display", "block");
    }