<?php
fscanf(STDIN, "%d", $N);

for ($i = 1; $i <= $N; $i++) {
    if ($i % 2 != 0) {
        echo $i . "\n";
    }
}
?>
