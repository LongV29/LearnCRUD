@extends('layouts.sinhvien')

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Quản lý sinh viên</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('sinhvien.create') }}">
                            <button type="button" class="btn btn-primary float-end">Thêm mới</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                @if (Session::has('message'))
                    <div class="alert alert-success">
                        {{Session::get('message')}}
                    </div>
                @endif
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Mã Sinh Viên</th>
                            <th scope="col">Họ và Tên</th>
                            <th scope="col">Số điện thoại</th>
                            <th scope="col">Giới tính</th>
                            <th scope="col">Sinh nhật</th>
                            <th scope="col">Địa chỉ</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Listsinhvien as $sv)
                            <tr>
                                <td>{{ $sv->id }}</td>
                                <td>{{ $sv->MaSv }}</td>
                                <td>{{ $sv->FullName }}</td>
                                <td>{{ $sv->Phone }}</td>
                                <td>{{ $sv->Sex }}</td>
                                <td>{{ $sv->Birthday }}</td>
                                <td>{{ $sv->Address }}</td>
                                <td>
                                    <a type="button" href="{{route('sinhvien.edit',$sv->id)}}">Sửa</a>
                                    <a type="button" href="{{route('sinhvien.destroy',$sv->id)}}">Xóa</a>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
