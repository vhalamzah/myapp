@extends('user.app')
@section('content')
    <!-- Modal Edit Profile -->
    <div class="modal fade" id="myModalEditProfile" role="dialog">
        <div class="modal-dialog custom-modal-width">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Profile</h4>
                    <button type="button" class="close" data-dismiss="modal" id="close_edit_modal">&times;</button>
                </div>
                <div class="modal-body">


                    <div>

                        @foreach ($myprofile as $my_profile)
                        <div class="row">

                            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{  $my_profile->name }}" required autocomplete="name" autofocus>

                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Email</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{  $my_profile->email }}" required autocomplete="email">
                                    <input id="original_email" type="email" class="form-control @error('original_email') is-invalid @enderror" name="original_email" value="{{  $my_profile->email }}" hidden>
                                </div>
                            </div>



                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Cell Number</label>
                                    <input id="cell" type="number" class="form-control" name="cell" value="{{  $my_profile->cell }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Physical Address</label>
                                    <input id="address" type="text" class="form-control" name="address" value="{{  $my_profile->address }}" required>
                                </div>

                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                            <label for="exampleInputPassword1">Qualification</label>
                            <input id="chef_qualificiation" type="text" class="form-control" name="chef_qualificiation" value="{{  $my_profile->chef_qualificiation }}" required>
                                </div>
                            </div>

                        </div>
                        @endforeach
                        <button class="btn btn-primary" onclick="update_personal_info()">SAVE CHANGES</button>




                    </div>
                </div>
                <!-- <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div> -->
            </div>
        </div>
    </div>
    @foreach ($myprofile as $my_profile)
    <div class="container content-section dashboard my-auto">
        <div class="row">
            <div class="col-sm-5 col-md-6">
                {{--<div class="profile-image-bg">--}}
                    {{--<img src="img/profile-pic-1.jpg" class="profile-image-shape">--}}
                    {{--<div class="container text-center my-auto">--}}
                        {{--<h1 class="mb-1 profile-name" style="color: black;">Jane Doe</h1>--}}
                    {{--</div>--}}
                {{--</div>--}}


                <center>
                    <div class="profile-image-bg">
                        <br>
                        <div style="text-align: center;" id="image">
                            <a href="javascript:changeProfile()" style="text-decoration: none;">
                                @foreach ($myprofile as $my_profile)
                                    <img width="150px" id="preview_image" src="{{$my_profile->profile_image}}" class="profile-image-shape"/>
                                @endforeach
                                <br>
                                Change
                            </a>
                            <i id="loading" class="fa fa-spinner fa-spin fa-3x fa-fw" style="position: absolute;left: 40%;top: 40%;display: none"></i>
                        </div>
                        {{--<a href="javascript:changeProfile()" style="text-decoration: none;">--}}
                        {{--<img src="uploads/profile/user.png" class="img-responsive rounded-circle"  width="150px">--}}
                        {{--</a>--}}
                        <input type="file" id="file" style="display: none"/>
                        <input type="hidden" id="file_name"/>

                    </div>

                </center>
                <div class="custom-container no-side-padding">
                    <div class="custom-content-area">
                        <div class="row">

                            <div class="col-12 col-md-8">
                                <h3> <div id="name2">{{ $my_profile->name }}</div>
                                    </h3>
                            </div>
                            <div class="col-6 col-md-4 btn-right">
                                <button class="custom-md-btn btn btn-outline-success my-2 my-sm-0" data-toggle="modal" data-target="#myModalEditProfile">EDIT PROFILE</button>
                            </div>

                        </div>

                        <p class="custom-text custom-row-style">
                            Degree Graduate in professional culinary arts and hospitality. Mother of two. I love travelling and food. Only God can judge me.
                        </p>
                        <h3 class="custom-headings">CHEF'S CONTACT NUMBER</h3>
                        <p class="custom-text">
                            <div id="cell2">{{ $my_profile->cell }}</div>

                        </p>
                        <h3 class="custom-headings">CHEF'S EMAIL ADDRESS</h3>
                        <p class="custom-text">
                        <div id="email2">{{ $my_profile->email }}</div>


                        </p>
                        <h3 class="custom-headings">CHEF'S KITCHEN ADDRESS</h3>
                        <p class="custom-text">
                        <div id="address2">{{ $my_profile->address }}</div>

                        </p>
                    </div>
                </div>

            </div>
            <div class="col-md-4 ml-md-auto custom-container bg-light bg-left-border-style">
                <div class="custom-headers">
                    <h3 class="mb-1">CHEF INFORMATION</h3>
                    <p class="custom-text">Details and uploads</p>
                </div>
                <div class="chef-information">
                    <h3 class="custom-headings">CHEF ID/PASSPORT NUMBER</h3>
                    <p class="custom-text">#</p>

                    <h3 class="custom-headings">CHEF LICENCE NUMBER</h3>
                    <p class="custom-text">#</p>

                    <h3 class="custom-headings">CHEF LICENCE EXPIRY DATE</h3>
                    <p class="custom-text">26 July 2019</p>

                    <h3 class="custom-headings">CHEF BUSINESS REG. NUMBER</h3>
                    <p class="custom-text">#</p>

                    <h3 class="custom-headings">VAT NUMBER</h3>
                    <p class="custom-text">#</p>

                </div>

                <div class="chef-information uploads">
                    <div class="custom-headers">
                        <h3 class="mb-1">CHEF'S UPLOADS</h3>
                        <p class="custom-text">Photos of the kitchen, stove and recipes</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
        $url='';
 if(url('/')=='http://127.0.0.1:8000'){
     $url='http://127.0.0.1:8000';
 }else if(url('/')=='http://cestasoft.com'){
     $url='http://cestasoft.com/2good/public';
 }
        ?>
    @endforeach
