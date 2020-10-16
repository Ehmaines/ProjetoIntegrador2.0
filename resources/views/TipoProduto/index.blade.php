<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>{{__('tipoProdutoIndex.indexTipoProduto')}}</title>
</head>
<body>
    <div class="container">
        <a class="btn btn-primary ml-5 mt-3" href="{{route('tipoproduto.create')}}">{{__('tipoProdutoIndex.cadastrarNovoTipoProduto')}}</a>
        <ul class=".list-group-flush">
            @foreach ($resources as $resource)
                <li class="list-group-item col-4 mt-3 ">
                    {{$resource['id']}} - {{$resource['descricao']}}
                    <a href="{{route('tipoproduto.edit', $resource['id'])}}">{{__('tipoProdutoIndex.editar')}}</a>
                    <a href="{{route('tipoproduto.destroy', $resource['id'])}}">{{__('tipoProdutoIndex.remover')}}</a>
                </li>
            @endforeach
        </ul>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>

