<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
<title>Crud Siswa</title>

<!-- CSS  -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url('assets/css/materialize.css');?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>">

<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="<?php echo base_url('assets/js/materialize.js');?>"></script>
<script src="<?php echo base_url('assets/js/init.js');?>"></script>

<nav class="light-blue lighten-1" role="navigation">
  <div class="nav-wrapper container">
    <a id="logo-container" href="<?php echo base_url('/') ?>" class="brand-logo">Crud<b>Basic</b></a>
    <ul class="right hide-on-med-and-down">
      <li {{ Request::is('siswa/create') ? 'class=active' : '' }}><a href="<?php echo base_url('get-create') ?>">Tambah</a></li>
    </ul>
  </div>
</nav>
