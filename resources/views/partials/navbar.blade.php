<!-- Spinner Start -->
<div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->
    @if(request()->is('/')) <!-- Check if it's the homepage -->
        <!-- Loader Start -->
        <div id="loader">
            <h3 class="animate__animated animate__fadeIn">
                <span class="welcome-text">Welcome to</span>
                <span class="dhanvruksha-text">Dhanvruksha</span>
            </h3>
        </div>
        <!-- Loader End -->
    @endif


<!-- Topbar Start -->
<div class="Topbar-container-fluid text-white d-flex d-lg-flex" style="background-color: #06060b;">
    <div class="Topbar-container py-3">
        <div class="Topbar-d-flex align-items-center">
            <!-- Logo Section -->
           <!-- Logo Section -->
<div class="logo-container">
    <a href="index.html" class="logo-link">
        <img src="img/cropped-logo_Dhanavruksha-01.jpg" alt="DV Logo" class="logo-img">
    </a>
    <div class="logo-text">
        <span class="logo-title">DHANAVRUKSHA</span>
        <span class="logo-subtitle">FINANCIAL SERVICES PVT. LTD.</span>
       <h6 class="topabar">YOUR GATEWAY TO FINANCIAL WELLNESS</h6>
    </div>
</div>

<style>
    .topabar {
        background: linear-gradient(135deg, #AE8625 0%, #F7EF8A 30%, #D2AC47 60%, #EDC967 100%);
    font-weight: bold;
    -webkit-background-clip: text; /* Clips the gradient inside the text */
    -webkit-text-fill-color: transparent; /* Makes text transparent to show the gradient */
    text-transform: uppercase;
    white-space: nowrap; /* Prevents text wrapping */
    font-size: 12px;
}

/* Logo container with flexbox for alignment */
.logo-container {
    display: flex;
    align-items: center;
    margin-left: 20px;
}

/* Styling for the DV logo */
.logo-img {
    max-height: 60px;
    width: auto;
}

/* Logo text container */
.logo-text {
    display: flex;
    flex-direction: column;
    margin-left: 15px; /* Adjust spacing between logo and text */
    font-family: 'Arial', sans-serif;
}

/* Gold Gradient Text Styling */
.logo-title, .logo-subtitle {
    font-size: 22px;
    font-weight: bold;
    background: linear-gradient(135deg, #AE8625 0%, #F7EF8A 30%, #D2AC47 60%, #EDC967 100%);
    -webkit-background-clip: text; /* Clips the gradient inside the text */
    -webkit-text-fill-color: transparent; /* Makes text transparent to show the gradient */
    text-transform: uppercase;
    white-space: nowrap; /* Prevents text wrapping */
}

/* Subtitle size adjustment */
.logo-subtitle {
    font-size: 16px;
    font-weight: 600;
}

/* Responsive Design */
@media (max-width: 1024px) {
    .logo-container {
        margin-left: 20px;
    }
}

@media (max-width: 768px) {
    .logo-container {
        flex-direction: column; /* Stack logo and text vertically */
        align-items: center;
        text-align: center;
        margin-left: 0;
    }

    .logo-img {
        max-height: 50px; /* Reduce logo size for smaller screens */
    }

    .logo-text {
        margin-left: 0;
        margin-top: 5px; /* Space between logo and text */
    }

    .logo-title {
        font-size: 18px;
    }

    .logo-subtitle {
        font-size: 14px;
    }
}

@media (max-width: 480px) {
    .logo-title {
        font-size: 16px;
    }

    .logo-subtitle {
        font-size: 12px;
    }

    .logo-img {
        max-height: 40px;
    }

    .logo-container {
        padding: 10px;
    }
}
</style>
        
            <!-- Right Section -->
            <div class="Topbar-right d-flex align-items-center ms-3" style="flex-wrap: nowrap;">
                <small class="d-flex align-items-center me-3 hide-on-mobile">
                    <i class="fa fa-envelope me-2" color="#cb9f42"></i>customerservice@dhanavruksha.in
                </small>
                <small class="d-flex align-items-center me-3 hide-on-mobile">
                    <i class="fa fa-phone-alt me-2" color="#cb9f42"></i>+91 7305888454
                </small>
                <a href="{{ route('schedulemeeting') }}" class="nav-item nav-link d-flex align-items-center me-3">
                    <i class="fa fa-calendar-alt me-2" color="#cb9f42"></i>Schedule Meeting
                </a>
                <a href="{{ route('opendemata') }}" class="nav-item nav-link d-flex align-items-center">
                    <i class="fa fa-briefcase me-2" color="#cb9f42"></i>Open Demat Account
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->



      <!-- Navbar Start -->
<div class="container-fluid bg-white sticky-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-white navbar-light p-lg-0">
            <a href="{{ route('home') }}" class="navbar-brand d-lg-none">
                <h1 class="fw-bold m-0"></h1>
            </a>
            <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="{{ route('home') }}" class="nav-item nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>

                    <!-- About Us Dropdown -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{ request()->routeIs('company-profile') || request()->routeIs('team') ? 'active' : '' }}" data-bs-toggle="dropdown">About Us</a>
                        <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                            <a href="{{ route('company-profile') }}" class="dropdown-item {{ request()->routeIs('company-profile') ? 'active' : '' }}">Company Profile</a>
                            <a href="{{ route('team') }}" class="dropdown-item {{ request()->routeIs('team') ? 'active' : '' }}">Our Team</a>
                        </div>
                    </div>

                    <!-- Products Dropdown -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{ request()->routeIs('mutual-funds') || request()->routeIs('equity') || request()->routeIs('pms-aif') || request()->routeIs('fixed-deposits') || request()->routeIs('bonds') ? 'active' : '' }}" data-bs-toggle="dropdown">Products</a>
                        <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                            <a href="{{ route('mutual-funds') }}" class="dropdown-item {{ request()->routeIs('mutual-funds') ? 'active' : '' }}">Mutual Funds</a>
                            <a href="{{ route('equity') }}" class="dropdown-item {{ request()->routeIs('equity') ? 'active' : '' }}">Equity And Derivatives</a>
                            <a href="{{ route('pms-aif') }}" class="dropdown-item {{ request()->routeIs('pms-aif') ? 'active' : '' }}">PMS-AIF</a>
                            <a href="{{ route('fixed-deposits') }}" class="dropdown-item {{ request()->routeIs('fixed-deposits') ? 'active' : '' }}">Fixed Deposits</a>
                            <a href="{{ route('bonds') }}" class="dropdown-item {{ request()->routeIs('bonds') ? 'active' : '' }}">Bonds</a>
                        </div>
                    </div>

                    <!-- Services Dropdown -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{ request()->routeIs('wealth-management') || request()->routeIs('financial-planning') || request()->routeIs('tax-planning') || request()->routeIs('portfolio-restucturing') || request()->routeIs('child-future-saving') || request()->routeIs('retirmentplanning') || request()->routeIs('seminars') || request()->routeIs('external-Portfolio') || request()->routeIs('equity-advisory') || request()->routeIs('estate-planning') || request()->routeIs('Insurance_pr') ? 'active' : '' }}" data-bs-toggle="dropdown">Services</a>
                        <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                            <a href="{{ route('wealth-management') }}" class="dropdown-item {{ request()->routeIs('wealth-management') ? 'active' : '' }}">Wealth Management</a>
                            <a href="{{ route('financial-planning') }}" class="dropdown-item {{ request()->routeIs('financial-planning') ? 'active' : '' }}">Financial Planning</a>
                            <a href="{{ route('tax-planning') }}" class="dropdown-item {{ request()->routeIs('tax-planning') ? 'active' : '' }}">Tax Planning</a>
                            <a href="{{ route('portfolio-restucturing') }}" class="dropdown-item {{ request()->routeIs('portfolio-restucturing') ? 'active' : '' }}">Portfolio Restructuring</a>
                            <a href="{{ route('child-future-saving') }}" class="dropdown-item {{ request()->routeIs('child-future-saving') ? 'active' : '' }}">Child Future Saving</a>
                            <a href="{{ route('retirmentplanning') }}" class="dropdown-item {{ request()->routeIs('retirmentplanning') ? 'active' : '' }}">Retirement Planning</a>
                            <a href="{{ route('seminars') }}" class="dropdown-item {{ request()->routeIs('seminars') ? 'active' : '' }}">Investment Seminar For Youth</a>
                            <a href="{{ route('external-Portfolio') }}" class="dropdown-item {{ request()->routeIs('external-Portfolio') ? 'active' : '' }}">Free Review of External Portfolio</a>
                            <a href="{{ route('equity-advisory') }}" class="dropdown-item {{ request()->routeIs('equity-advisory') ? 'active' : '' }}">Equity Advisory</a>
                            <a href="{{ route('estate-planning') }}" class="dropdown-item {{ request()->routeIs('estate-planning') ? 'active' : '' }}">Estate Planning</a>
                            <a href="{{ route('Insurance_pr') }}" class="dropdown-item {{ request()->routeIs('Insurance_pr') ? 'active' : '' }}">Insurance and Investment Portfolio Restructuring</a>
                        </div>
                    </div>

                    <!-- Investor Zone Dropdown -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{ request()->routeIs('newsletter') || request()->routeIs('financial-calculator') || request()->routeIs('downloads') || request()->routeIs('blogs') || request()->routeIs('learning') ? 'active' : '' }}" data-bs-toggle="dropdown">Investor Zone</a>
                        <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                            <a href="{{ route('newsletter') }}" class="dropdown-item {{ request()->routeIs('newsletter') ? 'active' : '' }}">Newsletter</a>
                            <a href="{{ route('financial-calculator') }}" class="dropdown-item {{ request()->routeIs('financial-calculator') ? 'active' : '' }}">Financial calculator</a>
                            <a href="{{ route('downloads') }}" class="dropdown-item {{ request()->routeIs('downloads') ? 'active' : '' }}">Downloads</a>
                            <a href="{{ route('blogs') }}" class="dropdown-item {{ request()->routeIs('blogs') ? 'active' : '' }}">Blogs</a>
                            <a href="{{ route('learning') }}" class="dropdown-item {{ request()->routeIs('learning') ? 'active' : '' }}">Learning</a>
                        </div>
                    </div>

                    <a href="{{ route('kyc') }}" class="nav-item nav-link {{ request()->routeIs('kyc') ? 'active' : '' }}">KYC</a>
                    <a href="{{ route('contact-us') }}" class="nav-item nav-link {{ request()->routeIs('contact-us') ? 'active' : '' }}">Contact</a>
                </div>

                <div class="ms-auto d-none d-lg-block">
                    <a href="https://dhanavruksha.investwell.app/app/#/login" class="btn custom-btn rounded-pill py-2 px-3">Client Login</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->

    <!-- Sidebar start -->
