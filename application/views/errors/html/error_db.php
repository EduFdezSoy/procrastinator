<?php

/* 
 * The MIT License
 *
 * Copyright 2016 EduFdezSoy, (Eduardo Fernandez).
 *
 * @link https://twitter.com/EduFdezSoy
 * @mail edufdezsoy@gmail.com
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Procrastinator - Database Error</title>
<style type="text/css">

@import 'https://fonts.googleapis.com/css?family=Fjalla+One|Raleway:200';

::selection { background-color: #E13300; color: white; }
::-moz-selection { background-color: #E13300; color: white; }

body { background-color: #fff; margin: 40px; font: 13px/20px normal Helvetica, Arial, sans-serif; color: #4F5155; }

a { color: #003399; background-color: transparent; font-weight: normal; }

h1 { color: #444;  background-color: transparent; border-bottom: 1px solid #D0D0D0; font-size: 19px; font-weight: normal; margin: 0 0 14px 0; padding: 14px 15px 10px 15px; }

code { font-family: Consolas, Monaco, Courier New, Courier, monospace; font-size: 12px; background-color: #f9f9f9; border: 1px solid #D0D0D0; color: #002166; display: block; margin: 14px 0 14px 0; padding: 12px 10px 12px 10px; }

#container { margin: 10px; border: 1px solid #D0D0D0; box-shadow: 0 0 8px #D0D0D0; }

p { margin: 12px 15px 12px 15px; }

.raton-senala { cursor:pointer; }

#titulo-login { font-family: 'Fjalla One', sans-serif; font-size: 60px; text-align:center; margin-bottom: 0px; margin-top: 25px; }

a.nounderline:link { text-decoration:none; }

</style>
</head>
<body>
	<div id="container">
        <div class="raton-senala">
            <a href="#" class="nounderline">
                <div id="titulo-login"><?php echo strtoupper($heading); ?></div>
            </a>
        </div>
	    <?php echo $message; ?>
	</div>
</body>
</html>
