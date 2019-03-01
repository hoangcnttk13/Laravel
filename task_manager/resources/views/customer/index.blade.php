<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Quản lý danh sách</title>
  <style>
    html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
    }
    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }
    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }
    .content {
        text-align: center;
    }
    .title {
        font-size: 84px;
    }
    .links > table {
        color: #636b6f;
        padding: 0 70px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
    }
    .m-b-md {
        margin-bottom: 30px;
    }
</style>

</head>
<body>
<h1>Danh sách khách hàng</h1>
<table border="1">
  <thead>
  <tr>
      <th>STT</th>
      <th>Họ và tên</th>
      <th>Số điện thoại</th>
      <th>Email</th>
      <th>Thao tác</th>
  </tr>
  </thead>
  <tbody>
   @foreach($customers as $customer)
        <tr>
            <td>{{ $customer['id'] }}</td>
            <td>{{ $customer['name'] }}</td>
            <td>{{ $customer['phone'] }}</td>
            <td>{{ $customer['email'] }}</td>
            <td>
                <a href="{{route('customer.xem', $customer['id'])}}">Xem</a> | <a href="{{route('customer.sua', $customer['id'])}}">Sửa</a> | <a href="{{route('customer.delete', $customer['id'])}}">Xóa</a>
            </td>
        </tr>
    @endforeach
  </tbody>
</table>
<br>
<a href="{{route('customer.addCustomer')}}">Add</a>
<br>
<h1>{{$name}}</h1>
</body>
</html>