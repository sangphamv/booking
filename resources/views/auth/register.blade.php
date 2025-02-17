@extends('layouts.auth')

@section('title', 'Đăng ký')

@section('content')
    <section class="bg-gray-50">
        <div class="flex gap-4 flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <x-logo>
                Laravel
            </x-logo>
            <div
                class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
                        Tạo tài khoản
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="{{ route('register') }}" method="POST">
                        @csrf
                        <div>
                            <x-label-form for="name">
                                Tài khoản
                            </x-label-form>
                            <x-input-form type="text" name="name" id="name" placeholder="Tài khoản" required="true" />
                        </div>
                        <div>
                            <x-label-form for="email">
                                Email
                            </x-label-form>
                            <x-input-form type="email" name="email" id="email" placeholder="name@company.com" required="true" />
                        </div>
                        <div>
                            <x-label-form for="password">
                                Mật khẩu
                            </x-label-form>
                            <x-input-form type="password" name="password" id="password" placeholder="••••••••" required="true" />
                        </div>
                        <div>
                            <x-label-form for="confirm-password">
                                Xác nhận mật khẩu
                            </x-label-form>
                            <x-input-form type="password" name="password_confirmation" id="confirm-password" placeholder="••••••••" required="true" />
                        </div>
                        <x-submit-button>
                            Đăng ký
                        </x-submit-button>
                        <p class="text-sm font-light text-gray-500">
                            Bạn đã có tài khoản?
                            <a href="{{ route('login') }}" class="font-medium text-blue-600 hover:underline">
                                Đăng nhập ngay
                            </a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
