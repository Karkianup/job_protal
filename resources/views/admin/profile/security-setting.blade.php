@extends('admin.profile.layout.layout')
@section('main-content')
    <div class="card-inner card-inner-lg">
        <div class="nk-block-head nk-block-head-lg">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h4 class="nk-block-title">Security Settings</h4>
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
                        <div class="between-center flex-wrap g-3">
                            <div class="nk-block-text">
                                <h6>Change Password</h6>
                                <p>Set a unique password to protect your
                                    account.</p>
                            </div>
                            <div class="nk-block-actions flex-shrink-sm-0">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-3 gy-2">
                                    <li class="order-md-last">
                                        <a href="{{ route('admin.password.edit') }}" class="btn btn-primary">Change
                                            Password</a>
                                    </li>
                                    <li>
                                        <em class="text-soft text-date fs-12px"></em>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div><!-- .card-inner-group -->
            </div><!-- .card -->
        </div><!-- .nk-block -->
    </div>
@endsection

@push('js')
    <script>
        @if(Session::has('message'))
            toastr.info('{{ Session('message') }}')
        @endif
    </script>
@endpush
