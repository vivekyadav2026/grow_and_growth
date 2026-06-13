@extends('layouts.app')

@section('meta')
<title>Settle Your Real Estate Disputes Faster through ODR</title>
<meta name="description" content="Resolve real estate and property disputes quickly through ODR. Fast, secure, and expert-guided online resolution with Foundida">
<!-- <meta name="keywords" content="Trademark Registration"> -->
<link rel="canonical" href="https://www.foundida.com/services/property-dispute/"/>
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.foundida.com/services/property-dispute/">
<!-- <meta property="og:image" content="https://www.foundida.com/images/resolve-consumer-complaint-through-odr.webp"> -->
<meta property="og:image" content="https://www.foundida.com/images/property-dispute/quick-odr-resolution-for-property-issues.webp">
<meta property="og:title" content="Quick ODR Resolution for Property Issues">
<meta property="og:site_name" content="Foundida">
<meta property="og:description" content="Resolve real estate and property disputes faster through ODR. Get expert help, secure sessions, and a smooth online resolution experience.">
<meta property="og:locale" content="en-IN">
@endsection

@section('styles')
<!--      <link rel="stylesheet" type="text/css" href="https://www.foundida.com/css/bootstrap.min.css">-->
   <!-- <link rel="stylesheet" type="text/css" href="https://www.foundida.com/css/cut.css"> -->
   <!-- <link rel="stylesheet" type="text/css" href="https://www.foundida.com/css/alternative-contact-popup.css"> -->
   <!-- <link rel="stylesheet" href="https://www.foundida.com/css/brands.min.css"> -->
   <!-- <link rel="stylesheet" href="https://www.foundida.com/css/solid.min.css"> -->
@endsection

