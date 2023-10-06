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
    <div class="container-fluid">
        <div class="card mt-3">
            <div class="card-body">
                <div class="row gx-2">
                    <div class="col-auto">
                        <img src="<?php echo $kelas[0]['gambar'] ?>" alt="<?php echo $kelas[0]['nama']; ?>" class="img-fluid rounded gambarKelas">
                    </div>
                    <div class="col">
                        <h3 class=""><strong><?php echo $kelas[0]['nama']; ?></strong></h3>
                        <p class="card-text">
                            Instruktur: <?php echo $kelas[0]['instruktur']; ?><br>
                            Ruang: <?php echo $kelas[0]['ruang']; ?><br>
                            Total Member: <?php echo count($member); ?><br>
                            Rating: <?php for ($i=0; $i < $kelas[0]['rating']; $i++) { 
                                echo '<i class="fas fa-star" style="color: Gold;"></i>';
                            } ?><br>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection