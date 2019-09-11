require('./bootstrap');
window.Vue = require('vue');


//작업용
Vue.component('inno-header',require('./component/inno_header.vue').default);
Vue.component('inno-nav',require('./component/inno_nav.vue').default);
Vue.component('inno-footer',require('./component/inno_footer.vue').default);

new Vue({ el: '#app' })


