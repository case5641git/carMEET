<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
  <div class="flex flex-wrap -m-4">
    @foreach ($eventList as $event)
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
    <div class="mt-1 mb-1 row justify-content-center">
      {{ $eventList->links() }}
    </div>
  </div>
</div>

<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">
</div>