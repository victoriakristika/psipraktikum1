<div class="content" align="center">
            <div class="panel">
            	<div class="panel-atas panel-blue">
						<label align="center"><b>View Data Pelanggan</b></label>
				</div>
				<div class="panel-isi">
       <table>
       	<thead>
       		<tr>
       			<th>Nomor</th>
       			<th>Nama</th>
       			<th>Alamat</th>
       		</tr>
       	</thead>
       	<tbody>
       		<?php
       			include "config/koneksi.php";
                        
       			$no=1;
       			$sql = "SELECT * FROM `pelanggan`";
       			$result = mysqli_query($conn, $sql);

       			while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

       				echo '<tr>
       						<td>'.$no.'</td>
       						<td>'.$row['nama_pelanggan'].'</td>
       						<td>'.$row['alamat_pelanggan'].'</td>
       					  </tr>';
       				$no++;
       			}
       		?>
       		
       	</tbody>
       </table>
   </div>
   </div>
        </div>
