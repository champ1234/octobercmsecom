<?php

/* /var/www/html/install-master/themes/e-commerce/pages/login.htm */
class __TwigTemplate_312c9c8bf7f03b9c3e6b80dbd548c0d823b2215e085713f2bc65c27c4a1bfa92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"account_grid\">
\t\t\t   <div class=\" login-right\">
\t\t\t  \t<h3>REGISTERED CUSTOMERS</h3>
\t\t\t\t<p>If you have an account with us, please log in.</p>
\t\t\t\t<form>
\t\t\t\t  <div>
\t\t\t\t\t<span>Email Address<label>*</label></span>
\t\t\t\t\t<input type=\"text\"> 
\t\t\t\t  </div>
\t\t\t\t  <div>
\t\t\t\t\t<span>Password<label>*</label></span>
\t\t\t\t\t<input type=\"text\"> 
\t\t\t\t  </div>
\t\t\t\t  <a class=\"forgot\" href=\"#\">Forgot Your Password?</a>
\t\t\t\t  <input type=\"submit\" value=\"Login\">
\t\t\t    </form>
\t\t\t   </div>\t
\t\t\t    <div class=\" login-left\">
\t\t\t  \t <h3>NEW CUSTOMERS</h3>
\t\t\t\t <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
\t\t\t\t <a class=\"acount-btn\" href=\"register.html\">Create an Account</a>
\t\t\t   </div>
\t\t\t   <div class=\"clearfix\"> </div>
\t\t\t </div>
\t\t\t <div class=\"sub-cate\">
\t\t\t\t<div class=\" top-nav rsidebar span_1_of_left\">
\t\t\t\t\t<h3 class=\"cate\">CATEGORIES</h3>
\t\t <ul class=\"menu\">
\t\t<li class=\"item1\"><a href=\"#\">Curabitur sapien<img class=\"arrow-img\" src=\"images/arrow1.png\" alt=\"\"/> </a>
\t\t\t<ul class=\"cute\">
\t\t\t\t<li class=\"subitem1\"><a href=\"product.html\">Cute Kittens </a></li>
\t\t\t\t<li class=\"subitem2\"><a href=\"product.html\">Strange Stuff </a></li>
\t\t\t\t<li class=\"subitem3\"><a href=\"product.html\">Automatic Fails </a></li>
\t\t\t</ul>
\t\t</li>
\t\t<li class=\"item2\"><a href=\"#\">Dignissim purus <img class=\"arrow-img \" src=\"images/arrow1.png\" alt=\"\"/></a>
\t\t\t<ul class=\"cute\">
\t\t\t\t<li class=\"subitem1\"><a href=\"product.html\">Cute Kittens </a></li>
\t\t\t\t<li class=\"subitem2\"><a href=\"product.html\">Strange Stuff </a></li>
\t\t\t\t<li class=\"subitem3\"><a href=\"product.html\">Automatic Fails </a></li>
\t\t\t</ul>
\t\t</li>
\t\t<li class=\"item3\"><a href=\"#\">Ultrices id du<img class=\"arrow-img img-arrow\" src=\"images/arrow1.png\" alt=\"\"/> </a>
\t\t\t<ul class=\"cute\">
\t\t\t\t<li class=\"subitem1\"><a href=\"product.html\">Cute Kittens </a></li>
\t\t\t\t<li class=\"subitem2\"><a href=\"product.html\">Strange Stuff </a></li>
\t\t\t\t<li class=\"subitem3\"><a href=\"product.html\">Automatic Fails</a></li>
\t\t\t</ul>
\t\t</li>
\t\t<li class=\"item4\"><a href=\"#\">Cras iacaus rhone <img class=\"arrow-img img-left-arrow\" src=\"images/arrow1.png\" alt=\"\"/></a>
\t\t\t<ul class=\"cute\">
\t\t\t\t<li class=\"subitem1\"><a href=\"product.html\">Cute Kittens </a></li>
\t\t\t\t<li class=\"subitem2\"><a href=\"product.html\">Strange Stuff </a></li>
\t\t\t\t<li class=\"subitem3\"><a href=\"product.html\">Automatic Fails </a></li>
\t\t\t</ul>
\t\t</li>
\t\t\t\t<li>
\t\t\t<ul class=\"kid-menu\">
\t\t\t\t<li><a href=\"product.html\">Tempus pretium</a></li>
\t\t\t\t<li ><a href=\"product.html\">Dignissim neque</a></li>
\t\t\t\t<li ><a href=\"product.html\">Ornared id aliquet</a></li>
\t\t\t</ul>
\t\t</li>
\t\t<ul class=\"kid-menu \">
\t\t\t\t<li><a href=\"product.html\">Commodo sit</a></li>
\t\t\t\t<li ><a href=\"product.html\">Urna ac tortor sc</a></li>
\t\t\t\t<li><a href=\"product.html\">Ornared id aliquet</a></li>
\t\t\t\t<li><a href=\"product.html\">Urna ac tortor sc</a></li>
\t\t\t\t<li ><a href=\"product.html\">Eget nisi laoreet</a></li>
\t\t\t\t<li><a href=\"product.html\">Faciisis ornare</a></li>
\t\t\t\t<li class=\"menu-kid-left\"><a href=\"contact.html\">Contact us</a></li>
\t\t\t</ul>
\t\t
\t</ul>
\t\t\t\t\t</div>
\t\t\t\t<!--initiate accordion-->
\t\t<script type=\"text/javascript\">
\t\t\t\$(function() {
\t\t\t    var menu_ul = \$('.menu > li > ul'),
\t\t\t           menu_a  = \$('.menu > li > a');
\t\t\t    menu_ul.hide();
\t\t\t    menu_a.click(function(e) {
\t\t\t        e.preventDefault();
\t\t\t        if(!\$(this).hasClass('active')) {
\t\t\t            menu_a.removeClass('active');
\t\t\t            menu_ul.filter(':visible').slideUp('normal');
\t\t\t            \$(this).addClass('active').next().stop(true,true).slideDown('normal');
\t\t\t        } else {
\t\t\t            \$(this).removeClass('active');
\t\t\t            \$(this).next().stop(true,true).slideUp('normal');
\t\t\t        }
\t\t\t    });
\t\t\t
\t\t\t});
\t\t</script>
\t\t\t\t\t<div class=\" chain-grid menu-chain\">
\t   \t\t     \t\t<a href=\"single.html\"><img class=\"img-responsive chain\" src=\"images/wat.jpg\" alt=\" \" /></a>\t   \t\t     \t\t
\t   \t\t     \t\t<div class=\"grid-chain-bottom chain-watch\">
\t\t   \t\t     \t\t<span class=\"actual dolor-left-grid\">300\$</span>
\t\t   \t\t     \t\t<span class=\"reducedfrom\">500\$</span>  
\t\t   \t\t     \t\t<h6>Lorem ipsum dolor</h6>  \t\t     \t\t\t   \t\t     \t\t\t\t\t\t\t\t\t\t
\t   \t\t     \t\t</div>
\t   \t\t     \t</div>
\t   \t\t     \t <a class=\"view-all all-product\" href=\"product.html\">VIEW ALL PRODUCTS<span> </span></a> \t
\t\t\t</div>
\t\t\t  <div class=\"clearfix\"> </div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/install-master/themes/e-commerce/pages/login.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"account_grid\">
\t\t\t   <div class=\" login-right\">
\t\t\t  \t<h3>REGISTERED CUSTOMERS</h3>
\t\t\t\t<p>If you have an account with us, please log in.</p>
\t\t\t\t<form>
\t\t\t\t  <div>
\t\t\t\t\t<span>Email Address<label>*</label></span>
\t\t\t\t\t<input type=\"text\"> 
\t\t\t\t  </div>
\t\t\t\t  <div>
\t\t\t\t\t<span>Password<label>*</label></span>
\t\t\t\t\t<input type=\"text\"> 
\t\t\t\t  </div>
\t\t\t\t  <a class=\"forgot\" href=\"#\">Forgot Your Password?</a>
\t\t\t\t  <input type=\"submit\" value=\"Login\">
\t\t\t    </form>
\t\t\t   </div>\t
\t\t\t    <div class=\" login-left\">
\t\t\t  \t <h3>NEW CUSTOMERS</h3>
\t\t\t\t <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
\t\t\t\t <a class=\"acount-btn\" href=\"register.html\">Create an Account</a>
\t\t\t   </div>
\t\t\t   <div class=\"clearfix\"> </div>
\t\t\t </div>
\t\t\t <div class=\"sub-cate\">
\t\t\t\t<div class=\" top-nav rsidebar span_1_of_left\">
\t\t\t\t\t<h3 class=\"cate\">CATEGORIES</h3>
\t\t <ul class=\"menu\">
\t\t<li class=\"item1\"><a href=\"#\">Curabitur sapien<img class=\"arrow-img\" src=\"images/arrow1.png\" alt=\"\"/> </a>
\t\t\t<ul class=\"cute\">
\t\t\t\t<li class=\"subitem1\"><a href=\"product.html\">Cute Kittens </a></li>
\t\t\t\t<li class=\"subitem2\"><a href=\"product.html\">Strange Stuff </a></li>
\t\t\t\t<li class=\"subitem3\"><a href=\"product.html\">Automatic Fails </a></li>
\t\t\t</ul>
\t\t</li>
\t\t<li class=\"item2\"><a href=\"#\">Dignissim purus <img class=\"arrow-img \" src=\"images/arrow1.png\" alt=\"\"/></a>
\t\t\t<ul class=\"cute\">
\t\t\t\t<li class=\"subitem1\"><a href=\"product.html\">Cute Kittens </a></li>
\t\t\t\t<li class=\"subitem2\"><a href=\"product.html\">Strange Stuff </a></li>
\t\t\t\t<li class=\"subitem3\"><a href=\"product.html\">Automatic Fails </a></li>
\t\t\t</ul>
\t\t</li>
\t\t<li class=\"item3\"><a href=\"#\">Ultrices id du<img class=\"arrow-img img-arrow\" src=\"images/arrow1.png\" alt=\"\"/> </a>
\t\t\t<ul class=\"cute\">
\t\t\t\t<li class=\"subitem1\"><a href=\"product.html\">Cute Kittens </a></li>
\t\t\t\t<li class=\"subitem2\"><a href=\"product.html\">Strange Stuff </a></li>
\t\t\t\t<li class=\"subitem3\"><a href=\"product.html\">Automatic Fails</a></li>
\t\t\t</ul>
\t\t</li>
\t\t<li class=\"item4\"><a href=\"#\">Cras iacaus rhone <img class=\"arrow-img img-left-arrow\" src=\"images/arrow1.png\" alt=\"\"/></a>
\t\t\t<ul class=\"cute\">
\t\t\t\t<li class=\"subitem1\"><a href=\"product.html\">Cute Kittens </a></li>
\t\t\t\t<li class=\"subitem2\"><a href=\"product.html\">Strange Stuff </a></li>
\t\t\t\t<li class=\"subitem3\"><a href=\"product.html\">Automatic Fails </a></li>
\t\t\t</ul>
\t\t</li>
\t\t\t\t<li>
\t\t\t<ul class=\"kid-menu\">
\t\t\t\t<li><a href=\"product.html\">Tempus pretium</a></li>
\t\t\t\t<li ><a href=\"product.html\">Dignissim neque</a></li>
\t\t\t\t<li ><a href=\"product.html\">Ornared id aliquet</a></li>
\t\t\t</ul>
\t\t</li>
\t\t<ul class=\"kid-menu \">
\t\t\t\t<li><a href=\"product.html\">Commodo sit</a></li>
\t\t\t\t<li ><a href=\"product.html\">Urna ac tortor sc</a></li>
\t\t\t\t<li><a href=\"product.html\">Ornared id aliquet</a></li>
\t\t\t\t<li><a href=\"product.html\">Urna ac tortor sc</a></li>
\t\t\t\t<li ><a href=\"product.html\">Eget nisi laoreet</a></li>
\t\t\t\t<li><a href=\"product.html\">Faciisis ornare</a></li>
\t\t\t\t<li class=\"menu-kid-left\"><a href=\"contact.html\">Contact us</a></li>
\t\t\t</ul>
\t\t
\t</ul>
\t\t\t\t\t</div>
\t\t\t\t<!--initiate accordion-->
\t\t<script type=\"text/javascript\">
\t\t\t\$(function() {
\t\t\t    var menu_ul = \$('.menu > li > ul'),
\t\t\t           menu_a  = \$('.menu > li > a');
\t\t\t    menu_ul.hide();
\t\t\t    menu_a.click(function(e) {
\t\t\t        e.preventDefault();
\t\t\t        if(!\$(this).hasClass('active')) {
\t\t\t            menu_a.removeClass('active');
\t\t\t            menu_ul.filter(':visible').slideUp('normal');
\t\t\t            \$(this).addClass('active').next().stop(true,true).slideDown('normal');
\t\t\t        } else {
\t\t\t            \$(this).removeClass('active');
\t\t\t            \$(this).next().stop(true,true).slideUp('normal');
\t\t\t        }
\t\t\t    });
\t\t\t
\t\t\t});
\t\t</script>
\t\t\t\t\t<div class=\" chain-grid menu-chain\">
\t   \t\t     \t\t<a href=\"single.html\"><img class=\"img-responsive chain\" src=\"images/wat.jpg\" alt=\" \" /></a>\t   \t\t     \t\t
\t   \t\t     \t\t<div class=\"grid-chain-bottom chain-watch\">
\t\t   \t\t     \t\t<span class=\"actual dolor-left-grid\">300\$</span>
\t\t   \t\t     \t\t<span class=\"reducedfrom\">500\$</span>  
\t\t   \t\t     \t\t<h6>Lorem ipsum dolor</h6>  \t\t     \t\t\t   \t\t     \t\t\t\t\t\t\t\t\t\t
\t   \t\t     \t\t</div>
\t   \t\t     \t</div>
\t   \t\t     \t <a class=\"view-all all-product\" href=\"product.html\">VIEW ALL PRODUCTS<span> </span></a> \t
\t\t\t</div>
\t\t\t  <div class=\"clearfix\"> </div>", "/var/www/html/install-master/themes/e-commerce/pages/login.htm", "");
    }
}
