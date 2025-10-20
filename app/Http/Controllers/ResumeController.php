<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Response;

use Illuminate\Http\Request;

use App\DataObjects\Resume;

class ResumeController extends Controller
{
    //index function
    public function index()
    {
        // Tải dữ liệu hồ sơ (resume data), ưu tiên lấy từ cache.
        // Nếu dữ liệu 'resuma_data' không tồn tại trong cache hoặc đã hết hạn (sau 1 ngày),
        // hàm callback (function) sẽ được thực thi để tải lại dữ liệu.
        //Khi cập nhật resume nhớ xóa cache bằng lệnh php artisan cache:clear
        $resume = Cache::remember(
            'resuma_data',
            now()->addDay(),
            function () {

                $resume = Storage::disk('resume')
                    ->get('resume.json');
                $resumeData = json_decode(
                    $resume,
                    true
                );

                // dump('hit');

                return Resume::fromArray($resumeData);
            }
        );

        // dd($resume);

        return view(
            'resume',
            [
                'resume' => $resume,
            ]
        );
    }

    //Download the CV function
    public function download()
    {

        $filePath = public_path('storage\CV_PhanTanCuong.pdf');

        if (!$filePath) {
            abort(404, 'CV File not Found!');
        }

        return Response::download(
            $filePath,
            'Phan_Tan_Cuong_Resume.pdf',
            [
                'Content-Type' => 'application/pdf',
            ]
        );
    }
}
