<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet"></link>
    @routes
    <script src="{{ mix('/js/app.js') }}" defer></script>
</head>
<body class="bg-gray-200">

<div class="container mx-auto mt-6">
    @inertia
</div>

</body>
</html>
