<?php
header("Content-Type: application/json");
echo file_get_contents("https://gamemonetize.com/feed.php?format=1&page=1");
