<aside class="main-sidebar sidebar-dark-primary elevation-4" style ="position: fixed">
    <!-- Brand Logo -->




      <!-- Sidebar Menu -->

      <nav class="mt-2" id="styl1">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <!-- dashboard clique -->



               <li class="nav-item ">
                <a href="#" class="nav-link active">
                    <i class="fas fa-user-circle"></i>

                  <p>
                     Bonjour {{ Auth::user()->name }}
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('login') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();" class="nav-link ">
                      <i class="far fa-circle nav-icon"></i>
                      {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                  </li>

                </ul>
<br/>
              </li>
               {{--  --}}
               <li class="nav-item ">
            <a href="dashboard.blade.php" class="nav-link active">
            <i class="fas fa-tachometer-alt"></i>

              <p>
                Tableau de bord
                <!-- <i class="right fas fa-angle-left"></i -->
              </p>
            </a>
            </br>
          <li class="nav-item ">
            <a href="#" class="nav-link active">
              <i class="fas fa-users"></i>
              <p>
                Utilisateurs
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="inscription.blade.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Liste des inscriptions</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="offreur.blade.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Liste des offreurs</p>
                </a>
              </li>
            </ul>
          </li>
          </br>
          <li class="nav-item has-treeview menu-open">
              <a href="#" class="nav-link active">
                <i class="fas fa-shopping-cart"></i>
                <p>
                  Boutique
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="commande.blade.php" class="nav-link ">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Commandes</p>
                  </a>
                </li>
                @can('edit-produit')
                <li class="nav-item">
                  <a href="listep.blade.php" class="nav-link ">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Produits</p>
                  </a>
                </li>
                @endcan
                @can('edit-categorie')
                <li class="nav-item">
                  <a href = "{{ url('/' . $page='categorie') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Categories</p>
                  </a>
                </li>
                @endcan
                @can('edit-tags')
                <li class="nav-item">
                  <a href="tags.blade.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tags</p>
                  </a>
                </li>
                @endcan
                @can('edit-livraion')
                <li class="nav-item">
                  <a href="livraison.blade.php" class="nav-link ">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Livraison</p>
                  </a>
                </li>
                @endcan
                </ul>
          </li>
          </br>
                <a href="evenement.blade.php" class="nav-link active">
                <i class="fas fa-calendar-week"></i>
              <p>
              Evenements
                <!-- <i class="right fas fa-angle-left"></i -->
              </p>
            </a>
            </br>
            @can('configuration')
            <li class="nav-item has-treeview menu-open">
              <a href="#" class="nav-link active">
              <i class="fas fa-cogs"></i>
                <p>
                  Configuration
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="mlivraison.blade.php" class="nav-link ">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Methode de livraison</p>
                  </a>
                </li>
                <li class="nav-item">
                      <a class="nav-link" href="{{ route('users.index') }}">
                        <i class="far fa-circle nav-icon"></i>
                    <p>Gestion d'utilisateur</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('roles.index') }}">
                      <i class="far fa-circle nav-icon"></i>
                  <p>Gestion de role</p>
                  </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('products.index') }}">
                      <i class="far fa-circle nav-icon"></i>
                  <p>Gestion de produit</p>
                  </a>
                </li>
          </li>
          @endcan
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
