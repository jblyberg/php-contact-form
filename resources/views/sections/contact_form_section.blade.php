
<section id="contact" class="container content-section text-center">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <h2>Contact Guy Smiley</h2>
            <p>Remember Guy Smiley?  Yeah, he wants to hear from you.</p>
            <p class="bg-primary">

                @if($errors->any())
                    <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                    </div>
                @endif

                @if(Session::has('contact_success'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>Thank you, Mr. Smiley will be in touch!</strong>
                    </div>
                @endif

                {!! Form::open(['url' => '/contactus#contact']) !!}

                    <div class="col-md-6 form-line">
                        <div class="form-group">
                            <label for="exampleInputUsername">Your Name</label>
                            {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'contactInputName', 'placeholder' => 'Fran Frowny']) !!}
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail">Your Email Address</label>
                            {!! Form::email('email', null, ['class' => 'form-control', 'id' => 'contactInputEmail', 'placeholder' => 'fran.frowny@example.com']) !!}
                        </div>
                        <div class="form-group">
                            <label for="telephone">Your Phone Number (Optional)</label>
                            {!! Form::tel('phone', null, ['class' => 'form-control', 'id' => 'contactInputPhone', 'placeholder' => 'XXX-XXX-XXXX']) !!}
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for ="description"> Message</label>
                            {!! Form::textarea('message', null, ['class' => 'form-control', 'id' => 'contactInputMessage', 'rows' => '8', 'placeholder' => 'Enter Your Message']) !!}
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
