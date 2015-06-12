<?php

$queue = new SplQueue();

$queue->enqueue(1);
$queue->enqueue(2);

echo "Retorno fila: ",$queue->dequeue();