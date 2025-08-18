@include('layouts.mainsite.header')

                <section class="section section-main-header page__section-main-header">
                    <div class="delimiter section__delimiter section__delimiter--bottom">
                        <div class="delimiter__times delimiter__times--left"></div>
                        <div class="delimiter__times delimiter__times--right"></div>
                        <div class=delimiter__triangle></div>
                    </div>
                    <div class=container>
                        <div class=section-main-header__inner>
                            <h1 class="title-h2 section-main-header__title-h2"> Stay informed </h1>
                        </div>
                    </div>
                </section>
                <section class="section section-contacts page-contacts__section-contacts">
                    <div class=container>
                        <div class=section-contacts__inner>
                            <div class=section-contacts__left>
                                <div class="contacts-card section-contacts__contacts-card">
                                    <div class=contacts-card__inner>
                                        <div class=contacts-card__body>
                                            <div class="title-h5 contacts-card__title-h5"> Support </div>
                                            <div class=contacts-card__widgets><a href=https://t.me/AiroCoin_support
                                                    target=_blank
                                                    class="support-widget contacts-card__support-widget"><span
                                                        class="social-icon social-icon--sm support-widget__social-icon"><svg
                                                            width=16 height=16>
                                                            <use xlink:href=#social-telegram></use>
                                                        </svg> </span> <span class=support-widget__content> Telegram
                                                        support </span></a> <a href=https://t.me/AiroCoin_chat
                                                    target=_blank
                                                    class="support-widget contacts-card__support-widget"><span
                                                        class="social-icon social-icon--sm support-widget__social-icon"><svg
                                                            width=16 height=16>
                                                            <use xlink:href=#social-telegram></use>
                                                        </svg> </span> <span class=support-widget__content> Telegram
                                                        support </span></a></div>
                                        </div>
                                        <div class=contacts-card__body>
                                            <div class="title-h5 contacts-card__title-h5"> Social media </div>
                                            <div class=contacts-card__widgets><a href=https://t.me/AiroCoin_support
                                                    target=_blank
                                                    class="support-widget contacts-card__support-widget"><span
                                                        class="social-icon social-icon--sm support-widget__social-icon"><svg
                                                            width=16 height=16>
                                                            <use xlink:href=#social-telegram></use>
                                                        </svg> </span> <span class=support-widget__content> Telegram
                                                        channel </span></a> <a
                                                    href=# target=_blank
                                                    class="support-widget contacts-card__support-widget"><span
                                                        class="social-icon social-icon--sm support-widget__social-icon"><svg
                                                            width=16 height=16>
                                                            <use xlink:href=#social-instagram></use>
                                                        </svg> </span> <span class=support-widget__content> Instagram
                                                    </span></a> <a href=#
                                                    target=_blank
                                                    class="support-widget contacts-card__support-widget"><span
                                                        class="social-icon social-icon--sm support-widget__social-icon"><svg
                                                            width=16 height=16>
                                                            <use xlink:href=#social-youtube></use>
                                                        </svg> </span> <span class=support-widget__content> YouTube
                                                        channel </span></a> <a href="#"
                                                    target=_blank
                                                    class="support-widget contacts-card__support-widget"><span
                                                        class="social-icon social-icon--sm support-widget__social-icon"><svg
                                                            width=16 height=16>
                                                            <use xlink:href=#social-x></use>
                                                        </svg> </span> <span class=support-widget__content> X.com
                                                    </span></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=section-contacts__right>
                                <form name=contact_form method=post action=contacts.html
                                    class="contact-form section-contacts__contact-form" data-pjax=data-pjax><input
                                        name=__csrf type=hidden value=ef81f838315305a1c29a83ac29e64e99>
                                    <div class=contact-form__inner>
                                        <div class=contact-form__header>
                                            <h2 class="title-h2 contact-form__title-h2"> How can we assist you? </h2>
                                        </div>
                                        <div class=contact-form__body>
                                            <div class="row contact-form__row">
                                                <div class=col><label for=contact_form_name
                                                        class="form-label color-gray"> Your name <span
                                                            class=color-green>*</span> </label> <input type=text
                                                        id=contact_form_name name=contact_form[name] required
                                                        class="form-control form-control-lg form-control"
                                                        placeholder="Type your name"></div>
                                                <div class=col><label for=contact_form_email
                                                        class="form-label color-gray"> Your e-mail <span
                                                            class=color-green>*</span> </label> <input type=text
                                                        id=contact_form_email name=contact_form[email] required
                                                        class="form-control form-control-lg form-control"
                                                        placeholder="Type your e-mail"></div>
                                            </div>
                                            <div class=contact-form__row><label for=contact_form_message
                                                    class="form-label color-gray"> Your message <span
                                                        class=color-green>*</span> </label> <textarea
                                                    id=contact_form_message name=contact_form[message] required
                                                    class="form-control form-control-lg form-control"
                                                    placeholder="Type your message" rows=6></textarea></div>
                                        </div>
                                        <div class=contact-form__footer>
                                            <div class="contact-form__cell contact-form__cell--privacy"><span
                                                    class=color-gray> By submitting this form you agree to our <a
                                                        href=terms-of-use.html
                                                        class="color-gray color-hover-white dec-under" data-pjax="">
                                                        Terms of Use </a> and <a href=user-agreement.html
                                                        class="color-gray color-hover-white dec-under" data-pjax="">
                                                        User Agerrement </a> </span> </div>
                                            <div class="contact-form__cell contact-form__cell--btn"><button
                                                    class="btn btn-success btn-lg btn-xs-block"><span>Submit</span> <svg
                                                        width=20 height=20>
                                                        <use xlink:href=#arrow-right></use>
                                                    </svg></button> </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
                @include('layouts.mainsite.footer')
