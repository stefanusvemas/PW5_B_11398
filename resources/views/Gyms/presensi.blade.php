@extends('dashboard')
@section('content')
<style>
    .gambar {
        height: 100px;
        border-radius: 100px;
        border: 1px solid black;
        background-image: none;
    }

    .gambarKelas {
        width: 250px;
        aspect-ratio: 4/3;
        object-fit: cover;
        border: 2px solid black;
    }
</style>
<div class="content">

    <div class="container-fluid p-3">

        <div class="card mt-3">
            <div class="card-body">
                <div class="row gx-2">
                    <div class="col-auto">
                        <img src="{{$kelas[0]['gambar']}}" alt="{{$kelas[0]['nama']}}" class="img-fluid rounded gambarKelas">
                    </div>
                    <div class="col">
                        <h3 class=""><strong>{{$kelas[0]['nama']}}</strong> <button type="button" data-bs-toggle="modal" data-bs-target="#kelasModal" class="btn btn-success btn-sm"><i class="fa-solid fa-eye"></i></button></h3>
                        <p class="card-text">
                            Instruktur: {{$kelas[0]['instruktur']}}<br>
                            Ruang: {{$kelas[0]['ruang']}}<br>
                            Total Member: {{count($members)}}<br>
                            Rating: <?php for ($i = 0; $i < $kelas[0]['rating']; $i++) {
                                        echo '<i class="fas fa-star" style="color: Gold;"></i>';
                                    } ?><br>
                        </p>
                    </div>
                    <div class="col">
                        <p class="card-text text-end">
                            Tanggal : {{date("l, d-F-y")}}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <hr>
        <div class="row mb-3">
            <div class="col">
                <h4>Daftar Member</h4>
            </div>
            <div class="col-auto">
                <button class="btn btn-primary" id="presensiBtn" type="button"><i class="fa-solid fa-check"></i> Presensi</button>
            </div>
        </div>

        <!-- Toast -->
        <div class="toast-container position-absolute bottom-0 end-0 translate-middle-y position-fixed">
            <div class="toast align-items-center text-white bg-primary border-0" id="presensiToast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="d-flex">
                    <div class="toast-body">
                        <i class="fa-solid fa-check"></i> Berhasil Mempresensi Member
                    </div>
                </div>
            </div>
        </div>


        <div class="d-flex flex-wrap justify-content-between">
            @forelse ($members as $member)
            <div class="card" style="width: 24rem; background-color: <?php echo $member['jenis_kartu'] ?>;">
                <img src="{{$member['gambar']}}" class="card-img-top" alt="...">
                @if ($member['jenis_kartu'] == "Black" || $member['jenis_kartu'] == "Silver")
                <div class="card-body text-white">
                    @else
                    <div class="card-body">
                        @endif
                        <h5 class="card-title"><strong>{{$member['nama']}}</strong></h5>
                        <p class="card-text">
                            Email: {{$member['email']}}<br>
                            No Telp: {{$member['no_telp']}}<br>
                            @if ($member['jenis_kartu'] == "Black")
                            Jenis Kartu: <span class="badge border rounded-pill" style="border-color: white;">{{$member['jenis_kartu']}}</span><br>
                            @else
                            Jenis Kartu: <span class="badge border border-dark rounded-pill">{{$member['jenis_kartu']}}</span><br>
                            @endif
                            @if ($member['metode_pembayaran'] == "Deposit Kelas")
                            Metode Pembayaran: <span class="badge badge-primary">{{$member['metode_pembayaran']}}</span>
                            @else
                            Metode Pembayaran: <span class="badge badge-success">{{$member['metode_pembayaran']}}</span>
                            @endif
                        </p>
                    </div>
                </div>

                @empty
                <div class="alert alert-danger">
                    Data Kelas masi kosong
                </div>
                @endforelse
            </div>
        </div>


        <!-- Detail Kelas Modal -->
        <div class="modal" id="kelasModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title" id="staticBackdropLabel">Detail Kelas</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h3 class=""><strong>{{$kelas[0]['nama']}}</strong></h3>
                        <p class="card-text">
                        <div class="row">
                            <div class="col-4">
                                Nama Instruktur
                            </div>
                            <div class="col">
                                : {{$kelas[0]['instruktur']}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                Kode Instruktur
                            </div>
                            <div class="col">
                                : {{$kelas[0]['kode']}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                Hari Kelas
                            </div>
                            <div class="col">
                                : {{date("l")}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                Tanggal Kelas
                            </div>
                            <div class="col">
                                : {{date("d-M-Y")}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                Ruang
                            </div>
                            <div class="col">
                                : {{$kelas[0]['ruang']}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                Rating
                            </div>
                            <div class="col">
                                : <?php for ($i = 0; $i < $kelas[0]['rating']; $i++) {
                                        echo '<i class="fas fa-star" ></i>';
                                    } ?>
                            </div>
                        </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $("#presensiBtn").click(function() {
                $("#presensiToast").toast("show");
            });
        });
    </script>
    @endsection