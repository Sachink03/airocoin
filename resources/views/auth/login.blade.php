@include('layouts.mainsite.header')

    <div id=js-pjax-container>
        <div class=auth-layout>
            <div class=auth-layout__inner>
                <div class=auth-layout__left><a href=../index.html class="logo auth-layout__logo" data-pjax=""></a>
                    <div class="title-h2 auth-layout__title-h2"> Earn with <br> <span class=color-green>Cortex AI
                            Trading</span></div>
                </div>
                <div class=auth-layout__right>
                    <div class=auth-layout__header>
                        <div class="auth-navigation auth-layout__auth-navigation">
                            <div class=auth-navigation__inner>
                                <div class=auth-navigation__left><a href=../index.html
                                        class="back-link auth-navigation__back-link" data-pjax=""><span
                                            class=back-link__inner><svg width=18 height=16 class=back-link__icon>
                                                <use xlink:href=#arrow-left></use>
                                            </svg> <span class=back-link__content>Back to Homepage</span></span> </a>
                                </div>
                                <div class=auth-navigation__right>
                                    <div class="dropdown locale-dropdown auth-navigation__locale-dropdown"><button
                                            class="dropdown-widget locale-dropdown__dropdown-widget dropdown-toggle"
                                            data-toggle=dropdown><span class=dropdown-widget__inner><span
                                                    class=dropdown-widget__icon-cell><svg width=20 height=20>
                                                        <use xlink:href=#locale-planet></use>
                                                    </svg> </span> <span class=dropdown-widget__locale-cell> en </span>
                                                <span class=dropdown-widget__carret-cell><svg width=10 height=10
                                                        class=color->
                                                        <use xlink:href=#carret-down></use>
                                                    </svg> </span></span> </button>
                                        <div class="dropdown-menu  locale-dropdown__dropdown-menu"><a
                                                class="dropdown-item locale-dropdown__dropdown-item" href=../index.html
                                                data-pjax=""> English </a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=auth-layout__form-container>
                            <h1 class="title-h3 auth-layout__title-h3"> Member Login </h1>
                            <div class="text-muted auth-layout__text-muted"> Securely connect to your account </div>
                            <form name=login_form method=post action=login.html class="auth-form auth-layout__auth-form"
                                data-pjax=data-pjax><input name=__csrf type=hidden
                                    value=ef81f838315305a1c29a83ac29e64e99>
                                <div class=auth-form__inner>
                                    <div class=auth-form__row>
                                        <div class=form-label-row><label for=login_form_username
                                                class=form-label-row__label> Your username <span
                                                    class=color-green>*</span> </label> </div>
                                        <div class=form-input-row><input type=text id=login_form_username
                                                name=login_form[username] required
                                                class="form-control form-control-lg form-control" placeholder=Username>
                                        </div>
                                    </div>
                                    <div class=auth-form__row>
                                        <div class=form-label-row><label for=login_form_password
                                                class=form-label-row__label> Your password <span
                                                    class=color-green>*</span> </label> <a href=recovery.html
                                                class="form-label-row__value color-green" data-pjax=""> Forgot your
                                                password? </a></div>
                                        <div class=form-input-row>
                                            <div class=form-input-row__append><button
                                                    class="password-btn js-password-btn" type=button
                                                    data-target=.js-password-field><svg width=24 height=24
                                                        class=password-btn__hidden-icon>
                                                        <use xlink:href=#password-hidden></use>
                                                    </svg> <svg width=24 height=24 class=password-btn__visible-icon>
                                                        <use xlink:href=#password-visible></use>
                                                    </svg></button> </div> <input type=password id=login_form_password
                                                name=login_form[password] required
                                                class="form-control form-control-lg js-password-field form-control"
                                                placeholder=Password>
                                        </div>
                                    </div>
                                    <div class=auth-form__row>
                                        <div class=auth-form__justify-row>
                                            <div class=checkbox-string><input type=checkbox class=checkbox-string__input
                                                    id=remember> <svg width=15 height=15 class=checkbox-string__icon>
                                                    <use xlink:href=#ok></use>
                                                </svg> <label for=remember class=checkbox-string__label> Remember me
                                                </label></div> <span> Don't have an account? <a href=signup.html
                                                    class="color-green ml-1" data-pjax=""> Sign up here </a> </span>
                                        </div>
                                    </div>
                                    <div class="auth-form__row auth-form__row--btn"><button
                                            class="btn btn-success btn-lg btn-xs-block"><span>Sign in</span> <svg
                                                width=20 height=20>
                                                <use xlink:href=#arrow-right></use>
                                            </svg></button> </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class=auth-layout__footer> © 2025 / All rights reserved by Cortex </div>
                </div>
            </div>
        </div>
        <div class=messages-container>
            <div class=container-fluid>
                <div class=messages-container__inner></div>
            </div>
        </div>
    </div>
    <script src=../theme/js/index-v-d367a25c6b3e.js></script>
    <script src=../theme/js/pjax-v-d367a25c6b3e.js></script>
    <script>
        var xhr = new XMLHttpRequest();
        xhr.open('GET', '/theme/img/sprite-v-d367a25c6b3e.svg', !0);
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var div = document.createElement('div');
                div.style.position = 'absolute';
                div.style.width = '0';
                div.style.height = '0';
                div.style.visibility = 'hidden';
                div.innerHTML = xhr.responseText;
                document.body.insertBefore(div, document.body.firstChild)
            }
        };
        xhr.send()

    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var pjaxOptions = {
                fragment: '#js-pjax-container',
                scrollTo: !1,
                timeout: 3000
            };
            $.pjax.defaults.maxCacheLength = 0;
            $(document).on('click', 'form[data-pjax] button[type="submit"][name]', function () {
                var form = $(this).closest('form');
                var buttonName = $(this).attr('name');
                var buttonValue = $(this).attr('value');
                var hiddenInput = form.find('input[type="hidden"][name="' + buttonName + '"]');
                if (hiddenInput.length > 0) {
                    hiddenInput.remove()
                }
                hiddenInput = $('<input>').attr('type', 'hidden').attr('name', buttonName).val(
                    buttonValue);
                form.append(hiddenInput)
            }).pjax('a[data-pjax]', '#js-pjax-container', pjaxOptions).on('submit', 'form[data-pjax]',
                function (event) {
                    $.pjax.submit(event, '#js-pjax-container', pjaxOptions)
                }).on('pjax:clicked', function (options) {}).on('pjax:beforeReplace', function () {
                pageDestroys.forEach(function (element) {
                    (element)()
                });
                pageDestroys = []
            }).on('pjax:beforeSend', function (event) {
                $('.modal-backdrop').remove();
                $('body').removeClass('modal-open');
                $('#js-preloader').removeClass('ready');
                if (!$(event.relatedTarget).hasClass('js-noscroll')) {
                    setTimeout(function () {
                        window.scrollTo({
                            top: 0,
                            left: 0
                        })
                    }, 10)
                }
            }).on('pjax:success', function (event, data) {}).on('pjax:error', function (event, xhr,
                textStatus, errorThrown, options) {
                options.success(xhr.responseText, textStatus, xhr);
                return !1
            }).on('pjax:end', function () {
                pageInits.forEach(function (element) {
                    (element)()
                });
                pageInits = []
            }).on('pjax:complete', function () {
                layoutInit();
                $('#js-preloader').addClass('ready');
                setTimeout(function () {
                    $('#js-pjax-container').css('height', '')
                })
            })
        })

    </script>
    <script>
        //(function(d, src, c) { var t=d.scripts[d.scripts.length - 1],s=d.createElement('script');s.id='la_x2s6df8d';s.defer=true;s.src=src;s.onload=s.onreadystatechange=function(){var rs=this.readyState;if(rs&&(rs!='complete')&&(rs!='loaded')){return;}c(this);};t.parentElement.insertBefore(s,t.nextSibling);})(document,
        //'https://dars1.ladesk.com/scripts/track.js',
        //function(e){ LiveAgent.createButton('u76fqdpl', e); });

    </script>
    <script>
        (function (w, d, v3) {
            w.chaportConfig = {
                appId: '684c6a1f1abf0018f2bd6556'
            };
            if (w.chaport) return;
            v3 = w.chaport = {};
            v3._q = [];
            v3._l = {};
            v3.q = function () {
                v3._q.push(arguments)
            };
            v3.on = function (e, fn) {
                if (!v3._l[e]) v3._l[e] = [];
                v3._l[e].push(fn)
            };
            var s = d.createElement('script');
            s.type = 'text/javascript';
            s.async = !0;
            s.src = 'https://app.chaport.com/javascripts/insert.js';
            var ss = d.getElementsByTagName('script')[0];
            ss.parentNode.insertBefore(s, ss)
        })(window, document)

    </script>
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
        integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
        data-cf-beacon='{"rayId":"967af9572b0eda31","version":"2025.7.0","r":1,"token":"0ba6880f01494148a07c3ba6978a8c03","serverTiming":{"name":{"cfExtPri":true,"cfEdge":true,"cfOrigin":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}}}'
        crossorigin="anonymous"></script>
</body>

</html>
@include('partials.notify')

@include('layouts.mainsite.footer')
