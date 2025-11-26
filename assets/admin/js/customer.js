
document.addEventListener("DOMContentLoaded", function () {

    const editButtons = document.querySelectorAll(".edit-cust-btn");
    const modal = new bootstrap.Modal(document.getElementById('editCustomerModal'));

    editButtons.forEach(btn => {
        btn.addEventListener("click", function () {

            document.getElementById("edit-id").value = this.dataset.id;
            document.getElementById("edit-name").value = this.dataset.name;
            document.getElementById("edit-email").value = this.dataset.email;

            modal.show();
        });
    });

});

document.addEventListener("DOMContentLoaded", function () {

    // Open the EDIT modal
    const editButtons = document.querySelectorAll(".edit-cust-btn");
    const editModal = new bootstrap.Modal(document.getElementById('editCustomerModal'));

    editButtons.forEach(btn => {
        btn.addEventListener("click", function () {
            document.getElementById("edit-id").value = this.dataset.id;
            document.getElementById("edit-name").value = this.dataset.name;
            document.getElementById("edit-email").value = this.dataset.email;
            editModal.show();
        });
    });

    // Open the DELETE modal
    const deleteButtons = document.querySelectorAll(".delete-cust-btn");
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteCustomerModal'));

    deleteButtons.forEach(btn => {
        btn.addEventListener("click", function () {
            document.getElementById("delete-id").value = this.dataset.id;
            deleteModal.show();
        });
    });

});



