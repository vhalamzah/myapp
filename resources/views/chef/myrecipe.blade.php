@extends('chef.app')
@section('content')

    <div class="jumbotron jumbotron-fluid text-center">
        <div class="container">
            <?php $product_type=0; ?>
            <h1 class="display-4">NEW RECIPE -
                @if ($type=='dinner')
                    DINNER
                <?php $product_type=3; ?>
                @elseif ($type=='breakfast')
                    BREAKFAST
                <?php $product_type=1; ?>
                @elseif ($type=='delivery')
                    DELIVERY
                <?php $product_type=4; ?>
                @elseif ($type=='lunch')
                    LUNCH
                <?php $product_type=2; ?>
                @else
                   Error
                @endif


                 </h1>



            <!-- <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p> -->
        </div>
    </div>

    <div class="container">
        <!-- Page title and buttons -->
        <div class="row padding-bottom">
            <div class="col-6"><h4>WHAT'S FOR BREAKFAST,
                    @if ($type=='dinner')
                        DINNER
                        <?php $product_type=3; ?>
                    @elseif ($type=='breakfast')
                        BREAKFAST
                        <?php $product_type=1; ?>
                    @elseif ($type=='delivery')
                        DELIVERY
                        <?php $product_type=4; ?>
                    @elseif ($type=='lunch')
                        LUNCH
                        <?php $product_type=2; ?>
                    @else
                        Error
                    @endif
                    </h4></div>

        </div>

        <!--  -->

            <?php
            $recipe_name2='';
            $recipe_catergory='';
            $description2='';
            $amount=0;

            ?>
        @if($level=='edit')
        @foreach($products as $products)
            <?php
            $recipe_name2=$products->product_name;
            $recipe_catergory=$products->product_name;
                $description2=$products->product_descri;
                $amount=$products->price;
            ?>
            @endforeach
        @endif
        <div class="row">
            <div class="col-6">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <input type="text-input" id="recipe_name" class="form-control" id="exampleFormControlInput1" value="<?php if($level=='edit'){ echo $recipe_name2;} ?>" placeholder="Recipe Name">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <select class="form-control" id="catergory_type">
                            <?php if($level=='edit'){
                                echo '<option value="1">Recipe</option>';
                            }else{
                                echo ' <option>Choose type</option>';
                            }
                            ?>


                                <option value="2">Sides</option>
                                <option value="3">Desserts</option>
                                <option value="4">Drink</option>
                                <option value="5">Beverage</option>

                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <h4>INGREDIENTS</h4>

            </div>
        </div>


        <?php
        $image1='https://theme.zdassets.com/theme_assets/22351/0a5c59c344538bf6ed384ba542670d4443357575.png';
        $image2='https://theme.zdassets.com/theme_assets/22351/0a5c59c344538bf6ed384ba542670d4443357575.png';
        $image3='https://theme.zdassets.com/theme_assets/22351/0a5c59c344538bf6ed384ba542670d4443357575.png';
        $count=0;
        ?>
        @if($level=='edit')
            @foreach($product_image as $product_image)
            <?php
                 if($count==0){$image1=$product_image->image_path;}
                 if($count==1){ $image2=$product_image->image_path;}
                 if($count==2){ $image3=$product_image->image_path;}

                $count++;
             ?>
            @endforeach
        @endif




        <div class="row">
            <div class="col-6">
              <div class="row">
                  <div class="col-4">
                      <div id="image">

                          <a href="javascript:changeProfile()" id="image_link">
                              <i id="loading" class="fa fa-spinner fa-spin fa-3x fa-fw" style="position: absolute;left: 40%;top: 40%;display: none"></i>
                              <div>
                                  <center>
                                      <img class="img-fluid" id="preview_image" src="{{$image1}}">
                                      <br>
                                      <br>
                                  </center>

                              </div>
                          </a>
                          <input type="file" id="file" value="<?php if($level=='edit'){echo $image1;}?>" style="display: none"/>
                          <input type="hidden" id="file_name"  value="<?php if($level=='edit'){ echo $image1; } ?>"/>
                          <input type="hidden" id="recipe_image" value="<?php if($level=='edit'){ echo $image1;} ?>"/>
                          <input type="hidden" value="<?php if($level=='edit'){echo $product_id;} ?>" id="product_id"/>
                          <input type="hidden" id="user_id" value="{{$id}}"/>
                          <center><i>Primary Image</i></center>
                      </div>
                  </div>
                  <div class="col-4">
                      <div id="image">
                          <a href="javascript:changeProfile2()" id="image_link">
                              <i id="loading" class="fa fa-spinner fa-spin fa-3x fa-fw" style="position: absolute;left: 40%;top: 40%;display: none"></i>
                              <div>
                                  <center>
                                      <img class="img-fluid" id="preview_image2" src="{{$image2}}">
                                      <br>
                                      <br>
                                  </center>

                              </div>
                          </a>
                          <input type="file" id="file2" value="<?php if($level=='edit'){echo $image2;}?>" style="display: none"/>
                          <input type="hidden" id="file_name2"  value="<?php if($level=='edit'){echo $image2; } ?>"/>
                          <input type="hidden" id="recipe_image2" value="<?php if($level=='edit'){echo $image2;} ?>"/>

                      </div>
                  </div>
                  <div class="col-4">
                      <div id="image">
                          <a href="javascript:changeProfile3()" id="image_link">
                              <i id="loading" class="fa fa-spinner fa-spin fa-3x fa-fw" style="position: absolute;left: 40%;top: 40%;display: none"></i>
                              <div>
                                  <center>
                                      <img class="img-fluid" id="preview_image3" src="{{$image3}}">
                                      <br>
                                      <br>
                                  </center>

                              </div>
                          </a>
                          <input type="file" id="file3" value="<?php if($level=='edit'){echo $image3;}?>" style="display: none"/>
                          <input type="hidden" id="file_name3"  value="<?php if($level=='edit'){ echo $image3; } ?>"/>
                          <input type="hidden" id="recipe_image3" value="<?php if($level=='edit'){echo $image3;} ?>"/>
                      </div>
                  </div>

              </div>


                <div class="form-group">
                    <textarea class="form-control" id="recipe_description" rows="3" placeholder="Recipe description"><?php if($level=='edit'){echo $description2;} ?></textarea>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <select class="form-control" id="allergens">
                                <option value="">Select Allergens</option>
                                @foreach($allergens as $allergens)
                                    <option value="{{$allergens->id}}">{{$allergens->allergens_name}}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <input type="text-input" class="form-control" id="price" value="<?php if($level=='edit'){ echo $amount;} ?>">
                        </div>
                    </div>



                    <div class="col-6 link-align-left" >

                        <button onclick="save_recipe()" class="btn btn-primary" id="savebutton">SAVE</button>
                    </div>





                </div>
            </div>

            <div class="col-6 ingredient-column">
                <div class="form-group">
                    <input type="text-input" id="ingredient_name" class="form-control"  placeholder="Enter Ingredient" disabled>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <input type="number" class="form-control" id="volume" placeholder="Enter Quantity" disabled>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <select class="form-control" id="unit" disabled>
                                <option value="">Select Unit Measure</option>
                                @foreach($units as $data)

                                    <option value=" {{$data->id}}"> {{$data->unit}}</option>
                                @endforeach



                            </select>
                        </div>
                    </div>
                </div>
                <button onclick="save_ingredient()"  class="btn btn-primary custom-btn-width" id="save_ingredient" disabled>ADD</button>

                <div class="container">
                    <h4>LIST OF INGREDIENTS</h4>
                    <table class="table" id="ingredient_table">
                        <thead>
                        <tr>
                            <th scope="col">Ingredients</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Units</th>

                        </tr>
                        </thead>
                        <tbody>


                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-12 link-align-right">
                            <button onclick="change_recipe_status()" class="btn btn-primary">SUBMIT</button>
                        </div>
                    </div>

                </div>

            </div>

        </div>
        {{--<div id="snackbar">Some text some message..</div>--}}
        <?php
        $url='http://127.0.0.1:8000';
        if(url('/')=='http://127.0.0.1:8000'){
            $url='http://127.0.0.1:8000';
        }else if(url('/')=='http://cestasoft.com'){
            $url='http://cestasoft.com/2good/public';
        }
        ?>
        @endsection



        <script>

            function recipe_fields(view) {
                if(view==true){
                    document.getElementById('recipe_name').disabled = true;
                    document.getElementById('catergory_type').disabled = true;
                    document.getElementById('recipe_description').disabled = true;
                    document.getElementById('allergens').disabled = true;
                    document.getElementById('price').disabled = true;
                    document.getElementById('savebutton').disabled = true;
                    document.getElementById('image_link').href = '#';
                }else{
                    document.getElementById('recipe_name').disabled = false;
                    document.getElementById('catergory_type').disabled = false;
                    document.getElementById('recipe_description').disabled = false;
                    document.getElementById('image_link').disabled = false;
                    document.getElementById('allergens').disabled = false;
                    document.getElementById('price').disabled = false;
                    document.getElementById('savebutton').disabled = false;
                    document.getElementById('image_link').href = 'javascript:changeProfile()';
                }
            }
            function ingredients_fields(view) {
                if(view==true) {
                    document.getElementById('ingredient_name').disabled = true;
                    document.getElementById('volume').disabled = true;
                    document.getElementById('unit').disabled = true;
                    document.getElementById('save_ingredient').disabled = true;
                }else{
                    document.getElementById('ingredient_name').disabled = false;
                    document.getElementById('volume').disabled = false;
                    document.getElementById('unit').disabled = false;
                    document.getElementById('save_ingredient').disabled = false;
                }



            }
            function save_recipe() {
                var recipe_name=document.getElementById('recipe_name').value;
                var catergory_type=document.getElementById('catergory_type').value;
                var recipe_description=document.getElementById('recipe_description').value;
                var file=document.getElementById('file').value;
                var recipe_image=document.getElementById('recipe_image').value;
                var recipe_image2=document.getElementById('recipe_image2').value;
                var recipe_image3=document.getElementById('recipe_image3').value;
                var price=document.getElementById('price').value;
                var user_id=document.getElementById('user_id').value;
                var product_id=document.getElementById('product_id').value;
                // alert(product_id);

                if(recipe_name==''){
                    alert("Fill Recipe Fields");
                }else{
                    save_recipe_Data(recipe_name,catergory_type,recipe_description,catergory_type,recipe_description,recipe_image,recipe_image2,recipe_image3,price,user_id,product_id);
                }

            }

            function save_recipe_Data(recipe_name,catergory_type,recipe_description,catergory_type,recipe_description,recipe_image,recipe_image2,recipe_image3,price,user_id,product_id) {
                var form_data = new FormData();
                form_data.append('recipe_name',recipe_name);
                form_data.append('_token', '{{csrf_token()}}');
                form_data.append('catergory_type', catergory_type);
                form_data.append('product_type', {{$product_type}});
                form_data.append('recipe_description', recipe_description);
                form_data.append('recipe_image', recipe_image);
                form_data.append('recipe_image2', recipe_image2);
                form_data.append('recipe_image3', recipe_image3);
                form_data.append('price', price);
                form_data.append('user_id', user_id);
                form_data.append('product_id', product_id);
                $('#loading').css('display', 'block');
                $.ajax({
                    url: "<?php if($level=='edit'){echo url('update_recipe_data');} else{ echo url('save_new_recipe_data');} ?> ",
                    data: form_data,
                    type: 'POST',
                    contentType: false,
                    processData: false,
                    success: function (data) {
                        console.log(data);
                        $('#loading').css('display', 'none');
                        // $('#loading').css('display', 'none');
                        if(data=='false'){

                        }else  if(data>0){
                            document.getElementById('product_id').value=data;
                            // alert(data);
                            // toast("Recipe Added");
                            recipe_fields(true);
                            ingredients_fields(false)
                            //location.replace('/breakfast');
                        }else{
                            recipe_fields(false);
                            ingredients_fields(true)

                        }

                    }
                });
            }


            function changeProfile() {
                $('#file').click();

                $('#file').change(function () {
                    //alert('dfghjk');

                    if ($(this).val() != '') {
                        upload(this,1);

                    }
                });}
            function changeProfile2() {
                $('#file2').click();

                $('#file2').change(function () {
                    //alert('dfghjk');

                    if ($(this).val() != '') {
                        upload(this,2);

                    }
                });}
            function changeProfile3() {
                $('#file3').click();

                $('#file3').change(function () {
                    //alert('dfghjk');

                    if ($(this).val() != '') {
                        upload(this,3);

                    }
                });}
            function upload(img,level) {

                $(document).ready(function(){
                    $("div.content").click(function(){
                        $("div#divLoading").addClass('show');
                    });
                });

                var form_data = new FormData();
                form_data.append('file', img.files[0]);
                form_data.append('_token', '{{csrf_token()}}');
                form_data.append('url', '{{$url}}');
                $('#loading').css('display', 'block');
                $.ajax({
                    url: "{{url('upload_recipe_image')}}",
                    data: form_data,
                    type: 'POST',
                    contentType: false,
                    processData: false,
                    success: function (data) {
                        // alert(data);
                        if (data.fail) {

                            alert(data.errors['file']);
                        }
                        else {
                            if(level==1){
                                document.getElementById('recipe_image').value=data;
                                $('#file_name').val(data);
                                $('#preview_image').attr('src', data);
                            }else if(level==2){
                                document.getElementById('recipe_image2').value=data;
                                $('#file_name2').val(data);
                                $('#preview_image2').attr('src', data);
                            }else if(level==3){
                                document.getElementById('recipe_image3').value=data;
                                $('#file_name3').val(data);
                                $('#preview_image3').attr('src', data);
                            }

                        }
                        $('#loading').css('display', 'none');
                    },
                    error: function (xhr, status, error) {
                        // $('#preview_image').attr('src', ' https://via.placeholder.com/730x300');
                        alert(xhr.responseText);

                    }
                });
            }
            function save_ingredient() {

                var ingredient_name=document.getElementById('ingredient_name').value;
                var volume=document.getElementById('volume').value;
                var unit=document.getElementById('unit').value;

                var unit2 = document.getElementById("unit");
                var unittext= unit2.options[unit2.selectedIndex].text;

                var product_id=document.getElementById('product_id').value;
                var user_id=document.getElementById('user_id').value;
                 // alert(text);
                if(ingredient_name=='' || volume=='' || unit==''){
                    alert("Fill all Fields");
                }else{

                    save_ingredient_Data(ingredient_name,volume,unit,product_id,user_id,unittext);
                }
            }
            function reset_ingredients(){
                ingredient_name=document.getElementById('ingredient_name').value='';
                volume=document.getElementById('volume').value='';
                unit=document.getElementById('unit').value='';

            }
            function save_ingredient_Data(ingredient_name,volume,unit,product_id,user_id,unittext){
                var form_data = new FormData();

                form_data.append('_token', '{{csrf_token()}}');
                form_data.append('ingredient_name', ingredient_name);
                form_data.append('volume', volume);
                form_data.append('unit', unit);
                form_data.append('product_id', product_id);
                form_data.append('user_id', user_id);
                $('#loading').css('display', 'block');
                $.ajax({
                    url: "{{url('save_new_ingredient_data')}}",
                    data: form_data,
                    type: 'POST',
                    contentType: false,
                    processData: false,
                    success: function (data) {
                        console.log(data);
                        $('#loading').css('display', 'none');
                        // $('#loading').css('display', 'none');
                        if(data=='false'){

                        }else if(data='true'){

                            var table = document.getElementById("ingredient_table");
                            var row = table.insertRow(1);
                            var cell1 = row.insertCell(0);
                            var cell2 = row.insertCell(1);
                            var cell3 = row.insertCell(2);
                            cell1.innerHTML = ingredient_name;
                            cell2.innerHTML = volume;
                            cell3.innerHTML = unittext;
                            reset_ingredients();

                        }




                    }
                });
            }
            function change_recipe_status() {
                if(recipe_name=='' || catergory_type=='' || recipe_description=='' || catergory_type=='' || recipe_description=='' ||recipe_image=='' || price=='') {
                    alert("Fill all Fields");
                }else{
                    submit();
                }

            }
            function submit(){
                var product_id=document.getElementById('product_id').value;
                var user_id=document.getElementById('user_id').value;
                var form_data = new FormData();

                form_data.append('_token', '{{csrf_token()}}');

                form_data.append('product_id', product_id);
                form_data.append('user_id', user_id);
                $('#loading').css('display', 'block');
                $.ajax({
                    url: "{{url('change_recipe_status')}}",
                    data: form_data,
                    type: 'POST',
                    contentType: false,
                    processData: false,
                    success: function (data) {
                        console.log(data);
                        $('#loading').css('display', 'none');
                        // $('#loading').css('display', 'none');
                        if(data=='false'){
                            alert('Save Recipe before submitting');
                        }else if(data='true'){
                            @if ($type=='dinner')
                            location.replace('/dinner');

                            @elseif ($type=='breakfast')
                            location.replace('/breakfast');

                            @elseif ($type=='delivery')
                            // location.replace('/breakfast');

                            @elseif ($type=='lunch')
                            location.replace('/lunch');
                            @else
                            location.replace('/breakfast');
                            @endif



                        }

                        console.log(data);




                    }
                });
            }

        </script>