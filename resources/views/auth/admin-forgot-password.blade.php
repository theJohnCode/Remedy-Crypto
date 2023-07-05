@extends('layouts.guest')

@section('title', 'Forgot your password')

@section('content')
<section class=" auth">
        <div class="container">
            <div class="pb-3 row justify-content-center">

                <div class="col-12 col-md-6 col-lg-6 col-sm-10 col-xl-6">
                   
                    <x-danger-alert/>
                    <x-success-alert/>

                    @if (session('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('status') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif 
                        
                    
                    <div class="bg-black shadow card login-page roundedd border-1 ">
                        <div class="card-body">
                            <h4 class="text-center card-title">Password Reset</h4>
                            <form method="POST" action="{{ route('sendpasswordrequest') }}"  class="mt-4 login-form">
                                 @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Your Email <span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <i data-feather="mail" class="fea icon-sm icons"></i>
                                                <input type="email" class="pl-5 form-control" name ="email"  id="email" placeholder="name@example.com" required>
                                            </div>
                                            @if ($errors->has('email'))
                                                <span class="help-block text-danger">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <!--end col-->

                                    
                                    <div class="mb-0 col-lg-12">
                                        <button class="btn btn-primary btn-block pad" type="submit">Continue</button>
                                    </div>
                                    <!--end col-->


                                    <div class="text-center col-12">
                                        <p class="mt-3 mb-0"><small class="mr-2 text-white">Repeat Login
                                                ?</small> <a href="{{route('adminloginform')}}"
                                                class="text-white font-weight-bold">Login</a></p>
                                    </div>
                                    <!--end col-->
                                    
                                    <div class="text-center col-12">
                                        <p class="mt-4 mb-0"><small class="mr-2 text-white">&copy; Copyright  {{date('Y')}} &nbsp; {{$settings->site_name}} &nbsp; All Rights Reserved.</small>
                                        </p>
                                    </div>
                                </div>
                                <!--end row-->
                            </form>
                        </div>
                    </div>
                    <!---->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
@endsection