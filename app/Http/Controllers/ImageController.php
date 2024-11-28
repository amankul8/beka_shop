<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ImageController extends Controller
{
    public function store(Request $request)
    {
        // Валидация данных
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'files' => 'required|array',
            'files.*' => 'file|mimes:jpeg,png,jpg,gif,svg|max:20480',
        ]);

        $files = $request->file('files');

        if (count($files) > 0) {
            foreach ($files as $file) {
                try {
                    // Генерация уникального имени для файла
                    $fileName = Str::random(20) . '.' . $file->getClientOriginalExtension();

                    $file->move(public_path('uploads'), $fileName);

                    // Сохранение информации о файле в базе данных
                    Image::create([
                        'name' => $fileName,
                        'product_id' => $request->get('product_id'),
                        'url' => $fileName
                    ]);
                } catch (\Exception $e) {
                    // Логируем ошибку и продолжаем обработку остальных файлов
                    \Log::error('Ошибка загрузки файла: ' . $e->getMessage());
                }
            }
        }

        return redirect()->route('admin-product-show', ['id' => $request->get('product_id')])
            ->with('success', 'Image added successfully');
    }


    public function update(Request $request){
        $request->validate([
            'image_id' => 'required',
            'name' => 'required',
            'product_id' => 'required',
            'image' => 'required|file',
        ]);

        $image = Image::find($request->get('image_id'));

        if ($image) {

            $filePath = public_path('uploads'). '/' . $image->url;

            if (File::exists($filePath)) {
                File::delete($filePath);
            }

            $file = $request->file('image');
            $fileName = Str::random(20) . '.' . $file->getClientOriginalExtension();

            $file->move(public_path('uploads'), $fileName);

            $image->update([
                'name' => $request->get('name'),
                'product_id' => $request->get('product_id'),
                'url' => $fileName
            ]);

            return redirect()->route('admin-product-show', ['id' => $request->get('product_id')])->with('success', 'Image updated successfully');
        }

        return redirect()->back()->with('error', 'Image not found');
    }


    public function delete($id)
    {
        $image = Image::find($id);

        if ($image) {
            $filePath = public_path('uploads'). '/' . $image->url;

            if (File::exists($filePath)) {
                File::delete($filePath);
            }
            $image->delete();

            return redirect()->route('admin-product-show', ['id' => $image->product_id])->with('success', 'Image deleted successfully');
        }

        return redirect()->back()->with('error', 'Image not found');
    }
}
