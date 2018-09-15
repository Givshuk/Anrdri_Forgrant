<?php

namespace App;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class IntervalPrice extends Model
{
    protected $fillable = ['product_id','date_from','date_till','price'];
    public function established_later ($request)
    {

      $sql  = " SELECT *
                        FROM interval_prices 
                        WHERE product_id='$request->product_id' AND (`date_from` <= '$request->check_price_date' AND `date_till` >= '$request->check_price_date')
                        ORDER BY created_at DESC
                        LIMIT 1";

        $result  = DB::select($sql);


         /*
        $result = DB::table('interval_prices')
            ->where(function($q) {
                $q->where(function($q){
                    $q->where('product_id', '=', 1)
                        ->where('date_from', '<=', $request->check_price_date);
                })
                ;
            })
            ->where('date_till', '>=','2018-01-02')
            ->orderBy('created_at', 'desc')
            ->take(1)
            ->get();
      */
        return $result;


    }

    public function shorter_period ($request)
    {
     $sql = "SELECT * FROM (SELECT 
                        product_id, 
                        date_from, 
                        date_till, 
                        price, 
                        (TO_DAYS(date_till)-TO_DAYS(date_from)) delta
                        FROM interval_prices
                        WHERE product_id='$request->product_id' AND (`date_from` <= '$request->check_price_date' AND `date_till` >= '$request->check_price_date')
                            ) sel
                        ORDER BY sel.delta
                        LIMIT 1
        ";
        $result  = DB::select($sql);
        return $result;
    }


}
