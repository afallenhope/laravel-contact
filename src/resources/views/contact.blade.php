@extends('layouts.app')
@section('content')
<div class="container my-3">
    <h2 class="display-4 text-uppercase">Contact</h2>
    <p class="lead text-muted">Hey there! Do you have something in mind that you'd like to share?</p>
    <p>Please try to be descriptive as possible including any error messages if you run into any issues, or if you're requesting a new service / project include sketches if you can!</p>

    <div class="container">

    @if(session('message'))
      @include('partials.message')
    @endif

    <form action="{{route('contact')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label for="name" class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="name" id="name" placeholder="John Doe" required aria-required="true">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                    <input type="email" class="form-control" name="email" id="email" placeholder="john.doe@domain" required aria-required="true">
                </div>
            </div>
            <div class="form-group row">
                <label for="subject" class="col-sm-3 col-form-label">Subject</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Have a question" required aria-required="true">
                </div>
            </div>
            <div class="form-group row">
                <label for="comments" class="col-sm-3 col-form-label">Comments</label>
                <div class="col-sm-9">
                    <textarea class="form-control" name="comments" id="comments" rows="3" required aria-required="true"></textarea>

                </div>
            </div>
            <div class="form-group row">
                <div class="offset-sm-3 col-sm-9">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-envelope" aria-hidden="true"></i> Send</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
