@extends('layouts.app')

@section('meta')
<title>Settle Business Disputes through ODR | Online Legal India</title>
<meta name="description" content="Settle business disputes efficiently with Online Legal India's ODR service. Simple, reliable solutions. File online, track progress, and get support.">
<!-- <meta name="keywords" content="Trademark Registration"> -->
<link rel="canonical" href="https://www.onlinelegalindia.com/services/business-dispute/"/>
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.onlinelegalindia.com/services/business-dispute/">
<meta property="og:image" content="https://www.onlinelegalindia.com/images/business-dispute/settle-business-disputes-online.webp">
<meta property="og:title" content="Settle Business Disputes through ODR | Online Legal India">
<meta property="og:site_name" content="OnlineLegalIndia">
<meta property="og:description" content="Settle business disputes efficiently with Online Legal India's ODR service. Simple, reliable solutions. File online, track progress, and get support.">
<meta property="og:locale" content="en-IN">
@endsection

@section('styles')
<!--      <link rel="stylesheet" type="text/css" href="https://www.onlinelegalindia.com/css/bootstrap.min.css">-->
   <!-- <link rel="stylesheet" type="text/css" href="https://www.onlinelegalindia.com/css/cut.css"> -->
   <!-- <link rel="stylesheet" type="text/css" href="https://www.onlinelegalindia.com/css/alternative-contact-popup.css"> -->
   <!-- <link rel="stylesheet" href="https://www.onlinelegalindia.com/css/brands.min.css"> -->
   <!-- <link rel="stylesheet" href="https://www.onlinelegalindia.com/css/solid.min.css"> -->
@endsection

@section('content')
<!-- ════════════════════════════════════════
     HERO SECTION
════════════════════════════════════════ -->
<section class="hero-section">
   <div class="container">
      <div class="row hero-content">
         <!-- Left: Text -->
         <div class="col-md-7 col-sm-7 col-xs-12">
            <div class="hero-title">
               <h1>Settle <span class="heading-accent">Business Disputes Online</span></h1>
            </div>
            <div class="hero-desc">
               Fast, Simple &amp; Online Solutions for Business Owners, MSMEs and Startups
               <span class="hero-sub">
                  With Online Legal India's Online Dispute Resolution (ODR) platform, settle your business disputes efficiently—without court visits, long delays, or complex legal processes.
               </span>
            </div>

         </div>
         <!-- Right: Image -->
         <div class="col-md-5 col-sm-5 col-xs-12 hero-img-wrap tab_view">
            <img src="https://www.onlinelegalindia.com/images/business-dispute/saurabh-sukhla.webp" alt="Saurabh Shukla – Brand Ambassador" class="hero-person">
         </div>
      </div>
   </div>
</section>

<!-- ════════════════════════════════════════
     FORM + TYPES OF DISPUTES
════════════════════════════════════════ -->
<section class="common_class form-types-section">
   <div class="container">
      <div class="row">
         <!-- Form -->
         <div class="col-md-5 col-sm-6 col-xs-12">
            <div class="one_right">
               <h5>We’re here to help</h5>
               <form class="form_one_right oli-validate-form" id="contact2" action="https://www.onlinelegalindia.com/payment/submit-pf-esi-registration.php" method="post" enctype="multipart/form-data" novalidate="novalidate">
                  <input type="hidden" id="gclid_field" name="gclid_field" value="">
                  <input type="hidden" id="landing_uri" name="landing_uri" value="https://www.onlinelegalindia.com/services/business-dispute/">
                  <div id="first_div" class="from_first_section">

                     <div class="form-group">
                        <input type="text" name="name" id="name" class="form-control new_control" placeholder="Your Name">
                     </div>

                     <div class="form-group">
                        <input type="text" name="mobile" id="mobile" class="form-control new_control" placeholder="Your Mobile Number">
                     </div>

                     <div class="form-group">
                        <input type="text" name="email" id="email" class="form-control new_control" placeholder="Your Email Address">
                     </div>

                     <div class="form-group">
                        <select name="state" id="state" class="new_control new_control_select">
                           <option value="">State</option>
                           <option value="Andhra Pradesh">Andhra Pradesh</option>
                           <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                           <option value="Assam">Assam</option>
                           <option value="Bihar">Bihar</option>
                           <option value="Chhattisgarh">Chhattisgarh</option>
                           <option value="Delhi">Delhi</option>
                           <option value="Goa">Goa</option>
                           <option value="Gujarat">Gujarat</option>
                           <option value="Haryana">Haryana</option>
                           <option value="Himachal Pradesh">Himachal Pradesh</option>
                           <option value="Jammu &amp; Kashmir">Jammu &amp; Kashmir</option>
                           <option value="Jharkhand">Jharkhand</option>
                           <option value="Karnataka">Karnataka</option>
                           <option value="Kerala">Kerala</option>
                           <option value="Madhya Pradesh">Madhya Pradesh</option>
                           <option value="Maharashtra">Maharashtra</option>
                           <option value="Manipur">Manipur</option>
                           <option value="Meghalaya">Meghalaya</option>
                           <option value="Mizoram">Mizoram</option>
                           <option value="Nagaland">Nagaland</option>
                           <option value="Odisha">Odisha</option>
                           <option value="Punjab">Punjab</option>
                           <option value="Rajasthan">Rajasthan</option>
                           <option value="Sikkim">Sikkim</option>
                           <option value="Tamil Nadu">Tamil Nadu</option>
                           <option value="Telangana">Telangana</option>
                           <option value="Tripura">Tripura</option>
                           <option value="Uttarakhand">Uttarakhand</option>
                           <option value="Uttar Pradesh">Uttar Pradesh</option>
                           <option value="West Bengal">West Bengal</option>
                           <option value="Others">Others</option>
                           <option value="Out Of India">Out Of India</option>
                        </select>
                     </div>
                     <input type="hidden" name="csrf_token" id="csrf_token" value="ff8058fa1547a9f5d92bef5b357b524c5091c82893d88c08e000fa12ac17c9ab">
                     <input type="hidden" id="oliid" name="oliid" value="">

                     <div class="form_check">
                        <label class="custom_check">I have read &amp; agreed to the company's Terms and Conditions, disclaimer and refund policy, and also ready to accept calls, SMS, emails, etc.
                           <input type="checkbox" data-degree="°" name="is_prompted_whatsapp" checked="" value="1">
                           <span class="form_checkmark"></span>
                        </label>
                     </div>


                     <div class="form_group_button">
                        <button type="button" name="next" id="nextBtn" class="btn tsfb_started">Proceed Now</button>
                     </div>

                  </div>


               </form>
            </div>
         </div>

         <!-- Types of Disputes -->
         <div class="col-md-7 col-sm-6 col-xs-12 types-col">
            <div class="section-title">
               Types of <span class="heading-accent">Business Disputes We Handle</span>
            </div>
            <div class="subheading">We assist in resolving</div>
            <ul>
               <li>MSME payment &amp; dues recovery disputes</li>
               <li>Vendor &amp; supplier conflicts</li>
               <li>Contract disputes between businesses</li>
               <li>Service-level disagreements</li>
               <li>Freelancer &amp; agency payment issues</li>
               <li>Partnership disputes (pre-litigation stage) & many more.</li>
            </ul>

            <div class="legal-framework">
               <div class="lf-title">Legal <span class="heading-accent">Framework</span></div>
               <p>
                  Our dispute resolution process is based on recognized principles of arbitration and
                  mediation, aligned with applicable Indian laws, including:
               </p>
               <ul>
                  <li>Arbitration and Conciliation Act, 1996 (where applicable)</li>
                  <li>Mediation Act, 2023</li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</section>

