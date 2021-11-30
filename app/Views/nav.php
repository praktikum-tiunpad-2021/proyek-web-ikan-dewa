
<!DOCTYPE html>
<html>
    <head>
        <title>Aquafish Marketplace</title>
        <style>
        @font-face {
          font-family: Gotham-Medium;
          src: url(assets/Fonts/Gotham-Font/GothamMedium.ttf);
        }
        @font-face {
          font-family: Lato-Medium;
          src: url(assets/Fonts/Lato/Lato-Regular.ttf);
        }
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
          position: relative;
        }

        nav ul li a {
          color:white;
          text-decoration:none;
        }

        nav ul li:hover ul {
          display: block;
        }

        nav ul li.sub-menu :before {
          content : '';
          position: absolute;
        }

        nav ul li a:hover {
          color:white;
          text-decoration:none;
        }

        nav ul li ul{
          position: absolute;
          justify-content: center;
          display: none;
          background: #004A4D;
          width: 100px
        }

        nav ul li ul li a{
          display: block;
          width: 200px
        }
        
        nav ul li.logo{
          flex: 1;
          font-size: 30px;
          font-family: Gotham-Medium;
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
          font-family: Lato-Medium;
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
            min-width: 400px;
          }
        }
      </style>
    </head>
    <body>
      <header>
        <nav style="background: #004A4D; width: 100%; height: 62px; position: sticky;" >
          <ul>
            <li class="logo"><a href="/landing">AQUA<span style="font-size: 22px;letter-spacing: normal;color:white; margin-left:-5px"> fish</span></a></li>
            
            <div class="items">
              <li><a href="/fw_catalog">Freshwater Fish</a></li>
              <li><a href="/sw_catalog">Saltwater Fish</a></li>
            </div>
            <li class="search-icon">
              <input type="search" placeholder="Search">
            </li>
            <div class="account">
              <li><a href="/myOrder"><img src="<?php echo base_url('assets/Pics/keranjang.png') ?>" alt="keranjang" style="width: 25px; padding: 15px 3px;"></a></li>
              <li><a class="sub-menu"href="#"><img src="<?php echo base_url('assets/Pics/account.png') ?>" alt="acc" style="width: 27px; padding: 15px 3px;"></a>
              <ul>
                <li><a href="/editAccount">Account</a></li>
                <li><a href="/logout">Logout</a></li>
              </ul>
              </li>
              <li><a href="/wishlist"><img src="<?php echo base_url('assets/Pics/wishlist.png') ?>" alt="wishlist" style="width: 25px; padding: 15px 3px;"></a></li>
            </div>
          </ul>
        </nav>
      </header>
    </body>
    <script>
      $('.menu-toggle').click(function(){
        $('nav').toggleClass('active')
      })
      $('ul li').click(function(){
        $(this).siblings().removeClass('active');
        $(this).toggleClass('active');
      })
    </script>
</html>