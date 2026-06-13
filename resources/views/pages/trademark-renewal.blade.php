@extends('layouts.app')

@section('meta')
<title>Apply for Trademark Renewal Online | Foundida</title>
<meta name="description" content="Renew your trademark certificate for another 10 years with the help of Trademark expert from Foundida. Trusted by 5 Lac+ clients across India.">
<meta name="keywords" content="Trademark Renewal">
<link rel="canonical" href="https://www.foundida.com/services/trademark-renewal/" />
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.foundida.com/services/trademark-renewal/">
<meta property="og:image" content="https://www.foundida.com/images/logo6-1.webp">
<meta property="og:title" content="Apply for Trademark Renewal Online | Foundida">
<meta property="og:site_name" content="Foundida">
<meta property="og:description" content="Renew your Trademark Certificate for another 10 years with the help of Trademark Expert panel from Foundida. Trusted by 5 Lacs+ clients across India.">
<meta property="og:locale" content="en-IN">
<script type="application/ld+json">
  [{
    "@@context": "http://schema.org/",
    "@@type": "Product",
    "name": "Trademark Renewal",
    "image": "https://www.foundida.com/images/renew-trademark.webp",
    "description": "Renew your trademark certificate for another 10 years with the help of Trademark experts from Foundida. Trusted by 5 Lac+ clients across India.",
    "aggregateRating": {
      "@@type": "AggregateRating",
      "ratingValue": "5",
      "reviewCount": "6221"
    },
    "offers": {
      "@@type": "Offer",
      "priceCurrency": "INR",
      "price": "1999",
      "seller": {
        "@@type": "Organization",
        "name": "Foundida",
        "logo": {
          "@@type": "ImageObject",
          "url": "https://www.foundida.com/images/logo6-1.svg",
          "width": "300",
          "height": "61"
        }
      }
    }
  }]
</script>
@endsection

@section('styles')
<link rel="stylesheet" type="text/css" href="https://www.foundida.com/css/trademark-renewal.css">
   <!--      <link rel="stylesheet" type="text/css" href="https://www.foundida.com/css/bootstrap.min.css">-->
   <!-- <link rel="stylesheet" type="text/css" href="https://www.foundida.com/css/cut.css"> -->
   <!-- <link rel="stylesheet" type="text/css" href="https://www.foundida.com/css/alternative-contact-popup.css"> -->
   <!-- <link rel="stylesheet" href="https://www.foundida.com/css/brands.min.css"> -->
   <!-- <link rel="stylesheet" href="https://www.foundida.com/css/solid.min.css"> -->
@endsection

@section('content')
<style>
   #contact h4 {
      font-size: 16px;
   }
</style>
<style>
   #fees .copy_box {
      height: 564px !important;
   }

   @media screen and (max-width:768px) {
      .gift_voucher_main {
         bottom: -18px;
      }

      .gift_voucher_main1 {
         left: 14px;
         position: absolute;
         height: auto;
      }

      #fees {
         padding: 0 15px;
      }
   }

   #add_from,
   #new_state_holder {
      height: 42px;
      border-radius: 0px;
      -webkit-border-radius: 0px;
      -moz-border-radius: 0px;
      -ms-border-radius: 0px;
   }

   .govt_fees {
      margin-top: 15px;
   }

   .govt_fees p {
      color: #fff;
      text-align: center;
   }

   .banner_image_text h1 {
      margin-top: 64px;
      font-weight: 600;
      font-family: "Poppins", sans-serif;
      font-size: 28px;
      text-align: center;
   }

   @media screen and (max-width: 768px) {
      .banner_image_text h1 {
         margin-top: 33px;
         font-weight: 600;
         font-family: "Poppins", sans-serif;
         font-size: 20px;
      }
   }
</style>
<section>
   <div id="banner">
      <a href="#renewal_form"><img class="img-fluid" alt="Trademark Renewal" style="width: 100%" src="../../images/renew-trademark.webp" /> </a>
   </div>

</section>
<section class="srvc-space styletopheadercenter">
   <div class="container pb-60">
      <div class="banner_image_text" id="renewal_form">
         <h1>Renew Your Trademark Online - Secured and Fast Renewal.</h1>
         <p style="text-align: center;font-weight: 600;">Trusted by over 5,00,000+ customers across India | Call or Click, as we do it quick! Renew your Trademark certificate for your brand before expiration.</p>
      </div>
   </div>
