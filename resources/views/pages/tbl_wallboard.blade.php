@extends('templates.default')

    @section('content')

        <div class="container ">
            <div class="row card card-default">
                <div class="col-md-8 col-md-offset-1 card-body">
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
        <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Hover Data Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                </tr>                
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
     </div>     
    @endsection