@extends ('layouts.master');
@section('tittle', 'transaksi');
@section ('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Data transaksi</h3>
                            <a class="btn btn-primary" href="/transaksi/tambah/">Tambah</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                         <table class="table table-bordered table-striped" id="datatable">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Id Menu</th>
                                                    <th scope="col">Harga</th>
                                                    <th scope="col">Qty</th>
                                                    <th scope="col">Subtotal</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               @foreach ($Transaksi as $Transaksi) 
                                                <tr>
                                                    <td>{{ $loop->iteration}} </td>
                                                    <td>{{ $transaksi->id_menu}} </td>
                                                    <td>{{ $transaksi->harga}} </td>
                                                    <td>{{ $transaksi->qty}} </td>
                                                    <td>{{ $transaksi->subtotal}} </td>
                                                    <td><a class="btn btn-danger" href="/transaksi/{{$transaksi->id}}/delete"
                                                         onclick="return confirm('Yakin mau di hapus?')">Delete</a>
                                                        </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                         </table>
                                        </tr>
                                    </thead>

                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection