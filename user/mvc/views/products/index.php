<div class="main-product">
    <div class="search-product">
        <h3>Danh mục</h3>
        <ul>
            <li>
                <a href="#">Laptop</a>
                <button type="button" data-bs-toggle="collapse" data-bs-target="#dienthoai" aria-expanded="false"></button>
                <div class= "collapse multi-collapse" id="dienthoai">
                    <ul class="sub-menu-product" >
                        <li><a href="#">Samsung</a></li>
                        <li><a href="#">Samsung</a></li>
                        <li><a href="#">Samsung</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="#">Điện thoại</a></li>
            <li><a href="#">Phụ kiện</a></li>
        </ul>
        <!--  start form search -->
        <form action="products/index/" method="get">
            <h3>Tìm kiếm</h3>
            <div class="display">
                <h6>Giá: </h6>
                <p id="min">0</p>
                <span>-</span>
                <p id="max">50.000.000</p>
            </div>
            <div class="range-slide">
                <div class="slide">
                    <div class="line" id="line" style="left: 0%; right: 0%;"></div>
                    <span class="thumb" id="thumbMin" style="left: 0%;"></span>
                    <span class="thumb" id="thumbMax" style="left: 100%;"></span>
                </div>
                <input id="rangeMin" name="rangeMin" type="range" data-min="0" value="0">
                <input id="rangeMax" name="rangeMax" type="range" data-max="100" value="100">
            </div>
            <button type="submit">lọc</button>
        </form>
        <!-- end form search -->
    </div>
    <div class="main-content-product">
        <div class="main-content-product-title">
            <h3>Sản phẩm</h3>
            <div class="center">
                <select name="sources" id="sources" class="custom-select sources" placeholder="Thứ tự mặc định">
                    <option value="profile" selected="selected"><b>Profile</b></option>
                    <option value="word">Word</option>
                    <option value="hashtag">Hashtag</option>
                </select>
            </div>
        </div>
    </div>
</div>