</section>
<section class="mt-20 styletop40">
   <div class="container">
      <div class="row">
         <div class="pull-left col-md-6 col-sm-12">

            <form id="contact" class="oli-validate-form" action="https://www.foundida.com/payment/submit_form_trademark_renewal.php" method="post" enctype="multipart/form-data">

               <input type="hidden" id="gclid_field" name="gclid_field" value="">
               <input type="hidden" id="landing_uri" name="landing_uri" value="https://www.foundida.com/services/trademark-renewal/">

               <input type="hidden" id="utm_content" name="utm_content">
               <input type="hidden" id="utm_source" name="utm_source">
               <input type="hidden" id="utm_medium" name="utm_medium">
               <input type="hidden" id="utm_campaign" name="utm_campaign">
               <input type="hidden" id="Adgroupid" name="Adgroupid">
               <input type="hidden" id="device" name="device">
               <input type="hidden" id="keyword_id" name="keyword_id">
               <input type="hidden" id="Campaignid" name="Campaignid" value="">
               <input type="hidden" id="landing_url" name="landing_url" value="">

               <!-- <p class="payroll">Payroll & Attendance Management System Free for 3 Months</p> -->

               <h3 class="styletrademarkformheader">Need Help with Trademark Renewal?</h3>
               <h4>Fill Up the below Mentioned Form</h4>
               <fieldset>
                  <input placeholder="Your Name" name="name" type="text" required="">
               </fieldset>
               <fieldset>
                  <input placeholder="Your Email Address" name="email" type="email" required="">
               </fieldset>
               <fieldset>
                  <input placeholder="Your Phone Number (Without 0 or +91)" maxlength="10" name="mobile" id="mobile" type="tel">
               </fieldset>
               <fieldset>
                  <input placeholder="City" id="city" name="city" type="text">
                  <p id="error_city" style="color: red;display: none;">Please enter your city</p>
               </fieldset>
               <input type="hidden" id="csrf_token" name="csrf_token" value="t55569907a2b08394a77e6a57ea837e6" />
               <fieldset>
                  <select name="state" required="" id="new_state_holder">
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
               </fieldset>

               <fieldset style="display:none;">
                  <input class="inputfile" type="file" style="display:none;border: 1px solid #aaa; height: 35px; width: 100%" name="file[]" tabindex="3" placeholder="Please upload file.." id="file" multiple=""> <span style="color: green">(Optional)</span>
               </fieldset>

               <fieldset>
                  <select name="add_from" id="add_from">
                     <option value="">How did you hear about us?</option>
                     <option value="Zee News">Zee News</option>
                     <option value="Republic TV">Republic TV</option>
                     <option value="Google">Google</option>
                     <option value="Facebook">Facebook</option>
                     <option value="Newspaper">Newspaper</option>
                     <option value="Others">Others</option>
                  </select>
               </fieldset>
               <fieldset class="select_packages">
                  <p style="font-size: 14px;font-weight: 600;">Package</p>
                  <div class="package_btn">
                     <div>
                        <label class="package_container">
                           <input type="radio" checked="checked" name="form_price" id="basic" value="1999">
                           <span class="checkmark"></span>
                           <i>Trademark Renewal <br> (Rs.1999)</i>
                        </label>
                     </div>
                  </div>
               </fieldset>
               <div class="form_check">
   <label class="custom_check">I have read & agreed to the company's Terms and Conditions, disclaimer and refund policy, and also ready to accept calls, SMS, emails, etc. 
      <input type="checkbox" data-degree="°" name="is_prompted_whatsapp" checked value="1">
      <span class="form_checkmark"></span>
    </label>
</div>



               <!-- <input type="text" id="txtCaptcha" style="background-image:url(https://www.foundida.com/payment/images/1.JPG); text-align:left; border:none;
                        font-weight:bold; font-size: 22px; width: 40%; font-family:Modern" readonly="">
               <input type="hidden" id="txtCaptcha2">

               <img src="https://www.foundida.com/payment/images/capta.webp" id="btnrefresh" onclick="DrawCaptcha();" alt="Captcha">
               <input type="text" name="captcha_code" id="captcha_code" class="pull-right" style="width: 50%" placeholder="Enter the captcha here.."> -->

               <input type="hidden" name="form_name" value="TMRREN">
               <fieldset>
                  <button name="submit" type="button" id="contact-submit" class="btn" data-submit="...Sending">Submit</button>
               </fieldset>
            </form>
         </div>
         <div class="col-md-6 col-sm-12 desktop_version register_form ">
            <div class="banner_image_text">
               <p>The validity of the Trademark exists for 10 years. Hence, one should renew their Trademark certificate within the mentioned period to avoid any objection & interruption. This application has to be filed on or before 6 months from the date of expiration of the registration.
               </p>
               <h5>The Trademark Renewal can be done in two ways:</h5>
               <ul class="pf_list list_margin">
                  <li>You can apply renewal to change any sign or words which is already existing trademark.</li>
                  <li>You can apply renewal without a change.</li>
               </ul>
               <p><b>We can help you file Trademark Renewal and various other services from Foundida and make this entire process seamless.</b></p>
               <h5>Who Can Obtain a Trademark Renewal</h5>
               <ul class="pf_list">
                  <li>Individual</li>
                  <li>Joint Owner</li>
                  <li>Limited Liability Partnership</li>
                  <li>Trust or Society</li>
                  <li>Proprietorship Firm</li>
                  <li>Partnership Firm</li>
               </ul>
            </div>
            <div class="row top_clients_desk" style="margin-top:10px">
               <div class="col-md-4 col-xs-6">
                  <div class="happy_clients">
                     <span><span class="happy_clients_bold">5 Lac+</span> <br>Happy Clients</span>
                  </div>
               </div>
               <div class="col-md-4 col-xs-6">
                  <div class="happy_clients">
       <span><span class="happy_clients_bold"> 6,000+ </span> <br>Google Reviews</span>
</div>

               </div>
               <div class="col-md-4 col-xs-12 resp_clients_margin_top">
                  <div class="happy_clients">
                     <span><span class="easy_emi">Easy </span><span class="happy_clients_bold">EMI</span> Options</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

</section>


