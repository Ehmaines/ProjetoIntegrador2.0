@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{__('welcome_dashbords.helloUserDashborad', ['user' => Auth::user()->name])}}
                        {{trans_choice('welcome_dashbords.notificationsCountMessage', 5, ['number' => 5])}}
                    </div>

                    <div class="card-body text-center">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <a href="{{route('welcome')}}" class="btn btn-primary">{{__('home.voltar')}}</a>    
                        <a href="{{route('pedido.index')}}" class="btn btn-primary">{{__('home.manterPedidos')}}</a>
                        <a href="{{route('endereco')}}" class="btn btn-primary">Manter Endereços</a>
                        <a href="#" class="btn btn-primary">{{__('home.manterPerfil')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
