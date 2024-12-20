@extends('admin.layouts.home')
@section('content')
    <div class="container mt-4">
        <h2><strong>Thêm Sách Mới</strong></h2>
        <!-- Form thêm dữ liệu -->
        <form action="{{ route('update.book', $book->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Name Book</label>
                <input value="{{ $book->name }}" type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Author</label>
                <input value="{{ $book->author }}" type="text" class="form-control" id="author" name="author"
                    required>
            </div>
            <div class="mb-3">
                <label class="form-label">Category</label>
                <input value="{{ $book->category }}" type="text" class="form-control" id="category" name="category"
                    required>
            </div>
            <div class="mb-3">
                <label class="form-label">Year Of Bublication</label>
                <input value="{{ $book->year }}" class="form-control" id="year" name="year" rows="3"
                    required></input>
            </div>
            <div class="mb-3">
                <label class="form-label">Quantity</label>
                <input value="{{ $book->quantity }}" type="number" class="form-control" id="quantity" name="quantity"
                    required min="1">
            </div>
            <!-- Nút Submit -->
            <button type="submit" class="btn btn-success btn-sm custom-btn">
                <i class="fa fa-save"></i> Save
            </button>
        </form>
    </div>
@endsection
