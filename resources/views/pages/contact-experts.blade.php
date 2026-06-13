@extends('layouts.app')

@section('meta')
<title>Need Help? Contact Our Experts | Foundida</title>
<meta name="description" content="For any query you can reach out our experts. Trusted by 5 Lakh+ satisfied customers across the country. Get Hassle-Free services at a single click. Contact now!">
<meta name="keywords" content="Trademark Registration">
<link rel="canonical" href="https://www.foundida.com/contact/" />
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.foundida.com/contact/">
<meta property="og:image" content="https://www.foundida.com/images/kolkata.jpg">
<meta property="og:title" content="Need Help? Contact Our Experts | Foundida">
<meta property="og:site_name" content="Foundida">
<meta property="og:description" content="For any query you can reach out our experts. Trusted by 5 Lakh+ satisfied customers across the country. Get Hassle-Free services at a single click. Contact now!">
<meta property="og:locale" content="en-IN">
<script type="application/ld+json">
  {
    "@@context": "https://schema.org",
    "@@type": "ProfessionalService",
    "name": "Foundida",
    "image": "https://www.foundida.com/images/co-working.jpg",
    "@id": "https://www.foundida.com",
    "url": "https://www.foundida.com",
    "telephone": "8448440466",
    "priceRange": "1499",
    "address": {
      "@@type": "PostalAddress",
      "streetAddress": "Kariwala Towers, 8th Floor, J1-5, EP Block, Salt Lake Sec-V",
      "addressLocality": "Kolkata",
      "postalCode": "700091",
      "addressCountry": "IN"
    },
    "geo": {
      "@@type": "GeoCoordinates",
      "latitude": 22.5712803,
      "longitude": 88.4361859
    },
    "openingHoursSpecification": {
      "@@type": "OpeningHoursSpecification",
      "dayOfWeek": [
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday"
      ],
      "opens": "10:00",
      "closes": "20:00"
    },
    "sameAs": [
      "https://www.facebook.com/Foundida/",
      "https://twitter.com/onlinelegalind",
      "https://www.instagram.com/foundidaofficial/",
      "https://www.foundida.com"
    ]
  }
</script>
@endsection

@section('styles')
<!--      <link rel="stylesheet" type="text/css" href="https://www.foundida.com/css/bootstrap.min.css">-->
   <!-- <link rel="stylesheet" type="text/css" href="https://www.foundida.com/css/cut.css"> -->
   <!-- <link rel="stylesheet" type="text/css" href="https://www.foundida.com/css/alternative-contact-popup.css"> -->
   <!-- <link rel="stylesheet" href="https://www.foundida.com/css/brands.min.css"> -->
   <!-- <link rel="stylesheet" href="https://www.foundida.com/css/solid.min.css"> -->
@endsection

@section('content')
<link rel='stylesheet' href='css/custom-contact.css' type='text/css' media='all' />
<style>
   @media screen and (max-width:768px) {
      #address_parrent {
         float: left;
         width: 100%;
      }
   }
</style>

<!-----Here is the request complaint feedback suggestion section--->


