<div class="container main-selector">
    <div class="row">
        <div class="col-md-4 col-sm-12 col-xs-12 my-col">
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12 my-col">
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12 my-col">
            <form method="GET" action="{{route('main')}}">
                <label>
                    <select class="form-control" name="product_id" required >
                        <option value="">Выбор товара</option>
                        @foreach($products as $product)
                            <option value = "{{$product->id}}">{{$product->name}}</option>
                        @endforeach
                    </select>
                </label>
                <input class="btn btn-sm btn-primary" type="submit" >
            </form>
        </div>
    </div>
</div>