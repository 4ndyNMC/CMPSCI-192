<!DOCTYPE html>
<html>
<body>
    <div>
        <?php
        class dbclass{
            function read(String $dbpath,String $key){
                if(dba_open($dbpath,"r","gdbm")){
                    $dbp=dba_open($dbpath,"r","gdbm");
                    if(dba_fetch($key,$dbp)){
                        return dba_fetch($key,$dba);
					}else throw new Exception("Error: That key does not exist!",404);
                    dba_close($dbp);
				}else throw new Exception("Error: Database does not exist!",404);
			}
            function write(String $dbpath,String $key,String $content){
                if(dba_open($dbpath,"r","gdbm")){
                    $dbp=dba_open($dbpath,"r","gdbm");
                    dba_insert($key,$content,$dbh)
                    dba_close($dbp);
				}else throw new Exception("Error: Database does not exist!",404);
			}
		}
        ?>
    </div>
</body>
</html>