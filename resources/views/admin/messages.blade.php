@extends('layouts.admin')

@section('title','Mesajlar Listesi')

@section('content')
    <div class="content" style="padding-left: 300px;">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">


                        <h5 class="title">Mesajlar</h5>

                        <p class="category">Mesajlar Listesini Görüntülemektesiniz.</p>
                        @include('home.message')

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                <th><b>Id</b></th>
                                <th><b>Name</b></th>
                                <th><b>Email</b></th>
                                <th><b>Phone</b></th>
                                <th><b>Subject</b></th>
                                <th><b>Message</b></th>
                                <th><b>Admin Note</b></th>
                                <th><b>Status</b></th>
                                <th><b>Edit</b></th>
                                <th><b>Delete</b></th>


                                </thead>


                                <tbody>
                                @foreach($datalist as $rs)
                                    <tr>
                                        <td>
                                            {{$rs->id}}
                                        </td>
                                        <td>
                                            {{$rs->name}}
                                        </td>
                                        <td>
                                            {{$rs->email}}
                                        </td>
                                        <td>
                                            {{$rs->phone}}
                                        </td>

                                        <td>
                                            {{$rs->subject}}
                                        </td>
                                        <td>
                                            {{$rs->message}}
                                        </td>
                                        <td>
                                            {{$rs->note}}
                                        </td>
                                        <td>
                                            {{$rs->status}}
                                        </td>
                                        <td><a href="{{route('admin_message_edit',['id'=>$rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=400,height=400')"><img src="{{asset('assets/admin/images')}}/edit.png" height="30"></a></td>
                                        <td>
                                            <a href="{{route('admin_message_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete ! Are you sure?')"><img src="{{asset('assets/admin/images')}}/delete.png" height="30"></a>
                                        </td>

                                    </tr>

                                </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
