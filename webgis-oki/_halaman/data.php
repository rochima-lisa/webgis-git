<?php
  $title="Data Tabel Hotspot";
  $judul=$title;
  $url='statistik'
    
?>



<?=content_open('Tabel Sebaran Hotspot di Kabupaten Ogan Komering Ilir, Provinsi Sumatera Selatan')?>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Lat</th>
            <th>Lon</th>
            <th>Temperature Source (deg.C)</th>
            <th>Radiant Heat Intensity (W/m<sup>2</sup>)</th>
            <th>Source Footprint (m<sup>2</sup>)</th>
            <th>Time</th>
            <th>Temperature Background (deg.C)</th>
            <th>Radiant Heat (MW)</th>
            <th>Local Time</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $no=1;
			$getdata=$db->ObjectBuilder()->get('hotspotviirs');
			foreach ($getdata as $row) {
				?>
					<tr>
						<td><?=$no?></td>
						<td><?=$row->Lat_GMTCO?></td>
                        <td><?=$row->Lon_GMTCO?></td>
                        <td><?php if ($row->Temp_BB == 999999) {
                            echo "???";
                        }
                            else{
                                $celcius = ($row->Temp_BB)-273.15;
                            echo $celcius;
                            }
                            ?></td>
                        <td><?php if ($row->RHI == 999999) {
                            echo "???";
                        }
                            else{
                            echo $row->RHI;
                            }
                            ?></td>
                        <td><?php if ($row->Area_Pixel == 999999) {
                            echo "???";
                        }
                            else{
                            echo $row->Area_Pixel;
                            }
                            ?></td>
                        <td><?=$row->Date_Mscan?></td>
                        <td><?php if ($row->Temp_Bkg == 999999) {
                            echo "???";
                        }
                            else{
                                $celcius = ($row->Temp_Bkg)-273.15;
                                echo $celcius;
                            }
                            ?></td>
                        <td><?php if ($row->Temp_Bkg == 999999) {
                            echo "???";
                        }
                            else{
                            echo $row->Temp_Bkg;
                            }
                            ?></td>
                        <td><?=$row->Date_LTZ?></td>
					</tr>
				<?php
				$no++;
			}
        ?>
    </tbody>
</table>
<?=content_close()?>
