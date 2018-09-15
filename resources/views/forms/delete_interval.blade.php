<div class="col-md-12 text" id = "test">
        <div class="table-responsive text-center">
            <table class="table table-borderless" id="table">
                <thead>
                <tr>
                    <th class="text-center">C</th>
                    <th class="text-center">По</th>
                    <th class="text-center">Цена</th>
                </tr>
                </thead>
                @foreach($intervals as $interval)
                    <tr class="item{{$interval->id}}">
                        <td class="text-center">{{ \Carbon\Carbon::parse($interval->date_from)->format('d-m-Y')}}</td>
                        <td class="text-center">{{\Carbon\Carbon::parse($interval->date_till)->format('d-m-Y')}}</td>
                        <td class="text-center">{{$interval->price}}</td>
                        <td>
                            <form method="post" id = 'destroy' action="{{route('destroy')}}">
                                @csrf
                                {{ method_field('DELETE') }}
                       <input type="hidden" id = "{{$interval->id}}"  name="delete" value="{{$interval->id}}">
                          <input type="hidden"   name="product_id" value="{{$product->id}}">
                           <button class="btn btn-danger">
                                <span class="glyphicon glyphicon-trash"></span> Delete
                           </button>
                            </form>
                        </td>
                    </tr>
            @endforeach
            </table>
</div>






