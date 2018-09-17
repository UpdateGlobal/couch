<!-- Sidebar -->
    <aside class="sidebar sidebar-icons-right sidebar-icons-boxed sidebar-expand-lg">
      <header class="sidebar-header">
        <span class="logo">
          <a href="metatags.php">
            <img src="assets/img/logo_update.png" alt="logo">
          </a>
        </span>
        <span class="sidebar-toggle-fold"></span>
      </header>

      <nav class="sidebar-navigation">
        <ul class="menu">

          <li class="menu-category">Sitio web</li>

          <li class="menu-item <?php echo ($menu == "inicio" ? "active" : "")?>">
            <a class="menu-link" href="index.php">
              <span class="icon fa fa-home"></span>
              <span class="title">Inicio</span>
            </a>
          </li>

          <li class="menu-item <?php echo ($menu == "nosotros" ? "active" : "")?>">
            <a class="menu-link" href="nosotros.php">
              <span class="icon fa fa-info"></span>
              <span class="title">Nosotros</span>
            </a>
          </li>

          <li class="menu-item <?php echo ($menu == "servicios" ? "active" : "")?>">
            <a class="menu-link" href="servicios.php">
              <span class="icon fa fa-bars"></span>
              <span class="title">Servicios</span>
            </a>
          </li>

          <li class="menu-item <?php echo ($menu == "noticias" ? "active" : "")?>">
            <a class="menu-link" href="#">
              <span class="icon fa fa-newspaper-o"></span>
              <span class="title">Noticias</span>
              <span class="arrow"></span>
            </a>

            <ul class="menu-submenu" <?php echo ($menu == "noticias" ? "style='display:block;'" : "")?>>
              <li class="menu-item">
                <a class="menu-link" href="noticias-categorias.php">
                  <span class="dot"></span>
                  <span class="title">Categor&iacute;as</span>
                </a>
              </li>

              <li class="menu-item">
                <a class="menu-link" href="noticias.php">
                  <span class="dot"></span>
                  <span class="title">Noticias</span>
                </a>
              </li>

            </ul>

          </li>

          <li class="menu-item <?php echo ($menu == "galerias" ? "active" : "")?>">
            <a class="menu-link <?php echo ($menu == "galerias" ? "open" : "") ?>" href="#">
              <span class="icon fa fa-map-o"></span>
              <span class="title">Galer&iacute;as</span>
              <span class="arrow"></span>
            </a>

            <ul class="menu-submenu" <?php echo ($menu == "galerias" ? "style='display:block;'" : "")?>>
              <li class="menu-item">
                <a class="menu-link" href="galeria-categorias.php">
                  <span class="dot"></span>
                  <span class="title">Categor&iacute;as</span>
                </a>
              </li>

              <li class="menu-item">
                <a class="menu-link" href="galeria.php">
                  <span class="dot"></span>
                  <span class="title">Album</span>
                </a>
              </li>

              <li class="menu-item">
                <a class="menu-link" href="galeria-fotos.php">
                  <span class="dot"></span>
                  <span class="title">Fotos</span>
                </a>
              </li>

              <li class="menu-item">
                <a class="menu-link" href="galeria-videos.php">
                  <span class="dot"></span>
                  <span class="title">V&iacute;deos</span>
                </a>
              </li>

            </ul>
          </li>
          
          <li class="menu-category">Contacto</li>

          <li class="menu-item <?php echo ($menu == "contacto" ? "active" : "")?>">
            <a class="menu-link <?php echo ($menu == "contacto" ? "open" : "") ?>" href="#">
              <span class="icon fa fa-map-o"></span>
              <span class="title">Contacto</span>
              <span class="arrow"></span>
            </a>

            <ul class="menu-submenu" <?php echo ($menu == "contacto" ? "style='display:block;'" : "")?>>
              <li class="menu-item">
                <a class="menu-link" href="contacto.php">
                  <span class="dot"></span>
                  <span class="title">Contacto</span>
                </a>
              </li>
              <li class="menu-item">
                <a class="menu-link" href="mensajes.php">
                  <span class="dot"></span>
                  <span class="title">Mensajes</span>
                </a>
              </li>
            </ul>
          </li>

          <li class="menu-item <?php echo ($menu == "social" ? "active" : "")?>">
            <a class="menu-link" href="sociales.php">
              <span class="icon fa fa-share-alt"></span>
              <span class="title">Redes Sociales</span>
            </a>
          </li>

        </ul>
      </nav>

    </aside>
    <!-- END Sidebar -->