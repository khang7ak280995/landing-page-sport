<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Storage;

class FunctionHelper {

    public static function mutil($request)
    {
        $file = $request->file;
        $listFile = [];
        if (!empty($file)) {
            if (!is_array($file)) $file = array($file);
            foreach ($file as $image) {
                $path = $request->path;
                if(empty($path)) $path = 'all';
                $nameFile = $image->getClientOriginalName(); // full name
                $ext = pathinfo($nameFile, PATHINFO_EXTENSION); //get type file
                $lastName = $nameFile;
                $i = 1;
                $without_extension = pathinfo($nameFile, PATHINFO_FILENAME); // get name without extension
                if (file_exists(public_path('uploads/'.$path.'/'.$nameFile))) { //check name file exist
                    $lastName = $without_extension . '(' . $i . ').' . $ext;
                    while (file_exists(public_path('uploads/'.$path.'/'. $lastName))) {
                        $i++;
                        $lastName = $without_extension . '(' . $i . ').' . $ext;
                    }
                }
                $path = public_path('uploads/'.$path.'/');
                $image->move($path, $lastName);
                array_push( $listFile, $lastName );
            }
        }
        return $listFile;
    }

    public static function storage($request)
    {
        $file = $request->file;
        $listFile = [];
        if (!empty($file)) {
            if (!is_array($file)) $file = array($file);
            foreach ($file as $image) {
                $path = $request->path;
                if(empty($path)) $path = 'uploads';
                $nameFile = $image->getClientOriginalName(); // full name
                $ext = pathinfo($nameFile, PATHINFO_EXTENSION); //get type file
                $nameFile = "document_".uniqid().".".$ext;
                $nameFile = Storage::putFileAs($path, $image, $nameFile);
                array_push( $listFile, Storage::url($nameFile));
            }
        }
        return $listFile;
    }

    public static function getPriceProduct($product)
    {
        $price = $product->price;

        if($product->is_use_type_product && !empty($product->properties[0])){
            $price = $product->properties[0]['price'];
        }

        return $price;
    }

}
