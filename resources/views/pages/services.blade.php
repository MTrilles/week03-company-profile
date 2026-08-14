@extends('components.layout')

@section('content')
<style>
    .page-header { text-align: center; padding: 80px 20px 40px; }
    .services-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; padding: 40px 0 80px; }
    .service-icon { font-size: 2.5rem; margin-bottom: 15px; display: inline-block; background: var(--ios-bg); padding: 15px; border-radius: 14px; }
</style>

<div class="page-header">
    <div class="container">
        <h1>Our Services</h1>
        <p>Comprehensive digital solutions from concept to deployment.</p>
    </div>
</div>

<div class="container">
    <div class="services-grid">
        <div class="card">
            <div class="service-icon">🌐</div>
            <h3>Web Development</h3>
            <p>Modern, responsive, and robust web applications built on Laravel and Vue.js to handle high traffic and complex logic.</p>
        </div>
        <div class="card">
            <div class="service-icon">📱</div>
            <h3>Mobile Development</h3>
            <p>Native iOS (Swift) and cross-platform (Flutter) mobile experiences designed for maximum user engagement.</p>
        </div>
        <div class="card">
            <div class="service-icon">🎨</div>
            <h3>UI/UX Design</h3>
            <p>User-centric interfaces combining Apple-like minimalism with highly intuitive, frictionless user journeys.</p>
        </div>
        <div class="card">
            <div class="service-icon">☁️</div>
            <h3>Cloud Solutions</h3>
            <p>AWS and Google Cloud architecture, containerization, and auto-scaling setups for maximum uptime.</p>
        </div>
        <div class="card">
            <div class="service-icon">🔒</div>
            <h3>Cybersecurity</h3>
            <p>Comprehensive penetration testing, data encryption, and compliance consulting to protect your digital assets.</p>
        </div>
        <div class="card">
            <div class="service-icon">💡</div>
            <h3>IT Consulting</h3>
            <p>Strategic roadmapping to help your enterprise adopt new technologies and streamline operations effectively.</p>
        </div>
    </div>
</div>
@endsection