const addFormUser = document.getElementById("add-user-form");
const addFormMember = document.getElementById("add-menber-form");
const showAlert = document.getElementById("showAlert");
// const addModal = new bootstrap.Modal(document.getElementById("addNewUserModal"));
const tbody = document.querySelector("tbody");
const updateForm = document.getElementById("edit-user-form");
// const editModal = new bootstrap.Modal(document.getElementById("editUserModal"));

function ssss(){
    swal({
        title: "Are you sure?",
        text: "Do you want to remove ?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, delete it!",
        closeOnConfirm: false
      },
      function(){
        axios
          .post("action.php", {
            action: "getdeleteUser",
            id: id,
          })
          .then(function (res) {
            swal("Deleted!", "Your imaginary file has been deleted.", "success");
            console.log(res.data.message);
            windowload();
          });
      });
}

addFormUser.addEventListener("submit", async (e) => {
    
    e.preventDefault();

    const formData = new FormData(addFormUser);
    formData.append("adduser", 1);

    if (addFormUser.checkValidity() === false) {
        e.preventDefault();
        e.stopPropagation();
        addFormUser.classList.add("was-validated");
        
        return false;
    } else {
        
        const data = await fetch("action.php", {
            method: "POST",
            body: formData
        })
        .then(function (res) {
            console.log(res);
            Swal.fire("Registration completed!", "You clicked the button!", "success");
            setTimeout(function(){
                
                location.href="login.php"
            } , 2000);   
        });
        // const response = await data.text();
        // showAlert.innerHTML = response;
        // document.getElementById("add-user-btn").value = "Add User";
        // addFormUser.reset();
        // addFormUser.classList.remove("was-validated");
        // addModal.hide();
        // fetchAllUsers();
        
    }

})

// const fetchAllUsers = async () => {
//     const data = await fetch("action.php?read=1", {
//         method: "GET"
//     })
//     const response = await data.text();
//     tbody.innerHTML = response;
// }
// fetchAllUsers();

// tbody.addEventListener("click", (e) =>{
//     if (e.target && e.target.matches("a.editlink")) {
//         e.preventDefault();
//         let id = e.target.getAttribute("id");
//         editUser(id);
//     }
// })

const editUser = async (id) => {
    const data = await fetch(`action.php?edit=1&id=${id}`, {
        method: "GET"
    })
    const response = await data.json();
    document.getElementById("id").value = response.id;
    document.getElementById("fname").value = response.first_name;
    document.getElementById("lname").value = response.last_name;
    document.getElementById("email").value = response.email;
    document.getElementById("phone").value = response.phone;
    
}

// updateForm.addEventListener("submit", async (e) => {
//     e.preventDefault();

//     const formData = new FormData(updateForm);
//     formData.append("update", 1);

//     if (updateForm.checkValidity() === false) {
//         e.preventDefault();
//         e.stopPropagation();
//         updateForm.classList.add("was-validated");
//         return false;
//     } else {
//         document.getElementById("edit-user-btn").value = "Please Wait...";

//         const data = await fetch("action.php", {
//             method: "POST",
//             body: formData
//         })
//         const response = await data.text();
//         showAlert.innerHTML = response;
//         document.getElementById("edit-user-btn").value = "Edit User";
//         updateForm.reset();
//         updateForm.classList.remove("was-validated");
//         editModal.hide();
//         fetchAllUsers();
//     }
// })

// tbody.addEventListener("click", (e) =>{
//     if (e.target && e.target.matches("a.deletelink")) {
//         e.preventDefault();
//         let id = e.target.getAttribute("id");
//         deleteUser(id);
//     }
// })

// const deleteUser = async (id) => {
//     const data = await fetch(`action.php?delete=1&id=${id}`, {
//         method: "GET"
//     })
//     const response = await data.text();
//     showAlert.innerHTML = response;
//     fetchAllUsers();
// }