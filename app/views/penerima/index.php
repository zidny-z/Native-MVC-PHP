<br><br><br>
<div class="container">
<h1 class="text-center" style="color: white;">Data Penerima</h1><br>
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
            <li class="list-group-item"><?= $mhs['pt'];?></li>
        </ul>
      </td>
    </tr>
    <?php $count += 1; ?>
    <?php endforeach;?>
  </tbody>
</table>
</div>
