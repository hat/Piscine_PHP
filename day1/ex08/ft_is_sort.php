<?PHP
function ft_is_sort($arg_1)
{
	$sorted = array_values($arg_1);
	sort($sorted);
	if ($arg_1 == $sorted)
		return 1;
	if ($arg_1 == array_reverse($sorted))
		return 1;
	return 0;
}
?>