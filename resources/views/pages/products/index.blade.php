@extends('pages.products.base')

@section('content')
    <h3>Listar todos os produtos</h3>

    <div class="container">
        <h1>Produtos</h1>
        <a href="{{route('products.create')}}" class="btn btn-primary">Criar novo produto</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>#</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($products as $product)
                <tr>
                    <td>{{$product->code}}</td>
                    <td>{{$product->title}}</td>
                    <td>R$ {{ number_format($product->price,2,',','.') }}</td>
                    <td>
                        <img width='100px' src="{{url('storage/'.$product->images->first()->path)}}" alt="foto-{{$product->title}}">
                    </td>
                    <td class="d-flex">
                        <a href="{{route('products.edit',$product->id)}}" class="btn btn-warning">Editar</a>
                        
                        <form action="{{route('products.destroy',$product->id)}}" method="post" >
                            @csrf
                            @method('DELETE')
                            <button  class="btn btn-sm btn-danger"><i class="bi-trash"></i></button>
                        </form>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection