<?php 
$current_page = basename($_SERVER['PHP_SELF']); 
?>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f4f7fc;
        color: #333;
    }

    .navbar-custom {
        background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        padding: 15px 0;
    }
    .navbar-brand {
        color: #ffffff !important;
        font-weight: 700;
        letter-spacing: 1px;
    }
    .nav-link {
        color: rgba(255, 255, 255, 0.7) !important;
        font-weight: 500;
        margin-left: 15px;
        transition: all 0.3s ease;
    }
    .nav-link:hover, .nav-link.active {
        color: #ffffff !important;
        transform: translateY(-2px);
    }

    .card-custom {
        border: none;
        border-radius: 16px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        background: #ffffff;
        overflow: hidden;
    }
    .table {
        margin-bottom: 0;
    }
    .table thead {
        background-color: #1e293b;
        color: #ffffff;
    }
    .table th {
        font-weight: 600;
        padding: 1rem 1.5rem;
        border-bottom: none;
    }
    .table td {
        padding: 1rem 1.5rem;
        vertical-align: middle;
        border-bottom: 1px solid #f1f5f9;
    }
    .table tbody tr:hover {
        background-color: #f8fafc;
    }

    .btn-custom {
        border-radius: 8px;
        font-weight: 500;
        padding: 8px 20px;
        transition: all 0.3s ease;
    }
    .btn-custom:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 10px rgba(0,0,0,0.15);
    }
    .btn-primary-custom {
        background-color: #4f46e5;
        border-color: #4f46e5;
        color: white;
    }
    .btn-primary-custom:hover {
        background-color: #4338ca;
        border-color: #4338ca;
        color: white;
    }
    .btn-action {
        border-radius: 6px;
        padding: 5px 12px;
        font-size: 0.875rem;
    }

    .form-control {
        border-radius: 8px;
        padding: 10px 15px;
        border: 1px solid #e2e8f0;
    }
    .form-control:focus {
        border-color: #4f46e5;
        box-shadow: 0 0 0 0.2rem rgba(79, 70, 229, 0.25);
    }
    .form-label {
        font-weight: 500;
        color: #475569;
    }
</style>

<nav class="navbar navbar-expand-lg navbar-custom mb-5">
    <div class="container">
        <a class="navbar-brand" href="index.php">📚 SI-PERPUS</a>
        <button class="navbar-toggler text-white border-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link <?= ($current_page == 'Member.php' || $current_page == 'FormMember.php') ? 'active' : '' ?>" href="Member.php">Data Member</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($current_page == 'Buku.php' || $current_page == 'FormBuku.php') ? 'active' : '' ?>" href="Buku.php">Data Buku</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($current_page == 'Peminjaman.php' || $current_page == 'FormPeminjaman.php') ? 'active' : '' ?>" href="Peminjaman.php">Peminjaman</a>
                </li>
            </ul>
        </div>
    </div>
</nav>