@extends('site.layout')

@section('content')
<div class="jumbotron">
    <h1 class="display-4">Exibir Cadastro de Show (Detalhado)</h1>
    <hr class="my-4">
</div>
<div class="container">
    <a class="btn btn-primary" href="{{ route('showsmanager.index') }}"> Voltar</a>
    <p></p>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Quantidade de Ingressos:</strong>
                {{ $show->qtd_ingressos }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Data:</strong>
                {{ $show->data }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Horário de Início:</strong>
                {{ $show->horario_i }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Horário de Término:</strong>
                {{ $show->horario_f }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Artista:</strong>
                {{ $show->artista_id }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Local:</strong>
                {{ $show->local_id }}
            </div>
        </div>
    </div>
</div>
@endsection