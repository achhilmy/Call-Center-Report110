<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkOrder extends Model
{
    protected $fillable =['no_pengaduan','id_telp','pelapor','detail','polda','polres','eskalasi','status','tgl_laporan','sub_kategori','kategori'];
}
