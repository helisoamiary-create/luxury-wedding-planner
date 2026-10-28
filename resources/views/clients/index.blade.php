<x-app-layout>

    <x-slot name="header">
    Clients
    </x-slot>

    <div class="max-w-7xl mx-auto p-6">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold mb-6 text-[#D4AF37]">
            Liste des Clients :
            </h1>

            <a href="/clients/create"
            class="btn-gold">
            Ajouter un client
            </a>
        </div>
        

        <div class="mt-6 bg-[#1f1f1f] rounded-lg p-6">

            <table class="w-full text-left">

            <thead class="border-b border-gray-600 text-[#D4AF37]">
            <tr>
            <th class="p-3 text-center">Nom</th>
            <th class="text-center">Email</th>
            <th class="text-center">Téléphone</th>
            <th class="text-center">Adresse</th>
            <th class="text-center">Actions</th>
            </tr>
            </thead>

            <tbody>

            @foreach($clients as $client)

            <tr class="border-b border-gray-700">

            <td class="p-3 text-center">{{ $client->nom }}</td>

            <td class="text-center">{{ $client->email }}</td>

            <td class="text-center">{{ $client->telephone }}</td>

            <td class="text-center">{{ $client->adresse }}</td>

            <td class="space-x-3">

            <a href="/clients/{{ $client->id }}/edit"
            class="px-3 py-1 bg-[#2a2a2a] hover:bg-[#D4AF37] hover:text-black rounded">
            Modifier
            </a>

            <form action="/clients/{{ $client->id }}" method="POST" class="inline">

            @csrf
            @method('DELETE')

            <button class="px-3 py-1 bg-red-700 hover:bg-red-600 rounded ">
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