@endsection

<script>
    function update_personal_info() {
        var name = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var cell = document.getElementById("cell").value;
        var address = document.getElementById("address").value;
        var chef_qualificiation = document.getElementById("chef_qualificiation").value;
        var original_email = document.getElementById("original_email").value;

        $.ajax({
{{--            url: "{{ url('update_personal_info')}}",--}}
            url: "http://127.0.0.1:8000/api/update_personal_info",
            type:"POST",
            contentType: false,
            processData: false,
            data:{
                name:name,
                original_email:original_email,
                email:email,
                cell:cell,
                address:address,
                email:email,
                chef_qualificiation:chef_qualificiation,
                "'_token'": '{{csrf_token()}}'

            },

            success:function(data){
                if(data=='updated'){

                     document.getElementById("name").value=name;
                    document.getElementById("email").value=email;
                     document.getElementById("cell").value=cell;
                    document.getElementById("address").value=address;
                    document.getElementById("chef_qualificiation").value=chef_qualificiation;
                   document.getElementById("original_email").value=original_email;

                    document.getElementById("cell2").innerHTML = cell;
                    document.getElementById("email2").innerHTML = email;
                    document.getElementById("address2").innerHTML = address;
                    document.getElementById("name2").innerHTML = name;
                   document.getElementById("close_edit_modal").click();
                  // alert(data)

                }else{
                    alert(data);
                }



            }
        });
    }



    function changeProfile() {
        $('#file').click();

    $('#file').change(function () {
        //alert('dfghjk');

        if ($(this).val() != '') {
            upload(this);

        }
    });}
    function upload(img) {
        var form_data = new FormData();
        form_data.append('file', img.files[0]);
        form_data.append('_token', '{{csrf_token()}}');
        form_data.append('url', '{{$url}}');
        $('#loading').css('display', 'block');
        $.ajax({
            url: "{{url('upload_profile_image')}}",
            data: form_data,
            type: 'POST',
            contentType: false,
            processData: false,
            success: function (data) {
                if (data.fail) {
                    $('#preview_image').attr('src', '{{asset('images/noimage.jpg')}}');
                    alert(data.errors['file']);
                }
                else {
                    $('#file_name').val(data);
                    $('#preview_image').attr('src', '{{asset('uploads/profile')}}/' + data);
                }
                $('#loading').css('display', 'none');
            },
            error: function (xhr, status, error) {
                alert(xhr.responseText);
                $('#preview_image').attr('src', '{{asset('images/noimage.jpg')}}');
            }
        });
    }
</script>