
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

