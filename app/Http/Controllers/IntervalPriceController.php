<?php

namespace App\Http\Controllers;

use App\IntervalPrice;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


class IntervalPriceController extends Controller
{
    public function store(Request $request)
    {
        $interval_price = new IntervalPrice();
        $interval_price->fill($request->all())->save();
        $id = (int)Input::only('product_id');
        return redirect()->to('product?product_id='.$id);
    }

    public function checkData(Request $request)
    {
        $interval = new IntervalPrice();
        if($request->price_definition_method == "1") {
           $result = $interval->established_later($request);
        }
        if($request->price_definition_method == "0") {
          $result = $interval->shorter_period($request);
        }
        if(empty($result))
        {
            $product = Product::find( $request->product_id);
            $result = $product->default_price;
            $result = [$request->check_price_date  => $result];
            return redirect()->to('product?product_id='.$request->product_id)
                ->with( [ 'id' => $request->product_id , 'result' => $result ] );
        }
        $result = [$request->check_price_date  => $result[0]->price];
        return redirect()->to('product?product_id='.$request->product_id)
            ->with( [ 'id' => $request->product_id , 'result' => $result ] );
    }

    public function destroy(Request $request)
    {
        $del = IntervalPrice::find($request->delete);
        $del->delete();
        $id = (int)Input::only('product_id');
        return redirect()->to('product?product_id='.$id);
    }

  }
