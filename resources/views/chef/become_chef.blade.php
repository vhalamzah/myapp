<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Become a Chef 1/2</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

<div class="container" id="form1">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-chef-image"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Become a Chef 1/2 </h1>
                        </div>
                        <form class="user">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" value="" id="fname" placeholder="First Name">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" value="" id="lname" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="email" class="form-control form-control-user" value="" id="email" placeholder="Email Address">
                                </div>
                                <div class="col-sm-6">
                                    <input type="number" class="form-control form-control-user" value="" id="cell" placeholder="Contact Number">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" value="" id="password" placeholder="Password">
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user" value="" id="repassword" placeholder="Repeat Password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="number" class="form-control form-control-user" value="" id="licence" placeholder="Chef Licence Number">
                                </div>
                                <div class="col-sm-6">
                                    <input type="number" class="form-control form-control-user" value="" id="id_passport" placeholder="ID/Passport Number">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="aboutme" value="" placeholder="Tell us about you">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" id="breg" value="" placeholder="Business Registration Number">
                                </div>
                                <div class="col-sm-6">

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label>Upload Photos of your kitchen</label>
                                    <div class="row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <a href="javascript:kitchenA()" id="image_link">
                                                <center>
                                                    <img class="img-fluid" id="preview_imageA1" src="">

                                                </center>

                                                <div class="bg-placeholder-image-sml"></div>
                                            </a>
                                            <input id="kitchen1" type="file" value="" hidden/>
                                        </div>
                                        <div class="col-sm-6">
                                            <a href="javascript:kitchenB()" id="image_link">
                                                <center>
                                                    <img class="img-fluid" id="preview_imageA2" src="">

                                                </center>
                                                <div class="bg-placeholder-image-sml"></div>
                                            </a>
                                            <input id="kitchen2" type="file" value="" hidden/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label>Upload Photos of your stove</label>
                                    <div class="row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">

                                            <a href="javascript:stoveA()" id="image_link">
                                                <center>
                                                    <img class="img-fluid" id="preview_imageB1" src="">

                                                </center>
                                                <div class="bg-placeholder-image-sml"></div>
                                            </a>
                                            <input id="stove1" type="file" value="" hidden/>
                                        </div>
                                        <div class="col-sm-6">
                                            <a href="javascript:stoveB()" id="image_link">
                                                <center>
                                                    <img class="img-fluid" id="preview_imageB2" src="">

                                                </center>
                                                <div class="bg-placeholder-image-sml"></div>
                                            </a>
                                            <input id="stove2" type="file" value="" hidden/>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{--<div id="image">--}}
                                {{--<a href="javascript:changeProfile3()" id="image_link">--}}
                                    {{--<i id="loading" class="fa fa-spinner fa-spin fa-3x fa-fw" style="position: absolute;left: 40%;top: 40%;display: none"></i>--}}
                                    {{--<div>--}}
                                        {{--<center>--}}
                                            {{--<img class="img-fluid" id="preview_image3" src="">--}}
                                            {{--<br>--}}
                                            {{--<br>--}}
                                        {{--</center>--}}

                                    {{--</div>--}}
                                {{--</a>--}}
                                {{--<input type="file" id="file3" value="" style="display: none"/>--}}
                                {{--<input type="hidden" id="file_name3"  value=""/>--}}
                                {{--<input type="hidden" id="recipe_image3" value=""/>--}}
                            {{--</div>--}}

                            <a href="#" onclick="validate()" class="btn btn-primary btn-user btn-block">
                                Next
                            </a>
                            <hr>
                            <!-- <a href="index.html" class="btn btn-google btn-user btn-block">
                              <i class="fab fa-google fa-fw"></i> Register with Google
                            </a>
                            <a href="index.html" class="btn btn-facebook btn-user btn-block">
                              <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                            </a> -->
                        </form>
                        <div class="row link-spacing">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <div class="text-center">
                                    <a class="small" href="#">Become a Delivery Partner</a>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="text-center">
                                    <a class="small" href="login.html">Cancel</a>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="container" id="form2" hidden>

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-chef-image"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4"><a class="small" href="#" onclick="form1()"><i class="fas fa-chevron-left" style="margin-right: 20px;"></i></a>Become a Chef 2/2</h1>
                        </div>
                        <form>
                            @csrf
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" id="kaddress" class="form-control form-control-user" placeholder="Kitchen Address" aria-label="Kitchen Address" aria-describedby="basic-addon2" value="">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">Google Maps</button>
                                    </div>
                                </div>
                            </div>
                            <label>Upload Document (Certified Copies)</label>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <div class="input-group mb-3">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="idcopy" value="">
                                            <input type="hidden"  id="idcopyA" value="">
                                            <label class="custom-file-label " for="inputGroupFile02">ID/Passport</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group mb-3">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input " id="paddress" value="">
                                            <input type="hidden" id="paddressA" value="">
                                            <label class="custom-file-label" for="inputGroupFile02">Proof of Address</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <div class="input-group mb-3">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="clicence">
                                            <input type="hidden"  id="clicenceA" value="">
                                            <label class="custom-file-label" for="inputGroupFile02">Chef Licence Number</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group mb-3">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="bregistration">
                                            <input type="hidden" class="custom-file-input" id="bregistrationA" value="">
                                            <label class="custom-file-label" for="inputGroupFile02">Business Registration</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <div class="custom-control custom-checkbox small">
                                        <input type="checkbox" class="custom-control-input" id="customCheck">
                                        <label class="custom-control-label" for="customCheck"><a href="#">Accept Chef's Terms and Conditions</a></label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <a onclick="validate2()" href="#" class="btn btn-primary btn-user btn-block">Submit</a>
                                </div>
                            </div>


                            <!-- <a href="index.html" class="btn btn-google btn-user btn-block">
                              <i class="fab fa-google fa-fw"></i> Register with Google
                            </a>
                            <a href="index.html" class="btn btn-facebook btn-user btn-block">
                              <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                            </a> -->
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="login.html">Cancel</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<div id="snackbar"></div>
<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js" type="text/javascript"></script>
<script>
    function toast(message) {
        document.getElementById("snackbar").innerHTML=message;
        var x = document.getElementById("snackbar");
        x.className = "show";
        setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
    }
