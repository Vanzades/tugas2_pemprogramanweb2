<!DOCTYPE html>
<html>
<head>
    <title>{{ $title ?? 'Default Title' }}</title>
</head>
<body>
    <div class="container">
        <h1>{{ $card_title ?? 'Default Card Title' }}</h1>
        {{ $slot }}
    </div>
</body>
</html>
