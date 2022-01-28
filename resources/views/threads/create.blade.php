<x-app-layout>
  <x-slot name="header">
    <div class="flex items-center justify-between">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('New Thread') }}
      </h2>
    </div>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <form action="{{ route('threads.create') }}" method="POST">
            @csrf
            <div>
              <label for="title">{{ __('Thread title') }}</label>
              <textarea name="title" id="title" cols="30" rows="2"
                class="w-full rounded-lg border-2 bg-gray-100 @error('title') border-red-500 @enderror"></textarea>

              @error('title')
              <div class="text-red-500 text-sm mt-2">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="mt-4">
              <label for="body">{{ __('First comment') }}</label>
              <textarea name="body" id="body" cols="30" rows="4"
                class="w-full rounded-lg border-2 bg-gray-100 @error('comment') border-red-500 @enderror"></textarea>

              @error('body')
              <div class="text-red-500 text-sm mt-2">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="mt-4">
              <button type="submit" class="bg-blue-500 rounded font-medium px-4 py-2 text-white">{{ __('Submit')
                }}</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>