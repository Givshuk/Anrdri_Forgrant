<div class="col-md-12 text center-block">
    <form method="post" id = 'new_interval' action="{{route('new_interval')}}">
        @csrf
        <input type="hidden" name="product_id" value="{{$product->id}}">
        <h3>Сезонные цены</h3>
        Добавить интервал:
        c
        <input type="date" name="date_from" required value="" >
        по
        <input type="date" name="date_till"  required value=""  >
        - цена
        <input type="number" name="price"  min="100" step="100"  required value="" >
        грн.
        <input class="btn btn-sm btn-primary" type="submit" name="submit_new_interval" value="Сохранить">

    </form>
</div>