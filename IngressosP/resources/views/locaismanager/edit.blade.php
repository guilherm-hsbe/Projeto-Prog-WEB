@extends('site.layout')

@section('content')
<div class="jumbotron">
    <h1 class="display-4">Editar Cadastro de Local</h1>
    <hr class="my-4">
</div>
<div class="container">
    <a class="btn btn-primary" href="{{ route('locaismanager.index') }}"> Voltar</a>
    <p></p>
    @if ($errors->any())
        <p></p>
        <div class="alert alert-danger">
            <strong>Ops!</strong> Houve algum problema com a entrada de dados.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('locaismanager.update', $artista) }}" method="POST">
        @csrf
        @method('PUT')

         <!-- //* Nome do Local -->
         <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nome do Local:</strong>
                    <input type="input" name="nLocal" class="form-control" placeholder="Arena Só Shows" value="{{ $local->nLocal }}" maxlength="90">
                </div>
            </div>

            <!-- //* Endereço -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Endereço:</strong>
                    <input type="input" name="endereco" class="form-control" placeholder="Rua Imaginação" value="{{ $local->endereco }}" maxlength="200">
                </div>
            </div>

            <!-- //* Bairro -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Bairro:</strong>
                    <input type="input" name="endereco" class="form-control" placeholder="Jardim Sonhos" value="{{ $local->bairro }}" maxlength="150">
                </div>
            </div>
            
            <!-- //* Número -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Número<strong>
                    <input type="number" name="numero" class="form-control" placeholder="1090" value="{{ $local->numero }}" maxlength="5">
                </div>
            </div>

            <!-- //* Cidade -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Cidade:</strong>
                    <input type="input" name="cidade" class="form-control" placeholder="Presidente Prudente" value="{{ $local->cidade }}" maxlength="50">
                </div>
            </div>
            
            <!-- //* Estado -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Estado:</strong>
                    <input type="input" name="estado" class="form-control" placeholder="São Paulo" value="{{ $local->estado }}" maxlength="40">
                </div>
            </div>

            <!-- //* CEP -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>CEP:</strong>
                    <input type="number" name="cep" class="form-control" placeholder="19084736" value="{{ $local->cep }}" maxlength="9">
                </div>
            </div>

            <!-- //* Imagem -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Imagem:</strong>
                    <input type="text" name="imagem" value="{{ $local->imagem }}" class="form-control mb-2" placeholder="Imagem">
                </div>
            </div>

            <!-- //? Atualizar -->
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Atualizar</button>
            </div>
        </div>

    </form>
</div>
@endsection
