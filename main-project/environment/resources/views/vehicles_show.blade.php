<!DOCTYPE html>
<html lang="pt-br">

<head>
    @include('includes.head')
    <link rel="stylesheet" href="{{ asset('assets/css/vehicle.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
</head>

<body>
    @include('includes.header')

    <div class="main-wrapper">
        @include('includes.sidebar')

        <h2>Veículo - {{ $vehicle->nome }}</h2>

        <form action="{{ route('vehicles.destroy', ['vehicle' => $vehicle->id]) }}" method="post">
            @csrf
            <section class="delete-container">
                <h3>Deseja excluir o veículo?</h3>
                <input type="hidden" name="_method" value="DELETE">
                <div class="delete-confirm-container">
                    <button type="submit" class="delete-agree-button">
                        Sim
                    </button>
                    <a href="{{ route('home') }}" class="delete-refuse-button">
                        Não
                    </a>
                </div>
            </section>
        </form>
    </div>
</body>

</html>