<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/app.css')}}">
    <title>Document</title>
</head>
<body>
    <h1>test</h1>
<footer class="container">
    <div class="site-footer">
        <label for="country">Country/region</label>
        <input list="countries" id="country" name="country">
        <datalist id="countries">
            <option value="Latvia">
            <option value="Estonia">
            <option value="Lithuania">
        </datalist>
        <label for="language">Language</label>
        <input list="languages" id="language" name="language">
        <datalist id="languages">
            <option value="Latvian">
            <option value="Estonian">
            <option value="Lithuanian">
            <option value="English">
        </datalist>
        
    </div>
</footer>
@include('common.footer')
</body>
</html>