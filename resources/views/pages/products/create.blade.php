@extends('pages.products.base')

@section('content')
    <h3>Criar novo produto</h3>
    
   <form  action="{{route('products.store')}}" class="form" method="post" enctype="multipart/form-data">
       @csrf
       @method('POST')
       @include('pages.products.includes.form')
        <div class="form-group">
            <button type="submit" class="btn btn-success">Atualizar</button>
        </div>

   </form>
@endsection