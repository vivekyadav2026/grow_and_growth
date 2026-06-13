@extends('layouts.app')

@section('meta')
<title>Online Dispute Resolution: Fast & Secure Legal Conflict Solution</title>
<meta name="description" content="Resolve legal conflicts swiftly with Online Dispute Resolution (ODR) – a fast, secure, and cost-effective alternative to traditional court cases.">
<link rel="canonical" href="https://www.foundida.com/services/legal/"/>
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.foundida.com/services/all-online-dispute-resolution/">
<meta property="og:image" content="https://www.foundida.com/images/adr-service-og.webp">
<meta property="og:title" content="Online Dispute Resolution: Fast & Secure Legal Conflict Solution">
<meta property="og:site_name" content="Foundida">
<meta property="og:description" content="Resolve legal conflicts swiftly with Online Dispute Resolution (ODR) – a fast, secure, and cost-effective alternative to traditional court cases.">
<meta property="og:locale" content="en-IN">
@endsection

@section('styles')
<style>
   #allpacakage .register-benifits-text {
      min-height: 898px;
   }

   #allpacakage .register-benifits-text span:nth-child(2) {
      font-size: 12px;
      margin-bottom: 0 !important;
      margin-top: -14px;
      font-weight: 600;
   }

   #allpacakage .register-benifits-text {
      margin-right: 0;
   }

   #allpacakage .register-benifits-text {
      min-height: 1004px;
   }

   #allpacakage .col-md-3 {
      padding-right: 0;
   }

   #contact h4 {
      font-size: 16px;
   }

   .gst_rdiobtn ul li:nth-child(1) {
      font-size: 19px !important;
   }
   .cstm_ftr_li li{
          font-size: 14px;
    margin-bottom: 6px;
    color: #6d6d6d;
   }
   .cstm_link_lst p a{
          color: #002b42;
    margin-bottom: 6px;
    display: inline-block;
   }
    .cstm_link_lst{
          float: left;
    margin-bottom: 25px;
    padding: 0 15px;
    }
   .odr_pcls p{
         background-color: #ffffff;
         color: #000000;
         font-size: 20px;
         font-weight: 600;
         padding: 8px 12px;
             width: 46%;
    border-radius: 24px;
    margin-bottom: 6px;
    text-align: center;

      }

   @media screen and (max-width: 768px) {

      #allpacakage .register-benifits-text {
         min-height: auto;
      }

      .gift_voucher_main {
         position: relative;
         display: inline-block;
         bottom: 68px;
      }

      .block_padding {
         padding: 40px 15px;
      }
      .odr_pcls p{
         text-align: center;
         width: 78%;
         font-size: 16px;
         padding: 8px;
         margin-bottom: 16px;
      }
      .odr_pcls {
         display: flex;
         justify-content: center;
      }
      .cstm_link_lst {
         margin-top: 0;
      }
      
   }
</style>
   <!--      <link rel="stylesheet" type="text/css" href="https://www.foundida.com/css/bootstrap.min.css">-->
   <!-- <link rel="stylesheet" type="text/css" href="https://www.foundida.com/css/cut.css"> -->
   <!-- <link rel="stylesheet" type="text/css" href="https://www.foundida.com/css/alternative-contact-popup.css"> -->
   <!-- <link rel="stylesheet" href="https://www.foundida.com/css/brands.min.css"> -->
   <!-- <link rel="stylesheet" href="https://www.foundida.com/css/solid.min.css"> -->
@endsection

