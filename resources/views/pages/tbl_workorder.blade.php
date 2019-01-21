@extends('templates.default')

    @section('content')

        <div class="container ">
            <div class="row box">
                <div class="col-md-8 col-md-offset-1 box-body">
                    <h2>Masukan File Xls Disini</h2>
                    <form enctype="multipart/form-data" action="/tbl_workorder/import_xls"method="POST">
                        {{csrf_field()}}
                        <label for="">Masukan file xls</label>
                        <input type="file" name="file">
                        <p style="color:red">{{$errors->first('file')}}</p>
                        <input type="submit" class="pull-right btn btn-sm btn-primary" id="">
                    </form>
                </div>            
            </div>
        </div>
        <div></div>
        <div class="container">
            <h2 class="text-center">Tabel Work Order</h2>.                      
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">No Pengaduan</th>
                    <th scope="col">ID Telp</th>
                    <th scope="col">Pelapor</th>
                    <th scope="col">Detail</th>
                    <th scope="col">Polda</th>
                    <th scope="col">Polres</th>
                    <th scope="col">Eskalasi</th>
                    <th scope="col">Status</th>
                    <th scope="col">Tanggal Laporan</th>
                    <th scope="col">Sub Kategori</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                
                @foreach ($work_orders as $index=>$workorder)                
                    <tr>                    
                        <td>{{$index+1}}</td>
                        <td>{{$workorder->no_pengaduan}}</td>
                        <td>{{$workorder->id_telp}}</td>   
                        <td>{{$workorder->pelapor}}</td>   
                        <td>{{$workorder->detail}}</td>   
                        <td>{{$workorder->polda}}</td>   
                        <td>{{$workorder->polres}}</td>   
                        <td>{{$workorder->eskalasi}}</td>   
                        <td>{{$workorder->status}}</td>   
                        <td>{{$workorder->tgl_laporan}}</td>   
                        <td>{{$workorder->sub_kategori}}</td>   
                        <td>{{$workorder->kategori}}</td>                 
					    <td>
                            <a href="/edit/{{$workorder->id_work_order}}" class="btn btn-success">EDIT</a>&nbsp;
                            <a href="/delete/{{ $workorder->id_work_order }}"class="btn btn-danger">DELETE</a>
                        </td>                                      

                    </tr>
                @endforeach
                </tbody>
                </table>

                {{$work_orders->links()}}
        </div>
    @endsection