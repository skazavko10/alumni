<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('partials.head')
</head>
<body>
    <div id="overlay-slide" class=""></div>
    
    <div id="show-push" class="cusbutton" style="margin-right: 0px;">
        <div class="top bar"></div>
        <div class="middle bar"></div>
        <div class="bottom bar"></div>
        <div class="menutextbottom">MENU</div>
    </div>

    <nav id="spmenu" class="panel starter-position" role="navigation">
        <a id="spmenu-link" href="/">
            <img id="spmenu-logo" src="https://home.lst.ac.uk/sites/default/lst.png">
        </a>

        <div class="block block-menu-block">
            <div class="content">
                <div class="menu-block-wrapper">
                    <ul class="menu clearfix">
                        <li class="first leaf">
                            <a href="/">Class Notes</a>
                        </li>

                        <li class="leaf">
                            <a href="/" title="">Photo Gallery</a>
                        </li>
                        
                        <li class="collapsed">
                            <a href="/">Jobs</a>
                        </li>

                        <li class="last leaf">
                            <a href="/" title="">Edit my Account</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div id="mobile-menu" style="margin-right: 0px;">
        <div class="logo-container">
            <!-- <img src="{{ asset('images/LogoBlue.png') }}"> -->
            <h3 style="color: #fff; margin: 0;">LOGO IMAGE</h3>
        </div>

        <div class="cusbutton">
            <div class="top bar"></div>
            <div class="middle bar"></div>
            <div class="bottom bar"></div>
            <div class="menutextbottom">MENU</div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row header-image-container">
            <div class="alumni-logo">
                <img src="{{ asset('images/LogoBlue.png') }}" />
            </div>

            <div class="hader-image-content">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text">
                            A global community of LST graduates who have taken their LST training into every sphere of Christian life and ministry.
                        </h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 register-btn-container">
                        <a href="#" class="register-btn">REGISTER</a>
                    </div>

                    <div class="col-sm-6">
                        <a href="#" class="login-btn">LOG IN</a>
                    </div>
                </div>

                <div class="row scroll-down-container">
                    <div class="col-md-12">
                        <img src="{{ asset('images/scrollDown.png') }}" />
                    </div>

                    <div class="col-md-12">
                        <span></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="alumni-intro-container">
            <div class="row alumni-intro">
                <div class="col-md-12">
                    <h1>LST ALUMNI</h1>
                </div>
            </div>

            <div class="row alumni-headline">
                <div class="col-md-12">
                    <h3>Welcome to your global community of around 7,000 LST graduates.</h3>
                </div>
            </div>

            <div class="row alumni-text">
                <div class="col-md-12">
                    <h4>We belive that 'once LST, always LST' and so our relationship with you continues long after your graduation day. Keep checking back for the latest Alumni news and events and make sure that you register with us to receive even more exlusive Alumni content (including news of former class mates!).</h4>
                </div>
            </div>

            <div class="row alumni-signature">
                <div class="col-md-12">
                    <img src="{{ asset('images/Signature.png') }}">
                </div>
            </div>
        </div>

        <div class="become-member-container">
            <div class="row">
                <div class="col-md-6 text">
                    <h1>BECOME AN LST ALUMNI...</h1>

                    <h4>Do you want to access even more exclusive Alumni content including the latest news from your old classmates? Register today to create your free Alumni account</h4>
                </div>

                <div class="col-md-6">
                    <div>
                        <a class="register-btn" href="#">REGISTER FOR FREE</a>
                    </div>

                    <div class="already-registered-alumni">
                        <h4>Already a registered LST Alumni?</h4>

                        <h4>
                            <a href="#">Click here to login</a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="latest-news-container">
            <div class="row title">
                <div class="col-md-12">
                    <h1>LATEST NEWS</h1>
                </div>
            </div>

            <div class="row text">
                <div class="col-md-12">
                    <h3>Keep up to date with the latest news from London School of Theology and the Alumni community.</h3>
                </div>
            </div>

            <div class="row news-container desktop-news-container">
                <div id="ca-container" class="ca-container">
                    <div class="ca-wrapper">
                        <div class="ca-item ca-item-1">
                            <div class="ca-item-main">
                                <div class="ca-icon"></div>

                                <h4>24/03/2018</h4>
                                
                                <h3>Stop factory farming</h3>
                                
                                <h4 class="text">
                                    <span>The greatness of a nation and its moral progress can be judged by the way in which its animals are treated.</span>
                                </h4>

                                <div class="read-more-container">
                                    <h4>
                                        <a class="read-more-btn" href="#">READ MORE</a>
                                    </h4>
                                </div>
                            </div>
                        </div>

                        <div class="ca-item ca-item-2">
                            <div class="ca-item-main">
                                <div class="ca-icon"></div>

                                <h4>24/03/2018</h4>
                                
                                <h3>Respect Life &amp; Rights</h3>
                                
                                <h4 class="text">
                                    <span>I hold that the more helpless a creature, the more entitled it is to protection by man from the cruelty of man.</span>
                                </h4>

                                <div class="read-more-container">
                                    <h4>
                                        <a class="read-more-btn" href="#">READ MORE</a>
                                    </h4>
                                </div>
                            </div>
                        </div>

                        <div class="ca-item ca-item-3">
                            <div class="ca-item-main">
                                <div class="ca-icon"></div>

                                <h4>24/03/2018</h4>
                                
                                <h3>Become 100% meat-free</h3>
                                
                                <h4 class="text">
                                    <span>I feel that spiritual progress does demand at some stage that we should cease to kill our fellow creatures for the satisfaction of our bodily wants.</span>
                                </h4>

                                <div class="read-more-container">
                                    <h4>
                                        <a class="read-more-btn" href="#">READ MORE</a>
                                    </h4>
                                </div>
                            </div>
                        </div>

                        <div class="ca-item ca-item-4">
                            <div class="ca-item-main">
                                <div class="ca-icon"></div>

                                <h4>24/03/2018</h4>
                                
                                <h3>Make a difference</h3>
                                
                                <h4 class="text">
                                    <span>A man is but the product of his thoughts what he thinks, he becomes.</span>
                                </h4>

                                <div class="read-more-container">
                                    <h4>
                                        <a class="read-more-btn" href="#">READ MORE</a>
                                    </h4>
                                </div>
                            </div>
                        </div>

                        <div class="ca-item ca-item-5">
                            <div class="ca-item-main">
                                <div class="ca-icon"></div>

                                <h4>24/03/2018</h4>
                                
                                <h3>Say no to killing</h3>
                                
                                <h4 class="text">
                                    <span>A weak man is just by accident. A strong but non-violent man is unjust by accident.</span>
                                </h4>

                                <div class="read-more-container">
                                    <h4>
                                        <a class="read-more-btn" href="#">READ MORE</a>
                                    </h4>
                                </div>
                            </div>
                        </div>

                        <div class="ca-item ca-item-6">
                            <div class="ca-item-main">
                                <div class="ca-icon"></div>

                                <h4>24/03/2018</h4>
                                
                                <h3>Don't believe the lies</h3>
                                
                                <h4 class="text">
                                    <span>An error does not become truth by reason of multiplied propagation, nor does truth become error because nobody sees it.</span>
                                </h4>

                                <div class="read-more-container">
                                    <h4>
                                        <a class="read-more-btn" href="#">READ MORE</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <a class="see-all-latest-news-btn" href="#">See all Latest News</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row news-container mobile-news-container">
                <div class="main-news">
                    <div class="row">
                        <div class="col-md-12">
                            <img class="news-image" src="{{ asset('images/766862.jpg') }}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <h3>Stop factory farming</h3>

                            <h4>24/03/2018</h4>

                            <h4 class="text">
                                <span>I hold that the more helpless a creature, the more entitled it is to protection by man from the cruelty of man.</span>
                            </h4>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="read-more-container">
                                <h4>
                                    <a class="read-more-btn" href="#">READ MORE</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="submain-news">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-md-12">
                                    <img class="news-image" src="{{ asset('images/766862.jpg') }}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <h3>Stop factory farming</h3>

                                    <h4>24/03/2018</h4>

                                    <h4 class="text">
                                        <span>I hold that the more helpless a creature, the more entitled it is to protection by man from the cruelty of man.</span>
                                    </h4>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="read-more-container">
                                        <h4>
                                            <a class="read-more-btn" href="#">READ MORE</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-md-12">
                                    <img class="news-image" src="{{ asset('images/766862.jpg') }}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <h3>Stop factory farming</h3>

                                    <h4>24/03/2018</h4>

                                    <h4 class="text">
                                        <span>I hold that the more helpless a creature, the more entitled it is to protection by man from the cruelty of man.</span>
                                    </h4>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="read-more-container">
                                        <h4>
                                            <a class="read-more-btn" href="#">READ MORE</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <a class="see-all-latest-news-btn" href="#">See all Latest News</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="testemonial-container">
            <div class="row">
                <div class="col-md-6 testemonial-text">
                    <h3>
                        "My three years at LST had a profound influence on my life. Having been a Christian for only two years, I knew I needed to see my faith and passin for God grounded in a dep understanding of His word."
                    </h3>

                    <h4>
                        STEVE CLIFORD
                    </h4>

                    <h2>
                        General Director of the Evangelical Alliance
                    </h2>
                </div>

                <div class="col-md-6 testimoonial-image">
                </div>
            </div>
        </div>

        <div class="upcoming-events-container">
            <div class="row title">
                <div class="col-md-12">
                    <h1>UPCOMING EVENTS</h1>
                </div>
            </div>

            <div class="row text">
                <div class="col-md-12">
                    <h3>Don`t miss out! Here are the latest events hosted by LST and the Alumni Engagment Team.</h3>
                </div>
            </div>

            <div class="row events-container desktop-events-container">
                <div id="ca-container-events" class="ca-container">
                    <div class="ca-wrapper">
                        <div class="ca-item ca-item-1">
                            <div class="ca-item-main">
                                <div class="ca-icon"></div>

                                <h4>24/03/2018</h4>
                                
                                <h3>Stop factory farming</h3>
                                
                                <h4 class="text">
                                    <span>The greatness of a nation and its moral progress can be judged by the way in which its animals are treated.</span>
                                </h4>

                                <div class="read-more-container">
                                    <h4>
                                        <a class="read-more-btn" href="#">BOOK NOW</a>
                                    </h4>
                                </div>
                            </div>
                        </div>

                        <div class="ca-item ca-item-2">
                            <div class="ca-item-main">
                                <div class="ca-icon"></div>

                                <h4>24/03/2018</h4>
                                
                                <h3>Respect Life &amp; Rights</h3>
                                
                                <h4 class="text">
                                    <span>I hold that the more helpless a creature, the more entitled it is to protection by man from the cruelty of man.</span>
                                </h4>

                                <div class="read-more-container">
                                    <h4>
                                        <a class="read-more-btn" href="#">BOOK NOW</a>
                                    </h4>
                                </div>
                            </div>
                        </div>

                        <div class="ca-item ca-item-3">
                            <div class="ca-item-main">
                                <div class="ca-icon"></div>

                                <h4>24/03/2018</h4>
                                
                                <h3>Become 100% meat-free</h3>
                                
                                <h4 class="text">
                                    <span>I feel that spiritual progress does demand at some stage that we should cease to kill our fellow creatures for the satisfaction of our bodily wants.</span>
                                </h4>

                                <div class="read-more-container">
                                    <h4>
                                        <a class="read-more-btn" href="#">BOOK NOW</a>
                                    </h4>
                                </div>
                            </div>
                        </div>

                        <div class="ca-item ca-item-4">
                            <div class="ca-item-main">
                                <div class="ca-icon"></div>

                                <h4>24/03/2018</h4>
                                
                                <h3>Make a difference</h3>
                                
                                <h4 class="text">
                                    <span>A man is but the product of his thoughts what he thinks, he becomes.</span>
                                </h4>

                                <div class="read-more-container">
                                    <h4>
                                        <a class="read-more-btn" href="#">BOOK NOW</a>
                                    </h4>
                                </div>
                            </div>
                        </div>

                        <div class="ca-item ca-item-5">
                            <div class="ca-item-main">
                                <div class="ca-icon"></div>

                                <h4>24/03/2018</h4>
                                
                                <h3>Say no to killing</h3>
                                
                                <h4 class="text">
                                    <span>A weak man is just by accident. A strong but non-violent man is unjust by accident.</span>
                                </h4>

                                <div class="read-more-container">
                                    <h4>
                                        <a class="read-more-btn" href="#">BOOK NOW</a>
                                    </h4>
                                </div>
                            </div>
                        </div>

                        <div class="ca-item ca-item-6">
                            <div class="ca-item-main">
                                <div class="ca-icon"></div>

                                <h4>24/03/2018</h4>
                                
                                <h3>Don't believe the lies</h3>
                                
                                <h4 class="text">
                                    <span>An error does not become truth by reason of multiplied propagation, nor does truth become error because nobody sees it.</span>
                                </h4>

                                <div class="read-more-container">
                                    <h4>
                                        <a class="read-more-btn" href="#">BOOK NOW</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>       
            </div>

            <div class="row events-container mobile-events-container">
                <div class="main-news">
                    <div class="row">
                        <div class="col-md-12">
                            <img class="news-image" src="{{ asset('images/766862.jpg') }}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <h3>Stop factory farming</h3>

                            <h4>24/03/2018</h4>

                            <h4 class="text">
                                <span>I hold that the more helpless a creature, the more entitled it is to protection by man from the cruelty of man.</span>
                            </h4>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="read-more-container">
                                <h4>
                                    <a class="read-more-btn" href="#">READ MORE</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="submain-news">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-md-12">
                                    <img class="news-image" src="{{ asset('images/766862.jpg') }}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <h3>Stop factory farming</h3>

                                    <h4>24/03/2018</h4>

                                    <h4 class="text">
                                        <span>I hold that the more helpless a creature, the more entitled it is to protection by man from the cruelty of man.</span>
                                    </h4>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="read-more-container">
                                        <h4>
                                            <a class="read-more-btn" href="#">READ MORE</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-md-12">
                                    <img class="news-image" src="{{ asset('images/766862.jpg') }}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <h3>Stop factory farming</h3>

                                    <h4>24/03/2018</h4>

                                    <h4 class="text">
                                        <span>I hold that the more helpless a creature, the more entitled it is to protection by man from the cruelty of man.</span>
                                    </h4>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="read-more-container">
                                        <h4>
                                            <a class="read-more-btn" href="#">READ MORE</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row alumni-devider">
            <div class="custom-container">
                <div class="dashed-line">
                    
                </div>
            </div>   
        </div>

        <div class="meet-our-alumni-container">
            <div class="row title">
                <div class="col-md-12">
                    <h1>MEET OUR ALUMNI</h1>
                </div>
            </div>

            <div class="row text container">
                <div class="col-md-12">
                    <h3>LST Alumni can be found serving God in the church, the mission field and the market place all over the world. Here are just a few of our grads that are doing brilliant work all around the world!</h3>
                </div>
            </div>
        </div>

        <div class="row alumni-devider">
            <div class="custom-container">
                <div class="dashed-line">
                    
                </div>
            </div>   
        </div>

        <div class="alumni-testemonials-container">
            <div class="custom-container">
                <div class="testemonial">
                    <div class="desktop-testemonial">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset('images/mike.png') }}">
                            </div>

                            <div class="col-md-8">
                                <h4 class="headline">Rev. Michael C. Voigts</h4>
                                <h4 class="position">Senior Pastor, Danvile Centenary United Methodist Churc</h4>

                                <p class="text">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                </p>
                            </div> 
                        </div>   
                    </div>
                        
                    <div class="mobile-testemonial">
                        <div class="row">
                            <div class="col-sm-4">
                                <img src="{{ asset('images/mike.png') }}">  
                            </div>

                            <div class="col-sm-8 person-info-container">
                                <h4 class="headline">Rev. Michael C. Voigts</h4>
                                <h4 class="position">Senior Pastor, Danvile Centenary United Methodist Churc</h4>                                    
                            </div>
                        </div>

                        <div class="row text-container">
                            <div class="col-md-12">
                                <p class="text">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row alumni-devider">
            <div class="custom-container">
                <div class="dashed-line">
                    
                </div>
            </div>   
        </div>

        <div class="row panorama-image-container">
            <div class="col-md-12">
                <img src="{{ asset('images/ParallaxImage.png') }}" class="full-width-image">
            </div>
        </div>

        <div class="alumni-benifits-container">
            <div class="custom-container">
                <div class="row title">
                    <div class="col-md-12">
                        <h1>ALUMNI BENEFITS</h1>
                    </div>
                </div>

                <div class="row text container">
                    <div class="col-md-12">
                        <h3>Being a graduate of LST means that you get to enjoy a range of exclusive benefits.</h3>
                    </div>
                </div>

                <div class="row icons">
                    <div class="col-md-3 col-sm-6">
                        <img src="{{ asset('images/Library.png') }}">

                        <div class="title">
                            <h4>Free access</h4>
                        </div>

                        <div class="text">
                            <h4>to the LST library for life!</h4>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <img src="{{ asset('images/Bed.png') }}">

                        <div class="title">
                            <h4>Discounted B&B</h4>
                        </div>

                        <div class="text">
                            <h4>accommodation just outside London!*</h4>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <img src="{{ asset('images/Book.png') }}">

                        <div class="title">
                            <h4>15% off</h4>
                        </div>

                        <div class="text">
                            <h4>all books in the LST bookshop!**</h4>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <img src="{{ asset('images/Mug.png') }}">

                        <div class="title">
                            <h4>20% off</h4>
                        </div>

                        <div class="text">
                            <h4>all LST merchandise!***</h4>
                        </div>
                    </div>
                </div>

                <div class="row footnotes">
                    <div class="col-md-12">
                        <p>
                            *Price is £30 per person per night. Rate is subject to change. Normal rates apply for non-alumni.
                            **Offer excludes books already on special offer. Please email bookshop@lst.ac.uk to place an order.
                            ***View items in the LST online shop and then email connect@lst.ac.uk to place an order.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="essential-thinking-container">
            <div class="row image-container">
                <div class="row title">
                    <div class="col-md-12">
                        <h1>ESSENTIAL THINKING FROM LST</h1>
                    </div>
                </div>

                <div class="row content">
                    <div class="col-md-6">
                        <h3 class="text">
                            LST is the home of essential theological thinking and we place the best of this within LST Insight - our twice yearly magazine. Prepare your mind to think...
                        </h3>
                    </div>

                    <div class="col-md-6 buttons-container">
                        <div>
                            <a class="view-insight-btn" href="#">VIEW INSIGHT</a>
                        </div>

                        <div class="next-issue">
                            <a class="next-issue-btn" href="#">REQUEST NEXT ISSUE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="get-involved-container">
            <div class="custom-container">
                <div class="row title">
                    <div class="col-md-12">
                        <h1>GET INVOLVED</h1>
                    </div>
                </div>

                <div class="row text container">
                    <div class="col-md-12">
                        <h3>There are many ways that you can support the ongoing ministry of London School of Theology. Why not get in touch with us today?</h3>
                    </div>
                </div>

                <div class="row icons">
                    <div class="col-md-4">
                        <div class="image-cicrle">
                            <img src="{{ asset('images/Church.png') }}">
                        </div>

                        <div class="title">
                            <h4>CHURCH PARTNERSHIP</h4>
                        </div>

                        <div class="text">
                            <h4>Discover how we can partner with your church to equip your congregation.</h4>
                        </div>

                        <div class="learn-more-container">
                            <a class="learn-more-btn" href="#">LEARN MORE</a>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="image-cicrle">
                            <img src="{{ asset('images/board_icon.png') }}">
                        </div>

                        <div class="title">
                            <h4>MENTORING STUDENTS</h4>
                        </div>

                        <div class="text">
                            <h4>Did you enter a specific vocation (e.g. chaplaincy) after LST and feel in the position to pass some of this forward to a current student?</h4>
                        </div>

                        <div class="learn-more-container">
                            <a class="learn-more-btn" href="#">LEARN MORE</a>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="image-cicrle">
                            <img src="{{ asset('images/Volunteer.png') }}">
                        </div>

                        <div class="title">
                            <h4>VOLUNTEER</h4>
                        </div>

                        <div class="text">
                            <h4>Do you have a certain area of expertise that you could offer to LST for a few hours a week? e.g. painting and decorating, admin work.</h4>
                        </div>

                        <div class="learn-more-container">
                            <a class="learn-more-btn" href="#">LEARN MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row camp-image-container">
            <div class="col-md-12 camp-image">
            </div>
        </div>

        <div class="donate-container">
            <div class="row">
                <div class="col-sm-8 text-container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="title">DONATE</h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="text">
                                Without the support of our Friends and Alumni, LST would not be able to do the work we do. Why not consider a monthly gift towards our ministry and help the next generation of students to experience LST?
                            </h4>
                        </div>
                    </div>

                    <div class="row donate-learn-more-container">
                        <div class="col-md-12">
                            <a class="donate-learn-more-btn" href="#">LEARN MORE</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 donate-image">
                    
                </div>
            </div>
        </div>

        <div class="contact-us-container">
            <div class="custom-container">
                <div class="row title">
                    <div class="col-md-12">
                        <h1>CONTACT US</h1>
                    </div>
                </div>

                <div class="row text container">
                    <div class="col-md-12">
                        <h3>Got a question? Send us a message and a member of our Engagement Team will be in touch with you very soon!</h3>
                    </div>
                </div>

                <div class="row filds-container">
                    <div class="col-md-6">
                        <div class="">
                            <input type="input" class="input-field" name="name" placeholder="Name" />
                        </div>

                        <div class="">
                            <input type="input" class="input-field" name="email" placeholder="Email address" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="">
                            <textarea class="message-field" placeholder="Your Message" name="message"></textarea>
                        </div>
                    </div>
                </div>

                <div class="row send-btn-container">
                    <div class="col-md-12">
                        <input type="button" class="send-message-btn" name="send-message-btn" value="SEND">
                    </div>
                </div>
            </div>   
        </div>

        <div class="footer-container">
            <div class="row icons">
                <div class="col-md-8">
                    
                </div>

                <div class="col-md-4 right-text-container">
                    <h4>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </h4>
                </div>
            </div>

            <div class="row contact-info">
                <div class="col-md-12">
                    <h3>Engagment Team, London School of Theology, Green Lane, Northwood, HA6 2UW | alumni@lst.ac.uk | 01923 456000</h3>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.contentcarousel.js"></script>
<script type="text/javascript">
    $('#ca-container').contentcarousel();
    $('#ca-container-events').contentcarousel();
</script>