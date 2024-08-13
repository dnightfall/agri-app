<!DOCTYPE html>
<html>
<head>
    <title>Upload Foto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 0;
            background-color: #f4f4f4;
        }
        h1, h2 {
            color: #333;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            position: relative;
        }
        .back-button {
            position: absolute;
            top: 20px;
            right: 20px;
            padding: 10px 15px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            font-size: 14px;
        }
        .back-button:hover {
            background-color: #0056b3;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input[type="file"] {
            margin-bottom: 10px;
        }
        button {
            padding: 10px 15px;
            background-color: #28a745;
            border: none;
            color: #fff;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
        .photo-gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 20px;
        }
        .photo-item {
            flex: 1 0 21%;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #f8f8f8;
            padding: 10px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            position: relative;
            cursor: pointer;
        }
        .photo-item img {
            max-width: 100%;
            border-radius: 8px;
        }
        .photo-item p {
            margin-top: 10px;
            color: #555;
        }
        .modal, .modal-done {
            display: none; 
            position: fixed; 
            z-index: 1; 
            left: 0;
            top: 0;
            width: 100%; 
            height: 100%; 
            overflow: auto; 
            background-color: rgb(0,0,0); 
            background-color: rgba(0,0,0,0.4); 
            padding-top: 60px;
        }
        .modal-content, .modal-done-content {
            background-color: #fefefe;
            margin: 5% auto; 
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 500px;
            border-radius: 10px;
            text-align: center;
        }
        .close, .close-done {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        .close:hover, .close-done:hover,
        .close:focus, .close-done:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
        .delete-button {
            padding: 10px 15px;
            background-color: #dc3545;
            border: none;
            color: #fff;
            border-radius: 4px;
            cursor: pointer;
        }
        .delete-button:hover {
            background-color: #c82333;
        }
        .done-button {
            padding: 10px 15px;
            background-color: #ffc107;
            border: none;
            color: #fff;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 20px;
        }
        .done-button:hover {
            background-color: #e0a800;
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="{{ route('seedlings.index') }}" class="back-button">Back</a>
        <h1>Upload Foto untuk Bibit "{{ $seedling->seed_name }}"</h1>
        <form action="{{ route('photos.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="seedling_id" value="{{ $seedling->id }}">
            
            <label for="photo">Pilih Foto:</label>
            <input type="file" id="photo" name="photo" required>
            
            <button type="submit">Upload Foto</button>
        </form>
        
        <h2>Daftar Foto</h2>
        <div class="photo-gallery">
            @foreach ($photos as $photo)
                <div class="photo-item" data-photo-id="{{ $photo->id }}">
                    <img src="{{ asset('storage/' . $photo->file_path) }}" alt="Foto">
                    <p>Tanggal Upload: {{ \Carbon\Carbon::parse($photo->created_at)->format('Y-m-d') }}</p>
                </div>
            @endforeach
        </div>

        <!-- Button Selesai -->
        <button type="button" class="done-button" id="doneButton">Selesai</button>
    </div>

    <!-- The Modal for Photo Deletion -->
    <div id="deleteModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Hapus Foto</h2>
            <p>Apakah Anda yakin ingin menghapus foto ini?</p>
            <form id="deleteForm" method="POST" action="">
                @csrf
                @method('DELETE')
                <button type="submit" class="delete-button">Hapus</button>
            </form>
        </div>
    </div>

    <!-- The Modal for Completing Task -->
    <div id="completeModal" class="modal-done">
        <div class="modal-done-content">
            <span class="close-done">&times;</span>
            <h2>Selesai</h2>
            <form action="{{ route('seedlings.complete', $seedling->id) }}" method="POST">
                @csrf
                <label for="total_seeds_out">Total Bibit Keluar:</label>
                <input type="number" id="total_seeds_out" name="total_seeds_out" required>
                <br><br>
                <button type="submit" class="done-button">Selesai</button>
            </form>
        </div>
    </div>

    <script>
        var deleteModal = document.getElementById("deleteModal");
        var completeModal = document.getElementById("completeModal");
        var deleteForm = document.getElementById("deleteForm");
        var photoItems = document.getElementsByClassName("photo-item");
        var deleteSpan = document.getElementsByClassName("close")[0];
        var doneSpan = document.getElementsByClassName("close-done")[0];

        Array.prototype.forEach.call(photoItems, function(item) {
            item.onclick = function() {
                var photoId = this.getAttribute('data-photo-id');
                deleteForm.action = "/photos/" + photoId;
                deleteModal.style.display = "block";
            }
        });

        deleteSpan.onclick = function() {
            deleteModal.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == deleteModal) {
                deleteModal.style.display = "none";
            } else if (event.target == completeModal) {
                completeModal.style.display = "none";
            }
        }

        // Show complete modal when "Selesai" button is clicked
        document.getElementById("doneButton").onclick = function() {
            completeModal.style.display = "block";
        }

        doneSpan.onclick = function() {
            completeModal.style.display = "none";
        }
    </script>
</body>
</html>
