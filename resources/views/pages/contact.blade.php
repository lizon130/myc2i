@extends('layouts.master')

@section('title')
Contact
@endsection


@section('main-content')
<section>
    <div class="row roboto-slab">
        <div class="col-md-6" style="font-size: 14px; padding: 0 15px;">
            <h1 class="title">Contact Us</h1>
            <span>Islamic Center (ICA)</span> <br> <br>
            <span>8111 LYNDON B JOHNSON FWY STE 1250,</span> <br>
            <span>DALLAS, TX 75251-1319</span> <br> <br>
            <span>Phone: <span>+ 1 469 867 9430</span></span> <br>
            <span>Fax: + 1 469 867 9430</span> <br>
            <span>Email: <span>info@yoursite.com</span></span>
            <div class="mt-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1949.4455334472318!2d-96.70958792543898!3d32.88879046710584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864e9ebd225368e5%3A0x3d22b28ce010b0d8!2sLyndon%20B%20Johnson%20Fwy%2C%20Dallas%2C%20TX%2C%20USA!5e0!3m2!1sen!2sbd!4v1679992157513!5m2!1sen!2sbd" height="300" style="border:0; width:100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="col-md-6 roboto-slab" style="font-size: 14px; padding: 0 15px;">
            <h1 class="title">Get In Touch</h1>

            <p style="margin: 50px 0;">Have questions about ICA programs or services? Let us help. Use our contact form and we’ll get back to you as soon as possible.</p>

            <form>
                <div class="form mb-3">
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your name*">
                </div>
                <div class="mb-3">
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Your email*">
                </div>
                <div class="mb-3">
                  <textarea rows="3" type="text" class="form-control" id="exampleInputPassword1" placeholder="Your message*"></textarea>
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">I agree that my submitted data is being collected and stored.</label>
                </div>
                <button type="submit" id="get-in-touch-btn">Submit</button>
              </form>
        </div>
    </div>
</section>

<style>
    .form-control {
        box-sizing: border-box;
        border: 1px solid rgb(0,0,0,0);
        background-color: #fafaf2;
        padding: 10px
    }

    .form-control:focus {
        box-sizing: border-box;
        border: 1px solid #DB9E30;
        box-shadow: none;
    }

    .form-control::placeholder {
        font-size: 14px;
    }

    textarea.form-control {
        height: 100px;
        overflow-y:auto;
        resize: none;
    }

    #get-in-touch-btn {
        background-color: #DB9E30;
        border: none;
        padding: 15px 35px;
        border-radius: 5px;
    }
    #get-in-touch-btn:hover{
        background-color: #c2750a;
    }
</style>

@endsection
