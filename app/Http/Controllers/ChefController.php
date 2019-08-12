<?php

namespace App\Http\Controllers;



use DB;
use Illuminate\Http\Request;

use Validator;
use Auth;
use App\User;
use App\Models\user_roles;
use App\Models\units_measure;
class ChefController extends Controller
{
    public function index(){
        $id = Auth::User()->id;
        $myprofile = DB::select('select * from users where id='.$id);
        return view('chef.index',['products'=>$myprofile]);

    }
    public function profile(){

        $id = Auth::User()->id;

        $admin=2;



        if($admin==2){
            //Chef Profile
            $myprofile = DB::select('select * from users where id='.$id);
            $mydocuments = DB::select('select documents.*, documents_type.name as document_name, documents_type.level as doc_level
                          from documents,documents_type where documents.user_id='.$id.' 
                          AND documents.doc_type=documents_type.id');
            return view('chef.profile',['myprofile'=>$myprofile, 'mydocuments'=>$mydocuments]);


        }
    }
    public function breakfast(){
        $id = Auth::User()->id;

        return view('chef.breakfast_recipe',['id'=>$id, 'accepted'=>$this->recipe(1, 1,1), 'pending'=>$this->recipe(1,1,0), 'rejected'=>$this->recipe(1,1,2), 'saved'=>$this->recipe(1,1,4)]);
    }
    public function lunch(){
        $id = Auth::User()->id;
        return view('chef.lunch_recipe',['id'=>$id, 'accepted'=>$this->recipe(2, 1,1), 'pending'=>$this->recipe(2,1,0), 'rejected'=>$this->recipe(2,1, 2), 'saved'=>$this->recipe(2,1,4)]);
    }
    public function dinner(){
        $id = Auth::User()->id;
        return view('chef.dinner_recipe',['id'=>$id, 'accepted'=>$this->recipe(3, 1,1), 'pending'=>$this->recipe(3,1,0), 'rejected'=>$this->recipe(3,1,2), 'saved'=>$this->recipe(3,1,4)]);
    }
    public function recipe($product_type, $product_catergory, $status){
        $id = Auth::User()->id;
        $data = DB::select('SELECT products.id as product_id, products.category_id, products.product_name, products.price, products_images.image_path FROM products, products_images  WHERE products.id=products_images.product_id AND  products_images.is_primary=1 AND  products.product_type='.$product_type.' AND products.is_approved='.$status.' AND products.user_id='.$id.' ORDER BY `products`.`id` DESC');
        return $data;

    }
    public function myrecipe(Request $request){

        $id = Auth::User()->id;
        $units= DB::select('SELECT * FROM units_measure');
        $allergens= DB::select('SELECT * FROM product_allergens');
        $type=$request->type;
        $level=$request->level;

        if($request->level=='edit'){
            $products= DB::select('SELECT * FROM `products` WHERE `id`='.$request->product_id);
            $product_image= DB::select('SELECT products_images.image_path FROM `products_images` WHERE `product_id`='.$request->product_id);
            return view('chef.myrecipe',['id'=>$id, 'units'=>$units, 'allergens'=>$allergens, 'type'=>$request->type, 'level'=>$request->level, 'products'=>$products, 'product_image'=>$product_image, 'product_id'=>$request->product_id]);

        }else{
            return view('chef.myrecipe')->withId($id)->withUnits($units)->withAllergens($allergens)->withType($type)->withLevel($level);
        }


    }
    public function add_recipe_break_fast(){
        $id = Auth::User()->id;
        $units= DB::select('SELECT * FROM units_measure');
        $allergens= DB::select('SELECT * FROM product_allergens');
        return view('chef.add_recipe_break_fast',['id'=>$id, 'units'=>$units, 'allergens'=>$allergens]);

    }
    public function add_recipe_lunch(){
        $id = Auth::User()->id;
        return view('chef.add_recipe_lunch',['id'=>$id]);
    }
    public function add_recipe_dinner(){
        $id = Auth::User()->id;
        return view('chef.add_recipe_dinner',['id'=>$id]);
    }
    private function update_personal_information($id,$name,$email,$cell,$address,$quali){

        DB::table('users')
            ->where('id',$id) ->limit(1)
            ->update(
                [
                    'name' => $name,
                    'email' => $email,
                    'cell' => $cell,
                    'address'  => $address,
                    'chef_qualificiation'  =>$quali
                ]
            );

    }
    public function update_personal_info(Request $request)
    {

        $original_email = User::Where('email', $request->original_email)->first();
        $id=$original_email->id;
        $count = User::Where('email', $request->email)->count();
        if ($count > 0) {
            $myprofile = User::Where('email', $request->email)->first();
            if ($myprofile->id == $id) {
                //update
                $this->update_personal_information(
                    $id,
                    $request->name,
                    $request->email,
                    $request->cell,
                    $request->address,
                    $request->chef_qualificiation
                );
                return 'updated';

            } else {
                //through duplicate error
                return 'Failed to Update, Email is being used by someone';
            }
        } else {
            //update
            $this->update_personal_information(
                $id,
                $request->name,
                $request->email,
                $request->cell,
                $request->address,
                $request->chef_qualificiation
            );
            return 'updated';
        }
    }
    public function upload_profile_image(Request $request){
        if ($request->isMethod('get'))
            return view('profile');
        else {
            $validator = Validator::make($request->all(),
                [
                    'file' => 'image',
                ],
                [
                    'file.image' => 'The file must be an image (jpeg, png, bmp, gif, or svg)'
                ]);
            if ($validator->fails())
                return array(
                    'fail' => true,
                    'errors' => $validator->errors()
                );
            $extension = $request->file('file')->getClientOriginalExtension();
            $dir = 'uploads';
            $filename = uniqid() . '_' . time() . '.' . $extension;
            $request->file('file')->move($dir, $filename);
            $filename2=$request->url.'/'.$dir.'/'.$filename;
            //update profile
            $id = Auth::User()->id;
            $update = DB::table('users')
                ->where('id', $id) ->limit(1)
                ->update(
                    [
                        'profile_image' => $filename2
                    ]
                );
            return $filename2;
        }
    }
    public function upload_recipe_image(Request $request){
        if ($request->isMethod('get'))
            return view('profile');
        else {
            $validator = Validator::make($request->all(),
                [
                    'file' => 'image',
                ],
                [
                    'file.image' => 'The file must be an image (jpeg, png, bmp, gif, or svg)'
                ]);
            if ($validator->fails())
                return array(
                    'fail' => true,
                    'errors' => $validator->errors()
                );
            $extension = $request->file('file')->getClientOriginalExtension();
            $dir = 'uploads';
            $filename = uniqid() . '_' . time() . '.' . $extension;
            $request->file('file')->move($dir, $filename);
            $filename2=$request->url.'/'.$dir.'/'.$filename;
            //update profile
//            $id = Auth::User()->getId();
//            $update = DB::table('users')
//                ->where('id', $id) ->limit(1)
//                ->update(
//                    [
//                        'profile_image' => $filename2
//                    ]
//                );
            return $filename2;
        }
    }
    public function save_new_recipe_data(Request $request){


        $product_id=DB::table('products')->insertGetId(
            [   'user_id' => $request->user_id,
                'product_name' => $request->recipe_name,
                'product_descri' => $request->recipe_description,
                'product_type' =>$request->product_type,
                'is_approved' =>4,
                'category_id' => $request->catergory_type,
                'price' => $request->price
            ]
        );
        $products_images=DB::table('products_images')->insert(
            [   'product_id' => $product_id,
                'image_path' => $request->recipe_image,
                'is_primary' => 1

            ]
        );




        if($request->recipe_image2!=null){
            $products_images=DB::table('products_images')->insert(
                [   'product_id' => $product_id,
                    'image_path' => $request->recipe_image2,
                    'is_primary' => 0

                ]
            );
         }
         if($request->recipe_image3!=null){
             $products_images=DB::table('products_images')->insert(
                 [   'product_id' => $product_id,
                     'image_path' => $request->recipe_image3,
                     'is_primary' => 0

                 ]
             );
         }

        if($product_id){
            return $product_id;
        }else{
            return 'false';
        }




    }
    public function update_recipe_data(Request $request){

        $product_id=$request->product_id;


        DB::table('products')
            ->where('id',$product_id) ->limit(1)
            ->update(
                [
                    'product_name' => $request->recipe_name,
                    'product_descri' => $request->recipe_description,
                    'product_type' =>$request->product_type,
                    'is_approved' =>4,
                    'category_id' => $request->catergory_type,
                    'price' => $request->price
                ]
            );

        $data= DB::select('SELECT * FROM `products_images` WHERE `product_id`='.$request->product_id);


        $count=0;
        foreach ($data as $mydata){

            if($count==0){
                DB::table('products_images')
            ->where('product_id',$mydata->id) ->limit(1)
            ->update(
                [
                    'product_id' => $product_id,
                    'image_path' => $request->recipe_image,
                    'is_primary' => 1
                ]
            );
            }else if($count==1){
                DB::table('products_images')
                    ->where('product_id',$mydata->id) ->limit(1)
                    ->update(
                        [
                            'product_id' => $product_id,
                            'image_path' => $request->recipe_image1,
                            'is_primary' => 0
                        ]
                    );
            }else if($count==2){
                DB::table('products_images')
                    ->where('product_id',$mydata->id) ->limit(1)
                    ->update(
                        [
                            'product_id' => $product_id,
                            'image_path' => $request->recipe_image2,
                            'is_primary' => 0
                        ]
                    );
            }

            $count++;
        }




        if($product_id){
            return $product_id;
        }else{
            return 'false';
        }

    }
    public function save_new_ingredient_data(Request $request){


        $data=DB::table('product_ingredients')->insertGetId(
            [
                'product_id' => $request->product_id,
                'ingredient_name' =>$request->ingredient_name,
                'quantity' =>$request->volume,
                'unit' =>$request->unit
            ]
        );


        if($data){
            return 'true';
        }else{
            return 'false';
        }




    }
    public function change_recipe_status(Request $request){

        $data=DB::table('products')
            ->where('id',$request->product_id) ->limit(1)
            ->update(
                [
                    'is_approved' => 0
                ]
            );


//        echo json_encode($data);
        if($data){
            return 'true';
        }else{
            return 'false';
        }




    }
    public function test(Request $request){
        echo $request->type;
    }
    public function become_chef(){
        return view('chef.become_chef');
    }
    public function become_chef_ajax_1(Request $request){
        $fname=$request->fname;
        $lname=$request->lname;
        $cell=$request->cell;
        $email=$request->email;
        $kaddress=$request->kaddress;
        $password=$request->password;
        $licence=$request->licence;
        $id_passport=$request->id_passport;
        $aboutme=$request->aboutme;
        $breg=$request->breg;
        $stove1=$request->stove1;
        $stove2=$request->stove2;
        $kitchen1=$request->kitchen1;
        $kitchen2=$request->kitchen2;
        $kaddress=$request->kaddress;
        $idcopyA=$request->idcopyA;
        $paddressA=$request->paddressA;
        $clicenceA=$request->clicenceA;
        $bregistrationA=$request->bregistrationA;


        $user_id=DB::table('users')->insertGetId(
            [   'name' => $request->fname,
                'lname' => $request->lname,
                'email' => $request->email,
                'user_role' => 2,
                'ischef' =>0,
                'cell' => $request->cell,
                'address' => 'address',
                'profile_image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQR5MGOHogdjCUq_at5h0Aku9qUY7ib6mEqahy2Gvp6UP86Z-wR7w',
                'chef_qualificiation' => '',
                'delivery_vehicle_no' => '',
                'password' => $request->password
            ]
        );
        return $user_id;

    }
    public function check_user_email(Request $request){
        return 'true';
    }
}