<section id="howWework" class="block_padding">
   <div class="container">
      <div class="row">
         <div class="block_heading">
            <h2 style="color: black" class="benifts-heading">How do we work? </h2>

         </div>
         <div class="col-sm-12 col-md-12">
            <div class="row">
               <div class="col-md-2 col-md-12">
                  <div class="process_section">
                     <i>1</i>

                     <p>Upload your details and make payment.</p>
                     <p>⟶</p>
                  </div>
               </div>
               <div class="col-md-2 col-md-12">
                  <div class="process_section">
                     <i>2</i>

                     <p>Get a call from TM expert.</p>
                     <p>⟶</p>
                  </div>
               </div>
               <div class="col-md-2 col-md-12">
                  <div class="process_section">
                     <i>3</i>

                     <p>Expert will analyze and examine and make a report.</p>
                     <p>⟶</p>
                  </div>
               </div>
               <div class="col-md-2 col-md-12">
                  <div class="process_section">
                     <i>4</i>

                     <p>Drafting of Trademark Renewal done.</p>
                     <p>⟶</p>
                  </div>
               </div>
               <div class="col-md-2 col-md-12">
                  <div class="process_section">
                     <i>5</i>

                     <p>Expert will send you the draft for approval.</p>
                     <p>⟶</p>
                  </div>
               </div>
               <div class="col-md-2 col-md-12">
                  <div class="process_section">
                     <i>6</i>

                     <p>Congratulations! Your Trademark Renewal has been successfully applied.</p>
                     <p>⟶</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-sm-12 col-md-12">
            <div class="row">
            </div>
         </div>
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
                        <img src="https://www.foundida.com/images/banner/md-new3.webp" alt="Rajesh Kewat">
                    </div>
                    <div class="new_md_section_left_text">
                        <h4>Rajesh Kewat</h4>
                        <p>The Founder & CEO of Foundida, Mr. Rajesh Kewat actually had the courage to sacrifice his well paid job at Oxford and turn his startup dream into a multi crore turnover company.</p>
                    </div>
                </div>
                <div class="col-md-8 col-xs-8">
                    <div class="new_md_section_right">

                        <div class="nmsr_block">
                            <div class="nmsr_block_img">
                                <img src="https://www.foundida.com/images/about-us/zeenews.webp" alt="Zee News">
                            </div>
                            <div class="nmsr_block_text">
                                <p>Meet Rajesh Kewat, The Small Town Entrepreneur Behind Foundida's Success</p>
                            </div>

                        </div>

                        <div class="nmsr_block">
                            <div class="nmsr_block_img">
                                <img src="https://www.foundida.com/images/Ted-x.webp" alt="TEDx">
                            </div>
                            <div class="nmsr_block_text">
                                <p>From Rs. 2000 Salary to Multi-Crore Turnover Company | Rajesh Kewat | TEDxPradhikaran.</p>
                            </div>

                        </div>

                        <div class="nmsr_block">
                            <div class="nmsr_block_img">
                                <img src="https://www.foundida.com/images/about-us/footer-forbes-logo-new.webp" alt="Forbes">
                            </div>
                            <div class="nmsr_block_text">
                                <p>Mr. Rajesh Kewat getting featured in the special edition of Forbes India Magazine - Showstoppers 2022-23</p>
                            </div>

                        </div>

                        <div class="nmsr_block">
                            <div class="nmsr_block_img">
                                <img src="https://www.foundida.com/images/Asia_One.webp" alt="Asia One">
                            </div>
                            <div class="nmsr_block_text">
                                <p>Rajesh Kewat, the MD of FastInfo Legal Services Pvt Ltd, owns a movie-like story; a man who lost everything for his love & attained great success within just 500 days with his innovative business.</p>
                            </div>

                        </div>

                        <div class="nmsr_block">
                            <div class="nmsr_block_img">
                                <img src="https://www.foundida.com/images/midday9999.webp" alt="Mid Day">
                            </div>
                            <div class="nmsr_block_text">
                                <p>Rajesh Kewat Conferred with Businessman of the Year Award at Brands Impact NFA 2022.</p>
                            </div>

                        </div>
                        <div class="nmsr_block nmsr_block99">
                            <div class="new_past_exprience">
                                <h5>Past Experiences</h5>
                                <div class="new_past_exprience_inner">
                                    <img src="https://www.foundida.com/images/oxford.webp" alt="Oxford">
                                    <img src="https://www.foundida.com/images/Pearson_logo.webp" alt="Pearson" class="pearson">
                                    <img src="https://www.foundida.com/images/educomp_logo_1.webp" alt="Educamp">
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

<div id="fees" class="row background_image copyright_fees block_padding">
   <div class="container">
      <div class="col-md-12 col-sm-12">
         <div class="col-md-12 col-sm-12">
            <h2 class="benifts-heading">Professional Fees</h2>
         </div>
      </div>
      <div class="benifits-ul">
         <div class="register-benifit-li register-benifits-text copy_box">
            <h4><span>Trademark Renewal</span> <span>One Time Charges</span> <img src="../../images/svg/rupee_svg.svg" alt="Rupee" style="position: relative;left: 10px;"> 1999</h4>
            <ul class="copy_lists">
               <li>Drafting and filing of trademark renewal application.</li>
               <li>For individuals, proprietorships, registered SMEs and registered Startups.</li>
               <!-- <li>Inclusive of government fee and taxes.</li> -->
            </ul>
            <p style="margin-top:18px;"><b>*Excluding Govt. Fees</b></p>

            <a href="#contact" id="basic_register">Apply Now</a>
         </div>

      </div>

      <div class="govt_fees">
         <p>Excluding Govt. Fees</p>
      </div>


   </div>
</div>

