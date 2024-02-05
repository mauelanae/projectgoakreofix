<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Status Suspek AFP</title>
    @include('partial.head')
</head>

<body class="m-0 font-sans antialiased font-normal text-base leading-default bg-gray-50 text-slate-500">
    <!-- sidenav  -->
    @include('partial.left-side')
    <!-- end sidenav -->

    <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
        <!-- Navbar -->
        @include('partial.navbar')
        <!-- end Navbar -->

        <div class="flex rounded-md shadow-sm p-4">
            <a href="{{ route('joinadminafp') }}"
                class="px-4 py-2 text-sm font-medium text-utama bg-white border rounded-s-lg border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                SUSPEK AFP
            </a>
            <a href="{{ route('joinadmincampak') }}"
                class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                SUSPEK CAMPAK
            </a>
            <a href="{{ route('joinadmindifteri') }}"
                class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                SUSPEK DIFTERI
            </a>
            <a href="{{ route('joinadminracun') }}"
                class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border rounded-e-lg border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                KERACUNAN MAKANAN
            </a>
        </div>
        <div class="p-4">
            <form method="GET" action="{{ route('searchafpadmin') }}">
                <div class="col-md-1">
                    <input type="search" name="search" class="px-4 py-2 border border-black rounded-md"
                        placeholder="Search">
                    <button type="submit" class="px-4 py-2 bg-utama text-white font-bold rounded-md">Cari</button>
                </div>
            </form>
        </div>

        <div class="p-4">
            <a href="{{route('exportsuspekafp')}}" class="px-4 py-2.5 bg-utama text-white font-bold rounded-md">Export Excel</a>
        </div>
        
        <!--Table Status-->
        <div class="flex overflow-auto p-4">
            <table class="text-sm text-black w-full">
                <thead class="text-xs text-black bg-gray-300">
                    <th scope="col" class="px-2 py-4">No</th>
                    <th scope="col" class="px-2 py-4">PUSKESMAS</th>
                    <th scope="col" class="px-2 py-4">NAMA SUSPEK AFP</th>
                    <th scope="col" class="px-2 py-4">NIK</th>
                    <th scope="col" class="px-2 py-4">NO HP KASUS</th>
                    <th scope="col" class="px-2 py-4">TANGGAL LAHIR</th>
                    <th scope="col" class="px-2 py-4">JENIS KELAMIN</th>
                    <th scope="col" class="px-2 py-4">NAMA ORANG TUA</th>
                    <th scope="col" class="px-2 py-4">ALAMAT</th>
                    <th scope="col" class="px-2 py-4">KELURAHAN</th>
                    <th scope="col" class="px-2 py-4">KECAMATAN</th>
                    <th scope="col" class="px-2 py-4">TANGGAL MULAI SAKIT</th>
                    <th scope="col" class="px-2 py-4">TANGGAL MULAI LUMPUH</th>
                    <th scope="col" class="px-2 py-4">TANGGAL TERIMA INFORMASI</th>
                    <th scope="col" class="px-2 py-4">TANGGAL PE</th>
                    <th scope="col" class="px-2 py-4">POPULASI RENTAN</th>
                    <th scope="col" class="px-2 py-4">TANGGAL POLIO</th>
                    <th scope="col" class="px-2 py-4">SEMPEL 1</th>
                    <th scope="col" class="px-2 py-4">SEMPEL 2</th>
                    <th scope="col" class="px-2 py-4">PENGIRIMAN SEMPEL DKK</th>
                    <th scope="col" class="px-2 py-4">Tanggal Terima DKK</th>
                    <th scope="col" class="px-2 py-4">NO EPID</th>
                    <th scope="col" class="px-2 py-4">STATUS</th>
                    <th scope="col" class="px-2 py-4">SEMPEL 1</th>
                    <th scope="col" class="px-2 py-4">SEMPEL 2</th>
                    <th scope="col" class="px-2 py-4">ADIKUAT</th>
                    <th scope="col" class="px-2 py-4">TANGGAL KELUAR HASIL</th>
                    <th scope="col" class="px-2 py-4">DASAR SURAT</th>
                    <th scope="col" class="px-2 py-4">RTL</th>
                    <th scope="col" class="px-2 py-4 ">OPTION</th>
                </thead>
                @foreach ($join as $item)
                    <tr class="bg-white border-b text-xs">
                        <th class="px-6 py-4">
                            {{ $item['id'] }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $item['puskesmas'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item['namasuspekafp'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item['nik'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item['nohpkasus'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item['tanggallahir'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item['jeniskelamin'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item['namaorangtua'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item['alamat'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item['kelurahan'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item['kecamatan'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item['tanggalmulaisakit'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item['tanggalmulailumpuh'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item['tanggalterimainformasi'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item['tanggalpe'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item['populasirentan'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item['tanggalpolio'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item['pengembilansempelpertama'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item['pengembilansempelkedua'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item['pengirimansempeldkk'] }}
                        </td>
                        <td class="px-6 py-4 bg-green-200">
                            {{ $item->getSuspekafpdanKonfirmasiafp ? $item->getSuspekafpdanKonfirmasiafp->tanggalterimadkk : '' }}
                        </td>
                        <td class="px-6 py-4 bg-green-200">
                            {{ $item->getSuspekafpdanKonfirmasiafp ? $item->getSuspekafpdanKonfirmasiafp->noepid : '' }}
                        </td>
                        <td class="px-6 py-4 bg-green-200">
                            {{ $item->getSuspekafpdanKonfirmasiafp ? $item->getSuspekafpdanKonfirmasiafp->status : '' }}
                        </td>
                        <td class="px-6 py-4 bg-green-200">
                            {{ $item->getSuspekafpdanKonfirmasiafp ? $item->getSuspekafpdanKonfirmasiafp->sempel1 : '' }}
                        </td>
                        <td class="px-6 py-4 bg-green-200">
                            {{ $item->getSuspekafpdanKonfirmasiafp ? $item->getSuspekafpdanKonfirmasiafp->sempel2 : '' }}
                        </td>
                        <td class="px-6 py-4 bg-green-200">
                            {{ $item->getSuspekafpdanKonfirmasiafp ? $item->getSuspekafpdanKonfirmasiafp->adikuat : '' }}
                        </td>
                        <td class="px-6 py-4 bg-green-200">
                            {{ $item->getSuspekafpdanKonfirmasiafp ? $item->getSuspekafpdanKonfirmasiafp->tanggalhasilkeluar : '' }}
                        </td>
                        <td class="px-6 py-4 bg-green-200">
                            {{ $item->getSuspekafpdanKonfirmasiafp ? $item->getSuspekafpdanKonfirmasiafp->dasarsurat : '' }}
                        </td>
                        <td class="px-6 py-4 bg-green-200">
                            {{ $item->getSuspekafpdanKonfirmasiafp ? $item->getSuspekafpdanKonfirmasiafp->rtl : '' }}
                        </td>
                        <td class="px-6 py-4">
                            <a href="/konfirmasiadmin/{{ $item->id }}/editafp"
                                class="px-4 py-3 bg-utama rounded-xl font-bold text-white hover:bg-gray-300 hover:text-white">UPDATE</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        <h1 class="p-4 mt-4 text-black text-base font-bold">Data Lanjutan Suspek AFP</h1>
        <div class="flex overflow-auto p-4">
            <table class="text-sm text-black w-full">
                <thead class="text-xs text-black bg-gray-300">
                    <th scope="col" class="px-2 py-4">No</th>
                    <th scope="col" class="px-2 py-4">PUSKESMAS</th>
                    <th scope="col" class="px-2 py-4">NAMA SUSPEK AFP</th>
                    <th scope="col" class="px-2 py-4">NIK</th>
                    <th scope="col" class="px-2 py-4">NO HP KASUS</th>
                    <th scope="col" class="px-2 py-4">TANGGAL LAHIR</th>
                    <th scope="col" class="px-2 py-4">JENIS KELAMIN</th>
                    <th scope="col" class="px-2 py-4">NAMA ORANG TUA</th>
                    <th scope="col" class="px-2 py-4">ALAMAT</th>
                    <th scope="col" class="px-2 py-4">KELURAHAN</th>
                    <th scope="col" class="px-2 py-4">KECAMATAN</th>
                    <th scope="col" class="px-2 py-4">TANGGAL MULAI SAKIT</th>
                    <th scope="col" class="px-2 py-4">TANGGAL MULAI LUMPUH</th>
                    <th scope="col" class="px-2 py-4">TANGGAL TERIMA INFORMASI</th>
                    <th scope="col" class="px-2 py-4">TANGGAL PE</th>
                    <th scope="col" class="px-2 py-4">POPULASI RENTAN</th>
                    <th scope="col" class="px-2 py-4">TANGGAL POLIO</th>
                    <th scope="col" class="px-2 py-4">SEMPEL 1</th>
                    <th scope="col" class="px-2 py-4">SEMPEL 2</th>
                    <th scope="col" class="px-2 py-4">PENGIRIMAN SEMPEL DKK</th>
                    <th scope="col" class="px-2 py-4">Tanggal Terima DKK</th>
                    <th scope="col" class="px-2 py-4">No Epid</th>
                    <th scope="col" class="px-2 py-4">Status</th>
                    <th scope="col" class="px-2 py-4">Sempel 1</th>
                    <th scope="col" class="px-2 py-4">Sempel 2</th>
                    <th scope="col" class="px-2 py-4">Tanggal Keluar Hasil</th>
                    <th scope="col" class="px-2 py-4">Dasar Surat</th>
                    <th scope="col" class="px-2 py-4">RTL</th>
                    <th scope="col" class="px-2 py-4">Apakah kunjungan ulang dilakukan?
                    </th>
                    <th scope="col" class="px-2 py-4">Apakah kasus dapat ditemukan?</th>
                    <th scope="col" class="px-2 py-4">Apakah masih ada paralisis
                        redusial?</th>
                    <th scope="col" class="px-2 py-4">Bila ya, apakah sifatnya layuh
                        (flaccid)?</th>
                    <th scope="col" class="px-2 py-4">Tungkai Kanan</th>
                    <th scope="col" class="px-2 py-4">Tungkai Kiri</th>
                    <th scope="col" class="px-2 py-4">Lengan Kanan</th>
                    <th scope="col" class="px-2 py-4">Lengan Kiri</th>
                    <th scope="col" class="px-2 py-4">Lainnya</th>
                </thead>
                @foreach ($join as $item)
                    <tr class="bg-white border-b">
                        <th class="px-6 py-4">
                            {{ $item['id'] }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $item['puskesmas'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item['namasuspekafp'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item['nik'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item['nohpkasus'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item['tanggallahir'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item['jeniskelamin'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item['namaorangtua'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item['alamat'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item['kelurahan'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item['kecamatan'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item['tanggalmulaisakit'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item['tanggalmulailumpuh'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item['tanggalterimainformasi'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item['tanggalpe'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item['populasirentan'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item['tanggalpolio'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item['pengembilansempelpertama'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item['pengembilansempelkedua'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item['pengirimansempeldkk'] }}
                        </td>
                        <td class="px-6 py-4 bg-green-200">
                            {{ $item->getadvanceafp ? $item->getSuspekafpdanKonfirmasiafp->tanggalterimadkk : '' }}
                        </td>
                        <td class="px-6 py-4 bg-green-200">
                            {{ $item->getadvanceafp ? $item->getSuspekafpdanKonfirmasiafp->noepid : '' }}</td>
                        <td class="px-6 py-4 bg-green-200">
                            {{ $item->getadvanceafp ? $item->getSuspekafpdanKonfirmasiafp->status : '' }}</td>
                        <td class="px-6 py-4 bg-green-200">
                            {{ $item->getadvanceafp ? $item->getSuspekafpdanKonfirmasiafp->sempel1 : '' }}</td>
                        <td class="px-6 py-4 bg-green-200">
                            {{ $item->getadvanceafp ? $item->getSuspekafpdanKonfirmasiafp->sempel2 : '' }}</td>
                        <td class="px-6 py-4 bg-green-200">
                            {{ $item->getadvanceafp ? $item->getSuspekafpdanKonfirmasiafp->tanggalhasilkeluar : '' }}
                        </td>
                        <td class="px-6 py-4 bg-green-200">
                            {{ $item->getadvanceafp ? $item->getSuspekafpdanKonfirmasiafp->dasarsurat : '' }}</td>
                        <td class="px-6 py-4 bg-green-200">
                            {{ $item->getadvanceafp ? $item->getSuspekafpdanKonfirmasiafp->rtl : '' }}</td>
                        <td class="px-6 py-4 bg-green-200">
                            {{ $item->getadvanceafp ? $item->getadvanceafp->kunjungan : '' }}
                        </td>
                        <td class="px-6 py-4 bg-green-200">
                            {{ $item->getadvanceafp ? $item->getadvanceafp->kasusditemukan : '' }}</td>
                        <td class="px-6 py-4 bg-green-200">
                            {{ $item->getadvanceafp ? $item->getadvanceafp->apakah : '' }}</td>
                        <td class="px-6 py-4 bg-green-200">
                            {{ $item->getadvanceafp ? $item->getadvanceafp->bilaya : '' }}</td>
                        <td class="px-6 py-4 bg-green-200">
                            {{ $item->getadvanceafp ? $item->getadvanceafp->tungkai_kanan : '' }}
                        </td>
                        <td class="px-6 py-4 bg-green-200">
                            {{ $item->getadvanceafp ? $item->getadvanceafp->tungkai_kiri : '' }}
                        </td>
                        <td class="px-6 py-4 bg-green-200">
                            {{ $item->getadvanceafp ? $item->getadvanceafp->lengan_kanan : '' }}
                        </td>
                        <td class="px-6 py-4 bg-green-200">
                            {{ $item->getadvanceafp ? $item->getadvanceafp->lengan_kiri : '' }}
                        </td>
                        <td class="px-6 py-4 bg-green-200">
                            {{ $item->getadvanceafp ? $item->getadvanceafp->lainnya : '' }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </main>
</body>
@include('partial.footer')

</html>
