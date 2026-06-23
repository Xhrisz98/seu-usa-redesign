@extends('layouts.app')

@section('title', 'Contact Us | Sunshine Enterprise USA')
@section('meta_description', 'Reach out to Sunshine Enterprise USA in Maitland, FL. Schedule a consultation or apply for one of our immediate job openings.')

@section('content')
<!-- Header Hero -->
<section class="hero" style="padding: 4rem 0 2rem 0;">
  <div class="container reveal">
    <span class="badge">Get in Touch</span>
    <h1 style="margin-bottom: 1rem;">Connect With An Agent</h1>
    <p style="font-size: 1.15rem; color: var(--color-text-secondary); max-width: 800px; margin-bottom: 0;">
      Whether you want to source premium workforce talent or submit your resume for job openings, we are ready to assist you.
    </p>
  </div>
</section>

<!-- Contact details and dynamic form -->
<section class="section-padding" style="background-color: var(--color-bg-secondary);">
  <div class="container">
    <div class="consultation-grid" style="align-items: flex-start;">
      
      <div class="reveal">
        <h2 style="font-weight: 800; margin-bottom: 1.5rem; color: var(--color-text-primary);">Maitland HQ Office</h2>
        <p style="color: var(--color-text-secondary); margin-bottom: 2rem;">
          Our Florida headquarters oversees staffing deployments, compliance verification, client onboarding, and general payroll management. Feel free to contact us directly or book a consultation via Microsoft Teams.
        </p>

        <div class="contact-details" style="margin-bottom: 3rem;">
          <div class="contact-item">
            <div class="contact-icon" style="background-color: var(--color-bg-primary); border: 1px solid var(--color-border);">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
            </div>
            <div class="contact-item-text">
              <h4 style="color: var(--color-text-secondary);">Address</h4>
              <p style="color: var(--color-text-primary);">500 Winderley Place, Suite 218, Maitland, FL 32751</p>
            </div>
          </div>

          <div class="contact-item">
            <div class="contact-icon" style="background-color: var(--color-bg-primary); border: 1px solid var(--color-border);">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72"></path></svg>
            </div>
            <div class="contact-item-text">
              <h4 style="color: var(--color-text-secondary);">Phone Line</h4>
              <p style="color: var(--color-text-primary);">(407)-636-2982</p>
            </div>
          </div>

          <div class="contact-item">
            <div class="contact-icon" style="background-color: var(--color-bg-primary); border: 1px solid var(--color-border);">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
            </div>
            <div class="contact-item-text">
              <h4 style="color: var(--color-text-secondary);">General Email</h4>
              <p style="color: var(--color-text-primary);">jobs@seu-usa.com</p>
            </div>
          </div>
        </div>

        <div class="card-premium reveal reveal-delay-100" style="background-color: var(--color-bg-primary);">
          <h3 style="font-size: 1.25rem; margin-bottom: 0.5rem; font-weight: 700;">Schedule a Virtual Call</h3>
          <p style="font-size: 0.95rem; color: var(--color-text-secondary); margin-bottom: 1.5rem;">
            Set up a direct alignment meeting with our founders and staffing leads through Microsoft Teams.
          </p>
          <a href="https://outlook.office.com/book/SUNSHINEENTERPRISEUSALLC@seu-usa.com/?ismsaljsauthenabled" target="_blank" rel="noopener noreferrer" class="btn-pill btn-accent">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
            Book with MS Teams
          </a>
        </div>
      </div>

      <!-- Interactive Contact Form -->
      <div class="card-premium reveal reveal-delay-200 contact-form-container" style="background-color: var(--color-bg-primary); padding: 3rem;">
        <div style="display: flex; gap: 1rem; border-bottom: 1px solid var(--color-border); padding-bottom: 1.5rem; margin-bottom: 2rem;">
          <button type="button" id="tabHire" class="btn-pill btn-dark" style="flex: 1; padding: 0.6rem 1.2rem; font-size: 0.85rem;">Hire Talent (B2B)</button>
          <button type="button" id="tabApply" class="btn-pill btn-outline" style="flex: 1; padding: 0.6rem 1.2rem; font-size: 0.85rem;">Apply for Job</button>
        </div>

        <!-- Form: Hire Talent -->
        <form id="hireForm" action="{{ route('contact.submit') }}" method="POST">
          @csrf
          <input type="hidden" name="form_type" value="employer" />
          <div class="form-row">
            <div class="form-group">
              <label for="compName">Company Name</label>
              <input type="text" name="company_name" id="compName" required placeholder="Acme Corp" />
            </div>
            <div class="form-group">
              <label for="compContact">Contact Person</label>
              <input type="text" name="contact_name" id="compContact" required placeholder="Sarah Jenkins" />
            </div>
          </div>
          <div class="form-row">
            <div class="form-group">
              <label for="compEmail">Work Email</label>
              <input type="email" name="email" id="compEmail" required placeholder="sarah@acme.com" />
            </div>
            <div class="form-group">
              <label for="compPhone">Phone</label>
              <input type="tel" name="phone" id="compPhone" required placeholder="(123) 456-7890" />
            </div>
          </div>
          <div class="form-group">
            <label for="compSector">Practice Sector</label>
            <select name="sector" id="compSector" required>
              <option value="">Select option...</option>
              <option value="construction">Construction & Trades</option>
              <option value="it">Information Technology</option>
              <option value="accounting">Accounting & Admin Support</option>
              <option value="government">Government & Education</option>
            </select>
          </div>
          <div class="form-group">
            <label for="compMessage">Recruitment Specifics</label>
            <textarea name="message" id="compMessage" rows="5" required placeholder="Outline required qualifications, certification parameters, safety mandates, and project schedules..."></textarea>
          </div>
          <button type="submit" class="btn-pill btn-accent" style="width: 100%;">Submit Employer Request</button>
        </form>

        <!-- Form: Apply for Jobs (hidden by default) -->
        <form id="applyForm" action="{{ route('contact.submit') }}" method="POST" enctype="multipart/form-data" style="display: none;">
          @csrf
          <input type="hidden" name="form_type" value="candidate" />
          <div class="form-row">
            <div class="form-group">
              <label for="appFirst">First Name</label>
              <input type="text" name="first_name" id="appFirst" placeholder="Jane" />
            </div>
            <div class="form-group">
              <label for="appLast">Last Name</label>
              <input type="text" name="last_name" id="appLast" placeholder="Smith" />
            </div>
          </div>
          <div class="form-row">
            <div class="form-group">
              <label for="appEmail">Email Address</label>
              <input type="email" name="email" id="appEmail" placeholder="jane.smith@email.com" />
            </div>
            <div class="form-group">
              <label for="appPhone">Phone Number</label>
              <input type="tel" name="phone" id="appPhone" placeholder="(555) 019-2834" />
            </div>
          </div>
          <div class="form-group">
            <label for="appSector">Desired Industry</label>
            <select name="sector" id="appSector">
              <option value="">Select option...</option>
              <option value="construction">Construction Assistant / Skilled Labor</option>
              <option value="it">IT Support / Systems / Databases</option>
              <option value="accounting">Office Clerk / Bookkeeping / Admin</option>
              <option value="other">Other Practice Group</option>
            </select>
          </div>
          <div class="form-group">
            <label for="appBio">Professional Experience Summary</label>
            <textarea name="experience_summary" id="appBio" rows="4" placeholder="Briefly describe your career background, certifications (e.g., OSHA, safety), and availability..."></textarea>
          </div>
          <div class="form-group">
            <label for="appResume">Resume Text / Paste Profile</label>
            <textarea name="resume_text" id="appResume" rows="4" placeholder="Paste resume text or key career credentials here..."></textarea>
          </div>
          <button type="submit" class="btn-pill btn-accent" style="width: 100%;">Submit Job Application</button>
        </form>
      </div>

    </div>
  </div>
</section>
@endsection
