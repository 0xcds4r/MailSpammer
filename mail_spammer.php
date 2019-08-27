<?php

declare(strict_types=1);

/*
 * @param string $mail = 'example@gmail.com'
 * @param string $title = 'SPAM!'
 * @param string $text = 'SPAM'
 * @param int $count = 10
 * @param int $delay = 2000
 *
 * @return boolean
 */
function mailSpam(string $mail = 'example@gmail.com', string $title = 'SPAM!', string $text = 'SPAM', int $count = 10, int $delay = 2000) : bool
{
    while($count > 0){
        mail($mail, $title, $text);
	$count--;
	
	sleep($delay);
    }
    return true;
}

// Using: mailSpam(...args)
?>
