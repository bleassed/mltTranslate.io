<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel = "stylesheet" href="main_css/css.css">
    <title>Document</title>
</head>
<body>

<!-- PHP -->

<?php
session_start();
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);

if(isset($_POST['method'])){
    $inp = $_POST['inp'];
    $method = $_POST['method'];

    if(!$method || (!$inp && $inp != '0')){
        $error = "...";
    }else{
        switch($method){

            case 'md4':
                $result = hash('md4', $inp);
                break;

            case 'md5':
                $result = md5($inp);
                break;

            case 'ripemd128':
                $result = hash('ripemd128', $inp);
                break;
                
            case 'ripemd160':
                $result = hash('ripemd160', $inp);
                break;

            case 'ripemd256':
                $result = hash('ripemd256', $inp);
                break;

            case 'adler32':
                $result = hash('adler32', $inp);
                break;

            case 'crc32 ':
                $result = hash('crc32 ', $inp);
                break;
                
            case 'gost':
                $result = hash('gost', $inp);
                break;

            case 'sha1':
                $result = hash('sha1', $inp);
                break;

                default:
                $result = "введите данные";
                break;
 

    }


    }




}


















?>

<!-- PHP -->

<div class = "wrapper">

<header>
    <div class = "header_content">
        <h1 class = "header_title"> M . TRANSLATOR</h1>
        <button class = "theme_btn"><i class="fa-solid fa-lightbulb fa-lg" style="color: #4643ff;"></i></button>
    </div>
</header>

<!-- <main> -->
<aside>
    <div class = "container_list">
        <ul class = "tags_list">
            <a class = "" href ="https://github.com/bleassed"><li class = "tag_item"> My GitHub</li></a>
        </ul>
    </div>
</aside>

<main>
<div class = "section">
   <div class = "main_content">

    <div class = "article_container">
        <article class = "article">multi translator - stores in itself used encryption and conversion methods, which are always not at hand when they are urgently needed. For example, calculate the md5 hash or decode the url. And finding a good implementation on the Internet is often very difficult.</article>
    </div>

        <form class = "form" action= "" method="post">

            <div class = "container_for_small_display">
                <select class = "select" name ="method">
                <option class = "option" value="md4">md4</option>
                <option class = "option" value="md5">md5</option>
                <option class = "option" value="ripemd128">ripemd128</option>
                <option class = "option" value="ripemd160">ripemd160</option>
                <option class = "option" value="ripemd256">ripemd256</option>
                <option class = "option" value="adler32">adler32</option>
                <option class = "option" value="crc32">crc32</option>
                <option class = "option" value="gost">gost</option>
                <option class = "option" value="sha1  ">sha1</option>

                </select>
                <button class = "btn1 btn" type ="submit" value="answer" >answer</button>
            </div>  
            <input class = "input input_dextop" type = "text" name = "inp" id = "inp" placeholder ="введите данные">
            <div class = "answer_place">
                <button class ="copy_but" id ="copy_text_btn"><i class="fa-regular fa-copy"></i></button>
            <?php
            
            if(isset($error)){
                echo "<div class = 'answer'>$error</div>";
                unset($error);
            }else{
                echo "<div class = 'answer' id ='copy_text'>$result</div>";
            }

            ?>
            </div>
            <div class = "btn_container">
            <button class = "btn2 btn" type ="submit" name = "submit">answer</button>
            </div>

        </form>
        <div class = "article_container">
            <article class = "article article3">An MD5 hash is NOT encryption. It is simply a fingerprint of the given input. However, it is a one-way transaction and as such it is almost impossible to reverse engineer an MD5 hash to retrieve the original string.</article>
        </div>
   </div>
</div>
</main>

<footer>
    <div class = "footer_content">footer here (empty)</div>
</footer>



</div>

<script src="main_js/main.js"></script>
</body>
</html>