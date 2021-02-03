@extends('layouts.base')
@section('content')

    <main>
        <x-main.header />

        <x-main.intro :page="$page" />

        <x-main.products :products="$vipProducts" />

        <x-main.whyus :page="$page" />

        <x-main.about :page="$page"/>

{{--        <x-main.popular :products="$popularProducts"/>--}}

    </main>

@endsection