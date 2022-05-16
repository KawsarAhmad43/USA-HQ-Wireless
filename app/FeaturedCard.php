<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class FeaturedCard extends Model
{
    protected $fillable = [
        'name',
        'image',
        'category_link'
      ]; 



      public const DEFAULT_FEATURED_IMAGE = 'featured.png';

      public static function store($request)
      {
          try {
              if ($request->has('image')) {
                  $image = time().'.'.$request->image->extension();
                  $request->image->move(
                      public_path('back-end/content/featured'),
                      $image
                  );
              } elseif ($request->has('id') && $request->get('id') != '') {
                  $feature = FeaturedCard::find($request->id);
                  $image = $feature->image;
              } else {
                  $image = self::DEFAULT_FEATURED_IMAGE;
              }
  
              //
  
              self::updateOrCreate(
                  [
                      'id' => $request->id,
                  ],
                  [
                      'name'    => $request->name,
                      'image'   => $image,
                      'category_link'   => $request->category_link,
                  ]
              );
  
             
  
              return back();
          } catch (\Exception $exception) {
             
  
              return back();
          }
      }




}
