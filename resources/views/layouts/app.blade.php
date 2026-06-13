<!DOCTYPE html>
<html lang="en-US">

<head>
   <meta charset="utf-8">
   <meta http-equiv="cache-control" content="no-cache" />
   <meta http-equiv="Pragma" content="no-cache" />
   <meta http-equiv="Expires" content="-1" />
   <meta name="viewport" content="width=device-width, height=device-height, maximum-scale=1.0, initial-scale=1.0, user-scalable=no,user-scalable=0" />
   <meta name="robots" content="index, follow" />
   
   @yield('meta')

   <link rel="icon" href="{{ asset('assets/images/logos/Foundida_Favicon.ico') }}" sizes="any" type="image/svg+xml">
   <link rel="stylesheet" href="{{ asset('assets/css/jquery-confirm.min.css') }}">
   <noscript>
      <link rel="stylesheet" href="{{ asset('assets/css/jquery-confirm.min.css') }}">
   </noscript>
   <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/css/Roboto.css') }}">
   <link rel="preload" as="style" onload="this.rel = 'stylesheet'" href='{{ asset("assets/css/Popins.css") }}' />
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.13.0/css/all.min.css">
   <noscript>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.13.0/css/all.min.css">
   </noscript>
   
   <link rel='stylesheet' href='{{ asset("assets/css/all_scond.css?v=12:28:53") }}' type='text/css' media='all' />
   <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
   <link rel="stylesheet" href="{{ url('/') }}">
   
   <style>
      .oli-validate-form .error {
         color: red
      }

      .oli-validate-form input.error,
      .oli-validate-form textarea.error {
         border: 1px solid red !important;
      }

      #finalResult {
         list-style-type: none;
         padding: 0;
         margin: 0;
      }

      #finalResult li a {
         border: 1px solid #ddd;
         margin-top: -1px;
         background-color: #f6f6f6;
         padding: 12px;
         text-decoration: none;
         font-size: 18px;
         color: black;
         display: block;
      }

      #finalResult li a:hover:not(.header) {
         background-color: #eee;
         color: skyblue;
      }

      .mob_email {
         display: inline-block
      }

      @media screen and (max-width:768px) {
         .mob_email {
            display: none
         }

         .mob_num {
            margin-top: 5px;
            display: block;
         }

         .mob_num span i {
            font-size: 11px;
         }

         #topheader .contact a:nth-child(1) b {
            font-size: 13px
         }
      }
   </style>

   <!-- Google Tag Manager -->
   <script>
      (function(w, d, s, l, i) {
         w[l] = w[l] || [];
         w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
         });
         var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
         j.async = true;
         j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
         f.parentNode.insertBefore(j, f);
      })(window, document, 'script', 'dataLayer', 'GTM-MBJ86P3F');
   </script>
   <!-- End Google Tag Manager -->

   <style>
      .trustpilot-widget {
         background: #ffffffc7;
         display: inline-block;
         padding: 6px 10px;
         border-radius: 0;
      }

      #topheader .trustpilot-widget {
         position: absolute !important;
         left: 50%;
         transform: translateX(-50%);
         top: 0;
         height: 42px;
      }

      .foot_trust_con .trustpilot-widget {
         position: relative !important;
      }

      .new_mobile_number_hide {
         display: none;
      }

      /* Supriyo css */
      .pms_system {
         position: absolute !important;
         left: 54%;
         transform: translateX(-50%);
         top: 0;
         height: 42px;
         background: #ffffffc7;
         display: inline-block;
         padding: 10px 10px;
         border-radius: 0;
         color: #0D1B3D;
         font-weight: 700;
      }

      .new_year_marquee_tag_section {
         background-color: #0D1B3D;
         padding: 6px 0;
         float: left;
         width: 100%;
      }

      .new_year_marquee_tag_section_inner {
         overflow: hidden;
         width: 100%;
      }

      .new_year_marquee_tag_section_section {
         display: flex;
         width: max-content;
         animation: scroll-left 20s linear infinite;
         align-items: center;
      }

      @keyframes scroll-left {
         0% {
            transform: translateX(0);
         }

         100% {
            transform: translateX(-50%);
         }
      }

      .new_year_marquee_tag_section_section p {
         color: #fff;
         font-size: 18px;
         margin-bottom: 0 !important;
      }

      .new_year_marquee_tag_section_section img {
         width: 20px;
         margin: 0 20px;
      }

      /* Supriyo end */
      @media (max-width: 767px) {
         .new_year_marquee_tag_section {
            padding: 10px 0;
         }

         #topheader .trustpilot-widget {
            left: 0;
            transform: inherit;
            top: 40px;
            height: 42px;
            width: 100%;
         }

         /* Supriyo css */
         section#topheader {
            float: none;
            height: unset;
         }

         .pms_system {
            left: 0;
            transform: inherit;
            top: 40px;
            height: 42px;
            width: 100%;
            padding: 1px 10px;
            font-size: 13px;
            text-align: center;
         }

         /* Supriyo css end */
      }
   </style>
   <!-- Bing Webmaster tool verification -->
   <meta name="msvalidate.01" content="BDB546F6117150996F440E37C2CA66EE" />
   <!-- Bing Webmaster tool verification -->
   <meta name="yandex-verification" content="3c4eed36ca962ae8" />

   <!-- Google tag (gtag.js) start -->
   <script async src="https://www.googletagmanager.com/gtag/js?id=AW-767312690"></script>
   <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
         dataLayer.push(arguments);
      }
      gtag('js', new Date());

      gtag('config', 'AW-767312690');
   </script>
   <!-- Google tag (gtag.js) end  -->

   <!-- bing ads tag start 18/5/2023 -->
   <script>
      (function(w, d, t, r, u) {
         var f, n, i;
         w[u] = w[u] || [], f = function() {
            var o = {
               ti: "17495169",
               enableAutoSpaTracking: true
            };
            o.q = w[u], w[u] = new UET(o), w[u].push("pageLoad")
         }, n = d.createElement(t), n.src = r, n.async = 1, n.onload = n.onreadystatechange = function() {
            var s = this.readyState;
            s && s !== "loaded" && s !== "complete" || (f(), n.onload = n.onreadystatechange = null)
         }, i = d.getElementsByTagName(t)[0], i.parentNode.insertBefore(n, i)
      })(window, document, "script", "//bat.bing.com/bat.js", "uetq");
   </script>
   <!-- bing ads tag end 18/5/2023 -->
   <!-- Meta Pixel Code -->
   <script>
      ! function(f, b, e, v, n, t, s) {
         if (f.fbq) return;
         n = f.fbq = function() {
            n.callMethod ?
               n.callMethod.apply(n, arguments) : n.queue.push(arguments)
         };
         if (!f._fbq) f._fbq = n;
         n.push = n;
         n.loaded = !0;
         n.version = '2.0';
         n.queue = [];
         t = b.createElement(e);
         t.async = !0;
         t.src = v;
         s = b.getElementsByTagName(e)[0];
         s.parentNode.insertBefore(t, s)
      }(window, document, 'script',
         'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '3125726261001030');
      fbq('track', 'PageView');
   </script>
   <noscript><img height="1" width="1" style="display:none"
         src="https://www.facebook.com/tr?id=3125726261001030&ev=PageView&noscript=1" /></noscript>
   <!-- End Meta Pixel Code -->

   <!-- Foundida Custom Theme -->
   <link rel="stylesheet" href="{{ asset('assets/css/foundida-theme.css') }}?v=3.0">
   
   @yield('styles')
</head>

<body>
   @include('layouts.header')

   @yield('content')

   @include('layouts.footer')

   @yield('scripts')
</body>

</html>
