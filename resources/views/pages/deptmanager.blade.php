<!-- การเรียกใช้งาน Tempate -->
@extends('layouts.master_template')
@section('title') ข้อมูล Manager @endsection
@section('content')

    <div class="jumbotron">
        <div class="container">
            <h2 class="display-3 head-title">ข้อมูล Manager</h2>
        </div>
    </div>

    <div class="container">

        <table class="table table-bordered">
            <thead>
                <tr class="bg-primary text-white">
                    <th>ลำดับ</th>
                    <th>รหัสพนักงาน</th>
                    <th>แผนก</th>
                    <th>ชื่อ</th>
                    <th>นามสกุล</th>
                    <th>เพศ</th>
                    <th>เริ่มงาน</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dep_managers as $key => $dm)
                    <tr>
                        {{-- <td>{{ $key + 1 }}</td>
                        <td>{{ $dm->dept_name }}</td> --}}
                        <td>{{ $dm->department_relate->emp_no }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{-- {{ $dep_managers->links() }} --}}
    </div>


@endsection
