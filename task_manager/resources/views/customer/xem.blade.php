<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thông tin khách hàng</title>
</head>
<body>
<h1>Thông tin khách hàng</h1>
<table >
    <tr>
        <td><label>ID: </label></td>
        <td><span>{{ $customer['id'] }}</span></td>
    </tr>
    <tr>
        <td><label>Họ và tên: </label></td>
        <td><span>{{ $customer['name'] }}</span></td>
    </tr>
    <tr>
        <td><label>Phone: </label></td>
        <td><span>{{$customer['phone']}}</span></td>
    </tr>
    <tr>
        <td><label>Email: </label></td>
        <td><span>{{$customer['email']}}</span></td>
    </tr>
</table>
<br>
<a href="{{route('customer.index')}}">Back</a>
</body>
</html>