@section('content')
<section class="one common_class custm_cmn_cls onee">
   <div class="container">
      <div class="row custom_row">

         <div class="col-md-7 col_one">
            <div class="one_left">
               <div class="odr_pcls">
                  <p>Online Dispute Resolution</p>
               </div>
               <h1>Do you have a<span class="span_color"> Legal Problem?</span></h1>
               <div>
                  <img src="https://www.foundida.com/images/pbuvector.webp" alt="problem-underline" class="pu_img">
               </div>
               <div class="one_left_inner">
                  <p>Resolve the Issue Digitally with <span class="new_cstm_left_inner">Online Dispute Resolution.</span></p>
                  <!-- <ul class="new_ul_li new_ul_li99">
                     <li class="eca_cstm"><i class="far fa-id-badge custm_fnt_icon"></i> Expert CA Assistance</li>
                     <li><i class="fas fa-piggy-bank custm_fnt_icon"></i> Maximum Tax Savings</li>
                     <li class="ahff_cstm"><i class="fas fa-bolt custm_fnt_icon"></i> Quick & Hassle-Free Filing</li>
                     <li><i class="fas fa-headset custm_fnt_icon"></i> 24x7 Support & Tracking</li>
                  </ul> -->
                  <!-- <div class="trust_google_img">

                     <div>
                        <img src="https://www.foundida.com/images/trademark-search-block/legal-corporate-CC/google-rating.webp" alt="google rating">
                     </div>
                     <div>
                        <img src="https://www.foundida.com/images/iso-certified 1.webp" alt="iso">
                     </div>
                  </div> -->
               </div>
            </div>
         </div>

         <div class="col-md-5 col_two" id="contact_block">
            <div class="one_right">
               <h5>Get a Callback</h5>
               <form class="form_one_right oli-validate-form" id="contact2" action="https://www.foundida.com/payment/submit-itr-filing-multipkg.php" method="post" enctype="multipart/form-data">
                  <input type="hidden" id="gclid_field" name="gclid_field" value="">
                  <input type="hidden" id="landing_uri" name="landing_uri" value="https://www.foundida.com/services/legal/">
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


                     <!-- <div class="form-group">
                        <fieldset class="new_fieldset">
                           <img id="captcha_holder" src="https://www.foundida.com/payment/captcha.php" alt="captcha">
                           <img src="https://www.foundida.com/images/capta.webp" id="btnrefresh" alt="captcha">
                           <input type="text" name="captcha_code" id="captcha_code" class="pull-right valid" maxlength="4" onkeyup="this.value = this.value.replace(/[^\d]+/g, '');" placeholder="Enter the captcha">
                        </fieldset>
                     </div> -->
                     <input type="hidden" id="csrf_token" name="csrf_token" value="835fd24592d30ba1b4b7ac72ae9fa434e4333ae47dc7342ff21a0dd2bc8e6eb5" />
                     <input type="hidden" id="oliid" name="oliid" value="">
                     <div class="form_check">
   <label class="custom_check">I have read & agreed to the company's Terms and Conditions, disclaimer and refund policy, and also ready to accept calls, SMS, emails, etc. 
      <input type="checkbox" data-degree="°" name="is_prompted_whatsapp" checked value="1">
      <span class="form_checkmark"></span>
    </label>
