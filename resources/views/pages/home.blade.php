@extends('components.layout')

@section('content')
<style>
    .hero-section { text-align: center; padding: 120px 20px; background: var(--ios-card); }
    .hero-section h1 { margin-bottom: 20px; }
    .hero-section p { max-width: 600px; margin: 0 auto 40px auto; font-size: 1.25rem; }
    .intro-section { padding: 80px 0; text-align: center; }
    .intro-section p { max-width: 800px; margin: 20px auto 0; font-size: 1.15rem; }
    .services-section { padding: 60px 0; }
    .services-section h2 { text-align: center; margin-bottom: 40px; }
    .services-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; }
    .service-card h3 { margin-bottom: 10px; color: var(--ios-text-main); }
</style>

<section class="hero-section">
    <div class="container">
        <h1>Innovate. Scale. Succeed.</h1>
        <p>We build scalable digital solutions that transform ambitious ideas into industry-leading products.</p>
        <a href="/contact" class="btn-ios">Let's Build Together</a>
    </div>
</section>

<section class="intro-section">
    <div class="container">
        <h2>Who We Are</h2>
        <p>NexusFlow Tech is a rapidly growing tech startup dedicated to building scalable, innovative digital solutions for modern businesses. We bridge the gap between complex technology and seamless user experiences, helping brands thrive in a digital-first world.</p>
    </div>
</section>

<section class="services-section">
    <div class="container">
        <h2>Featured Services</h2>
        <div class="services-grid">
            <div class="card service-card">
                <h3>Custom Web Development</h3>
                <p>Robust, scalable, and secure web applications tailored to your business needs.</p>
            </div>
            <div class="card service-card">
                <h3>Mobile App Development</h3>
                <p>Native and cross-platform mobile experiences that engage and retain users.</p>
            </div>
            <div class="card service-card">
                <h3>Cloud Architecture</h3>
                <p>Reliable cloud infrastructure designed for high availability and maximum performance.</p>
            </div>
        </div>
    </div>
</section>
@endsection