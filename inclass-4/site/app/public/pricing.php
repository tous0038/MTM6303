<?php 
  //Require the Session Start function
  require_once "includes/session-include.php"; 
  //Added Page title to be stored in the $_SESSION variable
  $_SESSION["page-title"] = "Pricing Page";
  $_SESSION["current-page"] = "pricing";
  //Includes Header
  include "includes/header.php";
?>
<!-- Main content of the page -->
<div class="section-container">
    <div class="container">
        <div class="row section-container-spacer">
            <div class="col-xs-12">
                <div class="text-center">
                    <h1>Pricing</h1>
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <p>Adipiscing vitae proin sagittis nisl rhoncus mattis. Bibendum enim facilisis gravida neque convallis
                        a cras semper auctor. Sit amet risus nullam eget felis eget. Metus dictum at tempor commodo ullamcorper
                        a lacus vestibulum. Sit amet facilisis magna etiam tempor orci eu. Eleifend mi in nulla posuere.
                        Et magnis dis parturient montes nascetur ridiculus mus mauris vitae. 
                    </p>
                </div>
            </div>
        </div>


        <?php

        $title_num = 1;
        $link_start = "https://www.behance.net/";


        

        //Array
        $cards = [
            "card_1" => [
                "title" => "Personal",
                "para" => "18 <span>$/MO</span>",
                "features" => "<li>Gravida arcu ac tortor dignissim convallis aenean</li>
                <li>Gravida arcu ac tortor dignissim convallis aenean</li>
                <li>Gravida arcu ac tortor dignissim</li>",
                "link" => $link_start . "/php/php_arrays.asp"
            ],
            "card_2" => [
                "title" => "Profesional",
                "para" => "28 <span>$/MO</span>",
                "features" => "<li>Gravida arcu ac tortor dignissim convallis aenean</li>
                <li>Gravida arcu ac tortor dignissim convallis aenean</li>
                <li>Gravida arcu ac tortor dignissim</li>
                <li>Gravida arcu ac tortor dignissim convallis aenean</li>",
                "link" => $link_start . "/php/php_arrays.asp"
            ],
            "card_3" => [

                "title" => "Business",
                "para" => "48 <span>$/MO</span>", 
                "features"=> "<li>Gravida arcu ac tortor dignissim convallis aenean</li>
                <li>Gravida arcu ac tortor dignissim convallis aenean</li>
                <li>Gravida arcu ac tortor dignissim</li>
                <li>Gravida arcu ac tortor dignissim convallis aenean</li>
                <li>Gravida arcu ac tortor dignissim</li>",
                "link" => $link_start . "/php/php_arrays.asp"
            ]

        ];

        ?> 
            <div class="row">
            <?php 
                //Loop
                foreach ($cards as $card_key => $card_value) {
                $btn_text = "Subscribe"; 
                
                //Change the style of each column
                $style = "";
                switch($title_num) {
                    case 1:
                        $style =  "pricing-primary";
                    break;
                    case 2:
                        $style =  "pricing-info";
                    break;
                    case 3:
                        $style=  "pricing-secondary";
                    break;
                    default:
                    $style = "pricing-secondary";
                } 
            ?>
                <div class="col-md-4">
                    <div class="pricing-card card 
                        <?php /*Style's the container class*/ echo $style; ?>
                        " id="<?php echo $card_key ?>">

                        <h3 class="card-title"><?php echo $card_value['title']; ?></h3>
                        <?php
                        echo '<h6 class="price card-text">'. substr(ucfirst($card_value['para']), 0) .'</h6>';
                        ?>
                    </div>
                    <div class="pricing-features">
                    <?php echo '<ul class="features">'. substr(ucfirst($card_value['features']), 0) .'</ul>';
                        ?>
                        <a href="<?php echo $card_value['link']?>" class="btn btn-primary"><?php echo $btn_text ?></a>
                    </div>
                </div>
        <?php $title_num++;}?>
    </div>

</div>
<div> 
    <br>
</div>


<!-- Includes Footer -->
<?php 
include "includes/footer.php";
?>