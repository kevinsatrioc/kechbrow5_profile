<!-- Hero Section -->
<div class="hero-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="display-4 fw-bold mb-4">Transformasi Era Gamer Masa Kini</h1>
                <p class="lead mb-4">Bergabung dengan komunitas Gamer untuk masa depan yang lebih baik.</p>
                <a href="<?= base_url('workshop') ?>" class="btn btn-gradient">Mulai Belajar</a>
            </div>
            <div class="col-lg-6">
                <img src="https://images.unsplash.com/photo-1542751371-adc38448a05e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80" 
                     alt="Gaming Setup" 
                     class="img-fluid hero-image">
            </div>
        </div>
    </div>
</div>

<!-- Features Section -->
<section class="features-section py-5">
    <div class="container">
        <h2 class="text-center mb-5">Keunggulan Platform Saya</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="feature-card">
                    <div class="icon-wrapper">
                        <i class="fas fa-code"></i>
                    </div>
                    <h4>Pembelajaran Materi Game</h4>
                    <p>Kuasai materi game competitive dengan mudah.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card">
                    <div class="icon-wrapper">
                        <i class="fas fa-robot"></i>
                    </div>
                    <h4>AI & Machine Learning</h4>
                    <p>Pelajari teknologi AI dan implementasinya dalam bisnis modern.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card">
                    <div class="icon-wrapper">
                        <i class="fas fa-cloud"></i>
                    </div>
                    <h4>Cloud Computing</h4>
                    <p>Eksplorasi infrastruktur cloud dan arsitektur modern.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section class="projects-section py-5">
    <div class="container">
        <h2 class="text-center mb-5">Featured Games</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="project-card">
                    <img src="https://images.unsplash.com/photo-1552820728-8b83bb6b773f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80" 
                         alt="FPS Games" 
                         class="img-fluid">
                    <div class="project-overlay">
                        <h5>FPS Games</h5>
                        <p>Competitive Shooter Games</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="project-card">
                    <img src="https://images.unsplash.com/photo-1509198397868-475647b2a1e5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80" 
                         alt="Strategy Games" 
                         class="img-fluid">
                    <div class="project-overlay">
                        <h5>Strategy Games</h5>
                        <p>Real-time & Turn-based</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="project-card">
                    <img src="https://images.unsplash.com/photo-1560419015-7c427e8ae5ba?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80" 
                         alt="RPG Games" 
                         class="img-fluid">
                    <div class="project-overlay">
                        <h5>RPG Games</h5>
                        <p>Epic Adventure Games</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section py-5">
    <div class="container">
        <div class="cta-card">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2 class="mb-3">Siap Memulai Perjalanan Game Competitive Anda?</h2>
                    <p class="lead mb-0">Bergabung sekarang dan akses ribuan materi pembelajaran</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="<?= base_url('workshop') ?>" class="btn btn-light btn-lg">Daftar Sekarang</a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    :root {
        --primary-color:rgb(255, 0, 255);
        --accent-color:rgb(93, 1, 241);
        --gradient-start:rgb(0, 107, 247);
        --gradient-end:rgb(2, 148, 245);
        --light-bg:rgb(11, 7, 240);
    }

    body {
        font-family: 'Inter', sans-serif;
        color: var(--primary-color);
    }

    .hero-section {
        background-color: var(--light-bg);
        position: relative;
        overflow: hidden;
    }

    .hero-image {
        border-radius: 20px;
        box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        transition: transform 0.3s ease;
    }

    .hero-image:hover {
        transform: translateY(-10px);
    }

    .btn-gradient {
        background: linear-gradient(45deg, var(--gradient-start), var(--gradient-end));
        color: white;
        border: none;
        border-radius: 30px;
        padding: 12px 32px;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .btn-gradient:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(0,184,148,0.2);
        color: white;
    }

    .feature-card {
        background: white;
        border-radius: 16px;
        padding: 2rem;
        text-align: center;
        transition: all 0.3s ease;
        height: 100%;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    }

    .feature-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.1);
    }

    .icon-wrapper {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        background: linear-gradient(45deg, var(--gradient-start), var(--gradient-end));
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1.5rem;
    }

    .icon-wrapper i {
        font-size: 2rem;
        color: white;
    }

    .project-card {
        position: relative;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }

    .project-card img {
        width: 100%;
        height: 300px;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .project-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
        color: white;
        padding: 2rem;
        transform: translateY(100%);
        transition: transform 0.3s ease;
    }

    .project-card:hover img {
        transform: scale(1.1);
    }

    .project-card:hover .project-overlay {
        transform: translateY(0);
    }

    .cta-card {
        background: linear-gradient(45deg, var(--gradient-start), var(--gradient-end));
        border-radius: 20px;
        padding: 3rem;
        color: white;
        position: relative;
        overflow: hidden;
    }

    .cta-card::before {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: url('https://images.unsplash.com/photo-1451187580459-43490279c0fa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80') center/cover;
        opacity: 0.1;
    }

    .cta-card .btn-light {
        background: white;
        color: var(--accent-color);
        border: none;
        border-radius: 30px;
        padding: 12px 32px;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .cta-card .btn-light:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(255,255,255,0.2);
    }

    h1, h2, h4, h5 {
        font-weight: 700;
    }

    .lead {
        font-weight: 400;
        line-height: 1.6;
    }

    @media (max-width: 768px) {
        .hero-section {
            text-align: center;
        }
        
        .hero-image {
            margin-top: 2rem;
        }

        .cta-card {
            text-align: center;
        }

        .cta-card .btn-light {
            margin-top: 1rem;
        }
    }
</style> 