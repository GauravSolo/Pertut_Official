<?php
    include 'config.php';

    $sql = "SELECT * FROM users";
    
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        $i = 1;
        $data = '';
      if(mysqli_num_rows($result) > 0)
      {
        while($rows = mysqli_fetch_assoc($result)){  

              $data .= "<tr>
                                <th scope='row'>".$i++."</th>
                                <td>".$rows['username']."</td>
                                <td>".$rows['email']."</td>
                                <td>".$rows['phone']."</td>
                                <td>".$rows['category']."</td>
                                <td>".$rows['message']."</td>
                                <td class='text-center text-danger delete' style='cursor:pointer;' data-id='".$rows['id']."'><i data-id='".$rows['id']."' class='fas fa-trash'></i></td>
                                
                        </tr>";

        }
      }
      echo json_encode(array('res'=>$data,'error'=>'0'));
   }else{
    echo json_encode(array('res'=>'Couldnt fetch Data','error'=>'1'));
    } 
?>