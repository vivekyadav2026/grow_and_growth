@extends('layouts.app')

@section('meta')
<title>Change Your Company’s Name the Easy Way | Foundida</title>
<meta name="description" content="Changing a company's name requires the fulfilment of numerous compliances. We can help you complete the company name changing procedure without any hassles.">
<link rel="canonical" href="https://www.foundida.com/services/company-name-change/"/>
@endsection

@section('styles')
<style>
   #contact h4 {
      font-size: 16px;
   }
</style>
   <!--      <link rel="stylesheet" type="text/css" href="https://www.foundida.com/css/bootstrap.min.css">-->
   <!-- <link rel="stylesheet" type="text/css" href="https://www.foundida.com/css/cut.css"> -->
   <!-- <link rel="stylesheet" type="text/css" href="https://www.foundida.com/css/alternative-contact-popup.css"> -->
   <!-- <link rel="stylesheet" href="https://www.foundida.com/css/brands.min.css"> -->
   <!-- <link rel="stylesheet" href="https://www.foundida.com/css/solid.min.css"> -->
@endsection

@section('content')
<style>
   #allpacakage .fees_box .register-benifits-text {
      min-height: 806px;
   }

   @media screen and (max-width: 768px) {
      #allpacakage .fees_box .register-benifits-text {
         min-height: auto;
      }

   }

   .moa_form {
      list-style: none;
      padding-left: 42px;
      font-size: 12px;
   }

   .panel-heading {
      background: rgb(76, 175, 80) !important;
   }

   .panel-body {
      background: #eee;
      padding: 15px;
   }

   .panel-title {
      list-style: none !important;
      text-decoration: none !important;
   }

   .panel-group .panel-heading {
      border-bottom: 0;
   }

   .panel-title {
      margin-top: 0;
      margin-bottom: 0;
      font-size: 16px;
      color: inherit;
   }

   .custom_accordion .panel .panel-heading {
      position: relative;
   }

   .custom_accordion .panel .panel-heading .collapsed .panel-title:after {
      content: "+";
      position: absolute;
      top: 3px;
      right: 20px;
      font-size: 25px;
   }

   .custom_accordion .panel .panel-heading a .panel-title:after {
      content: "-";
      position: absolute;
      top: 3px;
      right: 20px;
      font-size: 25px;
   }

   .privet_limited_anchr a {
      color: #ffffff !important;
      list-style: none;
      text-decoration: none;
   }

   .privet_limited_anchr h6 {
      color: #ffffff !important;
   }

   .req-docs-main-div img {
      padding-bottom: 10px;
      width: 60px;
   }

   .req-docs-main-div-2 {
      height: 150px;
      width: 15% !important;
      text-align: center;
      float: left;
      margin: 0% 2% 4% 2%;
   }

   .pf_list_imp li {
      background: url(https://www.foundida.com/images/svg/checkmark.svg) no-repeat left 4px;
      padding-left: 30px !important;
      margin-bottom: 10px;
      list-style: none;
   }

   .title-content {
      margin-top: 10px;
      text-align: center;
      font-size: 15px;
      line-height: 27px;
   }

   @media (min-width: 320px) and (max-width: 776px) {
      .title {
         font-family: "Poppins", sans-serif;
         text-align: center;
         font-size: 19px;
         color: #2e363a;
         font-weight: 600;
         line-height: 24px;
      }

      .privet_limited_anchr h6 {
         color: #ffffff !important;
         width: 90%;
         line-height: 20px;
         font-size: 14px;
      }

      .block_heading h2 {
         width: 100%;
         float: left;
         text-align: center;
         font-size: 22px;
         color: #000;
         font-weight: 600;
         margin-bottom: 0px;
         position: relative;
         line-height: 27px;
      }

      .public_company .wrap {
         height: auto;
      }

      .custom_accordion .panel .panel-heading .collapsed .panel-title:after {
         content: "+";
         position: absolute;
         top: 18px !important;
         right: 20px;
         font-size: 25px;
      }

      .mbr-justify-content-center {
         margin-top: 40px;
      }

      .moa_form {
         list-style: none;
         padding-left: 42px;
         margin-bottom: 8px;
      }

      .req-docs-main-div img {
         padding-bottom: 0px;
         margin-top: 10px;
      }

      .req-docs-main-div span {
         font-size: 12px;
      }

      .req-docs-main-div-2 {
         height: 150px;
         width: 45% !important;
         text-align: center;
         float: left;
         margin: 0% 2% 10% 3%;
      }

      .block_heading {
         width: 100%;
         display: inline-table;
         margin-bottom: 25px;
      }

      #contact input[name="submit"],
      #contact input[type="submit"],
      #contact input[type="button"],
      button[type="submit"],
      #contact button[type="button"],
      input[name="next"] {
         cursor: pointer !important;
         width: 100% !important;
         border: none !important;
         background: #4CAF50 !important;
         color: #FFF !important;
         margin: 0 0 5px !important;
         padding: 12px 10px !important;
         font-size: 18px !important;
         border-radius: 6px !important;
         line-height: inherit !important;
      }

      .process_section {
         background: #24730a;
         width: 100%;
         border-radius: 14px;
         padding: 20px;
         text-align: center;
         color: #fff;
         min-height: 190px;
         margin: 0 auto 60px;
         font-size: 15px;
         position: relative;
      }

      .block_heading_cmpny_chng_name {
         width: 100%;
         display: inline-table;
         margin-bottom: 0px !important;
      }

      .block_padding_two_change {
         padding: 0px 0 !important;
         width: 100%;
         float: left;
      }

      .block_heading_why_us {
         width: 100%;
         display: inline-table;
         margin-bottom: 10px;
      }

      .block_heading_faq {
         width: 100%;
         display: inline-table;
         margin-bottom: 20px !important;
      }

      .block_padding_faq {
         padding: 0px !important;
      }
   }
</style>

<script async src="https://www.googletagmanager.com/gtag/js?id=AW-767312690"></script>
<script>
   window.dataLayer = window.dataLayer || [];

   function gtag() {
      dataLayer.push(arguments);
   }
   gtag('js', new Date());

   gtag('config', 'AW-767312690');
</script>


<script>
   setTimeout(function() {
      ! function(q, e, v, n, t, s) {
         if (q.qp) return;
         n = q.qp = function() {
            n.qp ? n.qp.apply(n, arguments) : n.queue.push(arguments);
         };
         n.queue = [];
         t = document.createElement(e);
         t.async = !0;
         t.src = v;
         s = document.getElementsByTagName(e)[0];
         s.parentNode.insertBefore(t, s);
      }(window, 'script', 'https://a.quora.com/qevents.js');
      qp('init', '8781d592525f486c899b36c3ebcbdba7');
      qp('track', 'ViewContent');
   }, 3300);
</script>
<noscript><img height="1" width="1" style="display:none" src="https://q.quora.com/_/ad/8781d592525f486c899b36c3ebcbdba7/pixel?tag=ViewContent&noscript=1" /></noscript>

<div>
   <div id="banner">
      <img class="img-fluid" alt="Company Name Change" style="width: 100%" src="../../images/company-name-change.webp">
   </div>

   <div class="container">
      <div class="row">
         <div class="col-sm-12 col-md-12 col-xs-12">

            <h1 class="title">Change / Modify your Company’s Name through our Expert Panel | Completely Online, Hassle-Free Process</h1>
         </div>
      </div>
      <div class="title-content">
         <p>Get Complete Guidance from the Country’s Recommended Expert Panel for your Company’s Name Changing process | Quickest Service at an Unbeatable Price!</p>

      </div>
   </div>

</div>

<div class="container" style="margin-top: 20px">
   <div class="row">



      <div class="pull-left col-md-6 col-sm-12">

         <form id="contact" class="oli-validate-form" action="https://www.foundida.com/payment/submit_companynamechange.php" method="post" enctype="multipart/form-data">
            <h3>Need Help with Company Name Change / Alteration?</h3>

            <h4>Fill Up the below Mentioned Form</h4>
            <input type="hidden" id="gclid_field" name="gclid_field" value="">
            <input type="hidden" id="landing_uri" name="landing_uri" value="https://www.foundida.com/services/company-name-change/">

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
                  <input type="hidden" id="csrf_token" name="csrf_token" value="w327d5381fd52310851ba594eb884611" />
               </div>
               <input type="hidden" id="oliid" name="oliid" value="">
               <div class="form_check">
   <label class="custom_check">I have read & agreed to the company's Terms and Conditions, disclaimer and refund policy, and also ready to accept calls, SMS, emails, etc. 
      <input type="checkbox" data-degree="°" name="is_prompted_whatsapp" checked value="1">
      <span class="form_checkmark"></span>
    </label>
</div>

               <input type="button" name="next" id="nextBtn" class="btn next action-button" value="Request for Callback" />
            </fieldset>
            <fieldset id="second_div" style="display:none">


               <div class="gst_rdiobtn editprice price_active">
                  <label for="price_2">
                     <input type="radio" id="price_2" name="form_price" value="8999" checked="">&nbsp;
                     <div class="check"></div>
                     <p>Rs 8999</p>
                     <ul style="color: green">
                        <li>Company Name Change</li>
                     </ul><br><br>
                     <div class="pf_list_imp">
                        <li>Checking out the Availability / Uniqueness of the Proposed Name in RUN </li>
                        <li>Filing MGT - 14 Form</li>
                        <li>Filing INC - 24 Form</li>
                        <li>Application to the MCA & ROC</li>
                        <li>Reliable Expert Support</li>
                        <li>Call, Chat & Email Support</li>
                     </div>

                  </label>
               </div>

               <input type="text" id="txtCaptcha" style="background-image: url(https://www.foundida.com/payment/images/1.JPG); text-align: left; border: none; font-weight: bold; font-size: 22px; width: 40%; font-family: Modern;" readonly="" />
               <input type="hidden" id="txtCaptcha2" />

               <img src="https://www.foundida.com/payment/images/capta.webp" id="btnrefresh" onclick="DrawCaptcha();" alt="Captcha" />
               <input type="text" name="captcha_code" id="captcha_code" class="pull-right" style="width: 50%;" placeholder="Enter the captcha here.." />


               <button type="button" id="contact-submit" data-submit="...Sending">Submit</button>
            </fieldset>


         </form>

      </div>


      <div class="pull-right col-md-6 col-sm-12">

         <div class="panel-group custom_accordion" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default privet_limited_anchr">
               <div class="panel-heading card-header1" role="tab" id="headingOne">
                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">

                     <h6 class="panel-title">
                        What is a Registered Name for a Company?
                     </h6>

                  </a>
               </div>
               <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false">
                  <div class="panel-body">
                     <p>In the time of incorporation, a Business Entity is required to be registered with a Unique Name with the Ministry of Corporate Affairs (MCA) and the Registrar of Companies (ROC), which is known as the Registered Name for the particular Entity.
                     </p>

                  </div>
               </div>
            </div>

            <div class="panel panel-default privet_limited_anchr">
               <div class="panel-heading card-header1" role="tab" id="headingTwo">
                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="collapsed">
                     <h6 class="panel-title">
                        Which Act of the Indian Govt. oversees the Company Name Change procedure?

                     </h6>
                  </a>
               </div>


               <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="">
                  <div class="panel-body">
                     <p>In India, the procedure for changing the name of a registered company is overseen by Section 13(2) of the Companies Act, 2013 and Rule 29(2) of the Companies (Incorporation) Rules 2014 with the administrative supervision of the Registrar of Companies (ROC).
                     </p>
                  </div>
               </div>
            </div>

            <div class="panel panel-default privet_limited_anchr">
               <div class="panel-heading" role="tab" id="headingFour">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                     <h6 class="panel-title">
                        Will a Company lose its Legal Identity by changing its existing Name?
                     </h6>
                  </a>
               </div>


               <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour" aria-expanded="false" style="height: 0px;">
                  <div class="panel-body">
                     <p>By changing the already registered Name, the Constitution of the Entity is not modified. Hence, the Legal Identity of the particular company is not affected by this process. </p>

                  </div>
               </div>
            </div>


            <div class="panel panel-default privet_limited_anchr">

               <div class="panel-heading card-header1" role="tab" id="headingThree">
                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" class="collapsed">
                     <h6 class="panel-title">
                        What is RUN in the Company’s Name Changing process?
                     </h6>
                  </a>
               </div>


               <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false" style="">
                  <div class="panel-body">
                     <p>RUN or Reserve Unique Name is a web service of the Ministry of Corporate Affairs to check the availability / uniqueness of the proposed Name or reserving the Name with the Registrar of Companies (ROC).</p>
                  </div>
               </div>
            </div>



            <div class="panel panel-default privet_limited_anchr">

               <div class="panel-heading card-header1" role="tab" id="headingFive">
                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive" class="collapsed">
                     <h6 class="panel-title">
                        Why does a Company change its Name?
                     </h6>
                  </a>
               </div>


               <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive" aria-expanded="false" style="">
                  <div class="panel-body">
                     <ul style="margin-left:20px;">
                        <li class="required-documents">Standing out from Competition</li>
                        <li class="required-documents">To get a Distinct Brand Equity</li>
                        <li class="required-documents">To Enhance the Recall Factor</li>
                        <li class="required-documents">Stepping into new Business-category</li>
                        <li class="required-documents">Existing name is not Copyrightable</li>
                     </ul>


                  </div>
               </div>
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
                     <img class="right-side-img-startupind" src="https://www.foundida.com/images/right-side-google-2.webp" alt="StartUp India">
                     <p class="right-side-img-title">Startup India</p>
                     <p class="right-side-img-desc">Foundida is now recognized by Department for Promotion of Industry and Internal Trade under Startup India.</p>
                  	</div>
				</div>
				<div class="col-md-6">
                  <div class="right-side-icons-div-2">
                     <img class="right-side-img-startupind" src="https://www.foundida.com/images/right-side-iso.webp" alt="ISO">
                     <p class="right-side-img-title">ISO 9001:2015 CERTIFIED</p>
                     <p class="right-side-img-desc">Foundida is a ISO certified body, assuring the quality professional services to aspiring startups.</p>
                  </div>
              </div>
              <!-- <div class="col-md-4">
                  <div class="right-side-icons-div-2">
                     <img class="right-side-img-startupind" src="https://www.foundida.com/images/flipkart.webp" alt="Flipkart Seller Hub">
                     <p class="right-side-img-title">Authorized Partner </p>
                     <p class="right-side-img-desc">Foundida is an authorized partner of Flipkart. We helped thousands of Flipkart sellers.</p>
                  </div>
              </div> -->
			</div>
	</div>
</div>      </div>


   </div>

</div>



<div class="container">
   <div class="row" style="margin-top: 35px;">
      <div class="col-md-12 col-sm-12">
         <div class="block_heading block_heading_cmpny_chng_name">
            <h2 class="benifts-heading" style="color: black">Document Required</h2>
         </div>
      </div>
      <div class="col-md-12 col-sm-12">
         <div class="req-docs-main-div-2 req-docs-main-div">
            <img src="../../images/cic.svg" alt="Company Incorporation Certificate"><br>
            <span><b>Company Incorporation Certificate</b></span>
         </div>
         <div class="req-docs-main-div-2 req-docs-main-div">
            <img src="../../images/snc.svg" alt="Suggested New Names"><br>
            <span><b>Suggested New Names for the Company</b></span>
         </div>
         <div class="req-docs-main-div-2 req-docs-main-div">
            <img src="../../images/los.svg" alt="List"><br>
            <span><b>List of the Company’s Director(s) and Shareholders</b></span>
         </div>
         <div class="req-docs-main-div-2 req-docs-main-div">
            <img src="../../images/dsd.svg" alt="Digital Signature"><br>
            <span><b>Digital Signature of the Director(s)</b></span>
         </div>
         <div class="req-docs-main-div-2 req-docs-main-div">
            <img src="../../images/cms.svg" alt="MOA & AOA statement"><br>
            <span><b>Company’s MOA & AOA statement</b></span>
         </div>
      </div>
   </div>
</div>






<section class="block_padding block_padding_two">
   <div class="container">
      <div class="row">
         <div class="col-md-12 col-sm-12">
            <div class="block_heading block_heading_cmpny_chng_name">
               <h2 class="benifts-heading" style="color: black">Requirements During Company’s Name Change Procedure</h2>
            </div>
         </div>
         <div class="container">

            <div class="row mbr-justify-content-center">

               <div class="col-lg-6 mbr-col-md-10 public_company">
                  <div class="wrap">
                     <div class="ico-wrap">
                        <span class="mbr-iconfont"> <img src="../../images/shareholder_pub_reg.svg" alt="Director’s Approval"> </span>
                     </div>
                     <div class="text-wrap vcenter">
                        <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Director’s Approval</h2>
                        <p class="mbr-fonts-style text1 mbr-text display-6">The Directors of the concerned organization should pass the Resolution accepting the Company’s Name Changing Process</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 mbr-col-md-10 public_company">
                  <div class="wrap">
                     <div class="ico-wrap">
                        <span class="mbr-iconfont"> <img src="../../images/legal_pub_reg.svg" alt="General Meeting"> </span>
                     </div>
                     <div class="text-wrap vcenter">
                        <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Extraordinary General Meeting of the Shareholders</h2>
                        <p class="mbr-fonts-style text1 mbr-text display-6">An Extraordinary General Meeting (EGM) is required to be held among all the Shareholders of the Company to pass the Special Resolution for Changing the Company’s Name </p>
                     </div>
                  </div>
               </div>

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

<section id="howWework" class="block_padding" style="margin-top:30px;float:none;">
   <div class="container">
      <div class="row">
         <div class="block_heading">
            <h2 style="color: black" class="benifts-heading">How we work? </h2>
         </div>
         <div class="col-sm-12 col-md-12">
            <div class="row">
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

                     <p>Get the call from our Expert panel</p>
                     <p>⟶</p>
                  </div>
               </div>
               <div class="col-md-2 col-md-12">
                  <div class="process_section">
                     <i>3</i>

                     <p>Suggest the proposed Company Name & Upload the Documents as requested</p>
                     <p>⟶</p>
                  </div>
               </div>
               <div class="col-md-2 col-md-12">
                  <div class="process_section">
                     <i>4</i>

                     <p>Checking the Availability of New Name in the RUN (Reserve Unique Name) portal </p>
                     <p>⟶</p>
                  </div>
               </div>
               <div class="col-md-2 col-md-12">
                  <div class="process_section">
                     <i>5</i>

                     <p>Our expert panel will take your approval before filing the Application to the Authority</p>
                     <p>⟶</p>
                  </div>
               </div>
               <div class="col-md-2 col-md-12">
                  <div class="process_section">
                     <i>6</i>
                     <p>Congratulations! Your Company Name Change procedure is completed!</p>
                     <p>👍</p>
                  </div>
               </div>

            </div>
         </div>

      </div>
   </div>
</section>

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
                              <img src="https://www.foundida.com/services/include/image/happy_customers.svg" alt="Happy Customers" />
                           </i>
                           <p>5 Lakh+ Happy Clients Across India</p>
                        </div>
                     </div>
                  </div>
                  <div class="tab_why_us_div tab_why_us_div_odd">
                     <div class="hexagon_box">
                        <div class="hexagon iso_sign">
                           <i>
                              <img src="https://www.foundida.com/services/include/image/iso-mark.webp" alt="ISO" />
                           </i>
                           <p>ISO Certified</p>
                        </div>
                     </div>
                  </div>
                  <div class="tab_why_us_div">
                     <div class="hexagon_box">
                        <div class="hexagon">
                           <i>
                              <img src="https://www.foundida.com/services/include/image/data_security.svg" alt="Data Security" />
                           </i>
                           <p>Data Security & Trust</p>
                        </div>
                     </div>
                  </div>
                  <div class="tab_why_us_div tab_why_us_div_odd">
                     <div class="hexagon_box">
                        <div class="hexagon">
                           <i>
                              <img src="https://www.foundida.com/services/include/image/experts.svg" alt="Experts" />
                           </i>
                           <p>Trained & Professional Experts</p>
                        </div>
                     </div>
                  </div>
                  <div class="tab_why_us_div">
                     <div class="hexagon_box">
                        <div class="hexagon">
                           <i>
                              <img src="https://www.foundida.com/services/include/image/on-time.svg" alt="On Time" />
                           </i>
                           <p>On Time Service </p>
                        </div>
                     </div>
                  </div>
                  <div class="tab_why_us_div tab_why_us_div_odd">
                     <div class="hexagon_box">
                        <div class="hexagon">
                           <i>
                              <img src="https://www.foundida.com/services/include/image/quick.svg" alt="Quick" />
                           </i>
                           <p>Super Fast Service</p>
                        </div>
                     </div>
                  </div>
                  <div class="tab_why_us_div">
                     <div class="hexagon_box affordable_sign_team">
                        <div class="hexagon">
                           <i>
                              <img src="https://www.foundida.com/services/include/image/users_oli_Jan_22.svg" alt="User OLI" />
                           </i>
                           <p>Quick Response Team</p>
                        </div>
                     </div>
                  </div>
                  <div class="tab_why_us_div tab_why_us_div_odd">
                     <div class="hexagon_box">
                        <div class="hexagon affordable_sign">
                           <i>
                              <img src="https://www.foundida.com/services/include/image/affordable.svg" alt="Affordable" />
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
<!------------------here is the section of why us------------------><style>
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


<section class="block_padding block_padding_faq">
   <div class="container">
      <div class="row">
         <div class="col-sm-12 col-md-12">
            <div class="block_heading">
               <h2 style="color: black" class="benifts-heading">FAQ</h2>

            </div>
         </div>

         <div style="margin-bottom: 25px;" class="col-sm-12 col-md-12 why-us-img-div">

            <div data-port-id="child_ans_div_1" class="accordaion-main-div">

               <h4 class="accordion-cus-head">What is the Company Name Change process?</h4>

            </div>

            <div id="child_ans_div_1" class="child-ans-div-1">

               <p class="child-ans-text">A registered business entity in India can change or alter its existing name by following the guidelines stated by the Ministry of Corporate Affairs (MCA). This process is called the Company Name Change process. </p>

            </div>

            <div data-port-id="child_ans_div_2" class="accordaion-main-div">

               <h4 class="accordion-cus-head">Which Act of the Indian Govt. oversees the Company Name Change process?</h4>

            </div>

            <div id="child_ans_div_2" style="display: none;" class="child-ans-div-1">

               <p class="child-ans-text">In India, the procedure for changing the name of a registered company is overseen by Section 13(2) of the Companies Act, 2013 and Rule 29(2) of the Companies (Incorporation) Rules 2014 with the administrative supervision of the Registrar of Companies (ROC). </p>

            </div>

            <div data-port-id="child_ans_div_3" class="accordaion-main-div">

               <h4 class="accordion-cus-head">Can a business entity use the previous Name after registering a new one?</h4>

            </div>

            <div id="child_ans_div_3" style="display: none;" class="child-ans-div-1">

               <p class="child-ans-text">No. If a business entity registers a new Name from the Ministry of Corporate Affairs, the previously registered Name cannot be used by the entity further. </p>
            </div>

            <div data-port-id="child_ans_div_4" class="accordaion-main-div">

               <h4 class="accordion-cus-head">Any Risk while changing the Legal Identity of a Company?</h4>

            </div>

            <div id="child_ans_div_4" style="display: none;" class="child-ans-div-1">

               <p class="child-ans-text">No. If a company changes its name, it does not affect its legal identity. But, till the proposed name gets registered, the company is mandated to use the existing name only.
               </p>

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

<script>
   $(document).ready(function() {
      DrawCaptcha();
   });

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
   window.wa_service_name = 'Company Name Change';
   window.wa_service_code = 'CNC';

   function selectPrice(val) {
      $("#price_1").prop("checked", false);
      $("#price_2").prop("checked", false);
      $("#price_3").prop("checked", false);
      ////      $("#price_4").prop("checked", false);
      //      if(val=='startup')
      //      {
      //         $("#price_1").prop("checked", true);
      //      }
      if (val == 'basic') {
         $("#price_1").prop("checked", true);
      } else if (val == 'smart') {
         $("#price_2").prop("checked", true);
      } else if (val == 'mega') {
         $("#price_3").prop("checked", true);
      }
   }

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
         address: {
            required: true
         },
         pin: {
            required: true,
            number: true,
            rangelength: [6, 6]
         },
         captcha_code: {
            required: true,
            equalTo: "#txtCaptcha2"
         },
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
         },
         captcha_code: {
            required: "Please enter the captcha",
            equalTo: "Captcha not matched"
         }
      }
   });

   $(document).on('click', '#nextBtn', function(e) {
      e.preventDefault();
      if ($(".oli-validate-form").valid()) {
         var name = $('#name').val(),
            email = $('#email').val(),
            mobile = $('#mobile').val(),
            state = $('#state option:selected').val(),
            csrf_token = $('#csrf_token').val(),
            is_prompted_whatsapp = 0,
            gclid_field = $('#gclid_field').val();

         let landing_uri = $('#landing_uri').val();

         if ($('input[name="is_prompted_whatsapp"]').prop('checked') == true) {
            is_prompted_whatsapp = 1;
         }

         $.ajax({
            url: "../../payment/submit_companynamechange.php",
            method: 'post',
            data: {
               csrf_token: csrf_token,
               name: name,
               email: email,
               mobile: mobile,
               state: state,
               is_prompted_whatsapp: is_prompted_whatsapp,
               mode: 1,
               gclid_field: gclid_field,
               landing_uri: landing_uri
            },
            dataType: "json",
            success: function(data) {

               if (data.success) {

                  $('#second_div').show();
                  $('#first_div').hide();
                  $('#oliid').val(data.oli_id);
                  //  if (typeof Campaignid !== 'undefined') {
                  //      pushCampaignDetails(data.oli_id);
                  //  }
                  if (Campaignid !== null || Campaignid != '' || utm_source !== null || utm_source != '') {
                     // if(utm_source=='fb'){
                     //    fbq('track', 'Lead');
                     // }
                     pushCampaignDetails(data.oli_id);
                  }
               } else {
                  alert(data.msg);
               }
            }
         });
      }
   });

   $(document).on('click', '#contact-submit', function() {
      var r = $(this);
      // service_price = $("input[name=price]:checked").val();

      if ($('.oli-validate-form').valid()) {
         submitOli(r);
         // var captcha_code = $('#captcha_code').val();
         // $.ajax({
         //    url: "../../payment/verify_captcha.php",
         //    method:'post',
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
      btn.attr('type', 'submit')
         .html('Redirecting to Payment Lobby...')
         .css('pointer-events', 'none');
      // gtag('event', 'sec8-reg-submit-button', {
      //    'event_category': 'sec8-registration-page',
      //    'event_label': 'sec8-reg-form02'
      // });
      setTimeout(function() {
         $('.oli-validate-form').submit();
      }, 1200);
   }

   $('.gst_rdiobtn').click(function() {
      $('.price_active').toggleClass('price_active');
      $(this).toggleClass('price_active');
      $('.gst_rdiobtn label').css("cursor", "pointer");
   });
</script>

<script type="text/javascript">
   /*Do not remove this.This is for UTM tracking*/
   var landing_form_type = 'CNC';
</script>
@endsection
