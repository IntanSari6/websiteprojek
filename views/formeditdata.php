<?php

$id = $_GET['id'];

include'connect.php';

$query = mysqli_query($connect, "SELECT * FROM siswa WHERE id=$id");

while($hasil = mysqli_fetch_array($query)) {

?>
<div class="container">
  <h2>Edit Data</h2>
  <form action="controllers/proseseditdata.php" method="post">
    <input type="hidden" value="<?php echo $hasil['id']?>" name="id">
    <div class="form-group">
      <label>Nama:</label>
      <input type="text" class="form-control" value="<?php echo $hasil['Nama']?>" name="nama">
    </div>
    <div class="form-group">
      <label>Nis:</label>
      <input type="text" class="form-control" value="<?php echo $hasil['NIS']?>" name="nis">
    </div>
    <div class="form-group">
      <label>Jurusan:</label>
      <input type="text" class="form-control" value="<?php echo $hasil['Jurusan']?>" name="jurusan">
    </div>
    
    </div>
    <button type="submit" class="btn btn-primary">Edit Data</button>
  </form>
</div>

<?php

}
?>