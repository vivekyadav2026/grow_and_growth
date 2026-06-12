@extends('layouts.app')

@section('meta')
<title>GST Modification | GST Update | Online Legal India</title>
<meta name="description" content="Online Legal India will help you fulfil all the formalities regarding the GST modification and amendment of GST registration.">
<link rel="canonical" href="https://www.onlinelegalindia.com/services/gst-modification/"/>
@endsection

@section('styles')
<link rel="stylesheet" type="text/css" href="https://www.onlinelegalindia.com/css/gst-modification.css">
   <!--      <link rel="stylesheet" type="text/css" href="https://www.onlinelegalindia.com/css/bootstrap.min.css">-->
   <!-- <link rel="stylesheet" type="text/css" href="https://www.onlinelegalindia.com/css/cut.css"> -->
   <!-- <link rel="stylesheet" type="text/css" href="https://www.onlinelegalindia.com/css/alternative-contact-popup.css"> -->
   <!-- <link rel="stylesheet" href="https://www.onlinelegalindia.com/css/brands.min.css"> -->
   <!-- <link rel="stylesheet" href="https://www.onlinelegalindia.com/css/solid.min.css"> -->
@endsection

@section('content')
<style> #contact h4{ font-size:16px; } 
.professional_span{
   font-size:20px;
   margin-top:10px;
}
#fees .copy_box {
    height: 477px !important;
}
.govt_fees{
   margin-top:15px;
}
.govt_fees p{
    color: #fff;
    text-align: center;
}
</style>
<section>
    <div id="banner">
        <img class="img-fluid" style="width:100%" src="https://www.onlinelegalindia.com/images/gst-modify.webp" alt="GST Modification" /> 
    </div>  
    <script>
        setTimeout(function(){ 
            document.getElementById("banner").innerHTML = `<img class="img-fluid" style="width:100%" src="../../images/gst-modify.webp" alt="GST Modification">`
            document.getElementById("banner").classList.add("in");
          }, 2500);
        </script>
</section>
<section class="srvc-space styletopheadercenter">
   <div class="container pb-60">
       <div class="banner_image_text">
            <h1>Get Your GST Modification and Amendment of GST Registration Done by the Experts</h1>
            <p style="text-align: center;font-weight: 600;">Online Legal India will help you fulfil all the formalities regarding the GST modification and amendment of GST registration.</p>
        </div>
    </div>
</section> 

