<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f1f1f1; margin: 0; padding: 0; display: flex; justify-content: center; align-items: center; height: 100vh;">
    <div style="background-color: rgba(255, 255, 255, 0.9); padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); max-width: 400px; width: 100%; margin: 20px 0;">
        <h2 style="text-align: center; margin-bottom: 15px; color: #8b4513; font-weight: 600;">Register</h2>
        
        <form method="POST" action="{{ route('register') }}">
            @csrf
            
            <!-- First Name -->
            <div style="margin-bottom: 8px;">
                <label for="name" style="display: block; margin-bottom: 5px; color: #333; font-weight: 500;">First Name</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus style="padding: 8px; border: 1px solid #ccc; border-radius: 4px; width: 100%; box-sizing: border-box; font-size: 16px;">
                <x-input-error :messages="$errors->get('name')" style="color: #ff0000;" />
            </div>
            
            <!-- Last Name -->
            <div style="margin-bottom: 8px;">
                <label for="lastname" style="display: block; margin-bottom: 5px; color: ##333; font-weight: 500;">Last Name</label>
                <input id="lastname" type="text" name="lastname" value="{{ old('lastname') }}" required style="padding: 8px; border: 1px solid #ccc; border-radius: 4px; width: 100%; box-sizing: border-box; font-size: 16px;">
                <x-input-error :messages="$errors->get('lastname')" style="color: #ff0000;" />
            </div>
            
            <!-- Email Address -->
            <div style="margin-bottom: 8px;">
                <label for="email" style="display: block; margin-bottom: 5px; color: #333; font-weight: 500;">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required style="padding: 8px; border: 1px solid #ccc; border-radius: 4px; width: 100%; box-sizing: border-box; font-size: 16px;">
                <x-input-error :messages="$errors->get('email')" style="color: #ff0000;" />
            </div>
            
            <!-- Phone -->
            <div style="margin-bottom: 8px;">
                <label for="phone" style="display: block; margin-bottom: 5px; color: #333; font-weight: 500;">Phone</label>
                <input id="phone" type="text" name="phone" value="{{ old('phone') }}" required style="padding: 8px; border: 1px solid #ccc; border-radius: 4px; width: 100%; box-sizing: border-box; font-size: 16px;">
                <x-input-error :messages="$errors->get('phone')" style="color: #ff0000;" />
            </div>
            
            <!-- Address -->
            <div style="margin-bottom: 8px;">
                <label for="address" style="display: block; margin-bottom: 5px; color: #333; font-weight: 500;">Address</label>
                <input id="address" type="text" name="address" value="{{ old('address') }}" required style="padding: 8px; border: 1px solid #ccc; border-radius: 4px; width: 100%; box-sizing: border-box; font-size: 16px;">
                <x-input-error :messages="$errors->get('address')" style="color: #ff0000;" />
            </div>
            
            <!-- Password -->
            <div style="margin-bottom: 8px;">
                <label for="password" style="display: block; margin-bottom: 5px; color: #333; font-weight: 500;">Password</label>
                <input id="password" type="password" name="password" required style="padding: 8px; border: 1px solid #ccc; border-radius: 4px; width: 100%; box-sizing: border-box; font-size: 16px;">
                <x-input-error :messages="$errors->get('password')" style="color: #ff0000;" />
            </div>
            
            <!-- Confirm Password -->
            <div style="margin-bottom: 8px;">
                <label for="password_confirmation" style="display: block; margin-bottom: 5px; color: #333; font-weight: 500;">Confirm Password</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" style="padding: 8px; border: 1px solid #ccc; border-radius: 4px; width: 100%; box-sizing: border-box; font-size: 16px;">
                <x-input-error :messages="$errors->get('password_confirmation')" style="color: #ff0000;" />
            </div>
            
            <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 15px;">
                <a href="{{ route('login') }}" style="color: #8b4513; text-decoration: underline; font-size: 14px;">Already registered?</a>
                <button type="submit" style="background-color: #8b4513; color: #fff; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; font-size: 16px;">Register</button>
            </div>
        </form>
    </div>
</body>
</html>
