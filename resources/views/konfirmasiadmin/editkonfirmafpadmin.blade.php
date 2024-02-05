<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Konfirmasi Suspek AFP</title>
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
    <h1 class="mt-8 text-2xl font-bold text-center">FORMULIR KONFIRMASI SUSPEK AFP</h1>
    <form class="px-2 mb-8 max-w-3xl mx-auto space-y-6" action="/konfirmasiadmin/{{ $konfirmasiafp->id }}/updateafp"
        method="POST">
        @method('put')
        @csrf
        <div class="grid mt-8 gap-6 mb-14 md:grid-cols-2">
            <div>
                <label for="puskesmas" class="block mb-2 text-sm font-medium text-gray-900">PUSKESMAS</label>
                <select name="puskesmas"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option value="">Pilih Puskesmas</option>
                    <option value="BANDAHARJO" @if ($konfirmasiafp->puskesmas == 'BANDAHARJO') selected @endif>BANDAHARJO</option>

                    <option value="BANGETAYU" @if ($konfirmasiafp->puskesmas == 'BANGETAYU') selected @endif>BANGETAYU</option>

                    <option value="BUGANGAN" @if ($konfirmasiafp->puskesmas == 'BUGANGAN') selected @endif>BUGANGAN</option>

                    <option value="BULU LOR" @if ($konfirmasiafp->puskesmas == 'BULU LOR') selected @endif>BULU LOR</option>

                    <option value="CANDILAMA" @if ($konfirmasiafp->puskesmas == 'CANDILAMA') selected @endif>CANDILAMA</option>

                    <option value="GAYAMSARI" @if ($konfirmasiafp->puskesmas == 'GAYAMSARI') selected @endif>GAYAMSARI</option>

                    <option value="GENUK" @if ($konfirmasiafp->puskesmas == 'GENUK') selected @endif>GENUK</option>

                    <option value="GUNUNGPATI" @if ($konfirmasiafp->puskesmas == 'GUNUNGPATI') selected @endif>GUNUNGPATI</option>

                    <option value="HALMAHERA" @if ($konfirmasiafp->puskesmas == 'HALMAHERA') selected @endif>HALMAHERA</option>

                    <option value="KAGOK" @if ($konfirmasiafp->puskesmas == 'KAGOK') selected @endif>KAGOK</option>

                    <option value="KARANG ANYAR" @if ($konfirmasiafp->puskesmas == 'KARANG ANYAR') selected @endif>KARANG ANYAR
                    </option>

                    <option value="KARANG AYU" @if ($konfirmasiafp->puskesmas == 'KARANG AYU') selected @endif>KARANG AYU</option>

                    <option value="KARANG DORO" @if ($konfirmasiafp->puskesmas == 'KARANG DORO') selected @endif>KARANG DORO</option>

                    <option value="KARANG MALANG" @if ($konfirmasiafp->puskesmas == 'KARANG MALANG') selected @endif>KARANG MALANG
                    </option>

                    <option value="KEDUNGMUNDU" @if ($konfirmasiafp->puskesmas == 'KEDUNGMUNDU') selected @endif>KEDUNGMUNDU</option>

                    <option value="KROBOKAN" @if ($konfirmasiafp->puskesmas == 'KROBOKAN') selected @endif>KROBOKAN</option>

                    <option value="LAMPER TENGAH" @if ($konfirmasiafp->puskesmas == 'LAMPER TENGAH') selected @endif>LAMPER TENGAH
                    </option>

                    <option value="LEBDOSARI" @if ($konfirmasiafp->puskesmas == 'LEBDOSARI') selected @endif>LEBDOSARI</option>

                    <option value="MANGKANG" @if ($konfirmasiafp->puskesmas == 'MANGKANG') selected @endif>MANGKANG</option>

                    <option value="MANYARAN" @if ($konfirmasiafp->puskesmas == 'MANYARAN') selected @endif>MANYARAN</option>

                    <option value="MIJEN" @if ($konfirmasiafp->puskesmas == 'MIJEN') selected @endif>MIJEN</option>

                    <option value="MIROTO" @if ($konfirmasiafp->puskesmas == 'MIROTO') selected @endif>MIROTO</option>

                    <option value="NGALIYAN" @if ($konfirmasiafp->puskesmas == 'NGELIYAN') selected @endif>NGALIYAN</option>

                    <option value="NGEMPLAK SIMONGAN" @if ($konfirmasiafp->puskesmas == 'NGEMPLAK SIMONGAN') selected @endif>NGEMPLAK
                        SIMONGAN</option>

                    <option value="NGESREP" @if ($konfirmasiafp->puskesmas == 'NGESREP') selected @endif>NGESREP</option>

                    <option value="PADANGSARI" @if ($konfirmasiafp->puskesmas == 'PADANGSARI') selected @endif>PADANGSARI</option>
                    <option value="PANDANARAN" @if ($konfirmasiafp->puskesmas == 'PANDANARAN') selected @endif>PANDANARAN</option>

                    <option value="PEGANDAN" @if ($konfirmasiafp->puskesmas == 'PEGANDAN') selected @endif>PEGANDAN</option>

                    <option value="PONCOL" @if ($konfirmasiafp->puskesmas == 'PONCOL') selected @endif>PONCOL</option>

                    <option value="PUDAK PAYUNG" @if ($konfirmasiafp->puskesmas == 'PUNDAK PAYUNG') selected @endif>PUDAK PAYUNG
                    </option>

                    <option value="PURWOYOSO" @if ($konfirmasiafp->puskesmas == 'PURWOYOSO') selected @endif>PURWOYOSO</option>

                    <option value="ROWOSARI" @if ($konfirmasiafp->puskesmas == 'PURWOSARI') selected @endif>ROWOSARI</option>

                    <option value="SEKARAN" @if ($konfirmasiafp->puskesmas == 'SEKARAN') selected @endif>SEKARAN</option>

                    <option value="SRONDOL" @if ($konfirmasiafp->puskesmas == 'SRONDOL') selected @endif>SRONDOL</option>

                    <option value="TAMBAKAJI" @if ($konfirmasiafp->puskesmas == 'TAMBAKAJI') selected @endif>TAMBAKAJI</option>

                    <option value="TLOGOSARI KULON" @if ($konfirmasiafp->puskesmas == 'TLOGOSARI KULON') selected @endif>TLOGOSARI KULON
                    </option>

                    <option value="TLOGOSARI WETAN" @if ($konfirmasiafp->puskesmas == 'TLOGOSARI WETAN') selected @endif>TLOGOSARI WETAN
                    </option>
                    <option value="PLAMONGANSARI" @if ($konfirmasiafp->puskesmas == 'PLAMONGANSARI') selected @endif>PLAMONGANSARI
                    </option>
                    <option value="RSUP Dr. KARIADI" @if ($konfirmasiafp->puskesmas == 'RSUP Dr. KARIADI') selected @endif>RSUP Dr.
                        KARIADI</option>
                    <option value="RSUD TUGUREJO" @if ($konfirmasiafp->puskesmas == 'RSUD TUGUREJO') selected @endif>RSUD TUGUREJO
                    </option>
                    <option value="RSUD K.R.M.T WONGSONEGORO" @if ($konfirmasiafp->puskesmas == 'RSUD K.R.M.T WONGSONEGORO') selected @endif>RSUD
                        K.R.M.T WONGSONEGORO</option>
                    <option value="RS TELOGOREJO SEMARANG" @if ($konfirmasiafp->puskesmas == 'RS TELOGOREJO SEMARANG') selected @endif>RS
                        TELOGOREJO SEMARANG</option>
                    <option value="RS. ST. ELISABETH SEMARANG" @if ($konfirmasiafp->puskesmas == 'RS. ST. ELISABETH SEMARANG') selected @endif>RS.
                        ST. ELISABETH SEMARANG</option>
                    <option value="RSI SULTAN AGUNG SEMARANG" @if ($konfirmasiafp->puskesmas == 'RSI SULTAN AGUNG SEMARANG') selected @endif>RSI
                        SULTAN AGUNG SEMARANG</option>
                    <option value="RS COLUMBIA ASIA SEMARANG" @if ($konfirmasiafp->puskesmas == 'RS COLUMBIA ASIA SEMARANG') selected @endif>RS
                        COLUMBIA ASIA SEMARANG</option>
                    <option value="RS ROEMANI MUHAMMADIYAH" @if ($konfirmasiafp->puskesmas == 'RS ROEMANI MUHAMMADIYAH') selected @endif>RS
                        ROEMANI MUHAMMADIYAH</option>
                    <option value="RS PANTI WILASA CITARUM" @if ($konfirmasiafp->puskesmas == 'RS PANTI WILASA CITARUM') selected @endif>RS PANTI
                        WILASA CITARUM</option>
                    <option value="RS PANTI WILASA DR. CIPTO" @if ($konfirmasiafp->puskesmas == 'RS PANTI WILASA DR. CIPTO') selected @endif>RS
                        PANTI WILASA DR. CIPTO</option>
                    <option value="RS BHAKTI  WIRA TAMTAMA" @if ($konfirmasiafp->puskesmas == 'RS BHAKTI  WIRA TAMTAMA') selected @endif>RS
                        BHAKTI WIRA TAMTAMA</option>
                    <option value="RS BHAYANGKARA SEMARANG" @if ($konfirmasiafp->puskesmas == 'RS BHAYANGKARA SEMARANG') selected @endif>RS
                        BHAYANGKARA SEMARANG</option>
                    <option value="RS HERMINA PANDANARAN" @if ($konfirmasiafp->puskesmas == 'RS HERMINA PANDANARAN') selected @endif>RS HERMINA
                        PANDANARAN</option>
                    <option value="RS HERMINA BANYUMANIK" @if ($konfirmasiafp->puskesmas == 'RS HERMINA BANYUMANIK') selected @endif>RS HERMINA
                        BANYUMANIK</option>
                    <option value="RS PERMATA MEDIKA" @if ($konfirmasiafp->puskesmas == 'RS PERMATA MEDIKA') selected @endif>RS PERMATA
                        MEDIKA</option>
                    <option value="RS NASIONAL DIPONEGORO" @if ($konfirmasiafp->puskesmas == 'RS NASIONAL DIPONEGORO') selected @endif>RS
                        NASIONAL DIPONEGORO</option>
                    <option value="RSU  WILLIAM BOOTH" @if ($konfirmasiafp->puskesmas == 'RSU  WILLIAM BOOTH') selected @endif>RSU WILLIAM
                        BOOTH</option>
                    <option value="RS BANYUMANIK" @if ($konfirmasiafp->puskesmas == 'RS BANYUMANIK') selected @endif>RS BANYUMANIK
                    </option>
                    <option value="RSU  BHAYANGKARA AKPOL" @if ($konfirmasiafp->puskesmas == 'RSU  BHAYANGKARA AKPOL') selected @endif>RSU
                        BHAYANGKARA AKPOL</option>
                    <option value="RS SILOAM SEMARANG" @if ($konfirmasiafp->puskesmas == 'RS SILOAM SEMARANG') selected @endif>RS SILOAM
                        SEMARANG</option>
                    <option value="RSJD Dr. AMINO GONDOHUTOMO" @if ($konfirmasiafp->puskesmas == 'RSJD Dr. AMINO GONDOHUTOMO') selected @endif>RSJD
                        Dr. AMINO GONDOHUTOMO</option>
                    <option value="RSIA PLAMONGAN INDAH" @if ($konfirmasiafp->puskesmas == 'RSIA PLAMONGAN INDAH') selected @endif>RSIA
                        PLAMONGAN INDAH</option>
                    <option value="RSIA GUNUNG SAWO" @if ($konfirmasiafp->puskesmas == 'RSIA GUNUNG SAWO') selected @endif>RSIA GUNUNG
                        SAWO</option>
                    <option value="RSIA KUSUMA PRADJA" @if ($konfirmasiafp->puskesmas == 'RSIA KUSUMA PRADJA') selected @endif>RSIA KUSUMA
                        PRADJA</option>
                    <option value="RSIA BUNDA" @if ($konfirmasiafp->puskesmas == 'RSIA BUNDA') selected @endif>RSIA BUNDA</option>
                    <option value="RSIA ANANDA PASAR ACE" @if ($konfirmasiafp->puskesmas == 'RSIA ANANDA PASAR ACE') selected @endif>RSIA
                        ANANDA PASAR ACE</option>
                    <option value="RSIA ANUGERAH" @if ($konfirmasiafp->puskesmas == 'RSIA ANUGERAH') selected @endif>RSIA ANUGERAH
                    </option>
                    <option value="PLAMRSIA ANUGERAHONGAN" @if ($konfirmasiafp->puskesmas == 'RSI GIGI DAN MULUT SULTAN AGUNG') selected @endif>PLARSIA
                        ANUGERAHMONGAN</option>
                    <option value="RSI GIGI DAN MULUT SULTAN AGUNG" @if ($konfirmasiafp->puskesmas == 'RS GIGI DAN MULUT UNIMUS') selected @endif>
                        RSI GIGI DAN MULUT SULTAN AGUNG</option>
                    <option value="RS GIGI DAN MULUT UNIMUS" @if ($konfirmasiafp->puskesmas == 'RS MATA JEC CANDI SEMARANG') selected @endif>RS GIGI
                        DAN MULUT UNIMUS</option>
                    <option value="RS MATA JEC CANDI SEMARANG" @if ($konfirmasiafp->puskesmas == 'RS BANYUMANIK 2') selected @endif>RS
                        MATA JEC CANDI SEMARANG</option>
                    <option value="RS BANYUMANIK 2" @if ($konfirmasiafp->puskesmas == 'RS PANTI WILASA DR. CIPTO') selected @endif>RS BANYUMANIK 2
                    </option>
                    <option value="RS KELUARGA SEHAT III SEMARANG" @if ($konfirmasiafp->puskesmas == 'RS KELUARGA SEHAT III SEMARANG') selected @endif>
                        RS KELUARGA SEHAT III SEMARANG</option>
                </select>
            </div>
            <div>
                <label for="tanggalterimadkk" class="block mb-2 text-sm font-medium text-gray-900">TANGGAL TERIMA
                    DKK</label>
                <div class="relative max-w-sm">
                    <input type="date" name="tanggalterimadkk"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 "
                        value="{{ $konfirmasiafp->tanggalterimadkk }}">
                </div>
            </div>
            <div>
                <label for="noepid" class="block mb-2 text-sm font-medium text-gray-900"">NOMOR EPID</label>
                <input type="noepid" name="noepid"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    value="{{ $konfirmasiafp->noepid }}">
            </div>
            <div>
                <label for="status" class="block mb-2 text-sm font-medium text-gray-900">STATUS</label>
                <select name="status"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="">
                    <option value="">Pilih Status</option>
                    <option value="Proses Pemeriksaan" @if ($konfirmasiafp->status == 'Proses Pemeriksaan') selected @endif>Proses
                        Pemeriksaan</option>
                    <option value="Keluar Hasil" @if ($konfirmasiafp->status == 'Keluar Hasil') selected @endif>Keluar Hasil
                    </option>
                </select>
            </div>
            <div>
                <label for="sempel1" class="block mb-2 text-sm font-medium text-gray-900">SEMPEL 1</label>
                <select name="sempel1"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="">
                    <option value="">Pilih Status</option>
                    <option value="Negatif" @if ($konfirmasiafp->sempel1 == 'Negatif') selected @endif>Negatif</option>
                    <option value="Positif" @if ($konfirmasiafp->sempel1 == 'Positif') selected @endif>Positif</option>
                </select>
            </div>
            <div>
                <label for="sempel2" class="block mb-2 text-sm font-medium text-gray-900">SEMPEL 2</label>
                <select name="sempel2"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="">
                    <option value="">Pilih Status</option>
                    <option value="Negatif" @if ($konfirmasiafp->sempel2 == 'Negatif') selected @endif>Negatif</option>
                    <option value="Positif" @if ($konfirmasiafp->sempel2 == 'Positif') selected @endif>Positif</option>
                </select>
            </div>
            <div>
                <label for="adikuat" class="block mb-2 text-sm font-medium text-gray-900">Adikuat</label>
                <select name="adikuat"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="">
                    <option value="">Pilih</option>
                    <option value="Iya" @if ($konfirmasiafp->adikuat == 'Iya') selected @endif>Iya</option>
                    <option value="Tidak" @if ($konfirmasiafp->adikuat == 'Tidak') selected @endif>Tidak</option>
                </select>
            </div>
            <div>
                <label for="tanggalhasilkeluar" class="block mb-2 text-sm font-medium text-gray-900">TANGGAL HASIL
                    KELUAR</label>
                <div class="relative max-w-sm">
                    <input type="date" name="tanggalhasilkeluar"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 "
                        placeholder="Select date" value="{{ $konfirmasiafp->tanggalhasilkeluar }}">
                </div>
            </div>
            <div>
                <label for="dasarsurat" class="block mb-2 text-sm font-medium text-gray-900">DASAR SURAT</label>
                <input type="text" name="dasarsurat"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    value="{{ $konfirmasiafp->dasarsurat }}">
            </div>
            <div>
                <label for="rtl" class="block mb-2 text-sm font-medium text-gray-900">RTL</label>
                <input type="text" name="rtl"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    value="{{ $konfirmasiafp->dasarsurat }}">
            </div>
        </div>
        <button
            class="text-sm font-semibold text-utama border-2 border-utama mt-6 py-3 px-40 rounded-2xl hover:bg-utama hover:text-font2 hover:shadow-xl transition duration-300 ease-in-out"
            type="submit" id="submit">submit</button>
    </form>
</body>
@include('partial.footer')
</html>
