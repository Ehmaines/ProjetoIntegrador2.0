<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Endereço</title>
</head>
<body>
    <div class="container">
        <form method="POST" action="{{route('endereco.store')}}">
            @csrf
            <div class="form-group">
                <label for="input-nome">{{__('endereco.bairro')}}</label>
                <input type="text" name="bairro" class="form-control" id="input-nome" placeholder="{{__('endereco.bairro')}}">
            </div>
            <div class="form-group">
                <label for="input-nome">{{__('endereco.logradouro')}}</label>
                <input type="text" name="logradouro" class="form-control" id="input-nome" placeholder="{{__('endereco.logradouro')}}">
            </div>
            <div class="form-group">
                <label for="input-nome">{{__('endereco.numero')}}</label>
                <input type="text" name="numero" class="form-control" id="input-nome" placeholder="{{__('endereco.numero')}}">
            </div>
            <div class="form-group">
                <label for="input-preco">{{__('endereco.complemento')}}</label>
                <input type="text" name="complemento" class="form-control" id="input-preco" placeholder="{{__('endereco.complemento')}}">
            </div>
            <div class="form-group">
                <label for="select-tipo">Tipo</label>
            </div>
            <button type="submit" class="btn btn-primary">{{__('endereco.criar')}}</button>
            <a class="btn btn-primary" href="{{route('endereco')}}">{{__('login.voltar')}}</a>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>

