<x-app-layout>

    <div class="max-w-xl mx-auto">

        <h1 class="text-3xl text-[#D4AF37] mb-6">
        Nouvelle table
        </h1>

        <div class="bg-[#1f1f1f] p-6 rounded-lg">

            <form method="POST" action="/tables">

            @csrf

            <select name="mariage_id" class="w-full p-3 mb-4 bg-black border border-gray-600">

            @foreach($mariages as $mariage)

            <option value="{{ $mariage->id }}">
            {{ $mariage->nom_marie }} & {{ $mariage->nom_mariee }}
            </option>

            @endforeach

            </select>

            <input type="text" name="nom_table"
            placeholder="Nom de la table"
            class="w-full p-3 mb-4 bg-black border border-gray-600">

            <input type="number" name="capacite"
            placeholder="Capacité"
            class="w-full p-3 mb-4 bg-black border border-gray-600">

            <button class="btn-gold">
            Créer
            </button>

            </form>

        </div>

    </div>

</x-app-layout>