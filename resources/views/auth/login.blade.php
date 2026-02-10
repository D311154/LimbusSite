<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Wiry's Mirror Dungeon Tracker</title>
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>
<body>
    <div class="auth-container">
        <div class="auth-card">
            <h1>Login</h1>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-error">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input
                        id="email"
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        autofocus
                        autocomplete="email"
                        placeholder="email@example.com"
                    >
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input
                        id="password"
                        type="password"
                        name="password"
                        required
                        autocomplete="current-password"
                        placeholder="Enter your password"
                    >
                </div>

                <div class="form-group-checkbox">
                    <input
                        type="checkbox"
                        name="remember"
                        id="remember"
                        {{ old('remember') ? 'checked' : '' }}
                    >
                    <label for="remember">Remember me</label>
                </div>

                <button type="submit" class="btn-primary">Login</button>
            </form>

            <div class="auth-links">
                <p>Don't have an account? <a href="{{ route('register') }}">Register here</a></p>
                <p><a href="{{ route('LimbusCompany.index') }}">Back to Home</a></p>
                <!-- this took me waaaaaay too long to get working + some reluctant help from that fuckass AI assistant
                    im lowkey killing myself if it stops working at any point -->
            </div>
        </div>
    </div>
</body>
</html>