@section('content')
<section class="one common_class cstm_onnee">
   <div class="container">
      <div class="row custom_row">

         <div class="col-md-7 col_one cstm_margn_tp">
            <div class="one-lakh-img">
               <img src="https://www.foundida.com/images/property-dispute/satisfied-modification.webp" width="250" height="450" fetchpriority="high" decoding="async" alt="Property dispute help">
            </div>
            <div class="one_left cstm_left_one">
               <h1>Facing a Real Estate or <span>Property Dispute?</span></h1>
               <div class="one_left_inner">
                  <p>Settle Your Property Conflicts Online with Online Dispute Resolution.</p>

                  <div class="form_block_left_inner_holder">



                     <div class="new_grid">
                        <div class="form_block_left_inner_left_holder">
                           <div class="fblil_left">
                              <img src="https://www.foundida.com/images/property-dispute/rating.webp" width="170" height="340" loading="lazy" alt="rating">
                           </div>
                           <div class="fblil_left">
                              <img src="https://www.foundida.com/images/property-dispute/clients-modification.webp" width="170" height="340" loading="lazy" alt="clients">
                           </div>

                        </div>
                     </div>

                  </div>
               </div>
            </div>
         </div>

         <div class="col-md-5 col_two">
            <div class="one_right cstm_orght">
               <h5>File Real Estate or Property Dispute</h5>
               <!-- <h4>Submit Your Dispute Here</h4> -->
               <form id="contact2" class="form_one_right oli-validate-form" action="https://www.foundida.com/payment/SubmitPropertyDispute.php" method="post" enctype="multipart/form-data">

                  <input type="hidden" id="gclid_field" name="gclid_field" value="">
                  <input type="hidden" id="landing_uri" name="landing_uri" value="https://www.foundida.com/services/property-dispute/">


                  <section id="first_step">
                     <fieldset>
                        <!-- <label>Name</label> -->
                        <input placeholder="Your Full Name" id="name" autocomplete="off" name="name" type="text">
                     </fieldset>
                     <fieldset>
                        <!-- <label>Email</label> -->
                        <input placeholder="Your Email Address" id="email" autocomplete="off" name="email" type="email">
                     </fieldset>
                     <fieldset>
                        <!-- <label>Mobile</label> -->
                        <input placeholder="Your Mobile Number" id="mobile" autocomplete="off" name="mobile" type="tel" maxlength="10">
                     </fieldset>

                     <fieldset>
                        <!-- <label>State</label> -->
                        <select name="state" id="state">
                           <option value="">Select State</option>
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
                     <input type="hidden" name="csrf_token" id="csrf_token" value="6b4b7fc0d952be725dd0da9687b6f6659f0cfd2694f3101bbceaa268eb82490a">


                     <input type="hidden" id="oliid" name="oli_id">
                     <div class="form_check">
                        <label class="custom_check">I have read and understood the company's Terms and Conditions, Refund Policy, and the scope and nature of the Online Dispute Resolution (ODR) process. I consent to receiving calls, SMS, emails, and other forms of communication.
                           <input type="checkbox" data-degree="°" name="is_prompted_whatsapp" checked="" value="1">
                           <span class="form_checkmark"></span>
                        </label>
                     </div>
                     <fieldset>
                        <button class="btn btn-success pull-right" type="button" id="nextBtn">Apply</button>
                     </fieldset>
                     <div id="gtm_visibility" hidden> .... </div>

                  </section>
                  <section id="second_step" style="display:none;">
                     <div id="gtm_visibility-0">
                        <fieldset>
                           <label>Loss/Dispute Amount </label>
                           <span class="subhead" style="color: #808080">(Suppose you have purchased any product or availed any service amounting Rs.1999 which has suffered a loss, Rs. 1999 is your loss/disputed amount.)</span>
                           <input placeholder="Loss/Dispute Amount " id="DisputeAmmountFLD" name="DisputeAmmount" autocomplete="off" type="number" onkeydown="javascript: return event.keyCode == 69 ? false : true">
                        </fieldset>
                        <fieldset>
                           <label>Full Detail/Topic</label>
                           <textarea placeholder="You can write the full complaint or just write the topic. We will call you for the details..." name="ComplaintDetail" required=""></textarea>
                        </fieldset>
                        <fieldset>
                           <fieldset>
                              <label>How did you hear about us?</label>
                              <select name="add_from">
                                 <option value="">--Select--</option>
                                 <option value="Zee News">Zee News</option>
                                 <option value="Republic TV">Republic TV</option>
                                 <option value="Google">Google</option>
                                 <option value="Facebook">Facebook</option>
                                 <option value="Newspaper">Newspaper</option>
                                 <option value="Others">Others</option>
                              </select>
                           </fieldset>
                           <fieldset>
                              <label>Attachment(s)</label>
                              <input type="file" id="file" style="border: 1px solid #aaa; height: 35px; width: 100%" name="file[]" tabindex="3" placeholder="Please upload file.." multiple=""> <span style="color: green">(Optional: Bill/Invoice/Other Document)</span>
                           </fieldset>
                           <fieldset>
                              <input type="radio" class="form_price" data-tag="1" name="price" value="2999" checked="">&nbsp;
                              <span style="color: green">1 to < 50k=Rs. 2999 + 18% GST</span>
                           </fieldset>
                           <fieldset>
                              <input type="radio" class="form_price" data-tag="2" name="price" value="4999">&nbsp;
                              <span style="color: green">50k to < 5 Lac=Rs. 4999 + 18% GST</span>
                           </fieldset>
                           <fieldset>
                              <input type="radio" class="form_price" data-tag="3" name="price" value="9999">&nbsp;
                              <span style="color: green">5 Lac to < 10 Lac=Rs. 9999 +18% GST</span>
                           </fieldset>
                           <fieldset>
                              <input type="radio" class="form_price" data-tag="4" name="price" value="14999">&nbsp;
                              <span style="color: green">10 Lac to < 15 Lac=Rs. 14999 +18% GST</span>
                           </fieldset>
                           <fieldset>
                              <input type="radio" class="form_price" data-tag="5" name="price" value="19999">&nbsp;
                              <span style="color: green">15 Lac & Above = Rs. 19999 +18% GST</span>
                           </fieldset>
                           <input type="hidden" id="package_name" name="package_name" value="">
                           <input type="hidden" name="FormName" value="CDPD">

                           <!-- <fieldset>
                              <img id="captcha_holder" class="cstmm_cahd" src="https://www.foundida.com/payment/captcha.php" alt="captcha">
                              <img src="https://www.foundida.com/images/capta.webp" id="btnrefresh" alt="captcha">
                              <input type="text" name="captcha_code" id="captcha_code" class="pull-right" maxlength="4" onkeyup="this.value = this.value.replace(/[^\d]+/g, '');" placeholder="Enter the captcha here..">
                           </fieldset> -->

                           <input type="hidden" id="is_submitted" value="0">
                           <!-- <input type="hidden" id="price" name="price" value="999"> -->
                           <button type="button" id="contact-submit" data-submit="...Sending">Submit</button>
                        </fieldset>
                        <fieldset>
                           <button class="btn btn-danger pull-right" onclick="GoBack()" type="button" id="goback">Go Back</button>
                        </fieldset>
                     </div>
                  </section>
               </form>
            </div>
         </div>


      </div>
   </div>
