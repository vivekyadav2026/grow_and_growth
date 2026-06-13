@extends('layouts.app')

@section('meta')
<title>GST Registration Online Assistance | Apply for GST Number in India</title>
<meta name="description" content="Apply for GST online with Foundida and get assistance with GST registration. Get support with GSTIN, fees check, and eligibility verification.">
<meta name="keywords" content="gst registration, gst apply online, new gst registration, gst registration portal">
<link rel="canonical" href="https://www.foundida.com/services/gst-registration/" />
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.foundida.com/services/gst-registration/">
<meta property="og:image" content="https://www.foundida.com/images/gst_No_Free.webp">
<meta property="og:title" content="GST Registration Online Assistance | Apply for GST Number in India">
<meta property="og:site_name" content="Foundida">
<meta property="og:description" content="Apply for GST online with Foundida and get assistance with GST registration. Get support with GSTIN, fees check, and eligibility verification.">
<meta property="og:locale" content="en-IN">
<script type="application/ld+json">
  {
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [{
        "@@type": "ListItem",
        "position": 1,
        "name": "Home",
        "item": "https://www.foundida.com/"
      },
      {
        "@@type": "ListItem",
        "position": 2,
        "name": "Services",
        "item": "https://www.foundida.com/services/"
      },
      {
        "@@type": "ListItem",
        "position": 3,
        "name": "GST Registration",
        "item": "https://www.foundida.com/services/gst-registration/"
      }
    ]
  }
</script>
<script type="application/ld+json">
  {
    "@@context": "https://schema.org",
    "@@type": "FAQPage",
    "mainEntity": [{
      "@@type": "Question",
      "name": "What is GST?",
      "acceptedAnswer": {
        "@@type": "Answer",
        "text": "GST or Goods and Service Tax is a kind of indirect tax for India and applicable on the supply of products and providing of services. It is a comprehensive and multi-staged assessing; comprehensive because it has subsumed all the indirect taxes except a few and multistage because it is implicated at every step within the generation prepare. It is supposed to be discounted to all the parties within various stages of generation except the ultimate consumer."
      }
    }, {
      "@@type": "Question",
      "name": "Will I be eligible to file the GST Returns?",
      "acceptedAnswer": {
        "@@type": "Answer",
        "text": "Yes! With the free GST Registration services, Foundida also provides three different packages to file the GST Returns on-time for the GST registered business individuals in India."
      }
    }, {
      "@@type": "Question",
      "name": "What is the need of GST?",
      "acceptedAnswer": {
        "@@type": "Answer",
        "text": "It is a mandate issued by Govt. of India who basically try to save tax and keep oneself from the cascading effect of tax."
      }
    }, {
      "@@type": "Question",
      "name": "Is it necessary to pay GST?",
      "acceptedAnswer": {
        "@@type": "Answer",
        "text": "Yes, it is mandatory to pay GST for all the tax payers who is registered under GST regime."
      }
    }, {
      "@@type": "Question",
      "name": "What is the full form of CGST, SGST, IGST?",
      "acceptedAnswer": {
        "@@type": "Answer",
        "text": "The full form of CGST– Central Goods and Service Tax | SGST– State Goods and Service Tax | IGST– Integrated Goods and Service Tax"
      }
    }, {
      "@@type": "Question",
      "name": "What is the difference between CGST, SGST and IGST?",
      "acceptedAnswer": {
        "@@type": "Answer",
        "text": "CGST and IGST are levied by Central Govt. and SGST is levied by State Govt.
        CGST and SGST are paid
        for Intra - State Supply and IGST is paid
        for inter - State supply.
        "
      }
    }, {
      "@@type": "Question",
      "name": "What is the limit to be considered under the GST law?",
      "acceptedAnswer": {
        "@@type": "Answer",
        "text": "The limit to be considered under GST law differs on the basis of different categories.

        Manufacturing Sector– 40 lakhs

        Service sector– 20 lakhs

        In North Eastern states– 10 lakhs "
      }
    }, {
      "@@type": "Question",
      "name": "Do I need to visit the GST Department with papers for any purpose?",
      "acceptedAnswer": {
        "@@type": "Answer",
        "text": "No, you don’t. Foundida looks after each and every procedure. You don’t need to visit any Govt. office. You just have to simply register on our official website and get your GST registration done at ease"
      }
    }, {
      "@@type": "Question",
      "name": "What is the concept of an origin based tax on consumption?",
      "acceptedAnswer": {
        "@@type": "Answer",
        "text": "Origin Based Tax or production tax is levied where services or products are produced."
      }
    }, {
      "@@type": "Question",
      "name": "What is the concept of a destination based tax?",
      "acceptedAnswer": {
        "@@type": "Answer",
        "text": "Destination based tax or consumption tax are levied where the services or the products are being consumed. In this kind of taxation, exports are considered together with nil tax amounts whereas imports are taxed on par with the production done in the domestic sphere."
      }
    }, {
      "@@type": "Question",
      "name": "What is the GST tax rate?",
      "acceptedAnswer": {
        "@@type": "Answer",
        "text": "Goods and Services are categorized into five categories of tax slabs for collection of tax- 0%, 5%, 12%, 18% and 28%."
      }
    }, {
      "@@type": "Question",
      "name": "What are the penalties for not registering under GST?",
      "acceptedAnswer": {
        "@@type": "Answer",
        "text": "IN case of delay in GST filing, the penalty of Rs. 200/- is charged per day. There is no late fee charged in IGST.

        When GST Return is not filed,
        then 10 % of the due tax will be the penalty amount or Rs.10000,
        whichever is earlier.

        When someone commits fraud,
        then there will be a penalty which is 100 % of the due tax or Rs.10000– whichever is earlier.
        "
      }
    }, {
      "@@type": "Question",
      "name": "What is Composition Scheme?",
      "acceptedAnswer": {
        "@@type": "Answer",
        "text": "Composition Scheme is a easy process under the GST law for all the taxpayers who can avoid difficult formalities pay the GST at a fixed rate based on the turnover. The taxpayers, whose revenue is less than Rs. 1 crore, can opt for this scheme. But recently the CBIC announced the increase the threshold limit from Rs. 1 crore to Rs. 1.5 crores. In case of North eastern states and Himachal Pradesh, the limit is now Rs. 75 lakhs. The GST rate under the composition scheme is only 1 % of the annual turnover in case of the manufacturer or traders of products."
      }
    }, {
      "@@type": "Question",
      "name": "What is the GST Turnover Limit?",
      "acceptedAnswer": {
        "@@type": "Answer",
        "text": "In case of sale of goods, if the business exceeds 40 lakhs, in case of service provider if it exceeds 20 lakhs, and in case of Special category states if it exceeds 10 lakhs, then one has to register for GST."
      }
    }, {
      "@@type": "Question",
      "name": "What is the time limit to register for GST?",
      "acceptedAnswer": {
        "@@type": "Answer",
        "text": "A person liable for GST registration must apply for the GST within 30 days from the date he becomes liable for GST."
      }
    }, {
      "@@type": "Question",
      "name": "Is PAN mandatory for the registration of GST?",
      "acceptedAnswer": {
        "@@type": "Answer",
        "text": "PAN is mandatory for general taxpayers and also the casual taxpayers entitled under GST."
      }
    }, {
      "@@type": "Question",
      "name": "Can a business operate across India with one GST number?",
      "acceptedAnswer": {
        "@@type": "Answer",
        "text": "An entity operating in multiple states will have to register separately for each state from where supplies of goods or services take place."
      }
    }, {
      "@@type": "Question",
      "name": "What is the validity of GST certificate?",
      "acceptedAnswer": {
        "@@type": "Answer",
        "text": "Once the GST Certificate is issued, the registration is valid until it is surrendered, cancelled or suspended. Only GST certificate issued to non-resident taxable person and casual taxable person have a limited validity period."
      }
    }, {
      "@@type": "Question",
      "name": "Who is a Casual Taxable Person?",
      "acceptedAnswer": {
        "@@type": "Answer",
        "text": "Casual taxable person is one who occasionally undertakes transaction within a taxable territory where he does not have a fixed place of business."
      }
    }, {
      "@@type": "Question",
      "name": "Who is a Non-resident Taxable Person?",
      "acceptedAnswer": {
        "@@type": "Answer",
        "text": "When a taxable person resides outside India to undertake the transaction occasionally in the country and does not have a fixed place of business in India, he/she is a non-resident taxable person."
      }
    }, {
      "@@type": "Question",
      "name": "How long does it take to obtain GSTIN?",
      "acceptedAnswer": {
        "@@type": "Answer",
        "text": "GSTIN is allotted within 24 hours after submitting GST application with all necessary documents."
      }
    }, {
      "@@type": "Question",
      "name": "How to get GST certificate?",
      "acceptedAnswer": {
        "@@type": "Answer",
        "text": "GST certificate is provided in soft copy format by Govt. of India. After the allotment of GSTIN, GST certificate can be downloaded from the GST portal at anytime by the applicant."
      }
    }, {
      "@@type": "Question",
      "name": "When do you need to register under the GST Act?",
      "acceptedAnswer": {
        "@@type": "Answer",
        "text": "You need to register within 30 days since your liability arises. In case of Casual Taxpayers and Non-residential taxable person, the person needs to register under GST 5 days prior to the commencement of the business."
      }
    }, {
      "@@type": "Question",
      "name": "What is ARN & TRN in GST registration?",
      "acceptedAnswer": {
        "@@type": "Answer",
        "text": "ARN stands for Application Reference Number. It is a proof of successful submission of the application to GST servers. It is generated after TRN or Temporary Reference Number and uploading of required documents."
      }
    }, {
      "@@type": "Question",
      "name": "How to Choose HSN or SAC Code during GST Registration?",
      "acceptedAnswer": {
        "@@type": "Answer",
        "text": "HSN or SAC code refers to Goods and Services code. At Foundida, the GST expert helps you to choose the suitable HSN or SAC Code after getting the details about the business."
      }
    }, {
      "@@type": "Question",
      "name": "Do I need to be physically present during the GST registration?",
      "acceptedAnswer": {
        "@@type": "Answer",
        "text": "Foundida offers the entire GST Registration service online. You don’t need to be physically present during the registration. You only need a device (phone/computer), internet and required documents. We will get the job done for you, even if you are at the remotest location of the country."
      }
    }, {
      "@@type": "Question",
      "name": "When to apply for multiple GST registrations?",
      "acceptedAnswer": {
        "@@type": "Answer",
        "text": "Under the GST regime, only one registration is allowed against one PAN. But when a business is operated in more than one state must have separate GST numbers for each state. Businesses with multiple verticals within a state need to register for each of the verticals."
      }
    }, {
      "@@type": "Question",
      "name": "Is the GST threshold limit the same for all Indian states?",
      "acceptedAnswer": {
        "@@type": "Answer",
        "text": "The exemption limit is a supply turnover of Rs. 20 lac for businesses in all except for the Indian states in the northeast region. Businesses in Arunachal Pradesh, Assam, Meghalaya, Manipur, Mizoram, Nagaland, and Tripura must get a GST registration if their supply turnover exceeds Rs. 10 lac. As mentioned above, this threshold limit applies only to businesses that operate within their home state. A business that conducts trade with another state must seek registration regardless of turnover."
      }
    }, {
      "@@type": "Question",
      "name": "Do I need a commercial address for the registration?",
      "acceptedAnswer": {
        "@@type": "Answer",
        "text": "If you are handling your business from your home, then you can register the residential address with the GST. It requires only the address proof such as electricity bill, NOC, sale deed or link agreement."
      }
    }, {
      "@@type": "Question",
      "name": "When Digital Signature is required for the GST Registration?",
      "acceptedAnswer": {
        "@@type": "Answer",
        "text": "DSC is required in case of private limited company, LLP etc. In case of proprietorship firm or partnership firm, DSC is not required."
      }
    }, {
      "@@type": "Question",
      "name": "Do I need a bank account for the GST registration?",
      "acceptedAnswer": {
        "@@type": "Answer",
        "text": "Yes you do need a personal saving account or current account. If you are starting a new business and have a personal saving account, then it can be provided and after the registration is done, you can apply for the new current account depending on the GST certificate."
      }
    }, {
      "@@type": "Question",
      "name": "What action required after the GST Registration?",
      "acceptedAnswer": {
        "@@type": "Answer",
        "text": "After applying for the GST registration, each month you have to raise GST invoice for your customers or clients and charge proper GST amount to them. At the end of the month you have to pay the taxes online."
      }
    }, {
      "@@type": "Question",
      "name": "Is there any chance of rejection during GST registration?",
      "acceptedAnswer": {
        "@@type": "Answer",
        "text": "If you don’t submit correct required documents during submission of registration, then the jurisdiction officer shall reject the application. You have to apply again along with proper documents."
      }
    }, {
      "@@type": "Question",
      "name": "What documents are required as a Place of Business proof?",
      "acceptedAnswer": {
        "@@type": "Answer",
        "text": "We require the copy of electricity bill or NOC from the landlord in case of rented place. NOC format will be share by our company during registration process."
      }
    }, {
      "@@type": "Question",
      "name": "How do I have to send my documents to Foundida?",
      "acceptedAnswer": {
        "@@type": "Answer",
        "text": "We accept documents over e-mail and whatsapp. Don’t worry, we have a 100% confidential policy and once the job is done, we will delete the documents from our system."
      }
    }, {
      "@@type": "Question",
      "name": "What is the AATO Scheme amendment in GST Return filing?",
      "acceptedAnswer": {
        "@@type": "Answer",
        "text": "On the recommendations of the GST Council, a new scheme of Quarterly Returns with Monthly Payments (QRMP) will be introduced from 1st January 2021.

        Under this scheme,
        taxpayers with upto Rs.5 Crores Aggregate Annual Turnover(AATO) in the previous and the current financial year would be given an option to file their Return / Statement in Form GSTR - 1 and Form GSTR - 3 B Quarterly with a simple payment challan
        for the first two months of the quarter.
        "
      }
    }]
  }
