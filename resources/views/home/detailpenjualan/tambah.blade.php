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
                            <h3>Halaman Tambah Data detailpenjualan </h3>
                         
                        </div>
                        <div class="card-body">
                           <form action="/detailpenjualan/simpan" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">ID Penjualan</label>
                            <input
                                type="id_penjualan"
                                class="form-control"
                                name="id_penjualan"
                                id=""
                                aria-describedby="helpId"
                                placeholder=""
                            />
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">id_menu</label>
                            <input
                                type="id_menu"
                                class="form-control"
                                name="id_menu"
                                id=""
                                aria-describedby="helpId"
                                placeholder=""
                            />
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Harga</label>
                            <input
                                type="harga"
                                class="form-control"
                                name="harga"
                                id=""
                                aria-describedby="helpId"
                                placeholder=""
                            />
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Qty</label>
                            <input
                                type="qty"
                                class="form-control"
                                name="qty"
                                id=""
                                aria-describedby="helpId"
                                placeholder=""
                            />
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Subtotal</label>
                            <input
                                type="subtotal"
                                class="form-control"
                                name="subtotal"
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