<div class="float-slider-page">
    <div class="floating-buttons">
        <a href="https://www.facebook.com/people/DhanaVruksha-Financial-services/100086682897556/" target="_blank" class="button facebook">
            <span class="tooltip facebook">Facebook</span>
            <i class="fa-brands fa-facebook-f"></i>
        </a>
        <a href="https://www.linkedin.com/company/dhanavruksha-financial-services-private-ltd/" target="_blank" class="button linkedin">
            <span class="tooltip">LinkedIn</span>
            <i class="fa-brands fa-linkedin-in"></i>
        </a>
        <a href="https://www.instagram.com/dhanavruksha_" target="_blank" class="button instagram">
            <span class="tooltip instagram">Instagram</span>
            <i class="fa-brands fa-instagram"></i>
        </a>
        <a href="https://twitter.com/dhanavruksha" target="_blank" class="button twitter">
            <span class="tooltip twitter">Twitter</span>
            <i class="fa-brands fa-twitter"></i>
        </a>
    </div>

    <div class="contact-buttons">
        <a href="https://wa.me/917305888454" target="_blank" class="contact-button whatsapp">
            <span class="tooltip whatsapp">WhatsApp</span>
            <i class="fa-brands fa-whatsapp"></i>
        </a>
        <a href="tel:+917305888454" class="contact-button phone">
            <span class="tooltip phone">Phone</span>
            <i class="fa-solid fa-phone"></i>
        </a>
        <div class="contact-button hide" onclick="toggleContactButtons()">
            <span class="tooltip">Hide</span>
            <i class="fa-solid fa-bars"></i>
        </div>
    </div>
</div>
<!-- /Sidebar end -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" crossorigin="anonymous"></script>
    <script>
        function toggleContactButtons() {
            const whatsappButton = document.querySelector('.contact-button.whatsapp');
            const phoneButton = document.querySelector('.contact-button.phone');
            const hideButtonIcon = document.querySelector('.contact-button.hide i');

            whatsappButton.classList.toggle('hidden');
            phoneButton.classList.toggle('hidden');

            // Change icon
            if (whatsappButton.classList.contains('hidden')) {
                hideButtonIcon.classList.replace('fa-bars', 'fa-eye');
            } else {
                hideButtonIcon.classList.replace('fa-eye', 'fa-bars');
            }
        }
    </script>
    <!-- /Sidebar end -->