</div>


                     <div class="form_group_button">
                        <button type="button" name="next" id="nextBtn" class="btn tsfb_started">Proceed Now</button>
                     </div>

                  </div>

                  <div id="second_div" class="from_second_section custm_fss" style="display:none;">

                     <div class="form-group">
                        <select id="itr_serv_catagory" class="new_control new_control_select" name="itr_serv_catagory">
                           <option value="IC" data-class="icc">ITR Consultancy</option>
                           <option value="SP" data-class="soi">Salaried Professionals</option>
                           <option value="PIF" data-class="fse">Proprietorship ITR Filing</option>
                           <option value="NCBIF" data-class="ststo">Non Corporate Body ITR Filing</option>
                           <option value="NRI" data-class="nri">NRI ITR Filing</option>
                           <option value="CBIF" data-class="nrio">Corporate Body ITR Filing</option>
                        </select>
                     </div>

                     <div class="gst_rdiobtn price_active soi" style="display: none;">
                        <label for="price_1" style="cursor: pointer;">
                           <input type="radio" id="price_1" name="form_price" value="825||Salary Only Income" checked>&nbsp;<p>Rs
                              825/-</p>
                           <ul>
                              <li>Salary Only Income</li>
                              <li>From Rs. 6 lakh (Rs. 699/- + 18% GST)</li>
                           </ul>
                        </label>
                     </div>

                     <div class="gst_rdiobtn price_active fse" style="display: none;">
                        <label for="price_9" style="cursor: pointer;">
                           <input type="radio" id="price_9" name="form_price" value="11799||Freelancers/Self-Employed" checked>&nbsp;<p>Rs 1770/-
                           </p>
                           <ul>
                              <li>Freelancers/Self-Employed</li>
                              <li>Up to Rs. 10 lakhs (Rs. 1500/- + 18% GST) </li>
                              <!-- <li>Call, Chat, Email Support</li>
                                 <li>No hidden charges</li> -->
                           </ul>
                        </label>
                     </div>

                     <div class="gst_rdiobtn price_active ststo" style="display: none;">
                        <label for="price_19" style="cursor: pointer;">
                           <input type="radio" id="price_19" name="form_price" value="9439||Societies or Trust" checked>&nbsp;<p>Rs 9439/-
                           </p>
                           <ul>
                              <li>Societies or Trust</li>
                              <li>Rs. 7999/- + 18% GST [Excluding CA Fees]</li>
                              <!-- <li>Call, Chat, Email Support</li>
                                 <li>No hidden charges</li> -->
                           </ul>
                        </label>
                     </div>


                     <div class="gst_rdiobtn price_active nri" style="display: none;">
                        <label for="price_27" style="cursor: pointer;">
                           <input type="radio" id="price_27" name="form_price" value="7079||NRI ITR Filing" checked>&nbsp;<p>Rs 7079/-
                           </p>
                           <ul>
                              <li>NRI ITR Filing</li>
                              <li>Single Source Income (Rs. 5999/- + 18% GST)</li>
                              <!-- <li>Call, Chat, Email Support</li>
                                 <li>No hidden charges</li> -->
                           </ul>
                        </label>
                     </div>

                     <div class="gst_rdiobtn price_active nrio" style="display: none;">
                        <label for="price_29" style="cursor: pointer;">
                           <input type="radio" id="price_29" name="form_price" value="17699||Corporate Body ITR Filing" checked>&nbsp;<p>Rs 17,699/-
                           </p>
                           <ul>
                              <li>Corporate Body ITR Filing </li>
                              <li>Up to Rs. 20 lakhs (Rs. 14,999/- + 18% GST)</li>
                              <!-- <li>Call, Chat, Email Support</li>
                                 <li>No hidden charges</li> -->
                           </ul>
                        </label>
                     </div>

                     <div class="gst_rdiobtn price_active icc">
                        <label for="price_32" style="cursor: pointer;">
                           <input type="radio" id="price_32" name="form_price" value="1179||ITR Consultancy" checked>&nbsp;<p>Rs 1179/-
                           </p>
                           <ul>
                              <li>ITR Consultancy</li>
                              <li>Tax Consultation fee (Rs. 999/- + 18% GST)</li>
                              <!-- <li>Call, Chat, Email Support</li>
                                 <li>No hidden charges</li> -->
                           </ul>
                        </label>
                     </div>


                     <div class="row">
                        <a href="javascript:void(0)" style="margin-bottom: 10px;display: block;color: #000;font-weight: 600;font-size: 15px;" onclick="package_detail()">+ More</a>
                     </div>

                     <div id="more_package" style="display:none;">
                        <div class="gst_rdiobtn soi">
                           <label for="price_2" style="cursor: pointer;">
                              <input type="radio" id="price_2" name="form_price" value="1297||Salary Only Income">&nbsp;<p>Rs 1297/-
                              </p>
                              <ul>
                                 <li>Salary Only Income</li>
                                 <li>From Rs. 6 lakh to Rs. 12 lakh (Rs. 1099/- + 18% GST)</li>
                                 <!-- <li>Call, Chat, Email Support</li>
                                 <li>No hidden charges</li> -->
                              </ul>
                           </label>
                        </div>
                        <div class="gst_rdiobtn soi">
                           <label for="price_3" style="cursor: pointer;">
                              <input type="radio" id="price_3" name="form_price" value="1769||Salary Only Income">&nbsp;<p>Rs 1769/-
                              </p>
                              <ul>
                                 <li>Salary Only Income </li>
                                 <li>From Rs. 12 lakh to 15 lakh (Rs. 1499/- + 18% GST)</li>
                                 <!-- <li>Call, Chat, Email Support</li>
                                 <li>No hidden charges</li> -->
                              </ul>
                           </label>
                        </div>
                        <div class="gst_rdiobtn soi">
                           <label for="price_4" style="cursor: pointer;">
                              <input type="radio" id="price_4" name="form_price" value="2359||Salary Only Income">&nbsp;<p>Rs 2359/-
                              </p>
                              <ul>
                                 <li>Salary Only Income </li>
                                 <li>Above Rs. 15 lakh (Rs. 1999/- + 18% GST)</li>
                                 <!-- <li>Call, Chat, Email Support</li>
                                 <li>No hidden charges</li> -->
                              </ul>
                           </label>
                        </div>

                        <div class="gst_rdiobtn soi">
                           <label for="price_5" style="cursor: pointer;">
                              <input type="radio" id="price_5" name="form_price" value="2949||Salary + Other Income">&nbsp;<p>Rs 2949/-
                              </p>
                              <ul>
                                 <li>Salary + Other Income</li>
                                 <li>Up to Rs. 6 lakh (Rs. 2499/- + 18% GST) </li>
                                 <!-- <li>Call, Chat, Email Support</li>
                                 <li>No hidden charges</li> -->
                              </ul>
                           </label>
                        </div>


                        <div class="gst_rdiobtn soi">
                           <label for="price_6" style="cursor: pointer;">
                              <input type="radio" id="price_6" name="form_price" value="3539||Salary + Other Income">&nbsp;<p>Rs 3539/-
                              </p>
                              <ul>
                                 <li>Salary + Other Income</li>
                                 <li>From Rs. 6 lakh to Rs. 12 lakh (Rs. 2999/- + 18% GST)</li>
                                 <!-- <li>Call, Chat, Email Support</li>
                                 <li>No hidden charges</li> -->
                              </ul>
                           </label>
                        </div>


                        <div class="gst_rdiobtn soi">
                           <label for="price_7" style="cursor: pointer;">
                              <input type="radio" id="price_7" name="form_price" value="5899||Salary + Other Income">&nbsp;<p>Rs 5899/-
                              </p>
                              <ul>
                                 <li>Salary + Other Income</li>
                                 <li>Above Rs. 12 lakh (Rs. 4999/- + 18% GST)</li>
                                 <!-- <li>Call, Chat, Email Support</li>
                                 <li>No hidden charges</li> -->
                              </ul>
                           </label>
                        </div>

                        <div class="gst_rdiobtn soi">
                           <label for="price_8" style="cursor: pointer;">
                              <input type="radio" id="price_8" name="form_price" value="11799||Salary + Other Income">&nbsp;<p>Rs 11,799/-
                              </p>
                              <ul>
                                 <li>Salary + Other Income</li>
                                 <li>Salary + Crypto + F&O + Intraday-Trade (Rs. 9999/- + 18% GST)</li>
                                 <!-- <li>Call, Chat, Email Support</li>
                                 <li>No hidden charges</li> -->
                              </ul>
                           </label>
                        </div>


                        <div class="gst_rdiobtn fse">
                           <label for="frmp_und" style="cursor: pointer;">
                              <input type="radio" name="form_price" id="frmp_und" value="2360||Freelancers/Self-Employed">&nbsp;<p>Rs 2,360/-
                              </p>
                              <ul>
                                 <li>Freelancers/Self-Employed</li>
                                 <li>Between Rs. 10–25 lakhs (Rs. 2000/-+ 18% GST)</li>
                                 <!-- <li>Call, Chat, Email Support</li>
                                 <li>No hidden charges</li> -->
                              </ul>
                           </label>
                        </div>


                        <div class="gst_rdiobtn fse">
                           <label for="price_10" style="cursor: pointer;">
                              <input type="radio" id="price_10" name="form_price" value="2950||Freelancers/Self-Employed">&nbsp;<p>Rs 2,950/-
                              </p>
                              <ul>
                                 <li>Freelancers/Self-Employed</li>
                                 <li>Above Rs. 25 lakhs: (Rs. 2500/- + 18% GST)</li>
                                 <!-- <li>Call, Chat, Email Support</li>
                                 <li>No hidden charges</li> -->
                              </ul>
                           </label>
                        </div>


                        <div class="gst_rdiobtn fse">
                           <label for="price_11" style="cursor: pointer;">
                              <input type="radio" id="price_11" name="form_price" value="2359||Business/Professionals">&nbsp;<p>Rs 2359/-
                              </p>
                              <ul>
                                 <li>Business/Professionals</li>
                                 <li>Up to Rs. 10 Lakhs (Rs. 1999/- + 18% GST)</li>
                                 <!-- <li>Call, Chat, Email Support</li>
                                 <li>No hidden charges</li> -->
                              </ul>
                           </label>
                        </div>

                        <div class="gst_rdiobtn fse">
                           <label for="price_12" style="cursor: pointer;">
                              <input type="radio" id="price_12" name="form_price" value="3539||Business/Professionals">&nbsp;<p>Rs 3539/-
                              </p>
                              <ul>
                                 <li>Business/Professionals</li>
                                 <li>Up to Rs. 20 Lakhs (Rs. 2999/- + 18% GST)</li>
                                 <!-- <li>Call, Chat, Email Support</li>
                                 <li>No hidden charges</li> -->
                              </ul>
                           </label>
                        </div>

                        <div class="gst_rdiobtn fse">
                           <label for="price_13" style="cursor: pointer;">
                              <input type="radio" id="price_13" name="form_price" value="4719||Business/Professionals">&nbsp;<p>Rs 4719/-
                              </p>
                              <ul>
                                 <li>Business/Professionals</li>
                                 <li>Up to Rs. 30 Lakhs (Rs. 3999/- + 18% GST)</li>
                                 <!-- <li>Call, Chat, Email Support</li>
                                 <li>No hidden charges</li> -->
                              </ul>
                           </label>
                        </div>
                        <div class="gst_rdiobtn fse">
                           <label for="price_14" style="cursor: pointer;">
                              <input type="radio" id="price_14" name="form_price" value="7079||Business/Professionals">&nbsp;<p>Rs 7079/-
                              </p>
                              <ul>
                                 <li>Business/Professionals</li>
                                 <li>Up to Rs. 50 Lakhs (Rs. 5999/- + 18% GST)</li>
                                 <!-- <li>Call, Chat, Email Support</li>
                                 <li>No hidden charges</li> -->
                              </ul>
                           </label>
                        </div>

                        <div class="gst_rdiobtn fse">
                           <label for="price_15" style="cursor: pointer;">
                              <input type="radio" id="price_15" name="form_price" value="9439||Business/Professionals">&nbsp;<p>Rs 9439/-
                              </p>
                              <ul>
                                 <li>Business/Professionals</li>
                                 <li>Up to Rs. 70 Lakhs (Rs. 7999/- + 18% GST)</li>
                                 <!-- <li>Call, Chat, Email Support</li>
                                 <li>No hidden charges</li> -->
                              </ul>
                           </label>
                        </div>

                        <div class="gst_rdiobtn fse">
                           <label for="price_16" style="cursor: pointer;">
                              <input type="radio" id="price_16" name="form_price" value="11799||Business/Professionals">&nbsp;<p>Rs 11,799/-
                              </p>
                              <ul>
                                 <li>Business/Professionals</li>
                                 <li>Up to Rs. 1 crore (Rs. 9999/- + 18% GST)</li>
                                 <!-- <li>Call, Chat, Email Support</li>
                                 <li>No hidden charges</li> -->
                              </ul>
                           </label>
                        </div>


                        <div class="gst_rdiobtn fse">
                           <label for="price_17" style="cursor: pointer;">
                              <input type="radio" id="price_17" name="form_price" value="14159||Business/Professionals">&nbsp;<p>Rs 14,159/-
                              </p>
                              <ul>
                                 <li>Business/Professionals</li>
                                 <li>Above Rs. 1 crore (Rs. 11,999/- + 18% GST)</li>
                                 <!-- <li>Call, Chat, Email Support</li>
                                 <li>No hidden charges</li> -->
                              </ul>
                           </label>
                        </div>

                        <div class="gst_rdiobtn fse">
                           <label for="price_18" style="cursor: pointer;">
                              <input type="radio" id="price_18" name="form_price" value="14159||Business/Professionals">&nbsp;<p>Rs 14,159/-
                              </p>
                              <ul>
                                 <li>Business/Professionals</li>
                                 <li>Above Rs. 1 crore (Rs. 11,999/- + 18% GST)</li>
                                 <!-- <li>Call, Chat, Email Support</li>
                                 <li>No hidden charges</li> -->
                              </ul>
                           </label>
                        </div>

                        <div class="gst_rdiobtn ststo">
                           <label for="price_20" style="cursor: pointer;">
                              <input type="radio" id="price_20" name="form_price" value="7669||NGO">&nbsp;<p>Rs 7669/-
                              </p>
                              <ul>
                                 <li>NGO</li>
                                 <li>Upto 5 Cr (Rs.6499/- + 18% GST)[Excluding CA Fees]</li>
                                 <!-- <li>Call, Chat, Email Support</li>
                                 <li>No hidden charges</li> -->
                              </ul>
                           </label>
                        </div>

                        <div class="gst_rdiobtn ststo">
                           <label for="price_21" style="cursor: pointer;">
                              <input type="radio" id="price_21" name="form_price" value="14040||NGO">&nbsp;<p>Rs 14,040/-
                              </p>
                              <ul>
                                 <li>NGO</li>
                                 <li>Above 5 Cr (Rs.11,899/- + 18% GST) [Excluding CA Fees]</li>
                                 <!-- <li>Call, Chat, Email Support</li>
                                 <li>No hidden charges</li> -->
                              </ul>
                           </label>
                        </div>

                        <div class="gst_rdiobtn ststo">
                           <label for="price_22" style="cursor: pointer;">
                              <input type="radio" id="price_22" name="form_price" value="8259||NGO">&nbsp;<p>Rs 8259/-
                              </p>
                              <ul>
                                 <li>Partnership Firm </li>
                                 <li>Rs. 6999/- + 18% GST(Excluding CA Fees)</li>
                                 <!-- <li>Call, Chat, Email Support</li>
                                 <li>No hidden charges</li> -->
                              </ul>
                           </label>
                        </div>

                        <div class="gst_rdiobtn ststo">
                           <label for="price_23" style="cursor: pointer;">
                              <input type="radio" id="price_23" name="form_price" value="825||Hindu Undivided Family (HUF)">&nbsp;<p>Rs 825/-
                              </p>
                              <ul>
                                 <li>Hindu Undivided Family (HUF)</li>
                                 <li>Turnover up to Rs. 6 lakhs (Rs. 699/- + 18% GST) </li>
                                 <!-- <li>Call, Chat, Email Support</li>
                                 <li>No hidden charges</li> -->
                              </ul>
                           </label>
                        </div>

                        <div class="gst_rdiobtn ststo">
                           <label for="price_24" style="cursor: pointer;">
                              <input type="radio" id="price_24" name="form_price" value="1297||Hindu Undivided Family (HUF)">&nbsp;<p>Rs 1297/-
                              </p>
                              <ul>
                                 <li>Hindu Undivided Family (HUF)</li>
                                 <li>From Rs. 6 lakhs to Rs. 12 lakhs (Rs. 1099/- + 18% GST)</li>
                                 <!-- <li>Call, Chat, Email Support</li>
                                 <li>No hidden charges</li> -->
                              </ul>
                           </label>
                        </div>

                        <div class="gst_rdiobtn ncbif ststo">
                           <label for="price_25" style="cursor: pointer;">
                              <input type="radio" id="price_25" name="form_price" value="1769||Hindu Undivided Family (HUF)">&nbsp;<p>Rs 1769/-
                              </p>
                              <ul>
                                 <li>Hindu Undivided Family (HUF)</li>
                                 <li>From Rs. 12 lakhs to 15 lakhs (Rs. 1499/- + 18% GST)</li>
                                 <!-- <li>Call, Chat, Email Support</li>
                                 <li>No hidden charges</li> -->
                              </ul>
                           </label>
                        </div>

                        <div class="gst_rdiobtn ncbif ststo">
                           <label for="price_26" style="cursor: pointer;">
                              <input type="radio" id="price_26" name="form_price" value="2359||Hindu Undivided Family (HUF)">&nbsp;<p>Rs 2359/-
                              </p>
                              <ul>
                                 <li>Hindu Undivided Family (HUF)</li>
                                 <li>Above Rs. 15 lakhs (Rs. 1999/- + 18% GST)</li>
                                 <!-- <li>Call, Chat, Email Support</li>
                                 <li>No hidden charges</li> -->
                              </ul>
                           </label>
                        </div>

                        <div class="gst_rdiobtn nri">
                           <label for="price_28" style="cursor: pointer;">
                              <input type="radio" id="price_28" name="form_price" value="10619||NRI ITR Filing">&nbsp;<p>Rs 10,619/-
                              </p>
                              <ul>
                                 <li>NRI ITR Filing</li>
                                 <li>Multiple Sources Income (Rs. 8999/- + 18% GST)</li>
                                 <!-- <li>Call, Chat, Email Support</li>
                                 <li>No hidden charges</li> -->
                              </ul>
                           </label>
                        </div>


                        <div class="gst_rdiobtn nrio">
                           <label for="price_30" style="cursor: pointer;">
                              <input type="radio" id="price_30" name="form_price" value="29499||Corporate Body ITR Filing">&nbsp;<p>Rs 29,499/-
                              </p>
                              <ul>
                                 <li>Corporate Body ITR Filing </li>
                                 <li>Up to Rs. 50 lakhs (Rs. 24,999/- + 18% GST)</li>
                                 <!-- <li>Call, Chat, Email Support</li>
                                 <li>No hidden charges</li> -->
                              </ul>
                           </label>
                        </div>

                        <div class="gst_rdiobtn nrio">
                           <label for="price_31" style="cursor: pointer;">
                              <input type="radio" id="price_31" name="form_price" value="41299||Corporate Body ITR Filing">&nbsp;<p>Rs 41,299/-
                              </p>
                              <ul>
                                 <li>Corporate Body ITR Filing </li>
                                 <li>Above Rs. 50 lakhs (Rs. 34,999/- + 18% GST)</li>
                                 <!-- <li>Call, Chat, Email Support</li>
                                 <li>No hidden charges</li> -->
                              </ul>
                           </label>
                        </div>


                        <div class="gst_rdiobtn icc">
                           <label for="price_33" style="cursor: pointer;">
                              <input type="radio" id="price_33" name="form_price" value="2395||ITR Consultancy">&nbsp;<p>Rs 2395/-
                              </p>
                              <ul>
                                 <li>ITR Consultancy</li>
                                 <li>TAX consultation+ Notice Sending fee (Rs. 1999/- + 18% GST)</li>
                                 <!-- <li>Call, Chat, Email Support</li>
                                 <li>No hidden charges</li> -->
                              </ul>
                           </label>
                        </div>





                     </div>


                     <input type="hidden" id="is_submitted" value="0">

                     <input type="hidden" id="formName1" name="formName1" value="ITR">
                     <div class="form_group_button">
                        <button type="button" id="contact-submit" class="btn tsfb_started">Proceed Now</button>
                     </div>

                  </div>

               </form>
            </div>
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
            <h4 class="accordion-cus-head">What is Foundida (OLI)?</h4>
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

       

         <div data-port-id="child_ans_div_20" class="accordaion-main-div">
            <h4 class="accordion-cus-head">What if the other party doesn’t respond?</h4>
         </div>
         <div id="child_ans_div_20" style="display: none;" class="child-ans-div-1">
            <p class="child-ans-text">We make multiple attempts to notify the other party. If they do not respond within the stipulated time, further action can be taken, including escalation or recommendation to file in a formal consumer forum. </p>
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
                            Foundida is not a law firm and does not offer legal advice. The materials and services provided are not a substitute for professional legal counsel. The use of these materials or services does not create an Attorney-Client relationship. Foundida serves as a neutral platform that connects individuals seeking Online Dispute Resolution (ODR) services with arbitrators and mediators.
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
   window.wa_service_name = 'PF And ESIC Return Filing';
   window.wa_service_code = 'PFRTN';

   function selectPrice(val) {
      if (val == '16899') {
         $("#basic_price").prop("checked", true);
      } else if (val == '34899') {
         $("#standard_price").prop("checked", true);
      } else if (val == '49899') {
         $("#mega_price").prop("checked", true);
      }
   }

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
            state = $('#state option:selected').val(),
            is_prompted_whatsapp = 0,
            gclid_field = $('#gclid_field').val(),
            landing_uri = $('#landing_uri').val(),
            csrf_token = $('#csrf_token').val();

         if ($('input[name="is_prompted_whatsapp"]').prop('checked') == true) {
            is_prompted_whatsapp = 1;
         }
         // console.log('sending_req');

         $.ajax({
            url: "../../payment/submit_ad_new_service.php",
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
               if (data.success) {
                  fbq('track', 'Lead');
                  // $('#oliid').val(data.oliid);
                  // $('#second_div').show();
                  // $('#first_div').hide();
                  window.location.href = "https://www.foundida.com/lead-thanks-cls/?oli_id=" + data.oliid;
               } else {
                  alert(data.msg);
                  $('#nextBtn').prop('disabled', false);
               }
            },
            error: function(jqXHR, textStatus, errorThrown) {
               console.error("AJAX Request Failed: " + textStatus + ", " + errorThrown);
               alert("An error occurred while processing your request. Please try again later.");
               $('#nextBtn').prop('disabled', false);
            }
         });

      }
   });


   $(document).on('click', '#contact-submit', function() {
      var r = $(this);
      if ($('.oli-validate-form').valid()) {

         submitOli(r);

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
            scrollTop: 0
         });
      } else {
         $('html, body').animate({
            scrollTop: 0
         }, 0);
      }


   });
