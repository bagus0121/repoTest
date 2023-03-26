<style>
.row {
  margin-top: 20px;
}
</style>
<div class="row">
  <div class="col-12">
    <div class="card mb-4">
      <div class="card-header pb-0">
        <h6>Authors table</h6>
      </div>
      <div class="card-body px-0 pt-0 pb-2">
        <div class="table-responsive p-0">
          <table id="authors-table" class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Author</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Function</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                  <th class="text-secondary opacity-7"></th>
              </tr>
            </thead>
            <tbody>
            <?php 
          $koneksi = mysqli_connect("btzpwcfdumjrpj2zypou-mysql.services.clever-cloud.com","ucsfsfw7mdnec0ff","8vKxAEnExNyZxowgb6E3","btzpwcfdumjrpj2zypou");
          $batas = 10;
				$halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
				$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	
 
				$previous = $halaman - 1;
				$next = $halaman + 1;
				
				$data = mysqli_query($koneksi,"select * from pembelian");
				$jumlah_data = mysqli_num_rows($data);
				$total_halaman = ceil($jumlah_data / $batas);
 
				$data_pegawai = mysqli_query($koneksi,"select * from pembelian limit $halaman_awal, $batas");
				$nomor = $halaman_awal+1;
				while($d = mysqli_fetch_array($data_pegawai)){
					?>
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                    <div>
                      <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="mb-0 text-sm">John Michael</h6>
                      <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                    </div>
                  </div>
                </td>
                <td>
                  <p class="text-xs font-weight-bold mb-0">Manager</p>
                  <p class="text-xs text-secondary mb-0">Organization</p>
                </td>
                <td class="align-middle text-center text-sm">
                  <span class="badge badge-sm bg-gradient-success">Sukses</span>
                </td>
                <td class="align-middle text-center">
                  <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                </td>
                <td class="align-middle">
                
                </td>
              </tr>
              <?php
				}
				?>
              
            </tbody>
          </table>
          <nav>
    <ul class="pagination justify-content-center">
        <li class="page-item <?php if($halaman <= 1){ echo 'disabled'; } ?>">
            <a class="page-link" href="<?php if($halaman > 1){ echo "?halaman=".($halaman - 1); } else{ echo '#'; } ?>">Previous</a>
        </li>
        <?php
        for($i=1; $i<=$total_halaman; $i++){
            if($i == $halaman){
                $active = "active";
            }else{
                $active = "";
            }
            ?>
            <li class="page-item <?php echo $active; ?>">
                <a class="page-link" href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
            </li>
            <?php
        }
        ?>
        <li class="page-item <?php if($halaman >= $total_halaman){ echo 'disabled'; } ?>">
            <a class="page-link" href="<?php if($halaman < $total_halaman) { echo "?halaman=".($halaman + 1); } else{ echo '#'; } ?>">Next</a>
        </li>
    </ul>
</nav>

        </div>
       
      </div>
    </div>
  </div>
</div>

