@extends('user.app')
@section('content')
    <!-- About -->

<div class="container content-section dashboard my-auto">
    <h2>Overview</h2>
    <div class="row">
        @foreach($data as $myadata)
        <div class="col-6 color">
            <div class="profile-image-bg">
                <img src="{{$myadata->profile_image}}" class="profile-image-shape">
                <div class="container text-center my-auto">
                    <h1 class="mb-1 profile-name" style="color: black;">{{$myadata->name}}</h1>
                </div>
            </div>
            <div class="custom-container">
                <div class="custom-content-area">
                    <h3 class="custom-headings">ABOUT</h3>
                    <p class="custom-text">
                        Degree Graduate in professional culinary arts and hospitality. Mother of two. I love travelling and food. Only God can judge me.
                    </p>
                    <h3 class="custom-headings">CHEF'S CONTACT NUMBER</h3>
                    <p class="custom-text">
                       {{$myadata->cell}}
                    </p>
                    <h3 class="custom-headings">CHEF'S EMAIL ADDRESS</h3>
                    <p class="custom-text">
                        {{$myadata->email}}
                    </p>
                    <h3 class="custom-headings">CHEF'S KITCHEN ADDRESS</h3>
                    <p class="custom-text">
                        {{$myadata->address}}
                    </p>
                </div>
            </div>

        </div>
        @endforeach
        <div class="col-6 color">

            <div class="custom-container">
                <div class="custom-headers">
                    <h3 class="mb-1">ACCEPTED ORDERS</h3>
                    <p class="custom-text">Scheduled orders</p>
                </div>
            </div>

            <div class="custom-container date-sections">
                <h3>For 29 July 2019</h3>
                <p>Breakfast</p>
                <label class="meal-information">
                    <h3>Main : Meal Name</h3>
                    <h3>QTY <span>5</span></h3>
                </label>
            </div>
            <div class="custom-container date-sections">
                <h3>For 30 July 2019</h3>
                <p>Lunch</p>
                <label class="meal-information">
                    <h3>Main : Meal Name</h3>
                    <h3>QTY <span>5</span></h3>
                </label>
            </div>

        </div>
    </div>
</div>
@endsection