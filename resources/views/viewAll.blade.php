<!doctype html>
<html>
    <head>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body style="background-color: #263849;">
        <div class="container pt-5" style="background-color: #263849;">
            @foreach($all_list as $list)
                <p style="background-color: white; margin: unset; text-align: center;"><a href="{{ route('short_link', $list->shorten_url) }}" target="_blank" style="text-decoration: none; color: blue; font-size: 20px;">{{ $list->shorten_url }}</a><span style="padding-left: 100px;"><a href="{{ route('stats', $list->id) }}">Stats</a></span></p>
            @endforeach
        </div>
    </body>
</html>