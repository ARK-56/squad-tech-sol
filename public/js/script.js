const body = document.body;
const revealNodes = document.querySelectorAll(".reveal");
const tiltNodes = document.querySelectorAll("[data-tilt]:not(.article-shell)");
const themeToggles = document.querySelectorAll(".theme-toggle");
const menuToggle = document.querySelector(".menu-toggle");
const mobileMenu = document.querySelector(".mobile-menu");
const filterChips = document.querySelectorAll(".filter-chip");
const filterItems = document.querySelectorAll(".filter-item");
const pageLoader = document.querySelector(".page-loader");
const pageLinks = document.querySelectorAll('a[href$=".html"]');
const themeLogos = document.querySelectorAll("[data-logo-dark]");
const formStatusNode = document.querySelector("[data-form-status]");
const faqGroups = document.querySelectorAll("[data-faq-categories]");
const magneticButtons = document.querySelectorAll(".magnetic-button");
const countUpNodes = document.querySelectorAll("[data-countup]");
const heroSection = document.querySelector(".hero-section");
const hasGsap = typeof window.gsap !== "undefined";
const hasScrollTrigger =
    hasGsap && typeof window.ScrollTrigger !== "undefined";
const prefersReducedMotion = window.matchMedia(
    "(prefers-reduced-motion: reduce)",
).matches;
const supportsFinePointer = window.matchMedia("(pointer: fine)").matches;
const cursorTargets = document.querySelectorAll(
    "a, button, [data-tilt], .filter-chip, .accordion-trigger, .theme-toggle",
);
const scrollPanels = document.querySelectorAll("[data-scroll-panel]");
const pageSections = document.querySelectorAll(".page-section");
const heroVideoPlaceholder = document.querySelector(".hero-video-placeholder");
const mediaCards = document.querySelectorAll("[data-media-card]");
const scrollProgress = document.querySelector(".scroll-progress");
const interactiveBadges = document.querySelectorAll(".interactive-badge");
const cardIcons = document.querySelectorAll(".card-icon");
const itemFlowGroups = document.querySelectorAll(
    ".services-grid, .detail-grid, .testimonial-grid, .portfolio-stack, .stats-grid, .video-placeholder-grid, .image-placeholder-grid, .media-mosaic, .interactive-badge-row, .feature-list, .contact-grid, .faq-category-accordion",
);

if (heroVideoPlaceholder) {
    heroVideoPlaceholder.querySelectorAll("video").forEach((video) => {
        video.pause();
    });
}

if (hasScrollTrigger) {
    window.gsap.registerPlugin(window.ScrollTrigger);
}

const faqs = [
    {
        cat: "general",
        q: "What exactly does Squadtech Solution do?",
        a: "We are a premium digital agency that designs and builds high-performance digital experiences for startups, service brands, and product-led companies. Our work spans brand identity, web design and development, social media marketing, SEO & PPC, media production, and dedicated remote staffing. Every project is shaped around a single goal: making your brand look, feel, and perform at the level you are actually aiming for.",
    },
    {
        cat: "general",
        q: "Who do you typically work with?",
        a: "Our clients tend to be founders, marketing leads, and product directors who know their current digital presence is not reflecting the quality of their business. We work across industries — fintech, SaaS, e-commerce, professional services, and more — but the common thread is ambition. Our clients are not looking for a generic template; they want something built specifically for where they are going.",
    },
    {
        cat: "general",
        q: "Are you a design agency, a development agency, or a marketing agency?",
        a: "All three, working as one. Most agencies split design and engineering, or treat marketing as a separate retainer. We intentionally keep these disciplines under one roof because the best digital results happen when your visual direction, your codebase, and your content strategy are built to reinforce each other — not handed off between different vendors.",
    },
    {
        cat: "process",
        q: "How does a typical project get started?",
        a: "It starts with a discovery call — usually 30 minutes — where we map out your positioning, goals, timeline, and where your current digital presence is falling short. From there we put together a focused proposal. Once aligned, we move into strategic discovery: understanding your offer, your users, and what the final experience needs to communicate before any design begins.",
    },
    {
        cat: "process",
        q: "How long does a project take from brief to delivery?",
        a: "Project timelines depend on scope. A brand identity system typically takes 2–4 weeks. A full website design and build ranges from 4–10 weeks depending on complexity. We are transparent about timelines upfront and do not pad them unnecessarily. We use focused feedback loops to keep the project moving without sacrificing quality at the final layer.",
    },
    {
        cat: "process",
        q: "How involved does our team need to be during the project?",
        a: "Involved at the right moments — not constantly. We handle the heavy lifting of strategy, design, and execution. What we need from you is clear feedback at defined review stages, answers to questions about your brand and audience early on, and final approvals before delivery. We design our process so that your time investment produces maximum impact rather than maximum meetings.",
    },
    {
        cat: "process",
        q: "Do you work with clients remotely or in-person?",
        a: "Fully remotely, and by design. Our team is distributed and has built a collaboration system specifically for async-first work — structured briefs, clear design rationale at every stage, and visible progress so nothing feels like a black box. Distance has never been a barrier to delivering premium work.",
    },
    {
        cat: "services",
        q: "Can you handle just one service, or do I need to take a bundle?",
        a: "Either works. Some clients come to us for a single service — a brand identity refresh, a new website, or an SEO strategy — while others engage us across multiple disciplines simultaneously. We are just as thorough on a focused single-service engagement as we are on a full integrated project. You do not need to buy more than you need.",
    },
    {
        cat: "services",
        q: "What does 'Dedicated Remote Staff' actually mean in practice?",
        a: "It means you get a skilled team member — or a small team — embedded into your workflow on a sustained basis. This works well for businesses that need consistent output (content creation, design work, marketing execution, operations support) but are not ready to hire full-time in-house. Your dedicated staff works within your tools and processes, not ours.",
    },
    {
        cat: "services",
        q: "Do you build on specific platforms or are you platform-agnostic?",
        a: "We are platform-agnostic by default. Our recommendations are driven by what best serves your business — whether that means a custom-built frontend, a CMS like Webflow or Framer, or a commerce platform like Shopify. We do not push clients toward tools that are convenient for us at the expense of what is right for the project.",
    },
    {
        cat: "cost",
        q: "How is your work priced?",
        a: "Projects are quoted on a per-scope basis, not by the hour. Once we understand your brief, we provide a fixed-price proposal so there are no surprises mid-project. Dedicated remote staff engagements are structured as monthly retainers. We are transparent about what is included and what falls outside scope before any agreement is signed.",
    },
    {
        cat: "cost",
        q: "Is there a minimum project size?",
        a: "We do not publish a hard minimum, but we are most effective — and you get the most value — on projects where there is genuine strategic intent behind the work. A one-page website built in a day is not something we are suited for. If you are not sure whether your project is the right fit, the discovery call is the best place to find out.",
    },
    {
        cat: "results",
        q: "How do you measure whether a project has been successful?",
        a: "Success is defined at the start, not after the fact. Before we design a single screen, we agree on what a successful outcome looks like for your business — whether that is demo bookings, conversion rate, time-on-site, brand perception, or launch speed. Every design decision is evaluated against those goals, not just whether it looks premium.",
    },
    {
        cat: "results",
        q: "Can you guarantee results like conversion lifts or traffic growth?",
        a: "No agency can ethically guarantee specific performance numbers — too many variables sit outside any agency's control. What we can guarantee is the quality of strategic thinking, visual execution, and implementation that creates the conditions for those results. We will always tell you what is realistic for your project, not what sounds impressive in a proposal.",
    },
    {
        cat: "results",
        q: "What happens after the project is delivered?",
        a: "Delivery is not a handoff and disappearance. We make sure your team is fully equipped to manage and operate what we have built — with documentation, a walkthrough, and a defined support window. For ongoing needs, many clients transition into a retainer or dedicated staff arrangement so the momentum built during the project does not stall.",
    },
];

