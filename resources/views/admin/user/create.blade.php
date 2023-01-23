@extends('layouts.admin')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">User Manage</a></li>
            <li class="breadcrumb-item active"><a href="#">Role</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create</li>
        </ol>
    </nav>

    <div class="card card-bordered card-preview">
        <div class="card-inner">

            <span class="preview-title-lg overline-title">Add New User</span>
            <div class="preview-block">
                @if ($errors->any())
                    <div class="alert alert-fill alert-icon alert-danger" role="alert">
                        @foreach ($errors->all() as $error)
                            <em class="icon ni ni-alert-circle"></em>
                            <ul>
                                <li>{{ $error }}</li>
                            </ul>
                        @endforeach
                    </div>
                @endif
                <form class="form-validate" method="POST" action="{{ route('admin.user.store') }}">
                    @csrf
                    <div class="row gy-4">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label" for="default-1-01">Name</label>
                                <input type="text" class="form-control focus" id="default-1-01" placeholder="Name"
                                    required name="name">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label" for="default-1-01">Email</label>
                                <input type="email" class="form-control focus" id="default-1-01" placeholder="Email"
                                    required name="email">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label" for="default-1-01">Password</label>
                                <input type="password" class="form-control focus" id="default-1-01" placeholder="Password"
                                    required name="password">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label" for="default-1-01">Confirm Password</label>
                                <input type="password" class="form-control focus" id="default-1-01"
                                    placeholder="Confirm Password" required name="confirm_password">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label">Select2 Default</label>
                                <div class="form-control-wrap">
                                    <select class="js-select2" data-search="" required name="role_id">
                                        <option selected disabled>Choose Role</option>
                                        @foreach ($roles as $id => $title)
                                            <option value="{{ $id }}">{{ $title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <button class="btn btn-primary">Add</button>
                            </div>
                        </div>
                    </div>
                    <hr class="preview-hr">
                </form>

            </div>
        </div>
    </div>
@endsection
