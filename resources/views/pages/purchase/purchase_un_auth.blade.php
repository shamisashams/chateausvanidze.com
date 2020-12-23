@extends('layouts.base')
@section('content')
<main>

    <!-- section 1 -  buy + register -->
    <section id="buy-section">
        <div class="container">

             <!--fixed aside-->
             <div class="order-info-aside">
                <div class="order-aside-wrap">
                    <h2>ინფორმაცია შეკვეთაზე</h2>
                    <p>
                        <span>მიტანის ღირებულება</span>
                        <span>5₾</span>
                    </p>
                    <p>
                        <span>პროდუქტის ფასი</span>
                        <span><span id="buy-prod"></span> ₾</span>
                    </p>

                    <div class="order-aside-divider"></div>

                    <p class="order-total">
                        <span>სულ თანხა:</span>
                        <span class="buy-total"><span id="buy-total"></span> ₾</span>
                    </p>
                </div>

                <a class="order-aside-btn" href="">
                    შეკვეთის დასრულება
                </a>

            </div>
            
            <div class="buy__left-container">
                <h2 class="buy-warning-title">
                    თქვენ ხართ არაავტორიზირებული მომხმარებელი, შეკვეთის განთავსებისთვის გთხოვთ გაიარეთ რეგისტრაცია და შეავსეთ ქვემოთ მოცემული ველები
                </h2>

                <h2 class="buy__title">მიწოდება</h2>
                <p style="margin-top:10px">გთხოვთ გაიაროთ რეგისტრაცია/ავტორიზაცია, რადგან შეძლოთ არჩეული პროდუქციის ყიდვა.</p>


                <div class="buy__products" id="buyproduct">
                    

                    

                    
                </div>



            </div>
           
            
        </div>
    </section>



</main>
@endsection