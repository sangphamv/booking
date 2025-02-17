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
                                >Tất cả tài khoản</a
                                >
                            </div>
                        </li>
                    </ol>
                </nav>
                <h1
                    class="text-xl font-semibold text-gray-900 sm:text-2xl :text-white"
                >
                    Tất cả tài khoản
                </h1>
            </div>
            <div class="sm:flex">
                <div
                    class="items-center hidden mb-3 sm:flex sm:divide-x sm:divide-gray-100 sm:mb-0 :divide-gray-700"
                >
                </div>
                <div class="flex items-center ml-auto space-x-2 sm:space-x-3">
                    <button
                        type="button"
                        onclick="window.location.reload();"
                        class="inline-flex items-center justify-center w-1/2 px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 sm:w-auto :bg-blue-600 :hover:bg-blue-700 :focus:ring-blue-800"
                    >
                        <svg
                            class="w-5 h-5 mr-2 -ml-1"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.5"
                            viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99"
                            ></path>
                        </svg>
                        Refresh
                    </button>
                    <a
                        href="{{ route('admin.user.create') }}"
                        type="button"
                        class="inline-flex items-center justify-center w-1/2 px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 sm:w-auto"
                    >
                        <svg
                            class="w-5 h-5 mr-2 -ml-1"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                clip-rule="evenodd"></path>
                        </svg
                        >
                        Thêm tài khoản
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col">
        <div class="overflow-x-auto">
            <div class="inline-block min-w-full align-middle">
                <div class="overflow-hidden shadow">
                    <table
                        class="min-w-full divide-y divide-gray-200 table-fixed"
                    >
                        <thead class="bg-gray-100 :bg-gray-700">
                        <tr>
                            <th
                                scope="col"
                                class="p-4 text-xs font-medium text-left text-gray-500 uppercase"
                            >
                                ID
                            </th>
                            <th
                                scope="col"
                                class="p-4 text-xs font-medium text-left text-gray-500 uppercase"
                            >
                                Tên người dùng
                            </th>
                            <th
                                scope="col"
                                class="p-4 text-xs font-medium text-left text-gray-500 uppercase"
                            >
                                Email
                            </th>
                            <th
                                scope="col"
                                class="p-4 text-xs font-medium text-left text-gray-500 uppercase"
                            >
                                Mật khẩu
                            </th>
                            <th
                                scope="col"
                                class="p-4 text-xs font-medium text-left text-gray-500 uppercase"
                            >
                                Vai trò
                            </th>
                            <th
                                scope="col"
                                class="p-4 text-xs font-medium text-left text-gray-500 uppercase"
                            >
                                Chức năng
                            </th>
                        </tr>
                        </thead>
                        <tbody
                            class="bg-white divide-y divide-gray-200"
                        >
                        @foreach($users as $user)
                            <div>
                                <tr class="hover:bg-gray-100">
                                    <td class="p-4 text-base text-center font-medium text-gray-900 whitespace-nowrap">
                                        {{ $user->id }}
                                    </td>
                                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap">
                                        {{ $user->name }}
                                    </td>
                                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap">
                                        {{ $user->email }}
                                    </td>
                                    <td class="p-4 max-w-xs text-base font-medium text-gray-900 whitespace-nowrap truncate">
                                        {{ $user->password }}
                                    </td>
                                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap">
                                        {{ $user->role }}
                                    </td>
                                    <td class="p-4 space-x-2 whitespace-nowrap">
                                        <a
                                            href="{{ route('admin.user.edit', $user->id) }}"
                                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 :bg-blue-600 :hover:bg-blue-700 :focus:ring-blue-800"
                                        >
                                            <svg
                                                class="w-4 h-4 mr-2"
                                                fill="currentColor"
                                                viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"/>
                                                <path
                                                    fill-rule="evenodd"
                                                    d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                    clip-rule="evenodd"
                                                />
                                            </svg>
                                            Sửa
                                        </a>
                                        <form
                                            action="{{ route('admin.user.destroy', $user->id) }}"
                                            method="POST"
                                            class="inline-flex"
                                            onsubmit="return confirm('Bạn có chắc chắn muốn xóa người dùng này không?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300">
                                                <svg
                                                    class="w-4 h-4 mr-2"
                                                    fill="currentColor"
                                                    viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                >
                                                    <path
                                                        fill-rule="evenodd"
                                                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                        clip-rule="evenodd"
                                                    />
                                                </svg>
                                                Xóa
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </div>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
