<section class="section">
  <div class="row">
    <div class="col-lg-12">
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
  </div>
</section>