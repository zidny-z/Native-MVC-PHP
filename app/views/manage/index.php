<br><br><br>
<div class="container">
<h1 class="text-center" style="color: white;">Manajemen Data</h1><br>
<table class="table" style="color: white;">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Identitas Pendaftar</th>
    </tr>
  </thead>
  <tbody>
  <?php $count = 1; ?>
  <?php foreach($data['pendaftar'] as $mhs):?>
    <tr>
      <th scope="row"><?= $count; ?></th>
      <td>
        <ul class="list-group" style="color: black;">
            <li class="list-group-item active"><?= $mhs['nama'];?></li>
            <li class="list-group-item"><?= $mhs['email'];?></li>
            <li class="list-group-item"><?= $mhs['noHP'];?></li>
            <li class="list-group-item"><?= $mhs['prodi'];?></li>
            <li class="list-group-item"><?= $mhs['pt'];?></li>
            <li class="list-group-item"><a href="<?= $mhs['cv'];?>">Link cv</a></li>
            <li class="list-group-item"><a href="<?= $mhs['zip'];?>">Link piagram prestasi</a></li>
            <li class="list-group-item"><a href="<?= BASEURL; ?>/manage/acc/<?= $mhs['daftarID'];?>"><input type="submit" name="terima" id="terima" class="btn btn-info btn-block" value="Terima"/></a></li>
            <li class="list-group-item"><a href="<?= BASEURL; ?>/manage/drop/<?= $mhs['daftarID'];?>" onclick="return confirm('Apakah anda yakin akan menolak pendaftar tersebut?');" class="btn btn-danger btn-block">tolak</a></li>
        </ul>
      </td>
    </tr>
    <?php $count += 1; ?>
    <?php endforeach;?>
  </tbody>
</table>
</div>