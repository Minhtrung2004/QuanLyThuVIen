@extends('admin.layouts.home')
@section('content')
<div class="container mt-4">
    <h2>Thêm Dữ Liệu Mới</h2>
    <!-- Form thêm dữ liệu -->
    <form id="createForm" action="#" method="POST">
        <!-- Tên -->
        <div class="mb-3">
            <label for="name" class="form-label">Tên</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <!-- Tuổi -->
        <div class="mb-3">
            <label for="age" class="form-label">Tuổi</label>
            <input type="number" class="form-control" id="age" name="age" required>
        </div>

        <!-- Email -->
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <!-- Địa chỉ -->
        <div class="mb-3">
            <label for="address" class="form-label">Địa chỉ</label>
            <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
        </div>

        <!-- Nút Submit -->
        <button type="submit" class="btn btn-success btn-sm">
            <i class="fa fa-save"></i> Lưu
        </button>
    </form>

    <!-- Thông báo sau khi thêm thành công -->
    <div id="successMessage" class="alert alert-success mt-3" style="display: none;">
        Dữ liệu đã được thêm thành công!
    </div>

</div>
@endsection
