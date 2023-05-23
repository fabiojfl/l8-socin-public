<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>
        <div class="card border-0">
            <div class="card-header">
                <div class="edit-profile__title">
                    <h6>Socinveste Investimentos</h6>
                </div>
            </div>
            <div class="card-body pt-5 px-30">
                <p class="text-normal">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                </p>
            </div>
        </div>
        @if (session('status'))
            <div class="card-body">
                <div class=" alert alert-success " role="alert">
                    <div class="alert-content">
                        {{ session('status') }}
                    </div>
                </div>
            </div>
        @endif
        <x-jet-validation-errors class="mb-4" />
        <div class="card-body">
            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="block">
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                </div>
                <div class="admin__button-group button-group d-flex pt-1 justify-content-md-start justify-content-center">
                    <button class="btn btn-primary btn-default w-100 btn-squared text-capitalize lh-normal px-50 signIn-createBtn ">
                    {{ __('Email Password Reset Link') }}
                    </button>
                </div>
                
            </form>
        </div>
        <div class="admin-topbar">
            <p class="mb-0">
                Don't have an account?
                <a href="{{ route('register') }}" class="color-primary">
                    Sign up
                </a>
            </p>
        </div>  
    </x-jet-authentication-card>
</x-guest-layout>
