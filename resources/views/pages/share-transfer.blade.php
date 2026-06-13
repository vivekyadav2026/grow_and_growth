@extends('layouts.app')

@section('meta')
<title>Transfer The Shares of Your Company Easily | Foundida</title>
<meta name="description" content="Want to add investors to your company but having problems in sharing transfer of private limited company? Take professional advice for all your legal queries.">
<link rel="canonical" href="https://www.foundida.com/services/share-transfer/"/>
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
    .modal_body_forbes {
        padding: 0;
    }

    .modal_content_forbes {
        height: 80vh !important;
        overflow-y: unset !important;
        overflow-x: unset !important;
    }

    .ofc_info_area9 {
        width: 50%;
        margin: 0 auto;
        overflow: hidden;
    }

    .ofc_info_area ul li {
        width: 25%;
    }

    .new_center {
        text-align: center;
    }

    .custm_trst p {
        line-height: 21px !important;
        font-size: 13px !important;

    }

    .custm_trst {
        min-height: 208px;
    }

    @media (min-width: 992px) {
        .modal_dialog_forbes {
            width: 1000px !important;
        }
    }

    @media (max-width: 767px) {
        .modal_content_forbes {
            height: 27vh !important;
        }

        .ofc_info_area9 {
            width: 100%;
        }

        .ofc_info_area ul li {
            width: 50%;
        }
    }
</style>

<div id="zeenews1" class="modal fade  modal_news" tabindex="-1" role="dialog">
    <div class="modal-dialog modal_dialog_forbes" role="document">
        <div style="position:relative;"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>
        <div class="modal-content modal_content_forbes">
            <div class="modal-body modal_body_forbes">
                <img src="https://www.foundida.com/images/about-us/rajesh-kewat-forbes.webp" alt="rajesh kewat forbes" style="width:100%;">
            </div>
        </div>
    </div>
</div>