</script>
<script>


    function stoveA() {
        $('#stove1').click();
        $('#stove1').change(function () {

            if ($(this).val() != '') {
                upload(this,'stove1');
            }
        });
    }
    function stoveB() {
        $('#stove2').click();
        $('#stove2').change(function () {

            if ($(this).val() != '') {
                upload(this,'stove2');
            }
        });

    }
    function kitchenA() {
        $('#kitchen1').click();
        $('#kitchen1').change(function () {

            if ($(this).val() != '') {
                upload(this,'kitchen1');
            }
        });
    }
    function kitchenB() {
        $('#kitchen2').click();
        $('#kitchen2').change(function () {

            if ($(this).val() != '') {
                upload(this,'kitchen2');
            }
        });
    }
    function upload(image,type){
        alert(image);
    }
    function form2() {
        document.getElementById('form1').hidden=true;
        document.getElementById('form2').hidden=false;
    }
    function form1() {
        document.getElementById('form1').hidden=false;
        document.getElementById('form2').hidden=true;
    }
    function validate() {
        var fname = document.getElementById('fname').value;
        var lname = document.getElementById('lname').value;
        var cell = document.getElementById('cell').value;
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;
        var repassword = document.getElementById('repassword').value;
        var licence = document.getElementById('licence').value;
        var id_passport = document.getElementById('id_passport').value;
        var aboutme = document.getElementById('aboutme').value;
        var breg = document.getElementById('breg').value;
        var stove1 = document.getElementById('stove1').value;
        var stove2 = document.getElementById('stove2').value;
        var kitchen1 = document.getElementById('kitchen1').value;
        var kitchen2 = document.getElementById('kitchen2').value;
//|| stove1=='' || stove2=='' || kitchen1=='' || kitchen2==''
        if(fname=='' || lname=='' || cell=='' || email=='' || password=='' || repassword=='' || licence=='' || id_passport=='' || aboutme=='' || breg==''){
            alert('Fill all fields and Upload all images');
        }else{
            if(password==repassword){
                check(email);
            }else{
                alert('Password do not match');
            }

        }



    }

    function validate2() {

        var fname = document.getElementById('fname').value;
        var lname = document.getElementById('lname').value;
        var cell = document.getElementById('cell').value;
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;
        var repassword = document.getElementById('repassword').value;
        var licence = document.getElementById('licence').value;
        var id_passport = document.getElementById('id_passport').value;
        var aboutme = document.getElementById('aboutme').value;
        var breg = document.getElementById('breg').value;
        var stove1 = document.getElementById('stove1').value;
        var stove2 = document.getElementById('stove2').value;
        var kitchen1 = document.getElementById('kitchen1').value;
        var kitchen2 = document.getElementById('kitchen2').value;

        var kaddress = document.getElementById('kaddress').value;
        var idcopyA = document.getElementById('idcopyA').value;
        var paddressA = document.getElementById('paddressA').value;
        var clicenceA = document.getElementById('clicenceA').value;
        var bregistrationA = document.getElementById('bregistrationA').value;
        var customCheck = document.getElementById('customCheck').value;
        if(kaddress==''){// || idcopyA=='' || paddressA=='' || clicenceA=='' || bregistrationA=='' ){
           alert('Fill all Fields & Uploads all files');
        }else{
            store(fname,lname,cell,email,password,licence,id_passport,aboutme,breg,stove1,stove2,kitchen1,kitchen2,kaddress,idcopyA,paddressA,clicenceA,bregistrationA);
        }

    }
    function check(email) {

        var form_data = new FormData();
        form_data.append('_token', '{{csrf_token()}}');
        form_data.append('email', email);
        $('#loading').css('display', 'block');
        $.ajax({
            url: "{{url('check_user_email')}}",
            data: form_data,
            type: 'POST',
            contentType: false,
            processData: false,
            success: function (data) {
                console.log(data);
                $('#loading').css('display', 'none');
                if(data=='true'){
                    form2();
                }else{
                    alert(data)
                }


            }
        });
    }
    function store(fname,lname,cell,email,password,licence,id_passport,aboutme,breg,stove1,stove2,kitchen1,kitchen2,kaddress,idcopyA,paddressA,clicenceA,bregistrationA) {

        var form_data = new FormData();
        form_data.append('_token', '{{csrf_token()}}');
        form_data.append('fname', fname);
        form_data.append('lname', lname);
        form_data.append('cell', cell);
        form_data.append('email', email);
        form_data.append('password', password);
        form_data.append('licence', licence);
        form_data.append('id_passport', id_passport);
        form_data.append('aboutme', aboutme);
        form_data.append('kaddress', kaddress);
        form_data.append('breg', breg);
        form_data.append('stove1', stove1);
        form_data.append('stove2', stove2);
        form_data.append('kitchen1', kitchen1);
        form_data.append('kitchen2', kitchen2);
        form_data.append('idcopyA', idcopyA);
        form_data.append('paddressA', paddressA);
        form_data.append('clicenceA', clicenceA);
        form_data.append('bregistrationA', bregistrationA);

        $('#loading').css('display', 'block');
        $.ajax({
            url: "{{url('become_chef_ajax_1')}}",
            data: form_data,
            type: 'POST',
            contentType: false,
            processData: false,
            success: function (data) {
                console.log(data);
                $('#loading').css('display', 'none');
                if(data>0){
                    alert('Account Registered, you can log in now');
                    location.replace("{{url('/')}}");
                }


            }
        });
    }

    function changeProfile3() {
        $('#file3').click();

        $('#file3').change(function () {
            //alert('dfghjk');

            if ($(this).val() != '') {
                uploade(this,3);

            }
        });}
    function uploade(img,level) {

        $(document).ready(function () {
            $("div.content").click(function () {
                $("div#divLoading").addClass('show');
            });
        });
    }
</script>
</body>

</html>
