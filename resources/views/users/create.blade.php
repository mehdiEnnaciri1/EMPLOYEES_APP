@extends('layouts.app')

@section('title')
    Inscription - Arrondissement AIN-SBAA
@endsection

@section('content')
    <div class="signup-container">
        <!-- Panneau Gauche -->
        <div class="left-panel">
            <div class="brand-section">
                <div class="logo-container">
                    <i class="fas fa-building logo-icon"></i>
                </div>
                <h1 class="brand-title">Arrondissement AIN-SBAA</h1>
                <p class="brand-subtitle">
                    Plateforme de gestion administrative
                </p>
            </div>

            <div class="features-section">
                <div class="feature">
                    <div class="feature-icon-wrapper">
                        <i class="fas fa-user-plus feature-icon"></i>
                    </div>
                    <div class="feature-content">
                        <h3>Création de compte</h3>
                        <p>Rejoignez notre plateforme en quelques étapes</p>
                    </div>
                </div>
                <div class="feature">
                    <div class="feature-icon-wrapper">
                        <i class="fas fa-check-circle feature-icon"></i>
                    </div>
                    <div class="feature-content">
                        <h3>Accès rapide</h3>
                        <p>Accédez à tous les services après inscription</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Panneau Droit -->
        <div class="right-panel">
            <div class="signup-section">
                <div class="signup-header">
                    <h2 class="signup-title">Créer un compte</h2>
                    <p class="signup-subtitle">Remplissez le formulaire pour vous inscrire</p>
                </div>

                @include('layouts.alert')

                <form method="POST" action="{{ route('users.store') }}" class="signup-form">
                    @csrf

                    <div class="input-group">
                        <label for="name" class="input-label">
                            <i class="fas fa-user"></i>
                            <span>Nom et prénom</span>
                        </label>
                        <div class="input-wrapper">
                            <i class="fas fa-user input-icon"></i>
                            <input 
                                id="name" 
                                type="text" 
                                class="input @error('name') is-invalid @enderror" 
                                name="name" 
                                value="{{ old('name') }}"
                                required
                                autofocus
                                placeholder="Saisissez votre nom et prénom"
                            >
                        </div>
                        @error('name')
                            <div class="error-message">
                                <i class="fas fa-exclamation-circle"></i>
                                <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <div class="input-group">
                        <label for="email" class="input-label">
                            <i class="fas fa-envelope"></i>
                            <span>Email</span>
                        </label>
                        <div class="input-wrapper">
                            <i class="fas fa-envelope input-icon"></i>
                            <input 
                                id="email" 
                                type="email" 
                                class="input @error('email') is-invalid @enderror" 
                                name="email" 
                                value="{{ old('email') }}"
                                required
                                autocomplete="email"
                                placeholder="Saisissez votre email"
                            >
                        </div>
                        @error('email')
                            <div class="error-message">
                                <i class="fas fa-exclamation-circle"></i>
                                <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <div class="input-group">
                        <label for="password" class="input-label">
                            <i class="fas fa-lock"></i>
                            <span>Mot de passe</span>
                        </label>
                        <div class="input-wrapper">
                            <i class="fas fa-lock input-icon"></i>
                            <input 
                                id="password" 
                                type="password" 
                                class="input @error('password') is-invalid @enderror" 
                                name="password"
                                required
                                autocomplete="new-password"
                                placeholder="Saisissez votre mot de passe"
                            >
                        </div>
                        @error('password')
                            <div class="error-message">
                                <i class="fas fa-exclamation-circle"></i>
                                <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <div class="input-group">
                        <label for="password_confirmation" class="input-label">
                            <i class="fas fa-lock"></i>
                            <span>Confirmation du mot de passe</span>
                        </label>
                        <div class="input-wrapper">
                            <i class="fas fa-lock input-icon"></i>
                            <input 
                                id="password_confirmation" 
                                type="password" 
                                class="input" 
                                name="password_confirmation"
                                required
                                autocomplete="new-password"
                                placeholder="Confirmez votre mot de passe"
                            >
                        </div>
                    </div>

                    <button type="submit" class="btn-submit">
                        <i class="fas fa-user-plus"></i>
                        <span>Créer mon compte</span>
                    </button>

                    <div class="signup-footer">
                        <p class="text-center">
                            Vous avez déjà un compte ? 
                            <a href="{{ url('login') }}" class="login-link">Se connecter</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            overflow: hidden;
            height: 100vh;
        }

        .signup-container {
            height: 100vh;
            display: flex;
            overflow: hidden;
        }

        /* Panneau Gauche */
        .left-panel {
            flex: 1;
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 50%, #1e88e5 100%);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 30px 40px;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .left-panel::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 1px, transparent 1px);
            background-size: 50px 50px;
            animation: movePattern 20s linear infinite;
        }

        @keyframes movePattern {
            0% {
                transform: translate(0, 0);
            }
            100% {
                transform: translate(50px, 50px);
            }
        }

        .brand-section {
            z-index: 1;
            position: relative;
            text-align: center;
            width: 100%;
            max-width: 600px;
        }

        .logo-container {
            margin-bottom: 15px;
            display: flex;
            justify-content: center;
        }

        .logo-icon {
            font-size: 3rem;
            color: white;
            opacity: 0.95;
        }

        .brand-title {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 8px;
            letter-spacing: -0.5px;
            text-align: center;
        }

        .brand-subtitle {
            font-size: 1rem;
            opacity: 0.9;
            font-weight: 300;
            line-height: 1.4;
            text-align: center;
        }

        .features-section {
            z-index: 1;
            position: relative;
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-top: 30px;
            width: 100%;
            max-width: 600px;
        }

        .feature {
            display: flex;
            align-items: flex-start;
            gap: 12px;
        }

        .feature-icon-wrapper {
            width: 45px;
            height: 45px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            backdrop-filter: blur(10px);
        }

        .feature-icon {
            font-size: 1.3rem;
            color: white;
        }

        .feature-content h3 {
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 4px;
        }

        .feature-content p {
            font-size: 0.85rem;
            opacity: 0.85;
            line-height: 1.3;
        }

        /* Panneau Droit */
        .right-panel {
            flex: 1;
            background: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px 40px;
            overflow: hidden;
        }

        .signup-section {
            width: 100%;
            max-width: 500px;
        }

        .signup-header {
            margin-bottom: 25px;
            text-align: center;
        }

        .signup-title {
            font-size: 1.6rem;
            font-weight: 700;
            color: #1e3c72;
            margin-bottom: 6px;
        }

        .signup-subtitle {
            font-size: 0.9rem;
            color: #6c757d;
        }

        .signup-form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .input-group {
            width: 100%;
        }

        .input-label {
            display: flex;
            align-items: center;
            font-weight: 600;
            color: #333;
            margin-bottom: 6px;
            font-size: 0.85rem;
            width: 100%;
        }

        .input-label i {
            margin-right: 6px;
            width: 14px;
            text-align: center;
        }

        .input-wrapper {
            position: relative;
            display: flex;
            align-items: center;
            width: 100%;
        }

        .input-icon {
            position: absolute;
            left: 12px;
            color: #6c757d;
            font-size: 0.9rem;
            z-index: 1;
            pointer-events: none;
        }

        .input {
            width: 100%;
            padding: 12px 12px 12px 38px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            background: #f8f9fa;
            box-sizing: border-box;
        }

        .input:focus {
            outline: none;
            border-color: #1e3c72;
            background: white;
            box-shadow: 0 0 0 3px rgba(30, 60, 114, 0.1);
        }

        .input.is-invalid {
            border-color: #dc3545;
        }

        .input.is-invalid:focus {
            border-color: #dc3545;
            box-shadow: 0 0 0 3px rgba(220, 53, 69, 0.1);
        }

        .error-message {
            margin-top: 6px;
            color: #dc3545;
            font-size: 0.8rem;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .error-message i {
            flex-shrink: 0;
        }

        .btn-submit {
            width: 100%;
            padding: 12px 20px;
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 0.9rem;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(30, 60, 114, 0.3);
            margin-top: 5px;
        }

        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(30, 60, 114, 0.4);
            background: linear-gradient(135deg, #2a5298 0%, #1e88e5 100%);
        }

        .btn-submit:active {
            transform: translateY(0);
        }

        .signup-footer {
            margin-top: 12px;
            text-align: center;
        }

        .signup-footer p {
            color: #6c757d;
            font-size: 0.85rem;
        }

        .login-link {
            color: #1e3c72;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .login-link:hover {
            color: #2a5298;
            text-decoration: underline;
        }

        /* Responsive */
        @media (max-width: 968px) {
            .signup-container {
                flex-direction: column;
            }

            .left-panel {
                flex: 0 0 35%;
                padding: 40px 30px;
            }

            .brand-title {
                font-size: 2rem;
            }

            .brand-subtitle {
                font-size: 1rem;
            }

            .logo-icon {
                font-size: 3.5rem;
            }

            .features-section {
                gap: 20px;
                margin-top: 40px;
            }

            .feature {
                gap: 15px;
            }

            .feature-icon-wrapper {
                width: 50px;
                height: 50px;
            }

            .feature-icon {
                font-size: 1.5rem;
            }

            .feature-content h3 {
                font-size: 1.1rem;
            }

            .feature-content p {
                font-size: 0.9rem;
            }

            .right-panel {
                flex: 1;
                padding: 30px 20px;
            }

            .signup-title {
                font-size: 1.6rem;
            }
        }

        @media (max-width: 576px) {
            .left-panel {
                padding: 30px 20px;
            }

            .brand-title {
                font-size: 1.6rem;
            }

            .logo-icon {
                font-size: 3rem;
            }

            .feature-icon-wrapper {
                width: 45px;
                height: 45px;
            }

            .feature-icon {
                font-size: 1.3rem;
            }

            .right-panel {
                padding: 20px 15px;
            }

            .signup-section {
                max-width: 100%;
            }
        }

        @media (max-height: 700px) {
            .left-panel {
                padding: 20px 30px;
            }

            .brand-title {
                font-size: 1.6rem;
            }

            .logo-icon {
                font-size: 2.5rem;
            }

            .brand-subtitle {
                font-size: 0.85rem;
            }

            .features-section {
                gap: 12px;
                margin-top: 20px;
            }

            .feature-icon-wrapper {
                width: 40px;
                height: 40px;
            }

            .feature-icon {
                font-size: 1.1rem;
            }

            .feature-content h3 {
                font-size: 0.9rem;
            }

            .feature-content p {
                font-size: 0.75rem;
            }

            .signup-header {
                margin-bottom: 15px;
            }

            .signup-title {
                font-size: 1.4rem;
            }

            .signup-form {
                gap: 12px;
            }

            .input {
                padding: 10px 10px 10px 35px;
            }

            .btn-submit {
                padding: 10px 18px;
            }
        }
    </style>
@endsection