<section class="mt-20 styletop40">
   <div class="container">
      <div class="row">
          <div class="pull-left col-md-6 col-sm-12">
               <form id="contact" class="oli-validate-form" action="https://www.onlinelegalindia.com/payment/submit_form_gst_modification.php" method="post" enctype="multipart/form-data">

                <input type="hidden" id="gclid_field" name="gclid_field" value="">

                <!-- <p class="payroll">Payroll & Attendance Management System Free for 3 Months</p> -->
                  <h3 class="styletrademarkformheader">Need Help with GST Modification and Amendment?</h3>
                      <h4>Fill Up the below Mentioned Form</h4>
                  <fieldset>
                     <input placeholder="Your Name" name="name" id="name" type="text">
                  </fieldset>
                  <fieldset>
                     <input placeholder="Your Email Address" name="email" id="email" type="email" >
                  </fieldset>
                  <fieldset>
                     <input placeholder="Your Phone Number (Without 0 or +91)" name="mobile" id="mobile" type="tel" >
                  </fieldset>
                  <fieldset>
                     <input placeholder="What Modification You Want" name="text" id="txt" type="text">
                  </fieldset>
                   <fieldset style="display:none">
                     <input placeholder="City" name="city" id="city" type="text">
                  </fieldset>
                  <fieldset>
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
                  </fieldset>  
                  <fieldset>
                     <input class="inputfile" type="file" style="border: 1px solid #aaa; height: 35px; width: 100%" name="file[]" tabindex="3" placeholder="Please upload file.." id="file" multiple> <span style="color: green">(Optional)</span>
                  </fieldset>
                   
                   <fieldset class="select_packages">
                                           
                    <p style="font-size: 14px;font-weight: 600;">Package</p>
                          <div class="package_btn"> 
                              <div>
                                <label class="package_container"> 
                                  <input type="radio" checked="checked" name="form_price" id="basic" value="999">
                                  <span class="checkmark"></span>
                                    <i>Basic Plan <br> (Rs.999)</i>
                                </label>
                              </div>
                              <div>
                                <label class="package_container"> 
                                  <input type="radio" name="form_price" id="standard" value="1499">
                                  <span class="checkmark"></span>
                                    <i>Standard Plan <br> (Rs.1499)</i>
                                </label>
                              </div>
                          
                       
                              <div>
                                <label class="package_container"> 
                                  <input type="radio" name="form_price" id="primium" value="1699">
                                  <span class="checkmark"></span>
                                    <i>Premium Plan <br> (Rs.1699)</i>
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

                   
                  <fieldset>
                     <input type="text" id="txtCaptcha" 
                        style="background-image:url(https://www.onlinelegalindia.com/images/payment/1.JPG); text-align:left; border:none;
                        font-weight:bold; font-size: 22px; width: 40%; font-family:Modern" readonly />
                     <input type="hidden" id="txtCaptcha2">
                     <img src="https://www.onlinelegalindia.com/images/capta.webp" id="btnrefresh" onclick="DrawCaptcha();" alt="Captcha">
                     <input type="text" name="captcha_code" id="captcha_code" class="pull-right" style="width: 50%" placeholder="Enter the captcha here..">
                  </fieldset>

                  <input type="hidden" name="FormName" value="GSTMOD">
                  <fieldset>
                     <button name="submit" type="button" id="contact-submit" class="btn" data-submit="...Sending">Submit</button>
                  </fieldset>
               </form>
          </div>
          <div class="pull-right col-md-6 col-sm-12">
              <div class="banner_image_text">
                <p>Any changes made in the GST Registration or the details entered in the GST certificate are referred to as GST modification or update. One may go for change in GST Registration if he/she wishes from composite to normal scheme, or if there are mistakes in GST registration. To get GST modification, you need to file form GST REG 14.</p>
                  
                 <div class="panel-group custom_accordion" id="accordion" role="tablist" aria-multiselectable="true" style="margin-top:20px;">
                  <div class="panel panel-default">
                    <div class="panel-heading card-header1" role="tab" id="headingOne">
                      <h6 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          What are details that can be changed or updated?
                            <span>+</span>
                        </a>
                      </h6>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                      <div class="panel-body">
                          <p>A business owner can apply for change(s) of the following items:</p>
                        <ul class="pf_list">
                           <li>Name of business</li>
                          <li>Address of the principal place of business</li>
                          <li>An additional place of business</li>
                          <li>Addition, deletion or retirement of partners or directors, Managing Committee, CEO i.e., people who are responsible for day to day affairs of the business</li>
                          <li>Mobile number or e-mail address of the authorized signatory</li>
                         </ul>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                      <h6 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Documents Required
                            <span>+</span>
                        </a>
                      </h6>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
                      <div class="panel-body">
                        <ul class="pf_list">
                            <li>Documentary Proof of Changes</li>
                            <li>GST Certificate</li>
                        </ul>
                      </div>
                    </div>
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
            <h2 style="color: black" class="benifts-heading">How we work? </h2>
            
         </div>
         <div class="col-sm-12 col-md-12">
            <div class="row">
               <div class="col-md-2 col-md-12">
                  <div class="process_section">
                      <i>1</i>
                      
                      <p>Fill the form & Make the Payment</p>
                      <p>⟶</p>
                   </div>
               </div>
               <div class="col-md-2 col-md-12">
                  <div class="process_section">
                      <i>2</i>
                  
                   <p>Get the call from GST expert</p>
                   <p>⟶</p>
                   </div>
               </div>
               <div class="col-md-2 col-md-12">
                  <div class="process_section">
                      <i>3</i>
                      
                      <p>GST Expert will consult with you</p>
                      <p>⟶</p>
                   </div>
               </div>
               <div class="col-md-2 col-md-12">
                  <div class="process_section">
                      <i>4</i>
                      
                      <p>GST Expert will Receive Necessary Documents</p>
                      <p>⟶</p>
                   </div>
               </div>
               <div class="col-md-2 col-md-12">
                  <div class="process_section">
                      <i>5</i>
                      
                      <p>Successful Submission of all your Details</p>
                      <p>⟶</p>
                   </div>
               </div>
                <div class="col-md-2 col-md-12">
                  <div class="process_section">
                      <i>6</i>
                      
                      <p>Congratulations! Your Modification of GST Application has done</p>
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

