<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        @include('partials.head')
        {!! SEO::generate(true) !!}
        <!-- Fonts -->
        <link rel="icon" type="image/svg+xml" href="/assets/logo.png"/>
     
 
    </head>
  
      <body class="font-Poppins smootheScroll">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900  ">  
            <!-- Page Content -->
            <main> 
                {{ $slot }}
            </main>
            <x-footer />
        </div>
    </body>
</html>
