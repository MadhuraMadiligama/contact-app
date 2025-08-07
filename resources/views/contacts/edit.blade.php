<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Edit Contact</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
        }
        .container {
            max-width: 350px;
            margin: 40px auto;
            background: #fff;
            padding: 20px;
            border-radius: 6px;
            box-shadow: 0 2px 6px #ccc;
        }
        h1 {
            text-align: center;
            font-size: 22px;
            margin-bottom: 18px;
        }
        label {
            display: block;
            margin-bottom: 4px;
            font-size: 14px;
        }
        input, textarea {
            width: 100%;
            padding: 7px;
            margin-bottom: 12px;
            border: 1px solid #bbb;
            border-radius: 3px;
            font-size: 14px;
        }
        button {
            width: 100%;
            padding: 8px;
            background: #3498db;
            color: #fff;
            border: none;
            border-radius: 3px;
            font-size: 15px;
        }
        .success {
            color: #27ae60;
            text-align: center;
            margin-bottom: 10px;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Contact</h1>
        <form id="editContactForm" action="{{ route('contacts.update', $contact) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ $contact->name }}" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ $contact->email }}" required>

            <label for="phone_number">Phone:</label>
            <input type="text" id="phone_number" name="phone_number" value="{{ $contact->phone_number }}" required>

            <label for="address">Address:</label>
            <textarea id="address" name="address" rows="2" required>{{ $contact->address }}</textarea>

            <button type="submit">Update</button>
        </form>
        <div id="successMsg" class="success" style="display:none;">Contact updated!</div>
    </div>
    <script>
        document.getElementById('editContactForm').addEventListener('submit', function(e) {
            var name = document.getElementById('name').value.trim();
            var email = document.getElementById('email').value.trim();
            var phone = document.getElementById('phone_number').value.trim();
            var address = document.getElementById('address').value.trim();

            if (!name || !email || !phone || !address) {
                alert('Please fill in all fields.');
                e.preventDefault();
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