<div id="zeenews" class="modal fade bs-example-modal-md modal_news" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div style="position:relative;"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>
        <div class="modal-content">
            <div class="modal-body">
                <div class="popup_img"><img src="images/zeenews.webp" alt="Zeenews"></div>
                <h2>Meet Rajesh Kewat, The Small Town Entrepreneur Behind Foundida's Success</h2>
                <p>We all know today’s world is totally running on online technology, to utilize this online platform and preventing people from moving pillar to post that small town entrepreneur came up with an one stop solution for providing all sort of legal and professional services at their doorstep in the name of FastInfo Legal Services Pvt. Ltd. </p>
                <img src="images/zeenews-rajesh.webp" alt="Zeenews Rajesh Kewat">
                <p>We all know today’s world is totally running on online technology, to utilize this online platform and preventing people from moving pillar to post that small town entrepreneur came up with an one stop solution for providing all sort of legal and professional services at their doorstep in the name of <a href="https://www.foundida.com/">FastInfo Legal Services Pvt. Ltd. </a></p>
                <p>A small town boy with a dream in his eyes to reach the sky. Mr Rajesh Kewat who is the Managing Director and Founder of one of the Leading Online Business Sector <a href="https://www.fastinfo.com/">“FastInfo”.</a></p>
                <p>He believed positive motivation & inspiration are the hallmark of success for the entrepreneur from a small town, there may not be availability of proper resources but will power and confident is a gentle way to achieve the success.</p>
                <img src="images/legal-popup.webp" alt="Legal Services">
                <p>Under the brand name of Foundida which is basically focused on fighting against online fraud and providing professional services for business compliances. Foundida became one of the India’s leading online companies and within a short period of time it grabbed customer’s heart. Foundida basically dealing with consultation services on Legal matters, GST filing and Registration, TAX compliance,</p>
                <p>IEC Registration, FSSAI Registration, Company Registration, Trademark Registration, Consumer Complaint and many more.</p>
                <p>When Foundida was flourishing at a higher range, and reaching out the customers for the legal and business compliance with a high outcome, FastInfo had decided to come up with an E- Learning platform to serve the students in both urban and rural areas. He realized there are many students in the rural areas who are lacking in the education due to the lack of proper infrastructure& there are large number of students from distance education or open universities who are not getting enough help from anywhere.</p>
                <img src="images/fastinfo-intro.webp" alt="Fastinfo Intro">
                <p><a href="https://www.foundida.com/services/rajesh-kewat/">Mr Rajesh Kewat</a>(Founder) who was associated with one of the leading education sector OXFORD for a long time decided to come up with an idea of enhancing his skill in the education sector. Therefore, he came up with an idea of launching an Online Educational Platform and making it accessible throughout the nation which enables LIVE interactive classes between a teacher and a student. He named the same as “FastInfo Class”, this is the online platform to provide education to the students and at the same time providing quality guidance. FastInfo Class provide the online tuition to IGNOU & NIOS bachelors and masters’ student, students appearing for Competitive Examslike Banking Exam including IBPS Exam, Railway Exam (RRB Exam), UPSC CSE etc and also provide helps for co-curricular courses. </p>
                <p>Like this, <a href="https://www.fastinfo.com/">FastInfo</a> is growing towards the achievement to become the India’s largest online platform for e- commerce sectors. FastInfo is yet to come up with many more projects in upcoming future like FastInfo Tech which is going to be launched very soon for the IT sector.</p>
                <div class="bottom_link_close">
                    <a class="bottom_link" onclick="gtagevent5();" href="https://zeenews.india.com/companies/meet-rajesh-kewat-the-small-town-entrepreneur-behind-fastinfoclass-foundida-success-2280370.html" target="_blank">Read Full Article at <span>Zee News</span></a>
                    <a data-dismiss="modal" aria-label="Close">Close</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="republic" class="modal fade bs-example-modal-md modal_news" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div style="position:relative"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>
        <div class="modal-content">
            <div class="modal-body">
                <div class="popup_img"><img src="images/republictv.webp" alt="Republictv"></div>
                <h2>From Rs. 2000 Salary To Turnover In Crores: Journey Of A Small Town Boy Making It Big</h2>
                <p>The story of Rajesh Kewat, a simple man from the small town of West Bengal, might seem like a run of the mill rags to riches story, but it is so much more:</p>
                <img src="images/zeenews-rajesh.webp" alt="Rajesh Kewat">
                <p>We come across many rags to riches stories in a lifetime. Most of the stories are about an individual toiling hard to become significant in the world. The story of Rajesh Kewat, a simple man from the small town of Dinhata, West Bengal, might seem like a run of the mill rags to riches story, but it is much more. It is a story of a hardworking man who has managed to turn his fortunes and is now dedicated to simplifying the lives of those around him. Rajesh Kewat, a Masters in Computer Application is the Managing Director of FastInfo Legal Services Pvt. Ltd.</p>
                <p>FastInfo Legal Services, formerly known as True Consultants was initially a platform for online RTI applications. The existence of an online portal for the same bridged the gap between the citizens and their right to question. The platform helped the citizens’ voices reach the correct places at a menial cost, affordable to all.</p>
                <p>Foundida, another venture of Rajesh Kewat also enables easier procedures for GST Filing & Registration, Company Registration, Trade Mark Registration, and many more. It is a boon for small scale businesses as well, as it helps with formalities like business registrations & compliances.</p>
                <p>Rajesh Kewat has been unstoppable once he realized the potential of simplifying lives with the help of the digital platform. He also started the FastInfo Classes that are not just online tutorials available for school students; it also has classes for competitive exams. There are multiple distance learning courses that are available on the platform. Many realize the positive and significant change that one can bring around, but only a few take a leap of faith and work to create that change.</p>
                <p>Rajesh Kewat had been through the worst phase of his life in 2017, when he lost everything he had, to the point of being financially broke. But, it is his perseverance and confidence that helped him take back his worth and be a much stronger individual. He is a fine example to prove that to run a business, all one needs is the will to work hard and a sharp mind to make the right decisions.</p>
                <div class="bottom_link_close">
                    <a class="bottom_link" onclick="gtagevent6();" href="https://www.republicworld.com/initiatives/specials/journey-of-a-small-town-boy-making-it-big.html" target="_blank">Read Full Article at <span>Republicworld</span></a>
                    <a data-dismiss="modal" aria-label="Close">Close</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="asiaone" class="modal fade bs-example-modal-md modal_news" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div style="position:relative"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
        <div class="modal-content">
            <div class="modal-body">
                <div class="popup_img"><img src="images/Asia_One.webp" alt="Asia One"></div>
                <h2>Rajesh Kewat, the MD of FastInfo Legal Services Pvt Ltd, owns a movie-like story; a man who lost everything for his love &amp; attained great success within just 500 days with his innovative business.</h2>
                <p> A man of dreams and conviction, he shows in action how to never stop dreaming</p>
                <img src="images/asiaone_rajesh.webp" alt="Asia One Rajesh Kewat">
                <h5>TURNING PAIN INTO FUEL FOR SUCCESS</h5>
                <p>Rajesh is a small-town entrepreneur, who just three years back had seen the whole of his life, crippling in front of his eyes as he fought with the world for his love. He lost his job, assets, and all his money to save his love and the phase was obviously very painful for him. This unknown storm had left him with no belongings but he was not yet completely broken. He carried in him a stunning spirit to fight back, get up, and create a beautiful future for himself.</p>
                <p>From there on, he started building his own ladder to success without any financial support &amp; only with blessing of those special people who blessed him in that tough time. He turned his venture FastInfo Legal Services Pvt Ltd into a profit-churning enterprise in no time and today boasts of a wide clientele and hundreds of positive testimonials.</p>
                <h5>HUMBLE BEGINNINGS</h5>
                <p>Rajesh was born in Dinhata in 1985, in a lower-middle-class family. His father was an Assistant Manager at a petrol pump back then. His schooling was at Stationpara Saranarthi High School and then he pursued his Bachelor of Computer Applications from IGNOU followed by his Master of Computer Application from Punjab Technical University.</p>
                <p>Being entrepreneurial in nature with a vision to support the greater good of society, he started working as an RTI activist while still studying, helping to educate people and supporting them in crucial matters.</p>
                <p>His professional career began with a job at Lalani Computer Academy where he worked as a marketing executive for a humble pay of Rs. 2000 per month. For the next twelve years, he worked across a number of small firms, including Brainware Computer Academy, FirstSource Solution Limited, and took on the role of a teacher at Brahmani Chowki High School. Then he joined Educomp Solution Limited, Pearson India Education Services Pvt Ltd followed by Oxford as a Consultant.</p>
                <h5>SERVING THE SOCIETY</h5>
                <p>Even while he was making his professional career, the idea of serving society never left him. His decade-long experience as an RTI activist prompted him to do something bigger to help the people. So, he came up with an online platform under the head of True Consultant to file RTI applications, which is open to everyone who wants to exercise their right by filing their RTI application at a very nominal charge.</p>
                <p>While implementing these businesses, he came up with a new innovative online platform for the education sector named FastInfo Class.</p>
                <p>This focused on Distance Education and online tutorial for the preparation of competitive exams as there were lagging with systematic tutorial classes and study centre through www.fastinfoclass.com.</p>
                <div class="bottom_link_close">

                    <a data-dismiss="modal" aria-label="Close">Close</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="asiaone1" class="modal fade bs-example-modal-lg modal_news" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div style="position:relative"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>
        <div class="modal-content">
            <div class="modal-body">
                <div class="popup_img"><img src="https://www.foundida.com/images/mid-day.webp" alt="Mid Day"></div>
                <h2>Rajesh Kewat Conferred with Businessman of the Year Award at Brands Impact NFA 2022</h2>
                <p>Rajesh Kewat, Founder and Managing Director of the FastInfo Legal Services Pvt. Ltd. was awarded “Businessman of the Year” by renowned Bollywood actress Malaika Arora at the first edition of the National Fame Awards 2022 presented by Brands Impact in a ceremony held at one of the most opulent hotels, Vivanta New Delhi, Dwarka.</p>
                <img src="https://www.foundida.com/images/mid-day-banner.webp" style="width:100%;margin-bottom:20px;" alt="Rajesh Mid Day">
                <p>India’s top branding company Brands Impact organized the first edition of the National Fame Awards aiming to recognize the efforts and dedication of individuals and companies that have risen to fame and have nationwide supporters/ clientele, owing to their talent and contributions to various industries.</p>
                <p>Congratulating Mr. Kewat, Amol Monga, Founder and Director of Brands Impact said “It is a matter for pride to be honouring people like Mr. Kewat who inspire thousands of budding entrepreneurs and businessmen who wish to make it big just like him. I wish him even greater heights of success and prosperity for future"</p>
                <p>A man with humble beginnings, Mr Rajesh Kewat is the Founder and Managing Director of FastInfo Legal Services Pvt. Ltd. He grew up in a small town named Dinhata in the Cooch Behar district of West Bengal. As it's said that adversity is a great teacher and Mr. Kewat definitely learned a lot from his days of struggle. To help run their household, he started working at a young age.</p>
                <p>On receiving the award, Mr. Kewat said, “This is a very proud moment for me, I want to dedicate this award to each and every member of the FastInfo group, my family members and all my well-wishers without whose support, it wouldn’t have been possible for me to stand on this stage today. I might be present here today physically, receiving this award but there are hardworks of many people behind this achievement. I would also like to thank Ms. Malaika for presenting me with the award.”</p>
                <p>He wanted to achieve big things in life and knew becoming a businessman was one way to do so. People often think that a huge investment is needed to start a business. Yet, Mr. Kewat proved everyone wrong by starting his business with only an investment of rupees 1000 and today owns a group of companies with a turnover of crores. His group of companies comprises of six brands namely Foundida, FastInfo Class, Online RTI Application, Innovative Bharat, OnlyDesi, and Online Class India. As per his beliefs, anyone with a passion for business can become an entrepreneur and he always derives utmost satisfaction in encouraging the youth of the country. Mr Kewat believes, “You don’t need money to build your business empire, what you need is big dreams and a sharp mind! If you got it, try it.”</p>
                <p>An ardent social worker, he has always found a way to give back to society, be it through filing RTI applications for free as a teen to launching his own websites like Foundida for legal advice, and FastInfo Class for Online Spoken English classes at an affordable fee of rupees 299/month. Inspiration for this is deeply embedded in his own experiences. As a child, due to challenging financial conditions, he had to transfer from an English-medium school to Bengali- medium and from then he has faced firsthand problems arising due to the lack of fluency in spoken English. To help people from tier three cities overcome this problem he is on his newfound mission to provide Spoken English and overall personality development classes by opening up centers starting with his district Coochbehar.</p>
                <p>Recently, he launched the Online RTI Application website absolutely free for the public to obtain expert advice on RTI filing. His main goal has always been to bridge the gap between affordability and accessibility.</p>
                <p>A journey of a thousand miles begins with a single step, and for Mr Rajesh Kewat this is just the beginning of his journey. He will always find ways to help society and encourage entrepreneurship among the youth of India!</p>
                <div class="bottom_link_close">
                    <a class="bottom_link" href="https://www.mid-day.com/brand-media/article/rajesh-kewat-conferred-with-businessman-of-the-year-award-at-brands-impact-nfa-23241401" target="_blank">Read Full Article at <span>Mid Day</span></a>
                    <a data-dismiss="modal" aria-label="Close">Close</a>
                </div>
            </div>
        </div>
    </div>
