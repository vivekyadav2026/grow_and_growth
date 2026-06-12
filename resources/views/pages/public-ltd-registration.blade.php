@extends('layouts.app')

@section('meta')
<title>Public Limited Company Registration | Online Legal India</title>
<meta name="description" content="Register your Public Limited Company in India at lowest cost. Filing & drafting by experts. We are certified by StartupIndia DPIIT Govt.">
<meta name="keywords" content="Public Limited Company Registration">
<link rel="canonical" href="https://www.onlinelegalindia.com/services/company-registration/public-limited-company/"/>
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.onlinelegalindia.com/services/company-registration/public-limited-company/">
<meta property="og:image" content="https://www.onlinelegalindia.com/images/public-limited-company-banner.webp">
<meta property="og:title" content="Public Limited Company Registration | Online Legal India™">
<meta property="og:site_name" content="Online Legal India">
<meta property="og:description" content="Register your Public Limited Company in India at lowest cost">
<meta property="og:locale" content="en-IN">
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@type": "FAQPage",
  "mainEntity": [{
    "@@type": "Question",
    "name": "Which Act oversees the registration process for a Public Limited Company?",
    "acceptedAnswer": {
      "@@type": "Answer",
      "text": "The Companies Act, 2013 of the Indian Govt. regulates and oversees the registration procedure for a Public Limited company. In addition,the Registrar of Companies (ROC) regulates the process with the Ministry of Corporate Affairs (MCA)."
    }
  },{
    "@@type": "Question",
    "name": "Can a Public Limited Company in India raise its capital from the Stock Market?",
    "acceptedAnswer": {
      "@@type": "Answer",
      "text": "Definitely! A Public Limited company can enroll itself inseveral stock exchanges in India and raiseits capital from the stock market itself."
    }
  },{
    "@@type": "Question",
    "name": "To register a Public Limited company, is there any requirement regarding the minimum paid up capital?",
    "acceptedAnswer": {
      "@@type": "Answer",
      "text": "The keyconditionwhile registering a Public Limited company is the minimum paid-up share capital ofRs. 5 Lakhs. Though,it has been repealed by the Companies (Amendment) Act, 2015 of the Indian Govt."
    }
  },{
    "@@type": "Question",
    "name": "In India, what are the Liabilities of a Public Limited Company?",
    "acceptedAnswer": {
      "@@type": "Answer",
      "text": "A Public Limited Company’s key liability lies on keeping transparency of its business operation and the flow of its funds. The organization is required to regularly publish the Audit Reports, Statutory credentials and its Annual Compliances with ROC/MCA, RBI, SEBI, etc."
    }
  },{
    "@@type": "Question",
    "name": "Do I need to be present physically to register a Public Limited Company?",
    "acceptedAnswer": {
      "@@type": "Answer",
      "text": "Absolutely not! Online Legal India™ provides 360° guidance and professional assistance to complete the Public Company Registration process entirely on our digital platform. You just need a stable internet connection to furnish the documents as said by our CA panel."
    }
  }]
}
</script>
@endsection

