<x-layouts.admin>
      <div class="grid grid-cols-1 gap-6 p-8">
              <div class="space-y-6">
                <div
                  class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]"
                >
                  <div class="px-5 py-4 sm:px-6 sm:py-5">
                    <h3
                      class="text-base font-medium text-gray-800 dark:text-white/90"
                    >
                      Perbarui Produk
                    </h3>
                  </div>
                  <div
                    class="space-y-6 border-t border-gray-100 p-5 sm:p-6 dark:border-gray-800"
                  >
                    <!-- Elements -->
                    <form action="{{ route('products.update', $product->id) }}" method="POST">
                        @method('PUT')
                        @csrf
                    <div>
                      <label
                        class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400"
                      >
                        Nama Produk
                      </label>
                      <input
                        type="text"
                        value="{{ $product->name }}"
                        name="name"
                        placeholder="Masukkan nama produk"
                        class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                      />
                    </div>
                     <div>
                      <label
                        class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400"
                      >
                        Deskripsi
                      </label>
                      <textarea
                        placeholder="Deskripsikan produk"
                        type="text"
                        name="description"
                        
                        rows="6"
                        class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                      >{{ $product->description }}</textarea>
                    </div>
                 <div>
                      <label
                        class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400"
                      >
                        Harga
                      </label>
                      <input
                        type="text"
                        value="{{ $product->price }}"
                        name="price"
                        placeholder="Masukkan harga produk"
                        class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                      />
                    </div>
                        <div>
                        <label
                            class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400"
                        >
                            Diskon (%)
                        </label>
                        <input
                            type="text"
                            name="discount"
                            value="{{ $product->discount }}"
                            placeholder="Masukkan diskon produk"
                            class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                        />
                    <div>
                      <label
                        class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400"
                      >
                        Kuantitas Stok
                      </label>
                      <input
                        type="text"
                        name="stock_quantity"
                        value="{{ $product->stock_quantity }}"
                        placeholder="Masukkan kuantitas stok"
                        class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                      />
                     <div>
                      <label
                        class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400"
                      >
                        Kategori
                      </label>
                      <div
                        x-data="{ isOptionSelected: false }"
                        class="relative z-20 bg-transparent"
                      >
                        <select
                          class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full appearance-none rounded-lg border border-gray-300 bg-transparent bg-none px-4 py-2.5 pr-11 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                          :class="isOptionSelected && 'text-gray-800 dark:text-white/90'"
                          @change="isOptionSelected = true"
                            name="category_id"
                            value="{{ $product->category_id }}"
                        >
                            <option value="" disabled selected hidden
                                >Pilih Kategori</option
                            >
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}" @selected(($product->category_id) == $category->id)>{{ $category->name }}</option>
                            @endforeach
                        </select>
                        <span
                          class="pointer-events-none absolute top-1/2 right-4 z-30 -translate-y-1/2 text-gray-500 dark:text-gray-400"
                        >
                          <svg
                            class="stroke-current"
                            width="20"
                            height="20"
                            viewBox="0 0 20 20"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M4.79175 7.396L10.0001 12.6043L15.2084 7.396"
                              stroke=""
                              stroke-width="1.5"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            />
                          </svg>
                        </span>
                      </div>
                    </div>
                    <div class="pt-4">
                      <button
                        type="submit"
                        class="inline-flex items-center gap-2 rounded-lg border border-gray-300 bg-white px-4 py-2.5 text-theme-sm font-medium text-gray-700 shadow-theme-xs hover:bg-gray-50 hover:text-gray-800 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-white/[0.03] dark:hover:text-gray-200"
                      >
                        Simpan
                      </button>
                    </form>
                    
                  </div>
                </div>
              </div>
              
            </div>
            </div>

           
              <div class="space-y-6">
                <div
                  class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]"
                >
                  <div class="px-5 py-4 sm:px-6 sm:py-5">
                    <h3
                      class="text-base font-medium text-gray-800 dark:text-white/90"
                    >
                      Gambar Produk
                    </h3>
                  </div>
                  <div
                    class="space-y-6 border-t border-gray-100 p-5 sm:p-6 dark:border-gray-800"
                  >
                    
                 </div>
            
                </div>
              </div>

              <div class="space-y-6">
                <div
                  class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]"
                >
                  <div class="px-5 py-4 sm:px-6 sm:py-5">
                    <h3
                      class="text-base font-medium text-gray-800 dark:text-white/90"
                    >
                      Review Produk
                    </h3>
                  </div>
                  <div
                    class="space-y-6 border-t border-gray-100 p-5 sm:p-6 dark:border-gray-800"
                  >
                    
                 </div>
            
                </div>
              </div>
              
            </div>
            </div>
</x-layouts.admin>