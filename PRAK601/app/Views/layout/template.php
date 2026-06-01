<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Praktikum Web II'; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        :root {
            --space-cadet: #102B53;
            --ucla-blue: #50698D;
            --pink-lavender: #CEB5D4;
            --cyan-azure: #4E7AB1;
            --air-blue: #7D9FC0;
        }

        body {
            background-color: #f4f6f9;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .navbar-custom { background-color: var(--space-cadet); }
        .navbar-custom .navbar-brand, 
        .navbar-custom .nav-link { color: white !important; font-weight: 500; }
        .navbar-custom .nav-link:hover { color: var(--pink-lavender) !important; }
        
        .text-space-cadet { color: var(--space-cadet); }
        .bg-pink-lavender { background-color: var(--pink-lavender); color: var(--space-cadet); }
        
        .card-custom { 
            border: none; 
            border-radius: 1rem; 
            box-shadow: 0 10px 30px rgba(16, 43, 83, 0.08); 
            overflow: hidden;
        }
        .card-header-custom { 
            background-color: var(--ucla-blue); 
            color: white; 
            border-bottom: none; 
        }
        .btn-custom { 
            background-color: var(--cyan-azure); 
            color: white; 
            border: none; 
            transition: all 0.3s ease;
        }
        .btn-custom:hover { 
            background-color: var(--space-cadet); 
            color: white; 
            transform: translateY(-2px);
        }
        .badge-custom { 
            background-color: var(--air-blue); 
            color: var(--space-cadet); 
            font-weight: 600; 
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-custom mb-5 shadow-sm py-3">
        <div class="container">
            <a class="navbar-brand fw-bold tracking-wide" href="/">Praktikum Web II</a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link px-3" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="/profil">Profil</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container pb-5">
        <?= $this->renderSection('content'); ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>