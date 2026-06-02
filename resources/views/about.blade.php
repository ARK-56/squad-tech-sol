<x-app-layout :page="'about'">
    <main>
        <section class="page-section inner-hero">
            <div class="section-inner inner-hero-grid">
                <div>
                    <p class="eyebrow reveal">About</p>
                    <h1 class="page-title reveal">Hyper-aggressive growth with zero upfront risk</h1>
                    <p class="section-copy reveal max-w-3xl">Squad Tech Solution breaks the standard agency mold. We
                        scale your business with total transparency, zero upfront risk, and pure relentless hustle</p>
                </div>
                <div class="hero-side-card reveal interactive-card" data-tilt>
                    <p class="eyebrow">Positioning</p>
                    <h3>We build elite digital platforms that turn cold traffic into active revenue</h3>
                    <p class="section-copy">Our results stem from raw conversion loops, flawless engineering, and our
                        guaranteed high-impact SMM framework</p>
                </div>
            </div>
        </section>
        <section class="page-section">
            <div class="section-inner split-layout">
                <div class="about-visual reveal interactive-card" data-tilt>
                    <div class="about-badge">Process</div>
                    <div class="about-visual-copy">
                        <p class="mini-label">Discover, shape, build</p>
                        <h3>Ruthlessly focused on the story, interface, and business outcome</h3>
                    </div>
                    <div class="about-metrics">
                        <div class="about-metric">
                            <p>01</p><span>Clarify positioning</span>
                        </div>
                        <div class="about-metric">
                            <p>02</p><span>Design the experience</span>
                        </div>
                    </div>
                </div>
                <div class="about-copy reveal">
                    <h2 class="section-title">Collaborative, fast-moving, and detail-obsessed</h2>
                    <p class="section-copy">Our approach is fast-moving, collaborative, and completely
                        conversion-obsessed. We partner with founders and marketing teams to command market attention,
                        capture qualified leads, and perform flawlessly in production. That means razor-sharp visual
                        hierarchy, clear systems, and technical precision from day one</p>
                    <div class="feature-list">
                        <div class="feature-list-card interactive-card" data-tilt>
                            <h3>Visual conviction</h3>
                            <p>Zero templates. Every interface is custom-built around your brand identity to dominate
                                your market, not for our convenience</p>
                        </div>
                        <div class="feature-list-card interactive-card" data-tilt>
                            <h3>Technical clarity</h3>
                            <p>Scalable architectures, reusable frontends, and lightning-fast deployment are engineered
                                right into the initial design process</p>
                        </div>
                        <div class="feature-list-card interactive-card" data-tilt>
                            <h3>Business alignment</h3>
                            <p>Every single section, user interaction, and CTA is designed to drive a specific business
                                outcome, not just look refined</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section">
            <div class="section-inner">
                <div class="section-head">
                    <div class="reveal max-w-2xl">
                        <p class="eyebrow">Visual Direction</p>
                        <h2 class="section-title">Real proof of raw execution and premium production</h2>
                    </div>
                    <p class="section-copy reveal">
                        {{-- These slots are ready for team reels, behind-the-scenes visuals,
                        workspace stills, or mood-driven launch assets. --}}
                    </p>
                </div>
                <div class="media-mosaic">
                    <article class="video-placeholder reveal interactive-card" data-scroll-panel data-media-card
                        data-tilt>
                        <div class="video-placeholder-frame">
                            <div class="video-placeholder-screen">
                                <video autoplay muted>
                                    <source src="{{ asset('videos/Dedicated Teams.mp4') }}" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </article>
                    <article class="image-placeholder reveal interactive-card" data-media-card data-tilt>
                        <div class="image-placeholder-surface">
                            <img src="{{ asset('images/visual-direction-1.avif') }}" alt="">
                        </div>
                    </article>
                    <article class="image-placeholder reveal interactive-card" data-media-card data-tilt>
                        <div class="image-placeholder-surface image-placeholder-surface--alt">
                            <img src="{{ asset('images/visual-direction-2.avif') }}" alt="">
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <section class="page-section">
            <div class="section-inner">
                <div class="section-head">
                    <div class="reveal max-w-2xl">
                        <p class="eyebrow">Principles</p>
                        <h2 class="section-title">The elite standards driving our deployments</h2>
                    </div>
                </div>
                <div class="detail-grid">
                    <article class="detail-card reveal interactive-card" data-tilt>
                        <span class="card-icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-shapes-icon lucide-shapes">
                                <path
                                    d="M8.3 10a.7.7 0 0 1-.626-1.079L11.4 3a.7.7 0 0 1 1.198-.043L16.3 8.9a.7.7 0 0 1-.572 1.1Z" />
                                <rect x="3" y="14" width="7" height="7" rx="1" />
                                <circle cx="17.5" cy="17.5" r="3.5" />
                            </svg></span>
                        <h3>Clarity over clutter</h3>
                        <p>We strip away the visual noise so your brand message hits hard and your interface commands
                            immediate authority</p>
                    </article>
                    <article class="detail-card reveal interactive-card" data-tilt>
                        <span class="card-icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-link-icon lucide-link">
                                <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71" />
                                <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71" />
                            </svg></span>
                        <h3>Depth with restraint</h3>
                        <p>Sleek layering, subtle gradients, and clean motion design build premium atmosphere without
                            dragging down load speeds</p>
                    </article>
                    <article class="detail-card reveal interactive-card" data-tilt>
                        <span class="card-icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-paintbrush-icon lucide-paintbrush">
                                <path d="m14.622 17.897-10.68-2.913" />
                                <path
                                    d="M18.376 2.622a1 1 0 1 1 3.002 3.002L17.36 9.643a.5.5 0 0 0 0 .707l.944.944a2.41 2.41 0 0 1 0 3.408l-.944.944a.5.5 0 0 1-.707 0L8.354 7.348a.5.5 0 0 1 0-.707l.944-.944a2.41 2.41 0 0 1 3.408 0l.944.944a.5.5 0 0 0 .707 0z" />
                                <path
                                    d="M9 8c-1.804 2.71-3.97 3.46-6.583 3.948a.507.507 0 0 0-.302.819l7.32 8.883a1 1 0 0 0 1.185.204C12.735 20.405 16 16.792 16 15" />
                            </svg></span>
                        <h3>Polish that performs</h3>
                        <p>We obsess over hyper-responsive quality, clean code, and micro-interactions that users
                            instinctively feel and trust</p>
                    </article>
                </div>
                <div class="image-placeholder-grid">
                    <article class="image-placeholder reveal interactive-card" data-media-card data-tilt>
                        <div class="image-placeholder-surface">
                            <img src="{{ asset('images/principles-1.avif') }}" alt="">
                        </div>
                    </article>
                    <article class="image-placeholder reveal interactive-card" data-media-card data-tilt>
                        <div class="image-placeholder-surface image-placeholder-surface--alt">
                            <img src="{{ asset('images/principles-2.avif') }}" alt="">
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="page-section">
            <div class="section-inner">
                <div class="section-head">
                    <div class="reveal max-w-2xl">
                        <p class="eyebrow">What Clients Feel</p>
                        <h2 class="section-title">High-velocity experiences engineered into every project
                        </h2>
                        <p class="section-copy">Beyond premium visuals, our workflow ensures total clarity and rapid
                            momentum from the initial strategy call to final delivery</p>
                    </div>
                </div>
                <div class="detail-grid">
                    <article class="detail-card reveal interactive-card" data-tilt>
                        <span class="card-icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-book-up-icon lucide-book-up">
                                <path d="M12 13V7" />
                                <path
                                    d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H19a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H6.5a1 1 0 0 1 0-5H20" />
                                <path d="m9 10 3-3 3 3" />
                            </svg></span>
                        <h3>Confidence</h3>
                        <p>Crystal-clear page logic and data-driven frameworks prove your message is hitting the exact
                            target audience</p>
                    </article>
                    <article class="detail-card reveal interactive-card" data-tilt>
                        <span class="card-icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-move-right-icon lucide-move-right">
                                <path d="M18 8L22 12L18 16" />
                                <path d="M2 12H22" />
                            </svg></span>
                        <h3>Momentum</h3>
                        <p>We maintain rapid execution with tight, focused feedback loops to keep project velocity at
                            its absolute peak.</p>
                    </article>
                    <article class="detail-card reveal interactive-card" data-tilt>
                        <span class="card-icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-chess-queen-icon lucide-chess-queen">
                                <path d="M4 20a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v1a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1z" />
                                <path d="m12.474 5.943 1.567 5.34a1 1 0 0 0 1.75.328l2.616-3.402" />
                                <path d="m20 9-3 9" />
                                <path d="m5.594 8.209 2.615 3.403a1 1 0 0 0 1.75-.329l1.567-5.34" />
                                <path d="M7 18 4 9" />
                                <circle cx="12" cy="4" r="2" />
                                <circle cx="20" cy="7" r="2" />
                                <circle cx="4" cy="7" r="2" />
                            </svg></span>
                        <h3>Ownership</h3>
                        <p>Zero template handoffs. You get a high-performing, custom digital asset your team is proud to
                            stand behind and weaponize.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="page-section">
            <div class="section-inner">
                <div class="section-head">
                    <div class="reveal max-w-2xl">
                        <p class="eyebrow">Working Style</p>
                        <h2 class="section-title">Fast-tracking collaboration and communication during execution
                        </h2>
                        <p class="section-copy">No corporate fluff. Just direct communication, daily visible progress,
                            and strategic design choices explained in plain language</p>
                    </div>
                </div>
                <div class="interactive-badge-row reveal">
                    <div class="interactive-badge">Fast feedback loops</div>
                    <div class="interactive-badge">Clear design rationale</div>
                    <div class="interactive-badge">Production-minded delivery</div>
                    <div class="interactive-badge">Low-friction collaboration</div>
                    <div class="interactive-badge">Elite visual standards</div>
                </div>
            </div>
        </section>

        <section class="page-section">
            <div class="section-inner">
                <div class="section-head">
                    <div class="reveal max-w-2xl">
                        <p class="eyebrow">FAQ</p>
                        <h2 class="section-title">Answers to questions teams ask before we build
                        </h2>
                    </div>
                </div>
                <div class="accordion-list reveal" data-faq-categories="general,process,services,cost,results"></div>
            </div>
        </section>
    </main>
</x-app-layout>