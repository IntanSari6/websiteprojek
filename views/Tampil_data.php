<div class="container">
  <h2>Data Siswa</h2>      
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NIS</th>
        <th>Jurusan</th>
        <th colspan="2">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
      
      include 'connect.php';

      $query = mysqli_query($connect, "SELECT * FROM siswa");
      $no=0;
      while($hasil = mysqli_fetch_array($query)){
           $no++;
      
      ?>
      <tr>
        <td><?php echo $no?></td>
        <td><?php echo $hasil['Nama']?></td>
        <td><?php echo $hasil['NIS']?></td>
        <td><?php echo $hasil['Jurusan']?></td>
        <td><a href="index.php?page=edit&id= <?php echo $hasil['id']?>"><i class="fa fa-edit" style="font-size:38px;color:#0080ff"></i></a></td>
        <td><a href="controllers/prosesdeletedata.php?id=<?php echo $hasil['id']?>" onclick="return confirm('yakin akan menghapus data <?php echo $hasil['Nama']?>')"><i class="fa fa-trash-o" style="font-size:38px;color:red"></i></a></td>
      </tr>

      <?php
      }
      ?>
    </tbody>
  </table>
</div>