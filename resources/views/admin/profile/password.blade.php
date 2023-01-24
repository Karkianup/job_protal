@extends('admin.profile.layout.layout')
@section('main-content')
    <div class="card-inner card-inner-lg">
        <div class="nk-block-head nk-block-head-lg">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h4 class="nk-block-title">Change Password</h4>
                    <div class="nk-block-des">
                        <p>These settings are helps you keep your account
                            secure.</p>
                    </div>
                </div>
                <div class="nk-block-head-content align-self-start d-lg-none">
                    <a href="#" class="toggle btn btn-icon btn-trigger mt-n1" data-target="userAside"><em
                            class="icon ni ni-menu-alt-r"></em></a>
                </div>
            </div>
        </div><!-- .nk-block-head -->
        <div class="nk-block">
            <div class="card card-bordered">
                <div class="card-inner-group">

                    <div class="card-inner">
                        @if ($errors->any())
                            <div class="alert alert-fill alert-icon alert-danger" role="alert">
                                @foreach ($errors->all() as $error)
                                    <ul>
                                        <li>
                                            <em class="icon ni ni-alert-circle mr-2"></em>{{ $error }}
                                        </li>
                                    </ul>
                                @endforeach
                            </div>
                        @endif
                        <form class="form-validate" method="POST" action="{{ route('admin.password.update') }}">
                            @csrf
                            @method('put')
                            <div class="row gy-4">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label" for="default-1-01">Old
                                            Password</label>
                                        <input type="password" class="form-control focus" id="default-1-01"
                                            placeholder="Old Password" required name="old_password">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label" for="default-1-01">New
                                            Password</label>
                                        <input type="password" class="form-control focus" id="default-1-01"
                                            placeholder="New Password" required name="password">
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label" for="default-1-01">Confirm
                                            Password</label>
                                        <input type="password" class="form-control focus" id="default-1-01"
                                            placeholder="Confirm Password" required name="confirm_password">
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <button class="btn btn-primary">Change</button>
                                    </div>
                                </div>
                            </div>
                            <hr class="preview-hr">
                        </form>





                    </div>

                </div><!-- .card-inner-group -->
            </div><!-- .card -->
        </div><!-- .nk-block -->
    </div><!-- .card-inner -->
@endsection
