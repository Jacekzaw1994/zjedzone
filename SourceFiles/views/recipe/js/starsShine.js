$(document).ready(function(){

    // light first and second stars
    $('.second-star').hover(
        function(){ $('.first-star').addClass('star-shine'); },
        function(){ $('.first-star').removeClass('star-shine'); }
    );

    // light first, second and third stars
    $('.third-star').hover(
        function(){ $('.first-star').addClass('star-shine');    $('.second-star').addClass('star-shine'); },
        function(){ $('.first-star').removeClass('star-shine'); $('.second-star').removeClass('star-shine');}
    );

    // light first, second, third and fourth stars
    $('.fourth-star').hover(
        function(){ $('.first-star').addClass('star-shine');    $('.second-star').addClass('star-shine');    $('.third-star').addClass('star-shine'); },
        function(){ $('.first-star').removeClass('star-shine'); $('.second-star').removeClass('star-shine'); $('.third-star').removeClass('star-shine');}
    );

    // light all five stars
    $('.fifth-star').hover(
        function(){ $('.first-star').addClass('star-shine');    $('.second-star').addClass('star-shine');    $('.third-star').addClass('star-shine');    $('.fourth-star').addClass('star-shine');},
        function(){ $('.first-star').removeClass('star-shine'); $('.second-star').removeClass('star-shine'); $('.third-star').removeClass('star-shine'); $('.fourth-star').removeClass('star-shine');}
    );

});