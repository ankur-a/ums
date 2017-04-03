 <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
<header class="main-header">
        <a href="index2.html" class="logo">
          <span class="logo-mini"><b>U</b>MS</span>
          <span class="logo-lg"><b>IIITDMJ </b> UMS</span>
        </a>
        <nav class="navbar navbar-static-top" role="navigation">
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>

          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="../dist/img/sandu.png" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php echo findUser($_SESSION['rollno']);?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="../dist/img/sandu.png" class="img-circle" alt="User Image">
                    <p>
                      <?php echo findUser($_SESSION['rollno']); ?>
                      <small><?php echo findBatch($_SESSION['rollno']);?></small>
                    </p>
                  </li>
                
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="../pages/profile.php" class="btn btn-success btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="../pages/logout.php" class="btn btn-danger btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>