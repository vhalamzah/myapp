@extends('admin.app')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Schedule Orders</h1>

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Date</th>
            <th scope="col">Breakfast</th>
            <th scope="col">Lunch</th>
            <th scope="col">Dinner</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">01 Aug 2019</th>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
        <tbody>
        <tr>
            <th scope="row">02 Aug 2019</th>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
        <tbody>
        <tr>
            <th scope="row">03 Aug 2019</th>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
        <tbody>
        <tr>
            <th scope="row">04 Aug 2019</th>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
        <tbody>
        <tr>
            <th scope="row">05 Aug 2019</th>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
        <tbody>
        <tr>
            <th scope="row">06 Aug 2019</th>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
        <tbody>
        <tr>
            <th scope="row">07 Aug 2019</th>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>

    <!-- Modal Reject Recipe-->
    <div class="modal fade" id="modalReject" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Reason for rejecting this recipe</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Why is this recipe rejected?</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Submit</button>
                </div>
            </div>
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
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection