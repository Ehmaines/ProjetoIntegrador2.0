<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Index de Produto</title>
</head>
<body>
    <div class="container">
        <a href="{{route('admin.dashboard')}}" class="btn btn-primary">Voltar</a> 
        <a class="btn btn-primary" href="{{route('endereco.create')}}">Cadastrar um novo endereço</a>
  
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">bairro</th>
                    <th scope="col">logradouro</th>
                    <th scope="col">numero</th>
                    <th scope="col">complemento</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($enderecos as $endereco)
                    <tr>
                        <th scope="row">{{$endereco['id']}}</th>
                        <td>{{$endereco['bairro']}}</td>
                        <td>{{$endereco['logradouro']}}</td>
                        <td>{{$endereco['numero']}}</td>
                        <td>{{$endereco['complemento']}}</td>
                        <td>
                            <a class="btn btn-outline-secondary" href="{{route('endereco.edit', $endereco['id'])}}">Editar</a>
                            <a class="btn btn-outline-danger delButton" data-toggle="modal" data-target="#modalDelete" value="{{route('endereco.destroy', $endereco['id'])}}">Remover</a>
                        </td>
                    </tr>
                @endforeach
                <?php print_r($enderecos); ?>
            </tbody>
        </table>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Remoção de recurso</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                Deseja realmente remover esse recurso?
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <form id="id-form-delete" method="POST" action="">
                @csrf
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-danger">Remover</button>
            </form>
            </div>
        </div>
        </div>
    </div>

    <script>
        var buttons = document.querySelectorAll('.delButton');
        var formDelete = document.querySelector('#id-form-delete');
        buttons.forEach(button => {
            button.addEventListener('click', functionDelButtonClick);
        });
        function functionDelButtonClick(){
            formDelete.setAttribute("action", this.getAttribute("value"))
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>



