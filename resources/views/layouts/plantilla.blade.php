<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')

</head>
<body>

    <div class="flex h-screen">

        <div class="w-72 hidden lg:block ">
            {{-- nav lg --}}
            <div class="py-4 px-8 fixed  w-60 bg-gray-100 h-full"> 
                <div class="">
                    
                    {{-- logo  --}}
                    <div class="bg-emerald-300 w-full py-2 rounded-3xl">
                        <h2 class="text-center text-lg font-semibold -tracking-tighter">Oregano</h2>
                    </div>
                    
                    <div class="flex mt-6">
                        <img class="h-11 w-11 rounded-full" src="img/me.jpg" alt="">
                        <div class="ml-3 text-sm">
                            <p class="font-medium">Sebastian Tassara</p>
                            <p class="text-gray-600">@DatCanelita</p>
                        </div>
                    </div>

                    <ul class="mt-8">
                        <li class="mt-3 bg-zinc-200 px-3 py-1.5 rounded-md ">
                            <a href="#" class="font-medium text-sm"><i class="fa-brands fa-github"></i> GitHub</a>
                        </li>
                        <li class="mt-3 px-3 py-1.5 rounded-md ">
                            <a href="#" class="font-medium text-sm"><i class="fa-brands fa-linkedin-in"></i> LinkedIn</a>
                        </li>
                        <li class="mt-3 px-3 py-1.5 rounded-md ">
                            <a href="#" class="font-medium text-sm"><i class="fa-brands fa-twitter"></i> Twiter</a>
                        </li>
                    </ul>

                    {{-- link --}}
                    <div class="mt-8">
                        <h2 class="font-semibold text-zinc-500">Temas</h2>
                        <ul class="mt-3">
                            <li><a href="{{route('estilos.stats')}}">Stats</a></li>
                            <li><a href="{{route('estilos.pricing')}}">Pricing Plans</a></li>
                            <li><a href="{{route('estilos.table')}}">Tables</a></li>
                            <li>e</li>
                            <li>Stats</li>
                            <li>Nav</li>
                            <li>a</li>
                            <li>e</li>
                            <li>Stats</li>
                            <li>Nav</li>
                            <li>a</li>
                            <li>e</li>
                            <li>Stats</li>
                            <li>Nav</li>
                            <li>a</li>
                            <li>e</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

        <div class="w-full">
            {{-- nav small --}}
            <nav class="flex lg:hidden bg-gray-300 h-20 p-4 justify-between">
                <div class="flex items-center justify-between ">
                    <div class="text-2xl">
                        <button type="submit"><i class="fa-solid fa-bars"></i></button>
                    </div>
                    <div class="hidden md:flex ml-16 text-lg items-center ">
                        <div class="bg-emerald-300 w-28 py-2 rounded-3xl mr-6">
                            <h2 class="text-center font-semibold -tracking-tighter">Oregano</h2>
                        </div>
                        <a href="#" class="mr-6 text-sm font-semibold bg-slate-200 px-4 py-3 rounded-md">GitHub</a>
                        <a href="#" class="mr-6 text-sm">LinkedIn</a>
                        <a href="#" class="mr-6 text-sm">Twiter</a>
                    </div>
                </div>

                <div class="flex items-center w-20 justify-between">
                    <i class="text-xl fa-solid fa-fire"></i>
                    <img class="h-11 w-11 rounded-full" src="img/me.jpg" alt="">
                </div>
            </nav>

            @yield('content')
        </div>

    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>