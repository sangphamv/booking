@extends('layouts.admin')

@section('title', 'Quản lý phim')

@section('content')
    <div
        class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5 "
    >
        <div class="w-full mb-1">
            <div class="mb-4">
                <nav class="flex mb-5">
                    <ol
                        class="inline-flex items-center space-x-1 text-sm font-medium md:space-x-2"
                    >
                        <li class="inline-flex items-center">
                            <a
                                href="#"
                                class="inline-flex items-center text-gray-700 hover:text-blue-600 "
                            >
                                <svg
                                    class="w-5 h-5 mr-2.5"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"
                                    ></path>
                                </svg
                                >
                                Dashboard
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
                                    class="ml-1 text-gray-700 hover:text-blue-600 md:ml-2 "
                                >Quản lý phim</a
                                >
                            </div>
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
                                    class="ml-1 text-gray-400 md:ml-2 ">Tất cả phim</span
                                >
                            </div>
                        </li>
                    </ol>
                </nav>
                <h1
                    class="text-xl font-semibold text-gray-900 sm:text-2xl :text-white"
                >
                    Tất cả phim
                </h1>
            </div>
            <div class="items-center justify-between block sm:flex">
                <div class="flex items-center mb-4 sm:mb-0">
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
                        href="{{route('admin.movie.create')}}"
                        class="inline-flex items-center justify-center w-1/2 px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 sm:w-auto :bg-blue-600 :hover:bg-blue-700 :focus:ring-blue-800"
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
                        Thêm phim
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
                        <thead class="bg-gray-100">
                        <tr>
                            <th
                                scope="col"
                                class="p-4 text-xs font-medium text-left text-gray-500 uppercase whitespace-nowrap"
                            >
                                Mã phim
                            </th>
                            <th
                                scope="col"
                                class="p-4 text-xs font-medium text-left text-gray-500 uppercase"
                            >
                                Tên phim
                            </th>
                            <th
                                scope="col"
                                class="p-4 text-xs font-medium text-left text-gray-500 uppercase"
                            >
                                Thể loại
                            </th>
                            <th
                                scope="col"
                                class="p-4 text-xs font-medium text-left text-gray-500 uppercase whitespace-nowrap"
                            >
                                Thời lượng
                            </th>
                            <th
                                scope="col"
                                class="p-4 text-xs font-medium text-left text-gray-500 uppercase"
                            >
                                Ngày ra mắt
                            </th>
                            <th
                                scope="col"
                                class="p-4 text-xs font-medium text-left text-gray-500 uppercase"
                            >
                                Giá vé
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
                            class="bg-white divide-y divide-gray-200 :bg-gray-800 :divide-gray-700"
                        >
                        @foreach($movies as $movie)
                            <tr class="hover:bg-gray-100">
                                <td class="p-4 text-center text-base font-medium text-gray-900 whitespace-nowrap">
                                    {{ $movie->id }}
                                </td>
                                <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap">
                                    {{ $movie->title }}
                                </td>
                                <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap">
                                    {{ $movie->category }}
                                </td>
                                <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap">
                                    {{ $movie->duration }} phút
                                </td>
                                <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap">
                                    {{ $movie->release_date }}
                                </td>
                                <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap">
                                    {{ number_format($movie->price, 0, ',', '.') }}&#8363;
                                </td>
                                <td class="p-4 space-x-2 whitespace-nowrap">
                                    <a
                                        href="{{ route('admin.movie.show', $movie->id) }}"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 :bg-blue-600 :hover:bg-blue-700 :focus:ring-blue-800"
                                    >
                                        <svg
                                            class="w-4 h-4 mr-2"
                                            aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M9 7V2.221a2 2 0 0 0-.5.365L4.586 6.5a2 2 0 0 0-.365.5H9Z"/>
                                            <path fill-rule="evenodd"
                                                  d="M11 7V2h7a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V9h5a2 2 0 0 0 2-2Zm4.707 5.707a1 1 0 0 0-1.414-1.414L11 14.586l-1.293-1.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l4-4Z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                        Chi tiết
                                    </a>
                                    <a
                                        href="{{ route('admin.movie.edit', $movie->id) }}"
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
                                        action="{{ route('admin.movie.destroy', $movie->id) }}"
                                        method="POST"
                                        class="inline-flex"
                                        onsubmit="return confirm('Bạn có chắc chắn muốn xóa phim dùng này không?');">
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
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Product Drawer -->
    <div
        id="drawer-update-product-default"
        class="fixed hidden left-0 right-0 z-50 overflow-x-hidden overflow-y-auto md:inset-0 bg-gray-900/50"
        tabindex="-1"
    >
        <div class="max-w-2xl px-4 relative left-1/2 top-0 transform -translate-x-1/2">
            <div class=" bg-white rounded-lg shadow">
                <div class="flex items-center justify-between p-5 border-b rounded-t">
                    <h5
                        id="drawer-label"
                        class="inline-flex items-center text-sm font-semibold text-gray-500 uppercase"
                    >
                        Cập nhật phim
                    </h5>
                    <button
                        id="drawer-update-product-default-close"
                        type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 inline-flex items-center"
                    >
                        <svg
                            class="w-5 h-5"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg
                        >
                        <span class="sr-only">Close menu</span>
                    </button>
                </div>
                <div class="p-6 space-y-6">
                    <form action="#" method="POST">
                        @csrf
                        <div class="space-y-4">
                            <div>
                                <x-label-form for="title_edit">
                                    Tên phim
                                </x-label-form>
                                <x-input-form type="text" name="title_edit" id="title_edit"
                                              placeholder="Tên phim" value=""
                                              required="true"/>
                            </div>
                            <div>
                                <x-label-form for="category_edit">
                                    Thể loại
                                </x-label-form>
                                <select
                                    id="category_edit"
                                    name="category_edit"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                >
                                    <option
                                        value="Hoạt hình">
                                        Hoạt hình
                                    </option>
                                    <option
                                        value="Hành động">
                                        Hành động
                                    </option>
                                    <option
                                        value="Phiêu lưu">
                                        Phiêu lưu
                                    </option>
                                    <option
                                        value="Kinh dị">
                                        Kinh dị
                                    </option>
                                </select>
                            </div>
                            <div>
                                <x-label-form for="duration_edit">
                                    Thời lượng
                                </x-label-form>
                                <x-input-form type="text" name="duration_edit" id="duration_edit"
                                              placeholder="Thời lượng" value=""
                                              required="true"/>
                            </div>
                            <div>
                                <x-label-form for="release_date_edit">
                                    Ngày ra mắt
                                </x-label-form>
                                <x-input-form type="date" name="release_date_edit" id="release_date_edit"
                                              placeholder="Ngày ra mắt" value=""></x-input-form>
                            </div>
                            <div>
                                <x-label-form for="trailer_edit">
                                    Link Trailer
                                </x-label-form>
                                <x-input-form type="text" name="trailer_edit" id="trailer_edit"
                                              placeholder="Link Trailer" value=""
                                              required="true"/>
                            </div>
                            <div>
                                <x-label-form for="image_edit">
                                    Link Ảnh
                                </x-label-form>
                                <x-input-form type="text" name="image_edit" id="image_edit"
                                              placeholder="Link Ảnh" value=""
                                              required="true"/>
                            </div>
                            <div>
                                <x-label-form for="price_edit">
                                    Giá vé
                                </x-label-form>
                                <x-input-form type="number" name="price_edit" id="price_edit"
                                              placeholder="Giá vé" value=""
                                              required="true"/>
                            </div>
                            <div>
                                <x-label-form for="description_edit">
                                    Mô tả
                                </x-label-form>
                                <textarea
                                    id="description_edit"
                                    name="description_edit"
                                    rows="4"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                    placeholder="Nhập mô tả"
                                ></textarea>
                            </div>
                        </div>
                        <div
                            class="bottom-0 left-0 flex justify-center w-full pt-4 pb-4 mt-4 space-x-4 sm:px-4 sm:mt-0"
                        >
                            <button
                                type="submit"
                                class="w-full justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                            >
                                Cập nhật
                            </button>
                            <button
                                type="button"
                                class="w-full justify-center text-red-600 inline-flex items-center hover:text-white border border-red-600 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                            >
                                <svg
                                    class="w-5 h-5 mr-1 -ml-1"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Hủy
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{--            <!-- Delete Product Drawer -->--}}
    <div
        id="drawer-delete-product-default"
        class="fixed hidden left-0 right-0 z-50 overflow-x-hidden overflow-y-auto md:inset-0 bg-gray-900/50"
        tabindex="-1"
    >
        <div class="max-w-2xl px-4 relative left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2">
            <!-- Modal content -->
            <div class=" bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex justify-end p-2">
                    <button
                        id="drawer-delete-product-default-close"
                        type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 inline-flex items-center"
                    >
                        <svg
                            class="w-5 h-5"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg
                        >
                        <span class="sr-only">Close menu</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 pt-0 text-center">
                    <svg
                        class="w-16 h-16 mx-auto text-red-600"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg
                    >
                    <h3 class="mt-5 mb-6 text-lg text-gray-500">
                        Bạn có chắc chắn muốn xóa phim này không?
                    </h3>
                    <div class="space-x-2">
                        <form action="#" method="POST">
                            @csrf
                            @method('DELETE')
                            <button
                                type="submit"
                                id="deleteProductButton"
                                class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-base inline-flex items-center px-3 py-2.5 text-center mr-2"
                            >
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
                                Xóa phim
                            </button>
                            <button
                                id="delete-movie-modal-close-delete"
                                type="button"
                                class="text-gray-900 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-blue-300 border border-gray-200 font-medium inline-flex items-center rounded-lg text-base px-3 py-2.5 text-center :bg-gray-800 :text-gray-400 :border-gray-600 :hover:text-white :hover:bg-gray-700 :focus:ring-gray-700"
                            >
                                Không, hủy
                            </button>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>
    {{--            <!-- Add Product Drawer -->--}}
    <div
        id="drawer-create-product-default"
        class="fixed hidden left-0 right-0 z-50 overflow-x-hidden overflow-y-auto md:inset-0 bg-gray-900/50"
        tabindex="-1"
    >
        <div class="max-w-2xl px-4 relative left-1/2 top-0 transform -translate-x-1/2">
            <div class="bg-white rounded-t-lg shadow">
                <div class="flex items-start justify-between p-5 border-b rounded-t">
                    <h5
                        id="drawer-label"
                        class="inline-flex items-center text-sm font-semibold text-gray-500 uppercase"
                    >
                        Thêm phim
                    </h5>
                    <button
                        id="drawer-create-product-default-close"
                        type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 inline-flex items-center"
                    >
                        <svg
                            class="w-5 h-5"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg
                        >
                        <span class="sr-only">Close menu</span>
                    </button>
                </div>
            </div>
            <div class="p-6 space-y-6 bg-white">
                <form action="#" method="POST">
                    @csrf
                    <div class="space-y-4">
                        <div>
                            <x-label-form for="title_create">Tên phim</x-label-form>
                            <x-input-form type="text" name="title" id="title_create" placeholder="Tên phim"
                                          required="true"/>
                        </div>
                        <div>
                            <x-label-form for="category_create">Thể loại</x-label-form>
                            <select id="category_create" name="category"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                <option value="Hoạt hình" selected>Hoạt hình</option>
                                <option value="Flowbite">Flowbite</option>
                                <option value="React">React</option>
                                <option value="Angular">Angular</option>
                                <option value="Vue">Vue</option>
                            </select>
                        </div>
                        <div>
                            <x-label-form for="duration_create">Thời lượng</x-label-form>
                            <x-input-form type="number" name="duration" id="duration_create"
                                          placeholder="Thời lượng" required="true"/>
                        </div>
                        <div>
                            <x-label-form for="release_date_create">Ngày ra mắt</x-label-form>
                            <x-input-form type="date" name="release_date" id="release_date_create"
                                          placeholder="Ngày ra mắt" required="true"/>
                        </div>
                        <div>
                            <x-label-form for="trailer_url_create">Link Trailer</x-label-form>
                            <x-input-form type="text" name="trailer_url" id="trailer_url_create"
                                          placeholder="Link Trailer" required="true"/>
                        </div>
                        <div>
                            <x-label-form for="img-url_create">Link Ảnh</x-label-form>
                            <x-input-form type="text" name="image_url" id="img-url_create"
                                          placeholder="Link Ảnh" required="true"/>
                        </div>
                        <div>
                            <x-label-form for="price_create">Giá vé</x-label-form>
                            <x-input-form type="number" name="price" id="price_create" placeholder="Giá vé"
                                          required="true"/>
                        </div>
                        <div>
                            <label for="description_create"
                                   class="block mb-2 text-sm font-medium text-gray-900">Mô tả</label>
                            <textarea id="description_create" name="description" rows="4"
                                      class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                      placeholder="Nhập mô tả"></textarea>
                        </div>
                        <div class="bottom-0 left-0 flex justify-center w-full pb-4 space-x-4 md:px-4">
                            <button type="submit"
                                    class="text-white w-full justify-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                Thêm phim
                            </button>
                            <button type="button"
                                    class="inline-flex w-full justify-center text-gray-500 items-center bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">
                                Huỷ
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection





