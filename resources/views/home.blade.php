<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">
<head>
    <meta charset="UTF-8">
    <title>Test</title>
</head>
<body>
    <h1>@lang('home.laravel_is_awesome')</h1>
    <h3>@lang('home.make_something', ['param' => trans("home.awesome")])</h3>
    <br><br>

    <div id="app">
        <example-component></example-component>
    </div>

    <script src="{{ route(App::getLocale().'.generated_asset') }}"></script>
    <script>
        document.querySelector("h1").addEventListener("click", function() {
            alert(jtrans("home.laravel_is_awesome"));
        });
        document.querySelector("h3").addEventListener("click", function() {
            alert(jtrans("home.make_something", {'param': jtrans("home.awesome")}));
        });
    </script>
    <script src="/js/app.js"></script>
</body>
</html>