<div class="modal fade" id="newcustomer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
   <div class="modal-dialog modal-dialog-centered " role="document">

      <div class="modal-content modal_body_color modifi_body">
         <div class="modal-body">
            <div class="container-fluid">
               <div class="row">
                  <div class="mdl-hdr-style">
                     <button type="button" class="close model-custom-close-button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="crs-clr">×</span>
                     </button>
                  </div>

                  <div class="modal_rightText_box col-md-6 ml-auto pull-right">
                     <h3 class="title-pattern mt-0"><span class="text-theme-color-2"> New Customer</span></h3>
                     <!-- Appilication Form Start-->
                     <form id="reserv_form1" name="reservation_form" onsubmit="return ValidateForm();" class="reservation-form mt-20" method="post" action="submit-bank-exam">
                        <div class="row">
                           <div class="col-sm-12">
                              <div class="form-group mb-20">
                                 <input placeholder="Enter your Name" type="text" id="customer_name" name="customer_name" class="form-control" required="">
                              </div>
                           </div>
                           <div class="col-sm-6">
                              <div class="form-group mb-20">
                                 <input placeholder="Enter your contact number" type="tel" id="customer_mobile" name="customer_mobile" class="form-control" required="">
                              </div>
                           </div>
                           <div class="col-sm-6">
                              <div class="form-group mb-20">
                                 <input placeholder="Enter your email id" type="email" id="customer_email" name="customer_email" class="form-control" required="">
                              </div>
                           </div>
                           <div class="col-sm-12">
                              <div class="form-group mb-20">
                                 <select class="form-control" id="service" name="service">
                                    <option value="">--- Select Service ---</option>
                                    <option value=PCR>Private Company Registration</option><option value=OPC>One Person Company Registration</option><option value=NIDHI>NIDHI Company Registration</option><option value=FSSAI>Food Safety and Standards Authority of India (FSSAI)</option><option value=FSSAIREN>FSSAI License Renewal</option><option value=IEC>Import Export Code Registration</option><option value=TMR>Trademark Registration</option><option value=TMROBJ>Trademark Objection</option><option value=TMRREN>Trademark Registration Renewal</option><option value=GST>GST Registration</option><option value=GSTRTN>GST Return Filing</option><option value=GSTMOD>GST Modifications</option><option value=PFR>PF & ESI Registration</option><option value=PFRTN>PF & ESI Return Filing</option><option value=ESIC>ESIC Registration</option><option value=ESICRTN>ESIC Return Registration</option><option value=TDSF>TDS Filing</option><option value=PTAXR>PTAX Registration</option><option value=REGOC>Registered Office Change Registration</option><option value=BKK>Book Keeping</option><option value=OHR>Online HR</option><option value=ITR>Income Tax Return Filing (ITR)</option><option value=IECMOD>IEC Modification</option><option value=TMHR>Trademark Hearing</option><option value=CPRT>Copyright Registration</option><option value=TMOPP>Trademark Opposition India</option><option value=AFC>Annual Filing Compliance</option><option value=LOGO>Online Logo Services</option><option value=SEC8>Section 8 Company Registration</option><option value=GSTR9>GSTR-9 Annual Return Filing</option><option value=GSTLUT>GST LUT Filing</option><option value=GSTEWAY>GST EWay</option><option value=RMDIR>Removal of Directors</option><option value=APDIR>Appointment of Directors</option><option value=WINDPCR>Closure of Private Limited Company</option><option value=AUTHCAP>Application for Increasing Authorised Capital</option><option value=PUBC>Public Company Registration</option><option value=GSTCAN>Cancellation of GST Registration</option><option value=FSSAIMOD>FSSAI License Modification</option><option value=MOASEC8>MOA of Section 8 Company</option><option value=MOAPCR>MOA of Private Limited Company</option><option value=MOAPUBC>MOA of Public Limited Company</option><option value=CNC>Company Name Change</option><option value=TAXPLAN>Tax Planning & Consultation</option><option value=CMPCON>Company Registration Consultancy</option><option value=SPR>Sole Proprietorship Registration</option><option value=GSTNIL>GST Nil Return Filing</option><option value=FSSAIARF>FSSAI Annual Return Filing</option><option value=TAXAUD>Tax Audit</option><option value=ROC>Registered Office Change</option><option value=DINEKYC>Director DIN e KYC Update</option><option value=GSTFREE>GST Free Registration</option><option value=TMRSRH>Trademark Registration Search</option><option value=BKKAUDIT>Online Bookkeeping Tax Audit</option><option value=CPLET>Completion of Probation Letter	</option><option value=NOTVACT>Notice to Vacate Tenant</option><option value=EMPTN>Employee Termination Notice</option><option value=LVPOL>Leave policies</option><option value=EMPCON>Employment Contract</option><option value=EXTPOL>Exit policies</option><option value=OFFRLET>Offer Letter</option><option value=JOBRLT>Job Offer Rejection Letter</option><option value=NDAEMP>NDA for Employees</option><option value=HRPOL>HR Policies</option><option value=INDSUBS>Indian Subsidiary Registration</option><option value=OCS>Other Consultancy Services</option><option value=BRL>Business Registration License</option><option value=SHTR>Share Transfer</option><option value=CPRTO>Copyright Objection Reply</option><option value=POLI>Partner OLI</option><option value=EDAAKHIL>EDAAKHIL</option><option value=HCL>Hard Copy License</option><option value=TRADE>Trade License</option><option value=TMRRE>Trademark Registration</option><option value=TMRSR>Trademark Registration Series</option><option value=INDSUB>Indian Subsidiary Company</option><option value=TMRAS>Trademark Assignment</option><option value=TMRG>Trademark Registration Campaign</option><option value=TMRFSM2>Trademark Registration</option><option value=GOTHER>GST Registration</option><option value=ISO>ISO Registration</option><option value=ISORE>ISO</option><option value=EAPL>Execution Application</option><option value=SCRC>State Consumer Redressal Commission</option><option value=80G>80G Service</option><option value=12A>12A Service</option><option value=CSR>Corporate Social Responsibility</option><option value=TMROBJRE>Trademark Objection</option><option value=TMHRRE>Trademark Hearing</option><option value=STIND>STARTUP INDIA</option><option value=PR>PROJECT REPORT</option><option value=CMA>Credit Management Analysis</option><option value=JANSAM>JanSamarth Registration</option><option value=OPC2PVT>One Person Company to Private Company</option><option value=PVT2PUB>Private to Public Ltd Conversion</option><option value=LLP2PVT>LLP TO PVT CONVERSION</option><option value=SEC8WIN>SEC-8 WINDING UP</option><option value=NIDHIWIN>NIDHI WINDING UP</option><option value=TMRI>Trademark Registration</option><option value=TMRA>Trademark Registration (App)</option><option value=TMRB>Trademark Registration (Bing)</option><option value=SUBWIN>Indian Subsidiary Windup</option><option value=DPT3>DPT-3 Filing</option><option value=BKKG>Book Keeping (Google Campaign)</option><option value=ARBTN>Arbitration</option><option value=NDRPN>NGO DARPAN Registration</option><option value=TMRZ>Trademark Registration</option><option value=GSTZ>GST Registration</option><option value=FSSAIZ>Food Safety and Standards Authority of India (FSSAI)</option><option value=FSSAINEW>FSSAI License</option><option value=TMRNEW>Trademark Registration</option><option value=ENTR>E-Notary</option><option value=ISOFSMNEW>ISO</option><option value=FSSAIFSMNEW>Food Safety and Standards Authority of India (FSSAI)</option><option value=GSTFSMNEW>GST Registration</option><option value=PCRFSMNEW>Private Company Registration</option><option value=BKKN>Book Keeping (Facebook)</option><option value=GSTRTNFSMN>GST Return Filing</option><option value=TDSFSMNEW>TDS Filing</option><option value=ADVR>Advocate Registration</option><option value=PFRTNCLS>PF & ESI Return Filing (CLS Lead)</option><option value=ESICCLS>ESIC Registration (CLS Lead)</option><option value=ESICRTNCLS>ESIC Return Registration (CLS Lead)</option><option value=TDSFCLS>TDS Filing (CLS Lead)</option><option value=PTAXRCLS>PTAX Registration (CLS Lead)</option><option value=REGOCCLS>Registered Office Change Registration (CLS Lead)</option><option value=BKKCLS>Book Keeping (CLS Lead)</option><option value=ITRCLS>Income Tax Return Filing (ITR) (CLS Lead)</option><option value=IECMODCLS>IEC Modification (CLS Lead)</option><option value=TMHRCLS>Trademark Hearing (CLS Lead)</option><option value=CPRTCLS>Copyright Registration (CLS Lead)</option><option value=TMOPPCLS>Trademark Opposition India (CLS Lead)</option><option value=AFCCLS>Annual Filing Compliance (CLS Lead)</option><option value=LOGOCLS>Online Logo Services (CLS Lead)</option><option value=SEC8CLS>Section 8 Company Registration (CLS Lead)</option><option value=GSTR9CLS>GSTR-9 Annual Return Filing (CLS Lead)</option><option value=GSTLUTCLS>GST LUT Filing (CLS Lead)</option><option value=GSTEWAYCLS>GST EWay (CLS Lead)</option><option value=RMDIRCLS>Removal of Directors (CLS Lead)</option><option value=APDIRCLS>Appointment of Directors (CLS Lead)</option><option value=WINDPCRCLS>Closure of Private Limited Company (CLS Lead)</option><option value=WINDLLPCLS>Closure of Limited Liability Company (CLS Lead)</option><option value=AUTHCAPCLS>Application for Increasing Authorised Capital (CLS Lead)</option><option value=PUBCCLS>Public Company Registration (CLS Lead)</option><option value=GSTCANCLS>Cancellation of GST Registration (CLS Lead)</option><option value=FSSAIMODCLS>FSSAI License Modification (CLS Lead)</option><option value=MOASEC8CLS>MOA of Section 8 Company (CLS Lead)</option><option value=MOAPCRCLS>MOA of Private Limited Company (CLS Lead)</option><option value=MOAPUBCCLS>MOA of Public Limited Company (CLS Lead)</option><option value=CNCCLS>Company Name Change (CLS Lead)</option><option value=OTPCLS>Tax Planning & Consultation (CLS Lead)</option><option value=CMPCONCLS>Company Registration Consultancy (CLS Lead)</option><option value=SPRCLS>Sole Proprietorship Registration (CLS Lead)</option><option value=GSTLPCLS>GST Registration Application (CLS Lead)</option><option value=GSTNILCLS>GST Nil Return Filing (CLS Lead)</option><option value=FSSAIARFCLS>FSSAI Annual Return Filing (CLS Lead)</option><option value=TAXAUDCLS>Tax Audit (CLS Lead)</option><option value=ROCCLS>Registered Office Change (CLS Lead)</option><option value=DINEKYCCLS>Director DIN e KYC Update (CLS Lead)</option><option value=GSTFREECLS>GST Free Registration (CLS Lead)</option><option value=TMRSRHCLS>Trademark Registration Search (CLS Lead)</option><option value=BKKAUDITCLS	>Online Book Keeping Tax Audit (CLS Lead)</option><option value=CPLETCLS>Completion of Probation Letter (CLS Lead)</option><option value=NOTVACTCLS>Notice to Vacate Tenant (CLS Lead)</option><option value=EMPTNCLS	>Employee Termination Notice (CLS Lead)</option><option value=APPLETCLS>Appointment letter (CLS Lead)</option><option value=LVPOLCLS>Leave policies (CLS Lead)</option><option value=EMPCONCLS>Employment Contract (CLS Lead)</option><option value=EXTPOLCLS>Exit policies (CLS Lead)</option><option value=OFFRLETCLS>Offer Letter (CLS Lead)</option><option value=JOBRLTCLS>Job Offer Rejection Letter (CLS Lead)</option><option value=NDAEMPCLS>NDA for Employees (CLS Lead)</option><option value=INDSUBSCLS>Indian Subsidiary Registration (CLS Lead)</option><option value=OCSCLS>Other Consultancy Services (CLS Lead)</option><option value=BRLCLS>Business Registration License (CLS Lead)</option><option value=SHTRCLS>Share Transfer (CLS Lead)</option><option value=CPRTOCLS>Copyright Objection Reply (CLS Lead)</option><option value=POLICLS>Partner OLI (CLS Lead)</option><option value=PFRTNFSMCLS>Provident Fund Return Registration (CLS Lead)</option><option value=PFRFSMCLS>Provident Fund Registration(PF Registration) (CLS Lead)</option><option value=EDAAKHILCLS>EDAAKHIL (CLS Lead)</option><option value=HCLCLS>Hard Copy License (CLS Lead)</option><option value=TRADECLS>Trade License (CLS Lead)</option><option value=TMRSRCLS>Trademark Registration Series (CLS Lead)</option><option value=INDSUBCLS>Indian Subsidiary Company (CLS Lead)</option><option value=TMRASCLS>Trademark Assignment (CLS Lead)</option><option value=ISOCLS>ISO Registration (CLS Lead)</option><option value=EAPLCLS>Execution Application (CLS Lead)</option><option value=SCRCCLS>State Consumer Redressal Commission (CLS)Lead</option><option value=80GCLS>80G Service (CLS Lead)</option><option value=12ACLS>12A Service (CLS Lead)</option><option value=CSRCLS>Corporate Social Responsibility (CLS Lead)</option><option value=STINDCLS		>STARTUP INDIA (CLS Lead)</option><option value=PRCLS>PROJECT REPORT (CLS Lead)</option><option value=CMACLS>Credit Management Analysis (CLS Lead)</option><option value=JANSAMCLS	>JanSamarth Registration (CLS Lead)</option><option value=OPC2PVTCLS>One Person Company to Private Company (CLS Lead)</option><option value=PVT2PUBCLS>Private to Public Ltd Conversion (CLS Lead)</option><option value=LLP2PVT	CLS>LLP TO PVT CONVERSION	 (CLS Lead)</option><option value=SEC8WINCLS>SEC-8 WINDING UP (CLS Lead)</option><option value=NIDHIWINCLS>NIDHI WINDING UP (CLS Lead)</option><option value=SUBWINCLS>INDIAN SUBSIDIARY WINDUP (CLS Lead)</option><option value=DPT3CLS		>DPT-3 Filing (CLS Lead)</option><option value=ARBTNCLS>Arbitration (CLS Lead)</option><option value=NDRPNCLS>NGO DARPAN Registration (CLS Lead)</option><option value=TMRFSMNEW>Trademark Registration (FSMNEW)</option><option value=ODR>Online Dispute Resolution</option><option value=TMRL>Trademark Registration	</option><option value=CD>Consumer Dispute</option><option value=TMRISO>Trademark Registration & ISO Certificate</option><option value=AFCBKK>Annual Filing Compliance & Bookkeeping</option><option value=AD>ALL Dispute Resolution</option><option value=BISC>BIS Certification</option><option value=TIPCR>TMR + ISO + Company Registration</option><option value=PCRL>Private Company Registration (FB Lead Form)</option><option value=GSTPCR>Private Company & GST Registration</option><option value=ITS>IT Services</option><option value=ODRLAB>Online Dispute Resolution Labour</option><option value=CDI>Consumer Dispute Insurance</option><option value=TMRW>Trademark Watch</option><option value=TMRMIKEW>Trademark Mike Watch</option><option value=TC>Tax and Compliance</option><option value=GIA>GST / ITR / Accounting</option><option value=PCRF>Private Company Registration (Fastinfo)</option><option value=FSSAIF>Food Safety and Standards Authority of India (FSSAI) (Fastinfo)</option><option value=ITSF>IT Services (Fastinfo)</option><option value=GSTF>GST Registration (Fastinfo)</option><option value=ISOF>ISO Registration (Fastinfo)</option><option value=ISOIF>ISO Registration International (Fastinfo)</option><option value=OTHERS>Other Services</option><option value=TMROPF>Trademark Registration (OPF)</option><option value=CXO>Virtual CXO Services</option><option value=ITSFWD>IT Services (Web Design) (Fastinfo)</option><option value=ITSFWDF>IT Services (Web Design) (Fastinfo)</option><option value=ITSFDMIF>IT Services (Digital Marketing) (Fastinfo International)</option><option value=ITSFWDIF>IT Services (Web Design) (Fastinfo International)</option><option value=ITSFDMF>IT Services (Digital Marketing) (Fastinfo)</option><option value=CCGA>Corporate Compliance & Governance Advisory</option><option value=CCGAF>Corporate Compliance & Governance Advisory</option><option value=CXOF>Virtual CXO Services</option><option value=CCGAFS>Corporate Compliance & Governance Advisory</option><option value=TFDT>The Founders' Discussion Table</option><option value=MLS>Multiple Services</option><option value=AB>Accounting & Bookkeeping</option><option value=CFO>Virtual CFO Services</option><option value=B2BALL>All Service Campaign</option><option value=BCGS>Corporate Compliance & Governance Advisory</option><option value=TMRINC>Trademark & Incorporation</option><option value=CDPD>Consumer Dispute Property Dispute</option><option value=HRPC>HR & Payroll Compliance</option><option value=HRPCF>HR & Payroll Compliance</option><option value=ITSWEBDAUD>IT Services (Website Design and Audit)</option><option value=GEM>Government e-Marketplace Registration</option><option value=ODRBD>Business Dispute</option><option value=NTR>Notary Service</option><option value=ALLMS>All Multiple Services</option><option value=FCC>Free Compliance Check Service</option><option value=FSSAIFLC>Food Label Compliance</option><option value=EPFR>PF Registration</option><option value=TMRWH>Trademark Withdrawal</option><option value=INTMR>International Trademark Application</option><option value=BDS>Bid Support</option><option value=IBCS>International Business Consultation</option><option value=BCS>Business Consultation</option><option value=ITSGMB>Google My Business</option><option value=HRMS>HR Management System</option><option value=HRDOC>HR Documents</option><option value=ICCS>Internal Complaints Committee Setup</option><option value=POSHCON>POSH Consultancy</option><option value=COMPCAL>Compliance Calendar</option>                                 </select>
                              </div>
                           </div>
                           <div class="col-sm-12">
                              <div class="form-group mb-20">
                                 <textarea placeholder="Reason" id="reason" name="reason" class="form-control" required=""></textarea>
                              </div>
                           </div>
                           <div class="col-md-8 pull-right">
                              <div class="form-group">
                                 <button type="button" onclick="newcustomer();" class="btn btn-colored success" data-loading-text="Please wait...">Submit</button>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<!-- modal for existing customer callback -->
