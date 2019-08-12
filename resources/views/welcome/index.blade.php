@extends('welcome.app')
@section('content')
<!-- About -->
<!-- Header -->
<header class="masthead d-flex">
    <div class="container text-center my-auto">
        <img src="img/homeLogo.png">
        <h1 class="mb-1 h1-custom">Welcome</h1>
        <a class="btn btn-primary btn-xl js-scroll-trigger" data-toggle="modal" data-target="#myModal" id="login_modal">LOGIN</a>


    </div>
    <div class="overlay"></div>

    <!-- Modal Login -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Login</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" value="emmanuel@gmail.com" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="password" name="password" value="12345678" placeholder="Password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label data-toggle="modal" data-target="#myModalReg" data-dismiss="modal">Don't have an account? Sign up.</label>
                        </div>



                        <button type="submit" class="btn btn-primary" id="loginform" hidden="">Login</button>
                        <a href="#" class="btn btn-primary" onclick="checkuser()">Login</a>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Register -->
    <div class="modal fade" id="myModalReg" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Register</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>

                        <div class="form-group">
                            <label data-toggle="modal" data-target="#myModal" data-dismiss="modal">Already have an account? Sign in.</label>
                        </div>


                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


</header>
<section class="content-section bg-light" id="about">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-10 mx-auto custom-padding">
                <label>About</label>

                <h2>TooGood Food App</h2>
            </div>
            <div class="col-md-6">
                <img src="img/aboutImage.png">
            </div>
            <div class="col-md-6 mx-auto">
                <p class="lead mb-5 custom-text-style">
                    Many modern alternatives often incorporate humor or other content that actually detracts from the primary purpose of filler text: to be unobtrusive, yet provide the feel, look, and texture of filler text.
                </p>
                <p class="lead mb-5 custom-text-style">
                    Our advice: use filler text that has been edited for length and format to match the characteristics of real content as closely as possible to avoid creating a distraction, when starting a new design project, we always go back to one of the old mainstays: lorem ipsum or li Europan lingues.
                </p>
                <!-- <a class="btn btn-dark btn-xl js-scroll-trigger custom-btn-style" href="#services">What We Offer</a> -->
            </div>
        </div>
    </div>
</section>