</script>
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
   #contact input[name="submit"],
   input[name="next"] {
      cursor: pointer;
      width: 100%;
      border: none;
      background: #4CAF50;
      color: #FFF;
      margin: 0 0 5px;
      padding: 10px;
      font-size: 15px;
   }

   .avail_consult {
      margin-top: 0;
      width: 100%;
   }

   .title-content {
      margin-bottom: 23px;
   }

   .benifts-heading9::after {
      top: 95px;
   }

   .process_section {
      min-height: 214px;
   }

   .new_center {
      text-align: center;
   }

   .bwar {
      color: #00bb55 !important;
   }

   .card-header:first-child {
      border-radius: 6px !important;
   }

   @media screen and (max-width: 768px) {
      .benifts_heading999::after {
         bottom: -15px !important;
         top: unset !important;
      }
   }

   @media screen and (max-width: 600px) {
      .process_section {
         min-height: auto;
      }
   }
</style>

<div class="from_order_change">

   <section class="from_order_change_one from_order_change_one_destop">
      <a href="#contact">
         <img class="img-fluid" style="width: 100%" src="https://www.foundida.com/images/gst-registration/gst-registration-desktop-banner.webp" alt=" GST registration">
      </a>
   </section>

   <section class="from_order_change_two from_order_change_two_destop">
      <div class="row">
         <div class="container">
            <div class="col-sm-12 col-md-12 col-xs-12">
               <h1 class="title">Apply for GST Registration with Experts Assistance by Foundida </h1>
            </div>
            <div class="title-content">
               <p>Get 360° Online Assistance from India’s recommended Business Taxation Experts in GST Registration to Filing the Mandatory GST Returns Annually</p>
            </div>

         </div>
      </div>
   </section>

   <section class="from_order_change_three">
      <div class="row">
         <div class="container from_order_change_three_custom_container">

            <div class="pull-left col-md-6 col-sm-12">


               <div id="register">

                  <div class="" id="contact">
                     <!-- <p class="payroll">Payroll & Attendance Management System Free for 3 Months</p> -->

                     <h3 class="styletrademarkformheader">Need Help with GST Registration?</h3>
                     <h4>Fill Up the below Mentioned Form</h4>
                     <form id="" class="oli-validate-form" action="https://www.foundida.com/payment/submit_gst-registration-or.php" method="post" enctype="multipart/form-data">

                        <input type="hidden" id="gclid_field" name="gclid_field" value="">
                        <input type="hidden" id="landing_uri" name="landing_uri" value="https://www.foundida.com/services/gst-registration/">


                        <ul id="progressbar">
                           <li style="display:none" class="active">Account Setup</li>
                           <li style="display:none">Personal Details</li>
                        </ul>
                        <fieldset id="first_div">
                           <div class="from_name">
                              <label for="name">Applicant Full Name / आवेदक का पूर्ण नाम</label>
                              <input placeholder="Applicant Full Name" id="name" name="name" type="text">
                           </div>
                           <div class="from_email">
                              <label for="email">Email Address / ईमेल पता</label>
                              <input placeholder="your@gmail.com" id="email" name="email" type="email">
                           </div>
                           <div class="from_mobile">
                              <label for="mobile">Mobile / मोबाइल</label>
                              <input placeholder="98XXXXXXXX (Without 0 or +91)" id="mobile" name="mobile" type="tel" maxlength="10">
                           </div>
                           <div class="from_state">
                              <label for="state">State / राज्य</label>
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
                           <input type="hidden" id="oliid" name="oliid" value="">

                           <input type="hidden" name="phase_type" id="phase_type" value="0">
                           <input type="hidden" name="source_service" id="source_service" value="0">

                           <div class="form_check">
   <label class="custom_check">I have read & agreed to the company's Terms and Conditions, disclaimer and refund policy, and also ready to accept calls, SMS, emails, etc. 
      <input type="checkbox" data-degree="°" name="is_prompted_whatsapp" checked value="1">
      <span class="form_checkmark"></span>
    </label>
