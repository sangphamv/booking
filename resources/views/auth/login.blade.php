@extends('layouts.auth')

@section('title', 'Đăng nhập')

@section('content')
    <section class="bg-gray-50">
        <div class="flex gap-4 flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <x-logo>
                Laravel
            </x-logo>
            <div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
                        Đăng nhập vào tài khoản
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="{{ route('login') }}" method="POST">
                        @csrf
                        <div>
                            <x-label-form for="email">
                                Tài khoản
                            </x-label-form>
                            <x-input-form type="email" name="email" id="email" placeholder="name@company.com" required="true" />
                        </div>
                        <div>
                            <x-label-form for="password">
                                Mật khẩu
                            </x-label-form>
                            <x-input-form type="password" name="password" id="password" placeholder="••••••••" required="true" />
                        </div>
                        <x-submit-button>
                            Đăng nhập
                        </x-submit-button>
                        <p class="text-sm font-light text-gray-500">
                            Bạn chưa có tài khoản?
                            <a href="{{ route('register') }}" class="font-medium text-primary-600 hover:underline">
                                Đăng ký ngay
                            </a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    @foreach (['error'] as $msg)
        @if(session($msg))
            <x-toast type="{{ $msg }}">
                {{ session($msg) }}
            </x-toast>
        @endif
    @endforeach
@endsection
