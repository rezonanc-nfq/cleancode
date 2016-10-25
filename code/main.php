<?php

$f = fopen("input.txt", r);
$x=[];
$y=[];
$z=[];
$w=[];
if ($f) {
    while (($l = fgets($f)) !== false) {
        $a=substr($l, 0, strpos($l, ','));
        $l=substr($l, strpos($l, ',')+1);
        $b=substr($l, 0, strpos($l, ','));
        $l=substr($l, strpos($l, ',')+1);
        $c=substr($l, 0, strpos($l, ','));
        $l=substr($l, strpos($l, ',')+1);
        $d=trim($l);
        $x[$d]= $x[$d] + $b * $c;
        $w[$d]+=1;
        $y[$a]=$d;
        $z[$a]=$b * $c;
    }
    fclose($f);
} else {
    print("File not found");
}

$o=false;
$e=array_keys($z);
while (!$o) {
    $o=true;
    for ($i=0;$i<count($e)-1;$i++) {
        $a1=ceil($z[$e[$i]]);
        $a2=ceil($z[$e[$i+1]]);
        if ($a1<$a2) {
            $Z=$e[$i];
            $e[$i]=$e[$i+1];
            $e[$i+1]=$Z;
            $o=false;
        }
    }
}
$u=[];
for ($i=0;$i<count($e);$i++) {
    $u[$e[$i]]=ceil($z[$e[$i]]);
}
$z=$u;

$o=false;
$e=array_keys($x);
while (!$o) {
    $o=true;
    for ($i=0;$i<count($e)-1;$i++) {
        $a1=floor($x[$e[$i]]);
        $a2=floor($x[$e[$i+1]]);
        if ($a1>$a2) {
            $Z=$e[$i];
            $e[$i]=$e[$i+1];
            $e[$i+1]=$Z;
            $o=false;
        }
    }
}
$u=[];
for ($i=0;$i<count($e);$i++) {
    $u[$e[$i]]=floor($x[$e[$i]]);
}
$x=$u;

for ($i=0;$i<20;$i++) print '-'; print "\n";
print "Criteria 1\n";
for ($i=0;$i<20;$i++) print '-'; print "\n";
for ($i=0;$i<count($z);$i++) {
    $j=array_keys($z)[$i];
    print $j . " " . $z[$j] . "\n";
}
for ($i=0;$i<20;$i++) print '-'; print "\n\n";
for ($i=0;$i<20;$i++) print '-'; print "\n";
print "Criteria 2\n";
for ($i=0;$i<20;$i++) print '-'; print "\n";
for ($i=0;$i<count($x);$i++) {
    $j=array_keys($x)[$i];
    print $j . " " . $x[$j] . "\n";
}
for ($i=0;$i<20;$i++) print '-'; print "\n\n";
for ($i=0;$i<20;$i++) print '-'; print "\n";
print "Totals 1\n";
for ($i=0;$i<20;$i++) print '-'; print "\n";
for ($i=0;$i<count($w);$i++) {
    $j=array_keys($w)[$i];
    print $j . " " . $w[$j] . "\n";
}
for ($i=0;$i<20;$i++) print '-'; print "\n\n";
for ($i=0;$i<20;$i++) print '-'; print "\n";
print "Where\n";
for ($i=0;$i<20;$i++) print '-'; print "\n";
for ($i=0;$i<count($y);$i++) {
    $j=array_keys($y)[$i];
    print $j . " " . $y[$j] . "\n";
}
for ($i=0;$i<20;$i++) print '-'; print "\n\n";