<section id="docRequ" class="block_padding">
   <div class="container">
      <div class="row">
         <div class="block_heading">
            <h2>Documents required</h2>
         </div>

         <div class="col-md-3 col-xs-12 docRequ_inner">

            <img src="../../images/svg/contact_details.svg" alt="Applicant Details">

            <h3>Details of the Applicant</h3>

            <ul style="padding-left: 18px;">
               <li>Name, Address, Nationality of the applicant</li>
               <li>Corporate body/other entity need to provide with a registration certificate</li>
            </ul>
         </div>
         <div class="col-md-3 col-xs-12 docRequ_inner">
            <img src="../../images/svg/statement.svg" alt="Power of Attorney">

            <h3>Power of Attorney</h3>
            <p>A candidate must sign the power of attorney rightfully if they are registering for Trademark Renewal through any advocate or legal firm.</p>
         </div>
         <div class="col-md-3 col-xs-12 docRequ_inner">
            <img src="../../images/svg/certificate.svg" alt="TM Certificate">
            <h3>TM Certificate</h3>
            <p><a href="https://www.foundida.com/blogs/download-trademark-certificate/" target="_blank" style="color:#fff !important;text-decoration: underline;">Trademark Registration Certificate</a> issued by the Ministry.</p>
         </div>
         <div class="col-md-3 col-xs-12 docRequ_inner">
            <img src="../../images/svg/checklist.svg" alt="TM-A">
            <h3>Copy of TM-A</h3>
            <p>The application filed with the TM Registry for its registration is to be provided.</p>
         </div>
      </div>

   </div>

</section>


<section id="advantages" class="block_padding advantage_dsc">
   <div class="container">
      <div class="row">
         <div class="adventages">
            <div class="block_heading">
               <h2>Benefits from the Service</h2>
            </div>
            <div class="col-sm-12 col-md-12 advantage_margin">
               <div class="row">
                  <div class="col-md-12">
                     <div class="row">

                        <div class="col-sm-12 col-md-3">
                           <div class="advantge_box">
                              <i><img src="../../images/svg/brand.svg" alt="Brand Names"></i>
                              <h4>Secure your brand names</h4>
                              <p>It gives incessant and continuous protection to the brand from getting dissolved.</p>
                           </div>
                        </div>
                        <div class="col-sm-12 col-md-3">
                           <div class="advantge_box">
                              <i><img src="../../images/svg/legal_integrities.svg" alt="Legal Rights"></i>
                              <h4>Eliminates any legal rights</h4>
                              <p>Not renewal would lead to disapproval of legal rights not only to the owner but also to every people associated with it.</p>
                           </div>
                        </div>
                        <div class="col-sm-12 col-md-3">
                           <div class="advantge_box">
                              <i><img src="../../images/svg/brand_value.svg" alt="Brand Value"></i>
                              <h4>Increases Brand value</h4>
                              <p>Which means with a renewal of every term after 10 years of being in the business a brand value raises and any charges against it could lead to compensation. Also, the owner can issue a licence in return for monetary exchanges.

                              </p>
                           </div>
                        </div>
                        <div class="col-sm-12 col-md-3">
                           <div class="advantge_box">
                              <i><img src="../../images/svg/duplicate.svg" alt="Diminishes Duplicity"></i>
                              <h4>Diminishes Duplicity</h4>
                              <p>It also diminishes the chances of duplicity after renewal at the end of every term.
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>

               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<section id="whoRequir" class="block_padding" style="padding-top:0">
   <div class="container">
      <div class="row">
         <div class="whatdsc_det">

            <div class="col-md-8 col-sm-12 col-md-offset-2 pull-left">
               <div class="block_heading">
                  <h2>Key Factors / Important Points</h2>
               </div>
               <ul class="pf_list imp_pts">
                  <li>The application for the Trademark Renewal is the form TM-R.</li>
                  <li>The Trademark Renewal Application does not need to be filed by the registered owner of the trademark, it can be done by an authorised representative or an agent.</li>
               </ul>
            </div>

         </div>
      </div>
   </div>
</section>

<section id="whyUs" class="block_padding">
   <div class="container">
      <div class="row">
         <div class="block_heading">
            <h2>Why Us?</h2>
         </div>
         <div class="col-md-12 col-sm-12">
            <div class="row">
               <div class="col-md-4 col-sm-12 why_trademark_renewal">
                  <div class="hexagon_box">
                     <div class="hexagon">
                        <i>
                           <img src="https://www.foundida.com/services/include/image/recognized.svg" alt="recognized" />
                        </i>
                        <p>Recognized by Govt. of India</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-12 why_trademark_renewal">
                  <div class="hexagon_box">
                     <div class="hexagon">
                        <i>
                           <img src="https://www.foundida.com/services/include/image/happy_customers.svg" alt="Happy Customers" />
                        </i>
                        <p>5 Lakh+ Happy Customers Across India</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-12 why_trademark_renewal">
                  <div class="hexagon_box">
                     <div class="hexagon iso_sign">
                        <i>
                           <img src="https://www.foundida.com/services/include/image/iso-mark.webp" alt="ISO" />
                        </i>
                        <p>ISO Certified</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-12 why_trademark_renewal">
                  <div class="hexagon_box">
                     <div class="hexagon">
                        <i>
                           <img src="https://www.foundida.com/services/include/image/data_security.svg" alt="Data Security" />
                        </i>
                        <p>Data Security & Trust</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-12 why_trademark_renewal">
                  <div class="hexagon_box">
                     <div class="hexagon">
                        <i>
                           <img src="https://www.foundida.com/services/include/image/experts.svg" alt="Experts" />
                        </i>
                        <p>Trained & Professional Experts</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-12 why_trademark_renewal">
                  <div class="hexagon_box">
                     <div class="hexagon">
                        <i>
                           <img src="https://www.foundida.com/services/include/image/on-time.svg" alt="On Time Service" />
                        </i>
                        <p>On Time Service </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-12 why_trademark_renewal">
                  <div class="hexagon_box">
                     <div class="hexagon">
                        <i>
                           <img src="https://www.foundida.com/services/include/image/quick.svg" alt="Super Fast Service" />
                        </i>
                        <p>Super Fast Service</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-12 why_trademark_renewal">
                  <div class="hexagon_box">
                     <div class="hexagon affordable_sign_team">
                        <i>
                           <img src="https://www.foundida.com/services/include/image/users_oli_Jan_22.svg" alt="Quick Response Team" />
                        </i>
                        <p>Quick Response Team</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-12 why_trademark_renewal">
                  <div class="hexagon_box">
                     <div class="hexagon affordable_sign">
                        <i>
                           <img src="https://www.foundida.com/services/include/image/affordable.svg" alt="Affordable" />
                        </i>
                        <p>Affordable</p>
                     </div>
                  </div>
               </div>
            </div>

         </div>
      </div>
   </div>
