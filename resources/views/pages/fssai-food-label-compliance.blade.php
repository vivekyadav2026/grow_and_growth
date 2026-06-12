@extends('layouts.app')

@section('meta')
<title>FSSAI Food Label Compliance Support Services</title>
<meta name="description" content="Get Assistance with food labels for FSSAI and packaging requirements. identify potential compliance gaps, improve declarations and support smoother market readiness.">
<link rel="canonical" href="https://www.onlinelegalindia.com/services/fssai-food-labeling-compliance/" />
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.onlinelegalindia.com/services/fssai-food-labeling/">
<meta property="og:image" content="https://www.onlinelegalindia.com/images/fssai-food-labeling/is-your-food-label-ready-for-compliance-review.webp">
<meta property="og:title" content="Is Your Food Label Ready for Compliance Review?">
<meta property="og:site_name" content="OnlineLegalIndia">
<meta property="og:description" content="Identify potential packaging and labeling issues before launch. Get assisted review support for FSSAI declarations, packaging details and compliance requirements.">
<meta property="og:locale" content="en-IN">
@endsection

@section('styles')
<style>
   .card-block th {
      border: 1px solid #dbdbdb;
      padding: 7px;
      text-align: center;
      background: #eee;
   }

   .card-block td h3 {
      color: #f06906;

   }

   .gap_form {
      margin-bottom: 13px;
   }

   #contact input[type="button"] {
      margin-top: 20px !important;
   }

   img.food__img1 {
      width: unset;
   }

   .food__cont1 {
      margin-bottom: 0px;
   }

   /* 17 dec-2022 start */
   .benifits_li9 {
      position: relative;
      padding-left: 24px;
   }

   .benifits_li9::before {
      content: "\f058";
      font-family: "Font Awesome 5 Free";
      color: #18ba60;
      font-size: 12px;
      display: inline-table;
      position: absolute;
      top: 0;
      left: 0;
   }

   .benifts_heading99 {
      font-size: 20px !important;
   }

   .benifts_heading99_p {
      color: #fff;
      font-size: 13px;
      margin-bottom: 15px;
   }

   .fssai_licence_renewal_text p {
      color: #ffffff;
      font-size: 14px;
      line-height: 23px;
      margin-bottom: 43px;
   }

   .fssai_licence_renewal_text p:last-child {
      margin-bottom: 0;
   }

   .card-block td h3 span {
      display: block;
      color: #666;
      font-size: 10px;
      margin-right: 6px;
   }

   .h3_block h3 {
      display: flex;
      align-items: center;
   }

   #contact h4 {
      font-size: 16px;
   }

   .new_apply_now {
      font-size: 16px !important;
      font-weight: 400;
   }

   .new_center {
      text-align: center;
   }

   .custm_gr_hght {
      margin-top: 20px;
   }

   #contact p {
      display: block;
      font-size: 20px;
      font-weight: bold;
      margin-bottom: 10px;
   }



#imagePopup .modal-body {
    padding: 15px;
    overflow: auto;
    max-height: 85vh;
    white-space: nowrap;
    text-align: left;
}

