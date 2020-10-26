<?
$stack = new SplStack();
$socket = stream_socket_server("tcp://0.0.0.0:1666");
while($connection = stream_socket_accept($socket,-1)){
	fwrite($connection,"hello! Add data to stack or write 0 for get last element\r\n");
	$data = fread($connection,1024);
    if($data==0){
		$lastMessage = $stack->pop();
		fwrite($connection,"\r\n Last element: ".$lastMessage);
	}
	else{
		$stack->push($data);
		fwrite($connection,"\r\n save!");
	}


    var_dump($data);
	fclose($connection);
}