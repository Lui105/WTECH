<div class="d-flex justify-content-between align-items-center mb-3">
    <h4>Popular</h4>
    <div class="d-flex align-items-center">
        <h5 class="mr-5">Filter by</h5>
        <div class="form-group mb-2 mr-4">
            <label for="rangeSlider">Max price: 50</label>
            <input type="range" class="form-control-range" id="rangeSlider">
        </div>
        <button class="btn-lg mr-5">
            <i class="bi bi-arrow-down-up"></i>
        </button>


        <!-- First Dropdown for Filter -->
        <div class="dropdown d-inline-block">
            <button class="btn btn-secondary dropdown-toggle btn-lg" type="button" id="filterDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Select color
            </button>
            <div class="dropdown-menu" aria-labelledby="filterDropdown">
                <a class="dropdown-item" href="#">Option 1</a>
                <a class="dropdown-item" href="#">Option 2</a>
                <a class="dropdown-item" href="#">Option 3</a>
            </div>
        </div>

        <!-- Second Dropdown for Sorting -->
        <div class="dropdown d-inline-block ml-2">
            <button class="btn btn-secondary dropdown-toggle btn-lg" type="button" id="sortDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Select brand
            </button>
            <div class="dropdown-menu" aria-labelledby="sortDropdown">
                <a class="dropdown-item" href="#">Brand 1</a>
                <a class="dropdown-item" href="#">Brand 2</a>
                <a class="dropdown-item" href="#">Brand 3</a>
            </div>
        </div>
    </div>
</div>
