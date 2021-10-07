@extends('pages.site.base')

@section('title','Produto')

@section('content')
<main class="flex-fill">
    <div class="container">
        <div class="row g-3">
            <div class="col-12 col-sm-6">
                <img src="{{url('storage/'.$product->images->first()->path)}}" class="img-thumbnail" id="imgProduto">
                <br class="clearfix">
                <div class="row my-3 gx-3">

                    @foreach ($product->images as $image)
                        <div class="col-3">
                            <img src="{{url('storage/'.$image->path)}}" class="img-thumbnail" onclick="trocarImagem(this)">
                        </div>
                    @endforeach
                    
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <h1>{{$product->title}} - <small>R$ {{number_format($product->price,2,',','.')}}</small></h1>
                <p>
                   {{$product->description}}
                </p>
                <p>
                    <a href="{{route('cart.add',[$product->code,1])}}" class="btn btn-lg  mb-3 mb-xl-0 me-2  text-white cor-principal">
                        <i class="bi-cart"></i> Adicionar ao Carrinho
                    <a class="fa fa-address-book-o" aria-hidden="true">
                    <button class="btn btn-lg btn-outline-danger">
                        <i class="bi-heart"></i> Adicionar aos Favoritos
                    </button>
                </p>
            </div>
        </div>
    </div>
</main>

<script>
    function trocarImagem(el) {
        var imgProduto = document.getElementById("imgProduto");
        imgProduto.src = el.src;
    }
</script>
@endsection