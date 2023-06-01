<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('css')
    @vite('resources/css/app.css')
    <title>Helium</title>
</head>

<body class="bg-[#F0F2F4] pb-10 text-base text-slate-800 antialiased">
    <main class="flex">
        <div class="fixed inset-y-0 left-0 w-64 overflow-auto border-r border-[#E1E6EA] bg-white pt-5 pb-4">
            <div class="flex flex-shrink-0 flex-grow flex-col px-3 pb-[70px]">
                <x-helium-ui::layout.icon class="mb-5 w-10" />
                <x-helium-ui::menu />
            </div>
            <div class="fixed bottom-0 w-64 border-r border-[#E1E6EA] bg-white">
                <x-helium-ui::layout.profil />
            </div>
        </div>
        <div class="ml-[16rem] grow">
            @yield('topbar')
            <div class="max-w mx-auto w-[90%] space-y-5 pt-10">
                @yield('content')
            </div>
        </div>
    </main>
    @vite('resources/js/app.js')
    @yield('js')
</body>

</html>
