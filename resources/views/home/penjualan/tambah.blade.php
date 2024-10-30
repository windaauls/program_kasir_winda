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
                            <h3>Halaman Tambah Data penjualan</h3>
                         
                        </div>
                        <div class="card-body">
                           <form action="/penjualan/simpan" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Nama customer</label>
                            {{-- <input
                                type="text"
                                class="form-control"
                                name="nama_customer"
                                id=""
                                aria-describedby="helpId"
                                placeholder=""
                            /> --}}
                            <select name="nama_customer" id="" class="form-control">
                                @foreach($pelanggan as $pelanggan)
                                <option value="{{$pelanggan->id}}">{{$pelanggan->nama_pelanggan}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Total</label>
                            <input
                                type="number"
                                class="form-control"
                                name="total"
                                id=""
                                aria-describedby="helpId"
                                placeholder=""
                            />
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Tanggal Transaksi</label>
                            <input
                                type="Date"
                                class="form-control"
                                name="tanggal_transaksi"
                                id=""
                                aria-describedby="helpId"
                                placeholder=""
                            />
                        </div>
                        <button type="submit" class="btn btn-primary">simpan</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection