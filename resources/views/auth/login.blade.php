<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin: 0; padding: 0; display: flex; justify-content: center; align-items: center; height: 100vh; background-color: #f1f1f1;">
    <div style="background-color: rgba(255, 255, 255, 0.9); padding: 30px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); max-width: 400px; width: 100%;">
        <h2 style="text-align: center; margin-bottom: 20px; color: #8b4513; font-weight: 600;">Login to Your Account</h2>
        <form method="POST" action="{{ route('login') }}" style="text-align: left;">
            @csrf
            <div style="margin-bottom: 10px;">
                <label for="email" style="display: block; margin-bottom: 5px; color: #333; font-weight: 500;">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus style="padding: 10px; border: 1px solid #ccc; border-radius: 4px; width: 100%; box-sizing: border-box; font-size: 16px;">
                <x-input-error :messages="$errors->get('email')" />
            </div>
            <div style="margin-bottom: 10px;">
                <label for="password" style="display: block; margin-bottom: 5px; color: #333; font-weight: 500;">Password</label>
                <input id="password" type="password" name="password" required autocomplete="current-password" style="padding: 10px; border: 1px solid #ccc; border-radius: 4px; width: 100%; box-sizing: border-box; font-size: 16px;">
                <x-input-error :messages="$errors->get('password')" />
            </div>
            <div style="margin-bottom: 10px;">
                <div style="display: flex; align-items: center;">
                    <input type="checkbox" id="remember_me" name="remember" style="margin-right: 5px;">
                    <label for="remember_me" style="color: #333; margin-right: 10px; font-weight: 500;">Remember me</label>
                </div>
            </div>
            <div>
                <button type="submit" style="background-color: #8b4513; color: #fff; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; width: 100%; font-size: 16px; margin-top: 10px;">Login</button>
            </div>
            <div>
                <a href="{{ route('password.request') }}" style="color: #8b4513; text-decoration: underline; display: block; text-align: center; margin-top: 10px;">Forgot password?</a>
            </div>
        </form>
    </div>
</body>
</html>
