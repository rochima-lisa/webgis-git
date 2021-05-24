<?php
  $title="Peta";
  $judul=$title;
  $url='peta-dasar';
  $fileJs='peta-dasarJs';

  $sql=(isset($_GET["Date_LTZ"]))?$_GET["Date_LTZ"]:'';
  
?>

<?=content_open('Sebaran Hotspot di Kabupaten Ogan Komering Ilir')?>
 
 <style>
   .info { padding: 6px 8px; font: 14px/16px Arial, Helvetica, sans-serif; background: white; background: rgba(255,255,255,0.8); box-shadow: 0 0 15px rgba(0,0,0,0.2); border-radius: 5px; } .info h4 { margin: 0 0 5px; color: #777; }
  .legend { text-align: left; line-height: 18px; color: #555; } .legend i { width: 18px; height: 18px; float: left; margin-right: 8px; opacity: 0.7; }
  </style>
	
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
        <div id="mapid"></div>
<?=content_close()?>