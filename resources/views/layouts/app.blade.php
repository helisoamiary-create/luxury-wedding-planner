<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <title>Luxury Wedding Planner</title>

        @vite(['resources/css/app.css','resources/js/app.js'])

    </head>

    <body class="bg-[#0f0f0f] text-white overflow-hidden">

        <div class="stars"></div>

        <div class="flex h-screen">

            <!-- SIDEBAR -->

            <aside class="w-64 bg-black border-r border-gray-800 flex flex-col flex-shrink-0">

                <!-- TITRE -->

                <div class="px-6 py-6">
                    <h1 class="text-3xl font-bold gold-glow">
                    Luxury Wedding
                    </h1>
                </div>

                <!-- MENU -->

                <nav class="flex-1 px-6 space-y-3 text-sm gold">

                    <a href="/dashboard"
                    class="menu-link {{ request()->is('dashboard') ? 'menu-active' : '' }}">
                    Dashboard
                    </a>

                    <a href="/clients"
                    class="menu-link {{ request()->is('clients*') ? 'menu-active' : '' }}">
                    Clients
                    </a>

                    <a href="/mariages"
                    class="menu-link {{ request()->is('mariages*') ? 'menu-active' : '' }}">
                    Mariages
                    </a>

                    <a href="/invites"
                    class="menu-link {{ request()->is('invites*') ? 'menu-active' : '' }}">
                    Invités
                    </a>

                    <a href="/prestataires"
                    class="menu-link {{ request()->is('prestataires*') ? 'menu-active' : '' }}">
                    Prestataires
                    </a>

                    <a href="/planning"
                    class="menu-link {{ request()->is('planning*') ? 'menu-active' : '' }}">
                    Planning
                    </a>

                    <a href="/tables"
                    class="menu-link {{ request()->is('tables*') ? 'menu-active' : '' }}">
                    Tables
                    </a>

                    <a href="/budget"
                    class="menu-link {{ request()->is('budget*') ? 'menu-active' : '' }}">
                    Budget
                    </a>

                </nav>

                <!-- LOGOUT BAS -->

                <div class="p-6 border-t border-gray-800">

                    <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button class="text-red-400 hover:text-red-600 text-sm">
                    Déconnexion
                    </button>

                    </form>

                </div>

            </aside>


            <!-- CONTENU -->

            <div class="flex-1 flex flex-col overflow-y-auto  min-h-0">

                <!-- NAVBAR -->

                <header class="h-16 bg-black border-b border-gray-800 flex items-center justify-between px-8  sticky top-0 z-10">

                <h1 class="text-[#D4AF37] font-semibold text-lg">
                {{ $header ?? 'Tableau de bord' }}
                </h1>

                <div class="text-sm text-gray-300">
                {{ Auth::user()->name }}
                </div>

                </header>


                <!-- PAGE -->

                <main class="flex-1 p-8">

                {{ $slot }}

                </main>

            </div>

        </div>

    </body>

</html>