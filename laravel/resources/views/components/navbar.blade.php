<!-- Navigation Header -->
<header class="main-header">
  <div class="container">
    <a href="{{ route('home') }}" class="logo">
      <img src="https://sp-ao.shortpixel.ai/client/to_webp,q_glossy,ret_img/http://seu-usa.com/wp-content/uploads/2025/07/logo.avif" alt="Sunshine Enterprise USA (SEU-USA) Logo" />
    </a>
    <nav>
      <ul class="main-nav" id="mainNav">
        <li><a href="{{ route('home') }}" class="{{ Route::is('home') ? 'active' : '' }}">Home</a></li>
        <li><a href="{{ route('about') }}" class="{{ Route::is('about') ? 'active' : '' }}">About</a></li>
        <li><a href="{{ route('services') }}" class="{{ Route::is('services') ? 'active' : '' }}">Solutions</a></li>
        <li><a href="{{ route('industries') }}" class="{{ Route::is('industries') ? 'active' : '' }}">Sectors</a></li>
        <li><a href="{{ route('contact') }}" class="{{ Route::is('contact') ? 'active' : '' }}">Contact</a></li>
      </ul>
    </nav>
    <div class="header-cta">
      <a href="{{ route('contact') }}" class="btn-pill btn-dark">Consult an Agent</a>
    </div>
    <button class="nav-toggle" id="navToggle" aria-label="Toggle navigation">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
    </button>
  </div>
</header>
