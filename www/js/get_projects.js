var projects;
var filterFields;
var tags;

function showAllProjects() {
    var i;
    for (i = 0; i < projects.length; i++) {
        projects[i].style.display = "inline";
    }
}

function filter() {
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

function findGetParameter(parameterName) {
    var result = null,
        tmp = [];
    var items = location.search.substr(1).split("&");
    for (var index = 0; index < items.length; index++) {
        tmp = items[index].split("=");
        if (tmp[0] === parameterName) result = decodeURIComponent(tmp[1]);
    }
    return result;
}

function setFilterField(filterField) {
    var i;
    for (i = 0; i < filterFields.length; i++) {
        if(filterFields[i].value == filterField) {
            filterFields[i].checked = true;
        }
    }
}

function handleGetRequest() {
    var parameter = findGetParameter("filter");
    if (filter) {
        setFilterField(parameter);
        filter();
    }
}

document.addEventListener("DOMContentLoaded", function (event) {
    projects = document.getElementsByClassName('project');
    filterFields = document.getElementsByClassName('filterField');
    tags  =  document.getElementsByClassName('tags');

    var _selector = document.querySelector('ul');
    _selector.addEventListener('change', function (event) {
        showAllProjects();
        filter();
    });
    handleGetRequest();
});
