<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jotrack</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap');
    </style>
</head>

<body>
    <header>
        <!-- Navbar -->
        <section>
            <nav class="navbar">
                <div class="navbar-container">
                    <div class="hamburger-menu">&#9776;</div>
                    <a href="" class="logo">
                        <h1>LOGO</h1>
                    </a>
                    <ul class="nav-list">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Pricing</a></li>
                    </ul>
                    <div class="navbar-button">
                        <button class="sign-up"><a>Sign Up</a></button>
                    </div>
                </div>
            </nav>
            <hr>
        </section>
    </header>

    <main>
        <!-- Hero -->
        <section>
            <div class="hero">
                <div class="hero-image">
                    <img class="image"
                        src="{{ asset('build/assets/4 to 5 people sucessfully get their jobs in an office with green accent color without any text_ 1.png') }}"
                        alt="Hero Image">
                </div>
                <div class="hero-desc">
                    <div class="hero-title">
                        <span>Jotrack</span>
                    </div>
                    <div class="hero-subtitle">
                        <p>Simplify Your Job Search: AI Interviews & Effortless Application</p>
                    </div>
                    <div class="hero-button">
                        <button>Get Started</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Achievments Card -->
        <section>
            <div class="achievements">
                <div class="achievements-container">
                    <div class="achievements-card">
                        <div class="achievements-title">
                            <span class="title">Jobs</span>
                            <span id="icon-jobs">Icon</span>
                        </div>
                        <div class="achievements-description">
                            <span>10.7K+</span>
                            <p>have been tracked</p>
                        </div>
                    </div>

                    <div class="achievements-card">
                        <div class="achievements-title">
                            <span class="title">AI-Interviews</span>
                            <span id="icon-ai">Icon</span>
                        </div>
                        <div class="achievements-description">
                            <span>500+</span>
                            <p>have been done</p>
                        </div>
                    </div>

                    <div class="achievements-card">
                        <div class="achievements-title">
                            <span class="title">People</span>
                            <span id="icon-people">Icon</span>
                        </div>
                        <div class="achievements-description">
                            <span>500+</span>
                            <p>land their dream jobs</p>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <!-- <hr class="achievements-break"> -->
            </div>
        </section>

        <!-- Review -->
        <section>
            <div class="reviews">
                <div class="review-main-title">
                    <h1 class="review-title">What they say <span>about us?</span></h1>
                </div>
                <div class="reviews-container">
                    <div class="review-card">
                        <div class="review-profile">
                            <img src="{{ asset('build/assets/Avatar.png') }}" alt="Avatar Picture">
                            <div class="review-detail">
                                <p class="name">Sofia Davis</p>
                                <p class="time">2 months ago</p>
                            </div>
                            <div class="review-rating">
                                <p class="rating">5.0 ⭐</p>
                            </div>
                        </div>
                        <div class="review-description">
                            <div class="review-title">
                                <p>Software Engineer at ABC Company</p>
                            </div>
                            <div class="review-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum dapibus cursus
                                    convallis. Proin eget nisl metus. Vivamus ac pharetra nibh, sed feugiat neque.
                                    Vivamus arcu dolor, ultrices commodo placerat at, vehicula eget ex. Ut et mollis
                                    urna. Aliquam vitae mattis purus, quis consectetur metus. Vivamus sed elit diam. Ut
                                    iaculis ex non odio ullamcorper, eu scelerisque sem tempus. Cras fermentum neque a
                                    mauris tempus elementum.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="review-card">
                        <div class="review-profile">
                            <img src="{{ asset('build/assets/Avatar.png') }}" alt="Avatar Picture">
                            <div class="review-detail">
                                <p class="name">Budi Berbudi</p>
                                <p class="time">2 months ago</p>
                            </div>
                            <div class="review-rating">
                                <p class="rating">5.0 ⭐</p>
                            </div>
                        </div>
                        <div class="review-description">
                            <div class="review-title">
                                <p>UI Designer at XYZ Inc.</p>
                            </div>
                            <div class="review-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum dapibus cursus
                                    convallis. Proin eget nisl metus. Vivamus ac pharetra nibh, sed feugiat neque.
                                    Vivamus arcu dolor, ultrices commodo placerat at, vehicula eget ex. Ut et mollis
                                    urna. Aliquam vitae mattis purus, quis consectetur metus. Vivamus sed elit diam. Ut
                                    iaculis ex non odio ullamcorper, eu scelerisque sem tempus. Cras fermentum neque a
                                    mauris tempus elementum.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="review-card">
                        <div class="review-profile">
                            <img src="{{ asset('build/assets/Avatar.png') }}" alt="Avatar Picture">
                            <div class="review-detail">
                                <p class="name">Sovia Davis</p>
                                <p class="time">2 months ago</p>
                            </div>
                            <div class="review-rating">
                                <p class="rating">5.0 ⭐</p>
                            </div>
                        </div>
                        <div class="review-description">
                            <div class="review-title">
                                <p>Software Engineer at ABC Company</p>
                            </div>
                            <div class="review-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum dapibus cursus
                                    convallis. Proin eget nisl metus. Vivamus ac pharetra nibh, sed feugiat neque.
                                    Vivamus arcu dolor, ultrices commodo placerat at, vehicula eget ex. Ut et mollis
                                    urna. Aliquam vitae mattis purus, quis consectetur metus. Vivamus sed elit diam. Ut
                                    iaculis ex non odio ullamcorper, eu scelerisque sem tempus. Cras fermentum neque a
                                    mauris tempus elementum.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pricing -->
        <section>
            <div class="pricing">
                <div class="pricing-main-title">
                    <h1>Find the right plan to <span>enhance</span> your journey. </h1>
                </div>
                <div class="pricing-container">
                    <div class="pricing-card">
                        <div class="pricing-header">
                            <span>Free</span>
                            <p>Starter Plan</p>
                            <p class="pricing-subtitle">Begin your journey and manage you applications for free</p>
                        </div>
                        <div class="pricing-description">
                            <div class="pricing-pros">
                                <img src="{{ asset('build/assets/badge-check.png') }}" alt="Pros">
                                <p>Track job applications up to 50 active applications</p>
                            </div>
                            <div class="pricing-pros">
                                <img src="{{ asset('build/assets/badge-check.png') }}" alt="Pros">
                                <p>Archive any tracked applications anytime</p>
                            </div>
                            <div class="pricing-cons">
                                <img src="{{ asset('build/assets/badge-x.png') }}" alt="Cons">
                                <p>Access to AI-Powered Interview Simulator</p>
                            </div>
                            <div class="pricing-cons">
                                <img src="{{ asset('build/assets/badge-x.png') }}" alt="Cons">
                                <p>Personalized suggestions</p>
                            </div>
                            <div class="pricing-cons">
                                <img src="{{ asset('build/assets/badge-x.png') }}" alt="Cons">
                                <p>CV/Resume reviews & examinations</p>
                            </div>
                            <div class="pricing-button">
                                <button>Get Started</button>
                            </div>
                        </div>
                    </div>

                    <div class="pricing-card">
                        <div class="pricing-header">
                            <span>IDR 50K/mo</span>
                            <p>Premium Plan</p>
                            <p class="pricing-subtitle">Boost your journey with our premium features and land your dream
                                job</p>
                        </div>
                        <div class="pricing-description">
                            <div class="pricing-pros">
                                <img src="{{ asset('build/assets/badge-check.png') }}" alt="Pros">
                                <p>Track job applications up to 50 active applications</p>
                            </div>
                            <div class="pricing-pros">
                                <img src="{{ asset('build/assets/badge-check.png') }}" alt="Pros">
                                <p>Archive any tracked applications anytime</p>
                            </div>
                            <div class="pricing-pros" id="ai">
                                <img src="{{ asset('build/assets/badge-check.png') }}" alt="Pros">
                                <p>Access to AI-Powered Interview Simulator</p>
                            </div>
                            <div class="pricing-pros" id="suggestions">
                                <img src="{{ asset('build/assets/badge-check.png') }}" alt="Pros">
                                <p>Personalized suggestions</p>
                            </div>
                            <div class="pricing-pros" id="cv">
                                <img src="{{ asset('build/assets/badge-check.png') }}" alt="Pros">
                                <p>CV/Resume reviews & examinations</p>
                            </div>
                            <div class="pricing-button" id="premium-button">
                                <button>Get Started</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ -->
        <section>
            <div class="faq">
                <div class="faq-main-title">
                    <h1>Frequently Asked Questions</h1>
                </div>
                <div class="faq-container">
                    <div class="faq-accordion">
                        <div class="accordion-label">
                            Is it accessible?
                        </div>
                        <div class="accordion-content">
                            Yes. It adheres to the WAI-ARIA design pattern.
                        </div>
                        <!-- <hr> -->
                    </div>

                    <div class="faq-accordion">
                        <div class="accordion-label">
                            Is it styled?
                        </div>
                        <div class="accordion-content">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente cupiditate sunt natus quos
                            dignissimos, laboriosam tenetur laborum quasi repudiandae nam officiis, a sed earum fuga.
                        </div>
                        <!-- <hr> -->
                    </div>

                    <div class="faq-accordion">
                        <div class="accordion-label">
                            Is it animated?
                        </div>
                        <div class="accordion-content">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, quae! Eveniet ullam
                            commodi doloribus mollitia.
                        </div>
                        <!-- <hr> -->
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-container">
            <div class="footer-logo">
                <a href="#">
                    <h1>LOGO</h1>
                </a>
            </div>
            <div class="footer-description">
                <p>Donec varius odio elit, nec egestas arcu volutpat id. Aenean aliquet tempor arcu, eu rhoncus nisl
                    elementum et. Donec iaculis bibendum ultrices. Fusce aliquam ornare neque, quis tincidunt sapien.
                </p>
                <p>Aenean vehicula lectus sapien, vel aliquet lectus aliquet eget. Suspendisse sit amet massa at mauris
                    commodo vestibulum. Fusce viverra pharetra urna eget sagittis.</p>
                <p>Cras imperdiet non felis in posuere.</p>
            </div>
            <div class="social-media">
                <img src="{{ asset('build/assets/instagram.png') }}" alt="Instagram">
                <img src="{{ asset('build/assets/twitter.png') }}" alt="Twitter">
                <img src="{{ asset('build/assets/linkedin.png') }}" alt="LinkedIn">
            </div>
        </div>
    </footer>

    <script type="text/javascript" src="{{ asset('js/home.js') }}"></script>
</body>

</html>