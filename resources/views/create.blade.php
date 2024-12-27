<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Movie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="text-center">Добавить фильм</h1>
        <a href="{{ route('index') }}" class="btn btn-secondary">Вернуться на главную</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('movies.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Название:</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
                    @error('name')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="director" class="form-label">Режиссёр:</label>
                    <input type="text" name="director" id="director" class="form-control" value="{{ old('director') }}" required>
                    @error('director')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="poster" class="form-label">Ссылка на постер:</label>
                    <input type="url" name="poster" id="poster" class="form-control" value="{{ old('poster') }}" required>
                    @error('poster')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Цена:</label>
                    <input type="number" name="price" id="price" class="form-control" value="{{ old('price') }}" step="0.01" required>
                    @error('price')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Добавить фильм</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
