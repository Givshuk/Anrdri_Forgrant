<div class="col-md-4 text def_price main-selector">
    <form method="post" id = "see_price" action="{{route('check_data')}}">
        @csrf
        <label>Проверить цену на дату:
            <input type="date" name="check_price_date"  data-date=""   value="" >
        </label>
        <input type="hidden" name="product_id" value="{{$product->id}}">
        <input type="hidden" name="price_definition" value="">
        <input class="btn btn-sm btn-primary" name="submit_check_price" type="submit" value="Ok">
        <h3>Способ определения цены</h3>
        <input type="hidden" name="product_id" value="{{$product->id}}">
        <input checked type="radio" id="Choice1" name="price_definition_method" value="0">
        <label for="Choice1">Приоритетнее цена с меньшим периодом действия </label>
        <br>
        <input type="radio" id="Choice2" name="price_definition_method" value="1">
        <label for="Choice2">Приоритетнее цена, установленная позднее </label>
    </form>
</div>
