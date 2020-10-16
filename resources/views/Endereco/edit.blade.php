<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Edit de Endereco</title>
</head>
<body>
    <div class="container">
        <form method="POST" action="{{route('endereco.update', $resEndereco['id'])}}">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <div class="form-group">
                <label for="input-id">ID</label>
                <input type="text" name="id" class="form-control" id="input-id" aria-describedby="idHelp" placeholder="id" disabled value={{$resEndereco['id']}}>
            </div>
            <div class="form-group">
                <label for="input-nome">bairro</label>
                <input type="text" name="bairro" class="form-control" id="input-nome" placeholder="Digite o nome" value={{$resEndereco['bairro']}}>
            </div>
            <div class="form-group">
                <label for="input-preco">logradouro</label>
                <input type="text" name="logradouro" class="form-control" id="input-preco" placeholder="Digite o preço" value={{$resEndereco['logradouro']}}>
            </div>
            <div class="form-group">
                <label for="input-preco">Número</label>
                <input type="text" name="numero" class="form-control" id="input-preco" placeholder="Digite o preço" value={{$resEndereco['numero']}}>
            </div>
            <div class="form-group">
                <label for="input-preco">Complemento</label>
                <input type="text" name="complemento" class="form-control" id="input-preco" placeholder="Digite o preço" value={{$resEndereco['complemento']}}>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
            <a class="btn btn-primary" href="{{route('endereco')}}">Voltar</a>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>


