<?php

namespace App\Http\Controllers;

use App\IntervalPrice;
use App\Product;
use Illuminate\Support\Facades\DB;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\FusionCharts;

class ProductController extends Controller
{
    public function index()
    {


        $products = Product::all();
        return view('site.index', ['products' => $products]);
    }

    public function product()
    {
        $config = new Product();
        $id = (int)Input::only('product_id');
        if (empty($id)) {
            $id = session()->get('id');
        }

        $result = session()->get('result');
        if (isset($result)) {
            $arrChartConfig = $config->schedule_config($result);

        } else {
            $arrChartConfig = [];
        }
        $product = Product::find($id);
        $related_record = Product::find($id)->intervalPrice();
        $intervals = $related_record->get();


        return view('site.specific_product',
            ['product' => $product,
                'intervals' => $intervals,
                'arrChartConfig' => $arrChartConfig]);
    }

    public function change(Request $request)
    {
        $product = Product::find($request->id);
        $product->default_price = $request->default_price;
        $product->save();
    }
}
