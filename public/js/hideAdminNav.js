let hideNavSide = document.getElementById('hideNavSide')
let showNavPanel = document.getElementById('showNavPanel')
let menu = document.getElementsByClassName('leftside-menu')
showNavPanel.addEventListener('click', () =>{
    document.documentElement.classList.add('sidebar-enable');
    document.body.style.overflow = 'hidden';
    const e = document.createElement('div');
    e.id = 'custom-backdrop';
    e.classList.add('offcanvas-backdrop', 'fade', 'show');

    // Append the backdrop to the body
    document.body.appendChild(e);

    // Disable body scrolling
    document.body.style.overflow = 'hidden';

    // Adjust padding for wider screens
    if (window.innerWidth > 767) {
        document.body.style.paddingRight = '15px';
    }

    // Event listener for the backdrop click
    e.addEventListener('click', function() {
        // Remove the sidebar-enable class from html
        document.documentElement.classList.remove('sidebar-enable');

        // Remove the backdrop element
        e.remove();

        // Re-enable body scrolling
        document.body.style.overflow = '';

        // Reset body padding
        if (window.innerWidth > 767) {
            document.body.style.paddingRight = '';
        }
    });
})

// Add click event listener to the slider span element
// showHideButton.querySelector('.slider').addEventListener('click', function() {
//     showNavState = !showNavState;
//     if (showNavState === true) {
//         navBar.style.display = 'block';
//         showNavState = true;
//     } else {
//         navBar.style.display = 'none';
//         showNavState = false;
//     }
// });
// let showStripe = true
hideNavSide.addEventListener('click', () =>{
    console.log(menu[0].clientWidth)
    if (menu[0].clientWidth !== 70){
        document.getElementById('stripeLogo').style.display = 'none'
    }else{
        document.getElementById('stripeLogo').style.display = 'block'
    }
})