<section class="block_padding">
  <div class="container">
     <div class="row">
        <div class="col-md-12 col-sm-12">
           <h2 class="benifts-heading headstyle" style="color:#000;">GST Modification/Update Process</h2>
            <center><img src="https://www.onlinelegalindia.com/images/services/gst-modification/gst-modification99.webp" alt="GST Modification Process"/></center>
        </div>
        <br><br><br>
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


 <div id="fees" class="row background_image copyright_fees block_padding">
         <div class="container">
            <div class="col-md-12 col-sm-12">
               <div class="col-md-12 col-sm-12">
                  <h2 class="benifts-heading">Package</h2>
               </div>
            </div>
            <div class="benifits-ul">
               <div class="register-benifit-li register-benifits-text copy_box">
                  <h4><span>Basic Plan<br><span class="professional_span">Professional Fees</span></span> <span>One Time Charges</span>  <img src="../../images/svg/rupee_svg.svg" alt="Rupee" style="position: relative;left: 10px;"> 999</h4>
                  <ul class="copy_lists">
                      <li>Change in Non-core fields ( those related to GST applicationexcept for legal name of the business,Addition and deletion of stakeholder's detail andprincipal or additional place of business).</li>
                      <li>Dedicated GST Expert</li>
                      <li>Call, Chat & Email Support</li> 
                  </ul>
                  <a href="#contact" id="basic_register">Buy Now</a>
               </div>
                <div class="register-benifit-li register-benifits-text copy_box">
                  <h4><span>Standard Plan<br><span class="professional_span">Professional Fees</span></span> <span>Limited Offer</span>  <img src="../../images/svg/rupee_svg.svg" alt="Rupee" style="position: relative;left: 10px;"> 1499 </h4>
                  <ul class="copy_lists">
                      <li>Change in core fields-Legal Name of the BusinessAddition / Deletion of Stakeholders Principal / Additional Place of Business</li>
                      <li>Dedicated GST Expert</li>
                      <li>Chat, Call &amp; Email Support</li> 
                  </ul>
                  
                  <a href="#contact" id="standard_register">Buy Now</a>
               </div>
                <div class="register-benifit-li register-benifits-text copy_box">
                  <h4><span>Premium Plan<br><span class="professional_span">Professional Fees</span></span> <span>One Time Charges</span>  <img src="../../images/svg/rupee_svg.svg" alt="Rupee" style="position: relative;left: 10px;"> 1699 </h4>
                  <ul class="copy_lists">
                      <li>Change from Composite to Regular scheme</li>
                      <li>Dedicated GST Expert</li>
                      <li>Chat, Call &amp; Email Support</li> 
                  </ul>
                   
                  <a href="#contact" id="primium_register">Buy Now</a>
               </div>
            </div>

            <div class="govt_fees">
               <p>Excluding Govt. Fees</p>
            </div>

         </div>
      </div>   


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
                              <a href="#" class="nav-item-inner-heading plus">Can we add another business address in existing GST registration ?</a>
                              <div class="nav-sub-list ul-reset">
                                 <div class="nav-sub-list-inner">
                                    <div class="nav-sub-item">
                                       Yes, if you can add an additional business address to your existing GST certificate
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="nav-item">
                           <div class="nav-item-inner">
                              <a href="#" class="nav-item-inner-heading plus">Can I shift from composition to regular scheme under GST ?</a>
                              <div class="nav-sub-list ul-reset">
                                 <div class="nav-sub-list-inner">
                                    <div class="nav-sub-item">
                                      Yes, you can, our professional can assist you migrating composition to the regular scheme through GST modification.
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="nav-item">
                           <div class="nav-item-inner">
                              <a href="#" class="nav-item-inner-heading plus">Can I shift my business from regular to composition scheme under GST ?</a>
                              <div class="nav-sub-list ul-reset">
                                 <div class="nav-sub-list-inner">
                                    <div class="nav-sub-item">
                                       No, GST department has discontinued this facility with effect from 31st March, 2018.
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
                                      No, you don’t need to be physically present for the process, Online Legal India is an online corporate service provider all you need is an internet connection in your phone/computer and the required documents with you and we can get the job done no matters even if you are present at the remotest location of India.
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

<script>
   var basic_register = document.getElementById("basic_register");
   var standard_register = document.getElementById("standard_register");
   var primium_register = document.getElementById("primium_register");
   
   window.wa_service_name = 'GST Modifications';
   window.wa_service_code = 'GSTMOD';

   basic_register.addEventListener("click", function(){
      document.getElementById("basic").checked = true  
   });
   standard_register.addEventListener("click", function(){
      document.getElementById("standard").checked = true
   });
   primium_register.addEventListener("click", function(){
      document.getElementById("primium").checked = true
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
               fileSize = fileSize+items[i].size; // get file size
            }
         }

         if(fileSize>5242880) {
            alert("Please choose file below 5 mb");
            flag = false;
         }

         if (flag) {
            r.attr('type', 'submit')
               .html('Redirecting to Payment Lobby...')
               .css('pointer-events', 'none');
            setTimeout(function(){ 
               $('.oli-validate-form').submit();
            }, 1200);
         }
      }
   });

    function ValidCaptcha(){

      var name = $("#name").val();
      // alert(name);
      name=$.trim(name);
      // alert(name);
      var email = $("#email").val();
      email=$.trim(email);
      var mobile = $("#mobile").val();
      var state = $("#state").val();

// here is the coding for validating the multiple file size //

      var fp = $("#file");
      var lg = fp[0].files.length; // get length
      var items = fp[0].files;
      var fileSize = 0;
       if (lg > 0) {
           for (var i = 0; i < lg; i++) {
               fileSize = fileSize+items[i].size; // get file size
        }
      }

      if(fileSize>5242880){
        alert("Please choose file below 5 mb");
        return false;
      }

    // here is the coding for validating the multiple file size //
        
        if(name==""){
          alert("Please enter name..");
            $("#name").css('border-color','red');
            location.href="#name";
            return false;
        }

        if(email==""){
          alert("Please enter email..");
            $("#email").css('border-color','red');
            location.href="#email";
            return false;
        }

        if(mobile==""){
          alert("Please enter mobile number..");
            $("#mobile").css('border-color','red');
            return false;
        }

        if(mobile!=""){
          if(mobile.length!=10){
            alert("Please enter correct mobile number..");
              $("#mobile").css('border-color','red');
              return false;
          }
        }

        if(state==""){
          alert("Please select state..");
            $("#state").css('border-color','red');
            location.href="#state";
            return false;
        }

        var str1 = removeSpaces(document.getElementById('txtCaptcha').value);
        var str2 = removeSpaces(document.getElementById('captcha_code').value);
        if(str2==""){
          alert("Please enter the captcha");
          $("#captcha_code").css('border-color','red');
          return false;
        }else{
          if (str1 != str2){
            alert("Captcha not matched");
          return false;
      }
    }
   
   }

   function DrawCaptcha() {
      var a = Math.ceil(Math.random() * 9)+ '';
      var b = Math.ceil(Math.random() * 9)+ '';       
      var c = Math.ceil(Math.random() * 9)+ '';  
      var d = Math.ceil(Math.random() * 9)+ '';  
      var code = a + ' ' + b + ' ' + ' ' + c + ' ' + d;
      var code2 = a + b + c + d;
      document.getElementById("txtCaptcha").value = code;
      document.getElementById("txtCaptcha2").value = code2;
   } 

   function removeSpaces(string) {
      return string.split(' ').join('');
   }

   $(document).ready(function(){
      DrawCaptcha();
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
         }
      },
      messages: {
         name: {
            required: "Please enter your Company Name."
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
    
</script>
@endsection