<!-- ════════════════════════════════════════
     WHO SHOULD USE
════════════════════════════════════════ -->
<section class="common_class who-section">
   <div class="container">
      <div class="section-title scenter">
         Who Should <span class="heading-accent">Use This Service?</span>
      </div>
      <div class="row">
         <!-- Card 1 -->
         <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="who-card">
               <img src="https://www.onlinelegalindia.com/images/business-dispute/business.webp" alt="Business Owners" class="card-icon">
               <span>Business Owners &amp; SMEs</span>
            </div>
         </div>
         <!-- Card 2 -->
         <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="who-card">
               <img src="https://www.onlinelegalindia.com/images/business-dispute/startups.webp" alt="Startups" class="card-icon">

               <span>Startups &amp; Founders</span>
            </div>
         </div>
         <!-- Card 3 -->
         <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="who-card">
               <img src="https://www.onlinelegalindia.com/images/business-dispute/freelancers.webp" alt="Freelancers" class="card-icon">

               <span>Freelancers &amp; Consultants</span>
            </div>
         </div>
         <!-- Card 4 -->
         <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="who-card">
               <img src="https://www.onlinelegalindia.com/images/business-dispute/partnership.webp" alt="Partnership Firms" class="card-icon">

               <span>Partnership Firms</span>
            </div>
         </div>
         <!-- Card 5 -->
         <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="who-card">
               <img src="https://www.onlinelegalindia.com/images/business-dispute/e-commerce.webp" alt="E-commerce" class="card-icon">

               <span>E-commerce Sellers &amp; Traders</span>
            </div>
         </div>
         <!-- Card 6 -->
         <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="who-card">
               <img src="https://www.onlinelegalindia.com/images/business-dispute/hr.webp" alt="HR & Employers" class="card-icon">

               <span>HR &amp; Employers</span>
            </div>
         </div>
      </div>
   </div>
</section>

<!-- ════════════════════════════════════════
     WHY CHOOSE
════════════════════════════════════════ -->
<section class="common_class why-section">
   <div class="container">
      <div class="row">
         <!-- Left: Text -->
         <div class="col-md-7 col-sm-7 col-xs-12">
            <div class="section-title">
               Why Choose <span class="heading-accent">Online Legal India?</span>
            </div>
            <ul class="why-list">
               <li>
                  <img src="https://www.onlinelegalindia.com/images/business-dispute/tick.webp" alt="tick" class="tick-icon">
                  100% Online Process – No court visits required for the resolution process
               </li>
               <li>
                  <img src="https://www.onlinelegalindia.com/images/business-dispute/tick.webp" alt="tick" class="tick-icon">
                  Faster Resolution – Designed to resolve disputes faster than traditional legal routes, subject to case-specific factors
               </li>
               <li>
                  <img src="https://www.onlinelegalindia.com/images/business-dispute/tick.webp" alt="tick" class="tick-icon">
                  Cost-Effective Approach
               </li>
               <li>
                  <img src="https://www.onlinelegalindia.com/images/business-dispute/tick.webp" alt="tick" class="tick-icon">
                  Experienced dispute resolution professionals and legal consultants
               </li>
               <li>
                  <img src="https://www.onlinelegalindia.com/images/business-dispute/tick.webp" alt="tick" class="tick-icon">
                  Confidential and secure process
               </li>
               <li>
                  <img src="https://www.onlinelegalindia.com/images/business-dispute/tick.webp" alt="tick" class="tick-icon">
                  Bulk file upload
               </li>
            </ul>
         </div>
         <!-- Right: Image -->
         <div class="col-md-5 col-sm-5 col-xs-12">
            <div class="why-img-wrap">
               <img src="https://www.onlinelegalindia.com/images/business-dispute/why-choose.webp" alt="Expert Services">

            </div>
         </div>
      </div>
   </div>
</section>

<!-- ════════════════════════════════════════
     PANEL SECTION
════════════════════════════════════════ -->
<section class="new_float cstm_padd common_class">
   <div class="container">
      <div class="header">
         <h2>Our Team Of Arbitrators / Mediators Includes</h2>
      </div>

      <div class="content">
         <ul class="team-list">
            <li>Former Judge, Hon'ble High Court</li>
            <li>Former Registrar NCLT and DRT, Govt. of India</li>
            <li>IIAM Certified &amp; Member of APCAM</li>
         </ul>
      </div>

      <div class="disclaimer">
         <div class="disclaimer-title">Disclaimer:</div>
         <div class="disclaimer-text">Our Mediators / Arbitrators Are Professionals Who Act Strictly In A Neutral, Private &amp; Non-judicial Capacity.</div>

      </div>

      <div class="footer">
         <h3>Online Dispute Resolution</h3>
      </div>
   </div>
</section>

<!-- ════════════════════════════════════════
     CTA SECTION
════════════════════════════════════════ -->
<section class="cta-section">
   <div class="container">
      <div class="cta-title">
         <p class="scd_txt">Stop Chasing Disputes.</p>
         <p class="heading-accent">Start Resolving Them.</p>
      </div>
      <div class="cta-desc">
         Take control with a faster, structured approach to resolving business conflicts.
      </div>
      <div class="cta-btn-wrap">
         <button class="btn-orange apply_now_green">Submit</button>
      </div>
   </div>
</section>

<style>
    .rajesh_kewat_text3 h4 {
        text-align: center !important;
        font-size: 22px;
        color: #3c3e41;
        text-align: right;
        font-weight: bold;
    }

    .rajesh_kewat_text3 p {
        text-align: center;
    }
