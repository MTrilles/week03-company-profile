<style>
    .ios-navbar {
        position: sticky;
        top: 0;
        z-index: 1000;
        background: rgba(255, 255, 255, 0.72);
        backdrop-filter: saturate(180%) blur(20px);
        -webkit-backdrop-filter: saturate(180%) blur(20px);
        border-bottom: 1px solid var(--ios-border);
        padding: 15px 0;
    }

    .navbar-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .brand {
        font-size: 1.25rem;
        font-weight: 700;
        color: var(--ios-text-main);
        text-decoration: none;
        letter-spacing: -0.02em;
    }

    .nav-links { display: flex; gap: 24px; }
    .nav-links a {
        text-decoration: none;
        color: var(--ios-text-main);
        font-size: 0.9rem;
        font-weight: 400;
        transition: color 0.2s;
    }
    .nav-links a:hover { color: var(--ios-blue); }
</style>

<nav class="ios-navbar">
    <div class="container navbar-container">
        <a href="/" class="brand">NexusFlow Tech</a>
        <div class="nav-links">
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/services">Services</a>
            <a href="/contact">Contact</a>
        </div>
    </div>
</nav>