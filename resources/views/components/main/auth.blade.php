 <!-- auth modal Log In -->
    <div class="auth-modal login" >
        <form action="" class="auth-form" id="log-in-form">
            <div class="auth-close">
                <svg xmlns="http://www.w3.org/2000/svg" width="13.426" height="13.423" viewBox="0 0 13.426 13.423">
                    <path id="Icon_ionic-ios-close" data-name="Icon ionic-ios-close" d="M19.589,18l4.8-4.8A1.124,1.124,0,0,0,22.8,11.616l-4.8,4.8-4.8-4.8A1.124,1.124,0,1,0,11.616,13.2l4.8,4.8-4.8,4.8A1.124,1.124,0,0,0,13.2,24.384l4.8-4.8,4.8,4.8A1.124,1.124,0,1,0,24.384,22.8Z" transform="translate(-11.285 -11.289)"/>
                  </svg>                  
            </div>

            <h2 class="auth__title">ავტორიზაცია</h2>

            <a href=""  class="alt-login">
                <img src="{{asset('../img/icons/fff-facebook-f.svg')}}" alt="">
                Facebook-ით ავტორიზაცია
            </a>
            <a href=""  class="alt-login">
                <img src="{{asset('../img/icons/svg-google.svg')}}" alt="">
                Google-ით ავტორიზაცია
            </a>

            <div class="auth-or"><span>ან</span></div>

            <input type="text" class="auth__input" placeholder="ელ-ფოსტა ან მობილური"> 

            <div class="error-message ">ველის შევსება აუცილებელია</div>

            <div class="password-wrap">
                <input class="auth__input" type="password" placeholder="პაროლი" maxlength="12" >
                <div class="hide-show pass-hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15.473" height="10.315" viewBox="0 0 15.473 10.315">
                        <path id="Icon_awesome-eye" data-name="Icon awesome-eye" d="M15.379,9.265A8.616,8.616,0,0,0,7.736,4.5,8.617,8.617,0,0,0,.094,9.266a.869.869,0,0,0,0,.784,8.616,8.616,0,0,0,7.643,4.765,8.617,8.617,0,0,0,7.643-4.766A.869.869,0,0,0,15.379,9.265Zm-7.643,4.26A3.868,3.868,0,1,1,11.6,9.658,3.868,3.868,0,0,1,7.736,13.526Zm0-6.447a2.56,2.56,0,0,0-.68.1,1.285,1.285,0,0,1-1.8,1.8,2.573,2.573,0,1,0,2.477-1.9Z" transform="translate(0 -4.5)"/>
                      </svg>
                </div>
            </div>

            <div class="error-message">ველის შევსება აუცილებელია</div>

            <!-- add class "show" to this when not authentificated on back -->
            <div class="error-message ">მეილი & მობილური ან პაროლი არასწორია </div>

            <button onclick="logIn()" type="button" class="auth__submit">შესვლა</button>

            <a class="auth-underline" href="">დაგავიწყდათ პაროლი?</a>

            <button type="button" class="auth-underline switch-to-register">რეგისტრაცია</button>
            
        </form>
    </div>

    <!-- auth modal Registration -->
    <div class="auth-modal register" >
        <form action="" class="auth-form" id="registration-form">
            <div class="auth-close">
                <svg xmlns="http://www.w3.org/2000/svg" width="13.426" height="13.423" viewBox="0 0 13.426 13.423">
                    <path id="Icon_ionic-ios-close" data-name="Icon ionic-ios-close" d="M19.589,18l4.8-4.8A1.124,1.124,0,0,0,22.8,11.616l-4.8,4.8-4.8-4.8A1.124,1.124,0,1,0,11.616,13.2l4.8,4.8-4.8,4.8A1.124,1.124,0,0,0,13.2,24.384l4.8-4.8,4.8,4.8A1.124,1.124,0,1,0,24.384,22.8Z" transform="translate(-11.285 -11.289)"/>
                  </svg>                  
            </div>

            <h2 class="auth__title">რეგისტრაცია</h2>

            <input type="text" class="auth__input" placeholder="სახელი">
            <div class="error-message">ველის შევსება აუცილებელია</div>

            <input type="text" class="auth__input" placeholder="გვარი">
            <div class="error-message">ველის შევსება აუცილებელია</div>

            <input type="text" class="auth__input" placeholder="ელ-ფოსტა ან მობილური"> 
            <div class="error-message">ველის შევსება აუცილებელია</div>

            <div class="password-wrap">
                <input class="auth__input" type="password" placeholder="პაროლი" maxlength="12" >
                <div class="hide-show pass-hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15.473" height="10.315" viewBox="0 0 15.473 10.315">
                        <path id="Icon_awesome-eye" data-name="Icon awesome-eye" d="M15.379,9.265A8.616,8.616,0,0,0,7.736,4.5,8.617,8.617,0,0,0,.094,9.266a.869.869,0,0,0,0,.784,8.616,8.616,0,0,0,7.643,4.765,8.617,8.617,0,0,0,7.643-4.766A.869.869,0,0,0,15.379,9.265Zm-7.643,4.26A3.868,3.868,0,1,1,11.6,9.658,3.868,3.868,0,0,1,7.736,13.526Zm0-6.447a2.56,2.56,0,0,0-.68.1,1.285,1.285,0,0,1-1.8,1.8,2.573,2.573,0,1,0,2.477-1.9Z" transform="translate(0 -4.5)"/>
                      </svg>
                </div>
            </div>
            <div class="error-message ">ველის შევსება აუცილებელია</div>

            <div class="password-wrap">
                <input class="auth__input" type="password" placeholder="დაადასტურეთ პაროლი" maxlength="12" >
                <div class="hide-show pass-hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15.473" height="10.315" viewBox="0 0 15.473 10.315">
                        <path id="Icon_awesome-eye" data-name="Icon awesome-eye" d="M15.379,9.265A8.616,8.616,0,0,0,7.736,4.5,8.617,8.617,0,0,0,.094,9.266a.869.869,0,0,0,0,.784,8.616,8.616,0,0,0,7.643,4.765,8.617,8.617,0,0,0,7.643-4.766A.869.869,0,0,0,15.379,9.265Zm-7.643,4.26A3.868,3.868,0,1,1,11.6,9.658,3.868,3.868,0,0,1,7.736,13.526Zm0-6.447a2.56,2.56,0,0,0-.68.1,1.285,1.285,0,0,1-1.8,1.8,2.573,2.573,0,1,0,2.477-1.9Z" transform="translate(0 -4.5)"/>
                      </svg>
                </div>
            </div>
            <!-- if pass dont match -->
            <div class="error-message pass-patch">პაროლები არ ემთხვევა</div>

            <label class="checkbox register">
                <input type="checkbox" name="" id="reg-checkbox" >
                <span></span>
                ვეთანხმები წესებსა და პირობებს
                <small class="pls-check">გთხოვთ მონიშნთ</small>
            </label>
            

            <button onclick="register()" type="button" class="auth__submit">რეგისტრაცია</button>

            <button type="button" class="switch-to-login">ავტორიზაცია</button>
            
        </form>
    </div>
