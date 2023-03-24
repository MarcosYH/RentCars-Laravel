@props(['listing'])

<x-card class="">

  <div class="flex">
    <img class="hidden w-48 mr-6 md:block" id="1"
      src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/img1.jpg')}}" alt="" />
    <div>

      <h3 class="text-2xl">
        <a class="dark:hover:bg-gray-200 rounded-lg" href="/listings/{{$listing->id}}">{{$listing->title}}</a>
      </h3>

      <div class="text-xl font-bold mb-4">{{$listing->company}}</div>
      <x-listing-tags :tagsCsv="$listing->tags" />
      <div class="text-lg mt-4">
        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
      </div>
    </div>
  </div>

</x-card>

