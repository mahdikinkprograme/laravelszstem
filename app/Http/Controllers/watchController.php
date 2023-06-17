<?php

namespace App\Http\Controllers;
use App\Models\product;
use App\Models\cart;
use Illuminate\Http\Request;

class watchController extends Controller
{
   public function indexs()
    {
        return view('student.index');
    }


    public function form(Request $req)
    {

        if($req->isMethod('post')){
            $rules = [
                'name' => 'required|regex:/^[\pL\s\-]+$/u',
                'price' => 'required|numeric',
                'descreption' => 'required|string',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            ];
           // $this->validate($req,$rules);
            if($req->hasFile('image')){
                $imag_tmp = $req->file('image');
                if($imag_tmp->isValid()){
                    $exstetion = $imag_tmp->getClientOriginalExtension();
                    $imageName = time().'.'.$exstetion;  
                    $req->image->move(public_path('admin/img'), $imageName);

                }
            }
            $insertdata = new product();
            $insertdata->name = $req->input('name');
            $insertdata->price = $req->input('price');
            $insertdata->description = $req->input('description');
            $insertdata->image = $imageName;
            $insertdata->save();
            dd($insertdata);
        }

    }

    public function watchserve()
    {
        $datavalue = product::all();
        return view('student.watch',compact('datavalue'));

    }


    public function detaile($id)
    {
        $detail = product::where('id',$id)->exists();
        $product = product::where('id',$id)->first();
        return view('student.detail',compact('product'));
    }

    public function prodect($id)
    {
        $product  = product::find($id);
        $cart = session()->get('carts',[]);

        $cart[$id] = array('image' => $product->image,'name' => $product->name,'price' => $product->price,'id' => $product->id);
        session()->put('carts',$cart);

        return redirect()->back()->with('succes','add cart secces');

    }

   public function delet($id){
    $product  = product::find($id);
    $cart = session()->get('carts',[]);

    $cart[$id] = array('image' => $product->image,'name' => $product->name,'price' => $product->price,'id' => $product->id)->delete();
    session()->put('carts',$cart);

    return redirect()->back();

   }
        
  }




 

