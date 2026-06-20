const addBtn = document.getElementById("addBtn");
const taskInput = document.getElementById("taskInput");
const taskList = document.getElementById("taskList");

addBtn.addEventListener("click", function () {

    const task = taskInput.value.trim();

    if(task === ""){
        alert("Silakan masukkan tugas terlebih dahulu.");
        return;
    }

    const li = document.createElement("li");

    li.innerHTML = `
        <span>${task}</span>
        <button class="delete-btn">Hapus</button>
    `;

    li.querySelector(".delete-btn").addEventListener("click", function(){
        li.remove();
    });

    taskList.appendChild(li);

    taskInput.value = "";
});