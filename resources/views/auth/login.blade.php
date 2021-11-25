<x-guest-layout>
    <div class="nk-main ">
        <!-- wrap @s -->
        <div class="nk-wrap nk-wrap-nosidebar">
            <!-- content @s -->
            <div class="nk-content ">
                <div class="nk-split nk-split-page nk-split-md">
                    <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white">
                        <div class="absolute-top-right d-lg-none p-3 p-sm-5">
                            <a href="#" class="toggle btn-white btn btn-icon btn-light" data-target="athPromo"><em class="icon ni ni-info"></em></a>
                        </div>
                        <div class="nk-block nk-block-middle nk-auth-body">
                            <div class="brand-logo pb-5">

                                    <img  src="{{ asset('assets/images/logo.svg') }}" srcset="{{ asset('assets/images/logo.svg') }} 2x" alt="logo-dark" height="100" width="200">
                                <h3>
            <span class="text-slider-items">
                <span style="color:#d23559;">A ERP </span> <span style="color:#f06a22">for Social</span>
                <span style="color:#f8c213">workers</span>, <span style="color: #00aa4c">A way to manage</span> <span style="color: #08a2d8"></span>
            </span>
                                    <strong class="text-slider"></strong>

                                </h3>
                            </div>
                            <div class="nk-block-head">
                                <div class="nk-block-head-content">
                                    <h5 class="nk-block-title">Sign-In</h5>
                                    <div class="nk-block-des">
                                    </div>
                                </div>
                            </div><!-- .nk-block-head -->
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <div class="form-label-group">
                                        <label class="form-label" for="default-01">Email or Username</label>
                                        <a class="link link-primary link-sm" tabindex="-1" href="#">Need Help?</a>
                                    </div>
                                    <input type="text" class="form-control form-control-lg" id="default-01" name="email" placeholder="Enter your email address or username">
                                </div><!-- .foem-group -->
                                <div class="form-group">
                                    <div class="form-label-group">
                                        <label class="form-label" for="password">Passcode</label>

                                    </div>
                                    <div class="form-control-wrap">
                                        <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch" data-target="password">
                                            <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                            <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                        </a>
                                        <input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="Enter your passcode">
                                    </div>
                                </div><!-- .foem-group -->
                                <div class="form-group">
                                    <button class="btn btn-lg btn-primary btn-block">Sign in</button>
                                </div>
                            </form><!-- form -->

                        </div><!-- .nk-block -->
                        <div class="nk-block nk-auth-footer">
                            <div class="nk-block-between">
                                <ul class="nav nav-sm">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Terms & Condition</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Privacy Policy</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Help</a>
                                    </li>

                                </ul><!-- .nav -->
                            </div>
                            <div class="mt-3">
                                <p>&copy; 2021 SARP. All Rights Reserved.</p>
                            </div>
                        </div><!-- .nk-block -->
                    </div><!-- .nk-split-content -->
                    <div class="nk-split-content nk-split-stretch bg-lighter d-flex toggle-break-lg toggle-slide toggle-slide-right" data-content="athPromo" data-toggle-screen="lg" data-toggle-overlay="true">
                        <div class="slider-wrap w-100 w-max-550px p-3 p-sm-5 m-auto">
                            <div class="slider-init" data-slick='{"dots":true, "arrows":false}'>
                                <div class="slider-item">
                                    <div class="nk-feature nk-feature-center">
                                        <div class="nk-feature-img mt-5">
                                            <img class="round" src="{{ asset('assets/images/demo2.png') }}" srcset=" {{ asset('assets/images/demo2.png') }} 2x" alt="" style="width:auto" height="380">
                                        </div>
                                        <div class="nk-feature-content py-4 p-sm-5 ">
                                            <h4>SARP</h4>
                                            <p>Your all in one ERP for managing your projects and teams.</p>
                                        </div>
                                    </div>
                                </div><!-- .slider-item -->
                                <div class="slider-item">
                                    <div class="nk-feature ">
                                        <div class="nk-feature-img">
                                            <img class="round" src=" {{ asset('assets/images/demo3.png') }}" srcset="{{ asset('assets/images/demo3.png') }} 2x" alt="" height="380" width="460">
                                        </div>
                                        <div class="nk-feature-content py-4 p-sm-5 ">
                                            <div class="d-flex justify-content-center py-2 mb-8">
                                                <h4>SARP</h4>
                                            </div>
                                           <div> <p>Create your projects and track the progress from all the sides</p></div>
                                        </div>
                                    </div>
                                </div><!-- .slider-item -->
                                <div class="slider-item">
                                    <div class="nk-feature nk-feature-center">
                                        <div class="nk-feature-img">
                                            <img class="round" src="{{ asset('assets/images/demo4.png') }}" srcset="{{ asset('assets/images/demo4.png') }} 2x" alt="" style="width: auto;" height="380">
                                        </div>
                                        <div class="nk-feature-content py-4 p-sm-5">
                                            <h4>SARP</h4>
                                            <p>No need to be in the office . access from everywhere</p>
                                        </div>
                                    </div>
                                </div><!-- .slider-item -->
                            </div><!-- .slider-init -->
                            <div class="slider-dots"></div>
                            <div class="slider-arrows"></div>
                        </div><!-- .slider-wrap -->
                    </div><!-- .nk-split-content -->
                </div><!-- .nk-split -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- content @e -->
    </div>

</x-guest-layout>
