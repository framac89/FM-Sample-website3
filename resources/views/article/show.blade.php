<x-layout>

 
    <div class="container-fluid sfondoarticoli">
        <div class="row">
            <div class="col-12 text-center my-2 bg-warning">
    
            <h1>{{$article->title}}</h1>
    
            </div>

            <div class="col-12 d-flex justify-content-center align-items-center">
                <div class="card d-flex justify-content-center my-1 sfondocard" style="width: 18rem;">
                    <img src="{{Storage::url($article->img)}}" class="card-img-top" alt="{{$article->title}}">
                    <div class="card-body">
                    </div>
                    <div class="mb-2">
                        <p class="card-text px-3">{{$article->body}}</p>
                    <a href="{{route('article.index')}}" class="btn btn-success m-1">Torna indietro</a>
                    @auth
                    <a class="nomeaut" href="{{route('article.edit',[$article])}}" class="btn btn-warning">Edita</a>
                    <a href="" class="btn btn-danger" onclick="event.preventDefault(); document.querySelector('#form-delete-{{$article->id}}').submit()";>Elimina</a>
                    <form id="form-delete-{{$article->id}}" action="{{route('article.delete', $article)}}" method="POST" class="d-none">@csrf @method('DELETE')</form>
                    @endauth
                    </div>
                  </div>
                    </div>
                  </div>
                
            </div>
 
        </div>
    </div>
    

</x-layout>