@section('styles')
<style>
   .error {
      color: red
   }

   .oli-validate-form input.error,
   .oli-validate-form textarea.error {
      border: 1px solid red !important;
   }

   .card-block-2 ul {
      padding: 20px;
   }

   #allpacakage .register-benifits-text span:nth-child(2) {
      font-size: 12px;
      margin-bottom: 0 !important;
      margin-top: -14px;
      font-weight: 600;
   }

   .publi_reg_box .fees_box .register-benifits-text {
      min-height: 546px !important;
   }

   .req-docs-main-div {
      height: 150px;
      width: 21%;
      text-align: center;
      float: left;
      margin: 0% 2% 6% 2%;
   }

   .pub_doc .req-docs-main-div {
      height: 150px;
      width: 29%;
      text-align: center;
      float: left;
      margin: 0% 2% 6% 2%;
   }

   .pub_doc img {
      max-width: 100%;
      height: auto;
      margin-bottom: 10px;
   }

   .title-content-pub-lim {
      margin-top: 15px !important;
      text-align: center;
      font-size: 16px;
      line-height: 27px;
      padding-bottom: 20px !important;
   }

   .gst_rdiobtn input {
      visibility: visible;
   }

   #contact h4 {
      font-size: 16px;
   }

   #contact h3 {
      font-size: 19px;
   }

   @media screen and (max-width:768px) {
      .publi_reg_box .fees_box .register-benifits-text {
         min-height: auto !important;
      }

      .new_why_us_block_holder {
         float: left;
         width: 100%;
      }

      .new_why_us_block_holder .benifts-heading::after {
         top: unset !important;
         bottom: -10px !important;
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
<div>
   <div id="banner">
      <!-- <img class="img-fluid" alt="public limited" style="width: 100%" src="../../../images/public-limited-company-banner-new.webp" alt="Public Limited Company Registration"> -->
      <img class="img-fluid" alt="public limited" style="width: 100%" src="../../../images/new_register-public-ltd-company.webp" alt="Public Limited Company Registration">
   </div>

   <div class="container">
      <div class="row">
         <div class="col-sm-12 col-md-12 col-xs-12">

            <h1 class="title">Online Public Limited Company Registration in India | Transparent & Lowest Pricing</h1>
         </div>
      </div>
      <div class="title-content title-content-pub-lim">
         <p>Get relaxed! Keep planning for your business growth & let India’s recommended team of Experts support you register your Public Limited Company with extended assistance on Documentation, Preparation, Filing and subsequent Follow-ups with ROC & the MCA. </p>
      </div>
   </div>

</div>

<div class="container" style="margin-top: 20px">
   <div class="row">



      <div class="pull-left col-md-6 col-sm-12">

         <form id="contact" class="oli-validate-form" action="https://www.onlinelegalindia.com/payment/submit-public-company.php" method="post" enctype="multipart/form-data">

            <input type="hidden" id="gclid_field" name="gclid_field" value="">
            <input type="hidden" id="landing_uri" name="landing_uri" value="https://www.onlinelegalindia.com/services/company-registration/public-limited-company/">

            <!-- <p class="payroll">Payroll & Attendance Management System Free for 3 Months</p> -->
            <h3>Need Help with Public Limited Company Registration?</h3>
            <h4>Fill Up the below Mentioned Form</h4>
            <fieldset id="first_div">
               <div class="name">
                  <lable>Name <span style="color:red">*</span></lable>
                  <input placeholder="Your Name" name="name" type="text" id="name">
               </div>
               <div class="email">
                  <lable>Email <span style="color:red">*</span></lable>
                  <input placeholder="Your Email Address" name="email" type="email" id="email">
               </div>
               <div class="mobile">
                  <lable>Mobile <span style="color:red">*</span></lable>
                  <input placeholder="Your Phone Number (Without 0 or +91)" maxlength="10" name="mobile" id="mobile" type="tel">
               </div>
               <div class="state">
                  <lable>State <span style="color:red">*</span></lable>
                  <select name="state" id="state">

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
               <div class="form_check">
   <label class="custom_check">I have read & agreed to the company's Terms and Conditions, disclaimer and refund policy, and also ready to accept calls, SMS, emails, etc. 
      <input type="checkbox" data-degree="°" name="is_prompted_whatsapp" checked value="1">
      <span class="form_checkmark"></span>
    </label>
</div>

               <input type="hidden" id="oliid" name="oliid" value="">
               <input type="button" name="next" id="nextBtn" class="btn next action-button" value="Request for Call back" />
            </fieldset>
            <fieldset id="second_div" style="display:none">
               <label for="price_1" style="cursor:pointer">
                  <div id="specialPrice999" class="gst_rdiobtn editprice">
                     <input type="radio" id="price_1" name="form_price" value="PUBCCONS||999">&nbsp;
                     <div class="check"></div>
                     <p>Rs. 999</p>
                     <ul style="color: green">
                        <li>Get Guidance and Assistance From Professional Experts (Before Registration)</li>
                     </ul>
                  </div>
               </label>

               <div class="custom_dropdown">
                  <label data-value="" data-name="">---- Select Package ----</label>
                  <div id="hiddenInput">
                     <input type="radio" id="" name="" value="" hidden checked>
                  </div>
                  <ul>
                     <li id="price_2" value="PUBCBS||16899" name="form_price">
                        <div class="gst_rdiobtn editprice">
                           <p>Rs. 16899</p>
                           <ul style="color: green">
                              <li>Basic</li>
                           </ul>
                        </div>
                     </li>
                     <li id="price_3" value="PUBCSM||39899" name="form_price">
                        <div class="gst_rdiobtn editprice">
                           <p>Rs. 39899</p>
                           <ul style="color: green">
                              <li>Smart</li>
                           </ul>
                        </div>
                     </li>
                     <li id="price_4" value="PUBCMG||49899" name="form_price">
                        <div class="gst_rdiobtn editprice">
                           <p>Rs. 49899</p>
                           <ul style="color: green">
                              <li>Mega</li>
                           </ul>
                        </div>
                     </li>
                  </ul>
               </div>

               <img id="captcha_holder" src="https://www.onlinelegalindia.com/payment/captcha.php" alt="Captcha">
               <img src="https://www.onlinelegalindia.com/images/capta.webp" id="btnrefresh" alt="Captcha">
               <input type="text" name="captcha_code" id="captcha_code" class="pull-right" maxlength="4"
                  onkeyup="this.value = this.value.replace(/[^\d]+/g, '');" placeholder="Enter the captcha here..">

               <input type="hidden" id="is_submitted" value="0">

               <button type="button" id="contact-submit" data-submit="...Sending" style="margin-top: 25px !important;">Submit</button>
            </fieldset>


         </form>
         <!-- <p class="desk_view" style="margin: 47px 0 30px;font-size: 18px;text-align: center;">*Once you are Ready to Setup your Dream Company, you’ll receive Rs 999 adjustment from your selected package from us</p> -->
      </div>


      <div class="col-md-6 col-sm-12 pull-right">

         <section class="act_section desktop_act">
            <!-- <div class="avail_consult mob_view">
               <h3>
                  <span>Before Registering Your Company Directly under Govt. of India</span>
                  <a href="#contact"><span>Avail Consultations from our Experienced CAs @Rs 999! *</span></a>
                  <a href="#"><span>We will help you avail a Business Loan</span></a>
               </h3>
            </div> -->
            <!-- <p class="mob_view" style="margin: 29px 0 30px;font-size: 18px;text-align: center;">*Once you are Ready to Setup your Dream Company, you’ll receive Rs 999 adjustment from your selected package from us</p> -->
            <div class="act-box">
               <h3>Requirements for Public Limited Company Registration </h3>
               <div class="act-content">
                  <ul>
                     <li>At least 7 Members on-board</li>
                     <li>Minimum 3 Directors, one of them must be a resident of India</li>
                     <li>The Directors and the Shareholder can be the same individual</li>
                     <li>Minimum Authorized Capital Rs. 5,00,000</li>
                     <li>DIN of all the directors</li>
                     <li>DSC of all the Directors</li>
                     <li>Address of the Company’s registered office</li>
                  </ul>
               </div>
            </div>
            <style type="text/css">
	.services_box_bg img{
		display: block;
		margin:auto;
	}
.services_box_bg .right-side-img-startupind {
    padding-top: 0px;
    padding-bottom: 20px;
    height: 90px;
    object-fit: contain;
}
.services_box_bg .right-side-img-title {
    text-align: center;
    font-weight: bold;
    display: block;
    font-size: 13px;
    text-transform: uppercase;
}
.services_box_bg .right-side-img-desc{
	text-align: center;
	display: block;
	font-size: 12px;
}
.right-side-icons-div-2{
	padding: 10px 0;
}
.right-side-icons-div-2{
	height: 250px;
	margin-top: 10px;
	margin-bottom: 10px;
}
.services_box{
    width: 70%;
    margin: 0 auto;
}
    @media screen and (max-width: 768px){
        .right-side-icons-div-2{
            height: auto;
        }
        .services_box{
        width: 100%;
        margin: 0 auto;
    }
    }
</style>

<div class="services_box">
		<div class="row">
			<div class="services_box_bg">
				<div class="col-md-6">
					<div class="right-side-icons-div-2">
                     <img class="right-side-img-startupind" src="https://www.onlinelegalindia.com/images/right-side-google-2.webp" alt="StartUp India">
                     <p class="right-side-img-title">Startup India</p>
                     <p class="right-side-img-desc">Online Legal India is now recognized by Department for Promotion of Industry and Internal Trade under Startup India.</p>
                  	</div>
				</div>
				<div class="col-md-6">
                  <div class="right-side-icons-div-2">
                     <img class="right-side-img-startupind" src="https://www.onlinelegalindia.com/images/right-side-iso.webp" alt="ISO">
                     <p class="right-side-img-title">ISO 9001:2015 CERTIFIED</p>
                     <p class="right-side-img-desc">Online Legal India is a ISO certified body, assuring the quality professional services to aspiring startups.</p>
                  </div>
              </div>
              <!-- <div class="col-md-4">
                  <div class="right-side-icons-div-2">
                     <img class="right-side-img-startupind" src="https://www.onlinelegalindia.com/images/flipkart.webp" alt="Flipkart Seller Hub">
                     <p class="right-side-img-title">Authorized Partner </p>
                     <p class="right-side-img-desc">Online Legal India is an authorized partner of Flipkart. We helped thousands of Flipkart sellers.</p>
                  </div>
              </div> -->
			</div>
	</div>
</div>            <!-- <div class="avail_consult desk_view">
               <h3>
                  <span>Before Registering Your Company Directly under Govt. of India</span>
                  <a href="#contact"><span>Avail Consultations from our Experienced CAs @Rs 999! *</span></a>
                  <a href="#"><span>We will help you avail a Business Loan</span></a>
               </h3>
            </div> -->
         </section>

      </div>

   </div>
</div>

<div class="container pub_doc">
   <div class="row">
      <div class="col-md-12 col-sm-12">
         <div class="block_heading block_heading_2">
            <h2 class="benifts-heading" style="color: black">Documents Required</h2>
         </div>
      </div>
      <div class="col-md-12 col-sm-12">
         <div class="req-docs-main-div">
            <img src="image/adhar_card.webp" alt="Aadhar"><br>
            <span>Identity Proof (Aadhaar / Voter ID card, Driving License) of all the designated Directors and Shareholders</span>
         </div>
         <div class="req-docs-main-div">
            <img src="image/address_proof.webp" alt="Address Proof"><br>
            <span>Address-proof of the Directors and Shareholders</span>
         </div>
         <div class="req-docs-main-div">
            <img src="image/Pan_Card.webp" alt="Pan Card"><br>
            <span>Directors’ and Shareholders’ PAN Card details</span>
         </div>

         <div class="req-docs-main-div">
            <img src="image/Electricity_Bill.webp" alt="Residential Proof"><br>
            <span>Residential proof of the registeredBusiness Address (Telephone / Gas / Water / Electricity bill which should not be older than 2 months) </span>
         </div>
         <div class="req-docs-main-div">
            <img src="image/Landlord_NOC.webp" alt="NOC"><br>
            <span>An NOC or No Objection Certificate from the of the business place’s owner</span>
         </div>
         <div class="req-docs-main-div">
            <img src="image/rent_agreement.webp" alt="Association"><br>
            <span>Company’s Memorandum of Association & Article of Association</span>
         </div>
      </div>
   </div>
</div>
<div id="allpacakage" class="background_image copyright_fees newfees publi_reg_box">
   <div class="container">
      <div class="row">
         <div class="col-md-12 col-sm-12">
            <div class="col-md-12 col-sm-12">
               <div class="block_heading">
                  <h2 class="benifts-heading">Select Packages</h2>
               </div>
            </div>
         </div>
         <div class="benifits-ul">
            <div class="col-md-3 fees_box">
               <div class="register-benifits-text">
                  <h4>
                     <span>Consultation Fee</span>
                     <span>Guidance From Experts</span>
                     <img src="../../../images/svg/rupee_svg_white.svg" alt="Rupee" style="position: relative;left: 10px;"> 999
                  </h4>
                  <ul class="copy_lists">
                     <li>Complete guide for registration (Process, Required Documents, Benefits and Tax etc.)</li>
                  </ul>


                  <a href="#contact" onclick="selectPrice('consult');" style="cursor:pointer;" id="consult_price">Request Callback</a>
               </div>
            </div>
            <div class="col-md-3 fees_box">
               <div class="register-benifits-text">
                  <h4>
                     <span>BASIC</span>

                     <img src="../../../images/svg/rupee_svg_white.svg" alt="Rupee" style="position: relative;left: 10px;"> 16899
                  </h4>
                  <p>Registration of Public Limited company, CIN, MCA processing, Spice +Part A, Spice +Part B, Allotment of 3 DIN, Current account opening in the nearest branch, MOA & AOA Drafting. </p>
                  <a href="#contact" onclick="selectPrice('startup');" style="cursor:pointer;" id="startup_price">Request Callback</a>
               </div>
            </div>
            <div class="col-md-3 fees_box">
               <div class="register-benifits-text">
                  <h4>
                     <span>SMART</span>
                     <img src="../../../images/svg/rupee_svg_white.svg" alt="Rupee" style="position: relative;left: 10px;"> 39899
                  </h4>
                  <p>
                     Register your Public Limited Company at Ministry of Corporate Affairs,

                     Drafting & Filing by Experieinced Professionals,

                     Expert advice,

                     MCA processing and CIN,

                     Company MOA, AOA,

                     Allotment of 3 DINs,

                     The 1st Board Resolution documentation,

                     Consent Letter drafting and ADT-1 appointment of the Auditor


                  </p>

                  <a href="#contact" onclick="selectPrice('basic');" style="cursor:pointer;" id="basic_price">Request Callback</a>
               </div>
            </div>
            <div class="col-md-3 fees_box">
               <div class="register-benifits-text">
                  <h4>
                     <span>MEGA</span>
                     <img src="../../../images/svg/rupee_svg_white.svg" alt="Rupee" style="position: relative;left: 10px;"> 49899
                  </h4>
                  <p>
                     Registration of Public Limited company, CIN, MCA processing, Spice +Part A, Spice +Part B, Allotment of 3 DIN, Current account opening in the nearest branch, MOA & AOA Drafting, Trademark filing, Appointment of Auditor, Financial Statements preparation, MCA Annual Return filing.
                  </p>
                  <a href="#contact" onclick="selectPrice('smart');" style="cursor:pointer;" id="smart_price">Request Callback</a>
               </div>
            </div>

         </div>
         <p style="text-align: center;color: #fff;display: inline-block;width: 100%;position: relative;margin-bottom: 25px;">* Excluding DSC and Govt. Fees</p>
      </div>
   </div>
</div>

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

<section class="block_padding block_padding_two">
   <div class="container">
      <div class="row">
         <div class="col-md-12 col-sm-12">
            <div class="block_heading">
               <h2 class="benifts-heading" style="color: black">Benefits of Registering a Public Limited Company</h2>
            </div>
         </div>
         <div class="container">

            <div class="row mbr-justify-content-center">

               <div class="col-lg-6 mbr-col-md-10 public_company">
                  <div class="wrap">
                     <div class="ico-wrap">
                        <span class="mbr-iconfont"> <img src="https://www.onlinelegalindia.com/images/shareholder_pub_reg.svg" alt="Share Holder"> </span>
                     </div>
                     <div class="text-wrap vcenter">
                        <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Shareholders’ Limited Liability </h2>
                        <p class="mbr-fonts-style text1 mbr-text display-6">In a Public Limited Company, the accountability of the Shareholders and Directors is limited according to the amount of the shares they own in the organization. For instance, if the public limited company face any financial emergencies,the personal assets of the shareholders will not be affected as per the regulations. </p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 mbr-col-md-10 public_company">
                  <div class="wrap">
                     <div class="ico-wrap">
                        <span class="mbr-iconfont"> <img src="https://www.onlinelegalindia.com/images/stock_market_pub_reg.svg" alt="Stock Market"> </span>
                     </div>
                     <div class="text-wrap vcenter">
                        <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Listing in the Stock Exchange
                        </h2>
                        <p class="mbr-fonts-style text1 mbr-text display-6">Unlike a Private Limited organization, Public Limited companies can list themselves to the IPO (Indian Public Offerings) and the popular Stock Exchanges. This leads to several business-related benefits and opportunities.</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 mbr-col-md-10 public_company">
                  <div class="wrap">
                     <div class="ico-wrap">
                        <span class="mbr-iconfont"> <img src="https://www.onlinelegalindia.com/images/legal_pub_reg.svg" alt="Legal"> </span>
                     </div>
                     <div class="text-wrap vcenter">
                        <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Distinct Legal Entity</h2>
                        <p class="mbr-fonts-style text1 mbr-text display-6">In a Public Limited Company, the existence of the entity does not depend on any individuals’ presence in the organization. For example, any Shareholder or Director may leave the organization without affecting the actuality of the particular Public Limited Company. </p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 mbr-col-md-10 public_company">
                  <div class="wrap">
                     <div class="ico-wrap">
                        <span class="mbr-iconfont"> <img src="https://www.onlinelegalindia.com/images/fund_pub_reg.svg" alt="Fund"> </span>
                     </div>
                     <div class="text-wrap vcenter">
                        <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Countless sources for Fund-Raising</h2>
                        <p class="mbr-fonts-style text1 mbr-text display-6">A Public Limited Company can raise its resources by crowd-funding or from the common people’s involvementfollowing the legal aspects. It helps an entity surviving in the marketplace and going for new ventures with ease.</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 mbr-col-md-10 public_company">
                  <div class="wrap">
                     <div class="ico-wrap">
                        <span class="mbr-iconfont"> <img src="https://www.onlinelegalindia.com/images/transfer_pub_reg.svg" alt="Transfer"> </span>
                     </div>
                     <div class="text-wrap vcenter">
                        <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Simple Transferability of Shares</h2>
                        <p class="mbr-fonts-style text1 mbr-text display-6">Following the regulations of the Companies Act, 2013, the shares of a Public Limited company can be transferred without any hassle. Added on that, being listed in the Stock Exchange andtransferability feature, people are always willing to invest leading to financial aids for the same.</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 mbr-col-md-10 public_company">
                  <div class="wrap">
                     <div class="ico-wrap">
                        <span class="mbr-iconfont"> <img src="https://www.onlinelegalindia.com/images/transparency_pub_reg.svg" alt="Transparency"> </span>
                     </div>
                     <div class="text-wrap vcenter">
                        <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Cautious on Business Transparency</h2>
                        <p class="mbr-fonts-style text1 mbr-text display-6">As a Public Limited company involves public interaction and involvement in all the stages, the organization always looks for clarity in the business operation by publishing the Audit Credentials, Statutory Reports to its people.</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 mbr-col-md-10 public_company">
                  <div class="wrap">
                     <div class="ico-wrap">
                        <span class="mbr-iconfont"> <img src="https://www.onlinelegalindia.com/images/marketing_pub_reg.svg" alt="Marketing"> </span>
                     </div>
                     <div class="text-wrap vcenter">
                        <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Upholds the Brand Position in Marketplace</h2>
                        <p class="mbr-fonts-style text1 mbr-text display-6">It is always beneficial for an organization while being registered as a Public Limited company. Being listed in the Stock Exchange and publishing the reports to its people enhances its Brand Image and reputation in the market.</p>
                     </div>
                  </div>
               </div>

            </div>

         </div>
      </div>
   </div>
</section>

<section class="block_padding">
   <div class="container">
      <div class="row">
         <div class="col-md-12 col-sm-12">
            <div class="block_heading block_heading_comparison">
               <h2 class="benifts-heading" style="color: black">Comparison</h2>
            </div>
         </div>
         <div class="col-sm-12 col-md-12 table-overflow" style="margin-top: 30px">
            <table width="100%">
               <tbody>
                  <tr>
                     <td style="background-color: #159e50; color: #ffffff;"><strong>Topics</strong></td>
                     <td style="background-color: #159e50; color: #ffffff;"><strong>Public Limited Company </strong></td>
                     <td style="background-color: #159e50; color: #ffffff;"><strong>Private Limited Company</strong></td>
                  </tr>
                  <tr>
                     <td width="134"><strong>Members / Shareholders</strong></td>
                     <td width="174">Minimum: 7
                        Maximum: No Limit
                     </td>
                     <td width="174">Minimum: 2
                        Maximum: 200
                     </td>
                  </tr>
                  <tr>
                     <td width="134"><strong>Directors</strong></td>
                     <td width="156">Minimum: 3</td>
                     <td width="174">Minimum: 2</td>

                  </tr>
                  <tr>
                     <td width="134"><strong>Public Invitations</strong></td>
                     <td width="156">Yes</td>
                     <td width="174">No</td>
                  </tr>
                  <tr>
                     <td width="134"><strong>Issuance Of Prospectus</strong></td>
                     <td width="156">Required</td>
                     <td width="174">Not Required</td>
                  </tr>
                  <tr>
                     <td width="134"><strong>Name Variances</strong></td>
                     <td width="156">Must have ‘Limited’ at the end of its name</td>
                     <td width="174">Must have PVT. LTD. at the end of its name</td>

                  </tr>
                  <tr>
                     <td width="134"><strong>Mandatory Statutory Meeting</strong></td>
                     <td width="156">Yes</td>
                     <td width="174">No</td>
                  </tr>
                  <tr>
                     <td width="134"><strong>Managerial Remunerations</strong></td>
                     <td width="156">There are no as such restrictions</td>
                     <td width="174">Cannot exceed the limit of 11% of its net profit</td>
                  </tr>
                  <tr>
                     <td width="134"><strong>Stock Exchange</strong></td>
                     <td width="156">Can be enlisted in the stock exchange & conduct the Stock Trade publicly as per the Director’s preferences </td>
                     <td width="174">Not listed on stock exchange neither carry out stock trade publicly</td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</section>




<section id="howWework" class="block_padding block_padding_work">
   <div class="container">
      <div class="row">
         <div class="block_heading">
            <h2 style="color: black" class="benifts-heading">How We Work?</h2>

         </div>
         <div class="col-sm-12 col-md-12">
            <div class="row">
               <div class="col-md-1 col-md-12">
               </div>
               <div class="col-md-2 col-md-12">
                  <div class="process_section">
                     <i>1</i>

                     <p>Fill the form & make the Payment</p>
                     <p>⟶</p>
                  </div>
               </div>
               <div class="col-md-2 col-md-12">
                  <div class="process_section">
                     <i>2</i>

                     <p>Get a Call from our Experts & share the required Documents</p>
                     <p>⟶</p>
                  </div>
               </div>
               <div class="col-md-2 col-md-12">
                  <div class="process_section">
                     <i>3</i>

                     <p>We will start Drafting the Requirements to the ROC & MCA</p>
                     <p>⟶</p>
                  </div>
               </div>
               <div class="col-md-2 col-md-12">
                  <div class="process_section">
                     <i>4</i>

                     <p>Following the DIN & DSC registration,will proceed for Business Name Approval</p>
                     <p>⟶</p>
                  </div>
               </div>
               <div class="col-md-2 col-md-12">
                  <div class="process_section">
                     <i>5</i>

                     <p>Congratulations! Your Public Limited Company is registered successfully</p>
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

<div class="new_why_us_block_holder">
   <!------------------here is the section of why us------------------>
<style>
   #popular_services .services_list h5 {
      font-size: 18px;
   }

   @media screen and (max-width: 768px) {
      #popular_services .services_list h5 {
         font-size: 12px;
         line-height: 13px;
      }
   }
