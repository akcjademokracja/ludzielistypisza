<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><? if ($wpis) { echo $wpis['subject'].' - Piszemy do Prezydenta Andrzeja Dudy w obronie niezależności sądów'; } else { ?>Piszemy do Prezydenta Andrzeja Dudy w obronie niezależności sądów <? }; ?></title>
<meta name="description" content="<? if ($wpis) { ?> <?=$wpis['firstname']?> pisze do prezydenta Andrzeja Dudy: <?=addslahes($wpis['body'])?><? } else { $ilesend=$ilemails/100*100; ?>Już ponad <?=$ilesend?> osób wysłało e-maila do Prezydenta ze swoją wizją reformy sądownictwa! Tu możesz je przeczytać.
 A Ty, jakich sądów chcesz? Kliknij w link, aby przejść na stronę i wysłać wiadomość do Andrzeja Dudy!<? }; ?>" />
<meta name="keywords" content="strony www, projektowanie www, witryny internetowe, twórcy stron internetowych" />
<meta property="og:image" content="https://www.lancuchswiatla.pl/reforma.png" />
<meta property="og:url" content="https://www.lancuchswiatla.pl" />
<meta property="og:type" content="website" />
<meta property="og:title" content="<? if ($wpis) { echo $wpis['subject'].' - Piszemy do Prezydenta Andrzeja Dudy w obronie niezależności sądów'; } else { ?>Piszemy do Prezydenta Andrzeja Dudy w obronie niezależności sądów <? }; ?>" />
<meta property="og:description" content="<? if ($wpis) { ?> <?=$wpis['firstname']?> pisze do prezydenta Andrzeja Dudy: <?=addslahes($wpis['body'])?><? } else { $ilesend=$ilemails/100*100; ?>Już ponad <?=$ilesend?> osób wysłało e-maila do Prezydenta ze swoją wizją reformy sądownictwa! Tu możesz je przeczytać.
 A Ty, jakich sądów chcesz? Kliknij w link, aby przejść na stronę i wysłać wiadomość do Andrzeja Dudy!<? }; ?>" />
<meta property="og:locale" content="pl_PL" />
<meta content="PL" http-equiv="Content-Language"/>
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="/manifest.json">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="theme-color" content="#ffffff">
<meta property="fb:app_id" content="1463298177226781" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


    <title>
</title>
 
 
 
 </head>
<body>
   
    <?= $this->Flash->render() ?>
    <div class="container-fluid">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