</section>

<style>
.awab_one_inner{
   display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    margin: 0 auto;
    align-items: center;
    grid-gap:20px;
    width:70%;
}
.awab_one_inner2{
   display: grid;
    grid-template-columns: 1fr 1fr 1fr ;
    margin: 0 auto;
    align-items: center;
    grid-gap:20px;
}
.awab_one_inner3{
   display: grid;
    grid-template-columns: 1fr;
    align-items: center;
    grid-gap:20px;
    width:60%;
    margin:0 auto;
}
.awaboi_block{
   display:flex;
   align-items:center;
   justify-content:center;
   height: 90px;
    box-shadow: 0 5px 19px -10px #000;
    padding: 5px;
}
.awaboi_block3{
   display:flex;
   align-items:center;
   justify-content:center;
   padding: 5px;
   box-shadow: 0 5px 19px -10px #000;
}
.awaboi_heading h2{
   margin-bottom: 30px;
}
.associated_with_awarded_by2{
   margin-top:20px;
}
/* .awaboi_block img{
   width:60%;
}
.tatawebp{
   width:40% !important;
}
.icici_bank, .flipkart{
   width:80% !important;
}
.awaboi_block1 img{
width:70%;
} */
.awaboi_block1{
   height:90px;
}
.oli_fic_pic{
   width:70%;
   object-fit:cover;
}
.oli_fic_pic999{
   width:30%;
}
@media (max-width: 767px) {
   .awab_one_inner{
      width:100%;
   }
   .oli_fic_pic999{
   width:35% !important;
}
   .awaboi_block_icici {
    justify-self: center;
    width: calc(200px - 20px);
    grid-column-start: span 2;
}
   .associated_with_awarded_by .container, .associated_with_awarded_by2 .container{
      padding:0 15px;
   }
   .awab_one_inner, .awab_one_inner2{
      width:100%;
      grid-template-columns: 1fr 1fr ;
      width: 100%;
   }
   .awab_one_inner2{
      width:100%;
   }
   .awaboi_block1 {
    height: 60px;
}
.awab_one_inner div:nth-child(5), .awab_one_inner2 div:nth-child(3){
   justify-self: center;
 width: calc(200px - 20px);
 grid-column-start: span 2;
}
.awab_one_inner3{
   width: 75%;
}
.oli_fic_pic{
   width:100%;
}
.block_heading h2::after{
   top: auto;
   bottom: -10px !important;
}
}
@media (max-width: 420px) {
   .tatawebp {
    width: 35% !important;
}
.awaboi_block img {
    width: 50%;
}
.icici_bank, .flipkart {
    width: 70% !important;
}
.awaboi_block{
   height:70px;
}
.awaboi_block1 {
    height: 70px;
}
.awab_one_inner2, .awab_one_inner{
   grid-gap:15px;
}
.awaboi_block1 img{
   width:90%;
}
}
</style>



<section class="associated_with_awarded_by" >
   <div class="container">
      <div class="awab_one">
         <div class="block_heading awaboi_heading">
            <h2 style="color: black" class="benifts-heading">Associated with</h2>
         </div>
         <div class="awab_one_inner">

            <div class="awaboi_block">
               <img src="https://www.foundida.com/images/associated-tata.webp" class="tatawebp" alt="TATA">
            </div>

            <div class="awaboi_block">
               <img src="https://www.foundida.com/images/associated-paytm.webp" class="" alt="Paytm">
            </div>

            <div class="awaboi_block awaboi_block_icici">
               <img src="https://www.foundida.com/images/associated-icici.webp" class="icici_bank" alt=" ICICI">
            </div>

            <!-- <div class="awaboi_block">
               <img src="https://www.foundida.com/images/associated-flipkart.webp" class="flipkart" alt="Flipkart">
            </div> -->

           <!--  <div class="awaboi_block awaboi_block_last">
               <img src="https://www.foundida.com/images/associated-DBS-bank.webp" class="" alt="DBS Bank">
            </div> -->

         </div>
      </div>
   </div>
</section>

