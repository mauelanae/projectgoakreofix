<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website GoaKreo.</title>
    @include('partial.head')
</head>

<body>
    <!-- Header Start -->
    <header>
        <nav class="w-full bg-white border-gray-200 mt-0">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="{{ route('user') }}" class="flex items-center">
                    <img src="{{ asset('logo.png') }}" class="h-8 mr-3" alt="Logo" />
                </a>
                <button data-collapse-toggle="navbar-user" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    aria-controls="navbar-user" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
                    <ul
                        class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white">
                        <li>
                            <a href="{{ route('user') }}"
                                class="block py-2 pl-3 pr-4 text-utama rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-utama md:p-0">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('services') }}"
                                class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-utama md:p-0">Services</a>
                        </li>
                        <li>
                            <a href="{{ route('joinafp') }}"
                                class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-utama md:p-0">Status</a>
                        </li>
                        <li>

                            <button id="dropdownUserAvatarButton" data-dropdown-toggle="dropdownAvatar"
                                class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                                type="button">
                                <span class="sr-only">Open user menu</span>
                                <img class="w-8 h-8 rounded-full" src="{{asset('account.png')}}"
                                    alt="user photo">
                            </button>

                            <!-- Dropdown menu -->
                            <div id="dropdownAvatar"
                                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                                    <div></div>
                                    <div class="font-medium text-white">
                                        {{ auth()->user()->name }}
                                    </div>
                                </div>
                                <div class="py-2">
                                    <a href="/logout" class="block px-4 py-2 text-sm text-white bg-gray-100">Sign
                                        out</a>
                                </div>
                            </div>

                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Header End -->
    <!-- Hero Section Start -->
    <section id="Home" class="h-screen">
        <div class="relative h-screen">
            <div>
                <img src="Artboard 1.png" id="kantor"
                    class="absolute sm:block hidden sm:right-0 md:flex md:right-0 md:h-full md:-top-0 md:object-cover lg:flex lg:right-0 lg:h-full lg:w-full lg:-top-0 lg:object-cover">
            </div>
            <div class="container items-center">
                <div class="absolute 2xl:mt-52 xl:mt-24 md:mt-20 flex flex-col lg:flex-row left-0 right-0">
                    <div class="w-full self-start px-4">
                        <div class="mt-0">
                            <img src="image_gif.gif" alt="goakreo" class="items-center lg:max-w-3xl h-auto max-w-full">
                        </div>
                    </div>
                    <div class="w-full self-center px-6 pt-4">
                        <h1 class="text-font1 text-4xl font-bold mb-2">Gerakan Respon Wabah Dan KLB Terintegrasi Kota
                            Semarang</h1>
                        <h2 class="text-font1 text-base font-medium mb-6">Detect, Respons & Cepat</h2>
                        <a href="{{ route('services') }}"
                            class="text-sm font-semibold text-utama border-2 border-utama py-3 px-3 rounded-2xl hover:bg-utama hover:text-font2 hover:shadow-xl transition duration-300 ease-in-out">Go
                            Services</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
    <!-- Services Section Start -->
    <section class="bg-white -my-52 sm:-my-52 xl:my-10">
        <div class="flex max-h-fit items-center justify-center bg-white">
            <h1 class="absolute mb-96 text-3xl text-black font-bold text-center hidden lg:flex">Layanan Service</h1>
            <div class="mt-24 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
                <div class="group relative items-center justify-center overflow-hidden rounded-xl">
                    <div class="h-96 w-72">
                        <img class="h-full w-full object-cover group-hover:rotate-3 group-hover:scale-125 transition-transform duration-500"
                            src="young-male-psysician-with-patient-measuring-blood-pressure.jpg" alt="gambar1">
                    </div>
                    <div
                        class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:form-black/70 group-hover:via-black/60 group-hover:to-black/70">
                    </div>
                    <div
                        class="absolute inset-0 flex flex-col items-center justify-center mb-0 px-9 text-center translate-y-[61%] hover:translate-y-0 transition-all duration-500">
                        <h1 class="text-xl font-bold text-white">SUSPEK AFP</h1>
                        <p
                            class="text-lg italic text-white mb-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            Setiap kasus lumpuh layuh (flaccid paralysis), mendadak (acute), bukan disebabkan oleh ruda
                            paksa/trauma pada anak < 15 tahun. </p>
                                <a href="{{ route('createafp') }}"
                                    class="rounded-full shadow shadow-black/60 border-2 border-utama py-2 px-3.5 text-sm capitalize text-utama hover:bg-utama hover:text-white">
                                    See More
                                </a>
                    </div>
                </div>
                <div class="group relative items-center justify-center overflow-hidden rounded-xl">
                    <div class="h-96 w-72">
                        <img class="h-full w-full object-cover group-hover:rotate-3 group-hover:scale-125 transition-transform duration-500"
                            src="close-up-doctor-taking-notes.jpg" alt="gambar2">
                    </div>
                    <div
                        class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:form-black/70 group-hover:via-black/60 group-hover:to-black/70">
                    </div>
                    <div
                        class="absolute inset-0 flex flex-col items-center justify-center mb-10 px-9 text-center translate-y-[61%] hover:translate-y-0 transition-all duration-500">
                        <h1 class="text-xl font-bold text-white">SUSPEK CAMPAK</h1>
                        <p
                            class="text-lg italic text-white mb-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            Setiap kasus pada semua usia dengan gejala demam dan ruam makulopapular</p>
                        <a href="{{ route('createcampak') }}"
                            class="rounded-full shadow shadow-black/60 border-2 border-utama py-2 px-3.5 text-sm capitalize text-utama hover:bg-utama hover:text-white">
                            See More
                        </a>
                    </div>
                </div>
                <div class="group relative items-center justify-center overflow-hidden rounded-xl">
                    <div class="h-96 w-72">
                        <img class="h-full w-full object-cover group-hover:rotate-3 group-hover:scale-125 transition-transform duration-500"
                            src="doctor-vaccinating-patient-clinic.jpg" alt="gambar3">
                    </div>
                    <div
                        class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:form-black/70 group-hover:via-black/60 group-hover:to-black/70">
                    </div>
                    <div
                        class="absolute inset-0 flex flex-col items-center justify-center px-9 text-center translate-y-[61%] hover:translate-y-0 transition-all duration-500">
                        <h1 class="text-xl font-bold text-white">SUSPEK DIFTERI</h1>
                        <p
                            class="text-sm italic text-white mb-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            Setiap kasus dengan gejala faringitis, tonsilitis, laringitis, trakeitis, atau kombinasinya
                            disertai demam atau tanpa demam dan adanya pseudomembran putih keabuabuan yang sulit lepas,
                            mudah berdarah apa bila dilepas atau dilakukan manipulasi.</p>
                        <a href="{{ route('createdifteri') }}"
                            class="rounded-full shadow shadow-black/60 border-2 border-utama py-2 px-3.5 text-sm capitalize text-utama hover:bg-utama hover:text-white">
                            See More
                        </a>
                    </div>
                </div>
                <div class="group relative items-center justify-center overflow-hidden rounded-xl">
                    <div class="h-96 w-72">
                        <img class="h-full w-full object-cover group-hover:rotate-3 group-hover:scale-125 transition-transform duration-500"
                            src="beautiful-young-woman-having-severe-stomach-ache-visiting-doctor-treatment.jpg"
                            alt="gambar4">
                    </div>
                    <div
                        class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:form-black/70 group-hover:via-black/60 group-hover:to-black/70">
                    </div>
                    <div
                        class="absolute inset-0 flex flex-col items-center justify-center px-9 text-center translate-y-[61%] hover:translate-y-0 transition-all duration-500">
                        <h1 class="text-xl font-bold text-white">KERACUNAN MAKANAN</h1>
                        <p
                            class="text-base italic text-white mb-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            suatu kejadian dimana terdapat dua orang atau lebih yang menderita sakit dengan gejala yang
                            sama atau hampir sama setelah mengonsumsi pangan.</p>
                        <a href="{{ route('createracun') }}"
                            class="rounded-full shadow shadow-black/60 border-2 border-utama py-2 px-3.5 text-sm capitalize text-utama hover:bg-utama hover:text-white">
                            See More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->
    <!-- Footer Section Start-->
    <footer class="bg-white pt-52 xl:-mt-20">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <a href="" class="flex items-center">
                        <img src="logo.png" class="h-8 mr-3" alt="FlowBite Logo">
                    </a>
                </div>
                <div class="grid grid-cols-2 gap-2 sm:gap-4 sm:grid-cols-3">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-black uppercase">Resources</h2>
                        <ul class="text-black font-medium">
                            <li class="mb-4">
                                <a href="" class="hover:text-utama">Services</a>
                            </li>
                            <li class="mb-4">
                                <a href="" class="hover:text-utama">Status</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-black uppercase">Follow us</h2>
                        <ul class="text-black font-medium">
                            <li class="mb-4">
                                <a href="https://www.dinkes.semarangkota.go.id" class="hover:text-utama">Dinkes Kota
                                    Semarang</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-black uppercase">Download</h2>
                        <ul class="text-black font-medium">
                            <li class="mb-4">
                                <a href="{{route('tableupload')}}" class="hover:text-utama">Rekap Data GoaKreo</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-black sm:mx-auto lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-black sm:text-center">© 2024 <a href="https://flowbite.com/"
                        class="hover:underline">GoaKreo.</a>All Rights Reserved.
                </span>
            </div>
        </div>
    </footer>
    <!-- Footer Section End-->
</body>
@include('partial.footer')
</html>
