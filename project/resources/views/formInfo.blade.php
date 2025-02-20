<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Định dạng tổng thể */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 20px;
    display: flex;
    justify-content: center;
}

/* Form container */
form {
    background: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    width: 400px;
}

/* Input fields */
.form-group {
    margin-bottom: 15px;
    display: grid;
    grid-template-columns: 70px 208gpx;
}

label {
    font-weight: bold;
    display: block;
    margin-bottom: 5px;
}

input[type="text"] {
    width: 150%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
}

/* Nút submit */
button {
    width: 100%;
    background: #28a745;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

button:hover {
    background: #218838;
}

/* Hiển thị thông tin */
.display-infor {
    margin-top: 20px;
    padding: 10px;
    background: #e9ecef;
    border-radius: 5px;
}

.display-infor p {
    margin: 5px 0;
    font-size: 14px;
    color: #333;
}

    </style>
</head>
<body>
    <form action="" method='post'>
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" class='form-control' name="name" id="">
        </div>
        <div class="form-group">
            <label>Age</label>
            <input type="text" class='form-control' name="age" id="">
        </div>
        <div class="form-group">
            <label>Date</label>
            <input type="text" class='form-control' name="date" id="">
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" class='form-control' name="phone" id="">
        </div>
        <div class="form-group">
            <label>Web</label>
            <input type="text" class='form-control' name="web" id="">
        </div>
        <div class="form-group">
            <label>Adress</label>
            <input type="text" class='form-control' name="address" id="">
        </div>
        <div>@include ('block.error')</div>
        <button type='submit'>OK</button>
        <div class="display-infor">
            @if (isset($user))
                <p>Name: {{ $user['name'] }}</p>
                <p>Age: {{ $user['age'] }}</p>
                <p>Date: {{ $user['date'] }}</p>
                <p>Phone: {{ $user['phone'] }}</p>
                <p>Website: {{ $user['web'] }}</p>
                <p>Address: {{ $user['address'] }}</p> 
            @endif
</div>

    </form>
</body>
</html>