</div>


<div>
    <div id="banner">
        <img class="img-fluid" alt="pvt company" style="width: 100%" src="images/banner_for_st.webp" alt="Private Limited Company Registration">

    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-xs-12">
                <h1 class="title">Quickest Share Transfer</h1>
            </div>
        </div>
        <div class="title-content">
            <p>Get Your Share Transfered at lowest fees. Foundida is an MCA (Ministry of Corporate Affairs) & MSME registered company in India. Our experienced team will draft & complete all the documentations on the same day.</p>
        </div>
    </div>
</div>


<div class="container" style="margin-top: 20px">
    <div class="row">



        <div class="pull-left col-md-6 col-sm-12">

            <form id="contact" class="oli-validate-form" action="https://www.foundida.com/payment/submit-share-transfer.php" method="post" enctype="multipart/form-data">

                <input type="hidden" id="gclid_field" name="gclid_field" value="">
                <input type="hidden" id="landing_uri" name="landing_uri" value="https://www.foundida.com/services/share-transfer/">

                <h3>Need Help with Share Transfer?</h3>

                <h4>Fill Up the below Mentioned Form</h4>
                <fieldset id="first_div">
                    <div class="name">
                        <input placeholder="Your Name" name="name" type="text" id="name">
                    </div>
                    <div class="email">
                        <input placeholder="Your Email Address" name="email" type="email" id="email">
                        <p id="email_error" style="color: red;display: none;">Please enter your Email</p>
                    </div>
                    <div class="mobile">
                        <input placeholder="Your Phone Number (Without 0 or +91)" maxlength="10" name="mobile" id="mobile" type="tel">
                    </div>
                    <div class="state">
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
                    <input type="hidden" name="phase_type" id="phase_type" value="0">
                    <input type="hidden" name="source_service" id="source_service" value="">
                    <input type="button" name="next" id="nextBtn" class="btn next action-button" value="Register Now" />
                </fieldset>
                <fieldset id="second_div" style="display:none">

                    <div id="specialPrice999" class="gst_rdiobtn editprice">
                        <label for="price_1" style="cursor:pointer">
                            <input type="radio" id="price_1" name="form_price" value="4999" checked>&nbsp;
                            <div class="check"></div>
                            <p>Rs. 4999</p>
                            <ul style="color: green">
                                <li>Person to Person</li>
                            </ul>
                        </label>
                    </div>

                    <div>

                        <div class="custom_dropdown">
                            <label data-value="" data-name="">---- Select Package ----</label>
                            <div id="hiddenInput">
                                <input type="radio" id="" name="" value="" hidden checked>
                            </div>
                            <ul>
                                <li id="price_2" value="6999" name="form_price">
                                    <div class="gst_rdiobtn editprice">
                                        <p>Rs. 6999</p>
                                        <ul style="color: green">
                                            <li>Corporate Entity</li>
                                        </ul>
                                    </div>
                                </li>
                                <li id="price_3" value="8999" name="form_price">
                                    <div class="gst_rdiobtn editprice">
                                        <p>Rs. 8999</p>
                                        <ul style="color: green">
                                            <li>Foreign Nationals/ Foreign Entity</li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <img id="captcha_holder" src="https://www.foundida.com/payment/captcha.php" alt="Captcha" />
                    <img src="https://www.foundida.com/images/capta.webp" id="btnrefresh" alt="Captcha" />
                    <input type="text" name="captcha_code" id="captcha_code" class="pull-right" maxlength="4" onkeyup="this.value = this.value.replace(/[^\d]+/g, '');" placeholder="Enter the captcha here.." />

                    <input type="hidden" id="is_submitted" value="0">
                    <input type="hidden" id="form-name" name="form_name" value="SHTR">
                    <button type="button" id="contact-submit" data-submit="...Sending">Submit</button>
                </fieldset>


            </form>

        </div>


        <div class="pull-right col-md-6 col-sm-12 form_right_top">
            <h3>Overview of Share Transfer</h3>
            <p>In India, the ownership of a Private Limited Company is determined by the shareholding of the Company. The shares of the Company are transferred in order to admit new investors or to transfer the ownership of the Company.</p>
            <p>The various circumstances under which the shares in a company may be transferred are as follows :</p>
            <ul>
                <li>Sale of shares, </li>
                <li>Transmission of shares by operation of law (i.e upon the death or bankruptcy of a shareholder), </li>
                <li>Gift of shares</li>
                <li>Enforcement of a charge over shares. </li>
            </ul>
            <p>However, It is most common for shares to be transferred by a sale.</p>
            <p>The shares or debentures are ‘movable property’ and are transferable in accordance with the Articles of Association of the Company. Hence, the Articles of Association of the Company must be reviewed prior to beginning the share transfer procedure. In order to transfer shares between two or more persons they must enter into a contract or arrangement. Majority of the sections of the Companies Act deal with Transfer and Transmission of Shares. </p>
        </div>



    </div>
