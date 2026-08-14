<style>
    .ios-navbar {
        position: sticky;
        top: 0;
        z-index: 1000;
        background: var(--nav-bg);
        backdrop-filter: saturate(180%) blur(20px);
        -webkit-backdrop-filter: saturate(180%) blur(20px);
        border-bottom: 1px solid var(--border-color);
        box-shadow: 0 6px 20px var(--nav-shadow);
        padding: 15px 0;
        transition: background 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease;
    }

    .navbar-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 20px;
    }

    .brand {
        display: flex;
        align-items: center;
        gap: 12px;
        font-size: 1.25rem;
        font-weight: 700;
        color: var(--text-heading);
        text-decoration: none;
        letter-spacing: -0.02em;
    }

    .brand img {
        width: 24px;
        height: 24px;
        object-fit: contain;
    }

    .brand-text {
        display: inline-block;
    }

    .nav-actions {
        display: flex;
        align-items: center;
        gap: 28px;
    }

    .nav-links { 
        display: flex; 
        gap: 12px; 
    }
    
    .nav-links a {
        position: relative;
        text-decoration: none;
        color: var(--text-heading);
        font-size: 0.95rem;
        font-weight: 500;
        padding: 6px 16px; 
        border-radius: 20px; 
        border: 1px solid transparent; 
        transition: all 0.2s ease;
        opacity: 0.8;
    }
    
    .nav-links a:hover { 
        color: var(--blue-hover); 
        opacity: 1;
    }

    /* Active Link Styling with Border and Background */
    .nav-links a.active {
        color: var(--blue-accent);
        background-color: rgba(128, 128, 128, 0.1);
        border: 1px solid var(--blue-accent);
        opacity: 1;
        font-weight: 600;
    }

    /* Modern Theme Toggle Button Style */
    #theme-toggle {
        background: rgba(128, 128, 128, 0.08);
        border: 1px solid var(--border-color);
        border-radius: 50%;
        width: 40px;
        height: 40px;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        color: var(--text-heading);
    }

    #theme-toggle:hover {
        background: rgba(128, 128, 128, 0.15);
        border-color: var(--blue-accent);
        color: var(--blue-accent);
        transform: rotate(15deg) scale(1.05);
    }

    /* =========================================
       Responsive Adjustments
       ========================================= */

    /* Tablet */
    @media (max-width: 992px) {
        .nav-actions { gap: 20px; }
        .nav-links { gap: 8px; }
        .nav-links a { padding: 6px 12px; font-size: 0.9rem; }
    }

    /* Mobile */
    @media (max-width: 768px) {
        .brand-text { display: none; } /* Hide company name on mobile */
        .ios-navbar { padding: 10px 0; }
        .nav-actions { gap: 15px; }
        .nav-links { gap: 4px; }
        .nav-links a { padding: 6px 10px; font-size: 0.85rem; }
        #theme-toggle { width: 36px; height: 36px; }
    }

    /* Small Mobile */
    @media (max-width: 480px) {
        .nav-links a { padding: 6px 8px; font-size: 0.8rem; }
        .brand img { width: 28px; height: 28px; } /* Slightly larger icon to stand alone */
    }
</style>

<nav class="ios-navbar">
    <div class="container navbar-container">
        <a href="/" class="brand">
            <img src="{{ asset('company-assets/nexus-flow-icon.png') }}" alt="NexusFlow Icon">
            <span class="brand-text">NexusFlow Tech</span>
        </a>
        
        <div class="nav-actions">
            <div class="nav-links">
                <a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Home</a>
                <a href="/about" class="{{ request()->is('about') ? 'active' : '' }}">About</a>
                <a href="/services" class="{{ request()->is('services') ? 'active' : '' }}">Services</a>
                <a href="/contact" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a>
            </div>
            
            <button id="theme-toggle" aria-label="Toggle Dark Mode"></button>
        </div>
    </div>
</nav>