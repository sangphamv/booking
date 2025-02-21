@extends('layouts.user')

@section('title', 'Tài khoản')

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
                                href="#"
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
                                <span
                                    class="ml-1 text-gray-400 md:ml-2 :text-gray-500"
                                    aria-current="page">{{ $user->name }}</span
                                >
                            </div>
                        </li>
                    </ol>
                </nav>

                <h1
                    class="text-xl font-semibold text-gray-900 sm:text-2xl :text-white"
                >
                    Thông tin tài khoản
                </h1>
            </div>
        </div>
    </div>
    <div class="flex flex-col">
        <div class="overflow-x-auto">
            <div class="inline-block min-w-full align-middle sm:rounded-lg">
                <div class="overflow-hidden shadow sm:rounded-lg">
                    <table
                        class="min-w-full divide-y divide-gray-200 table-fixed"
                    >
                        <thead class="bg-gray-100">
                        <tr>
                            <th
                                scope="col"
                                class="p-4 whitespace-nowrap text-xs font-medium text-left text-gray-500 uppercase"
                            >
                                Tên người dùng
                            </th>
                            <th
                                scope="col"
                                class="p-4 whitespace-nowrap text-xs font-medium text-left text-gray-500 uppercase"
                            >
                                Email
                            </th>
                            <th
                                scope="col"
                                class="p-4 whitespace-nowrap text-xs font-medium text-left text-gray-500 uppercase"
                            >
                                Chức năng
                            </th>
                        </tr>
                        </thead>
                        <tbody
                            class="bg-white divide-y divide-gray-200"
                        >
                                <tr class="hover:bg-gray-100">
                                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap">
                                        {{ $user->name }}
                                    </td>
                                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap">
                                        {{ $user->email }}
                                    </td>
                                    <td class="p-4 space-x-2 whitespace-nowrap">
                                        <a
                                            href="{{ route('user.edit', $user->id) }}"
                                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300"
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
                                            Chỉnh sửa
                                        </a>
                                        <form
                                            action="{{ route('user.destroy', $user->id) }}"
                                            method="POST"
                                            class="inline-flex"
                                            onsubmit="return confirm('Bạn có chắc chắn muốn xóa tài khoản này không?');">
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
                                                Xóa tài khoản
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
