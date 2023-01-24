@extends('admin.profile.layout.layout')
@section('main-content')
    <div class="card-inner card-inner-lg">
        <div class="nk-block-head nk-block-head-lg">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h4 class="nk-block-title">Personal Information</h4>
                    <div class="nk-block-des">
                        <p></p>
                    </div>
                </div>
                <div class="nk-block-head-content align-self-start d-lg-none">
                    <a href="#" class="toggle btn btn-icon btn-trigger mt-n1" data-target="userAside"><em
                            class="icon ni ni-menu-alt-r"></em></a>
                </div>
            </div>
        </div><!-- .nk-block-head -->
        <div class="nk-block">
            <div class="nk-data data-list">
                <div class="data-head">
                    <h6 class="overline-title">Basics</h6>
                </div>
                <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                    <div class="data-col">
                        <span class="data-label">Full Name</span>
                        <span class="data-value">{{ auth()->user()->name }}</span>
                    </div>
                    <div class="data-col data-col-end"><span class="data-more"><em
                                class="icon ni ni-forward-ios"></em></span></div>
                </div><!-- data-item -->

                <div class="data-item">
                    <div class="data-col">
                        <span class="data-label">Email</span>
                        <span class="data-value">{{ auth()->user()->email }}</span>
                    </div>
                    <div class="data-col data-col-end"><span class="data-more disable"><em
                                class="icon ni ni-lock-alt"></em></span></div>
                </div><!-- data-item -->
                <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                    <div class="data-col">
                        <span class="data-label">Phone Number</span>
                        <span class="data-value text-soft">Not add yet</span>
                    </div>
                    <div class="data-col data-col-end"><span class="data-more"><em
                                class="icon ni ni-forward-ios"></em></span></div>
                </div><!-- data-item -->
                <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                    <div class="data-col">
                        <span class="data-label">Date of Birth</span>
                        <span class="data-value">29 Feb, 1986</span>
                    </div>
                    <div class="data-col data-col-end"><span class="data-more"><em
                                class="icon ni ni-forward-ios"></em></span></div>
                </div><!-- data-item -->
                <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit" data-tab-target="#address">
                    <div class="data-col">
                        <span class="data-label">Address</span>
                        <span class="data-value">2337 Kildeer Drive,<br>Kentucky, Canada</span>
                    </div>
                    <div class="data-col data-col-end"><span class="data-more"><em
                                class="icon ni ni-forward-ios"></em></span></div>
                </div><!-- data-item -->
            </div><!-- data-list -->

        </div><!-- .nk-block -->
    </div>
@endsection
