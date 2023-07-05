
        if($id==1){
          $c11=$c1;
          $c12=$c2;
          $c13=$c3;
          $c14=$c4;
          $c15=$c5;
        }
        if($id==2){
          $c21=$c1;
          $c22=$c2;
          $c23=$c3;
          $c24=$c4;
          $c25=$c5;
        }
        if($id==3){
          $c31=$c1;
          $c32=$c2;
          $c33=$c3;
          $c34=$c4;
          $c35=$c5;
        }
        if($id==4){
          $c41=$c1;
          $c42=$c2;
          $c43=$c3;
          $c44=$c4;
          $c45=$c5;
        }
        if($id==5){
          $c51=$c1;
          $c52=$c2;
          $c53=$c3;
          $c54=$c4;
          $c55=$c5;
        }
        if($id==6){
          $c61=$c1;
          $c62=$c2;
          $c63=$c3;
          $c64=$c4;
          $c65=$c5;

            $x1 = sqrt( pow(  $c11, 2)+pow(  $c12, 2)+pow(  $c13, 2) + pow(  $c14, 2) + pow(  $c15, 2));
            $x2 = sqrt( pow(  $c21, 2)+pow(  $c22, 2)+pow(  $c23, 2) + pow(  $c24, 2) + pow(  $c25, 2));
            $x3 = sqrt( pow(  $c31, 2)+pow(  $c32, 2)+pow(  $c33, 2) + pow(  $c34, 2) + pow(  $c35, 2));
            $x4 = sqrt( pow(  $c41, 2)+pow(  $c42, 2)+pow(  $c43, 2) + pow(  $c44, 2) + pow(  $c45, 2));
            $x5 = sqrt( pow(  $c51, 2)+pow(  $c52, 2)+pow(  $c53, 2) + pow(  $c54, 2) + pow(  $c55, 2));
            $x6 = sqrt( pow(  $c61, 2)+pow(  $c62, 2)+pow(  $c63, 2) + pow(  $c64, 2) + pow(  $c65, 2));
            $x11 = 5*$x1/$c11;
            $x12 = 4*$x1/$c12;
            $x13 = 3*$x1/$c13;
            $x14 = 4*$x1/$c14;
            $x15 = 5*$x1/$c15;

            

            $x21 = 5*$x2/$c21;
            $x22 = 4*$x2/$c22;
            $x23 = 3*$x2/$c23;
            $x24 = 4*$x2/$c24;
            $x25 = 5*$x2/$c25;



            $x31 = 5*$x3/$c31;
            $x32 = 4*$x3/$c32;
            $x33 = 3*$x3/$c33;
            $x34 = 4*$x3/$c34;
            $x35 = 5*$x3/$c35;




            $x41 = 5*$x4/$c41;
            $x42 = 4*$x4/$c42;
            $x43 = 3*$x4/$c43;
            $x44 = 4*$x4/$c44;
            $x45 = 5*$x4/$c45;



            $x51 = 5*$x5/$c51;
            $x52 = 4*$x5/$c52;
            $x53 = 3*$x5/$c53;
            $x54 = 4*$x5/$c54;
            $x55 = 5*$x5/$c55;

            $x61 = 5*$x6/$c61;
            $x62 = 4*$x6/$c62;
            $x63 = 3*$x6/$c63;
            $x64 = 4*$x6/$c64;
            $x65 = 5*$x6/$c65;

            $x111 = [$x11,$x21,$x31,$x41,$x51,$x61];
            $y11 = max($x111);
            $y12 = min($x111);
            
            $x112 = [$x12,$x22,$x32,$x42,$x25,$x62];
            $y21 = max($x112);
            $y22 = min($x112);
            
            $x113 = [$x13,$x23,$x33,$x43,$x53,$x63];
            $y31 = max($x113);
            $y32 = min($x113);
            
            $x114 = [$x14,$x24,$x34,$x44,$x54,$x64];
            $y41 = max($x114);
            $y42 = min($x114);

            $x115 = [$x15,$x25,$x35,$x45,$x55,$x65];
            $y51 = max($x115);
            $y52 = min($x115);

            $d11 = sqrt( pow($x11-$y11 , 2)+pow($x21-$y21 , 2)+pow($x31-$y31 , 2)+pow($x41-$y41 , 2)+pow($x51-$y51 , 2));
            $d12 = sqrt( pow($x12-$y11 , 2)+pow($x22-$y21 , 2)+pow($x32-$y31 , 2)+pow($x42-$y41 , 2)+pow($x52-$y51 , 2));
            $d13 = sqrt( pow($x13-$y11 , 2)+pow($x23-$y21 , 2)+pow($x33-$y31 , 2)+pow($x43-$y41 , 2)+pow($x53-$y51 , 2));
            $d14 = sqrt( pow($x14-$y11 , 2)+pow($x24-$y21 , 2)+pow($x34-$y31 , 2)+pow($x44-$y41 , 2)+pow($x54-$y51 , 2));
            $d15 = sqrt( pow($x15-$y11 , 2)+pow($x25-$y21 , 2)+pow($x35-$y31 , 2)+pow($x45-$y41 , 2)+pow($x55-$y51 , 2));
            $d16 = sqrt( pow($x16-$y11 , 2)+pow($x26-$y21 , 2)+pow($x36-$y31 , 2)+pow($x46-$y41 , 2)+pow($x65-$y51 , 2));

            $d21 = sqrt( pow($x11-$y12 , 2)+pow($x21-$y22 , 2)+pow($x31-$y32 , 2)+pow($x41-$y42 , 2)+pow($x51-$y52 , 2));
            $d22 = sqrt( pow($x12-$y12 , 2)+pow($x22-$y22 , 2)+pow($x32-$y32 , 2)+pow($x42-$y42 , 2)+pow($x52-$y52 , 2));
            $d23 = sqrt( pow($x13-$y12 , 2)+pow($x23-$y22 , 2)+pow($x33-$y32 , 2)+pow($x43-$y42 , 2)+pow($x53-$y52 , 2));
            $d24 = sqrt( pow($x14-$y12 , 2)+pow($x24-$y22 , 2)+pow($x34-$y32 , 2)+pow($x44-$y42 , 2)+pow($x54-$y52 , 2));
            $d25 = sqrt( pow($x15-$y12 , 2)+pow($x25-$y22 , 2)+pow($x35-$y32 , 2)+pow($x45-$y42 , 2)+pow($x55-$y52 , 2));
            $d26 = sqrt( pow($x16-$y12 , 2)+pow($x26-$y22 , 2)+pow($x36-$y32 , 2)+pow($x46-$y42 , 2)+pow($x56-$y52 , 2));

            $v1 = $d21/($d21+$d11);
            $v2 = $d22/($d22+$d12);
            $v3 = $d23/($d23+$d13);
            $v4 = $d24/($d24+$d14);
            $v5 = $d25/($d25+$d15);
            $v6 = $d26/($d26+$d16);
            
            $sql = 'UPDATE nilai_alternatif  SET v1 = $v1 WHERE id = 1;UPDATE nilai_alternatif  SET v2 = $v2 WHERE id = 2;UPDATE nilai_alternatif  SET v3 = $v3 WHERE id = 3;UPDATE nilai_alternatif  SET v4 = $v4 WHERE id = 4;UPDATE nilai_alternatif  SET v5 = $v5 WHERE id = 5;UPDATE nilai_alternatif  SET v6 = $v6 WHERE id = 6;';
                  //$result1 = 

            $result = $conn->query($sql);


        }