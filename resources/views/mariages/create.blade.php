<x-app-layout>

    <div class="max-w-xl mx-auto p-6">

        <h1 class="text-3xl font-bold mb-6 gold">
        Ajouter un mariage
        </h1>

        @if ($errors->any())
        <div class="bg-red-500 p-3 rounded mb-4">

        @foreach ($errors->all() as $error)
        <div>{{ $error }}</div>
        @endforeach

        </div>
        @endif

        <div class="bg-[#1f1f1f] p-6 rounded-lg">

            <form method="POST" action="/mariages">

                @csrf

                <select name="client_id"
                class="w-full bg-black border border-gray-600 p-3 rounded mb-4">

                @foreach($clients as $client)

                <option value="{{ $client->id }}">
                {{ $client->nom }}
                </option>

                @endforeach

                </select>

                <input name="nom_marie"
                placeholder="Nom du marié"
                class="w-full bg-black border border-gray-600 p-3 rounded mb-4">

                <input name="nom_mariee"
                placeholder="Nom de la mariée"
                class="w-full bg-black border border-gray-600 p-3 rounded mb-4">

                <input type="date"
                name="date_mariage"
                class="w-full bg-black border border-gray-600 p-3 rounded mb-4">

                <input name="lieu"
                placeholder="Lieu du mariage"
                class="w-full bg-black border border-gray-600 p-3 rounded mb-4">

                <input name="budget"
                placeholder="Budget"
                class="w-full bg-black border border-gray-600 p-3 rounded mb-4">

                <input name="nombre_invites"
                placeholder="Nombre d'invités"
                class="w-full bg-black border border-gray-600 p-3 rounded mb-4">

                <select name="status"
                class="w-full bg-black border border-gray-600 p-3 rounded mb-4">

                <option value="en_attente">En attente</option>
                <option value="confirme">Confirmé</option>
                <option value="termine">Terminé</option>

                </select>

                <textarea name="description"
                placeholder="Description du mariage"
                class="w-full bg-black border border-gray-600 p-3 rounded mb-4">
                </textarea>

                <button
                class="bg-[#D4AF37] text-black px-6 py-2 rounded font-semibold">
                Enregistrer
                </button>

            </form>

        </div>

    </div>

</x-app-layout>