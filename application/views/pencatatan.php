<section class="section">
                    <div class="row">
                        <div class="col-lg-5">
                          <div class="card">
                            <div class="card-header d-flex justify-content-between">
                              <div><h4 class="card-title">Data Afddeling</h4></div>
                              <div><button type="button" data-bs-toggle="modal" data-bs-target="#tambah" class="btn btn-primary btn-sm"><strong>+</strong> Tambah Data</button></div>
                                    <!-- Modal -->
                                    <div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                          <form action="<?php echo base_url('page/tambah_pencatatan/') ?>" method="POST">
                                            <div class="modal-header">
                                              <h5 class="modal-title" id="exampleModalLabel">Tambah Afdeling</h5>
                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                              <div class="form-body">
                                                <div class="col-12 my-3">
                                                  <div class="form-group">
                                                      <label for="first-name-vertical">Nama Afdeling</label>
                                                      <input type="text" id="first-name-vertical" class="form-control" name="nama"  required>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                              <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                          </form>
                                        </div>
                                      </div>
                                    </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped" id="table1">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>Nama Afdeling</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                          <?php
                                            $no=1;
                                            foreach($hasil as $data){
                                          ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo htmlentities($data->nama, ENT_QUOTES, 'UTF-8');?></td>
                                            <td>
                                              <div class="btn-group" role="group" aria-label="Basic example">
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#edit" class="btn btn-warning"><i class="bi bi-pencil-square"></i></button>
                                                <a href="<?php echo base_url('page/hapus_pencatatan/'.$data->id) ?>" class="btn btn-danger btn-del"><i class="bi bi-trash-fill"></i></a>
                                              </div>
                                              <!-- Modal -->
                                              <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                  <div class="modal-content">
                                                    <form action="<?php echo base_url('page/edit_pencatatan/') ?>" method="POST">
                                                      <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Edit Distrik</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                      </div>
                                                      <div class="modal-body">
                                                        <div class="form-body">
                                                          <div class="col-12 my-3">
                                                            <input type="hidden" name="id" value="<?php echo $data->id;?>">
                                                            <div class="form-group">
                                                                <label for="first-name-vertical">Nama distrik</label>
                                                                <input type="text" id="first-name-vertical" class="form-control" name="nama" value="<?php echo htmlentities($data->nama, ENT_QUOTES, 'UTF-8');?>" required>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                      </div>
                                                    </form>
                                                  </div>
                                                </div>
                                              </div>
                                            </td>
                                        </tr>
                                          <?php
                                            }
                                          ?>
                                    </tbody>
                                </table>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-7">
                          <div class="card">
                              <div class="card-header">
                                  <h4 class="card-title">Pencatatan Data Sampah</h4>
                              </div>
                              <div class="card-content">
                                  <div class="card-body">
                                    <?php echo $this->session->flashdata('pesan');?>
                                    <?php echo form_open_multipart('page/tambah');?>
                                          <div class="form-body">
                                              <div class="row">
                                                  <div class="col-12 mb-2">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical">Jenis Sampah</label>
                                                        <select class="form-select" name="jenis">
                                                          <option value="plastik">Plastik</option>
                                                          <option value="kertas">Kertas</option>
                                                          <option value="kaleng">Kaleng</option>
                                                        </select>
                                                    </div>
                                                  </div>
                                                  <div class="col-12 mb-2">
                                                      <div class="form-group">
                                                          <label for="first-name-vertical">Nama Adeling</label>
                                                          <select class="form-select" id="select" name="id">
                                                            <?php
                                                              foreach($hasil as $data){
                                                            ?>
                                                            <option value="<?php echo $data->id; ?>"><?php echo htmlentities($data->nama, ENT_QUOTES, 'UTF-8');?></option>
                                                            <?php
                                                              }
                                                            ?>
                                                          </select>
                                                      </div>
                                                  </div>
                                                  <div class="col-12 mb-2">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical">Nama Penanggung jawab</label>
                                                        <input type="text" id="first-name-vertical" class="form-control" name="pj" required>
                                                    </div>
                                                  </div>
                                                  <div class="col-12 mb-2">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical">Berat Sampah</label>
                                                        <div class=" input-group">
                                                          <input type="number" step="any" min="0" class="form-control" aria-label="Recipient's username" name="berat" aria-describedby="basic-addon2" required>
                                                          <span class="input-group-text" id="basic-addon2">.Kg</span>
                                                        </div>
                                                        <small class="text-muted">*dalam satuan Kilogram</small>
                                                    </div>
                                                  </div>
                                                  <div class="col-12 mb-2">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical">Waktu</label>
                                                        <input type="date" id="first-name-vertical" class="form-control" value="<?php echo date("Y-m-d"); ?>" name="waktu" required>
                                                    </div>
                                                  </div>
                                                  <div class="col-12 mb-2">
                                                    <div class="form-group">
                                                        <label for="first-name-vertical">Foto</label>
                                                        <input type="file" id="first-name-vertical" class="form-control" name="foto" placeholder="First Name">
                                                        <small class="text-muted">*ekstensi yang diizinkan berupa gif, png, jpeg, jpg</small>
                                                    </div>
                                                  </div>
                                                  <div class="col-12 d-flex justify-content-end">
                                                      <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                                      <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                                  </div>
                                              </div>
                                          </div>
                                      <?php echo form_close(); ?>   
                                  </div>
                              </div>
                          </div>
                      </div>
                    </div>
                    </section>