<!-- Services -->
<section class="content-section bg-primary text-white text-center change-bg no-padding-top" id="services">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">HOW DO I ...?</h1>
            <!-- <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p> -->
        </div>
    </div>
    <div class="container">
        <div class="content-section-heading">

            <!-- <h3 class="text-secondary mb-0">How Do I Become a ...?</h3> -->
            <!--<h2 class="mb-5">What We Offer</h2> -->
        </div>


        <ul class="nav nav-tabs custom-tab-margin" id="myTab" role="tablist">
            <li class="nav-item custom-width">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Become a Chef</a>
            </li>
            <li class="nav-item custom-width">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Become a Delivery Partner</a>
            </li>
        </ul>

        <div class="tab-content" id="myTabContent ">
            <div class="tab-pane fade show active custom-tab-text-color" id="home" role="tabpanel" aria-labelledby="home-tab">

                <p>Many modern alternatives often incorporate humor or other content that actually detracts from the primary purpose of filler text: to be unobtrusive, yet provide the feel, look, and texture of filler text.</p>
                <p>Many modern alternatives often incorporate humor or other content that actually detracts from the primary purpose of filler text: to be unobtrusive, yet provide the feel, look, and texture of filler text.</p>
                <p>Many modern alternatives often incorporate humor or other content that actually detracts from the primary purpose of filler text: to be unobtrusive, yet provide the feel, look, and texture of filler text.</p>
                <div class="container text-center custom-margin-style">
                    <a class="btn btn-primary btn-xl custom-btn-color" href="{{route('become_chef')}}">BECOME A CHEF</a>
                </div>
            </div>

            <!-- Modal Chef Application 1/2 -->
            <div class="modal fade" id="myModalChefApplication1" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Chef Application 1/2</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>

                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                                <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModalChefApplication2" data-dismiss="modal">Continue</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Chef Application 2/2 -->
            <div class="modal fade" id="myModalChefApplication2" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Chef Application 2/2</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>

                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                                <button type="submit" class="btn btn-primary"><a href="dashboard.html">Submit Application</a></button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModalChefApplication1" data-dismiss="modal">Back</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="tab-pane fade custom-tab-text-color" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                <p>Our advice: use filler text that has been edited for length and format to match the characteristics of real content as closely as possible to avoid creating a distraction, when starting a new design project, we always go back to one of the old mainstays: lorem ipsum or li Europan lingues.</p>
                <p>Our advice: use filler text that has been edited for length and format to match the characteristics of real content as closely as possible to avoid creating a distraction, when starting a new design project, we always go back to one of the old mainstays: lorem ipsum or li Europan lingues.</p>
                <p>Our advice: use filler text that has been edited for length and format to match the characteristics of real content as closely as possible to avoid creating a distraction, when starting a new design project, we always go back to one of the old mainstays: lorem ipsum or li Europan lingues.</p>
                <div class="container text-center custom-margin-style">
                    <a class="btn btn-primary btn-xl custom-btn-color">BECOME A DELIVERY PARTNER</a>
                </div>
            </div>
        </div>




        <!-- <div class="row">
        <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
          <span class="service-icon rounded-circle mx-auto mb-3">
            <i class="icon-screen-smartphone"></i>
          </span>
          <h4>
            <strong>Responsive</strong>
          </h4>
          <p class="text-faded mb-0">Looks great on any screen size!</p>
        </div>
        <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
          <span class="service-icon rounded-circle mx-auto mb-3">
            <i class="icon-pencil"></i>
          </span>
          <h4>
            <strong>Redesigned</strong>
          </h4>
          <p class="text-faded mb-0">Freshly redesigned for Bootstrap 4.</p>
        </div>
        <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
          <span class="service-icon rounded-circle mx-auto mb-3">
            <i class="icon-like"></i>
          </span>
          <h4>
            <strong>Favorited</strong>
          </h4>
          <p class="text-faded mb-0">Millions of users
            <i class="fas fa-heart"></i>
            Start Bootstrap!</p>
        </div>
        <div class="col-lg-3 col-md-6">
          <span class="service-icon rounded-circle mx-auto mb-3">
            <i class="icon-mustache"></i>
          </span>
          <h4>
            <strong>Question</strong>
          </h4>
          <p class="text-faded mb-0">I mustache you a question...</p>
        </div>
    	</div>-->

    </div>
</section>


