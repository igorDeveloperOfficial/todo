const icons = document.querySelectorAll('.icons');
const hiddenEditForm = document.querySelectorAll('.editForm');
const taskContent = document.querySelectorAll('.task-content');
function showForm(formId){
   for(let form of hiddenEditForm){
       if(form.id === formId){
           return form;
       }
   }
   return false;
}

icons.forEach(icon => {
    icon.addEventListener('click', (e)=>{
        let id = e.target.id;
     let form = showForm(id) ?? null;
        form.classList.toggle('activeForm');
    })
})

taskContent.forEach(task => {
    task.addEventListener('click', (e)=>{
        e.target.classList.toggle('line-through');
    })
})