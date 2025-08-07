<!DOCTYPE html>
<html>
<head>
    <title>View Contact</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body { font-family: sans-serif; margin: 20px; }
        .container { max-width: 600px; margin: auto; padding: 20px; border: 1px solid #ccc; border-radius: 8px; }
        h1 { color: #333; }
        p { font-size: 16px; line-height: 1.5; }
        a { text-decoration: none; color: #007bff; }
        .details strong { display: inline-block; width: 120px; }
    </style>
   
</head>
<body>
    <div class="container">
        <h1>Contact Details</h1>
        <div class="details">
            <p><strong>Name:</strong> {{ $contact->name }}</p>
            <p><strong>Email:</strong> {{ $contact->email }}</p>
            <p><strong>Phone:</strong> {{ $contact->phone_number }}</p>
            <p><strong>Address:</strong> {{ $contact->address }}</p>
        </div>
        <hr>
        <a href="{{ route('contacts.index') }}">Back to List</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>