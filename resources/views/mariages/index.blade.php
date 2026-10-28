<x-app-layout>

    <x-slot name="header">
    Mariages
    </x-slot>

    <div class="max-w-7xl mx-auto p-6">
        <div class="flex justify-between items-center mb-6">

            <h1 class="text-3xl text-[#D4AF37] font-bold">
            Liste des Mariages :
            </h1>


            <a href="/mariages/create"
            class="btn-gold">
            Ajouter un mariage
            </a>

        </div>

        <div class="bg-[#1f1f1f] p-6 rounded-lg overflow-x-auto">

            <table class="min-w-full min-w-[900px] table-auto w-full text-sm">

                <thead class="text-[#D4AF37]">
                    <tr>
                    <th class="p-4 text-center">Marié</th>
                    <th class="p-4 text-center">Mariée</th>
                    <th class="p-4 text-center">Date</th>
                    <th class="p-4 text-center">Lieu</th>
                    <th class="p-4 text-center">Budget</th>
                    <th class="p-4 text-center">Actions</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach($mariages as $mariage)

                        <tr class="text-center border-b border-gray-700">

                        <td class="p-3 whitespace-nowrap text-center">{{ $mariage->nom_marie }}</td>

                        <td class="p-3 whitespace-nowrap text-center">{{ $mariage->nom_mariee }}</td>

                        <td class="p-3 whitespace-nowrap text-center">{{ $mariage->date_mariage }}</td>

                        <td class="p-3 whitespace-nowrap text-center">{{ $mariage->lieu }}</td>

                        <td class="p-3 whitespace-nowrap text-center">{{ number_format($mariage->budget) }} MGA</td>

                        <td class="p-3 whitespace-nowrap text-center space-x-2">

                            <a href="{{ route('mariages.edit',$mariage) }}"
                            class="px-3 py-1 bg-[#2a2a2a] hover:bg-[#D4AF37] hover:text-black rounded">
                            Modifier
                            </a>

                            <a href="{{ route('mariages.show',$mariage) }}"
                            class="px-3 py-1 bg-[#2a2a2a] hover:bg-[#D4AF37] hover:text-black rounded">
                            Voir détails
                            </a>

                        </td>

                        </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>
</x-app-layout>