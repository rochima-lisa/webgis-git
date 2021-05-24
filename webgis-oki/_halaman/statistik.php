<?php
  $title="Grafik Jumlah Hotspot";
  $judul=$title;
  $url='statistik';
  
  $sql=(isset($_GET["Date_LTZ"]))?$_GET["Date_LTZ"]:'';
    
?>


<?=content_open('Jumlah Hotspot')?>

<form method="get">
    <label>Cari Berdasarkan Tanggal :</label>
            <div class="row">
                <?=input_hidden('halaman',$url)?>
                <div class="col-md-2">
                <input type="date" name="Date_LTZ",$sql>
                </div>
                <div>
                <input type="submit" value="Tampilkan Data">
                </div>
            </div>
</form>

<hr>

<canvas id="chart" width=16px height=4px></canvas>
<script>
var ctx = document.getElementById('chart').getContext('2d');

var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Putih', 'Ungu', 'Biru', 'Hijau', 'Kuning', 'Merah', 'Oranye'],
        datasets: [{
            label: 'Jumlah Hotspot',
            data: [
          <?php 
          if($sql!=''){
          $putih = mysqli_query($koneksi,"select * from hotspotviirs where Date_LTZ like'$sql%' AND Temp_BB=999999");
					echo mysqli_num_rows($putih);
          }
					?>, 
          <?php 
          if($sql!=''){
					$ungu = mysqli_query($koneksi,"select * from hotspotviirs where Date_LTZ like'$sql%' AND Temp_BB>=400 AND Temp_BB<=1000");
          echo mysqli_num_rows($ungu);
          }
					?>, 
          <?php 
          if($sql!=''){
					$biru = mysqli_query($koneksi,"select * from hotspotviirs where Date_LTZ like'$sql%' AND Temp_BB>=1001 AND Temp_BB<=1200");
          echo mysqli_num_rows($biru);
          }
					?>, 
          <?php 
          if($sql!=''){
					$hijau = mysqli_query($koneksi,"select * from hotspotviirs where Date_LTZ like'$sql%' AND Temp_BB>=1202 AND Temp_BB<=1400");
          echo mysqli_num_rows($hijau);
          }
					?>, 
          <?php 
          if($sql!=''){
					$kuning = mysqli_query($koneksi,"select * from hotspotviirs where Date_LTZ like'$sql%' AND Temp_BB>=1401 AND Temp_BB<=1600");
          echo mysqli_num_rows($kuning);
          }
					?>, 
          <?php 
          if($sql!=''){
					$merah = mysqli_query($koneksi,"select * from hotspotviirs where Date_LTZ like'$sql%' AND Temp_BB>=1601 AND Temp_BB<=2500");
          echo mysqli_num_rows($merah);
          }
					?>, 
          <?php 
          if($sql!=''){
					$oranye = mysqli_query($koneksi,"select * from hotspotviirs where Date_LTZ like'$sql%' AND Temp_BB>=2501 AND Temp_BB<=999998");
          echo mysqli_num_rows($oranye);
          }
					?>
            ],
            backgroundColor: [
                'rgba(77, 83, 96, 0.1)',  //grey
                'rgba(153, 102, 255, 0.7)', //ungu
                'rgba(54, 162, 235, 0.7)', //biru
                'rgba(75, 192, 192, 0.7)', //hijau
                'rgba(255, 206, 86, 0.7)', //kuning
                'rgba(255, 99, 132, 0.7)', //merah
                'rgba(255, 159, 64, 0.7)'  //orange
            ],
            borderColor: [
                'rgba(77, 83, 96, 0.3)',  //grey
                'rgba(153, 102, 255, 1)', //ungu
                'rgba(54, 162, 235, 1)', //biru
                'rgba(75, 192, 192, 1)', //hijau
                'rgba(255, 206, 86, 1)', //kuning
                'rgba(255, 99, 132, 1)', //merah
                'rgba(255, 159, 64, 1)'  //orange
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>

<hr>

<b>Keterangan Warna Hotspot:</b>
<br>T (Temperature) <sup>o</sup>C
<br>
<br>
<p style="float: left;"><img src="assets/icon/marker5.png" height="15px" width="10px"></p>
<p>  Putih   = Suhu tidak terdeteksi (???)</p>
<p style="float: left;"><img src="assets/icon/marker6.png" height="15px" width="10px"></p>
<p>  Ungu    = 126,85 < T < 726,85 <sup>o</sup>C</p> 
<p style="float: left;"><img src="assets/icon/marker7.png" height="15px" width="10px"></p>
<p>  Biru    = 726,85 < T < 926,85 <sup>o</sup>C</p> 
<p style="float: left;"><img src="assets/icon/marker8.png" height="15px" width="10px"></p>
<p>  Hijau   = 926,85 < T < 1126,85 <sup>o</sup>C</p> 
<p style="float: left;"><img src="assets/icon/marker9.png" height="15px" width="10px"></p>
<p>  Kuning  = 1126,85 < T < 1326,85 <sup>o</sup>C</p> 
<p style="float: left;"><img src="assets/icon/marker10.png" height="15px" width="10px"></p>
<p>  Merah   = 1326,85 < T < 2226,85 <sup>o</sup>C</p> 
<p style="float: left;"><img src="assets/icon/marker2.png" height="15px" width="10px"></p>
<p>  Oranye  = T > 2226,85 <sup>o</sup>C</p> 
<br>




<?=content_close()?>
