@extends('layout.template')
@section('title', 'Página Editar')
@section('pagina', 'Editar Produtos')
@section('content')
    <form method="POST" action="{{route('produtos.editar', $produto)}}">
   
    @csrf
    @method('put')
    
    <div class="row mb-4">
        <div class="col-md-2 text-end"><label for="nome">Nome</label></div>    
        <div class="col-md-4"><input type="text" name="nome" class="form-control" id="nome" value="{{$produto->nome}}"></div>
    </div>
    <div class="row mb-4">
        <div class="col-md-2 text-end"><label for="descricao">Descrição</label></div>    
        <div class="col-md-4"><textarea name="descricao" rows="3" class="form-control" id="descricao">{{$produto->descricao}}</textarea></div>
    </div>

    <div class="row mb-4">
        <div class="col-md-2 text-end"><label for="preco">Preço</label></div>    
        <div class="col-md-4"><input type="number" name="preco" step="0.01" class="form-control" id="preco" value="{{$produto->preco}}"></div>
    </div>

    <div class="row mb-4">
        <div class="col-md-2 text-end"><label for="quantidade">Quantidade</label></div>    
        <div class="col-md-4"><input type="number" name="quantidade" class="form-control" id="quantidade" value="{{$produto->quantidade}}"></div>
    </div>

    <div class="row mb-4">
        <div class="col-md-2 text-end"></div>
        <div class="col-md-4 text-start"><button type="submit" class="btn btn-primary mb-4">Enviar</button></div>
    </div>  
</form>

@endsection