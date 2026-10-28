<x-app-layout>

    <x-slot name="header">
    Invités
    </x-slot>

    <div class="flex justify-between mb-6">

        <h1 class="text-3xl text-[#D4AF37] font-bold">
        Liste des invités
        </h1>

        <a href="/invites/create" class="btn-gold">
        Ajouter un invité
        </a>

    </div>

    <div class="bg-[#1f1f1f] p-6 rounded-lg">

        <table class="w-full text-sm">

            <thead class="text-[#D4AF37] border-b border-gray-700">
                <tr>
                    <th class="p-3">Nom</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Mariage</th>
                    <th>Présence</th>
                </tr>
            </thead>

            <tbody>

                @foreach($invites as $invite)

                    <tr class="border-b border-gray-700 hover:bg-[#1a1a1a]">

                        <td class="text-center p-3">{{ $invite->nom }}</td>

                        <td class="text-center">{{ $invite->email }}</td>

                        <td class="text-center">{{ $invite->telephone }}</td>

                        <td class="text-center">
                        {{ $invite->mariage->nom_marie }} & {{ $invite->mariage->nom_mariee }}
                        </td>

                        <td class="text-center">

                            @if($invite->presence == 'confirme')

                                <span class="text-green-400">Confirmé</span>

                            @elseif($invite->presence == 'refuse')

                                <span class="text-red-400">Refusé</span>

                            @else

                                <span class="text-yellow-400">En attente</span>

                            @endif

                        </td>

                    </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</x-app-layout>