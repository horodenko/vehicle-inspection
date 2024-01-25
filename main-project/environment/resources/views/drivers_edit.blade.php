<!DOCTYPE html>
<html lang="pt-br">

<head>
    @include('includes.head')
    <link rel="stylesheet" href="{{ asset('assets/css/driver.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
</head>

<body>
    @include('includes.header')

    <div class="main-wrapper">
        @include('includes.sidebar')

        <div class="main-container">
            <h1 class="form-header">Cadastro de Motoristas</h1>
            <form action="{{ route('drivers.update', ['driver' => $driver->id]) }}" method="post">
                @csrf
                <fieldset class="field-set">
                    <input type="hidden" name="_method" value="PUT">
                    <div class="form-fields">
                        <label for="nome">Nome</label>
                        <input type="text" id="nome" name="nome" placeholder="Digite seu nome" value="{{ $driver->nome }}">
                    </div>
                    <div class="form-fields">
                        <label for="cpf">CPF</label>
                        <input type="text" id="cpf" name="cpf" placeholder="Digite seu CPF" value="{{ $driver->cpf }}">
                    </div>
                    <div class="form-fields">
                        <label for="rg">RG</label>
                        <input type="text" id="rg" name="rg" placeholder="Digite seu RG" value="{{ $driver->rg }}">
                    </div>
                </fieldset>

                <div class="submit-driver-container">
                    <button class="submit-button" type="submit">
                        <span>
                            Salvar
                        </span>
                    </button>
                    <a href="{{route('home')}}" class="return-button">
                        Voltar
                    </a>
                </div>

                @if (session()->has('message'))
                {{ session()->get('message') }}
                @endif
            </form>
        </div>
    </div>

    @if (session()->has('message'))
    <script>
        setTimeout(() => {
            window.location.href = '/'
        }, 2000);
    </script>
    @endif
</body>

</html>