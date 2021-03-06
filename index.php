<!DOCTYPE html>
<html>

<head>
    <title>TeeOmaPidu</title>
    <meta charset="utf-8">
  	<link rel="icon" href="images/favicon.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
    <script type="text/javascript" src="javascript.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Spinnaker">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div id="header">
        <a href="" id="logoBox">
    		<img src="images/logo.svg" id="logoImg">
        </a>
        <div id="iconsBox">
            <!-- shoppingCartIcon -->
            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0)">
                    <path d="M10.4356 30.3289C11.8764 30.3289 13.0445 29.1608 13.0445 27.7199C13.0445 26.2791 11.8764 25.111 10.4356 25.111C8.99471 25.111 7.82666 26.2791 7.82666 27.7199C7.82666 29.1608 8.99471 30.3289 10.4356 30.3289Z" stroke="#FF0042" stroke-opacity="0.75" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M26.0894 30.3289C27.5303 30.3289 28.6983 29.1608 28.6983 27.7199C28.6983 26.2791 27.5303 25.111 26.0894 25.111C24.6485 25.111 23.4805 26.2791 23.4805 27.7199C23.4805 29.1608 24.6485 30.3289 26.0894 30.3289Z" stroke="#FF0042" stroke-opacity="0.75" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M7.39603 8.15307H30.0023L27.8108 19.0975C27.6915 19.6981 27.3648 20.2375 26.8879 20.6215C26.4109 21.0054 25.8141 21.2094 25.2019 21.1977H11.4138C10.7768 21.2031 10.1598 20.9752 9.67923 20.5571C9.19864 20.139 8.88763 19.5595 8.80484 18.9279L6.82207 3.90053C6.73984 3.27339 6.43259 2.69748 5.95747 2.27996C5.48236 1.86243 4.87174 1.63173 4.23923 1.63077H1.3042" stroke="#FF0042" stroke-opacity="0.75" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </g>
                <defs>
                    <clipPath id="clip0">
                        <rect width="31.307" height="31.307" fill="white" transform="translate(0 0.326294)" />
                    </clipPath>
                </defs>
            </svg>
            <!-- shoppingCartIcon end -->
            <!-- logInIcon -->
            <a onclick="openLogInWindow()">
	            <svg width="30" height="32" viewBox="0 0 30 32" fill="none" xmlns="http://www.w3.org/2000/svg">
	                <path d="M1.19336 16.6814H19.8377L15.0298 21.5776C14.6648 21.9421 14.6648 22.5786 15.0293 22.9435C15.212 23.1262 15.4508 23.2398 15.6905 23.2398C15.9298 23.2398 16.1685 23.1599 16.3512 22.9772L22.3395 16.9954C22.5148 16.8202 22.6134 16.5851 22.6134 16.3375C22.6134 16.0898 22.5148 15.8534 22.3395 15.6781L22.0554 15.3945C21.9909 15.301 21.9096 15.2197 21.8157 15.1557L16.3517 9.69171C15.9868 9.32676 15.3947 9.32676 15.0302 9.69171C14.6653 10.0567 14.6653 10.559 15.0302 10.9244L19.0078 14.8123H1.19336C0.677479 14.8123 0.258789 15.2309 0.258789 15.7468C0.258789 16.2627 0.677479 16.6814 1.19336 16.6814Z" fill="#FF0042" fill-opacity="0.75" />
	                <path d="M29.4645 28.0276V4.78472C29.4645 2.54454 27.6383 0.326324 25.3771 0.326324H13.2272C11.0103 0.326324 8.90381 2.46463 8.90381 4.78472V10.3174C8.90381 10.8333 9.3225 11.252 9.83838 11.252C10.3543 11.252 10.773 10.8333 10.773 10.3174V4.78472C10.773 3.50014 12.0445 2.19548 13.2272 2.19548H25.3771C26.614 2.19548 27.5953 3.5679 27.5953 4.78472V28.0276C27.5953 29.272 26.5659 29.7655 25.3771 29.7655H13.2272C12.122 29.7655 10.773 29.351 10.773 28.0276V22.4669C10.773 21.951 10.3543 21.5323 9.83838 21.5323C9.3225 21.5323 8.90381 21.951 8.90381 22.4669V28.0276C8.90381 30.2206 10.8575 31.6346 13.2272 31.6346H25.3771C27.8 31.6346 29.4645 30.15 29.4645 28.0276Z" fill="#FF0042" fill-opacity="0.75" />
	            </svg>
            </a>
            <!-- logInIcon end -->
            <div id="blackBackground">
            	<div id="loginBox">
            		<a id="closeButton" onclick="openLogInWindow()">&times;</a>
            		<div id="menu">
	            		<a href="" class="menuItem">
	            			<div>LOGI SISSE</div>
	            		</a>
	                    <a href="" class="menuItem">
	                        <div>LOO KASUTAJA</div>
	                    </a>
            		</div>
                    <div id="kasutajaNimiText">Kasutaja Nimi</div>
                	<input type="text" id="kasutajaNimi" autocomplete="off">
                    <div id="paroolText">Parool</div>
                	<input type="password" id="kasutajaNimi" autocomplete="off">
                	<div id="loginButtonBox">
                		<a href="" id="loginButton">
                			<div>LOGI SISSE</div>
                		</a>
                	</div>
            	</div>
            	<!-- loginBox end -->
            </div>
            <!-- blackBackground end-->
            <!-- infoIcon -->
            <svg width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0)">
                    <path d="M16.558 0C7.91125 0 0.90332 7.00581 0.90332 15.6547C0.90332 24.2993 7.91125 31.3083 16.558 31.3083C25.2016 31.3083 32.2105 24.2993 32.2105 15.6547C32.2105 7.00581 25.2026 0 16.558 0ZM16.558 28.7547C9.31792 28.7547 3.45484 22.8905 3.45484 15.6536C3.45484 8.41566 9.31792 2.5494 16.558 2.5494C23.7917 2.5494 29.659 8.41672 29.659 15.6536C29.6601 22.8905 23.7917 28.7547 16.558 28.7547Z" fill="#FF0042" fill-opacity="0.75" />
                    <path d="M18.7437 11.812H14.3434V11.8195H12.7057V14.3773H14.3434V23.5128H12.605V25.9572H14.3434V25.9742H18.7437V25.9572H20.1832V23.5128H18.7437V11.812Z" fill="#FF0042" fill-opacity="0.75" />
                    <path d="M16.5134 10.0746C17.9921 10.0746 18.8879 9.0909 18.8879 7.87292C18.8593 6.63055 17.9911 5.67651 16.5728 5.67651C15.1565 5.67651 14.229 6.62949 14.229 7.87292C14.2279 9.0909 15.1258 10.0746 16.5134 10.0746Z" fill="#FF0042" fill-opacity="0.75" />
                </g>
                <defs>
                    <clipPath id="clip0">
                        <rect width="31.3083" height="31.3083" fill="white" transform="translate(0.90332)" />
                    </clipPath>
                </defs>
            </svg>
            <!-- infoIcon end -->
        </div>
        <!-- iconsBox end-->
    </div>
    <!-- header end -->
    <div id="allContentUnderHeader">
        <div id="menu">
          	<a href="" class="menuItem" id="ruum" ><div>RUUM</div></a>
          	<a href="" class="menuItem" id="tehnika" ><div>TEHNIKA</div></a>
          	<a href="" class="menuItem" id="esineja" ><div>ESINEJA</div></a>
          	<a href="" class="menuItem" id="dekoratsioon" ><div>DEKORATSIOON</div></a>
          	<a href="" class="menuItem" id="toit" ><div>TOIT</div></a>
          	<div id="veelSubMenu">
	          	<button class="menuItem" id="veel" onclick="openMenu()"><div>VEEL<i class="fa fa-caret-down"></i></div></button>
            	<button class="menuItem" id="menuIcon" onclick="openMenu()"><div>&#9776;</div></button>
            	<div id="dropdownContent">
			        <a href="" class="menuItem" id="ruum" ><div>RUUM</div></a>
			        <a href="" class="menuItem" id="tehnika" ><div>TEHNIKA</div></a>
			        <a href="" class="menuItem" id="esineja" ><div>ESINEJA</div></a>
			        <a href="" class="menuItem" id="dekoratsioon" ><div>DEKORATSIOON</div></a>
			        <a href="" class="menuItem" id="toit" ><div>TOIT</div></a>
		        </div>
        	</div>
        </div>
        <!-- menu end-->
        <div id="sideAndMainContent">
            <div id="sideContent">
                <input type="text" autocomplete="off" placeholder="ASUKOHT">
                <input type="text" autocomplete="off" placeholder="KUUPÄEV">
            </div>
            <!-- sideContent end-->
            <div id="mainContent">
            	<div class="container">
                	<div class="innerContainer">
                		<img src="images/forest.jpg" alt="">
                		<div class="righthidden">
  	                		<a href="" class="button"><div>VALI</div></a>
  	                		<a href="" class="button"><div>TELLI</div></a>
              			</div>
                	</div>
              		<div class="middle">
              			<div>What is Lorem Ipsum?<br>
                    	Lorem Ipsum is simply dummy text of the printing
                    	and typesetting industry. Lorem Ipsum has been the industry's 
                    	standard dummy text ever since the 1500s, when an unknown printer
                    	took a galley of type and scrambled it to make a type specimen book.
                    	It has survived not only five centuries, but also the leap...
                  		</div>
                  		<a href="" class="button"><div>VAATA</div></a>
            		</div>
              		<div class="right">
	                	<a href="" class="button"><div>VALI</div></a>
	                	<a href="" class="button"><div>TELLI</div></a>
            		</div>
            	</div>
            	<!-- container end-->
            	<div class="container">
                	<div class="innerContainer">
                	<img src="images/bicycle.jpg" alt="">
                		<div class="righthidden">
                    		<a href="" class="button"><div>VALI</div></a>
                    		<a href="" class="button"><div>TELLI</div></a>
                		</div>
                	</div>
              		<div class="middle">
              			<div>What is Lorem Ipsum?<br>
                    	Lorem Ipsum is simply dummy text of the printing
                    	and typesetting industry. Lorem Ipsum has been the industry's 
                    	standard dummy text ever since the 1500s, when an unknown printer
                    	took a galley of type and scrambled it to make a type specimen book.
                    	It has survived not only five centuries, but also the leap...
                		</div>
                  		<a href="" class="button"><div>VAATA</div></a>
            		</div>
              		<div class="right">
	                	<a href="" class="button"><div>VALI</div></a>
	                	<a href="" class="button"><div>TELLI</div></a>
            		</div>
            	</div>
            	<!-- container end-->
            	<div class="container">
                	<div class="innerContainer">
                		<img src="images/skyscraper.jpg" alt="">
                		<div class="righthidden">
                    		<a href="" class="button"><div>VALI</div></a>
                    		<a href="" class="button"><div>TELLI</div></a>
                		</div>
                	</div>
              		<div class="middle">
              			<div>What is Lorem Ipsum?<br>
                    	Lorem Ipsum is simply dummy text of the printing
                    	and typesetting industry. Lorem Ipsum has been the industry's 
                    	standard dummy text ever since the 1500s, when an unknown printer
                    	took a galley of type and scrambled it to make a type specimen book.
                    	It has survived not only five centuries, but also the leap...
                  		</div>
                  		<a href="" class="button"><div>VAATA</div></a>
            		</div>
              		<div class="right">
	                	<a href="" class="button"><div>VALI</div></a>
	                	<a href="" class="button"><div>TELLI</div></a>
            		</div>
            	</div>
            	<!-- container end-->
            </div>
            <!-- mainContent end-->
    	</div>
        <!-- sideAndMainContent end -->
    </div>
    <!-- allContentUnderHeader end-->
</body>

</html>