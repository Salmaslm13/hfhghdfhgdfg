<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tentang Kami</title>

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else

    @endif
</head>

<body>
    <header id="navbar" class="hidden">
        @include('layouts.navbar')
    </header>
    <main class="bg-white mx-auto max-w-screen-2xl">
        <!-- <section class="relative w-full h-screen">
            <div class="absolute inset-0 bg-black/50">

                <img src="{{ asset('images/younmyoung-cho-1uwIcIBk33I-unsplash.webp') }}"
                    alt="Tentang Kami"
                    class="w-full h-full object-cover ">
                <div class="absolute inset-0 bg-black opacity-60"></div>
                <a href="https://unsplash.com/@ymcho?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash"
                    style="display: none;">Photo by Younmyoung Cho</a>

            </div>
            <div class=" z-10  h-full px-5 sm:px-8 md:px-16 xl:px-32 text-white w-full">
                <h1 class="bottom-24 absolute text-32-2  md:text-40-2 font-philosopher ">
                    Bersama Halal Madani (BHM) adalah lembaga independen berbasis di Indonesia yang berkomitmen untuk mendorong kesadaran masyarakat dalam menerapkan gaya hidup halal.
                </h1>
            </div>

        </section> -->

        <!-- <section class="relative w-full h-screen">
            <div class="absolute inset-0 bg-black/50">
                <img src="{{ asset('images/younmyoung-cho-1uwIcIBk33I-unsplash.webp') }}"
                    alt="Tentang Kami"
                    class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black opacity-60"></div>
                <a href="https://unsplash.com/@ymcho?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash"
                    style="display: none;">Photo by Younmyoung Cho</a>
            </div>

            <div class="relative z-10 h-full px-5 sm:px-8 md:px-16 xl:px-32 text-white">
                <h1 class="bottom-24 absolute text-32-2 md:text-40-2 font-philosopher">
                    Bersama Halal Madani (BHM) adalah lembaga independen berbasis di Indonesia yang berkomitmen untuk mendorong kesadaran masyarakat dalam menerapkan gaya hidup halal.
                </h1>
            </div>
        </section>

        <section class="bg-white my-16 sm:my-20 md:my-24 lg:my-36">


            <div class="mx-32 space-y-16  ">

                <p class=" text-32-2 font-philosopher text-green-600 ">
                    BHM menyediakan pelatihan penyelia halal, auditor halal, dan juru sembelih halal untuk meningkatkan kompetensi SDM
                    dalam industri halal sesuai syariah.
                </p>

  

                <p class="text-32-2 font-philosopher text-green-600 ">
                    Kami mengelola berbagai isu strategis yang berkaitan dengan halal, mengembangkan ekosistem ekonomi syariah yang berkelanjutan, serta memberikan jaminan perlindungan kepada masyarakat dalam transaksi berbasis halal dan syariah.
                </p>

                <p class="text-32-2 font-philosopher text-green-600 ">
                    Dengan semangat kolaborasi, kami berperan aktif dalam menjadikan gaya hidup halal sebagai bagian dari peradaban yang lebih baik—rahmatan lil alamin.
                </p>


            </div>

        </section> -->
        <section class="relative w-full  md:h-screen">
            <!-- Background Image with Overlay -->
            <div class="absolute inset-0">
                <img src="{{ asset('images/younmyoung-cho-1uwIcIBk33I-unsplash.webp') }}"
                    alt="Tentang Kami"
                    class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black opacity-60"></div>
            </div>

            <!-- Text Content -->
            <div class="relative z-10 h-full flex flex-col justify-between p-5 sm:p-8 md:p-16 lg:p-32 text-white">
                <h1 class=" text-24-2 sm:text-32-2 md:text-36-2 lg:text-40-2 font-philosopher md:mt-auto">
                    Bersama Halal Madani (BHM) adalah lembaga independen berbasis di Indonesia yang berkomitmen untuk mendorong kesadaran masyarakat dalam menerapkan gaya hidup halal.
                </h1>
            </div>
        </section>

        <section class=" bg-putih my-16  md:my-24 lg:my-32">
            <div class="mx-5 sm:mx-8 md:mx-16 lg:mx-32 space-y-8 lg:space-y-16">
                <p class="text-16-2 sm:text-20-2 md:text-24-2 lg:text-32-2 font-philosopher text-green-600">
                    BHM menyediakan pelatihan penyelia halal, auditor halal, dan juru sembelih halal untuk meningkatkan kompetensi SDM dalam industri halal sesuai syariah.
                </p>

                <p class="text-16-2 sm:text-20-2 md:text-24-2 lg:text-32-2 font-philosopher text-green-600">
                    Kami mengelola berbagai isu strategis yang berkaitan dengan halal, mengembangkan ekosistem ekonomi syariah yang berkelanjutan, serta memberikan jaminan perlindungan kepada masyarakat dalam transaksi berbasis halal dan syariah.
                </p>

                <p class="text-16-2 sm:text-20-2 md:text-24-2 lg:text-32-2 font-philosopher text-green-600">
                    Dengan semangat kolaborasi, kami berperan aktif dalam menjadikan gaya hidup halal sebagai bagian dari peradaban yang lebih baik—rahmatan lil alamin.
                </p>
                <div class="w-full ">
                    <div class="z-2 relative w-full aspect-[4/3] overflow-hidden rounded-2xl group border-2 md:border-4 border-hijau-3">
                        <video class="w-full h-full object-cover" controls id="video">
                            <source src="{{ asset('videos/video tes.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>

                        <div id="playButton" class="absolute inset-0 flex items-center justify-center bg-black/50 cursor-pointer group-hover:bg-black/30 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24" fill="white" class="opacity-80 group-hover:opacity-100 transition">
                                <path d="M7 6v12l10-6z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section class="relative bg-gradient-to-br from-hijau-2 to-[#031207] ">
            <div class=" mx-auto w-full md:gap-6 lg:gap-12 p-5 py-7 sm:p-8 md:p-12 lg:p-16">


                <div class="flex flex-col md:flex-row justify-between md:my-3 lg:my-4 gap-6 md:gap-8">
                    <!-- Bagian Teks -->
                    <div class="md:min-h-[250px] h-auto flex-1 flex flex-col justify-between">
                        <div>
                            <h2 class="text-16 sm:text-24 md:text-h2 font-medium text-emas-3 capitalize leading-loose tracking-wide italic md:mb-2">
                                Penghargaan
                            </h2>
                            <h3 class="text-32-2 md:text-40-2 lg:text-56-2 font-bold text-putih font-philosopher tracking-wide">
                                Peringkat 1 - Indonesian Halal Award
                            </h3>
                        </div>

                        <div class="mt-4 sm:mt-6 md:mt-auto">
                            <p class="font-regular text-16-2 sm:text-20-2 text-mint-2">
                                Diselenggarakan oleh BPJPH (Badan Penyelenggara Jaminan Produk Halal) pada tahun 2022, BHM diakui sebagai Lembaga Pemeriksa
                                Halal Terakreditasi dengan Jumlah Auditor Halal dan Pemeriksaan Halal Terbanyak.
                            </p>
                        </div>
                    </div>

                    <!-- Bagian Gambar -->
                    <div class="w-full md:w-auto flex-1">
                        <div class="relative w-full aspect-[4/3] md:h-auto md:object-cover md:aspect-auto overflow-hidden rounded-2xl border-2 md:border-4 border-hijau-3">
                            <img src="{{ asset('images/sertifikasi halal img.webp') }}" class="w-full h-full object-cover" alt="Penghargaan Bersama Halal Madani sebagai Lembaga Pemeriksa Halal Terakreditasi dengan Jumlah Auditor Halal dan Pemeriksaan Halal Terbanyak." />
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- <section class="relative bg-putih ">
            <div class=" mx-auto w-full md:gap-6 lg:gap-12 p-5 py-7 sm:p-8 md:p-12 lg:p-16">

                <div class="grid grid-cols-1 md:grid-cols-3 justify-between md:my-3 lg:my-4 gap-6 md:gap-8">
                   
                    <div class="w-full md:w-auto   hidden md:block md:grid col-span-1 md:col-span-1">
                        <div class="relative w-full aspect-[4/3] md:h-auto md:object-cover md:aspect-auto overflow-hidden rounded-2xl border-2 md:border-4 border-emas-3">
                            <img src="{{ asset('images/kerjasama.webp') }}" class="w-full h-full object-cover" alt="Penghargaan Bersama Halal Madani sebagai Lembaga Pemeriksa Halal Terakreditasi dengan Jumlah Auditor Halal dan Pemeriksaan Halal Terbanyak." />
                        </div>
                    </div>
                    
                    <div class="md:min-h-[250px] h-auto md:grid col-span-1 md:col-span-2 justify-between">
                        <div>
                            <h2 class="text-32-2 md:text-40-2 font-bold font-philosopher mb-2 text-hijau-2">Bersama, Wujudkan Ekosistem Halal yang Berkah dan Berkelanjutan</h2>
                            <h3 class=" text-16 md:text-20-2 mb-8 text-hijau-2 ">Jadilah bagian dari perubahan! Bergabunglah dalam kemitraan strategis dengan Bersama Halal Madani untuk membangun industri halal yang kuat dan terpercaya.</h3>
                        </div>


                        <div >
                            <a href="#" class=" bg-gradient-to-r from-[#ECC764] via-[#F5D686] to-[#ECC764] px-6 py-3 flex justify-center text-hitam font-semibold rounded-full text-16 
    hover:bg-gradient-to-r hover:from-[#D9B456] hover:via-[#E6C270] hover:to-[#D9B456] 
   active:bg-gradient-to-r active:from-[#C0A04D] active:via-[#D1AF65] active:to-[#C0A04D] ">
                                Daftar Sertifikasi Halal
                            </a>
                        </div>
                    </div>


                </div>

            </div>
        </section> -->

        <section class="relative ">
            <img src="{{ asset('images/Frame 815 (1).webp') }}" class="object-cover z-0 items-center h-full w-full absolute bottom-0 left-0">

            <div class=" mx-auto w-full md:gap-6 lg:gap-12 p-5 py-7 sm:p-8 md:p-12 lg:p-16">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 justify-between md:my-3 lg:my-4 gap-6 md:gap-8 items-stretch">
                    <!-- Bagian Gambar -->
                    <div class=" z-10 hidden md:block  col-span-1">
                        <div class="relative w-full h-full overflow-hidden rounded-2xl border-2 md:border-4 border-emas-3 lg:aspect-[4/3]">
                            <img src="{{ asset('images/kerjasama.webp') }}" class="w-full h-full object-cover" alt="Penghargaan Bersama Halal Madani sebagai Lembaga Pemeriksa Halal Terakreditasi dengan Jumlah Auditor Halal dan Pemeriksaan Halal Terbanyak." />
                        </div>
                    </div>

                    <!-- Bagian Teks -->
                    <div class="z-10 col-span-1 md:col-span-1 lg:col-span-2  flex flex-col justify-between lg:justify-normal">
                        <div>
                            <h2 class="text-32-2 md:text-40-2 font-bold font-philosopher mb-2 text-hijau-2">
                                Bersama, Wujudkan Ekosistem Halal yang Berkah dan Berkelanjutan
                            </h2>
                            <h3 class="text-16-2 md:text-20-2 mb-8 text-hijau-2">
                                Jadilah bagian dari perubahan! Bergabunglah dalam kemitraan strategis dengan Bersama Halal Madani untuk membangun industri halal yang kuat dan terpercaya.
                            </h3>
                        </div>

                        <!-- Tombol -->
                        <div class="mt-auto lg:mt-0">
                            <a href="#" class="bg-gradient-to-r from-[#ECC764] via-[#F5D686] to-[#ECC764] px-6 py-3 text-center text-hitam font-semibold rounded-full text-16 
                        hover:bg-gradient-to-r hover:from-[#D9B456] hover:via-[#E6C270] hover:to-[#D9B456] 
                        active:bg-gradient-to-r active:from-[#C0A04D] active:via-[#D1AF65] active:to-[#C0A04D] 
                        inline-block max-w-max">
                                Jalin Kemitraan
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>







    </main>

    <footer id="footer">
        @include('layouts.footer')
    </footer>
    <!-- 

    <footer class="py-16 text-center text-sm text-black dark:text-white/70">
        Bersama Halal Madani
    </footer> -->
</body>


<!-- <script>
    // Fungsi untuk memulai animasi fade dan transformasi
    const fadeInElements = document.querySelectorAll('[data-fade]');

    const fadeInOptions = {
        threshold: [0.2, 1.0], // Menambahkan threshold pada 30% dan 100%
    };

    const fadeInObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                if (entry.intersectionRatio === 1) {
                    entry.target.classList.remove('opacity-30', 'translate-y-10');
                    entry.target.classList.add('opacity-100', 'translate-y-0');
                }

            } else {

                entry.target.classList.remove('opacity-100', 'opacity-30', 'translate-y-0', 'translate-y-10');
                entry.target.classList.add('opacity-30', 'translate-y-10');
            }
        });
    }, fadeInOptions);

    fadeInElements.forEach(element => {
        fadeInObserver.observe(element);
    });
