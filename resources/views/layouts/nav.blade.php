<nav class="nav d-flex justify-content-between">
    <img class="nav_logo ms-4" src="img/logobarber-white.png" alt="logo">
    <ul class="nav_list d-flex align-items-center ">
        <li class="nav_item"><a href="{{ route('main') }}" class="nav_link">главная</a></li>
        <li class="nav_item"><a href="{{ route('about') }}" class="nav_link">кто мы</a></li>
        <li class="nav_item"><a href="{{ route('price') }}" class="nav_link">цена вопроса</a></li>
        <li class="nav_item"><a href="{{ route('barbers') }}" class="nav_link">барберы</a></li>
        <li class="nav_item"><a href="{{ route('blog') }}" class="nav_link">блог</a></li>
        <li class="nav_item"><a href="{{ route('contacts') }}" class="nav_link">контакты</a></li>
    </ul>

        <div class="dropdown nav_button">
            <button class="btn btn-secondary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                </svg>
            </button>
            <ul class="dropdown-menu dropdown-menu-dark">
                <li><a href="{{ route('main') }}" class="dropdown-item">главная</a></li>
                <li><a href="{{ route('about') }}" class="dropdown-item">кто мы</a></li>
                <li><a href="{{ route('price') }}" class="dropdown-item">цена вопроса</a></li>
                <li><a href="{{ route('barbers') }}" class="dropdown-item">барберы</a></li>
                <li><a href="{{ route('blog') }}" class="dropdown-item">блог</a></li>
                <li><a href="{{ route('contacts') }}" class="dropdown-item">контакты</a></li>
            </ul>
        </div>



</nav>
