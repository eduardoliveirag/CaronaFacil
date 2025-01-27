@extends('layouts.app')

@section('content')
<style>
    .container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
    }

    h1 {
        text-align: center;
        margin-bottom: 20px;
        font-size: 1.8rem;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
        font-size: 1rem;
    }

    .form-control, 
    #vagas {
        width: 100%;
        padding: 10px;
        font-size: 1rem;
        border-radius: 5px;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    .btn {
        display: block;
        width: 100%;
        padding: 10px;
        font-size: 1.2rem;
        font-weight: bold;
        color: white;
        background-color: #007bff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        text-align: center;
        text-decoration: none;
    }

    .btn:hover {
        background-color: #0056b3;
    }

    .btn-back {
        background-color: #6c757d;
        margin-bottom: 15px;
    }

    .btn-back:hover {
        background-color: #5a6268;
    }

    @media (max-width: 768px) {
        h1 {
            font-size: 1.5rem;
        }

        .form-control, 
        #vagas {
            font-size: 0.9rem;
            padding: 8px;
        }

        .btn {
            font-size: 1rem;
            padding: 8px;
        }
    }
</style>

<div class="container">
    <h1>Reservar Nova Carona</h1>

    <!-- Botão de Voltar -->
    <a href="{{ route('reservas.store') }}" class="btn btn-back">Voltar para a Tela Inicial</a>

    <form action="{{ route('reservas.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="carona_id">Carona</label>
            <select name="carona_id" id="carona_id" class="form-control" required>
                @if($caronas->isEmpty())
                    <option value="" disabled selected>Não há caronas disponíveis</option>
                @else
                    @foreach($caronas as $carona)
                        <option value="{{ $carona->id }}">
                            Origem: {{ $carona->origem }} - Destino: {{ $carona->destino }} - Data: {{ $carona->data_hora }}
                        </option>
                    @endforeach
                @endif
            </select>
        </div>

        <div class="form-group">
            <label for="vagas">Vagas</label>
            @if(!$caronas->isEmpty() && $carona->vagas > 0)
                <input type="number" name="vagas" id="vagas" class="form-control" placeholder="Quantidade de vagas" min="1" max="{{ $carona->vagas }}" required>
            @else
                <input type="number" name="vagas" id="vagas" class="form-control" placeholder="Quantidade de vagas" min="1" max="0" disabled>
            @endif
        </div>

        @if(!$caronas->isEmpty() && $carona->vagas > 0)
            <button type="submit" class="btn btn-primary">Reservar</button>
        @else
            <div class="alert alert-warning">Infelizmente, não há vagas disponíveis para esta carona.</div>
        @endif

    </form>
</div>
@endsection
