console.log("Hello world")
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
        if(form == null){
            return;
        }
        form.classList.toggle('activeForm');
    })
})

taskContent.forEach(task => {
    task.addEventListener('click', (e)=>{
        if(!e.target.classList.contains('line-through')){
            e.target.classList.add("line-through")
            id = e.target.id;
            markAsFinished(id)
        }
        e.preventDefault();


    })
})


function markAsFinished(taskId){
    console.log("radi")
    fetch('/update',{
        method:"POST",
        headers:{
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body:'id='+taskId
    }).then(response => response.text())
        .then(data => {
            console.log("Server: " + data);
            window.location.reload()
        })
        .catch(error => {
            console.error("Error:", error);
        });

}