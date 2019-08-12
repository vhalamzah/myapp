@extends('admin.app')
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-9">
                <h1 class="h3 mb-4 text-gray-800"><a href="recipe-approval.html"><i class="fas fa-chevron-left" style="margin-right: 15px;"></i></a>Recipe Details</h1>
            </div>
            <div class="col-3 align-right">
                <button><a href="edit-recipe-details.html">Edit</a></button>
                <button>Save</button>
            </div>
        </div>


        <!--  -->
        <div class="row">
            <div class="col-6">
                <div class="add-image-field">
                    <img class="img-fluid" src="img/1.jpg">
                </div>

                <div class="row" style="margin-top: 30px;">
                    <div class="col-6">
                        <h4 style="color: #acbb2b">Waffle Pancake</h4>
                    </div>
                    <div class="col-6">
                        <h4 style="color: #acbb2b">Main / Dessert</h4>
                    </div>
                </div>
                <hr>
                <p style="margin-top: 30px;">Topping tootsie roll jujubes jujubes halvah caramels cotton candy macaroon sweet roll. Carrot cake wafer chupa chups caramels cake. </p>
                <div class="row">
                    <div class="col-6">
                        <h5 style="color: #acbb2b">Allergens</h5>
                        <ul>
                            <li>Milk</li>
                            <li>Cereals containing gluten</li>
                            <li>Eggs</li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <h5 style="color: #acbb2b">Cost</h5>
                        <p>R80</p>
                    </div>
                </div>
            </div>

            <div class="col-6 ingredient-column">


                <div class="container">
                    <h4>LIST OF INGREDIENTS</h4>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Ingredients</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Units</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">..</th>
                            <td>..</td>
                            <td>..</td>

                        </tr>
                        <tr>
                            <th scope="row">..</th>
                            <td>..</td>
                            <td>..</td>

                        </tr>
                        <tr>
                            <th scope="row">..</th>
                            <td>..</td>
                            <td>..</td>

                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-9">
            </div>
            <div class="col-3 align-right">
                <button data-toggle="modal" data-target="#myModal">Approve and order</button>
                <button data-toggle="modal" data-target="#modalReject">Reject</button>
                <button data-toggle="modal" data-target="#modalInfo">More Info</button>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

@endsection