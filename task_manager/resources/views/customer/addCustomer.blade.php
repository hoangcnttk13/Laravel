<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <div class="main-content">
        <h1 style="color: #2147ff">{{ $description }}</h1>
        <form method="post">
            <label for="email-input">ID :</label>
            <input id="email-input" type="number" placeholder="Nhập Id HV" name="id">  <br><br>
            <label for="email-input">Name :</label>
            <input id="email-input" type="text" placeholder="Nhập name HV" name="name"> <br><br>
            <label for="email-input">Phone :</label>
            <input id="email-input" type="text" placeholder="Nhập phone HV" name="phone"> <br><br>
            <label for="email-input">Email :</label>
            <input id="email-input" type="text" placeholder="Nhập email HV" name="email"> <br><br>
            <br>
            <br>
            {{ csrf_field() }}
            <input type="submit" value="Add">
        </form>
    </div>
</body>
</html>