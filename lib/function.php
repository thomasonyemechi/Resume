<?php 



    function Alert()
    {
        global $report, $count;
        if ($count > 0) {

            echo '<div id="aal" class="alert alert-danger alert-dismissible" style="position:fixed; top:10px; right:10px; z-index:100000">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <i class="icon fa fa-ban"></i>   &nbsp;&nbsp;<b>' . $report . ' </b>&nbsp;&nbsp;&nbsp;
              </div>';


        } else {
            echo '<div id="aal" class="alert alert-success alert-dismissible" style="position:fixed; top:10px; right:10px; z-index:100000">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <i class="icon fa fa-check"></i>  &nbsp;&nbsp;<b>' . $report . '</b>&nbsp;&nbsp;&nbsp;&nbsp;
              </div>';
        }

        echo "<script>
        	setTimeout( function () {
        		document.getElementById('aal').hide()
        		}, 3000)
         </script>";
        return;
    }
