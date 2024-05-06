<h5 class="mr-5">Filter by</h5>
<div class="form-group mb-2 mr-4">
    <form id="priceFilterForm">
        <label for="rangeSlider">Max price: <span id="priceValue">{{ request('max_price', 'Not set') }}</span></label>
        <input type="range" name="max_price" class="form-control-range" id="rangeSlider" min="0" max="200" value="{{ request('max_price') }}">
    </form>
</div>
<button id="sortButton" class="btn-lg mr-5" onclick="toggleSortOrder()">
    <i class="bi bi-arrow-up" id="ascIcon" style="display:none;"></i>
    <i class="bi bi-arrow-down" id="descIcon" style="display:none;"></i>
    Sort Price
</button>


<!-- First Dropdown for Filter -->
<div class="dropdown d-inline-block ml-2">
    <button class="btn btn-secondary dropdown-toggle btn-lg color-dropdown" type="button" id="colorDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{request('color', 'Select color')}}
    </button>
    <div class="dropdown-menu" aria-labelledby="colorDropdown">
        @foreach($colors as $color)
            <a class="dropdown-item color-filter" href="#" data-color="{{ $color }}">{{ $color }}</a>
        @endforeach()
    </div>
</div>


<!-- Second Dropdown for Sorting -->
<div class="dropdown d-inline-block ml-2">
    <button class="btn btn-secondary dropdown-toggle btn-lg" type="button" id="sortDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{request('brand', 'Select brand')}}
    </button>
    <div class="dropdown-menu" aria-labelledby="sortDropdown">
        @foreach($brands as $brand)
            <a class="dropdown-item brand-filter" href="#" data-brand="{{ $brand }}">{{ $brand }}</a>
        @endforeach()
    </div>
</div>


<script>
    document.getElementById('rangeSlider').addEventListener('input', function() {
        document.getElementById('priceValue').textContent = this.value;
        clearTimeout(window.submitFormTimeout);

        window.submitFormTimeout = setTimeout(function() {
            const maxPrice = document.getElementById('rangeSlider').value;

            const currentUrl = new URL(window.location.href);
            currentUrl.searchParams.set('max_price', maxPrice);
            window.location.href = currentUrl.href;
        }, 500);
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        updateSortIcon();
    });

    function toggleSortOrder() {
        const currentUrl = new URL(window.location.href);
        const currentSort = currentUrl.searchParams.get('sort');

        let newSort = 'asc';
        if (currentSort === 'asc') {
            newSort = 'desc';
        } else {
            newSort = 'asc';
        }
        currentUrl.searchParams.set('sort', newSort);
        updateSortIcon(newSort);
        window.location.href = currentUrl.href;
    }

    function updateSortIcon(sortOrder = null) {
        if (!sortOrder) {
            const currentUrl = new URL(window.location.href);
            sortOrder = currentUrl.searchParams.get('sort');
        }
        const ascIcon = document.getElementById('ascIcon');
        const descIcon = document.getElementById('descIcon');

        if (sortOrder === 'asc') {
            ascIcon.style.display = 'inline';
            descIcon.style.display = 'none';
        } else if (sortOrder === 'desc') {
            ascIcon.style.display = 'none';
            descIcon.style.display = 'inline';
        } else {
            ascIcon.style.display = 'none';
            descIcon.style.display = 'none';
        }
    }
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.brand-filter').forEach(function (item) {
            item.addEventListener('click', function (event) {
                event.preventDefault();
                var selectedBrand = this.dataset.brand;
                var dropdownButton = document.getElementById('sortDropdown');
                dropdownButton.textContent = selectedBrand;

                var currentUrl = new URL(window.location.href);
                currentUrl.searchParams.set('brand', selectedBrand);

                window.location.href = currentUrl.href;
            });
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelector('.dropdown-menu').addEventListener('click', function (event) {
            if (event.target.classList.contains('color-filter')) {
                event.preventDefault();
                var selectedColor = event.target.dataset.color;
                var dropdownButton = document.querySelector('.color-dropdown');
                dropdownButton.textContent = selectedColor;
                var currentUrl = new URL(window.location.href);
                currentUrl.searchParams.set('color', selectedColor);
                window.location.href = currentUrl.href;

            }
        });
    });
</script>



