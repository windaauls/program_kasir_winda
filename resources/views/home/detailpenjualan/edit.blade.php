@extends ('layouts.master');
@section('tittle', 'detailpenjualan');
@section ('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Edit Data detailpenjualan</h3>
                         <a class="btn btn-warning" href="/detailpenjualan">Kembali</a>
                        </div>
                        <div class="card-body">
                           <form action="/detailpenjualan/{{$detailpenjualan->id}}/update" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">ID Penjualan</label>
                            <input
                                type="text"
                                class="form-control"
                                name="id_penjualan"
                                id=""
                                value="{{$detailpenjualan->id_penjualan}}"
                                aria-describedby="helpId"
                                placeholder=""
                            />
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">ID Menu</label>
                            <input
                                type="text"
                                class="form-control"
                                name="id_menu"
                                id=""
                                value="{{$detailpenjualan->id_menu}}"
                                aria-describedby="helpId"
                                placeholder=""
                            />
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Harga</label>
                            <input
                                type="text"
                                class="form-control"
                                name="harga"
                                id=""
                                value="{{$detailpenjualan->harga}}"
                                aria-describedby="helpId"
                                placeholder=""
                            />
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Qty</label>
                            <input
                                type="text"
                                class="form-control"
                                name="qty"
                                id=""
                                value="{{$detailpenjualan->qty}}"
                                aria-describedby="helpId"
                                placeholder=""
                            />
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Subtotal</label>
                            <input
                                type="text"
                                class="form-control"
                                name="subtotal"
                                id=""
                                value="{{$detailpenjualan->subtotal}}"
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