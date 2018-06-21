<html>
<head>
@php
  $mbox = imap_open ("{imap.gmail.com:993/imap/ssl}INBOX", "email@gmail.com", "senhaaqui");
  if ($mbox) {
    $total_de_mensagens = imap_num_msg($mbox);
  }
@endphp
</head>

<body>
@php
echo "<h1>Mailboxes</h1>\n";
$folders = imap_listmailbox($mbox, "{imap.gmail.com:993/imap/ssl}", "*");

if ($folders == false) {
  echo "Call failed<br />\n";
} else {
  foreach ($folders as $val) {
      echo $val . "<br />\n";
  }
}

echo "<h1>Headers in INBOX</h1>\n";
$headers = imap_headers($mbox);

if ($headers == false) {
  echo "Call failed<br />\n";
} else {
  foreach ($headers as $val) {
      echo $val . "<br />\n";
  }
}
  imap_close($mbox);
@endphp

</body>
</html>
