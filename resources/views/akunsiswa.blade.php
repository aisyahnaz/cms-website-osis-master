@extends('partisi.mainlayout')

@section('judul','Akun Siswa')
@section('utama')
<div class="product-status mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap drp-lst">
                    <h4>Akun Siswa</h4>
                    <div class="add-product">
                        <a href="tambahakun"> Tambah Akun</a>
                    </div>
                    <div class="asset-inner">
                        <table>
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NISN</th>
                                    <th>Nama Siswa</th>
                                    <th>Tahun Ajaran</th>
                                    <th>Email</th>
                                    <th>Setting</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                @foreach ($datasiswa as $siswa)
                                <tr>
                                    <td>{{$loop->iteration}} </td>
                                    <td>{{$siswa->nisn_siswa}} </td>
                                    <td>{{$siswa->nama_siswa}}</td>
                                    <td>{{$siswa->tahun_ajaran}}</td>
                                    <td>{{$siswa->email_siswa}}</td>
                                    
                                    <td>
                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </td>
                                </tr>    
                                @endforeach
                                
                            </tbody>
                            
                        </table>
                    </div>
                    <div class="custom-pagination">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 