<x-layout>
  <h1>Welcome to about page </h1>
  @php
    $name = 'Tintu';
  @endphp
  <p>Hi I am {{ $name }}</p>
  <p>Today is {{ $date }} and we are at {{ $place }}</p>
  <p>Layout added</p>
</x-layout>
