<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Table Suspek AFP</title>
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

        <!-- cards -->
        <div class="inline-flex rounded-md shadow-sm mt-0 p-4">
            <a href="{{ route('tablesuspekafp') }}"
                class="px-4 py-2 text-sm font-medium text-utama bg-white border border-gray-200 rounded-s-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                SUSPEK AFP
            </a>
            <a href="{{ route('tablesuspekcampak') }}"
                class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                SUSPEK CAMPAK
            </a>
            <a href="{{route('tablesuspekdifteri')}}"
                class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                SUSPEK DIFTERI
            </a>
            <a href="{{ route('tablesuspekracun') }}"
                class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-e-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                KERACUNAN MAKANAN
            </a>
        </div>
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
                    <th scope="col" class="px-2 py-4">OPTION</th>
                </thead>
                <tbody
                    @foreach ($suspekafp as $item)
                            <tr class="bg-white border-b">
                                <th class="px-6 py-4">{{ $item['id'] }}</th>
                                <td class="px-6 py-4">{{ $item['puskesmas'] }}</td>
                                <td class="px-6 py-4">{{ $item['namasuspekafp'] }}</td>
                                <td class="px-6 py-4">{{ $item['nik'] }}</td>
                                <td class="px-6 py-4">{{ $item['nohpkasus'] }}</td>
                                <td class="px-6 py-4">{{ $item['tanggallahir'] }}</td>
                                <td class="px-6 py-4">{{ $item['jeniskelamin'] }}</td>
                                <td class="px-6 py-4">{{ $item['namaorangtua'] }}</td>
                                <td class="px-6 py-4">{{ $item['alamat'] }}</td>
                                <td class="px-6 py-4">{{ $item['kelurahan'] }}</td>
                                <td class="px-6 py-4">{{ $item['kecamatan'] }}</td>
                                <td class="px-6 py-4">{{ $item['tanggalmulaisakit'] }}</td>
                                <td class="px-6 py-4">{{ $item['tanggalmulailumpuh'] }}</td>
                                <td class="px-6 py-4">{{ $item['tanggalterimainformasi'] }}</td>
                                <td class="px-6 py-4">{{ $item['tanggalpe'] }}</td>
                                <td class="px-6 py-4">{{ $item['populasirentan'] }}</td>
                                <td class="px-6 py-4">{{ $item['tanggalpolio'] }}</td>
                                <td class="px-6 py-4">{{ $item['pengembilansempelpertama'] }}</td>
                                <td class="px-6 py-4">{{ $item['pengembilansempelkedua'] }}</td>
                                <td class="px-6 py-4">{{ $item['pengirimansempeldkk'] }}</td>
                                <td class="px-6 py-4">
                                    <a href="{{route('createkonfirmasiafp')}}" class="px-6 py-4 bg-utama rounded-xl font-bold text-white hover:bg-gray-300 hover:text-white">konfirmasi</a>
                                </td>
                            </tr> @endforeach
                    </tbody>
            </table>
        </div>
        <div class="p-4 -mt-2">
            {{ $suspekafp->links() }}
        </div>
    </main>
</body>
@include('partial.footer')
</html>
