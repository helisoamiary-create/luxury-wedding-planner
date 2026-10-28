<x-app-layout>

    <div class="max-w-xl mx-auto p-6">

        <h1 class="text-3xl font-bold mb-6 text-[#D4AF37]">
        Modifier client
        </h1>

        <div class="bg-[#1f1f1f] p-6 rounded-lg">

            <form method="POST" action="/clients/{{ $client->id }}">

                @csrf
                @method('PUT')

                <input name="nom"
                value="{{ $client->nom }}"
                class="w-full bg-[#0f0f0f] border border-gray-600 p-3 rounded mb-4 text-white">

                <input name="email"
                value="{{ $client->email }}"
                class="w-full bg-[#0f0f0f] border border-gray-600 p-3 rounded mb-4 text-white">

                <input name="telephone"
                value="{{ $client->telephone }}"
                class="w-full bg-[#0f0f0f] border border-gray-600 p-3 rounded mb-4 text-white">

                <input name="adresse"
                value="{{ $client->adresse }}"
                class="w-full bg-[#0f0f0f] border border-gray-600 p-3 rounded mb-4 text-white">

                <button
                class="bg-[#D4AF37] text-black px-6 py-2 rounded font-semibold">
                Modifier
                </button>

            </form>

        </div>

    </div>

</x-app-layout>