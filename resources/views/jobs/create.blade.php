<x-layout>
    <x-slot:heading>Creating Job</x-slot:heading>
    <form method="POST" action="/jobs">
        <div class="space-y-12">
            @csrf
          <div class="border-b border-gray-900/10 pb-12">
            {{-- Header --}}
            <div>
                <h2 class="text-base/7 font-semibold text-gray-900">Create new jobs</h2>
                <p class="mt-1 text-sm/6 text-gray-600">We just need a handful of information details from you</p>
            </div>
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            {{-- Form 1 --}}
              <div class="sm:col-span-4">
                <label for="title" class="block text-sm/6 font-medium text-gray-900">Title</label>
                <div class="mt-2">
                  <div class="flex items-center rounded-md bg-white px-2 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                    <input type="text" name="title" id="title" class="block min-w-0 grow py-3 px-2 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="Shift Transfer">
                  </div>
                </div>
              </div>  
            {{-- Form 2 --}}
              <div class="sm:col-span-4">
                <label for="salary" class="block text-sm/6 font-medium text-gray-900">Salary</label>
                <div class="mt-2">
                  <div class="flex items-center rounded-md bg-white px-2 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                    <input type="text" name="salary" id="salary" class="block min-w-0 grow py-3 pr-2 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="$30,000">
                  </div>
                </div>
              </div> 
            </div>
          </div>
        </div>
      
        <div class="mt-6 flex items-center justify-end gap-x-6">
          <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
          <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        </div>
      </form>
      
</x-layout>