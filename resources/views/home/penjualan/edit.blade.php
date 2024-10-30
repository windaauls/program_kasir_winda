@extends ('layouts.master');
@section('tittle', 'penjualan');
@section ('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Edit Data penjualan</h3>
                         <a class="btn btn-warning" href="/penjualan">Kembali</a>
                        </div>
                        <div class="card-body">
                           <form action="/penjualan/{{$penjualan->id}}/update" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Nama customer</label>
                            <input
                                type="text"
                                class="form-control"
                                name="nama_customer"
                                id=""
                                value="{{$penjualan->nama_customer}}"
                                aria-describedby="helpId"
                                placeholder=""
                            />
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Total</label>
                            <input
                                type="number"
                                class="form-control"
                                name="total"
                                id=""
                                value="{{$penjualan->total}}"
                                aria-describedby="helpId"
                                placeholder=""
                            />
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Tanggal Transaksi</label>
                            <input
                                type="date"
                                class="form-control"
                                name="tanggal_transaksi"
                                id=""
                                value="{{$penjualan->tanggal_transaksi}}"
                                aria-describedby="helpId"
                                placeholder=""
                            />
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection