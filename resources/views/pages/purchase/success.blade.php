@extends('layouts.base')
@section('content')

    <main>

        <!-- section 1 - succ-fail  -->
        <section id="success-fail">

            <div class="container">
                <div class="success-fail__wrapper">
                    <img src="/img/success.png" alt="" class="success-fail__img">

                    <h2 class="success-fail__heading">{{__('client.success_payment')}}!</h2>

                    <p class="success-fail__p">
                        {{__('client.thank_you')}}
                    </p>

                    <a href="" class="success-fail__link">
                        {{__('client.go_back')}}

                    </a>
                </div>
            </div>
        </section>



    </main>

@endsection