</div>
<section class="shop_rev_area">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="rating_area">
                    <ul>
                        <li>
                            <img src="images/headphone.webp" alt="Consultation">
                            <h3>13427</h3>
                            Assistance Availed
                        </li>
                        <li>
                            <img src="images/star.webp" alt="Trustpilot Rating">
                            <h3>4.5/5.00</h3>
                            Our Google Rating
                        </li>
                        <li>
                            <img src="images/message.webp" alt="Trustpilot Review">
                            <h3>6,000+</h3>
                            Number of Google Review
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="reviews" style="margin: 34px 0 0;">
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
                        <div class="trust_reviewstrat custm_trst">
                            <p>Foundida offers one of the most affordable and efficient share transfer services in the market. Their legal team was very responsive, and all my queries were resolved promptly. I’ll definitely use their services again for any legal or compliance needs.</h4>
                            <h4>Abhishek Sharma</h4>
                        </div>
                    </div> -->
                    <div class="item">
                        <div class="trust_reviewstrat custm_trst">
                            <p>I used their share transfer service for my company and was impressed with their professionalism and clarity. The team ensured all ROC filings were done on time and provided regular updates. Their portal is user-friendly, and the documentation process was very smooth.</p>
                            <h4>Neha Singh</h4>
                        </div>
                    </div>
                    <!-- <div class="item">
                        <div class="trust_reviewstrat custm_trst">
                            <p>From documentation to filing, everything was handled efficiently by the Foundida team. I was guided step-by-step during the share transfer process, and it felt like I had a legal expert by my side. Great customer experience!</p>
                            <h4>Karan Mehta</h4>
                        </div>
                    </div> -->
                    <div class="item">
                        <div class="trust_reviewstrat custm_trst">
                            <p>Excellent service and prompt support! I used their share transfer service for my startup, and the team delivered exactly what they promised. Great coordination and value for money.</p>
                            <h4>Manish Tiwari</h4>
                        </div>
                    </div>
                    <!-- <div class="item">
                        <div class="trust_reviewstrat custm_trst">
                            <p>The share transfer service was handled with utmost professionalism. The legal team answered all my queries and made the entire process stress-free. I’m really happy with the support I received.</p>
                            <h4>Rajat Kapoor</h4>
                        </div>
                    </div> -->
                    <!--                     
                    <div class="item">
                        <div class="trust_reviewstrat">
                            <p>The service employee has been extremely patient with the call which made my application smooth. Thank you</p>
                            <h4>Sailesh Chepuri</h4>
                        </div>
                    </div> -->

                </div>
            </div>
        </div>
    </div>
