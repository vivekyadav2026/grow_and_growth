@extends('layouts.app')

@section('meta')
<title>12A Registration | 80G Registration | CSR Registration Services</title>
<meta name="description" content="Avail of Professional consultations on Section 12A Registration, 80G Registration, CSR Registration, CSR Activity Report, etc. from us affordably.">
<link rel="canonical" href="https://www.onlinelegalindia.com/services/section-8-company-compliance-filing/"/>
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.onlinelegalindia.com/services/ngo-compliance-filing/">
<meta property="og:image" content="https://www.onlinelegalindia.com/images/ngo-compliance/ngo-compliance-filing.webp">
<meta property="og:title" content="Get Affordable Consultation on 12A 80G CSR Registration">
<meta property="og:site_name" content="OnlineLegalIndia">
<meta property="og:description" content="Avail of Professional consultations on Section 12A Registration, 80G Registration, CSR Registration, CSR Activity Report, etc. from us affordably.">
<meta property="og:locale" content="en-IN">
@endsection

@section('styles')
<!--      <link rel="stylesheet" type="text/css" href="https://www.onlinelegalindia.com/css/bootstrap.min.css">-->
   <!-- <link rel="stylesheet" type="text/css" href="https://www.onlinelegalindia.com/css/cut.css"> -->
   <!-- <link rel="stylesheet" type="text/css" href="https://www.onlinelegalindia.com/css/alternative-contact-popup.css"> -->
   <!-- <link rel="stylesheet" href="https://www.onlinelegalindia.com/css/brands.min.css"> -->
   <!-- <link rel="stylesheet" href="https://www.onlinelegalindia.com/css/solid.min.css"> -->
@endsection

@section('content')
<!-- here is the functionality to strat body top image -->

<style>
#contact input[type="button"] {
    cursor: pointer;
    width: 100%;
    border: none;
    background: #4CAF50;
    color: #FFF;
    margin: 0 0 5px;
    padding: 10px;
    font-size: 15px;
}

#contact-submit {
    cursor: pointer;
    width: 100%;
    border: none;
    background: #4CAF50;
    color: #FFF;
    margin: 0 0 5px;
    padding: 10px;
    font-size: 15px;
}

#trademark .register-benifits-text {
    min-height: 855px;
}

.gift_voucher_main {
    margin-bottom: 20px;
}

#trademark .register-benifits-text a {
    bottom: 8px;
}
.benifts-heading{
    margin-bottom: 30px !important;
}
.trademark_reg_heading p{
    text-align: center;
    font-size: 16px;
    margin-bottom: 30px;
}
.modal-header{
    padding: 15px 15px 0 !important;
    border: none !important;
}
.modal-body{
    text-align: center;
}
.modal-body h5{
    font-size: 18px;
    margin: 0 0 15px;
}
.modal-body p{
    line-height: 24px;
    padding: 0 5%;
}
.modal-body{
    min-height: 200px;
}
.modal-dialog{
    margin-top: 100px;
}
.new_title99{
        margin-bottom:34px;
    }
    #contact h4 {
    font-size: 16px;
}
map area{
    cursor: pointer;
}
.modal-open .modal{
    padding: 0 15px !important;
}
.tm_mbl {
    display: flex;
    justify-content: center;
    overflow: hidden;
}
.tm_mbl img{
    width: 350px;
    max-width: 350px;
}
.tm_mbl{
    height: 0;
}
    #gift_voucher1{margin-top: -50px}
