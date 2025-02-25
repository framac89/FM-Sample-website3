<x-layout>

<div class="container  bg-warning">
    <div class="row">
        <div class="col-12 text-center my-2 py-2 crearticolo">
        <h1>Creazione di un Articolo</h1>
        </div>
        <div class="col-12">
            <form method="POST" action="{{route('article.store')}}" enctype="multipart/form-data">
                @csrf

                <label for="title" class="form-label">Inserisci il Titolo</label>
                <input type="text" name="title" value="{{old('title')}}" class="form-control" id="title" aria-describedby="titolo">
                <label for="name" class="form-label">Inserisci il testo dell'articolo</label>
                <textarea name="body" id="body" class="form-control" cols="20"
                rows="5">{{old('body')}}</textarea>
                <label for="img" class="form-label text-danger-emphasis display-7">Vuoi aggiungere un'immagine?</label>
                <input type="file" name="img" id="img" class="form-control">
                <button type="submit" class="btn btn-success my-3">Invia</button>
            </form>
        </div>
    </div>
</div>


</x-layout>