<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data Fasilitas Kamar</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://unpkg.com/feather-icons"></script>
</head>
<body class="bg-light">

	<div class="container-fluid"> 
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="margin: 4vh 5vh 0vh; border-radius: 15px;">
        <div class="container-fluid mt-1" style="margin: 0vh 2vh 0vh;">
          <img src="<?= base_url('assets/img/logo.png');?>" style="height: 70px">
          <div class="d-flex flex-row-reverse bd-highlight">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item p-2 bd-highlight">
                  <a class="nav-link btn btn-sm btn-light text-primary" style="border-radius: 10px;" href="<?= base_url('Auth/Login'); ?>">Logout</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
</div>

	<div class="container-fluid">
    <div class="content-wrapper" style="margin: 3vh 5vh 0vh;">
      <section class="content-header">
        <h3>Ubah Data Fasilitas Kamar</h3>
      </section>
    </div>
                    
      <section class="content" style="margin: 2vh 5vh 0vh;">
        <div class="card" style="border-radius: 10px;">
          <div class="card-body">

          	<?php foreach ($editfaskamar as $key) : ?>

            <form class="row g-3" action="<?= base_url('Admin/SimpanEditFkamar/').'?id_faskamar='.$key->id_faskamar;?>" method="post">
              <div class="col-md-6">
                <label class="form-label">Nama Room</label>
                <select class="form-select" aria-label="Default select example" name="id_kamar" required>
                  <option selected>Pilih Tipe Room</option>
                  <option class="text-dark" value="1">Superior Room</option>
                  <option class="text-dark" value="2">Deluxe Room</option>
                  <option class="text-dark" value="3">Twin Room</option>
                  <option class="text-dark" value="4">Suite Room</option>
                </select>
              </div>
              <div class="col-md-6">
                <label class="form-label">Nama Fasilitas</label>
                <input type="text" class="form-control" name="nama_faskamar" value="<?php echo $key->nama_faskamar?>">
              </div>
              <div class="col-md-6">
                <label class="form-label">Kategori</label>
                <input type="text" class="form-control" name="kategori" value="<?php echo $key->kategori?>">
              </div>
              <div class="col-md-6">
                <label class="form-label">Gambar</label>
                <input type="file" class="form-control" name="gambar" value="<?php echo $key->gambar?>">
              </div>

              <div class="col-12 mt-4">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="<?= base_url('Admin/FasilitasKamar');?>" class="btn btn-danger">Cancel</a>
              </div>
            </form>

            <?php endforeach ; ?>

          </div>
        </div>
      </section>
  	</div>

  <div class="container-fluid">
    <footer class="footer" style="margin: 4vh 5vh 1vh;">    
      <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        <span>Copyright &copy; HOTEL HEBAT Software Engineering</span>
      </div>
    </footer> 
  </div>


<script>
  feather.replace()
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>