</div>

                           <input type="button" name="next" id="nextBtn" class="btn next action-button" value="Get Started" />
                        </fieldset>
                        <fieldset id="second_div" style="display: none;">
                           <div id="gtm_visibility">
                              <h5>Select Package</h5>
                              <div class="package">
                                 <label for="price0" class="gst_rdiobtn price_active" style="display:block">
                                    <input type="radio" class="dummy-class" id="price0" name="price" value="1499" checked>
                                    <div class="check"></div>
                                    <p>Rs 1499</p>
                                    <ul style="color: green">
                                       <li>GST Registration</li>

                                       <li>One Time Charge</li>
                                       <li><b>+</b></li>
                                       <li>Free Consultation </li>
                                    </ul>
                                 </label>
                                 <!-- <label for="price1" class="gst_rdiobtn">
                                    <input type="radio" class="dummy-class" id="price1" name="price" value="2799">
                                    <div class="check"></div>
                                    <p>Rs 2799</p>
                                    <ul style="color: green">
                                       <li>GST Registration</li>

                                       <li>3 Months GST Return Filing </li>
                                       <li><b>+</b></li>
                                       <li>Free Consultation </li>
                                    </ul>
                                 </label> -->

                                 <!-- <label for="price2" class="gst_rdiobtn">
                                    <input type="radio" class="dummy-class" id="price2" name="price" value="4999">
                                    <div class="check"></div>
                                    <p>Rs 4999</p>
                                    <ul style="color: green">
                                       <li>GST Registration </li>

                                       <li>6 Months GST Return Filing </li>
                                       <li><b>+</b></li>
                                       <li>Free Consultation </li>
                                    </ul>
                                 </label> -->

                                 <label for="price3" class="gst_rdiobtn">
                                    <input type="radio" class="dummy-class" id="price3" name="price" value="7999">
                                    <div class="check"></div>
                                    <p>Rs 7999</p>
                                    <ul style="color: green">
                                       <li>GST Registration</li>

                                       <li>12 Months GST Return Filing </li>
                                       <li><b>+</b></li>
                                       <li>Free Consultation </li>
                                    </ul>
                                 </label>
                              </div>
                              <div>
                                 <label>No. of Employees</label>
                                 <input type="number" name="no_of_employees" id="no_of_employees" placeholder="No. of Employees..">
                              </div>

                              <div class="captcha_box">
                                 <img id="captcha_holder" src="https://www.foundida.com/payment/captcha.php" alt="Captcha">
                                 <img src="https://www.foundida.com/images/capta.webp" id="btnrefresh" alt="Captcha">
                                 <input type="text" name="captcha_code" id="captcha_code" class="pull-right" maxlength="4"
                                    onkeyup="this.value = this.value.replace(/[^\d]+/g, '');" placeholder="Enter the captcha here..">
                              </div>

                              <input type="hidden" id="is_submitted" value="0">

                              <input type="hidden" id="form-name" name="form_name" value="GST">

                              <input type="button" id="contact-submit" class="submit action-button" value="Proceed Now &#8594;" />

                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>




            
            <div class="pull-right col-md-6 col-sm-12">

               <div class="gst_from_image_destop">
                  <img class="img-fluid" style="width: 100%" src="https://www.foundida.com/images/gst-registration/gst-form-image.webp" alt="gst-form-image">
               </div>
            </div>

         </div>
      </div>
   </section>

   <section class="new_section_from_order_banner">
      <a href="#contact">
         <img class="img-fluid" style="width: 100%"
            src="https://www.foundida.com/images/gst-registration/gst-registration-banner-mobile.webp" alt=" GST registration">
      </a>
      <section class="from_order_change_two new_section_display_modification">
         <div class="row">
            <div class="container">

               <div class="col-sm-12 col-md-12 col-xs-12">
                  <h2 class="title">GST Registration with the Experts of Foundida | One Day Process</h2>
               </div>
               <div class="title-content">
                  <p>Get 360° Online Assistance from India’s recommended Business Taxation Experts in GST Filing and
                     Assistance the Mandatory GST Returns Monthly/Annually</p>
               </div>

            </div>
         </div>
      </section>
      <div class="gst_from_image_mobile">
         <img class="img-fluid" style="width: 100%"
            src="https://www.foundida.com/images/gst-registration/gst-form-image.webp" alt="gst-form-image">
      </div>
   </section>

   <section class="benefits_of_having_gst_number">
      <div class="container">
         <div class="row bohgstn_custom_row">
            <div class="col-md-6 bohgstn_custom_row_one">
               <div class="benefits_of_having_gst_number_left">
                  <img class="img-fluid" style="width: 100%" src="https://www.foundida.com/images/gst-registration/gst-benefits-image.webp" alt=" GST registration">
               </div>
            </div>
            <div class="col-md-6 bohgstn_custom_row_two">
               <div class="benefits_of_having_gst_number_right">
                  <div class="bd-example" data-example-id="">
                     <div id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="card">
                           <div class="card-header custom_modification_card_header" role="tab" id="headingThree">
                              <div class="mb-0">
                                 <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"
                                    aria-expanded="false" aria-controls="collapseOne" class="">
                                    <h3>Benefits of Having GST Number</h3>
                                 </a>
                              </div>
                           </div>
                           <div id="collapseThree" class="collapse in" role="tabpanel"
                              aria-labelledby="headingThree" aria-expanded="false">
                              <div class="card-block">
                                 <p class="benifits-having-text"><strong>Become more competitive in
                                       Market</strong></p>
                                 <p class="benifits-having-text">Interstate trading is impossible without having
                                    a GST number. It is possible only after registering the business under GST.
                                 </p>
                                 <p class="benifits-having-text"><strong>Expansion of business online</strong>
                                 </p>
                                 <p class="benifits-having-text">You must acquire a GSTIN if you are willing to
                                    compete with big brands like Amazon, Flipkart, Shopify, Paytm on ecommerce
                                    platform or through your own website.</p>
                                 <p class="benifits-having-text"><strong>Get Input Tax Credit</strong></p>
                                 <p class="benifits-having-text">If you have a GST Number, you can avail Input
                                    Tax Credit while filing for GST return.</p>
                                 <p class="benifits-having-text"><strong>Interstate sales without
                                       restrictions</strong></p>
                                 <p class="benifits-having-text">You can sell your products in other states only
                                    after completing the registration for GST.</p>
                              </div>
                           </div>
                        </div>

                        <div class="card">
                           <div class="card-header custom_modification_card_header" role="tab" id="headingThree">
                              <div class="mb-0">
                                 <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"
                                    aria-expanded="false" aria-controls="collapseFour" class="collapsed">
                                    <h3>Documents required for GST registration</h3>
                                 </a>
                              </div>
                           </div>
                           <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingThree"
                              aria-expanded="false">
                              <div class="card-block">
                                 The following documents are required to register of GST (Goods and Service Tax)
                                 –
                                 <ul class="benifits-ul">
                                    <li class="register-benifit-li register-benifits-text">PAN Card</li>
                                    <li class="register-benifit-li register-benifits-text">Aadhaar Card</li>
                                    <li class="register-benifit-li register-benifits-text">Phone number and
                                       Email address</li>

                                 </ul>
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

</div>

<section class="gst_regis_overview">
   <div class="container">
      <h2 class="news_title con_sec1_title benifts-heading" style="color: black">GST Registration - Overview</h2>
      <div class="gst_overview_text">
         <p>Businesses must register as regular taxable persons under the Goods and Services Tax (GST) if their annual revenue exceeds the threshold limit of Rs. 40 lakhs (in case of goods), Rs. 20 lakhs (in case of services), or Rs. 10 lakhs, as applicable. GST registration is the term for it.</p>
         <p>It is mandatory to generate the GSTIN if annual turnover exceeds the above prescribed limit. If the company conducts business without registering for GST, it is an offence and faces severe penalties.</p>
         <p>It typically takes 4 to 6 working days to register for GST. In 3 simple steps, Team Foundida can assist you in obtaining GST registration more quickly.</p>
      </div>
   </div>
</section>

