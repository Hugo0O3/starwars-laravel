<section class="container">
    <h1>Créer un nouveau personnage</h1>

    <form action="{{ route('personnage.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <section class="form-group">
            <label for="nom">Nom du personnage</label>
            <input type="text" class="form-control" id="nom" name="nom" required placeholder="Nom du personnage"
                   value="{{ old('nom') }}">
        </section>

        <section class="form-group">
            <label for="image">Image (optionnel)</label>
            <input type="file" id="image" name="image">
        </section>

        <button type="submit">Créer le personnage</button>

        <a href="{{ ('/') }}">Annuler</a>
    </form>
</section>
