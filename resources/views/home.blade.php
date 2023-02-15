@extends('layouts.app')

@section('content')
    <div class="grid grid-cols-4 gap-5">
        @foreach ($products as $product)
            <div class="bg-white rounded-lg shadow-lg p-5">
                <x-cld-image :public-id="$product->thumb_name" crop="fill" width="300" height="300"
                    cartoonify trim="50_yellow" oil-paint round-corners class="w-full rounded-lg mb-5" />
                <div class="flex justify-between mt-3">
                    <div class="font-bold text-xl mb-2">{{ $product->name }}</div>
                    <div class="text-gray-600 text-sm">{{ $product->price_formatted }}</div>
                </div>
                <div class="text-gray-600 text-sm">{{ $product->description }}</div>
            </div>
        @endforeach
    </div>
@endsection
