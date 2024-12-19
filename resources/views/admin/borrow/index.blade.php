@extends('admin.layouts.home')
@section('content')
    <div class="col-lg-13">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Library Management</h5>
            </div>
            <div class="ibox-content">
                <table class="table table-hover no-margins" style="border: 2px solid #ddd; border-collapse: collapse;">
                    <thead>
                        <tr style="border-bottom: 2px solid #ccc;">
                            <th style="border: 1px solid #ddd; padding: 8px;">id</th>
                            <th style="border: 1px solid #ddd; padding: 8px;">reader_id</th>
                            <th style="border: 1px solid #ddd; padding: 8px;">book_id</th>
                            <th style="border: 1px solid #ddd; padding: 8px;">borrow_date</th>
                            <th style="border: 1px solid #ddd; padding: 8px;">return_date</th>
                            <th style="border: 1px solid #ddd; padding: 8px;">status</th>
                            <th style="border: 1px solid #ddd; padding: 8px;">created_at</th>
                            <th style="border: 1px solid #ddd; padding: 8px;">updated_at</th>
                            <th style="border: 1px solid #ddd; padding: 8px;">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="border: 1px solid #ddd; padding: 8px;">1</td>
                            <td style="border: 1px solid #ddd; padding: 8px;">1</td>
                            <td style="border: 1px solid #ddd; padding: 8px;">2</td>
                            <td style="border: 1px solid #ddd; padding: 8px;">2024-12-18</td>
                            <td style="border: 1px solid #ddd; padding: 8px;">2024-12-25</td>
                            <td style="border: 1px solid #ddd; padding: 8px;">0</td>
                            <td style="border: 1px solid #ddd; padding: 8px;">2024-12-19 10:00:00</td>
                            <td style="border: 1px solid #ddd; padding: 8px;">2024-12-19 10:00:00</td>
                            <td style="border: 1px solid #ddd; padding: 8px;">
                                <a href="#" class="btn btn-warning btn-sm" title="Sửa"><i class="fa fa-edit"></i>
                                    edit</a>
                                <a href="#" class="btn btn-danger btn-sm" title="Xóa"><i class="fa fa-trash"></i>
                                    delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
