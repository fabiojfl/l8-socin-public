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
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf

                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    <div class="block">
                        <x-jet-label for="email" value="{{ __('Email') }}" />
                        <x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email', $request->email)" required autofocus />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="password" value="{{ __('Password') }}" />
                        <x-jet-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
                    </div>

                    <div class="mt-4 mb-5">
                        <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                        <x-jet-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                    </div>
                    <div class="admin__button-group button-group d-flex pt-1 justify-content-md-start justify-content-center">
                        <button class="btn btn-primary btn-default w-100 btn-squared text-capitalize lh-normal px-50 signIn-createBtn ">
                            {{ __('Reset Password') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