const faqCategoryLabels = {
    general: "General",
    process: "Process",
    services: "Services",
    cost: "Cost",
    results: "Results",
};

const savedTheme = localStorage.getItem("squadtech-theme");
if (savedTheme === "light") {
    body.classList.add("light-theme");
}

function syncThemeLogos() {
    const useLightLogo = body.classList.contains("light-theme");

    themeLogos.forEach((logo) => {
        logo.src = useLightLogo
            ? logo.dataset.logoLight
            : logo.dataset.logoDark;
    });
}

syncThemeLogos();

function renderFaqGroups() {
    faqGroups.forEach((group) => {
        const categories = Object.keys(faqCategoryLabels);
        const limit = Number(group.dataset.faqLimit || "0");
        const groupedOutput = categories
            .map((category) => {
                const categoryItems = faqs.filter(
                    (item) => item.cat === category,
                );
                const output =
                    limit > 0 ? categoryItems.slice(0, limit) : categoryItems;

                if (!output.length) {
                    return "";
                }

                return `
          <div class="faq-category-group${category === categories[0] ? " is-active" : ""}" data-faq-panel="${category}">
            <div class="faq-category-head">
              <p class="faq-category-label">${faqCategoryLabels[category] || category}</p>
            </div>
            <div class="faq-category-accordion">
              ${output
                  .map(
                      (item, index) => `
                    <div class="accordion-item${index === 0 ? " is-open" : ""}">
                      <button class="accordion-trigger" type="button" aria-expanded="${index === 0 ? "true" : "false"}">
                        ${item.q}
                        <span class="accordion-icon">+</span>
                      </button>
                      <div class="accordion-content">
                        <div class="accordion-content-inner">
                          <p>${item.a}</p>
                        </div>
                      </div>
                    </div>
                  `,
                  )
                  .join("")}
            </div>
          </div>
        `;
            })
            .join("");

        const toggleMarkup = categories
            .map(
                (category, index) => `
          <button class="filter-chip faq-category-toggle${index === 0 ? " is-active" : ""}" type="button" data-faq-toggle="${category}">
            ${faqCategoryLabels[category] || category}
          </button>
        `,
            )
            .join("");

        group.innerHTML = `
      <div class="faq-category-toggles" role="tablist" aria-label="FAQ categories">
        ${toggleMarkup}
      </div>
      <div class="faq-category-panels">
        ${groupedOutput}
      </div>
    `;
    });
}

function initFaqCategoryToggles() {
    faqGroups.forEach((group) => {
        const toggles = group.querySelectorAll("[data-faq-toggle]");
        const panels = group.querySelectorAll("[data-faq-panel]");

        toggles.forEach((toggle) => {
            if (toggle.dataset.faqToggleBound === "true") {
                return;
            }

            toggle.dataset.faqToggleBound = "true";

            toggle.addEventListener("click", () => {
                const target = toggle.dataset.faqToggle;
                const nextPanel = group.querySelector(`[data-faq-panel="${target}"]`);

                toggles.forEach((item) => {
                    item.classList.toggle("is-active", item === toggle);
                });

                panels.forEach((panel) => {
                    panel.classList.toggle(
                        "is-active",
                        panel.dataset.faqPanel === target,
                    );
                });

                if (hasGsap && nextPanel) {
                    window.gsap.fromTo(
                        nextPanel,
                        { autoAlpha: 0, y: 18 },
                        {
                            autoAlpha: 1,
                            y: 0,
                            duration: 0.45,
                            ease: "power2.out",
                            clearProps: "opacity,visibility,transform",
                        },
                    );
                }
            });
        });
    });
}

