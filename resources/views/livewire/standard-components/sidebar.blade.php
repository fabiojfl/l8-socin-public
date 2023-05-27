<div class="sidebar-wrapper">
    <aside class="sidebar sidebar-collapse" id="sidebar">
    <!-- partials._menu -->
    <div class="sidebar__menu-group">
        <ul class="sidebar_nav">
            <li class="menu-title mt-30">
                <span>Aplicações</span>
            </li>            
            <li class="has-child">
                <a href="#" class="">
                    <span class="nav-icon uil uil-users-alt"></span>
                    <span class="menu-text">Usuários</span>
                    <span class="toggle-icon"></span>
                </a>
                <ul>
                    <li class="">
                        <a href="users-membar.html">Lista de usuários</a>
                    </li>
                </ul>
            </li>
            <li class="has-child">
                <a href="#" class="">
                    <span class="nav-icon uil uil-images"></span>
                    <span class="menu-text">Publicações</span>
                    <span class="toggle-icon"></span>
                </a>
                <ul>
                    <li class="">
                        <a href="{{ route('posts') }}">Listar</a>
                    </li>
                    <li class="">
                        <a href="{{ route('post.create') }}">Criar</a>
                    </li>
                </ul>
            </li>
            <li class="has-child">
                <a href="#" class="">
                    <span class="nav-icon uil uil-arrow-growth"></span>
                    <span class="menu-text">Investidores</span>
                    <span class="toggle-icon"></span>
                </a>
                <ul>
                    <li class="">
                        <a href="blog.html">Listar publicações</a>
                    </li>
                </ul>
            </li>
            <li class="has-child">
                <a href="#" class="">
                    <span class="nav-icon uil uil-tachometer-fast"></span>
                    <span class="menu-text">Configurações</span>
                    <span class="toggle-icon"></span>
                </a>
                <ul>
                    <li class="">
                        <a href="users-membar.html">Lista de usuários</a>
                    </li>
                </ul>
            </li>
            
        </ul>
    </div>   
    <!-- end partials._menu -->
    
    </aside>
</div>