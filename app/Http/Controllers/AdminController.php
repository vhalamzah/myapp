<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user_roles;
use App\User;
use DB;
use Session;

class AdminController extends Controller
{
    public function index(){

        $waiting = DB::select('
    	 		SELECT 
				products.product_name, products.product_descri, products.price,products.id as myid,
				products_types.name as products_type, products_categories.name as products_category,
				users.name as chefname
				FROM products_types,products_categories,products,users
				WHERE products.is_approved=0 AND products_types.id=products.product_type 
				  AND products_categories.id=products.category_id AND products.user_id=users.id
				    	 	');
        $approved = DB::select('
    	 		SELECT 
				products.product_name, products.product_descri, products.price,products.id as myid,
				products_types.name as products_type, products_categories.name as products_category,
				users.name as chefname
				FROM products_types,products_categories,products,users
				WHERE products.is_approved=1 AND products_types.id=products.product_type 
				  AND products_categories.id=products.category_id AND products.user_id=users.id
				    	 	');

        $rejected = DB::select('
    	 		SELECT 
				products.product_name,products.comment, products.product_descri, products.price,products.id as myid,
				products_types.name as products_type, products_categories.name as products_category,
				users.name as chefname
				FROM products_types,products_categories,products,users
				WHERE products.is_approved=2 AND products_types.id=products.product_type 
				  AND products_categories.id=products.category_id AND products.user_id=users.id
				    	 	');

        $saved = DB::select('
    	 		SELECT 
				products.product_name, products.product_descri, products.price,products.id as myid,
				products_types.name as products_type, products_categories.name as products_category,
				users.name as chefname
				FROM products_types,products_categories,products,users
				WHERE products.is_approved=4 AND products_types.id=products.product_type 
				  AND products_categories.id=products.category_id AND products.user_id=users.id
				    	 	');


        return view('admin.index')->withApproved($approved)->withWaiting($waiting)->withRejected($rejected)->withSaved($saved);




    }

    public function approve_recipe(Request $request){
        DB::table('products')
            ->where('id',$request->id) ->limit(1)
            ->update(
                [
                    'is_approved' => 1
                ]
            );
        return redirect()->route('admin');
    }
    public function decline_recipe(Request $request){
        DB::table('products')
            ->where('id',$request->reject_id) ->limit(1)
            ->update(
                [
                    'is_approved' => 2,
                    'comment' => $request->reason_comment
                ]
            );
        return redirect()->route('admin');
    }

    public function recipe_details(){
        return view('admin.recipe_details');
    }
}
