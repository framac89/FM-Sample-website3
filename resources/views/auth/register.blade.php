<x-layout>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container bg-warning my-3">
        <div class="row">
            <div class="col-12 text-center text-success mt-3">
                <h1> REGISTRATI</h1>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <label for="name" class="form-label">Inserisci Nome</label>
                    <input type="text" name="name" class="form-control" id="name" aria-describedby="nome">

                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="email">


                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password">

                    <label for="password_confirmation" class="form-label">Conferma Password</label>
                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">



                    <div class="my-2 d-flex justify-content-center">
                        <button type="submit" class="btn btn-success">Invia</button>
                    </div>

                </form>

            </div>
        </div>
    </div>






</x-layout>
