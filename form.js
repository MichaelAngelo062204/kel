document.addEventListener('DOMContentLoaded', function() {

    const showBtn = document.querySelector('.showBtn');
    const onboardList = document.querySelector('.onboard-container');


    onboardList.style.display = 'none';


    showBtn.addEventListener('click', function(event) {

        event.preventDefault();
        
 
        if (onboardList.style.display === 'none') {
    
            onboardList.style.display = 'block';
         
            const formFields = document.querySelectorAll('input[required], select[required]');
            formFields.forEach(field => {
                field.removeAttribute('required');
            });
        } else {
       
            onboardList.style.display = 'none';
  
            const formFields = document.querySelectorAll('input[required], select[required]');
            formFields.forEach(field => {
                field.setAttribute('required', true);
            });
        }
    });
});