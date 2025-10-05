<x-layouts.admin>
    <div
  class="overflow-hidden rounded-2xl border border-gray-200 bg-white px-4 pb-3 pt-4 dark:border-gray-800 dark:bg-white/[0.03] sm:px-6 m-8"
>
  <div
    class="flex flex-col gap-2 mb-4 sm:flex-row sm:items-center sm:justify-between"
  >
    <div>
      <h3 class="text-lg font-semibold text-gray-800 dark:text-white/90">
        Produk
      </h3>
    </div>

    <div class="flex items-center gap-3">
      

      <a
        href="{{ route("products.create") }}"
        class="inline-flex items-center gap-2 rounded-lg border border-gray-300 bg-white px-4 py-2.5 text-theme-sm font-medium text-gray-700 shadow-theme-xs hover:bg-gray-50 hover:text-gray-800 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-white/[0.03] dark:hover:text-gray-200"
      >
        Tambah Produk
      </a>
    </div>
  </div>

  <div class="w-full overflow-x-auto">
    <table class="min-w-full">
      <!-- table header start -->
      <thead>
        <tr class="border-gray-100 border-y dark:border-gray-800">
          <th class="py-3">
            <div class="flex items-center">
              <p
                class="font-medium text-gray-500 text-theme-xs dark:text-gray-400"
              >
                Products
              </p>
            </div>
          </th>
          <th class="py-3">
            <div class="flex items-center">
              <p
                class="font-medium text-gray-500 text-theme-xs dark:text-gray-400"
              >
                Category
              </p>
            </div>
          </th class="py-3">
          <th class="py-3">
            <div class="flex items-center">
              <p
                class="font-medium text-gray-500 text-theme-xs dark:text-gray-400"
              >
                Price
              </p>
            </div>
          </th>
          
        </tr>
      </thead>
      <!-- table header end -->

      <tbody class="divide-y divide-gray-100 dark:divide-gray-800">

        <!-- table body start -->
        @foreach ($products as $product)
            <tr>
          <td class="whitespace-nowrap py-3 pr-3">
            <div class="flex items

  -center">
                <p class="text-gray-700 dark:text-white/90">{{ $product->name }}</p>  
            </div>
          </td>
          <td class="whitespace-nowrap py-3 pr-3">
            <div class="flex items
  -center">
                <p class="text-gray-700 dark:text-white/90">{{ $product->category ? $product->category->name : 'Uncategorized' }}</p>
            </div>
          </td>
          <td class="whitespace-nowrap py-3 pr-3">
            <div class="flex items
  -center">
                <p class="text-gray-700 dark:text-white/90">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
            </div>
          </td>
          <td class="whitespace-nowrap py-3 pr-3">
            <div class="flex items
  -center gap-2">
                <a
                    href="{{ route('products.edit', $product->id) }}"
                    class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-600"
                >
                    Edit
                </a>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-600 hover:text-red-800 dark:text-red-400 dark:hover:text-red-600">
                        Hapus
                    </button>
                </form>
            </div>
          </td>
        </tr>
        @endforeach
        <!-- table body end -->
      </tbody>
    </table>
  </div>
</div>

    </x-layouts.admin>
