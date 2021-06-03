<!-- topBar and navigation -->
<?php include 'partials/navigation.php'?>
<!-- header -->
<header class="otherHeader">
    <article>
        <h1>Products</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, molestias</p>
    </article>
</header>
<!-- products -->
<section class="products container py">
    <article>
        <img src="img/products1.jpg" alt="">
    </article>
    <article>
        <h2>Nike</h2>
        <h3>&dollar;139.00</h3>
        <h6>Category: <span>Shoes</span></h6>
        <h6>Availibility: <span>In Stock</span></h6>
        <hr>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor, tempora voluptatem voluptatibus sit iste est
            cumque. Officiis debitis necessitatibus veniam, ipsum rem fugiat aut fuga velit commodi. Facere dolorum
            reprehenderit eos eveniet neque distinctio vero expedita accusamus iste saepe voluptatibus nesciunt unde
            voluptate, dolores voluptates ducimus. Culpa eum rerum recusandae!</p>
        <form>
            <div>
                <label for="quantity">Quantity:</label>
                <select name="quantity">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
            <div>
                <button type="submit">add to cart</button>
                <button><i class="far fa-gem"></i></button>
                <button><i class="far fa-heart"></i></button>
            </div>
        </form>
    </article>
</section>
<!-- footer -->
<?php include 'partials/footer.php'?>