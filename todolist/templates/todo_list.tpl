{include "templates/header.tpl" }
    
    {include "vue/task_list.tpl" }

    
        <form id="form-task" method="POST">
        <input type="text" name="detail"  placeholder="New Task" id="detail" required>
        <input type="submit" name="Add" value="Add" id="add">
        </form>
    


{include "templates/footer.tpl" }