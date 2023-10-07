<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('イベント編集') }}
    </h2>
  </x-slot>

  <x-jet-validation-errors class="mb-4" />

  @if (session('status'))
      <div class="mb-4 font-medium text-sm text-green-600">
          {{ session('status') }}
      </div>
  @endif

  <form method="POST" action="{{ route('login') }}">
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
                      <h3 class="text-lg font-bold text-neutral-600 l eading-6 lg:text-5xl">イベント編集</h3>
                      </div>
                      <div class="mt-4 text-base text-gray-500">
                      </div>
                  </div>
              </div>
  
              <div class="mt-6 space-y-2">
                  <div>
                      <x-jet-label for="email" class="sr-only" value="{{ __('Email') }}"/>
                      <x-jet-input type="email" name="email" id="email" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300" placeholder="Enter your email" :value="old('email')" required autofocus/>
                  </div>
                  <div>
                      <x-jet-label for="password" class="sr-only" value="{{ __('Password') }}"/>
                      <x-jet-input type="password" name="password" id="password" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300" placeholder="Enter your password" required autocomplete="current-password"/>
                  </div>
                  <div>
                    <x-jet-label for="password" class="sr-only" value="{{ __('Password') }}"/>
                    <x-jet-input type="password" name="password" id="password" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300" placeholder="Enter your password" required autocomplete="current-password"/>
                  </div>
                  <div>
                    <x-jet-label for="password" class="sr-only" value="{{ __('Password') }}"/>
                    <x-jet-input type="password" name="password" id="password" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300" placeholder="Enter your password" required autocomplete="current-password"/>
                  </div>
                  <div>
                    <x-textarea class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">

                    </x-textarea>
                  </div>
                  <div class="flex flex-col mt-4 lg:space-y-2">
                      <x-jet-button>{{ __('イベント編集') }}</x-jet-button>
                  </div>
              </div>
          </div>
    
      </div>
      </div>
  </form>

</x-app-layout>