<section class="associated_with_awarded_by2">
   <div class="container">
      <div class="awab_one">
         <div class="row">
            <div class="col-md-7">
               <div class="block_heading awaboi_heading awaboi_heading3">
               <h2 style="color: black" class="benifts-heading">Appreciated / Awarded by</h2>
               </div>
               <div class="awab_one_inner2">

                  <div class="awaboi_block awaboi_block1">
                     <img src="https://www.foundida.com/images/associated-zee.webp" class="" alt="Zee News">
                  </div>

                  <div class="awaboi_block awaboi_block1">
                     <img src="https://www.foundida.com/images/Ted-x-one.webp" class="" alt="TEDx">
                  </div>

                  <div class="awaboi_block awaboi_block1">
                     <img src="https://www.foundida.com/images/associated-asia-one.webp" class="" alt="Asia one">
                  </div>


               </div>
            </div>
            <div class="col-md-5">
               <div class="block_heading awaboi_heading awaboi_heading4">
                  <h2 style="color: black" class="benifts-heading">Certified / Recognized by</h2>
               </div>
               <div class="awab_one_inner3">

                  <div class="awaboi_block3 ">
                     <img src="https://www.foundida.com/images/oli-fic-iso-certified.webp" class="oli_fic_pic oli_fic_pic999" alt="ISO Certified">
                  </div>

                  <!-- <div class="awaboi_block3 ">
                     <img src="https://www.foundida.com/images/oli-fic-govt.-certified.webp" class="oli_fic_pic" alt="Govt. Certified">
                  </div> -->

               </div>

            </div>
         </div>
      </div>
   </div>
</section>


<section id="ques_ans" class="block_padding">
   <div class="container">
      <div class="row">
         <div class="block_heading">
            <h2>Frequently Asked Questions (FAQs)</h2>
         </div>
         <div class="faq_box">
            <div class="nav-wrapper">
               <nav class="nav">
                  <ul class="nav-list ul-reset">
                     <div class="col-md-12 col-sm-12">
                        <div class="nav-item">
                           <div class="nav-item-inner">
                              <a href="#" class="nav-item-inner-heading plus">What is Trademark ?</a>
                              <div class="nav-sub-list ul-reset">
                                 <div class="nav-sub-list-inner">
                                    <div class="nav-sub-item">
                                       A trademark is a kind of intellectual property which consists of a recognizable sign, design, or expression which identifies products or services of a particular source from those of others, although trademarks used to identify services are usually called service marks.
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="nav-item">
                           <div class="nav-item-inner">
                              <a href="#" class="nav-item-inner-heading plus">What if the trademark expires ?</a>
                              <div class="nav-sub-list ul-reset">
                                 <div class="nav-sub-list-inner">
                                    <div class="nav-sub-item">
                                       You can apply for the restoration of an expired trademark within 6 months from its expiry date to keep using it. But the delay of 6 months can be risky and shall attract additional fees and documentation.
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="nav-item">
                           <div class="nav-item-inner">
                              <a href="#" class="nav-item-inner-heading plus">What is the difference between a trademark registration and a trademark renewal ?</a>
                              <div class="nav-sub-list ul-reset">
                                 <div class="nav-sub-list-inner">
                                    <div class="nav-sub-item">
                                       <a href="https://www.foundida.com/services/trademark-registration/" target="_blank">Trademark Registration</a> is a long process that takes a number of documents and requires more time than the renewal. A renewal is basically for continuing your ownership and use of the trademark, while registration is the initial process to get its exclusive ownership. After completion of every 10 years, the trademark needs to be renewed.
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="nav-item">
                           <div class="nav-item-inner">
                              <a href="#" class="nav-item-inner-heading plus">What are the consequences of failure to renew the trademark ?</a>
                              <div class="nav-sub-list ul-reset">
                                 <div class="nav-sub-list-inner">
                                    <div class="nav-sub-item">
                                       In the case of non-renewal, the consequences are severe. Because the trademark would be removed from the register and any other person can claim it and get it registered to their name.
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="nav-item">
                           <div class="nav-item-inner">
                              <a href="#" class="nav-item-inner-heading plus">When to file a renewal of trademark ?</a>
                              <div class="nav-sub-list ul-reset">
                                 <div class="nav-sub-list-inner">
                                    <div class="nav-sub-item">
                                       The Trademark renewal can be done anytime within 6 months of expiration of 10 years of trademark registration. Any further delay above 6 months will attract extra fee. If the renewal process is not completed within 12 months of expiration of trademark, the trademark will be removed from the trademark register.
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="nav-item">
                           <div class="nav-item-inner">
                              <a href="#" class="nav-item-inner-heading plus">What is meant by trademark 'opposed' ?</a>
                              <div class="nav-sub-list ul-reset">
                                 <div class="nav-sub-list-inner">
                                    <div class="nav-sub-item">
                                       In case the trademark resembles or infringes any existing trademark or any other reason it might cause damages, in such cases the aggrieved party may file an objection to the examiner and the examiner may solve the issue based upon the parties statements and evidences. When the objection arose the examiner will inform to the applicant and he need to reply within sixty days on failing to do so the applicant will deem to be abandoned.
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="nav-item">
                           <div class="nav-item-inner">
                              <a href="#" class="nav-item-inner-heading plus">Do I need to physically present for the process ?</a>
                              <div class="nav-sub-list ul-reset">
                                 <div class="nav-sub-list-inner">
                                    <div class="nav-sub-item">
                                       No, you don’t need to be physically present for the process, Foundida is an online catering platform all you need is an internet connection in your phone/computer and the required documents with you and we can get the job done no matters even if you are present at the remotest location of India
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

                  </ul>
               </nav>
            </div>
         </div>
      </div>
   </div>
