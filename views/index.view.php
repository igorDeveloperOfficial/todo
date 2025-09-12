<?php
    require base_path('views/partials/header.php');
?>

<div class="container">

    <div class="row vh-100 d-flex flex-column align-items-center justify-content-center">

        <div class="col-5 mx-auto border p-3 mt-5">
            <form action="/create" method="post" class="form ">
                <div class="form-group my-3">
                    <input type="text" class="form-control" name="task" id="task" placeholder="Add new task">
                </div>

                <button class="btn btn-primary form-control">Add</button>
            </form>

        </div>
        <div class="col-5 mx-auto">
            <h1 class="text-center">Todo List:</h1>
            <ul class="list">
                <li><span class="task-content">Task</span>
                    <span id="1" class="text-waring mr-3 icons">

                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="edit-icon" id="1">
  <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
</svg>



                    </span>

                    <a href="/delete" class="text-danger">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="delete-icon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5m6 4.125 2.25 2.25m0 0 2.25 2.25M12 13.875l2.25-2.25M12 13.875l-2.25 2.25M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                        </svg>

                    </a>


                    <form action="/edit" class="editForm form mt-3" id="1">
                        <div class="form-group">
                            <input type="text" class="form-control" name="task" id="task" value="Task1">
                        </div>
                        <button class="btn btn-info btn-sm">Save</button>
                    </form>

                    <hr class="border border-dark border-1   opacity-10">
                </li>
                <li><span class="task-content">Task 2</span>
                    <span id="2" class="text-waring mr-3 icons">

                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="edit-icon" id="2">
  <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
</svg>



                    </span>

                    <a href="/delete" class="text-danger">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="delete-icon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5m6 4.125 2.25 2.25m0 0 2.25 2.25M12 13.875l2.25-2.25M12 13.875l-2.25 2.25M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                        </svg>

                    </a>


                    <form action="/edit" class="editForm form mt-3" id="2">
                        <div class="form-group">
                            <input type="text" class="form-control" name="task" id="task" value="Task2">
                        </div>
                        <button class="btn btn-info btn-sm">Save</button>
                    </form>

                    <hr class="border border-dark border-1   opacity-10">
                </li>


            </ul>
        </div>

    </div>
</div>
<?php
require base_path('views/partials/footer.php');
?>

