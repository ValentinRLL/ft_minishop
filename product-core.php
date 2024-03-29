<div class="product_image_area section_padding">
    <div class="container">
      <div class="row s_product_inner justify-content-between">
        <div class="col-large-7">
          <img src="<?php echo $product['product_image'];?>">
        </div>
        <div class="col-large-5">
          <div class="s_product_text">
            <h3><?php echo $product['product_name']; ?></h3>
            <h2><?php echo $product['product_price']." €"; ?></h2>
            <ul class="list">
              <li>
                <a class="active" href="category.php?id=<?php echo $category['category_ID'];?>">
                  <span>Categorie</span> : <?php 
                  
                  echo $category['category_name'];
                  
                  
                  ?></a>
              </li>
              <li>
                <a href="#input-number"> <span>Disponible</span> : <?php $product['product_stock'] >= 1 ? print("Oui") : print("Non") ?></a>
              </li>
            </ul>
            <p>
            <?php echo $product['product_description'];?>
            </p>
            <div class="card_area d-flex justify-content-between align-items-center">
              <div class="product_count">
                <form method="post" action="cart.php">
                <i class="ti-minus" onclick="decrementValue(0)"></i>
                <input id="input-number" class="input-number" name="input-number" type="text" value="1" min="1" max="10">
                <i class="ti-plus" onclick="incrementValue(0)"></i>
                <input class="d-none" name="id" value="<?php echo $product['product_ID'];?>">
              </div>
              <input type="submit" name="add_cart" value="ajouter au panier" class="btn_3">
              </form>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
