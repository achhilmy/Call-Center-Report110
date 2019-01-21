@extends('templates.default')

    @section('content')
    
 
    <div class="container">
        <div class="row">
            <div class="card card-default">
                <div class="col-md-8 col-md-offset-2">
                    <h2> Edit Work Order</h2>
                    <td ><a class="btn btn-success text-right">Export Xls/Excell</a></td>
                	<td ><a class="btn btn-info text-right">Import Xls/Excell</a></td> 
                    <br><br>
                    <form class ="" action = "{{route('pages.update')}}" method="post">
                        {{csrf_field()}}
                        {{method_field('PATCH')}}
                        <div class="form-group">
                            <label for="">No Pengaduan</label>
                            <input type="text" class="form-control" name ="no_pengaduan" value="{{$workorder->no_pengaduan}}">
                            
                        </div>
                        <div class="form-group">
                            <label for="">Id Telp</label>
                            <input type="text" class="form-control" name = "id_telp" value="{{$workorder->id_telp}}">
                           
                        </div>
                        <div class="form-group">
                            <label for="">Nama Pelapor</label>
                            <input type="text" class="form-control" name = "pelapor" value="{{$workorder->pelapor}}">
                            
                        </div>
                        <div class="form-group">
                            <label for="">Detail</label>
                            <input type="text" class="form-control" name = "detail" value="{{$workorder->detail}}">
                           
                        </div>
                        <div class="form-group">
                            <label for="">Polda</label>
                            <input type="text" class="form-control" name = "polda" value="{{$workorder->polda}}">
                           
                        </div>
                        <div class="form-group">
                            <label for="">Polres</label>
                            <input type="text" class="form-control" name = "polres" value="{{$workorder->polres}}">
                           
                        </div>
                        <div class="form-group">
                            <label for="">Eskalasi</label>
                            <input type="text" class="form-control" name = "eskalasi"value="{{$workorder->eskalasi}}">
                           
                        </div>
                        <div class="form-group">
                            <label for="">Status</label>
                            <input type="text" class="form-control" name = "status" value="{{$workorder->status}}">
                           
                        </div>
                        <div class="form-group">
                            <label for="">Tgl Laporan</label>
                            <input type="text" class="form-control"name = "tgl_laporan" value="{{$workorder->tgl_laporan}}">
                           
                        </div>
                        <div class="form-group">
                            <label for="">sub_kategori</label>
                            <input type="text" class="form-control" name = "sub_kategori"value="{{$workorder->sub_kategori}}">
                           
                        </div>
                        <div class="form-group">
                            <label for="">kategori</label>
                            <input type="text" class="form-control" name = "kategori" value="{{$workorder->kategori}}">
                           
                        </div> 
                        <div class="form-group">                                
                            <button type="submit" class="btn btn-primary" value="save">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><br><br>
    @endsection