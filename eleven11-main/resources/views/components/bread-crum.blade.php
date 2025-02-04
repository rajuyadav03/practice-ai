<div class="col">
    <div class="page-pretitle">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                @foreach ($items as $item)
                <li class="breadcrumb-item @if ($loop->last) active @endif" @if ($loop->last) aria-current="page" @endif>
                    @if (!$loop->last)
                    <a href="{{ $item['url'] }}">{{ $item['title'] }}</a>
                    @else
                    <h1 class="mb-0 d-inline-block fs-6 lh-1">{{ $item['title'] }}</h1>
                    @endif
                </li>
                @endforeach
            </ol>
        </nav>
    </div>
</div>