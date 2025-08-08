function initCarousel() {
  // Check if jQuery is loaded
  if (typeof $ === "undefined") {
    console.error("jQuery not loaded, retrying...");
    setTimeout(initCarousel, 500);
    return;
  }

  console.log("jQuery loaded:", typeof $);
  console.log("jQuery version:", $.fn.jquery);
  console.log("Owl Carousel loaded:", typeof $.fn.owlCarousel);

  if (typeof $.fn.owlCarousel !== "undefined") {
    var owl = $(".clients-carousel");

    // Destroy existing carousel if any
    if (owl.hasClass("owl-loaded")) {
      owl.owlCarousel("destroy");
    }

    owl.owlCarousel({
      loop: true,
      margin: 20,
      nav: false,
      dots: false,
      autoplay: true,
      autoplayTimeout: 2000,
      autoplayHoverPause: false,
      autoplaySpeed: 2000,
      smartSpeed: 1000,
      slideTransition: "linear",
      responsive: {
        0: {
          items: 1,
          margin: 10,
        },
        480: {
          items: 2,
          margin: 15,
        },
        576: {
          items: 3,
          margin: 20,
        },
        768: {
          items: 4,
          margin: 20,
        },
        992: {
          items: 6,
          margin: 30,
        },
        1200: {
          items: 8,
          margin: 40,
        },
      },
    });
    console.log("Owl Carousel initialized successfully");

    // Force autoplay to start
    setTimeout(function () {
      owl.trigger("play.owl.autoplay", [2000]);
      console.log("Autoplay triggered");
    }, 1000);
  } else {
    console.error("Owl Carousel not loaded, retrying...");
    setTimeout(initCarousel, 500);
  }
}

// Wait for jQuery to be available
function waitForJQuery() {
  if (typeof $ !== "undefined") {
    console.log("jQuery is available, initializing...");
    $(document).ready(function () {
      console.log("Document ready, initializing carousel...");
      console.log("jQuery version:", $.fn.jquery);
      console.log("Owl Carousel available:", typeof $.fn.owlCarousel);

      // Wait a bit longer to ensure all resources are loaded
      setTimeout(initCarousel, 500);

      // Additional check after 3 seconds
      setTimeout(function () {
        var owl = $(".clients-carousel");
        if (!owl.hasClass("owl-loaded")) {
          console.log("Carousel not loaded, trying alternative initialization...");
          initCarousel();
        } else {
          console.log("Carousel is loaded, checking autoplay...");
          // Force autoplay if it's not running
          owl.trigger("play.owl.autoplay", [2000]);
        }
      }, 3000);

      // Final check after 5 seconds
      setTimeout(function () {
        var owl = $(".clients-carousel");
        if (owl.hasClass("owl-loaded")) {
          console.log("Final autoplay check...");
          owl.trigger("play.owl.autoplay", [2000]);
        }
      }, 5000);
    });
  } else {
    console.log("jQuery not available yet, waiting...");
    setTimeout(waitForJQuery, 100);
  }
}

// Start waiting for jQuery
waitForJQuery();
