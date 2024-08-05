<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>My Website</title>
</head>

<body>
  <div class="w-full flex p-4 bg-blue-100 border border-blue-200">

    <x-nav></x-nav>
  </div>
  <div class="w-full px-4 py-2 bg-violet-100 font-semibold text-violet-700 border border-violet-100">
    <h1>{{ $pageTitle ?? 'Laravel App' }}</h1>
  </div>

  {{ $slot }}
</body>

</html>
