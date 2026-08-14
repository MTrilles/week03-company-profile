@extends('components.layout')

@section('content')
<style>
    @keyframes pulseGlow {
        0% { border-color: rgba(59, 130, 246, 0.2); box-shadow: 0 0 10px rgba(59, 130, 246, 0.1); }
        50% { border-color: rgba(59, 130, 246, 0.6); box-shadow: 0 0 25px rgba(59, 130, 246, 0.3); }
        100% { border-color: rgba(59, 130, 246, 0.2); box-shadow: 0 0 10px rgba(59, 130, 246, 0.1); }
    }

    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @keyframes techSlantMove {
        0% { background-position: 0 0; }
        100% { background-position: 100px 100px; }
    }

    /* Base / Desktop Styles */
    .hero-section { 
        position: relative;
        text-align: center; 
        min-height: 100vh; /* Fallback for older browsers */
        min-height: 100dvh; /* Dynamic viewport height for modern mobile browsers */
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 60px 20px; 
        background: var(--hero-gradient);
        overflow: hidden;
        animation: fadeInUp 0.8s ease-out forwards;
        transition: background 0.3s ease;
        box-sizing: border-box;
    }

    .hero-bg-animation {
        position: absolute;
        top: -50%; left: -50%; width: 200%; height: 200%;
        background-image: repeating-linear-gradient(
            45deg,
            transparent,
            transparent 20px,
            var(--tech-pattern) 20px,
            var(--tech-pattern) 40px
        );
        background-size: 100px 100px;
        animation: techSlantMove 4s linear infinite;
        z-index: 1;
        pointer-events: none;
    }

    .hero-content {
        position: relative;
        z-index: 2;
        width: 100%;
    }
    
    .hero-icon {
        width: 110px;
        height: 110px;
        object-fit: contain;
        margin-bottom: 24px;
        filter: drop-shadow(0 15px 25px rgba(0, 0, 0, 0.35)) drop-shadow(0 0 30px rgba(37, 99, 235, 0.45));
        transition: transform 0.3s ease, filter 0.3s ease;
    }

    .hero-icon:hover {
        transform: scale(1.06);
        filter: drop-shadow(0 20px 30px rgba(0, 0, 0, 0.4)) drop-shadow(0 0 40px rgba(59, 130, 246, 0.65));
    }

    .hero-section h1 { 
        margin-bottom: 20px; 
        font-size: 3rem;
    }
    
    .hero-section p { 
        max-width: 600px; 
        margin: 0 auto 40px auto; 
        font-size: 1.25rem; 
        color: var(--text-heading); 
        opacity: 0.9; 
    }
    
    .intro-section { 
        padding: 80px 20px; 
        text-align: center; 
        background: var(--intro-gradient);
        opacity: 0;
        animation: fadeInUp 0.8s ease-out 0.3s forwards;
        transition: background 0.3s ease;
    }
    
    .intro-section p { 
        max-width: 800px; 
        margin: 20px auto 0; 
        font-size: 1.15rem; 
    }
    
    /* Added Gradient Background to Featured Services */
    .services-section { 
        padding: 80px 20px; 
        background: linear-gradient(180deg, rgba(15, 23, 42, 0) 0%, rgba(37, 99, 235, 0.12) 50%, rgba(15, 23, 42, 0) 100%); 
        transition: background 0.3s ease;
    }
    
    .services-section h2 { 
        text-align: center; 
        margin-bottom: 40px; 
        opacity: 0;
        animation: fadeInUp 0.8s ease-out 0.5s forwards;
    }
    
    .services-grid { 
        display: grid; 
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); 
        gap: 30px; 
        margin-bottom: 40px;
    }
    
    .service-card {
        background: var(--card-gradient);
        border: 1px solid transparent;
        opacity: 0;
        animation: pulseGlow 4s infinite, fadeInUp 0.8s ease-out 0.7s forwards;
        padding: 24px;
        border-radius: 12px;
    }
    
    .service-card h3 { margin-bottom: 10px; }
    .service-card p { font-size: 1rem; }

    .services-action {
        text-align: center;
        opacity: 0;
        animation: fadeInUp 0.8s ease-out 0.9s forwards;
    }

    /* =========================================
       Responsive Adjustments (Tablet & Mobile)
       ========================================= */

    /* Tablet (Max Width: 992px) */
    @media (max-width: 992px) {
        .hero-section h1 { font-size: 2.5rem; }
        .hero-section p { font-size: 1.15rem; }
        .services-grid { grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); }
    }

    /* Large Mobile (Max Width: 768px) */
    @media (max-width: 768px) {
        .hero-section {
            padding: 40px 15px;
        }
        .hero-icon {
            width: 85px;
            height: 85px;
            margin-bottom: 20px;
        }
        .hero-section h1 { font-size: 2.1rem; }
        .hero-section p { font-size: 1.05rem; margin-bottom: 30px; }
        
        .intro-section, .services-section { 
            padding: 60px 15px; 
        }
        .intro-section p { font-size: 1.05rem; }
        
        .services-grid { 
            gap: 20px; 
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        }
    }

    /* Small Mobile (Max Width: 480px) */
    @media (max-width: 480px) {
        .hero-section h1 { font-size: 1.8rem; }
        .hero-section p { font-size: 0.95rem; }
        
        .intro-section p, .service-card p { font-size: 0.95rem; }
        
        /* Force single column layout on very small screens to avoid overflow */
        .services-grid { grid-template-columns: 1fr; }
    }
</style>

<section class="hero-section">
    <div class="hero-bg-animation"></div>

    <div class="container hero-content">
        <img src="{{ asset('company-assets/nexus-flow-icon.png') }}" alt="NexusFlow Tech Icon" class="hero-icon">
        
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

        <!-- See More Button -->
        <div class="services-action">
            <a href="/services" class="btn-outline">See More Services &rarr;</a>
        </div>
    </div>
</section>
@endsection