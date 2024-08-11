<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>@yield('pageTitle')</title>
    <link rel="stylesheet" href="{{asset('loginback/vendor/style/style.css')}}">
    <!-- Fontawesome CDN Link -->
    <link href="{{asset('loginback/vendor/images/favicon_new.png')}}" rel="icon">
    <!-- Use only one version of Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Success Alert */
        .alert.alert-success {
            background-color: #28a745; /* Green background color */
            color: #fff; /* White text color */
            padding: 10px; /* Padding around the text */
            border-radius: 5px; /* Rounded corners */
        }

        /* Error Alert */
        .alert.alert-error {
            background-color: #dc3545; /* Red background color */
            color: #fff; /* White text color */
            padding: 10px; /* Padding around the text */
            border-radius: 5px; /* Rounded corners */
        }
    </style>
</head>
<body>
    <div class="container">
        <input type="checkbox" id="flip">
        <div class="cover">
            <div class="front">
                <img src="{{asset('loginback/img/frontImgNew.jpg')}}" alt="">
                <div class="text">
                    <span class="text-1">Transform your experiences into a visual story</span>
                    <span class="text-2">Where your achievements come to life</span>
                </div>
            </div>
            <div class="back">
                <img class="backImg" src="{{asset('loginback/vendor/images/backImg.jpg')}}" alt="">
                <div class="text">
                    <span class="text-1">Complete miles of journey <br> with one step</span>
                    <span class="text-2">Let's get started</span>
                </div>
            </div>
        </div>
        <div class="forms">
            <div class="form-content">
                <div class="login-form">
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                    <div align="center"><img src="{{asset('loginback/img/big_logo.png')}}" alt=""></div>
                    <br>
                    <div class="title">Reset Password</div>
                    <form action="{{ route('password.update') }}" method="POST">
                        @csrf	
                        <input type="hidden" name="token" value="{{ $token }}">		
                        <h4>Enter your new password, confirm and submit.</h4>						
                        <div class="input-boxes">
                            <div class="input-box">                
                                <strong><p align="center">{{ $email }}</p> </strong>
                            </div>
                            @error('email')
                            <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                            <div class="input-box" style="position: relative; display: flex; align-items: center;">
                                <!-- Lock Icon on the left -->
                                <i class="fas fa-lock" style="margin-right: 10px;"></i>
                                <!-- Input Field -->
                                <input type="password" name="password" id="passwordInput" placeholder="Enter your password" required style="flex: 1; padding-right: 30px;">
                                <!-- Eye Icon on the right -->
                                <i class="fas fa-eye" id="togglePassword" style="cursor: pointer; position: absolute; right: 10px;"></i>
                            </div>
                            @error('password')
                            <span class="invalid-feedback">{{ $message }}</span>
                            @enderror                                    
                            <div class="input-box" style="position: relative; display: flex; align-items: center;">
                                <!-- Lock Icon on the left -->
                                <i class="fas fa-lock" style="margin-right: 10px;"></i>
                                <!-- Input Field -->
                                <input type="password" name="password_confirmation" id="passwordInputConfirm" placeholder="Enter your password" required style="flex: 1; padding-right: 30px;">
                                <!-- Eye Icon on the right -->
                                <i class="fas fa-eye" id="togglePasswordConfirm" style="cursor: pointer; position: absolute; right: 10px;"></i>
                            </div>
                        </div>                            
                        <div class="button input-box">
                            <input type="hidden" name="email" value="{{ $email }}">
                            <input type="submit" value="{{ __('Reset Password') }}">
                        </div>              
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<script>
    // Toggle password visibility for the first password field
    const togglePassword = document.querySelector('#togglePassword');
    const passwordInput = document.querySelector('#passwordInput');

    togglePassword.addEventListener('click', function () {
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
        this.classList.toggle('fa-eye-slash');
    });

    // Toggle password visibility for the confirmation password field
    const togglePasswordConfirm = document.querySelector('#togglePasswordConfirm');
    const passwordInputConfirm = document.querySelector('#passwordInputConfirm');

    togglePasswordConfirm.addEventListener('click', function () {
        const type = passwordInputConfirm.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInputConfirm.setAttribute('type', type);
        this.classList.toggle('fa-eye-slash');
    });
</script>
