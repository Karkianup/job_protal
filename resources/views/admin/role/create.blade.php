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

            <span class="preview-title-lg overline-title">Add New Role</span>
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
                <form class="is-alter form-validate" method="POST" action="{{ route('admin.role.store') }}">
                    @csrf
                    <div class="row gy-4">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label class="form-label" for="default-1-01">Title</label>
                                <input type="text" class="form-control focus" id="default-1-01" placeholder="Title"
                                    required name="title">
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="form-label" for="default-1-04">Permission</label> <br>
                                @foreach ($permissions as $permission)
                                    <span style="margin-left:20px">
                                        <input type="checkbox" name="permission_id[]" value="{{ $permission->id }}">
                                        <label>{{ $permission->title }}</label> <br></span>
                                @endforeach

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
