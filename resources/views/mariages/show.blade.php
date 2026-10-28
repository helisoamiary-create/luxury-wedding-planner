<x-app-layout>
    <div class="mb-8">

        <h1 class="text-3xl font-bold text-[#D4AF37]">
        Détails du mariage
        </h1>
    
        <a href="/mariages" class="text-gray-400 hover:text-white">
        ← Retour
        </a>

    </div>

    <div class="bg-[#1f1f1f] p-6 rounded-lg mb-8">

        <h2 class="text-xl text-[#D4AF37] mb-4">
        Informations
        </h2>

        <p><b>Marié :</b> {{ $mariage->nom_marie }}</p>
        <p><b>Mariée :</b> {{ $mariage->nom_mariee }}</p>
        <p><b>Date :</b> {{ \Carbon\Carbon::parse($mariage->date_mariage)->format('d/m/Y') }}</p>
        <p><b>Lieu :</b> {{ $mariage->lieu }}</p>
        <p><strong>Invités prévus :</strong> {{ $mariage->nombre_invites }}</p>
        <p><strong>Status :</strong> {{ $mariage->status }}</p>

        @if($mariage->description)
            <div class="bg-[#2a2a2a] p-4 rounded mt-4">
                <strong>Description :</strong><br>
                {{ $mariage->description }}
            </div>
        @endif

    </div>

    <h2 class="text-xl text-[#D4AF37] mt-6 mb-4">
    Prestataires
    </h2>

    @if($mariage->prestataires->isEmpty())

        <div class="text-gray-400">
        Aucun prestataire sélectionné
        </div>

    @else

        @foreach($mariage->prestataires as $p)

        <div class="flex justify-between bg-[#2a2a2a] p-3 rounded mb-2">

        <span>
        {{ $p->nom }} ({{ $p->type }})
        </span>

        <span>
        {{ number_format($p->prix) }} MGA
        </span>

        </div>

        @endforeach

    @endif
    <br><br>

    <h2 class="text-xl text-[#D4AF37] mt-6 mb-4">
    Planning
    </h2>

    @foreach($mariage->plannings as $p)

        <div class="flex justify-between bg-[#2a2a2a] p-3 rounded mb-2">

        <span>{{ $p->evenement }}</span>

        <span>{{ $p->heure }}</span>

        </div>

    @endforeach
    <br><br>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">

        <div class="bg-[#1f1f1f] p-6 rounded-lg text-center">
            <p class="text-gray-400">Invités</p>
            <p class="text-3xl text-[#D4AF37] font-bold">
            {{ $total }}
            </p>
        </div>

        <div class="bg-[#1f1f1f] p-6 rounded-lg text-center">
            <p class="text-gray-400">Confirmés</p>
            <p class="text-3xl text-green-400 font-bold">
            {{ $confirmes }}
            </p>
        </div>

        <div class="bg-[#1f1f1f] p-6 rounded-lg text-center">
            <p class="text-gray-400">En attente</p>
            <p class="text-3xl text-yellow-400 font-bold">
            {{ $attente }}
            </p>
        </div>

        <div class="bg-[#1f1f1f] p-6 rounded-lg text-center">
            <p class="text-gray-400">Refusés</p>
            <p class="text-3xl text-red-400 font-bold">
            {{ $refuses }}
            </p>
        </div>

    </div>

    <div class="flex justify-between mb-4">

        <h2 class="text-xl text-[#D4AF37]">
        Liste des invités
        </h2>

        <a href="/invites/create?mariage={{ $mariage->id }}" class="btn-gold">
        Ajouter invité
        </a>

    </div>

    <div class="bg-[#1f1f1f] p-6 rounded-lg">

        <table class="w-full text-sm">

            <thead class="border-b border-gray-700 text-[#D4AF37]">

                <tr>
                <th class="p-3">Nom</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Présence</th>
                </tr>

            </thead>

            <tbody>

                @foreach($invites as $invite)

                <tr class="border-b border-gray-700">

                <td class="p-3">{{ $invite->nom }}</td>
                <td>{{ $invite->email }}</td>
                <td>{{ $invite->telephone }}</td>
                <td>{{ $invite->presence }}</td>

                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

    <div class="mt-8 text-right">

        <button class="px-6 py-2 bg-[#D4AF37] text-black rounded hover:scale-105">

            <a href="{{ route('mariages.print', $mariage) }}"
            class="btn-gold no-print">
            Imprimer
            </a>

        </button>

    </div>
</x-app-layout>