</script> -->

<script>
    let lastScrollTop = 0;
    const navbar = document.getElementById('navbar');

    // Menyembunyikan navbar saat pertama kali dimuat
    window.addEventListener('load', function() {
        navbar.classList.add('hidden');
    });

    window.addEventListener('scroll', function() {
        const currentScroll = window.pageYOffset || document.documentElement.scrollTop;

        // Jika pengguna berada di posisi scroll top (0), sembunyikan navbar
        if (currentScroll === 0) {
            navbar.classList.remove('visible');
            navbar.classList.add('hidden');
            return; // Keluar dari fungsi jika di posisi top
        }

        // if (currentScroll > lastScrollTop) {
        //     // Scroll ke bawah
        //     navbar.classList.remove('visible');
        //     navbar.classList.add('hidden');
        // } 
        else {
            // Scroll ke atas
            navbar.classList.remove('hidden');
            navbar.classList.add('visible');
        }
        lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // Untuk Mobile or negative scrolling
    });
</script>

<script>
    const video = document.getElementById("video");
    const playButton = document.getElementById("playButton");

    playButton.addEventListener("click", () => {
        video.play();
        playButton.style.display = "none"; // Sembunyikan tombol Play saat video mulai
    });

    video.addEventListener("pause", () => {
        playButton.style.display = "flex"; // Tampilkan tombol Play lagi saat video dijeda
    });
</script>





</html>