</section>


<section class="odr_section common_class">
   <div class="container">
      <div class="row align-items-center">

         <!-- Left Image -->
         <div class="col-sm-12 col-md-5">
            <div class="odr_image">
               <img src="https://www.foundida.com/images/property-dispute/why-choose-online-dispute-resoultion.webp" loading="lazy" decoding="async" alt="Saurav Shukla" class="img-responsive">
            </div>
         </div>

         <!-- Right Content -->
         <div class="col-sm-12 col-md-7">
            <div class="odr_content">
               <h2>
                  Why Choose <span>Online Dispute<br>Resolution?</span>
               </h2>

               <ul class="odr_list">

                  <li>
                     <img src="https://www.foundida.com/images/property-dispute/tick-whychoose-us.webp" loading="lazy" decoding="async" alt="tick">
                     <span class="text">
                        <strong>Faster Results:</strong>
                        <span class="desc">Settle your dispute much sooner than going to court.</span>
                     </span>
                  </li>

                  <li>
                     <img src="https://www.foundida.com/images/property-dispute/tick-whychoose-us.webp" loading="lazy" decoding="async" alt="tick">
                     <span class="text">
                        <strong>Affordable:</strong>
                        <span class="desc">Save money by avoiding long and costly processes.</span>
                     </span>
                  </li>

                  <li>
                     <img src="https://www.foundida.com/images/property-dispute/tick-whychoose-us.webp" loading="lazy" decoding="async" alt="tick">
                     <span class="text">
                        <strong>Private & Safe:</strong>
                        <span class="desc">Your information and documents stay completely secure.</span>
                     </span>
                  </li>

                  <li>
                     <img src="https://www.foundida.com/images/property-dispute/tick-whychoose-us.webp" loading="lazy" decoding="async" alt="tick">
                     <span class="text">
                        <strong>Easy & Convenient:</strong>
                        <span class="desc">Join sessions from anywhere, anytime.</span>
                     </span>
                  </li>

                  <li>
                     <img src="https://www.foundida.com/images/property-dispute/tick-whychoose-us.webp" loading="lazy" decoding="async" alt="tick">
                     <span class="text">
                        <strong>Experienced Mediators:</strong>
                        <span class="desc">Get help from experts who understand real estate and property issues</span>
                     </span>
                  </li>

               </ul>
            </div>
         </div>

      </div>
   </div>
</section>


