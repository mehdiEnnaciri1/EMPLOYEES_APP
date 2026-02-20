@extends('layouts.app')

@section('title')
    Bienvenue - Arrondissement AIN-SBAA
@endsection

@section('content')
    <div class="welcome-container">
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
                        <i class="fas fa-users feature-icon"></i>
                    </div>
                    <div class="feature-content">
                        <h3>Multi-utilisateurs</h3>
                        <p>Accès dédié pour administrateurs et employés</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Panneau Droit -->
        <div class="right-panel">
            <div class="login-section">
                <div class="login-header">
                    <h2 class="login-title">Accès à la plateforme</h2>
                    <p class="login-subtitle">Connectez-vous ou créez un compte</p>
                </div>

                <div class="login-form">
                    @guest
                        <div class="input-group">
                            <a href="{{url('login')}}" class="btn-submit">
                                <i class="fas fa-sign-in-alt"></i>
                                <span>Se connecter</span>
                            </a>
                        </div>

                        <div class="input-group">
                            <a href="{{ url('users/create')}}" class="btn-submit btn-secondary">
                                <i class="fas fa-user-plus"></i>
                                <span>Créer un compte</span>
                            </a>
                        </div>
                    @endguest

                    @auth 
                        <div class="input-group">
                            <a href="{{url('admin/home')}}" class="btn-submit btn-success">
                                <i class="fas fa-home"></i>
                                <span>Accéder au tableau de bord</span>
                            </a>
                        </div>
                        <p class="welcome-message">
                            Bienvenue, <strong>{{ Auth::user()->name ?? 'Utilisateur' }}</strong> !
                        </p>
                    @endauth
                </div>
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

        .welcome-container {
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
            gap: 20px;
        }

        .input-group {
            width: 100%;
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
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(30, 60, 114, 0.3);
        }

        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(30, 60, 114, 0.4);
            background: linear-gradient(135deg, #2a5298 0%, #1e88e5 100%);
        }

        .btn-submit:active {
            transform: translateY(0);
        }

        .btn-submit.btn-secondary {
            background: white;
            color: #1e3c72;
            border: 2px solid #1e3c72;
            box-shadow: 0 2px 10px rgba(30, 60, 114, 0.1);
        }

        .btn-submit.btn-secondary:hover {
            background: #1e3c72;
            color: white;
            box-shadow: 0 4px 15px rgba(30, 60, 114, 0.3);
        }

        .btn-submit.btn-success {
            background: linear-gradient(135deg, #0d7377 0%, #14a085 100%);
            box-shadow: 0 4px 15px rgba(13, 115, 119, 0.3);
        }

        .btn-submit.btn-success:hover {
            background: linear-gradient(135deg, #14a085 0%, #0d7377 100%);
            box-shadow: 0 6px 20px rgba(13, 115, 119, 0.4);
        }

        .welcome-message {
            text-align: center;
            margin-top: 20px;
            color: #6c757d;
            font-size: 1rem;
        }

        /* Responsive */
        @media (max-width: 968px) {
            .welcome-container {
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
            }
        }
    </style>
@endsection