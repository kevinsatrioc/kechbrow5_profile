<!-- Alert Messages -->
<div id="alertMessages"></div>

<!-- Contact Hero Section -->
<div class="contact-hero text-center py-5 mb-5">
    <div class="container">
        <h1 class="display-4 fw-bold">Hubungi TechEdu Hub</h1>
        <p class="lead">Mari Berdiskusi untuk Solusi Digital Anda</p>
    </div>
</div>

<!-- Contact Content -->
<section class="contact-content py-5">
    <div class="container">
        <div class="row">
            <!-- Contact Information -->
            <div class="col-md-4 mb-4">
                <div class="contact-info p-4 rounded">
                    <h3 class="mb-4">Informasi Kontak</h3>
                    <div class="contact-item mb-4">
                        <i class="fas fa-map-marker-alt me-2"></i>
                        <span>Cyber Building, 5th Floor<br>Jakarta, Indonesia 12345</span>
                    </div>
                    <div class="contact-item mb-4">
                        <i class="fas fa-phone me-2"></i>
                        <span>+62 21 1234 5678</span>
                    </div>
                    <div class="contact-item mb-4">
                        <i class="fas fa-envelope me-2"></i>
                        <span>hello@techeduhub.id</span>
                    </div>
                    <div class="social-links mt-4">
                        <a href="#" class="me-3"><i class="fab fa-github fa-lg"></i></a>
                        <a href="#" class="me-3"><i class="fab fa-linkedin-in fa-lg"></i></a>
                        <a href="#" class="me-3"><i class="fab fa-twitter fa-lg"></i></a>
                        <a href="#" class="me-3"><i class="fab fa-youtube fa-lg"></i></a>
                        <a href="#"><i class="fab fa-instagram fa-lg"></i></a>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-md-8">
                <div class="contact-form p-4 rounded">
                    <h3 class="mb-4">Kirim Pesan</h3>
                    <form id="contactForm" action="<?= base_url('contact/submit') ?>" method="post">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Nama Anda" required>
                                    <label for="name">Nama Anda</label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email Anda" required>
                                    <label for="email">Email Anda</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-floating">
                                <select class="form-select" id="subject" name="subject" required>
                                    <option value="">Pilih Topik</option>
                                    <option value="Web Development">Web Development</option>
                                    <option value="Mobile Development">Mobile Development</option>
                                    <option value="Data Science">Data Science</option>
                                    <option value="Cloud Computing">Cloud Computing</option>
                                    <option value="Other">Lainnya</option>
                                </select>
                                <label for="subject">Topik</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-floating">
                                <textarea class="form-control" id="message" name="message" placeholder="Pesan Anda" style="height: 150px" required></textarea>
                                <label for="message">Pesan Anda</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-gradient btn-lg">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="map-section mt-5">
    <div class="container-fluid p-0">
        <div class="map-container">
            <!-- Replace with your actual Google Maps embed code -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.6664463317365!2d106.82496361476884!3d-6.175392395527383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5d2e764b12d%3A0x3d2ad6e1e0e9bcc8!2sMonumen%20Nasional!5e0!3m2!1sen!2sid!4v1647831234567!5m2!1sen!2sid" 
                    width="100%" 
                    height="450" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy">
            </iframe>
        </div>
    </div>
</section>

<style>
    .contact-hero {
        background: linear-gradient(135deg, var(--gradient-start), var(--gradient-end));
        color: white;
        padding: 80px 0;
        margin-top: -2rem;
        position: relative;
        overflow: hidden;
    }

    .contact-hero::before {
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

    .contact-hero .container {
        position: relative;
        z-index: 1;
    }

    .contact-info {
        background: white;
        box-shadow: 0 4px 20px rgba(255, 105, 180, 0.1);
        height: 100%;
        transition: transform 0.3s ease;
    }

    .contact-info:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 30px rgba(255, 105, 180, 0.2);
    }

    .contact-item {
        display: flex;
        align-items: start;
    }

    .contact-item i {
        color: var(--accent-color);
        width: 24px;
        margin-top: 4px;
    }

    .social-links a {
        color: var(--accent-color);
        transition: all 0.3s ease;
        display: inline-block;
    }

    .social-links a:hover {
        color: var(--primary-color);
    }

    .contact-form {
        background: white;
        box-shadow: 0 4px 20px rgba(0,0,0,0.05);
    }

    .form-floating > .form-control:focus ~ label,
    .form-floating > .form-control:not(:placeholder-shown) ~ label,
    .form-floating > .form-select ~ label {
        color: var(--accent-color);
    }

    .form-control:focus,
    .form-select:focus {
        border-color: var(--accent-color);
        box-shadow: 0 0 0 0.25rem rgba(255, 105, 180, 0.25);
    }

    .btn-gradient {
        background: linear-gradient(45deg, var(--gradient-start), var(--gradient-end));
        color: white;
        border: none;
        border-radius: 30px;
        padding: 12px 32px;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .btn-gradient:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(0,184,148,0.2);
        color: white;
    }

    .map-container {
        position: relative;
        overflow: hidden;
        padding-top: 56.25%;
        border-radius: 16px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.05);
    }

    .map-container iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: 0;
        border-radius: 16px;
    }

    @media (max-width: 768px) {
        .contact-info {
            margin-bottom: 2rem;
        }
    }
</style>

<script>
document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Clear previous alerts
    document.getElementById('alertMessages').innerHTML = '';
    
    // Show loading state
    const submitButton = this.querySelector('button[type="submit"]');
    const originalButtonText = submitButton.innerHTML;
    submitButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Mengirim...';
    submitButton.disabled = true;
    
    const formData = new FormData(this);
    fetch(this.action, {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        // Create alert message
        const alertDiv = document.createElement('div');
        alertDiv.className = `alert alert-${data.success ? 'success' : 'danger'} alert-dismissible fade show`;
        alertDiv.innerHTML = `
            ${data.message}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        `;
        document.getElementById('alertMessages').appendChild(alertDiv);

        if (data.success) {
            this.reset();
        }
    })
    .catch(error => {
        console.error('Error:', error);
        const alertDiv = document.createElement('div');
        alertDiv.className = 'alert alert-danger alert-dismissible fade show';
        alertDiv.innerHTML = `
            Terjadi kesalahan saat mengirim pesan. Silakan coba lagi.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        `;
        document.getElementById('alertMessages').appendChild(alertDiv);
    })
    .finally(() => {
        // Restore button state
        submitButton.innerHTML = originalButtonText;
        submitButton.disabled = false;
    });
});
</script> 