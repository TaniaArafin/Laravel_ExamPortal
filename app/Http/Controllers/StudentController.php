<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    // public function create(Request $request){
    //     $student = new student();

    //     $student_name   = $request->get('Student_Name');
    //     $student_email  = $request->get('Student_Email');

    //     if ($request->hasFile('Student_Image')) {
    //         $request->validate([
    //             'image' => 'mimes:jpeg,bmp,png,jpg|max:4096' // Only allow .jpg, .bmp and .png file types.
    //         ]);

    //         // Save the file locally in the storage/public/ folder under a new folder named /product
    //         $request->Student_Image->store('student', 'public');

    //         // Store the record, using the new file hashname which will be it's new filename identity.
    //         $student->Student_Image = $request->Student_Image->hashName();
    //     }

    //     $student->Student_Name = $student_name;
    //     $student->Student_Email = $student_email;

    //     $student->save();
    //     return redirect('index')->with('status', 'Student added Successfully');;

    //     /*
    //     $request->validate([
    //         /*'name' => 'required',
    //         'price' => 'required',
    //         'type' => 'required',
    //         'discount' => 'required',
    //         'finalPrice' => 'required',
    //         'file_path' => 'required',
    //         'description' => 'required',
    //     ]);

    //     $product = new Product;

    //     $price                  = $request->get('price');
    //     $discount               = $request->get('discount');
    //     $finalPrice             = $price - ($price * ($discount / 100));
    //     $product->name          = $request->get('name');
    //     $product->sellerID      = $request->get('sellerID');
    //     $product->price         = $price;
    //     $product->type          = $request->get('type');
    //     $product->discount      = $discount;
    //     $product->finalPrice    = $finalPrice;
    //     $product->description   = $request->get('description');

    //     if ($request->hasFile('file')) {

    //         $request->validate([
    //             'image' => 'mimes:jpeg,bmp,png,jpg|max:4096' // Only allow .jpg, .bmp and .png file types.
    //         ]);

    //         // Save the file locally in the storage/public/ folder under a new folder named /product
    //         $request->file->store('products', 'public');

    //         // Store the record, using the new file hashname which will be it's new filename identity.
    //         $product->file_path = $request->file->hashName();
    //     }

    //     $product->save();
    //     return redirect('/seller')->with('status', 'Product Created Successfully');
    //     */

    // }

    public function index(){
        $students = student::all();

        return view('students.list')->with('students', $students);
    }

    // public function showIndex(){
    //     return view('students.list');
    // }

    public function store(Request $request){
        $validator= Validator::make($request->all(),[
            'Student_Name' => 'required',
            'Student_Email' => 'required',
            'Student_Image' => 'sometimes|image:jpeg,png,jpg|max:4096' // Only allow .jpg, .bmp and .png file types.
        ]);

        if($validator->passes()){
            //save data here
            $student = new student();
            $student->Student_Name   = $request->get('Student_Name');
            $student->Student_Email  = $request->get('Student_Email');
            if ($request->hasFile('Student_Image')) {
                        $request->validate([
                            'image' => 'mimes:jpeg,bmp,png,jpg|max:4096' // Only allow .jpg, .bmp and .png file types.
                        ]);

                        // Save the file locally in the storage/public/ folder under a new folder named /product
                        $request->Student_Image->store('student', 'public');

                        // Store the record, using the new file hashname which will be it's new filename identity.
                        $student->Student_Image = $request->Student_Image->hashName();
                    }
            $student->save();
            $request->session()->flash('success', 'Student Added Successfully');
            return redirect()->route('students.index');

        }
        else{
            //return with errors
            return redirect()->route('students.index')->withErrors($validator)->withInput();
        }

    }

    public function delete($id) {
        $student = student::find($id);
        if($student->Student_Image) {
            Storage::delete('/public/student/'.$student->Student_Image);
        }
        $student->delete();

        return redirect()->route('students.index')->with('status', 'Student Deleted Successfully');
    }

}
