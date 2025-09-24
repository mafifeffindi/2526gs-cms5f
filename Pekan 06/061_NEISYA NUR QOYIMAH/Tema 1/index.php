<?php get_header(); ?>

<main>
    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Welcome to <?php bloginfo('name'); ?></h1>
            <p>Your trusted partner for innovative solutions.</p>
            <a href="#services" class="btn">Our Services</a>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services">
        <div class="container">
            <h2>Our Services</h2>
            <div class="service-cards">
                <div class="card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service1.jpg" alt="Service 1">
                    <h3>Consulting</h3>
                    <p>Professional advice for your business growth.</p>
                </div>
                <div class="card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service2.jpg" alt="Service 2">
                    <h3>Development</h3>
                    <p>Custom software solutions for modern businesses.</p>
                </div>
                <div class="card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service3.jpg" alt="Service 3">
                    <h3>Design</h3>
                    <p>Creative design to elevate your brand identity.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="team">
        <div class="container">
            <h2>Our Team</h2>
            <div class="team-cards">
                <div class="card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/team1.jpg" alt="Team Member">
                    <h3>Jane Doe</h3>
                    <p>CEO & Founder</p>
                </div>
                <div class="card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/team2.jpg" alt="Team Member">
                    <h3>John Smith</h3>
                    <p>Lead Developer</p>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>

