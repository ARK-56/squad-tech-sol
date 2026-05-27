<x-app-layout :page="'portfolio'">
  <main>
    <section class="page-section inner-hero">
      <div class="section-inner inner-hero-grid">
        <div>
          <p class="eyebrow reveal">Portfolio</p>
          <h1 class="page-title reveal">High-End Aesthetics. Product-Grade Outcomes</h1>
          <p class="section-copy reveal max-w-3xl">Browse a selection of projects shaped around better performance,
            clearer user journeys, and stronger digital positioning.</p>
          <div class="filter-row reveal"><button class="filter-chip is-active" type="button"
              data-filter="all">All</button><button class="filter-chip" type="button" data-filter="social">Social Media
              Marketing</button><button class="filter-chip" type="button" data-filter="seo">SEO &amp;
              PPC</button><button class="filter-chip" type="button" data-filter="brand">Brand Identity</button><button
              class="filter-chip" type="button" data-filter="media">Media Production</button><button class="filter-chip"
              type="button" data-filter="web">Web Development</button><button class="filter-chip" type="button"
              data-filter="remote">Dedicated Remote Staff</button></div>
        </div>
        <div class="hero-side-card reveal interactive-card" data-tilt>
          <p class="eyebrow">Results</p>
          <h3>Where Premium Design Meets Commercial Utility</h3>
          <p class="section-copy">Every pixel we place and line of code we write serves a dual purpose: earning user
            trust and driving relentless business momentum. That balance is where engineering becomes profitable</p>
        </div>
      </div>
    </section>
    <section class="page-section">
      <div class="section-inner portfolio-page-grid"><a
          href="https://www.behance.net/gallery/247938143/LogoFolio?tracking_source=services_modal"
          class="portfolio-feature reveal interactive-card filter-item" data-tilt data-category="brand" target="_blank"
          rel="noreferrer">
          <div class="portfolio-content">
            <p class="eyebrow">Brand Identity</p>
            <h3>LogoFolio</h3>
            <p class="soft-copy">Distinctive identity exploration and clean presentation crafted to maximize brand
              recall from day one</p>
            <div class="portfolio-metrics">
              <div class="metric-chip"><strong>Identity</strong><span>Brand System</span></div>
              <div class="metric-chip"><strong>Visual</strong><span>Recognition</span></div>
            </div>
          </div>
        </a><a
          href="https://www.behance.net/gallery/248339605/AAA-DME-INC-Brand-Identity?tracking_source=services_modal"
          class="portfolio-card reveal interactive-card filter-item" data-tilt data-category="brand" target="_blank"
          rel="noreferrer">
          <p class="eyebrow">Brand Identity</p>
          <h3>AAA DME INC Brand Identity</h3>
          <p>Structured identity systems engineered to project market authority and flawless corporate consistency</p>
        </a><a href="https://www.behance.net/gallery/246970917/Dexsora-Brand-Identity?tracking_source=services_modal"
          class="portfolio-card reveal interactive-card filter-item" data-tilt data-category="brand" target="_blank"
          rel="noreferrer">
          <p class="eyebrow">Brand Identity</p>
          <h3>Dexsora Brand Identity</h3>
          <p>High-end visual positioning built to communicate modern clarity, luxury aesthetics, and immediate trust</p>
        </a><a href="https://www.behance.net/gallery/247938555/Websites-Design-Showcase?tracking_source=services_modal"
          class="portfolio-card reveal interactive-card filter-item" data-tilt data-category="social" target="_blank"
          rel="noreferrer">
          <p class="eyebrow">Social Media Marketing</p>
          <h3>Websites Design Showcase</h3>
          <p>Campaign-style presentation work shaped for stronger visibility, polished storytelling, and brand-led
            promotion.</p>
        </a><a href="https://www.behance.net/gallery/247938555/Websites-Design-Showcase?tracking_source=services_modal"
          class="portfolio-card reveal interactive-card filter-item" data-tilt data-category="web" target="_blank"
          rel="noreferrer">
          <p class="eyebrow">Web Development</p>
          <h3>Websites Design Showcase</h3>
          <p>Responsive, lightning-fast digital assets focused on frictionless user journeys and premium conversion
            rates</p>
        </a><a href="https://www.behance.net/gallery/248129751/Dedicated-Remote-Staff?tracking_source=services_modal"
          class="portfolio-card reveal interactive-card filter-item" data-tilt data-category="remote" target="_blank"
          rel="noreferrer">
          <p class="eyebrow">Dedicated Remote Staff</p>
          <h3>Dedicated Remote Staff</h3>
          <p>Operational engineering built around dependable execution, embedded alignment, and scalable remote talent.
          </p>
        </a><a
          href="https://www.behance.net/gallery/248130301/Photoshoot-Behind-the-Scenes?tracking_source=services_modal"
          class="portfolio-card reveal interactive-card filter-item" data-tilt data-category="media" target="_blank"
          rel="noreferrer">
          <p class="eyebrow">Media Production</p>
          <h3>Photoshoot Behind the Scenes</h3>
          <p>Creative production coverage highlighting the meticulous process and elite polish behind high-performing
            campaign assets</p>
        </a><a
          href="https://www.behance.net/gallery/248131599/Professional-Media-Production-for-Every-Need?tracking_source=services_modal"
          class="portfolio-card reveal interactive-card filter-item" data-tilt data-category="media" target="_blank"
          rel="noreferrer">
          <p class="eyebrow">Media Production</p>
          <h3>Professional Media Production for Every Need</h3>
          <p>Versatile commercial production framed around sharp visual storytelling and flawless execution</p>
        </a><a
          href="https://www.behance.net/gallery/248123881/SEO-vs-PPC-Whats-the-Difference?tracking_source=services_modal"
          class="portfolio-card reveal interactive-card filter-item" data-tilt data-category="seo" target="_blank"
          rel="noreferrer">
          <p class="eyebrow">SEO &amp; PPC</p>
          <h3>SEO vs PPC: What's the Difference?</h3>
          <p>Data-backed visibility strategy centered around high-intent traffic acquisition and transparent performance
            metrics</p>
        </a></div>
    </section>
    <section class="page-section">
      <div class="section-inner">
        <div class="section-head">
          <div class="reveal max-w-2xl">
            <p class="eyebrow">Presentation Layer</p>
            <h2 class="section-title">A First Look at Tomorrow's Market Leaders
            </h2>
          </div>
          <p class="section-copy reveal">A dedicated preview space showcasing initial concepts, raw interfaces, campaign
            mood boards, and before-and-after transformations. This is where high-impact digital products take their
            first breath before scaling the bottom line.</p>
        </div>
        <div class="media-mosaic">
          <article class="image-placeholder reveal interactive-card" data-media-card data-tilt>
            <div class="image-placeholder-surface">
              <video autoplay loop>
                <source src="{{ asset('videos/presentation-layer-1.mp4') }}" type="video/mp4">
              </video>
            </div>
          </article>
          <article class="image-placeholder reveal interactive-card" data-media-card data-tilt>
            <div class="image-placeholder-surface image-placeholder-surface--alt">
              <img src="{{ asset('images/presentation-layer-2.png') }}" alt="">
            </div>
          </article>
          <article class="image-placeholder reveal interactive-card" data-media-card data-tilt>
            <div class="image-placeholder-surface">
              <img src="{{ asset('images/presentation-layer-3.png') }}" alt="">
            </div>
          </article>
        </div>
      </div>
    </section>
    <section class="page-section">
      <div class="section-inner">
        <div class="detail-grid">
          <article class="detail-card reveal interactive-card" data-tilt>
            <span class="card-icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" class="lucide lucide-view-icon lucide-view">
                <path d="M21 17v2a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-2" />
                <path d="M21 7V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2" />
                <circle cx="12" cy="12" r="1" />
                <path d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0" />
              </svg></span>
            <h3>No-Fluff Storytelling</h3>
            <p>We strip away the typical agency jargon. Project data and messaging are engineered so your visitors
              instantly understand your value instead of hunting for it.</p>
          </article>
          <article class="detail-card reveal interactive-card" data-tilt>
            <span class="card-icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" class="lucide lucide-mouse-pointer-click-icon lucide-mouse-pointer-click">
                <path d="M14 4.1 12 6" />
                <path d="m5.1 8-2.9-.8" />
                <path d="m6 12-1.9 2" />
                <path d="M7.2 2.2 8 5.1" />
                <path
                  d="M9.037 9.69a.498.498 0 0 1 .653-.653l11 4.5a.5.5 0 0 1-.074.949l-4.349 1.041a1 1 0 0 0-.74.739l-1.04 4.35a.5.5 0 0 1-.95.074z" />
              </svg></span>
            <h3>Premium Interaction Pacing</h3>
            <p>Every hover state, section transition, and layout density change is meticulously tuned. We build slick,
              fast interfaces that feel elite without overwhelming the user.</p>
          </article>
          <article class="detail-card reveal interactive-card" data-tilt>
            <span class="card-icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" class="lucide lucide-square-activity-icon lucide-square-activity">
                <rect width="18" height="18" x="3" y="3" rx="2" />
                <path d="M17 12h-2l-2 5-2-10-2 5H7" />
              </svg></span>
            <h3>Design Tied to Revenue</h3>
            <p>We treat user interface decisions as growth decisions. Every pixel is placed with intent—directly tying
              design aesthetics back to user trust, action, and customer retention.</p>
          </article>
        </div>
        <div class="image-placeholder-grid">
          <article class="image-placeholder reveal interactive-card" data-media-card data-tilt>
            <div class="image-placeholder-surface">
              <img src="{{ asset('images/presentation-layer-4.png') }}" alt="">
            </div>
          </article>
          <article class="image-placeholder reveal interactive-card" data-media-card data-tilt>
            <div class="image-placeholder-surface image-placeholder-surface--alt">
              <video autoplay loop>
                <source src="{{ asset('videos/presentation-layer-3.mp4') }}" type="video/mp4">
              </video>
            </div>
          </article>
        </div>
      </div>
    </section>

    <section class="page-section">
      <div class="section-inner">
        <div class="section-head">
          <div class="reveal max-w-2xl">
            <p class="eyebrow">Impact Areas</p>
            <h2 class="section-title">What Explodes When the Experience Gets Intentional</h2>
            <p class="section-copy">Most of our portfolio work starts with striking visuals, but the end result is
              always deeper user trust, frictionless comprehension, and accelerated user action.</p>
          </div>
        </div>
        <div class="detail-grid">
          <article class="detail-card reveal interactive-card" data-tilt>
            <span class="card-icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" class="lucide lucide-hd-icon lucide-hd">
                <path d="M10 12H6" />
                <path d="M10 15V9" />
                <path
                  d="M14 14.5a.5.5 0 0 0 .5.5h1a2.5 2.5 0 0 0 2.5-2.5v-1A2.5 2.5 0 0 0 15.5 9h-1a.5.5 0 0 0-.5.5z" />
                <path d="M6 15V9" />
                <rect x="2" y="5" width="20" height="14" rx="2" />
              </svg></span>
            <h3>Commanding Quality</h3>
            <p>Brands feel instantly established when layout, typography, and motion systems align seamlessly instead of
              feeling patched together</p>
          </article>
          <article class="detail-card reveal interactive-card" data-tilt>
            <span class="card-icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" class="lucide lucide-book-user-icon lucide-book-user">
                <path d="M15 13a3 3 0 1 0-6 0" />
                <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H19a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H6.5a1 1 0 0 1 0-5H20" />
                <circle cx="12" cy="8" r="2" />
              </svg></span>
            <h3>Frictionless Comprehension</h3>
            <p>Visitors absorb your value proposition in seconds when content pacing, visual hierarchy, and CTA
              placement work in perfect harmony</p>
          </article>
          <article class="detail-card reveal interactive-card" data-tilt>
            <span class="card-icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" class="lucide lucide-store-icon lucide-store">
                <path d="M15 21v-5a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v5" />
                <path
                  d="M17.774 10.31a1.12 1.12 0 0 0-1.549 0 2.5 2.5 0 0 1-3.451 0 1.12 1.12 0 0 0-1.548 0 2.5 2.5 0 0 1-3.452 0 1.12 1.12 0 0 0-1.549 0 2.5 2.5 0 0 1-3.77-3.248l2.889-4.184A2 2 0 0 1 7 2h10a2 2 0 0 1 1.653.873l2.895 4.192a2.5 2.5 0 0 1-3.774 3.244" />
                <path d="M4 10.95V19a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8.05" />
              </svg></span>
            <h3>Aggressive Conversion</h3>
            <p>Stripping away interface hesitation builds instant commercial trust—creating the perfect conditions for
              demos, signups, and customer acquisition.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="page-section">
      <div class="section-inner">
        <div class="section-head">
          <div class="reveal max-w-2xl">
            <p class="eyebrow">Common Wins</p>
            <h2 class="section-title">The Patterns of Profitable Redesigns</h2>
            <p class="section-copy">Every product rollout is distinct, but when engineering is done with pure commercial
              intent, the performance gains show up in the exact same places</p>
          </div>
        </div>
        <div class="interactive-badge-row reveal">
          <div class="interactive-badge">Surging Demo Intent</div>
          <div class="interactive-badge">Ironclad Visual Authority</div>
          <div class="interactive-badge">Frictionless Product Clarity</div>
          <div class="interactive-badge">Zero-Hesitation Checkouts</div>
          <div class="interactive-badge">Mobile-First Conversions</div>
        </div>
      </div>
    </section>

  </main>
</x-app-layout>