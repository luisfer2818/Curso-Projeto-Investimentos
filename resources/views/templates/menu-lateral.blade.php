<nav id="principal">
    <ul>
        <li>
        <a href="{{ route('user.dashboard') }}">
                <i class="fa fa-home"></i>
                <h3>Home</h3>
            </a>
        </li>
        <li>
        <a href="{{ route('user.index') }}">
                <i class="fa fa-address-book"></i>
                <h3>Usuários</h3>
            </a>
        </li>
        <li>
        <a href="{{ route('instituitions.index') }}">
                <i class="fa fa-building"></i>
                <h3>Instituições</h3>
            </a>
        </li>
        <li>
            <a href="">
                <i class="fa fa-user"></i>
                <h3>Grupos</h3>
            </a>
        </li>
        <li>
            <a href="">
                <i class="fa fa-envelope"></i>
                <h3>Contato</h3>
            </a>
        </li>
         {{--  <li>  
            <a href="">
                <i class="fa fa-cogs"></i>
                <h3>Configurações</h3>
            </a>
        </li>  --}}
         <li> 
            <a href="">
                <i class="fa fa-sign-in"></i>
                <h3>Sair</h3>
            </a>
        </li>
  
        
    </ul>
</nav>