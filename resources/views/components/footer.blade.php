<style>
    .ios-footer {
        background: var(--footer-gradient);
        border-top: 1px solid var(--border-color);
        padding: 60px 20px 30px 20px;
        margin-top: 60px;
        transition: background 0.3s ease, border-color 0.3s ease;
    }

    .footer-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 40px;
        margin-bottom: 40px;
    }

    .footer-col h4 {
        color: var(--text-heading);
        font-size: 1.1rem;
        margin-bottom: 16px;
        font-weight: 600;
    }

    .footer-col p, .footer-col ul {
        font-size: 0.95rem;
        color: var(--text-heading);
        opacity: 0.85;
        line-height: 1.6;
    }

    .footer-col ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .footer-col ul li {
        margin-bottom: 10px;
    }

    .footer-col a {
        color: var(--text-heading);
        text-decoration: none;
        transition: color 0.2s ease, opacity 0.2s ease;
    }

    .footer-col a:hover {
        color: var(--blue-hover);
        opacity: 1;
    }

    .footer-bottom {
        border-top: 1px solid var(--border-color);
        padding-top: 25px;
        text-align: center;
    }

    .footer-bottom p {
        font-size: 0.85rem;
        color: var(--text-heading);
        opacity: 0.75;
        margin: 0;
    }

    /* =========================================
       Responsive Adjustments
       ========================================= */

    /* Tablet */
    @media (max-width: 768px) {
        .ios-footer { 
            padding: 45px 20px 25px 20px; 
            margin-top: 40px; 
        }
        .footer-grid { 
            gap: 30px; 
            margin-bottom: 30px;
        }
        .footer-col h4 { 
            font-size: 1.05rem; 
            margin-bottom: 12px; 
        }
        .footer-col p, .footer-col ul { 
            font-size: 0.9rem; 
        }
    }

    /* Mobile */
    @media (max-width: 480px) {
        .ios-footer { 
            text-align: center; /* Center everything for a cleaner mobile layout */
            padding: 40px 15px 20px 15px; 
        }
        .footer-grid { 
            grid-template-columns: 1fr; /* Force single column */
            gap: 25px; 
        }
    }
</style>

<footer class="ios-footer">
    <div class="container">
        <div class="footer-grid">
            <!-- Address Column -->
            <div class="footer-col">
                <h4>NexusFlow Tech</h4>
                <p>
                    128 Innovation Drive, Suite 400<br>
                    Tech District, San Francisco, CA 94105
                </p>
            </div>

            <!-- Contact Information Column -->
            <div class="footer-col">
                <h4>Contact Us</h4>
                <ul>
                    <li>Email: <a href="mailto:hello@nexusflowtech.fake">hello@nexusflowtech.fake</a></li>
                    <li>Phone: <a href="tel:+15550198372">+1 (555) 019-8372</a></li>
                </ul>
            </div>

            <!-- Social Media Column -->
            <div class="footer-col">
                <h4>Follow Us</h4>
                <ul>
                    <li>LinkedIn: <a href="https://linkedin.com/company/nexusflowtech" target="_blank" rel="noopener">linkedin.com/company/nexusflowtech</a></li>
                    <li>Twitter / X: <a href="https://x.com/NexusFlowTech" target="_blank" rel="noopener">@NexusFlowTech</a></li>
                    <li>Instagram: <a href="https://instagram.com/LifeAtNexusFlow" target="_blank" rel="noopener">@LifeAtNexusFlow</a></li>
                </ul>
            </div>
        </div>

        <!-- Copyright Row -->
        <div class="footer-bottom">
            <p>&copy; {{ date('Y') }} NexusFlow Tech. All rights reserved.</p>
        </div>
    </div>
</footer>