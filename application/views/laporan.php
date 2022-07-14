<section class="section">
  <div class="row">
    <div class="col-lg-6">
      <div class="card">
        <div class="card-header d-flex justify-content-between">
          <div><h4 class="card-title">Data Bank Sampah</h4></div>
        </div>
        <div class="card-body">
            <table id="example" class="table ">
                <thead>
                    <tr>
                        <th>Afdeling</th>
                        <th>Input Terakhir</th>
                        <th>Berat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                      $no=1;
                      foreach($hasil as $data){
                    ?>
                    <tr>
                        <td><?php echo htmlentities($data->nama, ENT_QUOTES, 'UTF-8');?></td>
                        <td><?php echo date('d F Y', strtotime($data->terakhir)); ?></td>
                        <td><?php echo round($data->berat,1);?> Kg</td>
                    </tr>
                    <?php
                      }
                    ?>
                    <tr>
                      <td class="fw-bold text-dark">TOTAL</td>
                      <td></td>
                      <td class="fw-bold text-dark"><?php echo round($total->hasil,1); ?> Kg</td>
                  </tr>
                </tbody>
            </table>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="card">
        <div class="card-header d-flex justify-content-between">
          <div><h4 class="card-title">Data Laporan Periode</h4></div>
        </div>
        <div class="card-body">
        <form action="" method="post">
          <div class="row g-3">
            <div class="col">
              <label>Dari :</label>
              <input type="date" class="form-control" name="dari">
            </div>
            <div class="col">
              <label>sampai :</label>
              <input type="date" class="form-control" name="sampai">
            </div>
          </div>
          <button class="btn btn-primary my-3  btn-block" name="submit">Tampilkan </button>
        </form>

                              <?php if ($harian == null); { ?>
                                <table class="table table-striped" id="table1">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>Afdeling</th>
                                            <th>Jenis</th>
                                            <th>Penanggung Jawab</th>
                                            <th>Berat</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                          <?php
                                            $no=1;
                                            foreach($harian as $data){
                                          ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo htmlentities($data->nama, ENT_QUOTES, 'UTF-8');?></td>
                                            <td><?php echo $data->jenis;?></td>
                                            <td><?php echo htmlentities($data->pj, ENT_QUOTES, 'UTF-8');?></td>
                                            <td><?php echo htmlentities($data->berat, ENT_QUOTES, 'UTF-8');?> Kg</td>
                                        </tr>
                                          <?php
                                            }
                                          ?>
                                    </tbody>
                                </table>
                              <?php } ?> 
        </div>
      </div>
    </div>
  </div>
</section>