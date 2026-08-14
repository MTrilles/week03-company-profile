@extends('components.layout')

@section('content')
<style>
    .page-header { text-align: center; padding: 80px 20px 40px; }
    .contact-container { display: grid; grid-template-columns: 1fr 1fr; gap: 50px; padding-bottom: 80px; }
    @media (max-width: 768px) { .contact-container { grid-template-columns: 1fr; } }
    .form-group { margin-bottom: 20px; }
    label { display: block; margin-bottom: 8px; font-weight: 600; font-size: 0.95rem; }
    input, textarea { width: 100%; padding: 14px 16px; border: 1px solid var(--ios-border); border-radius: 12px; font-size: 1rem; background: #fafafa; transition: border-color 0.2s; -webkit-appearance: none; }
    input:focus, textarea:focus { outline: none; border-color: var(--ios-blue); background: #ffffff; }
    button { width: 100%; border: none; cursor: pointer; }
    .contact-info-list { list-style: none; margin-top: 20px; }
    .contact-info-list li { margin-bottom: 15px; display: flex; align-items: flex-start; gap: 10px; }
    .map-container { margin-top: 30px; border-radius: 14px; overflow: hidden; border: 1px solid var(--ios-border); }
</style>

<div class="page-header">
    <div class="container">
        <h1>Get in Touch</h1>
        <p>Have a project in mind? Let's build something great together.</p>
    </div>
</div>

<div class="container">
    <div class="contact-container">
        <div>
            <form action="#" method="POST" class="card">
                <h3>Send us a message</h3>
                <br>
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" placeholder="John Doe" required>
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="john@example.com" required>
                </div>
                <div class="form-group">
                    <label for="message">Your Message</label>
                    <textarea id="message" name="message" rows="5" placeholder="How can we help you?" required></textarea>
                </div>
                <button type="submit" class="btn-ios">Submit Message</button>
            </form>
        </div>

        <div>
            <div class="card">
                <h3>Contact Information</h3>
                <ul class="contact-info-list">
                    <li><strong>📍 Address:</strong> <span>123 Innovation Drive, Tech District<br>Silicon Valley, CA 94025</span></li>
                    <li><strong>✉️ Email:</strong> <a href="mailto:hello@nexusflow.tech" style="color: var(--ios-blue); text-decoration: none;">hello@nexusflow.tech</a></li>
                    <li><strong>📞 Phone:</strong> <span>+1 (555) 123-4567</span></li>
                    <li><strong>🔗 Socials:</strong> <span><a href="#" style="color: var(--ios-blue); text-decoration: none; margin-right: 10px;">Twitter</a> <a href="#" style="color: var(--ios-blue); text-decoration: none;">LinkedIn</a></span></li>
                </ul>

                <div class="map-container">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3168.63929062107!2d-122.08385108469247!3d37.38605177983196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb7495bec0189%3A0x7c17d44a466baf9b!2sMountain%20View%2C%20CA!5e0!3m2!1sen!2sus!4v1675200000000!5m2!1sen!2sus" 
                        width="100%" height="200" style="border:0; display: block;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection