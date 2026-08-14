@extends('components.layout')

@section('content')
<style>
    .page-header { text-align: center; padding: 80px 20px 40px; }
    .content-section { padding: 40px 0; }
    .grid-2 { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; margin-top: 30px; }
    .grid-3 { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px; margin-top: 40px; }
    .team-card { text-align: center; padding: 30px; }
    .avatar { width: 100px; height: 100px; border-radius: 50%; background: var(--ios-bg); margin: 0 auto 15px; display: flex; align-items: center; justify-content: center; font-size: 2.5rem; }
</style>

<div class="page-header">
    <div class="container">
        <h1>About NexusFlow</h1>
        <p>Building the digital foundation for tomorrow's leaders.</p>
    </div>
</div>

<section class="content-section">
    <div class="container">
        <h2>Our History</h2>
        <p>Founded in a small garage, NexusFlow Tech started with a singular vision: to make enterprise-grade digital architecture accessible to startups. Today, we are a rapidly growing collective of engineers, designers, and strategists serving clients globally.</p>

        <div class="grid-2">
            <div class="card">
                <h3>Our Mission</h3>
                <p>To bridge the gap between complex technology and seamless user experiences by delivering innovative, scalable solutions.</p>
            </div>
            <div class="card">
                <h3>Our Vision</h3>
                <p>To be the industry standard for digital transformation, empowering every ambitious brand to thrive in a digital-first world.</p>
            </div>
        </div>
    </div>
</section>

<section class="content-section">
    <div class="container">
        <h2 style="text-align: center;">Core Values</h2>
        <div class="grid-3">
            <div class="card">
                <h3>Innovation</h3>
                <p>We constantly push boundaries to find smarter, faster ways to build.</p>
            </div>
            <div class="card">
                <h3>Quality</h3>
                <p>We do not compromise on code architecture, security, or design.</p>
            </div>
            <div class="card">
                <h3>Collaboration</h3>
                <p>The best products are built when teams and clients operate as one.</p>
            </div>
        </div>
    </div>
</section>

<section class="content-section">
    <div class="container">
        <h2 style="text-align: center;">Meet the Team</h2>
        <div class="grid-3">
            <div class="card team-card">
                <div class="avatar">👨‍💻</div>
                <h3>Alex Chen</h3>
                <p>Chief Executive Officer</p>
            </div>
            <div class="card team-card">
                <div class="avatar">👩‍🎨</div>
                <h3>Sarah Jenkins</h3>
                <p>Head of UI/UX</p>
            </div>
            <div class="card team-card">
                <div class="avatar">👨‍🔧</div>
                <h3>David Okafor</h3>
                <p>Lead Cloud Architect</p>
            </div>
        </div>
    </div>
</section>
@endsection