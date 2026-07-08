<?php
require_once 'includes/config.php';
$pageTitle = 'Home';
$services    = $conn->query("SELECT * FROM services LIMIT 6");
$departments = $conn->query("SELECT * FROM departments LIMIT 10");
$doctors     = $conn->query("SELECT d.*, dep.name as dept_name FROM doctors d LEFT JOIN departments dep ON d.department_id = dep.id LIMIT 4");
?>
<?php include 'includes/header.php'; ?>

<!-- ===== HERO WITH BG CAROUSEL ===== -->
<section class="hero" id="heroSection">

    <!-- Background Image Slider -->
    <div class="hero-bg-slider" id="heroBgSlider">
        <div class="hero-bg-slide active" style="background-image:url('<?= SITE_URL ?>/assets/images/slide1.jpg');"></div>
        <div class="hero-bg-slide" style="background-image:url('<?= SITE_URL ?>/assets/images/slide2.jpg');"></div>
        <div class="hero-bg-slide" style="background-image:url('<?= SITE_URL ?>/assets/images/slide3.jpg');"></div>
        <div class="hero-bg-slide" style="background-image:url('<?= SITE_URL ?>/assets/images/slide4.jpg');"></div>
    </div>
    <div class="hero-bg-overlay"></div>

    <!-- Arrow Buttons -->
    <button class="hero-arrow hero-prev" onclick="prevHeroSlide()"><i class="fas fa-chevron-left"></i></button>
    <button class="hero-arrow hero-next" onclick="nextHeroSlide()"><i class="fas fa-chevron-right"></i></button>

    <!-- Dots -->
    <div class="hero-dots">
        <span class="hero-dot active" onclick="goHeroSlide(0)"></span>
        <span class="hero-dot" onclick="goHeroSlide(1)"></span>
        <span class="hero-dot" onclick="goHeroSlide(2)"></span>
        <span class="hero-dot" onclick="goHeroSlide(3)"></span>
    </div>

    <!-- Original Content (unchanged) -->
    <div class="container">
        <div class="hero-content">
            <div class="hero-badge"><i class="fas fa-shield-alt"></i> World-Class Healthcare</div>
            <h1>Your Good Health Is Our <span>Top Priority</span></h1>
            <p>At Chattagram Healthcare, we provide the best healthcare services through the latest medical technology and experienced doctors.</p>
            <div class="hero-btns">
                <a href="pages/appointment.php" class="btn btn-primary"><i class="fas fa-calendar-check"></i> Book Appointment</a>
                <a href="pages/services.php" class="btn btn-outline"><i class="fas fa-stethoscope"></i> Our Services</a>
            </div>
        </div>
        <div class="hero-image">
            <div class="hero-image-card">
                <i class="fas fa-hospital-alt"></i>
                <h3 style="font-size:20px;margin-bottom:15px;">Our Achievements</h3>
                <div class="hero-stats">
                    <div class="stat-item"><strong>50+</strong><span>Specialist Doctors</span></div>
                    <div class="stat-item"><strong>10K+</strong><span>Patients Served</span></div>
                    <div class="stat-item"><strong>15+</strong><span>Years Experience</span></div>
                    <div class="stat-item"><strong>10</strong><span>Departments</span></div>
                    <div class="stat-item"><strong>24/7</strong><span>Emergency</span></div>
                    <div class="stat-item"><strong>98%</strong><span>Satisfaction</span></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SERVICES -->
<!-- SERVICES -->
<!-- SERVICES -->
<section>
    <div class="container">
        <div class="section-header">
            <span class="eyebrow">What We Offer</span>
            <h2>Our Online Services</h2>
            <div class="divider"></div>
            <p>We provide various online services to make your healthcare experience easy and modern.</p>
        </div>
        <div class="services-grid">
            <?php while($s = $services->fetch_assoc()): ?>
            <div class="service-card">
                <div class="service-icon"><i class="<?= $s['icon'] ?>"></i></div>
                <h3><?= $s['title'] ?></h3>
                <p><?= $s['description'] ?></p>
            </div>
            <?php endwhile; ?>
        </div>
        <div style="text-align:center;margin-top:35px;">
            <a href="pages/services.php" class="btn btn-primary" style="background:var(--primary);color:white;">View All Services <i class="fas fa-arrow-right"></i></a>
        </div>
    </div>
</section>

<!-- DEPARTMENTS -->
<section style="background:var(--white);">
    <div class="container">
        <div class="section-header">
            <span class="eyebrow">Departments</span>
            <h2>Our Specialist Departments</h2>
            <div class="divider"></div>
            <p>We offer top-quality medical care across 10 specialist departments.</p>
        </div>
        <div class="dept-grid">
            <?php while($d = $departments->fetch_assoc()): ?>
            <a href="pages/departments.php" class="dept-card">
                <i class="<?= $d['icon'] ?>"></i>
                <h3><?= $d['name'] ?></h3>
                <p><?= mb_substr($d['description'], 0, 50) ?>...</p>
            </a>
            <?php endwhile; ?>
        </div>
    </div>
</section>

<!-- DOCTORS -->
<section>
    <div class="container">
        <div class="section-header">
            <span class="eyebrow">Our Team</span>
            <h2>Meet Our Doctors</h2>
            <div class="divider"></div>
            <p>Our experienced and skilled doctors are always ready to serve you.</p>
        </div>
        <div class="doctors-grid">
            <?php while($doc = $doctors->fetch_assoc()): ?>
            <div class="doctor-card">
                <div class="doctor-img">
                    <?php 
                    $img_path = $_SERVER['DOCUMENT_ROOT'] . '/hospital/assets/images/' . $doc['image'];
                    if(!empty($doc['image']) && file_exists($img_path)): ?>
                        <img src="<?= SITE_URL ?>/assets/images/<?= $doc['image'] ?>" alt="<?= $doc['name'] ?>">
                    <?php else: ?>
                        <i class="fas fa-user-md"></i>
                    <?php endif; ?>
                </div>
                <div class="doctor-info">
                    <h3><?= $doc['name'] ?></h3>
                    <p class="dept"><i class="fas fa-hospital"></i> <?= $doc['dept_name'] ?></p>
                    <p><i class="fas fa-graduation-cap"></i> <?= $doc['specialization'] ?></p>
                    <p><i class="fas fa-calendar-alt"></i> Available: <?= $doc['available_days'] ?></p>
                    <a href="pages/doctors.php" class="doctor-contact-btn">Contact Doctor</a>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
        <div style="text-align:center;margin-top:35px;">
            <a href="pages/doctors.php" class="btn btn-primary" style="background:var(--primary);color:white;">View All Doctors <i class="fas fa-arrow-right"></i></a>
        </div>
    </div>
</section>

<!-- CTA -->
<section style="background:linear-gradient(135deg,var(--primary-dark),var(--primary));color:white;padding:60px 0;">
    <div class="container" style="text-align:center;">
        <h2 style="font-size:32px;margin-bottom:15px;">Book Your Appointment Today</h2>
        <p style="opacity:0.85;margin-bottom:30px;font-size:16px;">Consult with our specialist doctors — book your appointment now.</p>
        <a href="pages/appointment.php" class="btn btn-primary" style="background:white;color:var(--primary);"><i class="fas fa-calendar-check"></i> Book Now</a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
