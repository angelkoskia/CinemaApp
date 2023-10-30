@extends('backend.layouts.app')
@section('content')
    <div class="ms-auto pageheader-btn">
        <form action="/admin/users/import" method="post" enctype="multipart/form-data">
            @csrf
            <input type="file" name="file">
            <button type="submit" class="btn btn-primary btn-icon text-white me-2"><i class="fe fe-plus"></i>Import Users</button>
        </form>
    </div>
    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
            @if(session('duplicateEmails'))
                <br>
                <span>Duplicate emails:</span>
                <ul>
                    @foreach(session('duplicateEmails') as $email)
                        <li>{{ $email }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
    @endif
{{--    @if(session('error'))--}}
{{--        <div class="alert alert-danger">--}}
{{--            {{ session('error') }}--}}
{{--            @php dd(session('duplicateEmails')); @endphp--}}
{{--            @if(session('duplicateEmails'))--}}
{{--                <ul>--}}
{{--                    @foreach(session('duplicateEmails') as $email)--}}
{{--                        <li>{{ $email }}</li>--}}
{{--                    @endforeach--}}
{{--                </ul>--}}
{{--            @endif--}}
{{--        </div>--}}
{{--    @endif--}}

    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-2">
        <div class="card" id="accordionExample">
            <div class="card-header" id="headingOne">
                <button class="accordion-button @if(!$user) collapsed @endif" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="@if(!$user) false @else true @endif" aria-controls="collapseOne">
                    <div class="card-header" style="border-bottom: none;">
                        <h3 class="card-title">@if(!$user) + New @else + Update @endif</h3>
                    </div>
                </button>
            </div>
            <div id="collapseOne" class="accordion-collapse collapse @if($user) show @endif" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">@if(!$user) Add New @else Update @endif User</h3>
                            </div>
                            <div class="card-body">
                                <form action="{!! url($user ? '/admin/users/store/'.$user->id : '/admin/users/store' ) !!}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="title">User Role</label>
                                        <input min="0" max="1" type="number" @if($user) value="{{$user->role}}" @endif class="form-control" name="role" id="role" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="first_name">First Name</label>
                                        <input type="text" @if($user) value="{{$user->first_name}}" @endif class="form-control" name="first_name" id="first_name" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="last_name">Last Name</label>
                                        <input type="text" @if($user) value="{{$user->last_name}}" @endif class="form-control" name="last_name" id="last_name" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" @if($user) value="{{$user->email}}" @endif class="form-control" name="email" id="email" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" @if($user) value="{{$user->password}}" @endif class="form-control" name="password" id="password" required="">
                                    </div>
                                    <button class="btn btn-primary float-end" type="submit">submit</button>
                                </form>
                            </div>
                            @if($user) <a href="{!! url('/admin/users') !!}" class="btn btn-primary float-end" >clear_form</a> @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Users</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="myTables table table-bordered text-nowrap mb-0">
                        <thead>
                        <tr>
                            <th class="bg-transparent border-bottom-0 w-5">User Id</th>
                            <th class="bg-transparent border-bottom-0">User Role</th>
                            <th class="bg-transparent border-bottom-0">User Status</th>
                            <th class="bg-transparent border-bottom-0">First Name</th>
                            <th class="bg-transparent border-bottom-0">Last Name</th>
                            <th class="bg-transparent border-bottom-0">Email</th>
                            <th class="bg-transparent border-bottom-0">Orders</th>
                            <th class="bg-transparent border-bottom-0">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td> @if($user->role === 1) Admin @else Standard @endif </td>
                                <td> @if($user->status === 1) Active @else Not Active @endif </td>
                                <td>{{$user->first_name}}</td>
                                <td>{{$user->last_name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->order_count}}</td>
                                <td>
                                    @if($user->role === 0)
                                        <a href="{!! url('/admin/users/'.$user->id) !!}" class="btn btn-primary">Edit</a>
                                        <form action="{{ route('users.status', ['id' => $user->id]) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <button class="btn btn-yellow"  type="submit">Toggle Status</button>
                                        </form>

                                        <form action="{{ route('users.destroy', ['id' => $user->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">Delete User</button>
                                        </form>


                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
