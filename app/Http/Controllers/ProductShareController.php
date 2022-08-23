<?php

namespace App\Http\Controllers;

use App\Models\Affiliate;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductShareController extends Controller
{
  public function shareProduct($token)
   {
     $product_info = Affiliate::select(
                                 'affiliate.link',
                                 'product.description',
                                 'product.name',
                                 DB::raw("CONCAT('https://xffiliate-api.xtendly.com/file_storage', '/',product.image) as `image`"),
                                 'merchant_company_info.name as company_name'
                                 )
                                 ->join('product', 'product.id', 'affiliate.product_id')
                                 ->join('merchant_company_info', 'merchant_company_info.user_id', 'product.user_id')
                                 ->where('affiliate.link', $token)
                                 ->first();
     if($product_info)
     {
       return view('productshare.productredirect')->with(compact('product_info'));

     }else
     {

     }
   }
}
