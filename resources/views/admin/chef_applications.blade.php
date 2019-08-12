
@extends('admin.app')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">Chef Applications</h1>
    <p class="lead">Here you will find all applications from chefs that have applied to be part of TooGood's chefs platform. Review and approve applications received.</p>


    <ul class="nav nav-pills nav-fill mb-3" id="pills-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="pills-waiting-approval-tab" data-toggle="pill" href="#pills-pendind-approval" role="tab" aria-controls="pills-home" aria-selected="true">New Applications</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-approved-tab" data-toggle="pill" href="#pills-approved" role="tab" aria-controls="pills-profile" aria-selected="false">Accepted Applications</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-rejected-tab" data-toggle="pill" href="#pills-rejected" role="tab" aria-controls="pills-rejected" aria-selected="false">Declined Applications</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-more-info-tab" data-toggle="pill" href="#pills-more-info" role="tab" aria-controls="pills-more-info" aria-selected="false">Pending Info From Chef</a>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-pendind-approval" role="tabpanel" aria-labelledby="pills-waiting-approval-tab">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Chef Name</th>
                    <th scope="col">About the chef</th>
                    <th scope="col">Chef Licence Number</th>
                    <th scope="col">Approve</th>
                    <th scope="col">Reject</th>
                    <th scope="col">More Info</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row"><a href="#">Jane Doe</a></th>
                    <td>Degree Graduate in professional culinary arts and hospitality.</td>
                    <td>CL123456789</td>
                    <td><button>Approve</button></td>
                    <td><button data-toggle="modal" data-target="#modalReject">Reject</button></td>
                    <td><button data-toggle="modal" data-target="#modalInfo">Request More Info</button></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade" id="pills-approved" role="tabpanel" aria-labelledby="pills-approved-tab">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Chef Name</th>
                    <th scope="col">About the chef</th>
                    <th scope="col">Chef Licence Number</th>
                    <th scope="col">Business Reg. Number</th>
                    <th scope="col">Chef ID/Passport</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">Jane Doe</th>
                    <td>Degree Graduate in professional culinary arts and hospitality.</td>
                    <td>CL123456789</td>
                    <td>BRN01234</td>
                    <td>9101111234789</td>
                    <td><a href="jane-doe-application-form.html">View Application</a></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade" id="pills-saved" role="tabpanel" aria-labelledby="pills-saved-tab">3</div>
        <div class="tab-pane fade" id="pills-discontinued" role="tabpanel" aria-labelledby="pills-discontinued-tab">4</div>
        <div class="tab-pane fade" id="pills-rejected" role="tabpanel" aria-labelledby="pills-rejected-tab">5</div>
        <div class="tab-pane fade" id="pills-more-info" role="tabpanel" aria-labelledby="pills-more-info-tab">6</div>
    </div>

</div>
<!-- End of Main Content -->
@endsection