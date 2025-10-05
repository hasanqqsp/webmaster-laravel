<x-layouts.admin>
        <div
  class="overflow-hidden rounded-2xl border border-gray-200 bg-white px-4 pb-3 pt-4 dark:border-gray-800 dark:bg-white/[0.03] sm:px-6 m-8"
>
    @if (session('success'))
    <div
  class="rounded-xl border border-success-500 bg-success-50 p-4 dark:border-success-500/30 dark:bg-success-500/15 mb-4"
>
  <div class="flex items-start gap-3">
    <div class="-mt-0.5 text-success-500">
      <svg
        class="fill-current"
        width="24"
        height="24"
        viewBox="0 0 24 24"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M3.70186 12.0001C3.70186 7.41711 7.41711 3.70186 12.0001 3.70186C16.5831 3.70186 20.2984 7.41711 20.2984 12.0001C20.2984 16.5831 16.5831 20.2984 12.0001 20.2984C7.41711 20.2984 3.70186 16.5831 3.70186 12.0001ZM12.0001 1.90186C6.423 1.90186 1.90186 6.423 1.90186 12.0001C1.90186 17.5772 6.423 22.0984 12.0001 22.0984C17.5772 22.0984 22.0984 17.5772 22.0984 12.0001C22.0984 6.423 17.5772 1.90186 12.0001 1.90186ZM15.6197 10.7395C15.9712 10.388 15.9712 9.81819 15.6197 9.46672C15.2683 9.11525 14.6984 9.11525 14.347 9.46672L11.1894 12.6243L9.6533 11.0883C9.30183 10.7368 8.73198 10.7368 8.38051 11.0883C8.02904 11.4397 8.02904 12.0096 8.38051 12.3611L10.553 14.5335C10.7217 14.7023 10.9507 14.7971 11.1894 14.7971C11.428 14.7971 11.657 14.7023 11.8257 14.5335L15.6197 10.7395Z"
          fill=""
        />
      </svg>
    </div>

    <div>
      <h4 class="mb-1 text-sm font-semibold text-gray-800 dark:text-white/90">
        Berhasil!
      </h4>

      <p class="text-sm text-gray-500 dark:text-gray-400">
        {{session('success')}}
      </p>

     
    </div>
  </div>
</div>
        
    @endif
  <div
    class="flex flex-col gap-2 mb-4 sm:flex-row sm:items-center sm:justify-between"
  >
    <div>
      <h3 class="text-lg font-semibold text-gray-800 dark:text-white/90">
        Kategori
      </h3>
    </div>
    <a href="{{ route("categories.create") }}" class="inline-flex items-center gap-2 rounded-lg border border-gray-300 bg-white px-4 py-2.5 text-theme-sm font-medium text-gray-700 shadow-theme-xs hover:bg-gray-50 hover:text-gray-800 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-white/[0.03] dark:hover:text-gray-200">
        Tambah Kategori
    </a>
    
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
                Nama Kategori
              </p>
            </div>
          </th>
          
          <th class="py-3">
            <div class="flex items-center">
              <p
                class="font-medium text-gray-500 text-theme-xs dark:text-gray-400"
              >
                Action
              </p>
            </div>
          </th>
          
        </tr>
      </thead>
      <!-- table header end -->

      <tbody class="divide-y divide-gray-100 dark:divide-gray-800">
        <!-- table body start -->

         @foreach ($categories as $category)
            <tr>
                <td class="whitespace-nowrap py-3">
                    <div class="flex items  -center">
                        <p class="text-gray-700 dark:text-white/90">{{ $category->name }}</p>
                    </div>
                </td>   
                <td class="whitespace-nowrap py-3">
                    <div class="flex items  -center gap-2">
                        <a href="{{ route('categories.edit', $category->id) }}" class="text-blue-600 hover:underline">Edit</a>
                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this category?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Delete</button>
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