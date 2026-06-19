@extends('layouts.app')

@section('title', 'Sunshine Enterprise USA | Premium Staffing & HR Solutions')
@section('meta_description', 'Mitigate business risk and connect with pre-screened, OSHA-compliant, and 100% E-Verified talent across construction, IT, accounting, and government.')

@section('content')
<!-- Hero Section -->
<section class="hero">
  <div class="container">
    <div class="hero-grid">
      <div class="hero-content">
        <span class="badge">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
          Premium Staffing Firm
        </span>
        <h1>Connecting Great <span class="text-gradient">Companies</span> with Great <span class="text-gradient">People</span>.</h1>
        <p>Sunshine Enterprise USA is a premier family-founded staffing agency dedicated to mitigating business risk. We provide highly vetted talent, flexible deployment options, and strict adherence to safety standards, all backed by 100% E-Verify compliance.</p>
        <div class="hero-actions">
          <a href="{{ route('contact') }}?type=hire" class="btn-pill btn-accent">Hire Skilled Talent</a>
          <a href="{{ route('contact') }}?type=jobs" class="btn-pill btn-outline">Apply for Jobs</a>
        </div>
      </div>
      <div class="hero-visuals">
        <div class="photo-grid">
          <div class="grid-photo short">
            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=500&q=80" alt="Professional Boardroom Meeting" />
          </div>
          <div class="grid-photo tall">
            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=500&q=80" alt="Executive Leadership Workspace" />
          </div>
        </div>
        <!-- Floating Metric Card -->
        <div class="floating-metric">
          <div class="metric-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
          </div>
          <div class="metric-text">
            100% E-Verify Clearances
            <span>Zero-risk onboarding workflow.</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- The SEU Advantage -->
<section class="advantage section-padding">
  <div class="container">
    <div class="section-header text-center">
      <span class="badge">Why Partner With Us</span>
      <h2>The SEU Advantage</h2>
      <p>We reduce human resource liabilities, simplify recruitment workflows, and deploy high-performing professionals customized to your industrial parameters.</p>
    </div>
    <div class="advantage-grid">
      <div class="card-premium advantage-card">
        <div class="card-icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
        </div>
        <h3>Administrative Relief</h3>
        <p>Complete payroll administration, employer-of-record services, and benefits management to offload your internal teams.</p>
      </div>

      <div class="card-premium advantage-card">
        <div class="card-icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="9" y1="3" x2="9" y2="21"></line><line x1="15" y1="3" x2="15" y2="21"></line><line x1="3" y1="9" x2="21" y2="9"></line><line x1="3" y1="15" x2="21" y2="15"></line></svg>
        </div>
        <h3>Culture of Safety</h3>
        <p>Strict workplace hazard evaluations and OSHA compliance screening to assure a safe environment for all teams.</p>
      </div>

      <div class="card-premium advantage-card">
        <div class="card-icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
        </div>
        <h3>100% E-Verify</h3>
        <p>Rigorous pre-screening verify workflows ensuring that every single placed worker is fully authorized for work.</p>
      </div>

      <div class="card-premium advantage-card">
        <div class="card-icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
        </div>
        <h3>Flexible Deployment</h3>
        <p>Adaptable solutions spanning temporary contract staffing, contract-to-hire, and direct executive search placements.</p>
      </div>
    </div>
  </div>
</section>

