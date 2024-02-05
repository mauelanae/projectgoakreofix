
<aside class="max-w-62.5 ease-nav-brand fixed block w-full -translate-x-full flex-wrap items-center justify-between rounded-2xl border-0 bg-white antialiased shadow-none transition-transform duration-200 xl:left-0 xl:translate-x-0 xl:bg-transparent">
    <div class="h-19.5">
      <i class="absolute top-0 right-0 hidden p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 xl:hidden" sidenav-close></i>
      <div class="block px-8 py-6 m-0 text-sm whitespace-nowrap text-slate-700" href="javascript:;" target="_blank">
        <img src="{{asset('logo.png')}}" class="inline h-full max-w-full transition-all duration-200 ease-nav-brand max-h-8" alt="main_logo" />
      </div>
    </div>

    <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />

    <div class="items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full">
      <ul class="flex flex-col pl-0 mb-0">
        <li class="mt-0.5 w-full">
          <a class="py-2.7 shadow-soft-xl text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg bg-utama px-4 font-semibold text-slate-700 transition-colors border border-utama" href="{{ route('admin') }}">
            <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center bg-white xl:p-2.5">
              <img src="{{asset('icons8-dashboard-48.png')}}" class="w-8">
            </div>
            <span class="ml-1 text-white duration-300 opacity-100 pointer-events-none ease-soft">Dashboard</span>
          </a>
        </li>

        <li class="mt-3 w-full">
          <a class="py-2.7 shadow-soft-xl text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg bg-utama px-4 font-semibold text-slate-700 transition-colors border border-utama" href="{{ route('tablesuspekafp') }}">
            <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center bg-white xl:p-2.5">
              <img src="{{asset('icons8-table-64.png')}}" class="w-8">
            </div>
            <span class="ml-1 text-white duration-300 opacity-100 pointer-events-none ease-soft">Tables</span>
          </a>
        </li>

        <li class="mt-3 w-full">
          <a class="py-2.7 shadow-soft-xl text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg bg-utama px-4 font-semibold text-slate-700 transition-colors border border-utama" href="{{route('joinadminafp')}}">
            <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center bg-white xl:p-2.5">
              <img src="{{asset('icons8-signal-100.png')}}" class="w-8">
            </div>
            <span class="ml-1 text-white duration-300 opacity-100 pointer-events-none ease-soft">Status</span>
          </a>
        </li>

        <li class="mt-3 w-full">
          <a class="py-2.7 shadow-soft-xl text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg bg-utama px-4 font-semibold text-slate-700 transition-colors border border-utama" href="{{route('uploaddokumen')}}">
            <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center bg-white xl:p-2.5">
              <img src="{{asset('icons8-upload-48.png')}}" class="w-8">
            </div>
            <span class="ml-1 text-white duration-300 opacity-100 pointer-events-none ease-soft">Upload File</span>
          </a>
        </li>

        <li class="mt-3 w-full">
          <a class="py-2.7 shadow-soft-xl text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg bg-utama px-4 font-semibold text-slate-700 transition-colors border border-utama" href="{{route('logout')}}">
            <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center bg-white xl:p-2.5">
              <img src="{{asset('logout.png')}}" class="w-8">
            </div>
            <span class="ml-1 text-white duration-300 opacity-100 pointer-events-none ease-soft">Logout</span>
          </a>
        </li>
    </div>
  </aside>
