<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Danh sách sản phẩm</h2>
    <a href="{{ route('products.create') }}" class="btn btn-success mb-3">Thêm sản phẩm</a>
    
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Quantity</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
    @foreach($products as $product)
    <tr>
        <td>{{ $product['id'] }}</td>
        <td>{{ $product['name'] }}</td>
        <td>
            @if(isset($product['avatar']))
                <img src="{{ $product['avatar'] }}" alt="Avatar" width="50">
            @else
                Không có ảnh
            @endif
        </td>

        @isset($product['description'])
            <td>{{ $product['description'] }}</td>
        @else
            <td>Không có mô tả</td>
        @endisset

        @isset($product['price'])
            <td>{{ number_format($product['price'], 2) }} $</td>
        @else
            <td>0.00 $</td>
        @endisset

        @isset($product['quantity'])
            <td>{{ $product['quantity'] }}</td>
        @else
            <td>0</td>
        @endisset

        <td>
            <a href="{{ route('products.edit', $product['id']) }}" class="btn btn-warning btn-sm">Sửa</a>
            <form action="{{ route('products.destroy', $product['id']) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Xóa sản phẩm này?')">Xóa</button>
            </form>
        </td>
    </tr>
    @endforeach
</tbody>

    </table>
</div>
</body>
</html>