</script>

<script>
   function package_detail() {
      var selectedOption = $("#itr_serv_catagory").find('option:selected');
      var className = selectedOption.data('class'); // Get the value from data-class

      $('.gst_rdiobtn').hide();
      if (className) {
         $('.' + className).show();
      }

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

<script>
   function showTab(tabName) {
      // Hide all tab contents
      const tabContents = document.querySelectorAll('.tab-content');
      tabContents.forEach(content => {
         content.classList.remove('active');
      });

      // Remove active class from all tabs
      const tabs = document.querySelectorAll('.tab');
      tabs.forEach(tab => {
         tab.classList.remove('active');
      });

      // Show selected tab content
      document.getElementById(tabName).classList.add('active');

      // Add active class to clicked tab
      event.target.classList.add('active');
   }

   // Add smooth scrolling for mobile tabs
   document.addEventListener('DOMContentLoaded', function() {
      const tabsContainer = document.querySelector('.tabs');
      const tabs = document.querySelectorAll('.tab');

      tabs.forEach(tab => {
         tab.addEventListener('click', function() {
            // Scroll the clicked tab into view on mobile
            this.scrollIntoView({
               behavior: 'smooth',
               block: 'nearest',
               inline: 'center'
            });
         });
      });
   });
</script>

<script>
   // Tab switching functionality
   document.addEventListener('DOMContentLoaded', function() {
      const sidebarItems = document.querySelectorAll('.sidebar-item');
      const contentSections = document.querySelectorAll('.content-section');

      sidebarItems.forEach(item => {
         item.addEventListener('click', function() {
            // Remove active class from all sidebar items
            sidebarItems.forEach(si => si.classList.remove('active'));

            // Add active class to clicked item
            this.classList.add('active');

            // Hide all content sections
            contentSections.forEach(section => section.style.display = 'none');

            // Show corresponding content section
            const target = this.getAttribute('data-target');
            const targetContent = document.getElementById(target + '-content');
            if (targetContent) {
               targetContent.style.display = 'block';
            }
         });
      });
   });
</script>

<script>
   function toggleForms() {
      var hiddenForms = document.getElementById('hiddenForms');
      var viewAllBtn = document.getElementById('viewAllBtn');
      if (viewAllBtn && hiddenForms) {
            if (hiddenForms.style.display === 'none' || hiddenForms.style.display === '') {
               hiddenForms.style.display = 'block';
               viewAllBtn.style.display = 'none';
            } else {
               hiddenForms.style.display = 'none';
               viewAllBtn.style.display = 'inline-flex';
            }
      }
   }
</script>

<script>
   document.addEventListener("DOMContentLoaded", function() {
      var viewAllBtn = document.getElementById('viewAllBtnn');
      var hiddenForms = document.getElementById('hiddenFormss');

      if (viewAllBtn && hiddenForms) {
      viewAllBtn.addEventListener("click", function() {
         hiddenForms.style.display = 'block';
         viewAllBtn.style.display = 'none';
      });

      hiddenForms.querySelector('.view-all').addEventListener("click", function() {
         hiddenForms.style.display = 'none';
         viewAllBtn.style.display = 'inline-flex';
      });
      }
   });





   $('#itr_serv_catagory').on('change', function() {
      var selectedOption = $(this).find('option:selected');
      var className = selectedOption.data('class'); // Get the value from data-class

      $('.gst_rdiobtn').hide();
      if (className) {
         $('.' + className).show();
      }
   });
</script>
@endsection