#gift_voucher1 .modal-content {width: 100% !important;margin: 84px auto;background: url(../../images/gift_voucher.png);background-position: top;background-size: contain;background-repeat: no-repeat;background-color: #e6e6e6 !important;}
#gift_voucher1 img {max-width: 80%;height: auto;margin-top: -55px;margin-left: -20px;border: 1px solid #e7e7e7;}
#gift_voucher1 h1 {font-size: 50px;font-weight: bold;padding-top: 105px;color: #2a2a2a;}
#gift_voucher1 h2{margin-top: 0px;margin-bottom: 10px;font-weight: bold;color: #2a2a2a;}
#gift_voucher1 h6 {font-weight: bold;margin-top: 18vw}
#gift_voucher1 h6:last-child {    margin-top: 10px;}
#gift_voucher1 .modal-dialog{width: 36%;}
#gift_voucher1 .close {float: right;font-size: 40px;font-weight: 700;line-height: 1;color: #fff;text-shadow: 0 1px 0 #fff;filter: alpha(opacity=20);opacity: .2;background-color: #000;width: 50px;height: 50px;border-radius: 50%;}
.gift_voucher_main{position: absolute;bottom: 73px;z-index: 1;left: 0;box-shadow: 0 0 5px #959595;margin: 0 10px;cursor: pointer;}
    .desk_fees{display: block;}
    .mob_fees{display: none;}
    #more_fees{display: block;}
    #more_fees{float: left;width: 100%;}
    .more_mob{
    display: none;
    background: #ccc;
    color: #000;
    float: left;
    font-weight: 600;
    text-align: center;
    font-size: 16px;
    padding: 10px;
    margin-left: 14px;
    border-radius: 6px;
    height: 39px;
    margin-bottom: 20px;
    text-decoration: none;

    }
@media screen and (max-width: 768px) {
    #gift_voucher1 .modal-dialog {width: 87%;}
#gift_voucher1 h1 {font-size: 35px;font-weight: bold;padding-top: 66px;}
#gift_voucher1 h2 {margin-top: 0px;margin-bottom: 10px;font-weight: bold;font-size: 20px;}
.gift_voucher_main{position: relative;}
#gift_voucher1 h6 {padding-top: 32vw !important;}
    .desk_fees{display: none;}
    .mob_fees{display: block;}
    .more_mob{display: flex;align-items: center;}
    #more_fees{display: none;}
    .process_section{
        margin: 0 auto 20px;
    }
    .common_design_modification_new{
        padding-bottom: 0;
    }
    .tm_dsk{
        display: none;
    }
    .tm_mbl{
        height: auto;
    }
    #trademark .register-benifits-text {
        min-height: auto;
    }

    .gift_voucher_main {
        position: relative;
        display: inline-block;
        bottom: 0px;
    }

    #mb-onscroll-button {
        position: fixed;
        bottom: -100px;
        z-index: 999 !important;
        transition: top .3s;
        background: #385067;
        color: #fff;
        text-align: center;
        width: 100%;
        padding: 10px;
        text-decoration: none;
        font-weight: 700;
        font-size: 19px;
    }

    #mb-onscroll-button span {
        background: #00bb55;
        padding: 9px 73px;
        font-size: 18px;
        display: inline-block;
    }
    #topheader{
        height:unset;
    }
}
#asiaone1 p {
    text-align: left;
    padding: 0;
}
@media screen and (max-width: 363px) {
    .new_new_block_mobile a {
    z-index: 9999999999999999999999999999;
    position: relative;
}
}
.background_image {
    background-image: url(https://www.onlinelegalindia.com/images/fees_bg_new_pic99.webp) !important;
}
#trademark .register-benifits-text {
    width: 30%;
    min-height: 715px;
}
.register-benifit-li99 {
    float: left;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}
#trademark .register-benifits-text h4 {
    min-height: 185px;
}
#captcha_code{
    width: 41% !important;
    padding: 11px 10px;
    border: 1px solid #ccc;
    background: #FFF;
    margin: 0 0 12px;
}
@media screen and (max-width: 768px){
    #trademark .register-benifits-text h4 {
    min-height: 137px;
}
   .desk_fees {
    display: none;
} 
#captcha_code{
    width: 46% !important;
}
#trademark .register-benifits-text{
    width: 95%;
    margin: 0;
    margin-bottom: 35px;
    min-height: auto;
    margin-left: 9px;
}
#trademark .register-benifits-text:nth-child(3) {
    margin-bottom: 35px;
}
#trademark .register-benifits-text:nth-child(4) {
    margin-bottom: 0;
}
}

