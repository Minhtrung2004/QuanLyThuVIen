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
        return view('admin.book.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate dữ liệu nhập vào
        $request->validate([
            'name' => 'required',
            'author' => 'required',
            'category' => 'required',
            'year' => 'required',
            'quantity' => 'required'
        ]);
        Book::create($request->all());
        return redirect()->route('index.book')->with('success', 'Thêm thành công.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book = Book::findOrFail($id); // Tìm sách theo ID
        return view('book.show', compact('book')); // Trả về view hiển thị chi tiết sách
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Tìm sách theo ID
        $book = Book::findOrFail($id);

        // Trả về view với dữ liệu của sách
        return view('admin.book.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate dữ liệu nhập vào
        $book = Book::findOrFail($id);
        $request->validate([
            'name' => 'required',
            'author' => 'required',
            'category' => 'required',
            'year' => 'required',
            'quantity' => 'required'
        ]);

        // Tìm sách theo ID và cập nhật

        $book->update($request->all());

        // Chuyển hướng về trang danh sách sách với thông báo thành công
        return redirect()->route('index.book')->with('success', 'Cập nhật thành công.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect()->route('index.book')->with('success', 'Xóa thành công.');
    }
}