</section>

<div class="what_st">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="block_heading">
                    <h2 class="benifts-heading" style="color: black">What is share transfer?</h2>
                </div>
            </div>
            <div class="col-md-12 col-sm-12">
                <p>The transfer of shares is a voluntary act by the holder of shares. It refers to an intentional transfer of title of the shares from the transferor (one who transfers) to the transferee (one who receives). During share transfer the rights and duties (as represented in a share of the company) are transferred from the shareholder who wishes not be a member of the company anymore to a person who wishes to be a member of the company.</p>
                <p>The following individuals are involved in the Share transfer : </p>
                <ul>
                    <li>Subscribers to the memorandum</li>
                    <li>In the case of a deceased person, the legal representative</li>
                    <li>Transferor</li>
                    <li>Transferee</li>
                    <li>Company (Whether listed or unlisted)</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="container" id="documents_required">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="block_heading">
                <h2 class="benifts-heading" style="color: black">Documents required</h2>
                <p>The process for the transfer of shares shall be possible only if all required documents are furnished in a timely manner along with the supporting documents. The following documents will be required to initiate the process of transfer of shares:-</p>
            </div>
        </div>
        <div class="col-md-4 col-sm-4">
            <div class="req-docs-main-div">
                <img src="image/dcr_pic3.webp" alt="Certificate">
                <h4>Copy of the transferor's original share certificate</h4>
            </div>
        </div>
        <div class="col-md-4 col-sm-4">
            <div class="req-docs-main-div">
                <img src="image/dcr_pic2.webp" alt="PAN Card">
                <h4>Authenticated copy of PAN card of the transferor(s) (i.e. sellers) and <br>transferee(s) (i.e. buyers) </h4>
            </div>
        </div>
        <div class="col-md-4 col-sm-4">
            <div class="req-docs-main-div">
                <img src="image/dcr_pic1.webp" alt="SH-4">
                <h4>A duly filled and signed Form SH-4.</h4>
            </div>
        </div>
    </div>
