@extends('layouts.app')
<span class="rounded-lg shadow-lg transition-all transform duration-500 mt-10">
    <div class="md:mx-8 mx-0 bg-white rounded-lg shadow-lg my-8 p-8 rounded-lg">
        <div class="flex justify-between items-center pb-8">
            <h2 class="text-3xl font-bold mb-4">Catálogo de Produtos</h2>
            <div class="mb-4 flex justify-end">
                <a href="{{ route('products.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Adicionar Produto</a>
            </div>
        </div>
        <table class="table-auto w-full bg-white">
            <thead class="text-left  border-b border-gray-300 text-gray-600 font-bold py-8 ml-8">
            <tr class="text-gray-600 text-sm font-light font-sans">
                <th class="pl-4">
                    Nome
                </th>
                <th>Preço</th>
                <th class="hidden md:table-cell">Descrição</th>
                <th class="hidden md:table-cell">Quantidade</th>
                <th class="hidden md:table-cell">Data de criação</th>
                <th class="text-center">Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($products as $product)
                <tr class="border-b border-gray-300 hover:bg-gray-100 text-gray-600 select-none transition-all h-10 rounded-lg">
                        <td class="pl-4 cursor-pointer" onclick="window.location.href = '{{ route('products.show', $product->id) }}'">
                            <p class="text-gray-600 text-sm truncate hover:text-blue-500">
                            {{ $product->name }}
                            </p>
                        </td>
                        <td>
                            <p class="text-gray-600 text-sm truncate hover:text-gray-800">
                                R$ {{ number_format($product->price, 2, ',', '.') }}
                            </p>
                        </td>
                        <td class="hidden md:table-cell">
                            <p class="text-gray-600 text-sm truncate hover:text-gray-800">
                                {{ $product->description }}
                            </p>
                        </td>
                        <td class="hidden md:table-cell">
                            <p class="text-gray-600 text-sm truncate hover:text-gray-800">
                                {{ $product->quantity }}
                            </p>
                        </td>
                        <td class="hidden md:table-cell">
                            <p class="text-gray-600 text-sm truncate hover:text-gray-800">
                                {{ $product->created_at->format('d/m/Y à\s H:i:s') }}
                            </p>
                        </td>
                    <td>
                        <div class="flex justify-center gap-x-4">
                            <a class="cursor-pointer hover:text-blue-500" href="{{ route('products.edit', $product->id) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                                  <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z" />
                                </svg>
                            </a>
                            <div class="cursor-pointer hover:text-blue-500" onclick="showModal({{ $product->id }})">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                                  <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 013.878.512.75.75 0 11-.256 1.478l-.209-.035-1.005 13.07a3 3 0 01-2.991 2.77H8.084a3 3 0 01-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 01-.256-1.478A48.567 48.567 0 017.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 013.369 0c1.603.051 2.815 1.387 2.815 2.951zm-6.136-1.452a51.196 51.196 0 013.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 00-6 0v-.113c0-.794.609-1.428 1.364-1.452zm-.355 5.945a.75.75 0 10-1.5.058l.347 9a.75.75 0 101.499-.058l-.346-9zm5.48.058a.75.75 0 10-1.498-.058l-.347 9a.75.75 0 001.5.058l.345-9z" clip-rule="evenodd" />
                                </svg>
                             </div>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        @if($products->isEmpty())
            <div class="flex justify-center bg-white pb-8">
                <p class="text-gray-600 my-8 text-2xl">
                    Não há produtos cadastrados.
                </p>
            </div>
        @endif
    </div>
</span>

@include('products.partials.product-modal')
