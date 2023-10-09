<div class="relative bg-white" id="schedule">
  <div class="mx-auto max-w-7xl lg:flex lg:justify-between lg:px-8 xl:justify-end">
    <div class="lg:flex lg:w-1/2 lg:shrink lg:grow-0 xl:absolute xl:inset-y-0 xl:right-1/2 xl:w-1/2">
      <div class="relative h-80 lg:-ml-8 lg:h-auto lg:w-full lg:grow xl:ml-0">
        <img class="absolute inset-0 h-full w-full bg-gray-50 object-cover" src="/pulpit.jpg" alt="">
      </div>
    </div>
    <div class="px-6 lg:contents">
      <div class="mx-auto max-w-2xl pb-24 pt-16 sm:pb-32 sm:pt-20 lg:ml-8 lg:mr-0 lg:w-full lg:max-w-lg lg:flex-none lg:pt-32 xl:w-1/2">
      <img src="/preachers-logo.png" alt="Preachers' Camp Logo" class="h-48 w-auto mx-auto my-8">
        <p class="text-base font-semibold leading-7 text-blue-600">Schedule</p>
        <h1 class="mt-2 text-4xl font-bold text-gray-900 sm:text-5xl font-heading">Practical Instruction for Preachers</h1>
        <p class="mt-6 text-xl leading-8 text-gray-700">Whether it is one of our main sessions, one of the many offered workshops or round tables discussions you will be sure to learn things you can use every week in your ministry.</p>
        <div class="mt-10 max-w-xl text-base leading-7 text-gray-700 lg:max-w-none">
          <ul role="list" class="mt-8 space-y-8 text-gray-600">
            @foreach($scheduleItems as $item)
            <li class="flex gap-x-3">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mt-1 flex-none text-blue-600">
  <path fill-rule="evenodd" d="M6.32 2.577a49.255 49.255 0 0111.36 0c1.497.174 2.57 1.46 2.57 2.93V21a.75.75 0 01-1.085.67L12 18.089l-7.165 3.583A.75.75 0 013.75 21V5.507c0-1.47 1.073-2.756 2.57-2.93z" clip-rule="evenodd" />
</svg>

              <span><strong class="font-semibold text-gray-900 font-heading text-lg">{{ $item->name }}.</strong> {{ $item->description }}</span>
            </li>
            @endforeach
          </ul>
          <p class="mt-8">Throughout the week we will set aside time to discuss each of these subjects and work through each phase of a message together.</p>

        </div>
      </div>
    </div>
  </div>
</div>
