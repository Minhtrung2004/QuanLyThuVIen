@extends('admin.layouts.home')
@section('content')
    <div class="col-lg-13">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Reader Management</h5>
                <div class="ibox-tools">
                    <a href="" class="btn btn-primary btn-sm" title="Thêm Dòng" onclick="addRow()">
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
                            <th style="border: 1px solid #ddd; padding: 8px;">birthday</th>
                            <th style="border: 1px solid #ddd; padding: 8px;">address</th>
                            <th style="border: 1px solid #ddd; padding: 8px;">phone</th>
                            <th style="border: 1px solid #ddd; padding: 8px;">created_at</th>
                            <th style="border: 1px solid #ddd; padding: 8px;">updated_at</th>
                            <th style="border: 1px solid #ddd; padding: 8px;">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($readers as $reader)
                            <tr>
                                <td style="border: 1px solid #ddd; padding: 8px;">{{ $reader->id }}</td>
                                <td style="border: 1px solid #ddd; padding: 8px;">{{ $reader->name }}</td>
                                <td style="border: 1px solid #ddd; padding: 8px;">{{ $reader->birthday }}</td>
                                <td style="border: 1px solid #ddd; padding: 8px;">{{ $reader->address }}</td>
                                <td style="border: 1px solid #ddd; padding: 8px;">{{ $reader->phone }}</td>
                                <td style="border: 1px solid #ddd; padding: 8px;">{{ $reader->created_at }}</td>
                                <td style="border: 1px solid #ddd; padding: 8px;">{{ $reader->updated_at }}</td>
                                <td style="border: 1px solid #ddd; padding: 8px; display: flex; justify-content: space-between; gap: 10px">
                                    {{-- btn show --}}
                                    <a href="#" class="btn btn-info btn-sm" title="show" name="show">
                                        <i class="fa fa-eye"></i> Show
                                    </a>
                                    <!-- btn edit -->
                                    <a href="#" class="btn btn-warning btn-sm" title="edit" name="edit">
                                        <i class="fa fa-edit"></i> Edit
                                    </a>

                                    <!-- Form xóa -->
                                    <form action="#" method="POST" >
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
