<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('イベント登録') }}
    </h2>
  </x-slot>

  <x-jet-validation-errors class="mb-4" />

  @if (session('status'))
      <div class="mb-4 font-medium text-sm text-green-600">
          {{ session('status') }}
      </div>
  @endif

  <form method="POST" action="/store" enctype="multipart/form-data">
      @csrf
      <div class="px-4 py-12 mx-auto max-w-7xl sm:px-6 md:px-12 lg:px-24 lg:py-24">
      <div class="justify-center mx-auto text-left align-bottom transition-all transform bg-white rounded-lg sm:align-middle sm:max-w-2xl sm:w-full">
          <div class="w-full px-6 py-3">
              <div>
                  <div class="mt-3 text-left sm:mt-5">
                      <a href="/" class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                          <img src="{{asset("images/carMeetLogo.png")}}" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 rounded-full" viewBox="0 0 24 24">
                          <span class="ml-3 text-xl">carMEET</span>
                      </a>
                      <div class="inline-flex items-center w-full">
                      <h3 class="text-lg font-bold text-neutral-600 l eading-6 lg:text-5xl">イベント登録</h3>
                      </div>
                      <div class="mt-4 text-base text-gray-500">
                      </div>
                  </div>
              </div>
  
              <div class="mt-6 space-y-2">
                <div>
                    <x-jet-label for="image" class="sr-only" value="{{ __('Image') }}"/>
                    <x-jet-input type="file" name="image" id="image" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300" :value="old('image')" required autofocus/>
                </div>
                <div>
                    <x-jet-label for="name" class="sr-only" value="{{ __('Name') }}"/>
                    <x-jet-input type="text" name="name" id="name" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300" placeholder="Input your Name" :value="old('name')" required autofocus/>
                </div>
                <div>
                    <x-jet-label for="max_people" class="sr-only" value="{{ __('Max_people') }}"/>
                    <x-jet-input type="text" name="max_people" id="max_people" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300" placeholder="Max people" :value="old('max_people')" required autofocus/>
                </div>
                <div>
                    <x-jet-label for="start_date" class="sr-only" value="{{ __('Start_date') }}"/>
                    <x-jet-input type="text" name="start_date" id="start_date" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300" placeholder="Start Date" :value="old('start_date')" required autofocus/>
                </div>
                <div>
                    <x-jet-label for="end_date" class="sr-only" value="{{ __('End_date') }}"/>
                    <x-jet-input type="text" name="end_date" id="end_date" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300" placeholder="End Date" :value="old('end_date')" required autofocus/>
                </div>
                <div>
                    <x-jet-label for="content" class="sr-only"/>
                    <x-jet-input type="text" name="content" id="content" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300" placeholder="Content" :value="old('content')" required autofocus/>
                </div>
                <div class="flex flex-col mt-4 lg:space-y-2">
                    <x-jet-button>{{ __('イベント登録') }}</x-jet-button>
                </div>
              </div>
          </div>
    
      </div>
      </div>
  </form>

</x-app-layout>