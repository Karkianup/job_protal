<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>Login | DashLite Admin Template</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/dashlite.css?ver=3.1.2') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/theme.css?ver=3.1.2') }}">

    <link id="skin-default" rel="stylesheet" href=".">
</head>

<body class="nk-body bg-white npc-general pg-auth">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main" style="margin-left:40vh">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->


                <div class="nk-content ">
                    <div class="nk-split nk-split-page nk-split-lg">
                        <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white">
                            <div class="absolute-top-right d-lg-none p-3 p-sm-5">
                                <a href="#" class="toggle btn-white btn btn-icon btn-light"
                                    data-target="athPromo"><em class="icon ni ni-info"></em></a>
                            </div>
                            <div class="nk-block nk-block-middle nk-auth-body">
                                <div class="brand-logo pb-5">
                                    <a href="html/index.html" class="logo-link">
                                        <img class="logo-light logo-img logo-img-lg"
                                            src="{{ asset('admin/images/logo.png') }}"
                                            srcset="{{ asset('admin/images/logo2x.png 2x') }}" alt="logo">
                                        <img class="logo-dark logo-img logo-img-lg"
                                            src="{{ asset('admin/images/logo.png') }}"
                                            srcset="{{ asset('admin/images/logo.png') }}" alt="logo-dark">
                                    </a>
                                </div>
                                @if (Session('message'))
                                    <div class="alert alert-fill alert-icon alert-danger" role="alert">
                                        <em class="icon ni ni-alert-circle"></em>
                                        <strong>{{ Session('message') }}</strong>
                                    </div>
                                @endif
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h5 class="nk-block-title">Sign-In</h5>
                                        <div class="nk-block-des">
                                            <p>Access the Admin panel using your email and passcode.</p>
                                        </div>
                                    </div>
                                </div><!-- .nk-block-head -->

                                <form method="POST" action="{{ route('admin.login') }}" class="form-validate is-alter"
                                    autocomplete="off">
                                    @csrf
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="email-address">Email or Username</label>
                                        </div>
                                        <div class="form-control-wrap">
                                            <input autocomplete="off" type="email"
                                                class="form-control form-control-lg" required id="email-address"
                                                placeholder="Enter your email address or username" name="email">
                                        </div>
                                    </div><!-- .form-group -->
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="password">Passcode</label>
                                        </div>
                                        <div class="form-control-wrap">
                                            <a tabindex="-1" class="form-icon form-icon-right passcode-switch lg"
                                                data-target="password">
                                                {{--  <em class="passcode-icon icon-show icon ni ni-eye"></em>  --}}
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                            </a>
                                            <input autocomplete="new-password" type="password"
                                                class="form-control form-control-lg" required id="password"
                                                placeholder="Enter your passcode" name="password">
                                        </div>
                                    </div><!-- .form-group -->
                                    <div class="form-group">
                                        <button class="btn btn-lg btn-primary btn-block">Sign in</button>
                                    </div>
                                </form><!-- form -->

                            </div><!-- .nk-block -->

                        </div><!-- .nk-split-content -->

                    </div><!-- .nk-split -->
                </div>
                <!-- wrap @e -->
            </div>
            <!-- content @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="{{ asset('admin/assets/js/bundle.js?ver=3.1.2') }}"></script>
    <script src="{{ asset('admin/assets/js/scripts.js?ver=3.1.2') }}"></script>

    <!-- select region modal -->

</html>