</section>


<script>
   // $('.accordaion-main-div').click(function() {
   //    $('.accordaion-main-div').css("color", "#fff");
   //    $(this).css("color", "#39BE54");
   //    var show_id = $(this).attr('data-port-id');
   //    $('.child-ans-div-1').hide();
   //    $('#' + show_id).show();

   // });
</script>
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
                            <a href="https://www.foundida.com/services/company-registration/private-company-registration/">Private Limited Company</a>
                        </li> -->
                        <li>
                            <a href="https://www.foundida.com/services/company-registration/private-company-registration/">Private Limited Company</a>
                        </li>
                        <li>
                            <a href="https://www.foundida.com/services/company-registration/llp-partnership/">Limited
                                Liability Partnership</a>
                        </li>
                        <li>
                            <a
                                href="https://www.foundida.com/services/company-registration/one-person-company-registration/">One
                                Person Company</a>
                        </li>
                        <!-- <li>
                            <a href="<? php // targetUrl('services/company-registration/nidhi-company/')
                                        ?>">Nidhi
                                Company</a>
                        </li> -->
                        <li>
                            <a
                                href="https://www.foundida.com/services/company-registration/public-limited-company/">Public
                                limited Company</a>
                        </li>
                        <li>
                            <a
                                href="https://www.foundida.com/services/company-registration/section-8-company-registration/">Section
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
                            <a href="https://www.foundida.com/services/fssai-registration/">FSSAI [Food
                                License]</a>
                        </li>
                        <li>
                            <a href="https://www.foundida.com/services/fssai-renewal/">FSSAI Renewal</a>
                        </li>
                        <li>
                            <a href="https://www.foundida.com/services/online-iec-code-import-export-license/">IEC
                                [Import/Export Code]</a>
                        </li>
                        <li>
                            <a href="https://www.foundida.com/services/iec-certificate-modification/">IEC
                                Certificate Modification</a>
                        </li>

                        <li>
                            <a href="https://www.foundida.com/services/bis-certificate/">BIS Certificate</a>
                        </li>



                        <li>
                            <!-- <a  href="https://www.foundida.com/services/online-apeda-registration/">Apeda Registration</a> -->
                            <!-- <a  href="https://www.foundida.com/contact/">Apeda Registration</a> -->
                        </li>
                        <li>

                            <!-- <li>
                            <a href="https://www.foundida.com/services/hard-copy-certificate/">Hard-Copy
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
                            <a href="https://www.foundida.com/services/trademark-registration/">TM
                                Registration</a>
                        </li>
                        <li>
                            <a href="https://www.foundida.com/services/trademark-objection-reply/">TM
                                Objection</a>
                        </li>
                        <li>
                            <a href="https://www.foundida.com/services/trademark-renewal/">TM Renewal</a>
                        </li>
                        <li>
                            <a href="https://www.foundida.com/services/online-copyright-registration/">Copyright
                                Registration</a>
                        </li>
                        <li>
                            <a href="https://www.foundida.com/services/iso-registration/">ISO
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
                            <a href="https://www.foundida.com/services/gst-registration/">GST Registration</a>
                        </li>
                        <li>
                            <a href="https://www.foundida.com/services/gst-return-filing/">GST Filing</a>
                        </li>
                        <li>
                            <a href="https://www.foundida.com/services/gst-modification/">GST Modification</a>
                        </li>
                        <li>
                            <a href="https://www.foundida.com/services/gst-cancellation/">GST Cancellation</a>
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
                            <a href="https://www.foundida.com/services/oliaccountant/">Online Accountant</a>
                        </li> -->
                        <li>
                            <!-- <a href="">PF
                                Registration</a> -->
                            <a href="https://www.foundida.com/services/online-tax-pfesi-registration/">PF-ESIC Registration</a>
                        </li>
                        <li>
                            <!-- <a href="">PF Return</a> -->
                            <a href="https://www.foundida.com/services/online-tax-pfesi-return/">PF-ESIC Return Filing </a>
                        </li>
                        <li>
                            <a href="https://www.foundida.com/services/online-bookkeeping-service/">Online
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
            <!-- <img class="footer_black_img" src="https://www.foundida.com/images/footer-logo.png" alt="logo" style="margin-left: -13px;"> -->
            <!-- 30-12-2022_bkp<img class="footer_black_img" src="https://www.foundida.com/images/logo6-1.svg" alt="logo" style="margin-left: -13px; width: 250px;"> -->
            <!-- <img class="footer_black_img" src="https://www.foundida.com/images/fastinfo-group.svg" alt="logo"
                style="margin-left: -13px; width: 250px;"> -->
            <!-- <img class="footer_black_img" src="https://www.foundida.com/images/Online-legal-india-republic.png" alt="logo" style="margin-left: -13px; width: 250px;"> -->
            <p>
                <strong>Foundida is a part of FastInfo Legal Services Pvt Ltd. Which is registered under the Companies Act, 2013.</strong>
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
                    <!-- <a href="https://www.facebook.com/Foundida/"><i class="fab fa-facebook-f"></i></a>
                          <a href="mailto:info@foundida.com"><i class="fab fa-google-plus-g"></i></a> -->
                    <a href="https://www.facebook.com/Foundida/" target="_blank"><img
                            src="https://www.foundida.com/images/facebook.webp" alt="Facebook"></a>
                    <a href="https://twitter.com/onlinelegalind" target="_blank"><img
                            src="https://www.foundida.com/images/twitter.webp" alt="Twitter"></a>
                    <a href="https://www.linkedin.com/company/online-legal-india/" target="_blank"><img
                            src="https://www.foundida.com/images/linkedin.webp" alt="Linkedin"></a>
                    <a href="https://www.instagram.com/foundida/" target="_blank"><img
                            src="https://www.foundida.com/images/instagram.webp" alt="Instagram"></a>
                    <a href="mailto:info@foundida.com"><img src="https://www.foundida.com/images/email.webp"
                            alt="Email"></a>
                    <a href="https://www.youtube.com/c/Foundida" target="_blank"><img class="icons"
                            src="https://www.foundida.com/images/youtube.webp" alt="youtube icon"></a>


                </div>
            



        </div>

        <div class="app_link_block_holder">
            <ul>
                <li><a href="https://play.google.com/store/apps/details?id=foundida.com.foundida"
                        target="_blank"><img src="https://www.foundida.com/images/google-play.webp"
                            alt="Google Play"></a></li>
                <li><a href="https://apps.apple.com/in/app/online-legal-india/id1573385779" target="_blank"><img
                            src="https://www.foundida.com/images/app-store.webp" alt="App Store"></a></li>
            </ul>
        </div>
    </div>
    <div class="col-md-2 text-center">

    </div>
    <div class="col-md-5">
        <div class="quick_links">
            <ul>
                <li><a id="careers" target="_blank" href="https://www.fastinfo.com/career">Careers</a></li>
                <li><a href="https://www.foundida.com/contact/">Contact Us</a></li>
                <li><a href="https://www.foundida.com/blogs/">Blogs</a></li>
                <!-- <li><a href="https://www.foundida.com/customer_complain/">Report an Issue</a></li> -->
                <li><a href="https://www.foundida.com/news/">News</a></li>
                <li><a href="https://www.foundida.com/about/">About Us</a></li>
                <li><a href="https://www.foundida.com/press-release/">Press Release</a></li>
                <li id="event-link"><a href="https://www.foundida.com/services/founders-discussion-table/">Event</a></li>
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

    <!-- Redesigned Shared Components -->
    @include('layouts.ceo_desk')
    @include('layouts.events')
    @include('layouts.why_us')

