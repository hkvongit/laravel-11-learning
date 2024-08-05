<x-layout pageTitle="All Tweets"></x-layout>
<div class="p-8 flex">
  <div class="flex flex-col gap-2 w-full">

    @foreach ($tweets as $ind_tweet)
      <article class="w-full p-2 border border-blue-600 bg-blue-50 border-l-4 rounded-xl">
        <a href="/tweets/{{ $ind_tweet['id'] }}">
          <p class="text-sm font-normal text-blue-800 opacity-80 hover:underline hover:opacity-100">
            {{ $ind_tweet['title'] }}</p>
        </a>
      </article>
    @endforeach

  </div>
</div>
