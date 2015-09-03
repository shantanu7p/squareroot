 <?php
class sqrtclass{

    function squareroot($num)
   {
 
         $previousious;
         $counter = 0;
         $temp = $num;
         $countermax = 1000;
         $s = 1;

         if($temp < 0)
          {
            return -1;
          }

         if(is_string($temp))
          {
            return -1;
          }
         
         if(func_num_args() != 1)
          {
            return -1;
          }

         if(preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $temp))
          {
            return -1;
          }

         if($temp == 0)
          { 
            return 0;
          }
            
         for($counter = 0 ; $counter < $countermax ; $counter++)
          {
              $previous = $s;
              $s = ($s + ($temp/$s))/2;

             if($previous == $s)
              {
                breacounter;
              }

          }

        return $s;

    }
}

?>
