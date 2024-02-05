<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Services Goakreo</title>
    @include('partial.head')
</head>

<body>
    <!-- Header Start -->
    <header>
        <nav class="w-full bg-white border-gray-200 mt-0">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="" class="flex items-center">
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
                                class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-utama md:p-0">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('services') }}"
                                class="block py-2 pl-3 pr-4 text-utama rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-utama md:p-0">Services</a>
                        </li>
                        <li>
                            <a href="{{ route('joinafp') }}"
                                class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-utama md:p-0">Status</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Header End -->
    <!-- Services Section Start -->
    <section class="bg-white mb-4">
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
</body>
@include('partial.footer')
</html>
