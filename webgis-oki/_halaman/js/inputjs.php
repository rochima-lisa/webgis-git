<?php 
 if(isset($_POST['submit'])){

    $name= $_FILES['file']['name'];

    $tmp_name= $_FILES['file']['tmp_name'];
    
    $submitbutton= $_POST['submit'];
    
    $position= strpos($name, "."); 
    
    $fileextension= substr($name, $position + 1);
    
    $fileextension= strtolower($fileextension);
    
    
    if (isset($name)) {
    
    $path= 'Uploads/files/';
    
    if (!empty($name)){
    
        // if ($fileextension == "csv") {
            if (move_uploaded_file($tmp_name, $path.$name)) {
    
    $filepath=$path.$name;
    $csv= array_map('str_getcsv',file($filepath));
    foreach ($csv as $row){
      // print_r($row);
      if ($row[0]=="id") {
          continue;
      }
      if ($row[3]=="999999.000000") {
        continue;
      }
      
      $data=[
        'id'=>$row[0],
        'id_Key'=>$row[1],
        'Date_Proc'=>$row[2],
        'Lat_GMTCO'=>$row[3],
        'Lon_GMTCO'=>$row[4],
        'Date_Mscan'=>$row[5],
        'Date_LTZ'=>$row[6],
        'Temp_BB'=>$row[7],
        'Temp_Bkg'=>$row[8],
        'ESF_BB'=>$row[9],
        'RHI'=>$row[10],
        'RH'=>$row[11],
        'Methane_EQ'=>$row[12],
        'CO2_EQ'=>$row[13],
        'Area_Pixel'=>$row[14],
        'Area_BB'=>$row[15],
        'Cloud_Mask'=>$row[16],
        'QF_Fit'=>$row[17],
        'QF_Detect'=>$row[18],
        'Rad_DNB'=>$row[19],
        'Rad_M07'=>$row[20],
        'Rad_M08'=>$row[21],
        'Rad_M10'=>$row[22],
        'Rad_M11'=>$row[23],
        'Rad_M12'=>$row[24],
        'Rad_M13'=>$row[25],
        'Rad_M14'=>$row[26],
        'Rad_M15'=>$row[27],
        'Rad_M16'=>$row[28],
        'Tran_DNB'=>$row[29],
        'Tran_M07'=>$row[30],
        'Tran_M08'=>$row[31],
        'Tran_M10'=>$row[32],
        'Tran_M11'=>$row[33],
        'Tran_M12'=>$row[34],
        'Tran_M13'=>$row[35],
        'Tran_M14'=>$row[36],
        'Tran_M15'=>$row[37],
        'Tran_M16'=>$row[38],
        'PThm_M12'=>$row[39],
        'PThm_M13'=>$row[40],
        'PThm_M14'=>$row[41],
        'PThm_M15'=>$row[42],
        'PThm_M16'=>$row[43],
        'QF1_DNB'=>$row[44],
        'QF1_M07'=>$row[45],
        'QF1_M08'=>$row[46],
        'QF1_M10'=>$row[47],
        'QF_M11'=>$row[48],
        'QF1_M12'=>$row[49],
        'QF1_M13'=>$row[50],
        'QF1_M14'=>$row[51],
        'QF1_M15'=>$row[52],
        'QF1_M16'=>$row[53],
        'COT_IVCOP'=>$row[54],
        'EPS_IVCOP'=>$row[55],
        'QF1_IVCOP'=>$row[56],
        'QF2_IVCOP'=>$row[57],
        'QF3_IVCOP'=>$row[58],
        'DN_M10'=>$row[59],
        'Sample_M10'=>$row[60],
        'Line_M10'=>$row[61],
        'Sample_BT'=>$row[62],
        'Line_BT'=>$row[63],
        'Sample_DNB'=>$row[64],
        'Line_DNB'=>$row[65],
        'Lat_DNB'=>$row[66],
        'Lon_DNB'=>$row[67],
        'Dist_DNB'=>$row[68],
        'Thr_M07'=>$row[69],
        'Thr_M08'=>$row[70],
        'Thr_M10'=>$row[71],
        'Thr_M11'=>$row[72],
        'Thr_M16'=>$row[73],
        'SOLZ_GMTCO'=>$row[74],
        'SOLA_GMTCO'=>$row[75],
        'SATZ_GMTCO'=>$row[76],
        'SATA_GMTCO'=>$row[77],
        'SCVX_GMTCO'=>$row[78],
        'SCVY_GMTCO'=>$row[79],
        'SCVZ_GMTCO'=>$row[80],
        'SCPX_GMTCO'=>$row[81],
        'SCPY_GMTCO'=>$row[82],
        'SCPZ_GMTCO'=>$row[83],
        'SCAX_GMTCO'=>$row[84],
        'SCAY_GMTCO'=>$row[85],
        'SCAZ_GMTCO'=>$row[86],
        'QF1_GMTCO'=>$row[87],
        'QF2_GMTCO'=>$row[88],
        'QF1_VICMO'=>$row[89],
        'QF2_VICMO'=>$row[90],
        'QF3_VICMO'=>$row[91],
        'QF4_VICMO'=>$row[92],
        'QF5_VICMO'=>$row[93],
        'QF6_VICMO'=>$row[94],
        'Lat_Gring'=>$row[95],
        'Lon_Gring'=>$row[96],
        'CH_M12'=>$row[97],
        'CH_M13'=>$row[98],
        'File_M07'=>$row[99],
        'File_M08'=>$row[100],
        'File_M10'=>$row[101],
        'File_M11'=>$row[102],
        'File_M12'=>$row[103],
        'File_M13'=>$row[104],
        'File_M14'=>$row[105],
        'File_M15'=>$row[106],
        'File_M16'=>$row[107],
        'File_DNB'=>$row[108],
        'File_GDNB'=>$row[109],
        'File_GMTCO'=>$row[110],
        'File_GDNBO'=>$row[111],
        'File_VICMO'=>$row[112],
        'File_IVCOP'=>$row[113],
        'File_AC'=>$row[114],
        'Source_ID'=>$row[115]
      ];
      $input = $db->insert("hotspotviirs",$data);
      echo $input;
      
    }
}
?>
            <script type="text/javascript">
            window.alert("CSV File has been successfully Imported.");
            window.location.href="<?=url('data')?>";
          </script>
          <?php
    unlink($filepath);
    // }
    // else{
    //     ?>
    //     <script type="text/javascript">
    //         window.alert("Invalid File:Please Upload CSV File.");
    //     </script>
    // <?php    
    // }
    
    }
    else {
        ?>
        <script type="text/javascript">
            window.alert("Invalid File:Please Upload CSV File.");
        </script>
    <?php    
    }
    
    }

    
}   
?>