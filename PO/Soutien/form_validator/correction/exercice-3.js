import { Task } from "./task.js";

function addToList(taskList) {
    let taskInput = document.querySelector("#task");
    let taskValue = taskInput.value;

    if(taskList.length < 5) {
        let task = new Task(taskList.length, taskValue, false);
        taskList.push(task);
        displayTaskList(taskList);
    }
    else
    {
        alert("Nombre maximal de tâches atteint.");
    }

}

function displayTaskList(taskList) {
    console.log(taskList);
    let ul = document.querySelector("ul");

    ul.innerHTML = "";

    taskList.forEach(task => {
        let li = document.createElement("li");
        li.setAttribute("task-id", task.id);
        let liText = document.createTextNode(task.name);

        if(task.done === true)
        {
            li.style.textDecoration = "line-through";
        }

        li.appendChild(liText);
        ul.appendChild(li);

        li.addEventListener("click", (event) => {
            let clickedLi = event.target;
            let index = clickedLi.getAttribute("task-id");

            if (taskList[index].done === true)
            {
                taskList[index].done = false;
            }
            else
            {
                taskList[index].done = true;
            }

            displayTaskList(taskList);
        })
    })
}

window.addEventListener("DOMContentLoaded", () => {

    let taskList = [

    ];

    displayTaskList(taskList);

    let form = document.querySelector("form");
    form.addEventListener("submit", (event) => {
        event.preventDefault();

        addToList(taskList);

    })
});