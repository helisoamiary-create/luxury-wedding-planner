<x-app-layout>

    <x-slot name="header">
    Ajouter prestataire
    </x-slot>

    <div class="max-w-xl mx-auto p-6">

        <form method="POST" action="/prestataires">

            @csrf

            <input type="text"
            name="nom"
            placeholder="Nom du prestataire"
            class="w-full p-3 mb-4 bg-black border border-gray-600">

            <select name="type"
            class="w-full p-3 mb-4 bg-black border border-gray-600">

            <option>Traiteur</option>
            <option>Photographe</option>
            <option>DJ</option>
            <option>Salle</option>
            <option>Décorateur</option>

            </select>

            <input type="text"
            name="telephone"
            placeholder="Téléphone"
            class="w-full p-3 mb-4 bg-black border border-gray-600">

            <input type="email"
            name="email"
            placeholder="Email"
            class="w-full p-3 mb-4 bg-black border border-gray-600">

            <input type="number"
            name="prix"
            placeholder="Prix"
            class="w-full p-3 mb-4 bg-black border border-gray-600">

            <button class="btn-gold">
            Enregistrer
            </button>

        </form>

    </div>

</x-app-layout>