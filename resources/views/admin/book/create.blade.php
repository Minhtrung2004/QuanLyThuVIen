@extends('admin.layouts.home')
@section('content')
    <div class="container mt-4">
        <h2><strong>Thêm Sách Mới</strong></h2>
        <!-- Form thêm dữ liệu -->
        <form action="{{ route('store.book') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Name Book</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Author</label>
                <input type="text" class="form-control" id="author" name="author" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Category</label>
                <input type="text" class="form-control" id="category" name="category" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Year Of Bublication</label>
                <input class="form-control" id="year" name="year" rows="3" required></input>
            </div>
            <div class="mb-3">
                <label class="form-label">Quantity</label>
                <input type="number" class="form-control" id="quantity" name="quantity" required min="1">
            </div>
            <!-- Nút Submit -->
            <button type="submit" class="btn btn-success btn-sm custom-btn">
                <i class="fa fa-save"></i> Lưu
            </button>
        </form>
    </div>
@endsection
