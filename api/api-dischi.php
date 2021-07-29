<?php

include __DIR__ . '/../db/dischi.php';


header('content-Type: application/json');
echo json_encode($dischi);