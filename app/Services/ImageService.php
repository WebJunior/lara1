<?php


namespace App\Services;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImageService
{
    public function all() {
        $images = DB::table('images')->select('*')->get();
        return $images;
    }

    public function add($image) {
        $filename = $image->store('uploads');
        DB::table('images')->insert(
            ['image' => $filename, 'created_at' => date('Y-m-d H:i:s',time())]
        );
    }

    public function one($id) {
        $image = DB::table('images')->select('*')->where('id',$id)->get()->first();
        return $image;
    }

    public function update($id, $request) {
        $filename = $request->image->store('uploads');
        $oldFile = DB::table('images')->select('*')->where('id',$id)->get()->pluck('image')[0];
        Storage::delete($oldFile);
        DB::table(('images'))->where('id', $id)->update(['image' => $filename]);
    }

    public function delete($id) {
        $oldFile = $this->one($id);
        Storage::delete($oldFile->image);

        DB::table('images')->where('id',$id)->delete();
    }
}