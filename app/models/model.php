<?php 
namespace coding\app\models;
use coding\app\system\AppSystem;
class Model{
    public static  $tblName;
   
    private $final_query;
   
   public $final;
    function save():bool{
        
      
        $values=array();
        $columns=array();
     
        foreach(get_object_vars($this) as $key=> $property){
            //echo $property;
            if($property!=self::$tblName&&$property!=$this->final_query)
            {
                $values[]=is_string($property)?"'".$property."'":$property;
                $columns[]=$key;}

        }
        $values=implode(",",$values);
        $columns=implode(",",$columns);
       $sql_query="insert into ".self::$tblName." (".$columns." ) values (".$values.")";
   echo $sql_query;
   
        $stmt=AppSystem::$appSystem->database->pdo->prepare($sql_query);
        if($stmt->execute())
        {
        
             return false;
        }
        else  echo "Error";
       
        return false;
       // return true;
     //echo $sql_query;
    }





    public function update($id){



      $values=array();
      $columns=array();
    
      
      foreach(get_object_vars($this) as $key=> $property){
        //echo $property;
        if($property!=self::$tblName&&$property!=$this->final_query)
        {
            $values[]=is_string($property)?"'".$property."'":$property;
            $columns[]=$key;
          }

    }


     for($i = 0; $i < 10; $i++)
     {
      $this->final.=$columns[$i]." = ".$values[$i].",";
     }

     echo  $this->final;
     
     echo '<hr>';
     $query = substr( $this->final, 0, -1);
   
     $sql_query="update ".self::$tblName." set ".$query." where id =".$id;
   

 
      $stmt=AppSystem::$appSystem->database->pdo->prepare($sql_query);
     if($stmt->execute())
      {
      
           return false;
      }
     else  echo "Error";
     
      return false;
    
      }
  
    
      public function delete($id){
        $sql_query="delete from ".self::$tblName." where id=".$id."";
       //echo $sql_query;
         $stmt=AppSystem::$appSystem->database->pdo->prepare($sql_query);
        $stmt->execute();
        return false;
       

    }



    public function getAll(){
        $sql_query="select * from ".self::$tblName."";
        $stmt=AppSystem::$appSystem->database->pdo->prepare($sql_query);
        $stmt->execute();
        return $stmt->fetchAll();

    }
    
    
   
  /******** Run Query ******* */
  function runQuery()
  {
    $stmt=AppSystem::$appSystem->database->pdo->prepare($this->final_query);
    if($stmt->execute())
    {
    
         return false;
    }
    else  echo "Error";
   
    return false;
    // echo $this->final_query;
    return $stmt->fetchAll(\PDO::FETCH_OBJ);
  }
  
  
  
    /******** insert FUNCTION ******* */
    function insert($table_name,$data)
    {


      $query = "INSERT INTO ".$table_name." (";            
      $query .= implode(",", array_keys($data)) . ') VALUES (';            
      $query .= "'" . implode("','", array_values($data)) . "')";
      $this->final_query = $query ;
     return $this;
    }
  
     /******** QUERY FUNCTION ******* */
     
     function select($table,$list=null)
     {
       if(!$list)
      $this->final_query="select * from $table";
      else
     $this->selectlist($table,$list);
       return $this;
     }
     
     function selectlist($table,$list)
     {
    
      $this->final_query =implode(",",$list);
      $this->final_query ="select $this->final_query from $table";
      return $this;
     }
     function selectCount($table,$counted_column,$list) 
     {
      $this->final_query =implode(",",$list);
      $this->final_query ="select count($counted_column) , $this->final_query from $table";
      return $this;
     }
     function where($column,$value)
     {
      $this->final_query.=" where $column = '$value'";
     
      return $this;
     }
     function Or($column,$value)
     {
      $this->final_query.=" Or $column = '$value'";
     
      return $this;
     }
     function And($column,$value)
     {
      $this->final_query.=" And $column = '$value'";
     
      return $this;
     }
  
  
     function orderby($column,$typeOfOrder=null)
     {
      $this->final_query.=" order by $column";
      return $this;
     }
     function groupBy($column)
     {
      $this->final_query.=" group by $column";
    
  
      return $this;
  
     }
     function outerjoin($table2,$T1_column,$T2_column)
     {
       $this->final_query.=" JOIN $table2 on $T1_column = $T2_column ";
      return $this;
     }
  
     
     function innerjoin($table2,$T1_column,$T2_column)
     {
       $this->final_query.=" INNER JOIN $table2 on $T1_column = $T2_column ";
      return $this;
     }
  
     function leftJoin($table2,$T1_column,$T2_column)
     {
       $this->final_query.=" LEFT JOIN $table2 on $T1_column = $T2_column ";
      return $this;
     }
     function rightJoin($table2,$T1_column,$T2_column)
     {
       $this->final_query.=" RIGHT JOIN $table2 on $T1_column = $T2_column ";
      return $this;
     }
  
  
    
  
  public function deleteById($table,$id){
    // $count=$this->pdo->exec("delete from $table set $col='$col_val' where $condit_col='$condit_val'");
  
       $this->final_query=("delete from $table where id =$id");
       return $this;
  
    
  
  }
  
  


      public function getSingleRow($id){
        $sql_query="select * from ".self::$tblName." where id=".$id."";
       
       //echo $sql_query;
         $stmt=AppSystem::$appSystem->database->pdo->prepare($sql_query);
        $stmt->execute();
        return $stmt->fetchObject();
        

    }









}
?>