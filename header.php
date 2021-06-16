<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta name="description">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/base.js"></script>
    
	<?php wp_head(); ?>
</head>
<body>
    <div class="wrapper">
        <header>
            <h1><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt=""></a></h1>
            <div class="m-hm">
                <div class="m-hm__toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <nav class="m-spNav">
                <ul class="m-spNav__menuList">
                    <li class="m-spNav__menuListItem"><a href="#case">事例</a></li>
                    <li class="m-spNav__menuListItem"><a href="#reason">選ばれる理由</a></li>
                    <li class="m-spNav__menuListItem"><a href="#flow">解決までの流れ</a></li>
                    <li class="m-spNav__menuListItem"><a href="#price">費用</a></li>
                    <li class="m-spNav__menuListItem"><a href="#qa">よくあるご質問</a></li>
                    <li class="m-spNav__menuListItem"><a href="#cv">無料相談</a></li>
                </ul>
            </nav>
        </header>