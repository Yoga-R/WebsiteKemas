<div class="section-home our-causes animate-onscroll fadeIn">

<div class="container">

<div class="col-12">
                <!-- Main Content -->
                <div class="row">
                    <div class="col-12 mt-3 text-center text-uppercase">
                        <h2><strong>Data Diri Donatur</strong></h2>
                    </div>
                </div>
                
                <main class="row">
                    <div class="col-12 mx-auto bg-white py-3 mb-4">
                        <div class="row">
                            <div class="col-12">
                            <?php 
		$user = $_SESSION ['email'];
        $queryuser_session = mysqli_query ($koneksi, "select * from tbl_donatur WHERE email = '$user'");
        $hasilQuery_session = mysqli_fetch_array($queryuser_session);
        $nama_session = $hasilQuery_session ['nama_lengkap'];
        $notelp_session = $hasilQuery_session ['no_telp'];
        $alamat_session = $hasilQuery_session ['alamat'];
        $email_session = $hasilQuery_session ['email'];
        $id_session = $hasilQuery_session ['id_donatur'];
		?>

                                
                                    <div class="form-group">
                                        <label for="name">Nama Lengkap</label>
                                        <!-- <input type="text" id="namalengkap" name="namalengkap" class="form-control" placeholder="Masukkan Nama" required> -->
                                        <input value=" <?= $nama_session; ?>" type = "text" id="namalengkap" name= "nama_lengkap" placeholder = "" class="form-control">                                    
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <input type="alamat" value="<?= $alamat_session; ?>" id="alamat" name="alamat" class="form-control" placeholder="Masukkan Alamat" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" value="<?= $email_session;?>" id="email" name="email" class="form-control" placeholder="Masukkan Email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nomorhandphone">Nomor Handphone</label>
                                        <input type="nomorhandphone" value="<?= $notelp_session;?>" id="nomorhandphone" name="nomorhandphone" class="form-control" placeholder="Masukkan No Hp" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" value="<?= $password_session;?> id="password" name="password" class="form-control" placeholder="Masukkan Password" required>
                                    </div>
                                    <!-- <div class="form-group">
                                        <label for="confirmpassword">Konfirmasi Password</label>
                                        <input type="password" id="confirmpassword" name="confirmpassword" class="form-control" placeholder="Confirm Password" required>
                                    </div> -->
                                    <input type="hidden" id="penjual" name="level" value="pembeli"  >
                                    <input type="hidden" id="status" name="status" value="aktif"  >
                                    <!-- <div class="form-group">
                                        <label for="password-confirm">Confirm Password</label>
                                        <input type="password" id="password-confirm" class="form-control" required>
                                    </div> -->
                                    <div class="form-group">
                                        <!-- <div class="form-check">
                                            <input type="checkbox" id="agree" class="form-check-input" required>
                                            <label for="agree" class="form-check-label ml-2">I agree to Terms and Conditions</label>
                                        </div> -->
                                    </div>
                                    <div class="form-group">
                                        <a href="editdatadiri.php">
                                        <button class="btn btn-outline-dark">Ubah Data Diri</button>
                                        </a>
                                    </div>
                                

                            </div>
                        </div>
                    </div>

                </main>
                <!-- Main Content -->
            </div>
            </div>
            </div>