function setAccordionState(item, isOpen, animate = false) {
    const trigger = item.querySelector(".accordion-trigger");
    const content = item.querySelector(".accordion-content");

    if (!trigger || !content) {
        return;
    }

    item.classList.toggle("is-open", isOpen);
    trigger.setAttribute("aria-expanded", String(isOpen));

    if (!hasGsap || !animate) {
        content.style.height = isOpen ? "auto" : "0px";
        return;
    }

    window.gsap.killTweensOf(content);

    if (isOpen) {
        window.gsap.set(content, { height: content.offsetHeight || 0 });
        window.gsap.to(content, {
            height: content.scrollHeight,
            duration: 0.42,
            ease: "power2.out",
            onComplete: () => {
                content.style.height = "auto";
            },
        });
        return;
    }

    window.gsap.set(content, { height: content.offsetHeight });
    window.gsap.to(content, {
        height: 0,
        duration: 0.34,
        ease: "power2.inOut",
    });
}

function initAccordions() {
    const accordions = document.querySelectorAll(".accordion-item");

    accordions.forEach((item) => {
        if (item.dataset.accordionBound === "true") {
            return;
        }

        const trigger = item.querySelector(".accordion-trigger");
        const isOpen = item.classList.contains("is-open");

        if (!trigger) {
            return;
        }

        item.dataset.accordionBound = "true";
        setAccordionState(item, isOpen, false);

        trigger.addEventListener("click", () => {
            setAccordionState(item, !item.classList.contains("is-open"), true);
        });
    });
}

function initMagneticButtons() {
    if (!hasGsap || prefersReducedMotion || !supportsFinePointer) {
        return;
    }

    magneticButtons.forEach((button) => {
        if (button.dataset.magneticBound === "true") {
            return;
        }

        button.dataset.magneticBound = "true";

        button.addEventListener("pointermove", (event) => {
            if (!hasGsap) {
                return;
            }

            const rect = button.getBoundingClientRect();
            const moveX = (event.clientX - (rect.left + rect.width / 2)) * 0.12;
            const moveY = (event.clientY - (rect.top + rect.height / 2)) * 0.18;

            window.gsap.to(button, {
                x: moveX,
                y: moveY,
                duration: 0.28,
                ease: "power3.out",
            });
        });

        button.addEventListener("pointerleave", () => {
            if (!hasGsap) {
                return;
            }

            window.gsap.to(button, {
                x: 0,
                y: 0,
                duration: 0.38,
                ease: "elastic.out(1, 0.5)",
            });
        });
    });
}

function initCountUps() {
    if (!hasScrollTrigger || prefersReducedMotion) {
        return;
    }

    countUpNodes.forEach((node) => {
        const endValue = Number(node.dataset.countup || "0");
        const prefix = node.dataset.countupPrefix || "";
        const suffix = node.dataset.countupSuffix || "";
        const counter = { value: 0 };
        const tween = window.gsap.to(counter, {
            value: endValue,
            duration: 1.6,
            ease: "power2.out",
            paused: true,
            onUpdate: () => {
                node.textContent = `${prefix}${Math.round(counter.value)}${suffix}`;
            },
            scrollTrigger: {
                trigger: node,
                start: "top 88%",
                once: true,
                onEnter: () => {
                    node.textContent = `${prefix}0${suffix}`;
                    tween.play(0);
                },
            },
        });
    });
}

