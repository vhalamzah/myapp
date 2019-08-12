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
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">BREAKFAST</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">LUNCH</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">DINNER</a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">




            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="custom-headers">
                    <div class="row">
                        <div class="col-6"><h3 class="mb-1">MY BREAKFAST RECIPES</h3></div>
                        <div class="col-6 link-align-right"><a href="{{url('add_recipe_break_fast')}}">+New Breakfast Recipe</a></div>
                    </div>

                </div>


                <div class="row">
                    @foreach($data as $data)
                    <div class="col-6 col-md-4">
                        <img src="{{$data->image_path}}" class="rounded img-fluid" alt="...">
                        <p style="text-align: center; font-size: 20px">{{$data->product_name}}</p>
                    </div>
                    @endforeach

                </div>

            </div>



            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="custom-headers">
                    <div class="row">
                        <div class="col-6"><h3 class="mb-1">MY LUNCH RECIPES</h3></div>
                        <div class="col-6 link-align-right"><a href="{{url('add_recipe_lunch')}}">+New Lunch Recipe</a></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 col-md-4">
                        <img src="img/breakfast recipes/thumbnails/1.jpg" class="rounded img-fluid" alt="...">
                    </div>
                    <div class="col-6 col-md-4">
                        <img src="img/breakfast recipes/thumbnails/2.jpg" class="rounded img-fluid" alt="...">
                    </div>
                    <div class="col-6 col-md-4">
                        <img src="img/breakfast recipes/thumbnails/3.jpg" class="rounded img-fluid" alt="...">
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div class="custom-headers">
                    <div class="row">
                        <div class="col-6"><h3 class="mb-1">MY DINNER RECIPES</h3></div>
                        <div class="col-6 link-align-right"><a href="{{'add_recipe_dinner'}}">+New Dinner Recipe</a></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 col-md-4">
                        <img src="img/breakfast recipes/thumbnails/1.jpg" class="rounded img-fluid" alt="...">
                    </div>
                    <div class="col-6 col-md-4">
                        <img src="img/breakfast recipes/thumbnails/2.jpg" class="rounded img-fluid" alt="...">
                    </div>
                    <div class="col-6 col-md-4">
                        <img src="img/breakfast recipes/thumbnails/3.jpg" class="rounded img-fluid" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection