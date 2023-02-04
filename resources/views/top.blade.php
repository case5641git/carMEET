<html>
  <head>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
  </head>
  <body>
    <x-header/>
    
    <main>
      <section class="text-gray-600 body-font">
        <div class="container px-5 py-10 mx-auto text-center">
          <div class="flex flex-col text-center w-full mb-10">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">「車好き」ともっと繋がる
            </h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base">carMEET は CAR MEETING を主催したい人、参加したい人のためのサービスです。</p>
          </div>
          {{-- <div class="flex flex-wrap -m-4">
            @foreach ($events as $event)
            <div class="lg:w-1/3 sm:w-1/2 p-4">
              <div class="flex relative">
                <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="https://dummyimage.com/600x360">
                <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                  <h2 class="tracking-widest text-sm title-font font-medium text-yellow-500 mb-1">{{ $event->name }}</h2>
                  <p class="leading-relaxed"><span class="line-clamp-3">{!! nl2br(e($event->content)) !!}</span></p>
                </div>
              </div>
            </div>
            @endforeach
          </div> --}}
          <button class="flex mx-auto mt-20 text-white bg-yellow-500 border-0 py-2 px-8 focus:outline-none hover:bg-yellow-600 rounded text-lg"><a href="{{ route('events') }}">イベント一覧</a></button>
        </div>
      </section>

      <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex items-center lg:w-3/5 mx-auto border-b pb-10 mb-10 border-gray-200 sm:flex-row flex-col">
            <div class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-10 inline-flex items-center justify-center rounded-full bg-yellow-100 text-yellow-500 flex-shrink-0">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="sm:w-16 sm:h-16 w-10 h-10" viewBox="0 0 24 24">
                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
              </svg>
            </div>
            <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
              <h2 class="text-gray-900 text-lg title-font font-medium mb-2">主催しよう</h2>
              <p class="leading-relaxed text-base">carMEETを通じて参加者を募るだけでなく、参加者の管理や連絡もできます。</p>
              <a class="mt-3 text-yellow-500 inline-flex items-center">イベントの登録方法を見る
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                  <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
              </a>
            </div>
          </div>
          <div class="flex items-center lg:w-3/5 mx-auto border-b pb-10 mb-10 border-gray-200 sm:flex-row flex-col">
            <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
              <h2 class="text-gray-900 text-lg title-font font-medium mb-2">参加しよう</h2>
              <p class="leading-relaxed text-base">数ある CAR MEETINGの中からあなたにあったイベントに参加してみましょう。きっと良い仲間が見つかります。</p>
              <a class="mt-3 text-yellow-500 inline-flex items-center">イベント参加方法を見る
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                  <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
              </a>
            </div>
            <div class="sm:w-32 sm:order-none order-first sm:h-32 h-20 w-20 sm:ml-10 inline-flex items-center justify-center rounded-full bg-yellow-100 text-yellow-500 flex-shrink-0">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="sm:w-16 sm:h-16 w-10 h-10" viewBox="0 0 24 24">
                <circle cx="6" cy="6" r="3"></circle>
                <circle cx="6" cy="18" r="3"></circle>
                <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
              </svg>
            </div>
          </div>
          <div class="flex items-center lg:w-3/5 mx-auto sm:flex-row flex-col">
            <div class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-10 inline-flex items-center justify-center rounded-full bg-yellow-100 text-yellow-500 flex-shrink-0">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="sm:w-16 sm:h-16 w-10 h-10" viewBox="0 0 24 24">
                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                <circle cx="12" cy="7" r="4"></circle>
              </svg>
            </div>
            <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
              <h2 class="text-gray-900 text-lg title-font font-medium mb-2">ユーザー登録</h2>
              <p class="leading-relaxed text-base">ユーザー登録、サービス利用に料金は掛かりません。登録していろんなイベントに足を運んでみましょう。</p>
              <a class="mt-3 text-yellow-500 inline-flex items-center" href="/register">新規登録
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                  <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
              </a>
            </div>
          </div>
          <button class="flex mx-auto mt-20 text-white bg-yellow-500 border-0 py-2 px-8 focus:outline-none hover:bg-yellow-600 rounded text-lg"><a href="/register">新規登録</a></button>
        </div>
      </section>
    </main>
    
    <x-footer/>
  </body>
</html>
