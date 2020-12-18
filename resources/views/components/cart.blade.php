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
                    <span class="cart-count">3</span>
                </h2>
    
                <div class="cart-items-scrollable">
    
                    <div class="aside-card">
                        <div class="aside-card__top">
                            <div class="aside-card-img">
                                <img  class="img-cover" src="{{asset('../img/product-1.png')}}" alt="">
                            </div>
                            <div class="aside-card__text">
                                <h2 class="c-title">
                                    <a href="">შატო ზვანიძე დასახელება</a>
                                </h2>
                                <h3 class="c-subtitle"> მშრალი 0.75ლ</h3>
                                <div class="aside-card__pricing">
                                    <span class="cur-p">82.00₾</span>
                                    <span class="old-p">112.00₾</span>
                                </div>
                            </div>
                        </div>
        
                        <div class="aside-card__bot">
                            <div class="aside-card__bot-left">
                                <h2>რაოდენობა</h2>
                                <div class="plus-minus-box ">
                                    <button class="qty_btn" type="button" onclick="QuantityMinus(this)"> -</button>
                                
                                    <input  type="number" name="qty" min="1" max="11" value="1" class="qty_input" readonly="">
            
                                    <button class="qty_btn" type="button" onclick="QuantityPlus(this)">+</button>
                                </div>
                            </div>
        
                            <button class="aside-card__delete-btn">წაშლა</button>
                        
                        </div>
                        
                    </div>
    
                    <div class="aside-card">
                        <div class="aside-card__top">
                            <div class="aside-card-img">
                                <img  class="img-cover" src="{{asset('../img/product-2.png')}}" alt="">
                            </div>
                            <div class="aside-card__text">
                                <h2 class="c-title">
                                    <a href="">შატო ზვანიძე დასახელება</a>
                                </h2>
                                <h3 class="c-subtitle"> მშრალი 0.75ლ</h3>
                                <div class="aside-card__pricing">
                                    <span class="cur-p">82.00₾</span>
                                    <span class="old-p">112.00₾</span>
                                </div>
                            </div>
                        </div>
        
                        <div class="aside-card__bot">
                            <div class="aside-card__bot-left">
                                <h2>რაოდენობა</h2>
                                <div class="plus-minus-box ">
                                    <button class="qty_btn" type="button" onclick="QuantityMinus(this)"> -</button>
                                
                                    <input  type="number" name="qty" min="1" max="11" value="1" class="qty_input" readonly="">
            
                                    <button class="qty_btn" type="button" onclick="QuantityPlus(this)">+</button>
                                </div>
                            </div>
        
                            <button class="aside-card__delete-btn">წაშლა</button>
                        
                        </div>
                        
                    </div>
    
                    <div class="aside-card">
                        <div class="aside-card__top">
                            <div class="aside-card-img">
                                <img  class="img-cover" src="{{asset('../img/product-4.png')}}" alt="">
                            </div>
                            <div class="aside-card__text">
                                <h2 class="c-title">
                                    <a href="">შატო ზვანიძე დასახელება</a>
                                </h2>
                                <h3 class="c-subtitle"> მშრალი 0.75ლ</h3>
                                <div class="aside-card__pricing">
                                    <span class="cur-p">82.00₾</span>
                                    <span class="old-p">112.00₾</span>
                                </div>
                            </div>
                        </div>
        
                        <div class="aside-card__bot">
                            <div class="aside-card__bot-left">
                                <h2>რაოდენობა</h2>
                                <div class="plus-minus-box ">
                                    <button class="qty_btn" type="button" onclick="QuantityMinus(this)"> -</button>
                                
                                    <input  type="number" name="qty" min="1" max="11" value="1" class="qty_input" readonly="">
            
                                    <button class="qty_btn" type="button" onclick="QuantityPlus(this)">+</button>
                                </div>
                            </div>
        
                            <button class="aside-card__delete-btn">წაშლა</button>
                        
                        </div>
                        
                    </div>
    
                </div>
    
                <div class="cart-modal__bottom">
                    <div class="cart-modal__flex">
                        <p>სულ :</p>
                        <h2 class="cart-modal__total-cost">177.00₾</h2>
                    </div>
    
                    <div class="cart-modal__flex">
                        <a href="{{route('Cart',app()->getLocale())}}" >კალათა</a>
                        <a href="{{route('Purchase', app()->getLocale())}}" >ყიდვა</a>
                    </div>
                </div>
        
            </aside>
        </div>