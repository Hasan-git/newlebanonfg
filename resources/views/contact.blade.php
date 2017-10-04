@extends('layout.master')

@section('title','LFG - Contact')

@section('body')
    <hr style="margin: 0px; padding: 0px;">
    <!-- START PAGE TITILE SECTION -->
    <div class="page-title-section contact-page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title">
                        <h2>Contact Us</h2>
                        <p>Need Help or Promotion?</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- END OF /. PAGE TITLE SECTION -->

    <!-- START CONTACT INFO SECTION -->
    <div class="contact-info-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="info-items">
                        <i class="fa fa-envelope"></i>
                        <h4>Our Email</h4>
                        <p>alizeineddine@lebanonfg.com</p>
                        <p>alizeineddine@gmail.com</p>
                    </div>
                </div><!-- END OF /. COL -->
                <div class="col-md-4">
                    <div class="info-items">
                        <i class="fa fa-phone"></i>
                        <h4>Our Phones</h4>
                        <p>+961 Phone</p>
                        <p>Mobile</p>
                    </div>
                </div><!-- END OF /. COL -->
                <div class="col-md-4">
                    <div class="info-items">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <h4>Our Address  <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></h4>
                        <p>Street</p>
                        <p>Beirut, Lebanon</p>
                    </div>
                </div><!-- END OF /. COL -->
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="contact-title">
                        <h3>Contact With Us By a Message</h3>
                    </div>
                </div>

                <div class="col-md-8 col-md-offset-2">
                    <form action="#" class="row comment-reply contact-form">
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control" placeholder="Name*">
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="email" class="form-control" placeholder="Email*">
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" placeholder="Phone">
                        </div>
                        <div class="col-md-12 form-group">
                            <textarea name="yourtext" class="form-control" cols="30" rows="6" placeholder="Your message"></textarea>
                        </div>
                        <div class="col-md-12">
                            <input type="submit" class="comment-submit" value="Submit Your Message">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div><!-- END OF /. CONTACT INFO SECTION  -->
<div class="clearfix">&ensp;</div>
@endsection