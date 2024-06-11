//Selects elements from the Document Object Model (DOM) and assigns them to variables
let menu = document.querySelector('#menu-icon'); //document: HTML doc; querySelector method: returns the 1st ele within the doc that matches the specified CSS selector
let navMenu = document.querySelector('.navMenu');

//Whenever the menu ele is clicked the code inside the arrow function is executed
menu.onclick = () => {
    //If menu ele already has the bx-x class, its removed. Inverse happens otherwise.
    menu.classList.toggle('bx-x');
    //If navlist ele already has the open class, its removed. Inverse happens otherwise.
    navMenu.classList.toggle('open');
}

window.onscroll = () => {
    //Removes bx-x class from menu ele
    menu.classList.remove('bx-x');
    //Removes open class from navlist ele
    navMenu.classList.remove('open');
}

//Adds a click event listener to each <img> ele within an ele with the class "colPromo-img"
document.querySelectorAll('.colPromo-img img').forEach(img => { //Selects all <img> ele inside an element with the class colPromo-img and loops over them using forEach. Executes function inside {} for each <img>
    img.addEventListener('click', function() {  //Adds click event listener to each <img> ele. Upon <img> ele click, function inside the "addEventListener" is executed
      document.getElementById('fullpage').style.backgroundImage = 'url(' + img.src + ')';   //Sets the background image of the "fullpage" ele to clicked image
      document.getElementById('fullpage').style.display = 'block';  //Sets "display" style prop of the ele (id of "fullpage") to "block", making "fullpage" ele visable
    });
  });


///////////////////////////////////////////////////////////////

document.addEventListener('DOMContentLoaded', function() {
  // Check if we're on the specific page
  if (window.location.pathname === '/index.php') {
      // Get all forms with the class 'add-form'
      const forms = document.querySelectorAll('form[id^="add-form-"]');
      // Loop through each form and attach event listener
      forms.forEach(function(form) {
          form.addEventListener('submit', function(event) {
              event.preventDefault(); // Prevent the default form submission

              // Capture form data
              const formData = new FormData(form);

              // Loop through form data entries
              for (const entry of formData.entries()) {
                  const fieldName = entry[0]; // Get the name of the form field
                  const fieldValue = entry[1]; // Get the value of the form field

                  if (fieldName == 'counter' && fieldValue != null) {

                      fetch('add_cart_items.php', {
                          method: 'POST',
                          body: formData
                      })
                      .then(response => response.text())
                      .then(data => {
                          console.log(data); // You can process the response here
                          alert('Item added to cart successfully');
                      })
                      .catch(error => console.error('Error:', error));
                  }
              }
          });
      });
  }
});

////////////////////////////////////////////////////////////////

document.addEventListener('DOMContentLoaded', function() {
  // Check if we're on the specific page
  if (window.location.pathname === '/shopping-cart.php') {
      // Get all forms with the class 'add-form'
      const forms = document.querySelectorAll('form[id^="update-form-"]');
      // Loop through each form and attach event listener
      forms.forEach(function(form) {
          form.addEventListener('submit', function(event) {
              event.preventDefault(); // Prevent the default form submission

              // Capture form data
              const formData = new FormData(form);

              // Loop through form data entries
              for (const entry of formData.entries()) {
                  const fieldName = entry[0]; // Get the name of the form field
                  const fieldValue = entry[1]; // Get the value of the form field
                  
                  if (fieldName == 'counter' && fieldValue != null) {
                      fetch('update_cart_items_qty.php', {
                          method: 'POST',
                          body: formData
                      })
                      .then(response => response.text())
                      .then(data => {
                          console.log(data); // You can process the response here
                          alert('Item updated successfully');
                      })
                      .catch(error => console.error('Error:', error));
                  }
              }
          });
      });
  }
});

////////////////////////////////////////////////////////////////

document.addEventListener('DOMContentLoaded', function() {
    // Check if we're on the specific page
    if (window.location.pathname === '/shopping-cart.php') {
        // Handle remove item forms
        const removeForms = document.querySelectorAll('form[action="remove_cart_items.php"]');
        removeForms.forEach(function(form) {
            form.addEventListener('submit', function(event) {
                event.preventDefault(); // Prevent the default form submission

                // Capture form data
                const formData = new FormData(form);

                // Send AJAX request to remove item
                fetch('remove_cart_items.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.text())
                .then(data => {
                    console.log(data); // Log the response

                    // // Show a success message
                    // alert('Item removed successfully');

                    // // Optionally update the UI to reflect the change
                    // const cartItem = form.closest('.cart-item');
                    // if (cartItem) {
                    //     cartItem.remove();
                    // }
                    
                    location.reload();

                })
                .catch(error => console.error('Error:', error));
            });
        });
    }
});


