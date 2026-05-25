<x-app-layout :page="'contact'">
    <main>
        <section class="page-section inner-hero">
            <div class="section-inner inner-hero-grid">
                <div>
                    <p class="eyebrow reveal">Contact</p>
                    <h1 class="page-title reveal">Bring the brief, the ambition, or the rough idea. We'll shape the
                        rest.</h1>
                    <p class="section-copy reveal max-w-3xl">Reach out to plan a premium website, product redesign, or a
                        focused growth-oriented digital launch.</p>
                </div>
                <div class="hero-side-card reveal interactive-card" data-tilt>
                    <p class="eyebrow">Best fit</p>
                    <h3>Teams looking for a site that feels more intentional, more premium, and more conversion-ready.
                    </h3>
                    <p class="section-copy">If you already know the direction or just know the current site is not
                        enough, we can work from there.</p>
                </div>
            </div>
        </section>
        <section class="page-section">
            <div class="section-inner contact-grid">
                <div class="contact-panel reveal interactive-card" data-tilt>
                    <p class="eyebrow">Start a conversation</p>
                    <h2 class="section-title">Tell us what you're building.</h2>
                    <p class="section-copy">We typically align around goals, timeline, audience, and the level of
                        creative ambition you want the site to carry.</p>
                    <div class="contact-list"><a href="mailto:inquiry@squadtechsol.com"><span class="contact-link-icon"
                                aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7" />
                                    <rect x="2" y="4" width="20" height="16" rx="2" />
                                </svg></span><span>inquiry@squadtechsol.com</span></a><a href="tel:+12018206889"><span
                                class="contact-link-icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path
                                        d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" />
                                </svg></span><span>+1 (201) 820-6889</span></a><a
                            href="https://calendly.com/squadtechsolution/30min" target="_blank" rel="noreferrer"><span
                                class="contact-link-icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 640 640" fill="currentColor">
                                    <path
                                        d="M216 64C229.3 64 240 74.7 240 88L240 128L400 128L400 88C400 74.7 410.7 64 424 64C437.3 64 448 74.7 448 88L448 128L480 128C515.3 128 544 156.7 544 192L544 480C544 515.3 515.3 544 480 544L160 544C124.7 544 96 515.3 96 480L96 192C96 156.7 124.7 128 160 128L192 128L192 88C192 74.7 202.7 64 216 64zM216 176L160 176C151.2 176 144 183.2 144 192L144 240L496 240L496 192C496 183.2 488.8 176 480 176L216 176zM144 288L144 480C144 488.8 151.2 496 160 496L480 496C488.8 496 496 488.8 496 480L496 288L144 288z" />
                                </svg></span><span>Book a Call on Calendly</span></a></div>
                </div>
                <div class="contact-panel reveal interactive-card" data-tilt>
                    <p class="eyebrow">What to expect</p>
                    <div class="timeline-list">
                        <div class="timeline-item"><strong>01. Discovery</strong><span>We align on goals, users, and
                                tone.</span></div>
                        <div class="timeline-item"><strong>02. Concept</strong><span>We shape visual direction and page
                                narrative.</span></div>
                        <div class="timeline-item"><strong>03. Build</strong><span>We turn the approved direction into a
                                polished frontend.</span></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section">
            <div class="section-inner">
                <div class="section-head">
                    <div class="reveal max-w-2xl">
                        <p class="eyebrow">Contact Media</p>
                        <h2 class="section-title">Space for future intro clips, founder messages, and supporting
                            visuals.</h2>
                    </div>
                    <p class="section-copy reveal">
                        {{-- These placeholders can later become short welcome videos,
                        behind-the-scenes stills, or trust-building project snapshots. --}}
                    </p>
                </div>
                <div class="media-mosaic">
                    <article class="video-placeholder reveal interactive-card" data-scroll-panel data-media-card
                        data-tilt>
                        <div class="video-placeholder-frame">
                            <video autoplay>
                                <source src="{{ asset('videos/contact.mp4') }}" type="video/mp4">
                            </video>
                        </div>
                    </article>
                    <article class="image-placeholder reveal interactive-card" data-media-card data-tilt>
                        <div class="image-placeholder-surface">
                            <div class="image-placeholder-badge">Image Placeholder</div>
                            <h3>Team contact still</h3>
                        </div>
                    </article>
                    <article class="image-placeholder reveal interactive-card" data-media-card data-tilt>
                        <div class="image-placeholder-surface image-placeholder-surface--alt">
                            <div class="image-placeholder-badge">Image Placeholder</div>
                            <h3>Project kickoff frame</h3>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <section class="page-section">
            <div class="section-inner">
                <div class="section-head">
                    <div class="reveal max-w-2xl">
                        <p class="eyebrow">Inquiry Form</p>
                        <h2 class="section-title">Send your project details directly.</h2>
                        <p class="section-copy">Share your name, email, and a short message about what you need. We will
                            route inquiries to <a href="mailto:inquiry@squadtechsol.com">inquiry@squadtechsol.com</a>
                            and follow up from there.</p>
                    </div>
                </div>
                <form class="contact-form contact-panel reveal interactive-card" data-tilt>
                    <div class="form-status is-hidden" data-form-status></div>
                    <div class="form-grid">
                        <label class="form-field">
                            <span>Name</span>
                            <input class="form-input" type="text" name="name" maxlength="120" required
                                autocomplete="name" placeholder="Your full name">
                        </label>
                        <label class="form-field">
                            <span>Email</span>
                            <input class="form-input" type="email" name="email" maxlength="180" required
                                autocomplete="email" placeholder="you@company.com">
                        </label>
                    </div>
                    <label class="form-field">
                        <span>Message</span>
                        <textarea class="form-input form-textarea" name="message" rows="7" maxlength="3000" required
                            placeholder="Tell us about your project, goals, timeline, or anything else that helps."></textarea>
                    </label>
                    <div class="form-actions">
                        <button type="submit" class="primary-button magnetic-button">Send Inquiry</button>
                        <p class="form-note">Form inquiries are sent to inquiry@squadtechsol.com.</p>
                    </div>
                </form>
            </div>
        </section>

        <section class="page-section">
            <div class="section-inner">
                <div class="section-head">
                    <div class="reveal max-w-2xl">
                        <p class="eyebrow">Project Readiness</p>
                        <h2 class="section-title">You do not need a perfect brief to start the conversation.</h2>
                        <p class="section-copy">Some teams come with wireframes and copy. Others just know their current
                            site no longer reflects the level they want to operate at. Both are workable.</p>
                    </div>
                </div>
                <div class="detail-grid">
                    <article class="detail-card reveal interactive-card" data-tilt>
                        <span class="card-icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-signpost-icon lucide-signpost">
                                <path d="M12 13v8" />
                                <path d="M12 3v3" />
                                <path
                                    d="M2.354 10.354a1.207 1.207 0 0 1 0-1.708l2.06-2.06A2 2 0 0 1 5.828 6h12.344a2 2 0 0 1 1.414.586l2.06 2.06a1.207 1.207 0 0 1 0 1.708l-2.06 2.06a2 2 0 0 1-1.414.586H5.828a2 2 0 0 1-1.414-.586z" />
                            </svg></span>
                        <h3>If you have direction</h3>
                        <p>We can quickly translate existing strategy, brand inputs, and goals into a stronger digital
                            system and launch path.</p>
                    </article>
                    <article class="detail-card reveal interactive-card" data-tilt>
                        <span class="card-icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-circle-question-mark-icon lucide-circle-question-mark">
                                <circle cx="12" cy="12" r="10" />
                                <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" />
                                <path d="M12 17h.01" />
                            </svg></span>
                        <h3>If you need clarity</h3>
                        <p>We can help define the narrative, decide what matters most, and build a more focused
                            structure before design decisions accelerate.</p>
                    </article>
                    <article class="detail-card reveal interactive-card" data-tilt>
                        <span class="card-icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-rocket-icon lucide-rocket">
                                <path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5" />
                                <path
                                    d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09" />
                                <path
                                    d="M9 12a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.4 22.4 0 0 1-4 2z" />
                                <path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 .05 5 .05" />
                            </svg></span>
                        <h3>If you need speed</h3>
                        <p>We keep scope and collaboration tight so the project can move quickly without collapsing into
                            generic design shortcuts.</p>
                    </article>
                </div>
                <div class="image-placeholder-grid">
                    <article class="image-placeholder reveal interactive-card" data-media-card data-tilt>
                        <div class="image-placeholder-surface">
                            <div class="image-placeholder-badge">Image Placeholder</div>
                            <h3>Kickoff planning still</h3>
                        </div>
                    </article>
                    <article class="image-placeholder reveal interactive-card" data-media-card data-tilt>
                        <div class="image-placeholder-surface image-placeholder-surface--alt">
                            <div class="image-placeholder-badge">Image Placeholder</div>
                            <h3>Discovery session visual</h3>
                        </div>
                    </article>
                </div>
            </div>
        </section>

    </main>
</x-app-layout>