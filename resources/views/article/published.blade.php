<x-layout>

    <div class="container-fluid sfondoarticoli">
        <div class="row">
            <div class="col-12 text-center my-2 bg-warning">
    
            <h1>Ecco tutti gli Articoli pubblicati da {{$user->name}}</h1>
    
            </div>
            @foreach ($user->articles as $article)
            <div class="col-12 col-lg-4 col-md-6 d-flex justify-content-center align-items-center">
                <div class="card d-flex flex-column justify-content-center my-1 sfondocard" style="width: 18rem;">
                    <img src="{{$article->img ? asset('storage/' . $article->img) : asset('images/default.jpg')}}" class="card-img-top" alt="{{$article->title}}">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                      <h6 class="creat"> Creato da: </h6>
                      <h5 class="mx-auto nomeaut"><a class="nomeaut" href="{{route('article.published',[$article->user])}}">{{$article->user->name}}</a></h5>
                      </div>
                      <h3 class="card-title text-center">{{$article->title}}</h3>
                    </div>
                    <div class="mb-2">
                    <a href="{{route('article.show',[$article])}}" class="btn btn-success">Approfondisci</a>
                    @auth
                        
                   
                    <a href="{{route('article.edit',[$article])}}" class="btn btn-warning">Edita</a>
                    <a href="" class="btn btn-danger" onclick="event.preventDefault(); document.querySelector('#form-delete-{{$article->id}}').submit()";>Elimina</a>
                    <form id="form-delete-{{$article->id}}" action="{{route('article.delete', $article)}}" method="POST" class="d-none">@csrf @method('DELETE')</form>
    
                    @endauth
                    </div>
                  </div>
                
            </div>
            @endforeach
        </div>
    </div>
    
    </x-layout>