</div>

<section class="how_We_area">
    <div class="container">
        <div class="col-md-12 col-sm-12">
            <div class="block_heading">
                <h2 class="benifts-heading" style="color: black">The procedure of Share Transfer in Private Limited Company</h2>
                <p>To initiate the share transfer procedure, the following steps must be followed : </p>
            </div>
        </div>
        <div class="col-ms-12">
            <ul>
                <li><strong>Step 1:</strong> The Articles of Association of the Private Limited Company must be reviewed and restrictions, if any must be addressed to. </li>
                <li><strong>Step 2:</strong> Shareholder must give notice in writing to the Director of the Company about his intention to transfer share of the company.</li>
                <li><strong>Step 3:</strong> Determine the price as per Articles of Association at which the shares of the Company will first be offered to present shareholders of the Company. (The Company Directors or the Company Auditor usually decides this price.)</li>
                <li><strong>Step 4:</strong> The Company must then give notice to the other shareholders about the availability of share, the last date to purchase the shares and the price at which the share are available.</li>
                <li><strong>Step 5:</strong> Filling and signing of the Share Transfer Deed in Form SH-4.</li>
                <li><strong>Step 6:</strong> The transfer certificate shall be stamped in accordance with the Indian Stamp Act and the Stamp Duty Notification in force in the state in question. For every 100 rupees of share value or part thereof, the official share transfer rate is 25 paisa. Check that the stamp affixed on the transfer deed is cancelled at the time of or before the signing of the transfer deed.</li>
                <li><strong>Step 7:</strong> The signatures of the transferor and the transferor of a share transfer deed must be witnessed by a person who shall mention his name, address and signature on the same.</li>
                <li><strong>Step 8:</strong> Attach the share certificate or allocation letter with the share transfer deed and deliver the same to the company. Within sixty (60) days from the date of execution the share transfer deed must be deposited to the Company by or on behalf of the transferor and by or on behalf of the transferee.</li>
                <li><strong>Step 9:</strong> The Board of Directors of the company must review the documents and if approved by passing a resolution, register such transfer and issue new share certificate in the name of the transferee.</li>
            </ul>
        </div>
    </div>