@media screen and (max-width: 392px){
    .box {
    width: 17vw;
}
#doc_req .card-header h2 a {
    font-size: 13px;
}
}

</style>
<style>
  /*re-captcha start*/
  #captcha_code {
    border: 1px solid #a7a7a7;
    background: #FFF;
    color: #2b2b2b;
    font-size: 14px;
    height: 46px;
    padding-left: 10px;
  }

  .new_fieldset {
    display: flex;
    align-items: center;
    justify-content: center;
  }

  @media screen and (max-width: 768px) {
    #captcha_code {
      width: 50%;
      height: 35px;
    }
  }

  @media screen and (max-width: 337px) {
    #captcha_code {
      width: 47%;
    }
  }

  @media screen and (max-width: 322px) {
    #captcha_code {
      width: 45%;
    }
  }

  /*re-captcha end*/
</style>

<section class="ngo_one common_fb">
  <div class="container custom_container">
    <div class="row custom_row">

      <div class="col-md-7 div_one">
        <div class="ngo_one_left_inner">

          <div class="ngo_one_left">
            <h1>Section 8 Company Business Compliance at Your Fingertip!</h1>
            <p>We help provide 12A registration, section 80G registration, CSR registration, and more.</p>
          </div>

          <div class="ngo_one_ul_li">
            <ul>
              <li>Dedicated, Experienced Professionals</li>
              <li>5 Lakh+ Satisfied Clients</li>
              <li>ISO 9001:2015 Certified</li>
              <li>No Hidden Charges</li>
            </ul>
          </div>

          <div class="form_block_left_inner_holder">

            <!-- <div class="new_grid">
              <div class="form_block_left_inner_left_holder form_block_left_inner_left_holder_border">
                <div class="fblil_left">
                  <img src="https://www.onlinelegalindia.com/images/trademark-registration/trademark/trustpilot-new-block.png">
                </div>
                <div class="fblil_right">
                  <p class="new_p">We’re rated 4.5/5 &amp; <span>30,940 Reviews in all</span></p>
                </div>
              </div>
            </div> -->

            <div class="new_grid">
              <div class="form_block_left_inner_left_holder">
                <div class="fblil_left">
                  <img src="https://www.onlinelegalindia.com/images/company-compl-llptopvt/google.webp" alt="Google logo -  Online Legal India">
                </div>
                <div class="fblil_right">
                  <p class="new_p">Rated 4.5 on Google <span>&amp; 6000+ Reviews in all</span></p>
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>

      <div class="col-md-5 div_two">
        <div class="ngo_one_right">
          <h5>We’re here to help</h5>
          <form class="ngo_form oli-validate-form">

            <div class="form-group">
              <input type="text" name="name" id="cust_name" class="form-control new_control" placeholder="Your Full Name">
            </div>


            <div class="form-group">
              <input type="email" name="email" id="cust_email" class="form-control new_control" placeholder="Your Email Address">
            </div>

            <div class="form-group">
              <input type="text" name="mobile" id="mobile" class="form-control new_control" placeholder="Your Mobile Number">
            </div>

            <div class="form-group">
              <select name="state" id="state" class="new_control new_control_select new_control_select999 new_control">
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
            </div>

            <div class="form-group">
              <select name="service" id="service" class="new_control new_control_select new_control_select999 new_control">
                <option value="">Select Service</option>
                <option value="12A">12A Registration</option>
                <option value="80G">80G Registration</option>
                <option value="CSR">CSR Registration</option>
              </select>
            </div>

            <fieldset class="new_fieldset">
              <img id="captcha_holder" src="https://www.onlinelegalindia.com/payment/captcha.php" alt="captcha">
              <img src="https://www.onlinelegalindia.com/images/capta.webp" id="btnrefresh" alt="captcha">
              <input type="text" name="captcha_code" id="captcha_code" class="pull-right" maxlength="4" onkeyup="this.value = this.value.replace(/[^\d]+/g, '');" placeholder="Enter the captcha here..">
            </fieldset>

            <div class="form_check">
   <label class="custom_check">I have read & agreed to the company's Terms and Conditions, disclaimer and refund policy, and also ready to accept calls, SMS, emails, etc. 
      <input type="checkbox" data-degree="°" name="is_prompted_whatsapp" checked value="1">
      <span class="form_checkmark"></span>
    </label>
