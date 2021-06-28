@extends('layout.template')
@section('title', 'Página Produtos')
@section('pagina', 'Produtos')
@section('content')
<?php
@session_start();
if(@$_SESSION['id']==null){
    
    echo"<script>window.location='./'</script>";

}
if(!isset($id)){
    $id = "";
}
?>

<a href="{{route('produtos.inserir')}}" type="button" class="btn btn-primary mt-4 mb-4">Inserir Produtos</a>
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th>Quantidade</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produtos as $produto)
                    <tr>
                        <td>{{$produto->nome}}</td>
                        <td>{{$produto->preco}}</td>
                        <td>{{$produto->quantidade}}</td>
                        <td><a href="{{route('produtos.edit', $produto)}}"><i class="fas fa-edit text-info me-2"></i></a>

                        <a href="{{route('produtos.modal', $produto)}}"><i class="fas fa-trash text-danger me-2"></i></a></td>
                        
                    </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
           <!-- {{$produtos->links()}}  -->
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('#dataTable').DataTable();
    })
</script>

@endsection

@section('footer')
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Remover registo</h5>
          <a href="{{route('produtos')}}" class="btn-close" aria-label="Close"></a>

        </div>
        <div class="modal-body">
          Deseja realmente remover o registo?
        </div>
        <div class="modal-footer">
          <a href="{{route('produtos')}}" class="btn btn-secondary">Cancelar</a>
          <form method="POST" action="{{route('produtos.delete', $id)}}">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Remover</button>
            </form>
        </div>
      </div>
    </div>
  </div>
  <?php
    if($id!=""){       

        echo"<script>
            var myModal=new bootstrap.Modal(document.getElementById('exampleModal'));
            myModal.show();
            </script>";
    }
    ?>
@endsection