<section class="who_can_use common_class">
   <div class="container">

      <!-- Heading -->
      <div class="text-center">
         <h2>
            Who Can Use Our <span>Online Dispute Resolution?</span>
         </h2>
         <p class="sub_text">Our ODR platform is ideal for Pre-litigation issues:</p>
      </div>

      <!-- Row -->
      <div class="row who_row">

         <!-- Item -->
         <div class="col-sm-6 col-md-4">
            <div class="who_item">
               <img src="https://www.foundida.com/images/property-dispute/property-owenr.webp" width="30" height="80" loading="lazy" alt="Home icon">
               <div class="who_text">
                  <h4>Property Owners</h4>
                  <p>Facing boundary, possession, or title-related conflicts.</p>
               </div>
            </div>
         </div>

         <div class="col-sm-6 col-md-4">
            <div class="who_item">
               <img src="https://www.foundida.com/images/property-dispute/homebuyers.webp" width="30" height="80" loading="lazy" alt="Homebuyers - Icon">
               <div class="who_text">
                  <h4>Homebuyers</h4>
                  <p>Dealing with delayed possession or project abandonment.</p>
               </div>
            </div>
         </div>

         <div class="col-sm-6 col-md-4">
            <div class="who_item">
               <img src="https://www.foundida.com/images/property-dispute/builder-and-developers.webp" width="30" height="80" loading="lazy" alt="builder -  Icon">
               <div class="who_text">
                  <h4>Builders and Developers</h4>
                  <p>Involved in customer or partner disputes.</p>
               </div>
            </div>
         </div>

         <div class="col-sm-6 col-md-4">
            <div class="who_item">
               <img src="https://www.foundida.com/images/property-dispute/tenants-and-landlords.webp" width="30" height="80" loading="lazy" alt="Tenants and Landlords - Icon">
               <div class="who_text">
                  <h4>Tenants and Landlords</h4>
                  <p>Facing rental, eviction, or deposit issues.</p>
               </div>
            </div>
         </div>

         <div class="col-sm-6 col-md-4">
            <div class="who_item">
               <img src="https://www.foundida.com/images/property-dispute/housing-societies-associations.webp" width="30" height="80" loading="lazy" alt="Housing Societies - icon">
               <div class="who_text">
                  <h4>Housing Societies & Associations</h4>
                  <p>Dealing with internal or member conflicts.</p>
               </div>
            </div>
         </div>

         <div class="col-sm-6 col-md-4">
            <div class="who_item">
               <img src="https://www.foundida.com/images/property-dispute/real-estate-agents-investors.webp" width="30" height="80" loading="lazy" alt="Home on Hand - icon">
               <div class="who_text">
                  <h4>Real Estate Agents or Investors</h4>
                  <p>Involved in agreement or commission disputes.</p>
               </div>
            </div>
         </div>

      </div>
   </div>
</section>


<section class="how_it_works common_class">
   <div class="container">

      <!-- Heading -->
      <div class="text-center">
         <h2>How It <span>Works</span></h2>
      </div>

      <!-- Steps -->
      <div class="row how_row">

         <div class="col-sm-3">
            <div class="how_item">
               <img src="https://www.foundida.com/images/property-dispute/one.webp" width="80" height="80" loading="lazy" alt="One - Number Icon">
               <h4>Fill out the online form</h4>
               <p>Submit your dispute online</p>
            </div>
         </div>

         <div class="col-sm-3">
            <div class="how_item">
               <img src="https://www.foundida.com/images/property-dispute/two.webp" width="80" height="80" loading="lazy" alt="Step 2">
               <h4>Our Expert Will Contact You</h4>
               <p>Our team reviews your issue and the required documents.</p>
            </div>
         </div>

         <div class="col-sm-3">
            <div class="how_item">
               <img src="https://www.foundida.com/images/property-dispute/three.webp" width="80" height="80" loading="lazy" alt="Step 3">
               <h4>Dispute Analysis</h4>
               <p>Specialists assess the nature and strength of the dispute.</p>
            </div>
         </div>

         <div class="col-sm-3">
            <div class="how_item">
               <img src="https://www.foundida.com/images/property-dispute/four.webp" width="80" height="80" loading="lazy" alt="Step 4">
               <h4>Mediator Assignment</h4>
               <p>A qualified mediator/arbitrator leads the resolution process.</p>
            </div>
         </div>

      </div>

   </div>
</section>


