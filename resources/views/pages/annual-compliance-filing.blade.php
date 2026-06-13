@extends('layouts.app')

@section('meta')
<title>Annual Compliance Filing Online for Any Types of Company</title>
<meta name="description" content="Let our experts start filing your annual compliance today! India’s best panel ready to provide 360° online assistance for your annual compliances.">
<meta name="keywords" content="Annual Compliance Filing">
<link rel="canonical" href="https://www.foundida.com/services/online-annual-compliance-filing/"/>
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.foundida.com/services/online-annual-compliance-filing/">
<meta property="og:image" content="https://www.foundida.com/images/annual-compliance.webp">
<meta property="og:title" content="Annual Compliance Filing Online for Any Types of Company">
<meta property="og:site_name" content="Foundida">
<meta property="og:description" content="Let our experts start filing your annual compliance today! India’s best expert panel ready to provide 360° online assistance for your annual compliances.">
<meta property="og:locale" content="en-IN">
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@type": "FAQPage",
  "mainEntity": [{
    "@@type": "Question",
    "name": "What is Annual Compliance Filing?",
    "acceptedAnswer": {
      "@@type": "Answer",
      "text": "<p>Annual Compliance Filing is a regular update to the Govt. proving that the entity is conducting its business in accordance with the Companies Act. 2013. It has a few essentials like:</p>
<ul>
<li>
<p>A Board Meeting of the Director(s)</p>
</li>
<li>
<p>Annual General Meeting</p>
</li>
<li>
<p>Appointing an Auditor</p>
</li>
<li>
<p>Annual Registrar of Companies (ROC) filing</p>
</li>
<li>
<p>Income Tax Compliance</p>
</li>
</ul>"
    }
  },{
    "@@type": "Question",
    "name": "What are the penalties /consequences for late or non-filing of annual return?",
    "acceptedAnswer": {
      "@@type": "Answer",
      "text": "<ul>
<li>
<p>Late filing &ndash; Daily penalty of Rs 100 up to maximum Rs 5 Lac</p>
</li>
<li>
<p>Non-filing &ndash; In case of non-filing for three financial years at a row will cause the exclusion of Directors.</p>
</li>
</ul>"
    }
  },{
    "@@type": "Question",
    "name": "What are the required documents in the Annual Compliance process?",
    "acceptedAnswer": {
      "@@type": "Answer",
      "text": "For filing an Annual Compliance, the required documents are - Directors’ Board Meeting minutes, profit & loss balance sheet, conclusions from Annual General Meeting, Audit report, DSC of the Directors, and incorporation documents (PAN Card, Certificate of Incorporation)."
    }
  },{
    "@@type": "Question",
    "name": "When and where the AGM can be conducted?",
    "acceptedAnswer": {
      "@@type": "Answer",
      "text": "The AGM should be conducted during the business hours of the company and the AGM should be held in the registered office of the entity or in the same jurisdiction area in which the registered office of the entity is located."
    }
  },{
    "@@type": "Question",
    "name": "Can the board meeting be held through video conferencing?",
    "acceptedAnswer": {
      "@@type": "Answer",
      "text": "Yes. The board meeting can be conducted in an online audio-visual platform like a video conference any other forms."
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
   #company_type,
   #annual_turnover {
      height: 42px;
      border-radius: 0px;
      -webkit-border-radius: 0px;
      -moz-border-radius: 0px;
      -ms-border-radius: 0px;
   }

   .tabvalue {
      display: inline-table;
      width: 32%;
      padding: 0 2vw;
      vertical-align: top;
   }

   .tab_pack_area {
      width: 32%;
      display: inline-block;
      text-align: center;
   }

   .tab_pack_area h6 {
      color: #666;
      font-size: 12px;
   }

   .tab_pack h4 {
      font-size: 18px;
      font-weight: 300;
      color: #666;
   }

   .tab_pack h3 {
      font-size: 30px;
      font-weight: 600;
      color: #333;
   }

   .tab_pack1 {
      padding: 20px;
      background: #f7ddca;
      margin-bottom: 15px;
   }

   .tab_pack2 {
      padding: 20px;
      background: #bbffb4;
      margin-bottom: 15px;
   }

   .tab_pack3 {
      padding: 20px;
      background: #c9dbec;
      margin-bottom: 15px;
   }

   .audit_fees_toggle_block {
      padding-top: 40px;
      width: 40%;
      margin-left: 30px;
   }

   .audit_fees_toggle_block table {
      border-collapse: collapse;
   }

   .audit_fees_toggle_block table th {
      background: #ccc;
      text-align: center;
   }

   .audit_fees_toggle_block table th,
   .audit_fees_toggle_block table td {
      border: 1px solid #ccc;
      padding: 8px;
   }

   .audit_fees_toggle_block table tr:nth-child(even) {
      background: #efefef;
   }

   .audit_fees_toggle_block table tr:hover {
      background: #d1d1d1;
   }

   .audit_fees_toggle_block_h3 {
      font-size: 14px;
      margin-left: 30px;
      font-weight: 800;
   }

   .new_card_block {
      box-shadow: none;
      border: none;
      background: none;
   }

   @media screen and (max-width: 768px) {

      .tabvalue,
      .tab_pack_area {
         width: 100%;
      }

      .audit_fees_toggle_block {
         width: 100%;
         margin-left: 0;
      }

      .audit_fees_toggle_block_h3 {
         margin-left: 0;
      }
   }
</style>
<div class="row">
   <div id="banner">
      <img class="img-fluid" alt="Online Annual Compliance Filing" style="width: 100%" src="../../images/annual-compliance-thumb.webp">
   </div>
   <script>
      setTimeout(function() {
         document.getElementById("banner").innerHTML = `<img class="img-fluid" alt="Online Annual Compliance Filing" style="width:100%" src="../../images/annual-compliance.jpg">`
         document.getElementById("banner").classList.add("in");
      }, 2500);
   </script>
   <div class="container">
      <div class="col-sm-12 col-md-12 col-xs-12">
         <h1 class="title">Complete Annual Filing & Compliance for All Types of Pvt. Limited / One Person / LLP Company at an Unbeatable Price!</h1>
      </div>
      <div class="title-content">
         <p>Let our Experts Start Filing Your Annual Compliance Today! India’s Best Experts Panel Ready to Provide 360° Online Assistance for Your Annual Compliances</p>
      </div>
   </div>
</div>
<div class="container" style="margin-top: 20px">
   <div class="row">
      <div class="pull-left col-md-6 col-sm-12">
         <form id="contact" class="oli-validate-form" action="https://www.foundida.com/payment/submit_annual_compliances.php" method="post" enctype="multipart/form-data">
            <h3 class="styletrademarkformheader">Need Help with Annual Compliance & Filing?</h3>
            <h4>Fill Up the below Mentioned Form</h4>
            <input type="hidden" id="gclid_field" name="gclid_field" value="">
            <input type="hidden" id="landing_uri" name="landing_uri" value="https://www.foundida.com/services/online-annual-compliance-filing/">
            <input type="hidden" id="utm_content" name="utm_content">
            <input type="hidden" id="utm_source" name="utm_source">
            <input type="hidden" id="utm_medium" name="utm_medium">
            <input type="hidden" id="utm_campaign" name="utm_campaign">
            <input type="hidden" id="Adgroupid" name="Adgroupid">
            <input type="hidden" id="device" name="device">
            <input type="hidden" id="keyword_id" name="keyword_id">
            <input type="hidden" id="Campaignid" name="Campaignid" value="">
            <input type="hidden" id="landing_url" name="landing_url" value="">

            <fieldset id="first_div">
               <div class="state">
                  <lable>Type of Company <span style="color:red">*</span></lable>
                  <select name="company_type" id="company_type">
                     <option value="">Select Type of Company</option>
                     <option value="SPR">Sole Proprietorships</option>
                     <option value="OPC">One Person Company</option>
                     <option value="PCR">Private Limited Company (Pvt. Ltd.)</option>
                     <option value="PUBC">Public Limited Company</option>
                     <option value="LLP">Limited Liability Partnership (LLP)</option>
                     <!-- <option value="NIDHI">Nidhi Company Registration</option> -->
                     <option value="SEC8">Section 8 Company Registration</option>
                  </select>
               </div>
               <div class="name">
                  <lable>Company Name <span style="color:red">*</span></lable>
                  <input placeholder="Your Name" name="name" type="text" id="name" style="text-transform: uppercase">
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

               <div class="state">
                  <lable>Annual Turnover Range <span style="color:red">*</span></lable>
                  <select name="annual_turnover" id="annual_turnover">
                     <option value="">Select Annual Turnover Range </option>
                     <option data-attr="1" value="0-20 Lac">0 to 20 Lakhs </option>
                     <option data-attr="2" value="21-50 Lac">21 to 50 Lakhs</option>
                     <option data-attr="3" value="51-100 Lac">51 to 100 Lakhs</option>
                  </select>
               </div>
               <div class="gst_rdiobtn_outer compliance_price_chart" style="display: none;">
                  <div class="gst_rdiobtn">
                     <input type="radio" id="price_1" name="form_price" value="19999" checked>
                     <ul style="color: green">
                        <li>Annual Compliance for <span id="compliance_for"></span>
                           <p id="com_amount">Rs 19,999</p>
                        </li>
                     </ul>
                  </div>
               </div>
               <input type="hidden" name="package_name" id="package_name" value="">
               <div class="form_check">
   <label class="custom_check">I have read & agreed to the company's Terms and Conditions, disclaimer and refund policy, and also ready to accept calls, SMS, emails, etc. 
      <input type="checkbox" data-degree="°" name="is_prompted_whatsapp" checked value="1">
      <span class="form_checkmark"></span>
    </label>
</div>


               <img id="captcha_holder" src="https://www.foundida.com/payment/captcha.php" alt="Captcha">
               <img src="https://www.foundida.com/images/capta.webp" id="btnrefresh" alt="Captcha">
               <input type="text" name="captcha_code" id="captcha_code" class="pull-right" maxlength="4"
                  onkeyup="this.value = this.value.replace(/[^\d]+/g, '');" placeholder="Enter the captcha here..">

               <input type="hidden" id="is_submitted" value="0">
               <input type="hidden" name="phase_type" value="0">
               <input type="hidden" name="source_service" value="0">
               <button type="button" id="contact-submit" class="btn" data-submit="...Sending">Submit</button>
            </fieldset>
         </form>
      </div>
      <div class="pull-right col-md-6 col-sm-12 for-top-margin">
         <div class="row">
            <p>The Companies Act, 2013 of Indian Govt. legally mandates every entity in the country to follow the declarations of the Annual Compliance. For the Private Limited Companies (Pvt. Ltd.), One Person Companies (OPC), or Limited Liability Partnerships (LLP), Annual Compliance acts as a regular update to the Govt. that the entity is conducting its business under the particular Act. </p>
            <div id="accordion" role="tablist" aria-multiselectable="true">
               <div class="card ">
                  <div class="card-header" role="tab" id="headingOne">
                     <div class="mb-0">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                           <h3>Benefits of Filing from Foundida</h3>
                        </a>
                     </div>
                  </div>
                  <div id="collapseOne" class="collapse in" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="">
                     <div class="card-block new_card_block">
                        <ul>
                           <li class="required-documents">Our customer service is available in English and Hindi</li>
                           <li class="required-documents">Free Annual Compliance Drafting</li>
                           <li class="required-documents">Avail of Free Consultations- contact us to learn more</li>
                           <li class="required-documents">Statutory Audit with Audit Fees</li>
                           <li class="required-documents">Point-to-point update for upcoming compliances & requirements</li>
                           <li class="required-documents">Call, Chat, E-mail, support</li>
                           <li class="required-documents">Avail of your service at an the most competitive price</li>
                           <li class="required-documents">Reliable Expert Support</li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="card ">
                  <div class="card-header" role="tab" id="headingTwo">
                     <div class="mb-0">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="collapsed">
                           <h3>Why Choose Us for Your Annual Compliance?</h3>
                        </a>
                     </div>
                  </div>
                  <div id="collapseTwo" class="collapse in" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="">
                     <div class="card-block new_card_block">
                        <ul>
                           <li class="required-documents">Our Expert team is ready to serve you</li>
                           <li class="required-documents">Our experienced team will handle your accounts</li>
                           <li class="required-documents">Flawless accounting services</li>
                           <li class="required-documents">Experience 360° Corporate Business Compliance</li>
                           <li class="required-documents">Digital document submission- no paperwork </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row for-top-margin">
            <div class="col-md-12 col-sm-12">
            </div>
         </div>
      </div>
   </div>
</div>
<section class="company_tab">
   <div class="container">
      <div class="row">
         <div class="col-md-12 col-sm-12" style="margin-top: 50px">
            <div class="tab tab-2">
               <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Pvt. Ltd. Company / One Person Company </button>
               <button class="tablinks" onclick="openCity(event, 'Sole')">Sole Proprietorship
               </button>
               <button class="tablinks" onclick="openCity(event, 'Paris')">Limited Liability Partnership (LLP)
               </button>

               <button class="tablinks" onclick="openCity(event, 'section_8')">Section 8 company
               </button>
               <button class="tablinks" onclick="openCity(event, 'pub_lim')">Public Limited Company
               </button>
               <!-- <button class="tablinks" onclick="openCity(event, 'nidhi_com')">Nidhi company registration
                    </button>     -->
            </div>

            <div id="London" class="tabcontent">
               <div class="tabvalue">
                  <h3>Pvt. Ltd. Company / One Person Company </h3>
                  <ul>
                     <li>ADT – 1: Auditor Appointment</li>
                     <li>AOC – 4: Annual Return Filing (within 30 days of Company’s AGM)</li>
                     <li>MGT – 7: Annual Return Filing (within 60 days of Company’s AGM)</li>
                     <li>DIR – 3: KYC of the Company Director(s)</li>
                     <li>INC – 20A: Declaration for the commencement of business</li>
                     <li>Financial statement preparation</li>
                     <li>Income Tax Return Filings</li>
                  </ul>

               </div>
               <div class="tabvalue">
                  <h3>Required Documents </h3>
                  <ul>
                     <li>Directors’ Board Meeting minutes</li>
                     <li>Profit & Loss Balance Sheet of Pvt. Ltd./OPC</li>
                     <li>Conclusions from the Annual General Meeting (AGM)</li>
                     <li>Audit report</li>
                     <li>Financial statement preparation </li>
                     <li>Income Tax Return Filings</li>
                  </ul>
               </div>
               <div class="tab_pack_area">
                  <div class="tab_pack tab_pack1">
                     <h4>Basic:</h4>
                     <h3>Rs. 14,999 only</h3>
                     <h5>+ 18% GST for the turnover upto 20 lakhs</h5>
                  </div>
                  <div class="tab_pack tab_pack2">
                     <h4>Standard:</h4>
                     <h3>Rs. 24,999 only</h3>
                     <h5>+ 18% GST for the turnover of 20 - 50 lakhs</h5>
                  </div>
                  <div class="tab_pack tab_pack3">
                     <h4>Premium:</h4>
                     <h3>Rs. 34,999 only</h3>
                     <h5>+ 18% GST for the turnover of 51 - 100 lakhs</h5>
                  </div>
                  <h6>*(Exclusive of govt fees & Audit fees)</h6>
               </div>
            </div>

            <div id="Sole" class="tabcontent">
               <div class="tabvalue">
                  <h3>Sole Proprietorship</h3>
                  <ul>
                     <li>Record daily sales and purchases</li>
                     <li>Bank reconciliation entries</li>
                     <li>Journal and contra entries</li>
                     <li>Maintain GSTR-1 & GSTR-3B</li>
                     <li>Prepare Balance Sheet & P&L</li>
                     <li>File required forms and returns</li>
                     <li>Coordinate with auditors</li>
                     <li>Ensure timely compliance submissions</li>
                  </ul>
               </div>
               <div class="tabvalue">
                  <h3>Required Documents </h3>
                  <ul>
                     <li>Conclusions from the Annual General Meeting (AGM)</li>
                     <li>Profit & Loss Balance Sheet</li>
                     <li>Audit report</li>
                     <li>DSC of the Partners </li>
                     <li>Incorporation documents (PAN Card, Certificate of Incorporation)</li>
                  </ul>
               </div>
               <div class="tab_pack_area">
                  <div class="tab_pack tab_pack1 new_pack_block_modification">
                     <table>
                        <thead>
                           <tr>
                              <td colspan="2" class="new_pack_block_modification_one">Turnover Range 0 - 20 Lakh (Non-GST / Exempt)</td>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td class="new_pack_block_modification_two new_pack_block_modification_two_border">Fees</td>
                              <td class="new_pack_block_modification_two new_pack_block_modification_two_bold">₹ 11,999</td>
                           </tr>

                           <tr>
                              <td class="new_pack_block_modification_two new_pack_block_modification_two2 new_pack_block_modification_two_border">Facility</td>
                              <td class="new_pack_block_modification_two new_pack_block_modification_two2">Free GST</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
                  <div class="tab_pack tab_pack2 new_pack_block_modification">
                     <table>
                        <thead>
                           <tr>
                              <td colspan="2" class="new_pack_block_modification_one">Turnover Range 20 - 50 Lakh (GST Registered)</td>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td class="new_pack_block_modification_two new_pack_block_modification_two_border">Fees</td>
                              <td class="new_pack_block_modification_two new_pack_block_modification_two_bold">₹ 24,999</td>
                           </tr>

                           <tr>
                              <td class="new_pack_block_modification_two new_pack_block_modification_two2 new_pack_block_modification_two_border">Facility</td>
                              <td class="new_pack_block_modification_two new_pack_block_modification_two2">Free GST</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
                  <div class="tab_pack tab_pack3 new_pack_block_modification">
                     <table>
                        <thead>
                           <tr>
                              <td colspan="2" class="new_pack_block_modification_one">Turnover Range 50 Lakh Onwards (High Volume / Audit)</td>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td class="new_pack_block_modification_two new_pack_block_modification_two_border">Fees</td>
                              <td class="new_pack_block_modification_two new_pack_block_modification_two_bold">₹ 39,999</td>
                           </tr>

                           <tr>
                              <td class="new_pack_block_modification_two new_pack_block_modification_two2 new_pack_block_modification_two_border">Facility</td>
                              <td class="new_pack_block_modification_two new_pack_block_modification_two2">Free Tax Audit Asst.*</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
                  <h6>*(Exclusive of govt fees & Audit fees)</h6>
               </div>
            </div>

            <div id="Paris" class="tabcontent">
               <div class="tabvalue">
                  <h3>Limited Liability Partnership (LLP)</h3>
                  <ul>
                     <li>Form 8: Statement of Accounts</li>
                     <li>Form 11: Annual Return of LLP</li>
                     <li>Financial statement preparation</li>
                     <li>Income Tax Return Filings</li>
                     <li>DIR-3 Kyc of the Directors</li>
                  </ul>
               </div>
               <div class="tabvalue">
                  <h3>Required Documents </h3>
                  <ul>
                     <li>Conclusions from the Annual General Meeting (AGM)</li>
                     <li>Profit & Loss Balance Sheet of LLP</li>
                     <li>Audit report</li>
                     <li>DSC of the Partners </li>
                     <li>Incorporation documents (PAN Card, Certificate of Incorporation)</li>
                  </ul>
               </div>
               <div class="tab_pack_area">
                  <div class="tab_pack tab_pack1">
                     <h4>Basic:</h4>
                     <h3>Rs. 7,999 only</h3>
                     <h5>+ 18% GST for the turnover upto 20 lakhs</h5>
                  </div>
                  <div class="tab_pack tab_pack2">
                     <h4>Standard:</h4>
                     <h3>Rs. 14,999 only</h3>
                     <h5>+ 18% GST for the turnover of 20 - 50 lakhs</h5>
                  </div>
                  <div class="tab_pack tab_pack3">
                     <h4>Premium:</h4>
                     <h3>Rs. 24,999 only</h3>
                     <h5>+ 18% GST for the turnover of 51 - 100 lakhs</h5>
                  </div>
                  <h6>*(Exclusive of govt fees & Audit fees)</h6>
               </div>
            </div>
            <div id="section_8" class="tabcontent">
               <div class="tabvalue">
                  <h3>Section 8 company</h3>
                  <ul>
                     <li>ADT – 1: Auditor Appointment</li>
                     <li>AOC – 4: Annual Return Filing (within 30 days of Company’s AGM)</li>
                     <li>MGT – 7: Annual Return Filing (within 60 days of Company’s AGM)</li>
                     <li>DIR – 3: KYC of the Company Director(s)</li>
                     <li>INC – 20A: Declaration for the commencement of business</li>
                     <li>Financial statement preparation</li>
                     <li>Income Tax Return Filings</li>
                  </ul>
               </div>
               <div class="tabvalue">
                  <h3> Required Documents</h3>
                  <ul>
                     <li>Directors’ Board Meeting minutes</li>
                     <li>Profit & Loss Balance Sheet </li>
                     <li>Conclusions from the Annual General Meeting (AGM)</li>
                     <li>Audit report</li>
                     <li>DSC of the Directors</li>
                     <li>Incorporation documents (PAN Card, Certificate of Incorporation)</li>
                  </ul>
               </div>
               <div class="tab_pack_area">
                  <div class="tab_pack tab_pack1">
                     <h4>Basic:</h4>
                     <h3>Rs. 14,999 only</h3>
                     <h5>+ 18% GST for the turnover upto 20 lakhs</h5>
                  </div>
                  <div class="tab_pack tab_pack2">
                     <h4>Standard:</h4>
                     <h3>Rs. 24,999 only</h3>
                     <h5>+ 18% GST for the turnover of 20 - 50 lakhs</h5>
                  </div>
                  <div class="tab_pack tab_pack3">
                     <h4>Premium:</h4>
                     <h3>Rs. 34,999 only</h3>
                     <h5>+ 18% GST for the turnover of 51 - 100 lakhs</h5>
                  </div>
                  <h6>*(Exclusive of govt fees & Audit fees)</h6>
               </div>
            </div>
            <div id="pub_lim" class="tabcontent">
               <div class="tabvalue tabvalue99">
                  <h3>Public Limited Company </h3>
                  <ul>
                     <li>ADT – 1: Auditor Appointment</li>
                     <li>AOC – 4: Annual Return Filing (within 30 days of Company’s AGM)</li>
                     <li>MGT – 7: Annual Return Filing (within 60 days of Company’s AGM)</li>
                     <li>DIR – 3: KYC of the Company Director(s)</li>
                     <li>INC – 20A: Declaration for the commencement of business</li>
                     <li>Financial statement preparation</li>
                     <li>Income Tax Return Filings</li>
                  </ul>
               </div>
               <div class="tabvalue tabvalue99">
                  <h3> Required Documents</h3>
                  <ul>
                     <li>Directors’ Board Meeting minutes</li>
                     <li>Profit & Loss Balance Sheet </li>
                     <li>Conclusions from the Annual General Meeting (AGM)</li>
                     <li>Audit report</li>
                     <li>DSC of the Directors</li>
                     <li>Incorporation documents (PAN Card, Certificate of Incorporation)</li>
                  </ul>
               </div>
               <div class="tab_pack_area tabvalue99">
                  <div class="tab_pack tab_pack1">
                     <h4>Basic:</h4>
                     <h3>Rs. 14,999 only</h3>
                     <h5>+ 18% GST for the turnover upto 20 lakhs</h5>
                  </div>
                  <div class="tab_pack tab_pack2">
                     <h4>Standard:</h4>
                     <h3>Rs. 24,999 only</h3>
                     <h5>+ 18% GST for the turnover of 20 - 50 lakhs</h5>
                  </div>
                  <div class="tab_pack tab_pack3">
                     <h4>Premium:</h4>
                     <h3>Rs. 34,999 only</h3>
                     <h5>+ 18% GST for the turnover of 51 - 100 lakhs</h5>
                  </div>
                  <h6>*(Exclusive of govt fees & Audit fees)</h6>
               </div>
            </div>
            <div id="nidhi_com" class="tabcontent">
               <div class="tabvalue">
                  <h3>Nidhi company registration</h3>
                  <ul>
                     <li>ADT – 1: Auditor Appointment</li>
                     <li>AOC – 4: Annual Return Filing (within 30 days of Company’s AGM)</li>
                     <li>MGT – 7: Annual Return Filing (within 60 days of Company’s AGM)</li>
                     <li>DIR – 3: KYC of the Company Director(s)</li>
                     <li>INC – 20A: Declaration for the commencement of business</li>
                     <li>Financial statement preparation</li>
                     <li>Income Tax Return Filings</li>
                     <li>NDH -1,2,3 & 4</li>
                  </ul>
               </div>
               <div class="tabvalue">
                  <h3> Required Documents</h3>
                  <ul>
                     <li>Directors’ Board Meeting minutes</li>
                     <li>Profit & Loss Balance Sheet </li>
                     <li>Conclusions from the Annual General Meeting (AGM)</li>
                     <li>Audit report</li>
                     <li>DSC of the Directors</li>
                     <li>Incorporation documents (PAN Card, Certificate of Incorporation)</li>
                  </ul>
               </div>
               <div class="tab_pack_area">
                  <div class="tab_pack tab_pack1">
                     <h4>Basic:</h4>
                     <h3>Rs. 14,999 only</h3>
                     <h5>+ 18% GST for the turnover upto 20 lakhs</h5>
                  </div>
                  <div class="tab_pack tab_pack2">
                     <h4>Standard:</h4>
                     <h3>Rs. 24,999 only</h3>
                     <h5>+ 18% GST for the turnover of 20 - 50 lakhs</h5>
                  </div>
                  <div class="tab_pack tab_pack3">
                     <h4>Premium:</h4>
                     <h3>Rs. 34,999 only</h3>
                     <h5>+ 18% GST for the turnover of 51 - 100 lakhs</h5>
                  </div>
                  <h6>*(Exclusive of govt fees & Audit fees)</h6>
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
</section><section id="howWework" class="block_padding" style="margin-top:40px;">
   <div class="container">
      <div class="row">
         <div class="block_heading">
            <h2 style="color: black" class="benifts-heading">How We Work?</h2>
         </div>
         <div class="col-sm-12 col-md-12">
            <div class="row">
               <div class="col-md-offset-2 col-md-2 col-md-12">
                  <div class="process_section">
                     <i>1</i>

                     <p>Fill the form &amp; Make the payment</p>
                     <p>⟶</p>
                  </div>
               </div>
               <div class="col-md-2 col-md-12">
                  <div class="process_section">
                     <i>2</i>

                     <p>Share the required documents post Expert consultation</p>
                     <p>⟶</p>
                  </div>
               </div>
               <div class="col-md-2 col-md-12">
                  <div class="process_section">
                     <i>3</i>

                     <p>Our experts will start drafting the requirements</p>
                     <p>⟶</p>
                  </div>
               </div>
               <div class="col-md-2 col-md-12">
                  <div class="process_section">
                     <i>4</i>

                     <p>Finalizing & Filing your Annual Compliance post your approval </p>
                     <p> &#128077;</p>
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
               <h4 class="accordion-cus-head">What is Annual Compliance Filing?</h4>
            </div>
            <div id="child_ans_div_1" class="child-ans-div-1">

               <p class="child-ans-text">Annual Compliance Filing is a regular update to the Govt. proving that the entity is conducting its business in accordance with the Companies Act. 2013. It has a few essentials like:</p>
               <ul>
                  <li>
                     <p class="child-ans-text">A Board Meeting of the Director(s)</p>
                  </li>
                  <li>
                     <p class="child-ans-text">Annual General Meeting</p>
                  </li>
                  <li>
                     <p class="child-ans-text">Appointing an Auditor </p>
                  </li>
                  <li>
                     <p class="child-ans-text">Annual Registrar of Companies (ROC) filing</p>
                  </li>
                  <li>
                     <p class="child-ans-text">Income Tax Compliance</p>
                  </li>
               </ul>
            </div>

            <div data-port-id="child_ans_div_2" class="accordaion-main-div">

               <h4 class="accordion-cus-head">What are the penalties /consequences for late or non-filing of annual return?</h4>

            </div>
            <div id="child_ans_div_2" style="display: none;" class="child-ans-div-1">
               <ul>
                  <li>
                     <p class="child-ans-text">Late filing – Daily penalty of Rs 100 up to maximum Rs 5 Lac </p>
                  </li>
                  <li>
                     <p class="child-ans-text">Non-filing – In case of non-filing for three financial years at a row will cause the exclusion of Directors.</p>
                  </li>
               </ul>
            </div>



            <div data-port-id="child_ans_div_6" class="accordaion-main-div">
               <h4 class="accordion-cus-head">How much will be my Audit Fees?</h4>
            </div>
            <div id="child_ans_div_6" style="display: none;" class="child-ans-div-1">
               <p class="child-ans-text">The audit fees completely depend upon the turnover of your business, some of them are mentioned below</p>
               <div class="audit_fees_toggle_block">
                  <table class="my_table">
                     <tr>
                        <th>Turnover</th>
                        <th>Audit Fees</th>
                     </tr>
                     <tr>
                        <td>0 - 10L</td>
                        <td>Rs. 3,510/-</td>
                     </tr>
                     <tr>
                        <td>10L - 20L</td>
                        <td>Rs. 5,460/-</td>
                     </tr>
                     <tr>
                        <td>20L - 40L</td>
                        <td>Rs. 6,760/-</td>
                     </tr>
                     <tr>
                        <td>40L - 50L</td>
                        <td>Rs. 7,410/-</td>
                        <!-- </tr>
                           <tr>
                           <td>50L - 1Cr</td>
                           <td>Rs. 30,000/-</td>
                        </tr>
                           <tr>
                           <td>1Cr - 5Cr</td>
                           <td>Rs. 40,000/-</td>
                        </tr>
                           <tr>
                           <td>5Cr - 10Cr</td>
                           <td>Rs. 50,000/-</td>
                        </tr> -->

                  </table>

               </div>
               <h3 class="audit_fees_toggle_block_h3">*Note that GST will be applicable wherever required.</h3>
            </div>



            <div data-port-id="child_ans_div_3" class="accordaion-main-div">
               <h4 class="accordion-cus-head">What are the required documents in the Annual Compliance process?</h4>
            </div>
            <div id="child_ans_div_3" style="display: none;" class="child-ans-div-1">
               <p class="child-ans-text">For filing an Annual Compliance, the required documents are - Directors’ Board Meeting minutes, profit & loss balance sheet, conclusions from Annual General Meeting, Audit report, DSC of the Directors, and incorporation documents (PAN Card, Certificate of Incorporation). </p>
            </div>

            <div data-port-id="child_ans_div_4" class="accordaion-main-div">
               <h4 class="accordion-cus-head">When and where the AGM can be conducted?</h4>
            </div>
            <div id="child_ans_div_4" style="display: none;" class="child-ans-div-1">
               <p class="child-ans-text">The AGM should be conducted during the business hours of the company and the AGM should be held in the registered office of the entity or in the same jurisdiction area in which the registered office of the entity is located. </p>
            </div>

            <div data-port-id="child_ans_div_5" class="accordaion-main-div">
               <h4 class="accordion-cus-head">Can the board meeting be held through video conferencing?</h4>
            </div>
            <div id="child_ans_div_5" style="display: none;" class="child-ans-div-1">
               <p class="child-ans-text">Yes. The board meeting can be conducted in an online audio-visual platform like a video conference any other forms. </p>
            </div>
         </div>
      </div>
   </div>
</section>
<script>
   function openCity(evt, cityName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
         tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
         tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
   }

   // Get the element with id="defaultOpen" and click on it
   document.getElementById("defaultOpen").click();
</script>

<!----------here is the section of we are associates partners ----------->
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
   window.wa_service_name = 'Annual Filing Compliance';
   window.wa_service_code = 'AFC';

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
         company_type: {
            required: true
         },
         annual_turnover: {
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
         address: {
            required: "Please enter your Address"
         },
         pin: {
            required: "Please enter your Pin nNumber.",
            number: "Please enter a valid Pin Number.",
            rangelength: "Pin Number should be of 6 digit only"
         },
         company_type: {
            required: "Please select type of Company"
         },
         annual_turnover: {
            required: "Please select Annual Turnover Range"
         }
      }
   });

   $(document).on('change', '#company_type', function(e) {
      var company_type = $('#company_type option:selected').val();
      var annual_turnover = $('#annual_turnover option:selected').val();
      var annual_turnoverAttr = $('#annual_turnover option:selected').attr('data-attr');
      var amt, package_name;
      if ($("#company_type").valid()) {
         if (annual_turnover !== '') {
            if (company_type == 'LLP') {
               amt = annual_turnoverAttr == '1' ? '7999' : (annual_turnoverAttr == '2' ? '14999' : '24999');
               package_name = annual_turnoverAttr == '1' ? 'AFCBSLLP' : (annual_turnoverAttr == '2' ? 'AFCSDLLP' : 'AFCPRLLP');
            } else if (company_type == 'SPR') {
               amt = annual_turnoverAttr == '1' ? '11999' : (annual_turnoverAttr == '2' ? '24999' : '34999');
               package_name = annual_turnoverAttr == '1' ? 'AFCBSSPR' : (annual_turnoverAttr == '2' ? 'AFCSDSPR' : 'AFCPRSPR');
            } else if (company_type == 'OPC') {
               amt = annual_turnoverAttr == '1' ? '14999' : (annual_turnoverAttr == '2' ? '24999' : '34999');
               package_name = annual_turnoverAttr == '1' ? 'AFCBSOPC' : (annual_turnoverAttr == '2' ? 'AFCSDOPC' : 'AFCPROPC');
            } else if (company_type == 'PCR') {
               amt = annual_turnoverAttr == '1' ? '14999' : (annual_turnoverAttr == '2' ? '24999' : '34999');
               package_name = annual_turnoverAttr == '1' ? 'AFCBSPVT' : (annual_turnoverAttr == '2' ? 'AFCSDPVT' : 'AFCPRPVT');
            } else if (company_type == 'PUBC') {
               amt = annual_turnoverAttr == '1' ? '14999' : (annual_turnoverAttr == '2' ? '24999' : '34999');
               package_name = annual_turnoverAttr == '1' ? 'AFCBSPLC' : (annual_turnoverAttr == '2' ? 'AFCSDPLC' : 'AFCPRPLC');
            } else if (company_type == 'SEC8') {
               amt = annual_turnoverAttr == '1' ? '14999' : (annual_turnoverAttr == '2' ? '24999' : '34999');
               package_name = annual_turnoverAttr == '1' ? 'AFCBSSEC8' : (annual_turnoverAttr == '2' ? 'AFCSDSEC8' : 'AFCPRSEC8');
            }
            var compliance_for = company_type == 'OPC' ? 'One Person' : (company_type == 'PCR' ? 'Private Company' : (company_type == 'NIDHI' ? 'Nidhi Company' : (company_type == 'SEC8' ? 'Section 8 Company' : (company_type == 'PUBC' ? 'Public Company' : (company_type == 'SPR' ? 'Sole Proprietorships' : 'Limited Liability')))));

            $('.compliance_price_chart').find('#compliance_for').html(compliance_for);
            $('.compliance_price_chart').find('#com_amount').html('Rs. ' + amt);
            $('.compliance_price_chart').find('#price_1').val(amt);
            $('#package_name').val(package_name);
            // $('.compliance_price_chart').show();
         }
      } else {
         $('.compliance_price_chart').hide();
      }
   });

   $(document).on('change', '#annual_turnover', function(e) {
      var company_type = $('#company_type option:selected').val();
      var annual_turnover = $('#annual_turnover option:selected').val();
      var annual_turnoverAttr = $('#annual_turnover option:selected').attr('data-attr');
      var amt, package_name;
      if ($("#annual_turnover").valid()) {
         if (company_type == 'LLP') {
            amt = annual_turnoverAttr == '1' ? '7999' : (annual_turnoverAttr == '2' ? '14999' : '24999');
            package_name = annual_turnoverAttr == '1' ? 'AFCBSLLP' : (annual_turnoverAttr == '2' ? 'AFCSDLLP' : 'AFCPRLLP');
         } else if (company_type == 'SPR') {
            amt = annual_turnoverAttr == '1' ? '11999' : (annual_turnoverAttr == '2' ? '24999' : '34999');
            package_name = annual_turnoverAttr == '1' ? 'AFCBSSPR' : (annual_turnoverAttr == '2' ? 'AFCSDSPR' : 'AFCPRSPR');
         } else if (company_type == 'OPC') {
            amt = annual_turnoverAttr == '1' ? '14999' : (annual_turnoverAttr == '2' ? '24999' : '34999');
            package_name = annual_turnoverAttr == '1' ? 'AFCBSOPC' : (annual_turnoverAttr == '2' ? 'AFCSDOPC' : 'AFCPROPC');
         } else if (company_type == 'PCR') {
            amt = annual_turnoverAttr == '1' ? '14999' : (annual_turnoverAttr == '2' ? '24999' : '34999');
            package_name = annual_turnoverAttr == '1' ? 'AFCBSPVT' : (annual_turnoverAttr == '2' ? 'AFCSDPVT' : 'AFCPRPVT');
         } else if (company_type == 'PUBC') {
            amt = annual_turnoverAttr == '1' ? '14999' : (annual_turnoverAttr == '2' ? '24999' : '34999');
            package_name = annual_turnoverAttr == '1' ? 'AFCBSPLC' : (annual_turnoverAttr == '2' ? 'AFCSDPLC' : 'AFCPRPLC');
         } else if (company_type == 'SEC8') {
            amt = annual_turnoverAttr == '1' ? '14999' : (annual_turnoverAttr == '2' ? '24999' : '34999');
            package_name = annual_turnoverAttr == '1' ? 'AFCBSSEC8' : (annual_turnoverAttr == '2' ? 'AFCSDSEC8' : 'AFCPRSEC8');
         }

         var compliance_for = company_type == 'OPC' ? 'One Person' : (company_type == 'PCR' ? 'Private Company' : (company_type == 'NIDHI' ? 'Nidhi Company' : (company_type == 'SEC8' ? 'Section 8 Company' : (company_type == 'PUBC' ? 'Public Company' : (company_type == 'SPR' ? 'Sole Proprietorships' : 'Limited Liability')))));

         $('.compliance_price_chart').find('#compliance_for').html(compliance_for);
         $('.compliance_price_chart').find('#com_amount').html('Rs. ' + amt);
         $('.compliance_price_chart').find('#price_1').val(amt);
         $('#package_name').val(package_name);
         // $('.compliance_price_chart').show();
      } else {
         e.preventDefault();
         e.stopImmediatePropagation();
         $('.compliance_price_chart').hide();
      }
   });

   $(document).on('click', '#contact-submit', function() {
      var r = $(this);

      if ($('.oli-validate-form').valid()) {
         verifyCaptcha(r);
      }
   })

   function company_name_check() {

      let company_type = $('#company_type').val();
      let array = [];
      let msg = '';
      if (company_type == 'OPC') {
         array = ['opc pvt ltd'];
         msg = 'company name must contain "opc pvt ltd"';
      } else if (company_type == 'PCR') {
         array = ['pvt ltd'];
         msg = 'company name must contain "pvt ltd"';
      } else if (company_type == 'PUBC') {
         array = ['ltd'];
         msg = 'company name must contain "ltd"';
      } else if (company_type == 'LLP') {
         array = ['llp'];
         msg = 'company name must contain "llp"';
      } else if (company_type == 'NIDHI') {
         array = ['ltd'];
         msg = 'company name must contain "ltd"';
      } else if (company_type == 'SEC8') {
         array = ['pvt ltd'];
         msg = 'company name must contain "pvt ltd"';
      }

      const substring = $('#name').val().toLowerCase();

      for (let i = 0; i < array.length; i++) {
         if (substring.includes(array[i])) {
            return {
               'success': true
            };
         }
      }
      return {
         'success': false,
         'msg': msg
      };
   }

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
         .html('Redirecting to Payment Lobby...')
         .css('pointer-events', 'none');
      setTimeout(function() {
         $('.oli-validate-form').submit();
      }, 1200);
   }

   function removeSpaces(string) {
      return string.split(' ').join('');
   }

   $(document).on('click', '#btnrefresh', function() {
      var url = window.location.origin + '/payment/captcha.php?' + Math.random();
      document.getElementById('captcha_holder').src = url;
      document.getElementById('captcha_code').value = '';
      return false;
   });
</script>
@endsection
