<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Product;
use App\Model\Supplier;
use App\Model\unit;
use App\Model\Category;
use App\Model\Purchase;
use Auth;

class DefaultController extends Controller
{
	
    	public function findProductName(Request $request){


            //if our chosen id and products table prod_cat_id col match the get first 100 data

            //$request->id here is the id of our chosen option id
            $data=Product::select('productname','id')->where('prod_cat_id',$request->id)->take(100)->get();
            return response()->json($data);//then sent this data to ajax success
        }


        public function findQty(Request $request){

            //it will get price if its id match with product id
            $p=Product::select('qty')->where('id',$request->id)->first();

            return response()->json($p);
        }




    	


}
