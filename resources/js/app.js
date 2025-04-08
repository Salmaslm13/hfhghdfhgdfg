// import './bootstrap';

// import Alpine from 'alpinejs';

// window.Alpine = Alpine;

// Alpine.start();


import { initFadeEffect } from "./fadeEffect.js";




import "flatpickr/dist/flatpickr.min.css";
import "dropzone/dist/dropzone.css";

import flatpickr from "flatpickr";
import Dropzone from "dropzone";

import "./calendar-init.js";
import "./image-resize";

Alpine.plugin(persist);
window.Alpine = Alpine;
Alpine.start();

// Init flatpickr
flatpickr(".datepicker", {
  mode: "range",
  static: true,
  monthSelectorType: "static",
  dateFormat: "M j, Y",
  defaultDate: [new Date().setDate(new Date().getDate() - 6), new Date()],
  prevArrow:
    '<svg class="stroke-current" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.25 6L9 12.25L15.25 18.5" stroke="" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>',
  nextArrow:
    '<svg class="stroke-current" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.75 19L15 12.75L8.75 6.5" stroke="" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>',
  onReady: (selectedDates, dateStr, instance) => {
    // eslint-disable-next-line no-param-reassign
    instance.element.value = dateStr.replace("to", "-");
    const customClass = instance.element.getAttribute("data-class");
    instance.calendarContainer.classList.add(customClass);
  },
  onChange: (selectedDates, dateStr, instance) => {
    // eslint-disable-next-line no-param-reassign
    instance.element.value = dateStr.replace("to", "-");
  },
});

// Init Dropzone
const dropzoneArea = document.querySelectorAll("#demo-upload");

if (dropzoneArea.length) {
  let myDropzone = new Dropzone("#demo-upload", { url: "/file/post" });
}

// Document Loaded
document.addEventListener("DOMContentLoaded", () => {
  chart01();
  chart02();
  chart03();
  map01();
});

// Get the current year
const year = document.getElementById("year");
if (year) {
  year.textContent = new Date().getFullYear();
}

// For Copy//
document.addEventListener("DOMContentLoaded", () => {
  const copyInput = document.getElementById("copy-input");
  if (copyInput) {
    // Select the copy button and input field
    const copyButton = document.getElementById("copy-button");
    const copyText = document.getElementById("copy-text");
    const websiteInput = document.getElementById("website-input");

    // Event listener for the copy button
    copyButton.addEventListener("click", () => {
      // Copy the input value to the clipboard
      navigator.clipboard.writeText(websiteInput.value).then(() => {
        // Change the text to "Copied"
        copyText.textContent = "Copied";

        // Reset the text back to "Copy" after 2 seconds
        setTimeout(() => {
          copyText.textContent = "Copy";
        }, 2000);
      });
    });
  }
});


// // app.js

// // Fungsi untuk memulai animasi fade dan transformasi
// function initFadeInAnimation() {
//     const fadeInElements = document.querySelectorAll('[data-fade]');

//     const fadeInOptions = {
//         threshold: [0.2, 1.0], // Menambahkan threshold pada 20% dan 100%
//     };

//     const fadeInObserver = new IntersectionObserver((entries) => {
//         entries.forEach(entry => {
//             if (entry.isIntersecting) {
//                 if (entry.intersectionRatio === 1) {
//                     entry.target.classList.remove('opacity-30', 'translate-y-10');
//                     entry.target.classList.add('opacity-100', 'translate-y-0');
//                 }
//             } else {
//                 entry.target.classList.remove('opacity-100', 'opacity-30', 'translate-y-0', 'translate-y-10');
//                 entry.target.classList.add('opacity-30', 'translate-y-10');
//             }
//         });
//     }, fadeInOptions);

//     fadeInElements.forEach(element => {
//         fadeInObserver.observe(element);
//     });
// }

// // Menjalankan fungsi saat DOM sepenuhnya dimuat
// document.addEventListener('DOMContentLoaded', initFadeInAnimation);



document.addEventListener("DOMContentLoaded", () => {
    initFadeEffect();
});