<div class="website-title">{{ get_website_setting('website.title') }}</div>
@if($menu)
    <div class="menu">
        @foreach ($menu as $key => $item)
            <div class="menu-item @if($item->subItems->count()) dropdown @endif">
                @if($item->parent_id == null)
                    @if($item->url)
                        <a href="{{ $item->url }}">{{ $item->title }}</a>
                    @else
                        <span class="open-dropdown-menu">{{ $item->title }}</span>
                    @endif
                    @if($item->subItems->count())
                        <i class="dropdown-button-open {{ get_theme_setting('header.hamburger.dropDownButtons.openIcon') }}"></i>
                        <i class="dropdown-button-close {{ get_theme_setting('header.hamburger.dropDownButtons.closeIcon') }}"></i>
                    @endif
                @endif

                @if($item->subItems->count())
                    <div class="dropdown-content">
                    @foreach ($item->subItems as $key => $subItem)
                        <div class="drop-menu-item"><a href="{{ $subItem->url }}">{{ $subItem->title }}</a></div>
                    @endforeach
                    </div>
                @endif
            </div>
        @endforeach
    </div>
@else
    <div class="no-menu">
        <span>No Menu Created Yet</span>
    </div>
@endif