</style>
<section class="new_md_section">
    <div class="container">
        <div class="new_md_section_inner">

            <div class="row custtmm_rww">
                <div class="col-md-4 col-xs-4">
                    <div class="new_md_section_left">
                        <img src="https://www.onlinelegalindia.com/images/banner/md-new3.webp" alt="Rajesh Kewat">
                    </div>
                    <div class="new_md_section_left_text">
                        <h4>Rajesh Kewat</h4>
                        <p>The Founder & CEO of Online Legal India, Mr. Rajesh Kewat actually had the courage to sacrifice his well paid job at Oxford and turn his startup dream into a multi crore turnover company.</p>
                    </div>
                </div>
                <div class="col-md-8 col-xs-8">
                    <div class="new_md_section_right">

                        <div class="nmsr_block">
                            <div class="nmsr_block_img">
                                <img src="https://www.onlinelegalindia.com/images/about-us/zeenews.webp" alt="Zee News">
                            </div>
                            <div class="nmsr_block_text">
                                <p>Meet Rajesh Kewat, The Small Town Entrepreneur Behind Online Legal India's Success</p>
                            </div>

                        </div>

                        <div class="nmsr_block">
                            <div class="nmsr_block_img">
                                <img src="https://www.onlinelegalindia.com/images/Ted-x.webp" alt="TEDx">
                            </div>
                            <div class="nmsr_block_text">
                                <p>From Rs. 2000 Salary to Multi-Crore Turnover Company | Rajesh Kewat | TEDxPradhikaran.</p>
                            </div>

                        </div>

                        <div class="nmsr_block">
                            <div class="nmsr_block_img">
                                <img src="https://www.onlinelegalindia.com/images/about-us/footer-forbes-logo-new.webp" alt="Forbes">
                            </div>
                            <div class="nmsr_block_text">
                                <p>Mr. Rajesh Kewat getting featured in the special edition of Forbes India Magazine - Showstoppers 2022-23</p>
                            </div>

                        </div>

                        <div class="nmsr_block">
                            <div class="nmsr_block_img">
                                <img src="https://www.onlinelegalindia.com/images/Asia_One.webp" alt="Asia One">
                            </div>
                            <div class="nmsr_block_text">
                                <p>Rajesh Kewat, the MD of FastInfo Legal Services Pvt Ltd, owns a movie-like story; a man who lost everything for his love & attained great success within just 500 days with his innovative business.</p>
                            </div>

                        </div>

                        <div class="nmsr_block">
                            <div class="nmsr_block_img">
                                <img src="https://www.onlinelegalindia.com/images/midday9999.webp" alt="Mid Day">
                            </div>
                            <div class="nmsr_block_text">
                                <p>Rajesh Kewat Conferred with Businessman of the Year Award at Brands Impact NFA 2022.</p>
                            </div>

                        </div>
                        <div class="nmsr_block nmsr_block99">
                            <div class="new_past_exprience">
                                <h5>Past Experiences</h5>
                                <div class="new_past_exprience_inner">
                                    <img src="https://www.onlinelegalindia.com/images/oxford.webp" alt="Oxford">
                                    <img src="https://www.onlinelegalindia.com/images/Pearson_logo.webp" alt="Pearson" class="pearson">
                                    <img src="https://www.onlinelegalindia.com/images/educomp_logo_1.webp" alt="Educamp">
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <!-- <div class="rajesh_kewat_text">
                <p>‘Kahin par pohochne ke liye, kahin se nikalna bohot zaroori hota hai’</p>
                <h5 class="deewani">- Yeh Jawani Hain Deewani</h5>

            </div> -->

            <div class="rajesh_kewat_text3_block">
                <div class="rajesh_kewat_text3">
                    <h4>From CEO's Desk</h4>
                    <p class="text_p">‘You don’t need MONEY to build your business empire, what you need is big dreams & a SHARP MIND! If you got it, try it.’</p>
                    <div class="rajesh_kewat_arrow"></div>

                </div>
            </div>
            <div class="rajesh_kewat_text4">
                <h5>- Rajesh Kewat</h5>
            </div>

        </div>
    </div>
</section>
<section class="block_padding">
   <div class="container">
      <div class="row">
         <div class="common_heading new_block_heading_block">
            <h2>Frequently Asked Questions (FAQs)</h2>
         </div>

         <div class="faq" style="margin-bottom: 25px;">

            <div data-port-id="child_ans_div_15" class="accordaion-main-div">
               <h4 class="accordion-cus-head">
                  Is this legally valid?
               </h4>
            </div>

            <div id="child_ans_div_15" class="child-ans-div-1">

               <!-- <ul class="child-ans-textt">

                  <li>Builder–buyer disagreements</li>
                  <li>Delay in possession or handover</li>
                  <li>Payment or refund disputes</li>
                  <li>Token or booking amount conflicts</li>
                  <li>Rent and security deposit issues</li>
               </ul> -->
               <p class="child-ans-text">Our process follows structured dispute resolution mechanisms based on mediation and negotiation principles. Enforceability depends on mutual agreement between parties and applicable legal provisions.</p>
            </div>

            <div data-port-id="child_ans_div_1" class="accordaion-main-div">
               <h4 class="accordion-cus-head">Do I need to go to court?</h4>
            </div>
            <div id="child_ans_div_1" style="display: none;" class="child-ans-div-1">
               <p class="child-ans-text">No court visits are required during the dispute resolution process. However, enforcement or escalation may involve legal proceedings if required.</p>
            </div>


            <div data-port-id="child_ans_div_2" class="accordaion-main-div">
               <h4 class="accordion-cus-head">How long does it take?</h4>
            </div>
            <div id="child_ans_div_2" style="display: none;" class="child-ans-div-1">
               <p class="child-ans-text">Many disputes are resolved within a few days to a few weeks, depending on case complexity and participation of both parties.</p>
            </div>


            <div data-port-id="child_ans_div_3" class="accordaion-main-div">
               <h4 class="accordion-cus-head">Why should I choose this instead of following up on my own?</h4>
            </div>
            <div id="child_ans_div_3" style="display: none;" class="child-ans-div-1">
               <p class="child-ans-text">A structured dispute resolution process often increases seriousness and response rates compared to informal follow-ups. It also saves time and provides guided support throughout the process</p>
            </div>


            <div data-port-id="child_ans_div_4" class="accordaion-main-div">
               <h4 class="accordion-cus-head">Can this be used for high-value disputes? </h4>
            </div>
            <div id="child_ans_div_4" style="display: none;" class="child-ans-div-1">
               <p class="child-ans-text">Yes, this process can be used for disputes of varying values. Suitability depends on the nature of the dispute and willingness of the parties to resolve it</p>
            </div>

            <div data-port-id="child_ans_div_5" class="accordaion-main-div">
               <h4 class="accordion-cus-head">Is there a way to resolve disputes without incurring high legal costs?</h4>
            </div>
            <div id="child_ans_div_5" style="display: none;" class="child-ans-div-1">
               <p class="child-ans-text">Yes, resolving disputes through a structured online process can help avoid or minimise expenses typically associated with litigation, such as court fees, extended timelines, and related legal costs. Since this approach focuses on early resolution, it may help parties save time and costs compared to traditional legal proceedings. However, actual savings depend on the nature of the dispute and the outcome of the process.</p>
            </div>
         </div>
      </div>
      <!-- <div class="disclaimer_txt">
         <p><strong>Disclaimer:</strong> Online Legal India is a platform which provides ODR facilitation services. Nothing on this site constitutes legal advice. For legal representation in courts or tribunals, you are free to approach legal professionals. Results cannot be guaranteed and depend on case specifics. Our panel includes experienced, independent mediators and arbitrators, including retired judges and ex-senior tribunal officials (engaged in their private capacities). They act as neutrals and are not acting in any official judicial capacity for the Government of India.</p>
      </div> -->
   </div>
</section>