#imagePopup #zoomImage {
    max-width: none !important;
    width: 1200px; /* zoom size */
    height: auto;
    display: inline-block;
}

   /* Tablet Responsive Classes */
   .tab-responsive-padding {
      padding: 15px 10px;
   }

   .tab-responsive-font {
      font-size: 14px;
   }

   .tab-responsive-margin {
      margin-bottom: 15px;
   }

   .tab-responsive-h2 {
      font-size: 24px;
   }

   .tab-responsive-h3 {
      font-size: 16px;
   }

   .tab-responsive-h4 {
      font-size: 15px;
   }

   /* 17 dec-2022 end */
   @media (max-width: 767px) {
      #contact p {
         font-size: 16px;
      }

      img.food__img1 {
         width: 100px;
      }

      .card-block td h3 span {
         font-size: 10px;
      }

      .h3_block h3 {
         flex-direction: column;
      }

      .card-block th {
         font-size: 10px;
      }

      .hidden_block {
         font-size: 12px;
      }

      .new_class_h3 {
         font-size: 16px !important;
      }

      .card-header h3 {
         text-align: center;
      }

   }

   /* Tablet Responsive - 768px to 1024px */
   @media only screen and (min-width: 768px) and (max-width: 1024px) {

      .tablet-eq-col {
         float: left !important;
         width: 50% !important;
         max-width: 50% !important;
         margin-left: 0 !important;
         box-sizing: border-box;
      }

      /* Form and Sections */
      #contact {
         padding: 20px 15px;
      }

      #contact p {
         font-size: 16px;
      }

      #contact h4 {
         font-size: 15px;
      }

      /* Headings Responsive */
      h1 {
         font-size: 28px !important;
      }

      h2 {
         font-size: 22px;
      }

      h3 {
         font-size: 18px;
      }

      h4 {
         font-size: 14px;
      }

      /* Package Boxes */
      .compliance_package_box {
         padding: 20px 15px;
         margin-bottom: 20px;
      }

      .compliance_package_box h4 {
         font-size: 14px;
         margin-bottom: 10px;
      }

      .package_price {
         font-size: 24px;
         margin: 15px 0;
      }

      .compliance_package_box ul li {
         font-size: 13px;
         padding: 6px 0;
      }

      /* Work Steps */
      .work_step {
         padding: 15px 10px;
         margin: 10px 5px;
      }

      .step_number {
         width: 40px;
         height: 40px;
         font-size: 18px;
      }

      .work_step p {
         font-size: 13px;
      }

      /* Column Adjustments */
      .col-md-4 {
         padding: 10px 8px;
      }

      .col-md-5 {
         padding: 10px 8px;
      }

      .col-md-6 {
         padding: 10px 8px;
      }

      .col-md-7 {
         padding: 10px 8px;
      }

      /* Text & Content */
      p {
         font-size: 14px;
         line-height: 20px;
      }

      /* Image Responsive */
      img.food__img1 {
         width: 80px;
      }

      .img-responsive {
         max-height: auto;
      }

      /* Radio Button Boxes */
      .gst_rdiobtn {
         padding: 15px;
      }

      .gst_rdiobtn p {
         font-size: 16px;
         margin: 5px 0;
      }

      .gst_rdiobtn ul li {
         font-size: 12px;
         padding: 4px 0;
      }

      /* Modal Responsive */
      #imagePopup #zoomImage {
         width: 900px !important;
      }

      /* Section Padding */
      .new_common_section_padding {
         padding: 40px 20px;
      }

      /* FAQ */
      .accordaion-main-div {
         padding: 15px;
      }

      .accordion-cus-head {
         font-size: 14px;
      }

      .child-ans-text {
         font-size: 13px;
      }

      /* Button Responsive */
      .btn {
         font-size: 13px;
         padding: 10px 20px;
      }

      /* Benefits List */
      .benefits_title {
         font-size: 14px;
         margin: 15px 0;
      }

      ul li {
         font-size: 13px;
      }

      /* Gap Adjustments */
      .gap_form {
         margin-bottom: 10px;
      }

      .gap_form_button {
         margin-top: 15px !important;
      }

      /* Table Responsive */
      .card-block th {
         font-size: 11px;
         padding: 5px;
      }

      .card-block td {
         font-size: 12px;
         padding: 5px;
      }

      .card-block td h3 {
         font-size: 13px;
      }

      .card-block td h3 span {
         font-size: 10px;
      }

      /* Flex Adjustments */
      .flex_row {
         flex-direction: column;
      }

      .tab-eq-row {
         flex-direction: row !important;
         flex-wrap: wrap !important;
      }

      .tab-eq-row > .tablet-eq-col {
         width: 50% !important;
         max-width: 50% !important;
      }

      /* Hidden Block */
      .hidden_block {
         font-size: 13px;
      }

      .new_class_h3 {
         font-size: 14px !important;
      }

      /* Form Input Responsive */
      input[type="text"],
      input[type="email"],
      input[type="tel"],
      select {
         font-size: 13px;
         padding: 8px 10px;
      }

      input[type="button"],
      button {
         font-size: 13px;
         padding: 10px 15px;
      }

      /* Remove Offsets for Tablets */
      .col-sm-offset-0 {
         margin-left: 0;
      }

      .col-md-offset-2 {
         margin-left: 0;
      }

      .col-sm-offset-1 {
         margin-left: 0;
      }

      .col-md-offset-1 {
         margin-left: 0;
      }

      /* Breadth Adjustments */
      .container {
         padding: 0 15px;
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
<div class="fssai_registration_ganguly_sukhala_order_change">
   <section class="fssairgsoc_modification">
      <div class="container">
         <div class="row align-items-center">

            <!-- Left Content -->
            <div class="col-md-7 col-sm-12 tablet-eq-col">
               <div class="fssairgsoc_modification_left">

                  <h1>
                     Is Your Food Label <br>
                     Market-Ready & <br>
                     <span>FSSAI Compliant?</span>
                  </h1>

                  <p>
                     One missing declaration can lead to marketplace objections,
                     compliance concerns, penalties, delayed launches, and customer trust issues.
                  </p>

                  <p>
                     Get your product labels professionally reviewed before they reach the market.
                  </p>

                  <p>
                     Protect your brand. Reduce risks. Launch confidently.
                  </p>

                  <a href="#contact" class="fssai_btn">
                     Get Label Review Started
                     <span>→</span>
                  </a>

               </div>
            </div>

            <!-- Right Image -->
            <div class="col-md-5 col-sm-12 tablet-eq-col">
               <div class="fssairgsoc_modification_right">
                  <img src="https://www.onlinelegalindia.com/images/fssai-food-labeling/hero-section-sourav-image.webp" alt="Sourav Ganguly" class="img-responsive lazy">
               </div>
            </div>

         </div>
      </div>
   </section>



   <section class="from_order_change_three fssairgsoc_three new_common_section_padding new_background_color_two">
      <div class="row">
         <div class="container fssairgsoc_three_custom_container">

            <div class="col-md-6 col-sm-12 tablet-eq-col">
               <div class="new_background_color_two_inner new_background_color_two_inner_destop">
                  <div class="nbcti_img">
                     <img src="https://www.onlinelegalindia.com/images/fssai-food-labeling/form-seection-image.webp" alt="saurabh shukla" class="img-responsive lazy">
                  </div>
                  <div class="nbcti_text">
                     <h2>What is Food Label Compliance?</h2>
                     <p class="first_p">Food Label Compliance ensures that packaged food products meet applicable declaration and packaging requirements under FSSAI and Legal Metrology frameworks.</p>
                     <p>Incorrect labels can create legal and commercial problems—from marketplace rejections to delayed product launches. Properly reviewed labels improve transparency, support smoother distribution, and help build customer confidence.</p>
                  </div>
               </div>
            </div>

            <div class="col-md-6 col-sm-12 tablet-eq-col pull_left_width_tab fssairgsoc_three_custom_container_one">
               <form id="contact" class="oli-validate-form" method="POST" action="../../payment/submit_fssai_food_labelling_wcv.php">
                  <p class="new_class_h3">Need Food Labeling and Packaging Compliance Assistance?</p>
                  <!-- <h4 class="new_apply_now">Apply Now</h4> -->
                  <fieldset>
                     <input type="hidden" id="gclid_field" name="gclid_field" value="">
                     <input type="hidden" id="landing_uri" name="landing_uri" value="https://www.onlinelegalindia.com/services/fssai-food-labeling-compliance/">

                     <fieldset id="first_div">
                        <div class="from_name gap_form">
                           <label>Name</label>
                           <input placeholder="Name" name="name" id="name" type="text">
                        </div>
                        <div class="from_email gap_form">
                           <label>Email</label>
                           <input placeholder="Email" id="email" name="email" type="email">
                        </div>
                        <div class="from_mobile gap_form">
                           <label>Mobile</label>
                           <input placeholder="Mobile (Without 0 or +91)" id="mobile" name="mobile" type="tel" maxlength="10">
                        </div>
                        <div class="from_state gap_form">
                           <label>Select State</label>
                           <select name="state" id="state">
                              <option value="">State</option>
                              <option value="Andhra Pradesh">Andhra Pradesh</option>
                              <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                              <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                              <option value="Assam">Assam</option>
                              <option value="Bihar">Bihar</option>
                              <option value="Chhattisgarh">Chhattisgarh</option>
                              <option value="Chandigarh">Chandigarh</option>
                              <option value="Delhi">Delhi</option>
                              <option value="Daman and Diu and Dadra and Nagar Haveli">Daman and Diu and Dadra and Nagar Haveli</option>
                              <option value="Goa">Goa</option>
                              <option value="Gujarat">Gujarat</option>
                              <option value="Haryana">Haryana</option>
                              <option value="Himachal Pradesh">Himachal Pradesh</option>
                              <option value="Jammu &amp; Kashmir">Jammu &amp; Kashmir</option>
                              <option value="Jharkhand">Jharkhand</option>
                              <option value="Karnataka">Karnataka</option>
                              <option value="Kerala">Kerala</option>
                              <option value="Lakshadweep">Lakshadweep</option>
                              <option value="Ladakh">Ladakh</option>
                              <option value="Madhya Pradesh">Madhya Pradesh</option>
                              <option value="Maharashtra">Maharashtra</option>
                              <option value="Manipur">Manipur</option>
                              <option value="Meghalaya">Meghalaya</option>
                              <option value="Mizoram">Mizoram</option>
                              <option value="Nagaland">Nagaland</option>
                              <option value="Odisha">Odisha</option>
                              <option value="Punjab">Punjab</option>
                              <option value="Puducherry">Puducherry</option>
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

                        <input type="hidden" name="csrf_token" id="csrf_token" value="395a3f0ae06653d32f03d15fa8c600b2a132429d38f4e04b9f23a916a7e81333">
                        <input type="hidden" id="oliid" name="oliid" value="">
                        <div class="form_check">
   <label class="custom_check">I have read & agreed to the company's Terms and Conditions, disclaimer and refund policy, and also ready to accept calls, SMS, emails, etc. 
      <input type="checkbox" data-degree="°" name="is_prompted_whatsapp" checked value="1">
      <span class="form_checkmark"></span>
    </label>
</div>

                        <input type="button" name="next" id="nextBtn" class="btn next action-button gap_form_button" value="Proceed" />
                     </fieldset>
                     <fieldset id="second_div" style="display:none;">
                        <div id="gtm_visibility">
                           <div class="gst_rdiobtn price_active">
                              <label for="price_1" style="cursor: pointer;">
                                 <input type="radio" id="price_1" name="form_price" value="FSSAIFLCSP||5999" checked="" data-gtm-form-interact-field-id="1">&nbsp;<p>Rs
                                    5999</p>
                                 <ul>
                                    <li>Starter Package</li>
                                    <li>FSSAI declaration review</li>
                                    <li>Ingredient verification</li>
                                    <li>Veg/Non-Veg symbol review</li>
                                    <li>License display check</li>
                                    <li>MRP and quantity review</li>
                                    <li>Batch details review</li>
                                    <li>Deficiency sheet</li>
                                 </ul>
                              </label>
                           </div>
                           <!-- <button type="button" style onclick="package_detail()">+ More</button> -->
                           <div class="row">
                              <a href="javascript:void(0)" style="margin-bottom: 10px;display: block;color: #000;font-weight: 600;font-size: 15px;" onclick="package_detail()">+ More</a>
                           </div>

                           <div id="more_package" style="display:none;">
                              <div class="gst_rdiobtn">
                                 <label for="price_2" style="cursor: pointer;">
                                    <input type="radio" id="price_2" name="form_price" value="FSSAIFLCAP||9999" data-gtm-form-interact-field-id="0">&nbsp;<p>Rs 9999
                                    </p>
                                    <ul>
                                       <li>Advanced Package</li>
                                       <li>Legal Metrology review</li>
                                       <li>Nutritional format review</li>
                                       <li>Allergen review</li>
                                       <li>Packaging declaration validation</li>
                                       <li>Customer care verification</li>
                                       <li>Two revision rounds</li>
                                    </ul>
                                 </label>
                              </div>


                           </div>
                           <input type="hidden" name="form_name" id="form_name" value="TMR">

                           <!-- <div class="captcha_box">
                                    <img id="captcha_holder" src="<? php // echo $site_path; 
                                                                  ?>payment/captcha.php" alt="Captcha">
                                    <img src="https://www.onlinelegalindia.com/images/capta.webp" id="btnrefresh" alt="Captcha">
                                    <input type="text" name="captcha_code" id="captcha_code" class="pull-right" maxlength="4"
                                        onkeyup="this.value = this.value.replace(/[^\d]+/g, '');"
                                        placeholder="Enter the captcha here..">
                                </div> -->

                           <input type="hidden" id="is_submitted" value="0">
                           <button type="button" id="contact-submit" data-submit="...Sending">Proceed Now</button>
                        </div>
                     </fieldset>
                  </fieldset>
               </form>
            </div>

            




         </div>
      </div>
   </section>

   <div class="new_background_color_two_inner new_background_color_two_inner_mobile">
      <div class="nbcti_img">
         <img src="https://www.onlinelegalindia.com/images/fssai-food-labeling/form-seection-image.webp" alt="saurabh shukla" class="img-responsive lazy">
      </div>
      <div class="nbcti_text">
         <h2>What is Food Label Compliance?</h2>
         <p class="first_p">Food Label Compliance ensures that packaged food products meet applicable declaration and packaging requirements under FSSAI and Legal Metrology frameworks.</p>
         <p>Incorrect labels can create legal and commercial problems—from marketplace rejections to delayed product launches. Properly reviewed labels improve transparency, support smoother distribution, and help build customer confidence.</p>
      </div>
   </div>

</div>




<section class="compliance_support_section new_common_section_padding">
   <div class="container">
      <div class="row compliance_support_wrapper">

         <!-- Left Content -->
         <div class="col-md-7 col-sm-12 tablet-eq-col">
            <div class="compliance_support_section_left">
               <h2>
                  Why Businesses Need Label <br>
                  Compliance Support
               </h2>

               <p>
                  Businesses increasingly sell through online marketplaces,
                  retail channels and D2C platforms where packaging accuracy matters.
               </p>

               <div class="benefits_title">Benefits:</div>

               <ul>
                  <li>Review mandatory declarations</li>
                  <li>Reduce avoidable compliance risks</li>
                  <li>Identify issues before launch</li>
                  <li>Improve packaging accuracy</li>
                  <li>Strengthen customer trust</li>
                  <li>Support smoother distribution</li>
               </ul>
            </div>
         </div>

         <!-- Right Image -->
         <div class="col-md-5 col-sm-12 tablet-eq-col">
            <div class="compliance_support_section_right">
               <img src="https://www.onlinelegalindia.com/images/fssai-food-labeling/why-business-image.webp" alt="why-business" class="img-responsive lazy">
            </div>
         </div>

      </div>
   </div>
</section>


<section class="complete_breakdown_fassi new_common_section_padding">
   <div class="container">
      <div class="complete_breakdown_fassi_inner">
         <h2>Complete Breakdown of Food Label Information</h2>
         <div class="complete_breakdown_fassi_inner_img complete_breakdown_fassi_inner_img_destop">
            <img src="https://www.onlinelegalindia.com/images/fssai-food-labeling/complete-breakdown-section-image.webp" alt="complete-breakdown-section" class="img-responsive lazy">
         </div>
         <div class="complete_breakdown_fassi_inner_img_mobile">


            <div class="text-center">

               <!-- Click Image -->
               <img src="https://www.onlinelegalindia.com/images/fssai-food-labeling/complete-breakdown-section-image.webp"
                  alt="Demo Image"
                  class="img-responsive center-block popup-img"
                  data-toggle="modal"
                  data-target="#imagePopup">

            </div>



            <!-- Modal -->
            <div id="imagePopup" class="modal fade" tabindex="-1" role="dialog">

               <div class="modal-dialog modal-lg">

                  <div class="modal-content">

                     <div class="modal-body">

                        <!-- Close -->
                        <button type="button"
                           class="close popup_close_btn"
                           data-dismiss="modal">
                           ×
                        </button>

                        <!-- Popup Image -->
                        <img src="https://www.onlinelegalindia.com/images/fssai-food-labeling/complete-breakdown-section-image.webp"
                           id="zoomImage"
                           class="img-responsive center-block">

                     </div>

                  </div>

               </div>

            </div>
         </div>
      </div>
   </div>
</section>

<section class="who_should_use_this_service new_common_section_padding">
   <div class="container">
      <div class="row">
         <div class="col-md-6 tablet-eq-col">
            <div class="who_should_use_this_service_left">
               <img src="https://www.onlinelegalindia.com/images/fssai-food-labeling/who-should-section-image.webp" alt="who-should-section" class="img-responsive lazy">
            </div>
         </div>
         <div class="col-md-6 tablet-eq-col">
            <div class="who_should_use_this_service_right">

               <h2>Who Should Use This Service?</h2>

               <ul>
                  <li>

                     Packaged food brands
                  </li>

                  <li>

                     D2C food startups
                  </li>

                  <li>

                     FMCG manufacturers
                  </li>

                  <li>

                     Snack and beverage businesses
                  </li>

                  <li>

                     Nutraceutical and supplement brands
                  </li>

                  <li>

                     Cloud kitchens launching packaged products
                  </li>

                  <li>

                     Businesses in trademark classes 29, 30 and 5
                  </li>
               </ul>

            </div>
         </div>
      </div>
   </div>
</section>

<section class="compliance_packages_modification new_common_section_padding">
   <div class="container">

      <div class="compliance_packages_heading">
         <h2>Food Label Compliance Packages</h2>
      </div>

      <div class="row compliance_packages_row">

         <!-- Package 1 -->
         <div class="col-md-4 col-sm-6 col-sm-offset-0 col-md-offset-2 tablet-eq-col">
            <div class="compliance_package_box starter_package">

               <h4>STARTER PACKAGE</h4>

               <div class="package_price">
                  ₹5,999
               </div>

               <ul>
                  <li>FSSAI declaration review</li>
                  <li>Ingredient verification</li>
                  <li>Veg/Non-Veg symbol review</li>
                  <li>License display check</li>
                  <li>MRP and quantity review</li>
                  <li>Batch details review</li>
                  <li>Deficiency sheet</li>
               </ul>

               <div class="package_deliverables">
                  <h5>Deliverables:</h5>

                  <p>
                     Compliance report, checklist and
                     correction sheet
                  </p>
               </div>

            </div>
         </div>

         <!-- Package 2 -->
         <div class="col-md-4 col-sm-6 tablet-eq-col">
            <div class="compliance_package_box advanced_package">

               <h4>ADVANCED PACKAGE</h4>

               <div class="package_price">
                  ₹9,999
               </div>

               <ul>
                  <li>Legal Metrology review</li>
                  <li>Nutritional format review</li>
                  <li>Allergen review</li>
                  <li>Packaging declaration validation</li>
                  <li>Customer care verification</li>
                  <li>Two revision rounds</li>

               </ul>
               <div class="package_deliverables package_deliverables_gap_modification">
                  <h5>Deliverables:</h5>

                  <p>
                     Detailed report, nutritional format
                     sheet, checklist and corrected draft
                  </p>
               </div>

            </div>
         </div>

      </div>

   </div>
</section>


<section class="how_we_work_section_modification new_common_section_padding">
   <div class="container">
      <div class="how_we_work_section_modification_inner">

         <h2>How We Work</h2>

         <div class="how_we_work_section_modification_inner_modification">

            <div class="work_step">
               <div class="step_number">1</div>
               <p>Share your label artwork and details.</p>
            </div>

            <div class="work_step">
               <div class="step_number">2</div>
               <p>Compliance assessment.</p>
            </div>

            <div class="work_step">
               <div class="step_number">3</div>
               <p>Gap identification.</p>
            </div>

            <div class="work_step">
               <div class="step_number">4</div>
               <p>Correction support.</p>
            </div>

            <div class="work_step">
               <div class="step_number">5</div>
               <p>Final review and update observations.</p>
            </div>

         </div>

      </div>
   </div>
</section>


<section class="what_you_receive new_common_section_padding">
   <div class="container">
      <div class="row">
         <div class="col-md-5 col-sm-6 col-sm-offset-0 col-md-offset-1 tablet-eq-col">
            <div class="what_you_receive_left">
               <img src="https://www.onlinelegalindia.com/images/fssai-food-labeling/what-you-receive-image.webp" alt="what-you-receive" class="img-responsive lazy">
            </div>
         </div>
         <div class="col-md-5 col-sm-6 tablet-eq-col">
            <div class="what_you_receive_right">
               <div class="compliance_support_section_left">
                  <h2>
                     What You Receive
                  </h2>


                  <ul>
                     <li>Food label compliance review</li>
                     <li>Packaging assessment</li>
                     <li>Deficiency reports</li>
                     <li>Nutritional guidance</li>
                     <li>Legal Metrology support</li>
                     <li>Compliance-focused recommendations</li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="why_choose_us_new_section_modification new_common_section_padding">
   <div class="container">
      <div class="row flex_row tab-eq-row">

         <!-- Left Content -->
         <div class="col-md-5 col-md-offset-1 col-sm-6 tablet-eq-col">
            <div class="why_choose_us_new_section_modification_left">

               <h2>Why Choose Us</h2>

               <p class="why_choose_text">
                  Fixing packaging after launch often costs significantly more than reviewing it beforehand.
               </p>

               <ul class="why_choose_list">
                  <li>Structured review process</li>
                  <li>Practical recommendations</li>
                  <li>Compliance support</li>
                  <li>Dedicated coordination</li>
                  <li>Clear reporting</li>
               </ul>

            </div>
         </div>

         <!-- Right Image -->
         <div class="col-md-5 col-sm-6 tablet-eq-col">
            <div class="why_choose_us_new_section_modification_right">
               <img src="https://www.onlinelegalindia.com/images/fssai-food-labeling/why-choose-image.webp"
                  alt="why-choose"
                  class="img-responsive">
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

<section class="faq_new_section_modification_block new_common_section_padding">
   <div class="row">
      <div class="container">

         <div class="faq_new_heading">
            <h2 style="color: black">Frequently Asked Questions (FAQs)</h2>
         </div>
         <div class="col-sm-12 col-md-12 why-us-img-div">

            <div data-port-id="child_ans_div_1" class="accordaion-main-div">
               <h4 class="accordion-cus-head">Can existing labels be reviewed?</h4>
            </div>
            <div id="child_ans_div_1" class="child-ans-div-1">
               <p class="child-ans-text">Yes.
               </p>
            </div>

            <div data-port-id="child_ans_div_2" class="accordaion-main-div">
               <h4 class="accordion-cus-head">Will correction suggestions be shared?</h4>
            </div>
            <div id="child_ans_div_2" style="display: none;" class="child-ans-div-1">
               <p class="child-ans-text">Yes.
               </p>
            </div>


            <div data-port-id="child_ans_div_3" class="accordaion-main-div">
               <h4 class="accordion-cus-head">Is this suitable for startups?</h4>
            </div>
            <div id="child_ans_div_3" style="display: none;" class="child-ans-div-1">
               <p class="child-ans-text">Yes.
               </p>
            </div>


            <div data-port-id="child_ans_div_4" class="accordaion-main-div">
               <h4 class="accordion-cus-head">Is Legal Metrology included?</h4>
            </div>
            <div id="child_ans_div_4" style="display: none;" class="child-ans-div-1">
               <p class="child-ans-text">Included in Advanced package.
               </p>

            </div>


            <div data-port-id="child_ans_div_5" class="accordaion-main-div">
               <h4 class="accordion-cus-head">Can nutritional formatting be reviewed?</h4>
            </div>
            <div id="child_ans_div_5" style="display: none;" class="child-ans-div-1">
               <p class="child-ans-text">Yes.</p>

            </div>

         </div>
      </div>
   </div>
</section>

<section class="faq_bottom_section">
   <div class="container">
      <div class="faq_bottom_section_inner text-center">
         <h2>
            Your Packaging Represents Your Brand. Make Sure Your
            <span>Label Works For Regulators, Marketplaces, And Customers.</span>
         </h2>

         <div class="get_my_label_reviewed">
            <a href="#contact" class="btn review_btn">
               Get My Label Reviewed
            </a>
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
   $(document).on('click', '#contact-submit', function(e) {
      e.preventDefault();
      var r = $(this),
         flag = true;

      if ($('.oli-validate-form').valid()) {
         if (r.css('pointer-events') == 'none') {
            return false;
         }

         // submitOli(r);
         $('.oli-validate-form').submit();
      }
   });

   function verifyCaptcha(r) {
      submitOli(r);
      // var captcha_code = $('#captcha_code').val();
      // $.ajax({
      //    url: "../../payment/verify_captcha.php",
      //    method: 'post',
      //    data: {
      //       captcha_code: captcha_code
      //    },
      //    success: function(data) {
      //       if (data == 1) {

      //       } else {
      //          alert('Please Enter the Correct Captcha');
      //       }
      //    }
      // })
   }

   $(document).on('click', '#nextBtn', function(e) {
      e.preventDefault();
      if ($(".oli-validate-form").valid()) {
         $('#nextBtn').prop('disabled', true);
         var name = $('#name').val(),
            email = $('#email').val(),
            mobile = $('#mobile').val(),
            state = $('#state option:selected').val(),
            is_prompted_whatsapp = 0
         gclid_field = $('#gclid_field').val();
         let landing_uri = $('#landing_uri').val();
         const csrf_token = $('#csrf_token').val();

         $.ajax({
            url: "../../payment/submit_fssai_food_labelling_wcv.php",
            method: 'post',
            data: {
               name: name,
               email: email,
               mobile: mobile,
               state: state,
               is_prompted_whatsapp: is_prompted_whatsapp,
               mode: '1',
               gclid_field: gclid_field,
               landing_uri: landing_uri,
               csrf_token: csrf_token
            },
            dataType: "json",
            success: function(data) {
               if (data.success) {
                  fbq('track', 'Lead');
                  $('#oliid').val(data.oli_id);
                  $('#first_div').hide();
                  $('#second_div').show();
               } else {
                  alert(data.msg);
                  $('#nextBtn').prop('disabled', false);
               }
            },
            error: function(jqXHR, textStatus, errorThrown) {
               console.error("AJAX Request Failed: " + textStatus + ", " + errorThrown);
               alert("An error occurred while processing your request. Please refresh page and try again.");
               $('#nextBtn').prop('disabled', false);
               // location.reload();
            }
         });
      }
   });

   window.wa_service_name = 'Food Safety and Standards Authority of India (FSSAI)';
   window.wa_service_code = 'FSSAI';

   function getCampaignDetails(oli_id) {
      $.ajax({
         url: "../../payment/track_campaign.php",
         method: 'post',
         data: {
            oli_id: oli_id,
            form_type: 'FSSAI',
            utm_content: utm_content
         },
         success: function(data) {
            console.log(data)
         }
      });
   }

   function submitOli(btn) {
      btn.attr('type', 'submit')
         .html('Please Wait...')
         .css('pointer-events', 'none');

      var oli_id = $('#oliid').val();
      var datastring = $('.oli-validate-form').serialize();
      $.ajax({
         url: "../../payment/submit_fssai_food_labelling_wcv.php",
         method: 'post',
         data: datastring,
         dataType: "json",
         success: function(data) {
            if (data.success) {
               btn.html('Redirecting to Payment Lobby...');
               alert(data.msg);
               window.location.href = 'https://www.onlinelegalindia.com/payment/payment-lobby.php?oli-id=' + oli_id;
            } else {
               alert(data.msg);
               window.history.back();
            }
         },
         error: function(jqXHR, textStatus, errorThrown) {
            alert("An error occurred while processing your request. Please try again later.");
            $('#nextBtn').prop('disabled', false);
            location.reload();
         }
      });
   }

   function removeSpaces(string) {
      return string.split(' ').join('');
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
         nature: {
            required: true
         },
         turnover: {
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
         nature: {
            required: "Please select nature of your Business"
         },
         turnover: {
            required: "Please select your annual turnover"
         },
         pin: {
            required: "Please enter your Pin Number.",
            number: "Please enter a valid Pin Number.",
            rangelength: "Pin Number should be of 6 digit only"
         }
      }
   });

   $(document).on('click', '#btnrefresh', function() {
      var url = window.location.origin + '/payment/captcha.php?' + Math.random();
      document.getElementById('captcha_holder').src = url;
      document.getElementById('captcha_code').value = '';
      return false;
   });

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



   $(" input[type='radio']").on('click', function(e) {

      if (e.target.className == "Annual_turnover_radio") {
         $(".Annual_turnover_select").css({
            'display': 'block'
         });
      } else {
         $(".Annual_turnover_select").css({
            'display': 'none'
         });
      }

      $("#package_name").val($(e.target).attr('data-package'));

   });


   $(".Annual_turnover_select").on("change", function(e) {
      var selecteds = $(".Annual_turnover_select :selected");
      var prices = selecteds.val();
      // var texts = selecteds.text();
      // console.log(prices + "||Turnover up to 12 lakhs/annum - " + texts);
      $(".Annual_turnover_radio").val(prices);

   });
