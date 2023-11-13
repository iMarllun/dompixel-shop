<x-layout>
    <div class="w-full bg-white rounded-lg shadow-lg p-6 transition-all transform duration-500 mt-10 md:w-1/2 mx-auto">
    <h1 class="text-3xl font-bold mb-4">
        {{ $product->name }}
    </h1>
    <p class="text-gray-600">
        Preço: R$ {{ number_format($product->price, 2, ',', '.') }}
    </p>
    <p class="text-gray-600">
        Quantidade: {{ $product->quantity }}
    </p>
    <p class="text-gray-600">
        Descrição: {{ $product->description }}
    </p>
    <p class="text-gray-600">
        Criado em: {{ $product->created_at->format('d/m/Y à\s H:i:s') }}
    </p>
    <div class="flex justify-end">
        <a href="{{ route('products.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Voltar</a>
    </div>
</x-layout>