<section class="types_of_gst_regis cons_sec1">
   <div class="container">
      <h2 class="news_title con_sec1_title benifts-heading" style="color: black">Types of GST Registration</h2>
      <p class="gst_reg_text">Regular, sporadic, non-resident and e-Commerce operators are some of the different GST registration categories. Casual taxpayers, non-resident taxpayers, and e-Commerce enterprises must register for GST regardless of the turnover criteria.</p>
      <div class="row">
         <div class="col-md-4 col-sm-12">
            <div class="cons_sec1_itemBox">
               <div class="infographic-items">
                  <div class="clip-wrapper cons_sec1_clipWrapper">
                     <div class="clip-1"></div>
                     <div class="clip-2"></div>
                     <div class="content">
                        <h3>01</h3>
                     </div>
                  </div>
                  <h2>Casual Taxable Persons</h2>
                  <div class="cons_sec1_p">
                     <p>
                        According to the GST Act, a casual taxable person is a person who sporadically offers goods or services in a State or a Union territory where the firm doesn't have a fixed location. Individuals running roaming businesses at shows or seasonal operations would so be regarded as casual taxable people under the GST.
                     </p>
                  </div>

               </div>
            </div>
         </div>
         <div class="col-md-4 col-sm-12">
            <div class="cons_sec1_itemBox">
               <div class="infographic-items">
                  <div class="clip-wrapper cons_sec1_clipWrapper">
                     <div class="clip-1"></div>
                     <div class="clip-2"></div>
                     <div class="content">
                        <h3>02</h3>
                     </div>
                  </div>
                  <h2>Non-resident Taxable Persons</h2>
                  <div class="cons_sec1_p">
                     <p>
                        A non-resident taxable person is any person, corporation, or organisation that offers goods or services subject to the GST but does not have a permanent place of business or habitation in India (NRI). Because of this, any foreign person, business, or organisation that provides goods or services to India would be regarded as a non-resident taxable person and would have to follow all applicable GST legislation in India.
                     </p>
                  </div>

               </div>
            </div>
         </div>
         <div class="col-md-4 col-sm-12">
            <div class="cons_sec1_itemBox">
               <div class="infographic-items">
                  <div class="clip-wrapper cons_sec1_clipWrapper">
                     <div class="clip-1"></div>
                     <div class="clip-2"></div>
                     <div class="content">
                        <h3>03</h3>
                     </div>
                  </div>
                  <h2>E-Commerce Operators</h2>
                  <div class="cons_sec1_p">
                     <p>
                        An "electronic commerce operator" is somebody who owns, operates, or oversees a digital or electronic facility or platform for electronic commerce. Anyone who sells online can be categorised as an e-Commerce Operator and is consequently needed to register for GST, regardless of the amount of business earnings.
                     </p>
                  </div>

               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="gst_req_doc">
   <div class="container">
      <h2 class="news_title con_sec1_title benifts-heading" style="color: black">Required Documents for GST Registration</h2>
      <div class="row">
         <div class="col-md-3 col-xs-6">
            <div class="gstReq_doc_box">
               <i class="far fa-address-card"></i>
               <p>PAN of the Applicant(Proprietor)</p>
            </div>
         </div>
         <div class="col-md-3 col-xs-6">
            <div class="gstReq_doc_box">
               <i class="far fa-id-card"></i>
               <p>Aadhaar card</p>
            </div>
         </div>
         <div class="col-md-3 col-xs-6">
            <div class="gstReq_doc_box">
               <i class="far fa-file-alt"></i>
               <p>Proof of business registration or Incorporation certificate</p>
            </div>
         </div>
         <div class="col-md-3 col-xs-6">
            <div class="gstReq_doc_box">
               <i class="far fa-file-image"></i>
               <p>Identity and Address proof of Promoters/Director with Photographs</p>
            </div>
         </div>
         <div class="col-md-3 col-xs-6">
            <div class="gstReq_doc_box">
               <i class="fas fa-map-marked-alt"></i>
               <p>Address proof of the place of business</p>
            </div>
         </div>
         <div class="col-md-3 col-xs-6">
            <div class="gstReq_doc_box">
               <i class="fas fa-money-check-alt"></i>
               <p>Bank Account statement/Cancelled cheque</p>
            </div>
         </div>
         <div class="col-md-3 col-xs-6">
            <div class="gstReq_doc_box">
               <i class="fas fa-file-signature"></i>
               <p>Letter of Authorization/Board Resolution for Authorized Signatory</p>
            </div>
         </div>
         <div class="col-md-3 col-xs-6">
            <div class="gstReq_doc_box">
               <i class="fas fa-handshake"></i>
               <p>Rent Agreement in case the PPOB(Principal Place of Business) is rented</p>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="gst_question">
   <div class="">
      <div class="gst_question_area">
         <div class="gst_question_left">
            <img src="https://www.foundida.com/services/gst-registration/image/gst-gstin-gstn.webp" alt="GST Return and GSTN">
         </div>
         <div class="gst_question_right">
            <div class="gst_question_box">
               <h3><i class="far fa-question-circle"></i> What is a GST Return?</h3>
               <p>A GST return is a record of income that must be submitted to the tax authorities in accordance with the legislation. A taxpayer is required by the GST law to submit two GST returns, either monthly/quarterly and one return each year (if applicable). All tax returns must be submitted electronically. Please be aware that there is no option to avoid return filing. All unreported invoices for the prior tax period must be included in the current month.

                  A registered dealer is required under the GST to submit returns for purchases, sales, output, GST (On Sales), and input tax credit (GST paid on purchases).</p>
            </div>
            <div class="gst_question_box">
               <h3><i class="far fa-question-circle"></i> What is GSTIN?</h3>
               <p>Each GST taxpayer receives a different identification number or GSTIN. Anyone with a GST number can access the GST portal to validate a GSTIN number.</p>
            </div>
            <div class="gst_question_box">
               <h3><i class="far fa-question-circle"></i> What is the GSTN?</h3>
               <p>The Goods and Service Tax Network (GSTN) is a section 8 (non-profit) private limited business that operates outside of government. GSTN serves as a one-stop shop for all of your indirect tax needs. To assist you in preparing, filing, amending returns and paying your indirect tax bills, GSTN is in charge of managing the Indirect Taxation platform for GST.</p>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="gst_benefit_secton">
   <div class="container">
      <h2 class="benifts-heading" style="color: black">Benefits of GST Registration</h2>
      <div class="row bgstr_block">
         <div class="col-md-4 col-xs-6">
            <div class="penalty_info">
               <img src="	https://www.foundida.com/services/fssai-registration/image/tick_round.webp" alt="tick">
               <h4>Simplifies taxation services</h4>
               <p>The GST has integrated the Indian market by bringing together several indirect taxes under a single roof.</p>
            </div>
         </div>
         <div class="col-md-4 col-xs-6">
            <div class="penalty_info">
               <img src="	https://www.foundida.com/services/fssai-registration/image/tick_round.webp" alt="tick">
               <h4>Reduction in costs of products & services</h4>
               <p>The cascading impact of numerous taxes and VATs was eliminated by implementing GST, which decreased the cost of goods and services.</p>
            </div>
         </div>

         <div class="col-md-4 col-xs-6">
            <div class="penalty_info">
               <img src="	https://www.foundida.com/services/fssai-registration/image/tick_round.webp" alt="tick">
               <h4>Helps avoid lengthy taxation services</h4>
               <p>Small businesses benefit from GST registration since it lets them avoid time-consuming tax services. Since service providers and product suppliers with annual sales of under 20 lakh rupees and 40 lakh rupees, respectively, are exempt from paying the GST.</p>
            </div>
         </div>
         <div class="col-md-4 col-xs-6">
            <div class="penalty_info">
               <img src="	https://www.foundida.com/services/fssai-registration/image/tick_round.webp" alt="tick">
               <h4>Aimed at reducing corruption and sales without receipts</h4>
               <p>The GST was implemented with the intention of eliminating fraud and un-receipted sales. Additionally, it assists in lowering the amount of indirect taxes that small businesses must pay.</p>
            </div>
         </div>
         <div class="col-md-4 col-xs-6">
            <div class="penalty_info">
               <img src="	https://www.foundida.com/services/fssai-registration/image/tick_round.webp" alt="tick">
               <h4>Uniformity in the taxation process</h4>
               <p>GST registration provides for centralised registration and brings uniformity to the taxation process. This makes it easier for businesses to submit their quarterly tax returns online.</p>
            </div>
         </div>
         <div class="col-md-4 col-xs-6">
            <div class="penalty_info">
               <img src="	https://www.foundida.com/services/fssai-registration/image/tick_round.webp" alt="tick">
               <h4>Composition scheme for small businesses</h4>
               <p>Small businesses with revenue between up to Rs. 1.5 crores can gain from the GST because it offers the possibility to reduce taxes by using the Composition scheme. The tax and compliance burden for many small firms has decreased as a result of this action.</p>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="penalty_sec">
   <div class="container">
      <div class="penalty_sec_grid">
         <div class="penalty_sec_grid_div">
            <div class="penalti_box">
               <h4 class="requirements_head">GST Registration Fees</h4>
               <p class="req_detail">The lengthy 11-step procedure of registering for GST necessitates the submission of numerous business details and scanned documents. Although there are no fees specified by the GST law for self-register on the GST system, purchasing the GST registration plan with Foundida can save you a tonne of time and hassle. You can choose Foundida’s GST Registration services, where a GST Expert will help you with GST Registration from beginning to end.</p>
            </div>
         </div>
         <div class="penalty_sec_grid_div">
            <div class="penalti_box">
               <h4 class="requirements_head">Penalty for not obtaining GST registration</h4>
               <p class="req_detail">A penalty of 10% of the tax amount owed, subject to a minimum of Rs. 10,000, must be paid by the violator who fails to pay taxes or makes short payments (sincere errors). <br> When the offender has purposefully avoided paying taxes, the penalty is 100% of the amount owed.</p>
            </div>
         </div>
      </div>
   </div>
</section>


