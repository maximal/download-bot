<?php

return [
	'description' => 'Questo bot scarica video da diversi servizi e social network: ' .
		PHP_EOL . PHP_EOL .
		'Contatto: @maximal',

	'start' => 'Invia il link del video alla chat, il bot lo scaricherà e te lo rispedirà.',
	'help' =>
		'Questo bot ti aiuta a scaricare video da diversi servizi e social network: ' .
		'YouTube, TikTok, Instagram, Twitter, VK, e molti altri.' .
		PHP_EOL . PHP_EOL .
		'Il bot è stato creato da @maximal a sua immagine.',
	'unknown_command' => 'Commando sconosciuto.',
	'only_private_chats' => 'Il bot funziona solo nelle chat private.',
	'only_links' => 'Il bot accetta solo link.',
	'long_link' => 'Questo link è troppo lungo, non riesco a elaborarlo :-(',
	'working' => 'Ci sto lavorando...',
	'sending' => 'Invio video...',
	'too_big_video' => 'Telegram non consente ai bot di inviare grandi video, mi dispiace :-(',
	'link_instead_of_video' =>
		'Telegram non consente ai bot di inviare video più grandi di %d MB, quindi ecco il link per il download:' .
		PHP_EOL . PHP_EOL .
		'%s',
	'not_public_page' => 'Questa pagina non è disponibile pubblicamente, mi dispiace :-(',
	'unsupported_link' => 'Questo servizio non è ancora supportato, mi dispiace :-(',
	'private_video' => 'Questa pagina è privata, non riesco a elaborarla :-(',
	'download_failed' =>
		'Non siamo riusciti a scaricare questo video :-('
		. PHP_EOL .
		'Ma stai benissimo oggi!',
	'thank_you' => 'Grazie mille 🙏',
];
