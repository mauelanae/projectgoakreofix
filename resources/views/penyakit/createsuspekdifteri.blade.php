<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Suspek Difteri</title>
    @include('partial.head')
</head>

<body>
    <header>
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
    </header>

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
    <h1 class="mt-8 text-2xl font-bold text-center">FORMULIR SUSPEK DIFTERI</h1>
    <form class="px-2 mb-8 max-w-3xl mx-auto space-y-6" action="{{route('storedifteri')}}" method="POST">
        @csrf
        <div class="grid mt-8 gap-6 mb-14 md:grid-cols-2">
            <div>
                <label for="puskesmas" class="block mb-2 text-sm font-medium text-gray-900">PUSKESMAS</label>
                <select name="puskesmas"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="" required>
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
                    <option value="PLAMONGAN">PLAMONGAN</option>
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
                <label for="namakasus" class="block mb-2 text-sm font-medium text-gray-900">NAMA KASUS / KONTAK
                    ERAT</label>
                <input type="text" name="namakasus"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="" required>
            </div>
            <div>
                <label for="nik" class="block mb-2 text-sm font-medium text-gray-900">NIK</label>
                <input type="text" name="nik"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="" required>
            </div>
            <div>
                <label for="statussempel" class="block mb-2 text-sm font-medium text-gray-900">STATUS SEMPEL</label>
                <select name="statussempel"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="" required>
                    <option value="">Pilih Status Sampel</option>
                    <option value="INDEKS KASUS">INDEKS KASUS</option>
                    <option value="KONTAK ERAT SERUMAH">KONTAK ERAT SERUMAH</option>
                    <option value="KONTAK ERAT LINGKUNGAN">KONTAK ERAT LINGKUNGAN</option>
                    <option value="KONTAK ERAT SEKOLAH">KONTAK ERAT SEKOLAH</option>
                    <option value="KONTAK ERAT KERJA">KONTAK ERAT KERJA</option>
                    <option value="KONTAK ERAT LINGKUNGAN BERMAIN">KONTAK ERAT LINGKUNGAN BERMAIN</option>
                </select>
            </div>
            <div>
                <label for="jeniskelamin" class="block mb-2 text-sm font-medium text-gray-900">JENIS KELAMIN</label>
                <select name="jeniskelamin"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="" required>
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="Laki-laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div>
                <label for="tanggallahir" class="block mb-2 text-sm font-medium text-gray-900">TANGGAL LAHIR</label>
                <div class="relative max-w-sm">
                    <input type="date" name="tanggallahir"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 "
                        placeholder="Select date" required>
                </div>
            </div>
            <div>
                <label for="namasekolah_kerja" class="block mb-2 text-sm font-medium text-gray-900">NAMA SEKOLAH /
                    TEMPAT KERJA</label>
                <input type="text" name="namasekolah_kerja"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="" required>
            </div>
            <div>
                <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900">ALAMAT</label>
                <input type="text" name="alamat"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="" required>
            </div>
            <div>
                <label for="kelurahan" class="block mb-2 text-sm font-medium text-gray-900">KELURAHAN</label>
                <select name="kelurahan"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="" required>
                    <option value="">Pilih Kelurahan</option>
                    <option value="BAMBANKEREP">BAMBANKEREP</option>
                    <option value="BANDARHARJO">BANDARHARJO</option>
                    <option value="BANGETAYU KULON">BANGETAYU KULON</option>
                    <option value="BANGETAYU WETAN">BANGETAYU WETAN</option>
                    <option value="BANGUNHARJO">BANGUNHARJO</option>
                    <option value="BANJARDOWO">BANJARDOWO</option>
                    <option value="BANYUMANIK">BANYUMANIK</option>
                    <option value="BARUSARI">BARUSARI</option>
                    <option value="BENDAN DUWUR">BENDAN DUWUR</option>
                    <option value="BENDAN NGISOR">BENDAN NGISOR</option>
                    <option value="BENDUNGAN">BENDUNGAN</option>
                    <option value="BOJONG SALAMAN">BOJONG SALAMAN</option>
                    <option value="BONGSARI">BONGSARI</option>
                    <option value="BRINGIN">BRINGIN</option>
                    <option value="BRUMBUNGAN">BRUMBUNGAN</option>
                    <option value="BUBAKAN">BUBAKAN</option>
                    <option value="BUGANGAN">BUGANGAN</option>
                    <option value="BULU LOR">BULU LOR</option>
                    <option value="BULUSAN">BULUSAN</option>
                    <option value="BULUSTALAN">BULUSTALAN</option>
                    <option value="CABEAN">CABEAN</option>
                    <option value="CANDI">CANDI</option>
                    <option value="CANGKRIAN">CANGKRIAN</option>
                    <option value="CEPOKO">CEPOKO</option>
                    <option value="DADAPSARI">DADAPSARI</option>
                    <option value="GABAHAN">GABAHAN</option>
                    <option value="GABANGSARI">GABANGSARI</option>
                    <option value="GAJAHMUNGKUR">GAJAHMUNGKUR</option>
                    <option value="GAYAMSARI">GAYAMSARI</option>
                    <option value="GEDAWANG">GEDAWANG</option>
                    <option value="GEMAH">GEMAH</option>
                    <option value="GENUKSARI">GENUKSARI</option>
                    <option value="GISIKDRONO">GISIKDRONO</option>
                    <option value="GONDORIYO">GONDORIYO</option>
                    <option value="GUNUNGPATI">GUNUNGPATI</option>
                    <option value="JABUNGAN">JABUNGAN</option>
                    <option value="JAGALAN">JAGALAN</option>

                    <option value="JANGLI">JANGLI</option>
                    <option value="JATIBARANG">JATIBARANG</option>
                    <option value="JATINGALEH">JATINGALEH</option>
                    <option value="JATIREJO">ATIREJO</option>
                    <option value="JATISARI">JATISARI</option>
                    <option value="JOMBLANG">JOMBLANG</option>
                    <option value="JRAKAH">JRAKAH</option>
                    <option value="KALIBANTENG KIDUL">KALIBANTENG KIDUL</option>
                    <option value="KALIBANTENG KULON">KALIBANTENG KULON</option>
                    <option value="KALICARI">KALICARI</option>
                    <option value="BENDUNGAN">BENDUNGAN</option>
                    <option value="KALIGAWE">KALIGAWE</option>
                    <option value="KALIPANCUR">KALIPANCUR</option>
                    <option value="KALISEGORO">KALISEGORO</option>
                    <option value="KALIWIRU">KALIWIRU</option>
                    <option value="KANDRI">KANDRI</option>
                    <option value="KARANG KIDUL">KARANG KIDUL</option>
                    <option value="KARANGANAR">KARANGANAR</option>
                    <option value="KARANGANYAR GUNUNG">KARANGANYAR GUNUNG</option>
                    <option value="KARANGAYU">KARANGAYU</option>
                    <option value="KARANGMALANG">KARANGMALANG</option>
                    <option value="KARANGREJO">KARANGREJO</option>
                    <option value="KARANGROTO">KARANGROTO</option>
                    <option value="KARANGTEMPEL">KARANGTEMPEL</option>
                    <option value="KARANGTURI">KARANGTURI</option>
                    <option value="KAUMAN">KAUMAN</option>
                    <option value="KEBONAGUNG">KEBONAGUNG</option>
                    <option value="KEDUNGMUNDU">KEDUNGMUNDU</option>
                    <option value="KEDUNGPANE">KEDUNGPANE</option>
                    <option value="KEMBANGARUM">KEMBANGARUM</option>
                    <option value="KEMBANGSARI">KEMBANGSARI</option>
                    <option value="KEMIJEN">KEMIJEN</option>
                    <option value="KRAMAS">KRAMAS</option>
                    <option value="KRANGGAN">KRANGGAN</option>
                    <option value="KRAPYAK">KRAPYAK</option>
                    <option value="KROBOKAN">KROBOKAN</option>
                    <option value="KUDU">KUDU</option>

                    <option value="KUNINGAN">KUNINGAN</option>
                    <option value="LAMPER KIDUL">LAMPER KIDUL</option>
                    <option value="LAMPER LOR">LAMPER LOR</option>
                    <option value="LAMPER TENGAH">LAMPER TENGAH</option>
                    <option value="LEMPONGSARI">LEMPONGSARI</option>
                    <option value="MANGKANG KULON">MANGKANG KULON</option>
                    <option value="MANGKANG WETAN">MANGKANG WETAN</option>
                    <option value="MANGUHARJO (Tembalang)">MANGUHARJO (Tembalang)</option>
                    <option value="MANGUHARJO (Tugu)">MANGUHARJO (Tugu)</option>
                    <option value="MANGUNSARI">MANGUNSARI</option>
                    <option value="MANYARAN">MANYARAN</option>
                    <option value="METESEH">METESEH</option>
                    <option value="MIJEN">MIJEN</option>
                    <option value="MIROTO">MIROTO</option>
                    <option value="MLATIBARU">MLATIBARU</option>
                    <option value="MLATIHARJO">MLATIHARJO</option>
                    <option value="MUGASSARI">MUGASSARI</option>
                    <option value="MUKTIHARJO KIDUL">MUKTIHARJO KIDUL</option>
                    <option value="MUKTIHARJO LOR">MUKTIHARJO LOR</option>
                    <option value="NGADIRGO">NGADIRGO</option>
                    <option value="NGALIYAN">NGALIYAN</option>
                    <option value="NGEMPLAK SIMONGAN">NGEMPLAK SIMONGAN</option>
                    <option value="NGESREP">NGESREP</option>
                    <option value="NGIJO">NGIJO</option>
                    <option value="NONGKOSAWIT">NONGKOSAWIT</option>
                    <option value="PADANGSARI">PADANGSARI</option>
                    <option value="PAKITELAN">PAKITELAN</option>
                    <option value="PALEBON">PALEBON</option>
                    <option value="PANDANSARI">PANDANSARI</option>
                    <option value="PANDEAN LAMPER">PANDEAN LAMPER</option>
                    <option value="PANGGUNG KIDUL">PANGGUNG KIDUL</option>
                    <option value="PANGGUNG LOR">PANGGUNG LOR</option>
                    <option value="PATEMON">PATEMON</option>
                    <option value="PEDALANGAN">PEDALANGAN</option>
                    <option value="PEDURUNGAN KIDUL">PEDURUNGAN KIDUL</option>
                    <option value="PEDURUNGAN LOR">PEDURUNGAN LOR</option>
                    <option value="PEDURUNGAN TENGAH">PEDURUNGAN TENGAH</option>

                    <option value="PEKUDEN">PEKUDEN</option>
                    <option value="PENGGARON KIDUL">PENGGARON KIDUL</option>
                    <option value="PENGGARON LOR">PENGGARON LOR</option>
                    <option value="PESANTREN">PESANTREN</option>
                    <option value="PETERONGAN">PETERONGAN</option>
                    <option value="PETOMPON">PETOMPON</option>
                    <option value="PINDRIKAN KIDUL">PINDRIKAN KIDUL</option>
                    <option value="PINDRIKAN LOR">PINDRIKAN LOR</option>
                    <option value="PLALANGAN">PLALANGAN</option>
                    <option value="PLAMONGANSARI">PLAMONGANSARI</option>
                    <option value="PLEBURAN">PLEBURAN</option>
                    <option value="PLOMBOKAN">PLOMBOKAN</option>
                    <option value="PODOREJO">PODOREJO</option>
                    <option value="POLAMAN">POLAMAN</option>
                    <option value="PONGANGAN">PONGANGAN</option>
                    <option value="PUNDAK PAYUNG">PUNDAK PAYUNG</option>
                    <option value="PURWODINATAN'">PURWODINATAN'</option>
                    <option value="PURWOSARI (Mijen)">PURWOSARI (Mijen)</option>
                    <option value="PURWOSARI (SMG Utara)">PURWOSARI (SMG Utara)</option>
                    <option value="PURWOYOSO">PURWOYOSO</option>
                    <option value="RANDUGARUT">RANDUGARUT</option>
                    <option value="RANDUSARI">RANDUSARI</option>
                    <option value="REJOMULYO">REJOMULYO</option>
                    <option value="REJOSARI">REJOSARI</option>
                    <option value="ROWOSARI">ROWOSARI</option>
                    <option value="ROWOSARI">ROWOSARI</option>
                    <option value="SADENG">SADENG</option>
                    <option value="SALAMANMLOYO">SALAMANMLOYO</option>
                    <option value="SAMBIREJO">SAMBIREJO</option>
                    <option value="SAMPANGAN">SAMPANGAN</option>
                    <option value="SARIREJO">SARIREJO</option>
                    <option value="SAWAH BESAR">SAWAH BESAR</option>
                    <option value="SEKARAN">SEKARAN</option>
                    <option value="SEKAYU">SEKAYU</option>
                    <option value="SEMBUNGHARJO">SEMBUNGHARJO</option>
                    <option value="SENDANGGUWO">SENDANGGUWO</option>
                    <option value="SENDANGMULYO">SENDANGMULYO</option>

                    <option value="SIWALAN">SIWALAN</option>
                    <option value="SRONDOL KULON">SRONDOL KULON</option>
                    <option value="SRONDOL WETAN">SRONDOL WETAN</option>
                    <option value="SUKOREJO">SUKOREJO</option>
                    <option value="SUMURBOTO">SUMURBOTO</option>
                    <option value="SUMUREJO">SUMUREJO</option>
                    <option value="TAMBAKAJI">TAMBAKAJI</option>
                    <option value="TAMBAKHARJO">TAMBAKHARJO</option>
                    <option value="TAMBAKREJO">TAMBAKREJO</option>
                    <option value="TEMBANGAN">TEMBANGAN</option>
                    <option value="TANDANG">TANDANG</option>
                    <option value="TANJUNGMAS">TANJUNGMAS</option>
                    <option value="TAWANG MAS">TAWANG MAS</option>
                    <option value="TAWANG SARI">TAWANG SARI</option>
                    <option value="TEGALSARI">TEGALSARI</option>
                    <option value="TEMBALANG">TEMBALANG</option>
                    <option value="TERBOYO KULON'">TERBOYO KULON'</option>
                    <option value="TERBOYO WETAN">TERBOYO WETAN</option>
                    <option value="TINJOMOYO">TINJOMOYO</option>
                    <option value="TLOGOMULYO">TLOGOMULYO</option>
                    <option value="TLOGOSARI KULON">TLOGOSARI KULON</option>
                    <option value="TLOGOSARI WETAN">TLOGOSARI WETAN</option>
                    <option value="TRIMULYO">TRIMULYO</option>
                    <option value="TUGUREJO">TUGUREJO</option>
                    <option value="WATES">WATES</option>
                    <option value="WONODRI">WONODRI</option>
                    <option value="WONOLOPO">WONOLOPO</option>
                    <option value="WONOPLOMBON">WONOPLOMBON</option>
                    <option value="WONOSARI">WONOSARI</option>
                    <option value="WONOTINGAL">WONOTINGAL</option>
                </select>
            </div>
            <div>
                <label for="kecamatan" class="block mb-2 text-sm font-medium text-gray-900">KECAMATAN</label>
                <select name="kecamatan"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="" required>
                    <option value="">Pilih Kecamatan</option>
                    <option value="BANYUMANIK">BANYUMANIK</option>
                    <option value="CANDISARI">CANDISARI</option>
                    <option value="GAJAHMUNGKUR">GAJAHMUNGKUR</option>
                    <option value="GAYAMSARI">GAYAMSARI</option>
                    <option value="GENUK">GENUK</option>
                    <option value="GUNUNGPATI">GUNUNGPATI</option>
                    <option value="MIJEN">MIJEN</option>
                    <option value="NGALIYAN">NGALIYAN</option>
                    <option value="PEDURUNGAN">PEDURUNGAN</option>
                    <option value="SEMARANG BARAT">SEMARANG BARAT</option>
                    <option value="SEMARANG SELATAN">SEMARANG SELATAN</option>
                    <option value="SEMARANG TENGAH">SEMARANG TENGAH</option>
                    <option value="SEMARANG TIMUR">SEMARANG TIMUR</option>
                    <option value="SEMARANG UTARA">SEMARANG UTARA</option>
                    <option value="TEMBALANG">TEMBALANG</option>
                </select>
            </div>
            <div>
                <label for="populasirentan" class="block mb-2 text-sm font-medium text-gray-900">POPULASI RENTAN
                    (KONTAK ERAT)</label>
                <p class="text-sm font-light">Kontak Erat Serumah + Lingkungan + Sekolah + Tempat Kerja + Lingkungan
                    Bermain</p>
                <input type="text" name="populasirentan"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="" required>
            </div>
            <div>
                <label for="tanggalpe" class="block mb-2 text-sm font-medium text-gray-900">TANGGAL PE / PELACAKAN
                    KASUS</label>
                <div class="relative max-w-sm">
                    <input type="date" name="tanggalpe"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 "
                        placeholder="Select date" required>
                </div>
            </div>
            <div>
                <label for="pengembilansempel" class="block mb-2 text-sm font-medium text-gray-900">TANGGAL
                    PENGAMBILAN SAMPEL</label>
                <div class="relative max-w-sm">
                    <input type="date" name="pengembilansempel"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 "
                        placeholder="Select date" required>
                </div>
            </div>
            <div>
                <label for="pengirimansempeldkk" class="block mb-2 text-sm font-medium text-gray-900">TANGGAL
                    PENGIRIMAN SAMPEL KE DKK</label>
                <div class="relative max-w-sm">
                    <input type="date" name="pengirimansempeldkk"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 "
                        placeholder="Select date" required>
                </div>
            </div>
        </div>
        <input
            class="text-sm font-semibold text-utama border-2 border-utama mt-6 py-3 px-40 rounded-2xl hover:bg-utama hover:text-font2 hover:shadow-xl transition duration-300 ease-in-out"
            type="submit" name="submit" value="SAVE">
    </form>
</body>
@include('partial.footer')
</html>
