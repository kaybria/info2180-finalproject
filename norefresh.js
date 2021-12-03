$(document).ready(function() {
    // if a navigation link is clicked load the page
    $("nav a").on('click', function(event) {
        event.preventDefault();
    
        let page = $(this).attr("href");
        
        // Use the History API to update the browser history with the
        // new URL so we can use the browser back and forward buttons
        let stateObj = { page: formatForUrl(page) };
        history.pushState(stateObj, null, formatForUrl(page));
    
        // load the page and put it's contents in the main element.
        requestContent(page);
    
        // Update the page title in the browser tab
        document.title = 'My AJAX Web Page | ' + formatForUrl(page);
    
        // Update active class on navigation links
        removeActiveClass();
        $(event.target).parent().addClass('active');
      });
  
})
    