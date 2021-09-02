<?php
	
	$host = "127.0.0.1";
	$porta = 3000;

	set_time_limit(0);

	$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP) or die("Morri (com a voz da formiguinha)");
	$result = socket_bind($socket, $host, $porta) or die("Morri (com a voz da formiguinha)");

	while(true) {
		$result = socket_listen($socket, 3) or die("Morri (com a voz da formiguinha)");
		$accept = socket_accept($socket) or die("Morri (com a voz da formiguinha)");
		$input = socket_read($accept, 1024) or die("Morri (com a voz da formiguinha)");
		$output = 'Mensagem recebida!';
		socket_write($accept, $output, strlen ($output)) or die("Morri (com a voz da formiguinha)");
	}

	socket_close($accept);
	socket_close($socket);

?>
