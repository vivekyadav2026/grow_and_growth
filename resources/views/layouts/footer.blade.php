<section class="footer_change">
    <footer class="footer footer_bg_black">
        <div class="container">
            <style>
     .new_new_block_mobile {
         display: none;
     }

     .app_link_block_holder {
         margin-top: 15px;
     }

     .app_link_block_holder ul li a img {
         width: 100%;
     }

     .app_link_block_holder ul li {
         width: 30%;
     }

     .app_link_block_holder ul li:last-child {
         margin-left: 10px;
     }

     .app_link_block_holder ul {
         display: flex;
     }

     .footer_grid {
         display: grid;
         grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
         grid-gap: 30px;
         margin-bottom: 20px;
     }

     .grievance {
         width: 100%;
         float: left;
         color: #626262;
         text-align: left;
         margin-top: 20px;
         padding-left: 47px;
         font-size: 13px;
     }

     span.grievance a {
         text-decoration: none;
         color: #0D1B3D;
     }

     span.grievance a:hover {
         color: #09599d;
     }

     .footer_change .footer_links li {
         font-size: 15px !important;
     }
     .cstm_align{
         text-align:left;
     }
     .follow_us_destop_block{
         padding-left:0;
     }

     @media (max-width: 767px) {
         .app_link_block_holder ul li {
             width: 100%;
         }
         .follow_us_destop_block{
                 padding-left:15px;
             }
         .new_new_block_mobile {
             display: block;
             z-index: 99999999999999999999;
         }

         .new_new_block_mobile a {
             z-index: 99999999999999999999;
         }

         .new_new_block_mobile a {
             background-color: #00bb55;
             height: 60px;
             width: 60px;
             position: fixed;
             border-radius: 100%;
             display: flex;
             align-items: center;
             justify-content: center;
             color: #fff !important;
             font-size: 24px;
             bottom: 20px;
             left: 15px;
         }

         .footer_grid {
             grid-template-columns: 1fr 1fr;
             padding: 0 15px;
             grid-gap: 15px;
         }

         .footer_grid_block_last {
             margin-top: 15px;
         }

         .footer_bg_black .footer_black_img {
             margin-left: 0px !important;
         }

         .grievance {
             padding-left: 0;
         }
         .right_side{
             padding:0 15px;
         }
         .quick_links ul{
             margin-left: 0 !important;
             align-items: center;
             width: 100%;
         }
     }
         @media (max-width: 360px) {
             .quick_links ul{
                 flex-wrap: wrap;
             }
         }
 </style>
 <!-- /.row -->
 <div class="footer_grid">
     <div class="footer_grid_block">
         <div class="link_lists">
             <p>
                 <a data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false"
                     aria-controls="multiCollapseExample1">Business Registration</a>
             </p>
             <div class="collapse multi-collapse show" id="multiCollapseExample1">
                 <div class="card card-body">
                     <ul class="footer_links">
                         <li>
                             <a href="#">Private Limited Company</a>
                         </li>
                         <li>
                             <a href="#">Limited Liability Partnership</a>
                         </li>
                         <li>
                             <a href="#">One Person Company</a>
                         </li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
     <div class="footer_grid_block">
         <div class="link_lists">
             <p>
                 <a data-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false"
                     aria-controls="multiCollapseExample2">Trademark & Copyright</a>
             </p>
             <div class="collapse multi-collapse show" id="multiCollapseExample2">
                 <div class="card card-body">
                     <ul class="footer_links">
                         <li>
                             <a href="{{ url('/trademark-registration') }}">Trademark
                                 Registration</a>
                         </li>
                         <li>
                             <a href="{{ url('/trademark-objection-reply') }}">Trademark
                                 Objection Reply</a>
                         </li>
                         <li>
                             <a href="{{ url('/trademark-assignment') }}">Trademark
                                 Assignment</a>
                         </li>
                         <li>
                             <a href="{{ url('/trademark-opposition') }}">Trademark
                                 Opposition</a>
                         </li>
                         <li>
                             <a href="{{ url('/trademark-renewal') }}">Trademark
                                 Renewal</a>
                         </li>
                         <li>
                             <a href="#">Copyright
                                 Registration</a>
                         </li>
                         <li>
                             <a href="{{ url('/logo-design') }}">Logo
                                 Design</a>
                         </li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
     <div class="footer_grid_block">
         <div class="link_lists">
             <p>
                 <a data-toggle="collapse" href="#multiCollapseExample3" role="button" aria-expanded="false"
                     aria-controls="multiCollapseExample3">GST & Tax compliance</a>
             </p>
             <div class="collapse multi-collapse show" id="multiCollapseExample3">
                 <div class="card card-body">
                     <ul class="footer_links">
                         <li>
                             <a href="{{ url('/gst-registration') }}">GST
                                 Registration</a>
                         </li>
                         <li>
                             <a href="{{ url('/gst-return-filing') }}">GST
                                 Return Filing</a>
                         </li>
                         <li>
                             <a href="{{ url('/gstr-9-annual-return') }}">GSTR 9
                                 (Annual Return)</a>
                         </li>
                         <li>
                             <a href="{{ url('/gst-lut-filing') }}">GST
                                 LUT Filing</a>
                         </li>
                         <li>
                             <a href="{{ url('/gst-eway-bill') }}">GST
                                 E-way Bill</a>
                         </li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
     <div class="footer_grid_block">
         <div class="link_lists">
             <p>
                 <a data-toggle="collapse" href="#multiCollapseExample4" role="button" aria-expanded="false"
                     aria-controls="multiCollapseExample4">Licenses</a>
             </p>
             <div class="collapse multi-collapse show" id="multiCollapseExample4">
                 <div class="card card-body">
                     <ul class="footer_links">
                         <li>
                             <a href="{{ url('/fssai-registration') }}">FSSAI
                                 Registration</a>
                         </li>
                         <li>
                             <a href="{{ url('/fssai-renewal') }}">FSSAI
                                 Renewal</a>
                         </li>
                         <li>
                             <a href="{{ url('/fssai-modification') }}">FSSAI
                                 Modification</a>
                         </li>
                         <li>
                             <a href="{{ url('/iec-code-registration') }}">Import
                                 Export Code</a>
                         </li>
                         <li>
                             <a href="{{ url('/iec-code-renewal') }}">IEC
                                 Modification</a>
                         </li>
                         <li>
                             <a href="{{ url('/iso-certification') }}">ISO
                                 Certification</a>
                         </li>
                         <li>
                             <a href="{{ url('/bis-certification') }}">BIS
                                 Certification</a>
                         </li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
     <div class="footer_grid_block footer_grid_block_last">
         <div class="link_lists">
             <p>
                 <a data-toggle="collapse" href="#multiCollapseExample5" role="button" aria-expanded="false"
                     aria-controls="multiCollapseExample5">About Foundida</a>
             </p>
             <div class="collapse multi-collapse show" id="multiCollapseExample5">
                 <div class="card card-body">
                     <ul class="footer_links">
                         <li>
                             <a target="_blank" href="https://www.fastinfo.com/career">Careers</a>
                         </li>
                         <li>
                             <a href="{{ url('/contact-experts') }}">Contact Us</a>
                         </li>
                         <li>
                             <a href="/blogs/">Blogs</a>
                         </li>
                     </ul>
                     <div class="app_link_block_holder">
                         <ul>
                             <li>
                                 <a target="_blank"
                                     href="https://play.google.com/store/apps/details?id=com.fastinfoclass.onlinelegalindia"><img
                                         src="{{ asset('assets/images/google-play-badge.webp') }}"
                                         alt="Google Play Badg"></a>
                             </li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <hr style="border-top: 1px solid #232222; margin-top:0px;">
 <div class="row">
     <div class="col-md-3 text-center">
         <div class="footer_logo_img">
             <img src="{{ asset('assets/images/logos/Foundida_Logo_Main.webp') }}" class="footer_black_img"
                 alt="Foundida logo logo" style="max-width:180px; margin-left: -30px;" />
         </div>
     </div>
     <div class="col-md-9 text-right right_side">
         <div class="widget quick_links">
             <ul style="display: inline-flex; list-style: none; margin-left: 20px;">
                 <li id="event-link"><a href="#">Event</a></li>
             </ul>
             <span class="grievance" style="">For any grievance mail to: <a
                     href="mailto:complain@fastinfo.com">complain@fastinfo.com</a></span>
         </div>
     </div>
 </div>
 <!-- /.row -->
 <section class="new_new_block_mobile">
     <a title="Contact" href="tel:08069029400" class="info info_a"><i class="fas fa-phone-alt"></i></a>
 </section>
         </div>
         <!-- /.container -->
     </footer>
 </section>
 <section class="sticky_diller">
     <div class="phone_icon_box">
         <a id="comp-jt4j4llw" aria-label="Phone" data-quick-action="action" data-aid="phone" class="_3aNs1 _2cVg8" href="tel:+91 8069029400">
             <div class="phonesvg" data-quick-action="icon">
                 <svg data-bbox="17.052 7.009 15.938 16.944" width="50" height="30" viewBox="17.052 7.009 15.938 16.944" xmlns="http://www.w3.org/2000/svg">
                     <g>
                         <path d="M21.886 7.46c-.265-.483-.827-.599-1.271-.247l-1.74 1.38c-2.164 1.718-2.44 4.79-.618 6.86l5.96 6.772c1.822 2.07 5.011 2.316 7.13.542l1.313-1.1c.428-.357.444-.946.028-1.322l-2.904-2.63c-.412-.373-1.105-.404-1.54-.076l-1.714 1.296-4.843-5.353 1.743-1.259c.446-.321.595-.97.327-1.457l-1.87-3.406z" fill-rule="evenodd"></path>
                     </g>
                 </svg>
             </div>
         </a>
     </div>
 </section>
 <section>
     <div class="bottom footer_bottom footer_bg_black">
         <div class="container">
             <div class="row">
                 <div class="col-md-12">
                     <div class="trustpilot_box">

                     </div>
                     <div class="foot_trust_con">
                     </div>
                     <div class="footer_copyright">
                         Copyrights 2019 - 2026 Foundida.
                     </div>

                     <div class="widget footer_bottom_menu">
                         <ul id="menu-bottom" class="menu">
                             <li id="menu-item-2872" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2872"><a href="/policy/refund-policy/">Refund Policy</a></li>
                             <li id="menu-item-2873" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2873"><a href="/policy/privacy-policy/">Privacy Policy</a></li>
                             <li id="menu-item-2874" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-1771 current_page_item menu-item-2874"><a href="/policy/terms-and-conditions/" aria-current="page">Terms and Conditions</a></li>
                             <li id="menu-item-2875" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-1771 current_page_item menu-item-2874"><a href="https://www.startupindia.gov.in/content/sih/en/profile.Startup.5f9ba89fe4b0b821042074a6.html#" target="_blank">Recognised by DPIIT, Government of India</a></li>
                         </ul>
                     </div>


                 </div>
                 <!-- /.col-md-12 -->
             </div>
             <!-- /.row -->
         </div>
         <!-- /.container -->
     </div>
 </section>
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
