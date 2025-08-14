@include('layouts.mainsite.header')

                        <div class=auth-layout__form-container>
                            <h1 class="title-h3 auth-layout__title-h3"> Registration </h1>
                            <div class="text-muted auth-layout__text-muted"> Create a new account to access exclusive
                                features and offers! </div>
                            <form name=signup_form  action="{{ route('registers') }}" method="post"
                                class="auth-form auth-layout__auth-form" autocomplete=off data-pjax=data-pjax>
                                {{ csrf_field() }}
                    @php
                        $sponsor = @$_GET['ref'];
                        $pos = @$_GET['pos'];
                        $name = \App\Models\User::where('username', $sponsor)->first();
                    @endphp
                                <div class=auth-form__inner>
                                    <div class=auth-form__row>
                                        <div class=form-label-row><label for=signup_form_email
                                                class=form-label-row__label>Sponsor <span
                                                    class=color-green>*</span> </label> </div>
                                        <div class=form-input-row><input type=text value="{{($sponsor)?$sponsor:''}}"
                                                name="sponsor" required placeholder="Sponsor ID"
                                                class="form-control form-control-lg form-control">
                                                 <?= $name ? $name->name : '' ?>
                                        </div>                                       
                                    </div>
                                    
                                    <div class=auth-form__row>
                                        <div class=form-label-row><label for=signup_form_email
                                                class=form-label-row__label> Name <span
                                                    class=color-green>*</span> </label> </div>
                                        <div class=form-input-row><input type="text"  name="name" required placeholder="Your Name"
                                                class="form-control form-control-lg form-control">
                                        </div>
                                    </div>
                                    <div class=auth-form__row>
                                        <div class=form-label-row><label for=signup_form_login
                                                class=form-label-row__label> Your Email<span
                                                    class=color-green>*</span> </label> </div>
                                        <div class=form-input-row>
                                            <input type="email" name="email" id="email"  required placeholder="Your Email"
                                                class="form-control form-control-lg form-control">
                                        </div>
                                    </div>
                                    <div class=auth-form__row>
                                        <div class=form-label-row><label for=signup_form_login
                                                class=form-label-row__label> Your Phone<span
                                                    class=color-green>*</span> </label> </div>
                                        <div class=form-input-row>
                                            <input type="text" name="phone" id="phone"  required placeholder="Your Mobile No"
                                                class="form-control form-control-lg form-control">
                                        </div>
                                    </div>
                                    <div class=auth-form__row>
                                        <div class=form-label-row><label for=signup_form_password_first
                                                class=form-label-row__label> Define password <span
                                                    class=color-green>*</span> </label> </div>
                                        <div class=form-input-row>
                                            <div class=form-input-row__append><button
                                                    class="password-btn js-password-btn" type=button
                                                    data-target=#signup_form_password_first><svg width=24 height=24
                                                        class=password-btn__hidden-icon>
                                                        <use xlink:href=#password-hidden></use>
                                                    </svg> <svg width=24 height=24 class=password-btn__visible-icon>
                                                        <use xlink:href=#password-visible></use>
                                                    </svg></button> </div>
                                                     <input type="password" name="password" placeholder="Your Password" 
                                                id=signup_form_password_first 
                                                class="form-control form-control-lg form-control"
                                                autocomplete=new-password>
                                        </div>
                                    </div>
                                    <div class=auth-form__row>
                                        <div class=form-label-row><label for=signup_form_password_second
                                                class=form-label-row__label> Retype password <span
                                                    class=color-green>*</span> </label> </div>
                                        <div class=form-input-row>
                                            <div class=form-input-row__append><button
                                                    class="password-btn js-password-btn" type=button
                                                    data-target=#signup_form_password_second><svg width=24 height=24
                                                        class=password-btn__hidden-icon>
                                                        <use xlink:href=#password-hidden></use>
                                                    </svg> <svg width=24 height=24 class=password-btn__visible-icon>
                                                        <use xlink:href=#password-visible></use>
                                                    </svg></button> </div>
                                                     <input type="password" name="password_confirmation" placeholder="Confirm Password"
                                                id=signup_form_password_second
                                                required class="form-control form-control-lg form-control"
                                                >
                                        </div>
                                    </div>
                                    <div class=auth-form__row>
                                        <div class=auth-form__justify-row>
                                            <div class=checkbox-string><input type=checkbox class=checkbox-string__input
                                                    id=terms checked required> <svg width=15 height=15
                                                    class=checkbox-string__icon>
                                                    <use xlink:href=#ok></use>
                                                </svg> <label for=terms class=checkbox-string__label> You agree to our
                                                    <a href=../terms-of-use.html class=color-green data-pjax=""> Terms
                                                        and conditions </a> </label></div> <span> Are you a member? <a
                                                    href=login.html class="color-green ml-1" data-pjax=""> Sign in </a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="auth-form__row auth-form__row--btn"><button
                                            class="btn btn-success btn-lg btn-xs-block"  type="submit"><span>Create account</span> <svg
                                                width=20 height=20>
                                                <use xlink:href=#arrow-right></use>
                                            </svg></button> </div>
                                </div>
                            </form>
                        </div>
@include('partials.notify')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
    setTimeout(function() {
        
        $.ajax({
            url: "https://get.geojs.io/v1/ip/geo.js",
            dataType: "jsonp",
            jsonpCallback: "geoip",
            success: function(data) {
                console.log("IP: " + data.ip);
                console.log("Country: " + data.country);
                console.log("Country Code: " + data.country_code3);
                var el_sel = document.getElementById('select_country');
                el_sel.value = data.country;
                document.getElementById('select_country2').innerHTML = data.country;
                 alert();

            }
        });
    }, 1000);

 
  

</script>


@include('layouts.mainsite.footer')
