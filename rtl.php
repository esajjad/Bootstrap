	$res = file_get_contents('bootstrap.css');

	$res = str_replace(array(
							': right', ': left', 'axxxxx',
							'-right', '-left', 'bxxxxx',
							' right:', ' left:', 'cxxxxx',
						),
						array(
							'axxxxx', ': right', ': left',
							'bxxxxx', '-right', '-left',
							'cxxxxx', ' right:', ' left:',
						),
						$res);
	
	file_put_contents('bootstrap-rtl.css',$res);
