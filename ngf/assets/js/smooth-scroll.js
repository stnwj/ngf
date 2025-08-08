/**
 * SmoothScroll Class
 * Menangani smooth scroll untuk anchor links
 */
class SmoothScroll {
  constructor() {
    this.init();
  }

  /**
   * Initialize smooth scroll functionality
   */
  init() {
    document.addEventListener("DOMContentLoaded", () => {
      this.bindEvents();
    });
  }

  /**
   * Bind click events to anchor links
   */
  bindEvents() {
    const links = document.querySelectorAll('a[href^="#"]');

    links.forEach((link) => {
      link.addEventListener("click", (e) => {
        e.preventDefault();
        this.scrollToTarget(this.getTargetId(link));
      });
    });
  }

  /**
   * Get target ID from href attribute
   * @param {HTMLElement} link - Anchor element
   * @returns {string} Target ID
   */
  getTargetId(link) {
    return link.getAttribute("href");
  }

  /**
   * Scroll to target element with smooth animation
   * @param {string} targetId - Target element ID
   */
  scrollToTarget(targetId) {
    const targetElement = document.querySelector(targetId);

    if (targetElement) {
      targetElement.scrollIntoView({
        behavior: "smooth",
        block: "start",
      });
    }
  }

  /**
   * Scroll to target with custom offset
   * @param {string} targetId - Target element ID
   * @param {number} offset - Custom offset in pixels
   */
  scrollToTargetWithOffset(targetId, offset = 0) {
    const targetElement = document.querySelector(targetId);

    if (targetElement) {
      const headerHeight = document.querySelector("header")?.offsetHeight || 0;
      const targetPosition = targetElement.offsetTop - headerHeight - offset;

      window.scrollTo({
        top: targetPosition,
        behavior: "smooth",
      });
    }
  }

  /**
   * Add new anchor link dynamically
   * @param {string} selector - CSS selector for the link
   */
  addLink(selector) {
    const link = document.querySelector(selector);
    if (link) {
      link.addEventListener("click", (e) => {
        e.preventDefault();
        this.scrollToTarget(this.getTargetId(link));
      });
    }
  }
}

// Initialize SmoothScroll when DOM is ready
document.addEventListener("DOMContentLoaded", () => {
  new SmoothScroll();
});