</style>
<section id="whyUs">
   <div class="container">
      <div class="row">
         <div class="col-sm-12 col-md-12">
            <h2 style="color: black" class="benifts-heading">Why Us?</h2>
         </div>
         <dv class="consumer_box">
            <div class="col-md-12 col-sm-12">
               <div class="tab_why_us">
                  <div class="tab_why_us_div">
                     <div class="hexagon_box">
                        <div class="hexagon">
                           <i>
                              <img src="https://www.onlinelegalindia.com/services/include/image/happy_customers.svg" alt="Happy Customers" />
                           </i>
                           <p>5 Lakh+ Happy Clients Across India</p>
                        </div>
                     </div>
                  </div>
                  <div class="tab_why_us_div tab_why_us_div_odd">
                     <div class="hexagon_box">
                        <div class="hexagon iso_sign">
                           <i>
                              <img src="https://www.onlinelegalindia.com/services/include/image/iso-mark.webp" alt="ISO" />
                           </i>
                           <p>ISO Certified</p>
                        </div>
                     </div>
                  </div>
                  <div class="tab_why_us_div">
                     <div class="hexagon_box">
                        <div class="hexagon">
                           <i>
                              <img src="https://www.onlinelegalindia.com/services/include/image/data_security.svg" alt="Data Security" />
                           </i>
                           <p>Data Security & Trust</p>
                        </div>
                     </div>
                  </div>
                  <div class="tab_why_us_div tab_why_us_div_odd">
                     <div class="hexagon_box">
                        <div class="hexagon">
                           <i>
                              <img src="https://www.onlinelegalindia.com/services/include/image/experts.svg" alt="Experts" />
                           </i>
                           <p>Trained & Professional Experts</p>
                        </div>
                     </div>
                  </div>
                  <div class="tab_why_us_div">
                     <div class="hexagon_box">
                        <div class="hexagon">
                           <i>
                              <img src="https://www.onlinelegalindia.com/services/include/image/on-time.svg" alt="On Time" />
                           </i>
                           <p>On Time Service </p>
                        </div>
                     </div>
                  </div>
                  <div class="tab_why_us_div tab_why_us_div_odd">
                     <div class="hexagon_box">
                        <div class="hexagon">
                           <i>
                              <img src="https://www.onlinelegalindia.com/services/include/image/quick.svg" alt="Quick" />
                           </i>
                           <p>Super Fast Service</p>
                        </div>
                     </div>
                  </div>
                  <div class="tab_why_us_div">
                     <div class="hexagon_box affordable_sign_team">
                        <div class="hexagon">
                           <i>
                              <img src="https://www.onlinelegalindia.com/services/include/image/users_oli_Jan_22.svg" alt="User OLI" />
                           </i>
                           <p>Quick Response Team</p>
                        </div>
                     </div>
                  </div>
                  <div class="tab_why_us_div tab_why_us_div_odd">
                     <div class="hexagon_box">
                        <div class="hexagon affordable_sign">
                           <i>
                              <img src="https://www.onlinelegalindia.com/services/include/image/affordable.svg" alt="Affordable" />
                           </i>
                           <p>Affordable</p>
                           <!-- <p>Affordable Than Other Professionals</p> -->
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </dv>
      </div>
   </div>