<style>
    #send_WhatsApp .error {
        color: red;
        font-size: 11px;
    }

    #send_WhatsApp input.error,
    #send_WhatsApp textarea.error {
        border: 1px solid red !important;
    }

    .footer {
        padding: 21px 0 60px 0;
        padding-top: 40px;
        border-top: 1px solid;
        background: #2e363a;
    }

    .footer_bottom_img img {
        width: 63%;
        position: absolute;
        left: 52px;
        top: -10px;
    }

    .footer_bottom {
        height: 110px;
        padding-top: 0;
        margin-top: -8px;
    }

    .footer_copyright {
        margin-top: 10px;
    }

    .review_icon li {
        float: left;
        list-style: none;
        margin-right: 12px;
        margin-bottom: 15px;
    }

    .review_icon li a {
        font-size: 12px;
    }

    .footer_change .footer_bg_black {
        background-color: #0563bf21 !important;
        padding-top: 40px !important;
    }

    .footer_change .footer_bg_black .link_lists p a {
        color: #002b42;
        margin-bottom: 6px;
        display: inline-block;
    }

    .footer_change .footer_bg_black .footer_links li a {
        color: #6d6d6d;
    }

    .footer_change .footer_links li {
        font-size: 14px;
        margin-bottom: 6px;
        color: #6d6d6d;
    }

    .footer_change .review_icon li a {
        color: #6d6d6d !important;
    }

    .footer_change .footer_bg_black .social_title {
        color: #6d6d6d;
    }

    .footer_change .footer_bg_black .quick_links ul li a,
    .footer_change .footer_bg_black .social_title,
    .footer_change .footer_bg_black .quick_links ul li a,
    .footer_change .footer .textwidget p {
        color: #6d6d6d;
    }

    .footer_bg_black {
        background-color: #215585 !important;
        padding-top: 20px !important;
        height: auto !important;
    }

    .footer_copyright,
    .footer_bottom_menu .menu li a {
        color: #fff !important;
    }

    .social_icons a img {
        margin: 5px 5px 0 0;
        width: 28px;
    }

    @media (max-width: 1024px) {
        .footer_bg_black .social_title {
            margin-top: 20px;
        }

        .footer_bottom_img img {
            top: 11px;
        }

        .quick_links ul {
            margin-top: 34px;
        }
    }

    @media (max-width: 991px) {
        .footer_bottom_img {
            position: absolute;
            right: 0;
            top: 27px;
        }

        .footer_bottom_img img {
            width: 48%;
            position: relative;
            right: 0;
            top: -90px;
        }

        .quick_links ul {
            margin-top: 63px;
        }
    }

    @media (max-width: 768px) {
        .footer_bottom_img {
            position: absolute;
            right: 0;
            top: 23px;
        }

        .footer_bottom_img img {
            width: 48%;
            position: relative;
            right: 0;
            top: -90px;
        }

        .quick_links ul {
            margin-top: 45px;
        }
    }

    @media (max-width: 425px) {
        .footer_bottom_img {
            position: absolute;
            right: 0;
            top: 27px;
        }

        .footer_bottom_img img {
            width: 41%;
            position: relative;
            right: 0;
            top: -88px;
        }
    }
</style>
<section>
    <footer class="footer footer_bg_black" style="display: none;">
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
        color: #337ab7;
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
<style>

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
                        <!-- <li>
                            <a href="https://www.onlinelegalindia.com/services/company-registration/private-company-registration/">Private Limited Company</a>
                        </li> -->
                        <li>
                            <a href="https://www.onlinelegalindia.com/services/company-registration/private-company-registration/">Private Limited Company</a>
                        </li>
                        <li>
                            <a href="https://www.onlinelegalindia.com/services/company-registration/llp-partnership/">Limited
                                Liability Partnership</a>
                        </li>
                        <li>
                            <a
                                href="https://www.onlinelegalindia.com/services/company-registration/one-person-company-registration/">One
                                Person Company</a>
                        </li>
                        <!-- <li>
                            <a href="<? php // targetUrl('services/company-registration/nidhi-company/')
                                        ?>">Nidhi
                                Company</a>
                        </li> -->
                        <li>
                            <a
                                href="https://www.onlinelegalindia.com/services/company-registration/public-limited-company/">Public
                                limited Company</a>
                        </li>
                        <li>
                            <a
                                href="https://www.onlinelegalindia.com/services/company-registration/section-8-company-registration/">Section
                                8 Company</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="footer_grid_block">
        <div class="link_lists">
            <p>
                <a data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false"
                    aria-controls="multiCollapseExample1">Licenses</a>
            </p>
            <div class="collapse multi-collapse show" id="multiCollapseExample1">
                <div class="card card-body">
                    <ul class="footer_links">
                        <li>
                            <a href="https://www.onlinelegalindia.com/services/fssai-registration/">FSSAI [Food
                                License]</a>
                        </li>
                        <li>
                            <a href="https://www.onlinelegalindia.com/services/fssai-renewal/">FSSAI Renewal</a>
                        </li>
                        <li>
                            <a href="https://www.onlinelegalindia.com/services/online-iec-code-import-export-license/">IEC
                                [Import/Export Code]</a>
                        </li>
                        <li>
                            <a href="https://www.onlinelegalindia.com/services/iec-certificate-modification/">IEC
                                Certificate Modification</a>
                        </li>

                        <li>
                            <a href="https://www.onlinelegalindia.com/services/bis-certificate/">BIS Certificate</a>
                        </li>



                        <li>
                            <!-- <a  href="https://www.onlinelegalindia.com/services/online-apeda-registration/">Apeda Registration</a> -->
                            <!-- <a  href="https://www.onlinelegalindia.com/contact/">Apeda Registration</a> -->
                        </li>
                        <li>

                            <!-- <li>
                            <a href="https://www.onlinelegalindia.com/services/hard-copy-certificate/">Hard-Copy
                                License</a>
                        </li> -->


                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="footer_grid_block">
        <div class="link_lists">
            <p>
                <a data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false"
                    aria-controls="multiCollapseExample1">Registration</a>
            </p>
            <div class="collapse multi-collapse show" id="multiCollapseExample1">
                <div class="card card-body">
                    <ul class="footer_links">
                        <li>
                            <a href="https://www.onlinelegalindia.com/services/trademark-registration/">TM
                                Registration</a>
                        </li>
                        <li>
                            <a href="https://www.onlinelegalindia.com/services/trademark-objection-reply/">TM
                                Objection</a>
                        </li>
                        <li>
                            <a href="https://www.onlinelegalindia.com/services/trademark-renewal/">TM Renewal</a>
                        </li>
                        <li>
                            <a href="https://www.onlinelegalindia.com/services/online-copyright-registration/">Copyright
                                Registration</a>
                        </li>
                        <li>
                            <a href="https://www.onlinelegalindia.com/services/iso-registration/">ISO
                                Registration</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="footer_grid_block">
        <div class="link_lists">
            <p>
                <a data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false"
                    aria-controls="multiCollapseExample1">GST</a>
            </p>
            <div class="collapse multi-collapse show" id="multiCollapseExample1">
                <div class="card card-body">
                    <ul class="footer_links">
                        <li>
                            <a href="https://www.onlinelegalindia.com/services/gst-registration/">GST Registration</a>
                        </li>
                        <li>
                            <a href="https://www.onlinelegalindia.com/services/gst-return-filing/">GST Filing</a>
                        </li>
                        <li>
                            <a href="https://www.onlinelegalindia.com/services/gst-modification/">GST Modification</a>
                        </li>
                        <li>
                            <a href="https://www.onlinelegalindia.com/services/gst-cancellation/">GST Cancellation</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="footer_grid_block">
        <div class="link_lists">
            <p>
                <a data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false"
                    aria-controls="multiCollapseExample1">Accounting & Tax</a>
            </p>
            <div class="collapse multi-collapse show" id="multiCollapseExample1">
                <div class="card card-body">
                    <ul class="footer_links">
                        <!-- <li>
                            <a href="https://www.onlinelegalindia.com/services/oliaccountant/">Online Accountant</a>
                        </li> -->
                        <li>
                            <!-- <a href="">PF
                                Registration</a> -->
                            <a href="https://www.onlinelegalindia.com/services/online-tax-pfesi-registration/">PF-ESIC Registration</a>
                        </li>
                        <li>
                            <!-- <a href="">PF Return</a> -->
                            <a href="https://www.onlinelegalindia.com/services/online-tax-pfesi-return/">PF-ESIC Return Filing </a>
                        </li>
                        <li>
                            <a href="https://www.onlinelegalindia.com/services/online-bookkeeping-service/">Online
                                Bookkeeping</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>








