<aside class="col-lg-3 pe-lg-4 pe-xl-5 mt-n3">
    <div class="position-lg-sticky top-0">
        <div class="d-none d-lg-block" style="padding-top: 105px;"></div>
        <div class="offcanvas-lg offcanvas-start" id="sidebarAccount">
            <button class="btn-close position-absolute top-0 end-0 mt-3 me-3 d-lg-none" type="button" data-bs-dismiss="offcanvas" data-bs-target="#sidebarAccount" aria-label="Close"></button>
            <div class="offcanvas-body">
                <div class="pb-2 pb-lg-0 mb-4 mb-lg-5">
                    <img class="d-block rounded-circle mb-2" src="{{asset('storage/'.auth()->user()->avatar)}}" width="80" alt="Isabella Bocouse">
                    <h3 class="h5 mb-1">{{auth()->user()->name}}</h3>
                    <p class="fs-sm text-body-secondary mb-0">{{auth()->user()->email}}</p>
                </div>
                <nav class="nav flex-column pb-2 pb-lg-4 mb-3">
                    <a class="nav-link fw-semibold py-2 px-0 @if(Route::currentRouteName() == 'front.dashboard') active @endif" href="{{route('front.dashboard')}}">
                        <i class="ai-dashboard fs-5 opacity-60 me-2"></i>
                        Dashboard
                    </a>
                </nav>
                <nav class="nav flex-column pb-2 pb-lg-4 mb-3">
                    <h4 class="fs-xs fw-medium text-body-secondary text-uppercase pb-1 mb-2">Account</h4>
                    <a class="nav-link fw-semibold py-2 px-0 @if(Route::currentRouteName() == 'front.profile') active @endif" href="{{route('front.profile')}}">
                        <i class="ai-user-check fs-5 opacity-60 me-2"></i>
                        Profile
                    </a>
                    <a class="nav-link fw-semibold py-2 px-0 @if(Route::currentRouteName() == 'front.profile.update') active @endif" href="{{route('front.profile.update')}}">
                        <i class="ai-user-plus fs-5 opacity-60 me-2"></i>
                        Profile Update
                    </a>
                    <a class="nav-link fw-semibold py-2 px-0 @if(Route::currentRouteName() == 'front.profile.update.password') active @endif" href="{{route('front.profile.update.password')}}">
                        <i class="ai-key fs-5 opacity-60 me-2"></i>
                        Change Password
                    </a>
                </nav>
                <nav class="nav flex-column pb-2 pb-lg-4 mb-3">
                    <h4 class="fs-xs fw-medium text-body-secondary text-uppercase pb-1 mb-2">Training</h4>
                    <a class="nav-link fw-semibold py-2 px-0 @if(Route::currentRouteName() == 'front.training') active @endif" href="{{route('front.training')}}">
                        <i class="ai-open-book fs-5 opacity-60 me-2"></i>
                        Training
                    </a>
                    <a class="nav-link fw-semibold py-2 px-0" href="">
                        <i class="ai-wallet fs-5 opacity-60 me-2"></i>
                        Billing
                    </a>
                </nav>
            </div>
        </div>
    </div>
</aside>
