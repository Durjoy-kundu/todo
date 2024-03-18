
const taskForm = document.getElementById("task-form");
const taskInput = document.getElementById("task-input");
const taskList = document.getElementById("task-list");
const toggleMode = document.getElementById("toggle-mode");

// Add task
taskForm.addEventListener("submit", function (e) {
  e.preventDefault();
  const taskText = taskInput.value;
  if (taskText.trim() !== "") {
    const taskItem = document.createElement("li");
    taskItem.innerHTML = `
      <span class="task-text">${taskText}</span>
      <button class="delete-btn">X</button>
    `;
    taskList.appendChild(taskItem);
    taskInput.value = "";
  }
});

// Delete task
taskList.addEventListener("click", function (e) {
  if (e.target.classList.contains("delete-btn")) {
    e.target.parentElement.remove();
  }
});


toggleMode.addEventListener("change", function () {
  if (toggleMode.checked) {
    document.body.classList.add("dark-mode");
  } 
  else {
    document.body.classList.remove("dark-mode");
  }
});

// Check initial mode based on user preference
const prefersDarkMode = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
toggleMode.checked = prefersDarkMode;
if (prefersDarkMode) {
  document.body.classList.add("dark-mode");
}


