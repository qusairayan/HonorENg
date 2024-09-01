 <main>
     <title>Honor Dashboard Dashboard - Sign Up page</title>

     <!-- Section -->
     <section class="vh-lg-100 mt-5 mt-lg-0 bg-soft d-flex align-items-center">
         <div class="container">
             {{-- <p class="text-center"><a href="{{ route('dashboard') }}" class="text-gray-700"><i class="fas fa-angle-left me-2"></i> Back to homepage</a></p> --}}
             <div wire:ignore.self class="row justify-content-center form-bg-image"
                 data-background-lg="/assets/img/illustrations/signin.svg">
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
                                         <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path
                                                 d="M10 10a4 4 0 100-8 4 4 0 000 8zm0 2a6 6 0 00-6 6h12a6 6 0 00-6-6z">
                                             </path>
                                         </svg>
                                     </span> <input wire:model="name" id="name" type="text" class="form-control"
                                         placeholder="your name" autofocus required>
                                 </div>
                                 @error('name')
                                     <div class="invalid-feedback"> {{ $message }} </div>
                                 @enderror
                             </div>

                             <div class="form-group mt-4 mb-4">
                                 <label for="email">Your Email</label>
                                 <div class="input-group">
                                     <span class="input-group-text" id="basic-addon3"><svg
                                             class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path
                                                 d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z">
                                             </path>
                                             <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                         </svg></span>
                                     <input wire:model="email" id="email" type="email" class="form-control"
                                         placeholder="example@company.com" autofocus required>
                                 </div>
                                 @error('email')
                                     <div class="invalid-feedback"> {{ $message }} </div>
                                 @enderror
                             </div>


                             <div class="form-group mt-4 mb-4">
                                 <label for="phone">Your phone</label>
                                 <div class="input-group">
                                     <span class="input-group-text" id="basic-addon2">
                                         <svg aria-hidden="true" focusable="false" class="icon"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em"
                                             height="1em"><!-- Font Awesome Free 5.15.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) -->
                                             <path
                                                 d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z" />
                                         </svg>
                                         </svg>
                                     </span> <input wire:model="phone" id="phone" type="phone"
                                         class="form-control" placeholder="+961*********" autofocus required>
                                 </div>
                                 @error('phone')
                                     <div class="invalid-feedback"> {{ $message }} </div>
                                 @enderror
                             </div>
                             <!-- End of Form -->
                             <div class="form-group">
                                 <!-- Form -->
                                 <div class="form-group mb-4">
                                     <label for="password">Your Password</label>
                                     <div class="input-group">
                                         <span class="input-group-text" id="basic-addon4"><svg
                                                 class="icon icon-xs text-gray-600" fill="currentColor"
                                                 viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                 <path fill-rule="evenodd"
                                                     d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                                     clip-rule="evenodd"></path>
                                             </svg></span>
                                         <input wire:model.lazy="password" type="password" placeholder="Password"
                                             class="form-control" id="password" required>
                                     </div>
                                     @error('password')
                                         <div class="invalid-feedback"> {{ $message }} </div>
                                     @enderror
                                 </div>
                                 <!-- End of Form -->
                                 <!-- Form -->
                                 <div class="form-group mb-4">
                                     <label for="confirm_password">Confirm Password</label>
                                     <div class="input-group">
                                         <span class="input-group-text" id="basic-addon5"><svg
                                                 class="icon icon-xs text-gray-600" fill="currentColor"
                                                 viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                 <path fill-rule="evenodd"
                                                     d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                                     clip-rule="evenodd"></path>
                                             </svg></span>
                                         <input wire:model.lazy="passwordConfirmation" type="password"
                                             placeholder="Confirm Password" class="form-control" id="confirm_password"
                                             required>
                                     </div>
                                 </div>
                                 <!-- End of Form -->
                                 <div class="form-check mb-4">
                                     <input class="form-check-input" type="checkbox" value="" id="terms"
                                         required>
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
