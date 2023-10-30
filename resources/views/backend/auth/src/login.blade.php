@extends('backend.auth.layouts.app')
    @section('content')
        <!-- PAGE -->
        <div class="page">
            <div class="">
                <!-- CONTAINER OPEN -->
                <div class="col col-login mx-auto">
                    <div class="text-center">
                        <img src="/backend_assets/assets/images/brand/logo.png" class="header-brand-img" alt="">
                    </div>
                </div>
                <div class="container-login100">
                    <div class="wrap-login100 p-0">
                        <div class="card-body">
                            <form action="{{ url('/login') }}" method="post" class="login100-form validate-form">
                                @csrf
									<span class="login100-form-title">
										Login
									</span>
                                <div class="wrap-input100 validate-input" data-bs-validate = "Valid email is required: ex@abc.xyz">
                                    <input class="input100" type="text" name="email" placeholder="Email">
                                    <span class="focus-input100"></span>
                                    <span class="symbol-input100">
											<i class="zmdi zmdi-email" aria-hidden="true"></i>
										</span>
                                </div>
                                <div class="wrap-input100 validate-input" data-bs-validate = "Password is required">
                                    <input class="input100" type="password" name="password" placeholder="Password">
                                    <span class="focus-input100"></span>
                                    <span class="symbol-input100">
											<i class="zmdi zmdi-lock" aria-hidden="true"></i>
										</span>
                                </div>

                                <div class="container-login100-form-btn">
                                    <button type="submit" class="login100-form-btn btn-primary">
                                        Login
                                    </button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <!-- CONTAINER CLOSED -->
            </div>
        </div>
        <!-- End PAGE -->
    @endsection
