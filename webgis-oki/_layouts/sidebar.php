
  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
     <div class="user-panel">
        <div class="center">
        <p style="float: center;"><img src="assets/icon/logo5.png" height="120px" width="120px" class="img-circle" ></p>
        </div>
        <style>
        .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
        }
        </style>
      </div>
      

      </form>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li>
          <a href="<?=url('beranda')?>">
            <i class="fa fa-dashboard"></i> <span>Beranda</span>
          </a>
        </li>

        <li>
          <a href="<?=url('peta-dasar')?>">
            <i class="fa fa-map"></i> <span>Peta</span>
          </a>
        </li>


        <li class="treeview">
          <a href="#">
            <i class="fa fa-bar-chart"></i>
            <span>Data dan Statistik</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=url('data')?>"><i class="fa fa-circle-o"></i> Data Tabel</a></li>
            <li><a href="<?=url('statistik')?>"><i class="fa fa-circle-o"></i> Jumlah Hotspot</a></li>
            <li><a href="<?=url('luas')?>"><i class="fa fa-circle-o"></i> Luas Area</a></li>
          </ul>
        </li>

        <li>
          <a href="<?=url('input')?>">
            <i class="fa fa-cloud-upload"></i> <span>Input Data</span>
          </a>
        </li>

        <li>
          <a href="<?=url('about')?>">
            <i class="fa fa-envelope"></i> <span>About</span>
          </a>
        </li>
        
        <li>
          <a href="<?=url('jumbotron')?>">
            <i class="fa fa-envelope"></i> <span>JumboTron</span>
          </a>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
