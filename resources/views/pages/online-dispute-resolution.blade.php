@extends('layouts.app')

@section('meta')
<title>File Online Dispute Resolution (ODR) in India</title>
<meta name="description" content="Learn how to file Online Dispute Resolution (ODR) in India with ease. Resolve business disputes digitally with Online Legal India.">
<!-- <meta name="keywords" content="Trademark Registration"> -->
<link rel="canonical" href="https://www.onlinelegalindia.com/services/online-dispute-resolution/"/>
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.onlinelegalindia.com/services/online-dispute-resolution/">
<!-- <meta property="og:image" content="https://www.onlinelegalindia.com/images/file-online-dispute-resolution3.webp"> -->
<meta property="og:image" content="https://www.onlinelegalindia.com/images/new-file-online-dispute-resolution3.webp">
<meta property="og:title" content="File Online Dispute Resolution (ODR) Instantly">
<meta property="og:site_name" content="OnlineLegalIndia">
<meta property="og:description" content="Resolve disputes digitally via ODR in India—quick, legal, and hassle-free.">
<meta property="og:locale" content="en-IN">
@endsection

@section('styles')
<style>
   .new_control,
   #state {
      border-radius: 4px !important;
   }

   .note_inner p {
      margin-bottom: 10px;
   }

   .note {
      margin: 40px 0 30px 0;
      float: left;
      width: 100%;
   }

   .cstm_link_lst {
      float: left;
      margin-bottom: 25px;
      padding: 0 15px;
   }

   .cstm_link_lst p a {
      color: #002b42;
      margin-bottom: 6px;
      display: inline-block;
   }

   .cstm_ftr_li li {
      font-size: 14px;
      margin-bottom: 6px;
      color: #6d6d6d;
   }

   .header {
      background: linear-gradient(135deg, #2c2c2c 0%, #1a1a1a 100%);
      padding: 15px 25px;
      position: relative;
   }

   .header::after {
      content: '';
      position: absolute;
      right: 0;
      top: 0;
      width: 0;
      height: 0;
      border-style: solid;
      border-width: 0 0 70px 70px;
      border-color: transparent transparent #1a1a1a transparent;
   }

   .header h2 {
      color: #fdb714;
      font-size: 18px;
      font-weight: bold;
      line-height: 1.4;
   }

   .content {
      background: linear-gradient(135deg, #f5f5f5 0%, #e8e8e8 100%);
      padding: 30px 25px;
      position: relative;
   }

   .content::after {
      content: '';
      position: absolute;
      right: 0;
      bottom: 0;
      width: 0;
      height: 0;
      border-style: solid;
      border-width: 0 0 120px 120px;
      border-color: transparent transparent #2c2c2c transparent;
   }

   .team-list {
      list-style: none;
      position: relative;
      z-index: 1;
   }

   .team-list li {
      font-size: 17px;
      color: #2c2c2c;
      margin-bottom: 20px;
      padding-left: 15px;
      position: relative;
      font-weight: 500;
   }

   .team-list li::before {
      content: '•';
      position: absolute;
      left: 0;
      font-size: 20px;
      color: #2c2c2c;
   }

   .team-list li:last-child {
      margin-bottom: 0;
   }

   .disclaimer {
      background: #fdb714;
      padding: 20px 25px;
      position: relative;
   }

   .disclaimer-title {
      font-size: 16px;
      font-weight: bold;
      color: #2c2c2c;
      margin-bottom: 8px;
   }

   .disclaimer-text {
      font-size: 14px;
      color: #2c2c2c;
      line-height: 1.5;
      margin-bottom: 5px;
   }

   .footer {
      background: #2c2c2c;
      padding: 20px 25px;
      text-align: center;
      margin-top: 0 !important;
      padding: 20px 0 !important
   }

   .footer h3 {
      color: #fdb714;
      font-size: 22px;
      font-weight: bold;
      text-transform: capitalize;
   }

   .who_we_helpp {
      padding: 0 0 60px 0 !important;
   }



   @media (max-width: 768px) {
      .header h2 {
         font-size: 16px;
      }

      .team-list li {
         font-size: 17px;
      }

      .disclaimer-title {
         font-size: 14px;
      }

      .disclaimer-text {
         font-size: 13px;
      }

      .footer h3 {
         font-size: 18px;
      }

      .who_we_helpp {
         padding: 0 0 32px 0 !important;
      }

      .content::after {
         content: '';
         position: absolute;
         right: 0;
         bottom: 0;
         width: 0;
         height: 0;
         border-style: solid;
         border-width: 0 0 40px 96px;
         border-color: transparent transparent #2c2c2c transparent;
      }
   }
</style>
   <!--      <link rel="stylesheet" type="text/css" href="https://www.onlinelegalindia.com/css/bootstrap.min.css">-->
   <!-- <link rel="stylesheet" type="text/css" href="https://www.onlinelegalindia.com/css/cut.css"> -->
   <!-- <link rel="stylesheet" type="text/css" href="https://www.onlinelegalindia.com/css/alternative-contact-popup.css"> -->
   <!-- <link rel="stylesheet" href="https://www.onlinelegalindia.com/css/brands.min.css"> -->
   <!-- <link rel="stylesheet" href="https://www.onlinelegalindia.com/css/solid.min.css"> -->
@endsection

@section('content')
<!-- <script type="text/javascript">
   window.Tawk_API = window.Tawk_API || {};
   window.Tawk_API.onLoad = function() {
      window.Tawk_API.destroy(); // Stop and remove Tawk.to
   };
</script> -->

<!-- <section class="trade_mark_facebook_one common_fb">
   <div class="container custom_container">
      <div class="logo_block">
         <img src="https://www.onlinelegalindia.com/images/logo6-1.svg" alt="OLI Logo">
      </div>
   </div>
</section> -->



<div class="section_new_order_change">
   <section class="top_banner_header">
      <div class="container">
         <div class="row tbh_section_tab">
            <div class="col-md-8 col-xs-8 saurabh_shukla_order_one">
               <div class="top_banner_header_left">
                  <h1><span>Online Dispute Resolution-</span>Fast, Easy & Cost-Effective</h1>
                  <p>No queues, No chaos! Just fair, fast, and affordable<span>Dispute Resolution—without visiting the Court.</span></p>
               </div>

            </div>
            <div class="col-md-4 col-xs-4 saurabh_shukla_order_two">
               <div class="top_banner_header_right">
                  <img src="https://www.onlinelegalindia.com/images/odr-banner3.webp" alt="Saurabh Shukla ODR">
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="tor_search_one_section">
      <div class="container">
         <div class="new_section_search">



            <div class="row_grid_two">
               <div class="row row_grid_two_tab">
                  <div class="col-md-7 col-xs-7">
                     <div class="new_left_section_block new_left_section_block_destop">
                        <h6>Advantage of Online Dispute Resolution</h6>

                        <div class="row new_left_section_block_row_tab">

                           <div class="col-md-4 col-xs-4">
                              <div class="wcodr_inner_block">
                                 <i class="far fa-clock"></i>
                                 <h4>Save Time</h4>
                                 <p>Skip the long waits and court appearances. Get results quickly.</p>
                              </div>
                           </div>

                           <div class="col-md-4 col-xs-4 new_tab_padding">
                              <div class="wcodr_inner_block">
                                 <i class="fas fa-rupee-sign"></i>
                                 <h4>Cost-Effective</h4>
                                 <p>Legal battles are expensive.We offer affordable ODR plans for individuals and businesses.</p>
                              </div>
                           </div>


                           <div class="col-md-4 col-xs-4 new_tab_padding">
                              <div class="wcodr_inner_block">
                                 <i class="fas fa-globe"></i>
                                 <h4>Accessible Anywhere</h4>
                                 <p>Resolve disputes from the comfort of your home, office, or on the go.</p>
                              </div>
                           </div>

                           <div class="col-md-5 col-md-offset-1 col-xs-4">
                              <div class="wcodr_inner_block">
                                 <i class="fas fa-lock"></i>
                                 <h4>Confidential & Secure</h4>
                                 <p>Your privacy is our priority.We use encrypted, secure platforms to keep your documents secure.</p>
                              </div>
                           </div>

                           <div class="col-md-5 col-xs-4 new_tab_padding">
                              <div class="wcodr_inner_block">
                                 <i class="fas fa-user-circle"></i>
                                 <h4>Fair & Impartial</h4>
                                 <p>Neutral mediators and arbitrators work to find balanced, sound outcomes.</p>
                              </div>
                           </div>

                        </div>

                     </div>

                  </div>
                  <div class="col-md-5 col-xs-5">
                     <div class="tor_search_two_right">
                        <!-- <h3>Want Company’s ISO Certification?</h3>
                           <p>Fill Up the below mentioned form</p> -->
                        <form class="new_block" method="post" id="oli-validate-form" action="https://www.onlinelegalindia.com/payment/submit_odr_registration.php" style="margin-top:0px;">
                           <input type="hidden" id="gclid_field" name="gclid_field" value="" />
                           <input type="hidden" id="landing_uri" name="landing_uri" value="https://www.onlinelegalindia.com/services/online-dispute-resolution/">

                           <div class="first_div" id="first_div">
                              <h3>File Online Dispute Resolution (ODR)</h3>
                              <br>
                              <div class="form-group">
                                 <input type="text" name="name" id="name" class="form-control new_control" placeholder="Your Full Name">
                              </div>

                              <div class="form-group">
                                 <input type="email" name="email" id="email" class="form-control new_control" placeholder="Your Email Address">
                              </div>
                              <div class="form-group">
                                 <input type="text" name="mobile" id="mobile" class="form-control new_control" placeholder="Your Mobile Number">
                              </div>


                              <div class="form-group">
                                 <select name="state" id="state" class="new_control new_control_select new_control_select999" required="">
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

                              <!-- <div class="form-group">
                                 <fieldset class="new_fieldset">
                                    <img id="captcha_holder" src="https://www.onlinelegalindia.com/payment/captcha.php" alt="captcha">
                                    <img src="https://www.onlinelegalindia.com/images/capta.webp" id="btnrefresh" alt="captcha">
                                    <input type="text" name="captcha_code" id="captcha_code" class="pull-right valid" maxlength="4" onkeyup="this.value = this.value.replace(/[^\d]+/g, '');" placeholder="Enter the captcha">
                                 </fieldset>
                              </div> -->

                              <input type="hidden" name="csrf_token" id="csrf_token" value="s146f8de6601dee8f79ba4df99a6c4df">



                              <input type="hidden" id="oliid" name="oli_id">
                              <input type="hidden" id="step" name="step" value="first">
                              <input type="hidden" id="price" name="price" value="4999">
                              <div class="form_check">
   <label class="custom_check">I have read & agreed to the company's Terms and Conditions, disclaimer and refund policy, and also ready to accept calls, SMS, emails, etc. 
      <input type="checkbox" data-degree="°" name="is_prompted_whatsapp" checked value="1">
      <span class="form_checkmark"></span>
    </label>
</div>

                              <div class="trademark_search_form_button">
                                 <button type="button" id="nextBtn" class="btn tsfb_started">Request for Callback<span style="position: relative;left:-3px;"></button>
                              </div>
                              <!-- <input type="button" id="nextBtn" class="btn tsfb_started" value="Request to Callback" value="Request to Callback"> -->


                           </div>

                        </form>

                     </div>
                  </div>
               </div>
            </div>

         </div>
      </div>
   </section>
</div>

<section class="new_left_section_block_mobile_section">
   <div class="container">
      <div class="new_left_section_block new_left_section_block_mobile">
         <h6>Advantage of Online Dispute Resolution</h6>

         <div class="row">

            <div class="col-md-4">
               <div class="wcodr_inner_block">
                  <i class="far fa-clock"></i>
                  <h4>Save Time</h4>
                  <p>Skip the long waits and court appearances. Get results quickly.</p>
               </div>
            </div>

            <div class="col-md-4">
               <div class="wcodr_inner_block">
                  <i class="fas fa-rupee-sign"></i>
                  <h4>Cost-Effective123</h4>
                  <p>Legal battles are expensive.We offer affordable plans for individuals and businesses.</p>
               </div>
            </div>


            <div class="col-md-4">
               <div class="wcodr_inner_block">
                  <i class="fas fa-globe"></i>
                  <h4>Accessible Anywhere</h4>
                  <p>Resolve disputes from the comfort of your home, office, or on the go.</p>
               </div>
            </div>

            <div class="col-md-5 col-md-offset-1">
               <div class="wcodr_inner_block">
                  <i class="fas fa-lock"></i>
                  <h4>Confidential & Secure</h4>
                  <p>Your privacy is our priority.We use encrypted, secure platforms to keep your case safe.</p>
               </div>
            </div>

            <div class="col-md-5">
               <div class="wcodr_inner_block">
                  <i class="fas fa-user-circle"></i>
                  <h4>Fair & Impartial</h4>
                  <p>Neutral mediators and arbitrators work to find balanced, legally sound outcomes.</p>
               </div>
            </div>

         </div>
      </div>
   </div>
</section>



<section id="howWework" class="block_padding" style="margin-top: 30px; float: left;">
   <div class="container">
      <div class="row">
         <div class="block_heading">
            <h2 style="color: black" class="benifts-heading">How we work?</h2>
         </div>
         <div class="col-sm-12 col-md-12">
            <div class="row hwww_row_div_tab">
               <div class="col-md-2 col-xs-6 col-md-offset-2">
                  <div class="process_section">
                     <i>1</i>

                     <p>Submit Your Dispute</p>
                     <p>⟶</p>
                  </div>
               </div>
               <div class="col-md-2 col-xs-6">
                  <div class="process_section">
                     <i>2</i>

                     <p>Get a Call from our Expert</p>
                     <p>⟶</p>
                  </div>
               </div>
               <div class="col-md-2 col-xs-6">
                  <div class="process_section">
                     <i>3</i>

                     <p>Choose Resolution Type</p>
                     <p>⟶</p>
                  </div>
               </div>
               <div class="col-md-2 col-xs-6">
                  <div class="process_section">
                     <i>4</i>

                     <p>Initiate Proceedings</p>
                     <p>⟶</p>
                  </div>
               </div>
               <!-- <div class="col-md-2 col-md-12">
                        <div class="process_section">
                            <i>5</i>

                            <p>Services start.</p>
                            <p>⟶</p>
                        </div>
                    </div> -->
               <!-- <div class="col-md-2 col-md-12">
                        <div class="process_section">
                            <i>6</i>

                            <p>We Will Support You Till the Case is Resolved</p>
                            <p>👍</p>
                        </div>
                    </div> -->

            </div>
         </div>
      </div>
   </div>
</section>


<section class="who_we_help">
   <div class="container">
      <div class="who_we_help_header">
         <h5>Who We Help</h5>
      </div>
      <div class="row who_we_help_header_tab">

         <div class="col-md-4 col-xs-4">
            <div class="who_we_help_block">
               <div class="wwhd_icon">
                  <i class="fas fa-user"></i>
               </div>
               <h6>Individuals</h6>
               <p>Whether it's a personal dispute or a service issue, we help people find fair, fast, and affordable resolutions.</p>
               <ul>
                  <li>Consumer Related Disputes</li>
                  <li>Landlord-Tenant Dispute</li>
                  <!-- <li>Family & Co-Parenting Agreements</li> -->
                  <li>Neighbor or Community Disputes</li>
                  <li>Online Purchase Issues</li>
                  <li>Freelance or Gig Work Disagreements</li>
               </ul>
            </div>
         </div>


         <div class="col-md-4 col-xs-4">
            <div class="who_we_help_block">
               <div class="wwhd_icon">
                  <i class="fas fa-store"></i>
               </div>
               <h6>Businesses</h6>
               <p>Streamline your Dispute Resolution with a digital-first approach that saves time and protects relationships.</p>
               <ul>
                  <li>Contractual Disputes</li>
                  <li>B2B Service or Payment Issues</li>
                  <li>Client or Vendor Conflicts</li>
                  <li>Employment & HR Disputes</li>
                  <li>Partnership Disagreements</li>
               </ul>
            </div>
         </div>



         <div class="col-md-4 col-xs-4">
            <div class="who_we_help_block">
               <div class="wwhd_icon">
                  <i class="fas fa-university"></i>
               </div>
               <h6>Government Bodies</h6>
               <p>ODR platforms reduce court backlogs and create efficient resolution channels for civil matters.</p>
               <ul>
                  <!-- <li>Legal issues</li> -->
                  <li>Referred Disputes</li>
                  <li>Small Claims Mediation</li>
                  <li>Consumer Protection Cases</li>
                  <li>Regulatory Complaint Handling</li>
               </ul>
            </div>
         </div>


      </div>
   </div>
</section>

<section class="new_float who_we_helpp">
   <div class="container" style="padding: 0 15px;">
      <div class="header">
         <h2>Our Team Of Arbitrators / Mediators Includes</h2>
      </div>

      <div class="content">
         <ul class="team-list">
            <li>Former Judge, Hon'ble High Court</li>
            <li>Former Registrar NCLT and DRT, Govt. of India</li>
            <li>IIAM Certified & Member of APCAM</li>
         </ul>
      </div>

      <div class="disclaimer">
         <div class="disclaimer-title">Disclaimer:</div>
         <div class="disclaimer-text">Our Mediators / Arbitrators Are Professionals Who Act Strictly In A Neutral, Private & Non-judicial Capacity.</div>

      </div>

      <div class="footer">
         <h3>Online Dispute Resolution</h3>
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

<section class="new_faq_block">
   <div class="container">
      <div class="new_faq_block_inner">
         <h2 style="color: black;margin-bottom: 30px;" class="benifts-heading">FAQ</h2>
         <div style="margin-bottom: 25px;" class="col-sm-12 col-md-12 why-us-img-div">

            <div data-port-id="child_ans_div_11" class="accordaion-main-div">
               <h4 class="accordion-cus-head">What is Online Dispute Resolution (ODR)?</h4>
            </div>
            <div id="child_ans_div_11" class="child-ans-div-1">
               <p class="child-ans-text">ODR is a digital way to resolve disputes through mediation, conciliation, or arbitration conducted online. In simpler words, it is the conduct of the ADR (Alternative Dispute Resolution) process in an online environment. Consequently, ODR is not only legally permissible but has also gained broad recognition in India from the judiciary, the government, and business enterprises.
               </p>
            </div>



            <div data-port-id="child_ans_div_1" class="accordaion-main-div">
               <h4 class="accordion-cus-head">What is Online Legal India (OLI)?</h4>
            </div>
            <div id="child_ans_div_1" style="display: none;" class="child-ans-div-1">
               <p class="child-ans-text">OLI is an independent, neutral platform that empowers parties to resolve disputes efficiently through its proprietary modules for Online Dispute Resolution (ODR).
               </p>
            </div>


            <div data-port-id="child_ans_div_2" class="accordaion-main-div">
               <h4 class="accordion-cus-head"> What kind of disputes can be resolved via ODR?</h4>
            </div>
            <div id="child_ans_div_2" style="display: none;" class="child-ans-div-1">
               <p class="child-ans-text">Consumer complaints, e-commerce issues, banking/loan disputes, employment matters, commercial contracts, Payment delays, non-performance of contractual obligations, Disputes over wages, full & final settlements, leave encashment, etc., Landlord–tenant disputes, Travel and hospitality-related grievances (airline, hotel, tour bookings) and more.
               </p>
            </div>


            <div data-port-id="child_ans_div_12" class="accordaion-main-div">
               <h4 class="accordion-cus-head">Can criminal cases be resolved via ODR?</h4>
            </div>
            <div id="child_ans_div_12" style="display: none;" class="child-ans-div-1">
               <p class="child-ans-text">No. Criminal offences and serious statutory violations cannot be settled through ODR.</p>
            </div>


            <div data-port-id="child_ans_div_13" class="accordaion-main-div">
               <h4 class="accordion-cus-head">Is ODR legally valid?</h4>
            </div>
            <div id="child_ans_div_13" style="display: none;" class="child-ans-div-1">
               <p class="child-ans-text">Yes. ODR is recognized under Indian law, and its settlements /awards carry the same legal effect as offline proceedings.</p>
            </div>


            <div data-port-id="child_ans_div_14" class="accordaion-main-div">
               <h4 class="accordion-cus-head">What are the benefits?</h4>
            </div>
            <div id="child_ans_div_14" style="display: none;" class="child-ans-div-1">
               <p class="child-ans-text">It’s fast, cost-effective, convenient, confidential, and accessible from anywhere.</p>
            </div>


            <div data-port-id="child_ans_div_15" class="accordaion-main-div">
               <h4 class="accordion-cus-head">How secure is the process?</h4>
            </div>
            <div id="child_ans_div_15" style="display: none;" class="child-ans-div-1">
               <p class="child-ans-text">ODR platforms use encrypted systems and confidentiality safeguards to protect your data.</p>
            </div>


            <div data-port-id="child_ans_div_4" class="accordaion-main-div">
               <h4 class="accordion-cus-head">Can I file a case from anywhere?</h4>
            </div>
            <div id="child_ans_div_4" style="display: none;" class="child-ans-div-1">
               <p class="child-ans-text">Yes. ODR is location-independent—you can file and attend hearings online from anywhere.
               </p>
            </div>

            <div data-port-id="child_ans_div_10" class="accordaion-main-div">
               <h4 class="accordion-cus-head">Are ODR decisions binding?</h4>
            </div>
            <div id="child_ans_div_10" style="display: none;" class="child-ans-div-1">
               <p class="child-ans-text">Yes, arbitration awards are legally binding. Mediation settlements are binding if both parties sign.</p>
            </div>




            <div data-port-id="child_ans_div_17" class="accordaion-main-div">
               <h4 class="accordion-cus-head">What documents do I need?</h4>
            </div>
            <div id="child_ans_div_17" style="display: none;" class="child-ans-div-1">
               <p class="child-ans-text">Any relevant agreements, invoices, receipts, communication records, or other evidence supporting your claim.</p>
            </div>

            <div data-port-id="child_ans_div_18" class="accordaion-main-div">
               <h4 class="accordion-cus-head">What happens after settlement?</h4>
            </div>
            <div id="child_ans_div_18" style="display: none;" class="child-ans-div-1">
               <p class="child-ans-text">A written settlement/Memorandum of Understanding (MoU) or arbitral award (in case of arbitration) is issued, which is legally enforceable.</p>
            </div>





         </div>
      </div>
   </div>
</section>

<section class="note">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="note_inner">
               <p><strong>Note:</strong> Before payment of any fees please ensure to provide to us, full and complete information with supporting documents wherever possible regarding your dispute / grievances.</p>
               <p>Our mediation proposal to the opposite party and subsequent correspondences , if required shall be based only upon the information / Data / documents submitted and uploaded from your end. Any misinformation, exaggeration, Incorrect fact, suppression of facts from your end leading to subsequent legal consequences from and by the opposite party shall be solely your responsibility and this company shall not be liable in any way for any such consequences.</p>
               <p>Please also note that with the overall guidance of mediation experts and other professionals every possible effort shall be resorted to resolve your dispute provided the opposite party consents to mediation, However no commitment is assured.</p>
            </div>
         </div>
      </div>
      <div class="link_lists cstm_link_lst">
         <p>
            <a data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Disclaimer :</a>
         </p>
         <div class="collapse multi-collapse show" id="multiCollapseExample1">
            <div class="card card-body">
               <ul class="footer_links cstm_ftr_li">
                  <!-- <li>
                        This website is privately operated and not affiliated with any government entity. We do not represent or are affiliated with, endorsed by, or in any way connected to any government body or department. The form provided is not for official registration purposes; rather, it's designed to gather information from our clients to help us better understand their business or needs. By continuing to use this website, you acknowledge that we are a private company managing its operations. We offer assistance based on customer requests, and the fees collected on this website are for consultancy services.
                        </li> -->

                  <li>
                     Online Legal India is not a law firm and does not offer legal advice. The materials and services provided are not a substitute for professional legal counsel. The use of these materials or services does not create an Attorney-Client relationship. Online Legal India serves as a neutral platform that connects individuals seeking Online Dispute Resolution (ODR) services with arbitrators and mediators.
                  </li>

               </ul>
            </div>
         </div>
      </div>
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

<script src="../../js/accordion.js"></script>

<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

<script>
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
               console.log(r);
               r.attr('type', 'submit').html('Redirecting to Payment Lobby...');
               setTimeout(function() {
                  $('.oli-validate-form').submit();
               }, 0);
            } else {
               alert('Please Enter the Correct Captcha');
            }
         }
      })
   }


   $(document).on('click', '#btnrefresh', function() {
      var url = window.location.origin + '/payment/captcha.php?' + Math.random();
      document.getElementById('captcha_holder').src = url;
      document.getElementById('captcha_code').value = '';
      return false;
   });

   // Adding custom validation method for Indian mobile number pattern
   $.validator.addMethod("indianMobilePattern", function(value, element) {
      return this.optional(element) || /^[6-9]\d{9}$/.test(value);
   }, "Please enter a valid Indian mobile number starting with 6, 7, 8, or 9.");

   $('#oli-validate-form').validate({
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
            rangelength: [10, 10],
            indianMobilePattern: true
         },
         state: {
            required: true
         },
         description: {
            required: true
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
         description: {
            required: "Please enter description."
         }
      }
   });
   window.wa_service_name = 'Online Dispute Resolution';
   window.wa_service_code = 'ODR';

   //var SubmitClickStatus = 0 ;
   $(document).on('click', '#nextBtn', function(e) {
      e.preventDefault();
      if ($("#oli-validate-form").valid()) {

         $('#nextBtn').prop('disabled', true);

         // let formData = new FormData($("#oli-validate-form")[0]);
         let formData = $('#oli-validate-form').serialize();
         $.ajax({
            url: "../../payment/submit_odr_registration_mzq.php",
            method: 'post',
            data: formData,
            dataType: "json",
            success: function(data) {
               if (data.success) {
                  fbq('track', 'Lead');
                  window.location = "https://www.onlinelegalindia.com/payment/payment-lobby.php?oli-id=" + data.oli_id;

               } else {
                  alert(data.msg);
               }
            },
            error: function(jqXHR, textStatus, errorThrown) {
               alert("An error occurred! Please refresh page and try again.");
               $('#nextBtn').prop('disabled', false);
               location.reload();
            }
         });

      }
   });
