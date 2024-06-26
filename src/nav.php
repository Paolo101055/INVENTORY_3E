<?php

echo'   <nav class="sidebar sidebar-offcanvas" id="sidebar">
<ul class="nav">
  <li class="nav-item">
    <a class="nav-link" href="home">
      <i class="mdi mdi-grid-large menu-icon"></i>
      <span class="menu-title">Dashboard</span>
    </a>
  </li>
  <li class="nav-item nav-category">Inventory</li>
  <li class="nav-item">
    <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false"
      aria-controls="form-elements">
      <i class="menu-icon mdi mdi-card-text-outline"></i>
      <span class="menu-title">Product</span>
      <i class="menu-arrow"></i>
    </a>
    <div class="collapse" id="form-elements">
      <ul class="nav flex-column sub-menu">
        <li class="nav-item"><a class="nav-link" href="../pages/forms/basic_elements.html">Add Product</a></li>
      </ul>
    </div>
  </li>
 

  </li>
  <li class="nav-item nav-category">Setup</li>
  <li class="nav-item">
    <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
      <i class="menu-icon mdi mdi-floor-plan"></i>
      <span class="menu-title">Settings</span>
      <i class="menu-arrow"></i>
    </a>
    <div class="collapse" id="ui-basic">
      <ul class="nav flex-column sub-menu">
        <li class="nav-item"> <a class="nav-link" href="user">Users</a></li>
        <li class="nav-item"> <a class="nav-link" href="../pages/ui-features/dropdowns.html">Dropdowns</a></li>
        <li class="nav-item"> <a class="nav-link" href="../pages/ui-features/typography.html">Typography</a></li>
      </ul>
    </div>
  </li>
  
  <li class="nav-item nav-category">pages</li>
  <li class="nav-item">
    <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
      <i class="menu-icon mdi mdi-account-circle-outline"></i>
      <span class="menu-title">Profile</span>
      <i class="menu-arrow"></i>
    </a>
    <div class="collapse" id="auth">
      <ul class="nav flex-column sub-menu">
        <li class="nav-item"> <a class="nav-link" href="../pages/samples/login.html"> Login </a></li>
      </ul>
    </div>
  </li>
</ul>
</nav>';

?>