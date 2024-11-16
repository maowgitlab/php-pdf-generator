<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10">
        <div class="max-w-md mx-auto bg-white p-5 rounded shadow-md">
            <h1 class="text-xl font-bold mb-5">Input Form</h1>
            <form action="" method="post">
                <div class="mb-4">
                    <label for="text" class="block text-gray-700">Enter your text:</label>
                    <input type="text" id="text" name="text" class="w-full p-2 border border-gray-300 rounded mt-1" required>
                </div>
                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700" name="submit">Generate PDF</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
<?php
require('fpdf186/fpdf.php');
if (isset($_POST['submit'])) {
    $text = $_POST['text'];

    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'B', 16);
    $pdf->Cell(40, 10, $text);
    $pdf->Output('D', 'output.pdf');
} else {
    echo "Please submit the form.";
}
?>
