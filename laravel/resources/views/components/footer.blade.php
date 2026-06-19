<!-- Light Premium Footer -->
<footer class="main-footer">
  <div class="container">
    <div class="footer-grid">
      <div class="footer-brand">
        <img src="https://sp-ao.shortpixel.ai/client/to_webp,q_glossy,ret_img/http://seu-usa.com/wp-content/uploads/2025/07/logo.avif" alt="Sunshine Enterprise USA Logo" class="footer-logo" />
        <p>Building futures, connecting talent. Your success is our mission. A family-founded HR & staffing firm serving businesses nationwide.</p>
        <div class="footer-compliance">
          <div class="utility-badge">
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
            <span>State of Florida Compliant</span>
          </div>
        </div>
      </div>
      <div class="footer-col">
        <h3>Company</h3>
        <ul class="footer-links">
          <li><a href="{{ route('about') }}">About Us</a></li>
          <li><a href="{{ route('about') }}#team">Our Team</a></li>
          <li><a href="{{ route('contact') }}">Careers & Blog</a></li>
          <li><a href="{{ route('contact') }}">Contact Us</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h3>Services</h3>
        <ul class="footer-links">
          <li><a href="{{ route('services') }}">For Employers</a></li>
          <li><a href="{{ route('contact') }}?type=jobs">Find a Job</a></li>
          <li><a href="{{ route('industries') }}">Practice Groups</a></li>
          <li><a href="{{ route('contact') }}">Schedule Call</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h3>Join Newsletter</h3>
        <p>Get exclusive job listings and industry updates delivered straight to your inbox.</p>
        <form class="newsletter-form" id="newsletterForm">
          @csrf
          <input type="email" name="email" placeholder="Your work email" required aria-label="Work email for newsletter" />
          <button type="submit" aria-label="Subscribe">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
          </button>
        </form>
      </div>
    </div>
    <div class="footer-bottom">
      <p>© 2026 Sunshine Enterprise USA. All Rights Reserved.</p>
      <div class="footer-bottom-links">
        <a href="#">Privacy Policy</a>
        <a href="#">Terms of Service</a>
        <a href="#">E-Verify Active Status</a>
      </div>
    </div>
  </div>
</footer>
