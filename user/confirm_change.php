<?php 
// require "../database/Task.php";
// $task_mess = new Task;
// $task_mess = $task_mess -> get_task($_POST['get']);


?>
 <form class="modal_block_new" method="post" id="modal_confirm">
<div class="headline r3 c2" id="headline_modal">Вы точно хотите отметить задачу невыполненной?</div>
         <input type="hidden" value="<?=$_POST['search']?>" name="search">
         <input type="hidden" value="<?=$_POST['filter']?>" name="filter">
         <input type="hidden" value="<?=$_POST['sort']?>" name="sort">
         <!-- <input class="r3 c2 inputTextModal" placeholder="Введите заголовок задачи..." name="title" required value="<?=$task_mess[0][2]?>"> -->
         <!-- <textarea class="r3 c2 textarea" name="description" readonly style="height:350%;"><?=$task_mess[0][3]?></textarea>-->
         <input type="hidden" value="<?=$_POST['form'][0]?>" name="id"> 
         <input type="hidden" value="<?=$_POST['form'][1]?>" name="checkbox"> 
         <input type="submit" class="r7 c2 inputSubmitModal w32" value="ДА">
         <div class="r7 c2 cancelModal" id="cancel4" style="justify-self:center"><div>НЕТ</div></div>
 </form>
 <script src="js/for_confirm.js"></script>
         <script src="js/script.js"></script>
        
