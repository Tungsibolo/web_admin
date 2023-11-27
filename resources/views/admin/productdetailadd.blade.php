<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
</head>
<body>
    @if (session('msg'))
    <div class="alert alert-success"> {{ session('msg') }}</div>
    @endif
    
    @if ($errors->any())
    <div class="alert alert-danger">Dữ liệu nhập vào không hợp lệ</div>
    @endif
    <h1>{{ $title }}</h1>
    <form method="POST">
        <div class="mb-3">
          <label for="" class="form-label">Name</label>
          <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="exampleInputTen" aria-describedby="emailHelp">
          @error('name')
          <span style="color: red">{{ $message }}</span>
          @enderror
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Description</label>
          <input type="text" name="description" value="{{ old('description') }}" class="form-control" id="exampleInputTen" aria-describedby="emailHelp">
          @error('description')
          <span style="color: red">{{ $message }}</span>
          @enderror
        </div>
        <div class="mb-3">
        <label for="branch" class="form-label">Branch</label>
        <select name="id_brand" class="form-control" id="branch">
            <option value="">-- Select Branch --</option>
            @foreach($branches as $branch)
                <option value="{{ $branch->id }}">{{ $branch->name }}</option>
            @endforeach
        </select>
        @error('id_brand')
            <span style="color: red">{{ $message }}</span>
        @enderror
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select name="id_category" class="form-control" id="category">
                <option value="">-- Select Category --</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            @error('id_category')
                <span style="color: red">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Sell Price</label>
          <input type="text" name="sellprice" value="{{ old('sellprice') }}" class="form-control" id="exampleInputTen" aria-describedby="emailHelp">
          @error('sellprice')
          <span style="color: red">{{ $message }}</span>
          @enderror
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Quantity</label>
          <input type="text" name="quantity" value="{{ old('quantity') }}" class="form-control" id="exampleInputTen" aria-describedby="emailHelp">
          @error('quantity')
          <span style="color: red">{{ $message }}</span>
          @enderror
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Discount</label>
          <input type="text" name="discount" value="{{ old('discount') }}" class="form-control" id="">
          @error('discount')
          <span style="color: red">{{ $message }}</span>
          @enderror
        </div>
        <div class="mb-3">
          <label for="" class="form-label">IsDiscount</label>
          <input type="text" name="isdiscount" value="{{ old('isdiscount') }}" class="form-control" id="">
          @error('isdiscount')
          <span style="color: red">{{ $message }}</span>
          @enderror
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Status</label>
          <input type="text" name="status" value="{{ old('status') }}" class="form-control" id="">
          @error('status')
          <span style="color: red">{{ $message }}</span>
          @enderror
        </div>

        <button type="submit" class="btn btn-primary">Add</button>
        @csrf 
      </form>
</body>
</html>