<div class="content" align="center">
            <div class="panel">
              <div class="panel-atas panel-blue">
            <label align="center"><b>View Data Transaksi</b></label>
        </div>
        <div class="panel-isi">
       <table>
        <thead>
          <tr>
            <th>Nomer</th>
            <th>Nama Pegawai</th>
            <th>Nama Pelanggan</th>
            <th>Nama Kamar</th>
            <th>Jumlah Hari</th>
            <th>Total Harga</th>
          </tr>
        </thead>
        <tbody>
          <?php
            include "config/koneksi.php";
                        
            $no=1;
            $sql = "SELECT * FROM `transaksi`, `pegawai`,`pelanggan` where pelanggan.id_pelanggan=transaksi.id_pelanggan and pegawai.id_pegawai=transaksi.id_pegawai";
            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

              echo '<tr>
                  <td>'.$no.'</td>
                  <td>'.$row['nama_pegawai'].'</td>
                  <td>'.$row['nama_pelanggan'].'</td>
                  <td>'.$row['nama_kamar'].'</td>
                  <td>'.$row['jumlah_hari'].'</td>
                  <td>'.$row['total_harga'].'</td>
                  </tr>';
              $no++;
            }
          ?>
          
        </tbody>
       </table>
   </div>
   </div>
        </div>
