<x-layout>

    <div class="container  bg-warning">
        <div class="row">
            <div class="col-12 text-center my-2 py-2 crearticolo">
            <h1>Edita {{$article->title}}</h1>
            </div>
            <div class="col-12">
                <form method="POST" action="{{route('article.update',$article)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <label for="title" class="form-label">Vuoi cambiare il titolo?</label>
                    <input type="text" name="title" value="{{$article->title}}" class="form-control" id="title" aria-describedby="titolo">
                    <label for="name" class="form-label">Qui puoi modificare il testo</label>
                    <textarea name="body" id="body" class="form-control" cols="20"
                    rows="5">{{$article->body}}</textarea>
                    <label for="img" class="form-label text-danger-emphasis display-7">Vuoi modificare l'immagine?</label>
                    <input type="file" name="img" id="img" class="form-control">
                    <button type="submit" class="btn btn-danger my-3">Invia</button>
                    <a href="{{route('article.index')}}" class="btn btn-success m-1">Torna indietro</a>
                </form>
            </div>
        </div>
    </div>
    
    
    </x-layout>