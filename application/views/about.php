<!-- About Hero Section -->
<div class="about-hero text-center py-5 mb-5">
    <div class="container">
        <h1 class="display-4 fw-bold">About KECHBROW Gaming</h1>
        <p class="lead">Building the Future of Gaming Community</p>
    </div>
</div>

<!-- About Content -->
<section class="about-content py-5">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-md-6">
                <h2 class="mb-4">Our Story</h2>
                <p class="lead">KECHBROW Gaming was founded with a vision to create an inclusive and competitive gaming ecosystem.</p>
                <p>Since 2020, we've been committed to developing gaming talent through comprehensive training programs and tournaments. Together with our expert team of professional gamers and industry veterans, we've helped thousands of players improve their skills and build successful gaming careers.</p>
            </div>
            <div class="col-md-6">
                <img src="https://images.unsplash.com/photo-1542751110-97427bbecf20?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80" 
                     alt="Our Gaming Community" 
                     class="img-fluid rounded-4 shadow">
            </div>
        </div>

        <!-- Values Section -->
        <div class="row mt-5">
            <div class="col-12 text-center mb-5">
                <h2>Nilai-Nilai Kami</h2>
            </div>
            <div class="col-md-4 mb-4">
                <div class="value-card text-center p-4">
                    <i class="fas fa-lightbulb fa-3x mb-3"></i>
                    <h4>Inovasi</h4>
                    <p>Kami selalu mengadopsi teknologi terbaru dan praktik terbaik industri.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="value-card text-center p-4">
                    <i class="fas fa-graduation-cap fa-3x mb-3"></i>
                    <h4>Kualitas</h4>
                    <p>Kurikulum terstruktur dan materi pembelajaran yang selalu diperbarui.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="value-card text-center p-4">
                    <i class="fas fa-users-cog fa-3x mb-3"></i>
                    <h4>Kolaborasi</h4>
                    <p>Membangun ekosistem pembelajaran yang mendukung pertumbuhan bersama.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="team-section py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5">Our Pro Team</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card team-card border-0 shadow-sm">
                    <img src="https://images.unsplash.com/photo-1561438774-1790fe271b8f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1764&q=80" 
                         class="card-img-top" alt="Gaming Director">
                    <div class="card-body text-center">
                        <h5 class="card-title">David Wijaya</h5>
                        <p class="card-text text-muted">Gaming Director</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card team-card border-0 shadow-sm">
                    <img src="https://images.unsplash.com/photo-1542751371-6533a4095f9e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80" 
                         class="card-img-top" alt="Pro Player Coach">
                    <div class="card-body text-center">
                        <h5 class="card-title">Sarah Anderson</h5>
                        <p class="card-text text-muted">Pro Player Coach</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card team-card border-0 shadow-sm">
                    <img src="https://images.unsplash.com/photo-1559136555-9303baea8ebd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80" 
                         class="card-img-top" alt="Tournament Manager">
                    <div class="card-body text-center">
                        <h5 class="card-title">Michael Chang</h5>
                        <p class="card-text text-muted">Tournament Manager</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .about-hero {
        background: linear-gradient(135deg, var(--gradient-start), var(--gradient-end));
        color: white;
        padding: 100px 0;
        margin-top: -2rem;
        position: relative;
        overflow: hidden;
    }

    .about-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('https://images.unsplash.com/photo-1451187580459-43490279c0fa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80') center/cover;
        opacity: 0.1;
        z-index: 0;
    }

    .about-hero .container {
        position: relative;
        z-index: 1;
    }

    .value-card {
        background: white;
        border-radius: 16px;
        transition: transform 0.3s ease;
        box-shadow: 0 4px 20px rgba(0,0,0,0.05);
        height: 100%;
    }

    .value-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 30px rgba(0,0,0,0.1);
    }

    .value-card i {
        color: var(--accent-color);
        background: var(--light-bg);
        width: 80px;
        height: 80px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1.5rem;
        transition: all 0.3s ease;
    }

    .value-card:hover i {
        background: linear-gradient(45deg, var(--gradient-start), var(--gradient-end));
        color: white;
    }

    .team-card {
        transition: transform 0.3s ease;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 8px 30px rgba(255, 105, 180, 0.1);
    }

    .team-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 30px rgba(255, 105, 180, 0.2);
    }

    .team-card img {
        height: 300px;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .team-card:hover img {
        transform: scale(1.05);
    }

    h1, h2, h4, h5 {
        font-weight: 700;
    }

    .lead {
        font-weight: 400;
        line-height: 1.6;
    }

    .card-text {
        color: #666;
    }

    .about-content p {
        line-height: 1.8;
        color: #444;
    }

    @media (max-width: 768px) {
        .about-hero {
            padding: 60px 0;
        }

        .team-card {
            margin-bottom: 1rem;
        }
    }
</style> 