</section>
<!------------------here is the section of why us------------------></div>
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
               <img src="https://www.onlinelegalindia.com/images/associated-tata.webp" class="tatawebp" alt="TATA">
            </div>

            <div class="awaboi_block">
               <img src="https://www.onlinelegalindia.com/images/associated-paytm.webp" class="" alt="Paytm">
            </div>

            <div class="awaboi_block awaboi_block_icici">
               <img src="https://www.onlinelegalindia.com/images/associated-icici.webp" class="icici_bank" alt=" ICICI">
            </div>

            <!-- <div class="awaboi_block">
               <img src="https://www.onlinelegalindia.com/images/associated-flipkart.webp" class="flipkart" alt="Flipkart">
            </div> -->

           <!--  <div class="awaboi_block awaboi_block_last">
               <img src="https://www.onlinelegalindia.com/images/associated-DBS-bank.webp" class="" alt="DBS Bank">
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
                     <img src="https://www.onlinelegalindia.com/images/associated-zee.webp" class="" alt="Zee News">
                  </div>

                  <div class="awaboi_block awaboi_block1">
                     <img src="https://www.onlinelegalindia.com/images/Ted-x-one.webp" class="" alt="TEDx">
                  </div>

                  <div class="awaboi_block awaboi_block1">
                     <img src="https://www.onlinelegalindia.com/images/associated-asia-one.webp" class="" alt="Asia one">
                  </div>


               </div>
            </div>
            <div class="col-md-5">
               <div class="block_heading awaboi_heading awaboi_heading4">
                  <h2 style="color: black" class="benifts-heading">Certified / Recognized by</h2>
               </div>
               <div class="awab_one_inner3">

                  <div class="awaboi_block3 ">
                     <img src="https://www.onlinelegalindia.com/images/oli-fic-iso-certified.webp" class="oli_fic_pic oli_fic_pic999" alt="ISO Certified">
                  </div>

                  <!-- <div class="awaboi_block3 ">
                     <img src="https://www.onlinelegalindia.com/images/oli-fic-govt.-certified.webp" class="oli_fic_pic" alt="Govt. Certified">
                  </div> -->

               </div>

            </div>
         </div>
      </div>
   </div>
