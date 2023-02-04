<div>
    <header class="text-gray-600 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
          <a href="{{ route('index') }}" class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <img src="{{asset("images/carMeetLogo.png")}}" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 rounded-full" viewBox="0 0 24 24">
            <span class="ml-3 text-xl">carMEET</span>
          </a>
          <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
            <a href="{{ route('events') }}" class="mr-5 hover:text-gray-900 hover:bg-yellow-500">イベント一覧</a>
          </nav>
          @if (Route::has('login'))
          <div class="hidden top-0 right-0 px-6 py-4 sm:block">
              @auth
                  <a href="{{ url('/dashboard') }}" class="inline-flex items-center bg-yellow-200 border-0 py-1 px-3 focus:outline-none hover:bg-yellow-500 rounded text-base mt-4 md:mt-0">プロフィール</a>
              @else
                  <a href="{{ route('login') }}" class="inline-flex items-center bg-yellow-200 border-0 py-1 px-3 focus:outline-none hover:bg-yellow-500 rounded text-base mt-4 md:mt-0">ログイン</a>

                  @if (Route::has('register'))
                      <a href="{{ route('register') }}" class="inline-flex items-center bg-yellow-200 border-0 py-1 px-3 focus:outline-none hover:bg-yellow-500 rounded text-base mt-4 md:mt-0">新規登録</a>
                  @endif
              @endauth
          </div>
      @endif
        </div>
      </header>
</div>