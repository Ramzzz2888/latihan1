<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Result</title>
    <!-- Bootstrap CSS for styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
            padding: 20px;
        }
        .profile-card {
            max-width: 600px;
            width: 100%;
            padding: 30px;
            border: none;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            background-color: #fff;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-align: center;
        }
        .profile-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3);
        }
        .profile-card h1 {
            margin-bottom: 20px;
            color: #333;
            font-size: 2.5rem;
            font-weight: bold;
        }
        .profile-card .info-item {
            margin-bottom: 20px;
        }
        .profile-card .info-item strong {
            display: block;
            font-size: 1.1rem;
            color: #333;
            margin-bottom: 5px;
        }
        .profile-card .info-item p {
            font-size: 1rem;
            color: #555;
            margin: 0;
        }
        .profile-card img {
            width: 100%;
            max-width: 400px;
            height: auto;
            border-radius: 10px;
            border: 3px solid #ddd;
            transition: border-color 0.3s ease;
            display: block;
            margin: 20px auto;
        }
        .profile-card img:hover {
            border-color: #007bff;
        }
        .btn-back {
            display: block;
            width: 100%;
            max-width: 200px;
            margin: 20px auto 0;
            padding: 10px 20px;
            font-size: 1rem;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            border: none;
            transition: background-color 0.3s ease;
            text-align: center;
        }
        .btn-back:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="profile-card">
        <h1>Profile Information</h1>
        <div class="info-item">
            <strong>Nama Peserta:</strong>
            <p>{{ $data['name'] }}</p>
        </div>
        <div class="info-item">
            <strong>Kelas:</strong>
            <p>{{ $data['kelas'] }}</p>
        </div>
        <div class="info-item">
            <strong>Judul Poster:</strong>
            <p>{{ $data['judul'] }}</p>
        </div>
        <div class="info-item">
            <strong>Foto Poster:</strong>
            <img src="{{ asset('storage/' . $data['photo_path']) }}" alt="Poster Photo">
        </div>
        <button class="btn-back" onclick="window.history.back()">Kembali</button>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>
</html>