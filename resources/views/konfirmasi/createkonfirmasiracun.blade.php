<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Konfirmasi Suspek Keracunan Makanan</title>
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
                        <a href="{{ route('admin') }}" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-utama md:p-0">Dashboard</a>
                    </li>
                    <li>
                        <a href="{{ route('tablesuspekafp') }}" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-utama md:p-0">Table</a>
                    </li>
                    <li>
                        <a href="{{route('joinadminafp')}}" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-utama md:p-0">Status</a>
                    </li>
                    <li>
                        <a href="{{route('logout')}}" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-utama md:p-0">Logout</a>
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
    <h1 class="mt-8 text-2xl font-bold text-center">FORMULIR KONFIRMASI KERACUNAN MAKANAN</h1>
    <form class="px-2 mb-8 max-w-3xl mx-auto space-y-6" action="{{route('storekonfirmasiracun')}}" method="POST">
        @csrf
        <div class="grid mt-8 gap-6 mb-14 md:grid-cols-2">
            <div>
                <label for="id" class="block text-sm font-medium text-gray-900">No Id</label>
                <p class="block mb-2 text-sm font-light text-utama"> 'Nomer 'id' wajib diisi sesuai id table.</p>
                <input type="integer" name="id"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="" required>
            </div>
            <div>
                <label for="puskesmas" class="block mb-2 text-sm font-medium text-gray-900">PUSKESMAS</label>
                <select name="puskesmas"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="">
                    <option value="">Pilih Puskesmas</option>
                    <option value="BANDAHARJO">BANDAHARJO</option>
                    <option value="BANGETAYU">BANGETAYU</option>
                    <option value="BUGANGAN">BUGANGAN</option>
                    <option value="BULU LOR">BULU LOR</option>
                    <option value="CANDILAMA">CANDILAMA</option>
                    <option value="GAYAMSARI">GAYAMSARI</option>
                    <option value="GENUK">GENUK</option>
                    <option value="GUNUNGPATI">GUNUNGPATI</option>
                    <option value="HALMAHERA">HALMAHERA</option>
                    <option value="KAGOK">KAGOK</option>
                    <option value="KARANG ANYAR">KARANG ANYAR</option>
                    <option value="KARANG AYU">KARANG AYU</option>
                    <option value="KARANG DORO">KARANG DORO</option>
                    <option value="KARANG MALANG">KARANG MALANG</option>
                    <option value="KEDUNGMUNDU">KEDUNGMUNDU</option>
                    <option value="KROBOKAN">KROBOKAN</option>
                    <option value="LAMPER TENGAH">LAMPER TENGAH</option>
                    <option value="LEBDOSARI">LEBDOSARI</option>
                    <option value="MANGKANG">MANGKANG</option>
                    <option value="MANYARAN">MANYARAN</option>
                    <option value="MIJEN">MIJEN</option>
                    <option value="MIROTO">MIROTO</option>
                    <option value="NGALIYAN">NGALIYAN</option>
                    <option value="NGEMPLAK SIMONGAN">NGEMPLAK SIMONGAN</option>
                    <option value="NGESREP">NGESREP</option>
                    <option value="PADANGSARI">PADANGSARI</option>
                    <option value="PANDANARAN">PANDANARAN</option>
                    <option value="PEGANDAN">PEGANDAN</option>
                    <option value="PONCOL">PONCOL</option>
                    <option value="PUDAK PAYUNG">PUDAK PAYUNG</option>
                    <option value="PURWOYOSO">PURWOYOSO</option>
                    <option value="ROWOSARI">ROWOSARI</option>
                    <option value="SEKARAN">SEKARAN</option>
                    <option value="SRONDOL">SRONDOL</option>
                    <option value="TAMBAKAJI">TAMBAKAJI</option>
                    <option value="TLOGOSARI KULON">TLOGOSARI KULON</option>
                    <option value="TLOGOSARI WETAN">TLOGOSARI WETAN</option>
                    <option value="PLAMONGANSARI">PLAMONGANSARI</option>
                    <option value="RSUP Dr. KARIADI">RSUP Dr. KARIADI</option>
                    <option value="RSUD TUGUREJO">RSUD TUGUREJO</option>
                    <option value="RSUD K.R.M.T WONGSONEGORO">RSUD K.R.M.T WONGSONEGORO</option>
                    <option value="RS TELOGOREJO SEMARANG">RS TELOGOREJO SEMARANG</option>
                    <option value="RS. ST. ELISABETH SEMARANG">RS. ST. ELISABETH SEMARANG</option>
                    <option value="RSI SULTAN AGUNG SEMARANG">RSI SULTAN AGUNG SEMARANG</option>
                    <option value="RS COLUMBIA ASIA SEMARANG">RS COLUMBIA ASIA SEMARANG</option>
                    <option value="RS ROEMANI MUHAMMADIYAH">RS ROEMANI MUHAMMADIYAH</option>
                    <option value="RS PANTI WILASA CITARUM">RS PANTI WILASA CITARUM</option>
                    <option value="RS PANTI WILASA DR. CIPTO">RS PANTI WILASA DR. CIPTO</option>
                    <option value="RS BHAKTI  WIRA TAMTAMA">RS BHAKTI WIRA TAMTAMA</option>
                    <option value="RS BHAYANGKARA SEMARANG">RS BHAYANGKARA SEMARANG</option>
                    <option value="RS HERMINA PANDANARAN">RS HERMINA PANDANARAN</option>
                    <option value="RS HERMINA BANYUMANIK">RS HERMINA BANYUMANIK</option>
                    <option value="RS PERMATA MEDIKA">RS PERMATA MEDIKA</option>
                    <option value="RS NASIONAL DIPONEGORO">RS NASIONAL DIPONEGORO</option>
                    <option value="RSU  WILLIAM BOOTH">RSU WILLIAM BOOTH</option>
                    <option value="RS BANYUMANIK">RS BANYUMANIK</option>
                    <option value="RSU  BHAYANGKARA AKPOL">RSU BHAYANGKARA AKPOL</option>
                    <option value="RS SILOAM SEMARANG">RS SILOAM SEMARANG</option>
                    <option value="RSJD Dr. AMINO GONDOHUTOMO">RSJD Dr. AMINO GONDOHUTOMO</option>
                    <option value="RSIA PLAMONGAN INDAH">RSIA PLAMONGAN INDAH</option>
                    <option value="RSIA GUNUNG SAWO">RSIA GUNUNG SAWO</option>
                    <option value="RSIA KUSUMA PRADJA">RSIA KUSUMA PRADJA</option>
                    <option value="RSIA BUNDA">RSIA BUNDA</option>
                    <option value="RSIA ANANDA PASAR ACE">RSIA ANANDA PASAR ACE</option>
                    <option value="RSIA ANUGERAH">RSIA ANUGERAH</option>
                    <option value="PLAMRSIA ANUGERAHONGAN">PLARSIA ANUGERAHMONGAN</option>
                    <option value="RSI GIGI DAN MULUT SULTAN AGUNG">RSI GIGI DAN MULUT SULTAN AGUNG</option>
                    <option value="RS GIGI DAN MULUT UNIMUS">RS GIGI DAN MULUT UNIMUS</option>
                    <option value="RS MATA JEC CANDI SEMARANG">RS MATA JEC CANDI SEMARANG</option>
                    <option value="RS BANYUMANIK 2">RS BANYUMANIK 2</option>
                    <option value="RS KELUARGA SEHAT III SEMARANG">RS KELUARGA SEHAT III SEMARANG</option>
                </select>
            </div>
            <div>
                <label for="sempelditerimadkk" class="block mb-2 text-sm font-medium text-gray-900">TANGGAL TERIMA
                    DKK</label>
                <div class="relative max-w-sm">
                    <input type="date" name="sempelditerimadkk"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 "
                        placeholder="Select date">
                </div>
            </div>
            <div>
                <label for="status" class="block mb-2 text-sm font-medium text-gray-900">STATUS</label>
                <select name="status"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="">
                    <option value="">Pilih Status</option>
                    <option value="Proses Pemeriksaan">Proses Pemeriksaan</option>
                    <option value="Keluar Hasil">Keluar Hasil</option>
                </select>
            </div>
            <div>
                <label for="hasilsempel" class="block mb-2 text-sm font-medium text-gray-900">HASIL SEMPEL 1</label>
                <input type="text" name="hasilsempel"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="">
            </div>
            <div>
                <label for="tanggalkeluarhasil" class="block mb-2 text-sm font-medium text-gray-900">TANGGAL HASIL
                    KELUAR</label>
                <div class="relative max-w-sm">
                    <input type="date" name="tanggalkeluarhasil"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 "
                        placeholder="Select date">
                </div>
            </div>
            <div>
                <label for="dasarsurat" class="block mb-2 text-sm font-medium text-gray-900">DASAR SURAT</label>
                <input type="text" name="dasarsurat"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="">
            </div>
        </div>
        <button
            class="text-sm font-semibold text-utama border-2 border-utama mt-6 py-3 px-40 rounded-2xl hover:bg-utama hover:text-font2 hover:shadow-xl transition duration-300 ease-in-out"
            type="submit" id="submit">submit</button>
    </form>
</body>
@include('partial.footer')
</html>
