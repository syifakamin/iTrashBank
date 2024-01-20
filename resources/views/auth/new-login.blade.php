@extends('layouts.new-auth')

@section('page_title', __('Login'))

@section('parent-new-auth')
{{--begin login card--}}
<div class="card">
    <div class="card-body">

        <h4 class="mb-2">Welcome to iTrashBank 👋</h4>
        <p class="mb-4">Please login to your account and start the adventure</p>

{{--        Session status--}}
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form id="formAuthentication" class="mb-3" action="{{route('login')}}" method="POST">
            @csrf

{{--            Email Address Form--}}

            <div class="mb-3">
                <x-input-label for="email" class="form-label" :value="__('Email or Username')"/>
                <x-text-input id="email" class="form-control" placeholder="Email or Username" name="email" :value="old('email')" required autofocus autocomplete="username"/>
                <x-input-error :messages="$errors->get('email')" class="mt-2"/>
            </div>

{{--            Password Form--}}

            <div class="mt-3 form-password-toggle">
                <div class="d-flex justify-content-between">
                    <x-input-label class="form-label" for="password" :value="__('Password')"/>
                </div>

                <div class="input-group input-group-merge">
                    <x-text-input id="password" class="block mt-1 w-full"
                                  type="password"
                                  name="password"
                                  class="form-control"
                                  placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                  required autocomplete="current-password"/>
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                </div>

            </div>

            <div class="mb-3 m-5">
                <button class="btn btn-primary d-grid w-100" type="submit">Login</button>
            </div>
        </form>

        <p class="text-center">
            <span>New on our platform?</span>
            <a href="{{route('register')}}">
                <span>Create an account</span>
            </a>
        </p>

        <p class="text-center">
            <span>Theme Created by </span>
            <a href="https://themeselection.com/item/sneat-bootstrap-html-admin-template/">
                <span>Sneat</span>
            </a>
        </p>
    </div>
</div>
{{--end login card--}}
@endsection
