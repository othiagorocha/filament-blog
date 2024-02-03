<div>
  <div>
    <h1>Listagem de produtos</h1>
  </div>
  <div>
    <section class="bg-gray-50 p-3 dark:bg-gray-900 sm:p-5">
      <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
        <!-- Start coding here -->
        <div class="relative overflow-hidden bg-white shadow-md dark:bg-gray-800 sm:rounded-lg">
          <div
            class="flex flex-col items-center justify-between space-y-3 p-4 md:flex-row md:space-x-4 md:space-y-0">
            <div class="w-full md:w-1/2">
              <form wire:submit.prevent='search' class="flex items-center">
                <label for="simple-search" class="sr-only">Search</label>
                <div class="relative w-full">
                  <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                    <svg aria-hidden="true" class="h-5 w-5 text-gray-500 dark:text-gray-400"
                      fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd"
                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                        clip-rule="evenodd" />
                    </svg>
                  </div>
                  <input type="text" id="simple-search"
                    wire:model.live="search"
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2 pl-10 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                    placeholder="Search" required="">
                </div>
              </form>
            </div>
            <div
              class="flex w-full flex-shrink-0 flex-col items-stretch justify-end space-y-2 md:w-auto md:flex-row md:items-center md:space-x-3 md:space-y-0">
              <button type="button"
                class="flex items-center justify-center rounded-lg bg-primary-700 px-4 py-2 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                <svg class="mr-2 h-3.5 w-3.5" fill="currentColor" viewbox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                  <path clip-rule="evenodd" fill-rule="evenodd"
                    d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                </svg>
                Add product
              </button>
              <div class="relative flex w-full items-center space-x-3 md:w-auto">
                <button id="actionsDropdownButton" data-dropdown-toggle="actionsDropdown"
                  wire:click="toggleDropdown('actions')"
                  class="flex w-full items-center justify-center rounded-lg border border-gray-200 bg-white px-4 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 md:w-auto"
                  type="button">
                  <svg class="-ml-1 mr-1.5 h-5 w-5" fill="currentColor" viewbox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path clip-rule="evenodd" fill-rule="evenodd"
                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                  </svg>
                  Actions
                </button>
                <div id="actionsDropdown"
                  class="{{ $dropdowns['actions'] ? '' : 'hidden' }} absolute left-0 top-full z-10 w-44 -translate-x-2 divide-y divide-gray-100 rounded bg-white shadow dark:divide-gray-600 dark:bg-gray-700">
                  <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                    aria-labelledby="actionsDropdownButton">
                    <li>
                      <a href="#"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mass
                        Edit</a>
                    </li>
                  </ul>
                  <div class="py-1">
                    <a href="#"
                      class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white">Delete
                      all</a>
                  </div>
                </div>
                <button id="filterDropdownButton" data-dropdown-toggle="filterDropdown"
                  wire:click="toggleDropdown('filter')"
                  class="flex w-full items-center justify-center rounded-lg border border-gray-200 bg-white px-4 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 md:w-auto"
                  type="button">
                  <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                    class="mr-2 h-4 w-4 text-gray-400" viewbox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                      d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z"
                      clip-rule="evenodd" />
                  </svg>
                  Filter
                  <svg class="-mr-1 ml-1.5 h-5 w-5" fill="currentColor" viewbox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path clip-rule="evenodd" fill-rule="evenodd"
                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                  </svg>
                </button>
                <div id="filterDropdown"
                  class="{{ $dropdowns['filter'] ? '' : 'hidden' }} absolute right-0 top-full z-10 w-44 divide-y divide-gray-100 rounded bg-white p-1 shadow dark:divide-gray-600 dark:bg-gray-700">
                  <h6 class="mb-3 text-sm font-medium text-gray-900 dark:text-white">Choose brand</h6>
                  <ul class="space-y-2 text-sm" aria-labelledby="filterDropdownButton">
                    <li class="flex items-center">
                      <input id="apple" type="checkbox" value=""
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-primary-600">
                      <label for="apple"
                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">Apple
                        (56)</label>
                    </li>
                    <li class="flex items-center">
                      <input id="fitbit" type="checkbox" value=""
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-primary-600">
                      <label for="fitbit"
                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">Microsoft
                        (16)</label>
                    </li>
                    <li class="flex items-center">
                      <input id="razor" type="checkbox" value=""
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-primary-600">
                      <label for="razor"
                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">Razor
                        (49)</label>
                    </li>
                    <li class="flex items-center">
                      <input id="nikon" type="checkbox" value=""
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-primary-600">
                      <label for="nikon"
                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">Nikon
                        (12)</label>
                    </li>
                    <li class="flex items-center">
                      <input id="benq" type="checkbox" value=""
                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-primary-600">
                      <label for="benq"
                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">BenQ
                        (74)</label>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="overflow-x-auto">
            <table class="w-full text-left text-sm text-gray-500 dark:text-gray-400">
              <thead
                class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                  <th scope="col" class="px-4 py-3">ID</th>
                  <th scope="col" class="px-4 py-3">Title</th>
                  <th scope="col" class="px-4 py-3">Description</th>
                  <th scope="col" class="px-4 py-3">Price</th>
                  <th scope="col" class="px-4 py-3">Category</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($products as $product)
                  <tr class="border-b dark:border-gray-700">
                    <th scope="row"
                      class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white">
                      {{ $product['id'] }}</th>
                    <td class="px-4 py-3">{{ $product['title'] }}</td>
                    <td class="px-4 py-3">{{ $product['description'] }}</td>
                    <td class="px-4 py-3">{{ $product['price'] }}</td>
                    <td class="px-4 py-3">{{ $product['category'] }}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>

          <nav class="flex flex-col items-start justify-between space-y-3 p-4 md:flex-row md:items-center md:space-y-0"
            aria-label="Table navigation">
            <span class="text-sm font-normal text-gray-500 dark:text-gray-400">
              Showing
              <span class="font-semibold text-gray-900 dark:text-white">{{ ($page - 1) * 5 + 1 }}</span>
              -
              <span
                class="font-semibold text-gray-900 dark:text-white">{{ min($page * 5, count($allProducts)) }}</span>
              of
              <span class="font-semibold text-gray-900 dark:text-white">{{ count($allProducts) }}</span>
            </span>
            <ul class="inline-flex items-stretch -space-x-px">
              <!-- Previous Page Link -->
              <li>
                <button wire:click.prevent="goToPage(1)"
                  {{ $page === 1 ? 'disabled' : '' }}
                  class="flex h-full items-center justify-center rounded-l-lg border border-gray-300 bg-white px-1.5 py-1.5 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 disabled:bg-gray-100 disabled:text-gray-400 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                  <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="size-4">
                    <path fill="none" d="M0 0h24v24H0z"></path>
                    <path d="M17.59 18 19 16.59 14.42 12 19 7.41 17.59 6l-6 6z"></path>
                    <path d="m11 18 1.41-1.41L7.83 12l4.58-4.59L11 6l-6 6z"></path>
                  </svg>
                </button>
              </li>
              <li>
                <button wire:click.prevent="goToPage({{ $page - 1 }})"
                  {{ $page === 1 ? 'disabled' : '' }}
                  class="flex h-full items-center justify-center border border-gray-300 bg-white px-1.5 py-1.5 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 disabled:bg-gray-100 disabled:text-gray-400 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                  <svg class="size-4" aria-hidden="true" fill="currentColor"
                    viewbox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                      d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                      clip-rule="evenodd" />
                  </svg>
                </button>
              </li>
              <!-- Next Page Link -->
              <li>
                <button wire:click.prevent="goToPage({{ $page + 1 }})"
                  {{ $page >= ceil(count($allProducts) / 5) ? 'disabled' : '' }}
                  class="flex h-full items-center justify-center border border-gray-300 bg-white px-1.5 py-1.5 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 disabled:bg-gray-100 disabled:text-gray-400 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                  <svg class="size-4" aria-hidden="true" fill="currentColor"
                    viewbox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                      d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                      clip-rule="evenodd" />
                  </svg>
                </button>
              </li>
              <!-- Last Page Link -->
              <li>
                <button wire:click.prevent="goToPage({{ ceil(count($allProducts) / 5) }})"
                  {{ $page >= ceil(count($allProducts) / 5) ? 'disabled' : '' }}
                  class="flex h-full items-center justify-center rounded-r-lg border border-gray-300 bg-white px-1.5 py-1.5 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 disabled:bg-gray-100 disabled:text-gray-400 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                  <svg stroke="currentColor" fill="currentColor" stroke-width="0" class='size-4'
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" d="M0 0h24v24H0z"></path>
                    <path d="M6.41 6 5 7.41 9.58 12 5 16.59 6.41 18l6-6z"></path>
                    <path d="m13 6-1.41 1.41L16.17 12l-4.58 4.59L13 18l6-6z"></path>
                  </svg>
                </button>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </section>
  </div>
</div>