<div class="modal fade" id="existingcustomer" tabindex="-1" data-backdrop="static" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered " role="document">
      <div class=" modal-content modal_body_color check" id="existingcustomer_div">
         <div class="modal-body">
            <div class="container-fluid">
               <div class="row">
                  <div class=" fm-mn-style">
                     <div class="mdl-hdr-style">
                        <button type="button" class="close model-custom-close-button" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true" class="crs-clr">×</span>
                        </button>
                     </div>
                     <div class="modal_rightText_box col-md-6 ml-auto pull-right ">
                        <h3 class="title-pattern mt-0"><span class="text-theme-color-2">Calback request form | Existing customer</span></h3>
                        <!-- Appilication Form Start-->
                        <form id="reserv_form2" name="reservation_form" class="reservation-form mt-20">
                           <div class="row">
                              <div class="col-sm-12">
                                 <div class="form-group mb-20">
                                    <input placeholder="Enter OLI ID here" type="text" id="reg_cust_oli" name="reg_cust_oli" class="form-control"> <button type="button" onclick="ValidateOliId()" class="btn success" id="existing_button">Validate</button>
                                    <span id="error_invalid_oliid" style="color:red;display:none">OLI ID Not Valid *</span>
                                 </div>
                              </div>
                              <div id="re_cus_detail_section" style="display:none;">
                                 <div class="col-sm-12">
                                    <div class="form-group mb-20">
                                       <input placeholder="Name" type="text" id="reg_cust_name" name="reg_cust_name" class="form-control" readonly>
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="form-group mb-20">
                                       <input placeholder="Email" type="text" id="reg_cust_email" name="reg_cust_email" class="form-control" readonly>
                                       <input type="hidden" name="reg_cust_id" id="reg_cust_id">
                                       <input type="hidden" name="reg_cust_assign_emp" id="reg_cust_assign_emp">
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="form-group mb-20">
                                       <input placeholder="Name" type="text" id="reg_cust_mobile" name="reg_cust_mobile" class="form-control" readonly>
                                    </div>
                                 </div>
                                 <div class="col-sm-12">
                                    <div class="form-group mb-20">
                                       <textarea id="comment-reason" class="form-control" placeholder="Reason" name="comment" rows="8" tabindex="4"></textarea>
                                    </div>
                                 </div>
                                 <div class="col-md-8 pull-right">
                                    <div class="form-group">
                                       <button type="button" onclick="RaiseCallbakRequest()" class="btn btn-colored success" data-loading-text="Please wait...">Submit Request</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- end of modal for existing customer callback -->

<!-- modal for complaint  -->
<div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
   <div class="esc_custom_modal esc_custom_modal999">
      <div class="modal-dialog esc_modal_dialog new_new_new_modal_header" role="document">
         <div class="modal-content new_new_new_modal_content">

            <div class="modal-header esc_modal_header new_new_header_block">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true" class="custom_btn_cross">&times;</span>
               </button>
            </div>

            <div class="custom_modal_body text-center">
               <h4><span>Escalation</span>Update</h4>
               <div class="first_modal_form_first">
                  <div class="first_modal_form_first_inner">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="form-group mb-20">
                              <select onchange="ChangeComplaintCompany(this.value)" class="form-control custom_contact_control" id="cmplntabt" name="cmplntabt" required>
                                 <option value="">--Complaint About--</option>
                                 <option value="oli">Foundida</option>
                                 <option value="other">Other Company</option>
                              </select>
                              <span id="cmpl_error_invalid_cmplntabt" style="color:red;display:none">Please Select Your Complain Against</span>
                           </div>
                        </div>
                        <div class="col-sm-12">
                           <div class="form-group1 text_center_css">
                              <input style="display:none" placeholder="OLI Id" type="text" id="cmpl_oli_id" name="cmpl_oli_id" class="form-control custom_contact_control mb-20" required="">
                              <span id="cmpl_error_invalid_oliid" style="color:red;display:none">OLI ID Not Valid</span>
                              <button type="button" id="complaintvalid" class="btn custom_new_new_button" onclick="ValidateOliIdForComplaint()">Validate</button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="first_modal_form first_modal_form_second" style="display: none;">

                  <div class="new_custom_pannel_group" id="accordion" role="tablist" aria-multiselectable="true">

                     <div class="panel panel-default new_new_pannel_default first_section" style="display:none;">
                        <div class="first_section_title">
                           <h4 class="panel-title">1st step (Executive)</h4>
                        </div>
                        <div class="first_section_body">
                           <div class="panel-body new_custom_pannel_body">

                              <ul>
                                 <li>First Level Escalation</li>
                              </ul>
                              <p id="ongoing_part_text">Submit your Concern to Us</p>

                              <div class="executive_first_toggle_block registration-part" style="display:none;">
                                 <div class="new_custom_pannel_body_button_block">
                                    <button class="btn custom_new_new_button" id="raise_escalation">Raise escalation</button>
                                 </div>
                                 <div class="raise_escalation_div" style="display:none">

                                    <form>
                                       <div class="row">

                                          <div class="col-md-12">
                                             <div class="form-group">
                                                <input type="text" class="form-control custom_contact_control" id="cmpl_cust_name" name="cmpl_cust_name" placeholder="Name">
                                             </div>
                                          </div>

                                          <div class="col-md-6" hidden>
                                             <div class="form-group">
                                                <input type="email" class="form-control custom_contact_control" id="cmpl_cust_email" name="cmpl_cust_email" placeholder="Email">
                                             </div>
                                          </div>

                                          <div class="col-md-6" hidden>
                                             <div class="form-group">
                                                <input type="text" class="form-control custom_contact_control" id="cmpl_cust_mobile" name="cmpl_cust_mobile" placeholder="Number">
                                             </div>
                                          </div>

                                          <div class="col-md-12">
                                             <div class="form-group">
                                                <textarea class="form-control" rows="3" placeholder="Complaint in details" id="cmpl_detail" name="cmpl_detail"></textarea>
                                             </div>
                                          </div>
                                          <input type="hidden" name="cmpl_cust_id" id="cmpl_cust_id">
                                          <input type="hidden" name="cmpl_cust_assign_emp" id="cmpl_cust_assign_emp">
                                          <input type="hidden" name="re_escalate" id="re_escalate" value="0">
                                          <div class="col-md-12">
                                             <!-- <div class="form-group">
                                                <button type="button"  class="btn btn-colored first_custom_block_button">Submit Complaint</button>
                                             </div> -->
                                             <div class="form-group1 mb-0 mt-10">
                                                <button type="button" class="btn first_custom_block_button" onclick="SubmitCustComplaint()">Submit Complaint</button>
                                             </div>
                                          </div>

                                       </div>
                                    </form>

                                 </div>
                              </div>
                              <div class="panel-body new_custom_pannel_body ongoing-part" style="display:none;">

                              </div>
                              <div class="new_custom_pannel_body_button_block re-escalate-part" style="display:none;">

                                 <div class="re-escalate-btn-part">
                                    <p>If you are not satisfied with the Resolution, Pass the Case to the Executive’s Supervisor. </p>
                                    <button class="btn custom_new_new_button" id="re_escalate_btn">Re-Escalate</button>
                                 </div>
                                 <p>If you have another concern. </p>
                                 <button class="btn custom_new_new_button  new_escalation_btn" id="new_escalation_btn">Raise New Escalation</button>


                              </div>
                           </div>

                        </div>
                     </div>

                     <div class="panel panel-default new_new_pannel_default second_section" style="display:none;">
                        <div class="second_section_title">
                           <h4 class="panel-title">2nd Step Supervisor</h4>
                        </div>
                        <div class="second_section_body">
                           <div class="panel-body new_custom_pannel_body">
                              <ul>
                                 <li>Second Level Escalation</li>
                              </ul>
                              <p id="esc2_desc_text"></p>
                              <div class="re-escalate-part2" style="display:none;">
                                 <div class="re-escalate-btn-part">
                                    <p>If you are Still not Satisfied with the Resolution, Pass the Case to the Higher Management. </p>
                                    <button class="btn custom_new_new_button" id="re_escalate_btn2">Re-Escalate</button>
                                 </div>
                                 <p>If you have another concern. </p>
                                 <button class="btn custom_new_new_button  new_escalation_btn" id="new_escalation_btn">Raise New Escalation</button>


                              </div>
                           </div>
                        </div>
                     </div>

                     <div class="panel panel-default new_new_pannel_default third_section" style="display:none;">
                        <div class="third_section_title">
                           <h4 class="panel-title">3rd Step Management</h4>
                        </div>
                        <div class="third_section_body">
                           <div class="panel-body new_custom_pannel_body">
                              <ul>
                                 <li>Third Level Escalation</li>
                              </ul>
                              <p id="esc3_desc_text"></p>
                              <div class="re-escalate-part3" style="display:none;">
                                 <div class="re-escalate-btn-part">
                                    <p>If you have another concern. </p>
                                    <button class="btn custom_new_new_button  new_escalation_btn" id="new_escalation_btn">Raise New Escalation</button>
                                 </div>

                              </div>
                           </div>
                        </div>
                     </div>

                  </div>

               </div>
            </div>

         </div>
      </div>
   </div>
