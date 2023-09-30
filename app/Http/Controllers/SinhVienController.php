<?php

namespace App\Http\Controllers;

use App\Models\ListsinhVien;
use Illuminate\Http\Request;

class SinhVienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Listsinhvien = ListsinhVien::paginate(5);
        return view('sinhvien.index',compact('Listsinhvien'))->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sinhvien.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        ListsinhVien::create($request->all());
        return redirect()->route('sinhvien.index')->with('message','Thêm thành công ');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ListsinhVien $ListsinhVien)
    {
        // dd($ListsinhVien);
        return view('sinhvien.edit',compact('ListsinhVien'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ListsinhVien $ListsinhVien)
    {
        $ListsinhVien->update($request->all());
        return redirect()->route('sinhvien.index')->with('message','Sửa thành công');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ListsinhVien $ListsinhVien)
    {
        $ListsinhVien->delete();
        return redirect()->route('sinhvien.index')->with('message','Xóa thành công');
    }
}
