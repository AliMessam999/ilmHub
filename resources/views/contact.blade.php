@extends('include.header')
@section('content')
    <div class="pageWrapper">
        <!-- Content Start -->
        <div id="contentWrapper">
            <div class="page-title title-1">
                <div class="container">
                    <div class="row">
                        <div class="cell-12">
                            <h1 class="fx" data-animate="fadeInLeft">Contact <span>us</span></h1>
                            <div class="breadcrumbs main-bg fx" data-animate="fadeInUp">
                                <span class="bold">You Are In:</span><a href="#">Home</a><span
                                    class="line-separate">/</span><a href="#">About </a><span
                                    class="line-separate">/</span><span>Contact us</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="padd-top-50">
                <div class="container">
                    <div class="row">
                        <div class="cell-7 contact-form fx" data-animate="fadeInLeft" id="contact">
                            <h3 class="block-head">Get in Touch</h3>

                            <form id="contactform">
                                @csrf
                                <div class="form-input">

                                    <label>First name<span class="red">*</span></label>

                                    <input type="text" class="form-control" name="name" required>

                                </div>

                                <div class="form-input">

                                    <label>Email<span class="red">*</span></label>

                                    <input type="email" class="form-control" name="email" required>

                                </div>

                                <div class="form-input">

                                    <label>Phone</label>

                                    <input type="text" class="form-control" name="phone_no" required>

                                </div>

                                <div class="form-input">

                                    <label>Subject</label>
                                    <input type="text" class="form-control" name="subject" required>


                                </div>

                                <div class="form-input">

                                    <label>Message<span class="red">*</span></label>
                                    <textarea size="60" maxlength="250" required="required" row="7" col="40" name="message"></textarea>


                                </div>

                                <div class="form-input">

                                    <button id="updatebtn" type="submit"
                                        class="btn btn-large main-bg">Submit</button>&nbsp;&nbsp;<input type="reset"
                                        class="btn btn-large" value="Reset" id="reset">

                                </div>
                            </form>




                        </div>

                        <div class="cell-5 contact-detalis">

                            <h3 class="block-head">Contact Details</h3>

                            <p class="fx" data-animate="fadeInRight">Have questions?

                                Shoot us an Email</p>

                            <hr class="hr-style4">

                            <div class="clearfix"></div>

                            <div class="padding-vertical">

                                <div class="cell-12 fx" data-animate="fadeInRight">

                                    <h4 class="main-color bold">Office Location</h4>

                                    <h5 style="font-weight: 700">Address:</h5>

                                    <p>{{ __($contact->address) }}</p>

                                    <h5 style="font-weight: 700">Email:</h5>

                                    <p>{{ __($contact->email) }}</p>

                                    <h5 style="font-weight: 700">Phone:</h5>

                                    <p>{{ __($contact->contact) }}</p>

                                    <h5 style="font-weight: 700">FAX:</h5>

                                    <p>{{ __($contact->fax) }}</p>

                                </div>

                                <div class="cell-2"><br></div>

                              

                            </div>

                        </div>

                    </div>

                </div>

            </div>



            <div class="padd-vertical-45">

                <div class="container">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d3323.9052652061623!2d73.0881657152027!3d33.58180888073653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m0!4m5!1s0x38dfed6912990801%3A0xd8d04a6b9e2b677c!2sCDigital%2C%20275C%20Street%2013%2C%20Chaklala%20Scheme%203%20Chaklala%20Housing%20Scheme%203%2C%20Rawalpindi%2C%20Punjab%2046000%2C%20Pakistan!3m2!1d33.5818089!2d73.0903544!5e0!3m2!1sen!2s!4v1600230115799!5m2!1sen!2s"
                        width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false" tabindex="0"></iframe>

                </div>



            </div>

            <!-- Content End -->



        </div>


    @stop
