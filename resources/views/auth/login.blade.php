@extends('layouts.new-master')
@section('content')
<!DOCTYPE html>
<html lang="ja">
<head>
<title>ログイン / Item Search</title>
</head>

<body>
 <!-- Header-->
    <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">ログイン</h1>
                    <p class="lead fw-normal text-white-50 mb-0"></p>
                </div>
            </div>
    </header>

<section class="page-section" id="contact">
<div class="container my-3">
    <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-floating mb-3">
                <x-jet-input id="email" class="form-control" type="email" placeholder="name@example.com" name="email" :value="old('email')" required />
                <label for="email">Email address</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
            </div>

            <div class="form-floating mb-3">
                <x-jet-input id="password" class="form-control" type="password" placeholder="Enter your password..." name="password" required autocomplete="new-password" />
                <label for="password">password</label>
                <div class="invalid-feedback" data-sb-feedback="password:required">A phone number is required.</div>
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                
                <x-jet-button class="btn btn-info my-2">
        {{ __('ログイン') }}
    </x-jet-button>
    
           
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
</div>
</section>
</body>
@endsection


