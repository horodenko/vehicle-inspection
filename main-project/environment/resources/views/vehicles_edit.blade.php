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
            <h1 class="form-header">Cadastro de Motoristas</h1>
            <form action="{{ route('vehicles.update', ['vehicle' => $vehicle->id]) }}" method="post">
                @csrf
                <fieldset class="field-set">
                    <input type="hidden" name="_method" value="PUT">
                    <div class="form-fields">
                        <label for="tipo_veiculo">tipo_veiculo</label>
                        <input type="text" id="tipo_veiculo" name="tipo_veiculo" placeholder="Digite o tipo de veículo" value="{{ $vehicle->tipo_veiculo }}">
                    </div>
                    <div class="form-fields">
                        <label for="placa">placa</label>
                        <input type="text" id="placa" name="placa" placeholder="Digite a placa" value="{{ $vehicle->placa }}">
                    </div>
                </fieldset>

                <div class="submit-vehicle-container">
                    <button class="submit-button" type="submit">
                        <span>
                            Salvar
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
    </div>
</body>

</html>