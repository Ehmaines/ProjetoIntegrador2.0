@extends('layouts.admin-app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('admArea.areAdm') }}</div>

                    <div class="card-body text-center">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <a href="{{route('welcome')}}" class="btn btn-primary">{{ __('admArea.voltar') }}</a>    
                        <a href="#" class="btn btn-primary">{{ __('admArea.manterPedido') }}</a>
                        <a href="{{route('produto.index')}}" class="btn btn-primary">{{ __('admArea.manterProduto') }}</a>
                        <a href="{{route('tipoproduto.index')}}" class="btn btn-primary">{{ __('admArea.manterTProduto') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
