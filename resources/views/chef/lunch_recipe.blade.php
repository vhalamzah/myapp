@extends('chef.app')
@section('content')


    <div class="jumbotron jumbotron-fluid text-center">
        <div class="container">
            <h1 class="display-4">RECIPES</h1>
            <!-- <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p> -->
        </div>
    </div>

    <div class="container">
        <ul class="nav nav-pills nav-fill" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link " href="{{url('breakfast')}}"  aria-controls="pills-home" aria-selected="false">BREAKFAST</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active"  href="{{url('lunch')}}"  aria-controls="pills-profile" aria-selected="true">LUNCH</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"  href="{{url('dinner')}}"  aria-controls="pills-contact" aria-selected="false">DINNER</a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="custom-headers custom-spacing">
                    <div class="row">
                        <div class="col-6"><h3 class="mb-1">MY APPROVED LUNCH RECIPES</h3></div>
                        <div class="col-6 link-align-right"><a href="{{route('myrecipe',['type'=>'lunch','level'=>'new'])}}">+New Lunch Recipe</a></div>
                    </div>

                </div>

                <div class="row">
                    @foreach($accepted as $accepted)
                        <a href="{{route('myrecipe',['type'=>'lunch','level'=>'edit','product_id'=>$accepted->product_id])}}">
                        <div class="col-6 col-md-4">
                            <img src="{{$accepted->image_path}}" class="rounded img-fluid" alt="..." width="100%">
                            <p style="text-align: center; font-size: 20px">{{$accepted->product_name}}</p>
                            <br>
                            <br>
                        </div>
                        </a>
                    @endforeach
                </div>
            </div>


        </div>
    </div>

    <div class="container custom-spacing">
        <div class="custom-headers custom-spacing">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-8" id="rejected2" hidden><h3 class="mb-1">REJECTED RECIPE</h3></div>
                <div class="col-12 col-sm-6 col-md-8" id="pending2"><h3 class="mb-1">RECIPE PENDING APPROVAL</h3></div>
                <div class="col-12 col-sm-6 col-md-8" id="saved2" hidden><h3 class="mb-1">SAVED RECIPE</h3></div>
                <div class="col-6 col-md-4">
                    <div class="form-group">
                        <select class="form-control" id="products_status" onchange="sort_products()">
                            {{--<option>--Choose View--</option>--}}
                            {{--<option>Accepted</option>--}}
                            <option value="pending">Pending</option>
                            <option value="rejected">Rejected</option>
                            <option value="saved">Saved</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" id="pending">
            @foreach($pending as $pending)
                <a href="{{route('myrecipe',['type'=>'lunch','level'=>'edit','product_id'=>$pending->product_id])}}">
            <div class="col-6 col-sm-3">
                <img src="{{$pending->image_path}}" class="rounded img-fluid" alt="...">
                <p style="text-align: center; font-size: 20px">{{$pending->product_name}}</p>
                <br><br>
            </div>
                </a>
            @endforeach
        </div>

        <div class="row" id="rejected" hidden>
            @foreach($rejected as $rejected)
                <a href="{{route('myrecipe',['type'=>'lunch','level'=>'edit','product_id'=>$rejected->product_id])}}">
                <div class="col-6 col-sm-3">
                    <img src="{{$rejected->image_path}}" class="rounded img-fluid" alt="...">
                    <p style="text-align: center; font-size: 20px">{{$rejected->product_name}}</p>
                    <br><br>
                </div>
                </a>
            @endforeach
        </div>

        <div class="row" id="saved" hidden>
            @foreach($saved as $saved)
                <a href="{{route('myrecipe',['type'=>'lunch','level'=>'edit','product_id'=>$saved->product_id])}}">
                <div class="col-6 col-sm-3">
                    <img src="{{$saved->image_path}}" class="rounded img-fluid" alt="...">
                    <p style="text-align: center; font-size: 20px">{{$saved->product_name}}</p>
                    <br><br>
                </div>
                </a>
            @endforeach
        </div>


    </div>
@endsection


<script>
    function sort_products() {
    var products_status=document.getElementById('products_status').value;
        if(products_status=='pending'){
            document.getElementById('rejected').hidden = true;
            document.getElementById('saved').hidden = true;
            document.getElementById('pending').hidden = false;

            document.getElementById('rejected2').hidden = true;
            document.getElementById('saved2').hidden = true;
            document.getElementById('pending2').hidden = false;


        }else if(products_status=='rejected'){
            document.getElementById('rejected').hidden = false;
            document.getElementById('saved').hidden = true;
            document.getElementById('pending').hidden = true;

            document.getElementById('rejected2').hidden = false;
            document.getElementById('saved2').hidden = true;
            document.getElementById('pending2').hidden = true;
        }
        else if(products_status=='saved'){
            document.getElementById('rejected').hidden = true;
            document.getElementById('saved').hidden = false;
            document.getElementById('pending').hidden = true;

            document.getElementById('rejected2').hidden = true;
            document.getElementById('saved2').hidden = false;
            document.getElementById('pending2').hidden = true;
        }

    }
</script>