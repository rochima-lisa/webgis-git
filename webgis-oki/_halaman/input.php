<?php
  $title="Input Data";
  $judul=$title;
  $url='input';
  $fileJs='inputjs';

?>

<?=content_open('Input Data Sebaran Hotspot (.csv)')?>



<form class="form-horizontal"  method="post" name="upload_excel" enctype="multipart/form-data">
                    <fieldset>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="filebutton">Select File</label>
                            <div class="col-md-4">
                                <input type="file" name="file" id="file" class="input-large" accept=".csv">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="singlebutton">Upload data</label>
                            <div class="col-md-4">
                                <button type="submit" id="submit" name="submit" class="btn btn-primary button-loading" data-loading-text="Loading...">Upload</button>
                            </div>
                        </div>
                    </fieldset>
                </form> 


<?=content_close()?>