import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

const accordionHeader = document.querySelectorAll(".accordion-header");

accordionHeader.forEach((header) => {
    header.addEventListener("click", function () {
        const accordionContent =
            header.parentElement.querySelector(".accordion-content");
        let accordionMaxHeight = accordionContent.style.maxHeight;

        // Condition handling
        if (accordionMaxHeight == "0px" || accordionMaxHeight.length == 0) {
            accordionContent.style.maxHeight = `${
                accordionContent.scrollHeight + 32
            }px`;
            header.querySelector(".bx").classList.remove("bx-plus");
            header.querySelector(".bx").classList.add("bx-minus");

        } else {
            accordionContent.style.maxHeight = `0px`;
            header.querySelector(".bx").classList.add("bx-plus");
            header.querySelector(".bx").classList.remove("bx-minus");

        }
    });
});

const backToTopLink = document.querySelector('a[href="#top"]');

backToTopLink.addEventListener("click", (event) => {
  event.preventDefault(); // Prevent default jump
  window.scrollTo({
    top: 0,
    behavior: "smooth", // Smooth scrolling
  });
});

window.addEventListener("scroll", () => {
  const backToTopLink = document.querySelector('a[href="#top"]');
  if (window.scrollY > 300) {
    // Show after scrolling 300px
    backToTopLink.classList.add("show");
  } else {
    backToTopLink.classList.remove("show");
  }
});
