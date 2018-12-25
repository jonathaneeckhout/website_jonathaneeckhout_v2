function showAllProjects() {
    var projects = document.getElementsByClassName('project');
    console.log('length' + projects.length);
    var i;
    for (i = 0; i < projects.length; i++) {
        projects[i].style.display = "inline";
    }
}

function filter() {
    var filterFields = document.getElementsByClassName('filterField');
    var projects = document.getElementsByClassName('project');
    var tags  =  document.getElementsByClassName('tags');
    var i;
    var j;

    for (i = 0; i < projects.length; i++) {
        for (j = 0; j < filterFields.length; j++) {
            if(filterFields[j].checked) {
                if (!tags[i].innerHTML.includes(filterFields[j].value)) {
                    projects[i].style.display = "none";
                }
            }
        }
    }
}

function filterProjects() {
    showAllProjects();
    filter();
}
