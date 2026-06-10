<x-app-layout :page="'home'">
    <main>
        <section class="hero-section page-section">
            <div class="section-inner hero-grid">
                <div class="reveal space-y-8">
                    <div class="hero-trust-strip">
                        <span class="hero-trust-dot"></span>
                        <span>Trusted by 67+ global clients</span>
                    </div>
                    <p class="eyebrow">OUTCOME-DRIVEN TECH AGENCY</p>
                    <div class="space-y-6">
                        <h1 class="hero-title">
                            Risk-Free<br>
                            <span class="hero-title-accent">Digital Products</span>
                        </h1>
                        <p class="hero-copy">
                            Squad Tech Solution delivers elite software, marketing, and design. Try our 100% free
                            website offer: if you don't love the design, we walk right away.
                        </p>
                    </div>
                    <div class="flex flex-col gap-4 sm:flex-row">
                        <a href="/services" class="primary-button magnetic-button">Claim Free Offer</a>
                        <a href="https://calendly.com/squadtechsolution/inquiry"
                            class="secondary-button magnetic-button">Book Free Call</a>
                    </div>
                    <div class="hero-proof-row">
                        <span class="hero-proof-chip">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                            Zero-risk guarantee
                        </span>
                        <span class="hero-proof-chip">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                            7 years delivering
                        </span>
                        <span class="hero-proof-chip">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                            No contracts
                        </span>
                    </div>
                </div>

                <div class="reveal relative">
                    <div class="floating-orb orb-one"></div>
                    <div class="floating-orb orb-two"></div>
                    <div class="hero-float-card hero-float-tl">
                        <span class="hero-float-value">200+</span>
                        <span class="hero-float-label">Projects Delivered</span>
                    </div>
                    <div class="hero-console hero-video-placeholder video-placeholder interactive-card" data-tilt>
                        <div class="video-placeholder-frame">
                            <video autoplay muted loop playsinline preload="metadata">
                                <source src="{{ asset('videos/Promotional-Intro-Squad-Tech-Solution.mp4') }}"
                                    type="video/mp4">
                            </video>
                        </div>
                        <div class="hero-tags">
                            <div class="tag-card">Free preview</div>
                            <div class="tag-card">Our philosophy</div>
                            <div class="tag-card">Why we fight</div>
                        </div>
                    </div>
                    <div class="hero-float-card hero-float-br">
                        <span class="hero-float-value">+98%</span>
                        <span class="hero-float-label">Client Satisfaction</span>
                    </div>
                </div>
            </div>

            <div class="stats-grid">
                <div class="stat-card reveal interactive-card" data-tilt>
                    <p class="stat-value" data-countup="200" data-countup-suffix="+">200+</p>
                    <p class="stat-label">Successful Projects</p>
                </div>
                <div class="stat-card reveal interactive-card" data-tilt>
                    <p class="stat-value" data-countup="7">7</p>
                    <p class="stat-label">Years of Experience</p>
                </div>
                <div class="stat-card reveal interactive-card" data-tilt>
                    <p class="stat-value" data-countup="98" data-countup-prefix="+" data-countup-suffix="%">+98%</p>
                    <p class="stat-label">Client Satisfaction</p>
                </div>
                <div class="stat-card reveal interactive-card" data-tilt>
                    <p class="stat-value" data-countup="10" data-countup-suffix="M+">10M+</p>
                    <p class="stat-label">Impressions</p>
                </div>
                <div class="stat-card reveal interactive-card" data-tilt>
                    <p class="stat-value" data-countup="67" data-countup-suffix="+">67+</p>
                    <p class="stat-label">Global Clients</p>
                </div>
            </div>
        </section>

        <section class="page-section">
            <div class="section-inner">
                <div class="section-head">
                    <div class="reveal max-w-2xl">
                        <p class="eyebrow">Services</p>
                        <h2 class="section-title">Six Breakthrough Services to Scale Your Business</h2>
                    </div>
                    <p class="section-copy reveal">
                        From zero-risk high-speed websites to hyper-targeted marketing campaigns, we deploy relentless
                        creative execution and custom tech to prove our absolute worth
                    </p>
                </div>
                <div class="services-grid">
                    <article class="service-card reveal interactive-card" data-tilt>
                        <div class="service-icon" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" fill="currentColor">
                                <path
                                    d="M278.7 64.7C296 68.4 307 85.4 303.3 102.7L284.2 192L410.7 192L432.7 89.3C436.4 72 453.4 61 470.7 64.7C488 68.4 499 85.4 495.3 102.7L476.2 192L544 192C561.7 192 576 206.3 576 224C576 241.7 561.7 256 544 256L462.4 256L435 384L502.8 384C520.5 384 534.8 398.3 534.8 416C534.8 433.7 520.5 448 502.8 448L421.2 448L399.2 550.7C395.5 568 378.5 579 361.2 575.3C343.9 571.6 332.9 554.6 336.6 537.3L355.7 448L229.2 448L207.2 550.7C203.5 568 186.5 579 169.2 575.3C151.9 571.6 140.9 554.6 144.6 537.3L163.8 448L96 448C78.3 448 64 433.7 64 416C64 398.3 78.3 384 96 384L177.6 384L205 256L137.2 256C119.5 256 105.2 241.7 105.2 224C105.2 206.3 119.5 192 137.2 192L218.8 192L240.8 89.3C244.4 72 261.4 61 278.7 64.7zM270.4 256L243 384L369.5 384L396.9 256L270.4 256z" />
                            </svg>
                        </div>
                        <h3><a href="https://www.behance.net/squadtechsolution/services/808305/Social-Media-Marketing"
                                target="_blank" rel="noreferrer">Social Media Marketing</a></h3>
                        <p>High-conversion content, paid strategy, and multi-channel growth campaigns backed by an
                            absolute 30-day money-back guarantee</p>
                    </article>
                    <article class="service-card reveal interactive-card" data-tilt>
                        <div class="service-icon" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" fill="currentColor">
                                <path
                                    d="M544 513L397.2 364.2C417.2 336.3 429.1 302 429.1 265C429.1 171.9 354.4 96.1 262.6 96.1C170.7 96 96 171.8 96 264.9C96 358 170.7 433.8 262.5 433.8C302.3 433.8 338.8 419.6 367.5 395.9L513.5 544L544 513zM262.5 394.8C191.9 394.8 134.4 336.5 134.4 264.9C134.4 193.3 191.9 135 262.5 135C333.1 135 390.6 193.3 390.6 264.9C390.6 336.5 333.2 394.8 262.5 394.8z" />
                            </svg>
                        </div>
                        <h3><a href="https://www.behance.net/squadtechsolution/services/809467/SEO-PPC" target="_blank"
                                rel="noreferrer">SEO &amp; PPC</a></h3>
                        <p>Aggressive search ranking and optimized ad structures deployed to capture targeted traffic,
                            hot leads, and verified revenue</p>
                    </article>
                    <article class="service-card reveal interactive-card" data-tilt>
                        <div class="service-icon" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" fill="currentColor">
                                <path
                                    d="M384 112L384 128C384 145.7 369.7 160 352 160L288 160C270.3 160 256 145.7 256 128L256 112L192 112C183.2 112 176 119.2 176 128L176 512C176 520.8 183.2 528 192 528L448 528C456.8 528 464 520.8 464 512L464 128C464 119.2 456.8 112 448 112L384 112zM128 128C128 92.7 156.7 64 192 64L448 64C483.3 64 512 92.7 512 128L512 512C512 547.3 483.3 576 448 576L192 576C156.7 576 128 547.3 128 512L128 128zM288 384L352 384C396.2 384 432 419.8 432 464C432 472.8 424.8 480 416 480L224 480C215.2 480 208 472.8 208 464C208 419.8 243.8 384 288 384zM264 288C264 257.1 289.1 232 320 232C350.9 232 376 257.1 376 288C376 318.9 350.9 344 320 344C289.1 344 264 318.9 264 288z" />
                            </svg>
                        </div>
                        <h3><a href="https://www.behance.net/squadtechsolution/services/798393/Brand-Identity"
                                target="_blank" rel="noreferrer">Brand Identity</a></h3>
                        <p>Striking brand books, custom assets, and memorable messaging systems built to command
                            attention over competitors</p>
                    </article>
                    <article class="service-card reveal interactive-card" data-tilt>
                        <div class="service-icon" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" fill="currentColor">
                                <path
                                    d="M257.1 96C238.4 96 220.9 105.4 210.5 120.9L184.5 160L128 160C92.7 160 64 188.7 64 224L64 480C64 515.3 92.7 544 128 544L512 544C547.3 544 576 515.3 576 480L576 224C576 188.7 547.3 160 512 160L455.5 160L429.5 120.9C419.1 105.4 401.6 96 382.9 96L257.1 96zM250.4 147.6C251.9 145.4 254.4 144 257.1 144L382.8 144C385.5 144 388 145.3 389.5 147.6L422.7 197.4C427.2 204.1 434.6 208.1 442.7 208.1L512 208.1C520.8 208.1 528 215.3 528 224.1L528 480.1C528 488.9 520.8 496.1 512 496.1L128 496C119.2 496 112 488.8 112 480L112 224C112 215.2 119.2 208 128 208L197.3 208C205.3 208 212.8 204 217.3 197.3L250.5 147.5zM320 448C381.9 448 432 397.9 432 336C432 274.1 381.9 224 320 224C258.1 224 208 274.1 208 336C208 397.9 258.1 448 320 448zM256 336C256 300.7 284.7 272 320 272C355.3 272 384 300.7 384 336C384 371.3 355.3 400 320 400C284.7 400 256 371.3 256 336z" />
                            </svg>
                        </div>
                        <h3><a href="https://www.behance.net/squadtechsolution/services/809529/Media-Production"
                                target="_blank" rel="noreferrer">Media Production</a></h3>
                        <p>Premium cinematic videos, custom photos, and high-converting creative media built to maximize
                            ad retention</p>
                    </article>
                    <article class="service-card reveal interactive-card" data-tilt>
                        <div class="service-icon" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-code-icon lucide-code">
                                <path d="m16 18 6-6-6-6" />
                                <path d="m8 6-6 6 6 6" />
                            </svg>
                        </div>
                        <h3><a href="https://www.behance.net/squadtechsolution/services/807663/Website-Design-Development"
                                target="_blank" rel="noreferrer">Web Development</a></h3>
                        <p>Stunning custom websites designed 100% free up front. If you absolutely love the results, you
                            pay us</p>
                    </article>
                    <article class="service-card reveal interactive-card" data-tilt>
                        <div class="service-icon" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="lucide lucide-messages-square-icon lucide-messages-square">
                                <path
                                    d="M16 10a2 2 0 0 1-2 2H6.828a2 2 0 0 0-1.414.586l-2.202 2.202A.71.71 0 0 1 2 14.286V4a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z" />
                                <path
                                    d="M20 9a2 2 0 0 1 2 2v10.286a.71.71 0 0 1-1.212.502l-2.202-2.202A2 2 0 0 0 17.172 19H10a2 2 0 0 1-2-2v-1" />
                            </svg>
                        </div>
                        <h3><a href="https://www.behance.net/squadtechsolution/services/809535/Dedicated-Remote-Staff"
                                target="_blank" rel="noreferrer">Dedicated Remote Staff</a></h3>
                        <p>Vetted tech and marketing experts ready to integrate into your workflow instantly to
                            accelerate scaling pipelines</p>
                    </article>
                </div>
                <div class="image-placeholder-grid">
                    <article class="image-placeholder reveal interactive-card" data-media-card data-tilt>
                        <div class="image-placeholder-surface">
                            <img src="{{ asset('images/service-1.avif') }}" alt="" loading="lazy" decoding="async">
                        </div>
                    </article>
                    <article class="image-placeholder reveal interactive-card" data-media-card data-tilt>
                        <div class="image-placeholder-surface image-placeholder-surface--alt">
                            <img src="{{ asset('images/service-2.avif') }}" alt="" loading="lazy" decoding="async">
                        </div>
                    </article>
                </div>
                <div class="section-action reveal">
                    <a href="services" class="secondary-button magnetic-button">Open Services Page</a>
                </div>
            </div>
        </section>

        <section class="page-section">
            <div class="section-inner">
                <div class="section-head">
                    <div class="reveal max-w-2xl">
                        <p class="eyebrow">OUR WORK ETHIC</p>
                        <h2 class="section-title">The Hungry Agency Built to Out-Work the Rest</h2>
                    </div>
                    <p class="section-copy reveal">
                        We don't settle for average frameworks. Watch how our rapid digital engineering sprints turn
                        concepts into cash
                    </p>
                </div>
                <div class="video-placeholder-grid">
                    <article class="video-placeholder reveal interactive-card" data-scroll-panel data-tilt>
                        <div class="video-placeholder-frame">
                            <div class="video-placeholder-screen">
                                <video autoplay muted playsinline preload="none">
                                    <source src="{{ asset('videos/Social Media Marketing.mp4') }}" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </article>
                    <article class="video-placeholder reveal interactive-card" data-scroll-panel data-tilt>
                        <div class="video-placeholder-frame">
                            <div class="video-placeholder-screen">
                                <video autoplay muted playsinline preload="none">
                                    <source src="{{ asset('videos/video-presence-2.mp4') }}" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </article>
                    <article class="video-placeholder reveal interactive-card" data-scroll-panel data-tilt>
                        <div class="video-placeholder-frame">
                            <video autoplay muted playsinline preload="none">
                                <source src="{{ asset('videos/video-presence-3.mp4') }}" type="video/mp4">
                            </video>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="page-section">
            <div class="section-inner split-layout">
                <div class="about-visual reveal interactive-card" data-tilt>
                    <div class="about-badge">OUR ZERO RISK</div>
                    <div class="about-visual-copy">
                        <p class="mini-label">We build digital solutions with the extreme hustle of an elite squad</p>
                        <h3>Digital Presence Designed with Product Precision</h3>
                    </div>
                    <div class="about-metrics">
                        <div class="about-metric">
                            <p>0$</p>
                            <span>Upfront Design Fee</span>
                        </div>
                        <div class="about-metric">
                            <p>30d</p>
                            <span>Full Cash Back Promise</span>
                        </div>
                    </div>
                </div>
                <div class="about-copy reveal">
                    <p class="eyebrow">About</p>
                    <h2 class="section-title">Sparking Rapid Growth and Authentic Scaling</h2>
                    <p class="section-copy">
                        Squad Tech Solution pairs up with ambitious startups and scaling enterprises that demand genuine
                        business outcomes over empty promises. We inject extreme creative energy, aggressive conversion
                        strategies, and flawless technical architecture to outpace competitors
                    </p>
                    <div class="feature-list">
                        <div class="feature-list-card interactive-card" data-tilt>
                            <h3>Outcome-driven work</h3>
                            <p>We anchor your product positioning and user acquisition goals into raw conversion maps
                                before coding</p>
                        </div>
                        <div class="feature-list-card interactive-card" data-tilt>
                            <h3>Ruthless execution</h3>
                            <p>Every detail counts: ultra-fast page speeds, flawless interface animations, and pristine
                                code.</p>
                        </div>
                    </div>
                    <a href="/about" class="secondary-button magnetic-button">Lean More</a>
                </div>
            </div>
        </section>

        <section class="page-section">
            <div class="section-inner">
                <div class="section-head">
                    <div class="reveal max-w-2xl">
                        <p class="eyebrow">Portfolio</p>
                        <h2 class="section-title">Engineered case studies showcasing raw conversions and flawless
                            styling</h2>
                    </div>
                    <a href="/portfolio" class="secondary-button magnetic-button reveal">View All Outcomes</a>
                </div>
                <div class="portfolio-grid">
                    <article class="portfolio-feature reveal interactive-card" data-tilt>
                        <div class="portfolio-content">
                            <p class="eyebrow">SMM & MARKETING</p>
                            <h3>A high-velocity viral social campaign that scaled pipeline metrics fast</h3>
                            <p class="soft-copy">Deployed hyper-targeted paid ads paired with dynamic content loops to
                                optimize lead capture and drive transactional volume</p>
                            <div class="portfolio-metrics">
                                <div class="metric-chip">
                                    <strong>+180%</strong>
                                    <span>Leads Generated</span>
                                </div>
                                <div class="metric-chip">
                                    <strong>-45%</strong>
                                    <span>Ad Spend Waste</span>
                                </div>
                            </div>
                        </div>
                    </article>
                    <div class="portfolio-stack">
                        <article class="portfolio-card reveal interactive-card" data-tilt>
                            <p class="eyebrow">WEB DESIGN</p>
                            <h3>Custom website architecture designed completely free to clear risk</h3>
                            <p>High-converting landing page layouts built to establish massive trust and accelerate book
                                calls.</p>
                        </article>
                        <article class="portfolio-card reveal interactive-card" data-tilt>
                            <p class="eyebrow">SEO & ACQUISITION</p>
                            <h3> Aggressive keyword ranking sprint that secured immediate inbound calls</h3>
                            <p>Technical code optimization and intent-focused content mapping to dominate organic lists
                            </p>
                        </article>
                    </div>
                </div>
                <div class="image-placeholder-grid">
                    <article class="image-placeholder reveal interactive-card" data-media-card data-tilt>
                        <div class="image-placeholder-surface">
                            <img src="{{ asset('images/portfolio-1.avif') }}" alt="" loading="lazy" decoding="async">
                        </div>
                    </article>
                    <article class="image-placeholder reveal interactive-card" data-media-card data-tilt>
                        <div class="image-placeholder-surface image-placeholder-surface--alt">
                            <img src="{{ asset('images/portfolio-2.avif') }}" alt="" loading="lazy" decoding="async">
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="page-section">
            <div class="section-inner">
                <div class="section-head">
                    <div class="reveal max-w-2xl">
                        <p class="eyebrow">Testimonials</p>
                        <h2 class="section-title">Validated by Founders Who Demand Direct Outcomes</h2>
                    </div>
                    <p class="section-copy reveal">
                        Our clients value speed and certainty: bold conversion pipelines, striking creative assets, and
                        software optimized to close inbound deals.
                    </p>
                </div>
                <div class="testimonial-grid">
                    <article class="testimonial-card reveal interactive-card" data-tilt>
                        <blockquote>
                            “Their marketing guarantee gave us complete peace of mind. Within weeks, our content views
                            multiplied and user acquisition costs dropped”
                        </blockquote>
                        <div class="testimonial-meta">
                            <div>
                                <h3>Alistair Vance</h3>
                                <p class="testimonial-role">Chief Product Officer, NexaCorp Industries (United Kingdom)
                                </p>
                            </div>
                            <p class="eyebrow">SaaS</p>
                        </div>
                    </article>
                    <article class="testimonial-card reveal interactive-card" data-tilt>
                        <blockquote>
                            “Because they are a hungry team, they worked around the clock to deliver. The tailored
                            software application works absolutely flawlessly”
                        </blockquote>
                        <div class="testimonial-meta">
                            <div>
                                <h3>Elena Rostova</h3>
                                <p class="testimonial-role">Director of Brand Experience, Veloce Digital (Germany)</p>
                            </div>
                            <p class="eyebrow">Growth</p>
                        </div>
                    </article>
                    <article class="testimonial-card reveal interactive-card" data-tilt>
                        <blockquote>
                            “What stood out most was the combination of design taste and implementation quality. Nothing
                            felt generic, and nothing felt fragile.”
                        </blockquote>
                        <div class="testimonial-meta">
                            <div>
                                <h3>Aris Thorne</h3>
                                <p class="testimonial-role">Founder & CEO, Lumina Ventures (United States)</p>
                            </div>
                            <p class="eyebrow">Product</p>
                        </div>
                    </article>
                    <article class="testimonial-card reveal interactive-card" data-tilt>
                        <blockquote>
                            “What stood out most was the combination of design taste and implementation quality. Nothing
                            felt generic, and nothing felt fragile.”
                        </blockquote>
                        <div class="testimonial-meta">
                            <div>
                                <h3>Marcus Vance</h3>
                                <p class="testimonial-role">VP of Marketing at Aether Digital</p>
                            </div>
                            <p class="eyebrow">Product</p>
                        </div>
                    </article>
                    <article class="testimonial-card reveal interactive-card" data-tilt>
                        <blockquote>
                            “Squad Tech is elite. They handled our platform's scale effortlessly and delivered high-end
                            video assets, moving fast without sacrificing quality.”
                        </blockquote>
                        <div class="testimonial-meta">
                            <div>
                                <h3>Linnea Holm</h3>
                                <p class="testimonial-role">Chief Technology Officer at Synapse Global</p>
                            </div>
                            <p class="eyebrow">Product</p>
                        </div>
                    </article>
                    <article class="testimonial-card reveal interactive-card" data-tilt>
                        <blockquote>
                            “Squad Tech delivered flawlessly from web development to premium video production, operating
                            with the speed, precision, and drive of true tech entrepreneurs.”
                        </blockquote>
                        <div class="testimonial-meta">
                            <div>
                                <h3>Sarah Jenkins</h3>
                                <p class="testimonial-role">Chief Operating Officer at Horizon Scale Media (New York,
                                    USA)</p>
                            </div>
                            <p class="eyebrow">Product</p>
                        </div>
                    </article>
                </div>
                <div class="image-placeholder-grid">
                    <article class="image-placeholder reveal interactive-card" data-media-card data-tilt>
                        <div class="image-placeholder-surface">
                            <img src="{{ asset('images/testimonials-1.avif') }}" alt="" loading="lazy" decoding="async">
                        </div>
                    </article>
                    <article class="image-placeholder reveal interactive-card" data-media-card data-tilt>
                        <div class="image-placeholder-surface image-placeholder-surface--alt">
                            <img src="{{ asset('images/testimonials-2.avif') }}" alt="" loading="lazy" decoding="async">
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="page-section">
            <div class="section-inner">
                <div class="section-head">
                    <div class="reveal max-w-2xl">
                        <p class="eyebrow">FAQ</p>
                        <h2 class="section-title">Everything you need to know about our zero-risk development model
                        </h2>
                    </div>
                </div>
                <div class="accordion-list reveal" data-faq-categories="general,process,services,cost,results"></div>
            </div>
        </section>

        <section class="page-section">
            <div class="section-inner">
                <div class="cta-panel reveal interactive-card" data-tilt>
                    <div class="cta-copy">
                        <p class="eyebrow">Let's build</p>
                        <h2 class="section-title">Deploy a High-Converting Strategy, Risk-Free</h2>
                        <p class="section-copy">
                            Book a free breakthrough call with our hungry engineering team today. Let us draft your
                            layout risk-free and build a digital identity worth talking about.
                        </p>
                    </div>
                    <div class="cta-actions">
                        <a href="mailto:inquiry@squadtechsol.com"
                            class="primary-button magnetic-button">inquiry@squadtechsol.com</a>
                        <a href="https://calendly.com/squadtechsolution/inquiry"
                            class="secondary-button magnetic-button" target="_blank" rel="noreferrer">Schedule a
                            Discovery Call</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-app-layout>