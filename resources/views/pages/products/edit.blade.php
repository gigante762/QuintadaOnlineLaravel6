@extends('pages.products.base')

@section('content')
    <a href="{{route('products.index')}}" class="btn btn-primary">Voltar</a>
    <h3>Editar produto - <i>{{ $product->title }}</i></h3>

    @if ($errors->any())
        <div class="alert alert-warning">
            @foreach ($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
            @endforeach
        </div>
    @endif

    <form action="{{ route('products.update', $product->id) }}" class="form" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('pages.products.includes.form')
        <div class="form-group">
            <button type="submit" class="btn btn-success">Atualizar</button>
        </div>
    </form>

    <div>
        <h5>Imagens</h5>
        <div class="d-flex">

            @foreach ($product->images as $image)
                <div>
                    <img width='200px' class='img-thumbnail' src="{{ url("storage/{$image->path}") }}"
                        alt="{{ $product->title }}">
                    <form action="{{ route('products.image.destroy', [$product->id, $image->id]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger"><i class="bi-trash"></i></button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>

@endsection
