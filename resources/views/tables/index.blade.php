<x-app-layout>

    <div class="flex justify-between mb-6">

            <h1 class="text-3xl text-[#D4AF37] font-bold">
            Tables
            </h1>

            <a href="/tables/create" class="btn-gold">
            Ajouter table
            </a>

    </div>

    <div class="bg-[#1f1f1f] p-6 rounded-lg">

        <table class="w-full text-sm">

            <thead class="text-[#D4AF37] border-b border-gray-700">

                <tr>
                <th class="p-3">Nom</th>
                <th>Mariage</th>
                <th>Capacité</th>
                </tr>

            </thead>

            <tbody>

                @foreach($tables as $table)

                <tr class="border-b border-gray-700">

                <td class="text-center p-3">{{ $table->nom_table }}</td>

                <td class="text-center">
                {{ $table->mariage->nom_marie }}
                &
                {{ $table->mariage->nom_mariee }}
                </td>

                <td class="text-center">{{ $table->capacite }}</td>

                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</x-app-layout>