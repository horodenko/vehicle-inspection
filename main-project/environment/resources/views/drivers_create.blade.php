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
            <form action="{{ route('drivers.store') }}" method="post">
                @csrf
                <fieldset class="field-set">
                    <div class="form-fields">
                        <label for="nome">Nome</label>
                        <input type="text" id="nome" name="nome" placeholder="Digite seu nome">
                    </div>
                    <div class="form-fields">
                        <label for="cpf">CPF</label>
                        <input type="text" id="cpf" name="cpf" placeholder="Digite seu CPF">
                    </div>
                    <div class="form-fields">
                        <label for="rg">RG</label>
                        <input type="text" id="rg" name="rg" placeholder="Digite seu RG">
                    </div>
                </fieldset>

                <div class="submit-driver-container">
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
    </div>

    @if (session()->has('message'))
    <script>
        setTimeout(() => {
            window.location.href = '/'
        }, 2000);
    </script>
    @endif

    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>

    {!! JsValidator::formRequest('App\Http\Requests\SendRequest') !!} -->
</body>

</html>