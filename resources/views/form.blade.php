@extends('layout.app')

@section('content')
<<<<<<< HEAD
<div class="container">
    <h1>Formulir</h1>
    <form action="/submit-form" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="name">Nama:</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required>
            @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                required>
            @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="image">Gambar:</label>
            <input type="file" class="form-control-file @error('image') is-invalid @enderror" id="image" name="image"
                required>
            @error('image')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <br>
    <a href="/tasks10" class="btn btn-warning">KEMBALI KE HOME</a>
</div>

<!-- Menambahkan script Bootstrap -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
=======

<body>
    <div class="container">
        <h1>Formulir</h1>
        <form action="/submit-form" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nama:</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    required>
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                    required>
                @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <br>
        <a href="/tasks10" class="btn btn-warning">KEMBALI KE HOME</a>
    </div>

    <!-- Menambahkan script Bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
>>>>>>> 900c954ac77b78dc6c78db428a9e9fefc896b08f
@endsection