<section class="content-section bg-light" id="portfolio">
    <div class="container">

        <div class="content-section-heading text-center">
            <h2>Help and Self-service</h2>
            <label>Support. FAQs. Terms and Conditions</label>
        </div>

        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active custom-nav-pills" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">SUPPORT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link custom-nav-pills" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">FAQs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link custom-nav-pills" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">TERMS & CONDITIONS</a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <h5>Support</h5>
                <p>Many modern alternatives often incorporate humor or other content that actually detracts from the primary purpose of filler text: to be unobtrusive, yet provide the feel, look, and texture of filler text. <a href="#" class="custom-link-style">Support Guide</a></p>

                <div id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <h5 class="mb-0">
                                Log Support Query
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <p>Many modern alternatives often incorporate humor or other content that actually detracts from the primary purpose of filler text: to be unobtrusive, yet provide the feel, look, and texture of filler text.</p>
                                <form>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Choose support category</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Example textarea</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="How can we help you?"></textarea>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <h5 class="mb-0">
                                Log a complaint
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                <p>Many modern alternatives often incorporate humor or other content that actually detracts from the primary purpose of filler text: to be unobtrusive, yet provide the feel, look, and texture of filler text.</p>
                                <form>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Choose support category</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Example textarea</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="How can we help you?"></textarea>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <h5 class="mb-0">
                                Log a compliment
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                <p>Many modern alternatives often incorporate humor or other content that actually detracts from the primary purpose of filler text: to be unobtrusive, yet provide the feel, look, and texture of filler text.</p>
                                <form>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Choose support category</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Example textarea</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Give us a positive compliemnt"></textarea>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <h5>FAQs</h5>
                <p>Many modern alternatives often incorporate humor or other content that actually detracts from the primary purpose of filler text: to be unobtrusive, yet provide the feel, look, and texture of filler text.</p>
                <div id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <h5 class="mb-0">
                                Frequently asked questions
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <p>Many modern alternatives often incorporate humor or other content that actually detracts from the primary purpose of filler text: to be unobtrusive, yet provide the feel, look, and texture of filler text.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <h5 class="mb-0">
                                Frequently asked questions
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                <p>Many modern alternatives often incorporate humor or other content that actually detracts from the primary purpose of filler text: to be unobtrusive, yet provide the feel, look, and texture of filler text.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <h5 class="mb-0">
                                Frequently asked questions
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                <p>Many modern alternatives often incorporate humor or other content that actually detracts from the primary purpose of filler text: to be unobtrusive, yet provide the feel, look, and texture of filler text.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <h5>Terms and Conditions</h5>
                <p>Many modern alternatives often incorporate humor or other content that actually detracts from the primary purpose of filler text: to be unobtrusive, yet provide the feel, look, and texture of filler text.</p>
                <div id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <h5 class="mb-0">
                                Terms and conditions
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <p>Many modern alternatives often incorporate humor or other content that actually detracts from the primary purpose of filler text: to be unobtrusive, yet provide the feel, look, and texture of filler text.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <h5 class="mb-0">
                                Terms and conditions
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                <p>Many modern alternatives often incorporate humor or other content that actually detracts from the primary purpose of filler text: to be unobtrusive, yet provide the feel, look, and texture of filler text.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <h5 class="mb-0">
                                Terms and conditions
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                <p>Many modern alternatives often incorporate humor or other content that actually detracts from the primary purpose of filler text: to be unobtrusive, yet provide the feel, look, and texture of filler text.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="content-section-heading text-center">
          <h3 class="text-secondary mb-0">Portfolio</h3>
          <h2 class="mb-5">Recent Projects</h2>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-6">
            <a class="portfolio-item" href="#">
              <span class="caption">
                <span class="caption-content">
                  <h2>Stationary</h2>
                  <p class="mb-0">A yellow pencil with envelopes on a clean, blue backdrop!</p>
                </span>
              </span>
              <img class="img-fluid" src="img/portfolio-1.jpg" alt="">
            </a>
          </div>
          <div class="col-lg-6">
            <a class="portfolio-item" href="#">
              <span class="caption">
                <span class="caption-content">
                  <h2>Ice Cream</h2>
                  <p class="mb-0">A dark blue background with a colored pencil, a clip, and a tiny ice cream cone!</p>
                </span>
              </span>
              <img class="img-fluid" src="img/portfolio-2.jpg" alt="">
            </a>
          </div>
          <div class="col-lg-6">
            <a class="portfolio-item" href="#">
              <span class="caption">
                <span class="caption-content">
                  <h2>Strawberries</h2>
                  <p class="mb-0">Strawberries are such a tasty snack, especially with a little sugar on top!</p>
                </span>
              </span>
              <img class="img-fluid" src="img/portfolio-3.jpg" alt="">
            </a>
          </div>
          <div class="col-lg-6">
            <a class="portfolio-item" href="#">
              <span class="caption">
                <span class="caption-content">
                  <h2>Workspace</h2>
                  <p class="mb-0">A yellow workspace with some scissors, pencils, and other objects.</p>
                </span>
              </span>
              <img class="img-fluid" src="img/portfolio-4.jpg" alt="">
            </a>
          </div>
        </div> -->
    </div>
</section>

<!-- Call to Action -->
<section class="content-section bg-primary text-white">
    <div class="container text-center">
        <h2 class="mb-4">The buttons below are impossible to resist...</h2>
        <a href="#" class="btn btn-xl btn-light mr-4">Click Me!</a>
        <a href="#" class="btn btn-xl btn-dark">Look at Me!</a>
    </div>
</section>

<!-- Map -->
<section id="contact" class="map">
    <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
    <br />
    <small>
        <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
    </small>
</section>
    <script>
        (function() {



        })();

        function checkuser() {
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;

            var form_data = new FormData();
            form_data.append('email',email);
            form_data.append('_token', '{{csrf_token()}}');
            form_data.append('password', password);
            $('#loading').css('display', 'block');
            $.ajax({
                url: "{{url('check_user')}}",
                data: form_data,
                type: 'POST',
                contentType: false,
                processData: false,
                success:function(data){
                    if(data=='user'){
                        document.getElementById("loginform").click();
                    }else if(data=='chef'){
                        document.getElementById("loginform").click();
                    }else if(data=='admin'){
                         document.getElementById("loginform").click();
                    }else if(data=='delivery'){
                        alert(data);
                    }else {
                        alert(data);
                    }

                   // alert(data);

                }
            });

        }


    </script>
@endsection