<x-app-layout>

    <div class="max-w-xl mx-auto p-6">

        <h1 class="text-3xl font-bold mb-6 text-[#D4AF37]">
        Ajouter un client
        </h1>

        <div class="bg-[#1f1f1f] p-6 rounded-lg">

            <form method="POST" action="/clients">

                @csrf

                <input name="nom"
                placeholder="Nom complet"
                class="w-full bg-[#0f0f0f] border border-gray-600 p-3 rounded mb-4 text-white">

                <input name="email"
                placeholder="Email"
                class="w-full bg-[#0f0f0f] border border-gray-600 p-3 rounded mb-4 text-white">

                <input name="telephone"
                placeholder="Téléphone"
                class="w-full bg-[#0f0f0f] border border-gray-600 p-3 rounded mb-4 text-white">

                <input name="adresse"
                placeholder="Adresse"
                class="w-full bg-[#0f0f0f] border border-gray-600 p-3 rounded mb-4 text-white">

                <button
                class="bg-[#D4AF37] text-black px-6 py-2 rounded font-semibold">
                Enregistrer
                </button>

            </form>

        </div>

    </div>

</x-app-layout>