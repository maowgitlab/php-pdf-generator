<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koran Layout PDF Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10">
        <div class="max-w-md mx-auto bg-white p-5 rounded shadow-md">
            <h1 class="text-xl font-bold mb-5">Input Form</h1>
            <form action="generate_pdf.php" method="post" enctype="multipart/form-data">
                <div class="mb-4">
                    <label for="title" class="block text-gray-700">Judul:</label>
                    <input type="text" id="title" name="title" class="w-full p-2 border border-gray-300 rounded mt-1" required>
                </div>
                <div class="mb-4">
                    <label for="image" class="block text-gray-700">Gambar:</label>
                    <input type="file" id="image" name="image" class="w-full p-2 border border-gray-300 rounded mt-1" accept="image/*" required>
                </div>
                <div class="mb-4">
                    <label for="paragraph" class="block text-gray-700">Paragraf:</label>
                    <textarea id="paragraph" name="paragraph" class="w-full p-2 border border-gray-300 rounded mt-1" rows="5" required></textarea>
                </div>
                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Generate PDF</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