</div>

<div class="row">
    <div class="right_side">
        <div class="textwidget">
            <!-- <img class="footer_black_img" src="https://www.onlinelegalindia.com/images/footer-logo.png" alt="logo" style="margin-left: -13px;"> -->
            <!-- 30-12-2022_bkp<img class="footer_black_img" src="https://www.onlinelegalindia.com/images/logo6-1.svg" alt="logo" style="margin-left: -13px; width: 250px;"> -->
            <!-- <img class="footer_black_img" src="https://www.onlinelegalindia.com/images/fastinfo-group.svg" alt="logo"
                style="margin-left: -13px; width: 250px;"> -->
            <!-- <img class="footer_black_img" src="https://www.onlinelegalindia.com/images/Online-legal-india-republic.png" alt="logo" style="margin-left: -13px; width: 250px;"> -->
            <p>
                <strong>Online Legal India is a part of FastInfo Legal Services Pvt Ltd. Which is registered under the Companies Act, 2013.</strong>
            </p>

        </div>

        <div class="link_lists">
            <p>
                <a data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false"
                    aria-controls="multiCollapseExample1">Website Disclaimer :</a>
            </p>
            <div class="collapse multi-collapse show" id="multiCollapseExample1">
                <div class="card card-body">
                    <ul class="footer_links">
                        <!-- <li>
                        This website is privately operated and not affiliated with any government entity. We do not represent or are affiliated with, endorsed by, or in any way connected to any government body or department. The form provided is not for official registration purposes; rather, it's designed to gather information from our clients to help us better understand their business or needs. By continuing to use this website, you acknowledge that we are a private company managing its operations. We offer assistance based on customer requests, and the fees collected on this website are for consultancy services.
                        </li> -->

                        <li>
                            This website is privately operated and not affiliated with any government entity. We do not represent or are affiliated with, endorsed by, or in any way connected to any government body or department. The form provided is not for official registration purposes; rather, it's designed to gather information from our clients to help us better understand their business or needs. By continuing to use this website, you acknowledge that we are a private company. We offer assistance based on customer requests, and the fees collected on this website are charged as a platform fee. We reserve the right to outsource matters as deemed necessary. We are in the process of giving our brand a new name. Stay tuned for updates. This platform does not offer legal services, nor does it provide legal advice or representation. Do you require legal assistance? We strongly recommend consulting with a qualified lawyer or law firm.
                        </li>

                    </ul>
                </div>
            </div>
        </div>



    </div>
</div>
<div class="row">
    <div class="col-md-5 follow_us_destop_block">

        <p class="social_title cstm_align" style="margin: 0;">Follow Us</p>
        <div class="social_contacts">
                            <div class="social_icons">
                    <!-- <a href="https://www.facebook.com/OnlineLegalIndia/"><i class="fab fa-facebook-f"></i></a>
                          <a href="mailto:info@onlinelegalindia.com"><i class="fab fa-google-plus-g"></i></a> -->
                    <a href="https://www.facebook.com/OnlineLegalIndia/" target="_blank"><img
                            src="https://www.onlinelegalindia.com/images/facebook.webp" alt="Facebook"></a>
                    <a href="https://twitter.com/onlinelegalind" target="_blank"><img
                            src="https://www.onlinelegalindia.com/images/twitter.webp" alt="Twitter"></a>
                    <a href="https://www.linkedin.com/company/online-legal-india/" target="_blank"><img
                            src="https://www.onlinelegalindia.com/images/linkedin.webp" alt="Linkedin"></a>
                    <a href="https://www.instagram.com/online_legal_india/" target="_blank"><img
                            src="https://www.onlinelegalindia.com/images/instagram.webp" alt="Instagram"></a>
                    <a href="mailto:info@onlinelegalindia.com"><img src="https://www.onlinelegalindia.com/images/email.webp"
                            alt="Email"></a>
                    <a href="https://www.youtube.com/c/OnlineLegalIndia" target="_blank"><img class="icons"
                            src="https://www.onlinelegalindia.com/images/youtube.webp" alt="youtube icon"></a>


                </div>
            



        </div>

        <div class="app_link_block_holder">
            <ul>
                <li><a href="https://play.google.com/store/apps/details?id=onlinelegalindia.com.onlinelegalindia"
                        target="_blank"><img src="https://www.onlinelegalindia.com/images/google-play.webp"
                            alt="Google Play"></a></li>
                <li><a href="https://apps.apple.com/in/app/online-legal-india/id1573385779" target="_blank"><img
                            src="https://www.onlinelegalindia.com/images/app-store.webp" alt="App Store"></a></li>
            </ul>
        </div>
    </div>
    <div class="col-md-2 text-center">

    </div>
    <div class="col-md-5">
        <div class="quick_links">
            <ul>
                <li><a id="careers" target="_blank" href="https://www.fastinfo.com/career">Careers</a></li>
                <li><a href="https://www.onlinelegalindia.com/contact/">Contact Us</a></li>
                <li><a href="https://www.onlinelegalindia.com/blogs/">Blogs</a></li>
                <!-- <li><a href="https://www.onlinelegalindia.com/customer_complain/">Report an Issue</a></li> -->
                <li><a href="https://www.onlinelegalindia.com/news/">News</a></li>
                <li><a href="https://www.onlinelegalindia.com/about/">About Us</a></li>
                <li><a href="https://www.onlinelegalindia.com/press-release/">Press Release</a></li>
                <li id="event-link"><a href="https://www.onlinelegalindia.com/services/founders-discussion-table/">Event</a></li>
            </ul>
            <span class="grievance" style="">For any grievance mail to: <a
                    href="mailto:complain@fastinfo.com">complain@fastinfo.com</a></span>
        </div>
    </div>
