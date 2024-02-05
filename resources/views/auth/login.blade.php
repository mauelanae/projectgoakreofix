<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="flex justify-center items-center h-screen">
        <img src="{{asset('Artboard 1.png')}}" id="kantor" class="fixed sm:block hidden sm:right-0 md:flex md:right-0 md:h-full md:-top-0 md:object-cover lg:flex lg:right-0 lg:h-full lg:w-full lg:-top-0 lg:object-cover">
        <div class="fixed w-full md:w-1/2 lg:w-1/3 xl:w-1/4 p-4 shadow-lg bg-transparent backdrop-blur-md rounded-lg">
            <div class="mb-4 flex items-center justify-center">
                <img src="{{asset('logo.png')}}" class="h-10 mr-3" alt="Logo">
            </div>
            @if ($errors->any())
                  <div class="p-3 text-sm text-red-800 rounded-lg bg-red-50 dark:text-red-400" role="alert">
                  <ul>
                    @foreach ($errors->all() as $item)
                      <li>{{ $item }}</li>
                    @endforeach
                  </div>
                  </ul>
                @endif
            <form class="space-y-4 md:space-y-6" action="" method="post">
                @csrf
                @method('post')
                  <div>
                      <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                      <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " placeholder="email">
                  </div>
                  <div>
                      <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                      <input type="password" name="password" id="password" placeholder="password" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                  </div>
                  <button type="submit" id="submit" name="submit" class="w-full text-white bg-utama hover:bg-slate-200 hover:text-utama focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Sign in</button>
              </form>
        </div>
    </div>
</body>
</html>