<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-57C662B');</script>
    <!-- End Google Tag Manager -->
    <meta name="msvalidate.01" content="DECE0E8A7D7F53FF66914425239C6E74" />
    <script async src="//191975.tctm.co/t.js"></script>
    <title>Financing Our Arcade Gaming Systems | Buy Arcade Machines</title>
    <meta charset="utf-8">
    <meta name="description"
        content="Buy an arcade with the help of our financing program! We offer financing programs for our arcade systems if you don't have the cash on hand to purchase." />
    <meta name="keywords" content="arcade, game, games, mame, namco, pac man, centipede" />
    <meta name="viewport" content="width=device-width; initial-scale=1.0">
    <meta name="msvalidate.01" content="EA0BDFFECF0FF3C657E63410EF5B2A33" />
    <meta name="theme-color" content="#ee4612">
    <link rel="icon" href="" type="image/x-icon">
    <link rel="shortcut icon" href="" type="image/x-icon" />
    <?php include "includes/head.php"; ?>
    <link href='css/christmas-shipping-note.css' rel='stylesheet'>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-57C662B" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NWR8WTJ" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <?php
    include "includes/header.php";
    ?>

    <!-- -->
    <style>
        /* General Styles */
        .affiliate-marketing {
            color: black;
        }
        .affiliate-marketing h2 {
            color: black;
            font-size: clamp(26px, 2.3vw, 36px);
            line-height: 40px;
            font-weight: 800;
            margin-bottom: 15px;
            margin-bottom: clamp(15px, 1.5vw, 20px);
        }
        .affiliate-marketing span {
            color: #f34c18;
        }
        .affiliate-marketing p {
            font-size: clamp(14px, 1.6vw, 18px);
            font-weight: 500;
            line-height: 1.5;
        }
        .affiliate-marketing .inner-padding {
            padding-left: 7%;
            padding-right: 7%;
        }
        .affiliate-marketing .small-screens {
            display: none;
        }


        /* "Join the Dream Arcades Affiliate Program!" Styles */
        .affiliate-marketing .join-da {
            display: flex;
            flex-direction: row;
            padding-bottom: 4.2%;
        }
        .affiliate-marketing .join-da img {
            height: clamp(260px, 28vw, 420px);
        }
        .affiliate-marketing .join-da-text {
            display: flex;
            flex-direction: column;
            justify-content: center;
            margin-left: clamp(16px, 2.1vw, 24px);
        }
        .affiliate-marketing .join-da-text h2 {
            /* white-space: nowrap; */
        }
        .affiliate-marketing .join-da-text h3 {
            font-size: clamp(16px, 2.1vw, 20px);
            font-style: italic;
            color: black;
        }
        .affiliate-marketing .join-da-text h2, 
        .affiliate-marketing .join-da-text h3, 
        .affiliate-marketing .join-da-text p {
            margin-bottom: clamp(7px, 1.3vw, 15px);
        }
        .affiliate-marketing .button-container {
            display: flex;
            justify-content: center;
        }
        .affiliate-marketing .join-now {
            background: linear-gradient(to bottom, #FF8325, #DA4E00); /* Gradient from top to bottom */
            font-weight: 700;
            /* width: 175px; */
            color: white;
            border: none;
            /* padding: 17px 20px; */
            padding: clamp(12px, 1.6vw, 17px) clamp(26px, 3vw, 40px);
            border-radius: 8px;
            cursor: pointer;
            /* font-size: 21px; */
            font-size: clamp(15px, 1.7vw, 20px);
            font-weight: 700;
            margin-top: 4px;
        }
        .line-with-shadow {
            border: none;
            height: 3px;
            background-color: #F7771D;
            width: 80%;
            box-shadow: 0 3px 3px rgba(0, 0, 0, 0.1);
        }

        /* "8-Bit effort, earns 16-bit Commissions" Styles */
        .affiliate-marketing .eight-bit-effort {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            margin-top: clamp(55px, 8vw, 80px);
            margin-bottom: clamp(70px, 10.5vw, 100px);
        }
        .affiliate-marketing .eight-bit-effort h2 {

        }
        .affiliate-marketing .eight-bit-effort h3 {
            font-size: clamp(18px, 2.1vw, 24px);
            font-weight: 700;
            margin-bottom: 5px;
            font-style: italic;
        }
        .affiliate-marketing .eight-bit-text {
            width: 50%;
            padding-right: 7%;
        }
        .affiliate-marketing .eight-bit-text p {
            margin-bottom: 5px;
        }
        .affiliate-marketing .eight-bit-block1 {
            margin-bottom: 16px;
        }
        .affiliate-marketing .eight-bit-stars {
            width: 35%;
            height: 25%;
        }
        
        /* "Why Partner with Dream Arcades?" Styles */
        .affiliate-marketing .why-partner {
            display: flex;
            align-items: center;
            padding-top: 10%;
            padding-bottom: 10%;
            position: relative;
            background-color: #ececec;
            --shape-width: 315px;
            --shape-before-width: 590px;
            --shape-img-left: 50%;
            --shape-img-width: 540px;
            --shape-img-height: 590px;
            --shape-img-right: -305px;
            /* font-size: clamp(14px 1.8vw, 18px); */
        }
        .affiliate-marketing .shape-container {
            position: absolute;
            /* top: 100px; */
            width: var(--shape-width);
            height: var(--shape-img-height);
            background-color: #FC7F23;
            overflow: visible;
        }
        .affiliate-marketing .shape-container::before {
            content: '';
            position: absolute;
            /* right: -305px;  */
            right: var(--shape-img-right);
            top: 0px;
            width: var(--shape-before-width);
            height: var(--shape-img-height);
            background-color: #FC7F23;
            border-radius: 50%;
        }
        .affiliate-marketing .why-da-sticker {
            /* min-width: 540px;  */
            min-width: var(--shape-img-width);
            height: auto; 
            position: absolute;
            top: 50%;
            left: var(--shape-img-left);
            transform: translate(-20%, -50%); 
        }
        .affiliate-marketing .why-da-sticker-med {
            display: none;
        }
        .affiliate-marketing .why-partner-text {
            display: flex;
            flex-direction: column;
            justify-content: center;
            background-color: white;
            padding-left: 45%;
            padding-right: 7%;
            height: 470px;
            height: clamp(420px, 40vw, 470px);
        }
        .affiliate-marketing .why-partner p,
        .affiliate-marketing .why-partner-quotes {
            font-size: clamp(14px, 1.45vw, 18px);
        }
        .affiliate-marketing .why-partner-quotes {
            font-style: italic;
            /* white-space: nowrap; */
            line-height: 30px;
            text-align: center;
        }
        .affiliate-marketing .long-quote {
            /* font-size: clamp(14px, 2.1vw, 17px); */
        }
        @media (max-width: 1480px) { .affiliate-marketing .why-partner { --shape-width: 290px;}}
        @media (max-width: 1420px) { .affiliate-marketing .why-partner { --shape-width: 275px; --shape-img-width: 530px;}}
        @media (max-width: 1370px) { .affiliate-marketing .why-partner { --shape-width: 260px; --shape-img-width: 510px;}}
        @media (max-width: 1340px) { .affiliate-marketing .why-partner { --shape-width: 245px; --shape-img-width: 490px;}}
        @media (max-width: 1300px) { .affiliate-marketing .why-partner { 
            --shape-width: 230px; 
            --shape-img-height: 570px;
            --shape-img-width: 470px;}
        }
        @media (max-width: 1260px) { 
            .affiliate-marketing .why-partner { 
            --shape-width: 215px; 
            --shape-img-width: 450px; 
            --shape-img-height: 550px;
            --shape-img-right: -290px;
            }
        }
        @media (max-width: 1220px) { 
            .affiliate-marketing .why-partner { 
                --shape-width: 200px; 
                --shape-before-width: 550px;
                --shape-img-height: 520px;
                --shape-img-width: 430px;
            }
        }
        @media (max-width: 1180px) { 
            .affiliate-marketing .why-partner { 
                --shape-img-left: 57%;
                --shape-width: 185px;
                --shape-img-width: 410px;
                --shape-img-height: 500px;
                --shape-img-right: -280px;
            }
        }
        @media (max-width: 1140px) {
            .affiliate-marketing .why-partner {
                --shape-width: 175px;
                --shape-before-width: 520px;
                --shape-img-width: 400px;
                --shape-img-right: -275px;
            }
        }
        @media (max-width: 1100px) {
            .affiliate-marketing .why-partner {
                --shape-width: 160px;
                --shape-img-width: 380px;
                --shape-img-height: 480px;
                --shape-img-right: -265px;
            }
        }
        @media (max-width: 1000px) {
            .affiliate-marketing .shape-container {
                display: none;
            }
            .affiliate-marketing .why-partner-wrapper {
                display: flex;
                flex-direction: row;
                align-items: center;
                background-color: white;
                padding: 50px 0;
            }
            .affiliate-marketing .why-partner-text {
                height: auto;
            }
            .affiliate-marketing .why-da-sticker-med {
                display: block;
                width: 317px;
                width: clamp(240px, 32vw, 317px);
                padding-left: 6%;
            }
            .affiliate-marketing .why-partner-text {
                padding-left: 5%;
                padding-right: 6%;
            }
        }
        @media (max-width: 768px) {
            .affiliate-marketing .why-partner-wrapper {
                flex-direction: column;
                padding: 35px 0;
            }
            .affiliate-marketing .why-da-sticker-med {
                padding-bottom: 20px;
            }
        }
        /* "How it Works" Styles */
        .affiliate-marketing .how-it-works {

        }
        .affiliate-marketing .how-it-works h2 {
            font-size: clamp(36px, 6vw, 66px);
        }
        .affiliate-marketing .how-it-works img {
            width: 23%;
        }
        .affiliate-marketing .how-it-works-header {
            margin: 35px 0;
            display: flex;
            justify-content: space-evenly;
            align-items: center;
        }
        .affiliate-marketing .how-it-works-body {
            display: flex;
            flex-direction: row;
            padding: 40px 0;
            justify-content: space-evenly;
            background-color: #ececec;
        }
        .affiliate-marketing .how-it-works-box {
            display: flex;
            align-items: center;
            text-align: center;
            flex-direction: column;
            background-color: white;
            width: 21.5%;
            font-weight: 500;
            font-size: clamp(10px, 1.15vw, 23px);
            padding: 20px;
            min-height: 200px;
            height: clamp(220px, 20vw, 240px);
            border-radius: 6px;

        }
        .affiliate-marketing .how-it-works-circle {
            background: linear-gradient(to bottom, #fad9aa, #FF9900);
            /* background: linear-gradient(to bottom, #FF8325, #DA4E00); */
            border: 7px solid #D9D9D9;
            color: white;
            font-weight: bold;
            border-radius: 50%;
            /* min-width: 75px;  */
            min-width: clamp(65px, 8vw, 92px);
            /* min-height: 75px;  */
            min-height: clamp(65px, 8vw, 92px);
            margin-bottom: 20px;
            font-size: clamp(26px, 3.7vw, 42px);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .affiliate-marketing .marketing-support img {
            min-width: 33%;
            min-height: 33%;
            max-width: 430px;
        }
        @media (max-width: 768px) {
            .affiliate-marketing .how-it-works-body {
                flex-direction: column;
                padding: 40px 0;
                align-content: center;
                flex-wrap: wrap;
            }            
            .affiliate-marketing .how-it-works-box {
                width: 90%;
                margin-bottom: 20px;
                flex-direction: row;
                font-size: clamp(18px, 3vw, 24px);
            }
            .affiliate-marketing .how-it-works-circle {
                min-width: 65px;
                min-height: 65px;
                font-size: clamp(26px, 3.7vw, 42px);
                margin: 0 10px 0 0;
            }
        }

        /* "Marketing Support for Affiliates" Styles */
        .affiliate-marketing .marketing-support {
            display: flex;
            flex-direction: row;
            justify-content: center;
            padding-top: 7%;
            padding-bottom: 6%;
        }
        .affiliate-marketing .marketing-support i {
            font-style: italic;
            font-size: clamp(13px, 1.8vw, 16px);
        }
        .affiliate-marketing .marketing-support a {
            color: #F34C18;
            font-weight: 700;
        }
        .affiliate-marketing .marketing-support-text {
            margin-top: 70px;
            margin-right: 10px;
            width: 50%;
            display: flex;
            flex-direction: column;
        }
        @media (max-width: 768px) {
            .affiliate-marketing .marketing-support {
                flex-direction: column;
                align-items: center;
            }
            .affiliate-marketing .marketing-support-text {
                margin-top: 20px;
                width: 100%;
                padding-right: 0;
            }
            .affiliate-marketing .marketing-support img {
                margin-top: 30px;
                max-width: 300px;
            }
        }

        /* "How can we help?" Styles */
        .affiliate-marketing .how-can-we-help {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 50px 0;
            background-color: #ececec;
        }
        .affiliate-marketing .how-can-we-help h2 {
            font-weight: 600;
            margin-bottom: 0px;
        }
        .how-can-we-help form {
            margin-top: 10px;
        }
        .how-can-we-help input[type="text"] {
            width: 400px;
            padding: 10px;
            padding-left: 20px;
            box-sizing: border-box;
            border-radius: 20px;
            border: 1px solid white;
        }
        .how-can-we-help button {
            padding: 10px 20px;
            background-color: #FC7F23;
            color: white;
            border: none;
            cursor: pointer;
        }
        .how-can-we-help button:hover {
            background-color: #e66b1f;
        }

        /* FAQs Styles */
        .affiliate-marketing .marketing-faqs {
            display: flex;
            flex-direction: row;
            margin-top: clamp(30px, 5vw, 60px);
        }
        .affiliate-marketing .faqs-toggles {
            width: 50%;
        }
        .affiliate-marketing .marketing-faqs hr {
            width: 100%;
        }
        .affiliate-marketing #accordion .panel-title a{
            font-size: 18px;
            border-top: none;
            border-bottom: none;
            background: none;
        }
        .affiliate-marketing .marketing-faqs img {
            width: 45%;
            max-width: 530px;
        }
        @media (max-width: 768px) {
            .affiliate-marketing .marketing-faqs {
                flex-direction: column;
                align-items: center;
                margin-top: 40px;
            }
            .affiliate-marketing .faqs-toggles {
                width: 100%;
            }
            .affiliate-marketing .marketing-faqs img {
                margin-top: 35px;
            }
        }

        /* Media Queries */
        @media (max-width: 768px) {
            .affiliate-marketing .small-screens {
                display: block;
            }
            .affiliate-marketing .large-screens {
                display: none;
            }
            .affiliate-marketing .join-da {
                flex-direction: column;
            }
            .affiliate-marketing .join-da img {
                height: auto;
                align-self: center;
                width: 97%;
                margin-bottom: 20px;
            }
            .affiliate-marketing .join-da-text h2 {
                font-size: 29px;
                line-height: normal;
                white-space: normal;
            }
            .affiliate-marketing .eight-bit-effort {
                flex-direction: column;
            }
            .affiliate-marketing .eight-bit-text {
                width: 100%;
                padding-right: 0;
            }
            .affiliate-marketing .eight-bit-stars {
                height: auto;
            }
        }
    </style>

    <section class="affiliate-marketing home-section">
        <section class="join-da inner-padding">
            <img src="./images/affiliate marketing/arcade row.png" class="arcade-row"
                alt="Dream Arcades Affiliate Marketing" />
            <div class="join-da-text">
                <h2><span>Join</span> the Dream Arcades Affiliate Program!</h2>
                <h3>Earn Commissions by promoting the best in home arcade entertainment!</h3>
                <p>Boost your profits with the Dream Arcades Affiliate Program! We're on the lookout for publishing
                    partners in the tech, gaming, retro, and gift guide industries. We’re seeking established medium
                    to large publishers to collaborate with. Our unique products and customizable options evoke
                    nostalgia for classic gaming, offering something truly unique for your audience.</p>
                <p><b>Power-up</b> your commissions with an average order value of over $3,000 per arcade, and both
                    chargeback and refund rates at 0% for the last 24 months!</p>
                <div class="button-container">
                <div class="affiliate-option"><center>
                    In-House Program<br>
                    <a href="https://dreamarcades.goaffpro.com/" target="_blank"> 
                        <button class="join-now in-house">Join Now</button></center>
                    </a>
                </div>
				&emsp;
                <div class="affiliate-option"><center>
                    Awin Program <br>
                    <a href="https://ui.awin.com/merchant-profile/99703" target="_blank">
                        <button class="join-now awin">Join Now</button></center>
                    </a>
                </div>
				&emsp;
                <div class="affiliate-option"><center>
                    Amazon Associates <br>
                    <a href="https://www.amazon.com/stores/page/F8030B49-38D5-436B-8520-53E4EE44FAED" target="_blank">
                        <button class="join-now amazon">View Now</button></center>
                    </a>
                </div>
</a>
                </div>
            </div>
        </section>

        <hr class="line-with-shadow">

        <section class="eight-bit-effort inner-padding">
        <img src="./images/affiliate marketing/stars.png" class="eight-bit-stars small-screens" alt="Dream Arcades Stars" />
            <div class="eight-bit-text">
                <h2><span>8-Bit</span> effort, earns 16-bit Commissions</h2>
                <h3>Editorial and Content Sites</h3>
                <div class="eight-bit-block1">
                    <p>We value our affiliate partners with competitive commission structure to reward your efforts.</p>
                    <p>Earn 5% commission on last click sales as a Dream Arcades affiliate.</p>
                    <p>Perfer Amazon Associates? Check our products on Amazon.</p>
                </div>
                <h3>Deal, Coupon & Loyalty Sites</h3>
                <p>Low and non-content sites can earn $20 per machine. That's $20 for each machine sold. If a Customer purchases two machines, it's two commissions. Commissions are not paid on parts or customizations.</p>
            </div>
            <img src="./images/affiliate marketing/stars.png" class="eight-bit-stars large-screens" alt="Dream Arcades Stars" />
        </section>

        <section class="why-partner">
            <div class="shape-container">
                <img src="./images/affiliate marketing/20thDA.png" class="why-da-sticker" alt="Dream Arcades 20th Anniversary Sticker" />
            </div>
            <div class="why-partner-wrapper">
                <img src="./images/affiliate marketing/20thDA.png" class="why-da-sticker-med" alt="Dream Arcades 20th Anniversary Sticker" />
                <div class="why-partner-text">
                    <h2><span>Why</span> Partner with Dream Arcades?</h2>
                    <p>With 20 years of experience, Dream Arcades is one of the few licensed multi-game companies, so
                        showcase our machines with confidence. Plus, we don’t just serve hardcore gamers—40% of our clients
                        are B2B, seeking customizable arcade cabinets for shows, breakrooms, and product launches.</p>
                    <br>
                    <div class = "why-partner-quotes">
                        <p>"Premium quality arcade claw and amusement machines built to last."</p>
                        <p>"Customizable designs for any home or corporate event."</p>
                        <p>"A trusted brand with a track record of success."</p>
                    <p class = "long-quote">"High order value & dedicated customer service for substantial commission potential."</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="how-it-works">
            <div class="how-it-works-header">
                <h2><span></span>How it Works</h2>
                <img src="./images/affiliate marketing/coin.png" class="coin" alt="Dream Arcades Coin" />
            </div>
            <div class="how-it-works-body">
                <div class="how-it-works-box">
                    <div class="how-it-works-circle">1</div>
                    Sign up through our affiliate network partner, Awin, GoAffPro, or Amazon Affiliates.
                </div>
                <div class="how-it-works-box">
                    <div class="how-it-works-circle">2</div>
                    Receive your unique affiliate link and download marketing materials.
                </div>
                <div class="how-it-works-box">
                    <div class="how-it-works-circle">3</div>
                    Promote Dream Arcades products on your website, blog, social media, or email list.
                </div>
                <div class="how-it-works-box">
                    <div class="how-it-works-circle">4</div>
                    Earn commissions on every sale generated through your link!
                </div>
            </div>
        </section>

        <section class="marketing-support inner-padding">
            <div class="marketing-support-text">
                <h2><span>Marketing Support</span> for Affiliates</h2>
                <br>
                <p>We’re committed to helping our affiliates succeed. As part of the program, you’ll receive access to a
                    wide range of marketing materials, including banners, images, videos, and more.</p>
                <br>
                <p><i>
                        Need something specific? Contact us at
                        <a href="mailto:media@dreamarcades.com"><u>media@dreamarcades.com</u></a>
                        and we’ll provide the assets you need to make your promotions stand out.
                        By joining, you agree to our <a href="terms.php">Terms and Conditions</a> here.
                    </i></p>
            </div>
            <img src="./images/affiliate marketing/claw 2.png" class="marketing-claw" alt="Dream Arcades Claw" />


        </section>

        <section class="how-can-we-help">
    <h2>How can we help?</h2>
    <form id="helpForm" onsubmit="sendEmail(event)">
        <input type="text" id="question" name="question" placeholder="Type question here" required>
        <!-- <button type="submit">Send</button> -->
    </form>
</section>

<script>
function sendEmail(event) {
    event.preventDefault(); // Prevent the form from submitting the traditional way
    var question = document.getElementById('question').value;
    var mailtoLink = 'mailto:support@dreamarcades.com?subject=Help%20Request&body=' + encodeURIComponent(question);
    window.location.href = mailtoLink;
}
</script>
        <section class="marketing-faqs inner-padding">
            <div class = "faqs-toggles">
                <h2><span>FAQs</span></h2>
                <hr class="line-with-shadow">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <!-- Question 1: How do I sign up? -->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne" class="collapsed">
                                    How do I sign up?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                            aria-labelledby="headingOne">
                            <div class="panel-body">
                                <p>You can join our affiliate program through Awin by clicking the 'Join Now' button above.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Question 2: When do I get paid? -->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    When do I get paid?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <p>Commission payments are processed through Awin according to their payment schedule.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Question 3: Can I promote Dream Arcades on social media? -->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseThree" aria-expanded="false" aria-controls="collapseTwo">
                                    Can I promote Dream Arcades on social media?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <p>Yes! You can share your affiliate links on social media, blogs, websites, and more</p>
                            </div>
                        </div>
                    </div>
                    <!-- Question 4: What marketing materials are available? -->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFour">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseFour" aria-expanded="false" aria-controls="collapseTwo">
                                    What marketing materials are available?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <p>We provide banners, images, videos, and more. If you need something specific, just let us know.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="./images/affiliate marketing/parent at arcade l.png" class="faqs-arcade" alt="Dream Arcades Arcade" />
        </section>
    </section>

    <!-- -->



    <!-- Section: Press Releases -->
    <section> 
        <?php include "includes/press-slider.php" ?>
    </section>
    <?php
    include "includes/footer.php";
    include "includes/common-scripts.php";
    ?>
    <script>
        $('#demo').RollingSlider({
            showArea: "#example",
            prev: "#jprev",
            next: "#jnext",
            moveSpeed: 700,
            autoPlay: true,
            stay: 4000
        });
    </script>
</body>

</html>