function initGsapExperience() {
    if (!hasGsap) {
        return;
    }

    const { gsap } = window;
    const showcaseColumns = document.querySelectorAll(
        ".tag-card, .stat-card, .service-card, .portfolio-card, .testimonial-card, .video-placeholder",
    );
    const siteHeader = document.querySelector(".site-header");
    const variationSeed = (value) => {
        const raw = Math.sin(value * 12.9898) * 43758.5453;
        return raw - Math.floor(raw);
    };
    const range = (seed, min, max) => min + (max - min) * seed;
    const pickSigned = (seed, magnitude) =>
        (seed > 0.5 ? 1 : -1) * magnitude;
    const indexOfElement = (element, collection) =>
        Array.from(collection).indexOf(element);
    const buildVariant = (index, family = "default") => {
        const base = index + 1;
        const seedA = variationSeed(base * 1.17 + family.length);
        const seedB = variationSeed(base * 2.31 + family.length * 0.5);
        const seedC = variationSeed(base * 3.73 + family.length * 0.9);
        const x = pickSigned(seedA, Math.round(range(seedB, 12, 36)));
        const y = Math.round(range(seedB, 30, 88));
        const scale = range(seedC, 0.935, 0.982);
        const rotate = pickSigned(seedB, range(seedA, 3, 10));
        const rotateX = pickSigned(seedC, range(seedB, 2, 7));
        const rotateY = pickSigned(seedA, range(seedC, 3, 9));
        const scrub = range(seedA, 1.05, 2.2);
        const drift = pickSigned(seedB, range(seedC, 2, 7));

        return {
            x,
            y,
            scale,
            rotate,
            rotateX,
            rotateY,
            scrub,
            drift,
        };
    };
    const buildRenderVariant = (index, family = "render") => {
        const variant = buildVariant(index, family);
        const horizontalBias = variationSeed(index * 2.13 + family.length);
        const verticalBias = variationSeed(index * 3.41 + family.length * 0.7);
        const dominantHorizontal = horizontalBias > 0.42;
        const xDistance = range(horizontalBias, 28, 88);
        const yDistance = dominantHorizontal
            ? range(verticalBias, 10, 32)
            : range(verticalBias, 52, 96);

        return {
            x: dominantHorizontal ? pickSigned(horizontalBias, xDistance) : pickSigned(horizontalBias, xDistance * 0.24),
            y: yDistance,
            scale: range(variationSeed(index + family.length), 0.972, 0.988),
            scrub: range(variationSeed(index * 1.7 + family.length), 1.1, 1.9),
        };
    };
    const isStackCard = (element) =>
        element.matches(
            ".stat-card, .service-card, .feature-list-card, .portfolio-card, .portfolio-feature, .testimonial-card, .detail-card, .contact-panel, .image-placeholder, .video-placeholder, .hero-side-card",
        );

    if (scrollProgress && hasScrollTrigger) {
        gsap.to(scrollProgress, {
            scaleX: 1,
            ease: "none",
            scrollTrigger: {
                trigger: document.documentElement,
                start: "top top",
                end: "bottom bottom",
                scrub: true,
            },
        });
    }

    if (siteHeader && hasScrollTrigger) {
        gsap.to(siteHeader, {
            backgroundColor: "color-mix(in srgb, var(--bg) 88%, transparent)",
            borderColor: "rgba(245, 142, 30, 0.18)",
            backdropFilter: "blur(28px)",
            boxShadow: "0 14px 42px rgba(0, 0, 0, 0.18)",
            ease: "none",
            scrollTrigger: {
                trigger: document.documentElement,
                start: "top top",
                end: "+=180",
                scrub: true,
            },
        });
    }

    if (heroSection && !prefersReducedMotion) {
        const heroTimeline = gsap.timeline({
            defaults: { ease: "expo.out" },
        });

        heroTimeline
            .from(".hero-section .eyebrow", {
                autoAlpha: 0,
                y: 18,
                duration: 0.7,
            })
            .from(
                ".hero-section .hero-title",
                {
                    autoAlpha: 0,
                    y: 26,
                    duration: 1,
                },
                "-=0.42",
            )
            .from(
                ".hero-section .hero-copy, .hero-section .primary-button, .hero-section .secondary-button",
                {
                    autoAlpha: 0,
                    y: 20,
                    duration: 0.82,
                    stagger: 0.1,
                },
                "-=0.62",
            )
            .from(
                ".hero-video-placeholder",
                {
                    autoAlpha: 0,
                    y: 24,
                    rotateX: -7,
                    duration: 1.1,
                },
                "-=0.78",
            )
            .from(
                ".hero-video-placeholder .video-placeholder-frame, .hero-video-placeholder .video-placeholder-play, .hero-video-placeholder .video-placeholder-meta, .hero-video-placeholder .tag-card",
                {
                    autoAlpha: 0,
                    y: 14,
                    duration: 0.72,
                    stagger: 0.08,
                },
                "-=0.82",
            );

        gsap.to(".orb-one", {
            y: -14,
            x: 12,
            duration: 5.6,
            repeat: -1,
            yoyo: true,
            ease: "sine.inOut",
        });

        gsap.to(".orb-two", {
            y: 18,
            x: -10,
            duration: 6.4,
            repeat: -1,
            yoyo: true,
            ease: "sine.inOut",
        });
    }

    showcaseColumns.forEach((node) => {
        node.addEventListener("pointerenter", () => {
            gsap.to(node, {
                y: -4,
                scale: 1.008,
                duration: 0.42,
                ease: "power3.out",
            });
        });

        node.addEventListener("pointerleave", () => {
            gsap.to(node, {
                y: 0,
                scale: 1,
                duration: 0.48,
                ease: "power3.out",
            });
        });
    });

    if (!hasScrollTrigger || prefersReducedMotion) {
        return;
    }

    revealNodes.forEach((node, index) => {
        if (node.classList.contains("filter-item")) {
            return;
        }

        const variant = buildRenderVariant(index, "reveal");

        gsap.fromTo(
            node,
            {
                autoAlpha: heroSection?.contains(node) ? 1 : 0,
                x: heroSection?.contains(node) ? 0 : variant.x,
                y: heroSection?.contains(node) ? 0 : variant.y,
                scale: heroSection?.contains(node) ? 1 : variant.scale,
            },
            {
                autoAlpha: 1,
                x: 0,
                y: 0,
                scale: 1,
                duration: 1,
                ease: "none",
                overwrite: "auto",
                scrollTrigger: {
                    trigger: node,
                    start: "top 94%",
                    end: "top 64%",
                    scrub: variant.scrub,
                },
                onStart: () => {
                    node.classList.add("visible");
                },
            },
        );
    });

    document
        .querySelectorAll(".floating-orb, .hero-video-placeholder, .about-visual, .portfolio-feature, .cta-panel")
        .forEach((node) => {
            gsap.to(node, {
                yPercent: node.classList.contains("floating-orb") ? 12 : -4,
                ease: "none",
                scrollTrigger: {
                    trigger: node.closest(".page-section") || node,
                    start: "top bottom",
                    end: "bottom top",
                    scrub: true,
                },
            });
        });

    pageSections.forEach((section) => {
        if (section.classList.contains("hero-section")) {
            return;
        }

        const sectionInner = section.querySelector(".section-inner");

        if (!sectionInner) {
            return;
        }

        const variant = buildRenderVariant(
            indexOfElement(section, pageSections),
            "section",
        );

        gsap.fromTo(
            sectionInner,
            {
                x: variant.x * 0.2,
                y: variant.y * 0.68,
                autoAlpha: 0.72,
                scale: variant.scale,
            },
            {
                x: 0,
                y: 0,
                autoAlpha: 1,
                scale: 1,
                duration: 1.1,
                ease: "none",
                scrollTrigger: {
                    trigger: section,
                    start: "top 88%",
                    end: "top 54%",
                    scrub: range(variationSeed(variant.x), 1.3, 2),
                },
            },
        );
    });

    itemFlowGroups.forEach((group) => {
        const items = Array.from(group.children).filter(
            (item) => !item.classList.contains("section-head"),
        );

        if (!items.length) {
            return;
        }

        gsap.set(items, {
            willChange: "transform, opacity",
        });

        items.forEach((item, index) => {
            const variant = buildRenderVariant(
                index + indexOfElement(group, itemFlowGroups),
                "group",
            );
            const stackCard = isStackCard(item);
            const stackDepth = items.length - index - 1;
            const stackOffsetY = stackCard ? stackDepth * 22 : 0;
            const stackOffsetX = stackCard ? stackDepth * (variant.x > 0 ? 6 : -6) : 0;
            const stackScale = stackCard
                ? Math.max(0.94, variant.scale - stackDepth * 0.01)
                : variant.scale;

            if (stackCard) {
                gsap.set(item, {
                    zIndex: items.length - index,
                    transformOrigin: "center top",
                });
            }

            gsap.fromTo(
                item,
                {
                    x: variant.x + stackOffsetX,
                    y: variant.y + stackOffsetY,
                    autoAlpha: 0,
                    scale: stackScale,
                },
                {
                    x: 0,
                    y: 0,
                    autoAlpha: 1,
                    scale: 1,
                    duration: 1,
                    ease: "none",
                    scrollTrigger: {
                        trigger: item,
                        start: "top 96%",
                        end: "top 58%",
                        scrub: variant.scrub,
                    },
                },
            );

            gsap.to(item, {
                xPercent: variant.x > 0 ? -0.6 : 0.6,
                yPercent: range(variationSeed(index + 40), -2.8, -5.4),
                z: stackCard ? stackDepth * -2 : 0,
                ease: "none",
                scrollTrigger: {
                    trigger: item,
                    start: "top bottom",
                    end: "bottom top",
                    scrub: range(variationSeed(index + 10), 1.7, 2.6),
                },
            });
        });
    });

    if (filterItems.length) {
        gsap.fromTo(
            filterItems,
            {
                autoAlpha: 0,
                y: 42,
                scale: 0.985,
            },
            {
                autoAlpha: 1,
                y: 0,
                scale: 1,
                ease: "none",
                stagger: 0.08,
                scrollTrigger: {
                    trigger: ".portfolio-page-grid",
                    start: "top 92%",
                    end: "top 58%",
                    scrub: 1.2,
                },
                onStart: () => {
                    filterItems.forEach((item) => item.classList.add("visible"));
                },
            },
        );
    }

    mediaCards.forEach((card, index) => {
        const variant = buildRenderVariant(index, "media");
        const imageSurface = card.querySelector(".image-placeholder-surface");
        const videoScreen = card.querySelector(".video-placeholder-screen");

        gsap.fromTo(
            card,
            {
                x: variant.x,
                y: variant.y + 10,
                scale: variant.scale,
                autoAlpha: 0,
            },
            {
                x: 0,
                y: 0,
                scale: 1,
                autoAlpha: 1,
                duration: 1.2,
                ease: "none",
                scrollTrigger: {
                    trigger: card,
                    start: "top 96%",
                    end: "top 58%",
                    scrub: variant.scrub,
                },
            },
        );

        if (imageSurface) {
            gsap.fromTo(
                imageSurface,
                {
                    backgroundPosition: "0% 0%, 100% 0%, 0% 0%",
                },
                {
                    backgroundPosition: "8% 10%, 86% 12%, 0% 0%",
                    ease: "none",
                    scrollTrigger: {
                        trigger: card,
                        start: "top bottom",
                        end: "bottom top",
                        scrub: true,
                    },
                },
            );
        }

        if (videoScreen) {
            gsap.to(videoScreen, {
                backgroundPosition: "0% 0%, 24% 26%, 76% 20%, 0% 0%",
                ease: "none",
                scrollTrigger: {
                    trigger: card,
                    start: "top bottom",
                    end: "bottom top",
                    scrub: true,
                },
            });
        }
    });

    interactiveBadges.forEach((badge, index) => {
        const variant = buildRenderVariant(index, "badge");

        gsap.fromTo(
            badge,
            {
                x: variant.x * 0.5,
                y: variant.y * 0.5,
                autoAlpha: 0,
                scale: variant.scale,
            },
            {
                x: 0,
                y: 0,
                autoAlpha: 1,
                scale: 1,
                duration: 0.8,
                ease: "none",
                scrollTrigger: {
                    trigger: badge,
                    start: "top 96%",
                    end: "top 68%",
                    scrub: range(variationSeed(index + 21), 1.05, 1.6),
                },
            },
        );
    });

    cardIcons.forEach((icon, index) => {
        const variant = buildRenderVariant(index, "icon");

        gsap.fromTo(
            icon,
            {
                x: variant.x * 0.28,
                y: range(variationSeed(index + 30), 12, 24),
                scale: range(variationSeed(index + 31), 0.92, 0.97),
                autoAlpha: 0,
            },
            {
                x: 0,
                y: 0,
                scale: 1,
                autoAlpha: 1,
                duration: 0.9,
                ease: "none",
                scrollTrigger: {
                    trigger: icon,
                    start: "top 96%",
                    end: "top 72%",
                    scrub: range(variationSeed(index + 32), 1, 1.5),
                },
            },
        );
    });

    scrollPanels.forEach((panel, index) => {
        const screen = panel.querySelector(".video-placeholder-screen");
        const playButton = panel.querySelector(".video-placeholder-play");
        const glow = panel.querySelector(".video-placeholder-glow");

        gsap.fromTo(
            panel,
            {
                y: 54,
                rotateX: 8,
                scale: 0.96,
                autoAlpha: 0,
            },
            {
                y: 0,
                rotateX: 0,
                scale: 1,
                autoAlpha: 1,
                duration: 1.15,
                ease: "expo.out",
                delay: index * 0.06,
                scrollTrigger: {
                    trigger: panel,
                    start: "top 86%",
                    once: true,
                },
            },
        );

        if (screen) {
            gsap.fromTo(
                screen,
                {
                    clipPath: "inset(16% 12% 16% 12% round 1.6rem)",
                },
                {
                    clipPath: "inset(0% 0% 0% 0% round 1.6rem)",
                    duration: 1.2,
                    ease: "expo.out",
                    scrollTrigger: {
                        trigger: panel,
                        start: "top 86%",
                        once: true,
                    },
                },
            );
        }

        if (playButton) {
            gsap.to(playButton, {
                scale: 1.08,
                duration: 1.2,
                repeat: -1,
                yoyo: true,
                ease: "sine.inOut",
            });
        }

        if (glow) {
            gsap.to(glow, {
                xPercent: 10,
                yPercent: -8,
                duration: 3.4,
                repeat: -1,
                yoyo: true,
                ease: "sine.inOut",
            });
        }
    });
}

