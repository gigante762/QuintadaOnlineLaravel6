<div class="form-group">
    <label>Código:</label>
    <input type="text" name='code' class="form-control" value="{{ $product->code ?? old('code')}}" >
</div>
<div class="form-group">
    <label>Título:</label>
    <input type="text" name='title' class="form-control" value="{{ $product->title ?? old('title')}}" >
</div>
<div class="form-group">
    <label>Preço:</label>
    <input type="text" name='price' class="form-control" value="{{ $product->price  ?? old('price')}}">
    <small class='text-muted'>Deve ser um número separado por ponto com até duas casas decimais. Ex: <b> 112.98</b></small>
</div>
<div class="form-group">
    <label>Descrição:</label>
    <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$product->description ?? old('description')}}</textarea>
</div>
<div class="form-group my-2">
    <label>Imagem:</label>
    <input type="file" name='image' class="form-control">
</div>