</script>

<script>
   $(document).ready(function() {

      if ($(window).width() <= 767) {

         $('#zoomImage').on('click', function() {
            $(this).toggleClass('zoomed');
         });

         $('#imagePopup').on('hidden.bs.modal', function() {
            $('#zoomImage').removeClass('zoomed');
         });

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


   // Get the modal
   var modal = document.getElementById("myModal1");

   // Get the button that opens the modal
   var btn = document.getElementById("myBtn");
   var btn2 = document.getElementById("myBtn2")

   // Get the <span> element that closes the modal
   var span = document.getElementsByClassName("close")[0];

   // When the user clicks the button, open the modal 
   btn.onclick = function() {
      modal.style.display = "block";
   }
   btn2.onclick = function() {
      modal.style.display = "block";
   }

   // When the user clicks on <span> (x), close the modal
   span.onclick = function() {
      modal.style.display = "none";
   }

   // When the user clicks anywhere outside of the modal, close it
   window.onclick = function(event) {
      if (event.target == modal) {
         modal.style.display = "none";
      }
   }

   /*  Supriyo Design     */

   //    $(document).ready(function() {
   //          $("#TmSearch").blur(function() {
   //            alert("Hello, world!");
   //          });
   //        });


   // $("#TmSearch").keypress(function(evt){
   //      if (evt.keyCode == 13) {
   //          evt.preventDefault();
   //          return false;
   //      }
   // });
</script>

<script>
   $('.gst_rdiobtn').click(function() {
      $('.price_active').toggleClass('price_active');
      $(this).toggleClass('price_active');
      $('.gst_rdiobtn label').css("cursor", "pointer");
   });
</script>

<script>
    $('#imagePopup').on('shown.bs.modal', function () {
        var modalBody = $('#imagePopup .modal-body')[0];

        setTimeout(function () {
            modalBody.scrollLeft = (modalBody.scrollWidth - modalBody.clientWidth) / 2;
            modalBody.scrollTop = 0;
        }, 100);
    });
</script>
@endsection
