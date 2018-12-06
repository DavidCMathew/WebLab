<!DOCTYPE html>
<html>
<body>
    <?php
        $states = "Mississippi Alabama Texas Massachusetts Kansas";
        $arr = explode(' ', $states);
        $statesList = array();
        
        $match = preg_grep('/xas$/', $arr);
        $statesList[0] = reset($match);
        
        $match = preg_grep('/^k.*s$/i', $arr);
        $statesList[1] = reset($match);
        
        $match = preg_grep('/^M.*s$/', $arr);
        $statesList[2] = reset($match);
        
        $match = preg_grep('/a$/', $arr);
        $statesList[3] = reset($match);
        
        echo 'Input String: '.$states.'<br />';
        for($i=0;$i<4;$i++)
            echo "stateList[$i]: ".$statesList[$i].'<br />'
    ?>
</body>
</html>