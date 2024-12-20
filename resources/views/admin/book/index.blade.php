@extends('admin.layouts.home')
@section('content')
    <div class="col-lg-13">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Library Management</h5>
                <div class="ibox-tools">
                    <a href="{{ route('create.book') }}" class="btn btn-primary btn-sm" title="Thêm Dòng" onclick="addRow()">
                        <i class="fa fa-plus"></i> Thêm
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <table class="table table-hover no-margins" style="border: 2px solid #ddd; border-collapse: collapse;">
                    @csrf
                    <thead>
                        <tr style="border-bottom: 2px solid #ccc;">
                            <th style="border: 1px solid #ddd; padding: 8px;">id</th>
                            <th style="border: 1px solid #ddd; padding: 8px;">name</th>
                            <th style="border: 1px solid #ddd; padding: 8px;">author</th>
                            <th style="border: 1px solid #ddd; padding: 8px;">category</th>
                            <th style="border: 1px solid #ddd; padding: 8px;">year</th>
                            <th style="border: 1px solid #ddd; padding: 8px;">quantity</th>
                            <th style="border: 1px solid #ddd; padding: 8px;">created_at</th>
                            <th style="border: 1px solid #ddd; padding: 8px;">updated_at</th>
                            <th style="border: 1px solid #ddd; padding: 8px;">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($books as $book)
                            <tr>
                                <td style="border: 1px solid #ddd; padding: 8px;">{{ $book->id }}</td>
                                <td style="border: 1px solid #ddd; padding: 8px;">{{ $book->name }}</td>
                                <td style="border: 1px solid #ddd; padding: 8px;">{{ $book->author }}</td>
                                <td style="border: 1px solid #ddd; padding: 8px;">{{ $book->category }}</td>
                                <td style="border: 1px solid #ddd; padding: 8px;">{{ $book->year }}</td>
                                <td style="border: 1px solid #ddd; padding: 8px;">{{ $book->quantity }}</td>
                                <td style="border: 1px solid #ddd; padding: 8px;">{{ $book->created_at }}</td>
                                <td style="border: 1px solid #ddd; padding: 8px;">{{ $book->updated_at }}</td>
                                <td style="border: 1px solid #ddd; padding: 8px;">
                                    <!-- Nút edit -->
                                    <a href="{{ route('edit.book', $book->id)}}" class="btn btn-warning btn-sm" title="edit" name="edit">
                                        <i class="fa fa-edit"></i> Edit
                                    </a>

                                    <!-- Form xóa -->
                                    <form action="{{ route('destroy.book', $book->id) }}" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?') ">
                                            <i class="fa fa-trash"></i> Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
