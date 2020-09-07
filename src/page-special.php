<?php
/**
* Template Name: Special page
*
*/
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>G.Network</title>
<?php wp_head(); ?>
<link href="<?= get_template_directory_uri() . '/assets/styles/chunks/1.css'?>" rel="stylesheet"><link href="<?= get_template_directory_uri() . '/assets/styles/main.css'?>" rel="stylesheet"></head>
<body>
<div class="main-wrapper">
    <header class="header">
        <div class="container">
            <div class="header__logo">
                <a href="https://www.g.network/queens-gate-and-earls-court-community-consultation" class="header__logo__text">
                    <img src="<?= get_template_directory_uri() . '/assets/images/logo.png'?>" alt="img">
                </a>
            </div>
        </div>
    </header>
    <main class="main">
        <section class="section section--banner" id="banner" >
            <div class="container">
                <div class="banner">
                    <div class="banner__wrapper">
                        <h1 class="banner__title">
                            Welcome to better broadband
                        </h1>
                        <div class="banner__subtitle">
                            <p class="banner__text">
                                Thanks for your interest in G.Network and our plans for improving broadband connections
                                in Queens Gate and Earls Court.
                            </p>
                            <p class="banner__text">
                                Our plans will improve the lives of residents, support business growth and deliver much
                                needed improvements to broadband speeds in Hospitals, Schools and community projects,
                                so we want to hear your views on them.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section class="section section--information" id="information" style="background-image: url(<?= get_template_directory_uri() . '/assets/images/information.png'?>)">
            <div class="container">
                <div class="information">
                    <div class="information__wrapper">
                        <h3 class="information__title">
                            On this page you’ll find information on:
                        </h3>
                        <ul class="information__nav" >
                            <li class="information__nav__list">
                                <span class="icon-arrow-right"></span>
                                <a href="#what-happening" class="information__nav__text">What’s happening?</a>
                            </li>
                            <li class="information__nav__list">
                                <span class="icon-arrow-right"></span>
                                <a href="#who-we-are" class="information__nav__text">Who are G.Network?</a>
                            </li>
                            <li class="information__nav__list">
                                <span class="icon-arrow-right"></span>
                                <a href="#properties" class="information__nav__text">What is high-speed ‘full fibre’ broadband?</a>
                            </li>
                            <li class="information__nav__list">
                                <span class="icon-arrow-right"></span>
                                <a href="#benefits" class="information__nav__text">What are the benefits of full fibre broadband?</a>
                            </li>
                            <li class="information__nav__list">
                                <span class="icon-arrow-right"></span>
                                <a href="#map" class="information__nav__text">When is my street being connected?</a>
                            </li>
                            <li class="information__nav__list">
                                <span class="icon-arrow-right"></span>
                                <a href="#blockquotes" class="information__nav__text">What do our customers say?</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section--what-happening" id="what-happening">
            <div class="container">
                <div class="what-happening">
                    <div class="what-happening__slider">
                        <div class="what-happening__img js-slider-happening">
                            <div class="what-happening__img__item">
                                <img src="<?= get_template_directory_uri() . '/assets/images/heapping-slide/hepping.png'?>" alt="">
                            </div>
                            <div class="what-happening__img__item">
                                <img src="<?= get_template_directory_uri() . '/assets/images/heapping-slide/G-Network_Visitors23 (1).jpg'?>" alt="">
                            </div>
                            <div class="what-happening__img__item">
                                <img src="<?= get_template_directory_uri() . '/assets/images/heapping-slide/G-Network_Clean_10 (1).jpg'?>" alt="">
                            </div>
                            <div class="what-happening__img__item">
                                <img src="<?= get_template_directory_uri() . '/assets/images/heapping-slide/Community events 3.jpg'?>" alt="">
                            </div>
                            <div class="what-happening__img__item">
                                <img src="<?= get_template_directory_uri() . '/assets/images/heapping-slide/Community events 2.jpg'?>" alt="">
                            </div>
                        </div>
                        <div class="js-slider-happening__arrows slider-happening__arrows">
                            <span class="prev-arrow arrows"></span>
                            <div class="ml-auto js-dots-container">

                            </div>

                            <span class="next-arrow arrows"></span>
                        </div>
                    </div>
                    <div class="what-happening__wrap">
                        <h3 class="what-happening__title">
                            What’s happening?
                        </h3>
                        <p class="what-happening__text">
                            We’re rebuilding London’s broadband from the fibre up.. Most internet connections in London
                            are based on copper, most of which was put in place when phone lines were installed in the
                            20th century. That copper was never designed to carry internet traffic, which is why so
                            many broadband connections in Kensington and Chelsea are slow and unreliable.
                        </p>
                        <p class="what-happening__text">
                            G.Network is upgrading each of these connections to ‘full fibre’ (also known as ‘Fibre to
                            the Premises’ or FTTP) - so the whole connection uses state-of-the-art fibre optic cabling.
                            We’re doing this street by street, and building by building, using a tried and tested
                            process for assessing a street and ensuring we lay our fibre both quickly and safely for
                            all involved.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section--who-we-are" id="who-we-are">
            <div class="container">
                <div class="who-we-are">
                    <div class="who-we-are__item">
                        <h3 class="who-we-are__title">
                            Who are G.Network?
                        </h3>
                        <p class="who-we-are__item__text">
                            G.Network is a fast growing provider of full-fibre internet connections. We’re working
                            hard to provide affordable, 100% full fibre connectivity to businesses and residents
                            across London who are under-served by the existing broadband infrastructure.
                        </p>
                        <p class="who-we-are__item__text">
                            Just under 85% of the UK still uses copper cables on all or part of their connections, and
                            they aren’t fit for purpose. As internet applications become more demanding, there is an
                            urgent need for an internet upgrade in London.
                        </p>
                        <p class="who-we-are__item__text">
                            That’s why we’re investing in better connectivity for the capital by replacing slow copper,
                            with state-of-the-art full fibre cabling. This means digging up streets and laying new
                            infrastructure delivering fast, secure and reliable network speeds to all of our customers.
                        </p>
                    </div>
                    <div class="who-we-are__image">
                        <div class="who-we-are__image__img">
                            <img src="<?= get_template_directory_uri() . '/assets/images/Company-Vision.png'?>" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section--properties" id="properties">
            <div class="container">
                <div class="properties">
                    <div class="properties__text">
                        <h3 class="properties__text__title">
                            What is high-speed full-fibre broadband?
                        </h3>
                        <p class="properties__text__subtitle">
                            The majority of London’s broadband connections are a mix of copper and fibre. Broadband
                            connectivity can be split into 3 categories.
                        </p>
                    </div>
                    <div class="properties__wrapper">
                        <div class="properties__wrapper__item">
                            <div class="properties__img">
                                <img src="<?= get_template_directory_uri() . '/assets/images/1.png'?>" alt="">
                            </div>
                            <div class="properties__wrapper__text">
                                <p class="properties__text-img">
                                    <span class="text-color">ADSL2+</span>, which uses mostly copper all the way from
                                    the exchange
                                </p>
                            </div>
                        </div>
                        <div class="properties__wrapper__item">
                            <div class="properties__img">
                                <img src="<?= get_template_directory_uri() . '/assets/images/2.png'?>" alt="">
                            </div>
                            <div class="properties__wrapper__text">
                                <p class="properties__text-img">
                                    <span class="text-color">Fibre to the cabinet or FTTC</span>, which uses a
                                    mix of copper and fibre to deliver increased speeds. This is often mistaken for a
                                    fibre connection.
                                </p>
                            </div>
                        </div>
                        <div class="properties__wrapper__item">
                            <div class="properties__img">
                                <img src="<?= get_template_directory_uri() . '/assets/images/3.png'?>" alt="">
                            </div>
                            <div class="properties__wrapper__text">
                                <p class="properties__text-img">
                                    <span class="text-color">Fibre to the premises or FTTP</span>. This is 100% full
                                    fibre optic cabling all the way to the building and delivers significantly faster
                                    speeds and better reliability.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section--short-info" id="short-info">
            <div class="container">
                <div class="short-info">
                    <p class="short-info__text">
                        At G.Network we only connect premises to 100% full fibre ensuring that you’ll never have any
                        slow copper in your connection
                    </p>
                </div>
            </div>
        </section>
        <section class="section section--benefits" id="benefits">
            <div class="container">
                <div class="benefits">
                    <h3 class="benefits__title">
                        What are the benefits of high-speed fibre broadband?
                    </h3>
                    <div class="benefits__wrapper">
                        <div class="benefits__item">
                            <h5 class="benefits__item__title">
                                Speeds in excess of 900mbps!
                            </h5>
                            <p class="benefits__item__text">
                                The average download speed in London is around 66 Megabits per second (Mbps).
                                G.Network FTTP connections can deliver speeds of over 900 megabits per second
                                (Mbps) - This is over 13 times
                                faster!
                            </p>
                        </div>
                        <div class="benefits__item">
                            <h5 class="benefits__item__title">
                                Faster speeds for less
                            </h5>
                            <p class="benefits__item__text">
                                Full fibre delivers higher speeds for the same price as the current alternatives.
                                Our prices start from just £22 per month for our residential 150 mbps
                            </p>
                        </div>
                        <div class="benefits__item">
                            <h5 class="benefits__item__title">
                                Better reliability
                            </h5>
                            <p class="benefits__item__text">
                                Our brand-new, upgraded connections suffer from fewer outages**
                            </p>
                        </div>
                        <div class="benefits__item">
                            <h5 class="benefits__item__title">
                                More consistent speeds during peak times
                            </h5>
                            <p class="benefits__item__text">
                                Have you ever noticed that your internet slows down when friends or family are
                                using it? FTTP packages support much more demanding internet use*
                            </p>
                        </div>
                    </div>
                    <div class="benefits__text">
                        <div class="benefits__text__item">
                            <p class="benefits__text-link">
                                <span class="text-star">*</span>
                                <a href="https://www.ofcom.org.uk/__data/assets/pdf_file/0023/186413/Connected-Nations-2019-UK-final.pdf
