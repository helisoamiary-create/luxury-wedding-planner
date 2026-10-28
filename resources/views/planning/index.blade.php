<x-app-layout>

    <div class="flex justify-between mb-6">

        <h1 class="text-3xl text-[#D4AF37] font-bold">
        Planning
        </h1>

        <a href="/planning/create" class="btn-gold">
        Ajouter
        </a>

        </div>

        <div class="bg-[#1f1f1f] p-6 rounded-lg">

            <table class="w-full text-sm">

                <thead class="text-[#D4AF37]">
                <tr>
                <th>Heure</th>
                <th>Evénement</th>
                <th>Mariage</th>
                </tr>
                </thead>

                <tbody>

                @foreach($plannings as $p)

                <tr class="border-b border-gray-700 text-center">

                <td>{{ $p->heure }}</td>
                <td>{{ $p->evenement }}</td>
                <td>
                {{ $p->mariage->nom_marie }} & {{ $p->mariage->nom_mariee }}
                </td>

                </tr>

                @endforeach

                </tbody>

            </table>

    </div>

</x-app-layout>