</section>



<section class="block_padding">
   <div class="container">
      <div class="row">
         <div class="col-sm-12 col-md-12">
            <div class="block_heading">
               <h2 style="color: black" class="benifts-heading">FAQ</h2>
            </div>
         </div>
         <div style="margin-bottom: 25px;" class="col-sm-12 col-md-12 why-us-img-div">
            <div data-port-id="child_ans_div_1" class="accordaion-main-div">
               <h4 class="accordion-cus-head">Which Act oversees the registration process for a Public Limited Company?</h4>
            </div>
            <div id="child_ans_div_1" class="child-ans-div-1">
               <p class="child-ans-text">The Companies Act, 2013 of the Indian Govt. regulates and oversees the registration procedure for a Public Limited company. In addition,the Registrar of Companies (ROC) regulates the process with the Ministry of Corporate Affairs (MCA). </p>
            </div>
            <div data-port-id="child_ans_div_2" class="accordaion-main-div">
               <h4 class="accordion-cus-head">Can a Public Limited Company in India raise its capital from the Stock Market?</h4>
            </div>
            <div id="child_ans_div_2" style="display: none;" class="child-ans-div-1">
               <p class="child-ans-text">Definitely! A Public Limited company can enroll itself inseveral stock exchanges in India and raiseits capital from the stock market itself.</p>
            </div>
            <div data-port-id="child_ans_div_3" class="accordaion-main-div">
               <h4 class="accordion-cus-head">To register a Public Limited company, is there any requirement regarding the minimum paid up capital?</h4>
            </div>
            <div id="child_ans_div_3" style="display: none;" class="child-ans-div-1">
               <p class="child-ans-text">The keyconditionwhile registering a Public Limited company is the minimum paid-up share capital ofRs. 5 Lakhs. Though,it has been repealed by the Companies (Amendment) Act, 2015 of the Indian Govt.</p>
            </div>
            <div data-port-id="child_ans_div_4" class="accordaion-main-div">
               <h4 class="accordion-cus-head">In India, what are the Liabilities of a Public Limited Company?</h4>
            </div>
            <div id="child_ans_div_4" style="display: none;" class="child-ans-div-1">
               <p class="child-ans-text">A Public Limited Company’s key liability lies on keeping transparency of its business operation and the flow of its funds. The organization is required to regularly publish the Audit Reports, Statutory credentials and its Annual Compliances with ROC/MCA, RBI, SEBI, etc. </p>
            </div>


            <div data-port-id="child_ans_div_15" class="accordaion-main-div">
               <h4 class="accordion-cus-head">Do I need to be present physically to register a Public Limited Company?</h4>
            </div>
            <div id="child_ans_div_15" style="display: none;" class="child-ans-div-1">
               <p class="child-ans-text">Absolutely not! Online Legal India provides 360° guidance and professional assistance to complete the Public Company Registration process entirely on our digital platform. You just need a stable internet connection to furnish the documents as said by our Expert panel.</p>
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

