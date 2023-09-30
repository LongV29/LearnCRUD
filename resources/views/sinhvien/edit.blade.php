@extends('layouts.sinhvien')
@section('content')
    <div class="container mt-5">
       <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3>Sửa sinh viên</h3>
                </div>
                <div class="col-md-6">
                    <a href="{{route('sinhvien.index')}}">
                    <button class="btn btn-primary float-end">Danh sách sinh viên</button>
                </a>
                </div>
            </div>
        </div>
        <div class="card-body">
           <form action="{{route('sinhvien.store',$ListsinhVien->id)}}" method="put" a>
            @csrf
            <div class="mb-3">
                <label for="FullName" class="form-label">Họ và tên</label>
                <input type="text" class="form-control" value="{{ $ListsinhVien->FullName }}" id="FullName" name="FullName" placeholder="nhập họ và tên của bạn">
            </div>
            <div class="mb-3">
                <label for="MaSv" class="form-label">Mã sinh viên</label>
                <input type="text" class="form-control" value="{{ $ListsinhVien->MaSv }}" name="MaSv" id="MaSv" placeholder="nhập mã sv">
            </div>            <div class="mb-3">
                <label for="Address" class="form-label">Địa chỉ</label>
                <input type="text" class="form-control" value="{{ $ListsinhVien->Address }}" name="Address" id="Address" placeholder="nhập Địa chỉ">
            </div>            <div class="mb-3">
                <label for="Phone" class="form-label">Số điện thoại</label>
                <input type="number" class="form-control" value="{{ $ListsinhVien->Phone }}" name="Phone" id="Phone" placeholder="nhập số điện thoại">
            </div>            <div class="mb-3">
                <label for="Birthday" class="form-label">Ngày sinh</label>
                <input type="date" class="form-control" value="{{ $ListsinhVien->Birthday }}" name="Birthday" id="Birthday" placeholder="nhập họ và ten của bạn">
            </div>            <div class="mb-3">
                <label for="Sex" class="form-label">Giới tính</label>
                <select class="form-select" name="Sex">
                    <option value="Nam">Nam</option>
                    <option value="Nữ">Nữ</option>
                  </select>
            </div>
            <Button type="submit" class="btn btn-primary">Thêm mới</Button>
        </form>
        </div>
       </div>
    </div>
@endsection