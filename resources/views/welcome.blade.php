<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="/products/export/csv" method="GET">
        @csrf
        <input type="hidden" name="type" value="csv" />
        <button>export csv</button>
    </form>

    <form action="/products/export/pdf" method="GET">
        @csrf
        <input type="hidden" name="type" value="pdf" />
        <button>export pdf</button>
    </form>

    <form action="/products/export/txt" method="GET">
        @csrf
        <input type="hidden" name="type" value="txt" />
        <button>export txt</button>
    </form>

</body>

</html>