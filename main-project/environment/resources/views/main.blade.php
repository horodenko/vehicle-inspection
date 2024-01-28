<!DOCTYPE html>
<html lang="pt-br">

<head>
    @include('includes.head')
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
</head>

<body>
    @include('includes.header')
    <div class="main-wrapper">
        @include('includes.sidebar')

        <div class="table-wrapper">
            <h1 class="main-title">Overview</h1>
            <main class="table">
                <div class="drivers-table">
                    <section class="table-body">
                        <table>
                            <thead>
                                <tr>
                                    <th class="first-cell">Nome do Motorista</th>
                                    <th>Editar</th>
                                    <th>Excluir</th>

                                    <th class="first-cell">Tipo de Veículo</th>
                                    <th>Editar</th>
                                    <th>Excluir</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($drivers) > 0)
                                @foreach ($drivers as $driver)
                                <tr>
                                    <td>{{ $driver->nome }}</td>
                                    <td>
                                        <div class="edit-cell">
                                            <a href="{{ route('drivers.edit', ['driver' => $driver->id]) }}">
                                                <i class="fa-solid fa-pen edit-cell-icon"></i>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="delete-cell">
                                            <a href="{{ route('drivers.destroy', ['driver' => $driver->id]) }}">
                                                <i class="fa-solid fa-trash delete-cell-icon"></i>
                                            </a>
                                        </div>
                                    </td>
                                    @if ($driver->existent_vehicle)
                                    <td>{{ $driver->existent_vehicle->tipo_veiculo }}</td>
                                    <td>
                                        <div class="edit-cell">
                                            <a href="{{ route('vehicles.edit', ['vehicle' => $driver->existent_vehicle->id]) }}">
                                                <i class="fa-solid fa-pen edit-cell-icon"></i>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="delete-cell">
                                            <a href="{{ route('vehicles.destroy', ['vehicle' => $driver->existent_vehicle->id]) }}">
                                                <i class="fa-solid fa-trash delete-cell-icon"></i>
                                            </a>
                                        </div>
                                    </td>
                                    @else
                                    <td>
                                        <div class="register-vehicle-container">
                                            <a href="{{ route('vehicles.create', ['driver_id' => $driver->id]) }}" class="register-vehicle-button">Cadastrar Veículo</a>
                                        </div>
                                    </td>
                                    @endif
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="5">Sem registros.</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </section>
                </div>
            </main>
        </div>
    </div>
</body>

</html>