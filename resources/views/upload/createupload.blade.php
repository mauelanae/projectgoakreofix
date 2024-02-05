<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload Dokumen</title>
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
                        <a href="{{ route('admin') }}"
                            class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-utama md:p-0">Dashboard</a>
                    </li>
                    <li>
                        <a href="{{ route('tablesuspekafp') }}"
                            class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-utama md:p-0">Table</a>
                    </li>
                    <li>
                        <a href="{{ route('joinadminafp') }}"
                            class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-utama md:p-0">Status</a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}"
                            class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-utama md:p-0">Logout</a>
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
    <h1 class="mt-8 text-2xl font-bold text-center">Upload File</h1>
    <form action="{{ route('upload') }}" class="x-2 mb-8 max-w-3xl mx-auto space-y-6" method="POST"
        enctype="multipart/form-data">
        @csrf
        <div class="grid mt-8 gap-6 mb-14 md:grid-cols-1">
            <div>
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900">NAMA FILE</label>
                <input type="text" name="name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="" required>
            </div>
            <label for="" class="block text-sm mb-2 font-medium text-gray-900">UPLOAD FILE</label>
            <input type="file" name="file"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm -mt-6 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            <button
                class="text-sm font-semibold text-utama border-2 border-utama mt-6 py-3 px-40 rounded-2xl hover:bg-utama hover:text-font2 hover:shadow-xl transition duration-300 ease-in-out"
                type="submit">Unggah</button>
        </div>
    </form>

    <h1 class="mt-8 text-2xl font-bold text-center">Rekap Goakreo </h1>
    <div class="flex overflow-auto p-4 pt-0"">
        <table class="text-sm text-black w-full mt-6">
            <thead class="text-xs text-black bg-gray-300">
                <th scope="col" class="px-2 py-4">Nama</th>
                <th scope="col" class="px-2 py-4">Dokumen</th>
                <th scope="col" class="px-2 py-4">Download</th>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr class="bg-white border-b">
                        <th class="px-6 py-4">{{ $item['name'] }}</th>
                        <th class="px-6 py-4">{{ $item['filename'] }}</th>
                        <td class="px-6 py-4">
                            <div class="flex gap-4">
                                <a href="{{ route('download', ['id' => $item['id']]) }}"
                                    class="py-2 px-4 bg-utama text-white rounded-md">Download</a>
                                <form action="{{ route('deletedata', ['id' => $item->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"
                                        class="py-2 px-4 bg-utama text-white rounded-md">Hapus
                                        Data</button>
                                </form>
                            </div>
                        </td>
                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
@include('partial.footer')

</html>
