<?php

namespace Database\Seeders;

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run()
    {
        Book::create([
            'name' => 'Những Ngôi Sao Xa Cách',
            'author' => 'Nguyễn Nhật Ánh',
            'category' => 'Văn học thiếu nhi',
            'year' => 1996,
            'quantity' => 10,
        ]);

        Book::create([
            'name' => 'Số Đỏ',
            'author' => 'Vũ Trọng Phụng',
            'category' => 'Văn học hiện thực',
            'year' => 1936,
            'quantity' => 20,
        ]);

        Book::create([
            'name' => 'Lão Hạc',
            'author' => 'Nam Cao',
            'category' => 'Văn học hiện thực',
            'year' => 1943,
            'quantity' => 12,
        ]);

        Book::create([
            'name' => 'Chí Phèo',
            'author' => 'Nam Cao',
            'category' => 'Văn học hiện thực',
            'year' => 1941,
            'quantity' => 18,
        ]);
        Book::create([
            'name' => 'Những Ngôi Sao Xa Cách',
            'author' => 'Nguyễn Nhật Ánh',
            'category' => 'Văn học thiếu nhi',
            'year' => 1996,
            'quantity' => 10,
        ]);

        Book::create([
            'name' => 'Dế Mèn Phiêu Lưu Ký',
            'author' => 'Tô Hoài',
            'category' => 'Văn học thiếu nhi',
            'year' => 1941,
            'quantity' => 15,
        ]);

        Book::create([
            'name' => 'Số Đỏ',
            'author' => 'Vũ Trọng Phụng',
            'category' => 'Văn học hiện thực',
            'year' => 1936,
            'quantity' => 20,
        ]);

        Book::create([
            'name' => 'Lão Hạc',
            'author' => 'Nam Cao',
            'category' => 'Văn học hiện thực',
            'year' => 1943,
            'quantity' => 12,
        ]);

        Book::create([
            'name' => 'Chí Phèo',
            'author' => 'Nam Cao',
            'category' => 'Văn học hiện thực',
            'year' => 1941,
            'quantity' => 18,
        ]);

        // Thêm 5 cuốn sách Việt Nam nữa
        Book::create([
            'name' => 'Tắt Đèn',
            'author' => 'Ngô Tất Tố',
            'category' => 'Văn học hiện thực',
            'year' => 1939,
            'quantity' => 25,
        ]);

        Book::create([
            'name' => 'Mảnh Đời Vụn',
            'author' => 'Vũ Bằng',
            'category' => 'Văn học hiện đại',
            'year' => 1959,
            'quantity' => 22,
        ]);

        Book::create([
            'name' => 'Miền Ký Ức',
            'author' => 'Bảo Ninh',
            'category' => 'Văn học chiến tranh',
            'year' => 1993,
            'quantity' => 30,
        ]);

        Book::create([
            'name' => 'Đoạn Tuyệt',
            'author' => 'Nguyễn Công Hoan',
            'category' => 'Văn học hiện thực',
            'year' => 1933,
            'quantity' => 14,
        ]);

        Book::create([
            'name' => 'Cánh Đồng Bất Tận',
            'author' => 'Nguyễn Ngọc Tư',
            'category' => 'Văn học đương đại',
            'year' => 2005,
            'quantity' => 50,
        ]);
    }
}