function initHeroVideoPopup() {
    if (
        !hasGsap ||
        prefersReducedMotion ||
        !heroVideoPlaceholder ||
        !heroSection
    ) {
        return;
    }

    const popup = heroVideoPlaceholder.cloneNode(true);
    const backdrop = document.createElement("div");
    const popupState = {
        progress: 0,
        startX: 0,
        startY: 0,
        startScale: 1,
        startRotate: -4,
        startBackdrop: 0.82,
        targetWidth: 0,
        targetHeight: 0,
    };
    let isDocked = false;
    let touchStartY = null;

    popup.classList.add("hero-video-popup");
    popup.removeAttribute("data-tilt");
    popup.querySelectorAll("[data-tilt]").forEach((node) => {
        node.removeAttribute("data-tilt");
    });

    backdrop.className = "hero-video-popup-backdrop";

    body.append(backdrop, popup);
    const originalVideos = Array.from(heroVideoPlaceholder.querySelectorAll("video"));
    const popupVideos = Array.from(popup.querySelectorAll("video"));

    originalVideos.forEach((video) => {
        video.pause();
    });

    popupVideos.forEach((video, index) => {
        const originalVideo = originalVideos[index];

        video.muted = true;
        video.playsInline = true;

        if (originalVideo && Number.isFinite(originalVideo.currentTime)) {
            video.currentTime = originalVideo.currentTime;
        }

        const playPromise = video.play();

        if (playPromise && typeof playPromise.catch === "function") {
            playPromise.catch(() => {});
        }
    });

    heroVideoPlaceholder.classList.add("hero-video-placeholder--ghost");
    body.classList.add("hero-intro-lock");
    window.scrollTo(0, 0);

    function updatePopupProgress(progress) {
        const clamped = window.gsap.utils.clamp(0, 1, progress);
        popupState.progress = clamped;

        window.gsap.set(popup, {
            x: window.gsap.utils.interpolate(
                popupState.startX,
                0,
                clamped,
            ),
            y: window.gsap.utils.interpolate(
                popupState.startY,
                0,
                clamped,
            ),
            scale: window.gsap.utils.interpolate(
                popupState.startScale,
                1,
                clamped,
            ),
            rotate: window.gsap.utils.interpolate(
                popupState.startRotate,
                0,
                clamped,
            ),
        });

        window.gsap.set(backdrop, {
            autoAlpha: window.gsap.utils.interpolate(
                popupState.startBackdrop,
                0,
                clamped,
            ),
        });

        if (clamped >= 1) {
            finishDock();
        }
    }

    function placePopup() {
        const rect = heroVideoPlaceholder.getBoundingClientRect();
        const viewportPadding = 32;
        const maxScale = Math.min(
            (window.innerWidth - viewportPadding * 2) / rect.width,
            (window.innerHeight - 140) / rect.height,
            1.55,
        );
        const targetCenterX = rect.left + rect.width / 2;
        const targetCenterY = rect.top + rect.height / 2;
        const viewportCenterX = window.innerWidth / 2;
        const viewportCenterY = window.innerHeight / 2;
        popupState.targetWidth = rect.width;
        popupState.targetHeight = rect.height;
        popupState.startX = viewportCenterX - targetCenterX;
        popupState.startY = viewportCenterY - targetCenterY;
        popupState.startScale = Math.max(1.05, maxScale);

        window.gsap.set(popup, {
            left: rect.left,
            top: rect.top,
            width: rect.width,
            height: rect.height,
            autoAlpha: 1,
        });

        updatePopupProgress(popupState.progress);

        window.gsap.set(popup, {
            x: window.gsap.utils.interpolate(
                popupState.startX,
                0,
                popupState.progress,
            ),
            y: window.gsap.utils.interpolate(
                popupState.startY,
                0,
                popupState.progress,
            ),
            scale: window.gsap.utils.interpolate(
                popupState.startScale,
                1,
                popupState.progress,
            ),
            rotate: window.gsap.utils.interpolate(
                popupState.startRotate,
                0,
                popupState.progress,
            ),
            autoAlpha: 1,
        });
    }

    function cleanup() {
        popupVideos.forEach((video, index) => {
            const originalVideo = originalVideos[index];

            if (!originalVideo) {
                return;
            }

            if (Number.isFinite(video.currentTime)) {
                originalVideo.currentTime = video.currentTime;
            }

            const playPromise = originalVideo.play();

            if (playPromise && typeof playPromise.catch === "function") {
                playPromise.catch(() => {});
            }
        });

        body.classList.remove("hero-intro-lock");
        popup.remove();
        backdrop.remove();
        heroVideoPlaceholder.classList.remove("hero-video-placeholder--ghost");
        window.removeEventListener("resize", placePopup);
        window.removeEventListener("wheel", handleWheel);
        window.removeEventListener("touchstart", handleTouchStart);
        window.removeEventListener("touchmove", handleTouchMove);
        window.removeEventListener("scroll", handleWindowScroll);
        window.removeEventListener("keydown", handleKeyDown);
    }

    function finishDock() {
        if (isDocked) {
            return;
        }

        isDocked = true;
        window.gsap.killTweensOf(popup);
        window.gsap.killTweensOf(backdrop);
        cleanup();
    }

    function applyDelta(delta) {
        if (isDocked) {
            return;
        }

        const nextProgress = popupState.progress + delta;
        updatePopupProgress(nextProgress);
    }

    function handleWheel(event) {
        if (isDocked) {
            return;
        }

        event.preventDefault();
        const delta = Math.max(event.deltaY, 0) / 1400;
        applyDelta(delta);
    }

    function handleTouchStart(event) {
        touchStartY = event.touches[0]?.clientY ?? null;
    }

    function handleTouchMove(event) {
        if (isDocked) {
            return;
        }

        event.preventDefault();

        const currentY = event.touches[0]?.clientY;
        if (touchStartY == null || currentY == null) {
            return;
        }

        const delta = Math.max(touchStartY - currentY, 0) / 180;
        touchStartY = currentY;
        applyDelta(delta);
    }

    function handleWindowScroll() {
        if (!isDocked) {
            window.scrollTo(0, 0);
        }
    }

    function handleKeyDown(event) {
        if (isDocked) {
            return;
        }

        const scrollingKeys = [
            "ArrowDown",
            "PageDown",
            "Space",
        ];

        if (!scrollingKeys.includes(event.code) && !scrollingKeys.includes(event.key)) {
            return;
        }

        event.preventDefault();
        applyDelta(0.14);
    }

    placePopup();
    window.addEventListener("resize", placePopup);
    window.addEventListener("wheel", handleWheel, { passive: false });
    window.addEventListener("touchstart", handleTouchStart, { passive: true });
    window.addEventListener("touchmove", handleTouchMove, { passive: false });
    window.addEventListener("scroll", handleWindowScroll, { passive: true });
    window.addEventListener("keydown", handleKeyDown);
}

