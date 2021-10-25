
<!DOCTYPE html>
<html>
    <head>
        <title>Aquafish Marketplace</title>
    </head>
    <style>
      *{
       margin: 0;
       padding: 0;
       color: white;
      }

      nav ul{
        display: flex;
        list-style: none;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
      }

      nav ul li.logo{
        flex: 1;
        font-size: 30px;
        font-weight: 700;
      }

      nav ul div.items{
        padding: 0 30px;
        display: inline-flex;
      }
      
      nav ul div.account{
        padding: 0 30px;
        display: inline-flex;
      }

      nav ul div.items a{
        text-decoration: none;
        font-size: 18px;
        padding: 0 25px;
      }

      nav ul div.account a{
        text-decoration: none;
        font-size: 18px;
        padding: 0 10px;
      }

      nav ul input{
        height: 100%;
        width: 540px;
        border: none;
        outline: none;
        padding: 0 10px;
      }

      @media screen and (max-width: 1440px){
        nav{
          padding: 10px 40px 10px 0px;
        }
      }

    </style>
    <header>
      <nav style="background: #004A4D; width: 100%; height: 62px; position: sticky;" >
        <ul>
          <li class="logo">AQUAfish</li>
          <div class="items">
            <li><a href="#">Saltwater Fish</a></li>
            <li><a href="#">Freshwater Fish</a></li>
          </div>
          <li class="search-icon">
            <input type="search" placeholder="Search">
          </li>
          <div class="account">
            <li><a href="#"><img src="assets/Pics/keranjang.png" alt="keranjang" style="width: 25px; padding: 15px 3px;"></a></li>
            <li><a href="#"><img src="assets/Pics/account.png" alt="acc" style="width: 27px; padding: 15px 3px;"></a></li>
            <li><a href="#"><img src="assets/Pics/wishlist.png" alt="wishlist" style="width: 25px; padding: 15px 3px;"></a></li>
          </div>
        </ul>
      </nav>
    </header>
</html>