<!-- Specialized Practice Groups -->
<section class="sectors section-padding">
  <div class="container">
    <div class="section-header text-center">
      <span class="badge">Sectors & Industries</span>
      <h2>Specialized Practice Groups</h2>
      <p>We deploy certified and vetted talent across key vertical markets, maintaining sector-specific compliance standards.</p>
    </div>
    <div class="sectors-grid">
      <!-- Card 1 -->
      <div class="sector-card">
        <div class="sector-image">
          <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?auto=format&fit=crop&w=400&q=80" alt="Construction Worksite" />
          <span class="sector-badge">OSHA Monitored</span>
        </div>
        <div class="sector-content">
          <h3>Construction & Trades</h3>
          <p>Certified equipment operators, carpenters, pipe layers, and project supervisors ready for jobsite deployment.</p>
          <a href="{{ route('industries') }}#construction" class="sector-link">
            <span>View Practice Group</span>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
          </a>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="sector-card">
        <div class="sector-image">
          <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=400&q=80" alt="Software Development Center" />
          <span class="sector-badge accent">Pre-Screened</span>
        </div>
        <div class="sector-content">
          <h3>Information Technology</h3>
          <p>Senior database managers, network engineers, system analysts, and cybersecurity technical resources.</p>
          <a href="{{ route('industries') }}#it" class="sector-link">
            <span>View Practice Group</span>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
          </a>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="sector-card">
        <div class="sector-image">
          <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=400&q=80" alt="Executive Office Meeting" />
          <span class="sector-badge">Background Checked</span>
        </div>
        <div class="sector-content">
          <h3>Accounting & Admin</h3>
          <p>Corporate bookkeepers, accountants, executive assistants, and payroll management specialists.</p>
          <a href="{{ route('industries') }}#accounting" class="sector-link">
            <span>View Practice Group</span>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
          </a>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="sector-card">
        <div class="sector-image">
          <img src="https://images.unsplash.com/photo-1541872703-74c5e44368f9?auto=format&fit=crop&w=400&q=80" alt="Government Boardroom" />
          <span class="sector-badge accent">E-Verify Approved</span>
        </div>
        <div class="sector-content">
          <h3>Government & Education</h3>
          <p>Highly secure public sector personnel, instructional assistants, and administrative contract personnel.</p>
          <a href="{{ route('industries') }}#government" class="sector-link">
            <span>View Practice Group</span>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Maitland HQ Consultation -->
<section class="consultation section-padding" id="consultation">
  <div class="container">
    <div class="consultation-grid">
      <div class="consultation-text">
        <span class="badge" style="background: rgba(255,255,255,0.08); color: var(--color-accent);">Corporate Office</span>
        <h2>Maitland HQ Consultation</h2>
        <p>Partner with our corporate HR team. Sam Faragalla (CEO) and Rania Hanna (President) lead our Maitland office with 15+ years of recruitment expertise, matching local talent to regional and national scale enterprises.</p>
        <div class="contact-details">
          <div class="contact-item">
            <div class="contact-icon">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
            </div>
            <div class="contact-item-text">
              <h4>Headquarters Address</h4>
              <p>500 Winderley Place, Suite 218, Maitland, FL 32751</p>
            </div>
          </div>

          <div class="contact-item">
            <div class="contact-icon">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72"></path></svg>
            </div>
            <div class="contact-item-text">
              <h4>Phone Support</h4>
              <p>(407)-636-2982</p>
            </div>
          </div>

          <div class="contact-item">
            <div class="contact-icon">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
            </div>
            <div class="contact-item-text">
              <h4>Corporate Inbox</h4>
              <p>jobs@seu-usa.com</p>
            </div>
          </div>
        </div>
      </div>
      <div class="consultation-form">
        <div class="form-card">
          <form id="b2bConsultForm" action="{{ route('contact.submit') }}" method="POST">
            @csrf
            <input type="hidden" name="form_type" value="consultation" />
            <div class="form-row">
              <div class="form-group">
                <label for="fullName">Full Name</label>
                <input type="text" name="name" id="fullName" required placeholder="John Doe" />
              </div>
              <div class="form-group">
                <label for="email">Work Email</label>
                <input type="email" name="email" id="email" required placeholder="john@company.com" />
              </div>
            </div>
            <div class="form-row">
              <div class="form-group">
                <label for="volume">Staff Volume Need</label>
                <select name="volume" id="volume" required>
                  <option value="">Select option...</option>
                  <option value="1-5">1-5 Employees</option>
                  <option value="6-20">6-20 Employees</option>
                  <option value="21-50">21-50 Employees</option>
                  <option value="50+">50+ Employees</option>
                </select>
              </div>
              <div class="form-group">
                <label for="sector">Practice Sector</label>
                <select name="sector" id="sector" required>
                  <option value="">Select option...</option>
                  <option value="construction">Construction & Trades</option>
                  <option value="it">Information Technology</option>
                  <option value="accounting">Accounting & Admin</option>
                  <option value="government">Government & Education</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="instructions">Recruitment Instructions</label>
              <textarea name="instructions" id="instructions" rows="4" required placeholder="Provide project dates, certification mandates (e.g., OSHA, background checks), and candidate preferences..."></textarea>
            </div>
            <button type="submit" class="btn-pill btn-accent" style="width: 100%;">Submit Consultation Request</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
