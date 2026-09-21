<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login</title>
      @vite('resources/css/login.css')
</head>
<body>
    <div class="login-container">
        <h2>Welcome Back</h2>
        <p class="subtitle">Please sign in to your account</p>

     

        <form >
          

            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="you@example.com" required autofocus>
            </div>

            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>

            <div class="options">
                <label>
                    <input type="checkbox" name="remember">
                    Remember me
                </label>
                <a href="#">Forgot password?</a>
            </div>

            <button type="submit" class="login-btn">Sign In</button>
        </form>

        <p class="signup-link">
            Don't have an account? <a href="#">Sign up</a>
        </p>
    </div>
</body>
</html>