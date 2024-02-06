<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Status Supek Keracunan Makanan</title>
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
        <!--Selection Suspek-->
        <div class="inline-flex rounded-md shadow-sm mt-0 p-4">
            <a href="{{ route('joinadminafp') }}"
                class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-s-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
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
                class="px-4 py-2 text-sm font-medium text-utama bg-white border border-gray-200 rounded-e-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                KERACUNAN MAKANAN
            </a>
        </div>

        <div class="p-4 flex-col">
            <form method="GET" action="{{ route('searchracunadmin') }}">
                <div class="col-md-1">
                    <input type="search" name="search" class="px-4 py-2 border border-black rounded-md"
                        placeholder="Search">
                    <button type="submit" class="px-4 py-2 bg-utama text-white font-bold rounded-md">Cari</button>
                </div>
            </form>
        </div>

        <div class="p-4">
            <a href="{{route('exportsuspekracun')}}" class="px-4 py-2.5 bg-utama text-white font-bold rounded-md">Export Excel</a>
        </div>

        <!--Table Status-->
        <div class="flex overflow-auto p-4">
            <table class="text-sm text-black w-full">
                <thead class="text-xs text-black bg-gray-300">
                    <th scope="col" class="px-2 py-4">No</th>
                    <th scope="col" class="px-2 py-4">PUSKESMAS</th>
                    <th scope="col" class="px-2 py-4">NAMA INDEK KASUS</th>
                    <th scope="col" class="px-2 py-4">LOKASI KEJADIAN</th>
                    <th scope="col" class="px-2 py-4">KELURAHAN</th>
                    <th scope="col" class="px-2 py-4">KECAMATAN</th>
                    <th scope="col" class="px-2 py-4">TANGGAL INFORMASI</th>
                    <th scope="col" class="px-2 py-4">TANGGAL PE</th>
                    <th scope="col" class="px-2 py-4">PENGAMBILAN SEMPEL</th>
                    <th scope="col" class="px-2 py-4">PENGIRIMAN SEMPEL DKK</th>
                    <th scope="col" class="px-2 py-4">JENIS SEMPEL</th>
                    <th scope="col" class="px-2 py-4">TANGGAL TERIMA DKK</th>
                    <th scope="col" class="px-2 py-4">STATUS</th>
                    <th scope="col" class="px-2 py-4">HASIL SEMPEL</th>
                    <th scope="col" class="px-2 py-4">TANGGAL HASIL KELUAR</th>
                    <th scope="col" class="px-2 py-4">DASAR SURAT</th>
                    <th scope="col" class="px-2 py-4">OPTION</th>
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
                            {{ $item['namaindekkasus'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item['lokasikejadian'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item['kelurahan'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item['kecamatan'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item['tanggalinformasi'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item['tanggalpe'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item['pengembilansempel'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item['pengirimansempeldkk'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item['jenissempel'] }}
                        </td>
                        <td class="px-6 py-4 bg-green-200">
                            {{ $item->getRacundanKonfirmasiracun ? $item->getRacundanKonfirmasiracun->sempelditerimadkk : '' }}
                        </td>
                        <td class="px-6 py-4 bg-green-200">
                            {{ $item->getRacundanKonfirmasiracun ? $item->getRacundanKonfirmasiracun->status : '' }}
                        </td>
                        <td class="px-6 py-4 bg-green-200">
                            {{ $item->getRacundanKonfirmasiracun ? $item->getRacundanKonfirmasiracun->hasilsempel : '' }}
                        </td>
                        <td class="px-6 py-4 bg-green-200">
                            {{ $item->getRacundanKonfirmasiracun ? $item->getRacundanKonfirmasiracun->tanggalkeluarhasil : '' }}
                        </td>
                        <td class="px-6 py-4 bg-green-200">
                            {{ $item->getRacundanKonfirmasiracun ? $item->getRacundanKonfirmasiracun->dasarsurat : '' }}
                        </td>
                        <td class="px-6 py-4">
                            <a href="/konfirmasiadmin/{{ $item->id }}/editracun"
                                class="px-4 py-3 bg-utama rounded-xl font-bold text-white hover:bg-gray-300 hover:text-white">UPDATE</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
</body>
@include('partial.footer')

</html>