</div>


            <div class="form_group_button">
              <button type="button" id="nextBtn" class="btn tsfb_started">Get a callback</button>
            </div>

          </form>
        </div>
      </div>


    </div>
  </div>
</section>


<section class="ngo_two common_fb">
  <div class="container custom_container">
    <div class="ngo_two_heading">
      <h3>Avail of Business Compliance for Section 8 Companies and Other NGOs</h3>
    </div>

    <div class="ngo_two_text">
      <p>Online Legal India has a team of experts to provide support to availing of business compliances for all types of Section 8 Companies. If you have a Section 8 Company, you must meet some business compliance. Don’t worry! You may have a lot of important work in hand or you may not be accustomed to performing all complicated online form filling out activities. We are your premium support to meet any compliance criteria of your company.</p>
      <p>The following standards are to maintain to demonstrate their sincerity, and authenticity with some annual compliances. We can help you in all respective fields of services.</p>
    </div>

    <!-- <div class="ngo_sub_heading">
            <h6>Avail of Legal Compliance for NGO<span><img src="https://www.onlinelegalindia.com/images/ngo-compliance/line.png"></span></h6>
            <p>Based on the Income Tax Act, of 1961, 12A registration is a one-time certification that the income tax department grants against any non-profit organization. The purpose of the registration is to exempt the payable tax if there is any. Usually, this registration is generally applied immediately after the NGO registration. The NGOs registered under Trust, society, or Section 8 Company require Section 12A registration. All nonprofit organizations require it so that they can save the tax as they require more capital for serving the people.</p>
            <p>If you require services related to section 12A registration, contact Online Legal India. We will do it for you at the minimum cost of Rs. 9000/-, excluding 18% GST.</p>
        </div> -->

    <div class="new_block_section">
      <div class="row">

        <div class="col-md-5">
          <div class="common_left">
            <div class="common_sub_heading">
              <h6>Section <span class="span_color">12A Registration</span><span><img src="https://www.onlinelegalindia.com/images/company-compl-llptopvt/line.webp" alt="Line -  icon "></span></h6>
            </div>
            <div class="img_block">
              <img src="https://www.onlinelegalindia.com/images/ngo-compliance/tax.webp" alt="Section 12A Registration - Online Legal India">
            </div>
          </div>
        </div>

        <div class="col-md-7">
          <div class="common_right">
            <div class="common_p_block">
              <p>According to the Income Tax Act, of 1961, you will get provision certificate of 12A registration on successful application. Then, you have to apply for permanent 12A certificate. Income Tax department grants 12A certification against any non-profit organization. The purpose of the registration is to exempt the payable tax if there is any. Usually, this registration is applied 3 months after the NGO registration. The NGOs registered under Trust, society, or Section 8 Company require Section 12A registration. All nonprofit organizations require it so that they can save the tax as they require more capital for serving the people.</p>
              <p>If you require services related to section 12A registration, contact Online Legal India. We will do it for you at the minimum cost of Rs. 9000/-, excluding 18% GST.</p>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="new_text_block">
      <div class="new_text_block_one">
        <h4>Documents required for section 12A registration:</h4>
        <div class="ngo_one_ul_li">
          <ul>
            <li>Aadhaar card and PAN card of all the directors of the company</li>
            <li>The incorporation certificate of the company </li>
            <li>Business address proof of the company</li>
            <li>Income details of the company </li>
            <li>Details of assets and liabilities of the Section 8 Company</li>
            <li>Details of the income received by the company in the last three years</li>
            <li>Business address proof of the company</li>
            <li>MOA and AOA of the Section 8 Company</li>
            <li>PAN Card of the company </li>
            <li>Copy of the Form 10A</li>
            <li>List of the donors of the company </li>
            <li>Book of accounts of the company  </li>
          </ul>
        </div>
      </div>
      <div class="new_text_block_two">
        <h4>Benefits of 12A Registration:</h4>
        <p>You will get a lot of benefits after registering for section 12A. Here are some of them:</p>

        <div class="heading_text_block">
          <h5>Tax Exemption</h5>
          <p>Any Section 8 company is required to generate funds for serving people. Holding a 12A certificate helps exempt them from paying income tax on their generated income. Hence, this substantial tax exemption enables companies or nonprofit organizations to allocate more funds to their charitable activities.</p>
        </div>


        <div class="heading_text_block">
          <h5>Access to Grants and Funds</h5>
          <p>12A registration increases the credibility of your Section 8 Company. Your company will be eligible for government grants. The local or international donors can also be inspired to donate funds for this credibility certificate.</p>
        </div>


        <div class="heading_text_block">
          <h5>Proof of Existence</h5>
          <p>The 12A certification is legitimate proof of your company’s existence on the government's list. Hence, this certification is crucial evidence in establishing the organization’s reliability and eligibility for avail of government schemes.</p>
        </div>


        <!-- <div class="heading_text_block">
              <h5>Life-long existence</h5>
              <p>No provision suggests any renewal or validity of this registration. Once you register under 12A, your Section 8 company or non-profit organization can use it for life or as long as you want. It is a one-time registration.</p>
            </div> -->

        <div class="last_button">
          <button type="button" class="btn tsfb_started last_button_holder apply_now_green">Contact Us</button>
        </div>


      </div>
    </div>

    <div class="new_block_section">
      <div class="row">


        <div class="col-md-7 col7_padding">
          <div class="common_right">
            <div class="common_sub_heading">
              <h6>Section <span class="span_color">80G Registration</span><span><img src="https://www.onlinelegalindia.com/images/company-compl-llptopvt/line.webp" alt="Line -  icon "></span></h6>
            </div>
            <div class="common_p_block">
              <p>Section 80G, registration of income tax, 1961, is a provision in which organizations or individuals can claim for non-deduction of tax on donations offered to any charitable organizations, Section 8 Companies, and NGOs. The donors (individuals or companies) who donate to the organization can also claim their taxable income for non-reduction under this act. So, the people or companies under taxable income will inspire donating to a nonprofit organization like section 8 company.</p>
              <p>So, as a section 8 company authority, you must register it under section 80G to avail of the mentioned benefits.</p>
              <p>If you want 80G registration from us, you will get the minimum cost across India. Our charges are Rs. 9000, excluding 18% GST.</p>
            </div>
          </div>
        </div>

        <div class="col-md-5">
          <div class="common_left">

            <div class="img_block">
              <img src="https://www.onlinelegalindia.com/images/ngo-compliance/bdg.webp" alt="Registration to NGOs - Online Legal India">
            </div>
          </div>
        </div>



      </div>
    </div>

    <div class="new_text_block">
      <div class="new_text_block_one">
        <h4>80G Registration Documentation:</h4>
        <p>The documents required for 80G registration are mentioned below:</p>
        <div class="ngo_one_ul_li">
          <ul>
            <!-- <li>10A/10AB form filling out</li> -->
            <li>Copy of the organization’s incorporation certificate</li>
            <li>Copy of the registration certificate issued by the authority</li>
            <!-- <li>FCRA registration certificate, if applicable</li> -->
            <li>Copies of annual accounts for the last three years preceding</li>
            <li>Contact Online Legal India to learn more</li>
          </ul>
        </div>
      </div>
      <div class="new_text_block_two">
        <h4>Benefits of 80G Registration:</h4>
        <p>80G Registration to NGOs and Section 8 Companies gives ample benefits. Here are some of them:</p>

        <div class="heading_text_block">
          <h5>Credibility Enhancement</h5>
          <p>It is almost similar to 12A registration, with some differences. Obtaining an 80G certification enhances your nonprofit organizations or Section 8 Company’s reliability. Donors also find such organizations where they get tax benefits. </p>
        </div>


        <div class="heading_text_block">
          <h5>Tax Benefits for Donors</h5>
          <p>The 80G Registration provides benefits not only to the companies but also to the donors. The people or companies under high taxation can easily donate to those who need it. Hence, the charitable organizations will get more funds collected from the donors. This facility attracts the attention of donors. </p>
        </div>


        <div class="heading_text_block">
          <h5>Transparency and Accountability</h5>
          <p>Having the 80G registration certificate, a Section 8 company or any NGO remains transparent to the government about their transactions. They ensure a higher level of accountability towards donors and regulatory authorities.</p>
        </div>


        <div class="heading_text_block">
          <h5>Access to Government Funding</h5>
          <p>If there are any government grants to non-profit organizations, the Section 8 Company will have more opportunities to participate in charitable activities. </p>
        </div>


        <div class="last_button">
          <button type="button" class="btn tsfb_started last_button_holder apply_now_green">Contact Us</button>
        </div>


      </div>
    </div>


    <div class="new_block_section">
      <div class="row">

        <div class="col-md-5">
          <div class="common_left">
            <div class="common_sub_heading">
              <h6><span class="span_color">CSR Registration</span><span><img src="https://www.onlinelegalindia.com/images/company-compl-llptopvt/line.webp" alt="Line -  icon "></span></h6>
            </div>
            <div class="img_block">
              <img src="https://www.onlinelegalindia.com/images/ngo-compliance/csr.webp" alt="Corporate Social Responsibility - Online Legal India">
            </div>
          </div>
        </div>

        <div class="col-md-7">
          <div class="common_right">
            <div class="common_p_block">
              <p>Corporate Social Responsibility (CSR) is implemented by the Government of India intending to take the participation of private sectors in social purposes. Previously, it was not mandatory for any private companies. After the CSR Act, all private companies have to participate in charitable areas.</p>
              <div class="c_ul_li">
                <h4>CSR is mandatory for companies fulfilling the below criteria:</h4>
                <ul>
                  <li>1. The worth of the company is Rs. 500 crore or more</li>
                  <li>2. The turnover of the company is Rs1,000 crore or more</li>
                  <li>3. Net profit of any company is Rs. 5 crore or more</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>



  </div>
