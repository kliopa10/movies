<ul class="flex
pr-2">
                    
    <li class="main_menu_item  pr-3">
        <a href="{{route('movies.index')}}" class="hover:text-gray-300">Фильмы
            <i class="fa fa-sort-desc" aria-hidden="true"></i>        
        </a>
        <ul class="sub_menu">
        <li><a href="{{route('popular.index')}}">Популярные</a></li>
            <li><a href="">Сейчас смотрят</a></li>
        </ul>
    </li>
    <li class="main_menu_item pl-3 pr-3">
        <a href="#" class="hover:text-gray-300">Новинки</a>
    </li>
    <li class="main_menu_item pl-3 pr-3">
        <a href="#" class="hover:text-gray-300">Примьеры</a>
    </li>
    <li class="main_menu_item pl-3 pr-3">
        <a href="{{route('tv.index')}}" class="hover:text-gray-300">Сериалы</a>
    </li>
</ul>