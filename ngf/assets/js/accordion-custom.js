// Accordion custom simple JS

console.log("Accordion JS loaded");

document.addEventListener("DOMContentLoaded", function () {
  // Ambil semua item accordion
  const accordionItems = document.querySelectorAll(".collapse-item-clik");

  accordionItems.forEach(function (item, idx) {
    const toggleBtn = item.querySelector(".custom-accordion-toggle");
    const content = item.querySelector(".custom-accordion-content");
    const icon = item.querySelector(".custom-accordion-icon");

    // Set default: semua panel terbuka
    if (content && icon) {
      content.classList.add("open");
      icon.src = "assets/images/ic_circle_minus.svg";
      icon.alt = "minus";
    }

    if (toggleBtn && content && icon) {
      toggleBtn.addEventListener("click", function () {
        const isOpen = content.classList.contains("open");
        if (isOpen) {
          content.classList.remove("open");
          icon.src = "assets/images/ic_circle_plus.svg";
          icon.alt = "plus";
          console.log(`Accordion ${idx} closed.`);
        } else {
          content.classList.add("open");
          icon.src = "assets/images/ic_circle_minus.svg";
          icon.alt = "minus";
          console.log(`Accordion ${idx} opened.`);
        }
      });
    }
  });
});
