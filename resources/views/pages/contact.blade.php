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
        
        /* Form specific variables */
        --input-bg: #fafafa;
        --input-border: rgba(15, 23, 42, 0.1);
        --input-text: #0f172a;
    }

    :root[data-theme="dark"],
    .dark-mode,
    .dark-theme {
        --text-heading: #f8fafc;
        --text-body: #cbd5e1;
        --card-gradient: radial-gradient(circle at 50% 50%, rgba(59, 130, 246, 0.15) 0%, #1e293b 80%);
        --section-gradient: linear-gradient(180deg, rgba(15, 23, 42, 0) 0%, rgba(37, 99, 235, 0.12) 50%, rgba(15, 23, 42, 0) 100%);
        --blue-accent: #60a5fa;
        --card-border: rgba(59, 130, 246, 0.3);
        --card-hover-border: rgba(59, 130, 246, 0.8);
        --card-shadow: 0 12px 28px rgba(0, 0, 0, 0.4), 0 0 15px rgba(59, 130, 246, 0.3);
        --icon-bg: rgba(59, 130, 246, 0.15);
        
        --input-bg: rgba(15, 23, 42, 0.4);
        --input-border: rgba(248, 250, 252, 0.15);
        --input-text: #f8fafc;
    }

    @media (prefers-color-scheme: dark) {
        :root:not([data-theme="light"]):not(.light-mode):not(.light-theme) {
            --text-heading: #f8fafc;
            --text-body: #cbd5e1;
            --card-gradient: radial-gradient(circle at 50% 50%, rgba(59, 130, 246, 0.15) 0%, #1e293b 80%);
            --section-gradient: linear-gradient(180deg, rgba(15, 23, 42, 0) 0%, rgba(37, 99, 235, 0.12) 50%, rgba(15, 23, 42, 0) 100%);
            --blue-accent: #60a5fa;
            --card-border: rgba(59, 130, 246, 0.3);
            --card-hover-border: rgba(59, 130, 246, 0.8);
            --card-shadow: 0 12px 28px rgba(0, 0, 0, 0.4), 0 0 15px rgba(59, 130, 246, 0.3);
            --icon-bg: rgba(59, 130, 246, 0.15);
            
            --input-bg: rgba(15, 23, 42, 0.4);
            --input-border: rgba(248, 250, 252, 0.15);
            --input-text: #f8fafc;
        }
    }

    /* =========================================
       Entrance Animation & Layout
       ========================================= */
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .content-section { 
        padding: 80px 20px; 
        opacity: 0;
        animation: fadeInUp 0.8s ease-out forwards;
        background: var(--section-gradient);
        min-height: 100vh;
        transition: background 0.3s ease;
    }

    .section-header { text-align: center; max-width: 800px; margin: 0 auto 60px; }
    .section-header h1 { font-size: 2.5rem; font-weight: 700; margin-bottom: 16px; color: var(--text-heading); transition: color 0.3s ease; }
    .section-header p { font-size: 1.15rem; line-height: 1.6; color: var(--text-body); transition: color 0.3s ease; }

    /* Layout Grid */
    .contact-container { 
        display: grid; 
        grid-template-columns: repeat(2, 1fr); 
        gap: 40px; 
        max-width: 1100px;
        margin: 0 auto;
    }

    /* =========================================
       Card Styling 
       ========================================= */
    .card {
        background: var(--card-gradient);
        border: 1px solid var(--card-border); 
        padding: 40px;
        border-radius: 16px;
        transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease, background 0.3s ease;
    }

    .card:hover {
        transform: translateY(-4px);
        border-color: var(--card-hover-border); 
        box-shadow: var(--card-shadow);
    }

    .card h3 { 
        margin-bottom: 24px; 
        font-size: 1.5rem; 
        color: var(--text-heading);
        transition: color 0.3s ease;
    }

    /* =========================================
       Form Styling 
       ========================================= */
    .form-group { margin-bottom: 20px; }
    label { 
        display: block; 
        margin-bottom: 8px; 
        font-weight: 600; 
        font-size: 0.95rem; 
        color: var(--text-heading);
        transition: color 0.3s ease;
    }
    input, textarea { 
        width: 100%; 
        padding: 14px 16px; 
        border: 1px solid var(--input-border); 
        border-radius: 12px; 
        font-size: 1rem; 
        background: var(--input-bg); 
        color: var(--input-text);
        transition: border-color 0.3s ease, background 0.3s ease, color 0.3s ease; 
        -webkit-appearance: none; 
    }
    input:focus, textarea:focus { 
        outline: none; 
        border-color: var(--blue-accent); 
        background: transparent; 
    }
    
    .btn-submit { 
        width: 100%; 
        padding: 16px;
        background: var(--blue-accent);
        color: #ffffff;
        border: none; 
        border-radius: 12px;
        font-size: 1.05rem;
        font-weight: 600;
        cursor: pointer; 
        transition: background 0.3s ease, transform 0.2s ease;
    }
    .btn-submit:hover {
        background: #2563eb;
        transform: translateY(-2px);
    }

    /* =========================================
       Contact Info & Map
       ========================================= */
    .contact-info-list { list-style: none; padding: 0; margin: 0; }
    .contact-info-list li { 
        display: flex; 
        align-items: flex-start; 
        gap: 16px; 
        margin-bottom: 24px; 
    }
    
    .list-icon {
        width: 44px;
        height: 44px;
        flex-shrink: 0;
        border-radius: 10px;
        background: var(--icon-bg);
        color: var(--blue-accent);
        display: flex;
        align-items: center;
        justify-content: center;
        transition: background 0.3s ease, color 0.3s ease;
    }

    .list-content { color: var(--text-body); font-size: 1rem; line-height: 1.5; transition: color 0.3s ease; }
    .list-content strong { display: block; color: var(--text-heading); font-size: 1.1rem; margin-bottom: 4px; transition: color 0.3s ease;}
    .list-content a { color: var(--blue-accent); text-decoration: none; transition: opacity 0.2s ease; }
    .list-content a:hover { opacity: 0.8; text-decoration: underline; }

    .map-container { 
        margin-top: 30px; 
        border-radius: 14px; 
        overflow: hidden; 
        border: 1px solid var(--card-border); 
        transition: border-color 0.3s ease;
    }

    /* =========================================
       Responsive Breakpoints
       ========================================= */
    @media (max-width: 992px) {
        .contact-container { gap: 30px; }
        .card { padding: 30px; }
    }

    @media (max-width: 768px) {
        .content-section { padding: 60px 20px; }
        .section-header { margin-bottom: 40px; }
        .section-header h1 { font-size: 2rem; }
        .section-header p { font-size: 1.05rem; }
        
        .contact-container { grid-template-columns: 1fr; }
    }

    @media (max-width: 480px) {
        .content-section { padding: 40px 15px; }
        .section-header h1 { font-size: 1.75rem; }
        .section-header p { font-size: 0.95rem; }
        .card { padding: 24px; border-radius: 12px; }
        .list-icon { width: 38px; height: 38px; }
    }
</style>

<section class="content-section">
    <div class="container">
        <div class="section-header">
            <h1>Get in Touch</h1>
            <p>Have a project in mind? Let's build something great together.</p> <!--[cite: 16] -->
        </div>

        <div class="contact-container">
            <!-- Form Card -->
            <div class="card">
                <h3>Send us a message</h3>
                <form action="#" method="POST">
                    <div class="form-group">
                        <label for="name">Full Name</label> <!--[cite: 16] -->
                        <input type="text" id="name" name="name" placeholder="John Doe" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label> <!--[cite: 16] -->
                        <input type="email" id="email" name="email" placeholder="john@example.com" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Your Message</label> <!--[cite: 16] -->
                        <textarea id="message" name="message" rows="5" placeholder="How can we help you?" required></textarea>
                    </div>
                    <button type="submit" class="btn-submit">Submit Message</button>
                </form>
            </div>

            <!-- Info & Map Card -->
            <div class="card">
                <h3>Contact Information</h3>
                <ul class="contact-info-list">
                    <li>
                        <div class="list-icon">
                            <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" /></svg>
                        </div>
                        <div class="list-content">
                            <strong>Address</strong>
                            <span>123 Innovation Drive, Tech District<br>Silicon Valley, CA 94025</span> <!--[cite: 16] -->
                        </div>
                    </li>
                    <li>
                        <div class="list-icon">
                            <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.909A2.25 2.25 0 012.25 7v-.243m19.5 0a4.827 4.827 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.909a4.827 4.827 0 011.07-1.916" /></svg>
                        </div>
                        <div class="list-content">
                            <strong>Email</strong>
                            <a href="mailto:hello@nexusflow.tech">hello@nexusflow.tech</a> <!--[cite: 16] -->
                        </div>
                    </li>
                    <li>
                        <div class="list-icon">
                            <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-2.896-1.596-5.48-4.18-7.076-7.076l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" /></svg>
                        </div>
                        <div class="list-content">
                            <strong>Phone</strong>
                            <span>+1 (555) 123-4567</span> <!--[cite: 16] -->
                        </div>
                    </li>
                    <li>
                        <div class="list-icon">
                            <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" /></svg>
                        </div>
                        <div class="list-content">
                            <strong>Socials</strong>
                            <a href="#" style="margin-right: 12px;">Twitter</a> 
                            <a href="#">LinkedIn</a>
                        </div>
                    </li>
                </ul>

                <div class="map-container">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3168.63929062107!2d-122.08385108469247!3d37.38605177983196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb7495bec0189%3A0x7c17d44a466baf9b!2sMountain%20View%2C%20CA!5e0!3m2!1sen!2sus!4v1675200000000!5m2!1sen!2sus" 
                        width="100%" height="200" style="border:0; display: block;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"> <!--[cite: 16] -->
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection