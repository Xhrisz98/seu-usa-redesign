@extends('layouts.app')

@section('title', 'Workforce Solutions | Sunshine Enterprise USA')
@section('meta_description', 'Explore our flexible staffing models, payroll administration, employer-of-record services, and strict vetting process.')

@section('content')
<!-- Header Hero -->
<section class="hero" style="padding: 4rem 0 2rem 0;">
  <div class="container">
    <span class="badge">Employer Services</span>
    <h1 style="font-size: 3rem; margin-bottom: 1rem;">Mitigating Risk. Empowering Growth.</h1>
    <p style="font-size: 1.15rem; color: var(--color-text-secondary); max-width: 800px; margin-bottom: 0;">
      Our staffing structures minimize employment risks. Whether you require fast temporary support or permanent executive placement, we manage the search, verification, and onboarding.
    </p>
  </div>
</section>

<!-- Services Section -->
<section class="section-padding" style="background-color: var(--color-bg-secondary);">
  <div class="container">
    <div class="advantage-grid" style="grid-template-columns: repeat(3, 1fr);">
      <!-- Service Card 1 -->
      <div class="card-premium">
        <div class="card-icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
        </div>
        <h3 style="font-size: 1.3rem; margin-bottom: 0.75rem;">Flexible Contract Staffing</h3>
        <p style="font-size: 0.95rem; color: var(--color-text-secondary); margin-bottom: 1.5rem;">
          Deploy qualified professionals for project-based milestones or seasonal peaks, maintaining dynamic payroll scalability without long-term employment commitments.
        </p>
        <a href="{{ route('contact') }}?type=hire" class="btn-pill btn-outline" style="padding: 0.5rem 1.25rem; font-size: 0.85rem;">Request Info</a>
      </div>

      <!-- Service Card 2 -->
      <div class="card-premium">
        <div class="card-icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><polyline points="17 11 19 13 23 9"></polyline></svg>
        </div>
        <h3 style="font-size: 1.3rem; margin-bottom: 0.75rem;">Contract-to-Hire Transition</h3>
        <p style="font-size: 0.95rem; color: var(--color-text-secondary); margin-bottom: 1.5rem;">
          Evaluate candidate cultural alignment, safety behaviors, and performance directly on-site before executing permanent payroll onboarding transitions.
        </p>
        <a href="{{ route('contact') }}?type=hire" class="btn-pill btn-outline" style="padding: 0.5rem 1.25rem; font-size: 0.85rem;">Request Info</a>
      </div>

      <!-- Service Card 3 -->
      <div class="card-premium">
        <div class="card-icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
        </div>
        <h3 style="font-size: 1.3rem; margin-bottom: 0.75rem;">Direct Permanent Placement</h3>
        <p style="font-size: 0.95rem; color: var(--color-text-secondary); margin-bottom: 1.5rem;">
          Access highly specialized engineers, administrators, and supervisors. We execute precision screening to fill your critical long-term roles.
        </p>
        <a href="{{ route('contact') }}?type=hire" class="btn-pill btn-outline" style="padding: 0.5rem 1.25rem; font-size: 0.85rem;">Request Info</a>
      </div>
    </div>

    <div class="card-premium" style="margin-top: 3rem; display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: center;">
      <div>
        <span class="badge" style="margin-bottom: 1rem;">Administrative Solutions</span>
        <h3 style="font-size: 1.75rem; font-weight: 800; margin-bottom: 1rem;">Employer of Record & Payroll Services</h3>
        <p style="color: var(--color-text-secondary); margin-bottom: 1.25rem;">
          Reduce your administrative overhead. By utilizing Sunshine Enterprise USA as your Employer of Record (EOR), we absorb workers' compensation liabilities, process bi-weekly payrolls, manage tax withholdings, and handle employee benefits.
        </p>
        <p style="color: var(--color-text-secondary);">
          This allows your core operational managers to focus entirely on productivity, while our compliance systems handle background screenings, drug testing, and federal compliance.
        </p>
      </div>
      <div style="background-color: var(--color-bg-secondary); padding: 2rem; border-radius: 1.25rem; border: 1px solid var(--color-border);">
        <div style="margin-bottom: 1.5rem;">
          <h4 style="font-size: 1.1rem; font-weight: 700; margin-bottom: 0.25rem;">1. Background & Vetting</h4>
          <p style="font-size: 0.9rem; color: var(--color-text-secondary);">National criminal records, active drug panel check, E-Verify database checks.</p>
        </div>
        <div style="margin-bottom: 1.5rem;">
          <h4 style="font-size: 1.1rem; font-weight: 700; margin-bottom: 0.25rem;">2. Compliance & Insurance</h4>
          <p style="font-size: 0.9rem; color: var(--color-text-secondary);">Full workers' compensation coverage, general liability insurance, ACA benefits compliance.</p>
        </div>
        <div>
          <h4 style="font-size: 1.1rem; font-weight: 700; margin-bottom: 0.25rem;">3. Payroll & Invoicing</h4>
          <p style="font-size: 0.9rem; color: var(--color-text-secondary);">Direct deposit processing, digital timesheet tracking, flexible consolidated invoicing.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Our Recruitment Process -->
<section class="section-padding">
  <div class="container">
    <div class="section-header text-center">
      <span class="badge">Workflow Details</span>
      <h2>Our Proven Recruitment Process</h2>
      <p>We implement a systematic process to guarantee alignment with safety standards and workplace cultures.</p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 3rem; text-align: center;">
      <!-- Step 1 -->
      <div>
        <div style="width: 4rem; height: 4rem; background: var(--color-bg-secondary); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: 800; color: var(--color-accent-dark); margin: 0 auto 1.5rem auto; border: 2px solid var(--color-border);">1</div>
        <h3 style="font-size: 1.2rem; margin-bottom: 0.75rem; font-weight: 700;">Deep Dive & Analysis</h3>
        <p style="font-size: 0.95rem; color: var(--color-text-secondary);">
          We analyze the workspace parameters, physical demands, required OSHA standards, and company cultural goals to form a custom candidate profile.
        </p>
      </div>

      <!-- Step 2 -->
      <div>
        <div style="width: 4rem; height: 4rem; background: var(--color-bg-secondary); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: 800; color: var(--color-accent-dark); margin: 0 auto 1.5rem auto; border: 2px solid var(--color-border);">2</div>
        <h3 style="font-size: 1.2rem; margin-bottom: 0.75rem; font-weight: 700;">Sourcing & Vetting</h3>
        <p style="font-size: 0.95rem; color: var(--color-text-secondary);">
          Candidates undergo strict skills assessments, reference reviews, safety training documentation checks, and immediate E-Verify screening.
        </p>
      </div>

      <!-- Step 3 -->
      <div>
        <div style="width: 4rem; height: 4rem; background: var(--color-bg-secondary); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: 800; color: var(--color-accent-dark); margin: 0 auto 1.5rem auto; border: 2px solid var(--color-border);">3</div>
        <h3 style="font-size: 1.2rem; margin-bottom: 0.75rem; font-weight: 700;">Placement & Support</h3>
        <p style="font-size: 0.95rem; color: var(--color-text-secondary);">
          We manage day-one site introductions, coordinate safety equipment distribution (PPE), and conduct regular check-ins with client managers.
        </p>
      </div>
    </div>
  </div>
</section>
@endsection