<section class="reviews">
   <div class="container">
      <div class="row">
         <div class="col-sm-12 col-md-12 margin-bottom new_center">
            <div class="">
               <img src="https://www.foundida.com/images/Google-cust 2 1.webp" alt="Google Review">
               <h3 style="font-size: 32px;">Customer Reviews</h3>
            </div>
         </div>
         <div class="col-sm-12 col-md-12 ">
            <div id="reviews" class="owl-one owl-carousel">
               <!-- <div class="item">
                  <div class="trust_reviewstrat">
                     <span>
                        <img src="../../images/stars-5-tp.svg" alt="5 Star">
                     </span>
                     <h3>Regarding GST registration</h3>
                     <p>I had been postponing my GST registration due to the complicated paperwork, but Foundida made the process super smooth! Their team guided me at every step and handled all the legal formalities. I got my GST certificate before my expected date. Highly recommend their services to all new business owners.</p>
                     <h4><span>Customer Name</span>Mudabbir Jairajpuri </h4>
                  </div>
               </div> -->
               <div class="item">
                  <div class="trust_reviewstrat">
                     <span>
                        <img src="../../images/stars-5-tp.svg" alt="5 Star">
                     </span>
                     <h3>Your service regarding GST…</h3>
                     <p>Foundida provided a transparent pricing structure with no hidden charges. The team explained the entire process before beginning, and I could track the status of my GST registration online. It was a completely stress-free experience. Will definitely use their services again!</p>
                     <h4><span>Customer Name</span>Mohd Ziya </h4>
                  </div>
               </div>
               <div class="item">
                  <div class="trust_reviewstrat">
                     <span>
                        <img src="../../images/stars-5-tp.svg" alt="5 Star">
                     </span>
                     <h3>My GST registration…</h3>
                     <p>As a small business owner, I was confused about GST requirements. Foundida not only completed my registration but also educated me about compliance and return filing. Their step-by-step guidance was a big relief. Great service for entrepreneurs!</p>
                     <h4><span>Customer Name</span>Gaurav Roy </h4>
                  </div>
               </div>
               <div class="item">
                  <div class="trust_reviewstrat">
                     <span>
                        <img src="../../images/stars-5-tp.svg" alt="5 Star">
                     </span>
                     <h3>Best GST registration company</h3>
                     <p>I found Foundida through a Google search and decided to give it a try. To my surprise, the process was incredibly quick. I uploaded my documents online, and the rest was handled efficiently. Kudos to the team for delivering what they promise!</p>
                     <h4><span>Customer Name</span>Santanu Das </h4>
                  </div>
               </div>
               <!-- <div class="item">
                  <div class="trust_reviewstrat">
                     <span>
                        <img src="../../images/stars-5-tp.svg" alt="5 Star">
                     </span>
                     <h3>Deserves quality beyond stars for the service rendered</h3>
                     <p>Being a busy trader, I didn't have time to run around for GST registration. Foundida’s team handled everything professionally and saved me so much time. Their service is perfect for people who want fast results without any legal headache.</p>
                     <h4><span>Customer Name</span>Ega Srinivas </h4>
                  </div>
               </div> -->


               <!-- <div class="item">
                  <div class="trust_reviewstrat">
                     <span>
                        <img src="../../images/stars-5-tp.svg" alt="5 Star">
                     </span>
                     <h3>Highly recommended!</h3>
                     <p>Excellent and prompt service by Mr. Ram. I'm very satisfied with his expertise, communication and cooperative spirit in helping me with GST registration and return filing. Mr. Ram and OnlineLegal have made the process completely hassle-free!</p>
                     <h4><span>Customer Name</span>Divisha</h4>
                  </div>
               </div>
               <div class="item">
                  <div class="trust_reviewstrat">
                     <span>
                        <img src="../../images/stars-5-tp.svg" alt="5 Star">
                     </span>
                     <h3>Nice service providers Mr. Ram…</h3>
                     <p>Nice service providers. Mr Ram helped through GST filing In a good and polite manner</p>
                     <h4><span>Customer Name</span>Kitti Krishna</h4>
                  </div>
               </div>
               <div class="item">
                  <div class="trust_reviewstrat">
                     <span>
                        <img src="../../images/stars-5-tp.svg" alt="5 Star">
                     </span>
                     <h3>Wonderfully assisted by Mr. Biswajit Das</h3>
                     <p>Mr. Das is very patiently done the re-registration of my rejected GST registration due to some missing documents. Extremely focused and cooperative.</p>
                     <h4><span>Customer Name</span>Subhroneel Ganguly </h4>
                  </div>
               </div>
               <div class="item">
                  <div class="trust_reviewstrat">
                     <span>
                        <img src="../../images/stars-5-tp.svg" alt="5 Star">
                     </span>
                     <h3>Hi i am a first timer but must say I…</h3>
                     <p>Hi i am a first timer but must say I was in good hands, Mr. Kumar helped me to get my Gst without any trouble. A very polite person with good understanding skills.</p>
                     <h4><span>Customer Name</span> Munish Gupta </h4>
                  </div>
               </div>
               <div class="item">
                  <div class="trust_reviewstrat">
                     <span>
                        <img src="../../images/stars-5-tp.svg" alt="5 Star">
                     </span>
                     <h3>Price was extremely helpful...</h3>
                     <p>Price was extremely helpful. He gives the customers the confidence and strives them to achieve the requirement. He followed up with me every day and ensured I successfully get the GST number. Very very helpful.Thank You Prince.
                     </p>
                     <h4><span>Customer Name</span>Prarthana K.B.</h4>
                  </div>
               </div> -->


            </div>
         </div>
      </div>
   </div>
</section>

<div class="row reviews_buttom">
   <div class="container">
      <div class="col-md-12 col-sm-12">
         <h2 class="benifts-heading" style="color: black">Who Should Register for GST?</h2>
      </div>
      <div class="col-sm-12 col-md-12 table-overflow" style="margin-top: 50px">
         <table width="100%">
            <tbody>
               <tr>
                  <td class="hide-in-mobile" style="background-color:#888" colspan="2"><strong>Mandatory For </strong></td>
                  <td class="hide-in-mobile" style="background-color:#888">
                     <strong>Who Can Register</strong>
                  </td>

                  <td class="hide-in-mobile" style="background-color:#888" width="174"><strong>Time</strong></td>
               </tr>
               <tr>
                  <td rowspan="3" colspan="2">
                     <strong>Turnover Criteria</strong>
                     <p class="cntrl-wdth">Any businesses which have a turnover of above 40 lakhs (Rs 10 Lakhs for North-Eastern states, J & K, Himachal Pradesh and Uttarakhand), Rs 20 lakhs in case of services.</p>
                     <br>
                     <strong>E-commerce operator</strong>
                     <p class="cntrl-wdth">Person who connects through e-commerce business (such as Amazon or Flipkart), should register for GST from the beginning only.</p>
                     <br>
                     <strong>Casual Taxpayer</strong>
                     <p class="cntrl-wdth">If you supply goods or services in events/exhibition & you don’t have a permanent place of business, you need to get online GST Registration. The validity of causal GST Registration is 90 days</p>
                     <br>
                     <strong>Sales/Service provide to other state (Inter State) </strong>
                     <p class="cntrl-wdth">One should register under GST if any supplier of goods or service provider involved in any other state.</p>
                     <br>
                     <strong>Involved In Online Information </strong>
                     <p class="cntrl-wdth">Person supplying online information and database access other than a registered taxable person</p>
                     <br>
                     <strong>NRI Exporters & Importers </strong>
                     <p class="cntrl-wdth">Any NRI person or company supplying goods or services in India need to register GST regardless of turnover.</p>
                     <br>
                  </td>
                  <td class="hide-in-mobile">Individual/Proprietorship Firm</td>

                  <td class="hide-in-mobile">Get GST Registration Certificate and Number within 1-5 days
                     <a href="#contact"><button class="btn btn-success">Register Now</button></a>
                  </td>
               </tr>
               <tr class="hide-in-mobile">
                  <td>Partnership Firm</td>

                  <td>Get GST Registration Certificate and Number within 1-5 days <a href="#contact"><button class="btn btn-success">Register Now</button></a></td>
               </tr>
               <tr class="hide-in-mobile">
                  <td>Private Limited/LLP/NGO</td>

                  <td>Get GST Registration Certificate and Number within 1-5 days<a href="#contact"><button class="btn btn-success">Register Now</button></a></td>
               </tr>
            </tbody>
         </table>
      </div>
   </div>
</div>





<section class="block_padding">
   <div id="fees" class="row background_image">
      <div class="container">
         <div class="col-md-12 col-sm-12">
            <div class="col-md-12 col-sm-12">
               <h2 class="benifts-heading9 benifts_heading999">GST Registration Packages<br>Professional Fees</h2>

            </div>
         </div>
         <div class="benifits-ul">
            <div class="register-benifit-li register-benifits-text">
               <h4><span>Start Up</span>Rs.1499</h4>
               <p>Application filing for GSTIN </p>
               <p>Generate ARN & TRN number</p>
               <p>Call, Chat, Email Support</p>
               <p>Personally assigned GST Expert</p>
               <p>Consultation Available in 3 Languages including English</p>

               <a href="#contact">Buy Now</a>
            </div>
            <!-- <div class="register-benifit-li register-benifits-text">
               <h4><span>Basic</span>Rs.2799 </h4>
               <p>GST Registration absolutely FREE</p>
               <p><b>GST Return Filing for 3 Months</b></p>
               <p>Call, Chat, Email Support</p>
               <p>Personally assigned GST Expert</p>
               <p>Consultation Available in 3 Languages including English </p>

               <a href="#contact">Buy Now</a>
            </div> -->

            <!-- <div class="register-benifit-li register-benifits-text">
               <h4><span>Standard</span>Rs.4999</h4>
               <p>GST Registration absolutely FREE</p>
               <p><b>GST Return Filing for 6 Months</b></p>
               <p>Call, Chat, Email Support</p>
               <p>Personally assigned GST Expert</p>
               <p>Consultation Available in 3 Languages including English </p>


               <a href="#contact">Buy Now</a>
            </div> -->

            <div class="register-benifit-li register-benifits-text">
               <h4><span>Recommended Plan</span>Rs.7999</h4>
               <p>GST Registration absolutely FREE</p>
               <p><b>GST Return Filing for 12 Months</b> </p>
               <p>Call, Chat, Email Support</p>
               <!-- <p class="bwar">Basic 1-page website</p>
               <p class="bwar">Basic website audit report</p> -->
               <p>Personally assigned GST Expert</p>
               <p>Consultation Available in 3 Languages including English </p>

               <a href="#contact">Buy Now</a>
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
</section><!------------------here is the section of why us------------------>
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
<!------------------here is the section of why us------------------>


<section id="howWework" class="block_padding" style="margin-top: 30px; float: left;">
   <div class="container">
      <div class="row">
         <div class="block_heading">
            <h2 style="color: black" class="benifts-heading">How we work?</h2>
         </div>
         <div class="col-sm-12 col-md-12">
            <div class="how_we_work_tab">
               <div class="how_we_work_tab_div">
                  <div class="process_section">
                     <i>1</i>

                     <p>Fill the Form &amp; Make the Payment</p>
                     <p>⟶</p>
                  </div>
               </div>
               <div class="how_we_work_tab_div">
                  <div class="process_section">
                     <i>2</i>

                     <p>Call From The GST Expert</p>
                     <p>⟶</p>
                  </div>
               </div>
               <div class="how_we_work_tab_div">
                  <div class="process_section">
                     <i>3</i>

                     <p>Send The Required Documents to Foundida</p>
                     <p>⟶</p>
                  </div>
               </div>
               <div class="how_we_work_tab_div">
                  <div class="process_section">
                     <i>4</i>

                     <p>Experts of Foundida will upload your documents on Govt portal > ARN &amp; TRN number will be generated</p>
                     <p>⟶</p>
                  </div>
               </div>
               <div class="how_we_work_tab_div">
                  <div class="process_section">
                     <i>5</i>

                     <p>Congratulations! Your GSTIN Successfully Registered</p>
                     <p>⟶</p>
                  </div>
               </div>
               <div class="how_we_work_tab_div">
                  <div class="process_section">
                     <i>6</i>

                     <p>GST Certificate Send To You</p>
                     <p>👍</p>
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


