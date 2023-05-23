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
            <x-jet-validation-errors class="mb-4" />
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div>
                        <x-jet-label for="email" value="{{ __('Email') }}" />
                        <x-jet-input id="email" class="form-control" type="text" name="email" :value="old('email')" required autofocus />
                 
                    </div>
                    <div class="mt-4">
                        <x-jet-label for="password" value="{{ __('Password') }}" />
                        <x-jet-input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
                       
                    </div>
                    <div class="admin-condition">
                        <div class="checkbox-theme-default custom-checkbox ">
                            <input class="checkbox" type="checkbox" id="check-1">
                            <label for="check-1">
                                <span class="checkbox-text">Keep me logged in</span>
                            </label>
                        </div>
                         @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a>
                        @endif 
                    </div>
                    <div class="admin__button-group button-group d-flex pt-1 justify-content-md-start justify-content-center">
                        <button class="btn btn-primary btn-default w-100 btn-squared text-capitalize lh-normal px-50 signIn-createBtn ">
                            sign in
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
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
