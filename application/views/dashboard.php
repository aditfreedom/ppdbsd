<div class="content-wrapper">
 <!-- Content Header (Page header) -->
 <div class="content-header">
 <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">DASHBOARD</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">PPDB BIREUEN</a></li>
              <li class="breadcrumb-item active">Beranda</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="container">
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        <div class="col-lg-3 col-3">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <?php  
	             foreach ($kuota as $data) : ?>
                <h3><?php echo $data->sisa_zonasi;?></h3>
                <?php endforeach ;?>
                <p>Sisa Zonasi</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-graduate"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->

        <div class="col-lg-3 col-3">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <?php  
	             foreach ($kuota as $data) : ?>
                <h3><?php echo $data->sisa_afirmasi;?></h3>
                <?php endforeach ;?>

                <p>Sisa Afirmasi</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-graduate"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        <div class="col-lg-3 col-3">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <?php  
	             foreach ($kuota as $data) : ?>
                <h3><?php echo $data->sisa_pindahan;?></h3>
                <?php endforeach ;?>


                <p>Sisa Pindahan Orang Tua</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-graduate"></i>
              </div>
            </div>
          </div>

                    <!-- ./col -->
        <div class="col-lg-3 col-3">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <?php  
	             foreach ($kuota as $data) : ?>
                <h3><?php echo $data->sisa_prestasi;?></h3>
                <?php endforeach ;?>
                <p>Sisa Jalur Prestasi</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-graduate"></i>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-3">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $zonasi;?></h3>


                <p>Pendaftar Zonasi</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-graduate"></i>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-3">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $afirmasi;?></h3>


                <p>Pendaftar Afirmasi</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-graduate"></i>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-3">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $pindahan;?></h3>


                <p>Pendaftar Pindahan</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-graduate"></i>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-3">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $prestasi;?></h3>


                <p>Pendaftar Prestasi</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-graduate"></i>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-3">
            <!-- small box -->
            <div class="small-box bg-dark">
              <div class="inner">
                <h3><?php echo $formulirapprove;?></h3>


                <p>Formulir Di Approve</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-graduate"></i>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-3">
            <!-- small box -->
            <div class="small-box bg-dark">
              <div class="inner">
                <h3><?php echo $siswalulus;?></h3>


                <p>Siswa Yang Lulus</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-graduate"></i>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-3">
            <!-- small box -->
            <div class="small-box bg-dark">
              <div class="inner">
                <h3><?php echo $siswadaftarulang;?></h3>


                <p>Siswa Yang Daftar Ulang</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-graduate"></i>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-3">
            <!-- small box -->
            <div class="small-box bg-dark">
              <div class="inner">
                <h3><?php echo $pendaftar;?></h3>


                <p>Total Pendaftar</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-graduate"></i>
              </div>
            </div>
          </div>


          


        </div>
          
          <!-- ./col -->
        </div>
        
        
    </section>
    
    </div>
</div>
<!-- Button trigger modal -->



</div>

