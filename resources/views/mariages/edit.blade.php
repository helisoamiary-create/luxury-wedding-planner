<x-app-layout>

    <div class="max-w-xl mx-auto">

        <h1 class="text-3xl text-[#D4AF37] mb-6">
        Modifier mariage
        </h1>

        <div class="bg-[#1f1f1f] p-6 rounded-lg">

            <form method="POST" action="/mariages/{{ $mariage->id }}">

                @csrf
                @method('PUT')

                <select name="client_id"
                    class="w-full p-3 mb-4 bg-black border border-gray-600">

                    @foreach($clients as $client)

                        <option value="{{ $client->id }}"
                        @if($client->id == $mariage->client_id) selected @endif>

                        {{ $client->nom }}

                        </option>

                    @endforeach

                </select>

                <input type="text"
                name="nom_marie"
                value="{{ $mariage->nom_marie }}"
                class="w-full p-3 mb-4 bg-black border border-gray-600">

                <input type="text"
                name="nom_mariee"
                value="{{ $mariage->nom_mariee }}"
                class="w-full p-3 mb-4 bg-black border border-gray-600">

                <input type="date"
                name="date_mariage"
                value="{{ $mariage->date_mariage }}"
                class="w-full p-3 mb-4 bg-black border border-gray-600">

                <input type="text"
                name="lieu"
                value="{{ $mariage->lieu }}"
                class="w-full p-3 mb-4 bg-black border border-gray-600">

                <input type="number"
                name="budget"
                value="{{ $mariage->budget }}"
                class="w-full p-3 mb-4 bg-black border border-gray-600">

                <input type="number"
                name="nombre_invites"
                value="{{ $mariage->nombre_invites }}"
                placeholder="Nombre d'invités"
                class="w-full p-3 mb-4 bg-black border border-gray-600">

                <select name="status"
                    class="w-full p-3 mb-4 bg-black border border-gray-600">

                    <option value="planifie"
                    @if($mariage->status == 'planifie') selected @endif>
                    Planifié
                    </option>

                    <option value="en_preparation"
                    @if($mariage->status == 'en_preparation') selected @endif>
                    En préparation
                    </option>

                    <option value="termine"
                    @if($mariage->status == 'termine') selected @endif>
                    Terminé
                    </option>

                    <option value="annule"
                    @if($mariage->status == 'annule') selected @endif>
                    Annulé
                    </option>

                </select>

                <div class="mt-8">

                    <h2 class="text-xl text-[#D4AF37] mb-4">
                    Prestataires du mariage
                    </h2>

                    <div class="grid grid-cols-2 gap-4">

                        @foreach($prestataires as $prestataire)

                        <label class="flex items-center space-x-3 bg-black p-3 rounded border border-gray-700">

                        <input type="checkbox"
                        name="prestataires[]"
                        value="{{ $prestataire->id }}"

                        {{ $mariage->prestataires->contains($prestataire->id) ? 'checked' : '' }}

                        class="accent-yellow-500">

                        <span>
                        {{ $prestataire->nom }} ({{ $prestataire->type }})
                        </span>

                        </label>

                        @endforeach

                    </div>
    
                </div>
                
                <button class="btn-gold">
                    Mettre à jour
                </button>

            </form>

        </div>

    </div>

</x-app-layout>