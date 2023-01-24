@extends('layouts.admin')
@section('content')
    <!-- content @s -->
    {{--  <div class="nk-content ">  --}}
        <div class="container">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between g-3">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">{{ $employer->name."'s"}} Details</h3>
                                <div class="nk-block-des text-soft">
                                    <p></p>
                                </div>
                            </div>
                            <div class="nk-block-head-content">
                                <a href="html/customer-list.html"
                                    class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em
                                        class="icon ni ni-arrow-left"></em><span>Back</span></a>
                                <a href="html/customer-list.html"
                                    class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em
                                        class="icon ni ni-arrow-left"></em></a>
                            </div>
                        </div>
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="row g-gs">
                            <div class="col-lg-4 col-xl-4 col-xxl-3">
                                <div class="card card-bordered">
                                    <div class="card-inner-group">
                                        <div class="card-inner">
                                            <div class="user-card user-card-s2">
                                                <div class="user-avatar lg bg-primary">
                                                    <img src="./images/avatar/b-sm.jpg" alt="">
                                                </div>
                                                <div class="user-info">
                                                    <div class="badge bg-light rounded-pill ucap">
                                                    </div>
                                                    <h5>{{ $employer->name }}</h5>
                                                    <span class="sub-text">{{ $employer->email }}</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-inner">
                                            <div class="row text-center">
                                                <div class="col-4">
                                                    <div class="profile-stats">
                                                        <span class="amount">23</span>
                                                        <span class="sub-text">Total Order</span>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="profile-stats">
                                                        <span class="amount">20</span>
                                                        <span class="sub-text">Complete</span>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="profile-stats">
                                                        <span class="amount">3</span>
                                                        <span class="sub-text">Progress</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .card-inner -->
  
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-lg-8 col-xl-8 col-xxl-9">
                                <div class="card card-bordered">
                                    <div class="card-inner">
                                        <div class="nk-block">
                                            <div class="overline-title-alt mb-2 mt-2">In Account</div>
                                            <div class="profile-balance">
                                                <div class="profile-balance-group gx-4">
                                                    <div class="profile-balance-sub">
                                                        <div class="profile-balance-amount">
                                                            <div class="number">237.89 <small
                                                                    class="currency currency-usd">USD</small>
                                                            </div>
                                                        </div>
                                                        <div class="profile-balance-subtitle">Wallet
                                                            Balance</div>
                                                    </div>
                                                    <div class="profile-balance-sub">
                                                        <span class="profile-balance-plus text-soft"><em
                                                                class="icon ni ni-plus"></em></span>
                                                        <div class="profile-balance-amount">
                                                            <div class="number">1,643</div>
                                                        </div>
                                                        <div class="profile-balance-subtitle">Credit Points
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-block">
                                            <h6 class="lead-text mb-3">Recent Orders</h6>
                                            <div class="nk-tb-list nk-tb-ulist is-compact border round-sm">
                                                <div class="nk-tb-item nk-tb-head">
                                                    <div class="nk-tb-col">
                                                        <span class="sub-text">Order ID</span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-sm">
                                                        <span class="sub-text">Product Name</span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-xxl">
                                                        <span class="sub-text">Total Price</span>
                                                    </div>
                                                    <div class="nk-tb-col">
                                                        <span class="sub-text">Status</span>
                                                    </div>
                                                    <div class="nk-tb-col">
                                                        <span class="sub-text">Delivery</span>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-item">
                                                    <div class="nk-tb-col">
                                                        <a href="#"><span class="fw-bold">#4947</span></a>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-sm">
                                                        <span class="tb-product">
                                                            <img src="./images/product/c.png" alt=""
                                                                class="thumb">
                                                            <span class="title">Black Mi Band
                                                                Smartwatch</span>
                                                        </span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-xxl">
                                                        <span class="amount">$ 89.49</span>
                                                    </div>
                                                    <div class="nk-tb-col">
                                                        <span class="lead-text text-warning">Shipped</span>
                                                    </div>
                                                    <div class="nk-tb-col">
                                                        <span class="sub-text">In 2 days</span>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-item">
                                                    <div class="nk-tb-col">
                                                        <a href="#"><span class="fw-bold">#4948</span></a>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-sm">
                                                        <span class="tb-product">
                                                            <img src="./images/product/b.png" alt=""
                                                                class="thumb">
                                                            <span class="title">Purple Smartwatch</span>
                                                        </span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-xxl">
                                                        <span class="amount">$299.49</span>
                                                    </div>
                                                    <div class="nk-tb-col">
                                                        <span class="lead-text text-success">Delivered</span>
                                                    </div>
                                                    <div class="nk-tb-col">
                                                        <span class="sub-text">12 Dec, 2020</span>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-item">
                                                    <div class="nk-tb-col">
                                                        <a href="#"><span class="fw-bold">#4949</span></a>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-sm">
                                                        <span class="tb-product">
                                                            <img src="./images/product/a.png" alt=""
                                                                class="thumb">
                                                            <span class="title">Pink Fitness
                                                                Tracker</span>
                                                        </span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-xxl">
                                                        <span class="amount">$99.49</span>
                                                    </div>
                                                    <div class="nk-tb-col">
                                                        <span class="lead-text text-danger">Canceled</span>
                                                    </div>
                                                    <div class="nk-tb-col">
                                                        <span class="sub-text">Never</span>
                                                    </div>
                                                </div>
                                            </div><!-- .nk-tb-list -->
                                        </div>

                                    </div><!-- .card-inner -->
                                </div><!-- .card -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    {{--  </div>  --}}
@endsection
