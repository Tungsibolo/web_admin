<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
</head>
<body>
<table border="1">
        <tr>
            
            <th>Name</th>
            <th>Description</th>
            <th>Sell Price</th>
            <th>Quantity</th>
            <th>Discount</th>
            <th>IsDiscount</th>
            <th>Status</th>
        </tr>
            @foreach ($product as $item)
            <tr>
                
                <td>{{ $item->name }}</td>
                <td>{{ $item->description }}</td>
                <td>{{ $item->sellprice }}</td>
                <td>{{ $item->pty_store }}</td>
                <td>{{ $item->discount  }}</td>
                <td>{{ $item->isdiscount }}</td>
                <td>{{ $item->status  }}</td>
                <td>
                    <a href="{{ route('edit',['id'=>$item->id]) }}">Sửa</a>
                </td>
                <td>
                    <a onclick="return confirm('Bạn có chắc chắn muốn xóa')" href="{{ route('deleteUser',['id'=>$item->id]) }}">Xóa</a>
                </td>
            </tr>
            @endforeach 
       
    </table>
   
</body>

</body>
</html>