</script>

<script>
    $('#trust_pilot_reviews').owlCarousel({
           loop:true,
           margin:15,
           dots:false,
           nav:false,
           autoplay:true,
           autoplayTimeout:1800,
           autoplayHoverPause:true,   
         navText: [
                '<i class="fas fa-long-arrow-alt-left"></i>',
                '<i class="fas fa-long-arrow-alt-right"></i>'
            ],
           responsive:{
               0:{
                   items:1,
                   nav:false
               },
               600:{
                   items:3,
               },
               1000:{
                   items:3,
               }
           }
       });
</script>

<script>
   $(".apply_now_green").click(function(event) {

      event.preventDefault();

      if ($(window).width() > 991) {
         $('html, body').animate({
            scrollTop: 0
         });
      } else {
         $('html, body').animate({
            scrollTop: 0
         }, 50);
      }


   });
</script>

<script>
   $('.owl-one').owlCarousel({
      loop: true,
      margin: 5,
      nav: true,
      autoplay: true,
      autoplayTimeout: 2000,
      autoplayHoverPause: true,
      responsive: {
         0: {
            items: 3,
            nav: true,
            stagePadding: 20,
         },
         600: {
            items: 3
         },
         1000: {
            items: 8
         }
      }
   });
</script>

<script>
   $(".register_now_button").click(function(event) {




      event.preventDefault();




      if ($(window).width() > 991)

      {

         $('html, body').animate({

            scrollTop: 0

         });

      } else

      {

         $('html, body').animate({

            scrollTop: 0

         }, 500);

      }







   });
