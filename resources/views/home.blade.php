@extends('adminlte::page')

@section('title')
    Dashboard - Arrondissement AIN-SBAA
@endsection

@section('content-header')
    <div class="d-flex justify-content-between align-items-center">
        <div>
            <h1 class="m-0" style="font-size: 2rem; font-weight: 700; background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
                Bienvenue sur Arrondissement AIN-SBAA
            </h1>
            <p class="mt-2 text-muted">
                Bonjour <strong>{{ Auth::user()->name ?? 'Utilisateur' }}</strong>, vous êtes connecté en tant que 
                <span class="font-weight-bold" style="color: #1e3c72;">
                    {{ Auth::user()->roles->first()->name ?? 'Utilisateur' }}
                </span>
            </p>
        </div>
    </div>
@endsection

@section('content')
    <div class="container-fluid px-4 dashboard-container">
        <!-- Boutons d'accès rapide -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="quick-access-panel">
                    <div class="quick-access-header">
                        <i class="fas fa-rocket"></i>
                        <h4>Accès rapide</h4>
                    </div>
                    <div class="quick-access-body">
                        <a href="{{url('admin/employes')}}" class="quick-access-btn quick-access-primary">
                            <div class="quick-access-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="quick-access-content">
                                <span class="quick-access-title">Employés</span>
                                <span class="quick-access-count">{{\App\Models\Emplye::count()}} enregistrements</span>
                            </div>
                            <i class="fas fa-arrow-right quick-access-arrow"></i>
                        </a>
                        <a href="{{url('admin/articles')}}" class="quick-access-btn quick-access-success">
                            <div class="quick-access-icon">
                                <i class="fas fa-box"></i>
                            </div>
                            <div class="quick-access-content">
                                <span class="quick-access-title">Articles</span>
                                <span class="quick-access-count">{{\App\Models\Article::count()}} enregistrements</span>
                            </div>
                            <i class="fas fa-arrow-right quick-access-arrow"></i>
                        </a>
                        <a href="{{url('admin/mobiliers')}}" class="quick-access-btn quick-access-info">
                            <div class="quick-access-icon">
                                <i class="fas fa-chair"></i>
                            </div>
                            <div class="quick-access-content">
                                <span class="quick-access-title">Mobiliers</span>
                                <span class="quick-access-count">{{\App\Models\Mobilier::count()}} enregistrements</span>
                            </div>
                            <i class="fas fa-arrow-right quick-access-arrow"></i>
                        </a>
                        <a href="{{url('admin/demandes')}}" class="quick-access-btn quick-access-warning">
                            <div class="quick-access-icon">
                                <i class="fas fa-file-alt"></i>
                            </div>
                            <div class="quick-access-content">
                                <span class="quick-access-title">Demandes</span>
                                <span class="quick-access-count">{{\App\Models\Demande::count()}} enregistrements</span>
                            </div>
                            <i class="fas fa-arrow-right quick-access-arrow"></i>
                        </a>
                        <a href="{{url('admin/audits')}}" class="quick-access-btn quick-access-danger">
                            <div class="quick-access-icon">
                                <i class="fas fa-clipboard-check"></i>
                            </div>
                            <div class="quick-access-content">
                                <span class="quick-access-title">Audits</span>
                                <span class="quick-access-count">{{\App\Models\Audit::count()}} enregistrements</span>
                            </div>
                            <i class="fas fa-arrow-right quick-access-arrow"></i>
                        </a>
                        <a href="{{url('localisation')}}" class="quick-access-btn quick-access-secondary">
                            <div class="quick-access-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="quick-access-content">
                                <span class="quick-access-title">Localisation</span>
                                <span class="quick-access-count">Voir la carte</span>
                            </div>
                            <i class="fas fa-arrow-right quick-access-arrow"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section Actions rapides -->
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="action-panel">
                    <div class="action-panel-header">
                        <i class="fas fa-bolt"></i>
                        <h4>Actions rapides</h4>
                    </div>
                    <div class="action-panel-body">
                        <a href="{{url('admin/employes/create')}}" class="action-btn action-btn-primary">
                            <i class="fas fa-user-plus"></i>
                            <span>Nouvel employé</span>
                        </a>
                        <a href="{{url('admin/articles/create')}}" class="action-btn action-btn-success">
                            <i class="fas fa-box"></i>
                            <span>Nouvel article</span>
                        </a>
                        <a href="{{url('admin/mobiliers/create')}}" class="action-btn action-btn-info">
                            <i class="fas fa-chair"></i>
                            <span>Nouveau mobilier</span>
                        </a>
                        <a href="{{url('admin/demandes/create')}}" class="action-btn action-btn-warning">
                            <i class="fas fa-file-alt"></i>
                            <span>Nouvelle demande</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="info-panel">
                    <div class="info-panel-header">
                        <i class="fas fa-info-circle"></i>
                        <h4>Informations système</h4>
                    </div>
                    <div class="info-panel-body">
                        <div class="info-item">
                            <div class="info-item-icon">
                                <i class="fas fa-database"></i>
                            </div>
                            <div class="info-item-content">
                                <div class="info-item-label">Total enregistrements</div>
                                <div class="info-item-value">
                                    {{ \App\Models\Emplye::count() + \App\Models\Article::count() + \App\Models\Mobilier::count() + \App\Models\Demande::count() }}
                                </div>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="info-item-icon">
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                            <div class="info-item-content">
                                <div class="info-item-label">Date du jour</div>
                                <div class="info-item-value">{{ date('d/m/Y') }}</div>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="info-item-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="info-item-content">
                                <div class="info-item-label">Heure</div>
                                <div class="info-item-value">{{ date('H:i') }}</div>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="info-item-icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="info-item-content">
                                <div class="info-item-label">Statut système</div>
                                <div class="info-item-value status-active">Actif</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        body {
            overflow: hidden;
        }

        .content-wrapper {
            height: calc(100vh - 120px);
            overflow: hidden;
        }

        .dashboard-container {
            padding: 1.5rem;
        }

        .dashboard-container .row {
            width: 100%;
            margin: 0;
        }

        .dashboard-container .col-lg-6 {
            height: 100%;
        }

        /* Panneau d'accès rapide */
        .quick-access-panel {
            background: white;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            border: 1px solid #e5e7eb;
            overflow: hidden;
            margin-bottom: 1.5rem;
        }

        .quick-access-header {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            color: white;
            padding: 1rem 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .quick-access-header h4 {
            margin: 0;
            font-size: 1.1rem;
            font-weight: 600;
        }

        .quick-access-body {
            padding: 1.5rem;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1rem;
        }

        .quick-access-btn {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1.25rem;
            border-radius: 10px;
            text-decoration: none;
            transition: all 0.3s ease;
            border: 2px solid transparent;
            background: white;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
            position: relative;
            overflow: hidden;
        }

        .quick-access-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            transition: left 0.5s ease;
        }

        .quick-access-btn:hover::before {
            left: 100%;
        }

        .quick-access-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 20px rgba(0,0,0,0.15);
        }

        .quick-access-icon {
            width: 50px;
            height: 50px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: white;
            flex-shrink: 0;
            transition: transform 0.3s ease;
        }

        .quick-access-btn:hover .quick-access-icon {
            transform: scale(1.1) rotate(5deg);
        }

        .quick-access-primary .quick-access-icon {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
        }

        .quick-access-success .quick-access-icon {
            background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
        }

        .quick-access-info .quick-access-icon {
            background: linear-gradient(135deg, #1e88e5 0%, #42a5f5 100%);
        }

        .quick-access-warning .quick-access-icon {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        }

        .quick-access-danger .quick-access-icon {
            background: linear-gradient(135deg, #ee0979 0%, #ff6a00 100%);
        }

        .quick-access-secondary .quick-access-icon {
            background: linear-gradient(135deg, #6c757d 0%, #868e96 100%);
        }

        .quick-access-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 0.25rem;
        }

        .quick-access-title {
            font-size: 1rem;
            font-weight: 600;
            color: #1f2937;
            display: block;
        }

        .quick-access-count {
            font-size: 0.8rem;
            color: #6b7280;
            display: block;
        }

        .quick-access-arrow {
            color: #9ca3af;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .quick-access-btn:hover .quick-access-arrow {
            color: #1e3c72;
            transform: translateX(5px);
        }

        .quick-access-primary:hover {
            border-color: #1e3c72;
        }

        .quick-access-success:hover {
            border-color: #11998e;
        }

        .quick-access-info:hover {
            border-color: #1e88e5;
        }

        .quick-access-warning:hover {
            border-color: #f093fb;
        }

        .quick-access-danger:hover {
            border-color: #ee0979;
        }

        .quick-access-secondary:hover {
            border-color: #6c757d;
        }

        /* Panneaux d'actions et infos */
        .action-panel, .info-panel {
            background: white;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            border: 1px solid #e5e7eb;
            overflow: hidden;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .action-panel-header, .info-panel-header {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            color: white;
            padding: 1.25rem 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            flex-shrink: 0;
        }

        .action-panel-header h4, .info-panel-header h4 {
            margin: 0;
            font-size: 1.1rem;
            font-weight: 600;
        }

        .action-panel-body {
            padding: 1.5rem;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1rem;
            flex: 1;
            overflow: hidden;
        }

        .action-btn {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 1rem;
            border-radius: 8px;
            text-decoration: none;
            transition: all 0.3s ease;
            border: 2px solid transparent;
            font-weight: 500;
        }

        .action-btn-primary {
            background: rgba(30, 60, 114, 0.1);
            color: #1e3c72;
        }

        .action-btn-primary:hover {
            background: #1e3c72;
            color: white;
            transform: translateX(5px);
        }

        .action-btn-success {
            background: rgba(17, 153, 142, 0.1);
            color: #11998e;
        }

        .action-btn-success:hover {
            background: #11998e;
            color: white;
            transform: translateX(5px);
        }

        .action-btn-info {
            background: rgba(30, 136, 229, 0.1);
            color: #1e88e5;
        }

        .action-btn-info:hover {
            background: #1e88e5;
            color: white;
            transform: translateX(5px);
        }

        .action-btn-warning {
            background: rgba(240, 147, 251, 0.1);
            color: #f093fb;
        }

        .action-btn-warning:hover {
            background: #f093fb;
            color: white;
            transform: translateX(5px);
        }

        .info-panel-body {
            padding: 1.5rem;
            flex: 1;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
        }

        .info-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1rem;
            border-radius: 8px;
            margin-bottom: 0.75rem;
            background: #f9fafb;
            transition: all 0.3s ease;
        }

        .info-item:hover {
            background: #f3f4f6;
            transform: translateX(5px);
        }

        .info-item:last-child {
            margin-bottom: 0;
        }

        .info-item-icon {
            width: 45px;
            height: 45px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            color: white;
            flex-shrink: 0;
        }

        .info-item-content {
            flex: 1;
        }

        .info-item-label {
            font-size: 0.875rem;
            color: #6b7280;
            margin-bottom: 0.25rem;
        }

        .info-item-value {
            font-size: 1.1rem;
            font-weight: 600;
            color: #1f2937;
        }

        .status-active {
            color: #11998e !important;
        }

        @media (max-width: 768px) {
            .dashboard-container {
                padding: 1rem;
            }
            .action-panel-body {
                grid-template-columns: 1fr;
            }
            .quick-access-body {
                grid-template-columns: 1fr;
            }
            .row {
                margin: 0;
            }
        }
    </style>
@endsection