</div>
<!--------- end -------------->

<!-- -- modal for feedback form-- -->
<div class="modal fade" id="feedback" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
   <div class="modal-dialog modal-dialog-centered " role="document">
      <div class=" modal-content modal_body_color check " id="feedback_div">
         <div class="modal-body">
            <div class="container-fluid">
               <div class="row">
                  <div class=" fm-mn-style">
                     <div class="mdl-hdr-style">
                        <button type="button" class="close model-custom-close-button" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true" class="crs-clr">×</span>
                        </button>
                     </div>
                     <div class="modal_rightText_box col-md-8 ml-auto pull-right ">
                        <h3 class="title-pattern mt-0"><span class="text-theme-color-2">Feedback</span></h3>
                        <!-- Appilication Form Start-->
                        <form id="reserv_form4" name="reservation_form" class="reservation-form mt-20" method="post">
                           <div class="row">
                              <div class="col-sm-12">
                                 <div class="form-group mb-20" id="valid_oli">
                                    <input placeholder="Enter OLI ID here" type="text" id="feedback_oli" name="feedback_oli" class="form-control" value="">
                                    <button type="button" id="feedbackvalid" onclick="ValidateOliIdfeedback()" class="btn success">Validate</button>
                                    <span id="error_feedback_oliid" style="color:red;display:none">OLI ID Not Valid *</span>
                                 </div>
                                 <div id="feedback_section" style="display:none;">
                                    <div class="col-sm-12">
                                       <fieldset class="rating">
                                          <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Rocks!">5 stars</label>
                                          <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Pretty good">4 stars</label>
                                          <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Meh">3 stars</label>
                                          <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Kinda bad">2 stars</label>
                                          <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label>
                                       </fieldset>

                                    </div>
                                    <div class="form-group mb-20">
                                       <select id="rating_reason" class="form-control" style="display: none;">
                                          <option disabled selected value=""> --- Select Reason For Rating --- </option>
                                          <option value="Delay In Services">Delay In Services</option>
                                          <option value="Update Required">Update Required</option>
                                          <option value="No Response">No Response</option>
                                          <option value="Invoice Related">Invoice Related</option>
                                          <option value="Wrong Information">Wrong Information</option>
                                          <option value="Payment Related">Payment Related</option>
                                          <option value="Technical issue">Technical issue</option>
                                          <option value="Others">Others</option>
                                       </select>
                                    </div>
                                    <div class="col-sm-12">
                                       <div class="form-group mb-20">
                                          <textarea id="feedback_text" class="form-control" name="feedback_text" rows="2" cols="5" placeholder="Enter feedback"></textarea>
                                          <input type="hidden" name="f_assign" id="f_assign" value="">
                                          <input type="hidden" name="f_oli_id" id="f_oli_id" value="">
                                          <input type="hidden" name="f_id" id="f_id" value="">
                                          <input type="hidden" name="f_mobile" id="f_mobile" value="">
                                          <input type="hidden" name="feedbackActionPerform" id="feedbackActionPerform" value="">
                                          <input type="hidden" name="feedbackUuid" id="feedbackUuid" value="">
                                       </div>
                                    </div>
                                    <!-- <div class="col-sm-12">
                         <div class="form-group mb-20">
                            <input type="text" name="otp" id="otp" value="" class="form-control" placeholder="Enter OTP">
                            <span id="error_otp" style="color:red;display:none">OTP Not Valid *</span>
                         </div>
                      </div> -->
                                    <div class="col-sm-12">
                                       <div class="form-group mb-0 mt-10">
                                          <button type="button" onclick="feedbackinsert()" class="btn btn-colored success" data-loading-text="Please wait...">Submit Request</button>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-----------end------------->
<!--------- suggestion modal --------->
<div class="modal fade" id="suggestion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
   <div class="modal-dialog modal-dialog-centered " role="document">
      <div class=" modal-content modal_body_color check" id="sugg_div">
         <div class="modal-body">
            <div class="container-fluid">
               <div class="row">
                  <div class=" fm-mn-style">
                     <div class="mdl-hdr-style">
                        <button type="button" class="close model-custom-close-button" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true" class="crs-clr">×</span>
                        </button>
                     </div>
                     <div class="modal_rightText_box col-md-6 ml-auto pull-right ">
                        <h3 class="title-pattern mt-0"><span class="text-theme-color-2">Suggestion</span></h3>
                        <!-- Appilication Form Start-->
                        <form id="reserv_form5" name="reservation_form" class="reservation-form mt-20" method="post">
                           <div class="row">
                              <div class="col-sm-12">
                                 <div class="form-group mb-20" id="valid_oli">
                                    <div class="col-sm-12">
                                       <input placeholder="Enter OLI ID here" type="text" id="suggestion_oli" name="suggestion_oli" class="form-control">
                                       <button type="button" id="suggestionvalid" onclick="ValidateOliIdsuggestion()" class="btn success">Validate</button>
                                       <span id="error_suggestion_oliid" style="color:red;display:none">OLI ID Not Valid *</span>
                                    </div>
                                 </div>
                                 <div id="suggestion_section" style="display:none;">
                                    <div class="col-sm-12">
                                       <div class="form-group mb-20">
                                          <input placeholder="Name" type="text" id="s_name" name="s_name" class="form-control" readonly>
                                       </div>
                                    </div>
                                    <div class="col-sm-12">
                                       <div class="form-group mb-20">
                                          <input placeholder="Email" type="text" id="s_email" name="s_email" class="form-control" readonly>
                                       </div>
                                    </div>
                                    <div class="col-sm-12">
                                       <div class="form-group mb-20">
                                          <input placeholder="mobile" type="text" id="s_mobile" name="s_mobile" class="form-control" readonly>
                                       </div>
                                    </div>
                                    <div class="col-sm-12">
                                       <div class="form-group mb-20">
                                          <textarea id="suggestion_text" name="suggestion_text" rows="2" cols="2" placeholder="Enter suggestion" class="form-control"></textarea>
                                          <input type="hidden" name="s_assign" id="s_assign">
                                          <input type="hidden" name="s_oli_id" id="s_oli_id">
                                          <input type="hidden" name="s_id" id="s_id">
                                       </div>
                                    </div>
                                    <div class="col-sm-12">
                                       <div class="form-group mb-0 mt-10">
                                          <button type="button" onclick="suggestioninsert();" class="btn btn-colored success" data-loading-text="Please wait...">Submit Request</button>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<!-----End of request complaint feedback suggestion section--->
<section id="address_parrent">
</section>



<section class="hero-section">
   <div>
      <img src="https://www.foundida.com/images/new_contact-us_backgrund.webp" class="img-fluid" style="width:100%;" alt="Modern high-rise buildings at night with city lights">
   </div>

</section>

<section class="contact-section container">
   <div class="contact-title">
      <h1>Contact Us</h1>
   </div>
   <div class="row g-4 justify-content-center">
      <div class="col-md-6 col-lg-5">
         <div class="contact-card">
            <div class="ho_txt">
               <h6>Registered Office</h6>
            </div>
            <hr>
            <div class="contact-info">
               <p class="address">8th Floor, Kariwala Towers, J1-5, EP Block, Salt Lake Sec-V, Kolkata-700091, West Bengal, India</p>
               <a href="tel:08069029400" class="phone">08069029400</a>
               <a class="email" href="mailto:info@foundida.com">info@foundida.com</a>
            </div>
         </div>
      </div>

      <div class="col-md-6 col-lg-5 mb_mrgn_tp">
         <div class="contact-card">
            <div class="ho_txt">
               <h6>Contact Center</h6>
            </div>
            <hr>
            <div class="contact-info">
               <p class="address"> Unit No A-09, Ground Floor, Tower A, Bhutani Cyber Park, Sec-62, Noida, Gautam Buddha Nagar, Noida, Uttar Pradesh, India, 201301</p>
               <a href="tel:08069029400" class="phone">08069029400</a>
               <a class="email" href="mailto:info@foundida.com">info@foundida.com</a>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="cmg_box">
   <div class="container">
      <div class="row">
         <div class="col-sm-12">
            <div class="corporate-box">
               <h6>For Corporate Tie-ups, Media & Government</h6>
               <div class="corporate-email">
                  <a href="mailto:cmg@foundida.com">cmg@foundida.com</a>
               </div>
               <div class="corporate-note">
                  Please note that we will not respond to any emails sent to this address other<br>
                  than those from the above mentioned parties.
               </div>
            </div>
         </div>
      </div>
   </div>
</section>


<section class="tyfyi_box">
   <div class="thank-you-section container">
      <h2>Thank you for your interest<br>in Foundida</h2>
      <p>We'll make sure your request is directed to the right team—quickly and efficiently.</p>
   </div>

</section>

