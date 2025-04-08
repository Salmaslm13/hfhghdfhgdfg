<nav class="bg-putih  fixed w-full z-20 top-0 ">
    <div class="max-w-screen-2xl mx-auto flex bg-putih flex-wrap items-center justify-between px-2 md:px-12">
        <a href="{{ route('beranda') }}" class="flex items-center space-x-3 rtl:space-x-reverse py-2">
            <img src="{{ asset('svgs/logoBHM.svg') }}" alt="Logo Bersama Halal Madani" class="h-14 w-auto" />
        </a>
        <div class="flex md:order-2 sm:space-x-1 md:space-x-0 rtl:space-x-reverse items-center">
            <a href="#" class="mr-2 hidden sm:block bg-gradient-to-r from-[#ECC764] via-[#F5D686] to-[#ECC764] relative px-5 py-3 text-hitam font-semibold rounded-full text-14 
   bg-gold-200  hover:bg-gradient-to-r hover:from-[#D9B456] hover:via-[#E6C270] hover:to-[#D9B456] 
   active:bg-gradient-to-r active:from-[#C0A04D] active:via-[#D1AF65] active:to-[#C0A04D]">
                Hubungi Kami
            </a>
            <div class="relative">
                <button id="dropdownLanguange" data-dropdown-toggle="dropdownBahasa" class="flex items-center justify-between block h-12 text-hitam rounded-sm  md:hover:bg-transparent md:hover:text-hijau-4 flex items-center justify-center px-2 py-1 md:px-4 md:py-2">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.125 2C8.51803 2 6.94714 2.47652 5.611 3.36931C4.27485 4.2621 3.23344 5.53105 2.61848 7.0157C2.00352 8.50035 1.84262 10.134 2.15612 11.7101C2.46963 13.2862 3.24346 14.7339 4.37976 15.8702C5.51606 17.0065 6.9638 17.7804 8.5399 18.0939C10.116 18.4074 11.7497 18.2465 13.2343 17.6315C14.719 17.0166 15.9879 15.9752 16.8807 14.639C17.7735 13.3029 18.25 11.732 18.25 10.125C18.2475 7.97088 17.3907 5.90569 15.8675 4.3825C14.3443 2.8593 12.2791 2.00248 10.125 2ZM16.9703 9.5H13.8586C13.7188 6.64766 12.6203 4.63047 11.7195 3.4375C13.1182 3.77337 14.3766 4.53857 15.3184 5.62579C16.2602 6.71302 16.8381 8.06774 16.9711 9.5H16.9703ZM7.64297 10.75H12.607C12.4266 14.0008 10.8703 15.993 10.125 16.7656C9.37891 15.9922 7.82344 14 7.64297 10.75ZM7.64297 9.5C7.82344 6.24922 9.37969 4.25703 10.125 3.48438C10.8711 4.26016 12.4266 6.25234 12.607 9.5H7.64297ZM8.53047 3.4375C7.62969 4.63047 6.53125 6.64766 6.39141 9.5H3.27891C3.41187 8.06774 3.98977 6.71302 4.93157 5.62579C5.87336 4.53857 7.13182 3.77337 8.53047 3.4375ZM3.27891 10.75H6.39141C6.5336 13.6023 7.62969 15.6195 8.53047 16.8125C7.13182 16.4766 5.87336 15.7114 4.93157 14.6242C3.98977 13.537 3.41187 12.1823 3.27891 10.75ZM11.7164 16.8125C12.6172 15.6195 13.7133 13.6023 13.8555 10.75H16.968C16.8352 12.1818 16.2578 13.5363 15.3166 14.6234C14.3754 15.7106 13.1176 16.4761 11.7195 16.8125H11.7164Z" fill="#1D211D" />
                    </svg>

                    <svg width="16" class="ml-1" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.2806 6.28318L8.2806 11.2832C8.21092 11.3531 8.12813 11.4086 8.03696 11.4464C7.9458 11.4843 7.84806 11.5038 7.74935 11.5038C7.65064 11.5038 7.5529 11.4843 7.46173 11.4464C7.37057 11.4086 7.28778 11.3531 7.2181 11.2832L2.2181 6.28318C2.0772 6.14228 1.99805 5.95118 1.99805 5.75193C1.99805 5.55267 2.0772 5.36157 2.2181 5.22068C2.35899 5.07978 2.55009 5.00063 2.74935 5.00063C2.94861 5.00063 3.1397 5.07978 3.2806 5.22068L7.74997 9.69005L12.2193 5.22005C12.3602 5.07916 12.5513 5 12.7506 5C12.9499 5 13.141 5.07916 13.2818 5.22005C13.4227 5.36095 13.5019 5.55204 13.5019 5.7513C13.5019 5.95056 13.4227 6.14165 13.2818 6.28255L13.2806 6.28318Z" fill="#1D211D" />
                    </svg>
                </button>

                <div id="dropdownBahasa" class="z-10 hidden font-medium bg-putih  shadow-sm w-32 absolute mt-1 ">
                    <ul class="py-2 text-14 text-hitam" aria-labelledby="dropdownLargeButton">
                        <li>
                            <a href="#" class="block px-4 py-3 hover:bg-hijau-4 hover:text-putih ">English</a>
                        </li>

                    </ul>

                </div>
            </div>


            <!-- <button id="menuToggle" data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center px-2 py-1 lg:px-4 lg:py-2  justify-center text-14 text-hitam  lg:hidden focus:outline-none " aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21 12C21 12.1989 20.921 12.3897 20.7803 12.5303C20.6397 12.671 20.4489 12.75 20.25 12.75H3.75C3.55109 12.75 3.36032 12.671 3.21967 12.5303C3.07902 12.3897 3 12.1989 3 12C3 11.8011 3.07902 11.6103 3.21967 11.4697C3.36032 11.329 3.55109 11.25 3.75 11.25H20.25C20.4489 11.25 20.6397 11.329 20.7803 11.4697C20.921 11.6103 21 11.8011 21 12ZM3.75 6.75H20.25C20.4489 6.75 20.6397 6.67098 20.7803 6.53033C20.921 6.38968 21 6.19891 21 6C21 5.80109 20.921 5.61032 20.7803 5.46967C20.6397 5.32902 20.4489 5.25 20.25 5.25H3.75C3.55109 5.25 3.36032 5.32902 3.21967 5.46967C3.07902 5.61032 3 5.80109 3 6C3 6.19891 3.07902 6.38968 3.21967 6.53033C3.36032 6.67098 3.55109 6.75 3.75 6.75ZM20.25 17.25H3.75C3.55109 17.25 3.36032 17.329 3.21967 17.4697C3.07902 17.6103 3 17.8011 3 18C3 18.1989 3.07902 18.3897 3.21967 18.5303C3.36032 18.671 3.55109 18.75 3.75 18.75H20.25C20.4489 18.75 20.6397 18.671 20.7803 18.5303C20.921 18.3897 21 18.1989 21 18C21 17.8011 20.921 17.6103 20.7803 17.4697C20.6397 17.329 20.4489 17.25 20.25 17.25Z" fill="#1D211D" />
                </svg>

            </button> -->

            <button id="menuToggle" type="button" class="inline-flex items-center px-2 py-1 lg:px-4 lg:py-2 justify-center text-14 text-hitam lg:hidden focus:outline-none">
                <span class="sr-only">Open main menu</span>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21 12C21 12.1989 20.921 12.3897 20.7803 12.5303C20.6397 12.671 20.4489 12.75 20.25 12.75H3.75C3.55109 12.75 3.36032 12.671 3.21967 12.5303C3.07902 12.3897 3 12.1989 3 12C3 11.8011 3.07902 11.6103 3.21967 11.4697C3.36032 11.329 3.55109 11.25 3.75 11.25H20.25C20.4489 11.25 20.6397 11.329 20.7803 11.4697C20.921 11.6103 21 11.8011 21 12ZM3.75 6.75H20.25C20.4489 6.75 20.6397 6.67098 20.7803 6.53033C20.921 6.38968 21 6.19891 21 6C21 5.80109 20.921 5.61032 20.7803 5.46967C20.6397 5.32902 20.4489 5.25 20.25 5.25H3.75C3.55109 5.25 3.36032 5.32902 3.21967 5.46967C3.07902 5.61032 3 5.80109 3 6C3 6.19891 3.07902 6.38968 3.21967 6.53033C3.36032 6.67098 3.55109 6.75 3.75 6.75ZM20.25 17.25H3.75C3.55109 17.25 3.36032 17.329 3.21967 17.4697C3.07902 17.6103 3 17.8011 3 18C3 18.1989 3.07902 18.3897 3.21967 18.5303C3.36032 18.671 3.55109 18.75 3.75 18.75H20.25C20.4489 18.75 20.6397 18.671 20.7803 18.5303C20.921 18.3897 21 18.1989 21 18C21 17.8011 20.921 17.6103 20.7803 17.4697C20.6397 17.329 20.4489 17.25 20.25 17.25Z" fill="#1D211D" />
                </svg>
            </button>


            <div id="mobileMenu" class="lg:hidden hidden fixed top-0 right-0 z-10 bg-putih px-6 py-6  w-full sm:w-1/2 justify-end">
                <div class="flex items-center justify-between">
                    <a href="{{ route('beranda') }}" class="sm:hidden">
                        <img src="{{ asset('svgs/logoBHM.svg') }}" alt="Logo Bersama Halal Madani" class="h-14 w-auto" />

                    </a>
                    <div></div>
                    <button id="closeMenu" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                        <span class="sr-only">Close menu</span>
                        <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="mt-6 flow-root">
                    <div class="-my-6 divide-y divide-gray-500/10">
                        <div class="space-y-2 py-6">
                            <a href="{{ route('beranda') }}" class="block px-4 py-3 hover:bg-hijau-4 hover:text-putih active:bg-hijau-4 active:text-putih  text-hitam rounded-sm  flex items-center font-semibold ">Beranda</a>
                            <a href="{{ route('tentangKami') }}" class="block px-4 py-3 hover:bg-hijau-4 hover:text-putih active:bg-hijau-4 active:text-putih  text-hitam rounded-sm  flex items-center font-semibold ">Tentang Kami</a>


                            <!-- <div class="">
                                <button type="button" class="flex w-full items-center justify-between block px-4 py-3 hover:bg-hijau-4 hover:text-putih   text-hitam rounded-sm  flex items-center font-semibold " aria-controls="disclosure-1" aria-expanded="false">
                                    Layanan

                                    <svg width="16" class="ml-1 hover:text-putih active:text-putih" height="16" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.2806 6.28318L8.2806 11.2832C8.21092 11.3531 8.12813 11.4086 8.03696 11.4464C7.9458 11.4843 7.84806 11.5038 7.74935 11.5038C7.65064 11.5038 7.5529 11.4843 7.46173 11.4464C7.37057 11.4086 7.28778 11.3531 7.2181 11.2832L2.2181 6.28318C2.0772 6.14228 1.99805 5.95118 1.99805 5.75193C1.99805 5.55267 2.0772 5.36157 2.2181 5.22068C2.35899 5.07978 2.55009 5.00063 2.74935 5.00063C2.94861 5.00063 3.1397 5.07978 3.2806 5.22068L7.74997 9.69005L12.2193 5.22005C12.3602 5.07916 12.5513 5 12.7506 5C12.9499 5 13.141 5.07916 13.2818 5.22005C13.4227 5.36095 13.5019 5.55204 13.5019 5.7513C13.5019 5.95056 13.4227 6.14165 13.2818 6.28255L13.2806 6.28318Z" fill="#1D211D" />
                                    </svg>
                                </button>
                               
                                <div class="pl-4 mt-2 space-y-2" id="disclosure-1">
                                    <a href="#" class="block px-4 py-3 hover:bg-hijau-4 hover:text-putih   text-hitam rounded-sm  flex items-center font-semibold">Lembaga Pemeriksa Halal</a>
                                    <a href="#" class="block px-4 py-3 hover:bg-hijau-4 hover:text-putih   text-hitam rounded-sm  flex items-center font-semibold">Lembaga Pelatihan Kerja</a>
                                    <a href="#" class="block px-4 py-3 hover:bg-hijau-4 hover:text-putih   text-hitam rounded-sm  flex items-center font-semibold">Institut BHM</a>

                                </div>
                            </div> -->

                            <div class="">
                                <button id="toggle-button" type="button" class="flex w-full items-center justify-between block px-4 py-3 text-hitam rounded-sm font-semibold" aria-controls="disclosure-1" aria-expanded="false">
                                    Layanan

                                    <svg id="toggle-icon" width="16" class="ml-1 hover:text-putih active:text-putih transition-transform duration-300" height="16" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.2806 6.28318L8.2806 11.2832C8.21092 11.3531 8.12813 11.4086 8.03696 11.4464C7.9458 11.4843 7.84806 11.5038 7.74935 11.5038C7.65064 11.5038 7.5529 11.4843 7.46173 11.4464C7.37057 11.4086 7.28778 11.3531 7.2181 11.2832L2.2181 6.28318C2.0772 6.14228 1.99805 5.95118 1.99805 5.75193C1.99805 5.55267 2.0772 5.36157 2.2181 5.22068C2.35899 5.07978 2.55009 5.00063 2.74935 5.00063C2.94861 5.00063 3.1397 5.07978 3.2806 5.22068L7.74997 9.69005L12.2193 5.22005C12.3602 5.07916 12.5513 5 12.7506 5C12.9499 5 13.141 5.07916 13.2818 5.22005C13.4227 5.36095 13.5019 5.55204 13.5019 5.7513C13.5019 5.95056 13.4227 6.14165 13.2818 6.28255L13.2806 6.28318Z" fill="#1D211D" />
                                    </svg>
                                </button>

                                <!-- 'layanan' sub-menu, initially hidden -->
                                <div class="pl-4 mt-2 space-y-2 hidden" id="disclosure-1">
                                    <a href="{{ route('LPH') }}" class="block px-4 py-3 hover:bg-hijau-4 hover:text-putih active:bg-hijau-4 active:text-putih text-hitam rounded-sm flex items-center font-semibold">Lembaga Pemeriksa Halal</a>
                                    <a href="#" class="block px-4 py-3 hover:bg-hijau-4 hover:text-putih active:bg-hijau-4 active:text-putih  text-hitam rounded-sm flex items-center font-semibold">Lembaga Pelatihan Kerja</a>
                                    <a href="#" class="block px-4 py-3 hover:bg-hijau-4 hover:text-putih active:bg-hijau-4 active:text-putih text-hitam rounded-sm flex items-center font-semibold">Institut BHM</a>
                                </div>
                            </div>


                            <a href="#" class="block px-4 py-3 hover:bg-hijau-4 hover:text-putih  active:bg-hijau-4 active:text-putih text-hitam rounded-sm  flex items-center font-semibold ">Artikel</a>
                            <a href="#" class="block px-4 py-3 hover:bg-hijau-4 hover:text-putih  active:bg-hijau-4 active:text-putih text-hitam rounded-sm  flex items-center font-semibold ">Karir</a>



                        </div>
                        <!-- <div class="py-6">
                                <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Log in</a>
                            </div> -->
                    </div>
                </div>
            </div>

            <!-- <div class="lg:hidden" role="dialog" aria-modal="true" class="hidden">
                
                <div class="fixed inset-0 z-10"></div>
                <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                    <div class="flex items-center justify-between">
                        <a href="#" class="-m-1.5 p-1.5">
                            <span class="sr-only">Your Company</span>
                            <img class="h-8 w-auto" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="">
                        </a>
                        <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                            <span class="sr-only">Close menu</span>
                            <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="mt-6 flow-root">
                        <div class="-my-6 divide-y divide-gray-500/10">
                            <div class="space-y-2 py-6">
                                <div class="-mx-3">
                                    <button type="button" class="flex w-full items-center justify-between rounded-lg py-2 pr-3.5 pl-3 text-base/7 font-semibold text-gray-900 hover:bg-gray-50" aria-controls="disclosure-1" aria-expanded="false">
                                        Product

                                        <svg class="size-5 flex-none" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                            <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                  
                                    <div class="mt-2 space-y-2" id="disclosure-1">
                                        <a href="#" class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Analytics</a>
                                        <a href="#" class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Engagement</a>
                                        <a href="#" class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Security</a>

                                    </div>
                                </div>
                                <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Features</a>
                                <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Marketplace</a>
                                <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Company</a>
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div> -->
        </div>

        <!-- <div class="items-center justify-between hidden w-full lg:w-auto lg:order-2" id="navbar-sticky"> -->
        <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1 relative">
            <ul class="flex flex-col p-4 lg:p-0 mt-4 text-14 font-semibold rtl:space-x-reverse lg:flex-row lg:mt-0 lg:border-0 lg:bg-white">
                <li class="flex-grow">
                    <a href="{{ route('beranda') }}" class="block h-12 text-hitam rounded-sm md:bg-transparent md:hover:text-hijau-4 flex items-center justify-center px-4 py-2" aria-current="page">Beranda</a>
                </li>
                <li class="flex-grow">
                    <a href="{{ route('tentangKami') }}" class="block h-12 text-hitam rounded-sm  md:hover:bg-transparent md:hover:text-hijau-4 flex items-center justify-center px-4 py-2">Tentang Kami</a>
                </li>
                <li>
                    <div class="relative ">
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar2" class="flex items-center justify-between block h-12 text-hitam   md:hover:bg-transparent md:hover:text-hijau-4 flex items-center justify-center px-4 py-2">Layanan
                            <svg width="16" class="ml-1" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.2806 6.28318L8.2806 11.2832C8.21092 11.3531 8.12813 11.4086 8.03696 11.4464C7.9458 11.4843 7.84806 11.5038 7.74935 11.5038C7.65064 11.5038 7.5529 11.4843 7.46173 11.4464C7.37057 11.4086 7.28778 11.3531 7.2181 11.2832L2.2181 6.28318C2.0772 6.14228 1.99805 5.95118 1.99805 5.75193C1.99805 5.55267 2.0772 5.36157 2.2181 5.22068C2.35899 5.07978 2.55009 5.00063 2.74935 5.00063C2.94861 5.00063 3.1397 5.07978 3.2806 5.22068L7.74997 9.69005L12.2193 5.22005C12.3602 5.07916 12.5513 5 12.7506 5C12.9499 5 13.141 5.07916 13.2818 5.22005C13.4227 5.36095 13.5019 5.55204 13.5019 5.7513C13.5019 5.95056 13.4227 6.14165 13.2818 6.28255L13.2806 6.28318Z" fill="#1D211D" />
                            </svg>
                        </button>

                        <div id="dropdownNavbar2" class="z-10 hidden font-medium bg-putih shadow-sm w-56 absolute mt-1 ">
                            <ul class="py-2 text-14 text-hitam" aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="{{ route('LPH') }}" class="block px-4 py-3 hover:bg-hijau-4 hover:text-putih">Lembaga Pemeriksa Halal</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-3 hover:bg-hijau-4 hover:text-putih">Lembaga Pelatihan Kerja</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-3 hover:bg-hijau-4 hover:text-putih">Institut BHM</a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </li>
                <li class="flex-grow">
                    <a href="#" class="block h-12 text-hitam rounded-sm  md:hover:bg-transparent md:hover:text-hijau-4 flex items-center justify-center px-4 py-2">Artikel</a>
                </li>
                <li class="flex-grow">
                    <a href="#" class="block h-12 text-hitam rounded-sm  md:hover:bg-transparent md:hover:text-hijau-4 flex items-center justify-center px-4 py-2">Karir</a>
                </li>
            </ul>
        </div>
    </div>
</nav>









<script>
    document.getElementById('dropdownLanguange').addEventListener('click', function() {
        const dropdown = document.getElementById('dropdownBahasa');
        dropdown.classList.toggle('hidden'); // Menyembunyikan atau menampilkan dropdown
    });
</script>

<script>
    document.getElementById('dropdownNavbarLink').addEventListener('click', function() {
        const dropdown = document.getElementById('dropdownNavbar2');
        dropdown.classList.toggle('hidden'); // Menyembunyikan atau menampilkan dropdown
    });
</script>

<script>
    // Fungsi untuk toggle navbar mobile
    document.getElementById('menuToggle').addEventListener('click', function() {
        const navbar = document.getElementById('navbar-sticky');
        navbar.classList.toggle('hidden');
    });
</script>

<!-- <script>
    document.addEventListener("DOMContentLoaded", function() {
        const burgerButton = document.querySelector(".lg\:hidden button"); // Tombol hamburger
        const menu = document.querySelector(".lg\\:hidden"); // Menu yang ditampilkan
        const closeButton = menu.querySelector("button[type='button']"); // Tombol close

        // Toggle menu saat tombol hamburger diklik
        burgerButton.addEventListener("click", function() {
            menu.classList.toggle("hidden");
        });

        // Tutup menu saat tombol close diklik
        closeButton.addEventListener("click", function() {
            menu.classList.add("hidden");
        });

        // Toggle submenu Product
        const productButton = document.querySelector("[aria-controls='disclosure-1']");
        const productMenu = document.querySelector("#disclosure-1");

        productButton.addEventListener("click", function() {
            productMenu.classList.toggle("hidden");
        });
    });
</script> -->

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const menuToggle = document.getElementById("menuToggle");
        const mobileMenu = document.getElementById("mobileMenu");
        const closeMenu = document.getElementById("closeMenu");

        menuToggle.addEventListener("click", function() {
            mobileMenu.classList.toggle("hidden");
        });

        closeMenu.addEventListener("click", function() {
            mobileMenu.classList.add("hidden");
        });
    });
</script>

<script>
    const button = document.getElementById('toggle-button');
    const submenu = document.getElementById('disclosure-1');
    const icon = document.getElementById('toggle-icon');

    button.addEventListener('click', () => {
        // Toggle visibility of submenu
        submenu.classList.toggle('hidden');

        // Change icon color and rotate
        if (submenu.classList.contains('hidden')) {
            // icon.style.fill = '#1D211D'; // Original color
            icon.style.transform = 'rotate(0deg)';
        } else {
            // icon.style.fill = '#FFffff'; // Change to desired color on click
            icon.style.transform = 'rotate(180deg)';
        }
    });
</script>