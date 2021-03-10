@extends('layouts.base')
@section('content')
    <main>

        <!-- section 1 - succ-fail  -->
        <section id="success-fail">

            <div class="container">
                <div class="success-fail__wrapper fail">
                    <img src="/img/failure.png" alt="" class="success-fail__img">

                    <h2 class="success-fail__heading fail">{{__('client.failed_payment')}}
                    </h2>

                    <p class="success-fail__p">
                        {{__('client.error_occurred')}}
                    </p>

                    <a href="" class="success-fail__link">
                        {{__('client.go_back')}}
                    </a>
                </div>
            </div>
        </section>


    </main>

@endsection