<section class="why_choose common_class">
   <div class="container">
      <div class="row align-items-center">

         <!-- Left Image -->
         <div class="col-sm-12 col-md-5">
            <div class="why_img_box">
               <img src="https://www.foundida.com/images/property-dispute/why-choose-saurabh-sukhla.webp" class="img-responsive main_img" loading="lazy" decoding="async" alt="saurabh sukhla - Foundida">


            </div>
         </div>

         <!-- Right Content -->
         <div class="col-sm-12 col-md-7">
            <div class="why_content">

               <h2>
                  Why Choose <span>Foundida?</span>
               </h2>

               <ul class="why_list">

                  <li>
                     <img src="https://www.foundida.com/images/property-dispute/tick-whychoose-us.webp" loading="lazy" decoding="async" alt="Tick icon ">
                     Recognised by the Government of India
                  </li>

                  <li>
                     <img src="https://www.foundida.com/images/property-dispute/tick-whychoose-us.webp" loading="lazy" decoding="async" alt="Tick icon ">
                     Over 5 Lakh+ Satisfied Clients nationwide
                  </li>

                  <li>
                     <img src="https://www.foundida.com/images/property-dispute/tick-whychoose-us.webp" loading="lazy" decoding="async" alt="Tick icon ">
                     ISO-Certified Platform ensuring high security
                  </li>

                  <li>
                     <img src="https://www.foundida.com/images/property-dispute/tick-whychoose-us.webp" loading="lazy" decoding="async" alt="Tick icon ">
                     Strong data privacy protocol
                  </li>

                  <li>
                     <img src="https://www.foundida.com/images/property-dispute/tick-whychoose-us.webp" loading="lazy" decoding="async" alt="Tick icon ">
                     Trained and verified experts
                  </li>

                  <li>
                     <img src="https://www.foundida.com/images/property-dispute/tick-whychoose-us.webp" loading="lazy" decoding="async" alt="Tick icon ">
                     Fast, reliable and cost-effective assistance
                  </li>

                  <li>
                     <img src="https://www.foundida.com/images/property-dispute/tick-whychoose-us.webp" loading="lazy" decoding="async" alt="Tick icon ">
                     Dedicated support and case updates
                  </li>

               </ul>

            </div>
         </div>

      </div>
   </div>
</section>


<section class="cta_section common_class">
   <div class="cta_wrapper">

      <!-- Left Image -->
      <div class="cta_left">
         <img src="https://www.foundida.com/images/property-dispute/dont-let-propert-dispute-delay-your-peace-of-mind.webp" loading="lazy" decoding="async" alt="Property">
      </div>

      <!-- Right Content -->
      <div class="cta_right">
         <div class="cta_content">
            <h2>
               Don’t Let Property Disputes Delay <br>
               <span>Your Peace of Mind</span>
            </h2>

            <p class="subb_text">
               Work toward Resolution with Foundida
            </p>

            <p class="desc">
               Resolve your real estate dispute professionally, securely,
               without unnecessary stress.
            </p>

            <a href="#" class="cta_btn apply_now_green">Contact Now</a>
         </div>
      </div>

   </div>
</section>

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