</div>
<!-- /.row -->
<section class="new_new_block_mobile">
    <a title="Contact" href="tel:08069029400" class="info info_a"><i class="fas fa-phone-alt"></i></a>
</section>        </div>
        <!-- /.container -->
    </footer>
</section>
@endsection

@section('scripts')
<script type='text/javascript' src='https://www.onlinelegalindia.com/js/main.js'></script>

<script>
    $("input[name='is_prompted_whatsapp']").on("change", function() {
        if ($('input[name="is_prompted_whatsapp"]').prop('checked') == true) {
            $('#nextBtn').prop('disabled', false);
            $('#submitbtn').prop('disabled', false);
            $('#contact-submit').prop('disabled', false);
            $('#contact-submit-new').prop('disabled', false);
        } else {
            $('#nextBtn').prop('disabled', true);
            $('#submitbtn').prop('disabled', true);
            $('#contact-submit').prop('disabled', true);
            $('#contact-submit-new').prop('disabled', true);
        }
    });
    $('.accordaion-main-div').click(function() {
        var show_id = $(this).attr('data-port-id');
        $('.child-ans-div-1').hide();
        $('#' + show_id).show();

    });

    $('.collapsed').click(function() {
        var id_show = $(this).attr('data-port');
        location.href = "#" + id_show;
        $('#' + id_show).addClass('in');
        $('.custom_close').removeClass('in');
    });

    $('#send_WhatsApp').validate({
        rules: {
            wa_name: {
                required: true
            },
            wa_email: {
                required: true,
                email: true
            },
            wa_mobile: {
                number: true
            }
        },
        message: {
            wa_name: {
                required: "Please enter your Name."
            },
            wa_email: {
                required: "Please enter a email address.",
                email: "Please enter a valid email address."
            },
            wa_mobile: {
                number: "Please enter a valid 10 digits number."
            }
        }
    })

    $(document).on('click', '.send_WhatsApp_Btn', function(e) {
        e.preventDefault();
        if ($('#send_WhatsApp').valid()) {
            var name = $('#send_WhatsApp').find('.wa_name').val(),
                email = $('#send_WhatsApp').find('.wa_email').val(),
                mobile = $('#send_WhatsApp').find('.wa_mobile').val();
            $.ajax({
                url: "https://www.onlinelegalindia.com/payment/storeWhatsApp.php",
                method: 'post',
                data: {
                    name: name,
                    email: email,
                    mobile: mobile,
                    service: window.wa_service_code
                },
                success: function(data) {
                    if (mobile.length > 0) {
                        var param = `${name}, ${mobile}, ${email}`;
                    } else {
                        var param = `${name}, ${email}`;
                    }
                    if (typeof window.wa_service_name == 'undefined') {
                        window.wa_service_name = 'OLI Services';
                    }
                    const params = new URLSearchParams({
                        phone: '+917605035863',
                        text: `Hi, my name is ${param}. I would like to have assistance regarding ${window.wa_service_name}.`
                    });
                    window.location.href = 'https://api.whatsapp.com/send?' + params.toString();
                }
            });
        }
    })
</script>

<script>
    var utm_content = utm_source = utm_medium = utm_campaign = Campaignid = Adgroupid = keyword_id = device = landing_page_url = "";
    let utmFields = ['utm_source', 'Campaignid', 'utm_medium', 'utm_content', 'utm_campaign', 'Adgroupid', 'keyword_id', 'device'];

    function pushCampaignDetails(oli_id) {

    }
</script>

<script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        var x = window.matchMedia("(max-width: 768px)");
        var y = window.matchMedia("(min-width: 991px)");

        function tawkto() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5d7c8e839f6b7a4457e1a085/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        };

        if (x.matches) {} else {
            tawkto();
        }
    </script>

<script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5d7c8e839f6b7a4457e1a085/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>

<script>
    $('#associated_carousal').owlCarousel({
        loop: true,
        margin: 0,
        dots: false,
        nav: false,
        autoplay: true,
        autoplayTimeout: 1800,
        autoplayHoverPause: true,

        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 3,
            },
            1000: {
                items: 6,
            }
        }
    });

    $('#linkUl').owlCarousel({
        loop: true,
        margin: 20,
        dots: false,
        nav: false,
        autoplay: true,
        autoWidth: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,

        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 3,
            },
            1000: {
                items: 7,
            }
        }
    });

    $('#associated_carousal_home').owlCarousel({
        loop: true,
        margin: 30,
        dots: false,
        nav: false,
        autoplay: true,
        autoWidth: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 3,
            },
            1000: {
                items: 7,
            }
        }
    });
</script>

<script>
    //Custom dropdown of all Company Registration

    $(document).ready(function() {
        $("#specialPrice999 input").prop('checked', true);
        $("#specialPrice999").addClass("price_active")

        $("#specialPrice999 input").click(function() {
            $(".custom_dropdown label").html("---- Select Package ----");
            $("#hiddenInput").html('<input type="radio" id="" name="" value="" hidden checked>');
        });

        $(".custom_dropdown").click(function() {
            $(".custom_dropdown ul").toggleClass("custom_style");
        });

        $("#specialPrice999").click(function() {
            $(this).addClass("price_active");
            $(".custom_dropdown ul").removeClass("custom_style");
        })

        $('.custom_dropdown ul li').on('click', function() {

            var label = $(this).parent().parent().children('label');
            $(label).attr('id', 'one');
            var input = $(this).parent().parent().parent().parent().children('input');
            $("#hiddenInput input").prop('value', $(this).attr('value'));
            $("#hiddenInput input").attr('name', $(this).attr('name'));
            $("#hiddenInput input").attr('id', $(this).attr('id'));
            label.html($(this).html());
            $(this).parent().children('.selected').removeClass('selected');
            $(this).addClass('selected');
            $("#specialPrice999 input").prop('checked', false);
            $("#specialPrice999").removeClass("price_active");
            $(".custom_dropdown ul li.selected").removeClass("custom_style");
        });
    });

    /*For GCLID*/
    function getParam(p) {
        var match = RegExp('[?&]' + p + '=([^&]*)').exec(window.location.search);
        return match && decodeURIComponent(match[1].replace(/\+/g, ' '));
    }

    function getExpiryRecord(value) {
        var expiryPeriod = 90 * 24 * 60 * 60 * 1000; // 90 day expiry in milliseconds

        var expiryDate = new Date().getTime() + expiryPeriod;
        return {
            value: value,
            expiryDate: expiryDate
        };
    }

    function addGclid() {

    }

    window.addEventListener('load', addGclid);
    //User's Cookie Track//

    function readCookie(c_name) {
        var c_value = document.cookie;
        var c_start = c_value.indexOf(" " + c_name + "=");
        if (c_start == -1) {
            c_start = c_value.indexOf(c_name + "=");
        }
        if (c_start == -1) {
            c_value = null;
        } else {
            c_start = c_value.indexOf("=", c_start) + 1;
            var c_end = c_value.indexOf(";", c_start);
            if (c_end == -1) {
                c_end = c_value.length;
            }
            c_value = unescape(c_value.substring(c_start, c_end));
        }
        return c_value;
    }

    function setCookie(a, d, b) {
        var c = new Date;
        c.setTime(c.getTime() + 864E5 * b);
        b = "; expires=" + c.toGMTString() + "domain=onlinelegalindia.com;path=/;SameSite=None;Secure";
        document.cookie = a + "=" + d + b
    }

    function getParam(a) {
        return (a = RegExp("[?&]" + a + "=([^&]*)").exec(window.location.search)) && decodeURIComponent(a[1].replace(/\+/g, " "))
    }
    var _oclid = getParam("_oclid");
    if (_oclid) {
        var gclsrc = getParam("gclsrc");
        (!gclsrc || -1 !== gclsrc.indexOf("aw")) && setCookie("_oclid", _oclid, 365)
    };
