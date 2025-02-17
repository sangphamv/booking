<input type="{{ $type ?? 'text' }}" name="{{ $name }}" id="{{ $id }} value="{{ $value ?? '' }}"
{{ $attributes->merge(['class' => 'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5']) }}
placeholder="{{ $placeholder ?? '' }}" required="{{ $required ?? false }}">
