<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanda Tangan Digital</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex flex-col items-center justify-center min-h-screen p-6">
    <h1 class="text-2xl font-bold mb-4">Tanda Tangan Digital</h1>
    
    <div class="bg-white p-4 rounded-lg shadow-lg">
        {!! QrCode::size(200)->generate($data) !!}
    </div>

    <p class="mt-4 text-gray-600">{{ $data }}</p>
</body>
</html>
