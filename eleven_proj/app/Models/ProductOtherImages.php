<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductOtherImages extends Model
{
    use HasFactory;

    public static $otherImage, $otherImages, $image, $directory, $imageName, $imageUrl;

    public static function getImageUrl($otherImage)
    {
        self::$imageName    = $otherImage->getClientOriginalName();
        self::$directory    = 'upload/productotherImage-images/';
        $otherImage->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;
    }

    public static function newOtherImage($otherImages, $id)
    {
        foreach ($otherImages as $otherImage)
        {
            self::$imageUrl                 =  self::getImageUrl($otherImage);
            self::$otherImage               = new ProductOtherImages();
            self::$otherImage->product_id   = $id;
            self::$otherImage->image        = self::$imageUrl;
            self::$otherImage->save() ;
        }
    }

    public static function updateOtherImage($otherImages, $id)
    {
        self::deleteOtherImage($id);
        self::newOtherImage($otherImages, $id);
    }

    public static function deleteOtherImage($id)
    {
        self::$otherImages = ProductOtherImages::where('product_id', $id)->get();
        foreach (self::$otherImages as $otherImage)
        {
            if (file_exists($otherImage->image))
            {
                unlink($otherImage->image);
            }
            $otherImage->delete();
        }

    }
}