<script>
   function selectPrice(val) {
      $("#price_1").prop("checked", false);
      $("#price_2").prop("checked", false);
      $("#price_3").prop("checked", false);
      $("#price_4").prop("checked", false);
      if (val == 'startup') {
         $("#price_1").prop("checked", true);
      } else if (val == 'basic') {
         $("#price_2").prop("checked", true);
      } else if (val == 'smart') {
         $("#price_3").prop("checked", true);
      } else if (val == 'mega') {
         $("#price_4").prop("checked", true);
      }
   }

   window.wa_service_name = 'Public Limited Company Registration';
   window.wa_service_code = 'PUBC';

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
         address: {
            required: true
         },
         pin: {
            required: true,
            number: true,
            rangelength: [6, 6]
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
         address: {
            required: "Please enter your Address"
         },
         pin: {
            required: "Please enter your Pin nNumber.",
            number: "Please enter a valid Pin Number.",
            rangelength: "Pin Number should be of 6 digit only"
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
            state = $('#state option:selected').val()
         gclid_field = $('#gclid_field').val();
         let landing_uri = $('#landing_uri').val();
         $.ajax({
            url: "../../../payment/submit-public-company.php",
            method: 'post',
            data: {
               name: name,
               email: email,
               mobile: mobile,
               state: state,
               mode: 1,
               gclid_field: gclid_field,
               landing_uri: landing_uri
            },
            dataType: "json",
            success: function(data) {

               if (data.success) {
                  $('#oliid').val(data.oliid);
                  $('#second_div').show();
                  $('#first_div').hide();
               } else {
                  alert(data.msg);
                  $('#nextBtn').prop('disabled', false);
               }
            }
         });
      }
   });

   $(document).on('click', '#btnrefresh', function() {
      var url = window.location.origin + '/payment/captcha.php?' + Math.random();
      document.getElementById('captcha_holder').src = url;
      document.getElementById('captcha_code').value = '';
      return false;
   });

   function removeSpaces(string) {
      return string.split(' ').join('');
   }

   function validateUrl(value) {
      return /^(?:(?:(?:https?|ftp):)?\/\/)(?:\S+(?::\S*)?@)?(?:(?!(?:10|127)(?:\.\d{1,3}){3})(?!(?:169\.254|192\.168)(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)(?:\.(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)*(?:\.(?:[a-z\u00a1-\uffff]{2,})))(?::\d{2,5})?(?:[/?#]\S*)?$/i.test(value);
   }

   $('ul.nav li.dropdown').hover(function() {
      $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(300);
   }, function() {
      $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(300);
   });

   $(document).on('click', '#contact-submit', function() {
      var r = $(this);
      if ($('.oli-validate-form').valid()) {

         // submitOli(r);
         var captcha_code = $('#captcha_code').val();
         $.ajax({
            url: "../../../payment/verify_captcha.php",
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
   })

   function submitOli(btn) {
      btn.attr('type', 'submit')
         .html('Redirecting to Payment Lobby...')
         .css('pointer-events', 'none');

      setTimeout(function() {
         $('.oli-validate-form').submit();
      }, 1200);
   }
</script>
@endsection
