<div class="section no-pad-bot" id="index-banner">
  <div class="container">
    


<!-- <div class="row">
  <div class="col s12">
    <div class="card red darken-1">
      <div class="card-content white-text">
        <span class="card-title">Error With Input</span>
        @foreach($errors->all() as $error)
          <ul>
            <li>- {{$error}}</li>
          </ul>
        @endforeach
      </div>
    </div>
  </div>
</div> -->


<h2 class="header center orange-text">Tambah Siswa</h2>
<?php echo validation_errors(); ?>
<div class="row">
  <!-- <form class="col s12" action="<?php echo base_url('post-create') ?>" method="post"> -->
  <?php echo form_open('post-create') ?>

    <div class="row">
      <div class="input-field col s12">
        <input type="text" name="nis" id="nis">
        <label for="nis">NIS</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="nama" id="nama">
        <label for="nama">Nama</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="kelas" id="kelas">
        <label for="kelas">Kelas</label>
      </div>
      <div class="input-field col s12">
        <button type="submit" class="btn">Simpan</button>
        <a href="<?php echo base_url('/') ?>" class="btn grey">Kembali</a>
      </div>
    </div>
<?php echo form_close() ?>
  <!-- </form> -->
</div>

</div>
</div>
