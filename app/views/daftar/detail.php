
<!-- halaman untuk menampilkan detail dari barang yang dipilih -->
<div class="putih">
    <div class="container">
            <div class="left-section">
                <div class="product-images">
                    <img src="<?= BASEURL."/gambar/".$data['barang']['Pic']?>" alt="Product Image 1">
                </div>
            </div>
            <div class="right-section">
                <div class="product-info">
                    <h1 class="brand"><?= $data['barang']['Brand'] ?></h1>
                    <h1 class="desc"><?= $data['barang']['Descr'] ?></h1>
                    <p class="price">Rp <?= $data['barang']['Harga'] ?> </p>
                    <p class="availability">In Stock</p>
                    <div class="variations">
                        <label for="color">Color:</label>
                        <select id="color" name="color">
                            <option value="black">Black</option>
                        </select>
                    </div>
                    <div class="size">
                        <label for="size">Size:</label>
                        <select id="size" name="size">
                            <option value="38">38</option>
                            <option value="39">39</option>
                            <option value="40">40</option>
                            <option value="41">41</option>
                            <option value="42">42</option>
                            <option value="43">43</option>
                            <option value="44">44</option>
                        </select>
                    </div>
                    <div class="actions">
                        <a href="cart.html" class="add-to-cart">Add to Cart</a>
                        <a href="<?= BASEURL;?>/" class="favorite"><i class="fas fa-heart"></i></a>
                    </div>
                </div>
                <div class="product-description">
                    <h2>Product Information</h2>
                    <p>Material: Canvas</p>
                    <p>Material Sole: Rubber</p>
                    <h3>Customer Reviews</h3>
                    <div class="rating" id="rating">
                        <span class="fa fa-star" data-index="0"></span>
                        <span class="fa fa-star" data-index="1"></span>
                        <span class="fa fa-star" data-index="2"></span>
                        <span class="fa fa-star" data-index="3"></span>
                        <span class="fa fa-star" data-index="4"></span>
                    </div>
                    <p id="review-count">Based on 0 reviews</p>
                    <ul>
                        <li>Comfortable</li>
                        <li>Stylish</li>
                        <li>Good quality</li>
                    </ul>
                </div>
                <div class="payment-method">
                    <h2>Payment Methods</h2>
                    <ul>
                        <li><i class="fas fa-credit-card"></i> Credit Card</li>
                        <li><i class="fas fa-paypal"></i> PayPal</li>
                        <li><i class="fas fa-wallet"></i> Cash on Delivery</li>
                    </ul>
                </div>
            </div>
        </div>
</div>