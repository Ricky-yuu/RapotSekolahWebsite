<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="/"><i class="fa fa-dashboard"></i> <span>Menu Admin</span></a></li>
    <li class="{{ request()->is('nelayan') ? 'active' : '' }}"><a href="/Guru"><i class="fa fa-dashboard"></i> <span>Data Guru</span></a></li>
    <li class="{{ request()->is('mitra') ? 'active' : '' }}"><a href="/Siswa_X"><i class="fa fa-dashboard"></i> <span>Data Siswa Kelas 1</span></a></li>
    <li class="{{ request()->is('konsumen') ? 'active' : '' }}"><a href="/Siswa_XI"><i class="fa fa-dashboard"></i> <span>Data Siswa Kelas 2</span></a></li>
    <li class="{{ request()->is('konsumen') ? 'active' : '' }}"><a href="/Siswa_XII"><i class="fa fa-dashboard"></i> <span>Data Siswa Kelas 3</span></a></li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-share"></i> <span>Multilevel</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-circle-o"></i> Level One
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> Level Two
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span> 
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
      </ul>
    </li>
    
    <li class="header">LABELS</li>
    <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
    <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
    <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
  </ul>