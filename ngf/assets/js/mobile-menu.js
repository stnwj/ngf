// Mobile Hamburger Menu Handler
document.addEventListener("DOMContentLoaded", function () {
  // Get mobile menu elements
  const mobileMenuToggle = document.querySelector('[data-bs-toggle="collapse"][data-bs-target="#mobileMenu"]');
  const mobileMenu = document.getElementById("mobileMenu");
  const hamburgerIcon = mobileMenuToggle?.querySelector("i");

  // Function to close mobile menu
  function closeMobileMenu() {
    if (mobileMenu && mobileMenu.classList.contains("show")) {
      // Use Bootstrap's collapse API to close the menu if available
      if (typeof bootstrap !== "undefined" && bootstrap.Collapse) {
        const bsCollapse = new bootstrap.Collapse(mobileMenu, {
          toggle: false,
        });
        bsCollapse.hide();
      } else {
        // Fallback: manually remove show class
        mobileMenu.classList.remove("show");
        mobileMenu.style.display = "none";
      }

      // Update hamburger icon to menu icon
      if (hamburgerIcon) {
        hamburgerIcon.classList.remove("bi-x-lg");
        hamburgerIcon.classList.add("bi-list");
      }
    }
  }

  // Function to toggle hamburger icon
  function toggleHamburgerIcon() {
    if (hamburgerIcon) {
      if (mobileMenu.classList.contains("show")) {
        hamburgerIcon.classList.remove("bi-list");
        hamburgerIcon.classList.add("bi-x-lg");
      } else {
        hamburgerIcon.classList.remove("bi-x-lg");
        hamburgerIcon.classList.add("bi-list");
      }
    }
  }

  // Add click event listener to hamburger button
  if (mobileMenuToggle) {
    mobileMenuToggle.addEventListener("click", function (e) {
      e.stopPropagation(); // Prevent event from bubbling up

      // Toggle icon after a short delay to let Bootstrap handle the collapse
      setTimeout(toggleHamburgerIcon, 50);
    });
  }

  // Add a flag to track if menu is being opened
  let isMenuOpening = false;
  let menuOpenTime = 0;

  // Use MutationObserver to watch for menu state changes
  if (mobileMenu) {
    const observer = new MutationObserver(function (mutations) {
      mutations.forEach(function (mutation) {
        if (mutation.type === "attributes" && mutation.attributeName === "class") {
          if (mobileMenu.classList.contains("show")) {
            menuOpenTime = Date.now();
            isMenuOpening = true;
            setTimeout(() => {
              isMenuOpening = false;
            }, 500); // Give menu more time to fully open
          }
        }
      });
    });

    observer.observe(mobileMenu, {
      attributes: true,
      attributeFilter: ["class"],
    });
  }

  // Add click event listeners to mobile menu links to close menu when navigating
  const mobileMenuLinks = mobileMenu?.querySelectorAll('a[href^="#"]');
  if (mobileMenuLinks) {
    mobileMenuLinks.forEach((link) => {
      link.addEventListener("click", function () {
        // Close menu after a short delay to allow smooth scrolling
        setTimeout(closeMobileMenu, 100);
      });
    });
  }

  // Listen for Bootstrap collapse events to update icon
  if (mobileMenu) {
    mobileMenu.addEventListener("show.bs.collapse", function () {
      isMenuOpening = true;
      setTimeout(() => {
        isMenuOpening = false;
      }, 300); // Give menu time to fully open
    });

    mobileMenu.addEventListener("shown.bs.collapse", function () {
      if (hamburgerIcon) {
        hamburgerIcon.classList.remove("bi-list");
        hamburgerIcon.classList.add("bi-x-lg");
      }
    });

    mobileMenu.addEventListener("hidden.bs.collapse", function () {
      if (hamburgerIcon) {
        hamburgerIcon.classList.remove("bi-x-lg");
        hamburgerIcon.classList.add("bi-list");
      }
    });
  }

  // Close menu when user scrolls
  let scrollTimeout;
  window.addEventListener("scroll", function () {
    if (mobileMenu && mobileMenu.classList.contains("show") && !isMenuOpening) {
      clearTimeout(scrollTimeout);
      scrollTimeout = setTimeout(function () {
        closeMobileMenu();
      }, 100);
    }
  });

  // Close menu when window is resized (orientation change)
  window.addEventListener("resize", function () {
    if (mobileMenu && mobileMenu.classList.contains("show") && !isMenuOpening) {
      closeMobileMenu();
    }
  });

  // Handle click outside to close menu with better timing
  document.addEventListener("click", function (e) {
    // Don't close if clicking on the hamburger button or inside the mobile menu
    if (mobileMenuToggle && (mobileMenuToggle.contains(e.target) || mobileMenu.contains(e.target))) {
      return;
    }

    // Don't close if menu is currently opening or was just opened
    if (isMenuOpening || Date.now() - menuOpenTime < 500) {
      return;
    }

    // Only close if menu is actually open
    if (mobileMenu && mobileMenu.classList.contains("show")) {
      closeMobileMenu();
    }
  });
});