</section>


<section class="ngo_three common_fb">
  <div class="container custom_container">
    <div class="ngo_three_inner">
      <div class="ngo_three_text">
        <p>If any NGO wants CSR registration, and to avoid the complications of filling out the form online, we can do it for them. So, contact us to register CSR from us.</p>
        <p>Our charges are transparent and lower across India. Our charges for CSR is Rs. 10,000/- + 18% GST excluding DSC. You can also contact us for CSR Activity Report.</p>
      </div>



      <div class="new_text_block">
        <div class="new_text_block_one">
          <h4>Documents required for CSR registration:</h4>
          <div class="ngo_one_ul_li">
            <ul>
              <li>Details of members of the Organization</li>
              <li>PAN card of the Section 8 Company </li>
              <li>12AB & 80G Registration Order Copy</li>
              <li>DIN/PAN of the Secretary, Trustee, or Director of the Company</li>
              <li>Company Deed</li>
              <li>DSC of the Entity Applying</li>
              <li>Email ID and Mobile Number of the Applicant</li>
            </ul>
          </div>
        </div>
        <div class="new_text_block_two">
          <h4>Benefits of CSR Registration:</h4>
          <p>Extensive research proves that CSR registration has a strong impact on NGOs, including Section 8 companies. Learn some of its benefits.</p>

          <div class="heading_text_block">
            <h5>Obtaining section 8 companies more CSR funds</h5>
            <p>When a nonprofit organization or Section 8 company registers under CSR, they have the chance to draw more attention to the corporations that are willing to donate in the funds of organizations serving the people, and performing social responsibilities. The corporate entities will get the benefits of complying with social responsibilities and the Section 8 companies will get more funds.</p>
          </div>


          <div class="heading_text_block">
            <h5>Builds Authenticity of the nonprofit organization</h5>
            <p>When a Section 8 company obtains CSR certificate, it becomes credible to the government, as well as to the donor companies. The section 8 company/NGO founders can run a campaign for the companies that need to comply with CSR. So, your company will be capable of getting more active in social wellbeing. </p>
          </div>


          <div class="heading_text_block">
            <h5>Enhances Reputation of the company</h5>
            <p>When your Section 8 Company is registered under CSR, the employees of the company will be confident that its funding will be smoothly increased by the company that wants to comply with its social responsibilities. Apart from the employees’ mental conformity, social people will also feel that the Section 8 Company is reliable and authentic. </p>
          </div>


          <div class="heading_text_block">
            <h5>Creates positive environment and social transformations</h5>
            <p>CSR-certified section 8 companies promote a positive social environment and the flow of funds remains stable from the companies that require compliance with social responsibilities. The authorities can easily support people regarding health, education, water, and many other social and environmental issues. </p>
          </div>


          <div class="ngo_sub_heading">
            <h6>CSR Activity Report:</h6>
            <p>You know CSR stands for Corporate Social Responsibility. Companies with specific turnover need to be socially responsible for the people in the nation. They can also donate funds to NGOs for social service. </p>
            <p>A corporate social responsibility report is an internal and external document that the registered companies or NGOs have to maintain. They have to show the proof of social service to the donor companies as well as to the government. So, a report generation is essential. </p>
            <p>If you do not know how and when to do it, contact Online Legal India, the most trusted online platform to solve all your CSR-related issues, or create a CSR Activity Report for submission. Contact us for getting it at the lowest cost.</p>
          </div>


          <div class="last_button">
            <button type="button" class="btn tsfb_started last_button_holder apply_now_green">Contact Us</button>
          </div>


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
  $(".clickhere").click(function() {
    var newSrc = this.id;
    $('#trademode').attr('src', newSrc);
  });