<section id="calltoaction_btn">
   <div id="oli_contact">
      <div class="container">
         <div class="row">
            <nav class="site-nav">
               <ul class="group">
                  <li class="dropdown">

                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" id="dropdownMenuButton" aria-haspopup="true"><i class="large material-icons">phone_callback</i>Call Back Request</a>
                     <ul class="dropdown-menu dropup sale_dropdown" role="menu" aria-labelledby="dropdownMenuButton">
                        <li><a href="#" data-toggle="modal" data-target="#newcustomer">Sales</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#existingcustomer">Support</a></li>
                     </ul>
                  </li>
                  <li class="">
                     <a href="#" data-toggle="modal" data-target="#exampleModal4"><i class="large material-icons">headset_mic</i>Complaint</a>
                  </li>
                  <li class=""><a href="#" data-toggle="modal" data-target="#feedback"><i class="large material-icons">star_outline</i>Feedback</a></li>
                  <li class="octf-btn"><a href="#" data-toggle="modal" data-target="#suggestion"><i class="large material-icons">chat</i>Suggestion</a></li>
               </ul>
            </nav>
         </div>
      </div>
   </div>
</section>




<section id="map_box">
   <div class="row mycontainer1 rowedit">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3685.82192835634!2d88.39665461427252!3d22.5108633409085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a02713afe68e865%3A0x21a58cf326351d08!2sFastInfo%20Legal%20Services%20Private%20Limited!5e0!3m2!1sen!2sin!4v1568882988188!5m2!1sen!2sin" width="100%" height="450" frameborder="0" allowfullscreen=""></iframe>
   </div>
