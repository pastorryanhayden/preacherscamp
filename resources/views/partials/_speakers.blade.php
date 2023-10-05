<div class="bg-white py-24 sm:py-32">
  <div class="mx-auto max-w-7xl px-6 lg:px-8 text-center">
    <div class="mx-auto  lg:mx-0 text-center w-full">
      <h2 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl tracking-wide font-heading text-center">Speakers</h2>
      <p class="mt-6 text-lg leading-8 text-gray-600 text-center max-w-xl mx-auto">Learn from speakers from accross the country who are passionate about communicating the word of God.</p>
    </div>
    <ul role="list" class="mx-auto mt-20 grid max-w-2xl grid-cols-2 gap-x-8 gap-y-16 text-center sm:grid-cols-3 md:grid-cols-4 lg:mx-0 lg:max-w-none lg:grid-cols-5 xl:grid-cols-6">
    @foreach($speakers as $speaker)
      <li>
        <img class="mx-auto h-24 w-24 rounded-full" src="{{ asset($speaker->photo) }}" alt="">
        <h3 class="mt-6 text-base font-semibold leading-7 tracking-tight text-gray-900">{{ $speaker->name }}</h3>
        <p class="text-sm leading-6 text-gray-600">{{ $speaker->location }}</p>
      </li>
    @endforeach
      <!-- More people... -->
    </ul>
  </div>
</div>
