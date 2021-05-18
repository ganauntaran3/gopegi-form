<?php

$c = mysqli_connect(
    'localhost',
    'root',
    '',
    'gopegi'
);

if (!$c) throw new Error("Can't estabilish connection!");