<div class="row">
   <div class="container">
      <div class="col-sm-12 col-md-12">
         <h2 style="color: black;margin-bottom:20px;" class="benifts-heading">GST Registration FAQs</h2>
      </div>
      <div style="margin-bottom: 25px;" class="col-sm-12 col-md-6 why-us-img-div">
         <div data-port-id="child_ans_div_1" class="accordaion-main-div">
            <h4 class="accordion-cus-head">What is GST?</h4>
         </div>
         <div id="child_ans_div_1" class="child-ans-div-1">
            <p class="child-ans-text">GST or Goods and Service Tax is a kind of indirect tax for India and applicable on the supply of products and providing of services. It is a comprehensive and multi-staged assessing; comprehensive because it has subsumed all the indirect taxes except a few and multistage because it is implicated at every step within the generation prepare. It is supposed to be discounted to all the parties within various stages of generation except the ultimate consumer.</p>
         </div>
         <div data-port-id="child_ans_div_36" class="accordaion-main-div">
            <h4 class="accordion-cus-head">Will I be eligible to file the GST Returns?</h4>
         </div>
         <div id="child_ans_div_36" style="display: none;" class="child-ans-div-1">
            <p class="child-ans-text">Yes! With the free GST Registration services, Foundida also provides three different packages to file the GST Returns on-time for the GST registered business individuals in India. </p>
         </div>
         <div data-port-id="child_ans_div_2" class="accordaion-main-div">
            <h4 class="accordion-cus-head">What is the need of GST?</h4>
         </div>
         <div id="child_ans_div_2" style="display: none;" class="child-ans-div-1">
            <p class="child-ans-text">It is a mandate issued by Govt. of India who basically try to save tax and keep oneself from the cascading effect of tax.</p>
         </div>
         <div data-port-id="child_ans_div_3" class="accordaion-main-div">
            <h4 class="accordion-cus-head">Is it necessary to pay GST?</h4>
         </div>
         <div id="child_ans_div_3" style="display: none;" class="child-ans-div-1">
            <p class="child-ans-text">Yes, it is mandatory to pay GST for all the tax payers who is registered under GST regime.</p>
         </div>
         <div data-port-id="child_ans_div_4" class="accordaion-main-div">
            <h4 class="accordion-cus-head">What is the full form of CGST, SGST, IGST?</h4>
         </div>
         <div id="child_ans_div_4" style="display: none;" class="child-ans-div-1">
            <p class="child-ans-text">The full form of CGST– Central Goods and Service Tax | SGST– State Goods and Service Tax | IGST– Integrated Goods and Service Tax</p>
         </div>
         <div data-port-id="child_ans_div_5" class="accordaion-main-div">
            <h4 class="accordion-cus-head">What is the difference between CGST, SGST and IGST?</h4>
         </div>
         <div id="child_ans_div_5" style="display: none;" class="child-ans-div-1">
            <p class="child-ans-text">CGST and IGST are levied by Central Govt. and SGST is levied by State Govt.</p>
            <p class="child-ans-text">CGST and SGST are paid for Intra-State Supply and IGST is paid for inter-State supply.</p>
         </div>
         <div data-port-id="child_ans_div_6" class="accordaion-main-div">
            <h4 class="accordion-cus-head">What is the limit to be considered under the GST law?</h4>
         </div>
         <div id="child_ans_div_6" style="display: none;" class="child-ans-div-1">
            <p class="child-ans-text">The limit to be considered under GST law differs on the basis of different categories.</p>
            <p class="child-ans-text">Manufacturing Sector – 40 lakhs</p>
            <p class="child-ans-text">Service sector – 20 lakhs</p>
            <p class="child-ans-text">In North Eastern states – 10 lakhs</p>
         </div>
         <div data-port-id="child_ans_div_7" class="accordaion-main-div">
            <h4 class="accordion-cus-head">Do I need to visit the GST Department with papers for any purpose?</h4>
         </div>
         <div id="child_ans_div_7" style="display: none;" class="child-ans-div-1">
            <p class="child-ans-text">
               No, you don’t.
               <bold>Foundida</bold>
               looks after each and every procedure. You don’t need to visit any Govt. office. You just have to simply register on our official website and get your GST registration done at ease
            </p>
         </div>
         <div data-port-id="child_ans_div_8" class="accordaion-main-div">
            <h4 class="accordion-cus-head">What is the concept of an origin based tax on consumption?</h4>
         </div>
         <div id="child_ans_div_8" style="display: none;" class="child-ans-div-1">
            <p class="child-ans-text">Origin Based Tax or production tax is levied where services or products are produced.</p>
         </div>
         <div data-port-id="child_ans_div_9" class="accordaion-main-div">
            <h4 class="accordion-cus-head">What is the concept of a destination based tax?</h4>
         </div>
         <div id="child_ans_div_9" style="display: none;" class="child-ans-div-1">
            <p class="child-ans-text">Destination based tax or consumption tax are levied where the services or the products are being consumed. In this kind of taxation, exports are considered together with nil tax amounts whereas imports are taxed on par with the production done in the domestic sphere.</p>
         </div>
         <div data-port-id="child_ans_div_10" class="accordaion-main-div">
            <h4 class="accordion-cus-head">What is the GST tax rate?</h4>
         </div>
         <div id="child_ans_div_10" style="display: none;" class="child-ans-div-1">
            <p class="child-ans-text">Goods and Services are categorized into five categories of tax slabs for collection of tax- 0%, 5%, 12%, 18% and 28%.</p>
         </div>
         <div data-port-id="child_ans_div_11" class="accordaion-main-div">
            <h4 class="accordion-cus-head">What are the penalties for not registering under GST?</h4>
         </div>
         <div id="child_ans_div_11" style="display: none;" class="child-ans-div-1">
            <p class="child-ans-text">IN case of delay in GST filing, the penalty of Rs. 200/- is charged per day. There is no late fee charged in IGST.</p>
            <p class="child-ans-text">When GST Return is not filed, then 10% of the due tax will be the penalty amount or Rs. 10000, whichever is earlier.</p>
            <p class="child-ans-text">When someone commits fraud, then there will be a penalty which is 100% of the due tax or Rs. 10000 – whichever is earlier.</p>
         </div>
         <div data-port-id="child_ans_div_12" class="accordaion-main-div">
            <h4 class="accordion-cus-head">What is Composition Scheme?</h4>
         </div>
         <div id="child_ans_div_12" style="display: none;" class="child-ans-div-1">
            <p class="child-ans-text">Composition Scheme is a easy process under the GST law for all the taxpayers who can avoid difficult formalities pay the GST at a fixed rate based on the turnover. The taxpayers, whose revenue is less than Rs. 1 crore, can opt for this scheme. But recently the CBIC announced the increase the threshold limit from Rs. 1 crore to Rs. 1.5 crores. In case of North eastern states and Himachal Pradesh, the limit is now Rs. 75 lakhs. The GST rate under the composition scheme is only 1 % of the annual turnover in case of the manufacturer or traders of products.</p>
         </div>
         <div data-port-id="child_ans_div_13" class="accordaion-main-div">
            <h4 class="accordion-cus-head">What is the GST Turnover Limit?</h4>
         </div>
         <div id="child_ans_div_13" style="display: none;" class="child-ans-div-1">
            <p class="child-ans-text">In case of sale of goods, if the business exceeds 40 lakhs, in case of service provider if it exceeds 20 lakhs, and in case of Special category states if it exceeds 10 lakhs, then one has to register for GST.</p>
         </div>
         <div data-port-id="child_ans_div_14" class="accordaion-main-div">
            <h4 class="accordion-cus-head">What is the time limit to register for GST?</h4>
         </div>
         <div id="child_ans_div_14" style="display: none;" class="child-ans-div-1">
            <p class="child-ans-text">A person liable for GST registration must apply for the GST within 30 days from the date he becomes liable for GST.</p>
         </div>
         <div data-port-id="child_ans_div_15" class="accordaion-main-div">
            <h4 class="accordion-cus-head">Is PAN mandatory for the registration of GST?</h4>
         </div>
         <div id="child_ans_div_15" style="display: none;" class="child-ans-div-1">
            <p class="child-ans-text">PAN is mandatory for general taxpayers and also the casual taxpayers entitled under GST.</p>
         </div>
         <div data-port-id="child_ans_div_16" class="accordaion-main-div">
            <h4 class="accordion-cus-head">Can a business operate across India with one GST number?</h4>
         </div>
         <div id="child_ans_div_16" style="display: none;" class="child-ans-div-1">
            <p class="child-ans-text">An entity operating in multiple states will have to register separately for each state from where supplies of goods or services take place.</p>
         </div>
         <div data-port-id="child_ans_div_17" class="accordaion-main-div">
            <h4 class="accordion-cus-head">What is the validity of GST certificate?</h4>
         </div>
         <div id="child_ans_div_17" style="display: none;" class="child-ans-div-1">
            <p class="child-ans-text">Once the GST Certificate is issued, the registration is valid until it is surrendered, cancelled or suspended. Only GST certificate issued to non-resident taxable person and casual taxable person have a limited validity period.</p>
         </div>
      </div>
      <div style="margin-bottom: 25px;" class="col-sm-12 col-md-6 why-us-img-div">
         <div data-port-id="child_ans_div_18" class="accordaion-main-div">
            <h4 class="accordion-cus-head">Who is a Casual Taxable Person?</h4>
         </div>
         <div id="child_ans_div_18" style="display: none;" class="child-ans-div-1">
            <p class="child-ans-text">Casual taxable person is one who occasionally undertakes transaction within a taxable territory where he does not have a fixed place of business.</p>
         </div>
         <div data-port-id="child_ans_div_19" class="accordaion-main-div">
            <h4 class="accordion-cus-head">Who is a Non-resident Taxable Person?</h4>
         </div>
         <div id="child_ans_div_19" style="display: none;" class="child-ans-div-1">
            <p class="child-ans-text">When a taxable person resides outside India to undertake the transaction occasionally in the country and does not have a fixed place of business in India, he/she is a non-resident taxable person.</p>
         </div>
         <div data-port-id="child_ans_div_20" class="accordaion-main-div">
            <h4 class="accordion-cus-head">How long does it take to obtain GSTIN?</h4>
         </div>
         <div id="child_ans_div_20" style="display: none;" class="child-ans-div-1">
            <p class="child-ans-text">GSTIN is allotted within 24 hours after submitting GST application with all necessary documents on Govt. portal.</p>
         </div>
         <div data-port-id="child_ans_div_21" class="accordaion-main-div">
            <h4 class="accordion-cus-head">How to get GST certificate?</h4>
         </div>
         <div id="child_ans_div_21" style="display: none;" class="child-ans-div-1">
            <p class="child-ans-text">GST certificate is provided in soft copy format by Govt. of India. After the allotment of GSTIN, GST certificate can be downloaded from the GST portal at anytime by the applicant.</p>
         </div>
         <div data-port-id="child_ans_div_22" class="accordaion-main-div">
            <h4 class="accordion-cus-head">When do you need to register under the GST Act?</h4>
         </div>
         <div id="child_ans_div_22" style="display: none;" class="child-ans-div-1">
            <p class="child-ans-text">You need to register within 30 days since your liability arises. In case of Casual Taxpayers and Non-residential taxable person, the person needs to register under GST 5 days prior to the commencement of the business.</p>
         </div>
         <div data-port-id="child_ans_div_23" class="accordaion-main-div">
            <h4 class="accordion-cus-head">What is ARN & TRN in GST registration?</h4>
         </div>
         <div id="child_ans_div_23" style="display: none;" class="child-ans-div-1">
            <p class="child-ans-text">ARN stands for Application Reference Number. It is a proof of successful submission of the application to GST servers. It is generated after TRN or Temporary Reference Number and uploading of required documents.</p>
         </div>
         <div data-port-id="child_ans_div_24" class="accordaion-main-div">
            <h4 class="accordion-cus-head">How to Choose HSN or SAC Code during GST Registration?</h4>
         </div>
         <div id="child_ans_div_24" style="display: none;" class="child-ans-div-1">
            <p class="child-ans-text">HSN or SAC code refers to Goods and Services code. At Foundida, the GST expert helps you to choose the suitable HSN or SAC Code after getting the details about the business.</p>
         </div>
         <div data-port-id="child_ans_div_25" class="accordaion-main-div">
            <h4 class="accordion-cus-head">Do I need to be physically present during the GST registration?</h4>
         </div>
         <div id="child_ans_div_25" style="display: none;" class="child-ans-div-1">
            <p class="child-ans-text">
               <bold>Foundida</bold>
               offers the entire GST Registration service online. You don’t need to be physically present during the registration. You only need a device (phone/computer), internet and required documents. We will get the job done for you, even if you are at the remotest location of the country.
            </p>
         </div>
         <div data-port-id="child_ans_div_26" class="accordaion-main-div">
            <h4 class="accordion-cus-head">When to apply for multiple GST registrations?</h4>
         </div>
         <div id="child_ans_div_26" style="display: none;" class="child-ans-div-1">
            <p class="child-ans-text">Under the GST regime, only one registration is allowed against one PAN. But when a business is operated in more than one state must have separate GST numbers for each state. Businesses with multiple verticals within a state need to register for each of the verticals.</p>
         </div>
         <div data-port-id="child_ans_div_27" class="accordaion-main-div">
            <h4 class="accordion-cus-head">Is the GST threshold limit the same for all Indian states?</h4>
         </div>
         <div id="child_ans_div_27" style="display: none;" class="child-ans-div-1">
            <p class="child-ans-text">The exemption limit is a supply turnover of Rs. 20 lac for businesses in all except for the Indian states in the northeast region. Businesses in Arunachal Pradesh, Assam, Meghalaya, Manipur, Mizoram, Nagaland, and Tripura must get a GST registration if their supply turnover exceeds Rs. 10 lac. As mentioned above, this threshold limit applies only to businesses that operate within their home state. A business that conducts trade with another state must seek registration regardless of turnover.</p>
         </div>
         <div data-port-id="child_ans_div_28" class="accordaion-main-div">
            <h4 class="accordion-cus-head">Do I need a commercial address for the registration?</h4>
         </div>
         <div id="child_ans_div_28" style="display: none;" class="child-ans-div-1">
            <p class="child-ans-text">If you are handling your business from your home, then you can register the residential address with the GST. It requires only the address proof such as electricity bill, NOC, sale deed or link agreement.</p>
         </div>
         <div data-port-id="child_ans_div_29" class="accordaion-main-div">
            <h4 class="accordion-cus-head">When Digital Signature is required for the GST Registration?</h4>
         </div>
         <div id="child_ans_div_29" style="display: none;" class="child-ans-div-1">
            <p class="child-ans-text">DSC is required in case of private limited company, LLP etc. In case of proprietorship firm or partnership firm, DSC is not required.</p>
         </div>
         <div data-port-id="child_ans_div_30" class="accordaion-main-div">
            <h4 class="accordion-cus-head">Do I need a bank account for the GST registration?</h4>
         </div>
         <div id="child_ans_div_30" style="display: none;" class="child-ans-div-1">
            <p class="child-ans-text">Yes you do need a personal saving account or current account. If you are starting a new business and have a personal saving account, then it can be provided and after the registration is done, you can apply for the new current account depending on the GST certificate.</p>
         </div>
         <div data-port-id="child_ans_div_31" class="accordaion-main-div">
            <h4 class="accordion-cus-head">What action required after the GST Registration?</h4>
         </div>
         <div id="child_ans_div_31" style="display: none;" class="child-ans-div-1">
            <p class="child-ans-text">After applying for the GST registration, each month you have to raise GST invoice for your customers or clients and charge proper GST amount to them. At the end of the month you have to pay the taxes online.</p>
         </div>
         <div data-port-id="child_ans_div_32" class="accordaion-main-div">
            <h4 class="accordion-cus-head">Is there any chance of rejection during GST registration?</h4>
         </div>
         <div id="child_ans_div_32" style="display: none;" class="child-ans-div-1">
            <p class="child-ans-text">If you don’t submit correct required documents during submission of registration, then the jurisdiction officer shall reject the application. You have to apply again along with proper documents.</p>
         </div>
         <div data-port-id="child_ans_div_33" class="accordaion-main-div">
            <h4 class="accordion-cus-head">What documents are required as a Place of Business proof?</h4>
         </div>
         <div id="child_ans_div_33" style="display: none;" class="child-ans-div-1">
            <p class="child-ans-text">We require the copy of electricity bill or NOC from the landlord in case of rented place. NOC format will be share by our company during registration process.</p>
         </div>
         <div data-port-id="child_ans_div_34" class="accordaion-main-div">
            <h4 class="accordion-cus-head">How do I have to send my documents to Foundida?</h4>
         </div>
         <div id="child_ans_div_34" style="display: none;" class="child-ans-div-1">
            <p class="child-ans-text">We accept documents over e-mail and whatsapp. Don’t worry, we have a 100% confidential policy and we do not share our customers documents with anyone.</p>
         </div>
         <div data-port-id="child_ans_div_35" class="accordaion-main-div">
            <h4 class="accordion-cus-head">What is the AATO Scheme amendment in GST Return filing?</h4>
         </div>
         <div id="child_ans_div_35" style="display: none;" class="child-ans-div-1">
            <p class="child-ans-text">On the recommendations of the GST Council, a new scheme of Quarterly Returns with Monthly Payments (QRMP) will be introduced from 1st January 2021. </p>
            <p>Under this scheme, taxpayers with upto Rs. 5 Crores Aggregate Annual Turnover (AATO) in the previous and the current financial year would be given an option to file their Return/Statement in Form GSTR-1 and Form GSTR-3B <b>Quarterly</b> with a simple payment challan for the first two months of the quarter. </p>
         </div>
      </div>
   </div>