</script>

<script>
   function fees_list() {
      $("#more_fees").toggle();
   }
   $('.gst_rdiobtn').click(function() {
      $('.price_active').toggleClass('price_active');
      $(this).toggleClass('price_active');
      $('.gst_rdiobtn label').css("cursor", "pointer");
   });
</script>

<script>
   function show_price_details(iso_type) {

      $('input:radio[name="form_price"]').attr('checked', false);
      $(".gst_rdiobtn").removeClass("price_active");

      if (iso_type == 'IAF') {
         $('#price_1').prop('checked', true);

         $("#second_div .gst_rdiobtn:first").addClass("price_active");
      } else if (iso_type == 'NON_IAF') {

         $('#price_5').prop('checked', true);
         $("#thired_div .gst_rdiobtn:first").addClass("price_active");
      } else if (iso_type == 'compliance') {
         $("#price_9").prop("checked", true);
         $("#fourth_div .gst_rdiobtn:first").addClass("price_active");
      }
   }
   //select_package
   function select_package(iso_type) {
      //alert(iso_type);
      if (iso_type == 'IAF') {
         $('#price_1').prop('checked', true);
         $('#price_5').prop('checked', false);
      } else if (iso_type == 'Non_IAF') {
         $('#price_1').prop('checked', false);
         $('#price_5').prop('checked', true);
      } else {
         $('#price_1').prop('checked', true);
         $('#price_5').prop('checked', false);
      }
   }
