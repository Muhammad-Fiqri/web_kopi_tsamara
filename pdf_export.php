
    <?php session_start();
        $header = array('Kode Alternatif', 'Alternatif', 'C1', 'C2', 'C3', 'C4', 'C5', 'V1', 'Rank');
        $data = array();

        require('fpdf186/fpdf.php');

        class PDF extends FPDF
        {

            function LoadData($data)
            {   
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "db_kopi_tsamarah";
        
                $conn = new mysqli($servername, $username, $password, $dbname);
        
                $sql = 'SELECT * FROM nilai_alternatif';
                $result = $conn->query($sql);
                $row_array = array();

                while($row = $result->fetch_assoc()) 
                {
                    array_push($row_array,$row['kode_alternatif'],$row['alternatif'],$row['c1'],$row['c2'],$row['c3'],$row['c4'],$row['c5'],$row['v1'],$row['rank']);
                    array_push($data,$row_array);
                    $row_array = array();
                }

                $conn->close();
                return $data;
            }


            // Simple table
            function BasicTable($header, $data)
            {
                // Header
                foreach($header as $col)
                    if ($col == 'C1' ||$col == 'C2' ||$col == 'C3' ||$col == 'C4'||$col == 'C5'||$col == 'V1'||$col == 'Rank') {
                        $this->Cell(12,7,$col,1);
                    } elseif ($col == "Kode Alternatif") {
                        $this->Cell(30,7,$col,1);
                    } else {
                        $this->Cell(80,7,$col,1);
                    }
                $this->Ln();
                // Data

                foreach($data as $row)
                {
                    $counter = 1;
                    foreach($row as $col) {
                        if ($counter == 1) {
                            $this->Cell(30,7,$col,1);
                        } elseif ($counter == 2) {
                            $this->Cell(80,7,$col,1);
                        } else {
                            $this->Cell(12,7,$col,1);
                        }
                        $counter++;
                    }
                    $this->Ln();
                }
            }
        }

        $pdf = new PDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial','',12);
        $data = $pdf->LoadData($data);
        /*foreach($data as $i)
        {
            foreach($i as $j)
            {
                echo $j;
            }
            echo '<br>';
        }*/
        $pdf->BasicTable($header,$data);
        $pdf->Output();
    ?>