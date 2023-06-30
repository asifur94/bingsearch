@extends('frontend.layouts.app')

@section('title')
<title>Registration | {{ config('app.name') }} </title>
<meta name="csrf-token" content="{{csrf_token()}}">
@endsection
@section('content')

    <section class="registration">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8 ">
                        <div class="register_form">
                            <h4>Registration Form</h4>

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            
                            <form action="{{ route('submit_registration') }}" method="post">
                                @csrf
                                <label for="text">Enter your Name</label>
                                <input type="text"  name="name" placeholder="Enter your Name" required>


                                <label for="email">Enter your Email</label>
                                <input type="email"  name="email" placeholder="Enter your Email" required>


                                <label for="password">Enter your password</label>
                                <input type="password" name="password" placeholder="Enter your password" required>


                                <label for="password">Re-enter your password</label>
                                <input type="password"  name="password_confirmation" placeholder="Re-enter your password" required>


                                <button type="submit">Register Now</button>
                                <p>Have an account <a href="#">Login now</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
    </section>


@endsection