">Results taken from Ofcom’s ‘UK home broadband
                                performance report, May-19</a>
                            </p>
                            <p class="benefits__text-link">
                                <span class="text-star">**</span>
                                <a href="https://www.openreach.com/fibre-broadband/fibre-first">https://www.openreach.com/fibre-broadband/fibre-first</a>
                            </p>
                            <p class="benefits__text-link">
                                <span class="text-star">***</span><a href="https://www.multicominc.com/training/
                                technical-resources/copper-vs-fiber-which-to-choose/">https://www.multicominc.com/training/
                                technical-resources/copper-vs-fiber-which-to-choose/</a>
                            </p>
                        </div>
                    </div>
                    <div class="benefits__img">
                        <img src="<?= get_template_directory_uri() . '/assets/images/Difference_between_FTTC-FTTP.png'?>" alt="img">
                    </div>
                </div>
            </div>
        </section>
        <section class="section section--technology" id="technology">
            <div class="container">
                <div class="technology">
                    <div class="technology__img">
                        <img src="<?= get_template_directory_uri() . '/assets/images/6) - Why Choose Full Fibre A0 (2).jpg'?>" alt="">
                    </div>
                    <div class="technology__wrapper">
                        <div class="technology__wrapper__item">
                            <p class="technology__text"> <span class="technology__text-title">Residents:</span>
                                Get superior future-proofed connections meaning uninterrupted streaming,
                                working from home, gaming and internet access whatever time of day.</p>
                        </div>
                        <div class="technology__wrapper__item">
                            <p class="technology__text"> <span class="technology__text-title">Business:</span>
                                Work more effectively with faster connections to clients and customers.
                                Better connection speeds mean that businesses can make even better use of cloud-based
                                software and data storage
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section--benefits-full-fiber" id="benefits-full-fiber">
            <div class="container">
                <div class="benefits-full-fiber">
                    <h3 class="benefits-full-fiber__title">
                        Benefits of Full Fibre to London
                    </h3>
                    <div class="benefits-full-fiber__wrapper">
                        <div class="benefits-full-fiber__wrapper__item">
                            <div class="benefits-full-fiber__img">
                                <img src="<?= get_template_directory_uri() . '/assets/images/img-london/7) - FTTP Benifits-Full Fibre (3).jpg'?>" alt="img">
                            </div>
                            <div class="benefits-full-fiber__text">
                                <h4 class="benefits-full-fiber__text__title">
                                    Residents
                                </h4>
                                <ul class="benefits-full-fiber__text__list">
                                    <li class="benefits-full-fiber__text__options">
                                        Superior,future-proofed connections
                                    </li>
                                    <li class="benefits-full-fiber__text__options">
                                        Uninterrupted streaming
                                    </li>
                                    <li class="benefits-full-fiber__text__options">
                                        Efficient working from home
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="benefits-full-fiber__wrapper__item">
                            <div class="benefits-full-fiber__img">
                                <img src="<?= get_template_directory_uri() . '/assets/images/img-london/7) - FTTP Benifits-Full Fibre (1).jpg'?>" alt="img">
                            </div>
                            <div class="benefits-full-fiber__text">
                                <h4 class="benefits-full-fiber__text__title">
                                    Business
                                </h4>
                                <ul class="benefits-full-fiber__text__list">
                                    <li class="benefits-full-fiber__text__options">
                                        Work more effectively
                                    </li>
                                    <li class="benefits-full-fiber__text__options">
                                        Fastest connections for clients and customers
                                    </li>
                                    <li class="benefits-full-fiber__text__options">
                                        Best use of cloud-based software & data storage
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="benefits-full-fiber__wrapper__item">
                            <div class="benefits-full-fiber__img">
                                <img src="<?= get_template_directory_uri() . '/assets/images/img-london/7) - FTTP Benifits-Full Fibre (2) – копія.jpg'?>" alt="img">
                            </div>
                            <div class="benefits-full-fiber__text">
                                <h4 class="benefits-full-fiber__text__title">
                                    Commynity
                                </h4>
                                <ul class="benefits-full-fiber__text__list">
                                    <li class="benefits-full-fiber__text__options">
                                        Infrastructure to support growing needs for hospitals,
                                        transport and schools
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section--map" id="map">
            <div class="container">
                <div class="map">
                    <div class="map__wrapper">
                        <h3 class="map__title">
                            When is my street being connected?
                        </h3>
                        <div class="map__text">
                            <p class="map__text__item">
                                When laying our fibre across London we look to benefit as many businesses and residents as
                                possible. However, in some instances, we’re unable to access certain streets.
                            </p>
                            <p class="map__text__item">
                                Below is the current view of which streets can look forward to getting investment into
                                their broadband speeds in 2020 and early 2021. Unfortunately
                                we can’t share exact dates of when street works will start on each street.
                            </p>
                        </div>
                    </div>
                    <div class="map__images">
                        <div class="map__images__img">
                            <div class="map__images__text" >
                                <p>
                                    Queens Gate
                                </p>
                            </div>
                            <a href="<?= get_template_directory_uri() . '/assets/images/Queen\'s Gate Ward.jpg'?>" data-fancybox >
                                <img src="<?= get_template_directory_uri() . '/assets/images/Queen\'s Gate Ward (1).jpg'?>" alt="img" />
                                <div class="map__images__icon">
                                    <span class="icon-search"></span>
                                </div>
                            </a>
                        </div>

                        <div class="map__images__img">
                           <div class="map__images__text"  >
                               <p>
                                   Earls Court
                               </p>
                           </div>
                            <a href="<?= get_template_directory_uri() . '/assets/images/Earls Court (1).jpg'?>" data-fancybox >
                                <img src="<?= get_template_directory_uri() . '/assets/images/Earls Court.jpg'?>" alt="img" />
                                <div class="map__images__icon">
                                    <span class="icon-search"></span>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section--our-approach" id="our-approach">
            <div class="container">
                <div class="our-approach">
                    <h5 class="our-approach__title">
                        Our approach to your street will follow a similar process to the one below:
                    </h5>
                    <div class="our-approach__wrap">
                        <div class="our-approach__img js-slider-approach">
                            <div class="our-approach__img__item">
                                <div class="our-approach__img__box">
                                    <img src="<?= get_template_directory_uri() . '/assets/images/our-approach/1) - Installation Process - Approved.png'?>" alt="img">
                                </div>
                                <div class="our-approach__img__text">
                                    <p>Research</p>
                                </div>
                            </div>
                            <div class="our-approach__img__item">
                                <div class="our-approach__img__box">
                                    <img src="<?= get_template_directory_uri() . '/assets/images/our-approach/1) - Installation Process - Approved (1).png'?>" alt="img">
                                </div>
                                <div class="our-approach__img__text">
                                    <p>Consultation</p>
                                </div>
                            </div>
                            <div class="our-approach__img__item">
                                <div class="our-approach__img__box">
                                    <img src="<?= get_template_directory_uri() . '/assets/images/our-approach/1) - Installation Process - Approved (2).png'?>" alt="img">
                                </div>
                                <div class="our-approach__img__text">
                                   <p> Permits</p>
                                </div>
                            </div>
                            <div class="our-approach__img__item">
                                <div class="our-approach__img__box">
                                    <img src="<?= get_template_directory_uri() . '/assets/images/our-approach/1) - Installation Process - Approved (3).png'?>" alt="img">
                                </div>
                                <div class="our-approach__img__text">
                                    <p>Scheduling</p>
                                </div>
                            </div>
                            <div class="our-approach__img__item">
                                <div class="our-approach__img__box">
                                    <img src="<?= get_template_directory_uri() . '/assets/images/our-approach/1) - Installation Process - Approved (4).png'?>" alt="img">
                                </div>
                                <div class="our-approach__img__text">
                                   <p> Digging</p>
                                </div>
                            </div>
                            <div class="our-approach__img__item">
                                <div class="our-approach__img__box">
                                    <img src="<?= get_template_directory_uri() . '/assets/images/our-approach/1) - Installation Process - Approved (5).png'?>" alt="img">
                                </div>
                                <div class="our-approach__img__text">
                                    <p>Connection</p>
                                </div>
                            </div>
                            <div class="our-approach__img__item">
                                <div class="our-approach__img__box">
                                    <img src="<?= get_template_directory_uri() . '/assets/images/our-approach/1) - Installation Process - Approved (6).png'?>" alt="img">
                                </div>
                                <div class="our-approach__img__text">
                                   <p> Live</p>
                                </div>
                            </div>
                        </div>
                        <div class="our-approach__wrapper">
                            <div class="our-approach__text__item">
                                <h5 class="our-approach__text__title">
                                    Research
                                </h5>
                                <div class="our-approach__text__box">
                                    <span class="our-approach__text__img"><span></span></span>
                                    <p class="our-approach__text__descr">
                                        We work out where we can install our new fibre optic infrastructure.  This is
                                        based on a number of factors, such as the number of residents and businesses on a
                                        particular street, as well as whether the buildings are still using copper-based
                                        broadband.
                                    </p>
                                </div>
                            </div>
                            <div class="our-approach__text__item">
                                <h5 class="our-approach__text__title">
                                    Consultation
                                </h5>
                                <div class="our-approach__text__box">
                                    <span class="our-approach__text__img"><span></span></span>
                                    <p class="our-approach__text__descr">
                                        Before we start work we consult with local businesses and residents in
                                        the area as well as the council to explain the upgrade process
                                    </p>
                                </div>
                            </div>
                            <div class="our-approach__text__item">
                                <h5 class="our-approach__text__title">
                                    Permitting
                                </h5>
                                <div class="our-approach__text__box">
                                    <span class="our-approach__text__img"><span></span></span>
                                    <p class="our-approach__text__descr">
                                        We then apply to the council for permits to work on the streets selected
                                    </p>
                                </div>
                            </div>
                            <div class="our-approach__text__item">
                                <h5 class="our-approach__text__title">
                                    Scheduling
                                </h5>
                                <div class="our-approach__text__box">
                                    <span class="our-approach__text__img"><span></span></span>
                                    <p class="our-approach__text__descr">
                                        Our experienced planning team coordinate suspension of parking bays, setting
                                        up traffic lights etc
                                    </p>
                                </div>
                            </div>
                            <div class="our-approach__text__item">
                                <h5 class="our-approach__text__title">
                                    Digging
                                </h5>
                                <div class="our-approach__text__box">
                                    <span class="our-approach__text__img"><span></span></span>
                                    <p class="our-approach__text__descr">
                                        Only after we’ve received final confirmation from council do we start our work.
                                    </p>
                                </div>
                            </div>
                            <div class="our-approach__text__item">
                                <h5 class="our-approach__text__title">
                                    Connection
                                </h5>
                                <div class="our-approach__text__box">
                                    <span class="our-approach__text__img"><span></span></span>
                                    <p class="our-approach__text__descr">
                                        Once we’ve dug a particular street we push our fibre optic cables through and
                                        connect them to our network
                                    </p>
                                </div>
                            </div>
                            <div class="our-approach__text__item">
                                <h5 class="our-approach__text__title">
                                    Live
                                </h5>
                                <div class="our-approach__text__box">
                                    <span class="our-approach__text__img"><span></span></span>
                                    <p class="our-approach__text__descr">
                                        We inform residents once their building can be connected to our network. If they
                                        choose to take out our service, we take care of the permissions and connect
                                        their premises to our network.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section--we-use" id="we-use">
            <div class="container">
                <div class="we-use">
                    <div class="we-use__wrapper">
                        <div class="we-use__img">
                            <img src="<?= get_template_directory_uri() . '/assets/images/G-Network_Clean.png'?>" alt="">
                        </div>
                        <div class="we-use__text">
                            <h3 class="we-use__title">
                                At G.Network we use
                            </h3>
                            <ul class="we-use__list">
                                <li><span class="circle"></span>
                                    <p>Friendly, London based customer service and support team
                                </p></li>
                                <li> <span class="circle"></span><p>A world-class installation team, taking care of the whole installation process, including getting any permissions from landlords.
                                </p></li>
                                <li><span class="circle"></span><p>Friendly, UK based customer service support.</p></li>
                                <li><span class="circle"></span>
                                    <p>Only the fastest speeds available
                                </p></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section--blockquotes" id="blockquotes">
            <div class="container">
                <div class="blockquotes">
                    <h3 class="blockquotes__title">
                        Customer Feedback
                    </h3>
                    <div class="blockquotes__wrapper">
                        <img src="<?= get_template_directory_uri() . '/assets/images/Testimonials.jpg'?>" alt="img">
                    </div>
                </div>
            </div>
        </section>
        <section class="section section--contact-form" id="contact-form">
            <div class="container">
                <div class="contact-form">
                    <div class="contact-form__form">
                        <?php echo do_shortcode("[ninja_form id=5]"); ?>
                    </div>
                    <div class="contact-form__info">
                        <h3 class="contact-form__title">
                            We want to hear from you
                        </h3>
                        <p class="contact-form__text">
                            Register your interest and we'll let you know when we're ready to connect you to 100% full fibre.
                            Or, if you have any questions about the work we’re doing in your area, please email us on
                            <a href="fullfibre.rollout@g.network">fullfibre.rollout@g.network</a>
                        </p>
                        <p class="contact-form__text">
                            We also have a frequently asked question guide at the bottom of this page.
                        </p>
                        <div class="contact-form__img">
                            <img src="<?= get_template_directory_uri() . '/assets/images/Community_events .png'?>" alt="img">
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section class="section section--questions" id="questions" style="background-image: url(<?= get_template_directory_uri() . '/assets/images/Rectangle.png'?>)">
            <div class="container">
                <div class="questions">
                    <h3 class="questions__title">FAQs</h3>
                    <div class="questions__text">
                        <div class="questions__text__item">
                            <h5 class="questions__text__title js-accordion">
                                <span class="questions__text__img icon-cheveron-down"></span>
                                Does G.Network have the relevant licenses?
                            </h5>
                            <div class="questions__text__answer">
                                <p>
                                    G.Network is regulated by Ofcom and is a registered member of ISPA (Internet Service
                                    Providers Association). We’ve been granted Code powers by Ofcom allowing us to
                                    access public highways to deliver infrastructure investment.
                                </p>
                            </div>
                        </div>
                        <div class="questions__text__item">
                            <h5 class="questions__text__title js-accordion">
                                <span class="questions__text__img icon-cheveron-down"></span>
                                How long does it take to lay fibre on a street?
                            </h5>
                            <div class="questions__text__answer">
                                <p>This usually takes between 5 to 10 days, however sometimes this can take longer if
                                    the project is more complex. We try to complete all work as quickly and safely as
                                    possible and will try to keep noise to a minimum where we can.
                                </p>
                            </div>
                        </div>
                        <div class="questions__text__item">
                            <h5 class="questions__text__title js-accordion">
                                <span class="questions__text__img icon-cheveron-down"></span>
                                Is there a delay in being able to get a G.Network broadband service after my street
                                has been dug?
                            </h5>
                            <div class="questions__text__answer">
                                <p>
                                    Yes, this could be down to a number of reasons like the infrastructure not being
                                    connected to our central exchange or there could be delays with permits for other
                                    works that are needed.
                                </p>
                            </div>
                        </div>
                        <div class="questions__text__item">
                            <h5 class="questions__text__title js-accordion">
                                <span class="questions__text__img icon-cheveron-down"></span>
                                When my street is ready to take orders, how long does it take to get connected?
                            </h5>
                            <div class="questions__text__answer">
                                <p>From the time the order is placed the set-up process can take 2-4 weeks from survey
                                    to install. However, this is dependent on wayleaves, which are the permissions
                                    required to allow us to connect properties to our network
                                </p>
                            </div>
                        </div>
                        <div class="questions__text__item">
                            <h5 class="questions__text__title js-accordion">
                                <span class="questions__text__img icon-cheveron-down"></span>
                                I’m interested in the service and want to be kept up to date on progress?
                            </h5>
                            <div class="questions__text__answer">
                                <p>The best way to be kept up to date with our progress is by registering your details
                                    in the form above. We’ll then be able to get in contact when your street is live
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
<script src="<?= get_template_directory_uri() . '/assets/scripts/chunks/1.js'?>"></script><script src="<?= get_template_directory_uri() . '/assets/scripts/main.js'?>"></script>
<?php  wp_footer(); ?>
</body>
</html>