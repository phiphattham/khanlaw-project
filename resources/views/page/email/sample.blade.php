<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>
</head>
<body>
    <h1>ระบบการจองห้องพัก คานหลาว วิวพอยต์</h1>
    <h3>{{$content['customer']}}</h3>
    <p>คุณได้ทำการจองห้องพักที่ {{$content['room_number']}} โดยจะเข้าพักวันที่ {{$content['check_in']}}
        ถึงวันที่ {{$content['check_out']}} โดยลูกค้าต้องเตรียมชำระเงินที่หน้าเคาเตอร์ตอนเข้าพักจำนวน {{$content['total']}} บาท
    </p>
</body>
</html>
