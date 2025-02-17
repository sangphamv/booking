@extends('layouts.admin')

@section('title', 'Quản lý tài khoản')

@section('content')
    <div
        class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5 :bg-gray-800 :border-gray-700"
    >
        <div class="w-full mb-1">
            <div class="mb-4">
                <nav class="flex mb-5" aria-label="Breadcrumb">
                    <ol
                        class="inline-flex items-center space-x-1 text-sm font-medium md:space-x-2"
                    >
                        <li class="inline-flex items-center">
                            <a
                                href="{{ route('admin.user.index') }}"
                                class="inline-flex items-center text-gray-700 hover:text-blue-600 :text-gray-300 :hover:text-white"
                            >
                                Quản lý tài khoản
                            </a>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg
                                    class="w-6 h-6 text-gray-400"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg
                                >
                                <a
                                    href="#"
                                    class="ml-1 text-gray-700 hover:text-blue-600 md:ml-2 :text-gray-300 :hover:text-white"
                                >Thêm tài khoản</a
                                >
                            </div>
                        </li>
                    </ol>
                </nav>
                <h1
                    class="text-xl font-semibold text-gray-900 sm:text-2xl :text-white"
                >
                    Thêm tài khoản
                </h1>
            </div>
            <div class="sm:flex">
                <div
                    class="items-center hidden mb-3 sm:flex sm:divide-x sm:divide-gray-100 sm:mb-0 :divide-gray-700"
                >
                </div>
                <div class="flex items-center ml-auto space-x-2 sm:space-x-3">
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col">
        <div
            class=""
            id="add-user-modal"
        >
            <div class="p-0">
                <!-- Modal content -->
                <div class="bg-white shadow">
                    <div class="p-6 space-y-6">
                        <form
                            action="{{ route('admin.user.store') }}"
                            method="POST">
                            @csrf
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="name"
                                           class="block mb-2 text-sm font-medium text-gray-900">Tên tài khoản</label>
                                    <input type="text" name="name" id="name"
                                           class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 :bg-gray-700 :border-gray-600 :placeholder-gray-400 :text-white :focus:ring-blue-500 :focus:border-blue-500"
                                           placeholder="Name" required>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="email"
                                           class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                                    <input type="email" name="email" id="email"
                                           class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 :bg-gray-700 :border-gray-600 :placeholder-gray-400 :text-white :focus:ring-blue-500 :focus:border-blue-500"
                                           placeholder="example@company.com" required>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="role"
                                           class="block mb-2 text-sm font-medium text-gray-900 :text-white">Vai trò</label>
                                    <select name="role" id="role"
                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 :bg-gray-700 :border-gray-600 :placeholder-gray-400 :text-white :focus:ring-blue-500 :focus:border-blue-500"
                                            required>
                                        <option value="user">User</option>
                                        <option value="admin">Admin</option>
                                    </select>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="password"
                                           class="block mb-2 text-sm font-medium text-gray-900 :text-white">
                                        Mật khẩu
                                    </label>
                                    <input type="password" name="password" id="password"
                                           class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 :bg-gray-700 :border-gray-600 :placeholder-gray-400 :text-white :focus:ring-blue-500 :focus:border-blue-500"
                                           placeholder="Password" required>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="password_confirmation"
                                           class="block mb-2 text-sm font-medium text-gray-900 :text-white">
                                        Xác nhận mật khẩu
                                    </label>
                                    <input type="password" name="password_confirmation" id="password_confirmation"
                                           class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 :bg-gray-700 :border-gray-600 :placeholder-gray-400 :text-white :focus:ring-blue-500 :focus:border-blue-500"
                                           placeholder="Confirm Password" required>
                                </div>
                            </div>
                            <div class="mt-4">
                                <button type="submit"
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                    Add User
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
