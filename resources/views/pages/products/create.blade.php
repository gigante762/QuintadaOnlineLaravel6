@extends('pages.products.base')

@section('content')
    <a href="{{route('products.index')}}" class="btn btn-primary">Voltar</a>
    <h3>Criar novo produto</h3>


    @if ($errors->any())
        <div class="alert alert-warning">
            @foreach ($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
            @endforeach
        </div>
    @endif

    <form action="{{ route('products.store') }}" class="form" method="post" enctype="multipart/form-data">
        @csrf
        @method('POST')
        @include('pages.products.includes.form')
        <div class="form-group">
            <button type="submit" class="btn btn-success">Atualizar</button>
        </div>

    </form>
@endsection
