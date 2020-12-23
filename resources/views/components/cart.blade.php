        <!-- Cart-modal  -->
        <div id="cart-modal">
            <aside class="cart-aside">
                <button class="close-cart">
                    <svg xmlns="http://www.w3.org/2000/svg" width="13.426" height="13.423" viewBox="0 0 13.426 13.423">
                        <path id="Icon_ionic-ios-close" data-name="Icon ionic-ios-close" d="M19.589,18l4.8-4.8A1.124,1.124,0,0,0,22.8,11.616l-4.8,4.8-4.8-4.8A1.124,1.124,0,1,0,11.616,13.2l4.8,4.8-4.8,4.8A1.124,1.124,0,0,0,13.2,24.384l4.8-4.8,4.8,4.8A1.124,1.124,0,1,0,24.384,22.8Z" transform="translate(-11.285 -11.289)"/>
                      </svg>
                </button>
    
                <h2 class="cart-aside__title">
                    კალათა
                    <span class="cart-count" id="setcartcount">0</span>
                </h2>
    
                <div class="cart-items-scrollable" id="cartitems">
    

        

    
                    
                    
    
                </div>
    
                <div class="cart-modal__bottom">
                    <div class="cart-modal__flex">
                        <p>სულ :</p>
                        <h2 class="cart-modal__total-cost"><span id="totalmoneycart"></span> ₾</h2>
                    </div>
    
                    <div class="cart-modal__flex">
                        <a href="{{route('Cart',app()->getLocale())}}" >კალათა</a>
                        <a href="{{route('Purchase', app()->getLocale())}}" >ყიდვა</a>
                    </div>
                </div>
        
            </aside>
        </div>