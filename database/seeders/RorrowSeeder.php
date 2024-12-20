<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rorrow;
use App\Models\Reader;
use App\Models\Book;

class RorrowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $readers = Reader::all();
        $books = Book::all();

    // Lặp qua các readers và books để tạo bản ghi trong bảng rorrow
        foreach ($readers as $reader) {
            foreach ($books as $book) {
                Rorrow::create([
                    'reader_id' => $reader->id,
                    'book_id' => $book->id,
                    'borrow_date' => now(),
                    'return_date' => now()->addWeeks(2),  // Giả sử trả sách sau 2 tuần
                    'status' => rand(0, 1),  // Trạng thái mượn
                ]);
            }
        }
    }
}
