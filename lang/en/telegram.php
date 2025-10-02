<?php

return [
	'description' => 'This bot downloads videos from different services and social networks: ' .
		PHP_EOL . PHP_EOL .
		'Contact: @maximal',

	'start' => 'Send the video link to the chat, bot will download it and send you back.',
	'help' =>
		'This bot helps you to download videos from different services and social networks: ' .
		'YouTube, TikTok, Instagram, VK, Twitter, and many others.' .
		PHP_EOL . PHP_EOL .
		'The bot was created by @maximal in his own image.',
	'unknown_command' => 'Unknown command.',
	'only_private_chats' => 'The bot works in private chats only, not the group ones.',
	'only_links' => 'The bot accepts links only.',
	'long_link' => 'This link is too long, I cannot process this :-(',
	'working' => 'Working on it...',
	'sending' => 'Sending video...',
	'too_big_video' => 'Telegram does not allow bots to send big videos, sorry :-(',
	'link_instead_of_video' =>
		'Telegram does not allow bots to send videos larger than %d MB, so here’s the download link:' .
		PHP_EOL . PHP_EOL .
		'%s',
	'not_public_page' => 'This page is not available publicly, sorry :-(',
	'unsupported_link' => 'This service is not supported yet, sorry :-(',
	'private_video' => 'This page is private, I cannot process it :-(',
	'download_failed' =>
		'We cannot download this video :-('
		. PHP_EOL .
		'But you look awesome today!',
	'thank_you' => 'Thank you 🙏',
];
