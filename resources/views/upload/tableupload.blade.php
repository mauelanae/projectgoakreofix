<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('partial.head')
</head>

<body>
    <header>
        <nav class="w-full bg-white border-gray-200 mt-0">
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
                            <a href="{{ route('joincampak') }}"
                                class="block py-2 pl-3 pr-4 text-utama rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-utama md:p-0">Status</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
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