</section>
<section class="fees_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="block_heading">
                    <h2 class="benifts-heading" style="color: black">Our Fees</h2>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="fees_info">
                    <h2>Person to Person</h2>
                    <h3>Only <span>₹4999/-</span> + GST</h3>
                    <h4>(excluding govt. fees)</h4>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="fees_info">
                    <h2>Corporate Entity</h2>
                    <h3>Only <span>₹6999/-</span> + GST</h3>
                    <h4>(excluding govt. fees)</h4>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="fees_info">
                    <h2>Foreign Nationals/ Foreign Entity</h2>
                    <h3>Only <span>₹8999/-</span> + GST</h3>
                    <h4>(excluding govt. fees)</h4>
                </div>
            </div>
            <div class="col-md-12">
                <a href="#contact" class="associate_but desk_off">Register Now</a>
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


<section class="why_us_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="block_heading">
                    <h2 class="benifts-heading" style="color: black">Why Us?</h2>
                </div>
            </div>
            <ul>
                <li>Recognized by Govt. of India</li>
                <li>On Time Service</li>
                <li>Super Fast Service</li>
                <li>ISO Certified</li>
                <li>24x7 Platform</li>
                <li>Data Security & Trust</li>
                <li>Affordable Than Other Professionals</li>
                <li>Trained and Professional Experts</li>
                <li>5 Lakh+ Happy Customers Across India</li>
            </ul>
        </div>
    </div>
</section>
<section class="popular_area">
    <div class="container">
        <div class="col-md-12 col-sm-12">
            <div class="block_heading">
                <h2 class="benifts-heading" style="color: black">Popular Services</h2>
            </div>
        </div>
        <div class="row">

            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="popular_info">
                    <div class="popular_info_pic">
                        <div class="popular_info_pic_con">
                            <img src="images/popular_icon2.webp" alt="Tax Services">
                        </div>
                    </div>
                    <h3>Tax Services</h3>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="popular_info">
                    <div class="popular_info_pic">
                        <div class="popular_info_pic_con">
                            <img src="images/popular_icon3.webp" alt="Trademark Registration">
                        </div>
                    </div>
                    <h3>Trademark Registration</h3>
                </div>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="popular_info">
                    <div class="popular_info_pic">
                        <div class="popular_info_pic_con">
                            <img src="images/popular_icon5.webp" alt="Import Export Code">
                        </div>
                    </div>
                    <h3>Import Export Code</h3>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="popular_info">
                    <div class="popular_info_pic">
                        <div class="popular_info_pic_con">
                            <img src="images/popular_icon6.webp" alt="FSSAI Food License">
                        </div>
                    </div>
                    <h3>FSSAI Food License</h3>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="popular_info">
                    <div class="popular_info_pic">
                        <div class="popular_info_pic_con">
                            <img src="images/popular_icon7.webp" alt="GST Services">
                        </div>
                    </div>
                    <h3>GST Services</h3>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="popular_info">
                    <div class="popular_info_pic">
                        <div class="popular_info_pic_con">
                            <img src="images/popular_icon8.webp" alt="Company Registration">
                        </div>
                    </div>
                    <h3>Company Registration</h3>
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



<section class="faq_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="block_heading">
                    <h2 class="benifts-heading" style="color: black">FAQ</h2>
                </div>
            </div>
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingSix">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                <img src="images/Question.webp" alt="Question">What is Share Transfer?
                            </a>
                        </h4>
                    </div>
                    <div id="collapseSix" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingSix">
                        <div class="panel-body">
                            <p>A share transfer is the process of transferring existing shares from one person to another. </p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                <img src="images/Question.webp" alt="Question">Who are involved in the Transfer of shares ?
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <p>The following persons are involved in the transfer of shares:</p>
                            <ul>
                                <li>Subscribers to the memorandum</li>
                                <li>In the case of a deceased person, the legal representative</li>
                                <li>Transferor</li>
                                <li>Transferee</li>
                                <li>Company</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <img src="images/Question.webp" alt="Question">What consequences are faced by the company which is in default ?
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            <p>Ans : A company in default shall pay a penalty of minimum Rs.25,000 and maximum Rs.5,00,000 .</p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <img src="images/Question.webp" alt="Question">How do I request a name change on my stock/bond certificate?
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            <p>Any Shareholder who is desirous of changing his/her name in the stock/bond certificate shall make an application to the Company along with the following documents </p>
                            <ul>
                                <li>Request letter mentioning the reason of the name change </li>
                                <li>Affidavit</li>
                                <li>Attested copy of the document where the name is already changed or Gazette Notification</li>
                                <li>Self-attested copy of the PAN card duly notarized</li>
                                <li>Self-attested copy of the address proof duly notarized. </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingFour">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <img src="images/Question.webp" alt="Question">How can I apply for a physical share transfer?
                            </a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                        <div class="panel-body">
                            <p>Physical share transfer shall take place only when the shares are not in the dematerialized form. </P>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingFive">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <img src="images/Question.webp" alt="Question">How can I file a claim for a lost share certificate or a duplicate certificate?
                            </a>
                        </h4>
                    </div>
                    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                        <div class="panel-body">
                            <p>You must send a request letter signed by the holder, a self-attested FIR copy from the police station, ID proof, address proof, indemnity, and affidavit on a separate Rs 100 non-judicial stamp paper as per the proforma. The process takes 30-45 working days to finish.</P>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-12">
                <a href="#contact" class="associate_but desk_off">Register Now</a>
            </div>
        </div>
    </div>
