
<section id="contact" class="container content-section text-center">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <h2>Contact Guy Smiley</h2>
            <p>Remember Guy Smiley?  Yeah, he wants to hear from you.</p>
            <p class="bg-primary">

                {!! Form::open(['url' => '/contactus']) !!}

                    <div class="col-md-6 form-line">
                        <div class="form-group">
                            <label for="exampleInputUsername">Your Name</label>
                            <input type="text" class="form-control" id="contactInputName" placeholder="Fran Frowny">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail">Your Email Address</label>
                            <input type="email" class="form-control" id="contactInputEmail" placeholder="fran.frowny@example.com">
                        </div>
                        <div class="form-group">
                            <label for="telephone">Your Phone Number (Optional)</label>
                            <input type="tel" class="form-control" id="contactInputPhone" placeholder="XXX-XXX-XXXX">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for ="description"> Message</label>
                            <textarea  class="form-control" id="contactInputMessage" rows="8" placeholder="Enter Your Message"></textarea>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Send Message</button>
                        </div>
                    </div>

                {!! Form::close() !!}

            </p>
        </div>
    </div>
</section>
