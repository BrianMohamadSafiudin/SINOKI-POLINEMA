<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Seeder;

class StorageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $files = [
            'DoNnC2wJFdrzEGMsK2BruEMXoScmdqFQAjvt2K5q.jpg',
            'xP0HY4AmUu4Gie5SAXerabguaYD6Lq9ThYb0zjBh.jpg',
            'bR1veiLOpq20a0zZlER5oB6SGCkT7mNA2ryGfkq9.jpg',
            'e3anqh1sOEHBnrA67lPBIXQaeSamp8CZJawQLUdk.jpg',
            'm1ZX2MOyPW5p7AIahhb2wXXxX6LYKb1UIM5BG1Pq.jpg',
            // Tambahkan file lainnya di sini
        ];

        $destinationPath = 'public/users';

        foreach ($files as $file) {
            $filePath = 'public/admin/img/' . $file;
            Storage::disk('public')->put($destinationPath . '/' . $file, file_get_contents($filePath));
        }
    }

}
