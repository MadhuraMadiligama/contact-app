<h1 style="text-align:center; font-family:Arial, sans-serif; font-size:2em; margin-top:30px; color:#333;">Add New Contact</h1>
<form action="{{ route('contacts.store') }}" method="POST" class="contact-form">
    @csrf
    <label>Name:</label>
    <input type="text" name="name"><br>
    <label>Email:</label>
    <input type="email" name="email"><br>
    <label>Phone:</label>
    <input type="text" name="phone_number"><br>
    <label>Address:</label>
    <textarea name="address"></textarea><br>
    <button type="submit">Save Contact</button>
</form>

<style>
.contact-form {
    max-width: 400px;
    margin: 30px auto;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 8px;
    background: #fafafa;
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
}
.contact-form label {
    display: block;
    margin-top: 12px;
    margin-bottom: 4px;
    font-weight: 500;
}
.contact-form input,
.contact-form textarea {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 1em;
}
.contact-form button {
    background: #007bff;
    color: #fff;
    border: none;
    padding: 10px 18px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 1em;
}
.contact-form button:hover {
    background: #0056b3;
}
</style>