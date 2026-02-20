@extends('layouts.app')

@section('title')
    Connexion - Arrondissement AIN-SBAA
@endsection

@section('content')
    <div class="login-container">
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
                        <i class="fas fa-shield-alt feature-icon"></i>
                    </div>
                    <div class="feature-content">
                        <h3>Sécurisé</h3>
                        <p>Connexion chiffrée & authentification par rôles</p>
                    </div>
                </div>
                <div class="feature">
                    <div class="feature-icon-wrapper">
                        <i class="fas fa-lock feature-icon"></i>
                    </div>
                    <div class="feature-content">
                        <h3>Protection des données</h3>
                        <p>Vos informations sont sécurisées et protégées</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Panneau Droit -->
        <div class="right-panel">
            <div class="login-section">
                <div class="login-header">
                    <h2 class="login-title">Connexion</h2>
                    <p class="login-subtitle">Accédez à votre espace de travail</p>
                </div>

                <form method="POST" action="{{ route('login') }}" class="login-form">
                    @csrf

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
                                autofocus
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
                                autocomplete="current-password"
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

                    <button type="submit" class="btn-submit">
                        <i class="fas fa-sign-in-alt"></i>
                        <span>Se connecter</span>
                    </button>

                    <div class="login-footer">
                        <p class="text-center">
                            Vous n'avez pas de compte ? 
                            <a href="{{ url('users/create') }}" class="register-link">Créer un compte</a>
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

        .login-container {
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
            padding: 60px 50px;
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
            margin-bottom: 30px;
            display: flex;
            justify-content: center;
        }

        .logo-icon {
            font-size: 4.5rem;
            color: white;
            opacity: 0.95;
        }

        .brand-title {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 15px;
            letter-spacing: -0.5px;
            text-align: center;
        }

        .brand-subtitle {
            font-size: 1.2rem;
            opacity: 0.9;
            font-weight: 300;
            line-height: 1.6;
            text-align: center;
        }

        .features-section {
            z-index: 1;
            position: relative;
            display: flex;
            flex-direction: column;
            gap: 30px;
            margin-top: 60px;
            width: 100%;
            max-width: 600px;
        }

        .feature {
            display: flex;
            align-items: flex-start;
            gap: 20px;
        }

        .feature-icon-wrapper {
            width: 60px;
            height: 60px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            backdrop-filter: blur(10px);
        }

        .feature-icon {
            font-size: 1.8rem;
            color: white;
        }

        .feature-content h3 {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .feature-content p {
            font-size: 1rem;
            opacity: 0.85;
            line-height: 1.5;
        }

        /* Panneau Droit */
        .right-panel {
            flex: 1;
            background: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px;
        }

        .login-section {
            width: 100%;
            max-width: 450px;
        }

        .login-header {
            margin-bottom: 40px;
            text-align: center;
        }

        .login-title {
            font-size: 2rem;
            font-weight: 700;
            color: #1e3c72;
            margin-bottom: 10px;
        }

        .login-subtitle {
            font-size: 1rem;
            color: #6c757d;
        }

        .login-form {
            display: flex;
            flex-direction: column;
            gap: 25px;
        }

        .input-group {
            width: 100%;
        }

        .input-label {
            display: flex;
            align-items: center;
            font-weight: 600;
            color: #333;
            margin-bottom: 8px;
            font-size: 0.95rem;
            width: 100%;
        }

        .input-label i {
            margin-right: 8px;
            width: 16px;
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
            left: 15px;
            color: #6c757d;
            font-size: 1rem;
            z-index: 1;
            pointer-events: none;
        }

        .input {
            width: 100%;
            padding: 16px 16px 16px 45px;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            font-size: 1rem;
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
            margin-top: 8px;
            color: #dc3545;
            font-size: 0.875rem;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .error-message i {
            flex-shrink: 0;
        }

        .btn-submit {
            width: 100%;
            padding: 16px 24px;
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(30, 60, 114, 0.3);
            margin-top: 10px;
        }

        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(30, 60, 114, 0.4);
            background: linear-gradient(135deg, #2a5298 0%, #1e88e5 100%);
        }

        .btn-submit:active {
            transform: translateY(0);
        }

        .login-footer {
            margin-top: 20px;
            text-align: center;
        }

        .login-footer p {
            color: #6c757d;
            font-size: 0.95rem;
        }

        .register-link {
            color: #1e3c72;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .register-link:hover {
            color: #2a5298;
            text-decoration: underline;
        }

        /* Responsive */
        @media (max-width: 968px) {
            .login-container {
                flex-direction: column;
            }

            .left-panel {
                flex: 0 0 40%;
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

            .login-title {
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

            .login-section {
                max-width: 100%;
            }
        }

        @media (max-height: 700px) {
            .left-panel {
                padding: 30px 40px;
            }

            .brand-title {
                font-size: 2rem;
            }

            .logo-icon {
                font-size: 3rem;
            }

            .features-section {
                gap: 20px;
                margin-top: 30px;
            }
        }
    </style>
@endsection