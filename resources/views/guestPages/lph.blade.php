<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LPH Bersama Halal Madani</title>

    <!-- Fonts -->
    <!-- <link rel="preconnect" href="https://fonts.bunny.net"> -->
    <!-- <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> -->

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else

    @endif


    <script src="https://cdn.jsdelivr.net/npm/alpinejs" defer></script>
</head>




<body>


    <!-- 
    sm: 640px (small)
    md: 768px (medium)
    lg: 1024px (large)
    xl: 1280px (extra large)
    2xl: 1536px (2x extra large) 
    -->

    <header id="navbar" class="hidden">
        @include('layouts.navbar')
    </header>

    <main class="bg-white mx-auto max-w-screen-2xl">

        <section class=" bg-gradient-to-br from-hijau-2 via-[#031207] to-[#031207]      grid grid-cols-2 items-center lg:items-start md:h-full md:py-10">
            <div class=" w-full col-span-2 md:col-span-1  px-5 sm:px-8 pt-10 md:px-10 md:py-10 lg:px-14 lg:py-12 text-center md:text-left">
                <p class="text-putih mb-2 md:mb-3 lg:mb-4 font-medium text-16  sm:text-20 md:text-24  italic">
                    BERSAMA HALAL MADANI
                </p>
                <h1 class=" text-32 sm:text-36 md:text-56 text-putih font-philosopher font-bold mb-2 sm:mb-3 ">
                    Lembaga Pemeriksa Halal
                </h1>

                <p class="font-regular text-16 sm:text-20 text-mint-2 mb-8 md:mb-10">
                    Percayakan proses audit sertifikasi halal usaha Anda kepada Bersama Halal Madani. Kami siap mendampingi hingga sertifikat halal Anda terbit. </p>

                <div>

                    <a href="#" class=" bg-gradient-to-r from-[#ECC764] via-[#F5D686] to-[#ECC764] px-6 py-3 text-hitam font-semibold rounded-full text-16 
    hover:bg-gradient-to-r hover:from-[#D9B456] hover:via-[#E6C270] hover:to-[#D9B456] 
   active:bg-gradient-to-r active:from-[#C0A04D] active:via-[#D1AF65] active:to-[#C0A04D] ">
                        Daftar SIHALAL
                    </a>



                </div>





            </div>

            <div class=" col-span-2 md:col-span-1  h-full items-center justify-center p-3 sm:p-5 md:p-8 mt-12 md:mt-0">
                <div class="bg-putih rounded-2xl flex flex-col items-center justify-center">
                    <img src="{{ asset('images/logo lph (2) 1.png') }}" class="h-36 sm:h-44 md:h-56 w-auto" alt="Logo LPH Lembaga Pemeriksa Halal Bersama Halal Madani" />
                    <div>
                        <p class="font-medium text-14  px-6  md:px-10  text-hitam text-center">
                            Terakreditasi & Diakui Resmi
                        </p>

                        <div class=" flex items-center  w-full mb-4">
                            <div class="flex items-center  gap-4  md:gap-8 p-6">
                                <img src="{{ asset('images/Frame 625.png') }}" class="h-16 sm:h-20 md:h-16 lg:h-24 w-auto" alt="Logo LA LPK" />
                                <img src="{{ asset('images/Frame 626.png') }}" class="h-16 sm:h-20 md:h-16 lg:h-24 w-auto" alt="Logo BPJPH" />
                                <img src="{{ asset('images/Frame 627.png') }}" class="h-16 sm:h-20 md:h-16 lg:h-24 w-auto" alt="Logo BNSP" />
                            </div>

                        </div>
                    </div>
                </div>

            </div>




        </section>
        <section class="grid grid-cols-10    bg-gradient-to-b from-[#031207]   to-hijau-2 place-items-end">
            <div class="col-span-10 md:col-span-6">
                <div class="w-full p-3 sm:p-5 md:p-10 lg:p-14  bg-emas-3 md:rounded-tr-2xl  flex flex-col items-center justify-between">
                    <p class="hidden md:block text-14-3 md:text-24-2 lg:text-36-2 text-hijau-2 font-philosopher transform translate-y-10 transition-all duration-20000" data-fade>
                        Sebagai lembaga yang telah terakreditasi oleh Badan Penyelenggara Jaminan Produk Halal (BPJPH) pada tahun 2022, LPH BHM berkomitmen memastikan setiap produk memenuhi standar kehalalan yang ditetapkan.
                    </p>
                    <div class="md:hidden text-14-3 sm:text-16-2 md:text-18-2 text-hitam transform translate-y-10 transition-all duration-20000" data-fade>
                        <br>

                        <p class="   ">
                            Sebagai lembaga yang telah terakreditasi oleh Badan Penyelenggara Jaminan Produk Halal (BPJPH) pada tahun 2022, LPH BHM berkomitmen memastikan setiap produk memenuhi standar kehalalan yang ditetapkan.
                        </p>
                        <br>
                        <p class="   ">
                            LPH BHM merupakan lembaga profesional yang bertugas melakukan pemeriksaan dan/atau pengujian kehalalan suatu produk.
                        </p>
                        <br>
                        <p class="   ">
                            Akreditasi ini tercatat dengan nomor REG RI LH A-2 U12790000000000000861324.
                        </p>
                        <br>
                    </div>


                </div>
            </div>
            <div class="hidden md:block col-span-10 md:col-span-4">
                <div class="w-full aspect-[1.5/1] lg:aspect-[2/1]">
                    <img src="{{ asset('images/3158.webp') }}" class="object-cover w-full h-full" />
                </div>


            </div>

            <div class="hidden md:block col-span-10 md:col-span-5 lg:col-span-4">

                <div class="w-full p-3 sm:p-5 md:p-10 lg:p-14 bg-hijau-4 rounded-br-2xl  flex flex-col items-center justify-between">
                    <p class="text-14-3 sm:text-16-2 md:text-20-2 text-putih transform translate-y-10 transition-all duration-20000" data-fade>
                        LPH BHM merupakan lembaga profesional yang bertugas melakukan pemeriksaan dan/atau pengujian kehalalan suatu produk.
                    </p>

                </div>

            </div>
            <div class="hidden md:block col-span-10 md:col-span-5 lg:col-span-6 p-3 sm:p-5 md:p-14 bg-hijau-2 h-full items-center ">

                <p class="font-medium font-philosopher text-14-3 md:text-24-2 lg:text-32-2 text-putih transform translate-y-10 transition-all duration-20000" data-fade>
                    Akreditasi ini tercatat dengan nomor REG RI LH A-2 U12790000000000000861324.
                </p>

            </div>

        </section>

        <section class="bg-gradient-to-b from-hijau-2   to-[#031207]  py-16 sm:py-20 md:py-24 lg:py-36  px-5 sm:px-8 text-center justify-items-center">


            <div class=" md:w-3/4 lg:2/3 text-putih">

                <div class="flex flex-col items-center justify-center gap-1 sm:gap-2 md:gap-4">
                    <h2 class="text-32 sm:text-40 md:text-56 font-bold  font-philosopher transform translate-y-10 transition-all duration-20000" data-fade>
                        Visi LPH BHM
                    </h2>

                    <svg width="38" height="37" viewBox="0 0 38 37" class=" w-auto h-4 md:h-6  transform translate-y-10 transition-all duration-20000" data-fade fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M24.1745 18.4995L26.9232 16.1342H29.9642L32.7129 18.4995L29.9642 20.8648H26.9232L24.1745 18.4995ZM34.4268 18.4995L30.3753 21.9852H27.417L29.5098 24.0792L29.9088 29.4077L24.5796 29.0088L22.4868 26.9158V29.8739L19.0005 33.9253L15.5142 29.8739V26.9158L13.4214 29.0088L8.09225 29.4077L8.49126 24.0792L10.584 21.9852H7.62573L3.57418 18.4995L7.62573 15.0128H10.584L8.49126 12.9198L8.09225 7.59031L13.4214 7.99023L15.5142 10.0832V7.12509L19.0005 3.07371L22.4868 7.12509V10.0832L24.5796 7.99023L29.9088 7.59031L29.5098 12.9198L27.417 15.0128H30.3753L34.4268 18.4995ZM19.0005 32.2121L16.6347 29.4629V26.4224L19.0005 23.6732L21.3653 26.4224V29.4629L19.0005 32.2121ZM19.0005 21.9601L16.2377 25.1704L16.5551 20.9452L12.3302 21.2617L15.5404 18.4995L12.3302 15.7373L16.5551 16.0538L16.2377 11.8286L19.0005 15.0389L21.7633 11.8286L21.4459 16.0538L25.6708 15.7373L22.4606 18.4995L25.6708 21.2617L21.4459 20.9452L21.7633 25.1704L19.0005 21.9601ZM19.0005 37L13.5816 31.5811C11.0274 31.5811 8.47312 31.5811 5.91886 31.5811V23.9184L0.5 18.4995L5.91886 13.0806V5.41793H13.5816L19.0005 0L24.4184 5.41793C26.9736 5.41793 29.5269 5.41793 32.0811 5.41793V13.0806L37.5 18.4995L32.0811 23.9184V31.5811H24.4184L19.0005 37ZM28.6956 28.1949L25.0793 27.9236L22.9311 25.7753L22.6601 22.159L26.2764 22.4293L28.4246 24.5786L28.6956 28.1949ZM5.2881 18.4995L8.03683 16.1342H11.0778L13.8265 18.4995L11.0778 20.8648H8.03683L5.2881 18.4995ZM9.3054 28.1949L9.57644 24.5786L11.7246 22.4293L15.3409 22.159L15.0709 25.7753L12.9217 27.9236L9.3054 28.1949ZM19.0005 13.3257L16.6347 10.5766V7.53505L19.0005 4.7869L21.3653 7.53505V10.5766L19.0005 13.3257ZM28.6956 8.80412L28.4246 12.4204L26.2764 14.5697L22.6601 14.84L22.9311 11.2237L25.0793 9.07541L28.6956 8.80412ZM9.3054 8.80412L12.9217 9.07541L15.0709 11.2237L15.3409 14.84L11.7246 14.5697L9.57644 12.4204L9.3054 8.80412Z" fill="#F3E6C2" />
                    </svg>


                    <p class="lg:px-6 text-14-3 sm:text-16-2 md:text-20-2  text-center transform translate-y-10 transition-all duration-20000" data-fade>
                        Menjadi lembaga pemeriksa halal profesional yang membudayakan memproduksi dan mengonsumsi produk halal, untuk mewujudkan budaya hidup halal sebagai peradaban rahmatan lil 'alamin.
                    </p>
                </div>


            </div>
        </section>

        <section class="bg-putih p-5 md:px-10   md:py-24 lg:py-36">

            <div class=" md:flex justify-center text-hitam">
                <h2 class="text-center md:text-left text-32 sm:text-40 md:text-56  font-bold  font-philosopher transform translate-y-10 transition-all duration-20000" data-fade>
                    Misi
                </h2>

                <ul class="mt-3 md:mt-0 list-disc pl-8 md:pl-24 md:space-y-8 text-14-3 sm:text-16-2 md:text-20-2">
                    <li class=" transform translate-y-10 transition-all duration-20000" data-fade>Melaksanakan fungsi pemeriksaan dan/atau pengujian kehalalan produk untuk sertifikasi halal.</li>
                    <li class=" transform translate-y-10 transition-all duration-20000" data-fade>Turut serta dalam penyelenggaraan jaminan produk halal.</li>
                    <li class=" transform translate-y-10 transition-all duration-20000" data-fade>Menjalin berbagai kerjasama terkait sertifikasi halal dan pengembangan industri halal.</li>
                    <li class=" transform translate-y-10 transition-all duration-20000" data-fade>Terlibat aktif dalam menghadirkan ekosistem halal.</li>
                </ul>

            </div>
        </section>

        <section class="bg-hijau-1 py-8 sm:py-20 md:py-24 px-5 sm:px-14   justify-between  flex flex-col lg:flex-row">
            <h2 class="text-emas-3 text-20 sm:text-24 md:text-h2 font-medium capitalize leading-loose tracking-wide italic mb-6 sm:mb-10 md:mb-12 lg:mb-0 transform translate-y-10 transition-all duration-20000" data-fade>Ruang Lingkup Sertifikasi Halal</h2>
            <div class="justify-between  flex flex-col md:flex-row md:space-x-8 gap-5 md:gap-0">

                <div class="bg-gradient-to-br from-[#072C11] via-hijau-2 to-[#072C11]  rounded-2xl p-4 md:p-8  border-[1.5px] border-hijau-5 flex flex-col items-center w-auto md:grow lg:grow-0 transform translate-y-10 transition-all duration-20000" data-fade>

                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.4475 12.2575C4.25889 12.0255 4.12472 11.7541 4.05484 11.4634C3.98497 11.1726 3.98118 10.8699 4.04375 10.5775C4.9725 6.1875 10 3 16 3C22 3 27.0275 6.1875 27.9562 10.5775C28.0195 10.8701 28.0162 11.1732 27.9467 11.4644C27.8772 11.7556 27.7432 12.0274 27.5546 12.2599C27.3661 12.4924 27.1277 12.6796 26.8571 12.8077C26.5865 12.9358 26.2906 13.0015 25.9912 13H6.00875C5.70955 13.0009 5.41396 12.9347 5.14375 12.8062C4.87355 12.6777 4.63562 12.4902 4.4475 12.2575ZM28.6575 19.06L23.5163 20.935L18.875 19.0713C18.6367 18.976 18.3708 18.976 18.1325 19.0713L13.5075 20.9225L8.875 19.0713C8.64694 18.9801 8.39332 18.9761 8.1625 19.06L2.6625 21.06C2.43005 21.1623 2.24523 21.3493 2.14557 21.5829C2.04591 21.8165 2.03888 22.0792 2.12589 22.3179C2.2129 22.5565 2.38744 22.753 2.61409 22.8676C2.84073 22.9823 3.1025 23.0063 3.34625 22.935L5 22.3363V23C5 24.3261 5.52678 25.5979 6.46447 26.5355C7.40215 27.4732 8.67392 28 10 28H22C23.3261 28 24.5979 27.4732 25.5355 26.5355C26.4732 25.5979 27 24.3261 27 23V21.7913L29.3412 20.94C29.4725 20.9016 29.5945 20.8366 29.6997 20.7492C29.8049 20.6617 29.891 20.5536 29.9528 20.4315C30.0145 20.3095 30.0505 20.176 30.0586 20.0395C30.0667 19.9029 30.0467 19.7662 29.9999 19.6377C29.953 19.5091 29.8803 19.3916 29.7862 19.2923C29.6921 19.1931 29.5786 19.1141 29.4528 19.0605C29.3269 19.0068 29.1915 18.9795 29.0547 18.9803C28.9179 18.9811 28.7827 19.0099 28.6575 19.065V19.06ZM3 17H29C29.2652 17 29.5196 16.8946 29.7071 16.7071C29.8946 16.5196 30 16.2652 30 16C30 15.7348 29.8946 15.4804 29.7071 15.2929C29.5196 15.1054 29.2652 15 29 15H3C2.73478 15 2.48043 15.1054 2.29289 15.2929C2.10536 15.4804 2 15.7348 2 16C2 16.2652 2.10536 16.5196 2.29289 16.7071C2.48043 16.8946 2.73478 17 3 17Z" fill="white" />
                    </svg>


                    <h4 class="mt-2 text-24 md:text-36-2 text-putih font-philosopher">Barang</h4>
                </div>
                <div class="bg-gradient-to-br from-[#072C11] via-hijau-2 to-[#072C11]  rounded-2xl p-4 md:p-8  border-[1.5px] border-hijau-5 flex flex-col items-center w-auto md:grow lg:grow-0 transform translate-y-10 transition-all duration-20000" data-fade>


                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M31.7874 13.4878L28.5974 7.1053C28.4799 6.87038 28.3173 6.66091 28.1188 6.48886C27.9203 6.3168 27.6899 6.18553 27.4407 6.10253C27.1915 6.01954 26.9284 5.98645 26.6664 6.00515C26.4043 6.02386 26.1486 6.09399 25.9137 6.21155L22.8049 7.7653L16.2562 6.0328C16.0882 5.98907 15.9117 5.98907 15.7437 6.0328L9.19495 7.7653L6.08619 6.21155C5.8513 6.09399 5.59554 6.02386 5.33354 6.00515C5.07153 5.98645 4.80841 6.01954 4.5592 6.10253C4.30998 6.18553 4.07956 6.3168 3.88108 6.48886C3.6826 6.66091 3.51996 6.87038 3.40245 7.1053L0.212445 13.4865C0.0948904 13.7214 0.0247582 13.9772 0.00605377 14.2392C-0.0126506 14.5012 0.0204391 14.7643 0.103433 15.0135C0.186428 15.2628 0.317701 15.4932 0.489756 15.6917C0.661811 15.8901 0.871278 16.0528 1.1062 16.1703L4.48119 17.859L11.4174 22.8128C11.5197 22.8855 11.6345 22.9385 11.7562 22.969L19.7562 24.969C19.9237 25.0111 20.0993 25.009 20.2658 24.963C20.4323 24.917 20.584 24.8286 20.7062 24.7065L25.7062 19.7065L27.5912 17.8215L30.8937 16.1703C31.3678 15.933 31.7283 15.5171 31.8959 15.0141C32.0635 14.511 32.0245 13.9621 31.7874 13.4878ZM24.9262 17.659L20.6249 14.214C20.4323 14.0597 20.1893 13.9821 19.9428 13.9962C19.6964 14.0103 19.4638 14.115 19.2899 14.2903C17.0637 16.5328 14.5824 16.249 12.9999 15.249L18.4049 9.99905H22.3812L25.7824 16.8003L24.9262 17.659ZM19.6924 22.8915L12.4274 21.0753L6.27745 16.6828L9.77745 9.6828L15.9999 8.03405L17.2249 8.3578L11.5999 13.8178L11.5899 13.829C11.3782 14.0408 11.2167 14.2974 11.1174 14.5799C11.0181 14.8624 10.9834 15.1636 11.0161 15.4612C11.0487 15.7589 11.1478 16.0454 11.3059 16.2997C11.4641 16.554 11.6774 16.7695 11.9299 16.9303C14.4999 18.5715 17.6012 18.3053 20.0437 16.3053L23.4999 19.0815L19.6924 22.8915ZM16.4774 27.2415C16.4234 27.4577 16.2988 27.6496 16.1233 27.7868C15.9478 27.924 15.7315 27.9987 15.5087 27.999C15.4265 27.9989 15.3447 27.9889 15.2649 27.969L10.0512 26.6653C9.92937 26.6352 9.81439 26.5822 9.71245 26.509L6.41869 24.1565C6.21617 23.9975 6.08279 23.7665 6.04633 23.5116C6.00986 23.2567 6.07312 22.9976 6.22294 22.7882C6.37275 22.5788 6.59757 22.4352 6.85058 22.3874C7.1036 22.3396 7.3653 22.3912 7.5812 22.5315L10.7199 24.774L15.7499 26.029C16.0072 26.0934 16.2283 26.2573 16.3648 26.4847C16.5012 26.712 16.5417 26.9843 16.4774 27.2415Z" fill="white" />
                    </svg>


                    <h4 class="mt-2 text-24 md:text-36-2 text-putih font-philosopher">Jasa</h4>
                </div>
            </div>
        </section>

        <section class="bg-hijau-1 flex flex-col items-center justify-center pt-6 sm:pt-0 ">
            <div class="marquee-left w-full overflow-hidden">
                <div class="flex flex-nowrap gap-3 sm:gap-5 md:gap-8 py-1">
                    <img src="{{ asset('images/sertifikasi halal img.webp') }}" alt="Gambar 1" class="w-1/3 sm:w-1/4 md:w-1/4 lg:w-1/5 aspect-[4/3] border-2 md:border-4 border-hijau-2 border-opacity-30 rounded-2xl object-cover">
                    <img src="{{ asset('images/sertifikasi halal img.webp') }}" alt="Gambar 2" class="w-1/3 sm:w-1/4 md:w-1/4 lg:w-1/5 aspect-[4/3] border-2 md:border-4 border-hijau-2 border-opacity-30 rounded-2xl object-cover">
                    <img src="{{ asset('images/sertifikasi halal img.webp') }}" alt="Gambar 3" class="w-1/3 sm:w-1/4 md:w-1/4 lg:w-1/5 aspect-[4/3] border-2 md:border-4 border-hijau-2 border-opacity-30 rounded-2xl object-cover">
                    <img src="{{ asset('images/sertifikasi halal img.webp') }}" alt="Gambar 4" class="w-1/3 sm:w-1/4 md:w-1/4 lg:w-1/5 aspect-[4/3] border-2 md:border-4 border-hijau-2 border-opacity-30 rounded-2xl object-cover">
                    <img src="{{ asset('images/sertifikasi halal img.webp') }}" alt="Gambar 1" class="w-1/3 sm:w-1/4 md:w-1/4 lg:w-1/5 aspect-[4/3] border-2 md:border-4 border-hijau-2 border-opacity-30 rounded-2xl object-cover">
                    <img src="{{ asset('images/sertifikasi halal img.webp') }}" alt="Gambar 2" class="w-1/3 sm:w-1/4 md:w-1/4 lg:w-1/5 aspect-[4/3] border-2 md:border-4 border-hijau-2 border-opacity-30 rounded-2xl object-cover">
                    <img src="{{ asset('images/sertifikasi halal img.webp') }}" alt="Gambar 3" class="w-1/3 sm:w-1/4 md:w-1/4 lg:w-1/5 aspect-[4/3] border-2 md:border-4 border-hijau-2 border-opacity-30 rounded-2xl object-cover">
                    <img src="{{ asset('images/sertifikasi halal img.webp') }}" alt="Gambar 4" class="w-1/3 sm:w-1/4 md:w-1/4 lg:w-1/5 aspect-[4/3] border-2 md:border-4 border-hijau-2 border-opacity-30 rounded-2xl object-cover">

                </div>
            </div>

            <div class="marquee-right w-full overflow-hidden mt-3 sm:mt-5 md:mt-8">
                <div class="flex flex-nowrap gap-3 sm:gap-5 md:gap-8 py-1 items-end">
                    <img src="{{ asset('images/sertifikasi halal img.webp') }}" alt="Gambar 1" class="w-1/3 sm:w-1/4 md:w-1/4 lg:w-1/5 aspect-[4/3] border-2 md:border-4 border-hijau-2 border-opacity-30 rounded-2xl object-cover">
                    <img src="{{ asset('images/sertifikasi halal img.webp') }}" alt="Gambar 2" class="w-1/3 sm:w-1/4 md:w-1/4 lg:w-1/5 aspect-[4/3] border-2 md:border-4 border-hijau-2 border-opacity-30 rounded-2xl object-cover">
                    <img src="{{ asset('images/sertifikasi halal img.webp') }}" alt="Gambar 3" class="w-1/3 sm:w-1/4 md:w-1/4 lg:w-1/5 aspect-[4/3] border-2 md:border-4 border-hijau-2 border-opacity-30 rounded-2xl object-cover">
                    <img src="{{ asset('images/sertifikasi halal img.webp') }}" alt="Gambar 4" class="w-1/3 sm:w-1/4 md:w-1/4 lg:w-1/5 aspect-[4/3] border-2 md:border-4 border-hijau-2 border-opacity-30 rounded-2xl object-cover">
                    <img src="{{ asset('images/sertifikasi halal img.webp') }}" alt="Gambar 1" class="w-1/3 sm:w-1/4 md:w-1/4 lg:w-1/5 aspect-[4/3] border-2 md:border-4 border-hijau-2 border-opacity-30 rounded-2xl object-cover">
                    <img src="{{ asset('images/sertifikasi halal img.webp') }}" alt="Gambar 2" class="w-1/3 sm:w-1/4 md:w-1/4 lg:w-1/5 aspect-[4/3] border-2 md:border-4 border-hijau-2 border-opacity-30 rounded-2xl object-cover">
                    <img src="{{ asset('images/sertifikasi halal img.webp') }}" alt="Gambar 3" class="w-1/3 sm:w-1/4 md:w-1/4 lg:w-1/5 aspect-[4/3] border-2 md:border-4 border-hijau-2 border-opacity-30 rounded-2xl object-cover">
                    <img src="{{ asset('images/sertifikasi halal img.webp') }}" alt="Gambar 4" class="w-1/3 sm:w-1/4 md:w-1/4 lg:w-1/5 aspect-[4/3] border-2 md:border-4 border-hijau-2 border-opacity-30 rounded-2xl object-cover">
                </div>
            </div>
        </section>

        <section class="bg-gradient-to-b from-hijau-1 to-hijau-2 flex items-center justify-center  py-16 sm:py-20 md:py-24 lg:py-36 px-5 md:px-14 mx-auto">
            <div class="text-center text-white">
                <h1 class="text-32 sm:text-40 md:text-56 font-bold font-philosopher mb-2 transform translate-y-10 transition-all duration-20000" data-fade>Saatnya Produk Anda Bersertifikat Halal</h1>
                <p class="items-center text-center text-16 md:text-20-2 mb-8 text-mint-2 px-5 sm:px-12 md:px-20 lg:px-36 transform translate-y-10 transition-all duration-20000" data-fade>Mulailah langkah Anda untuk memastikan kehalalan produk dengan proses pemeriksaan yang profesional dan terpercaya dari BHM</p>

                <div class="md:flex justify-center space-y-2 md:space-y-0 md:space-x-3 items-center transform translate-y-10 transition-all duration-20000" data-fade>
                    <a href="#" class=" bg-gradient-to-r from-[#ECC764] via-[#F5D686] to-[#ECC764] px-6 py-3 flex justify-center text-hitam font-semibold rounded-full text-16 
    hover:bg-gradient-to-r hover:from-[#D9B456] hover:via-[#E6C270] hover:to-[#D9B456] 
   active:bg-gradient-to-r active:from-[#C0A04D] active:via-[#D1AF65] active:to-[#C0A04D] ">
                        Daftar Sertifikasi Halal
                    </a>
                    <a href="#" class=" px-6 py-3 flex justify-center items-center gap-2 text-putih  font-medium rounded-full text-16 bg-transparent  border-[1.5px] border-hijau-5
     transition duration-200 hover:bg-putih hover:text-hitam active:bg-abu-98 active:text-hitam">
                        Daftar Pelatihan Halal
                        <svg width="16" height="16" viewBox="0 0 16 16"
                            class="w-4 h-4 fill-current"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="ArrowUpRight">
                                <path id="Vector" d="M12.75 4V10.5C12.75 10.6989 12.671 10.8897 12.5303 11.0303C12.3897 11.171 12.1989 11.25 12 11.25C11.8011 11.25 11.6103 11.171 11.4696 11.0303C11.329 10.8897 11.25 10.6989 11.25 10.5V5.8125L4.5306 12.5306C4.3897 12.6715 4.19861 12.7507 3.99935 12.7507C3.80009 12.7507 3.60899 12.6715 3.4681 12.5306C3.3272 12.3897 3.24805 12.1986 3.24805 11.9994C3.24805 11.8001 3.3272 11.609 3.4681 11.4681L10.1875 4.75H5.49997C5.30106 4.75 5.1103 4.67098 4.96964 4.53033C4.82899 4.38968 4.74997 4.19891 4.74997 4C4.74997 3.80109 4.82899 3.61032 4.96964 3.46967C5.1103 3.32902 5.30106 3.25 5.49997 3.25H12C12.1989 3.25 12.3897 3.32902 12.5303 3.46967C12.671 3.61032 12.75 3.80109 12.75 4Z" />
                            </g>
                        </svg>
                    </a>
                    <a href="#" class=" px-6 py-3 flex justify-center items-center gap-2 text-putih  font-medium rounded-full text-16 bg-transparent  border-[1.5px] border-hijau-5
     transition duration-200 hover:bg-putih hover:text-hitam active:bg-abu-98 active:text-hitam">
                        Konsultasi Gratis
                        <svg width="16" height="16" viewBox="0 0 16 16"
                            class="w-4 h-4 fill-current"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="ArrowUpRight">
                                <path id="Vector" d="M12.75 4V10.5C12.75 10.6989 12.671 10.8897 12.5303 11.0303C12.3897 11.171 12.1989 11.25 12 11.25C11.8011 11.25 11.6103 11.171 11.4696 11.0303C11.329 10.8897 11.25 10.6989 11.25 10.5V5.8125L4.5306 12.5306C4.3897 12.6715 4.19861 12.7507 3.99935 12.7507C3.80009 12.7507 3.60899 12.6715 3.4681 12.5306C3.3272 12.3897 3.24805 12.1986 3.24805 11.9994C3.24805 11.8001 3.3272 11.609 3.4681 11.4681L10.1875 4.75H5.49997C5.30106 4.75 5.1103 4.67098 4.96964 4.53033C4.82899 4.38968 4.74997 4.19891 4.74997 4C4.74997 3.80109 4.82899 3.61032 4.96964 3.46967C5.1103 3.32902 5.30106 3.25 5.49997 3.25H12C12.1989 3.25 12.3897 3.32902 12.5303 3.46967C12.671 3.61032 12.75 3.80109 12.75 4Z" />
                            </g>
                        </svg>
                    </a>


                </div>
            </div>
        </section>

        <section class="bg-emas-3 h-full items-center justify-center p-5 sm:p-8 md:p-16 lg:p-32">

            <div class="bg-putih rounded-2xl flex flex-col justify-center  border-2 md:border-4 border-emas-4">

                <div class="bg-gradient-to-br from-[#031207] via-hijau-2 to-[#031207] rounded-t-2xl p-5 md:p-8 ">
                    <p class="font-semibold text-20 md:text-24 text-putih mb-4 italic">Tertarik Mengajukan Sertifikasi Halal?</p>

                    <p class="font-medium text-14-3 md:text-16-2  text-mint-2">Isi formulir berikut untuk memberi tahu kami tentang kebutuhan sertifikasi halal usaha Anda. Tim BHM akan menghubungi Anda untuk memberikan panduan lebih lanjut sebelum pendaftaran resmi di SIHALAL.</p>

                </div>
                <div class=" p-5 md:p-8">
                    <div class="grid grid-cols-1  md:grid-cols-2 ">
                        <div class="space-y-6  md:mr-4">

                            <!-- Elements -->
                            <div>
                                <label
                                    class="mb-2 block text-16 font-semibold text-hijau-2">
                                    Nama Lengkap
                                </label>
                                <input
                                    type="text"
                                    placeholder="Isi nama sesuai KTP"
                                    class="  w-full rounded-full border appearance-none border-mint-3 bg-hijau-7 px-6 py-4 text-16 text-hitam shadow-theme-xs placeholder:text-mint-1 focus:border-hijau-2/15 focus:outline-none focus:ring focus:ring-hijau-4/10 pr-4 bg-none " />
                            </div>

                            <!-- Elements -->
                            <div>
                                <label
                                    class="mb-2 block text-16 font-semibold text-hijau-2">
                                    Skala Usaha (Berdasarkan NIB)
                                </label>
                                <div class="flex flex-wrap items-center gap-4 py-3">
                                    <div x-data="{ checkboxToggle: false }">
                                        <label
                                            for="radioLabelOne"
                                            class="flex cursor-pointer select-none items-center text-16 text-hitam ">
                                            <div class="relative">
                                                <input
                                                    type="checkbox"
                                                    id="radioLabelOne"
                                                    class="sr-only"
                                                    @change="checkboxToggle = !checkboxToggle" />
                                                <div
                                                    :class="checkboxToggle ? 'border-hijau-4 bg-hijau-4' : 'bg-hijau-7 border-mint-3 '"
                                                    class="mr-3 flex h-5 w-5 items-center justify-center rounded-full border-[1.5px] hover:border-hijau-4 ">
                                                    <span
                                                        class="h-2 w-2 rounded-full"
                                                        :class="checkboxToggle ? 'bg-white' : 'bg-white '"></span>
                                                </div>
                                            </div>
                                            Mikro dan Kecil
                                        </label>
                                    </div>

                                    <div x-data="{ checkboxToggle: false }">
                                        <label
                                            for="radioLabelOne"
                                            class="flex cursor-pointer select-none items-center text-16 text-hitam ">
                                            <div class="relative">
                                                <input
                                                    type="checkbox"
                                                    id="radioLabelOne"
                                                    class="sr-only"
                                                    @change="checkboxToggle = !checkboxToggle" />
                                                <div
                                                    :class="checkboxToggle ? 'border-hijau-4 bg-hijau-4' : 'bg-hijau-7 border-mint-3 '"
                                                    class="mr-3 flex h-5 w-5 items-center justify-center rounded-full border-[1.5px] hover:border-hijau-4 ">
                                                    <span
                                                        class="h-2 w-2 rounded-full"
                                                        :class="checkboxToggle ? 'bg-white' : 'bg-white '"></span>
                                                </div>
                                            </div>
                                            Menengah
                                        </label>
                                    </div>
                                    <div x-data="{ checkboxToggle: false }">
                                        <label
                                            for="radioLabelOne"
                                            class="flex cursor-pointer select-none items-center text-16 text-hitam ">
                                            <div class="relative">
                                                <input
                                                    type="checkbox"
                                                    id="radioLabelOne"
                                                    class="sr-only"
                                                    @change="checkboxToggle = !checkboxToggle" />
                                                <div
                                                    :class="checkboxToggle ? 'border-hijau-4 bg-hijau-4' : 'bg-hijau-7 border-mint-3 '"
                                                    class="mr-3 flex h-5 w-5 items-center justify-center rounded-full border-[1.5px] hover:border-hijau-4 ">
                                                    <span
                                                        class="h-2 w-2 rounded-full"
                                                        :class="checkboxToggle ? 'bg-white' : 'bg-white '"></span>
                                                </div>
                                            </div>
                                            Besar
                                        </label>
                                    </div>


                                </div>
                            </div>


                            <!-- Elements -->
                            <div>
                                <label
                                    class="mb-2 block text-16 font-semibold text-hijau-2">
                                    Jenis Produk
                                </label>
                                <div
                                    x-data="{ isOptionSelected: false }"
                                    class="relative z-20 bg-transparent">
                                    <select
                                        class="w-full rounded-full border appearance-none border-mint-3 bg-hijau-7 px-6 py-4 text-16 text-hitam shadow-theme-xs placeholder:text-mint-1 focus:border-hijau-2/15 focus:outline-none focus:ring focus:ring-hijau-4/10 pr-4 bg-none "
                                        :class="isOptionSelected && 'text-gray-800 '"
                                        @change="isOptionSelected = true">
                                        <option
                                            value=""
                                            class="text-gray-700  ">
                                            Pilih jenis produk
                                        </option>
                                        <option
                                            value=""
                                            class="text-gray-700  ">
                                            a
                                        </option>
                                        <option
                                            value=""
                                            class="text-gray-700  ">
                                            b
                                        </option>
                                        <option
                                            value=""
                                            class="text-gray-700  ">
                                            c
                                        </option>
                                    </select>
                                    <span
                                        class="pointer-events-none absolute right-4 top-1/2 z-30 -translate-y-1/2 text-gray-500 ">
                                        <svg
                                            class="stroke-current"
                                            width="20"
                                            height="20"
                                            viewBox="0 0 20 20"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M4.79175 7.396L10.0001 12.6043L15.2084 7.396"
                                                stroke=""
                                                stroke-width="1.5"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </div>
                            </div>

                            <!-- Elements -->
                            <div>
                                <label
                                    class="mb-2 block text-16 font-semibold text-hijau-2">
                                    Jumlah Produk
                                </label>
                                <input
                                    type="number"
                                    placeholder="Isi total produk"
                                    class="  w-full rounded-full border appearance-none border-mint-3 bg-hijau-7 px-6 py-4 text-16 text-hitam shadow-theme-xs placeholder:text-mint-1 focus:border-hijau-2/15 focus:outline-none focus:ring focus:ring-hijau-4/10 pr-4 bg-none " />
                            </div>


                        </div>
                        <div class="space-y-6 md:ml-4  mt-6 md:mt-0 ">

                            <!-- Elements -->
                            <div>
                                <label
                                    class=" mb-2 block text-16 font-semibold text-hijau-2">
                                    Lokasi Usaha
                                </label>
                                <textarea
                                    placeholder="Isi alamat lokasi usaha Anda"
                                    type="text"
                                    rows="5"
                                    class="w-full rounded-2xl border appearance-none border-mint-3 bg-hijau-7 px-6 py-4 text-16 text-hitam shadow-theme-xs placeholder:text-mint-1 focus:border-hijau-2/15 focus:outline-none focus:ring focus:ring-hijau-4/10 pr-4 bg-none  "></textarea>
                            </div>
                            <!-- Elements -->
                            <div
                                x-data="{
                          selectedCountry: 'ID',
                          countryCodes: {
                              'ID': '+628',
                              'GB': '+44',
                              'CA': '+1',
                              'AU': '+61'
                          },
                          phoneNumber: ''
                      }">
                                <label
                                    class="mb-2 block text-16 font-semibold text-hijau-2">
                                    Nomor HP (WhatsApp Aktif)
                                </label>
                                <div class="relative">
                                    <div class="absolute">
                                        <select
                                            x-model="selectedCountry"
                                            @change="phoneNumber = countryCodes[selectedCountry]"
                                            class="appearance-none rounded-l-full border-0 border-r border-mint-3 bg-transparent bg-none  px-6 py-4 pr-8  text-16 text-hitam focus:border-hijau-2/15 focus:outline-none focus:ring focus:ring-hijau-4/10">
                                            <option
                                                value="ID"
                                                class="text-gray-700 ">
                                                ID
                                            </option>
                                            <option
                                                value="GB"
                                                class="text-gray-700 ">
                                                GB
                                            </option>
                                            <option
                                                value="CA"
                                                class="text-gray-700 ">
                                                CA
                                            </option>
                                            <option
                                                value="AU"
                                                class="text-gray-700 ">
                                                AU
                                            </option>

                                        </select>
                                        <div
                                            class="pointer-events-none absolute inset-y-0 right-3 flex items-center text-gray-700 dark:text-gray-400">
                                            <svg
                                                class="stroke-current"
                                                width="20"
                                                height="20"
                                                viewBox="0 0 20 20"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M4.79175 7.396L10.0001 12.6043L15.2084 7.396"
                                                    stroke=""
                                                    stroke-width="1.5"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                    </div>
                                    <input
                                        placeholder="Isi nomor yang dapat dihubungi"
                                        x-model="phoneNumber"
                                        type="tel"
                                        class="w-full rounded-full border appearance-none border-mint-3 bg-hijau-7  pl-[96px] py-4 text-16 text-hitam shadow-theme-xs placeholder:text-mint-1 focus:border-hijau-2/15 focus:outline-none focus:ring focus:ring-hijau-4/10 pr-4 bg-none" />
                                </div>
                            </div>

                            <!-- Elements -->
                            <div>
                                <label
                                    class="mb-2 block text-16 font-semibold text-hijau-2">
                                    Email
                                </label>
                                <div class="relative">
                                    <span
                                        class="absolute left-0 top-1/2 -translate-y-1/2   appearance-none rounded-l-full border-0 border-r border-mint-3 bg-transparent bg-none  pl-6 pr-4 py-4  text-16 text-hitam focus:border-hijau-2/15 focus:outline-none focus:ring focus:ring-hijau-4/10">
                                        <svg
                                            width="20"
                                            height="20"
                                            viewBox="0 0 20 20"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M3.04175 7.06206V14.375C3.04175 14.6511 3.26561 14.875 3.54175 14.875H16.4584C16.7346 14.875 16.9584 14.6511 16.9584 14.375V7.06245L11.1443 11.1168C10.457 11.5961 9.54373 11.5961 8.85638 11.1168L3.04175 7.06206ZM16.9584 5.19262C16.9584 5.19341 16.9584 5.1942 16.9584 5.19498V5.20026C16.9572 5.22216 16.946 5.24239 16.9279 5.25501L10.2864 9.88638C10.1145 10.0062 9.8862 10.0062 9.71437 9.88638L3.07255 5.25485C3.05342 5.24151 3.04202 5.21967 3.04202 5.19636C3.042 5.15695 3.07394 5.125 3.11335 5.125H16.8871C16.9253 5.125 16.9564 5.15494 16.9584 5.19262ZM18.4584 5.21428V14.375C18.4584 15.4796 17.563 16.375 16.4584 16.375H3.54175C2.43718 16.375 1.54175 15.4796 1.54175 14.375V5.19498C1.54175 5.1852 1.54194 5.17546 1.54231 5.16577C1.55858 4.31209 2.25571 3.625 3.11335 3.625H16.8871C17.7549 3.625 18.4584 4.32843 18.4585 5.19622C18.4585 5.20225 18.4585 5.20826 18.4584 5.21428Z"
                                                fill="#667085" />
                                        </svg>
                                    </span>
                                    <input
                                        type="text"
                                        placeholder="emailAnda@gmail.com"
                                        class="w-full rounded-full border appearance-none border-mint-3 bg-hijau-7  pl-[72px] py-4 text-16 text-hitam shadow-theme-xs placeholder:text-mint-1 focus:border-hijau-2/15 focus:outline-none focus:ring focus:ring-hijau-4/10 pr-4 bg-none" />
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="mt-10 w-auto flex justify-end">
                        <a href="#" class=" bg-gradient-to-r from-[#ECC764] via-[#F5D686] to-[#ECC764] px-6 py-3  text-hitam font-semibold rounded-full text-16 
    hover:bg-gradient-to-r hover:from-[#D9B456] hover:via-[#E6C270] hover:to-[#D9B456] 
   active:bg-gradient-to-r active:from-[#C0A04D] active:via-[#D1AF65] active:to-[#C0A04D] ">
                            Kirim Permintaan
                        </a>
                    </div>

                </div>
            </div>

        </section>


        <section class="bg-putih pt-16 sm:pt-20 md:pt-24 lg:pt-36  pb-12 sm:pb-14 md:pb-16 lg:pb-16 px-5 sm:px-8 text-center justify-items-center">
            <div class=" mx-auto transform translate-y-10 transition-all duration-20000" data-fade>
                <h2 class="text-16 sm:text-24 md:text-h2 font-medium  capitalize leading-loose tracking-wide italic md:mb-2">Alur, Durasi & Biaya</h2>
                <h3 class="text-32 sm:text-40 md:text-56 font-bold text-hijau-2 font-philosopher  tracking-wide">Sertifikasi Halal</h3>
            </div>

            <div class="mt-16 md:mt-32 space-y-2 sm:space-y-4 md:space-y-8 w-full ">
                <div class="  bg-putih rounded-2xl   border-[1.5px] border-hijau-6  w-full ">
                    <img src="{{ asset('images/3158.webp') }}" class="rounded-2xl  aspect-[2/1] object-cover w-full h-auto" />

                </div>

                <div class=" text-left  bg-putih  rounded-2xl p-4 md:p-8  border-[1.5px] border-hijau-6  w-full">
                    <div class="mb-4  md:mb-6">
                        <div class="mb-2 sm:mb-4">
                            <svg width="48" height="48" class="h-10 md:h-12 w-auto" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M25.1252 15.0004V23.3629L32.0795 27.5348C32.3356 27.6885 32.5202 27.9376 32.5926 28.2273C32.6651 28.517 32.6195 28.8237 32.4658 29.0798C32.3121 29.3359 32.063 29.5205 31.7733 29.5929C31.4835 29.6653 31.1769 29.6197 30.9208 29.466L23.4208 24.966C23.2542 24.8659 23.1163 24.7244 23.0207 24.5551C22.9251 24.3859 22.8749 24.1948 22.8752 24.0004V15.0004C22.8752 14.7021 22.9937 14.4159 23.2047 14.2049C23.4156 13.9939 23.7018 13.8754 24.0002 13.8754C24.2985 13.8754 24.5847 13.9939 24.7957 14.2049C25.0066 14.4159 25.1252 14.7021 25.1252 15.0004ZM42.0002 10.8754C41.7018 10.8754 41.4156 10.9939 41.2047 11.2049C40.9937 11.4159 40.8752 11.7021 40.8752 12.0004V16.3804C39.4727 14.7248 38.0739 13.1685 36.4633 11.5373C34.0137 9.08773 30.8966 7.41434 27.5015 6.72622C24.1063 6.0381 20.5836 6.36577 17.3736 7.66827C14.1636 8.97078 11.4086 11.1904 9.45291 14.0497C7.49718 16.909 6.42743 20.2813 6.37733 23.7451C6.32724 27.209 7.29901 30.6108 9.17124 33.5254C11.0435 36.4401 13.7331 38.7385 16.9041 40.1333C20.0751 41.5281 23.5868 41.9575 27.0005 41.3678C30.4141 40.7782 33.5783 39.1956 36.0977 36.8179C36.3072 36.6113 36.4275 36.3309 36.4328 36.0367C36.438 35.7425 36.3277 35.4579 36.1256 35.244C35.9235 35.0302 35.6456 34.904 35.3516 34.8926C35.0576 34.8811 34.7708 34.9854 34.5527 35.1829C32.3544 37.2561 29.5939 38.6356 26.6161 39.149C23.6384 39.6624 20.5754 39.287 17.8097 38.0697C15.0441 36.8523 12.6985 34.847 11.0659 32.3043C9.43336 29.7616 8.58626 26.7942 8.63043 23.7728C8.67461 20.7514 9.6081 17.8101 11.3143 15.3161C13.0205 12.8222 15.4237 10.8864 18.2238 9.75041C21.0238 8.61444 24.0965 8.32873 27.058 8.92899C30.0195 9.52924 32.7384 10.9888 34.8752 13.1254C36.6077 14.8804 38.0964 16.5567 39.6208 18.3754H34.5002C34.2018 18.3754 33.9156 18.4939 33.7047 18.7049C33.4937 18.9159 33.3752 19.2021 33.3752 19.5004C33.3752 19.7988 33.4937 20.0849 33.7047 20.2959C33.9156 20.5069 34.2018 20.6254 34.5002 20.6254H42.0002C42.2985 20.6254 42.5847 20.5069 42.7957 20.2959C43.0066 20.0849 43.1252 19.7988 43.1252 19.5004V12.0004C43.1252 11.7021 43.0066 11.4159 42.7957 11.2049C42.5847 10.9939 42.2985 10.8754 42.0002 10.8754Z" fill="#0A3E19" />
                            </svg>


                        </div>

                        <h4 class="text-24 md:text-40 font-bold text-hijau-2 font-philosopher ">Durasi Proses Sertifikasi</h4>
                    </div>
                    <p class="text-16-2 md:text-20-2 text-hitam ">Proses sertifikasi halal umumnya memakan waktu 21 hari kerja. Durasi ini tergantung pada <span class="font-semibold text-hijau-4">kelengkapan dokumen</span> yang diserahkan oleh <span class="font-semibold text-hijau-4">pelaku usaha</span> serta kelancaran proses verifikasi oleh pihak terkait.</p>

                </div>

                <div class=" text-left  bg-putih  rounded-2xl p-4 md:p-8  border-[1.5px] border-hijau-6  w-full ">
                    <div class="mb-4  md:mb-6">
                        <div class="mb-2 sm:mb-4">


                            <svg width="48" height="48" class="h-10 md:h-12 w-auto" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M28.5 22.875H25.125V10.125H27C28.6908 10.125 30.3123 10.7966 31.5078 11.9922C32.7034 13.1877 33.375 14.8092 33.375 16.5C33.375 16.7984 33.4935 17.0845 33.7045 17.2955C33.9155 17.5065 34.2016 17.625 34.5 17.625C34.7984 17.625 35.0845 17.5065 35.2955 17.2955C35.5065 17.0845 35.625 16.7984 35.625 16.5C35.622 14.2134 34.7124 12.0213 33.0955 10.4045C31.4787 8.78764 29.2866 7.87798 27 7.875H25.125V4.5C25.125 4.20163 25.0065 3.91548 24.7955 3.7045C24.5845 3.49353 24.2984 3.375 24 3.375C23.7016 3.375 23.4155 3.49353 23.2045 3.7045C22.9935 3.91548 22.875 4.20163 22.875 4.5V7.875H21C18.7125 7.875 16.5187 8.7837 14.9012 10.4012C13.2837 12.0187 12.375 14.2125 12.375 16.5C12.375 18.7875 13.2837 20.9813 14.9012 22.5988C16.5187 24.2163 18.7125 25.125 21 25.125H22.875V37.875H19.5C17.8092 37.875 16.1877 37.2034 14.9922 36.0078C13.7966 34.8123 13.125 33.1908 13.125 31.5C13.125 31.2016 13.0065 30.9155 12.7955 30.7045C12.5845 30.4935 12.2984 30.375 12 30.375C11.7016 30.375 11.4155 30.4935 11.2045 30.7045C10.9935 30.9155 10.875 31.2016 10.875 31.5C10.878 33.7866 11.7876 35.9787 13.4045 37.5955C15.0213 39.2124 17.2134 40.122 19.5 40.125H22.875V43.5C22.875 43.7984 22.9935 44.0845 23.2045 44.2955C23.4155 44.5065 23.7016 44.625 24 44.625C24.2984 44.625 24.5845 44.5065 24.7955 44.2955C25.0065 44.0845 25.125 43.7984 25.125 43.5V40.125H28.5C30.7875 40.125 32.9813 39.2163 34.5988 37.5988C36.2163 35.9813 37.125 33.7875 37.125 31.5C37.125 29.2125 36.2163 27.0187 34.5988 25.4012C32.9813 23.7837 30.7875 22.875 28.5 22.875ZM21 22.875C19.3092 22.875 17.6877 22.2034 16.4922 21.0078C15.2966 19.8123 14.625 18.1908 14.625 16.5C14.625 14.8092 15.2966 13.1877 16.4922 11.9922C17.6877 10.7966 19.3092 10.125 21 10.125H22.875V22.875H21ZM28.5 37.875H25.125V25.125H28.5C30.1908 25.125 31.8123 25.7966 33.0078 26.9922C34.2034 28.1877 34.875 29.8092 34.875 31.5C34.875 33.1908 34.2034 34.8123 33.0078 36.0078C31.8123 37.2034 30.1908 37.875 28.5 37.875Z" fill="#0A3E19" />
                            </svg>



                        </div>

                        <h4 class="text-24 md:text-40 font-bold text-hijau-2 font-philosopher ">Biaya Sertifikasi</h4>
                    </div>
                    <p class="text-16-2 md:text-20-2 text-hitam">Biaya sertifikasi halal terdiri dari dua komponen utama:</p>
                    <ol class="list-decimal ml-5 text-16-2 md:text-20-2 text-hitam">
                        <li>
                            <strong class="text-16-2 md:text-20-2  font-semibold text-hijau-4">Tarif Sertifikasi Halal</strong>
                            <ul class="list-disc ml-6 text-16-2 md:text-20-2 text-hitam">
                                <li>Permohonan (registrasi) berdasarkan skala usaha (NIB).</li>
                                <li>Unit cost berdasarkan jenis dan jumlah produk, serta jumlah fasilitas utama produk lain (seperti: gudang/cabang/outlet).</li>
                            </ul>
                        </li>
                        <li>
                            <strong class="text-16-2 md:text-20-2 font-semibold text-hijau-4">Biaya Operasional dan Audit</strong>
                            <ul class="list-disc ml-6 text-16-2 md:text-20-2 text-hitam">
                                <li>Operasional LPH</li>
                                <li>Tim audit/pemeriksaan.</li>
                            </ul>
                        </li>
                    </ol>
                    <p class="text-16-2 md:text-20-2 text-hitam">Catatan: Total biaya sertifikasi halal adalah hasil dari <span class="font-semibold text-hijau-4">tarif sertifikasi halal + biaya operasional dan audit</span>.</p>
                </div>



                <!-- <div class=" text-left   bg-gradient-to-br from-hijau-2  to-[#031207]   rounded-2xl p-4 md:p-8  border-[1.5px] border-hijau-6  w-full ">
                    <div class=" items-center gap-6">
                        <p class="text-16-2 md:text-24-2 text-putih font-medium italic">Untuk informasi lebih lanjut mengenai <span class=" text-emas-2">biaya yang sesuai</span> dengan <span class=" text-emas-2">bisnis Anda</span>, silakan hubungi tim kami!</p>
                        <div >
                            <a href="#" class=" bg-gradient-to-r from-[#ECC764] via-[#F5D686] to-[#ECC764] px-6 py-3  text-hitam font-semibold rounded-full text-16 
    hover:bg-gradient-to-r hover:from-[#D9B456] hover:via-[#E6C270] hover:to-[#D9B456] 
   active:bg-gradient-to-r active:from-[#C0A04D] active:via-[#D1AF65] active:to-[#C0A04D] ">
                                Hubungi Kami
                            </a>
                        </div>

                    </div>


                </div> -->

                <div class="text-left bg-gradient-to-br from-hijau-2 to-[#031207] rounded-2xl p-4 md:p-8 border-[1.5px] border-hijau-6 w-full transform translate-y-10 transition-all duration-20000" data-fade>
                    <div class="grid grid-cols-4  items-center gap-2">
                        <p class="col-span-4 md:col-span-3 lg:col-span-3 text-16-2 md:text-24-2 text-putih font-medium italic">
                            Untuk informasi lebih lanjut mengenai
                            <span class="text-emas-2">biaya yang sesuai</span>
                            dengan
                            <span class="text-emas-2">bisnis Anda</span>,
                            silakan hubungi tim kami!
                        </p>
                        <div class="col-span-4 md:col-span-1 lg:col-span-1 flex md:justify-end">
                            <a href="#"
                                class="bg-gradient-to-r from-[#ECC764] via-[#F5D686] to-[#ECC764] 
                      px-6 py-3 text-hitam font-semibold rounded-full text-16 
                      hover:bg-gradient-to-r hover:from-[#D9B456] hover:via-[#E6C270] hover:to-[#D9B456] 
                      active:bg-gradient-to-r active:from-[#C0A04D] active:via-[#D1AF65] active:to-[#C0A04D]"
                                role="button"
                                aria-label="Hubungi Kami">
                                Hubungi Kami
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </section>

        <section class="bg-putih">
            <div class=" mx-auto py-16 sm:py-20 md:py-24 lg:py-36 px-5 sm:px-14">
                <div class="mx-auto md:w-3/4 lg:2/3 text-center transform translate-y-10 transition-all duration-20000" data-fade>
                    <h2 class="text-16 sm:text-24 md:text-h2 font-medium  capitalize leading-loose tracking-wide italic md:mb-2">Testimoni</h2>
                    <h3 class="text-32 sm:text-40 md:text-56 font-bold text-hijau-2 font-philosopher  tracking-wide">Apa Kata Mereka Tentang BHM</h3>

                </div>
                <div class="grid grid-cols-6 md:space-x-8 mt-16 md:mt-24 space-y-4 md:space-y-0">
                    <div class="bg-gradient-to-b from-emas-3 to-emas-2 p-3 sm:p-5 md:p-8 rounded-2xl col-span-6 md:col-span-4 lg:col-span-3 ">

                        <div class="w-full p-3 sm:p-5 md:p-8 bg-putih rounded-xl  flex flex-col justify-between">
                            <blockquote class="text-14-3 sm:text-16-2 md:text-18-2 text-hitam transform translate-y-10 transition-all duration-20000" data-fade id="quote">
                            </blockquote>
                            <div class="mt-4">
                                <p class="font-bold text-20 md:text-24 font-philosopher" id="name"></p>
                                <div class="flex">
                                    <p class="text-14-3 sm:text-16-2 md:text-16 text-hijau-2 font-medium" id="position"> <span class="text-hijau-4 font-semibold ml-1" id="perusahaan">

                                        </span></p>

                                </div>

                            </div>
                        </div>

                        <div class="flex gap-2 md:gap-4 mt-2 md:mt-6 justify-self-center">
                            <button class="px-4 py-4  bg-putih rounded-full transition duration-200 " id="prev">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 fill-current hover:text-putih" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.0006 12.0004C21.0006 12.1993 20.9216 12.3901 20.7809 12.5307C20.6403 12.6714 20.4495 12.7504 20.2506 12.7504H5.5609L11.0312 18.2198C11.1009 18.2895 11.1562 18.3722 11.1939 18.4632C11.2316 18.5543 11.251 18.6519 11.251 18.7504C11.251 18.849 11.2316 18.9465 11.1939 19.0376C11.1562 19.1286 11.1009 19.2114 11.0312 19.281C10.9615 19.3507 10.8788 19.406 10.7878 19.4437C10.6967 19.4814 10.5991 19.5008 10.5006 19.5008C10.402 19.5008 10.3045 19.4814 10.2134 19.4437C10.1224 19.406 10.0396 19.3507 9.96996 19.281L3.21996 12.531C3.15023 12.4614 3.09491 12.3787 3.05717 12.2876C3.01943 12.1966 3 12.099 3 12.0004C3 11.9019 3.01943 11.8043 3.05717 11.7132C3.09491 11.6222 3.15023 11.5394 3.21996 11.4698L9.96996 4.71979C10.1107 4.57906 10.3016 4.5 10.5006 4.5C10.6996 4.5 10.8905 4.57906 11.0312 4.71979C11.1719 4.86052 11.251 5.05139 11.251 5.25042C11.251 5.44944 11.1719 5.64031 11.0312 5.78104L5.5609 11.2504H20.2506C20.4495 11.2504 20.6403 11.3294 20.7809 11.4701C20.9216 11.6107 21.0006 11.8015 21.0006 12.0004Z" fill="#1D211D" />
                                </svg>

                            </button>
                            <button class="px-4 py-4  bg-putih rounded-full transition duration-200 " id="next">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 fill-current hover:text-putih" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20.7806 12.531L14.0306 19.281C13.8899 19.4218 13.699 19.5008 13.5 19.5008C13.301 19.5008 13.1101 19.4218 12.9694 19.281C12.8286 19.1403 12.7496 18.9494 12.7496 18.7504C12.7496 18.5514 12.8286 18.3605 12.9694 18.2198L18.4397 12.7504H3.75C3.55109 12.7504 3.36032 12.6714 3.21967 12.5307C3.07902 12.3901 3 12.1993 3 12.0004C3 11.8015 3.07902 11.6107 3.21967 11.4701C3.36032 11.3294 3.55109 11.2504 3.75 11.2504H18.4397L12.9694 5.78104C12.8286 5.64031 12.7496 5.44944 12.7496 5.25042C12.7496 5.05139 12.8286 4.86052 12.9694 4.71979C13.1101 4.57906 13.301 4.5 13.5 4.5C13.699 4.5 13.8899 4.57906 14.0306 4.71979L20.7806 11.4698C20.8504 11.5394 20.9057 11.6222 20.9434 11.7132C20.9812 11.8043 21.0006 11.9019 21.0006 12.0004C21.0006 12.099 20.9812 12.1966 20.9434 12.2876C20.9057 12.3787 20.8504 12.4614 20.7806 12.531Z" fill="#1D211D" />
                                </svg>

                            </button>
                        </div>
                    </div>

                    <div class="bg-abu-98 rounded-2xl col-span-6 md:col-span-2 lg:col-span-3 content-center">
                        <div class="marquee-left w-full overflow-hidden">
                            <div class="flex flex-nowrap gap-8 py-1">
                                <img src="{{ asset('images/sertifikasi halal img.webp') }}" alt="Gambar 1" class="w-[200px] h-[200px]  rounded-2xl object-cover">
                                <img src="{{ asset('images/sertifikasi halal img.webp') }}" alt="Gambar 2" class="w-[200px] h-[200px]  rounded-2xl object-cover">
                                <img src="{{ asset('images/sertifikasi halal img.webp') }}" alt="Gambar 3" class="w-[200px] h-[200px]  rounded-2xl object-cover">
                                <img src="{{ asset('images/sertifikasi halal img.webp') }}" alt="Gambar 4" class="w-[200px] h-[200px]  rounded-2xl object-cover">
                            </div>
                        </div>

                        <div class="marquee-right w-full overflow-hidden mt-6">
                            <div class="flex flex-nowrap gap-8 py-1">
                                <img src="{{ asset('images/sertifikasi halal img.webp') }}" alt="Gambar 5" class="w-[200px] h-[200px]  rounded-2xl object-cover">
                                <img src="{{ asset('images/sertifikasi halal img.webp') }}" alt="Gambar 6" class="w-[200px] h-[200px]  rounded-2xl object-cover">
                                <img src="{{ asset('images/sertifikasi halal img.webp') }}" alt="Gambar 7" class="w-[200px] h-[200px]  rounded-2xl object-cover">
                                <img src="{{ asset('images/sertifikasi halal img.webp') }}" alt="Gambar 8" class="w-[200px] h-[200px]  rounded-2xl object-cover">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>


        <section class="bg-putih">
            <div class=" mx-auto  px-5 sm:px-14">
                <div class="grid grid-cols-3  items-center gap-2">
                    <div class="col-span-3  md:col-span-2  ">

                        <h2 class="text-32 sm:text-40 md:text-56 font-bold text-hijau-2 font-philosopher  tracking-wide transform translate-y-10 transition-all duration-20000" data-fade>Pertanyaan yang Sering Diajukan</h2>

                    </div>
                    <div class="col-span-3  md:col-span-1  md:flex md:justify-end  transform translate-y-10 transition-all duration-20000" data-fade>
                        <div class="w-auto">
                            <p class="text-16-2 md:text-20 font-medium text-hitam mb-4">Masih memiliki pertanyaan? </p>
                            <a href="#"
                                class="bg-gradient-to-r from-[#ECC764] via-[#F5D686] to-[#ECC764] 
                      px-6 py-3 text-hitam font-semibold rounded-full text-16 
                      hover:bg-gradient-to-r hover:from-[#D9B456] hover:via-[#E6C270] hover:to-[#D9B456] 
                      active:bg-gradient-to-r active:from-[#C0A04D] active:via-[#D1AF65] active:to-[#C0A04D]"
                                role="button"
                                aria-label="Hubungi Kami">
                                Hubungi Kami
                            </a>
                        </div>


                    </div>

                </div>


            </div>
            <!-- tambah disini -->
            <div class="relative h-screen  mt-16">
                <img src="{{ asset('images/2148093240 1.webp') }}" class="w-full h-full object-cover">
                <div class="absolute inset-0  mx-5 sm:mx-8 md:mx-10 lg:mx-20 flex items-center justify-center">
                    <div class="bg-putih p-3 md:p-4 lg:p-5 rounded-2xl w-90%">

                        <div id="accordion-flush" data-accordion="collapse" data-active-classes="text-emas-1" data-inactive-classes="text-hitam">
                            <h3 id="accordion-flush-heading-1">
                                <button type="button" class="flex items-center justify-between w-full py-3 px-4 md:py-3 md:px-6 lg:py-6 lg:px-12 font-medium text-left border-b text-16 md:text-20 lg:text-24 border-gray-200 text-hitam" data-accordion-target="#accordion-flush-body-1" aria-expanded="true" aria-controls="accordion-flush-body-1">
                                    <span>Berapa lama waktu yang dibutuhkan untuk mendapatkan sertifikasi halal?</span>

                                    <svg data-accordion-icon width="32" height="32" viewBox="0 0 32 32" class="h-4 w-4 md:h-5 md:w-5 lg:h-6 lg:w-6 shrink-0 " fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M27.0612 13.0624L17.0612 23.0624C16.9218 23.2023 16.7562 23.3132 16.5739 23.3889C16.3916 23.4647 16.1961 23.5036 15.9987 23.5036C15.8013 23.5036 15.6058 23.4647 15.4235 23.3889C15.2411 23.3132 15.0755 23.2023 14.9362 23.0624L4.9362 13.0624C4.6544 12.7807 4.49609 12.3985 4.49609 11.9999C4.49609 11.6014 4.6544 11.2192 4.9362 10.9374C5.21799 10.6557 5.60018 10.4973 5.9987 10.4973C6.39721 10.4973 6.7794 10.6557 7.0612 10.9374L15.9999 19.8762L24.9387 10.9362C25.2205 10.6544 25.6027 10.4961 26.0012 10.4961C26.3997 10.4961 26.7819 10.6544 27.0637 10.9362C27.3455 11.218 27.5038 11.6002 27.5038 11.9987C27.5038 12.3972 27.3455 12.7794 27.0637 13.0612L27.0612 13.0624Z" fill="#1D211D" />
                                    </svg>

                                </button>
                            </h3>
                            <div id="accordion-flush-body-1" aria-labelledby="accordion-flush-heading-1">
                                <div class="py-3 px-4 md:py-3 md:px-6 lg:py-6 lg:px-12 border-b border-gray-200">
                                    <p class="mb-2 font-medium text-hitam text-14-2 sm:text-16-2 md:text-18-2 lg:text-20-2">Proses sertifikasi halal umumnya memakan waktu 21-34 hari kerja, tergantung pada kelengkapan dokumen yang diserahkan oleh pelaku usaha serta kelancaran proses verifikasi oleh pihak terkait.</p>
                                </div>
                            </div>
                            <h3 id="accordion-flush-heading-2">
                                <button type="button" class="flex items-center justify-between w-full py-3 px-4 md:py-3 md:px-6 lg:py-6 lg:px-12 font-medium text-left border-b text-16 md:text-20 lg:text-24 border-gray-200 text-hitam" data-accordion-target="#accordion-flush-body-2" aria-expanded="false" aria-controls="accordion-flush-body-2">
                                    <span>Apa saja dokumen yang diperlukan untuk sertifikasi halal?</span>

                                    <svg data-accordion-icon width="32" height="32" viewBox="0 0 32 32" class="h-4 w-4 md:h-5 md:w-5 lg:h-6 lg:w-6 shrink-0 " fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M27.0612 13.0624L17.0612 23.0624C16.9218 23.2023 16.7562 23.3132 16.5739 23.3889C16.3916 23.4647 16.1961 23.5036 15.9987 23.5036C15.8013 23.5036 15.6058 23.4647 15.4235 23.3889C15.2411 23.3132 15.0755 23.2023 14.9362 23.0624L4.9362 13.0624C4.6544 12.7807 4.49609 12.3985 4.49609 11.9999C4.49609 11.6014 4.6544 11.2192 4.9362 10.9374C5.21799 10.6557 5.60018 10.4973 5.9987 10.4973C6.39721 10.4973 6.7794 10.6557 7.0612 10.9374L15.9999 19.8762L24.9387 10.9362C25.2205 10.6544 25.6027 10.4961 26.0012 10.4961C26.3997 10.4961 26.7819 10.6544 27.0637 10.9362C27.3455 11.218 27.5038 11.6002 27.5038 11.9987C27.5038 12.3972 27.3455 12.7794 27.0637 13.0612L27.0612 13.0624Z" fill="#1D211D" />
                                    </svg>

                                </button>
                            </h3>
                            <div id="accordion-flush-body-2" aria-labelledby="accordion-flush-heading-2">
                                <div class="py-3 px-4 md:py-3 md:px-6 lg:py-6 lg:px-12 border-b border-gray-200 mb-2 font-medium text-hitam text-14-2 sm:text-16-2 md:text-18-2 lg:text-20-2">
                                    <p class="">Dokumen yang Dibutuhkan:</p>

                                    <ul class="list-disc ml-6 ">
                                        <li>Administrasi: Surat permohonan, formulir pendaftaran, dan NIB.</li>
                                        <li>Penyelia Halal: SK Penetapan, KTP, dan riwayat hidup.</li>
                                        <li>Produksi & Legalitas: Daftar produk, proses pengolahan, manual SJPH, serta izin edar/SLHS (jika ada).</li>
                                    </ul>

                                    <p class="">Catatan: Kami menyediakan template dokumen akan diberikan di awal proses sertifikasi untuk memudahkan pelaku usaha dalam melengkapi persyaratan.</p>
                                </div>
                                <!-- <div class="py-3 px-4 md:py-3 md:px-6 lg:py-6 lg:px-12 border-b border-gray-200">
                                    <p class="mb-2 font-medium text-hitam text-14-2 sm:text-16-2 md:text-18-2 lg:text-20-2">Proses sertifikasi halal umumnya memakan waktu 21-34 hari kerja, tergantung pada kelengkapan dokumen yang diserahkan oleh pelaku usaha serta kelancaran proses verifikasi oleh pihak terkait.</p>
                                </div> -->
                            </div>
                            <h3 id="accordion-flush-heading-3">
                                <button type="button" class="flex items-center justify-between w-full py-3 px-4 md:py-3 md:px-6 lg:py-6 lg:px-12 font-medium text-left border-b text-16 md:text-20 lg:text-24 border-gray-200 text-hitam" data-accordion-target="#accordion-flush-body-3" aria-expanded="false" aria-controls="accordion-flush-body-3">
                                    <span>Berapa lama waktu yang dibutuhkan untuk mendapatkan sertifikasi halal?</span>

                                    <svg data-accordion-icon width="32" height="32" viewBox="0 0 32 32" class="h-4 w-4 md:h-5 md:w-5 lg:h-6 lg:w-6 shrink-0 " fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M27.0612 13.0624L17.0612 23.0624C16.9218 23.2023 16.7562 23.3132 16.5739 23.3889C16.3916 23.4647 16.1961 23.5036 15.9987 23.5036C15.8013 23.5036 15.6058 23.4647 15.4235 23.3889C15.2411 23.3132 15.0755 23.2023 14.9362 23.0624L4.9362 13.0624C4.6544 12.7807 4.49609 12.3985 4.49609 11.9999C4.49609 11.6014 4.6544 11.2192 4.9362 10.9374C5.21799 10.6557 5.60018 10.4973 5.9987 10.4973C6.39721 10.4973 6.7794 10.6557 7.0612 10.9374L15.9999 19.8762L24.9387 10.9362C25.2205 10.6544 25.6027 10.4961 26.0012 10.4961C26.3997 10.4961 26.7819 10.6544 27.0637 10.9362C27.3455 11.218 27.5038 11.6002 27.5038 11.9987C27.5038 12.3972 27.3455 12.7794 27.0637 13.0612L27.0612 13.0624Z" fill="#1D211D" />
                                    </svg>

                                </button>
                            </h3>
                            <div id="accordion-flush-body-3" aria-labelledby="accordion-flush-heading-3">
                                <div class="py-3 px-4 md:py-3 md:px-6 lg:py-6 lg:px-12 border-b border-gray-200">
                                    <p class="mb-2 font-medium text-hitam text-14-2 sm:text-16-2 md:text-18-2 lg:text-20-2">Proses sertifikasi halal umumnya memakan waktu 21-34 hari kerja, tergantung pada kelengkapan dokumen yang diserahkan oleh pelaku usaha serta kelancaran proses verifikasi oleh pihak terkait.</p>
                                </div>
                            </div>




                            <!-- <h3 id="accordion-flush-heading-2">
                                <button type="button" class="flex items-center justify-between w-full py-6 px-12 font-medium text-left border-b text-16 md:text-20 lg:text-24 border-gray-200 text-hitam" data-accordion-target="#accordion-flush-body-2" aria-expanded="false" aria-controls="accordion-flush-body-2">
                                    <span>Apa saja dokumen yang diperlukan untuk sertifikasi halal?</span>
                                    <svg data-accordion-icon width="32" height="32" viewBox="0 0 32 32" class="h-6 w-6 shrink-0 " fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M27.0612 13.0624L17.0612 23.0624C16.9218 23.2023 16.7562 23.3132 16.5739 23.3889C16.3916 23.4647 16.1961 23.5036 15.9987 23.5036C15.8013 23.5036 15.6058 23.4647 15.4235 23.3889C15.2411 23.3132 15.0755 23.2023 14.9362 23.0624L4.9362 13.0624C4.6544 12.7807 4.49609 12.3985 4.49609 11.9999C4.49609 11.6014 4.6544 11.2192 4.9362 10.9374C5.21799 10.6557 5.60018 10.4973 5.9987 10.4973C6.39721 10.4973 6.7794 10.6557 7.0612 10.9374L15.9999 19.8762L24.9387 10.9362C25.2205 10.6544 25.6027 10.4961 26.0012 10.4961C26.3997 10.4961 26.7819 10.6544 27.0637 10.9362C27.3455 11.218 27.5038 11.6002 27.5038 11.9987C27.5038 12.3972 27.3455 12.7794 27.0637 13.0612L27.0612 13.0624Z" fill="#1D211D" />
                                    </svg>
                              
                                </button>
                            </h3>
                            <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
                                <div class="py-3 px-12 border-b border-gray-200 mb-2 font-medium text-hitam text-14-2 sm:text-16-2 md:text-18-2 lg:text-20-2">
                                    <p class="">Dokumen yang Dibutuhkan:</p>

                                    <ul class="list-disc ml-6 ">
                                        <li>Administrasi: Surat permohonan, formulir pendaftaran, dan NIB.</li>
                                        <li>Penyelia Halal: SK Penetapan, KTP, dan riwayat hidup.</li>
                                        <li>Produksi & Legalitas: Daftar produk, proses pengolahan, manual SJPH, serta izin edar/SLHS (jika ada).</li>
                                    </ul>

                                    <p class="">Catatan: Kami menyediakan template dokumen akan diberikan di awal proses sertifikasi untuk memudahkan pelaku usaha dalam melengkapi persyaratan.</p>
                                </div>
                            </div>
                            <h3 id="accordion-flush-heading-3">
                                <button type="button" class="flex items-center justify-between w-full py-6 px-12 font-medium text-left border-b text-16 md:text-20 lg:text-24 border-gray-200 text-hitam" data-accordion-target="#accordion-flush-body-3" aria-expanded="false" aria-controls="accordion-flush-body-3">
                                    <span>Apa saja dokumen yang diperlukan untuk sertifikasi halal?</span>
                                    <svg data-accordion-icon width="32" height="32" viewBox="0 0 32 32" class="h-6 w-6 shrink-0 " fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M27.0612 13.0624L17.0612 23.0624C16.9218 23.2023 16.7562 23.3132 16.5739 23.3889C16.3916 23.4647 16.1961 23.5036 15.9987 23.5036C15.8013 23.5036 15.6058 23.4647 15.4235 23.3889C15.2411 23.3132 15.0755 23.2023 14.9362 23.0624L4.9362 13.0624C4.6544 12.7807 4.49609 12.3985 4.49609 11.9999C4.49609 11.6014 4.6544 11.2192 4.9362 10.9374C5.21799 10.6557 5.60018 10.4973 5.9987 10.4973C6.39721 10.4973 6.7794 10.6557 7.0612 10.9374L15.9999 19.8762L24.9387 10.9362C25.2205 10.6544 25.6027 10.4961 26.0012 10.4961C26.3997 10.4961 26.7819 10.6544 27.0637 10.9362C27.3455 11.218 27.5038 11.6002 27.5038 11.9987C27.5038 12.3972 27.3455 12.7794 27.0637 13.0612L27.0612 13.0624Z" fill="#1D211D" />
                                    </svg>
                                </button>
                            </h3>
                            <div id="accordion-flush-body-3" class="hidden" aria-labelledby="accordion-flush-heading-3">
                                <div class="py-3 px-12  font-medium text-hitam text-14-2 sm:text-16-2 md:text-18-2 lg:text-20-2">
                                    <p class="">Dokumen yang Dibutuhkan:</p>

                                    <ul class="list-disc ml-6 ">
                                        <li>Administrasi: Surat permohonan, formulir pendaftaran, dan NIB.</li>
                                        <li>Penyelia Halal: SK Penetapan, KTP, dan riwayat hidup.</li>
                                        <li>Produksi & Legalitas: Daftar produk, proses pengolahan, manual SJPH, serta izin edar/SLHS (jika ada).</li>
                                    </ul>

                                    <p class="">Catatan: Kami menyediakan template dokumen akan diberikan di awal proses sertifikasi untuk memudahkan pelaku usaha dalam melengkapi persyaratan.</p>
                                </div>
                            </div> -->
                        </div>




                    </div>
                </div>
            </div>




        </section>


        <section class="bg-abu-99 pt-16 sm:pt-20 md:pt-24 lg:pt-36  pb-12 sm:pb-14 md:pb-16 lg:pb-16 px-5 sm:px-8 text-center justify-items-center">
            <div class=" mx-auto transform translate-y-10 transition-all duration-20000" data-fade>


                <h2 class="text-32 sm:text-40 md:text-56 font-bold font-philosopher text-hitam mb-2 ">Template Dokumen Sertifikasi Halal</h2>
                <p class="items-center text-center text-16 md:text-20-2  text-hijau-2  ">Unduh berbagai dokumen penting untuk memudahkan proses sertifikasi halal usaha Anda.</p>
            </div>

            <div class="mt-16 space-y-2 sm:space-y-4 md:space-y-8 w-full ">


                <!-- <div class=" text-left  bg-transparent  rounded-2xl p-4 md:p-8  border-[1.5px] border-hijau-6  w-full ">

                </div> -->

                <div class="text-left bg-transparent rounded-2xl p-4 md:p-8 border-[1.5px] border-hijau-6 w-full">
                    <ul class="space-y-6">
                        <li class="flex gap-4 items-center">
                            <span class="text-14-3 sm:text-16-2 md:text-20-2 text-hitam font-medium">Formulir Pendaftaran Sertifikasi Halal</span>
                            <button class="group px-4 py-2 flex justify-center items-center gap-2 text-hitam bg-putih font-semibold rounded-full text-14 border-[1.5px] border-hijau-6 transition duration-200 hover:bg-hijau-4 hover:text-putih active:bg-hijau-2 active:text-putih">
                                Unduh <span class="ml-1"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="#1D211D" class="transition duration-200 group-hover:fill-putih" d="M12.4688 7.875V11.375C12.4688 11.549 12.3996 11.716 12.2765 11.839C12.1535 11.9621 11.9865 12.0312 11.8125 12.0312H2.1875C2.01345 12.0312 1.84653 11.9621 1.72346 11.839C1.60039 11.716 1.53125 11.549 1.53125 11.375V7.875C1.53125 7.70095 1.60039 7.53403 1.72346 7.41096C1.84653 7.28789 2.01345 7.21875 2.1875 7.21875C2.36155 7.21875 2.52847 7.28789 2.65154 7.41096C2.77461 7.53403 2.84375 7.70095 2.84375 7.875V10.7188H11.1562V7.875C11.1562 7.70095 11.2254 7.53403 11.3485 7.41096C11.4715 7.28789 11.6385 7.21875 11.8125 7.21875C11.9865 7.21875 12.1535 7.28789 12.2765 7.41096C12.3996 7.53403 12.4688 7.70095 12.4688 7.875ZM6.5357 8.3393C6.59667 8.40048 6.66912 8.44902 6.74888 8.48214C6.82865 8.51526 6.91418 8.53231 7.00055 8.53231C7.08692 8.53231 7.17244 8.51526 7.25221 8.48214C7.33198 8.44902 7.40442 8.40048 7.46539 8.3393L9.65289 6.1518C9.77617 6.02851 9.84544 5.8613 9.84544 5.68695C9.84544 5.5126 9.77617 5.34539 9.65289 5.22211C9.52961 5.09882 9.3624 5.02956 9.18805 5.02956C9.0137 5.02956 8.84649 5.09882 8.7232 5.22211L7.65625 6.28906V1.75C7.65625 1.57595 7.58711 1.40903 7.46404 1.28596C7.34097 1.16289 7.17405 1.09375 7 1.09375C6.82595 1.09375 6.65903 1.16289 6.53596 1.28596C6.41289 1.40903 6.34375 1.57595 6.34375 1.75V6.28906L5.2768 5.2232C5.21575 5.16216 5.14328 5.11374 5.06352 5.0807C4.98377 5.04766 4.89828 5.03066 4.81195 5.03066C4.6376 5.03066 4.47039 5.09992 4.34711 5.2232C4.28607 5.28425 4.23764 5.35672 4.20461 5.43648C4.17157 5.51623 4.15456 5.60172 4.15456 5.68805C4.15456 5.8624 4.22382 6.02961 4.34711 6.15289L6.5357 8.3393Z" fill="#1D211D" />
                                    </svg>
                                </span>
                            </button>
                        </li>
                        <li class="flex gap-4 items-center">
                            <span class="text-14-3 sm:text-16-2 md:text-20-2 text-hitam font-medium">Formulir Pendaftaran Sertifikasi Halal</span>
                            <button class="group px-4 py-2 flex justify-center items-center gap-2 text-hitam bg-putih font-semibold rounded-full text-14 border-[1.5px] border-hijau-6 transition duration-200 hover:bg-hijau-4 hover:text-putih active:bg-hijau-2 active:text-putih">
                                Unduh <span class="ml-1"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="#1D211D" class="transition duration-200 group-hover:fill-putih" d="M12.4688 7.875V11.375C12.4688 11.549 12.3996 11.716 12.2765 11.839C12.1535 11.9621 11.9865 12.0312 11.8125 12.0312H2.1875C2.01345 12.0312 1.84653 11.9621 1.72346 11.839C1.60039 11.716 1.53125 11.549 1.53125 11.375V7.875C1.53125 7.70095 1.60039 7.53403 1.72346 7.41096C1.84653 7.28789 2.01345 7.21875 2.1875 7.21875C2.36155 7.21875 2.52847 7.28789 2.65154 7.41096C2.77461 7.53403 2.84375 7.70095 2.84375 7.875V10.7188H11.1562V7.875C11.1562 7.70095 11.2254 7.53403 11.3485 7.41096C11.4715 7.28789 11.6385 7.21875 11.8125 7.21875C11.9865 7.21875 12.1535 7.28789 12.2765 7.41096C12.3996 7.53403 12.4688 7.70095 12.4688 7.875ZM6.5357 8.3393C6.59667 8.40048 6.66912 8.44902 6.74888 8.48214C6.82865 8.51526 6.91418 8.53231 7.00055 8.53231C7.08692 8.53231 7.17244 8.51526 7.25221 8.48214C7.33198 8.44902 7.40442 8.40048 7.46539 8.3393L9.65289 6.1518C9.77617 6.02851 9.84544 5.8613 9.84544 5.68695C9.84544 5.5126 9.77617 5.34539 9.65289 5.22211C9.52961 5.09882 9.3624 5.02956 9.18805 5.02956C9.0137 5.02956 8.84649 5.09882 8.7232 5.22211L7.65625 6.28906V1.75C7.65625 1.57595 7.58711 1.40903 7.46404 1.28596C7.34097 1.16289 7.17405 1.09375 7 1.09375C6.82595 1.09375 6.65903 1.16289 6.53596 1.28596C6.41289 1.40903 6.34375 1.57595 6.34375 1.75V6.28906L5.2768 5.2232C5.21575 5.16216 5.14328 5.11374 5.06352 5.0807C4.98377 5.04766 4.89828 5.03066 4.81195 5.03066C4.6376 5.03066 4.47039 5.09992 4.34711 5.2232C4.28607 5.28425 4.23764 5.35672 4.20461 5.43648C4.17157 5.51623 4.15456 5.60172 4.15456 5.68805C4.15456 5.8624 4.22382 6.02961 4.34711 6.15289L6.5357 8.3393Z" fill="#1D211D" />
                                    </svg>
                                </span>
                            </button>
                        </li>
                        <li class="flex gap-4 items-center">
                            <span class="text-14-3 sm:text-16-2 md:text-20-2 text-hitam font-medium">Formulir Pendaftaran Sertifikasi Halal</span>
                            <button class="group px-4 py-2 flex justify-center items-center gap-2 text-hitam bg-putih font-semibold rounded-full text-14 border-[1.5px] border-hijau-6 transition duration-200 hover:bg-hijau-4 hover:text-putih active:bg-hijau-2 active:text-putih">
                                Unduh <span class="ml-1"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="#1D211D" class="transition duration-200 group-hover:fill-putih" d="M12.4688 7.875V11.375C12.4688 11.549 12.3996 11.716 12.2765 11.839C12.1535 11.9621 11.9865 12.0312 11.8125 12.0312H2.1875C2.01345 12.0312 1.84653 11.9621 1.72346 11.839C1.60039 11.716 1.53125 11.549 1.53125 11.375V7.875C1.53125 7.70095 1.60039 7.53403 1.72346 7.41096C1.84653 7.28789 2.01345 7.21875 2.1875 7.21875C2.36155 7.21875 2.52847 7.28789 2.65154 7.41096C2.77461 7.53403 2.84375 7.70095 2.84375 7.875V10.7188H11.1562V7.875C11.1562 7.70095 11.2254 7.53403 11.3485 7.41096C11.4715 7.28789 11.6385 7.21875 11.8125 7.21875C11.9865 7.21875 12.1535 7.28789 12.2765 7.41096C12.3996 7.53403 12.4688 7.70095 12.4688 7.875ZM6.5357 8.3393C6.59667 8.40048 6.66912 8.44902 6.74888 8.48214C6.82865 8.51526 6.91418 8.53231 7.00055 8.53231C7.08692 8.53231 7.17244 8.51526 7.25221 8.48214C7.33198 8.44902 7.40442 8.40048 7.46539 8.3393L9.65289 6.1518C9.77617 6.02851 9.84544 5.8613 9.84544 5.68695C9.84544 5.5126 9.77617 5.34539 9.65289 5.22211C9.52961 5.09882 9.3624 5.02956 9.18805 5.02956C9.0137 5.02956 8.84649 5.09882 8.7232 5.22211L7.65625 6.28906V1.75C7.65625 1.57595 7.58711 1.40903 7.46404 1.28596C7.34097 1.16289 7.17405 1.09375 7 1.09375C6.82595 1.09375 6.65903 1.16289 6.53596 1.28596C6.41289 1.40903 6.34375 1.57595 6.34375 1.75V6.28906L5.2768 5.2232C5.21575 5.16216 5.14328 5.11374 5.06352 5.0807C4.98377 5.04766 4.89828 5.03066 4.81195 5.03066C4.6376 5.03066 4.47039 5.09992 4.34711 5.2232C4.28607 5.28425 4.23764 5.35672 4.20461 5.43648C4.17157 5.51623 4.15456 5.60172 4.15456 5.68805C4.15456 5.8624 4.22382 6.02961 4.34711 6.15289L6.5357 8.3393Z" fill="#1D211D" />
                                    </svg>
                                </span>
                            </button>
                        </li>
                        <li class="flex gap-4 items-center">
                            <span class="text-14-3 sm:text-16-2 md:text-20-2 text-hitam font-medium">Formulir Pendaftaran Sertifikasi Halal</span>
                            <button class="group px-4 py-2 flex justify-center items-center gap-2 text-hitam bg-putih font-semibold rounded-full text-14 border-[1.5px] border-hijau-6 transition duration-200 hover:bg-hijau-4 hover:text-putih active:bg-hijau-2 active:text-putih">
                                Unduh <span class="ml-1"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="#1D211D" class="transition duration-200 group-hover:fill-putih" d="M12.4688 7.875V11.375C12.4688 11.549 12.3996 11.716 12.2765 11.839C12.1535 11.9621 11.9865 12.0312 11.8125 12.0312H2.1875C2.01345 12.0312 1.84653 11.9621 1.72346 11.839C1.60039 11.716 1.53125 11.549 1.53125 11.375V7.875C1.53125 7.70095 1.60039 7.53403 1.72346 7.41096C1.84653 7.28789 2.01345 7.21875 2.1875 7.21875C2.36155 7.21875 2.52847 7.28789 2.65154 7.41096C2.77461 7.53403 2.84375 7.70095 2.84375 7.875V10.7188H11.1562V7.875C11.1562 7.70095 11.2254 7.53403 11.3485 7.41096C11.4715 7.28789 11.6385 7.21875 11.8125 7.21875C11.9865 7.21875 12.1535 7.28789 12.2765 7.41096C12.3996 7.53403 12.4688 7.70095 12.4688 7.875ZM6.5357 8.3393C6.59667 8.40048 6.66912 8.44902 6.74888 8.48214C6.82865 8.51526 6.91418 8.53231 7.00055 8.53231C7.08692 8.53231 7.17244 8.51526 7.25221 8.48214C7.33198 8.44902 7.40442 8.40048 7.46539 8.3393L9.65289 6.1518C9.77617 6.02851 9.84544 5.8613 9.84544 5.68695C9.84544 5.5126 9.77617 5.34539 9.65289 5.22211C9.52961 5.09882 9.3624 5.02956 9.18805 5.02956C9.0137 5.02956 8.84649 5.09882 8.7232 5.22211L7.65625 6.28906V1.75C7.65625 1.57595 7.58711 1.40903 7.46404 1.28596C7.34097 1.16289 7.17405 1.09375 7 1.09375C6.82595 1.09375 6.65903 1.16289 6.53596 1.28596C6.41289 1.40903 6.34375 1.57595 6.34375 1.75V6.28906L5.2768 5.2232C5.21575 5.16216 5.14328 5.11374 5.06352 5.0807C4.98377 5.04766 4.89828 5.03066 4.81195 5.03066C4.6376 5.03066 4.47039 5.09992 4.34711 5.2232C4.28607 5.28425 4.23764 5.35672 4.20461 5.43648C4.17157 5.51623 4.15456 5.60172 4.15456 5.68805C4.15456 5.8624 4.22382 6.02961 4.34711 6.15289L6.5357 8.3393Z" fill="#1D211D" />
                                    </svg>
                                </span>
                            </button>
                        </li>
                        <li class="flex gap-4 items-center">
                            <span class="text-14-3 sm:text-16-2 md:text-20-2 text-hitam font-medium">Formulir Pendaftaran Sertifikasi Halal</span>
                            <button class="group px-4 py-2 flex justify-center items-center gap-2 text-hitam bg-putih font-semibold rounded-full text-14 border-[1.5px] border-hijau-6 transition duration-200 hover:bg-hijau-4 hover:text-putih active:bg-hijau-2 active:text-putih">
                                Unduh <span class="ml-1"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="#1D211D" class="transition duration-200 group-hover:fill-putih" d="M12.4688 7.875V11.375C12.4688 11.549 12.3996 11.716 12.2765 11.839C12.1535 11.9621 11.9865 12.0312 11.8125 12.0312H2.1875C2.01345 12.0312 1.84653 11.9621 1.72346 11.839C1.60039 11.716 1.53125 11.549 1.53125 11.375V7.875C1.53125 7.70095 1.60039 7.53403 1.72346 7.41096C1.84653 7.28789 2.01345 7.21875 2.1875 7.21875C2.36155 7.21875 2.52847 7.28789 2.65154 7.41096C2.77461 7.53403 2.84375 7.70095 2.84375 7.875V10.7188H11.1562V7.875C11.1562 7.70095 11.2254 7.53403 11.3485 7.41096C11.4715 7.28789 11.6385 7.21875 11.8125 7.21875C11.9865 7.21875 12.1535 7.28789 12.2765 7.41096C12.3996 7.53403 12.4688 7.70095 12.4688 7.875ZM6.5357 8.3393C6.59667 8.40048 6.66912 8.44902 6.74888 8.48214C6.82865 8.51526 6.91418 8.53231 7.00055 8.53231C7.08692 8.53231 7.17244 8.51526 7.25221 8.48214C7.33198 8.44902 7.40442 8.40048 7.46539 8.3393L9.65289 6.1518C9.77617 6.02851 9.84544 5.8613 9.84544 5.68695C9.84544 5.5126 9.77617 5.34539 9.65289 5.22211C9.52961 5.09882 9.3624 5.02956 9.18805 5.02956C9.0137 5.02956 8.84649 5.09882 8.7232 5.22211L7.65625 6.28906V1.75C7.65625 1.57595 7.58711 1.40903 7.46404 1.28596C7.34097 1.16289 7.17405 1.09375 7 1.09375C6.82595 1.09375 6.65903 1.16289 6.53596 1.28596C6.41289 1.40903 6.34375 1.57595 6.34375 1.75V6.28906L5.2768 5.2232C5.21575 5.16216 5.14328 5.11374 5.06352 5.0807C4.98377 5.04766 4.89828 5.03066 4.81195 5.03066C4.6376 5.03066 4.47039 5.09992 4.34711 5.2232C4.28607 5.28425 4.23764 5.35672 4.20461 5.43648C4.17157 5.51623 4.15456 5.60172 4.15456 5.68805C4.15456 5.8624 4.22382 6.02961 4.34711 6.15289L6.5357 8.3393Z" fill="#1D211D" />
                                    </svg>
                                </span>
                            </button>
                        </li>

                    </ul>
                </div>


            </div>

        </section>
        <section class="relative bg-gradient-to-r from-[#031207] via-hijau-2 to-[#031207] flex items-center justify-center py-12 sm:py-16 md:py-20 lg:py-24 px-5 sm:px-14 mx-auto">
            <div class="text-center text-white relative transform translate-y-10 transition-all duration-20000" data-fade>
                <h1 class="text-24-2 sm:text-32-2 md:text-40-2 font-philosopher mb-12">“Halalan Thoyyiban bukan hanya tentang mematuhi perintah, tetapi juga menghadirkan keberkahan bagi diri, keluarga, dan bisnis Anda.”</h1>


                <div class="md:flex justify-center space-y-2 md:space-y-0 md:space-x-3 items-center transform translate-y-10 transition-all duration-20000" data-fade>

                    <a href="#" class=" bg-gradient-to-r from-[#ECC764] via-[#F5D686] to-[#ECC764] px-6 py-3 flex justify-center text-hitam font-semibold rounded-full text-16 
    hover:bg-gradient-to-r hover:from-[#D9B456] hover:via-[#E6C270] hover:to-[#D9B456] 
   active:bg-gradient-to-r active:from-[#C0A04D] active:via-[#D1AF65] active:to-[#C0A04D] ">
                        Daftar Sertifikasi Halal
                    </a>
                    <a href="#" class=" px-6 py-3 flex justify-center items-center gap-2 text-putih  font-medium rounded-full text-16 bg-transparent  border-[1.5px] border-hijau-5
     transition duration-200 hover:bg-putih hover:text-hitam active:bg-abu-98 active:text-hitam">
                        Daftar Pelatihan Halal
                        <svg width="16" height="16" viewBox="0 0 16 16"
                            class="w-4 h-4 fill-current"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="ArrowUpRight">
                                <path id="Vector" d="M12.75 4V10.5C12.75 10.6989 12.671 10.8897 12.5303 11.0303C12.3897 11.171 12.1989 11.25 12 11.25C11.8011 11.25 11.6103 11.171 11.4696 11.0303C11.329 10.8897 11.25 10.6989 11.25 10.5V5.8125L4.5306 12.5306C4.3897 12.6715 4.19861 12.7507 3.99935 12.7507C3.80009 12.7507 3.60899 12.6715 3.4681 12.5306C3.3272 12.3897 3.24805 12.1986 3.24805 11.9994C3.24805 11.8001 3.3272 11.609 3.4681 11.4681L10.1875 4.75H5.49997C5.30106 4.75 5.1103 4.67098 4.96964 4.53033C4.82899 4.38968 4.74997 4.19891 4.74997 4C4.74997 3.80109 4.82899 3.61032 4.96964 3.46967C5.1103 3.32902 5.30106 3.25 5.49997 3.25H12C12.1989 3.25 12.3897 3.32902 12.5303 3.46967C12.671 3.61032 12.75 3.80109 12.75 4Z" />
                            </g>
                        </svg>
                    </a>
                    <a href="#" class=" px-6 py-3 flex justify-center items-center gap-2 text-putih  font-medium rounded-full text-16 bg-transparent  border-[1.5px] border-hijau-5
     transition duration-200 hover:bg-putih hover:text-hitam active:bg-abu-98 active:text-hitam">
                        Konsultasi Gratis
                        <svg width="16" height="16" viewBox="0 0 16 16"
                            class="w-4 h-4 fill-current"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="ArrowUpRight">
                                <path id="Vector" d="M12.75 4V10.5C12.75 10.6989 12.671 10.8897 12.5303 11.0303C12.3897 11.171 12.1989 11.25 12 11.25C11.8011 11.25 11.6103 11.171 11.4696 11.0303C11.329 10.8897 11.25 10.6989 11.25 10.5V5.8125L4.5306 12.5306C4.3897 12.6715 4.19861 12.7507 3.99935 12.7507C3.80009 12.7507 3.60899 12.6715 3.4681 12.5306C3.3272 12.3897 3.24805 12.1986 3.24805 11.9994C3.24805 11.8001 3.3272 11.609 3.4681 11.4681L10.1875 4.75H5.49997C5.30106 4.75 5.1103 4.67098 4.96964 4.53033C4.82899 4.38968 4.74997 4.19891 4.74997 4C4.74997 3.80109 4.82899 3.61032 4.96964 3.46967C5.1103 3.32902 5.30106 3.25 5.49997 3.25H12C12.1989 3.25 12.3897 3.32902 12.5303 3.46967C12.671 3.61032 12.75 3.80109 12.75 4Z" />
                            </g>
                        </svg>
                    </a>

                </div>
            </div>

            <!-- <img src="{{ asset('images/Frame 804.webp') }}" class=" w-full absolute bottom-0 left-0"> -->
        </section>





    </main>

    <footer id="footer">
        @include('layouts.footer')
    </footer>



</body>

<script>
    const button = document.querySelector('[data-accordion-target="#accordion-flush-body-1"]');
    const svg = button.querySelector('svg');

    button.addEventListener('click', () => {
        svg.classList.toggle('rotate-180');
    });
</script>

<script>
    // Fungsi untuk memulai animasi fade dan transformasi
    const fadeInElements = document.querySelectorAll('[data-fade]');

    const fadeInOptions = {
        threshold: [0.2, 1.0], // Menambahkan threshold pada 30% dan 100%
    };

    const fadeInObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Elemen sepenuhnya terlihat
                if (entry.intersectionRatio === 1) {
                    entry.target.classList.remove('opacity-10', 'translate-y-10');
                    entry.target.classList.add('opacity-100', 'translate-y-0');
                }
                // Elemen sudah 30% terlihat
                // else if (entry.intersectionRatio >= 0.2) {
                //     entry.target.classList.remove('opacity-100', 'translate-y-0');
                //     entry.target.classList.add('opacity-10', 'translate-y-10');
                // }
            } else {
                // Elemen keluar dari viewport
                entry.target.classList.remove('opacity-100', 'opacity-10', 'translate-y-0', 'translate-y-10');
                entry.target.classList.add('opacity-10', 'translate-y-10');
            }
        });
    }, fadeInOptions);

    fadeInElements.forEach(element => {
        fadeInObserver.observe(element);
    });
</script>



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
    const testimonials = [{
            quote: "Terima kasih kepada tim BHM atas dukungan luar biasa dalam proses sertifikasi halal kami. Layanan yang memuaskan, tepat waktu, dan sangat membantu dalam administrasi serta kelengkapan dokumen. Kami berhasil mendapatkan sertifikat halal tahun ini berkat BHM. Sukses selalu, BHM!",
            name: "Feri Iswoyo",
            position: "Manajer Umum,",
            perusahaan: "Mercure Padang"
        },
        {
            quote: "Sebagai UMKM, sertifikasi halal penting untuk memperluas pasar dan memberi kenyamanan pembeli. Prosesnya mudah, tidak ribet, dan tim BHM sangat membantu dengan arahan yang jelas. Jangan ragu mengurus sertifikasi halal!",
            name: "Dewi Santika",
            position: "Pemilik Usaha,",
            perusahaan: "Rendang Madam"
        },
        {
            quote: "Pelatihan Penyelia Halal di Bersama Halal Madani sangat informatif, jelas, dan ringkas. Suasananya menyenangkan dengan ice breaking yang seru, membuat belajar lebih interaktif dan tidak membosankan. Sangat direkomendasikan!",
            name: "Tia Abkoria",
            position: "Penyelia Halal,",
            perusahaan: "Kaffa Aqiqah Padang"
        },
        {
            quote: "Sangat puas dengan layanan Bersama Halal Madani. Pematerinya luar biasa, disampaikan oleh dokter profesional. Fasilitasnya baik, termasuk konsumsi yang tersedia sejak kedatangan. Sesi praktik penyembelihan halal di akhir pelatihan sangat berkesan dan menambah wawasan.",
            name: "Ilham Zulfahmi",
            position: "Juru Sembelih Halal,",
            perusahaan: "Kaffa Aqiqah Padang"
        },
        {
            quote: "Testimoni kelimaa dengan konten yang berbeda.",
            name: "Nama keempaatt",
            position: "Jabatan Keeempatt,",
            perusahaan: "Jabatan Keeempatt,"
        }
    ];

    let currentIndex = 0;

    const quoteElement = document.getElementById('quote');
    const nameElement = document.getElementById('name');
    const positionElement = document.getElementById('position');
    const perusahaanElement = document.getElementById('perusahaan');

    const updateTestimonial = () => {
        const currentTestimonial = testimonials[currentIndex];
        quoteElement.textContent = currentTestimonial.quote;
        nameElement.textContent = currentTestimonial.name;
        positionElement.textContent = currentTestimonial.position;
        perusahaanElement.textContent = currentTestimonial.perusahaan;
    };

    document.getElementById('next').addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % testimonials.length;
        updateTestimonial();
    });

    document.getElementById('prev').addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + testimonials.length) % testimonials.length;
        updateTestimonial();
    });

    updateTestimonial(); // Initialize the first testimonial
</script>

<script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
<!-- Pastikan Anda menyertakan skrip ini di bagian bawah body Anda -->
<script src="https://cdn.jsdelivr.net/npm/tailwindcss-accordion/dist/tailwind-accordion.min.js"></script>

</html>