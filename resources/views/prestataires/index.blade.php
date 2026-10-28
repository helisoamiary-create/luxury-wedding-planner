<x-app-layout>

    <x-slot name="header">
    Prestataires
    </x-slot>

    <div class="max-w-7xl mx-auto p-6">

        <div class="flex justify-between mb-6">

            <h1 class="text-3xl text-[#D4AF37] font-bold">
            Liste des prestataires
            </h1>

            <a href="/prestataires/create" class="btn-gold">
            Ajouter prestataire
            </a>

        </div>

        <div class="bg-[#1f1f1f] p-6 rounded-lg overflow-x-auto">

            <table class="min-w-full text-sm">

                <thead class="text-[#D4AF37] border-b border-gray-700">

                    <tr>
                    <th class="p-3">Nom</th>
                    <th>Type</th>
                    <th>Téléphone</th>
                    <th>Email</th>
                    <th>Prix</th>
                    <th>Actions</th>
                    </tr>

                </thead>

                <tbody>

                    @foreach($prestataires as $prestataire)

                        <tr class="border-b border-gray-700 text-center">

                        <td class="p-3">{{ $prestataire->nom }}</td>
                        <td>{{ $prestataire->type }}</td>
                        <td>{{ $prestataire->telephone }}</td>
                        <td>{{ $prestataire->email }}</td>
                        <td>{{ number_format($prestataire->prix) }} MGA</td>

                        <td class="space-x-2">

                        <a href="{{ route('prestataires.edit',$prestataire) }}"
                        class="px-3 py-1 bg-gray-700 rounded">
                        Modifier
                        </a>

                        <form action="{{ route('prestataires.destroy',$prestataire) }}"
                        method="POST"
                        class="inline">

                        @csrf
                        @method('DELETE')

                        <button class="px-3 py-1 bg-red-600 rounded">
                        Supprimer
                        </button>

                        </form>

                        </td>

                        </tr>

                    @endforeach

                </tbody>

                </table>

        </div>

    </div>

</x-app-layout>