document.addEventListener("DOMContentLoaded", function () {

    const editButtons = document.querySelectorAll(".edit-btn");
    const modal = new bootstrap.Modal(document.getElementById('editBookingModal'));

    editButtons.forEach(btn => {
        btn.addEventListener("click", function () {
            document.getElementById("edit-id").value = this.dataset.id;
            document.getElementById("edit-client").value = this.dataset.client;
            document.getElementById("edit-package").value = this.dataset.package;
            document.getElementById("edit-date").value = this.dataset.date;
            document.getElementById("edit-time").value = this.dataset.time;
            document.getElementById("edit-plan").value = this.dataset.plan;
            document.getElementById("edit-price").value = this.dataset.price;

            modal.show();
        });
    });

});

document.addEventListener("DOMContentLoaded", function () {

    // Delete modal handling
    const deleteButtons = document.querySelectorAll(".delete-btn");
    const deleteModal = new bootstrap.Modal(document.getElementById("deleteBookingModal"));

    deleteButtons.forEach(button => {
        button.addEventListener("click", function () {
            document.getElementById("delete-id").value = this.dataset.id;
            deleteModal.show();
        });
    });

});



