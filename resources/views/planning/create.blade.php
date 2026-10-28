<x-app-layout>

    <h1 class="text-3xl text-[#D4AF37] mb-6">
    Ajouter planning
    </h1>

    <form method="POST" action="/planning">
        @csrf

        <select name="mariage_id" class="w-full mb-4 p-3 bg-black border">
            @foreach($mariages as $mariage)
            <option value="{{ $mariage->id }}">
            {{ $mariage->nom_marie }} & {{ $mariage->nom_mariee }}
            </option>
            @endforeach
        </select>

        <input type="time" name="heure"
        class="w-full mb-4 p-3 bg-black border">

        <input type="text" name="evenement"
        placeholder="Ex: Cérémonie"
        class="w-full mb-4 p-3 bg-black border">

        <button class="btn-gold">Enregistrer</button>

    </form>

</x-app-layout>