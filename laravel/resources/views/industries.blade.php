@extends('layouts.app')

@section('title', 'Sectors & Industries | Sunshine Enterprise USA')
@section('meta_description', 'Explore our industry-specific staffing services, safety compliance monitoring, and candidate vetting standards across construction, IT, government, and finance.')

@section('content')
<!-- Header Hero -->
<section class="hero" style="padding: 4rem 0 2rem 0;">
  <div class="container reveal">
    <span class="badge">Specialized Placements</span>
    <h1 style="margin-bottom: 1rem;">Specialized Practice Groups</h1>
    <p style="font-size: 1.15rem; color: var(--color-text-secondary); max-width: 800px; margin-bottom: 0;">
      Deploying highly qualified candidates customized to vertical compliance mandates, safety practices, and background screening protocols.
    </p>
  </div>
</section>

<!-- Practice Groups Details -->
<section class="section-padding" style="background-color: var(--color-bg-secondary);">
  <div class="container" style="display: flex; flex-direction: column; gap: 4rem;">
    
    <!-- Practice Group 1: Construction -->
    <div class="card-premium practice-group-card reveal" id="construction">
      <div class="sector-image" style="border-radius: 1.25rem; height: 300px;">
        <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?auto=format&fit=crop&w=600&q=80" alt="Construction Worksite" style="height: 100%; object-fit: cover;" />
        <span class="sector-badge" style="top: 1rem; left: 1rem; right: auto;">OSHA Monitored</span>
      </div>
      <div>
        <h2 style="font-weight: 800; margin-bottom: 1rem;">Construction & Trades</h2>
        <p style="color: var(--color-text-secondary); margin-bottom: 1.25rem;">
          We source and deploy heavy machinery operators, carpenters, pipe layers, surveyors, and commercial foremen. Every site deployment undergoes a safety audit to verify compliance.
        </p>
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; font-size: 0.95rem; color: var(--color-text-secondary); margin-bottom: 1.5rem;">
          <div style="display: flex; gap: 0.5rem; align-items: center;">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent-dark)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
            <span>OSHA 10/30 Certified Staff</span>
          </div>
          <div style="display: flex; gap: 0.5rem; align-items: center;">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent-dark)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
            <span>Site Hazard Assessments</span>
          </div>
          <div style="display: flex; gap: 0.5rem; align-items: center;">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent-dark)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
            <span>Safety Equipment Checks</span>
          </div>
          <div style="display: flex; gap: 0.5rem; align-items: center;">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent-dark)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
            <span>Skilled Trade Assessment</span>
          </div>
        </div>
        <a href="{{ route('contact') }}?sector=construction" class="btn-pill btn-dark">Request Personnel</a>
      </div>
    </div>

    <!-- Practice Group 2: IT -->
    <div class="card-premium practice-group-card reverse reveal reveal-delay-100" id="it">
      <div>
        <h2 style="font-weight: 800; margin-bottom: 1rem;">Information Technology</h2>
        <p style="color: var(--color-text-secondary); margin-bottom: 1.25rem;">
          We recruit specialized IT talent to keep tech infrastructure secure and performing. Our placement system is focused on technical competency screening.
        </p>
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; font-size: 0.95rem; color: var(--color-text-secondary); margin-bottom: 1.5rem;">
          <div style="display: flex; gap: 0.5rem; align-items: center;">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent-dark)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
            <span>Database Administration</span>
          </div>
          <div style="display: flex; gap: 0.5rem; align-items: center;">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent-dark)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
            <span>Network Engineering</span>
          </div>
          <div style="display: flex; gap: 0.5rem; align-items: center;">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent-dark)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
            <span>System Analyst Search</span>
          </div>
          <div style="display: flex; gap: 0.5rem; align-items: center;">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent-dark)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
            <span>Cybersecurity Placements</span>
          </div>
        </div>
        <a href="{{ route('contact') }}?sector=it" class="btn-pill btn-dark">Request Technical Staff</a>
      </div>
      <div class="sector-image" style="border-radius: 1.25rem; height: 300px;">
        <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=600&q=80" alt="Information Technology Lab" style="height: 100%; object-fit: cover;" />
        <span class="sector-badge accent" style="top: 1rem; right: 1rem;">Pre-Screened</span>
      </div>
    </div>

    <!-- Practice Group 3: Accounting -->
    <div class="card-premium practice-group-card reveal reveal-delay-200" id="accounting">
      <div class="sector-image" style="border-radius: 1.25rem; height: 300px;">
        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=600&q=80" alt="Executive Workspace" style="height: 100%; object-fit: cover;" />
        <span class="sector-badge" style="top: 1rem; left: 1rem; right: auto;">Background Checked</span>
      </div>
      <div>
        <h2 style="font-weight: 800; margin-bottom: 1rem;">Accounting & Admin Support</h2>
        <p style="color: var(--color-text-secondary); margin-bottom: 1.25rem;">
          Placing skilled personnel for bookkeeping, corporate finance, benefits administration, and front office support. All hires complete standard background screening and references.
        </p>
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; font-size: 0.95rem; color: var(--color-text-secondary); margin-bottom: 1.5rem;">
          <div style="display: flex; gap: 0.5rem; align-items: center;">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent-dark)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
            <span>Full Bookkeeping Setup</span>
          </div>
          <div style="display: flex; gap: 0.5rem; align-items: center;">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent-dark)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
            <span>Accounts Payable/Receivable</span>
          </div>
          <div style="display: flex; gap: 0.5rem; align-items: center;">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent-dark)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
            <span>Executive Assistants</span>
          </div>
          <div style="display: flex; gap: 0.5rem; align-items: center;">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent-dark)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
            <span>Office Managers</span>
          </div>
        </div>
        <a href="{{ route('contact') }}?sector=accounting" class="btn-pill btn-dark">Request Administrative Staff</a>
      </div>
    </div>

    <!-- Practice Group 4: Government -->
    <div class="card-premium practice-group-card reverse reveal reveal-delay-300" id="government">
      <div>
        <h2 style="font-weight: 800; margin-bottom: 1rem;">Government & Education</h2>
        <p style="color: var(--color-text-secondary); margin-bottom: 1.25rem;">
          Providing staffing and recruitment services for municipal agencies, county offices, school districts, and institutional programs, ensuring adherence to E-Verify and security standards.
        </p>
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; font-size: 0.95rem; color: var(--color-text-secondary); margin-bottom: 1.5rem;">
          <div style="display: flex; gap: 0.5rem; align-items: center;">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent-dark)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
            <span>E-Verify Active Clearances</span>
          </div>
          <div style="display: flex; gap: 0.5rem; align-items: center;">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent-dark)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
            <span>Federal Fingerprinting (VECHS)</span>
          </div>
          <div style="display: flex; gap: 0.5rem; align-items: center;">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent-dark)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
            <span>Education Support Staff</span>
          </div>
          <div style="display: flex; gap: 0.5rem; align-items: center;">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent-dark)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
            <span>Public Sector Placements</span>
          </div>
        </div>
        <a href="{{ route('contact') }}?sector=government" class="btn-pill btn-dark">Request Institutional Staff</a>
      </div>
      <div class="sector-image" style="border-radius: 1.25rem; height: 300px;">
        <img src="https://images.unsplash.com/photo-1541872703-74c5e44368f9?auto=format&fit=crop&w=600&q=80" alt="Institutional Facility Office" style="height: 100%; object-fit: cover;" />
        <span class="sector-badge accent" style="top: 1rem; right: 1rem;">E-Verify Approved</span>
      </div>
    </div>

  </div>
</section>
@endsection