renderFaqGroups();
initFaqCategoryToggles();
initAccordions();

if (formStatusNode) {
    const params = new URLSearchParams(window.location.search);
    const status = params.get("status");

    if (status === "success") {
        formStatusNode.textContent =
            "Thanks. Your inquiry has been sent successfully and we will reply soon.";
        formStatusNode.classList.remove("is-hidden");
        formStatusNode.classList.add("is-success");
    } else if (status === "error") {
        formStatusNode.textContent =
            "We could not send your inquiry right now. Please try again or email inquiry@squadtechsol.com directly.";
        formStatusNode.classList.remove("is-hidden");
        formStatusNode.classList.add("is-error");
    } else if (status === "invalid") {
        formStatusNode.textContent =
            "Please complete the form with a valid name, email, and message.";
        formStatusNode.classList.remove("is-hidden");
        formStatusNode.classList.add("is-error");
    }
}

window.addEventListener("load", () => {
    body.classList.remove("is-loading");

    initHeroVideoPopup();

    if (!pageLoader) {
        return;
    }

    if (hasGsap) {
        window.gsap.to(".loader-core", {
            scale: 0.88,
            autoAlpha: 0,
            duration: 0.45,
            ease: "power2.in",
        });
        window.gsap.to(pageLoader, {
            autoAlpha: 0,
            duration: 0.55,
            ease: "power2.out",
            onComplete: () => {
                pageLoader.classList.add("is-hidden");
            },
        });
        return;
    }

    pageLoader.classList.add("is-hidden");
});

