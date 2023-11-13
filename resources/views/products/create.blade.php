<x-layout>
    <div class="bg-white rounded-lg shadow-lg p-6 w-full mx-auto md:w-1/2 transition-all transform duration-500 mt-10">
        <div class="flex justify-between items-center pb-8">
            <h2 class="text-3xl font-bold mb-4">Criar Produto</h2>
            <div class="mb-4 flex justify-end">
                <a href="{{ route('products.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Voltar</a>
            </div>
        </div>
        <div>
            @if ($errors->any())
                <div class="bg-red-500 text-white p-4 rounded-lg mb-6">
                    <ul class="list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li class="text-sm">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <form action="{{ route('products.store') }}" method="POST" class="flex flex-col gap-4">
            @csrf
            <label for="name" class="text-gray-600 -mb-3">Nome do Produto:</label>
            <input type="text" name="name" id="name" autofocus placeholder="Nome do Produto" required class="text-gray-600 border border-gray-300 p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">

            <label for="price" class="text-gray-600 -mb-3">Preço:</label>
            <input type="number" name="price" id="price" step="0.01" placeholder="Preço do Produto" required class="text-gray-600 border border-gray-300 p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">

            <label for="price" class="text-gray-600 -mb-3">Quantidade:</label>
            <input type="number" name="quantity" id="quantity" step="0.01" placeholder="Quantidade de Produtos" required class="text-gray-600 border border-gray-300 p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">

            <label for="description" class="text-gray-600 -mb-3">Descrição:</label>
            <textarea name="description" id="description" placeholder="Descrição do Produto" class="border border-gray-300 p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent text-gray-600"></textarea>

            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Adicionar Produto
            </button>
        </form>
    </div>
</x-layout>