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
                <h1> ACCEDI</h1>
            </div>
            <div class="col-12 d-flex justify-content-center">

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <label for="email" class="form-label">Inserisci la tua Email</label>
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="email">

                    <label for="password" class="form-label">Inserisci la tua Password</label>
                    <input type="password" name="password" class="form-control" id="password">

                    <div class="mt-3 d-flex justify-content-center">
                        <button type="submit" class="btn btn-success">Accedi</button>
                    </div>

                </form>

            </div>
        </div>
    </div>






</x-layout>
