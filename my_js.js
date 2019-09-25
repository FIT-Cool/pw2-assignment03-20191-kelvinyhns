function deleteInsurance(id) {
    var confirmation = window.confirm("Are you sure to want to delete?");
    window.location = "index.php?menu=genre&delcom=1&id=" + id
}

function updateInsurance(id) {
    window.location = "index.php?menu=blu&id=" +id;
}

function deletePatient(id) {
    var confirmation = window.confirm("Are you sure to want to delete?");
    window.location = "index.php?menu=genre&delcom2=1&id=" + id
}

function updatePatient(id) {
    window.location = "index.php?menu=blu2&id=" +id;
}