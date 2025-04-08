// export function initFadeEffect() {
//     const fadeInElements = document.querySelectorAll("[data-fade]");
//     const fadeInOptions = {
//         threshold: [0.2, 1.0],
//     };

//     const fadeInObserver = new IntersectionObserver((entries) => {
//         entries.forEach((entry) => {
//             if (entry.isIntersecting) {
//                 if (entry.intersectionRatio === 1) {
//                     entry.target.classList.remove(
//                         "opacity-30",
//                         "translate-y-10",
//                     );
//                     entry.target.classList.add("opacity-100", "translate-y-0");
//                 }
//             } else {
//                 entry.target.classList.remove(
//                     "opacity-100",
//                     "opacity-30",
//                     "translate-y-0",
//                     "translate-y-10",
//                 );
//                 entry.target.classList.add("opacity-30", "translate-y-10");
//             }
//         });
//     }, fadeInOptions);

//     fadeInElements.forEach((element) => fadeInObserver.observe(element));
// }
export function initFadeEffect() {
    console.log("🎬 initFadeEffect dipanggil!");

    const fadeInElements = document.querySelectorAll("[data-fade]");
    console.log("🔍 Elemen ditemukan:", fadeInElements);

    if (fadeInElements.length === 0) {
        console.error("⚠️ Tidak ada elemen dengan [data-fade] ditemukan!");
        return;
    }

    const fadeInOptions = { threshold: [0.2, 1.0] };

    const fadeInObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.remove("opacity-30", "translate-y-10");
                entry.target.classList.add("opacity-100", "translate-y-0");
            } else {
                entry.target.classList.remove("opacity-100", "translate-y-0");
                entry.target.classList.add("opacity-30", "translate-y-10");
            }
        });
    }, fadeInOptions);

    fadeInElements.forEach((element) => fadeInObserver.observe(element));
}
