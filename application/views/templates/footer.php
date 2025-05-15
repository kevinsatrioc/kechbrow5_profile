        </div>
    </div>

    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="footer-brand">
                        <h3 class="mb-3 valorant-heading">
                            <div class="gaming-icon me-2">
                                <i class="fas fa-gamepad"></i>
                            </div>
                            KECHBROW
                        </h3>
                        <p class="mb-0">Level up your gaming experience with our competitive community</p>
                        <div class="gaming-achievements mt-3">
                            <span class="achievement-badge" title="Elite Gaming Community">
                                <i class="fas fa-crown"></i>
                            </span>
                            <span class="achievement-badge" title="Tournament Champions">
                                <i class="fas fa-trophy"></i>
                            </span>
                            <span class="achievement-badge" title="Community Choice">
                                <i class="fas fa-star"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="footer-links">
                        <h5 class="mb-3 valorant-heading">Quick Access</h5>
                        <div class="d-flex flex-column gap-2">
                            <a href="<?= base_url() ?>" class="valorant-link">
                                <i class="fas fa-play me-2"></i>Games
                            </a>
                            <a href="<?= base_url('about') ?>" class="valorant-link">
                                <i class="fas fa-trophy me-2"></i>Leaderboard
                            </a>
                            <a href="<?= base_url('contact') ?>" class="valorant-link">
                                <i class="fas fa-users me-2"></i>Community
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="footer-social">
                        <h5 class="mb-3 valorant-heading">Connect & Play</h5>
                        <div class="social-links">
                            <a href="#" class="gaming-icon me-3" title="Join our Discord">
                                <i class="fab fa-discord"></i>
                            </a>
                            <a href="#" class="gaming-icon me-3" title="Watch our streams">
                                <i class="fab fa-twitch"></i>
                            </a>
                            <a href="#" class="gaming-icon me-3" title="Subscribe on YouTube">
                                <i class="fab fa-youtube"></i>
                            </a>
                            <a href="#" class="gaming-icon" title="Join our Reddit">
                                <i class="fab fa-reddit"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="valorant-divider my-4"></div>
            <div class="text-center">
                <div class="gaming-stats mb-3">
                    <div class="row justify-content-center">
                        <div class="col-md-3 col-6 mb-3 mb-md-0">
                            <div class="stat-item">
                                <span class="stat-number">10K+</span>
                                <span class="stat-label">Active Players</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 mb-3 mb-md-0">
                            <div class="stat-item">
                                <span class="stat-number">100+</span>
                                <span class="stat-label">Daily Tournaments</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="stat-item">
                                <span class="stat-number">50K+</span>
                                <span class="stat-label">Community Members</span>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="mb-0">&copy; <?= date('Y') ?> KECHBROW | GG WP <i class="fas fa-trophy ms-2"></i></p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        .footer {
            background-color: var(--card-bg);
            color: var(--text-color);
            border-top: var(--valorant-border);
            position: relative;
            padding-top: 4rem;
            clip-path: polygon(0 30px, 100% 0, 100% 100%, 0 100%);
        }

        .footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                linear-gradient(45deg, rgba(255, 70, 85, 0.05) 0%, transparent 100%),
                url('data:image/svg+xml,<svg width="50" height="50" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg"><path d="M20 15h10v5H20zM15 25h20v2H15z" stroke="rgba(255,70,85,0.05)" fill="none"/></svg>');
            background-size: 100% 100%, 50px 50px;
            pointer-events: none;
        }

        .gaming-achievements {
            display: flex;
            gap: 1rem;
        }

        .achievement-badge {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 35px;
            height: 35px;
            background: var(--primary-color);
            border: 2px solid var(--accent-color);
            color: var(--accent-color);
            font-size: 0.9rem;
            clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
            transition: all 0.3s ease;
        }

        .achievement-badge:hover {
            transform: scale(1.1);
            background: var(--accent-color);
            color: var(--text-color);
        }

        .stat-item {
            position: relative;
            padding: 1.5rem;
            background: var(--primary-color);
            border: 2px solid var(--accent-color);
            clip-path: polygon(10% 0, 90% 0, 100% 50%, 90% 100%, 10% 100%, 0 50%);
            transition: all 0.3s ease;
        }

        .stat-item:hover {
            transform: translateY(-5px);
        }

        .stat-number {
            font-family: 'Tungsten', sans-serif;
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--accent-color);
            line-height: 1;
            text-shadow: 0 0 10px rgba(255, 70, 85, 0.3);
        }

        .stat-label {
            font-family: 'DIN', sans-serif;
            font-size: 0.9rem;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-top: 0.5rem;
        }

        .valorant-link {
            display: inline-flex;
            align-items: center;
            color: var(--text-muted);
            text-decoration: none;
            transition: all 0.3s ease;
            position: relative;
            font-family: 'DIN', sans-serif;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            padding: 8px 15px;
            font-size: 0.9rem;
            background: var(--primary-color);
            border: 1px solid transparent;
            clip-path: polygon(5% 0, 100% 0, 95% 100%, 0% 100%);
        }

        .valorant-link:hover {
            color: var(--text-color);
            border-color: var(--accent-color);
            transform: translateX(5px);
        }

        .valorant-link i {
            color: var(--accent-color);
            transition: all 0.3s ease;
        }

        .valorant-link:hover i {
            transform: scale(1.2);
        }

        @media (max-width: 768px) {
            .footer {
                clip-path: polygon(0 15px, 100% 0, 100% 100%, 0 100%);
                padding-top: 3rem;
            }

            .stat-number {
                font-size: 2rem;
            }

            .stat-label {
                font-size: 0.8rem;
            }

            .achievement-badge {
                width: 30px;
                height: 30px;
                font-size: 0.8rem;
            }
        }
    </style>
</body>
</html> 