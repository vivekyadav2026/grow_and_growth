<!-- Premium Footer Stylesheet -->
<link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}?v=1.0">

<footer class="fd-footer-sec">
    <div class="container">
        
        <!-- Footer Grid -->
        <div class="fd-footer-grid">
            
            <!-- Brand Column -->
            <div class="fd-footer-grid-brand">
                <a href="{{ url('/') }}" class="fd-footer-brand-logo">
                    <img src="{{ asset('assets/images/logos/Foundida_Logo_Main.webp') }}" alt="Foundida Logo">
                </a>
                <p class="fd-footer-brand-desc">
                    India’s premium and fast-growing platform for hassle-free business registrations, compliance tracking, taxation filing, and ODR-enabled legal support.
                </p>
                <div class="fd-footer-socials">
                    <a href="#" class="fd-footer-social-icon"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="fd-footer-social-icon"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="fd-footer-social-icon"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="fd-footer-social-icon"><i class="fab fa-instagram"></i></a>
                </div>
            </div>

            <!-- Col 1: Registration -->
            <div>
                <h4 class="fd-footer-title">Registrations</h4>
                <ul class="fd-footer-links">
                    <li><a href="#">Private Limited Company</a></li>
                    <li><a href="#">Limited Liability Partnership</a></li>
                    <li><a href="#">One Person Company</a></li>
                    <li><a href="{{ url('/logo-design') }}">Logo Design</a></li>
                </ul>
            </div>

            <!-- Col 2: IP & Brands -->
            <div>
                <h4 class="fd-footer-title">Trademark & IP</h4>
                <ul class="fd-footer-links">
                    <li><a href="{{ url('/trademark-registration') }}">Trademark Registration</a></li>
                    <li><a href="{{ url('/trademark-objection-reply') }}">Objection Reply</a></li>
                    <li><a href="{{ url('/trademark-assignment') }}">Trademark Assignment</a></li>
                    <li><a href="{{ url('/trademark-opposition') }}">Trademark Opposition</a></li>
                    <li><a href="{{ url('/trademark-renewal') }}">Trademark Renewal</a></li>
                </ul>
            </div>

            <!-- Col 3: Tax & GST -->
            <div>
                <h4 class="fd-footer-title">GST & Taxes</h4>
                <ul class="fd-footer-links">
                    <li><a href="{{ url('/gst-registration') }}">GST Registration</a></li>
                    <li><a href="{{ url('/gst-return-filing') }}">GST Return Filing</a></li>
                    <li><a href="{{ url('/gstr-9-annual-return') }}">GSTR 9 (Annual)</a></li>
                    <li><a href="{{ url('/gst-lut-filing') }}">GST LUT Filing</a></li>
                    <li><a href="{{ url('/gst-eway-bill') }}">GST E-way Bill</a></li>
                </ul>
            </div>

            <!-- Col 4: Licenses -->
            <div>
                <h4 class="fd-footer-title">Licenses & ISO</h4>
                <ul class="fd-footer-links">
                    <li><a href="{{ url('/fssai-registration') }}">FSSAI Registration</a></li>
                    <li><a href="{{ url('/fssai-renewal') }}">FSSAI Renewal</a></li>
                    <li><a href="{{ url('/iec-code-registration') }}">Import Export Code</a></li>
                    <li><a href="{{ url('/iso-certification') }}">ISO Certification</a></li>
                    <li><a href="{{ url('/bis-certification') }}">BIS Certification</a></li>
                </ul>
            </div>

        </div>

        <!-- Divider -->
        <hr style="border-top: 1px solid var(--footer-border); margin: 0;">

        <!-- Footer Bottom Bar -->
        <div class="fd-footer-bottom">
            
            <div class="fd-footer-copy">
                Copyright © 2019 - 2026 <strong>Foundida</strong>. All rights reserved.
                <div class="fd-footer-grievance">
                    For grievance or complaints: <a href="mailto:complain@fastinfo.com">complain@fastinfo.com</a>
                </div>
            </div>

            <div>
                <ul class="fd-footer-bottom-links">
                    <li><a href="/policy/refund-policy/">Refund Policy</a></li>
                    <li><a href="/policy/privacy-policy/">Privacy Policy</a></li>
                    <li><a href="/policy/terms-and-conditions/">Terms & Conditions</a></li>
                    <li><a href="{{ url('/contact-experts') }}">Contact Us</a></li>
                    <li><a target="_blank" href="https://www.startupindia.gov.in/content/sih/en/profile.Startup.5f9ba89fe4b0b821042074a6.html">Recognised by DPIIT, Govt. of India</a></li>
                </ul>
            </div>

        </div>

    </div>
