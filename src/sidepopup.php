<?php
echo'<ul class="navbar-nav ms-auto">
   
<li class="nav-item dropdown d-none d-lg-block user-dropdown">
  <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
    <img class="img-xs rounded-circle" src="./assets/images/faces/face8.jpg" alt="Profile image"> </a>
  <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
    <div class="dropdown-header text-center">
      <img class="img-md rounded-circle" src="./assets/images/faces/face8.jpg" alt="Profile image">
      <p class="mb-1 mt-3 font-weight-semibold">Allen Moreno</p>
      <p class="fw-light text-muted mb-0">allenmoreno@gmail.com</p>
    </div>
    <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My
      Profile <span class="badge badge-pill badge-danger">1</span></a>
    <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-message-text-outline text-primary me-2"></i>
      Messages</a>
    <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-calendar-check-outline text-primary me-2"></i>
      Activity</a>
    <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-help-circle-outline text-primary me-2"></i>
      FAQ</a>
    <a class="dropdown-item" href="logout"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
  </div>
</li>
</ul>';

?>