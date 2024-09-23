<div class="container">
    <button
        type="button"
        class="navbar-toggle collapsed"
        data-toggle="collapse"
        data-target="#navbar"
        aria-expanded="false"
        aria-controls="navbar"
    >
        <span>Navigation</span>
        <span class="fa fa-navicon"></span>
    </button>

    <div class="search-wrap2">
        <form>
            <input type="text" placeholder="Search by typing" />
            <div class="sw2-close"><span class="fa fa-close"></span></div>
        </form>
    </div>

    <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <li class="dropdown dropdown-v2">
                <a href="/" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Home</a>
            </li>

            @foreach ($allCategories as $category)
                <li class="dropdown dropdown-v2">
                    <a
                        href="{{ route('category.show', $category->id) }}"
                        class="dropdown-toggle"
                        aria-haspopup="true"
                        aria-expanded="false"
                    >
                        {{ $category->category_name }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