</footer>

<!-- Floating Action Dialer Button -->
<div class="fd-sticky-dialer">
    <a href="tel:+918069029400" class="fd-dialer-btn" aria-label="Call Customer Support">
        <i class="fas fa-phone-alt"></i>
    </a>
</div>
 
 <style>
     .modal-toggle {
         cursor: pointer;
         color: #268bd2;
     }

     .modal-wrapper {
         position: fixed;
         top: 0;
         right: 0;
         bottom: 0;
         left: 0;

         background: rgba(0, 0, 0, 0.8);
         z-index: -1;
         opacity: 0;

         -webkit-transition: opacity 0.2s ease-in;
         -moz-transition: opacity 0.2s ease-in;
         transition: opacity 0.2s ease-in;

         pointer-events: auto;
     }

     .modal-wrapper>div {
         width: 460px;
         height: 40%;
         position: absolute;

         top: 0;
         bottom: 0;
         left: 0;
         right: 0;

         margin: auto;

         vertical-align: middle;
         padding: 20px;
         border-radius: 6px;
         background: #fff;
         z-index: 1;
     }

     .close1 {
         background: #606061;
         color: #ffffff;
         line-height: 25px;
         position: absolute;
         right: -12px;
         text-align: center;
         top: -10px;
         width: 24px;
         text-decoration: none;
         font-weight: bold;
         -webkit-border-radius: 12px;
         -moz-border-radius: 12px;
         border-radius: 12px;
     }

     .close1:hover {
         background: #00d9ff;
     }
 </style>
 <div id="openModal1" class="modal-wrapper">
     <div class="modal">
         <a href="#close" title="Close" class="close1">X</a>
         <div class="modal-header">
             <h2>Modal Box 1</h2>
         </div>
         <div class="modal-content">
             <p>Some text for selection</p>
         </div>
     </div>
 </div>
 <script>
     var cb = document.querySelectorAll(".close1");
     for (i = 0; i < cb.length; i++) {
         cb[i].addEventListener("click", function() {
             var dia = this.parentNode.parentNode; /* You need to update this part if you change level of close button */
             dia.style.opacity = 0;
             dia.style.zIndex = -1;
         });
     }

     var mt = document.querySelectorAll(".modal-toggle");
     for (i = 0; i < mt.length; i++) {
         mt[i].addEventListener("click", function() {
             var targetId = this.getAttribute("data-target");
             var target = document.getElementById(targetId);
             target.style.opacity = 1;
             target.style.zIndex = 9999;

         });
     }
 </script>
     <script>
         ! function(e, t, n, s, u, a) {
             e.twq || (s = e.twq = function() {
                     s.exe ? s.exe.apply(s, arguments) : s.queue.push(arguments);
                 }, s.version = '1.1', s.queue = [], u = t.createElement(n), u.async = !0, u.src = '//static.ads-twitter.com/uwt.js',
                 a = t.getElementsByTagName(n)[0], a.parentNode.insertBefore(u, a))
         }(window, document, 'script');
         // Insert Twitter Pixel ID and Standard Event data below
         twq('init', 'o58nu');
         twq('track', 'PageView');
     </script>

<script type='text/javascript' src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type='text/javascript' src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script type='text/javascript' src='{{ asset("assets/js/header.js") }}'></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.validate.js') }}"></script>

<script>
    (function() {
        function optimizeCSS() {
            var links = document.querySelectorAll('link[rel="stylesheet"]');
            links.forEach(function(link) {
                if (link.hasAttribute("data-safe")) return;
                link.setAttribute("fetchpriority", "low");
                link.setAttribute("importance", "low");
                link.setAttribute("data-safe", "true");
            });
        }
        window.addEventListener("load", optimizeCSS);
    })();
</script>
<script type="text/javascript" src="https://unpkg.com/default-passive-events"></script>
<script>
    (function() {
        var link = document.createElement("link");
        link.rel = "preconnect";
        link.href = "https://fonts.gstatic.com";
        link.crossOrigin = "true";
        document.head.appendChild(link);

        var dns = document.createElement("link");
        dns.rel = "dns-prefetch";
        dns.href = "https://fonts.gstatic.com";
        document.head.appendChild(dns);
    })();
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js"></script>
<script>
    $(function() {
        $("img.lazy").lazyload({
            effect: "fadeIn"
        });
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll("img").forEach((img, index) => {
            if (!img.hasAttribute("fetchpriority")) {
                img.setAttribute("loading", "lazy");
            }
        });
    });
</script>
