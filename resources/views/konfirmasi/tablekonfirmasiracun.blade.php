<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Status Suspek Keracunan Makanan</title>
    @include('partial.head')
</head>

<body class="w-screen ">
    <!-- Header Start -->
    <header>
        <nav class="fixed w-full bg-white border-gray-200 mt-0">
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
                                class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-utama md:p-0">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('services') }}"
                                class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-utama md:p-0">Services</a>
                        </li>
                        <li>
                            <a href="{{ route('joinracun') }}"
                                class="block py-2 pl-3 pr-4 text-utama rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-utama md:p-0">Dashboard</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Header End -->
    <!--Selection Suspek-->
    <div class="inline-flex rounded-md shadow-sm mt-20 p-4">
        <a href="{{ route('joinafp') }}"
            class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-s-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
            SUSPEK AFP
        </a>
        <a href="{{ route('joincampak') }}"
            class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
            SUSPEK CAMPAK
        </a>
        <a href="{{ route('joindifteri') }}"
            class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
            SUSPEK DIFTERI
        </a>
        <a href="{{ route('joinracun') }}"
            class="px-4 py-2 text-sm font-medium text-utama bg-white border border-gray-200 rounded-e-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
            KERACUNAN MAKANAN
        </a>
    </div>

    <div class="p-4">
        <form method="GET" action="{{route('searchracun')}}">
            <div class="row pb-3">
                <div class="col-md-3">
                    <input type="search" name="search" class="px-4 py-2 border border-black rounded-md"
                        placeholder="Search">
                    <button type="submit" class="px-4 py-2 bg-utama text-white rounded-md">Cari</button>
                </div>
            </div>
        </form>
    </div>
    <!--Table Status-->
    <div class="p-4 pt-0 flex overflow-auto">
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
                        {{ $item->getRacundanKonfirmasiracun ? $item->getRacundanKonfirmasiracun->status : '' }}</td>
                    <td class="px-6 py-4 bg-green-200">
                        {{ $item->getRacundanKonfirmasiracun ? $item->getRacundanKonfirmasiracun->hasilsempel : '' }}</td>
                    <td class="px-6 py-4 bg-green-200">
                        {{ $item->getRacundanKonfirmasiracun ? $item->getRacundanKonfirmasiracun->tanggalkeluarhasil : '' }}
                    </td>
                    <td class="px-6 py-4 bg-green-200">
                        {{ $item->getRacundanKonfirmasiracun ? $item->getRacundanKonfirmasiracun->dasarsurat : '' }}</td>
                </tr>
            @endforeach
        </table>
    </div>
    <div class="p-4 -mt-2">
        {{ $join->links() }}
    </div>
</body>
@include('partial.footer')
</html>