</script>

<script type="text/javascript">
    function deleteCookies(name) {
        document.cookie = name + '=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
    }

    function getCookie(name) {
        var match = document.cookie.match(RegExp('(?:^|;\\s*)' + name + '=([^;]*)'));
        return match ? match[1] : null;
    }

    function getUrlParam(a) {
        if (!getCookie('_landing_url') == null) {
            let readCookie = readCookie('_landing_url').split("?")[1];
        } else {
            let readCookie = null;
        }
        // return (a = RegExp("[?&]" + a + "=([^&]*)").exec(window.location.search)) && decodeURIComponent(a[1].replace(/\+/g, " "));
        let qstring = location.href.includes('?') ? location.href.split("?")[1] : readCookie;
        let searchParams = new URLSearchParams(qstring);
        return searchParams.get(a);

    }
</script>

<script>
    function makeid(length) {
        var result = '';
        var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        var charactersLength = characters.length;
        for (var i = 0; i < length; i++) {
            result += characters.charAt(Math.floor(Math.random() * charactersLength));
        }
        return result;
    }



    //=================================================================//    
    //New UTM Tracking
    function getParameters() {
        let urlString = window.location.href;
        let paramString = urlString.split('?')[1];
        let queryString = new URLSearchParams(paramString);
        var utms = [];
        for (let pair of queryString.entries()) {
            utms.push(pair[0] + ':' + pair[1]);
        }

    }
    // $(document).ready(function(){
    //     console.log(getParameters());
    // });
    //===========================Custom Cookie===================================//
    function makeid(length) {
        let result = '';
        let characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        let charactersLength = characters.length;
        for (let i = 0; i < length; i++) {
            result += characters.charAt(Math.floor(Math.random() * charactersLength));
        }
        return result;
    }

    function fnBrowserDetect() {
        let userAgent = navigator.userAgent;
        let browserName;
        if (userAgent.match(/chrome|chromium|crios/i)) {
            browserName = "Chrome";
        } else if (userAgent.match(/firefox|fxios/i)) {
            browserName = "Firefox";
        } else if (userAgent.match(/safari/i)) {
            browserName = "Safari";
        } else if (userAgent.match(/opr\//i)) {
            browserName = "Opera";
        } else if (userAgent.match(/edg/i)) {
            browserName = "Edge";
        } else {
            browserName = "No browser detection";
        }
        return browserName;
    }
</script>

<script>
    var campaign = "campaign_id";
    // Parse URL components
    var url_components = new URL(window.location.href);
    // Initialize campaign_id
    var campaign_id = '';
    // Check if query string exists
    if (url_components.searchParams.has('Campaignid')) {
        campaign_id = url_components.searchParams.get('Campaignid');
    }

    // Check if fragment exists
    if (url_components.hash !== '') {
        var fragmentParams = new URLSearchParams(url_components.hash.substring(1));
        if (fragmentParams.has('Campaignid')) {
            campaign_id = fragmentParams.get('Campaignid');
        }
    }

    if (!campaign_id || campaign_id.length === 0) {
        var params = new URLSearchParams(window.location.href);
        // Retrieving the value of the Campaignid parameter
        campaign_id = params.get('Campaignid');
    }

    // Set cookie if campaign_id is not empty and if the cookie is empty
    if (campaign_id !== '' && document.cookie.indexOf(campaign) === -1) {
        var expiration = new Date();
        expiration.setTime(expiration.getTime() + (86400 * 30 * 1000)); // 30 days
        document.cookie = campaign + "=" + campaign_id + ";expires=" + expiration.toUTCString() + ";path=/";
    }

    
    // console.log(`CampaignID : ${campaign_id}`);
    // console.log('<= $_COOKIE['campaign_id'] ?>');
    //var jqueryarray = <php echo json_encode($_COOKIE); ?>;
    //console.log(jqueryarray);
</script>

<script>
    var today = new Date();

    // Define start and end dates
    var startDate = new Date('2025-10-01');
    var endDate = new Date('2025-12-14');

    // Check if today's date is within the range
    if (today >= startDate && today <= endDate) {

        // $('input[name="is_prompted_whatsapp"]').prop('checked', false).trigger('change');
    }

    $(document).on('click', '#event-link', function(e) {
        e.preventDefault(); // stop normal link redirect
        e.stopPropagation();
        // alert('link Clicked');
        var redirectUrl = $(this).find('a').attr('href');

        $.ajax({
            url: '../../payment/link_click_count_insert.php',
            type: 'POST',
            data: {
                link_name: 'event'
            },
            dataType: "JSON",
            success: function(resp) {
                // after ajax completes
                // if(resp.success){
                // alert(redirectUrl);
                window.location.href = redirectUrl;
                // }else{
                //     alert('Error');
                // }
            }
        });
    });
</script>

<script>
    // ========================
    // GLOBAL ERROR TRACKER
    // ========================

    // Common sender
    function logErrorToServer(payload) {
        try {
            $.post("https://www.onlinelegalindia.com/feed_errorlog.php", {
                error_src: payload.type || "unknown",
                error_desc: JSON.stringify(payload),
                landing_page: window.location.href,
                submit_page: document.referrer || '',
            });
        } catch (e) {
            console.warn("Logging failed", e);
        }
    }


    // ========================
    // 1. AJAX ERROR TRACKING
    // ========================
    // $(document).ajaxError(function(event, jqxhr, settings, thrownError) {

    //     logErrorToServer({
    //         type: "ajax_error",
    //         url: settings.url,
    //         method: settings.type,
    //         status: jqxhr.status,
    //         response: jqxhr.responseText,
    //         error: thrownError
    //     });

    // });

    let ajaxErrorLock = false;

    $(document).ajaxError(function(event, jqxhr, settings, thrownError) {

        // Prevent recursive logging
        if (settings.url.includes('logErrorToServer')) {
            return;
        }

        // Prevent multiple hits
        if (ajaxErrorLock) {
            return;
        }

        ajaxErrorLock = true;

        logErrorToServer({
            type: "ajax_error",
            url: settings.url,
            method: settings.type,
            status: jqxhr.status,
            response: jqxhr.responseText,
            error: thrownError
        });

        // Unlock after 5 sec
        setTimeout(function() {
            ajaxErrorLock = false;
        }, 5000);

    });


    // ========================
    // 2. JS RUNTIME ERRORS
    // ========================
    // window.onerror = function(message, source, lineno, colno, error) {

    //     logErrorToServer({
    //         type: "js_error",
    //         message: message,
    //         file: source,
    //         line: lineno,
    //         column: colno,
    //         stack: error ? error.stack : null
    //     });

    // };


    // ========================
    // 6. FORM SUBMIT ERROR TRACKING
    // ========================
    // $("form").on("submit", function(e) {

    //     let form = this;
    //     setTimeout(function() {
    //         if (!form.checkValidity()) {
    //             logErrorToServer({
    //                 type: "form_validation_error",
    //                 form_action: form.action,
    //                 form_data: $(form).serialize()
    //             });
    //         }
    //     }, 100);

    // });
</script>

<script>
   window.wa_service_name = 'Consumer Dispute Property Dispute';
   window.wa_service_code = 'CDPD';


   $(document).on('click', '#btnrefresh', function() {
      var url = window.location.origin + '/payment/captcha.php?' + Math.random();
      document.getElementById('captcha_holder').src = url;
      document.getElementById('captcha_code').value = '';
      return false;
   });

   $('ul.nav li.dropdown').hover(function() {
      $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(300);
   }, function() {
      $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(300);
   });

   $('.oli-validate-form').validate({
      rules: {
         name: {
            required: true
         },
         email: {
            required: true,
            email: true
         },
         mobile: {
            required: true,
            number: true,
            rangelength: [10, 10]
         },
         state: {
            required: true
         },
         DisputeAmmount: {
            required: true,
            number: true,
            digits: true
         }
      },
      messages: {
         name: {
            required: "Please enter your Name."
         },
         email: {
            required: "Please enter a email address.",
            email: "Please enter a valid email address."
         },
         mobile: {
            required: "Please enter your contact number.",
            number: "Please enter a valid phone number.",
            rangelength: "Only 10 digit phone number is valid"
         },
         state: {
            required: "Please select your state"
         },
         DisputeAmmount: {
            required: 'Please Provide your loss/dispute amount',
            number: 'Please enter your amount as ex. 699'
         }
      }
   });

   $(document).on('click', '#nextBtn', function(e) {
      e.preventDefault();
      if ($(".oli-validate-form").valid()) {
         $('#nextBtn').prop('disabled', true);
         var name = $('#name').val(),
            email = $('#email').val(),
            mobile = $('#mobile').val(),
            state = $('#state option:selected').val(),
            is_prompted_whatsapp = 0,
            gclid_field = $('#gclid_field').val(),
            landing_uri = $('#landing_uri').val();

         const csrf_token = $('#csrf_token').val();

         if ($('input[name="is_prompted_whatsapp"]').prop('checked') == true) {
            is_prompted_whatsapp = 1;
         }
         console.log('sending_req');
         $.ajax({
            url: "../../payment/SubmitBusinessDispute.php",
            method: 'POST',
            data: {
               name: name,
               email: email,
               mobile: mobile,
               state: state,
               is_prompted_whatsapp: is_prompted_whatsapp,
               mode: 1,
               gclid_field: gclid_field,
               landing_uri: landing_uri,
               csrf_token: csrf_token
            },
            dataType: "JSON",
            success: function(data) {
               console.log(data);
               if (data.success) {
                  fbq('track', 'Lead');
                  // $('#oliid').val(data.oli_id);
                  // $('#second_step').show();
                  // $('#first_step').hide();
                  window.location.href = "https://www.onlinelegalindia.com/lead-thanks-cls/?oli_id=" + data.oli_id;
               } else {
                  alert(data.msg);
                  $('#nextBtn').prop('disabled', false);
               }
            },
            error: function(jqXHR, textStatus, errorThrown) {
               console.error("AJAX Request Failed: " + textStatus + ", " + errorThrown);
               alert("An error occurred! Please refresh page and try again.");
               $('#nextBtn').prop('disabled', false);
            }
         });
      }
   });

   // $('#DisputeAmmountFLD').on('blur', function() {

   //    var dispute_ammount = $('[name="DisputeAmmount"]').val();
   //    var amt = parseInt(dispute_ammount);

   //    if (isNaN(amt)) return; // safety

   //    $('.form_price').prop('checked', false);
   //    $('.form_price').closest('fieldset').hide();

   //    let tag = 0;
   //    let package_name = null;

   //    if (amt < 50000) {
   //       tag = 1;
   //       package_name = 'CDPDBL50K';
   //    } else if (amt >= 50000 && amt <= 499999) {
   //       tag = 2;
   //       package_name = 'CDPDUN5L'
   //    } else if (amt >= 500000 && amt <= 999999) {
   //       tag = 3;
   //       package_name = 'CDPDUN10L';
   //    } else if (amt >= 1000000 && amt <= 1499999) {
   //       tag = 4;
   //       package_name = 'CDPDUN15L';
   //    } else {
   //       tag = 5;
   //       package_name = 'CDPDAV50L';
   //    }

   //    $('.form_price[data-tag="' + tag + '"]').prop('checked', true);
   //    $('.form_price[data-tag="' + tag + '"]').closest('fieldset').show();
   //    $('#package_name').val(package_name);

   // });

   function verifyCaptcha(r) {
      var captcha_code = $('#captcha_code').val();
      $.ajax({
         url: "../../payment/verify_captcha.php",
         method: 'post',
         data: {
            captcha_code: captcha_code
         },
         success: function(data) {
            if (data == 1) {
               submitOli(r);
            } else {
               alert('Please Enter the Correct Captcha');
            }
         }
      })
   }


   $(document).on('click', '#contact-submit', function() {
      var r = $(this);
      if ($('.oli-validate-form').valid()) {

         $('.oli-validate-form').submit();
         // var captcha_code = $('#captcha_code').val();
         // $.ajax({
         //    url: "../../../payment/verify_captcha.php",
         //    method: 'post',
         //    data: {
         //       captcha_code: captcha_code
         //    },
         //    success: function(data) {
         //       if (data == 1) {
         //          submitOli(r);
         //       } else {
         //          alert('Please Enter the Correct Captcha');
         //       }
         //    }
         // })

      }
   })

   function submitOli(btn) {
      //btn.attr('type', 'submit');
      $('.oli-validate-form').submit();

      // setTimeout(function() { 
      //    $('.oli-validate-form').submit();
      // }, 1200);
   }

   function removeSpaces(string) {
      return string.split(' ').join('');
   }
</script>

<script>
   $(".apply_now_green").click(function(event) {

      event.preventDefault();

      if ($(window).width() > 991) {
         $('html, body').animate({
            scrollTop: 400
         });
      } else {
         $('html, body').animate({
            scrollTop: 500
         }, 0);
      }


   });
</script>

<script>
   function package_detail() {
      $("#more_package").toggle();
   }

   function fees_list() {
      $("#more_fees").toggle();
   }
   $('.gst_rdiobtn').click(function() {
      $('.price_active').toggleClass('price_active');
      $(this).toggleClass('price_active');
      $('.gst_rdiobtn label').css("cursor", "pointer");
   });
</script>
@endsection
