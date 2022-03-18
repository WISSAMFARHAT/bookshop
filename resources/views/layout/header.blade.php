<header>
    <div class="top-header">
        <div class="brand">
            <p>زايد مهدي</p>
            
            <em class="fa fa-car"></em>
        </div>
        <div class="search">
            <input type="text" class="search-text" placeholder="أبحث عن كتاب" />
            <button type="submit" class="searchbtn d-flex"> <em class="fa fa-search"></em> بحث </button>
        </div>
        <div class="cart">
            <div>
                <a href="{{ route('cart') }}">
                    <em class="fa fa-shopping-cart"></em>
                    <div class="circle">20</div>
                </a>
            </div>
            <div>
                <a href="{{ route('whishlist') }}">
                    <em class="fa fa-heart"></em>
                    <div class="circle">20</div>
                </a>
            </div>
        </div>
    </div>

    <nav>
        <ul>
            <li><a href="{{ route('home') }}"  class="{{ Request::path() ==  '/' ? 'active' : ''  }}">الرئسية </a></li>
            <li><a href="#" class="{{ Request::path() ==  'about' ? 'active' : ''  }}">من نحن </a></li>
            <li><a href="{{ route('book', ['name' => 'arabic']) }}" class="{{ str_contains(Request::path(),'book/arabic') ? 'active' : ''  }}">كتب عربية</a></li>
            <li><a href="{{ route('book', ['name' => 'english']) }}" class="{{ str_contains(Request::path(),'book/english')  ? 'active' : ''  }}">كتب أنجليزية</a></li>
            <li><a href="{{ route('book', ['name' => 'store']) }}" class="{{ str_contains(Request::path(),'book/store') ? 'active' : ''  }}">متجر</a></li>
            <li><a href="{{ route('book', ['name' => 'publications']) }}" class="{{ str_contains(Request::path(),'book/publications')  ? 'active' : ''  }}">منشورات نصوص</a></li>
            <li><a href="#" class="{{ Request::path() ==  'contact' ? 'active' : ''  }}">تواصل معنا</a></li>
        </ul>
    </nav>

</header>


<div class="chat">
    <a href="#"><em class="fa fa-whatsapp"></em></a>
</div>