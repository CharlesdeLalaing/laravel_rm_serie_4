<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Section 4 Back-Office</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" href="{{route('fruitAdmin')}}">Fruit Admin</a>
                <a class="nav-link" href="{{route('vagetableAdmin')}}">Vegetable Admin</a>
                <a class="nav-link" href="{{route('fruit')}}">Fruit page</a>
                <a class="nav-link" href="{{route('vegetable')}}">Vegetable page</a>
            </div>
        </div>
    </div>
</nav>
