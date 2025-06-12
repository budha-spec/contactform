<!doctype html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="google-site-verification" content="0Ja2h9xhCu_OAXkDVjheZDLvO4GH7rMCv97kNiI-VY0" />
    <script src="{{ url('contactform-assets/js/jquery-3.7.1.min.js') }}"></script>
    <link href="{{ url('contactform-assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ url('contactform-assets/js/bootstrap.min.js') }}"></script>
</head>
<body>
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-12">
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    {{$message}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                <h3 class="text-center">Contact Form</h3>
                <form name="contactForm" action="{{ url('contact/save') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 10px;">
                            <input class="form-control" name="firstname" placeholder="Please enter firstname" value="{{old('firstname')}}" type="text" required autofocus />
                            @error('firstname') 
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 10px;">
                            <input class="form-control" name="lastname" placeholder="Please enter lastname" type="text" value="{{old('lastname')}}" required />
                            @error('lastname') 
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                            <input class="form-control" name="email" placeholder="Please enter email" type="email" value="{{old('email')}}" required />
                            @error('email') 
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                            <input class="form-control" name="subject" placeholder="Subject" type="text" value="{{old('subject')}}" required />
                            @error('subject') 
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <textarea style="resize:vertical;" class="form-control" placeholder="Message..." rows="6" name="message" required>@if(old('message')) {{ old('message') }} @endif</textarea>
                            @error('message') 
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <input type="submit" class="btn btn-success" value="Submit"/>
                            <input type="reset" class="btn btn-danger" value="Clear" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>