<!--/resources/views/forum.blade.php-->
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

            <!-- 添加自定义按钮 -->
            <li>
                <a href="/your-custom-url" class="custom-button">
                    <i class="fas fa-custom-icon"></i>
                    Custom Button
                </a>
            </li>
        </ul>
    @endif
</nav>
