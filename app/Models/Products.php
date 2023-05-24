<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\Request;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'detail',
        'token',
        'price',
        'img'
    ];
    public function testAddProduct(Request $request)
    {
        $request->validate([
        'name' => 'required',
        'price' => 'required',
        'detail'=>'required',
        'img'=> 'required'

    ]);

        $input = $request->all();

        if ($image = $request->file('img')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['img'] = "$profileImage";
        }

        Products::create($input);
    }
    public function testUpdateProduct(Request $request, $id)
    {
        $request->validate([
        ]);

        $input = $request->all();

        if ($image = $request->file('img')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['img'] = "$profileImage";
        }

        else{
            unset($input['image']);
        }
        $product = Products::find($id);

        $product->update($input);

    }
}
