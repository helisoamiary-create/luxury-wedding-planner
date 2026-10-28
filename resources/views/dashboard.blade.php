<x-app-layout>

    <x-slot name="header">
    Dashboard
    </x-slot>

    <h1 class="text-3xl text-[#D4AF37] font-bold mb-8">
    Tableau de bord
    </h1>

    <!-- STATISTIQUES -->

    <div class="grid grid-cols-3 gap-6 mb-10">

        <div class="bg-[#1a1a1a] p-6 rounded-xl border border-gray-800 hover:border-[#D4AF37] transition">
            <h3 class="text-[#D4AF37] text-sm">Clients</h3>
            <p class="text-2xl text-gray mt-2">{{ $clients }}</p>
        </div>

        <div class="bg-[#1a1a1a] p-6 rounded-xl border border-gray-800 hover:border-[#D4AF37] transition">
            <h3 class="text-[#D4AF37] text-sm">Mariages</h3>
            <p class="text-2xl text-gray mt-2">{{ $mariages }}</p>
        </div>

        <div class="bg-[#1a1a1a] p-6 rounded-xl border border-gray-800 hover:border-[#D4AF37] transition">
            <h3 class="text-[#D4AF37] text-sm">Budget total</h3>
            <p class="text-2xl text-gray mt-2">
            {{ number_format($budget) }} MGA
            </p>
        </div>

    </div>


    <!-- PROCHAINS MARIAGES -->
    <br>
    <h2 class="text-xl text-[#D4AF37] font-semibold mb-4">
        Prochains mariages
    </h2>

    <div class="bg-[#1f1f1f] rounded-lg p-6">

        @forelse($prochains as $m)

            <div class="flex justify-between border-b border-gray-700 py-3">

            <div>
            {{ $m->nom_marie }} & {{ $m->nom_mariee }}
            </div>

            <div class="text-gray-400">
            {{ $m->date_mariage }}
            </div>

            </div>

        @empty

            <p class="text-gray-400">
            Aucun mariage prévu
            </p>

        @endforelse

    </div>

</x-app-layout>