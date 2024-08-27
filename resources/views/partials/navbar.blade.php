<!-- resources/views/partials/navbar.blade.php -->
<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Teko:wght@400;500;700&family=Poppins:wght@400;500;700&family=Merriweather+Sans:wght@400;700&family=DM+Sans:wght@400;500;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<div class="header">
<div class="offer-banner">
        <div class="offer-column">HURRY UP OFFER RUNNING FOR A LIMITED TIME ONLY</div>
        <div class="offer-column">GET A 15% GIFT CARD FOR FIRST TIME VISITORS</div>
        <div class="offer-column">HURRY UP OFFER RUNNING FOR A LIMITED TIME ONLY</div>
        <div class="offer-column">GET A 15% GIFT CARD FOR FIRST TIME VISITORS</div>
    </div>

<nav class="navbar">
    <div class="navbar-logo">
        <a href="{{ url('/') }}">
            <img src="{{ asset('images/logo.png') }}" alt="Logo">
        </a>
    </div>
    <ul>
        <li><a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>
        <li><a href="{{ url('/project') }}" class="{{ request()->is('project') ? 'active' : '' }}">Our Project</a></li>
        <li><a href="{{ url('/services') }}" class="{{ request()->is('services') ? 'active' : '' }}">Our Services</a></li>
        <li><a href="{{ url('/works') }}" class="{{ request()->is('works') ? 'active' : '' }}">How it works</a></li>
        <li>
                <a href="{{ url('/more') }}" class="{{ request()->is('more') ? 'active' : '' }}">More
                    <i class="fas fa-chevron-down"></i>
                </a>
            </li>
    </ul>
    <div class="navbar-button">
    <a href="{{ url('/contact') }}" class="button">Let's Connect
                <i class="fas fa-arrow-right"></i>
            </a>
    </div>
    <div class="vertical-line"></div>
    <div class="navbar-contact">
        <i class="fas fa-phone"></i> <span class="phone-number">+91  6754675439</span>
    </div>
</nav>
</div>
