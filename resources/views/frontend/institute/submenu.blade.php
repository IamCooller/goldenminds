
<nav class="instituteMain__nav">
                        <a href="{{ route('mainstream') }}" class="instituteMain__nav-link {{ Route::is('mainstream*') ? 'link_active' : '' }}">{{trans('Основные направления')}}</a>
                        <a href="{{ route('structure') }}" class="instituteMain__nav-link {{ Route::is('structure*') ? 'link_active' : '' }}">{{trans('Структура')}}</a>
                        <a href="{{ route('license') }}" class="instituteMain__nav-link {{ Route::is('license*') ? 'link_active' : '' }}">{{trans('Лицензии')}}</a>
                        <a href="{{ route('ISO') }}" class="instituteMain__nav-link {{ Route::is('ISO*') ? 'link_active' : '' }}">ISO 9001:2015</a>
                        <a href="{{ route('history') }}" class="instituteMain__nav-link {{ Route::is('history*') ? 'link_active' : '' }}">{{trans('История развития института')}}</a>
                        <a href="{{ route('guidance') }}" class="instituteMain__nav-link {{ Route::is('guidance*') ? 'link_active' : '' }}">{{trans('Руководство')}}</a>
                        <a href="{{ route('department') }}" class="instituteMain__nav-link {{ Route::is('department*') ? 'link_active' : '' }}">{{trans('Отделы')}}</a>
                        <a href="{{ route('vacancy') }}" class="instituteMain__nav-link {{ Route::is('vacancy*') ? 'link_active' : '' }}">{{trans('Вакансии')}}</a>
                        <a href="{{ route('regulations') }}" class="instituteMain__nav-link {{ Route::is('regulations*') ? 'link_active' : '' }}">{{trans('Нормативно-правовые акты')}}</a>
                    </nav>

