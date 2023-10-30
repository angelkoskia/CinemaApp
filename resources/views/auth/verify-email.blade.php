@extends('layouts.app')

@section('content')
    <div>
        @if (session('status') == 'verification-link-sent')
            <div>
                {{ __('A verification link has been sent to your email address.') }}
            </div>
        @endif

        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <button>
                    {{ __('Resend Verification Email') }}
                </button>
            </div>
        </form>
    </div>
@endsection
