<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Lanjutan Suspek AFP</title>
    @include('partial.head')
</head>

<body>
    <nav class="w-full bg-white border-gray-200 mt-0">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/" class="flex items-center">
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

    @if (session('massage'))
        <div class="flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800"
            role="alert">
            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Info</span>
            <div>
                <span class="font-medium">Success!</span> {{ session('massage') }}
            </div>
        </div>
    @endif
    <h1 class="mt-8 text-2xl font-bold text-center">FORMULIR KELANJUTAN SUSPEK AFP</h1>
    <form class="px-2 mb-8 max-w-3xl mx-auto space-y-6" action="{{route('storedataadvance')}}" method="POST">
        @csrf
        <div class="grid mt-8 gap-6 md:grid-cols-2">
            <div>
                <label for="id" class="block text-sm font-medium text-gray-900">No Id</label>
                <p class="block mb-2 text-sm font-light text-utama"> 'Nomer 'id' wajib diisi sesuai id table.</p>
                <input type="text" name="id"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="" required>
            </div>
            <div>
                <label for="kunjungan" class="block mb-2 text-sm font-medium text-gray-900">Apakah kunjungan ulang
                    dilakukan?</label>
                <select name="kunjungan"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="" required>
                    <option value="">Pilih</option>
                    <option value="Iya">Iya</option>
                    <option value="Tidak">Tidak</option>
                </select>
            </div>
            <div>
                <label for="kasusditemukan" class="block mb-2 text-sm font-medium text-gray-900">Apakah kasus dapat
                    ditemukan?</label>
                <select name="kasusditemukan"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="" required>
                    <option value="">Pilih</option>
                    <option value="Iya">Iya</option>
                    <option value="Tidak">Tidak</option>
                </select>
            </div>
            <div>
                <label for="apakah" class="block mb-2 text-sm font-medium text-gray-900">Apakah masih ada paralisis
                    redusial?</label>
                <select name="apakah"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="">
                    <option value="">Pilih</option>
                    <option value="Iya">Iya</option>
                    <option value="Tidak">Tidak</option>
                </select>
            </div>
            <div>
                <label for="bilaya" class="block text-sm font-medium text-gray-900">Bila ya, apakah sifatnya layuh
                    (flaccid)?</label>
                <select name="bilaya"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="">
                    <option value="">Pilih</option>
                    <option value="Iya">Iya</option>
                    <option value="Tidak">Tidak</option>
                </select>
            </div>
        </div>
        <div>
            <label for="" class=" text-sm font-medium text-gray-900">Lokasi kelumpuhan dan gangguan rasa raba
                (isi jika masih ada paralisis redusial):</label>
            <br>
            <label for="tungkai_kanan" class="pr-9 text-sm font-medium text-gray-900">Tungkai Kanan</label>
            <input type="radio" name="tungkai_kanan" value="Iya"> Iya
            <input type="radio" name="tungkai_kanan" value="Tidak"> Tidak
            <br>
            <label for="tungkai_kiri" class="pr-14 text-sm font-medium text-gray-900">Tungkai kiri</label>
            <input type="radio" name="tungkai_kiri" value="Iya"> Iya
            <input type="radio" name="tungkai_kiri" value="Tidak"> Tidak
            <br>
            <label for="lengan_kanan" class="pr-9  text-sm font-medium text-gray-900">Lengan Kanan</label>
            <input type="radio" name="lengan_kanan" value="Iya"> Iya
            <input type="radio" name="lengan_kanan" value="Tidak"> Tidak
            <br>
            <label for="legan_kiri" class="pr-14 text-sm font-medium text-gray-900">Lengan Kiri</label>
            <input type="radio" name="lengan_kiri" value="Iya"> Iya
            <input type="radio" name="lengan_kiri" value="Tidak"> Tidak

            <label for="lainya" class="block mb-2 text-sm font-medium text-gray-900">Lainnya</label>
            <input type="text" name="lainnya"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                placeholder="">
        </div>
        <button
            class="text-sm font-semibold text-utama border-2 border-utama mt-6 py-3 px-40 rounded-2xl hover:bg-utama hover:text-font2 hover:shadow-xl transition duration-300 ease-in-out"
            type="submit" id="submit">submit</button>
    </form>
</body>
@include('partial.footer')
</html>
