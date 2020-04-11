@extends('layouts.app')
<style>
    tr th {
        text-align: justify;
    }

    tr td {
        text-align: justify;
    }
</style>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-right">بيانات المرضى كاملة</div>
                <div class="card-body">
                    <table class="table" dir="rtl">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">الاسم </th>
                                <th scope="col">تاريخ الميلاد</th>
                                <th scope="col">المدينة</th>
                                <th scope="col">الجنس</th>
                                <th scope="col">الحالة المرضية</th>
                                <th scope="col">بواسطة</th>
                                <th scope="col">العمليات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i = 1;
                            @endphp
                            @foreach ($data as $row)
                            @if ($row->status == 1)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$row->name}}</td>
                                <td>{{$row->bod}}</td>
                                <td>{{$row->city}}</td>
                                <td>
                                    @if ($row->gender == 1)
                                    رجل
                                    @else
                                    أنثى
                                    @endif
                                </td>
                                <td>
                                    @if ($row->personalstatus == 1)
                                    مريض
                                    @else
                                    معفي
                                    @endif
                                </td>
                                <td>{{App\User::find($row->user)->name}}</td>
                                <td>
                                    <a class="btn btn-info btn-xs" href="/sick/{{$row->id}}"
                                        style="display: inline-block"> البيانات </a>
                                    <span>|</span>
                                    <a href="/sick/{{$row->id}}/edit" class="btn btn-success btn-xs"
                                        style="display: inline-block">تعديل</a>
                                    <span>|</span>
                                    <form action="{{action('SickController@destroy',$row->id)}}" method="post">
                                        @csrf
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button type="submit" class="btn btn-wirrning "
                                            style="display: inline-block">حذف المريض</button>
                                    </form>
                                </td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