<section class="block_padding">
   <div class="container">
      <div class="row">
         <div class="common_heading new_block_heading_block">
            <h2>Frequently Asked Questions (FAQs)</h2>
         </div>

         <div class="faq" style="margin-bottom: 25px;" class="col-sm-12 col-md-12 why-us-img-div">

            <div data-port-id="child_ans_div_15" class="accordaion-main-div">
               <h4 class="accordion-cus-head">
                  What types of property disputes can be resolved through ODR?
               </h4>
            </div>

            <div id="child_ans_div_15" class="child-ans-div-1">
               <!-- <p class="child-ans-text">
        
    </p> -->

               <ul class="child-ans-textt">

                  <li>Builder–buyer disagreements</li>
                  <li>Delay in possession or handover</li>
                  <li>Payment or refund disputes</li>
                  <li>Token or booking amount conflicts</li>
                  <li>Rent and security deposit issues</li>
               </ul>
            </div>

            <div data-port-id="child_ans_div_1" class="accordaion-main-div">
               <h4 class="accordion-cus-head">Who can file a property dispute?</h4>
            </div>
            <div id="child_ans_div_1" style="display: none;" class="child-ans-div-1">
               <p class="child-ans-text">Owners, homebuyers, tenants, landlords, developers, housing societies, agents, and investors</p>
            </div>


            <div data-port-id="child_ans_div_2" class="accordaion-main-div">
               <h4 class="accordion-cus-head">How long does the ODR process take?</h4>
            </div>
            <div id="child_ans_div_2" style="display: none;" class="child-ans-div-1">
               <p class="child-ans-text">Timelines vary, but ODR is significantly faster than court litigation.</p>
            </div>


            <div data-port-id="child_ans_div_3" class="accordaion-main-div">
               <h4 class="accordion-cus-head">Are the mediators qualified?</h4>
            </div>
            <div id="child_ans_div_3" style="display: none;" class="child-ans-div-1">
               <p class="child-ans-text">Yes - our mediators include retired judges and certified dispute-resolution professionals</p>
            </div>


            <div data-port-id="child_ans_div_4" class="accordaion-main-div">
               <h4 class="accordion-cus-head">Is my property information secure?</h4>
            </div>
            <div id="child_ans_div_4" style="display: none;" class="child-ans-div-1">
               <p class="child-ans-text">Absolutely. We use strict encryption and confidentiality protocols to protect your data.</p>
            </div>

            <div data-port-id="child_ans_div_5" class="accordaion-main-div">
               <h4 class="accordion-cus-head">At what stage can I use this ODR service?</h4>
            </div>
            <div id="child_ans_div_5" style="display: none;" class="child-ans-div-1">
               <p class="child-ans-text">This service is designed for pre-litigation disputes, meaning cases that have not yet been filed before any court, tribunal, or authority.
                  It is most effective when both parties are open to resolving the matter quickly and amicably.</p>
            </div>

            <div data-port-id="child_ans_div_6" class="accordaion-main-div">
               <h4 class="accordion-cus-head">Is ODR legally valid and enforceable?</h4>
            </div>
            <div id="child_ans_div_6" style="display: none;" class="child-ans-div-1">
               <p class="child-ans-text">Yes. Settlements arrived at through ODR can be formalized into legally binding agreements between the parties.</p>
            </div>

         </div>
      </div>
      <div class="disclaimer_txt">
         <p><strong>Disclaimer:</strong> Foundida is a platform which provides ODR facilitation services. Nothing on this site constitutes legal advice. For legal representation in courts or tribunals, you are free to approach legal professionals. Results cannot be guaranteed and depend on case specifics. Our panel includes experienced, independent mediators and arbitrators, including retired judges and ex-senior tribunal officials (engaged in their private capacities). They act as neutrals and are not acting in any official judicial capacity for the Government of India.</p>
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
            price = $('[name="price"]:checked').val(),
            is_prompted_whatsapp = 0,
            gclid_field = $('#gclid_field').val(),
            landing_uri = $('#landing_uri').val();

         const csrf_token = $('#csrf_token').val();

         if ($('input[name="is_prompted_whatsapp"]').prop('checked') == true) {
            is_prompted_whatsapp = 1;
         }
         console.log('sending_req');
         $.ajax({
            url: "../../payment/SubmitPropertyDispute.php",
            method: 'POST',
            data: {
               name: name,
               email: email,
               mobile: mobile,
               state: state,
               price: price,
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
                  $('#oliid').val(data.oli_id);
                  $('#second_step').show();
                  $('#first_step').hide();
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

   $('#DisputeAmmountFLD').on('blur', function() {

      var dispute_ammount = $('[name="DisputeAmmount"]').val();
      var amt = parseInt(dispute_ammount);

      if (isNaN(amt)) return; // safety

      $('.form_price').prop('checked', false);
      $('.form_price').closest('fieldset').hide();

      let tag = 0;
      let package_name = null;

      if (amt < 50000) {
         tag = 1;
         package_name = 'CDPDBL50K';
      } else if (amt >= 50000 && amt <= 499999) {
         tag = 2;
         package_name = 'CDPDUN5L'
      } else if (amt >= 500000 && amt <= 999999) {
         tag = 3;
         package_name = 'CDPDUN10L';
      } else if (amt >= 1000000 && amt <= 1499999) {
         tag = 4;
         package_name = 'CDPDUN15L';
      } else {
         tag = 5;
         package_name = 'CDPDAV50L';
      }

      $('.form_price[data-tag="' + tag + '"]').prop('checked', true);
      $('.form_price[data-tag="' + tag + '"]').closest('fieldset').show();
      $('#package_name').val(package_name);

   });

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
