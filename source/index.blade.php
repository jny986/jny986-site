<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="All the activities of Josh Young - speaking, coding, hacking & more">

        <meta property="og:title" content="jny986 - Josh Young"/>
        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{ $page->getUrl() }}"/>
        <meta property="og:description" content="{{ $page->siteDescription }}" />

        <title>jny986 - Josh Young</title>

        <link rel="home" href="{{ $page->baseUrl }}">
        <link rel="icon" href="/favicon.ico">

        @stack('meta')

        @if ($page->production)
            <!-- Insert analytics code here -->
        @endif

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>
    <body class="flex flex-col justify-between min-h-screen bg-black text-white leading-normal font-sans">
        <main role="main" class="flex-auto w-full container max-w-4xl mx-auto py-16 px-6">
            <div class="container mx-auto p-4">
                <div class="grid grid-rows-2 grid-flow-col gap-4">
                    <div class="row-span-1">
                        <img class="mx-auto" src="/assets/img/jny986.png" alt="{{ $page->siteName }} logo" />
                    </div>
                    <div class="row-span-1 text-center">
                        <h1 class="text-white">Stay Tuned - Coming Soon</h1>
                        <h2 class="text-white">Home to all the activities of Josh Young</h2>
                        <h4 class="text-white">Speaking, Coding, Hacking & More</h4>
                    </div> 
                </div>
            </div>
        </main>
        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    </body>
</html>