const staggerGroups = new Map();

revealNodes.forEach((node) => {
    if (!node.classList.contains("stagger")) {
        return;
    }

    const group =
        node.closest(".stats-grid, .testimonial-grid, .services-grid, .detail-grid, .image-placeholder-grid, .video-placeholder-grid, .media-mosaic, .portfolio-page-grid, .portfolio-stack") ||
        node.parentElement;
    const currentIndex = staggerGroups.get(group) || 0;

    node.style.setProperty("--delay", `${currentIndex * 90}ms`);
    staggerGroups.set(group, currentIndex + 1);
});

if (!hasScrollTrigger) {
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) {
                    return;
                }

                entry.target.classList.add("visible");
                observer.unobserve(entry.target);
            });
        },
        {
            threshold: 0.16,
            rootMargin: "0px 0px -8% 0px",
        },
    );

    revealNodes.forEach((node) => observer.observe(node));
}

themeToggles.forEach((toggle) => {
    toggle.addEventListener("click", () => {
        body.classList.toggle("light-theme");
        localStorage.setItem(
            "squadtech-theme",
            body.classList.contains("light-theme") ? "light" : "dark",
        );
        syncThemeLogos();
    });
});

if (menuToggle && mobileMenu) {
    menuToggle.addEventListener("click", () => {
        const isOpen = mobileMenu.classList.toggle("is-open");
        menuToggle.setAttribute("aria-expanded", String(isOpen));
    });
}