</div>
<!-------------------- here is the section of footer accordaion--------->
<!-- Facebook Pixel Code -->
<script>
   // !function(f,b,e,v,n,t,s)
   // {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
   // n.callMethod.apply(n,arguments):n.queue.push(arguments)};
   // if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
   // n.queue=[];t=b.createElement(e);t.async=!0;
   // t.src=v;s=b.getElementsByTagName(e)[0];
   // s.parentNode.insertBefore(t,s)}(window, document,'script',
   // 'https://connect.facebook.net/en_US/fbevents.js');
   // fbq('init', '1180229209029705');
   // fbq('track', 'PageView');
   // fbq('track', 'ViewContent', {
   //    content_name: 'GST Registration',
   //    content_ids: ['GST'],
   //    content_type: 'product',
   //    value: 1499,
   //    currency: 'INR'
   // });
</script>
<noscript><!-- <img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=1180229209029705&ev=PageView&noscript=1"/> --></noscript>
<!-- End Facebook Pixel Code -->

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
</script>

<script type="text/javascript">
   function ValidateStepOne() {
      var business_type = $('[name=business_type]').val();
      var name = $('[name=name]').val();
      var email = $('[name=email]').val();
      var mobile = $('[name=mobile]').val();
      // var gender = $('[name=gender]').val();   
      // var pan = $('[name=pan]').val();   
      var firm_name = $('[name=firm_name]').val();
      var premises_type = $('[name=premises_type]').val();
      // var complete_address = $('[name=complete_address]').val();   
      var bussiness_activity = $('[name=bussiness_activity]').val();
      var state = $('[name=state]').val();
      var str1 = removeSpaces(document.getElementById('txtCaptcha').value);
      var str2 = removeSpaces(document.getElementById('captcha_code').value);
      var flag = true;

      if (business_type == "") {
         $("#business_type").css('border-color', 'red');
         $("#error_business_type").show();
         location.href = "#business_type";
         flag = false;
      }

      if (name == "") {
         $("#name").css('border-color', 'red');
         $("#error_name").show();
         location.href = "#name";
         flag = false;
      }

      if (email == "") {
         $("#email").css('border-color', 'red');
         $("#error_email").show();
         location.href = "#email";
         flag = false;
      } else {
         var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
         if (!filter.test(email)) {
            alert('Please provide a valid email address');
            return false;
         }
      }

      if (mobile == "") {
         $("#mobile").css('border-color', 'red');
         $("#error_mobile").show();
         location.href = "#mobile";
         flag = false;
      }

      if (mobile != "") {
         if (mobile.length != 10) {
            $("#mobile").css('border-color', 'red');
            $("#error_mobile").show();
            location.href = "#mobile";
            flag = false;
         }
      }
      if (firm_name == "") {
         $("#firm_name").css('border-color', 'red');
         $("#error_firm").show();
         location.href = "#firm_name";
         flag = false;
      }

      if (premises_type == "") {
         $("#premises_type").css('border-color', 'red');
         $("#error_premises_type").show();
         location.href = "#premises_type";
         flag = false;
      }


      if (state == "") {
         $("#state").css('border-color', 'red');
         $("#error_state").show();
         location.href = "#state";
         flag = false;
      }

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

      if (str2 == "") {
         alert("Please enter the captcha");
         $("#captcha_code").css('border-color', 'red');
         flag = false;
      } else {
         if (str1 != str2) {
            alert("Captcha not matched");
            flag = false;
         }
      }
      return flag;
   }

   function ValidateEmail(inputText) {
      var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
      if (inputText.value.match(mailformat)) {
         return true;
      } else {
         return false;
      }
   }

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

         no_of_employees: {
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
            phase_type = $('#phase_type').val(),
            source_service = $("#source_service").val(),
            state = $('#state option:selected').val(),
            form_name = 'GST',
            captcha = $('#captcha_code').val(),
            gclid_field = $('#gclid_field').val(),
            is_prompted_whatsapp = 0;
         if ($('input[name="is_prompted_whatsapp"]').prop('checked') == true) {
            is_prompted_whatsapp = 1;
         }

         let landing_uri = $('#landing_uri').val();

         $.ajax({
            url: "../../payment/submit_gst-registration-or.php",
            method: 'post',
            data: {
               name: name,
               email: email,
               mobile: mobile,
               state: state,
               form_name: form_name,
               is_prompted_whatsapp: is_prompted_whatsapp,
               phase_type: phase_type,
               source_service: source_service,
               mode: 1,
               gclid_field: gclid_field,
               landing_uri: landing_uri
            },
            dataType: "json",
            success: function(data) {
               if (data.success) {
                  $("#gtm_visibility").show();
                  $('#oliid').val(data.oli_id);
                  $('#first_div').hide();
                  $('#second_div').show();

                  if (Campaignid !== null || Campaignid != '' || utm_source !== null || utm_source != '') {

                     /* Saharukh 03-05-2023 */
                     if (typeof gtag != 'undefined') {
                        // gtag('event', 'conversion', {'send_to': 'AW-767312690/LbiACNzh1L4DELKG8e0C'});
                     }
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
      $('#captcha_holder').click();
      if ($('.oli-validate-form').valid()) {
         verifyCaptcha(r);
         // submitOli(r);
      }
   })

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

   function submitOli(btn) {
      btn.attr('type', 'submit')
         .html('Please Wait...')
         .css('pointer-events', 'none');
      var oli_id = $('#oliid').val();
      var datastring = $('.oli-validate-form').serialize();
      $.ajax({
         url: "../../payment/submit_gst-registration-or.php",
         method: 'post',
         data: datastring,
         dataType: "json",
         success: function(data) {

            if (data.success) {
               btn.html('Redirecting to Payment Lobby...');
               alert(data.msg);
               window.location.href = 'https://www.foundida.com/payment/payment-lobby.php?oli-id=' + oli_id;
            } else {
               alert(data.msg);
               window.history.back();
            }
         }
      });
   }

   // function checkTimer(){
   //    var currentdate= new Date();
   //    var hrs = currentdate.getHours();
   //    if((hrs>=21 && hrs<=23) || (hrs==0 )){
   //       return true;
   //    }else{
   //       return false;
   //    }
   // }

   function get_call_pay(id) {
      var oli_id = $('#oliid').val();
      if (id == 'pay_now') {

         window.location.href = 'https://www.foundida.com/payment/payment-lobby.php?oli-id=' + oli_id;
      } else if (id == 'call_now') {
         $.ajax({
            url: "../../payment/submit_gst-registration-or.php",
            method: 'post',
            data: {
               oli_id: oli_id,
               call: 'now'
            },
            dataType: "json",
            success: function(data) {
               // console.log(data);
               if (data.success) {

                  alert(data.msg);
                  location.reload();
               } else {
                  alert(data.msg);
               }
            }
         });

      } else {
         alert('Thank You! Our Agent will contact You Soon');
         location.reload();
      }
   }

   function form_submit() {
      var str1 = removeSpaces(document.getElementById('txtCaptcha').value);
      var str2 = removeSpaces(document.getElementById('captcha_code').value);
      var service_price = $("input[name=price]:checked").val();
      var flag = true;
      if (str2 == "") {
         alert("Please enter the captcha");
         $("#captcha_code").css('border-color', 'red');
         flag = false;
      } else if (str1 != str2) {
         alert("Captcha not matched");
         flag = false;
      } else {}

      return flag;
   }
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<script type="text/javascript">
   //jQuery time
   var current_fs, next_fs, previous_fs; //fieldsets
   var left, opacity, scale; //fieldset properties which we will animate
   var animating; //flag to prevent quick multi-click glitches

   window.wa_service_name = 'GST Registration';
   window.wa_service_code = 'GST';

   function nextToFinal() {
      if (animating) return false;
      animating = true;

      current_fs = $(this).parent();
      next_fs = $(this).parent().next();

      //activate next step on progressbar using the index of next_fs
      $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

      //show the next fieldset
      next_fs.show();
      //hide the current fieldset with style
      current_fs.animate({
         opacity: 0
      }, {
         step: function(now, mx) {
            //as the opacity of current_fs reduces to 0 - stored in "now"
            //1. scale current_fs down to 80%
            scale = 1 - (1 - now) * 0.2;
            //2. bring next_fs from the right(50%)
            left = (now * 50) + "%";
            //3. increase opacity of next_fs to 1 as it moves in
            opacity = 1 - now;
            current_fs.css({
               'transform': 'scale(' + scale + ')',
               'position': 'absolute'
            });
            next_fs.css({
               'left': left,
               'opacity': opacity
            });
         },
         duration: 800,
         complete: function() {
            current_fs.hide();
            animating = false;
         },
         //this comes from the custom easing plugin  
         easing: 'easeInOutBack'
      });
   }

   $(".previous").click(function() {
      if (animating) return false;
      animating = true;

      current_fs = $(this).parent();
      previous_fs = $(this).parent().prev();

      //de-activate current step on progressbar
      $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

      //show the previous fieldset
      previous_fs.show();
      //hide the current fieldset with style
      current_fs.animate({
         opacity: 0
      }, {
         step: function(now, mx) {
            //as the opacity of current_fs reduces to 0 - stored in "now"
            //1. scale previous_fs from 80% to 100%
            scale = 0.8 + (1 - now) * 0.2;
            //2. take current_fs to the right(50%) - from 0%
            left = ((1 - now) * 50) + "%";
            //3. increase opacity of previous_fs to 1 as it moves in
            opacity = 1 - now;
            current_fs.css({
               'left': left
            });
            previous_fs.css({
               'transform': 'scale(' + scale + ')',
               'opacity': opacity
            });
         },
         duration: 800,
         complete: function() {
            current_fs.hide();
            animating = false;
         },
         //this comes from the custom easing plugin
         easing: 'easeInOutBack'
      });
   });

   // $(".submit").click(function(){
   //    return false;
   // })
   $('.owl-one').owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      autoplay: true,
      autoplayTimeout: 2000,
      autoplayHoverPause: true,
      responsive: {
         0: {
            items: 1,
            nav: true,
            stagePadding: 20,
         },
         600: {
            items: 3
         },
         1000: {
            items: 2
         }
      }
   });
   $('.owl-two').owlCarousel({
      loop: false,
      margin: 35,
      nav: true,
      responsive: {
         0: {
            items: 1,
            nav: false
         },
         600: {
            items: 3
         },
         1000: {
            items: 4
         }
      }
   });

   $('.gst_rdiobtn').click(function() {
      $('.price_active').toggleClass('price_active');
      $(this).toggleClass('price_active');
      $('.gst_rdiobtn label').css("cursor", "pointer");
   });

   $(document).on('click', '#btnrefresh', function() {
      var url = window.location.origin + '/payment/captcha.php?' + Math.random();
      document.getElementById('captcha_holder').src = url;
      document.getElementById('captcha_code').value = '';
      return false;
   });
</script>
@endsection
