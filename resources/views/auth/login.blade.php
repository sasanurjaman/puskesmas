@include('partials.meta')

<body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <div class="container-fluid bg-body-tertiary dark__bg-gray-1200">
            <div class="bg-holder bg-auth-card-overlay" style="background-image:url(../../../assets/img/bg/37.png);">
            </div>
            <!--/.bg-holder-->
            <div class="row flex-center position-relative min-vh-100 g-0 py-5">
                <div class="col-7 col-sm-10 col-xl-4">
                    <div class="card border border-translucent auth-card">
                        <div class="card-body pe-md-0">
                            <div class="auth-form-box">
                                <div class="text-center mb-7"><a class="d-flex flex-center text-decoration-none mb-4"
                                        href="../../../index.html">
                                        <div class="d-flex align-items-center fw-bolder fs-3 d-inline-block">
                                            <img src="../../../assets/img/icons/logo.png" alt="phoenix" width="58" />
                                        </div>
                                    </a>
                                    <h3 class="text-body-highlight">Masuk</h3>
                                    <p class="text-body-tertiary">Masuk Ke aplikasi</p>
                                </div>
                                <form method="POST" action="{{ route('login') }}" class="needs-validation">
                                    @csrf
                                    <div class="mb-3 text-start">
                                        <label class="form-label" for="email">Email address</label>
                                        <div class="form-icon-container">
                                            <input
                                                class="form-control form-icon-input @error('email') is-invalid @enderror"
                                                value="{{ old('email') }}" required autocomplete="email" autofocus
                                                name="email" id="email" type="email" placeholder="name@example.com" />
                                            <span class="fas fa-user text-body fs-9 form-icon"></span>
                                            @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3 text-start">
                                        <label class="form-label" for="password">Password</label>
                                        <div class="form-icon-container" data-password="data-password">
                                            <input
                                                class="form-control form-icon-input pe-6 @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="current-password" id="password"
                                                type="password" placeholder="Password"
                                                data-password-input="data-password-input" />
                                            <span class="fas fa-key text-body fs-9 form-icon"></span>
                                            <button type="button"
                                                class="btn px-3 py-0 h-100 position-absolute top-0 end-0 fs-7 text-body-tertiary"
                                                data-password-toggle="data-password-toggle">
                                                <span class="uil uil-eye show"></span>
                                                <span class="uil uil-eye-slash hide"></span>
                                            </button>
                                            @error('password')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row flex-between-center mb-7">
                                        <div class="col-auto">
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" name="remember" id="remember"
                                                    type="checkbox" {{ old('remember') ? 'checked' : '' }} />
                                                <label class="form-check-label mb-0" for="remember">Remember
                                                    me</label>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            @if (Route::has('password.request'))
                                            <a class="fs-9 fw-semibold" href="{{ route('password.request') }}">Forgot
                                                Password?</a>
                                            @endif
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100 mb-3">Sign In</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    @include('partials.footer')