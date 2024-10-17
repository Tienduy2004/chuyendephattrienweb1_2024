<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="main">
        <div class="left-column">
            <h1>GET HELP</h1>
            <div class="underline"></div>
            <ul>
                <li><a href="#">Company Policies & Procedures</a></li>
                <li><a href="#">Payment Options</a></li>
                <li><a href="#">Terms & Conditions</a></li>
                <li><a href="#">How do I Login</a></li>
                <li><a href="#">How Delivery works in Europe</a></li>
                <li><a href="#">Company Policies & Procedures</a></li>
                <li><a href="#">Payment Options</a></li>
                <li><a href="#">Terms & Conditions</a></li>
            </ul>
            <div class="input-holder clearfix">
                <input type="search" class="search-field" placeholder="SEARCH" value="" name="s" title="Search for:">
                <button type="submit" class="eltd-search-submit"><i
                        class="eltd-fa-solid fa-magnifying-glass "></i></button>
            </div>
        </div>
        <div class="right-column">
            <h3>1. RETURN ORDER TO STORE</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Amet dolor ipsum sit lorem, consectetuer adipiscing elit. Aenean commodo ligula
                eget dolor. Aenean massa. Cum sociis Theme natoque penatibus et magnis dis parturient.</p>

            <h3>2. RETURN A CUSTOM PRODUCT</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea com consequat. Duis Aliquam lorem ante.</p>

            <h3>3. GET A PRICE ADJUSTMENT</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur.</p>

            <h3>4. RETURN ITEMS ONLINE</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate. Aenean commodo ligula eget
                dolor.</p>

            <h3>5. TERMS OF USE</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Quisque rutrum. Aenean imperdiet. Phasellus viverra nulla ut metus varius
                laoreet.</p>

            <h3>6. FREE SHIPPING</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur.</p>

            <h3>7. RETURN ORDER TO SHOP</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur.</p>
            <h3>8. USE PAYPAL</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate dolor sit amet.</p>
        </div>
    </div>
