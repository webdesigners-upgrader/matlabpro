document.getElementById('pages').addEventListener('input', function () {
    // Get the number of pages and calculate the cost
    const pages = parseInt(this.value) || 0; // Default to 0 if NaN
    const cost = pages * 7;

    // Display the total cost
    document.getElementById('totalCost').innerText = `Total Cost: $${cost}`;
});

const serviceSelect = document.getElementById('service');
const pagesInput = document.getElementById('pages');
const pagesContainer = document.getElementById('pagesContainer');
const attachmentsContainer = document.getElementById('attachmentsContainer');
const totalCostElement = document.getElementById('totalCost');
const pricingForm = document.getElementById('pricingForm');
const attachmentsInput = document.getElementById('attachments');

// Update total cost dynamically based on service selection and number of pages for assignment help
serviceSelect.addEventListener('change', function() {
    const selectedService = serviceSelect.value;

    if (selectedService === 'assignment_help') {
        // Show pages input and attachments input for assignment help
        pagesContainer.style.display = 'block';
        attachmentsContainer.style.display = 'block';
        pagesInput.setAttribute('required', 'true');
        attachmentsInput.setAttribute('required', 'true');
        updateCost(); // Call cost calculation function
    } else {
        // Hide pages input and set fixed cost of $70 for other services
        pagesContainer.style.display = 'none';
        attachmentsContainer.style.display = 'none';
        pagesInput.removeAttribute('required');
        attachmentsInput.removeAttribute('required');
        totalCostElement.innerText = `Project Cost: $70`; // Fixed cost for non-assignment help
    }
});

// Calculate the cost for assignment help when pages are entered
pagesInput.addEventListener('input', function() {
    if (serviceSelect.value === 'assignment_help') {
        updateCost();
    }
});

// Update the cost dynamically for assignment help
function updateCost() {
    const pages = parseInt(pagesInput.value) || 0;
    const cost = pages * 7; // $7 per page for assignment help
    totalCostElement.innerText = `Project Cost: $${cost}`;
}

// Ensure that at least one file is uploaded if "Assignment Help" is selected
pricingForm.addEventListener('submit', function(event) {
    if (serviceSelect.value === 'assignment_help') {
        if (attachmentsInput.files.length < 1) {
            alert('Please upload at least one attachment.');
            event.preventDefault(); // Prevent form submission
        }
    }
});





  


