<?php require 'inc/head.php';

if(!isset($_SESSION['pseudo']))
{
    header('Location:login.php');
}

if(!empty($_GET['add_to_cart'])){

    switch ($_GET["add_to_cart"])
    {
        case "46":
            if (empty($_COOKIE['panier']['pecanNuts'])){
                setCookie("panier[pecanNuts]",$_COOKIE["panier"]["pecanNuts"], time() + 365*24*3600);
            }
            $_COOKIE['panier']["pecanNuts"]++;
            setCookie("panier[pecanNuts]",$_COOKIE["panier"]["pecanNuts"], time() + 365*24*3600);
            header('Location:cart.php');
        break;
        case "36":
            if (empty($_COOKIE['panier']['chocolateChips'])) {
                setCookie("panier[chocolateChips]", $_COOKIE["panier"]["chocolateChips"], time() + 365 * 24 * 3600);
            }
            $_COOKIE['panier']["chocolateChips"]++;
            setCookie("panier[chocolateChips]",$_COOKIE["panier"]["chocolateChips"], time() + 365*24*3600);
            header('Location:cart.php');
        break;
        case "58":
            if (empty($_COOKIE['panier']['chocolateCookie'])) {
                setCookie("panier[chocolateCookie]", $_COOKIE["panier"]["chocolateCookie"], time() + 365 * 24 * 3600);
            }
            $_COOKIE['panier']["chocolateCookie"]++;
            setCookie("panier[chocolateCookie]",$_COOKIE["panier"]["chocolateCookie"], time() + 365*24*3600);
            header('Location:cart.php');
        break;
        case "32":
            if (empty($_COOKIE['panier']['M&M'])) {
                setCookie("panier[M&M]", $_COOKIE["panier"]["M&M"], time() + 365 * 24 * 3600);
            }
            $_COOKIE['panier']["M&M"]++;
            setCookie("panier[M&M]",$_COOKIE["panier"]["M&M"], time() + 365*24*3600);
            header('Location:cart.php');
        break;
    }
}
?>
<section class="cookies container-fluid">
  <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-46.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Pecan nuts</h3>
          <p>Cooked by Penny !</p>
          <a  href="?add_to_cart=46" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
          </a>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-36.jpg" alt="cookies chocolate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Chocolate chips</h3>
          <p>Cooked by Bernadette !</p>
          <a  href="?add_to_cart=36" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
          </a>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-58.jpg" alt="cookies chocolate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Chocolate cookie</h3>
          <p>Cooked by Bernadette !</p>
          <a  href="?add_to_cart=58" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
          </a>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-32.jpg" alt="cookies chocolate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>M&M's&copy; cookies</h3>
          <p>Cooked by Penny !</p>
          <a  href="?add_to_cart=32" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
          </a>
        </figcaption>
      </figure>
    </div>
  </div>
</section>
<?php require 'inc/foot.php'; ?>
