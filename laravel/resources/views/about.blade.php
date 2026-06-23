@extends('layouts.app')

@section('title', 'About Us | Sunshine Enterprise USA')
@section('meta_description', 'Learn about our family-founded values, leadership executive profiles, and our mission as a trusted recruitment partner nationwide.')

@section('content')
<!-- Page Header Hero -->
<section class="hero" style="padding: 4rem 0 2rem 0;">
  <div class="container reveal">
    <span class="badge">Who We Are</span>
    <h1 style="margin-bottom: 1rem;">Building Futures, Connecting Talent</h1>
    <p style="font-size: 1.15rem; color: var(--color-text-secondary); max-width: 800px; margin-bottom: 0;">
      Founded on the principle that the right person in the right role can change everything, Sunshine Enterprise USA is a leading staffing agency. We operate as a trusted workforce partner, streamlining recruitment and minimizing operational liabilities.
    </p>
  </div>
</section>

<!-- Brand Story Section -->
<section class="section-padding" style="background-color: var(--color-bg-secondary);">
  <div class="container">
    <div class="hero-grid" style="align-items: flex-start; gap: 3rem;">
      <div class="reveal">
        <h2 style="font-weight: 800; margin-bottom: 1.5rem;">Family Values. National Scale.</h2>
        <p style="color: var(--color-text-secondary); margin-bottom: 1.25rem;">
          Sunshine Enterprise USA (SEU-USA) was established with a focus on trust, responsiveness, and absolute compliance. What began as a dedicated recruitment operation has expanded to serve industries nationwide, including key hubs in construction, IT, accounting, and institutional sectors.
        </p>
        <p style="color: var(--color-text-secondary); margin-bottom: 1.25rem;">
          Our staffing strategies prioritize risk mitigation. By integrating 100% E-Verify screenings, comprehensive criminal checks, drug testing, and OSHA certifications, we protect our client companies' work environments while ensuring workers get jobs in safe, growth-oriented settings.
        </p>
      </div>
      <div class="card-premium reveal reveal-delay-200">
        <h3 style="font-size: 1.3rem; margin-bottom: 1rem;">Our Core Commitments</h3>
        <ul style="list-style: none; display: flex; flex-direction: column; gap: 1rem;">
          <li style="display: flex; gap: 0.75rem; align-items: flex-start; font-size: 0.95rem; color: var(--color-text-secondary);">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent-dark)" stroke-width="2.5" style="flex-shrink: 0;"><polyline points="20 6 9 17 4 12"></polyline></svg>
            <span><strong>Absolute Compliance:</strong> 100% active E-Verify verification and audit trails.</span>
          </li>
          <li style="display: flex; gap: 0.75rem; align-items: flex-start; font-size: 0.95rem; color: var(--color-text-secondary);">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent-dark)" stroke-width="2.5" style="flex-shrink: 0;"><polyline points="20 6 9 17 4 12"></polyline></svg>
            <span><strong>Safety Protocol:</strong> Strict OSHA site analysis and monitoring to limit risk.</span>
          </li>
          <li style="display: flex; gap: 0.75rem; align-items: flex-start; font-size: 0.95rem; color: var(--color-text-secondary);">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent-dark)" stroke-width="2.5" style="flex-shrink: 0;"><polyline points="20 6 9 17 4 12"></polyline></svg>
            <span><strong>Operational Agility:</strong> Placing reliable staff in as little as 24 hours.</span>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Leadership Section -->
<section class="section-padding" id="team">
  <div class="container">
    <div class="section-header text-center reveal">
      <span class="badge">Executive Leadership</span>
      <h2>Our Founders</h2>
      <p>Guided by industry veterans committed to service quality, compliance, and client success.</p>
    </div>
    
    <div class="team-grid">
      <!-- Founder 1: Sam Faragalla -->
      <div class="card-premium founder-card reveal">
        <div class="founder-image">
          <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=400&q=80" alt="Sam Faragalla, Founder & CEO" />
        </div>
        <div class="founder-info">
          <h3>Sam Faragalla</h3>
          <div class="founder-title">Founder & CEO</div>
          <p>
            Sam is an HR executive with over 15 years of leadership in human resources, staffing, and technical recruitment. Holding an MA and SHRM-SCP certification, he specializes in talent retention strategies, labor relations, benefits planning, and risk management for high-volume staffing deployments.
          </p>
        </div>
      </div>

      <!-- Founder 2: Rania Hanna -->
      <div class="card-premium founder-card reveal reveal-delay-200">
        <div class="founder-image">
          <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=400&q=80" alt="Rania Hanna, Founder & President" />
        </div>
        <div class="founder-info">
          <h3>Rania Hanna</h3>
          <div class="founder-title">Founder & President</div>
          <p>
            Rania brings 15+ years of recruitment and operations management expertise. As President, she focuses on building and optimizing corporate recruitment teams, orchestrating staffing solutions for complex client projects, and ensuring high-quality talent sourcing with an emphasis on client experience.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
