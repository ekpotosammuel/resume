@extends('layouts.app')


@section('content')
    <center>
        <h1>CONTACT FORM</h1>

    </center>
    <form action="https://formsubmit.co/a4c87fb5d0e512aa03b82890b01658ca" method="POST">
        <div class="row g-3">
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" class="form-control border-0 bg-secondary" name="name" id="name" placeholder="Your Name" required>
                    <label for="name">Your Name</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="email" class="form-control border-0 bg-secondary" name="email" id="email"
                        placeholder="Your Email" required>
                    <label for="email">Your Email</label>
                </div>
            </div>
            <div class="col-12">
                <div class="form-floating">
                    <input type="text" class="form-control border-0 bg-secondary" name="subject" id="subject" placeholder="Subject" required>
                    <label for="subject">Subject</label>
                </div>
            </div>
            <div class="col-12">
                <div class="form-floating">
                    <textarea class="form-control border-0 bg-secondary" placeholder="Leave a message here" name="comments, questions" id="message"
                        style="height: 200px" required></textarea>
                    <label for="message">Message</label>
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
            </div>
        </div>
    </form>
@endsection

{{-- <div class="row g-3">

    <div class="col-md-6">
        <div class="form-floating">
            <input type="email" class="form-control border-0 bg-secondary" id="email" placeholder="Your Email">
            <label for="email">Your Email</label>
        </div>
    </div>
    <div class="col-12">
        <div class="form-floating">
            <input type="text" class="form-control border-0 bg-secondary" id="subject" placeholder="Subject">
            <label for="subject">Subject</label>
        </div>
    </div>
    <div class="col-12">
        <div class="form-floating">
            <textarea class="form-control border-0 bg-secondary" placeholder="Leave a message here" id="message" style="height: 200px"></textarea>
            <label for="message">Message</label>
        </div>
    </div>
    <div class="col-12">
        <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
    </div>
</div> --}}