</section>

<section class="contact_us_top">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <div class="contact_us_top_info">
                    <div>
                        <div class="con_icon_con">
                            <img src="images/con_icon1.webp" alt="">
                        </div>
                        <h3>Our Address</h3>
                        <p>Kariwala Towers, 8th Floor, J1-5, EP Block, PIN-700091, India</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <a href="tel:+918069029400">
                    <div class="contact_us_top_info">
                        <div>
                            <div class="con_icon_con">
                                <img src="images/con_icon2.webp" alt="">
                            </div>
                            <h3>Phone number</h3>
                            <p>Call us:+91 87505 30252</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-4">
                <a href="mailto:info@foundida.com">
                    <div class="contact_us_top_info">
                        <div>
                            <div class="con_icon_con">
                                <img src="images/con_icon3.webp" alt="">
                            </div>
                            <h3>E-mail address</h3>
                            <p>info@foundida.com</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="ofc_info_area">
    <div class="ofc_info_area9">
        <div class="container">
            <div class="row">
                <ul>
                    <li>
                        <h2>Noida Office</h2>
                        <p>Unit No-14, Ground Floor, Tower -A, Logix Cyber Park, Sec-62, Noida, Distt. Gautam Budh Nagar, Uttar Pradesh-201301</p>
                    </li>

                    <li>
                        <h2>Kolkata Office</h2>
                        <p>8th Floor, Kariwala Towers, J1-5, EP Block, Salt Lake Sec-V, Kolkata-700091, West Bengal, India</p>
                    </li>

                </ul>
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
    // fbq('track', 'ViewContent', {
    //    content_name: 'Share Transfer',
    //    content_ids: ['SHTR'],
    //    content_type: 'product',
    //    value: 4999.00,
    //    currency: 'INR'
    // });
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

    $(document).on('click', '#btnrefresh', function() {
        var url = window.location.origin + '/payment/captcha.php?' + Math.random();
        document.getElementById('captcha_holder').src = url;
        document.getElementById('captcha_code').value = '';
        return false;
    });

    $.validator.addMethod("emailRegx", function(value, element, regexpr) {
        return regexpr.test(value);
    }, "Please enter a valid email address.");

    $('.oli-validate-form').validate({
        rules: {
            name: {
                required: true,
                normalizer: function(value) {
                    return $.trim(value);
                }
            },
            email: {
                required: true,
                email: true,
                emailRegx: /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i
            },
            mobile: {
                required: true,
                number: true,
                rangelength: [10, 10]
            },
            state: {
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
                gclid_field = $('#gclid_field').val();
            let landing_uri = $('#landing_uri').val();

            $.ajax({
                url: "../../payment/submit-share-transfer.php",
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
                beforeSend: function() {
                    $('#nextBtn').text('Please wait..');
                },
                success: function(data) {
                    if (data.success) {

                        $('#oliid').val(data.oliid);
                        $('#second_div').show();
                        $('#first_div').hide();
                        // if (typeof Campaignid !== 'undefined') {
                        //      pushCampaignDetails(data.oliid);
                        // }
                        if (Campaignid !== null || Campaignid != '' || utm_source !== null || utm_source != '') {
                            // if(utm_source=='fb'){
                            //    fbq('track', 'Lead');
                            // }
                            pushCampaignDetails(data.oliid);
                        }
                    } else {
                        alert(data.msg);
                        $('#nextBtn').prop('disabled', false);
                    }
                }
            });
        }
    });

    $(document).on('click', '#contact-submit', function() {
        var r = $(this);

        if ($('.oli-validate-form').valid()) {
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
    });

    function submitOli(btn) {
        btn.attr('type', 'submit')
            .html('Redirecting to Payment Lobby...')
            .css('pointer-events', 'none');

        setTimeout(function() {
            $('.oli-validate-form').submit();
        }, 1200);
    }
</script>

<script type="text/javascript">
    /*Do not remove this.This is for UTM tracking*/
    var landing_form_type = 'SHTR';
</script>
@endsection
