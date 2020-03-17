//$y - jQuery v1.7.1
$y(document).ready(function() {
// On click dropdown
  $y(".dropdown, .btn-group").hover(function(){
    var dropdownMenu = $y(this).children(".dropdown-menu");
    if(dropdownMenu.is(":visible")){
    dropdownMenu.parent().toggleClass("open");
    }
  });
 if (screen.width <= 1200) {
        $y('li > .dropdown-toggle').click(function () {
            this.removeAttribute("href");
        });
    }
else{
  $y('li > .dropdown-toggle').click(function () {
  window.location = $(this).attr('href');
  });
  }
  //accordian
  $y('.accordion-group').click(function() {
    $y('.accordion-group').removeClass('active');
    $y(this).addClass('active');
    });
  $y(".navbar").stick_in_parent();
});

//---------------------------------------------//
//$x - jQuery v3.3.1
$x(document).ready(function() {
// owlCarouseld,.l
    var owl = $x('.owl-carousel');
    owl.owlCarousel({
    loop: true,
    nav: false,
    margin: 10,
    responsive: {
    0: {
    items: 1
    },
    600: {
    items: 3
    },
    960: {
    items: 5
    },
    1200: {
    items: 6
    }
    }
    });
    owl.on('mousewheel', '.owl-stage', function(e) {
    if (e.deltaY > 0) {
    owl.trigger('next.owl');
    } else {
    owl.trigger('prev.owl');
    }
    e.preventDefault();
    });

//smoothscrolling on .btn click //
// Add smooth scrolling to all links
  $x(".btn").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();
      // Store hash
      var hash = this.hash;
      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $x('html, body').animate({
        scrollTop: $x(hash).offset().top
      }, 800, function(){
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
/*Scroll to top when arrow up clicked BEGIN*/
$x(window).scroll(function() {
    var height = $x(window).scrollTop();
    if (height > 100) {
        $x('#back2Top').fadeIn();
    } else {
        $x('#back2Top').fadeOut();
    }
});
$x(document).ready(function() {
    $x("#back2Top").click(function(event) {
        event.preventDefault();
        $x("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });

});
 /*Scroll to top when arrow up clicked END*/

