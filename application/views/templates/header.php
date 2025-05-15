<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'KECHBROW' ?></title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Tungsten:wght@500;700&family=DIN:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        :root {
            --primary-color: #0F1923;
            --secondary-color: #1F2731;
            --accent-color:rgb(247, 1, 21);
            --accent-hover:rgb(48, 2, 5);
            --gradient-start:rgb(48, 0, 4);
            --gradient-end: #BD3944;
            --text-color: #ECE8E1;
            --text-muted: #7E8791;
            --light-bg: #0F1923;
            --card-bg: #1F2731;
            --navbar-bg: rgba(15, 25, 35, 0.98);
            --navbar-scrolled: rgba(31, 39, 49, 0.98);
            --card-shadow: 0 4px 20px rgba(255, 70, 85, 0.15);
            --hover-shadow: 0 8px 30px rgba(255, 70, 85, 0.25);
            --valorant-border: 2px solid var(--accent-color);
        }

        body {
            font-family: 'DIN', sans-serif;
            line-height: 1.8;
            color: var(--text-color);
            background-color: var(--light-bg);
            background-image: 
                linear-gradient(135deg, rgba(255, 70, 85, 0.05) 25%, transparent 25%),
                linear-gradient(225deg, rgba(255, 70, 85, 0.05) 25%, transparent 25%),
                url('data:image/svg+xml,<svg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"><path d="M15 25h10v10H15zM35 25h10v10H35z" fill="rgba(255,70,85,0.05)"/><path d="M30 15v30M15 30h30" stroke="rgba(255,70,85,0.05)" stroke-width="2"/></svg>');
            background-size: 40px 40px, 40px 40px, 60px 60px;
            background-position: 0 0, 0 0, center center;
            background-attachment: fixed;
            position: relative;
        }

        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(circle at center, rgba(255, 70, 85, 0.08) 0%, transparent 70%),
                url('data:image/svg+xml,<svg width="100" height="100" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><path d="M50 20v60M20 50h60" stroke="rgba(255,70,85,0.02)" stroke-width="4"/><circle cx="50" cy="50" r="30" stroke="rgba(255,70,85,0.02)" stroke-width="4" fill="none"/></svg>');
            background-size: cover, 100px 100px;
            pointer-events: none;
            z-index: 0;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Tungsten', sans-serif;
            font-weight: 700;
            color: var(--text-color);
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .navbar {
            background-color: var(--navbar-bg);
            backdrop-filter: blur(10px);
            border-bottom: var(--valorant-border);
            padding: 1rem 0;
            transition: all 0.3s ease;
        }

        .navbar.scrolled {
            padding: 0.8rem 0;
            background-color: var(--navbar-scrolled);
        }

        .navbar-brand {
            font-family: 'Tungsten', sans-serif;
            color: var(--text-color) !important;
            font-weight: 700;
            font-size: 2.5rem;
            letter-spacing: 2px;
            text-transform: uppercase;
            position: relative;
            padding: 0 15px;
        }

        .navbar-brand::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 4px;
            height: 70%;
            background-color: var(--accent-color);
        }

        .nav-link {
            color: var(--text-color) !important;
            font-weight: 500;
            padding: 0.5rem 1.2rem;
            transition: all 0.3s ease;
            position: relative;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 0.9rem;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background-color: var(--accent-color);
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }

        .nav-link:hover::after,
        .nav-link.active::after {
            width: 80%;
        }

        .nav-link:hover,
        .nav-link.active {
            color: var(--accent-color) !important;
        }

        .main-content {
            min-height: calc(100vh - 160px);
            padding: 3rem 0;
            margin-top: 76px;
            position: relative;
            z-index: 1;
        }

        /* Buttons */
        .btn {
            font-family: 'DIN', sans-serif;
            padding: 0.8rem 2rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            position: relative;
            border: 2px solid var(--accent-color);
            background: linear-gradient(135deg, var(--accent-color) 0%, var(--gradient-end) 100%);
            color: var(--text-color);
            clip-path: polygon(10px 0, 100% 0, calc(100% - 10px) 100%, 0 100%);
            overflow: hidden;
        }

        .btn::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(
                to bottom right,
                rgba(255, 255, 255, 0.2) 0%,
                transparent 50%,
                rgba(255, 255, 255, 0.2) 100%
            );
            transform: rotate(45deg);
            transition: 0.5s all ease;
        }

        .btn:hover::after {
            transform: rotate(45deg) translate(50%, 50%);
        }

        .btn-primary {
            background: var(--light-bg);
            border: var(--valorant-border);
        }

        /* Cards */
        .card {
            border: var(--valorant-border);
            background-color: var(--card-bg);
            transition: all 0.3s ease;
            overflow: hidden;
            position: relative;
            clip-path: polygon(0 0, 100% 0, 95% 100%, 5% 100%);
        }

        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                linear-gradient(135deg, rgba(255, 70, 85, 0.1) 0%, transparent 100%),
                url('data:image/svg+xml,<svg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg"><path d="M10 15h5v5h-5zM25 15h5v5h-5zM15 25h10v2H15z" fill="rgba(255,70,85,0.05)"/></svg>');
            background-size: 100% 100%, 40px 40px;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .card:hover::before {
            opacity: 1;
        }

        .card-img-top {
            transition: all 0.5s ease;
        }

        .card:hover .card-img-top {
            transform: scale(1.05);
        }

        .card-body {
            color: var(--text-color);
            background: var(--card-bg);
            border-top: 1px solid rgba(255, 70, 85, 0.2);
        }

        .card-title {
            font-family: 'Tungsten', sans-serif;
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .card-text {
            color: var(--text-muted);
            font-size: 0.95rem;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: var(--primary-color);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--accent-color);
            border-radius: 0;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--accent-hover);
        }

        /* Hover Effects */
        a {
            transition: all 0.3s ease;
            color: var(--text-color);
        }

        a:hover {
            color: var(--accent-color);
        }

        /* Valorant-specific elements */
        .valorant-divider {
            width: 100%;
            height: 4px;
            background: var(--accent-color);
            margin: 2rem 0;
        }

        .valorant-heading {
            position: relative;
            padding-left: 15px;
            margin-bottom: 2rem;
        }

        .valorant-heading::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 4px;
            height: 70%;
            background-color: var(--accent-color);
        }

        /* Agent Card Effect */
        .agent-card {
            position: relative;
            overflow: hidden;
        }

        .agent-card::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(
                to bottom right,
                rgba(255, 70, 85, 0.1) 0%,
                transparent 50%,
                rgba(255, 70, 85, 0.1) 100%
            );
            transform: rotate(45deg);
            animation: agentShine 3s infinite;
        }

        @keyframes agentShine {
            0% { transform: translateX(-100%) rotate(45deg); }
            100% { transform: translateX(100%) rotate(45deg); }
        }

        /* Gaming Icons */
        .gaming-icon {
            position: relative;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: var(--primary-color);
            border: 2px solid var(--accent-color);
            clip-path: polygon(20% 0%, 80% 0%, 100% 20%, 100% 80%, 80% 100%, 20% 100%, 0% 80%, 0% 20%);
            transition: all 0.3s ease;
        }

        .gaming-icon:hover {
            transform: scale(1.1);
            background: var(--accent-color);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url() ?>">
                <i class="fas fa-gamepad me-2"></i>KECHBROW COACHING
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link <?= $this->uri->segment(1) == '' ? 'active' : '' ?>" href="<?= base_url() ?>">
                            Game Hub
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $this->uri->segment(1) == 'workshop' ? 'active' : '' ?>" href="<?= base_url('workshop') ?>">
                            Tournaments
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $this->uri->segment(1) == 'about' ? 'active' : '' ?>" href="<?= base_url('about') ?>">
                            Team
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $this->uri->segment(1) == 'contact' ? 'active' : '' ?>" href="<?= base_url('contact') ?>">
                            Join Us
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="main-content">
        <div class="container">

        <!-- Navbar Animation Script -->
        <script>
            window.addEventListener('scroll', function() {
                const navbar = document.querySelector('.navbar');
                if (window.scrollY > 50) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            });
        </script> 