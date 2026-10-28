<x-app-layout>

    <x-slot name="header">
    Modifier prestataire
    </x-slot>

    <div class="max-w-xl mx-auto p-6">

        <div class="bg-[#1f1f1f] p-6 rounded-lg">

            <form method="POST" action="{{ route('prestataires.update', $prestataire) }}">

                @csrf
                @method('PUT')

                <!-- NOM -->

                <label class="block text-sm text-gray-400 mb-1">
                Nom du prestataire
                </label>

                <input type="text"
                name="nom"
                value="{{ $prestataire->nom }}"
                class="w-full p-3 mb-4 bg-black border border-gray-600 rounded">


                <!-- TYPE -->

                <label class="block text-sm text-gray-400 mb-1">
                Type
                </label>

                <select name="type"
                class="w-full p-3 mb-4 bg-black border border-gray-600 rounded">

                <option value="Traiteur"
                @if($prestataire->type == 'Traiteur') selected @endif>
                Traiteur
                </option>

                <option value="Photographe"
                @if($prestataire->type == 'Photographe') selected @endif>
                Photographe
                </option>

                <option value="DJ"
                @if($prestataire->type == 'DJ') selected @endif>
                DJ
                </option>

                <option value="Salle"
                @if($prestataire->type == 'Salle') selected @endif>
                Salle
                </option>

                <option value="Décorateur"
                @if($prestataire->type == 'Décorateur') selected @endif>
                Décorateur
                </option>

                </select>


                <!-- TELEPHONE -->

                <label class="block text-sm text-gray-400 mb-1">
                Téléphone
                </label>

                <input type="text"
                name="telephone"
                value="{{ $prestataire->telephone }}"
                class="w-full p-3 mb-4 bg-black border border-gray-600 rounded">


                <!-- EMAIL -->

                <label class="block text-sm text-gray-400 mb-1">
                Email
                </label>

                <input type="email"
                name="email"
                value="{{ $prestataire->email }}"
                class="w-full p-3 mb-4 bg-black border border-gray-600 rounded">


                <!-- PRIX -->

                <label class="block text-sm text-gray-400 mb-1">
                Prix
                </label>

                <input type="number"
                name="prix"
                value="{{ $prestataire->prix }}"
                class="w-full p-3 mb-6 bg-black border border-gray-600 rounded">


                <!-- BOUTONS -->

                <div class="flex justify-between">

                <a href="/prestataires"
                class="px-4 py-2 bg-gray-700 rounded hover:bg-gray-600">
                Annuler
                </a>

                <button class="btn-gold">
                Mettre à jour
                </button>

                </div>

            </form>

        </div>

    </div>

</x-app-layout>