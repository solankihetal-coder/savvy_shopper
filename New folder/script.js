document.getElementById('registrationForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the default form submission

    // Get form values
    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const message = document.getElementById('message').value.trim();
    const documentFile = document.getElementById('document').files[0];

    // Validate form fields
    if (!name || !email || !message || !documentFile) {
        alert('Please fill out all fields and upload a document.');
        return;
    }

    // Optionally, perform additional validations like checking the file type, size, etc.

    // Create a FormData object to handle the form submission with file
    const formData = new FormData();
    formData.append('name', name);
    formData.append('email', email);
    formData.append('message', message);
    formData.append('document', documentFile);

    // Simulate form submission
    document.getElementById('statusMessage').textContent = 'Form submitted successfully!';
    console.log('Form Data:', {
        name: name,
        email: email,
        message: message,
        document: documentFile.name
    });
});
