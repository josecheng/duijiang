<!--/resources/views/duijiang.blade.php-->
<nav>
    <!-- 其他导航项 -->
    @if (isset($items))
        <ul>
            @foreach ($items as $item)
                <li>
                    <a href="{{ $item['url'] }}" class="{{ $item['className'] ?? '' }}">
                        @if (isset($item['icon']))
                            <i class="{{ $item['icon'] }}"></i>
                        @endif
                        {{ $item['label'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    @endif
</nav>
