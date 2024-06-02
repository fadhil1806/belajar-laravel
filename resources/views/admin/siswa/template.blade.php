<!DOCTYPE html>
<html>
<head>
    <title>Student Details</title>
    <style>
        /* Define your CSS styles for the PDF here */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .container {
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
        }
        .student-details {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Student Details</h1>
        <div class="student-details">
            <p><strong>Name:</strong> {{ $siswa->nama_siswa }}</p>
            <p><strong>Class:</strong> {{ $siswa->kelas_siswa }}</p>
            <p><strong>Address:</strong> {{ $siswa->domisli_siswa }}</p>
        </div>
    </div>
</body>
</html>