@endsection

@section('scripts')
<script type='text/javascript' src='https://www.foundida.com/js/main.js'></script>

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
                url: "https://www.foundida.com/payment/storeWhatsApp.php",
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
        b = "; expires=" + c.toGMTString() + "domain=foundida.com;path=/;SameSite=None;Secure";
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
            $.post("https://www.foundida.com/feed_errorlog.php", {
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

<script>
   var basic_register = document.getElementById("basic_register");
   var standard_register = document.getElementById("standard_register");
   var primium_register = document.getElementById("primium_register");

   basic_register.addEventListener("click", function() {
      document.getElementById("basic").checked = true;
      document.getElementById("amount").value = "1999";
   });

   document.getElementById("basic").addEventListener("click", function() {
      document.getElementById("amount").value = "1999"
   });
</script>

<script>
   $(document).on('click', '#contact-submit', function() {
      var r = $(this);

      if ($('.oli-validate-form').valid()) {
         var flag = true;
         var fp = $("#file");
         var lg = fp[0].files.length; // get length
         var items = fp[0].files;
         var fileSize = 0;
         if (lg > 0) {
            for (var i = 0; i < lg; i++) {
               fileSize = fileSize + items[i].size; // get file size
            }
         }

         if (fileSize > 5242880) {
            alert("Please choose file below 5 mb");
            flag = false;
         }

         if (flag) {
            r.attr('type', 'submit')
               .html('Redirecting to Payment Lobby...')
               .css('pointer-events', 'none');
            setTimeout(function() {
               $('.oli-validate-form').submit();
            }, 1200);
         }

      }
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
         state1: {
            required: true
         },
         address: {
            required: true
         },
         pin: {
            required: true,
            number: true,
            rangelength: [6, 6]
         },
         // captcha_code: {
         //    required: true,
         //    equalTo: "#txtCaptcha2"
         // }
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
         state1: {
            required: "Please select your state"
         },
         address: {
            required: "Please enter your Address"
         },
         pin: {
            required: "Please enter your Pin Number.",
            number: "Please enter a valid Pin Number.",
            rangelength: "Pin Number should be of 6 digit only"
         },
         // captcha_code: {
         //    required: "Please enter the captcha"
         // }
      }
   });

   $('#gift_voucher').on('hidden.bs.modal', function() {
      //remove the backdrop
      $('.modal-backdrop').remove();
   })

   window.wa_service_name = 'Trademark Registration Renewal';
   window.wa_service_code = 'TMRREN';

   // $(document).ready(function() {
   //    DrawCaptcha();
   // });

   function DrawCaptcha() {
      var a = Math.ceil(Math.random() * 9) + '';
      var b = Math.ceil(Math.random() * 9) + '';
      var c = Math.ceil(Math.random() * 9) + '';
      var d = Math.ceil(Math.random() * 9) + '';
      var code = a + ' ' + b + ' ' + ' ' + c + ' ' + d;
      var code2 = a + b + c + d;
      document.getElementById("txtCaptcha").value = code;
      document.getElementById("txtCaptcha2").value = code2;
   }
</script>
@endsection
