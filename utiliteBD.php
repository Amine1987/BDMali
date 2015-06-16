<?php
    require_once ('jpgraph.php');   
    require_once ('jpgraph_pie.php');   
    require_once ('jpgraph_pie3d.php');   
      
      // Browser usage statistics, %  
      $data = array(29, 21, 18, 18, 4, 10);   
      $legends = array(   
      'Crome',   
      'IE',   
      'Firefox',   
      'Opera',   
      'Safari',   
    );   
      
      // Creating a new graphic   
      $graph = new PieGraph(600, 450);   
      $graph->SetShadow();   
      
      // Naming the graphic  
      $graph->title->Set('Browser usage statistics');   
      $graph->title->SetFont(FF_VERDANA, FS_BOLD, 14);   
      
      // Legend positioning (%/100)   
      $graph->legend->Pos(0.1, 0.2);   
      
      // Creating a 3D pie graphic   
      $p1 = new PiePlot3d($data);   
      
      // Setting the graphic center (%/100)   
      $p1->SetCenter(0.45, 0.5);   
      
      // Setting the ancle   
      $p1->SetAngle(30);   
      
      // Choosing the type   
      $p1->value->SetFont(FF_ARIAL, FS_NORMAL, 12);   
      
      // Setting legends for graphic segments  
      $p1->SetLegends($legends);   
      
      // Adding the diagram to the graphic  
      
      $graph->Add($p1);   
      // Showing graphic  
      
      $graph->Stroke();   