@include('layouts.mainsite.header')
                <section class="section section-main-header page__section-main-header">
                    <div class="delimiter section__delimiter section__delimiter--bottom">
                        <div class="delimiter__times delimiter__times--left"></div>
                        <div class="delimiter__times delimiter__times--right"></div>
                        <div class=delimiter__triangle></div>
                    </div>
                    <div class=container>
                        <div class=section-main-header__inner>
                            <h1 class="title-h2 section-main-header__title-h2"> About Company </h1>
                        </div>
                    </div>
                </section>
                <section class="section section-mission page-company__section-mission">
                    <div class=container>
                        <div class=section-mission__inner>
                            <div class=section-mission__left>
                                <div class="contents-group section-mission__contents-group">
                                    <div class="sub-title color-green contents-group__sub-title"> First introduction
                                    </div>
                                    <h2 class="title-h2 contents-group__title-h2"> Cortex Platform </h2>
                                    <div class=contents-group__content> A new financial instrument that allows online
                                        investments to effectively and safely represent the interests of financial
                                        investors in the cryptocurrency trading world. The Cortex offers automated
                                        cryptocurrency trading solutions using an Artificial Intelligence. The
                                        Cortex-Trade is a product of high trading technologies. </div>
                                    <div class=contents-group__content> We all want our investments to work as
                                        efficiently as possible. And our the Cortex AI Trading investment platform,
                                        offers clear benefits to those investing in automated trading. Without special
                                        knowledge of arbitration trading processes. The most efficient, simple and
                                        convenient solutions from the British company Cortex-Trade. </div>
                                </div>
                            </div>
                            <div class=section-mission__right>
                                <div class="yt-video yt-video--soon section-mission__yt-video">
                                    <div class="yt-video__inner ">
                                        <div class="yt-play-btn yt-video__yt-play-btn"><svg width=30 height=30
                                                class=yt-play-btn__icon>
                                                <use xlink:href=#yt-play></use>
                                            </svg> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div id=js-first>
                    <section class="section section-steps page-company__section-steps js-scrollable">
                        <div class=container>
                            <div class="contents-group section-steps__contents-group">
                                <div class="sub-title color-green contents-group__sub-title"> How to start? </div>
                                <h2 class="title-h2 contents-group__title-h2"> Just 4 simple strides </h2>
                            </div>
                            <div class="main-steps-group section-steps__main-steps-group">
                                <div class=main-steps-group__inner id=js-steps-slider>
                                    <div class=main-steps-group__cell>
                                        <div class="step-card main-steps-group__step-card">
                                            <div class=step-card__inner>
                                                <div class="step-widget step-card__step-widget"> Stride 1 </div>
                                                <div class="title-h4 step-card__title-h4"> Create <br> trading account
                                                </div>
                                                <div class=step-card__content> Register trading account on the platform
                                                    to start any investment activity. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=main-steps-group__cell>
                                        <div class="step-card main-steps-group__step-card">
                                            <div class=step-card__inner>
                                                <div class="step-widget step-card__step-widget"> Stride 2 </div>
                                                <div class="title-h4 step-card__title-h4"> Try the DEMO <br> version
                                                </div>
                                                <div class=step-card__content> Get $2,000 to your DEMO account and test
                                                    your profit dynamics personally. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=main-steps-group__cell>
                                        <div class="step-card main-steps-group__step-card">
                                            <div class=step-card__inner>
                                                <div class="step-widget step-card__step-widget"> Stride 3 </div>
                                                <div class="title-h4 step-card__title-h4"> Make your own <br> investment
                                                </div>
                                                <div class=step-card__content> Make investments using any trading bot
                                                    from the Cortex AI Trading. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=main-steps-group__cell>
                                        <div class="step-card main-steps-group__step-card">
                                            <div class=step-card__inner>
                                                <div class="step-widget step-card__step-widget"> Stride 4 </div>
                                                <div class="title-h4 step-card__title-h4"> Get and <br> withdraw profit
                                                </div>
                                                <div class=step-card__content> The Cortex AI Trading. Your confidence in
                                                    the future and your profits already today. </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <script>
                        var stepsSliderSettings = {
                            mobileFirst: !0,
                            infinite: !1,
                            slidesToScroll: 1,
                            arrows: !1,
                            dots: !0,
                            responsive: [{
                                breakpoint: 768,
                                settings: {
                                    slidesToShow: 2
                                }
                            }, {
                                breakpoint: 1024,
                                settings: {
                                    slidesToShow: 3
                                }
                            }, {
                                breakpoint: 1280,
                                settings: 'unslick'
                            }]
                        };

                        function handleStepsSliderInit() {
                            var $slider = $('#js-steps-slider'),
                                windowWidth = window.innerWidth;
                            if (windowWidth < 1280 && !$slider.hasClass('slick-initialized')) {
                                $slider.slick(stepsSliderSettings)
                            }
                        }
                        pageInits.push(function () {
                            $('#js-steps-slider').slick(stepsSliderSettings);
                            $(window).on('resize', handleStepsSliderInit)
                        });
                        pageDestroys.push(function () {
                            $('#js-steps-slider').slick('unslick');
                            $(window).off('resize', handleStepsSliderInit)
                        })

                    </script>
                    <section class="section section-how-trading page-company__section-how-trading js-scrollable">
                        <div class=container>
                            <div class=section-how-trading__inner>
                                <div class=section-how-trading__left>
                                    <div class="contents-group section-how-trading__contents-group">
                                        <div class="sub-title color-green contents-group__sub-title"> What tech we use
                                        </div>
                                        <h2 class="title-h2 contents-group__title-h2"> Advantage of our technologies
                                        </h2>
                                        <div class=contents-group__content> Cortex-Trade uses automated arbitration
                                            trading, which is controlled by Artificial Intelligence. And this means that
                                            cryptocurrency trading is performed unmistakably, bringing benefits and
                                            profits to our investors in 24/7 mode. </div>
                                        <div class=contents-group__footer><a href=auth/signup.html
                                                class="btn btn-success btn-lg btn-xs-block" data-pjax=""><span>Get
                                                    Cortex Account</span> <svg width=18 height=16>
                                                    <use xlink:href=#arrow-right></use>
                                                </svg></a> </div>
                                    </div>
                                </div>
                                <div class=section-how-trading__right>
                                    <div class=how-trading-faq-group id=accordion>
                                        <div class="how-trading-faq-card how-trading-faq-group__how-trading-faq-card">
                                            <button class=how-trading-faq-card__header data-toggle=collapse
                                                data-target=#collapse-1><span class=how-trading-faq-card__title>
                                                    Advantages of the AI usage </span> <svg width=16 height=16
                                                    class=how-trading-faq-card__carret>
                                                    <use xlink:href=#carret-down></use>
                                                </svg></button>
                                            <div id=collapse-1 class="how-trading-faq-card__collapse collapse show"
                                                data-parent=#accordion>
                                                <div class=how-trading-faq-card__body>
                                                    <ul class=dotted-list>
                                                        <li class=dotted-list__item> Arbitration trading is controlled
                                                            by Artificial Intelligence, which gives an uninterrupted
                                                            flow of processed data. </li>
                                                        <li class=dotted-list__item> Full control over information flows
                                                            at any time. </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="how-trading-faq-card how-trading-faq-group__how-trading-faq-card">
                                            <button class="how-trading-faq-card__header collapsed" data-toggle=collapse
                                                data-target=#collapse-2><span class=how-trading-faq-card__title> Market
                                                    liquidity </span> <svg width=16 height=16
                                                    class=how-trading-faq-card__carret>
                                                    <use xlink:href=#carret-down></use>
                                                </svg></button>
                                            <div id=collapse-2 class="how-trading-faq-card__collapse collapse"
                                                data-parent=#accordion>
                                                <div class=how-trading-faq-card__body>
                                                    <ul class=dotted-list>
                                                        <li class=dotted-list__item> Cortex AI Trading improves market
                                                            liquidity and market stability by rapidly exploiting
                                                            imbalances. </li>
                                                        <li class=dotted-list__item> Controls fair pricing and reduces
                                                            the likelihood of prices manipulation. </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="how-trading-faq-card how-trading-faq-group__how-trading-faq-card">
                                            <button class="how-trading-faq-card__header collapsed" data-toggle=collapse
                                                data-target=#collapse-3><span class=how-trading-faq-card__title> Market
                                                    stability </span> <svg width=16 height=16
                                                    class=how-trading-faq-card__carret>
                                                    <use xlink:href=#carret-down></use>
                                                </svg></button>
                                            <div id=collapse-3 class="how-trading-faq-card__collapse collapse"
                                                data-parent=#accordion>
                                                <div class=how-trading-faq-card__body>
                                                    <ul class=dotted-list>
                                                        <li class=dotted-list__item> Cortex ensures the efficiency and
                                                            integrity of financial markets by identifying and exploiting
                                                            price differences using AI. </li>
                                                        <li class=dotted-list__item> Equalizes prices in different
                                                            markets, reducing the inefficiency of the cryptocurrency
                                                            market as a whole. </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="how-trading-faq-card how-trading-faq-group__how-trading-faq-card">
                                            <button class="how-trading-faq-card__header collapsed" data-toggle=collapse
                                                data-target=#collapse-4><span class=how-trading-faq-card__title> More
                                                    market participants </span> <svg width=16 height=16
                                                    class=how-trading-faq-card__carret>
                                                    <use xlink:href=#carret-down></use>
                                                </svg></button>
                                            <div id=collapse-4 class="how-trading-faq-card__collapse collapse"
                                                data-parent=#accordion>
                                                <div class=how-trading-faq-card__body>
                                                    <ul class=dotted-list>
                                                        <li class=dotted-list__item> Cortex contributes to market
                                                            efficiency by narrowing spreads and reducing price
                                                            discrepancies. </li>
                                                        <li class=dotted-list__item> Makes conditions and fairness of
                                                            pricing mechanisms equal, which attracts new players. </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="how-trading-faq-card how-trading-faq-group__how-trading-faq-card">
                                            <button class="how-trading-faq-card__header collapsed" data-toggle=collapse
                                                data-target=#collapse-5><span class=how-trading-faq-card__title>
                                                    Diversification and safety </span> <svg width=16 height=16
                                                    class=how-trading-faq-card__carret>
                                                    <use xlink:href=#carret-down></use>
                                                </svg></button>
                                            <div id=collapse-5 class="how-trading-faq-card__collapse collapse"
                                                data-parent=#accordion>
                                                <div class=how-trading-faq-card__body>
                                                    <ul class=dotted-list>
                                                        <li class=dotted-list__item> Cortex AI Trading provides an
                                                            opportunity for its users to diversify investment portfolios
                                                            by exploring different markets and asset classes. </li>
                                                        <li class=dotted-list__item> Adaptive AI algorithms help ensure
                                                            fair trading practices and market integrity. </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="section section-highlights page-company__section-highlights js-scrollable">
                        <div class=container>
                            <div class="contents-group section-highlights__contents-group">
                                <div class="sub-title color-green contents-group__sub-title"> Roadmap </div>
                                <h2 class="title-h2 contents-group__title-h2"> Main aims </h2>
                            </div>
                        </div>
                        <div class=section-highlights__body>
                            <div
                                class="delimiter section__delimiter section-highlights__delimiter delimiter section__delimiter--center">
                                <div class="delimiter__times delimiter__times--left"></div>
                                <div class="delimiter__times delimiter__times--right"></div>
                            </div>
                            <div class=container>
                                <div class="roadmap-group section-highlights__roadmap-group">
                                    <div class="roadmap-group__inner  roadmap-group__inner--first"
                                        id=js-roadmap-slider-1>
                                        <div
                                            class="roadmap-cell roadmap-group__roadmap-cell roadmap-group__roadmap-cell--top">
                                            <div class="roadmap-left-line roadmap-cell__roadmap-left-line">
                                                <div class=roadmap-left-line__round></div>
                                            </div>
                                            <div class=roadmap-card>
                                                <div class=roadmap-card__title> August 2025 </div>
                                                <div class=roadmap-card__sub-title> Software upgrades </div>
                                                <div class=roadmap-card__content> Perform the first large-scale software
                                                    modernization which serving the work and control of the AI tasks.
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="roadmap-cell roadmap-group__roadmap-cell roadmap-group__roadmap-cell--first">
                                            <div class="roadmap-left-line roadmap-cell__roadmap-left-line">
                                                <div class=roadmap-left-line__round></div>
                                            </div>
                                            <div class=roadmap-card>
                                                <div class=roadmap-card__title> February 2026 </div>
                                                <div class=roadmap-card__sub-title> AI Boost </div>
                                                <div class=roadmap-card__content> Implementation of new AI blocks to
                                                    expand trading activities not only at the cryptocurrency market.
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="roadmap-cell roadmap-group__roadmap-cell roadmap-group__roadmap-cell--top">
                                            <div class="roadmap-left-line roadmap-cell__roadmap-left-line">
                                                <div class=roadmap-left-line__round></div>
                                            </div>
                                            <div class=roadmap-card>
                                                <div class=roadmap-card__title> September 2026 </div>
                                                <div class=roadmap-card__sub-title> More options </div>
                                                <div class=roadmap-card__content> Expansion of financial services with
                                                    opportunities to increase investment turnover and investment
                                                    insurance. </div>
                                            </div>
                                        </div>
                                        <div
                                            class="roadmap-cell roadmap-group__roadmap-cell roadmap-group__roadmap-cell--first">
                                            <div class="roadmap-left-line roadmap-cell__roadmap-left-line">
                                                <div class=roadmap-left-line__round></div>
                                            </div>
                                            <div class=roadmap-card>
                                                <div class=roadmap-card__title> April 2027 </div>
                                                <div class=roadmap-card__sub-title> System improvement </div>
                                                <div class=roadmap-card__content> Technical modernization of servers
                                                    hosting the main data bases and improvement of technological
                                                    parameters in general. </div>
                                            </div>
                                        </div>
                                        <div
                                            class="roadmap-cell roadmap-group__roadmap-cell roadmap-group__roadmap-cell--top">
                                            <div class="roadmap-left-line roadmap-cell__roadmap-left-line">
                                                <div class=roadmap-left-line__round></div>
                                            </div>
                                            <div class=roadmap-card>
                                                <div class=roadmap-card__title> October 2027 </div>
                                                <div class=roadmap-card__sub-title> Exchange services </div>
                                                <div class=roadmap-card__content> The resource basement creation to
                                                    strengthen and further promote the service in accordance with the
                                                    exchange requirements of the market. </div>
                                            </div>
                                        </div>
                                        <div
                                            class="roadmap-cell roadmap-group__roadmap-cell roadmap-group__roadmap-cell--first">
                                            <div class="roadmap-left-line roadmap-cell__roadmap-left-line">
                                                <div class=roadmap-left-line__round></div>
                                            </div>
                                            <div class=roadmap-card>
                                                <div class=roadmap-card__title> December 2027 </div>
                                                <div class=roadmap-card__sub-title> Team expansion </div>
                                                <div class=roadmap-card__content> The business growing achievements and
                                                    the improvement of technologies is impossible without a sufficient
                                                    number of qualified employees. </div>
                                            </div>
                                        </div>
                                        <div
                                            class="roadmap-cell roadmap-group__roadmap-cell roadmap-group__roadmap-cell--top">
                                            <div class="roadmap-left-line roadmap-cell__roadmap-left-line">
                                                <div class=roadmap-left-line__round></div>
                                            </div>
                                            <div class=roadmap-card>
                                                <div class=roadmap-card__title> March 2028 </div>
                                                <div class=roadmap-card__sub-title> New data center </div>
                                                <div class=roadmap-card__content> It is planned to complete the
                                                    construction and debugging of all components of our new data center,
                                                    which will strengthen our informational independence. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=roadmap-group__lines>
                                        <div class=roadmap-group__line></div>
                                        <div class=roadmap-group__line></div>
                                        <div class=roadmap-group__line></div>
                                        <div class=roadmap-group__line></div>
                                        <div class=roadmap-group__line></div>
                                    </div>
                                    <div class="roadmap-group__inner roadmap-group__inner--second"
                                        id=js-roadmap-slider-2>
                                        <div
                                            class="roadmap-cell roadmap-group__roadmap-cell roadmap-group__roadmap-cell--second">
                                            <div class="roadmap-left-line roadmap-cell__roadmap-left-line">
                                                <div class=roadmap-left-line__round></div>
                                            </div>
                                            <div class=roadmap-card>
                                                <div class=roadmap-card__title> August 2025 </div>
                                                <div class=roadmap-card__sub-title> Software upgrades </div>
                                                <div class=roadmap-card__content> Perform the first large-scale software
                                                    modernization which serving the work and control of the AI tasks.
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="roadmap-cell roadmap-group__roadmap-cell roadmap-group__roadmap-cell--bottom">
                                            <div class="roadmap-left-line roadmap-cell__roadmap-left-line">
                                                <div class=roadmap-left-line__round></div>
                                            </div>
                                            <div class=roadmap-card>
                                                <div class=roadmap-card__title> February 2026 </div>
                                                <div class=roadmap-card__sub-title> AI Boost </div>
                                                <div class=roadmap-card__content> Implementation of new AI blocks to
                                                    expand trading activities not only at the cryptocurrency market.
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="roadmap-cell roadmap-group__roadmap-cell roadmap-group__roadmap-cell--second">
                                            <div class="roadmap-left-line roadmap-cell__roadmap-left-line">
                                                <div class=roadmap-left-line__round></div>
                                            </div>
                                            <div class=roadmap-card>
                                                <div class=roadmap-card__title> September 2026 </div>
                                                <div class=roadmap-card__sub-title> More options </div>
                                                <div class=roadmap-card__content> Expansion of financial services with
                                                    opportunities to increase investment turnover and investment
                                                    insurance. </div>
                                            </div>
                                        </div>
                                        <div
                                            class="roadmap-cell roadmap-group__roadmap-cell roadmap-group__roadmap-cell--bottom">
                                            <div class="roadmap-left-line roadmap-cell__roadmap-left-line">
                                                <div class=roadmap-left-line__round></div>
                                            </div>
                                            <div class=roadmap-card>
                                                <div class=roadmap-card__title> April 2027 </div>
                                                <div class=roadmap-card__sub-title> System improvement </div>
                                                <div class=roadmap-card__content> Technical modernization of servers
                                                    hosting the main data bases and improvement of technological
                                                    parameters in general. </div>
                                            </div>
                                        </div>
                                        <div
                                            class="roadmap-cell roadmap-group__roadmap-cell roadmap-group__roadmap-cell--second">
                                            <div class="roadmap-left-line roadmap-cell__roadmap-left-line">
                                                <div class=roadmap-left-line__round></div>
                                            </div>
                                            <div class=roadmap-card>
                                                <div class=roadmap-card__title> October 2027 </div>
                                                <div class=roadmap-card__sub-title> Exchange services </div>
                                                <div class=roadmap-card__content> The resource basement creation to
                                                    strengthen and further promote the service in accordance with the
                                                    exchange requirements of the market. </div>
                                            </div>
                                        </div>
                                        <div
                                            class="roadmap-cell roadmap-group__roadmap-cell roadmap-group__roadmap-cell--bottom">
                                            <div class="roadmap-left-line roadmap-cell__roadmap-left-line">
                                                <div class=roadmap-left-line__round></div>
                                            </div>
                                            <div class=roadmap-card>
                                                <div class=roadmap-card__title> December 2027 </div>
                                                <div class=roadmap-card__sub-title> Team expansion </div>
                                                <div class=roadmap-card__content> The business growing achievements and
                                                    the improvement of technologies is impossible without a sufficient
                                                    number of qualified employees. </div>
                                            </div>
                                        </div>
                                        <div
                                            class="roadmap-cell roadmap-group__roadmap-cell roadmap-group__roadmap-cell--second">
                                            <div class="roadmap-left-line roadmap-cell__roadmap-left-line">
                                                <div class=roadmap-left-line__round></div>
                                            </div>
                                            <div class=roadmap-card>
                                                <div class=roadmap-card__title> March 2028 </div>
                                                <div class=roadmap-card__sub-title> New data center </div>
                                                <div class=roadmap-card__content> It is planned to complete the
                                                    construction and debugging of all components of our new data center,
                                                    which will strengthen our informational independence. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=roadmap-group__controls><button
                                            class="arrow-btn roadmap-group__arrow-btn roadmap-group__arrow-btn--left"
                                            id=js-roadmap-slider-left><svg width=20 height=20>
                                                <use xlink:href=#carret-left></use>
                                            </svg> </button>
                                        <div class=roadmap-group__dots id=js-roadmap-slider-dots></div> <button
                                            class="arrow-btn roadmap-group__arrow-btn roadmap-group__arrow-btn--right"
                                            id=js-roadmap-slider-right><svg width=20 height=20>
                                                <use xlink:href=#carret-right></use>
                                            </svg> </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <script>
                        function createHighlightsSettings(isMain) {
                            return {
                                slidesToShow: 5,
                                slidesToScroll: 2,
                                dots: !1,
                                arrows: !1,
                                swipe: !1,
                                draggable: !1,
                                touchMove: !1,
                                accessibility: !1,
                                swipeToSlide: !1,
                                infinite: !1,
                                appendDots: isMain ? $('#js-roadmap-slider-dots') : null,
                                asNavFor: isMain ? '#js-roadmap-slider-2' : '#js-roadmap-slider-1',
                                responsive: [{
                                    breakpoint: 1279,
                                    settings: {
                                        slidesToShow: 3
                                    }
                                }, {
                                    breakpoint: 767,
                                    settings: {
                                        slidesToShow: 2,
                                        slidesToScroll: 1,
                                        dots: !0,
                                        asNavFor: null
                                    }
                                }, {
                                    breakpoint: 479,
                                    settings: {
                                        slidesToShow: 1,
                                        slidesToScroll: 1,
                                        dots: !0,
                                        asNavFor: null
                                    }
                                }]
                            }
                        }

                        function updateHighlightsNavButtons($slider, $prevBtn, $nextBtn) {
                            var slick = $slider.slick('getSlick');
                            var hideLeft = slick.currentSlide === 0;
                            var hideRight = slick.currentSlide >= slick.slideCount - slick.options.slidesToShow;
                            hideLeft ? $prevBtn.css({
                                opacity: 0.5
                            }) : $prevBtn.css({
                                opacity: 1
                            });
                            hideRight ? $nextBtn.css({
                                opacity: 0.5
                            }) : $nextBtn.css({
                                opacity: 1
                            })
                        }
                        pageInits.push(function () {
                            var $firstSlider = $('#js-roadmap-slider-1'),
                                $secondSlider = $('#js-roadmap-slider-2'),
                                $leftBtn = $('#js-roadmap-slider-left'),
                                $rightBtn = $('#js-roadmap-slider-right');
                            $firstSlider.on('afterChange', function () {
                                updateHighlightsNavButtons($firstSlider, $leftBtn, $rightBtn)
                            });
                            $firstSlider.slick(createHighlightsSettings(!0));
                            $secondSlider.slick(createHighlightsSettings(!1));
                            updateHighlightsNavButtons($firstSlider, $leftBtn, $rightBtn);
                            $leftBtn.on('click', function () {
                                $firstSlider.slick('slickPrev')
                            });
                            $rightBtn.on('click', function () {
                                $firstSlider.slick('slickNext')
                            })
                        });
                        pageDestroys.push(function () {
                            $('#js-roadmap-slider-1').slick('unslick');
                            $('#js-roadmap-slider-2').slick('unslick')
                        })

                    </script>
                    <section class="section section-certs page-company__section-certs js-scrollable">
                        <div class=container>
                            <div class="contents-group section-certs__contents-group">
                                <div class="sub-title color-green contents-group__sub-title"> Company openness </div>
                                <h2 class="title-h2 contents-group__title-h2"> Legal Compliance </h2>
                                <div class=contents-group__content> Cortex AI Trading is an innovative company that has
                                    its own traditions and values the trust of its customers. And in return, we also
                                    maximize our transparency and tolerance and do our best to ensure that our
                                    activities never go beyond the norms of business behavior established by law. </div>
                            </div>
                            <div class="cert-cards-group section-certs__cert-cards-group">
                                <div class=cert-cards-group__inner>
                                    <div class=cert-cards-group__cell>
                                        <div class="cert-card cert-cards-group__cert-card">
                                            <div class=cert-card__inner>
                                                <div class=cert-card__header>
                                                    <picture>
                                                        <source srcset=theme/img/webp/cert-1.webp type=image/webp><img
                                                            src=theme/img/cert-1.png alt=""> </picture>
                                                </div>
                                                <div class=cert-card__body>
                                                    <div class=cert-card__title> Registration certificate </div>
                                                    <div class=cert-card__content> The company was registered in the UK
                                                        and has the corresponding <a
                                                            href=https://find-and-update.company-information.service.gov.uk/company/16338102
                                                            target=_blank class=color-green> 16338102 </a> number in the
                                                        registry. </div>
                                                    <div class=cert-card__footer><a href=theme/static/CERTIFICATE.pdf
                                                            target=_blank
                                                            class="btn btn-success btn-lg btn-xs-block"><span>More
                                                                Infos</span> <svg width=18 height=16>
                                                                <use xlink:href=#arrow-right></use>
                                                            </svg></a> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=cert-cards-group__cell>
                                        <div class="cert-card cert-cards-group__cert-card">
                                            <div class=cert-card__inner>
                                                <div class=cert-card__header>
                                                    <picture>
                                                        <source srcset=theme/img/webp/cert-2.webp type=image/webp><img
                                                            src=theme/img/cert-2.png alt=""> </picture>
                                                </div>
                                                <div class=cert-card__body>
                                                    <div class=cert-card__title> Certificate of incorporation <br> of a
                                                        private limited company </div>
                                                    <div class=cert-card__content> Cortex AI Trading is a British
                                                        traditions of a successful business performing. </div>
                                                    <div class=cert-card__footer><a
                                                            href="theme/static/CORTEX%20TRADE%20LTD.pdf" target=_blank
                                                            class="btn btn-success btn-lg btn-xs-block"><span>More
                                                                Infos</span> <svg width=18 height=16>
                                                                <use xlink:href=#arrow-right></use>
                                                            </svg></a> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=cert-cards-group__cell>
                                        <div class="cert-card cert-cards-group__cert-card">
                                            <div class=cert-card__inner>
                                                <div class=cert-card__header>
                                                    <picture>
                                                        <source srcset=theme/img/webp/cert-3.webp type=image/webp><img
                                                            src=theme/img/cert-3.png alt=""> </picture>
                                                </div>
                                                <div class=cert-card__body>
                                                    <div class=cert-card__title> Memorandum and <br> articles of
                                                        association </div>
                                                    <div class=cert-card__content> A new level of trust between Cortex
                                                        AI Trading and our customers. </div>
                                                    <div class=cert-card__footer><a href=theme/static/MEMARTS.pdf
                                                            target=_blank
                                                            class="btn btn-success btn-lg btn-xs-block"><span>More
                                                                Infos</span> <svg width=18 height=16>
                                                                <use xlink:href=#arrow-right></use>
                                                            </svg></a> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="section section-team page-company__section-team js-scrollable">
                        <div class=container>
                            <div class=section-team__header>
                                <div class="contents-group section-team__contents-group">
                                    <div class="sub-title color-green contents-group__sub-title"> Cortex Core </div>
                                    <h2 class="title-h2 contents-group__title-h2"> Our team </h2>
                                </div>
                                <div class=team-nav-slider-block>
                                    <div class=team-nav-slider-block__inner id=js-team-nav-slider>
                                        <div class=team-nav-slider-block__cell><img src=theme/img/employee-1-xs.jpg
                                                alt="Sandr Kumar"> </div>
                                        <div class=team-nav-slider-block__cell><img src=theme/img/employee-2-xs.jpg
                                                alt="Thomas Eisenspiegel"> </div>
                                        <div class=team-nav-slider-block__cell><img src=theme/img/employee-3-xs.jpg
                                                alt="Sandra Forst"> </div>
                                        <div class=team-nav-slider-block__cell><img src=theme/img/employee-4-xs.jpg
                                                alt="Amos Katsenelson"> </div>
                                        <div class=team-nav-slider-block__cell><img src=theme/img/employee-5-xs.jpg
                                                alt="Alex Nowotny"> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-slider-block section-team__team-slider-block"><button
                                class="arrow-btn team-slider-block__arrow-btn team-slider-block__arrow-btn--left"
                                id=js-team-slider-left><svg width=20 height=20>
                                    <use xlink:href=#carret-left></use>
                                </svg> </button> <button
                                class="arrow-btn team-slider-block__arrow-btn team-slider-block__arrow-btn--right"
                                id=js-team-slider-right><svg width=20 height=20>
                                    <use xlink:href=#carret-right></use>
                                </svg> </button>
                            <div class=team-slider-block__inner id=js-team-slider>
                                <div>
                                    <div class=team-slider-block__slide>
                                        <div class="team-card team-slider-block__team-card">
                                            <div class=team-card__inner>
                                                <div class=team-card__left>
                                                    <picture class=team-card__img>
                                                        <source srcset=theme/img/webp/employee-1.webp type=image/webp
                                                            class=team-card__img media="(min-width: 768px)"><img
                                                            src=theme/img/employee-1.jpg alt="Sandr Kumar"
                                                            class=team-card__img> </picture>
                                                </div>
                                                <div class=team-card__right>
                                                    <div class=team-card__title> Sandr Kumar </div>
                                                    <div class=team-card__sub-title> CAIO </div>
                                                    <div class=team-card__content> CAIO (Chief Artificial Intelligence
                                                        Officer) is the head of the company in the field of Artificial
                                                        Intelligence. Director of Artificial Intelligence. Sandr is
                                                        responsible for defining the company&#039;s overall AI strategy,
                                                        including the design, development and implementation of AI-based
                                                        technologies. </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=team-slider-block__slide>
                                        <div class="team-card team-slider-block__team-card">
                                            <div class=team-card__inner>
                                                <div class=team-card__left>
                                                    <picture class=team-card__img>
                                                        <source srcset=theme/img/webp/employee-2.webp type=image/webp
                                                            class=team-card__img media="(min-width: 768px)"><img
                                                            src=theme/img/employee-2.jpg alt="Thomas Eisenspiegel"
                                                            class=team-card__img> </picture>
                                                </div>
                                                <div class=team-card__right>
                                                    <div class=team-card__title> Thomas Eisenspiegel </div>
                                                    <div class=team-card__sub-title> CAO </div>
                                                    <div class=team-card__content> CAO (Chief Accounting Officer) is the
                                                        company&#039;s chief accountant. Thomas is responsible for
                                                        accounting in the company, the formation of accounting policy,
                                                        ensures the functioning of the system of synthetic and
                                                        analytical accounting, the construction of accounting reports,
                                                        provides control over the movement of assets and the fulfillment
                                                        of obligations. </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=team-slider-block__slide>
                                        <div class="team-card team-slider-block__team-card">
                                            <div class=team-card__inner>
                                                <div class=team-card__left>
                                                    <picture class=team-card__img>
                                                        <source srcset=theme/img/webp/employee-3.webp type=image/webp
                                                            class=team-card__img media="(min-width: 768px)"><img
                                                            src=theme/img/employee-3.jpg alt="Sandra Forst"
                                                            class=team-card__img> </picture>
                                                </div>
                                                <div class=team-card__right>
                                                    <div class=team-card__title> Sandra Forst </div>
                                                    <div class=team-card__sub-title> CBDO </div>
                                                    <div class=team-card__content> CBDO (Chief Business Development
                                                        Officer) our Director of Business Development. Sandra has
                                                        extensive and comprehensive knowledge of all issues related to
                                                        the development of the advertising business in order to identify
                                                        new sales prospects, company growth and requirements for our
                                                        products. </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=team-slider-block__slide>
                                        <div class="team-card team-slider-block__team-card">
                                            <div class=team-card__inner>
                                                <div class=team-card__left>
                                                    <picture class=team-card__img>
                                                        <source srcset=theme/img/webp/employee-4.webp type=image/webp
                                                            class=team-card__img media="(min-width: 768px)"><img
                                                            src=theme/img/employee-4.jpg alt="Amos Katsenelson"
                                                            class=team-card__img> </picture>
                                                </div>
                                                <div class=team-card__right>
                                                    <div class=team-card__title> Amos Katsenelson </div>
                                                    <div class=team-card__sub-title> CDO </div>
                                                    <div class=team-card__content> CDO (Chief Data Officer) is our Chief
                                                        Data Officer (information director). Amos is the corporate
                                                        officer responsible for the management of the company and the
                                                        use of information as an asset, through the acquisition of data,
                                                        its processing and analysis, the trading of information and its
                                                        complete protection. </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=team-slider-block__slide>
                                        <div class="team-card team-slider-block__team-card">
                                            <div class=team-card__inner>
                                                <div class=team-card__left>
                                                    <picture class=team-card__img>
                                                        <source srcset=theme/img/webp/employee-5.webp type=image/webp
                                                            class=team-card__img media="(min-width: 768px)"><img
                                                            src=theme/img/employee-5.jpg alt="Alex Nowotny"
                                                            class=team-card__img> </picture>
                                                </div>
                                                <div class=team-card__right>
                                                    <div class=team-card__title> Alex Nowotny </div>
                                                    <div class=team-card__sub-title> CIO </div>
                                                    <div class=team-card__content> CIO (Chief Investment Officer) is our
                                                        investment director. Alex is responsible for the development of
                                                        public relations and for the qualitative growth of corporate
                                                        investment. In addition, Alex is responsible for asset
                                                        management. (ALM management). </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <script>
                        pageInits.push(function () {
                            var $mainSlider = $('#js-team-slider');
                            var $navSlider = $('#js-team-nav-slider');
                            $mainSlider.slick({
                                centerMode: !0,
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                centerPadding: '29%',
                                arrows: !1,
                                dots: !1,
                                draggable: !1,
                                infinite: !0,
                                asNavFor: '#js-team-nav-slider',
                                responsive: [{
                                    breakpoint: 1279,
                                    settings: {
                                        centerPadding: '25%'
                                    }
                                }, {
                                    breakpoint: 767,
                                    settings: {
                                        centerMode: !1,
                                        slidesToShow: 1,
                                        slidesToScroll: 1
                                    }
                                }]
                            });
                            $('#js-team-slider-left').on('click', function () {
                                $mainSlider.slick('slickPrev')
                            });
                            $('#js-team-slider-right').on('click', function () {
                                $mainSlider.slick('slickNext')
                            });
                            $navSlider.slick({
                                slidesToShow: 5,
                                slidesToScroll: 1,
                                focusOnSelect: !0,
                                arrows: !1,
                                dots: !1,
                                draggable: !1,
                                infinite: !1,
                                asNavFor: '#js-team-slider'
                            })
                        });
                        pageDestroys.push(function () {
                            $('#js-team-slider').slick('unslick');
                            $('#js-team-nav-slider').slick('unslick')
                        })

                    </script>
                    <section class="section section-docs page-company__section-docs js-scrollable">
                        <div class=container>
                            <div class="docs-block section-docs__docs-block">
                                <div class="contents-group docs-block__contents-group">
                                    <div class="sub-title color-green contents-group__sub-title"> More Safety </div>
                                    <h2 class="title-h2 contents-group__title-h2"> Advanced technologies <br> of your
                                        protection </h2>
                                </div>
                                <div class=docs-block__inner>
                                    <div class=docs-block__left>
                                        <div
                                            class="docs-feature-widget docs-block__docs-feature-widget docs-block__docs-feature-widget--right">
                                            <div class=docs-feature-widget__inner>
                                                <div class="title-h2 docs-feature-widget__title-h2"><span
                                                        class=color-green>DDOS</span> protection </div>
                                                <div class=docs-feature-widget__content> You get a high-tech web site
                                                    that can withstand most well-known DDoS attacks methods. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=docs-block__middle>
                                        <picture>
                                            <source srcset=theme/img/webp/docs-block-img.webp type=image/webp><img
                                                src=theme/img/docs-block-img.png alt=""> </picture>
                                    </div>
                                    <div class=docs-block__right>
                                        <div
                                            class="docs-feature-widget docs-block__docs-feature-widget docs-block__docs-feature-widget--left">
                                            <div class=docs-feature-widget__inner>
                                                <div class="title-h2 docs-feature-widget__title-h2"><span
                                                        class=color-green>SSL</span> protection </div>
                                                <div class=docs-feature-widget__content> Website data exchanging is
                                                    protected by the latest generation of end-to-end encryption that
                                                    cannot be hacked. </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=docs-block__footer>
                                    <div class="certificate-footer-card docs-block__certificate-footer-card">
                                        <div class=certificate-footer-card__inner>
                                            <div class="title-h5 certificate-footer-card__title-h5"> There is never too
                                                much safety and we create a controlled world of the safe collaboration
                                                with us. </div>
                                            <div class=certificate-footer-card__btn-row><a href=auth/signup.html
                                                    class="btn btn-success btn-lg btn-xs-block" data-pjax=""><span>Get
                                                        Cortex Account</span> <svg width=18 height=16>
                                                        <use xlink:href=#arrow-right></use>
                                                    </svg></a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="section section-robots page-company__section-robots js-scrollable">
                        <div class=container>
                            <div class="header-section-block section-robots__header-section-block">
                                <div class=header-section-block__inner>
                                    <div class=header-section-block__left>
                                        <div class=contents-group>
                                            <div class="sub-title color-green contents-group__sub-title"> Smart
                                                technologies </div>
                                            <h2 class="title-h2 contents-group__title-h2"> More profit <br> with Cortex
                                                AI Trading </h2>
                                        </div>
                                    </div>
                                    <div class=header-section-block__right>
                                        <div class=slider-controls-list>
                                            <div class=slider-controls-list__inner><button
                                                    class="arrow-btn slider-controls-list__arrow-btn"
                                                    id=js-robots-slider-left><svg width=20 height=20>
                                                        <use xlink:href=#carret-left></use>
                                                    </svg> </button>
                                                <div class=slider-controls-list__dots id=js-robots-slider-dots></div>
                                                <button class="arrow-btn slider-controls-list__arrow-btn"
                                                    id=js-robots-slider-right><svg width=20 height=20>
                                                        <use xlink:href=#carret-right></use>
                                                    </svg> </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=section-robots__slider-container>
                            <div class="delimiter section__delimiter">
                                <div class="delimiter__times delimiter__times--left"></div>
                                <div class="delimiter__times delimiter__times--right"></div>
                            </div>
                            <div class="delimiter section__delimiter section__delimiter--bottom">
                                <div class="delimiter__times delimiter__times--left"></div>
                                <div class="delimiter__times delimiter__times--right"></div>
                            </div>
                            <div class=container-max>
                                <div class=robots-slider-block id=js-robots-slider>
                                    <div class=robots-slider-block__slide>
                                        <div class=robots-card>
                                            <div class=robots-card__icon-cell>
                                                <div class=square-icon-gray><i class=sprite-robots-icon-1></i> </div>
                                            </div>
                                            <div class=robots-card__body>
                                                <div class="title-h5 robots-card__title-h5"> More safety </div>
                                                <div class=robots-card__content> The trading bots from Cortex AI Trading
                                                    usage makes it much more efficient and safer to perform trading
                                                    operations on cryptocurrency exchanges, minimizing the risks of the
                                                    investment loss by customers. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=robots-slider-block__slide>
                                        <div class=robots-card>
                                            <div class=robots-card__icon-cell>
                                                <div class=square-icon-gray><i class=sprite-robots-icon-2></i> </div>
                                            </div>
                                            <div class=robots-card__body>
                                                <div class="title-h5 robots-card__title-h5"> More efficiency </div>
                                                <div class=robots-card__content> We use AI in arbitrage trading. And it
                                                    allows trades to be assessed and executed around the clock, 24/7,
                                                    creating maximum efficiency in finalizing deals. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=robots-slider-block__slide>
                                        <div class=robots-card>
                                            <div class=robots-card__icon-cell>
                                                <div class=square-icon-gray><i class=sprite-robots-icon-3></i> </div>
                                            </div>
                                            <div class=robots-card__body>
                                                <div class="title-h5 robots-card__title-h5"> More predictability </div>
                                                <div class=robots-card__content> By performing trading transactions
                                                    using AI, we process a colossal amount of data in minimal periods of
                                                    time, obtaining the most relevant analytical results for possible
                                                    deals. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=robots-slider-block__slide>
                                        <div class=robots-card>
                                            <div class=robots-card__icon-cell>
                                                <div class=square-icon-gray><i class=sprite-robots-icon-4></i> </div>
                                            </div>
                                            <div class=robots-card__body>
                                                <div class="title-h5 robots-card__title-h5"> More profit </div>
                                                <div class=robots-card__content> Constant time management and full
                                                    analytical control maximizes the profits made by investors from the
                                                    money that is in invest-operating under the control of our trading
                                                    bots. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=robots-slider-block__slide>
                                        <div class=robots-card>
                                            <div class=robots-card__icon-cell>
                                                <div class=square-icon-gray><i class=sprite-robots-icon-5></i> </div>
                                            </div>
                                            <div class=robots-card__body>
                                                <div class="title-h5 robots-card__title-h5"> More opportunities </div>
                                                <div class=robots-card__content> Our financial products are set up in
                                                    such way that each investor can always improve his own investment
                                                    portfolio automatically, simply by increasing his financial
                                                    participation in the automatic arbitration trading process. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=robots-slider-block__slide>
                                        <div class=robots-card>
                                            <div class=robots-card__icon-cell>
                                                <div class=square-icon-gray><i class=sprite-robots-icon-6></i> </div>
                                            </div>
                                            <div class=robots-card__body>
                                                <div class="title-h5 robots-card__title-h5"> More defence </div>
                                                <div class=robots-card__content> Data protection technologies and
                                                    predictive algorithms for detecting suspicious activities and
                                                    malware of any etymology. </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <script>
                        pageInits.push(function () {
                            var $slider = $('#js-robots-slider');
                            $slider.slick({
                                slidesToShow: 4,
                                slidesToScroll: 1,
                                infinite: !1,
                                dots: !0,
                                arrows: !1,
                                appendDots: $('#js-robots-slider-dots'),
                                responsive: [{
                                    breakpoint: 1279,
                                    settings: {
                                        slidesToShow: 3
                                    }
                                }, {
                                    breakpoint: 1023,
                                    settings: {
                                        slidesToShow: 2
                                    }
                                }, {
                                    breakpoint: 479,
                                    settings: {
                                        slidesToShow: 1
                                    }
                                }]
                            });
                            $('#js-robots-slider-left').on('click', function () {
                                $slider.slick('slickPrev')
                            });
                            $('#js-robots-slider-right').on('click', function () {
                                $slider.slick('slickNext')
                            });
                            $slider.on('afterChange', function (event, slick, currentSlide) {
                                $('#js-robots-slider-dots li').removeClass('slick-active');
                                $('#js-robots-slider-dots li').eq(currentSlide).addClass('slick-active')
                            })
                        });
                        pageDestroys.push(function () {
                            $('#js-robots-slider').slick('unslick')
                        })

                    </script>
                </div>
                <section class="section section-banner page__section-banner page-company__section-banner js-scrollable">
                    <div class=container>
                        <div class="main-banner section-banner__main-banner">
                            <div class=main-banner__inner>
                                <div class=main-banner__left>
                                    <div class="title-h3 main-banner__title-h3"> Use the best technology <br> for your
                                        own profit </div>
                                    <div class=main-banner__btn-row><a href=auth/signup.html
                                            class="btn btn-success btn-lg" data-pjax=""><span>Your technologies</span>
                                            <svg width=20 height=20>
                                                <use xlink:href=#arrow-right></use>
                                            </svg></a> </div>
                                </div>
                                <div class=main-banner__right>
                                    <div class=check-list>
                                        <div class=check-list__row>
                                            <div class=check-list__icon-cell><svg width=19 height=14 class=color-green>
                                                    <use xlink:href=#ok></use>
                                                </svg> </div>
                                            <div class=check-list__content> Applying four trading bots </div>
                                        </div>
                                        <div class=check-list__row>
                                            <div class=check-list__icon-cell><svg width=19 height=14 class=color-green>
                                                    <use xlink:href=#ok></use>
                                                </svg> </div>
                                            <div class=check-list__content> Artificial Intelligence using </div>
                                        </div>
                                        <div class=check-list__row>
                                            <div class=check-list__icon-cell><svg width=19 height=14 class=color-green>
                                                    <use xlink:href=#ok></use>
                                                </svg> </div>
                                            <div class=check-list__content> High frequency trading systems </div>
                                        </div>
                                        <div class=check-list__row>
                                            <div class=check-list__icon-cell><svg width=19 height=14 class=color-green>
                                                    <use xlink:href=#ok></use>
                                                </svg> </div>
                                            <div class=check-list__content> Best algorithmic trading platforms </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                


@include('layouts.mainsite.footer')
