<!DOCTYPE html>
<html lang="pt-br">

<head>
    @include('includes.head')
    <link rel="stylesheet" href="{{ asset('assets/css/entities.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
</head>

<body>
    @include('includes.header')

    <div class="main-wrapper">
        @include('includes.sidebar')

        <div class="main-container">
            <h1 class="form-header">Cadastro de Veículo</h1>
            <form action="{{ route('vehicles.store') }}" method="post">
                @csrf
                <fieldset class="field-set">
                    <div class="form-fields">
                        <label for="tipo_veiculo">Tipo de Veículo</label>
                        <input type="text" id="tipo_veiculo" name="tipo_veiculo" placeholder="Digite o tipo de veículo">
                    </div>
                    <div class="form-fields">
                        <label for="placa">Placa</label>
                        <input type="text" id="placa" name="placa" placeholder="Digite a placa">
                    </div>
                    <input type="hidden" id="id_motorista" name="id_motorista" value="{{ intval(request('driver_id')) }}">
                </fieldset>

                <div class="submit-vehicle-container">
                    <button class="submit-button" type="submit">
                        <span>
                            Cadastrar
                        </span>
                    </button>
                    <a href="{{ route('home') }}" class="return-button">
                        Voltar
                    </a>
                </div>

                @if (session()->has('message'))
                {{ session()->get('message') }}
                @endif
            </form>
        </div>
</body>

</html>