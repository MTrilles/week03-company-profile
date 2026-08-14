@extends('components.layout')

@section('content')
<style>
    /* Entrance Animation */
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    /* Content Sections Layout */
    .content-section { 
        padding: 80px 20px; 
        opacity: 0;
        animation: fadeInUp 0.8s ease-out forwards;
    }

    .content-section:nth-child(1) { animation-delay: 0.1s; }
    .content-section:nth-child(2) { animation-delay: 0.2s; }
    .content-section:nth-child(3) { animation-delay: 0.3s; }

    /* Gradient Background for Our History Section */
    .history-section {
        background: linear-gradient(180deg, rgba(37, 99, 235, 0.1) 0%, rgba(15, 23, 42, 0) 100%);
    }

    .content-section.alt-bg {
        background: var(--intro-gradient);
    }

    /* Gradient Background for Meet the Team Section */
    .team-section {
        background: linear-gradient(180deg, rgba(15, 23, 42, 0) 0%, rgba(37, 99, 235, 0.12) 50%, rgba(15, 23, 42, 0) 100%);
    }

    .section-header {
        text-align: center;
        max-width: 800px;
        margin: 0 auto 40px;
    }

    .section-header h1, 
    .section-header h2 {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 16px;
        color: var(--text-heading);
    }

    .section-header p {
        font-size: 1.15rem;
        line-height: 1.6;
        color: var(--text-heading);
        opacity: 0.9;
    }

    /* Responsive Grid Layouts */
    .grid-2 { 
        display: grid; 
        grid-template-columns: repeat(2, 1fr); 
        gap: 30px; 
    }
    
    .grid-3 { 
        display: grid; 
        grid-template-columns: repeat(3, 1fr); 
        gap: 30px; 
    }
    
    .grid-4 { 
        display: grid; 
        grid-template-columns: repeat(4, 1fr); 
        gap: 24px; 
    }

    /* Card Styling with Aesthetic Outline */
    .card {
        background: var(--card-gradient);
        /* Aesthetic subtle outline */
        border: 1px solid rgba(59, 130, 246, 0.25); 
        padding: 30px;
        border-radius: 16px;
        transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
    }

    .card:hover {
        transform: translateY(-4px);
        /* Emphasized outline and glow effect on hover */
        border-color: rgba(59, 130, 246, 0.7); 
        box-shadow: 0 12px 28px rgba(0, 0, 0, 0.12), 0 0 15px rgba(59, 130, 246, 0.15);
    }

    .card h3 { margin-bottom: 12px; font-size: 1.25rem; }
    .card p { font-size: 1rem; line-height: 1.55; opacity: 0.88; margin: 0; }

    /* Icon Wrappers */
    .icon-wrapper {
        width: 48px;
        height: 48px;
        border-radius: 12px;
        background: rgba(59, 130, 246, 0.12);
        color: var(--blue-accent, #3b82f6);
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
    }

    /* Team Cards */
    .team-card { text-align: center; }
    .team-card .icon-wrapper {
        width: 76px; 
        height: 76px; 
        border-radius: 50%; 
        margin: 0 auto 20px; 
        background: rgba(59, 130, 246, 0.15);
    }
    
    .team-card h3 { margin-bottom: 4px; }
    .team-card .role { 
        font-size: 0.9rem; 
        font-weight: 600; 
        color: var(--blue-accent, #3b82f6); 
        margin-bottom: 14px; 
        display: block; 
    }

    /* =========================================
       Responsive Breakpoints (Desktop, Tablet, Mobile)
       ========================================= */

    /* Desktop / Laptop Small (Max Width: 1024px) */
    @media (max-width: 1024px) {
        .grid-4 { grid-template-columns: repeat(2, 1fr); }
    }

    /* Tablet View (Max Width: 768px) */
    @media (max-width: 768px) {
        .content-section { padding: 60px 20px; }
        
        .section-header { margin-bottom: 30px; }
        .section-header h1, 
        .section-header h2 { font-size: 2rem; }
        .section-header p { font-size: 1.05rem; }
        
        .grid-2, 
        .grid-3, 
        .grid-4 { 
            grid-template-columns: 1fr; 
            gap: 20px; 
        }

        .card { padding: 24px; }
    }

    /* Mobile View (Max Width: 480px) */
    @media (max-width: 480px) {
        .content-section { padding: 45px 15px; }
        
        .section-header h1, 
        .section-header h2 { font-size: 1.75rem; }
        .section-header p { font-size: 0.98rem; }
        
        .card { padding: 20px; border-radius: 12px; }
        .icon-wrapper { width: 42px; height: 42px; margin-bottom: 15px; }
        .team-card .icon-wrapper { width: 64px; height: 64px; }
    }
</style>

<!-- Our History & Mission/Vision -->
<section class="content-section history-section">
    <div class="container">
        <div class="section-header">
            <h1>Our History</h1>
            <p>Founded in 2024 by a small group of passionate engineers in a local co-working space, NexusFlow Tech began with a simple goal: to make enterprise-grade software accessible to startups. Within two years, we expanded our operations globally, partnering with over 50 businesses to modernize their tech stacks.</p>
        </div>

        <div class="grid-2">
            <div class="card">
                <div class="icon-wrapper">
                    <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <h3>Our Mission</h3>
                <p>To deliver cutting-edge technology solutions that streamline operations, elevate user experiences, and drive exponential growth for our partners.</p>
            </div>
            <div class="card">
                <div class="icon-wrapper">
                    <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                </div>
                <h3>Our Vision</h3>
                <p>To become the leading global catalyst for digital transformation, setting new standards in software engineering and design.</p>
            </div>
        </div>
    </div>
</section>

<!-- Core Values -->
<section class="content-section alt-bg">
    <div class="container">
        <div class="section-header">
            <h2>Core Values</h2>
        </div>
        <div class="grid-4">
            <div class="card">
                <div class="icon-wrapper">
                    <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path></svg>
                </div>
                <h3>Innovation</h3>
                <p>We constantly push boundaries and embrace new technologies.</p>
            </div>
            <div class="card">
                <div class="icon-wrapper">
                    <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                </div>
                <h3>Integrity</h3>
                <p>We build trust through transparent communication and honest work.</p>
            </div>
            <div class="card">
                <div class="icon-wrapper">
                    <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                </div>
                <h3>Collaboration</h3>
                <p>We believe the best products are built together.</p>
            </div>
            <div class="card">
                <div class="icon-wrapper">
                    <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                </div>
                <h3>Excellence</h3>
                <p>We refuse to compromise on code quality and design.</p>
            </div>
        </div>
    </div>
</section>

<!-- Meet the Team -->
<section class="content-section team-section">
    <div class="container">
        <div class="section-header">
            <h2>Meet the Team</h2>
        </div>
        <div class="grid-3">
            <div class="card team-card">
                <div class="icon-wrapper">
                    <svg width="32" height="32" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                </div>
                <h3>Elena Rostova</h3>
                <span class="role">CEO & Founder</span>
                <p>A visionary leader with 10 years of experience in tech scaling.</p>
            </div>
            <div class="card team-card">
                <div class="icon-wrapper">
                    <svg width="32" height="32" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                </div>
                <h3>Marcus Chen</h3>
                <span class="role">Chief Technology Officer</span>
                <p>The brilliant mind behind our cloud and backend architecture.</p>
            </div>
            <div class="card team-card">
                <div class="icon-wrapper">
                    <svg width="32" height="32" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path></svg>
                </div>
                <h3>Sarah Jenkins</h3>
                <span class="role">Lead UI/UX Designer</span>
                <p>An award-winning designer obsessed with intuitive user flows.</p>
            </div>
        </div>
    </div>
</section>
@endsection