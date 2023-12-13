<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            border-right: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #e9e9e9;
        }

        tr:last-child td {
            border-bottom: none;
        }

        td:last-child {
            border-right: none;
        }
    </style>
</head>
<body>
<h1>
    Mã Đơn hàng: {{$order->code}}
</h1>
<table>
    <thead>
    <tr>
        <th>STT</th>
        <th>Tên sản phẩm</th>
        <th>Số lượng</th>
        <th>Giá</th>
    </tr>
    </thead>
    <tbody>
    @foreach($products as $index => $product)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->pivot->quantity }}</td>
            <td>{{ number_format($product->price, 0, ',', '.') }} đ</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
