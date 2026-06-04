<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Squadtech Solution delivers social media marketing, SEO and PPC, brand identity, media production, web development, and dedicated remote staff.">
    <title>Squadtech Solution | Premium Tech Agency</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
</head>

<body class="font-poppins is-loading" data-page="{{ $page }}">
    <div data-site-loader></div>
    <div class="scroll-progress" aria-hidden="true"></div>
    <div class="site-shell">
        <div data-site-header></div>

        {{ $slot }}

        <div data-site-footer></div>
    </div>
    <script src="{{ asset('js/component.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/ScrollTrigger.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-H9JPQ9NPFK"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-H9JPQ9NPFK');
    </script>

    <!-- Calendly link widget begin -->
    <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
    <a href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/d/cvqf-k7c-4xq'});return false;">
        <button class="calendly-widget" title="book a demo call on calendly">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="50" height="50"
                viewBox="0 0 500.000000 500.000000" preserveAspectRatio="xMidYMid meet">

                <g transform="translate(0.000000,500.000000) scale(0.100000,-0.100000)" fill="white" stroke="none">
                    <path
                        d="M2445 3884 c-385 -35 -725 -215 -964 -509 -80 -99 -211 -326 -211 -367 0 -8 -4 -18 -8 -23 -23 -26 -63 -204 -83 -367 -13 -114 -5 -235 27 -390 62 -304 249 -606 488 -792 190 -147 355 -223 601 -275 148 -31 360 -30 520 4 133 28 204 51 311 101 221 101 423 276 566 490 90 135 168 321 168 403 0 52 -2 57 -44 95 -49 45 -262 144 -276 130 -8 -8 -15 -32 -37 -121 -4 -19 -1 -23 18 -23 49 0 199 -71 199 -95 0 -22 -53 -152 -90 -220 -88 -162 -250 -341 -395 -437 -130 -86 -294 -155 -450 -189 -38 -9 -127 -14 -240 -13 -164 0 -189 2 -289 28 -60 15 -116 31 -125 35 -238 111 -311 159 -439 283 -175 170 -286 371 -347 628 -29 118 -31 344 -5 473 53 262 161 466 345 652 186 188 433 311 692 346 135 18 356 6 473 -25 221 -58 398 -158 555 -314 99 -99 141 -152 209 -267 45 -78 106 -220 106 -248 0 -15 -90 -59 -170 -83 -27 -8 -50 -16 -50 -17 1 -1 9 -31 18 -67 16 -60 20 -65 42 -62 76 10 215 78 267 130 29 29 33 39 33 85 0 58 -34 156 -98 283 -127 249 -374 490 -627 608 -89 42 -286 106 -326 106 -15 0 -38 4 -51 9 -26 10 -251 21 -313 15z" />
                    <path
                        d="M2285 3457 c-140 -27 -276 -100 -377 -201 -60 -60 -91 -105 -178 -257 -60 -105 -118 -220 -134 -269 -28 -78 -30 -96 -30 -220 0 -124 3 -142 30 -220 17 -48 75 -165 133 -265 79 -139 118 -195 169 -247 171 -174 325 -228 651 -228 279 0 399 31 560 144 80 57 158 144 209 236 17 30 62 111 101 180 70 122 71 125 49 133 -38 15 -199 0 -264 -24 -65 -24 -95 -44 -200 -135 -150 -130 -225 -156 -440 -155 -106 1 -167 6 -205 17 -175 51 -302 185 -345 362 -18 75 -18 328 0 404 20 83 59 158 112 217 63 70 117 105 207 136 68 22 91 25 229 25 84 0 172 -5 195 -10 72 -17 145 -57 223 -125 108 -93 183 -141 243 -159 70 -20 182 -30 229 -19 l37 8 -23 45 c-60 116 -200 346 -237 391 -97 116 -253 203 -427 238 -65 13 -448 12 -517 -2z" />
                    <path
                        d="M2439 2940 c-136 -23 -240 -117 -274 -246 -19 -73 -20 -278 -1 -355 25 -107 77 -173 180 -227 50 -26 56 -27 221 -27 165 0 171 1 220 27 28 14 93 63 145 108 158 135 280 180 495 180 120 0 115 -5 115 108 0 126 9 118 -138 118 -208 0 -303 35 -470 175 -118 99 -161 124 -241 139 -61 11 -184 11 -252 0z" />
                </g>
            </svg>
        </button>
    </a>
    <!-- Calendly link widget end -->
</body>

</html>