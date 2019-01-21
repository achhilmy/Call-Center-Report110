@extends('templates.default')

    @section('content')
    
 
    <div class="container">
        <div class="row">
            <div class="card card-default">
                <div class="col-md-8 col-md-offset-2">
                    <h2>Work Order</h2>
                    <td ><a class="btn btn-success text-right">Export Xls/Excell</a></td>
                	<td ><a class="btn btn-info text-right">Import Xls/Excell</a></td> 
                    <br><br>
                    <form class ="" action = "{{route('pages.workorder')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="">No Pengaduan</label>
                            <input type="text" class="form-control" name ="no_pengaduan" placeholder="No Pengaduan">
                            
                        </div>
                        <div class="form-group">
                            <label for="">Id Telp</label>
                            <input type="text" class="form-control" name = "id_telp" placeholder="id telp ">
                           
                        </div>
                        <div class="form-group">
                            <label for="">Nama Pelapor</label>
                            <input type="text" class="form-control" name = "pelapor"  placeholder="pelapor">
                            
                        </div>
                        <div class="form-group">
                            <label for="">Detail</label>
                            <input type="text" class="form-control" name = "detail" placeholder="detail">
                           
                        </div>
                        <div class="form-group">
                            <label for="">Polda</label>
                            <input type="text" class="form-control" name = "polda" placeholder="polda">
                           
                        </div>
                        <div class="form-group">
                            <label for="">Polres</label>
                            <input type="text" class="form-control" name = "polres" placeholder="polres">
                           
                        </div>
                        <div class="form-group">
                            <label for="">Eskalasi</label>
                            <input type="text" class="form-control" name = "eskalasi" placeholder="eskalasi">
                           
                        </div>
                        <div class="form-group">
                            <label for="">Status</label>
                            <input type="text" class="form-control" name = "status" placeholder="status">
                           
                        </div>
                        <div class="form-group">
                            <label for="">Tgl Laporan</label>
                            <input type="text" class="form-control"name = "tgl_laporan" placeholder="tgl_laporan">
                           
                        </div>
                        <div class="form-group">
                            <label for="">sub_kategori</label>
                            <input type="text" class="form-control" name = "sub_kategori" placeholder="sub_kategori">
                           
                        </div>
                        <div class="form-group">
                            <label for="">kategori</label>
                            <input type="text" class="form-control" name = "kategori" placeholder="kategori">
                           
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