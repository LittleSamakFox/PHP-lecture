<?PHP
  extract(array_merge(($HTTP_GET_VARS,$HTTP_POST_VARS));
  extract($_POST);
  $answer=$post;
  print $answer;
?>
