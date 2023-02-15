@extends('layouts.app')

@section('content')
    <div class="flex">
        <a href="{{ route('products.create') }}" class="bg-purple-500 p-3 rounded w-full text-center text-white">
            Create Product
        </a>
    </div>
    <div class="mt-10">
        <table class="table-auto w-full">
            <thead class="border-b-2 border-slate-500">
                <th class="w-1/2">
                    Name
                </th>
                <th class="w-1/2">
                    Price
                </th>
            </thead>
            <tbody>
                @forelse ($products as $product)
                    <tr>
                        <td>
                            {{ $product->name }}
                        </td>
                        <td>
                            {{ $product->price }}
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="2" class="text-center">
                            No products found
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
