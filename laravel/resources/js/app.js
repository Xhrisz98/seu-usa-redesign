import './style.css';

document.addEventListener('DOMContentLoaded', () => {
  setupMobileMenu();
  setupContactTabs();
  parseUrlParams();
  setupFormSubmissions();
});

// 1. Mobile Menu Toggling
function setupMobileMenu() {
  const toggleBtn = document.getElementById('navToggle');
  const mainNav = document.getElementById('mainNav');

  if (toggleBtn && mainNav) {
    toggleBtn.addEventListener('click', (e) => {
      e.stopPropagation();
      const isVisible = mainNav.style.display === 'flex';
      mainNav.style.display = isVisible ? 'none' : 'flex';
      toggleBtn.classList.toggle('active');
    });

    // Close menu when clicking outside
    document.addEventListener('click', () => {
      if (window.innerWidth <= 768) {
        mainNav.style.display = 'none';
        toggleBtn.classList.remove('active');
      }
    });

    // Handle window resizing
    window.addEventListener('resize', () => {
      if (window.innerWidth > 768) {
        mainNav.style.display = 'flex';
      } else {
        mainNav.style.display = 'none';
      }
    });
  }
}

// 2. Contact Page Form Tabs Toggling
function setupContactTabs() {
  const tabHire = document.getElementById('tabHire');
  const tabApply = document.getElementById('tabApply');
  const hireForm = document.getElementById('hireForm');
  const applyForm = document.getElementById('applyForm');

  if (tabHire && tabApply && hireForm && applyForm) {
    tabHire.addEventListener('click', () => {
      setTabActive('hire');
    });

    tabApply.addEventListener('click', () => {
      setTabActive('apply');
    });
  }
}

function setTabActive(tabType) {
  const tabHire = document.getElementById('tabHire');
  const tabApply = document.getElementById('tabApply');
  const hireForm = document.getElementById('hireForm');
  const applyForm = document.getElementById('applyForm');

  if (tabType === 'hire') {
    tabHire.className = 'btn-pill btn-dark';
    tabApply.className = 'btn-pill btn-outline';
    hireForm.style.display = 'block';
    applyForm.style.display = 'none';
    
    // Manage input requirements dynamically
    toggleFormRequirements(hireForm, true);
    toggleFormRequirements(applyForm, false);
  } else {
    tabHire.className = 'btn-pill btn-outline';
    tabApply.className = 'btn-pill btn-dark';
    hireForm.style.display = 'none';
    applyForm.style.display = 'block';

    toggleFormRequirements(hireForm, false);
    toggleFormRequirements(applyForm, true);
  }
}

function toggleFormRequirements(form, isRequired) {
  const inputs = form.querySelectorAll('input, select, textarea');
  inputs.forEach(input => {
    // Only alter required fields that are key
    if (input.id && !input.id.includes('appBio')) {
      if (isRequired) {
        input.setAttribute('required', '');
      } else {
        input.removeAttribute('required');
      }
    }
  });
}

// 3. URL Parameter Parsing (e.g. ?type=jobs or ?sector=it)
function parseUrlParams() {
  const params = new URLSearchParams(window.location.search);
  const typeParam = params.get('type');
  const sectorParam = params.get('sector');

  if (typeParam) {
    if (typeParam === 'jobs') {
      setTabActive('apply');
    } else if (typeParam === 'hire') {
      setTabActive('hire');
    }
  }

  if (sectorParam) {
    const hireSectorSelect = document.getElementById('compSector');
    const applySectorSelect = document.getElementById('appSector');
    const rootSectorSelect = document.getElementById('sector');

    if (hireSectorSelect) hireSectorSelect.value = sectorParam;
    if (applySectorSelect) applySectorSelect.value = sectorParam;
    if (rootSectorSelect) rootSectorSelect.value = sectorParam;
  }
}

// 4. Form Submissions
function setupFormSubmissions() {
  const forms = ['b2bConsultForm', 'hireForm', 'applyForm', 'newsletterForm'];

  forms.forEach(formId => {
    const formElement = document.getElementById(formId);
    if (formElement) {
      formElement.addEventListener('submit', (e) => {
        e.preventDefault();
        
        let message = 'Thank you for your submission! Our team will contact you shortly.';
        if (formId === 'newsletterForm') {
          message = 'Success! You have subscribed to our staffing newsletter.';
        } else if (formId === 'applyForm') {
          message = 'Application received! Our recruitment department will review your profile.';
        } else if (formId === 'hireForm' || formId === 'b2bConsultForm') {
          message = 'Request received! A practice group agent will call you within 24 hours.';
        }

        showNotification(message);
        formElement.reset();
      });
    }
  });
}

function showNotification(text) {
  // Create a beautiful premium toast notification
  const toast = document.createElement('div');
  toast.style.position = 'fixed';
  toast.style.bottom = '2rem';
  toast.style.right = '2rem';
  toast.style.background = '#0f172a';
  toast.style.color = '#ffffff';
  toast.style.padding = '1.25rem 2rem';
  toast.style.borderRadius = '1rem';
  toast.style.boxShadow = '0 20px 25px -5px rgb(0 0 0 / 0.15)';
  toast.style.border = '1px solid #f59e0b';
  toast.style.zIndex = '1000';
  toast.style.fontFamily = 'Outfit, sans-serif';
  toast.style.fontWeight = '600';
  toast.style.transform = 'translateY(1rem)';
  toast.style.opacity = '0';
  toast.style.transition = 'all 0.4s cubic-bezier(0.16, 1, 0.3, 1)';
  
  toast.innerText = text;
  document.body.appendChild(toast);
  
  // Animate in
  setTimeout(() => {
    toast.style.transform = 'translateY(0)';
    toast.style.opacity = '1';
  }, 100);

  // Fade out
  setTimeout(() => {
    toast.style.transform = 'translateY(1rem)';
    toast.style.opacity = '0';
    setTimeout(() => {
      toast.remove();
    }, 400);
  }, 4000);
}
