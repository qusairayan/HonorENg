 <main>
    <title>Honor Dashboard Dashboard - Sign Up page</title>
    
        <!-- Section -->
        <section class="vh-lg-100 mt-5 mt-lg-0 bg-soft d-flex align-items-center">
            <div class="container">
                {{-- <p class="text-center"><a href="{{ route('dashboard') }}" class="text-gray-700"><i class="fas fa-angle-left me-2"></i> Back to homepage</a></p> --}}
                <div wire:ignore.self class="row justify-content-center form-bg-image" data-background-lg="/assets/img/illustrations/signin.svg">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="bg-white shadow border-0 rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                            <div class="text-center text-md-center mb-4 mt-md-0">
                                <h1 class="mb-0 h3">Create Account</h1>
                            </div>
                            <form wire:submit.prevent="register" action="#" method="POST">
                                <!-- Form -->
                                <div class="form-group mt-4 mb-4">
                                    <label for="name">Your Name</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1">
                                            <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 10a4 4 0 100-8 4 4 0 000 8zm0 2a6 6 0 00-6 6h12a6 6 0 00-6-6z"></path>
                                            </svg>
                                        </span>                                        <input wire:model="name" id="name" type="text" class="form-control" placeholder="your name" autofocus required>
                                    </div>
                                    @error('name') <div class="invalid-feedback"> {{ $message }} </div> @enderror 
                                </div>

                                <div class="form-group mt-4 mb-4">
                                    <label for="email">Your Email</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon3"><svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path></svg></span>
                                        <input wire:model="email" id="email" type="email" class="form-control" placeholder="example@company.com" autofocus required>
                                    </div>
                                    @error('email') <div class="invalid-feedback"> {{ $message }} </div> @enderror 
                                </div>


                                <div class="form-group mt-4 mb-4">
                                    <label for="phone">Your phone</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon2">
                                            <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 4.994V4a2 2 0 012-2h12a2 2 0 012 2v.994a2 2 0 01-1.85 1.995 17.896 17.896 0 00-.177 1.527c.002.5.007 1.002.015 1.506.009.56.017 1.128.029 1.7C16.034 13.388 15.88 14.192 14.942 14.5c-.49.157-.878.42-1.263.782l-.192.183a18.936 18.936 0 01-3.937-2.764c-.68-.698-1.31-1.356-2.05-2.17a18.936 18.936 0 01-2.764-3.937l.183-.192c.362-.385.625-.773.782-1.263.308-.938 1.111-1.092 1.547-.955.573.012 1.142.02 1.7.029.504.008 1.006.013 1.506.015a17.896 17.896 0 001.527-.177 2 2 0 011.995-1.85z"></path>
                                            </svg>
                                        </span>                                        <input wire:model="phone" id="phone" type="phone" class="form-control" placeholder="+961*********" autofocus required>
                                    </div>
                                    @error('phone') <div class="invalid-feedback"> {{ $message }} </div> @enderror 
                                </div>
                                <!-- End of Form -->
                                <div class="form-group">
                                    <!-- Form -->
                                    <div class="form-group mb-4">
                                        <label for="password">Your Password</label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon4"><svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path></svg></span>
                                            <input wire:model.lazy="password" type="password" placeholder="Password" class="form-control" id="password" required>
                                        </div>  
                                        @error('password') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                                    </div>
                                    <!-- End of Form -->
                                    <!-- Form -->
                                    <div class="form-group mb-4">
                                        <label for="confirm_password">Confirm Password</label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon5"><svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path></svg></span>
                                            <input wire:model.lazy="passwordConfirmation" type="password" placeholder="Confirm Password" class="form-control" id="confirm_password" required>
                                        </div>  
                                    </div>
                                    <!-- End of Form -->
                                    <div class="form-check mb-4">
                                        <input class="form-check-input" type="checkbox" value="" id="terms" required>
                                        <label class="form-check-label fw-normal mb-0" for="terms">
                                            I agree to the <a href="#">terms and conditions</a>
                                        </label>
                                    </div>
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-gray-800">Register</button>
                                </div>
                            </form>
                            <div class="mt-3 mb-4 text-center">
                                <span class="fw-normal">or</span>
                            </div>
                            
                            <div class="d-flex justify-content-center align-items-center mt-4">
                                <span class="fw-normal">
                                    Already have an account?
                                    <a href="{{ route('login') }}" class="fw-bold">Login here</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>