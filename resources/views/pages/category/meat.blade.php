@include('partials.head')

<body>
    @include('partials.navbar')

    <main class="main-container">
        <div class="main-menu">
            <ul class="main-navbar-link">
                <li><a href="/all-menu">All</a></li>
                <li><a href="/foods">Foods</a></li>
                <li><a href="/drinks">Drinks</a></li>
                <li><a href="/vegetables">Vegetables</a></li>
                <li><a href="/meat" class="active">Meat</a></li>
                <li><a href="/cake">Cake</a></li>
                <li><a href="/fruit">Fruit</a></li>
            </ul>
            <div class="menu-product">
                @for ($i = 1; $i <= 10; $i++)
                    <div class="product">Produk {{ $i }}</div>
                @endfor
            </div>
        </div>

        @include('partials.calculation')
    </main>
</body>

</html>
