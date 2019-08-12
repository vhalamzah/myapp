<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ApiProductsController extends Controller
{
    function distance($lat1, $lon1, $lat2, $lon2, $unit) {
        if (($lat1 == $lat2) && ($lon1 == $lon2)) {
            return 0;
        }
        else {
            $theta = $lon1 - $lon2;
            $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
            $dist = acos($dist);
            $dist = rad2deg($dist);
            $miles = $dist * 60 * 1.1515;
            $unit = strtoupper($unit);

            if ($unit == "K") {
                return ($miles * 1.609344);
            } else if ($unit == "N") {
                return ($miles * 0.8684);
            } else {
                return $miles;
            }
        }
    }


    public function products($level,$userID){
        $data = DB::select('
                        SELECT 
                        products.id as productId, products.product_name as productName, products.price as productPrice, products.totalQuantity as totalQuantity,products.quantityLeft as quantityLeft,products.productImage
                        FROM products
                        WHERE products.product_type='.$level.' AND products.user_id='.$userID.'
            ');
//products.product_type='.$level.' AND products.user_id='.$userID.'
        return $data;
    }

    public function nearby_products(Request $request){
        $userId=$request->userId;
        $latitude=$request->latitude;
        $longitude=$request->longitude;
        $dateTime=$request->dateTime;



        $products_json='';
        $products_type = DB::select('SELECT products_types.level, products_types.id FROM products_types WHERE 1');
        foreach ($products_type as $myproducts_type){

            $chef = DB::select('SELECT 
                                users.id as chefId, users.name as chefName, users.profile_image as chefImage,
                                products_types.level as productTypeId
                                FROM users, products_types,products
                                WHERE products_types.id='.$myproducts_type->id.' AND products_types.id=products.product_type AND users.id=products.user_id AND products_types.level='.$myproducts_type->level);
            foreach ($chef as $mychef){
                if($this->distance($latitude, $longitude, -26.010194, 28.077458, "K")<=100000){
                    $products_json = array(
                        "chefId"=>$mychef->chefId,
                        "chefName"=>$mychef->chefName,
                        "chefImage"=>$mychef->chefImage,
                        "productTypeId"=>$mychef->productTypeId,
                        "fromDateTime"=>"17/07/2019 12:30",
                        "toDateTime"=>"17/07/2019 12:30",
                        "productList"=>$this->products($mychef->productTypeId,$mychef->chefId)
                    );
                }

            }
        }



        $offers='"response":"true",
		"message":"Success",
		"offers":[
					{
						"productId":"1",
						"productImage":"https://www.wallpaperup.com/uploads/wallpapers/2015/04/05/656479/c03ff0464e96857e52f4f9883b82d3e6-700.jpg",
						"productName":"food name",
						"productDescription":"food description",
						"productPrice":"R44"
					},
					{
						"productId":"1",
						"productImage":"https://www.wallpaperup.com/uploads/wallpapers/2015/04/05/656479/c03ff0464e96857e52f4f9883b82d3e6-700.jpg",
						"productName":"food name",
						"productDescription":"food description",
						"productPrice":"R44"
					},
					{
						"productId":"1",
						"productImage":"https://www.wallpaperup.com/uploads/wallpapers/2015/04/05/656479/c03ff0464e96857e52f4f9883b82d3e6-700.jpg",
						"productName":"food name",
						"productDescription":"food description",
						"productPrice":"R44"
					}
				 ],
		"productByChef": 
		';


        $json=$offers.'['.json_encode($products_json).']}';
       echo $json;
       // echo json_encode($products_json);



    }
    public function nearby_products2(Request $request){
        $userId=$request->userId;
        $latitude=$request->latitude;
        $longitude=$request->longitude;
        $dateTime=$request->dateTime;



        $products_json='';
        $products_type = DB::select('SELECT products_types.level, products_types.id FROM products_types WHERE 1');
        foreach ($products_type as $myproducts_type){

            $chef = DB::select('SELECT 
                                users.id as chefId, users.name as chefName, users.profile_image as chefImage,
                                products_types.level as productTypeId
                                FROM users, products_types,products
                                WHERE products_types.id='.$myproducts_type->id.' AND products_types.id=products.product_type AND users.id=products.user_id AND products_types.level='.$myproducts_type->level);
            foreach ($chef as $mychef){
                if($this->distance($latitude, $longitude, -26.010194, 28.077458, "K")<=100000){
                    $products_json = array(
                        "chefId"=>$mychef->chefId,
                        "chefName"=>$mychef->chefName,
                        "chefImage"=>$mychef->chefImage,
                        "productTypeId"=>$mychef->productTypeId,
                        "fromDateTime"=>"17/07/2019 12:30",
                        "toDateTime"=>"17/07/2019 12:30",
                        "productList"=>$this->products($mychef->productTypeId,$mychef->chefId)
                    );
                }

            }
        }



        $offers='"response":"true",
		"message":"Success",
		"offers":[
					{
						"productId":"1",
						"productImage":"https://www.wallpaperup.com/uploads/wallpapers/2015/04/05/656479/c03ff0464e96857e52f4f9883b82d3e6-700.jpg",
						"productName":"food name",
						"productDescription":"food description",
						"productPrice":"R44"
					},
					{
						"productId":"1",
						"productImage":"https://www.wallpaperup.com/uploads/wallpapers/2015/04/05/656479/c03ff0464e96857e52f4f9883b82d3e6-700.jpg",
						"productName":"food name",
						"productDescription":"food description",
						"productPrice":"R44"
					},
					{
						"productId":"1",
						"productImage":"https://www.wallpaperup.com/uploads/wallpapers/2015/04/05/656479/c03ff0464e96857e52f4f9883b82d3e6-700.jpg",
						"productName":"food name",
						"productDescription":"food description",
						"productPrice":"R44"
					}
				 ],
		"productByChef": 
		';


        $json=$offers.'['.json_encode($products_json).']}';
       echo $json;
       // echo json_encode($products_json);



    }
}
