<div class="section no-pad-bot" id="index-banner">
  <div class="container">
    <h2 class="header center orange-text">Data Siswa</h2>
    <table class="striped">
        <thead>
          <th class="center">No</th>
          <th class="center">NIS</th>
          <th class="center">Nama</th>
          <th class="center">Kelas</th>
          <th class="center">Action</th>
        </thead>
        <tbody>

          <?php foreach ($siswa as $key => $siswas): ?>
            <tr>
              <td class="center"><?php echo $key+1 ?></td>
              <td class="center"><?php echo $siswas['nis'] ?></td>
              <td class="center"><?php echo $siswas['nama'] ?></td>
              <td class="center"><?php echo $siswas['kelas'] ?></td>
              <td class="center">
                <a href="<?php echo base_url('edit/'.$siswas["id"]); ?>" class="green-text">Edit</a>
                <a href="<?php echo base_url('delete/'.$siswas["id"]); ?>" class="red-text" onclick="return confirm('Hapus data ?')">Delete</a>
              </td>
            </tr>
          <?php endforeach; ?>

        </tbody>
      </table>
  </div>
</div>