</script>

<script>
   $(document).ready(function() {

      $('.moreless-button').click(function() {
         $('.moretext').slideToggle();
         if ($(this).hasClass('expanded')) {
            $(this).find('.button-text').text('Show More other services prices');
            $(this).find('i').removeClass('fa-chevron-up').addClass('fa-chevron-down');
            $(this).removeClass('expanded');
         } else {
            $(this).find('.button-text').text('Show Less other services prices');
            $(this).find('i').removeClass('fa-chevron-down').addClass('fa-chevron-up');
            $(this).addClass('expanded');
         }
      });
   });
</script>

<script>
   function package_detail() {
      $("#more_package_iso").toggle();
   }
</script>

<script>
   // window.tawkto = function() {}; // Neutralize the first script's function

   // // 2. Block the second script's IIFE (Immediately Invoked Function Expression)
   // const originalCreateElement = document.createElement;
   // document.createElement = function(tag) {
   //    if (tag === 'script') {
   //       // Intercept script creation and prevent Tawk.to from loading
   //       const script = originalCreateElement.call(document, tag);
   //       const originalSrcDescriptor = Object.getOwnPropertyDescriptor(HTMLScriptElement.prototype, 'src');
   //       Object.defineProperty(script, 'src', {
   //          set: function(value) {
   //             if (value.includes('tawk.to')) {
   //                console.log('Tawk.to script blocked');
   //                return; // Cancel setting the Tawk.to URL
   //             }
   //             originalSrcDescriptor.set.call(this, value);
   //          }
   //       });
   //       return script;
   //    }
   //    return originalCreateElement.call(document, tag);
   // };

   // // 3. Remove existing Tawk.to scripts (if already injected)
   // document.querySelectorAll('script[src*="tawk.to"]').forEach(script => script.remove());
</script>
@endsection
