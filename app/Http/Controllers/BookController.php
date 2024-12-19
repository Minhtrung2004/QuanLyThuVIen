<?php

namespace App\Http\Controllers;

use App\Models\Book; // Import model Book
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all(); // Lấy tất cả các sách
        return view('admin.book.index', compact('books')); // Trả về view với danh sách sách
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create'); // Hiển thị form tạo sách mới
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate dữ liệu nhập vào
        $request->validate([
            'name' => 'required',
            'author' => 'required'
        ]);

        // Tạo sách mới
        Book::create($request->all()); // Sử dụng $request thay vì $Request

        // Chuyển hướng về trang danh sách sách với thông báo thành công
        return redirect()->route('books.index')->with('success', 'Thêm thành công.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book = Book::findOrFail($id); // Tìm sách theo ID
        return view('books.show', compact('book')); // Trả về view hiển thị chi tiết sách
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book = Book::findOrFail($id); // Tìm sách theo ID
        return view('books.edit', compact('book')); // Trả về form chỉnh sửa sách
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate dữ liệu nhập vào
        $request->validate([
            'name' => 'required',
            'author' => 'required'
        ]);

        // Tìm sách theo ID và cập nhật
        $book = Book::findOrFail($id);
        $book->update($request->all());

        // Chuyển hướng về trang danh sách sách với thông báo thành công
        return redirect()->route('books.index')->with('success', 'Cập nhật thành công.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Tìm sách theo ID và xóa
        $book = Book::findOrFail($id);
        $book->delete();

        // Chuyển hướng về trang danh sách sách với thông báo thành công
        return redirect()->route('books.index')->with('success', 'Xóa thành công.');
    }
}