</script>

<script>
  $('ul.nav li.dropdown').hover(function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(300);
  }, function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(300);
  });
</script>

<script>
  $(document).ready(function() {
    // only number input
    $("#mobile").on("keypress keyup blur", function(event) {
      $(this).val($(this).val().replace(/[^0-9\.]/g, ''));
      if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event
          .which > 57)) {
        event.preventDefault();
      }
    });

    $('#Covid19').modal('show');
  });
</script>

<script>
  baseUrl = 'https://www.onlinelegalindia.com/'
  $(document).on('click', '#nextBtn', function(e) {
    e.preventDefault();
    $('#nextBtn').text('Please Wait..');
    if ($(".oli-validate-form").valid()) {

      var captcha_code = $('#captcha_code').val();
      $.ajax({
        url: "../../payment/verify_captcha.php",
        method: 'post',
        data: {
          captcha_code: captcha_code
        },
        success: function(result) {
          if (result == 1) {

            $('#nextBtn').prop('disabled', true);
            var name = $('#cust_name').val();
            var email = $('#cust_email').val();
            var mobile = $('#mobile').val();
            var service = $('#service').val();
            var state = $('#state option:selected').val();
            is_prompted_whatsapp = 0;
            let landing_uri = $('#landing_uri').val();

            $.ajax({
              url: "../../payment/submit_ngo_compliance_filing.php",
              method: 'post',
              data: {
                name: name,
                email: email,
                mobile: mobile,
                state: state,
                is_prompted_whatsapp: is_prompted_whatsapp,
                service: service,
                landing_uri: landing_uri
              },
              dataType: "json",
              beforeSend: function() {
                $('#nextBtn').text('Please Wait..');
                $('#nextBtn').attr('disabled', true);
              },
              success: function(data) {
                if (data.success) {
                  $('#nextBtn').html('Redirecting to Payment Lobby...')
                  $('#nextBtn').css('pointer-events', 'none');
                  var oli_id = data.oli_id;
                  window.location = baseUrl + 'payment/payment-lobby.php?oli-id=' + oli_id;
                  fbq('track', 'Lead');
                } else {
                  alert(data.msg);
                }

              }
            });

          } else {
            alert('Please Enter the Correct Captcha');
          }
        }
      });

    }
  });


  $(document).on('click', '#contact-submit', function() {
    var r = $(this),
      service_price = $("input[name=price]:checked").val();

    if ($('.oli-validate-form').valid()) {
      verifyCaptcha(r);

    }
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

  function submitOli(btn) {
    btn.attr('type', 'submit')
      .html('Redirecting to Payment Lobby...')
      .css('pointer-events', 'none');
    $('.oli-validate-form').submit();

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
      service: {
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
      service: {
        required: "Please enter your required Service"
      }
    }
  });

  $(document).on('click', '#btnrefresh', function() {
    var url = window.location.origin + '/payment/captcha.php?' + Math.random();
    document.getElementById('captcha_holder').src = url;
    document.getElementById('captcha_code').value = '';
    return false;
  });
  $('.gst_rdiobtn').click(function() {
    $('.price_active').toggleClass('price_active');
    $(this).toggleClass('price_active');
    $('.gst_rdiobtn label').css("cursor", "pointer");
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
  $('.owl-two').owlCarousel({
    loop: false,
    margin: 35,
    nav: true,
    autoplay: true,
    autoplayTimeout: 2000,
    responsive: {
      0: {
        items: 1,
        nav: false
      },
      600: {
        items: 3
      },
      1000: {
        items: 3
      }
    }
  });

  $(".apply-now-cls").click(function() {
    $('#Trademark-class').modal('hide');
    $('html, body').animate({
      scrollTop: $("#contact").offset().top
    });
  });
</script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-154577425-1"></script>

<script>
  window.wa_service_name = 'Trademark Registration';
  window.wa_service_code = 'TMR';
</script>

<script>
  var pixelWidthCounter = window.matchMedia("(max-width: 800px)")
  scrollFunction(pixelWidthCounter) // Call listener function at run time
  pixelWidthCounter.addListener(scrollFunction)
  window.onscroll = function() {
    scrollFunction()
  };


  function scrollFunction() {
    var pixelWidthCounter = window.matchMedia("(max-width: 800px)")

    if (pixelWidthCounter.matches) {

      window.onscroll = function() {
        scrollFunction()
      };

      function scrollFunction() {
        if (document.body.scrollTop > 2500 || document.documentElement.scrollTop > 2500) {
          var classDetails = document.getElementById("mb-onscroll-button");
          classDetails.style.bottom = "0";
          classDetails.style.position = "fixed";

        } else {
          var classDetails = document.getElementById("mb-onscroll-button");
          classDetails.style.bottom = "-60px";
          classDetails.style.position = "relative";
        }
      }
    }
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
  $('.owl-three').owlCarousel({
    loop: false,
    margin: 35,
    nav: true,
    autoplay: true,
    navText: [
      '<i class="fas fa-long-arrow-alt-left md_left_arrow"></i>',
      '<i class="fas fa-long-arrow-alt-right md_right_arrow"></i>'
    ],
    autoplayTimeout: 2000,
    responsive: {
      0: {
        items: 1,
        nav: true
      },
      600: {
        items: 1
      },
      1000: {
        items: 1
      }
    }
  });
</script>

<script>
  $(document).on('click', '#btnrefresh', function() {
    var url = window.location.origin + '/payment/captcha.php?' + Math.random();
    document.getElementById('captcha_holder').src = url;
    document.getElementById('captcha_code').value = '';
    return false;
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
</script>

<script type="text/javascript">
  /*Do not remove this.This is for UTM tracking*/
  var landing_form_type = 'TMR';
</script>
@endsection
