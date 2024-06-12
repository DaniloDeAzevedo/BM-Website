///////////////////////////////////////////////////////////////
// Sign Up Password match logic
document.addEventListener("DOMContentLoaded", function() {
    var passwordError = document.getElementById("password-error");

    var registerForm = document.getElementById("register-form");
    if (registerForm) {
        registerForm.addEventListener("submit", function(event) {
            var password = document.getElementById("register-password").value;
            var confirmPassword = document.getElementById("register-confirm-password").value;

            if (password !== confirmPassword) {
                passwordError.style.display = "block";
                event.preventDefault(); // Prevent form submission
                alert('Confirmed password did not match password');
            } else {
                passwordError.style.display = "none";
            }
        });
    }
});

///////////////////////////////////////////////////////////////
//Animations and menu panel

let menu = document.querySelector('#menu-icon'); //Selects the element with id 'menu-icon'
let navMenu = document.querySelector('.navMenu'); //Selects the first element with class 'navMenu'

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
//Add cart items (From homepage/index)

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
                          console.log(data);
                          alert('Item added to cart successfully');
                      })
                      .catch(error => console.error('Error:', error));
                  }
              }
          });
      });
  }
});

///////////////////////////////////////////////////////////////
//Add cart items (From product-list)

document.addEventListener('DOMContentLoaded', function() {
    // Check if we're on the specific page
    if (window.location.pathname === '/product-list.php') {
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
                            console.log(data);
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
// Update Cart items

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
                          console.log(data); 
                          alert('Item updated successfully');
                          location.reload(); //Reload the page after update
                      })
                      .catch(error => console.error('Error:', error));
                  }
              }
          });
      });
  }
});

////////////////////////////////////////////////////////////////
//Remove cart items

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
                    console.log(data);
                    location.reload();
                })
                .catch(error => console.error('Error:', error));
            });
        });
    }
});

////////////////////////////////////////////////////////////////
// Newsletter logic
document.addEventListener('DOMContentLoaded', function() {
    // Get the form with the newsletter subscription
    const form = document.querySelector('.newsletter form');

    if (form) {
        form.addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the default form submission

            // Capture form data
            const formData = new FormData(form);

            // Send form data via fetch API
            fetch('subscribe.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                // Create a message div
                const messageDiv = document.createElement('div');
                messageDiv.textContent = data;
                if (data.includes('Successfully')) {
                    messageDiv.style.color = 'green';
                } else {
                    messageDiv.style.color = 'red';
                }
                document.querySelector('.newsletter-content').appendChild(messageDiv);
            })
            .catch(error => {
                const messageDiv = document.createElement('div');
                messageDiv.textContent = 'An error occurred. Please try again.';
                messageDiv.style.color = 'red';
                document.querySelector('.newsletter-content').appendChild(messageDiv);
                console.error('Error:', error);
            });
        });
    }
});

////////////////////////////////////////////////////////////////
//total cost and items calculations and logic

document.addEventListener('DOMContentLoaded', function() {
    // Check if total items and total cost are passed in the URL
    const urlParams = new URLSearchParams(window.location.search);
    const totalItems = urlParams.get('total_items');
    const totalCost = urlParams.get('total_cost');

    if (totalItems && totalCost) {
        document.getElementById('total-items').innerText = `${totalItems} items`;
        document.getElementById('total-cost').innerText = `R ${(totalCost - 100).toFixed(2)}`;
        document.getElementById('final-cost').innerText = `R ${totalCost}`;
    }
});

////////////////////////////////////////////////////////////////
//Checkout form validation

function validateForm() {
    var name = document.getElementById("name").value;
    var mobile = document.getElementById("mobile").value;
    var province = document.getElementById("province").value;
    var city = document.getElementById("city").value;
    var street = document.getElementById("street").value;
    var cardname = document.getElementById("cardname").value;
    var cardnumber = document.getElementById("cardnumber").value;
    var expmonth = document.getElementById("expmonth").value;
    var expyear = document.getElementById("expyear").value;
    var cvv = document.getElementById("cvv").value;
    var paymenttype = document.getElementById("paymenttype").value;

    if (name == "" || mobile == "" || province == "" || city == "" || street == "" || cardname == "" || cardnumber == "" || expmonth == "" || expyear == "" || cvv == "" || paymenttype == "") {
        alert("Please fill out all fields");
        return false;
    }
    alert("Payment Successful!");
    return true;
}
