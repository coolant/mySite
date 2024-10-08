   @extends('layouts.admin.members')
@section('content')
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                           <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6  content-center text-center">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!!</h1>
                                    </div>
                                    <form class="user" action="{{route('admin.login.post')}}" method="POST">
                                        @csrf
                                       
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                           @if (session()->has('message'))
                                        <div class="alert alert-{{session()->get('message')['type']}}">
                                                {{session()->get('message')['description']}}

                                        </div>
                                            @endif
                                       
                                        <button type="submit" class="btn btn-primary btn-user btn-block">Enter</button>
                                            @if ($errors->count())
                                                <div class='alert-alert-danger'>
                                                   <ul>
                                                    @foreach ($errors->get('login') as $err)
                                                       <li style='list-style-type: none' class='alert-danger'>{{$err}}</li> 
                                                    @endforeach
                                                   </ul>
                                                </div>
                                            @endif


                                        <hr>
                                        
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="{{route('admin.forgetpassword')}}">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="{{route('admin.register')}}">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    @endsection