tiltNodes.forEach((node) => {
    node.addEventListener("pointermove", (event) => {
        const rect = node.getBoundingClientRect();
        const x = ((event.clientX - rect.left) / rect.width) * 100;
        const y = ((event.clientY - rect.top) / rect.height) * 100;
        const rotateX = ((event.clientY - rect.top) / rect.height - 0.5) * -6;
        const rotateY = ((event.clientX - rect.left) / rect.width - 0.5) * 8;

        node.style.setProperty("--mx", `${x}%`);
        node.style.setProperty("--my", `${y}%`);

        if (hasGsap) {
            window.gsap.to(node, {
                rotateX,
                rotateY,
                y: -8,
                duration: 0.4,
                ease: "power3.out",
                transformPerspective: 1200,
                transformOrigin: "center",
            });
            return;
        }

        node.style.transform = `perspective(1200px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-8px)`;
    });

    node.addEventListener("pointerleave", () => {
        node.style.removeProperty("--mx");
        node.style.removeProperty("--my");

        if (hasGsap) {
            window.gsap.to(node, {
                rotateX: 0,
                rotateY: 0,
                y: 0,
                duration: 0.6,
                ease: "power3.out",
            });
            return;
        }

        node.style.transform = "";
    });
});

function applyPortfolioFilter(filter, shouldUpdateUrl = true) {
    const activeFilter = filter || "all";
    const visibleItems = [];

    filterChips.forEach((button) => {
        button.classList.toggle("is-active", button.dataset.filter === activeFilter);
    });

    filterItems.forEach((item) => {
        const categories = (item.dataset.category || "")
            .split(/\s+/)
            .filter(Boolean);
        const matches = activeFilter === "all" || categories.includes(activeFilter);

        item.classList.toggle("is-hidden", !matches);

        if (matches) {
            visibleItems.push(item);
        }
    });

    if (hasGsap && visibleItems.length) {
        window.gsap.set(visibleItems, {
            clearProps: "opacity,visibility,transform",
        });
        window.gsap.fromTo(
            visibleItems,
            { autoAlpha: 0, y: 22, scale: 0.985 },
            {
                autoAlpha: 1,
                y: 0,
                scale: 1,
                duration: 0.42,
                ease: "power2.out",
                stagger: 0.045,
                overwrite: true,
            },
        );
    }

    if (hasScrollTrigger) {
        window.ScrollTrigger.refresh();
    }

    if (!shouldUpdateUrl) {
        return;
    }

    const path = window.location.pathname || "/portfolio";

    if (activeFilter === "all") {
        history.replaceState(null, "", path);
        return;
    }

    history.replaceState(null, "", `${path}#${activeFilter}`);
}

filterChips.forEach((chip) => {
    chip.addEventListener("click", () => {
        applyPortfolioFilter(chip.dataset.filter);
    });
});

if (filterChips.length && filterItems.length) {
    const filterFromHash = window.location.hash.replace("#", "");
    if (filterFromHash) {
        const targetChip = Array.from(filterChips).find(
            (chip) => chip.dataset.filter === filterFromHash,
        );
        if (targetChip) {
            applyPortfolioFilter(filterFromHash, false);
        }
    }
}

pageLinks.forEach((link) => {
    link.addEventListener("click", (event) => {
        const href = link.getAttribute("href");

        if (
            !href ||
            href.startsWith("#") ||
            event.metaKey ||
            event.ctrlKey ||
            event.shiftKey ||
            event.altKey
        ) {
            return;
        }

        body.classList.add("is-loading");

        if (pageLoader) {
            pageLoader.classList.remove("is-hidden");
        }
    });
});

function initAnimatedCursor() {
    if (!hasGsap || prefersReducedMotion || !supportsFinePointer) {
        return;
    }

    const cursorDot = document.createElement("div");
    const cursorRing = document.createElement("div");

    cursorDot.className = "cursor-dot";
    cursorRing.className = "cursor-ring";

    body.append(cursorRing, cursorDot);
    body.classList.add("has-custom-cursor");
    window.gsap.set([cursorDot, cursorRing], {
        xPercent: -50,
        yPercent: -50,
    });

    const cursorState = {
        x: window.innerWidth / 2,
        y: window.innerHeight / 2,
        ringX: window.innerWidth / 2,
        ringY: window.innerHeight / 2,
    };

    const showCursor = () => {
        body.classList.add("cursor-visible");
    };

    const hideCursor = () => {
        body.classList.remove("cursor-visible", "cursor-hovering", "cursor-pressing");
    };

    window.addEventListener("pointermove", (event) => {
        cursorState.x = event.clientX;
        cursorState.y = event.clientY;
        showCursor();
    });

    window.gsap.ticker.add(() => {
        cursorState.ringX += (cursorState.x - cursorState.ringX) * 0.18;
        cursorState.ringY += (cursorState.y - cursorState.ringY) * 0.18;

        window.gsap.set(cursorDot, {
            x: cursorState.x,
            y: cursorState.y,
        });

        window.gsap.set(cursorRing, {
            x: cursorState.ringX,
            y: cursorState.ringY,
        });
    });

    window.addEventListener("pointerdown", () => {
        body.classList.add("cursor-pressing");
    });

    window.addEventListener("pointerup", () => {
        body.classList.remove("cursor-pressing");
    });

    window.addEventListener("pointerleave", hideCursor);
    document.addEventListener("mouseleave", hideCursor);

    cursorTargets.forEach((target) => {
        target.addEventListener("pointerenter", () => {
            body.classList.add("cursor-hovering");
        });

        target.addEventListener("pointerleave", () => {
            body.classList.remove("cursor-hovering", "cursor-pressing");
        });
    });
}

initMagneticButtons();
initCountUps();
initGsapExperience();
initAnimatedCursor();
