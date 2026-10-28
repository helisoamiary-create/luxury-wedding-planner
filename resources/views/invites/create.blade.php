<x-app-layout>

    <div class="max-w-xl mx-auto p-6">

        <h1 class="text-3xl font-bold mb-6 gold">
        Ajouter un invité
        </h1>

        <div class="bg-[#1f1f1f] p-6 rounded-lg">

            <form method="POST" action="/invites">

                @csrf

                <select name="mariage_id"
                class="w-full bg-black border border-gray-600 p-3 rounded mb-4">

                    @foreach($mariages as $mariage)

                        <option value="{{ $mariage->id }}">
                        {{ $mariage->nom_marie }} & {{ $mariage->nom_mariee }}
                        </option>

                    @endforeach

                </select>

                <input name="nom"
                placeholder="Nom invité"
                class="w-full bg-black border border-gray-600 p-3 rounded mb-4">

                <input name="email"
                placeholder="Email"
                class="w-full bg-black border border-gray-600 p-3 rounded mb-4">

                <input name="telephone"
                placeholder="Téléphone"
                class="w-full bg-black border border-gray-600 p-3 rounded mb-4">

                <select name="presence"
                class="w-full bg-black border border-gray-600 p-3 rounded mb-4">

                    <option value="en_attente">En attente</option>
                    <option value="confirme">Confirmé</option>
                    <option value="refuse">Refusé</option>

                </select>

                <button class="btn-gold">
                    Enregistrer
                </button>

            </form>

        </div>

    </div>

</x-app-layout>