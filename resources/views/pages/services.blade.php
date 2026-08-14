@extends('components.layout')

@section('content')
<style>
    /* =========================================
       CSS Variables (Light & Dark Themes)
       Connected dynamically to the Navbar toggle
       ========================================= */
    :root {
        --text-heading: #0f172a;
        --text-body: #475569;
        /* Radial gradient centered in the middle of the card */
        --card-gradient: radial-gradient(circle at 50% 50%, rgba(59, 130, 246, 0.08) 0%, #ffffff 80%);
        --section-gradient: linear-gradient(180deg, rgba(37, 99, 235, 0.1) 0%, rgba(15, 23, 42, 0) 100%);
        --blue-accent: #3b82f6;
        --card-border: rgba(59, 130, 246, 0.25);
        --card-hover-border: rgba(59, 130, 246, 0.7);
        --card-shadow: 0 12px 28px rgba(0, 0, 0, 0.12), 0 0 15px rgba(59, 130, 246, 0.15);
        --icon-bg: rgba(59, 130, 246, 0.12);
    }

    :root[data-theme="dark"],
    .dark-mode,
    .dark-theme {
        --text-heading: #f8fafc;
        --text-body: #cbd5e1;
        /* Dark mode radial gradient centered in the middle of the card */
        --card-gradient: radial-gradient(circle at 50% 50%, rgba(59, 130, 246, 0.15) 0%, #1e293b 80%);
        --section-gradient: linear-gradient(180deg, rgba(15, 23, 42, 0) 0%, rgba(37, 99, 235, 0.12) 50%, rgba(15, 23, 42, 0) 100%);
        --blue-accent: #60a5fa;
        --card-border: rgba(59, 130, 246, 0.3);
        --card-hover-border: rgba(59, 130, 246, 0.8);
        --card-shadow: 0 12px 28px rgba(0, 0, 0, 0.4), 0 0 15px rgba(59, 130, 246, 0.3);
        --icon-bg: rgba(59, 130, 246, 0.15);
    }

    @media (prefers-color-scheme: dark) {
        :root:not([data-theme="light"]):not(.light-mode):not(.light-theme) {
            --text-heading: #f8fafc;
            --text-body: #cbd5e1;
            /* Dark mode radial gradient centered in the middle of the card */
            --card-gradient: radial-gradient(circle at 50% 50%, rgba(59, 130, 246, 0.15) 0%, #1e293b 80%);
            --section-gradient: linear-gradient(180deg, rgba(15, 23, 42, 0) 0%, rgba(37, 99, 235, 0.12) 50%, rgba(15, 23, 42, 0) 100%);
            --blue-accent: #60a5fa;
            --card-border: rgba(59, 130, 246, 0.3);
            --card-hover-border: rgba(59, 130, 246, 0.8);
            --card-shadow: 0 12px 28px rgba(0, 0, 0, 0.4), 0 0 15px rgba(59, 130, 246, 0.3);
            --icon-bg: rgba(59, 130, 246, 0.15);
        }
    }

    /* =========================================
       Entrance Animation & Layout
       ========================================= */
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    /* Main Container matches About page structure */
    .content-section { 
        padding: 80px 20px; 
        opacity: 0;
        animation: fadeInUp 0.8s ease-out forwards;
        background: var(--section-gradient);
        min-height: 100vh;
        transition: background 0.3s ease;
    }

    .section-header {
        text-align: center;
        max-width: 800px;
        margin: 0 auto 60px;
    }

    .section-header h1 {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 16px;
        color: var(--text-heading);
        transition: color 0.3s ease;
    }

    .section-header p {
        font-size: 1.15rem;
        line-height: 1.6;
        color: var(--text-body);
        transition: color 0.3s ease;
    }

    /* Responsive Grid Layout */
    .grid-3 { 
        display: grid; 
        grid-template-columns: repeat(3, 1fr); 
        gap: 30px; 
    }

    /* =========================================
       Card Styling (Matches About Page)
       ========================================= */
    .card {
        background: var(--card-gradient);
        border: 1px solid var(--card-border); 
        padding: 30px;
        border-radius: 16px;
        transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease, background 0.3s ease;
    }

    .card:hover {
        transform: translateY(-4px);
        border-color: var(--card-hover-border); 
        box-shadow: var(--card-shadow);
    }

    /* Staggered entrance for cards */
    .card:nth-child(1) { animation-delay: 0.1s; }
    .card:nth-child(2) { animation-delay: 0.2s; }
    .card:nth-child(3) { animation-delay: 0.3s; }
    .card:nth-child(4) { animation-delay: 0.4s; }
    .card:nth-child(5) { animation-delay: 0.5s; }
    .card:nth-child(6) { animation-delay: 0.6s; }

    .card h3 { 
        margin-bottom: 12px; 
        font-size: 1.25rem; 
        color: var(--text-heading);
        transition: color 0.3s ease;
    }
    
    .card p { 
        font-size: 1rem; 
        line-height: 1.55; 
        color: var(--text-body);
        margin: 0;
        transition: color 0.3s ease;
    }

    /* Icon Wrappers (Adapted from About Page sizing) */
    .icon-wrapper {
        width: 48px;
        height: 48px;
        border-radius: 12px;
        background: var(--icon-bg);
        color: var(--blue-accent);
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
        transition: background 0.3s ease, color 0.3s ease;
    }

    /* =========================================
       Responsive Breakpoints
       ========================================= */
    @media (max-width: 1024px) {
        .grid-3 { grid-template-columns: repeat(2, 1fr); }
    }

    @media (max-width: 768px) {
        .content-section { padding: 60px 20px; }
        .section-header { margin-bottom: 40px; }
        .section-header h1 { font-size: 2rem; }
        .section-header p { font-size: 1.05rem; }
        .grid-3 { grid-template-columns: 1fr; gap: 20px; }
        .card { padding: 24px; }
    }

    @media (max-width: 480px) {
        .content-section { padding: 45px 15px; }
        .section-header h1 { font-size: 1.75rem; }
        .section-header p { font-size: 0.98rem; }
        .card { padding: 20px; border-radius: 12px; }
        .icon-wrapper { width: 42px; height: 42px; margin-bottom: 15px; }
    }
</style>

<section class="content-section">
    <div class="container">
        <div class="section-header">
            <h1>Our Services</h1>
            <p>Comprehensive digital solutions from concept to deployment.</p>
        </div>

        <div class="grid-3">
            
            <!-- Web Development -->
            <div class="card">
                <div class="icon-wrapper">
                    <svg width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                    </svg>
                </div>
                <h3>Web Development</h3>
                <p>Modern, responsive, and robust web applications built on Laravel and Vue.js to handle high traffic and complex logic.</p>
            </div>

            <!-- Mobile Development -->
            <div class="card">
                <div class="icon-wrapper">
                    <svg width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                    </svg>
                </div>
                <h3>Mobile Development</h3>
                <p>Native iOS (Swift) and cross-platform (Flutter) mobile experiences designed for maximum user engagement.</p>
            </div>

            <!-- UI/UX Design -->
            <div class="card">
                <div class="icon-wrapper">
                    <svg width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.428-1.428L13.5 18.75l1.178-.394a2.25 2.25 0 001.428-1.428l.394-1.183.394 1.183a2.25 2.25 0 001.428 1.428l1.178.394-1.178.394a2.25 2.25 0 00-1.428 1.428z" />
                    </svg>
                </div>
                <h3>UI/UX Design</h3>
                <p>User-centric interfaces combining Apple-like minimalism with highly intuitive, frictionless user journeys.</p>
            </div>

            <!-- Cloud Solutions -->
            <div class="card">
                <div class="icon-wrapper">
                    <svg width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15a4.5 4.5 0 004.5 4.5H18a3.75 3.75 0 001.332-7.257 3 3 0 00-3.758-3.848 5.25 5.25 0 00-10.233 2.33A4.502 4.502 0 002.25 15z" />
                    </svg>
                </div>
                <h3>Cloud Solutions</h3>
                <p>AWS and Google Cloud architecture, containerization, and auto-scaling setups for maximum uptime.</p>
            </div>

            <!-- Cybersecurity -->
            <div class="card">
                <div class="icon-wrapper">
                    <svg width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                    </svg>
                </div>
                <h3>Cybersecurity</h3>
                <p>Comprehensive penetration testing, data encryption, and compliance consulting to protect your digital assets.</p>
            </div>

            <!-- IT Consulting -->
            <div class="card">
                <div class="icon-wrapper">
                    <svg width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.82 1.508-2.316a7.5 7.5 0 10-7.516 0c.85.496 1.508 1.333 1.508 2.316V18" />
                    </svg>
                </div>
                <h3>IT Consulting</h3>
                <p>Strategic roadmapping to help your enterprise adopt new technologies and streamline operations effectively.</p>
            </div>

        </div>
    </div>
</section>
@endsection