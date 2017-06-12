
window._ = require('lodash');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

window.$ = window.jQuery = require('jquery');

require('bootstrap-sass');

/**
 * Vue is a modern JavaScript library for building interactive web interfaces
 * using reactive data binding and reusable components. Vue's API is clean
 * and simple, leaving you to focus on building your next great project.
 */

window.Vue = require('vue');

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common = {
    'X-Requested-With': 'XMLHttpRequest'
};

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from "laravel-echo"

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: 'your-pusher-key'
// });

/**
 *  Bootstrap Material Design
 *
 */

//  require('bootstrap-material-design');
// // require('jasny-bootstrap');
// require('jquery-ui');
// require('perfect-scrollbar');
// require('jquery-validation');
// require('chartist');
// require('twitter-bootstrap-wizard');
// require('bootstrap-notify');
// require('eonasdan-bootstrap-datetimepicker');
// require('jvectormap');
// require('nouislider');
// require('@google/maps');
// require('bootstrap-select');
// require('sweetalert2');
// require('fullcalendar');
// require('bootstrap-tagsinput');
// require('moment');
// require('datatables');
// require('bootstrap-datepicker')
// // require('font-awesome');

 require('bootstrap-material-design');
// require('jasny-bootstrap');
require('jquery-ui');
require('perfect-scrollbar');
require('jquery-validation');
require('chartist');
require('twitter-bootstrap-wizard');
require('bootstrap-notify');
require('eonasdan-bootstrap-datetimepicker');
require('jvectormap');
require('nouislider');
// require('@google/maps');
require('bootstrap-select');
require('sweetalert2');
require('fullcalendar');
require('bootstrap-tagsinput');
require('moment');
require('datatables');
require('bootstrap-datepicker')
