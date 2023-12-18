<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

<style>
    .form-group {
  margin-bottom: 15px;
}

.input-group {
  width: 100%;
}

.input-group-prepend, .input-group-append {
  cursor: pointer;
}

/* Style for table */
.table {
  width: 100%;
  margin-bottom: 1rem;
  color: #212529;
  border-collapse: collapse;
  border-spacing: 0;
}

.table th,
.table td {
  padding: 0.75rem;
  vertical-align: top;
  border-top: 1px solid #dee2e6;
}

.table thead th {
  vertical-align: bottom;
  border-bottom: 2px solid #dee2e6;
}

.table tbody+tbody {
  border-top: 2px solid #dee2e6;
}

/* Style for buttons */
.btn-primary {
  color: #fff;
  background-color: #007bff;
  border-color: #007bff;
}

.btn-primary:hover {
  color: #fff;
  background-color: #0056b3;
  border-color: #0056b3;
}

/* Responsive styles for small screens */
@media (max-width: 576px) {
  .col-2, .col-4, .col-8, .offset-2 {
    width: 100%;
  }
}
</style>

<h1 class="text-center">Form Account Bank</h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
  <div class="form-group row">
    <label for="text" class="col-2 col-form-label">No. Rekening</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="text" name="text" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-2 col-form-label">Nama Customer</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-book"></i>
          </div>
        </div> 
        <input id="text1" name="text1" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-2 col-form-label">Saldo Awal</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-money"></i>
          </div>
        </div> 
        <input id="text2" name="text2" type="text" class="form-control">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-2 col-4">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Proses data formulir dan simpan dalam array
    $noRekening = $_POST["text"];
    $namaCustomer = $_POST["text1"];
    $saldoAwal = $_POST["text2"];
?>
<table class="table">
    <tr>
        <td scope="col">No</td>
        <td>No.Rekening</td>
        <td>Customer</td>
        <td>Saldo</td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>010</td>
      <td>Messi</td>
      <td>6250000</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>070</td>
      <td>Ronaldo</td>
      <td>8743500</td>
    </tr>
    <tr>
    <td scope="row">3</td>
        <td><?php echo $noRekening; ?></td>
        <td><?php echo $namaCustomer; ?></td>
        <td><?php echo $saldoAwal; ?></td>
    </tr>
</table>
<?php
}
?>
