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
                                href="{{ route('admin.movie.index') }}"
                                class="inline-flex items-center text-gray-700 hover:text-blue-600 :text-gray-300 :hover:text-white"
                            >
                                Quản lý tài phim
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
                                >Thêm phim</a
                                >
                            </div>
                        </li>
                    </ol>
                </nav>
                <h1
                    class="text-xl font-semibold text-gray-900 sm:text-2xl :text-white"
                >
                    Thêm phim
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
    <div class="flex flex-col bg-white shadow-lg rounded-lg">
        <div class="p-6 space-y-6">
            <form action="{{ route('admin.movie.update', $movie->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                        <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Tiêu đề</label>
                        <input type="text" name="title" id="title" value="{{ $movie->title }}" required
                               class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="category" class="block mb-2 text-sm font-medium text-gray-900">Thể loại</label>
                        <select name="category" id="category" required
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option value="Hành động" {{ $movie->category == 'Hành động' ? 'selected' : '' }}>Hành
                                động
                            </option>
                            <option value="Phiêu lưu" {{ $movie->category == 'Phiêu lưu' ? 'selected' : '' }}>Phiêu
                                lưu
                            </option>
                            <option value="Hài hước" {{ $movie->category == 'Hài hước' ? 'selected' : '' }}>Hài hước
                            </option>
                            <option value="Tâm lý" {{ $movie->category == 'Tâm lý' ? 'selected' : '' }}>Tâm lý</option>
                            <option value="Kinh dị" {{ $movie->category == 'Kinh dị' ? 'selected' : '' }}>Kinh dị
                            </option>
                            <option value="Khác" {{ $movie->category == 'Khác' ? 'selected' : '' }}>Khác</option>
                        </select>
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="duration" class="block mb-2 text-sm font-medium text-gray-900">Thời lượng</label>
                        <input type="number" name="duration" id="duration" value="{{ $movie->duration }}" required
                               class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="release_date" class="block mb-2 text-sm font-medium text-gray-900">Ngày ra
                            mắt</label>
                        <input type="date" name="release_date" id="release_date" value="{{ $movie->release_date }}"
                               required
                               class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="trailer" class="block mb-2 text-sm font-medium text-gray-900">Link Trailer</label>
                        <input type="url" name="trailer" id="trailer" value="{{ $movie->trailer }}" required
                               class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="image" class="block mb-2 text-sm font-medium text-gray-900">Link Ảnh</label>
                        <input type="url" name="image" id="image" value="{{ $movie->image }}" required
                               class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="price" class="block mb-2 text-sm font-medium text-gray-900">Giá vé</label>
                        <input type="number" name="price" id="price" value="{{ $movie->price }}" required
                               class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    </div>
                    <div class="col-span-6">
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Mô tả</label>
                        <textarea id="description" name="description" rows="4" required
                                  class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">{{ $movie->description }}</textarea>
                    </div>
                    <div class="col-span-6">
                        <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            Cập nhật phim
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