</section>
<!--here is the how we work, why us, we are associates module-->
<!--here is the how we work, why us, we are associates module-->
<style>
    .footer_bottom {
        height: 110px;
        padding-top: 0;
        margin-top: -8px;
    }

    .footer_copyright {
        margin-top: 10px;
    }

    .footer_bottom_img img {
        width: 63%;
        position: absolute;
        left: 52px;
        top: -10px;
    }

    .footer {
        padding: 21px 0 60px 0;
        padding-top: 40px;
        border-top: 1px solid;
        background: #2e363a;
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
        .footer_bg_black .social_title {
            margin-top: 20px;
        }

        .footer_bottom_img img {
            width: 48%;
            position: relative;
            right: 0;
            top: -90px;
        }

        .footer_bottom_img {
            position: absolute;
            right: 0;
            top: 23px;
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
</section>
        </div>
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
    $('.accordaion-main-div').click(function() {
        var show_id = $(this).attr('data-port-id');
        $('.child-ans-div-1').hide();
        $('#' + show_id).show();

    });
</script>

<script>
    $('.collapsed').click(function() {
        var id_show = $(this).attr('data-port');
        location.href = "#" + id_show;
        $('#' + id_show).addClass('in');
        $('.custom_close').removeClass('in');

    });
</script>
<script> 
    $(window).on('load',function(){
        setTimeout(function(){
//        $("#asia").modal('show');
        $('#asia').appendTo("body").modal('show');    
            }, 4800);
    });   
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
</script>

<script type="text/javascript">
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
        // $("#landing_url").val(readCookie('_landing_url'));
        // $("#Campaignid").val(readCookie('_Campaignid'));
        // $("#utm_content").val(readCookie('_utm_content'));
        // $("#utm_source").val(readCookie('_utm_source'));
        // $("#utm_medium").val(readCookie('_utm_medium'));
        // $("#utm_campaign").val(readCookie('_utm_campaign'));
        // $("#Adgroupid").val(readCookie('_Adgroupid'));
        // $("#device").val(readCookie('_device'));
        // $("#keyword_id").val(readCookie('_keyword_id'));
        var gclidParam = getParam('gclid');
        var gclidFormFields = ['gclid_field', 'foobar']; // all possible gclid form field ids here
        var gclidRecord = null;
        var currGclidFormField;

        var gclsrcParam = getParam('gclsrc');
        var isGclsrcValid = !gclsrcParam || gclsrcParam.indexOf('aw') !== -1;

        gclidFormFields.forEach(function(field) {
            if (document.getElementById(field)) {
                currGclidFormField = document.getElementById(field);
            }
        });

        if (gclidParam && isGclsrcValid) {
            gclidRecord = getExpiryRecord(gclidParam);
            localStorage.setItem('gclid', JSON.stringify(gclidRecord));
        }

        var gclid = gclidRecord || JSON.parse(localStorage.getItem('gclid'));
        var isGclidValid = gclid && new Date().getTime() < gclid.expiryDate;

        if (currGclidFormField && isGclidValid) {
            currGclidFormField.value = gclid.value;
        }
    }

    window.addEventListener('load', addGclid);
</script>

<script>
    $(document).ready(function() {
        $("#searchCompanyQuery").keyup(function() {

            $('#finalResult').text("");

            if ($("#searchCompanyQuery").val().length > 3) {

                //  alert('fdsafzdfffd');
                $.ajax({
                    type: "post",
                    url: "/admin/companysearch",
                    cache: false,
                    data: 'search=' + $("#searchCompanyQuery").val(),
                    beforeSend: function() {
                        $('#loader').show();
                    },

                    success: function(response) {
                        console.log(response);
                        $('#finalResult').html("");
                        var obj = JSON.parse(response);
                        if (obj.length > 0) {
                            try {
                                var items = [];
                                $.each(obj, function(i, val) {
                                    //items.push($('<li/>').text(val.ID + " " + val.Company_Name));
                                    //items.push($('<a href="'+val.ID+'"></a><li/>').text("" + val.Company_Name+""));
                                    items.push('<li><a href="https://foundida.com/companydetails.php?cin=' + val.CORPORATE_IDENTIFICATION_NUMBER + '" target="_blank">' + val.Company_Name + '</a></li>');
                                });
                                $('#finalResult').append.apply($('#finalResult'), items);
                            } catch (e) {
                                alert('Exception while request..');
                            }
                        } else {
                            $('#finalResult').html($('<li/>').text("No Data Found"));
                        }

                    },
                    complete: function() {
                        $('#loader').hide();
                    },
                    error: function() {
                        alert('Error while request..');
                    }
                });
            }
            return false;
        });
    });

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
    // $(document).ready(function(){
    //     if(readCookie('_oclid') != '' || readCookie('_oclid') != null || typeof readCookie('_oclid') !== 'undefined'){
    //         var new_oli_id = "";
    //         $.ajax({
    //            url: "/emailMarketing/cookie-data-track.php",
    //            type: "POST",
    //            data: {oli_id:readCookie('_oclid'), full_url:document.URL, new_oli_id: new_oli_id},
    //            success: function(response){
    //               console.log(response);
    //            }
    //         });            
    //     }

    // });
</script>

<script type="text/javascript">
    $(function() {

        let custom_utm = getParam("custom_utm");
        if (readCookie('_oclid') != '' && readCookie('_oclid') != null && typeof readCookie('_oclid') !== 'undefined' && custom_utm == 'alterpop') {
            // console.log(custom_utm)
            let _oclid = readCookie('_oclid');

            $.ajax({
                type: 'POST',
                url: 'https://www.foundida.com/payment/store-alternative-number.php',
                data: {
                    _oclid: _oclid,
                    action: 'check-alter-number'
                },
                dataType: "json",
                success: function(response) {

                    if (response.success) {
                        $('#registeredMobileNumber').val(response.mobile);
                        $('#alternative-phone-number-popup').modal('show');
                    }

                }
            });
        }

        $("#alternative-contact-popup-form").validate({
            rules: {
                alternativeContactNumber: {
                    required: true,
                    number: true,
                    maxlength: 10,
                    minlength: 10,
                    digits: true
                },
                messages: {
                    alternativeContactNumber: {
                        required: "Please enter your phone number.",
                        number: "Please enter a valid phone number.",
                        maxlength: "Only 10 digit phone number is valid.",
                        minlength: "Only 10 digit phone number is valid."
                    }
                }
            },
            submitHandler: function(form) {

                let _oclid = readCookie('_oclid');

                $.ajax({
                    type: 'POST',
                    url: 'https://www.foundida.com/payment/store-alternative-number.php',
                    data: $(form).serialize() + '&action=store-alter-number&_oclid=' + _oclid,
                    dataType: "json",
                    beforeSend: function() {
                        $('.alternative-contact-popup-submit-btn').text('Please Wait..');
                    },
                    success: function(response) {

                        if (response.success) {

                            $('#response-messages').html(`<div class="alert alert-danger" role="alert" style="color: #155724;background-color: #d4edda;border-color: #c3e6cb;">
                      ` + response.msg + `
                    </div>`);

                            setTimeout(function() {
                                location.reload(true);
                            }, 1000);

                        } else {

                            let msg = response.msg;
                            for (let k in msg) {
                                $("#" + k + "-error").html(msg[k]);
                                $("#" + k + "-error").attr("style", "display: inline-block;");
                                $("#" + k).removeClass("is-valid");
                                $("#" + k).addClass("is-invalid");
                            }
                        }

                    },
                    complete: function() {
                        $('.alternative-contact-popup-submit-btn').text('Submit');
                    }
                });
            }
        });
    });

    window.onload = function() {

        let _oclid = getParam("_oclid");
        if (_oclid) {
            if (document.cookie.indexOf('_oclid') > -1) {
                document.cookie = "_oclid=" + readCookie('_oclid') + ";expires=Thu, 01 Jan 1970 00:00:01 GMT;domain=foundida.com;path=/;SameSite=None;Secure";
                setCookie("_oclid", _oclid, 365)
            } else {
                setCookie("_oclid", _oclid, 365)
            }
        }
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
    $(document).ready(function() {
        let _u_track = makeid(32);
        if (readCookie('_u_track') == '' || readCookie('_u_track') == null) {
            setCookie("_u_track", _u_track, 365);
        }
        // $.ajax({
        //     type: 'POST',
        //     url: 'https://www.foundida.com/cookie-user-tracker/insert-tracked-data.php',
        //     dataType:"json",
        //     data: {
        //         _u_track:readCookie('_u_track'),
        //         _url: window.location.href,
        //         _gclid: (JSON.parse(localStorage.getItem('gclid')).value ? JSON.parse(localStorage.getItem('gclid')).value : '')
        //     },
        //     success: function (response) {

        //     }
        // });
    });

    //=================================================================//
    //New UTM Tracking
    function getParameters() {
        let urlString = window.location.href;
        let paramString = urlString.split('?')[1];
        let queryString = new URLSearchParams(paramString);
        for (let pair of queryString.entries()) {
            console.log(pair[0] + ':' + pair[1]);
        }
    }
    $(document).ready(function() {
        //console.log(getParameters());
    });
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
    // $(document).ready(function(){
    //     let browser_id = makeid(32);
    //     if(readCookie('browser_id') == '' || readCookie('browser_id') == null) {
    //         setCookie("browser_id", browser_id, 365);
    //     }

    //     $.ajax({
    //         type: 'POST',
    //         url: 'https://www.foundida.com/advanced_utm_tracking/custom_cookie_track.php',
    //         dataType:"json",
    //         data: {
    //             browser_id:readCookie('browser_id'),
    //             url: window.location.href,
    //             browser: fnBrowserDetect()
    //         },
    //         success: function (response) {

    //         }
    //     });
    // });
    //===========================Facebook===================================//
    // window.onload = function () {
    //     try {
    //         var url_string = window.location.href.toLowerCase();
    //         var url = new URL(url_string);
    //         ['fbclid'].forEach(function (key) {
    //             var value = url.searchParams.get(key);
    //             if (value) {
    //                 document.cookie = `${key}=${value}; max-age=525600` + ';path=/';
    //             }
    //         });
    //     }
    //     catch (err) {
    //         console.log("Issues with Parsing URL Parameter's - " + err);
    //     }

    //     if(readCookie('fbclid') != null){
    //         $.ajax({
    //             type: 'POST',
    //             url: 'https://www.foundida.com/advanced_utm_tracking/insert-fb-utm-data.php',
    //             data:{ url: window.location.href },
    //             dataType:"json",
    //             success: function (response) {
    //                console.log(response);
    //                console.log('Facebook');
    //             }
    //         }); 
    //     }
    //     else{
    //         console.log('From Facebook');
    //     }
    //     //==========================GOOGLE====================================//
    //     try {
    //         var url_string = window.location.href.toLowerCase();
    //         var url = new URL(url_string);
    //         ['gclid'].forEach(function (key) {
    //             var value = url.searchParams.get(key);
    //             if (value) {
    //                 document.cookie = `${key}=${value}; max-age=525600` + ';path=/';
    //             }
    //         });
    //     }
    //     catch (err) {
    //         console.log("Issues with Parsing URL Parameter's - " + err);
    //     }

    //     if(readCookie('gclid') != null){
    //         $.ajax({
    //             type: 'POST',
    //             url: 'https://www.foundida.com/advanced_utm_tracking/insert-google-utm-data.php',
    //             data:{ url: window.location.href },
    //             dataType:"json",
    //             success: function (response) {
    //                console.log('Google');
    //             }
    //         }); 
    //     }
    //     else{
    //         console.log('From Google');
    //     }
    //     //==========================BING====================================//
    //     try {
    //         var url_string = window.location.href.toLowerCase();
    //         var url = new URL(url_string);
    //         ['msclkid'].forEach(function (key) {
    //             var value = url.searchParams.get(key);
    //             if (value) {
    //                 document.cookie = `${key}=${value}; max-age=525600` + ';path=/';
    //             }
    //         });
    //     }
    //     catch (err) {
    //         console.log("Issues with Parsing URL Parameter's - " + err);
    //     }

    //     if(readCookie('msclkid') != null){
    //         $.ajax({
    //             type: 'POST',
    //             url: 'https://www.foundida.com/advanced_utm_tracking/insert-bing-utm-data.php',
    //             data:{ url: window.location.href },
    //             dataType:"json",
    //             success: function (response) {
    //                console.log('Bing');
    //             }
    //         }); 
    //     }
    //     else{
    //         console.log('From Bing');
    //     }
    //     //==========================Mailer====================================//
    //     const params = new URLSearchParams(window.location.search)
    //     if(params.get('utm_source') == 'mailer'){
    //         $.ajax({
    //             type: 'POST',
    //             url: 'https://www.foundida.com/advanced_utm_tracking/insert-mailer-data.php',
    //             data:{ url: window.location.href },
    //             dataType:"json",
    //             success: function (response) {
    //                console.log('Mailer');
    //             }
    //         }); 
    //     }
    // };
    function ValidateOliIdForComplaint() {
        console.log('ValidateOliIdForComplaint');
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>

<script>
   function ValidateOliId() {
      var oliid = $("#reg_cust_oli").val();
      if (oliid == '') {
         alert("Please enter oli id");
      } else {
         $("#load_body").css('opacity', '0.5');
         $.ajax({
            url: 'contact-us-action.php',
            type: 'POST',
            dataType: 'JSON',
            data: {
               oli_id: oliid,
               search_type: "OLIID"
            },
            beforeSend: function() {
               if (!$('#blockOverlay').length) {
                  $('body').append(`
        <div id="blockOverlay"
             style="
               position:fixed;
               top:0;
               left:0;
               width:100%;
               height:100%;
               background:rgba(0,0,0,0.4);
               z-index:999999999;
               cursor:not-allowed;
             ">
        </div>
      `);
               }
            },
            success: function(data) {
               $("#load_body").css('opacity', '1');
               if (data == 0) {
                  $("#error_invalid_oliid").show();
                  $("#re_cus_detail_section").hide();
               } else {
                  $("#existingcustomer_div").addClass("modifi_body");
                  $("#error_invalid_oliid").hide();
                  // console.log('helo');

                  if (data.data.call_back_stat) {
                     alert(`Call Back already scheduled at ${data.data.call_back_scheduled_on_date + ' - ' + data.data.call_back_scheduled_on}`);
                     location.reload();
                     return 1;
                  }


                  if (data.assign_to == 0) {
                     $('#existingcustomer').modal('hide');
                     alert('Dear Sir/Mam, Right now we are unable to take your callback request. Please contact our support person No :+91 87505 30252');
                  } else {
                     $("#re_cus_detail_section").show();
                     $("#reg_cust_name").val(data.data.name);
                     $("#reg_cust_mobile").val(data.data.mobile);
                     $("#reg_cust_email").val(data.data.email);
                     $("#reg_cust_id").val(data.data.id);
                     $("#reg_cust_assign_emp").val(data.data.assign_to);
                  }

                  for (i = 0; i < data.length; i++) {
                     for (j = 0; j < data.length; j++) {
                        var assign = data[j].assign_to;
                        if (assign == 0) {
                           $('#existingcustomer').modal('hide');
                           alert('Dear Sir/Mam, Right now we are unable to take your callback request. Please contact our support person No :+91 87505 30252');
                        } else {


                           $("#re_cus_detail_section").show();
                           $("#reg_cust_name").val(data[j].name);
                           $("#reg_cust_mobile").val(data[j].mobile);
                           $("#reg_cust_email").val(data[j].email);
                           $("#reg_cust_id").val(data[j].id);
                           $("#reg_cust_assign_emp").val(data[j].assign_to);
                        }
                     }
                  }
               }

            },
            complete: function() {
               $('#blockOverlay').remove();
            }
         });
      }
   }
</script>

<script>
   function RaiseCallbakRequest() {
      var cust_id = $("#reg_cust_id").val();
      var emp_id = $("#reg_cust_assign_emp").val();
      var remark = $("#comment-reason").val();
      var oli_id = $("#reg_cust_oli").val();
      var cust_name = $("#reg_cust_name").val();
      var cust_email = $("#reg_cust_email").val();
      var cust_mobile = $("#reg_cust_mobile").val();
      if (remark == "") {
         $("#comment-reason").css('border-color', 'red');
         alert("Please give the reason for callback");
      } else {
         $("#comment-reason").css('border-color', '');
         $("#load_body").css('opacity', '0.5');
         $.ajax({
            url: 'contact-us-action.php',
            type: 'POST',
            data: {
               cust_id: cust_id,
               emp_id: emp_id,
               remark: remark,
               search_type: "callback",
               oli_id: oli_id,
               cust_name: cust_name,
               cust_email: cust_email,
               cust_mobile: cust_mobile
            },
            beforeSend: function() {
               if (!$('#blockOverlay').length) {
                  $('body').append(`
        <div id="blockOverlay"
             style="
               position:fixed;
               top:0;
               left:0;
               width:100%;
               height:100%;
               background:rgba(0,0,0,0.4);
               z-index:999999999;
               cursor:not-allowed;
             ">
        </div>
      `);
               }
            },
            success: function(data) {
               $("#load_body").css('opacity', '1');
               alert(data);
               location.reload();
            },
            complete: function() {
               $('#blockOverlay').remove();
            }
         });
      }
   }
</script>

<script>
   function ChangeComplaintCompany(companytype) {
      if (companytype == 'other') {
         location.href = "https://www.foundida.com/services/consumer-complaint/";
      }
      if (companytype == 'oli') {
         $("#cmpl_oli_id").show();
         $('#cmpl_error_invalid_cmplntabt').hide();
      }
   }


   function ValidateOliIdForComplaint() {
      var cmplAbt = $('#cmplntabt').val();
      if (cmplAbt == '') {
         $('#cmpl_error_invalid_cmplntabt').show();
         return false;
      } else {
         $('#cmpl_error_invalid_cmplntabt').hide();
      }
      var oliid = $("#cmpl_oli_id").val();
      if (oliid == '') {
         alert("Please enter oli id");
      } else {
         $("#load_body").css('opacity', '0.5');
         $.ajax({
            url: 'contact-us-action.php',
            type: 'POST',
            dataType: 'JSON',
            data: {
               oli_id: oliid,
               search_type: "OLIID"
            },
            beforeSend: function() {
               if (!$('#blockOverlay').length) {
                  $('body').append(`
        <div id="blockOverlay"
             style="
               position:fixed;
               top:0;
               left:0;
               width:100%;
               height:100%;
               background:rgba(0,0,0,0.4);
               z-index:999999999;
               cursor:not-allowed;
             ">
        </div>
      `);
               }
            },
            success: function(resp) {
               $("#load_body").css('opacity', '1');
               if (!resp.status) {
                  $("#cmpl_error_invalid_oliid").show();
                  $("#first_modal_form_second").hide();
               } else {

                  var result = resp.data;
                  // $("#complaint_div").addClass("modifi_body");
                  $("#cmpl_error_invalid_oliid").hide();
                  $(".first_modal_form_first").hide();
                  $(".first_modal_form_second").show();

                  $("#cmpl_cust_name").val(result.name);
                  $("#cmpl_cust_mobile").val(result.mobile);
                  $("#cmpl_cust_email").val(result.email);
                  $("#cmpl_cust_id").val(result.id);
                  $("#cmpl_cust_assign_emp").val(result.assign_to);

                  if (!result.esc_ticket_id || result.esc_isreopen == 0) {
                     $('.first_section').show();
                     if (!result.esc_ticket_id) {
                        $('.registration-part').show();
                     } else if (result.esc_process_status == 'OPEN') {
                        var cont = '<strong>Your complaint against Ticket Id: <b>' + result.esc_ticket_id + '</b> is already under process.</strong><br> Our Team will contact you soon...';
                        $('#ongoing_part_text').html(cont);
                        $('.ongoing-part').show();
                     } else {
                        if (result.closing_remark) {
                           var cont = '<strong>Your complaint against Ticket Id: <b>' + result.esc_ticket_id + '</b> is already Resolved.</strong><br>';
                           cont += '<strong>Remark: </strong>' + result.closing_remark;
                        } else {
                           var cont = '<strong>Your complaint against Ticket Id: <b>' + result.esc_ticket_id + '</b> is already Resolved.</strong>';
                        }
                        raise_esc_btn_hide(result.closing_date);
                        $('#ongoing_part_text').html(cont);
                        $('.re-escalate-part').show();
                     }

                  } else if (result.esc_isreopen == 1) {
                     $('.second_section').show();
                     if (result.esc_process_status == 'OPEN') {
                        var cont = '<strong>Your complaint against Ticket Id: <b>' + result.esc_ticket_id + '</b> is already under process in the 2nd Level.</strong><br> Our Team will contact you soon...';
                        $('#esc2_desc_text').html(cont);
                     } else {
                        if (result.closing_remark) {
                           var cont = '<strong>Your complaint against Ticket Id: <b>' + result.esc_ticket_id + '</b> is already Resolved.</strong><br>';
                           cont += '<strong>Remark: </strong>' + result.closing_remark;
                        } else {
                           var cont = '<strong>Your 2nd Level Complaint against Ticket Id: <b>' + result.esc_ticket_id + '</b> is already Resolved.</strong>';
                        }
                        raise_esc_btn_hide(result.closing_date);

                        $('#esc2_desc_text').html(cont);
                        $('.re-escalate-part2').show();
                     }
                  } else if (result.esc_isreopen == 2) {
                     $('.third_section').show();
                     if (result.esc_process_status == 'OPEN') {
                        var cont = '<strong>Your complaint against Ticket Id: <b>' + result.esc_ticket_id + '</b> is already under process in the 3rd Level.</strong><br> Our Team will contact you soon...';
                        $('#esc3_desc_text').html(cont);
                     } else {
                        if (result.closing_remark) {
                           var cont = '<strong>Your complaint against Ticket Id: <b>' + result.esc_ticket_id + '</b> is already resolved.</strong>';
                           cont += '<strong>Remark: </strong>' + result.closing_remark;
                        } else {
                           var cont = '<strong>Your complaint against Ticket Id: <b>' + result.esc_ticket_id + '</b> is already resolved.</strong>';
                        }
                        $('#esc3_desc_text').html(cont);
                        $('.re-escalate-part3').show();
                     }
                  }

               }
            },
            complete: function() {
               $('#blockOverlay').remove();
            }
         });
      }
   }

   function raise_esc_btn_hide(closing_dt) {
      closing_dt = new Date(closing_dt);
      var curr_dt = new Date();
      var time_diff = curr_dt.getTime() - closing_dt.getTime();
      var day_diff = parseInt(time_diff / (1000 * 3600 * 24));

      if (day_diff > 7) {
         $('.re-escalate-btn-part').hide();
      }
   }

   $('#raise_escalation').click(function() {
      $(this).hide();
      $('.raise_escalation_div').toggle(300)
   });


   $('#re_escalate_btn').on('click', function() {

      $("#re_escalate").val(1);
      $("#cmpl_detail").val('Re-Escalation');
      $('.re-escalate-part').hide();
      $('.second_section').show();
      SubmitCustComplaint();

   });

   $('#re_escalate_btn2').on('click', function() {

      $("#re_escalate").val(1);
      $("#cmpl_detail").val('Re-Escalation');
      $('.second_section').hide();
      $('.third_section').show();
      SubmitCustComplaint();

   });

   $('.new_escalation_btn').on('click', function() {
      $("#re_escalate").val(2);
      $('.re-escalate-part').hide();
      $('#raise_escalation').hide();
      $('.second_section').hide();
      $('.third_section').hide();
      $('.first_section').show();
      $('.registration-part').show();
      $('.raise_escalation_div').show();
   });


   function SubmitCustComplaint() {
      var cmpl_about = $("#cmplntabt").val();
      var cmpl_oli_id = $("#cmpl_oli_id").val();
      var cmpl_cust_name = $("#cmpl_cust_name").val();
      var cmpl_cust_email = $("#cmpl_cust_email").val();
      var cmpl_cust_id = $("#cmpl_cust_id").val();
      var cmpl_cust_assign_emp = $("#cmpl_cust_assign_emp").val();
      var cmpl_cust_mobile = $("#cmpl_cust_mobile").val();
      var cmpl_detail = $("#cmpl_detail").val();
      var re_escalate = $("#re_escalate").val();
      var flag = true;
      if (cmpl_about == "") {
         alert("Please select complaint about");
         $("#cmplntabt").css('border-color', 'red');
         location.href = "#cmplntabt";
         flag = false;
      }
      if (cmpl_oli_id == "") {
         alert("Please enter OLI ID");
         $("#cmpl_oli_id").css('border-color', 'red');
         location.href = "#cmpl_oli_id";
         flag = false;
      }
      if (cmpl_detail == "") {
         alert("Please type complaint in detail");
         $("#cmpl_detail").css('border-color', 'red');
         location.href = "#cmpl_detail";
         flag = false;
      }
      if (flag == true) {
         $("#load_body").css('opacity', '0.5');
         $.ajax({
            url: 'contact-us-action.php',
            type: 'POST',
            data: {
               cmpl_about: cmpl_about,
               cmpl_oli_id: cmpl_oli_id,
               cmpl_cust_name: cmpl_cust_name,
               cmpl_cust_email: cmpl_cust_email,
               cmpl_cust_id: cmpl_cust_id,
               cmpl_cust_assign_emp: cmpl_cust_assign_emp,
               cmpl_cust_mobile: cmpl_cust_mobile,
               cmpl_detail: cmpl_detail,
               re_escalate: re_escalate,
               search_type: "complaint"
            },
            dataType: 'JSON',
            beforeSend: function() {
               if (!$('#blockOverlay').length) {
                  $('body').append(`
        <div id="blockOverlay"
             style="
               position:fixed;
               top:0;
               left:0;
               width:100%;
               height:100%;
               background:rgba(0,0,0,0.4);
               z-index:999999999;
               cursor:not-allowed;
             ">
        </div>
      `);
               }
            },
            success: function(data) {
               //  $("#load_body").css('opacity','1');
               if (data.status && data.response == 1) {
                  var cont = 'Your complaint has been submitted, your Ticket Id is: ' + data.ticket_id + '. Our Team will contact you soon...';
                  var flag = 1;
               } else if (data.status && data.response == 2) {
                  var cont = 'Your complaint against Ticket Id: ' + data.ticket_id + ' is already under process. Our Team will contact you soon...';
                  var flag = 1;
               } else if (data.status && data.response == 5) {
                  if (data.esc_level == '1') {
                     var cont = 'Your complaint has been submitted on 2nd Level, your Ticket Id is: ' + data.ticket_id + '. Our Team will contact you soon...';
                     $('esc2_desc_text').text(cont);
                  } else if (data.esc_level == '2') {
                     var cont = 'Your complaint has been submitted on 3rd Level, your Ticket Id is: ' + data.ticket_id + '. Our Team will contact you soon...';
                  }
                  var flag = 1;
               } else {
                  var flag = 0;
               }
               if (flag == 1) {
                  $.alert({
                     title: 'Complaint Submitted',
                     content: cont,
                     type: 'green',
                     typeAnimated: true,
                     backgroundDismiss: false,
                     backgroundDismissAnimation: 'shake',
                     buttons: {
                        Ok: {
                           text: 'THANK YOU',
                           btnClass: 'btn-green',
                           action: function() {
                              location.reload(true)
                           }
                        }
                     }
                  });
               } else {
                  $.alert({
                     title: 'Error!',
                     content: 'Oops! Please trry again.',
                     type: 'orange',
                     typeAnimated: true,
                     backgroundDismiss: false,
                     backgroundDismissAnimation: 'shake',
                     buttons: {
                        Ok: {
                           text: 'Close',
                           btnClass: 'btn-orange',
                           action: function() {
                              $("#exampleModal4").modal('toggle');
                              // location.reload()
                           }
                        }
                     }
                  });
               }
            },
            complete: function() {
               $('#blockOverlay').remove();
            }
         });
      }

   }
</script>

<script>
   function ValidateOliIdsuggestion() {
      var oliid = $("#suggestion_oli").val();
      if (oliid == '') {
         alert("Please enter oli id");
      } else {
         $("#load_body").css('opacity', '0.5');
         $.ajax({
            url: 'contact-us-action.php',
            type: 'POST',
            dataType: 'JSON',
            data: {
               oli_id: oliid,
               search_type: "OLIID"
            },
            beforeSend: function() {
               if (!$('#blockOverlay').length) {
                  $('body').append(`
        <div id="blockOverlay"
             style="
               position:fixed;
               top:0;
               left:0;
               width:100%;
               height:100%;
               background:rgba(0,0,0,0.4);
               z-index:999999999;
               cursor:not-allowed;
             ">
        </div>
      `);
               }
            },
            success: function(data) {
               $("#load_body").css('opacity', '1');
               if (data == 0) {
                  $("#error_suggestion_oliid").show();
                  $("#suggestion_section").hide();
               } else {
                  $("#sugg_div").addClass("modifi_body");
                  $("#error_suggestion_oliid").hide();
                  $("#suggestion_section").show();
                  for (i = 0; i < data.length; i++) {
                     for (j = 0; j < data.length; j++) {
                        $("#s_name").val(data[j].name);
                        $("#s_mobile").val(data[j].mobile);
                        $("#s_email").val(data[j].email);
                        $("#s_assign").val(data[j].assign_to);
                        $("#s_oli_id").val(data[j].oli_id);
                        $("#s_id").val(data[j].id);
                     }
                  }
               }

            },
            complete: function() {
               $('#blockOverlay').remove();
            }
         });
      }
   }

   function suggestioninsert() {
      var cus_id = $("#s_id").val();
      var emp_id = $("#s_assign").val();
      var s_oli_id = $("#suggestion_oli").val();
      var suggestion_text = $("#suggestion_text").val();
      if (suggestion_text == '') {
         alert("Please enter suggestion");
      } else {
         $("#load_body").css('opacity', '0.5');
         $.ajax({
            url: 'contact-us-action.php',
            type: 'POST',
            data: {
               cus_id: cus_id,
               emp_id: emp_id,
               s_oli_id: s_oli_id,
               suggestion_text: suggestion_text,
               search_type: "suggestion"
            },
            beforeSend: function() {
               if (!$('#blockOverlay').length) {
                  $('body').append(`
        <div id="blockOverlay"
             style="
               position:fixed;
               top:0;
               left:0;
               width:100%;
               height:100%;
               background:rgba(0,0,0,0.4);
               z-index:999999999;
               cursor:not-allowed;
             ">
        </div>
      `);
               }
            },
            success: function(data) {
               $("#load_body").css('opacity', '1');
               if (data == 1) {
                  alert("Thankyou! for your valuable suggestion.")
                  location.reload();
               }
            },
            complete: function() {
               $('#blockOverlay').remove();
            }
         });
      }
   }
</script>

<script>
   function ValidateOliIdfeedback() {
      var oliid = $("#feedback_oli").val();
      if (oliid == '') {
         alert("Please enter oli id");
      } else {
         $("#load_body").css('opacity', '0.5');
         $.ajax({
            url: 'contact-us-action.php',
            type: 'POST',
            dataType: 'JSON',
            data: {
               oli_id: oliid,
               search_type: "FEEDBACKOLIID"
            },
            beforeSend: function() {
               if (!$('#blockOverlay').length) {
                  $('body').append(`
        <div id="blockOverlay"
             style="
               position:fixed;
               top:0;
               left:0;
               width:100%;
               height:100%;
               background:rgba(0,0,0,0.4);
               z-index:999999999;
               cursor:not-allowed;
             ">
        </div>
      `);
               }
            },
            success: function(data) {
               console.log(data);
               $("#load_body").css('opacity', '1');
               if (data == 0) {
                  $("#error_feedback_oliid").show();
                  $("#feedback_section").hide();
               } else {
                  $("#feedback_div").addClass("modifi_body");
                  $("#error_feedback_oliid").hide();
                  $("#feedback_section").show();
                  for (i = 0; i < data.length; i++) {
                     for (j = 0; j < data.length; j++) {
                        $("#f_assign").val(data[j].assign_to);
                        $("#f_oli_id").val(data[j].oli_id);
                        $("#f_id").val(data[j].id);
                        $("#f_mobile").val(data[j].mobile);
                     }
                  }
               }
            },
            complete: function() {
               $('#blockOverlay').remove();
            }
         });
      }
   }

   $(document).on('change', "input[name='rating']:checked", function() {

      let rating = $(this).val();
      if (rating < 4) {
         $('#rating_reason').show();
      } else {
         $('#rating_reason').hide();
      }
   });

   function feedbackinsert() {
      var error = 0;
      //var mobile    = $("#f_mobile").val();
      var mobile = $("#f_mobile").val();
      var cus_id = $("#f_id").val();
      var emp_id = $("#f_assign").val();
      var f_oli_id = $("#feedback_oli").val();
      var feedback_text = $("#feedback_text").val();

      let rating_reason = $("#rating_reason option:selected").val();
      //var otp  = $("#otp").val();
      var rating = $("input[name='rating']:checked").val();
      let feedbackActionPerform = $('#feedbackActionPerform').val();
      let feedbackUuid = $('#feedbackUuid').val();

      if (feedback_text == '') {
         alert("Please enter feedback");
         error++;
      }
      if (rating == undefined) {
         alert("Please give rating");
         error++;
      }

      if (feedback_text == '') {
         alert("Please enter feedback");
         error++;
      }

      if (rating < 4) {
         if (rating_reason == '') {
            alert("Please select proper reason");
            error++;
         }
      }

      // if(otp==''){
      //     alert("Please enter OTP");
      //     error++;
      // }
      if (error == 0) {
         //$("#load_body").css('opacity','0.5');
         $.ajax({
            url: 'contact-us-action.php',
            type: 'POST',
            data: {
               cus_id: cus_id,
               emp_id: emp_id,
               f_oli_id: f_oli_id,
               feedback_text: feedback_text,
               rating: rating,
               search_type: "feedback",
               mobile: mobile,
               feedbackActionPerform: feedbackActionPerform,
               feedbackUuid: feedbackUuid,
               rating_reason: rating_reason
            },
            beforeSend: function() {
               if (!$('#blockOverlay').length) {
                  $('body').append(`
        <div id="blockOverlay"
             style="
               position:fixed;
               top:0;
               left:0;
               width:100%;
               height:100%;
               background:rgba(0,0,0,0.4);
               z-index:999999999;
               cursor:not-allowed;
             ">
        </div>
      `);
               }
            },
            success: function(data) {

               if (rating == '4' || rating == '5') {
                  // $.alert({
                  //    title: 'Thank You',
                  //    content: 'One last request please submit your valuable feedback once more in the next step.',
                  //    type: 'green',
                  //    typeAnimated: true,
                  //    buttons: {
                  //       somethingElse: {
                  //          text: 'Next',
                  //          btnClass: 'btn-success',
                  //          action: function() {
                  //             window.location.href = "https://www.trustpilot.com/evaluate/foundida.com?stars=5";
                  //          }
                  //       }
                  //    }
                  // })
                  $.alert({
                     title: 'Thank You',
                     content: 'Thank You for your valuable feedback.',
                     type: 'green',
                     typeAnimated: true,
                     buttons: {
                        somethingElse: {
                           text: 'OK',
                           btnClass: 'btn-success',
                           action: function() {
                              // window.location.href = "https://www.trustpilot.com/evaluate/foundida.com?stars=5";
                              location.reload();
                           }
                        }
                     }
                  })
               } else {
                  location.reload();
               }

               // if(data==0)
               // {
               //  $("#error_otp").show();
               // }
               // else
               // {
               //  if(rating=='4' || rating=='5'){
               //       $.alert({
               //          title: 'Thank You',
               //          content: 'One last request please submit your valuable feedback once more in the next step.',
               //          type: 'green',
               //          typeAnimated: true,
               //          buttons: {
               //             somethingElse: {
               //                   text: 'Next',
               //                   btnClass: 'btn-success',
               //                   action: function(){
               //                      window.location.href="https://www.trustpilot.com/evaluate/foundida.com?stars=5";
               //                   }
               //             }
               //          }
               //       })
               //      }else{
               //        location.reload();
               //        }
               // }
            },
            complete: function() {
               $('#blockOverlay').remove();
            }
         });
      }
   }
</script>

<script>
   $(document).ready(function() {
      $("#customer_mobile").keypress(function(e) {
         if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
            return false;
         }
      });
   });


   function CloseModalFormName() {
      $("#reserv_form1").trigger("reset");
   }

   function newcustomer() {
      var customer_name = $('#customer_name').val();
      var mobile = $('#customer_mobile').val();
      var email = $('#customer_email').val();
      var service = $('#service').val();
      var reason = $('#reason').val();
      var mobilelen = mobile.length;
      var errorflag = true;
      if (customer_name == "") {
         $("#customer_name").css('border-color', 'red').focus();
         return errorflag = false;
      }
      if (mobile == "" || mobilelen != 10) {
         $("#customer_mobile").css('border-color', 'red').focus();
         return errorflag = false;
      }

      if (email == "" || IsEmail(email) == false) {
         $("#customer_email").css('border-color', 'red').focus();
         return errorflag = false;
      }

      if (service == "") {
         $("#service").css('border-color', 'red').focus();
         return errorflag = false;
      }
      if (reason == "") {
         $("#reason").css('border-color', 'red').focus();
         return errorflag = false;
      }

      function IsEmail(email) {
         var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
         if (!regex.test(email)) {
            return false;
         } else {
            return true;
         }
      }
      if (errorflag == true) {
         $("#load_body").css('opacity', '0.5');
         $.ajax({
            url: 'contact-us-action.php',
            type: 'POST',
            data: {
               customer_name: customer_name,
               service: service,
               mobile: mobile,
               email: email,
               reason: reason,
               search_type: "newcustomercallback"
            },
            beforeSend: function() {
               if (!$('#blockOverlay').length) {
                  $('body').append(`
        <div id="blockOverlay"
             style="
               position:fixed;
               top:0;
               left:0;
               width:100%;
               height:100%;
               background:rgba(0,0,0,0.4);
               z-index:999999999;
               cursor:not-allowed;
             ">
        </div>
      `);
               }
            },
            success: function(data) {
               $("#load_body").css('opacity', '1');
               $("#newcustomer").hide();
               $("#reserv_form1").trigger("reset");
               alert(data);
               location.reload();
            },
            complete: function() {
               $('#blockOverlay').remove();
            }
         });
      }
   }
</script>

<script>
   $(".form-control").click(function() {
      $(this).css('border-color', '');
   });
</script>
@endsection
