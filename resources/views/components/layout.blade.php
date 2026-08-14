<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NexusFlow Tech | Innovate. Scale. Succeed.</title>
    <style>
        :root {
            --ios-bg: #f5f5f7;
            --ios-card: #ffffff;
            --ios-text-main: #1d1d1f;
            --ios-text-muted: #86868b;
            --ios-blue: #007aff;
            --ios-blue-hover: #0062cc;
            --ios-border: rgba(0,0,0,0.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
        }

        body {
            background-color: var(--ios-bg);
            color: var(--ios-text-main);
            line-height: 1.5;
            -webkit-font-smoothing: antialiased;
        }

        h1 { font-size: 3.5rem; font-weight: 700; letter-spacing: -0.015em; }
        h2 { font-size: 2.5rem; font-weight: 600; letter-spacing: -0.01em; }
        h3 { font-size: 1.5rem; font-weight: 600; }
        p { font-size: 1.1rem; color: var(--ios-text-muted); }

        .container {
            max-width: 1024px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .btn-ios {
            display: inline-block;
            background: var(--ios-blue);
            color: white;
            padding: 14px 28px;
            border-radius: 980px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1.1rem;
            transition: background 0.2s ease;
        }
        
        .btn-ios:hover { background: var(--ios-blue-hover); }

        .card {
            background: var(--ios-card);
            border-radius: 18px;
            padding: 30px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.04);
            transition: transform 0.2s ease;
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
</body>
</html>