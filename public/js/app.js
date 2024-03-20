document.addEventListener('DOMContentLoaded', function () {
    // This function could be expanded to initialize any JavaScript components or custom functionality.
    // For now, it's a placeholder for future JavaScript enhancements.

    // Example: Confirmation dialog for deleting an event
    const deleteButtons = document.querySelectorAll('.btn-danger');

    deleteButtons.forEach(button => {
        button.addEventListener('click', function (event) {
            const confirmDeletion = confirm('Are you sure you want to delete this event?');
            if (!confirmDeletion) {
                event.preventDefault(); // Prevent the form from being submitted
            }
        });
    });

    // Additional JavaScript functionality can be added here as needed.
});
