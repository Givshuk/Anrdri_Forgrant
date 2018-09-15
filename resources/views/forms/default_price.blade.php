<div class="col-md-4">
    <h1> {{$product->name}}</h1>
</div>
<div class="col-md-4">
    <form method="post" id ="default_price" action="{{route('change_price')}}">
        @csrf
        <h3>Цена по умолчанию </h3>
        <input type="text" id = "test"  name="default_price" value="{{$product->default_price}}">
        грн
        <input type="hidden" name = "id" value="{{$product->id}}">
        <input class="btn btn-sm btn-primary" type="submit" name="submit_default_price" value="Ok">
        <br>
    </form>
</div>
