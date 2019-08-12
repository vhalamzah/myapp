@extends('admin.app')
@section('content')
    <div class="container-fluid">

        <h1 class="h3 mb-4 text-gray-800">Recipes</h1>
        <p class="lead">All recipes submitted by TooGood chefs. Use the filter options at the top bar to help you with finding what you looking for.</p>


        <ul class="nav nav-pills nav-fill mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-waiting-approval-tab" data-toggle="pill" href="#pills-pendind-approval" role="tab" aria-controls="pills-home" aria-selected="true">Waiting for Approval</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-approved-tab" data-toggle="pill" href="#pills-approved" role="tab" aria-controls="pills-profile" aria-selected="false">Approved</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-saved-tab" data-toggle="pill" href="#pills-saved" role="tab" aria-controls="pills-saved" aria-selected="false">Saved</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-discontinued-tab" data-toggle="pill" href="#pills-discontinued" role="tab" aria-controls="pills-discontinued" aria-selected="false">Discontinued</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-rejected-tab" data-toggle="pill" href="#pills-rejected" role="tab" aria-controls="pills-rejected" aria-selected="false">Rejected</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-more-info-tab" data-toggle="pill" href="#pills-more-info" role="tab" aria-controls="pills-more-info" aria-selected="false">More Info</a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-pendind-approval" role="tabpanel" aria-labelledby="pills-waiting-approval-tab">
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Recipe Code</th>
                        <th scope="col">Recipe Name</th>
                        <th scope="col">Short Description</th>
                        <th scope="col">Chef</th>
                        <th scope="col">Approve</th>
                        <th scope="col">Reject</th>
                        <th scope="col">More Info</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($waiting as $waiting)
                        <tr>
                            <th scope="row">{{$waiting->myid}}</th>
                            <td> {{$waiting->product_name}}</td>
                            <td>{{$waiting->product_descri}} </td>
                            <td>{{$waiting->chefname}}</td>
                            <td> <a href="{{route('approve_recipe',$waiting->myid)}}}" class="btn btn-outline-success btn-sm my-2 my-sm-0">Accept</a></td>
                            <td>
                                {{--<a href="{{route('decline_recipe',$myprofile->myid)}}" class="btn btn-outline-danger btn-sm my-2 my-sm-0">Decline</a>--}}
                                <button data-toggle="modal" data-target="#modalReject" onclick="reject({{$waiting->myid}})" class="btn btn-outline-danger btn-sm my-2 my-sm-0">Reject</button>
                            </td>
                            <td><button data-toggle="modal" data-target="#modalInfo" class="btn btn-outline-danger btn-sm my-2 my-sm-0">More Info</button></td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="pills-approved" role="tabpanel" aria-labelledby="pills-approved-tab">
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Recipe Code</th>
                        <th scope="col">Recipe Name</th>
                        <th scope="col">Short Description</th>
                        <th scope="col">Chef</th>
                        <th scope="col">Order Recipe</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach ($approved as $approved)
                        <tr>
                            <th scope="row">{{$approved->myid}}</th>
                            <td> <a href="{{route('recipe_details')}}">{{$approved->product_name}}</a></td>
                            <td>{{$approved->product_descri}} </td>
                            <td>{{$approved->chefname}}</td>
                            <td><button data-toggle="modal" data-target="#myModal">Order This Recipe</button></td>
                        </tr>
                    @endforeach
                    {{--<tr>--}}
                        {{--<th scope="row">01-08-2019/5h42PM</th>--}}
                        {{--<td><a href="recipe-details.html">Waffle Pancake</a></td>--}}
                        {{--<td>You can have it anytime.</td>--}}
                        {{--<td>Jane Doe</td>--}}
                        {{--<td><button data-toggle="modal" data-target="#myModal">Order This Recipe</button></td>--}}
                    {{--</tr>--}}
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="pills-saved" role="tabpanel" aria-labelledby="pills-saved-tab">
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Recipe Code</th>
                        <th scope="col">Recipe Name</th>
                        <th scope="col">Short Description</th>
                        <th scope="col">Chef</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($saved as $saved)
                        <tr>
                            <th scope="row">{{$saved->myid}}</th>
                            <td> {{$saved->product_name}}</td>
                            <td>{{$saved->product_descri}} </td>
                            <td>{{$saved->chefname}}</td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>

            </div>
            <div class="tab-pane fade" id="pills-discontinued" role="tabpanel" aria-labelledby="pills-discontinued-tab">4</div>
            <div class="tab-pane fade" id="pills-rejected" role="tabpanel" aria-labelledby="pills-rejected-tab">
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Recipe Code</th>
                        <th scope="col">Recipe Name</th>
                        <th scope="col">Short Description</th>
                        <th scope="col">Chef</th>
                        <th scope="col">Reason</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($rejected as $rejected)
                        <tr>
                            <th scope="row">{{$rejected->myid}}</th>
                            <td> {{$rejected->product_name}}</td>
                            <td>{{$rejected->product_descri}} </td>
                            <td>{{$rejected->chefname}}</td>
                            <td>{{$rejected->comment}}</td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="pills-more-info" role="tabpanel" aria-labelledby="pills-more-info-tab">6</div>
        </div>



    </div>
    <!-- Modal Reject Recipe-->
    <div class="modal fade" id="modalReject" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <form method="POST" action="{{ route('decline_recipe') }}">
                @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Reason for rejecting this recipe</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Why is this recipe rejected?</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="reason_comment" rows="3" required></textarea>
                        <input type="hidden" id="reject_id" name="reject_id" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-default" >Submit</button>
                </div>
            </div>
            </form>
        </div>
    </div>

    <!-- Modal More Info Recipe-->
    <div class="modal fade" id="modalInfo" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">More info</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">What info do you need from the chef?</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Submit</button>
                </div>
            </div>
        </div>
    </div>
@endsection

<script>
    function reject(id) {
        document.getElementById('reject_id').value=id;
    }
</script>