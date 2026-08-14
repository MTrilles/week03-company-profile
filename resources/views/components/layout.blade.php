<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NexusFlow Tech | Innovate. Scale. Succeed.</title>
    <style>
        /* Global Theme Variables */
        :root, [data-theme="dark"] {
            --bg-main: #0a0a0c;
            --bg-card: #141417;
            --text-main: #f5f5f7;
            --text-heading: #ffffff;
            --text-muted: #a1a1aa;
            --blue-accent: #1d4ed8;
            --blue-hover: #3b82f6;
            --border-color: rgba(255, 255, 255, 0.1);
            --nav-bg: rgba(10, 10, 12, 0.85);
            --nav-shadow: rgba(0, 0, 0, 0.5);
            
            --hero-gradient: linear-gradient(135deg, #0a0a0c 0%, #1e3a8a 100%);
            --intro-gradient: linear-gradient(180deg, #111113 0%, #172554 100%);
            --footer-gradient: linear-gradient(135deg, #0a0a0c 0%, #1e3a8a 100%);
            --card-gradient: linear-gradient(135deg, #141417, #172554);
            
            --tech-pattern: rgba(59, 130, 246, 0.08);
        }

        [data-theme="light"] {
            --bg-main: #f8fafc;
            --bg-card: #ffffff;
            --text-main: #1e293b;
            --text-heading: #0f172a;
            --text-muted: #334155;
            --blue-accent: #2563eb;
            --blue-hover: #1d4ed8;
            --border-color: rgba(0, 0, 0, 0.1);
            --nav-bg: rgba(255, 255, 255, 0.85);
            --nav-shadow: rgba(0, 0, 0, 0.08);
            
            --hero-gradient: linear-gradient(135deg, #ffffff 0%, #3b82f6 100%);
            --intro-gradient: linear-gradient(180deg, #ffffff 0%, #60a5fa 100%);
            --footer-gradient: linear-gradient(135deg, #ffffff 0%, #3b82f6 100%);
            --card-gradient: linear-gradient(135deg, #ffffff 0%, #dbeafe 100%);
            
            --tech-pattern: rgba(37, 99, 235, 0.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
        }

        body {
            background-color: var(--bg-main);
            color: var(--text-main);
            line-height: 1.5;
            -webkit-font-smoothing: antialiased;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        h1, h2, h3 { color: var(--text-heading); transition: color 0.3s ease; }
        h1 { font-size: 3.5rem; font-weight: 700; letter-spacing: -0.015em; }
        h2 { font-size: 2.5rem; font-weight: 600; letter-spacing: -0.01em; }
        h3 { font-size: 1.5rem; font-weight: 600; }
        p { font-size: 1.1rem; color: var(--text-muted); transition: color 0.3s ease; }

        .container {
            max-width: 1024px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Primary Button (Hero) */
        .btn-ios {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, var(--blue-accent), var(--blue-hover));
            color: white;
            padding: 14px 32px;
            border-radius: 980px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
            box-shadow: 0 4px 15px rgba(29, 78, 216, 0.3);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .btn-ios:hover { 
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 10px 25px rgba(59, 130, 246, 0.5);
            background: linear-gradient(135deg, var(--blue-hover), var(--blue-accent));
        }

        /* Secondary Outline Button (See More) */
        .btn-outline {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: transparent;
            color: var(--text-heading);
            padding: 12px 28px;
            border-radius: 980px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1rem;
            border: 2px solid var(--border-color);
            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        }

        .btn-outline:hover {
            border-color: var(--blue-accent);
            color: var(--blue-accent);
            background: rgba(59, 130, 246, 0.05);
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(59, 130, 246, 0.15);
        }

        .card {
            background: var(--bg-card);
            border-radius: 18px;
            padding: 30px;
            border: 1px solid var(--border-color);
            transition: transform 0.2s ease, background 0.3s ease, border-color 0.3s ease;
        }

        .card:hover { transform: translateY(-4px); }
    </style>
</head>
<body>
    @include('components.navbar')
    
    <main>
        @yield('content')
    </main>

    @include('components.footer')

    <!-- Theme Toggle Logic with SVG Icons -->
    <script>
        const themeToggleBtn = document.getElementById('theme-toggle');
        const htmlElement = document.documentElement;

        // Modern SVGs
        const sunIcon = `<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>`;
        const moonIcon = `<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>`;

        const savedTheme = localStorage.getItem('theme') || 'dark';
        htmlElement.setAttribute('data-theme', savedTheme);
        updateToggleIcon(savedTheme);

        themeToggleBtn.addEventListener('click', () => {
            const currentTheme = htmlElement.getAttribute('data-theme');
            const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
            
            htmlElement.setAttribute('data-theme', newTheme);
            localStorage.setItem('theme', newTheme);
            updateToggleIcon(newTheme);
        });

        function updateToggleIcon(theme) {
            // If theme is dark, we show the sun icon to switch to light, and vice versa.
            themeToggleBtn.innerHTML = theme === 'dark' ? sunIcon : moonIcon;
        }
    </script>
</body>
</html>