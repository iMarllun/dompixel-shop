<div class="absolute z-50 w-full h-full flex justify-center items-center bg-black bg-opacity-50 fixed top-0 left-0 hidden" id="deleteProductModal">
    <div class="bg-white w-96 h-32 rounded-lg p-5 !pt-2 pb-10">
        <p class="text-gray-600 pb-4">
            Confirmar exclusão
        </p>
        <p class="text-gray-600">
            Tem certeza que deseja deletar o produto<span id="productName" class="font-bold"></span>?
        </p>
        <div class="mt-1 flex justify-end">
            <button type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg" onclick="deleteProduct()">
                Deletar
            </button>
            <button type="button" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-lg ml-4" onclick="closeModal('deleteProductModal')">
                Cancelar
            </button>
        </div>
    </div>
</div>

<script>
    let product;
    function closeModal($id) {
        const modal = document.getElementById($id);
        modal.classList.add('hidden');
    }
    function showModal($id) {
        const modal = document.getElementById('deleteProductModal');
        modal.classList.remove('hidden');
        product = $id;
    }
    function deleteProduct() {
        const form = document.createElement('form');
        form.action = '/products/' + product;
        form.method = 'POST';
        form.innerHTML = `
            @csrf
            @method('DELETE')
        `;
        document.body.appendChild(form);
        form.submit();
    }
</script>
